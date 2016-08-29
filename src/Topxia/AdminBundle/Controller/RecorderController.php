<?php
/**
 * Created by PhpStorm.
 * User: MZ
 * Date: 2016/8/17
 * Time: 17:20
 */
namespace Topxia\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class RecorderController extends BaseController
{
    public function indexAction(Request $request)
    {
        $time = $this->getTotalTime($request);
        return new Response('登录时长'.$time.'');
    }

    public function addClientUsingLog()
    {
        $this->getUserService()->getClientUsingLogDao();
    }
    /*
     * @return 返回距离登录到现在的时长，单位为秒
     */
    public function getLoginTotalTime($request)
    {
        $loginTime = $request->cookies->get('LoginTime');
        $totalTime = time() - $loginTime;
        return $totalTime;
    }

    /*
    * @return 返回距离点击“看直播”或“点播视频”到现在的时长，单位为秒
    */
    public function getVedioTotalTime($request)
    {
        $vedioTime = $request->cookies->get('VedioTime');
        $totalTime = time() - $vedioTime;
        return $totalTime;
    }

    protected function getUserService()
    {
        return $this->createService('User.UserService');
    }
}