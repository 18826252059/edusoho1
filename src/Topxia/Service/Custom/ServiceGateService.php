<?php
/**
 * Created by PhpStorm.
 * User: XT
 * Date: 16/4/14
 * Time: 16:21
 */

namespace Topxia\Service\Custom;


interface ServiceGateService
{

    public function setAppid($appid);

    public function setSecretkey($key);

    public function setBaseapiurl($url);

    public function generateUrl($service, $method, $version);

    public function sendRequest($serviceName, $serviceMethod, $data, $serviceVesion,$dataType='');
}