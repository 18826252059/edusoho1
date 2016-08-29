<?php
/**
 * Created by PhpStorm.
 * User: XT
 * Date: 16/5/25
 * Time: 11:50
 */

namespace Custom\MobileBundle\Controller;


use GuzzleHttp\Client;
use Symfony\Component\HttpFoundation\Request;
use Topxia\Service\User\Impl\UserSerialize;

class UserController extends CustomMobileBaseController
{
    public function userinfoAction(Request $request)
    {
        $this->init($request);
        if(empty($this->formData['userId'])){
            $this->_result['code']=102;
            return $this->createResponse($request);
        }
        $fromId=$this->formData['userId'];
        $bind=$this->getUserService()->getUserBindByTypeAndFromId('longping', $fromId);
//        $user = $this->getCurrentUser();
        if(empty($bind['toId'])){
            $this->_result['data']=array('roles'=>array('ROLE_USER'));
            return $this->createResponse($request);
        }
        $url=$request->getSchemeAndHttpHost().$this->generateUrl('mapi_mobile_api',array('service'=>'User','method'=>'getUserInfo'));
        $client = new Client();
        $response = $client->request("GET", $url, ['query' => array('userId'=>$bind['toId'])]);
        if ($response->getStatusCode() == 200)
        {
            $responseBody = $response->getBody();
            $this->_result['data'] = json_decode((string)$responseBody,true);
        }

        return $this->createResponse($request);
    }
}