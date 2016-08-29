<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/8/15
 * Time: 15:11
 */
namespace Topxia\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Yaml\Yaml;
use Topxia\Service\Common\BaseService;

class PassportController extends BaseService
{
    protected $sendMessage = '密码是：';

    public function indexAction()
    {
        //只是注册一个而已
//        $code = md5('18826252059s3fs3jha');
//
//        $serviceName = 'user.base.reg';//调用JAVA组同事做的API的服务名
//        $serviceMethod = 'POST';//请求方式
//        //数据
//        $data = array('data' => json_encode(array(
//            'userLoginPhone' => '18826252059',
////            'userPwd' => '123456',
//            'userFrom' => '1',
//            'storeId' => '25',
//            'phoneAuthCode' => $code
//        )));
//        $yaml = Yaml::parse(file_get_contents(__DIR__ . '/../../../Custom/WebBundle/Resources/config/requestParam.yml'));
//        $serviceVesion = $yaml['passportServiceVesion'];
//        //调用注册服务接口
//        $response = $this->getServiceGate()->sendRequest($serviceName, $serviceMethod, $data, $serviceVesion);
//
//        if (!empty($response) && $response['code'] == '1') {
//            return new Response('chenggong!'.$response['content']);
//        } else {
//            return new Response("失败");
//        }

        //SMS TEST--------------------------
        $serviceName = 'ccp.message.sms.send';//调用JAVA组同事做的API的服务名
        $serviceMethod = 'POST';//请求方式

        $data = array('data' => json_encode(array(
            'appCode' => 'XNY',
            'storeId' => '25',
            'mode' => 'CONTENT',
            'content' => 'this is test！',
//            'toUserId' => '236',
            'toMobileNumber' => '18826252059'
        )));
//        $data = array(
//            'storeId'        => 20,
//            'userLoginPhone' => $mobile
//        );
//        $data = 'data=' . urlencode(json_encode($data));
//        $data = array('data' => json_encode(array(
//            'storeId' => '17',
//            "toUserId" => '',
//            'toMobileNumber' => '15817059200',
//            'mode' => 'TEMPLATE',
//            'templateId' => '8',
//            'data' => array('templateId' => '8','userPwd' => '123456','storeId' => '17')
//        )));
//            "storeId":17,
//    "toUserId":"",
//    "toMobileNumber":"15817059200",
//    "mode":"TEMPLATE",
//    "templateId":8,
//    "data":{
//            "templateId":8,
//        "userPwd":"123456",
//        "storeId":17
//    }
//}

        $yaml = Yaml::parse(file_get_contents(__DIR__ . '/../../../Custom/WebBundle/Resources/config/requestParam.yml'));
        $serviceVesion = $yaml['passportServiceVesion'];
        //调用注册服务接口
        $response = $this->getServiceGate()->sendRequest($serviceName, $serviceMethod, $data, $serviceVesion);
        if (!empty($response)){
            if ($response['code'] == '1'){
                return new Response(json_encode($response).'发送成功');
            }
            return new Response(json_encode($response).'fasongdaima');
        } else {
            return new Response('发送失败');
        }
    }

    public function testAction(Request $request){
        //1.passport 获取用户信息
//        $userInfo = getUserInfo($request);//是个数组，不再是单数；
        $userInfo = array();
        $userInfo['userId'] = '9873204343';
        $userInfo['userLoginId'] = '18826252059';
//        $this->container = $container;
        $fromId = $userInfo['userId'];

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
//                'createdIp' => $this->container->get("request")->getClientIp(),
                'createdIp' => $request->getClientIp(),
                'token' => array('userId' => $fromId)
            );

