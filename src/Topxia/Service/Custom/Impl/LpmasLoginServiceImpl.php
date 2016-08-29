<?php
namespace Topxia\Service\Custom\Impl;

use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Http\SecurityEvents;
use Symfony\Component\Yaml\Yaml;
use Topxia\Common\Ss_olp;
use Topxia\Common\Sso_lp;
use Topxia\Common\Ssolp;
use Topxia\Common\Test;
use Topxia\Service\Common\BaseService;
use Topxia\Service\Common\ServiceKernel;
use Topxia\Service\Custom\LpmasLoginService;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Http\RememberMe\TokenBasedRememberMeServices;
use Symfony\Component\Security\Http\Event\InteractiveLoginEvent;
use Topxia\Service\User\CurrentUser;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;

/**
 * Created by PhpStorm.
 * User: XT
 * Date: 16/4/14
 * Time: 14:20
 */
class LpmasLoginServiceImpl extends BaseService implements LpmasLoginService
{
    private $container;


    /**
     * @param Request $request
     * @param ContainerInterface $container
     */
    function loginProcess(Request $request, $container)
    {
        //1.passport 获取用户信息
        $userInfo = Ssolp::getUserInfo();
        if (!$userInfo)
        {
            //未登录
            setcookie('PHPSESSID', '', time() - 3600, "/");
            return 0;
        }
        $this->container = $container;
        $fromId = $userInfo['userId'];
        $cuser = $this->getUserService()->getCurrentUser();

        //2.云课堂体系下是否有该用户
        $bind = $this->getUserService()->getUserBindByTypeAndFromId('longping', $fromId);
        //2.1 云课堂体系下无该用户信息，则添加
        $randString = base_convert(sha1(uniqid(mt_rand(), true)), 16, 36);
        if (empty($bind))
        {
            $registration = array(
                'nickname' => $userInfo['userLoginId'],
                'email' => 'u_' . substr($randString, 0, 12) . '@edusoho.net',
                'password' => substr(base_convert(sha1(uniqid(mt_rand(), true)), 16, 36), 0, 8),
                'createdTime' => '',
                'createdIp' => $this->container->get("request")->getClientIp(),
                'token' => array('userId' => $fromId)
            );

            if (!$this->getAuthService()->isRegisterEnabled())
            {
            }
            //------------------------------------
            $serviceName = 'user.info.query';//调用JAVA组同事做的API的服务名
            $serviceMethod = 'POST';//请求方式
            //数据
            $data = array('data' => json_encode(array(
                'userId' => $fromId,
            )));
            $yaml = Yaml::parse(file_get_contents(__DIR__ . '/../../../../Custom/WebBundle/Resources/config/requestParam.yml'));
            $serviceVesion = $yaml['passportServiceVesion'];
            //调用注册服务接口
            $response = $this->getServiceGate()->sendRequest($serviceName, $serviceMethod, $data, $serviceVesion);
            //----------------------------------------
            if (!empty($response['code']) && $response['code'] == '1' && !empty($response['content']))
            {
                $content = json_decode($response['content'], TRUE);
                if (!empty($content['userDataBean']['userAvatarUrl']))
                {
                    $registration['smallAvatar'] = $registration['mediumAvatar'] = $registration['largeAvatar'] = $content['userDataBean']['userAvatarUrl'];
                }
                if (!empty($content['userRegBean']['userLoginPhone']))
                {
                    $registration['mobile'] = $content['userRegBean']['userLoginPhone'];
                }
                if (!empty($content['userInfoBean']['userNickName']))
                {
                    $registration['nickname'] = $content['userInfoBean']['userNickName'];
                }
                elseif (!empty($content['userInfoBean']['userName']))
                {
                    $registration['nickname'] = $content['userInfoBean']['userName'];
                }
                else
                {
                    $registration['nickname'] = substr_replace($content['userRegBean']['userLoginPhone'], '****', 3, 4);;
                }
            }
            $user = $this->getUserService()->register($registration, 'longping');
            $bind = $this->getUserService()->getUserBindByTypeAndFromId('longping', $fromId);
        }
        //2.2 云课堂体系下有该用户信息，当前用户是否与passport一致
        $user = $this->getUserService()->getUser($bind['toId']);
        if (empty($user))
        {
            return 0;
        }
        //passport登陆用户，自动验证手机号码
        if (!empty($user['verifiedMobile']))
        {
            if ($this->getUserService()->isMobileUnique($userInfo['userLoginId']))
            {
                $this->getUserService()->changeMobile($userInfo['userLoginId']);
            }
        }
        //当前
        if ($cuser->isLogin() && $cuser->id == $user['id'])
        {
            return 0;
        }
        $this->loginUser("main", $user);
        $loginTime = time();
        setcookie("LoginTime",$loginTime,time()+12*60*60);
        return 1;
    }

    protected function loginUser($firewallName, $user, Response $response = null)
    {
        $user['currentIp'] = $this->container->get('request')->getClientIp();
        $currentUser = new CurrentUser();
        $currentUser->fromArray($user);

        ServiceKernel::instance()->setCurrentUser($currentUser);

        $token = $this->createToken($firewallName, $currentUser);

//        $config = $this->container->getParameter('remember_me');
        $config['always_remember_me'] = true;

        if (null !== $response)
        {
            $rememberMeServices = new TokenBasedRememberMeServices(
                array($this->container->get('topxia.user_provider')),
                $config['key'],
                $firewallName,
                $config,
                $this->container->get('monolog.logger.security'));

            $rememberMeServices->loginSuccess($this->container->get('request'), $response, $token);
        }

        $this->container->get('security.context')->setToken($token);

        $this->container->get('event_dispatcher')->dispatch(
            SecurityEvents::INTERACTIVE_LOGIN,
            new InteractiveLoginEvent($this->container->get('request'), $token));
    }

    protected function createToken($firewall, $currentUser)
    {
        return new UsernamePasswordToken($currentUser, null, $firewall, $currentUser['roles']);
    }


    protected function getUserService()
    {
        return $this->createService('User.UserService');
    }

    protected function getAuthService()
    {
        return $this->createService('User.AuthService');
    }

    protected function getServiceGate()
    {
        return $this->createService('Custom.ServiceGateService');
    }
}