<?php
/**
 * Created by PhpStorm.
 * User: XT
 * Date: 16/4/22
 * Time: 16:36
 */

namespace Custom\WebBundle\Controller;


use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Topxia\WebBundle\Controller\BaseController;

class lpLogoutController extends BaseController
{
    public function indexAction(Request $request)
    {
        $host = $request->server->filter('HTTP_HOST');
        if (preg_match('/.lpmas.org/', $host))
        {
            $domain = ".lpmas.org";
        }
        elseif (preg_match('/.1haowenjian.cn/', $host))
        {
            $domain = ".1haowenjian.cn";
        }
        else
        {
            $domain = '';
        }
        setcookie('suts', '', time() - 3600, "/", $domain);
        setcookie('sut', '', time() - 3600, "/", $domain);
        return $this->redirect($this->generateUrl('logout', array('goto' => 'homepage')));
    }

}