            //------------------------------------
            $serviceName = 'user.info.query';//调用JAVA组同事做的API的服务名
            $serviceMethod = 'POST';//请求方式
            //数据
            $data = array('data' => json_encode(array(
                'userId' => $fromId,
            )));
            $yaml = Yaml::parse(file_get_contents(__DIR__ . '/../../../Custom/WebBundle/Resources/config/requestParam.yml'));
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
//            $bind = $this->getUserService()->getUserBindByTypeAndFromId('longping', $fromId);
        }
        return new Response('注册成功！');
    }
    //批量注册
    public function excelRegisterAction(Request $request){
        $serviceName = 'user.base.reg';//调用JAVA组同事做的API的服务名
        $serviceMethod = 'POST';//请求方式

        $usersData = $request->request->get('data');
        $usersData = json_decode($usersData,true);
        $allUsers = array();//用于记录各个号码注册情况
        foreach ($usersData as $user){
            $phone = $user['nickname'];
            $code = md5($phone.'s3fs3jha');

            $data = array('data' => json_encode(array(
                'userLoginPhone' => $phone,
                'userPwd' => '123456',
                'userFrom' => '1',
                'storeId' => '21',
                'phoneAuthCode' => $code
            )));

            $yaml = Yaml::parse(file_get_contents(__DIR__ . '/../../../Custom/WebBundle/Resources/config/requestParam.yml'));
            $serviceVesion = $yaml['passportServiceVesion'];
            //调用注册服务接口
            $response = $this->getServiceGate()->sendRequest($serviceName, $serviceMethod, $data, $serviceVesion);

            $userInfo = array();//用于记录成功注册passport的userID和userLoginID

            if (!empty($response) && $response['code'] == '1') {
                $userInfo['userId'] = $response['content'];//如果成功就把返回的content即userID赋值给$userInfo
                $userInfo['userLoginId'] = $phone;
                $allUsers[] =$userInfo;
            } else {
                return new Response("失败");
            }

            unset($userInfo);
        }

        return $allUsers;
    }

    /*
     * @return [{code:,userLoginId:,userId:,message:},{}....]
     */
    public function lpmasRegisterAction(Request $request){
        //1.passport 获取用户信息
        $allUsers = $this->getUserInfo($request);//是个数组，不再是单数；
        $allUsers = json_decode($allUsers,true);

        $list = array();

        foreach ($allUsers as $userInfo){
            $item = array();
            $item['phone'] = $userInfo['userLoginId'];
            $item['code'] = $userInfo['code'];

            if ($userInfo['code'] == '1'){
                $fromId = $userInfo['userId'];
                //2.云课堂体系下是否有该用户
                $bind = $this->getUserService()->getUserBindByTypeAndFromId('longping', $fromId);
                //2.1 云课堂体系下无该用户信息，则添加
                $randString = base_convert(sha1(uniqid(mt_rand(), true)), 16, 36);
                if (empty($bind))
                {
                    $randPWD = substr(base_convert(sha1(uniqid(mt_rand(), true)), 16, 36), 0, 8);
                    $registration = array(
                        'nickname' => $userInfo['userLoginId'],
                        'email' => 'u_' . substr($randString, 0, 12) . '@edusoho.net',
                        'password' => $randPWD,
                        'createdTime' => '',
                        'createdIp' => $request->getClientIp(),
                        'token' => array('userId' => $fromId,'subType' => $userInfo['subType'])
                    );

                    //------------------------------------
                    $serviceName = 'user.info.query';//调用JAVA组同事做的API的服务名
                    $serviceMethod = 'POST';//请求方式
                    //数据
                    $data = array('data' => json_encode(array(
                        'userId' => $fromId,
                    )));
                    $yaml = Yaml::parse(file_get_contents(__DIR__ . '/../../../Custom/WebBundle/Resources/config/requestParam.yml'));
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

//                    $item = array();
//                    $item['phone'] = $userInfo['userLoginId'];
                    if (!empty($user)) {
                        $item['password'] = $randPWD;
                    } else {
                        $item['code'] = '100';
                        $item['message'] = '系统错误！';
                    }
                }
            } else {
                $item['message'] = $userInfo['message'];
            }
            $list[] = $item;
            unset($item);

        }
        $list = json_encode($list);
        //发送信息
        $json = $this->sendMessage($list);
//        return $json;
        return $this->render('TopxiaAdminBundle:Import:import.step3.html.twig', array(
            'count' => '',
            'validateRout' => '/',
            'targetObject' => array('id' => 19),
        ));
    }

    protected function sendMessage($list){
        $list = json_decode($list,true);
        $record = array();

        foreach ($list as $value){
            if ($value['code'] == '1'){
                $serviceName = 'ccp.message.sms.send';//调用JAVA组同事做的API的服务名
                $serviceMethod = 'POST';//请求方式
                $message = $this->sendMessage.$value['password'];

                $data = array('data' => json_encode(array(
                    'appCode' => 'XNY',
                    'storeId' => '25',
                    'mode' => 'CONTENT',
                    'content' => $message,
                    'toMobileNumber' => $value['phone']
                )));
                $yaml = Yaml::parse(file_get_contents(__DIR__ . '/../../../Custom/WebBundle/Resources/config/requestParam.yml'));
                $serviceVesion = $yaml['passportServiceVesion'];
                //调用注册服务接口
                $response = $this->getServiceGate()->sendRequest($serviceName, $serviceMethod, $data, $serviceVesion);
                $item = array();
                $item['phone'] = $value['phone'];

                if (!empty($response)){
                    $item['code'] = $response['code'];
                    if ($response['code'] == '0'){
                        $item['password'] = $value['password'];
                        $item['message'] = '系统错误！';
                    }
                } else {
                    $item['code'] = '0';
                    $item['message'] = '系统无响应！';
                }
                $record[] = $item;
                unset($item);
            }
        }
        $record = json_encode($record);
        return $record;
    }
//
    protected function getUserService()
    {
        return $this->createService('User.UserService');
    }

    /*
     * @return：[{code:,userLoginId:,userId:,message:}]
     */
    protected  function  getUserInfo($request){//开通passport
        $serviceName = 'user.base.reg';//调用JAVA组同事做的API的服务名
        $serviceMethod = 'POST';//请求方式
        $pwd = 's3fs3jha';//

        $usersData = $request->request->get('data');
        $usersData = json_decode($usersData,true);
        $allUsers = array();//用于记录各个号码注册情况
        foreach ($usersData as $user){
            $phone = $user['nickname'];
            $code = md5($phone.$pwd);

            $data = array('data' => json_encode(array(
                'userLoginPhone' => $phone,
                'userPwd' => $pwd,
                'userFrom' => '1',
                'storeId' => '21',
                'phoneAuthCode' => $code
            )));

            $yaml = Yaml::parse(file_get_contents(__DIR__ . '/../../../Custom/WebBundle/Resources/config/requestParam.yml'));
            $serviceVesion = $yaml['passportServiceVesion'];
            //调用注册服务接口
            $response = $this->getServiceGate()->sendRequest($serviceName, $serviceMethod, $data, $serviceVesion);

            $userInfo = array();//用于记录成功注册passport的userID和userLoginID
            $userInfo['userLoginId'] = $phone;

            if (!empty($response)) {
                $userInfo['code'] = $response['code'];

                if ($response['code'] == '1'){
                    $userInfo['userId'] = $response['content'];//如果成功就把返回的content即userID赋值给$userInfo
                } else{
                    $userInfo['message'] = $response['message'];
                }

            }
            $userInfo['subType'] = $user['subType'];
            $allUsers[] =$userInfo;
            unset($userInfo);
        }
        $allUsers = json_encode($allUsers);
        return $allUsers;
    }

    protected function getServiceGate()
    {
        return $this->createService('Custom.ServiceGateService');
    }

}
