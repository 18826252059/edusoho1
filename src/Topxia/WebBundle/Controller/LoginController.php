<?php
namespace Topxia\WebBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\SecurityContext;
use Topxia\Component\OAuthClient\OAuthClientFactory;

class LoginController extends BaseController
{

    public function indexAction(Request $request)
    {
        $REQUEST_URI=$request->server->get('REQUEST_URI');
        $HTTP_REFERER=$request->server->get('HTTP_REFERER');
        if(!empty($REQUEST_URI)&&$REQUEST_URI==$this->generateUrl('login'))
        {
            $url = !empty($HTTP_REFERER) ? $HTTP_REFERER : $this->generateUrl('homepage');
        }else{
            $url = !empty($REQUEST_URI) ? $REQUEST_URI : $this->generateUrl('homepage');
        }
        $user = $this->getCurrentUser();
        if ($user->isLogin())
        {
            return $this->redirect("http://" . $request->server->get('HTTP_HOST') . $url);
//            return $this->createMessageResponse('info', '你已经登录了', null, 3000, $url);die;
        }
        $twig = $this->container->get('twig');
        $globals = $twig->getGlobals();
        return $this->redirect($globals['loginurl'] . "?target=http://" . $request->server->get('HTTP_HOST') . $url);

//        if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
//            $error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
//        } else {
//            $error = $request->getSession()->get(SecurityContext::AUTHENTICATION_ERROR);
//        }
//
//        return $this->render('TopxiaWebBundle:Login:index.html.twig',array(
//            'last_username' => $request->getSession()->get(SecurityContext::LAST_USERNAME),
//            'error'         => $error,
//            '_target_path' => $this->getTargetPath($request),
//        ));
    }

    public function ajaxAction(Request $request)
    {
        $twig = $this->container->get('twig');
        $globals = $twig->getGlobals();
        return $this->redirect($globals['loginurl'] . "?target=http://" . $request->server->get('HTTP_HOST') . $request->server->get('REQUEST_URI'));
//        return $this->render('TopxiaWebBundle:Login:ajax.html.twig', array(
//            '_target_path' => $this->getTargetPath($request),
//        ));
    }

    public function checkEmailAction(Request $request)
    {
        $email = $request->query->get('value');
        $user = $this->getUserService()->getUserByEmail($email);
        if ($user)
        {
            $response = array('success' => true, 'message' => '该Email地址可以登录');
        }
        else
        {
            $response = array('success' => false, 'message' => '该Email地址尚未注册');
        }
        return $this->createJsonResponse($response);
    }

    public function oauth2LoginsBlockAction($targetPath, $displayName = true)
    {
        $clients = OAuthClientFactory::clients();
        return $this->render('TopxiaWebBundle:Login:oauth2-logins-block.html.twig', array(
            'clients' => $clients,
            'targetPath' => $targetPath,
            'displayName' => $displayName
        ));
    }

    protected function getTargetPath($request)
    {
        if ($request->query->get('goto'))
        {
            $targetPath = $request->query->get('goto');
        }
        else if ($request->getSession()->has('_target_path'))
        {
            $targetPath = $request->getSession()->get('_target_path');
        }
        else
        {
            $targetPath = $request->headers->get('Referer');
        }

        if ($targetPath == $this->generateUrl('login', array(), true))
        {
            return $this->generateUrl('homepage');
        }

        $url = explode('?', $targetPath);

        if ($url[0] == $this->generateUrl('partner_logout', array(), true))
        {
            return $this->generateUrl('homepage');
        }

        if ($url[0] == $this->generateUrl('password_reset_update', array(), true))
        {
            $targetPath = $this->generateUrl('homepage', array(), true);
        }

        if (strpos($targetPath, '/app.php') === 0)
        {
            $targetPath = str_replace('/app.php', '', $targetPath);
        }

        return $targetPath;
    }


}
