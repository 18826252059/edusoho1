<?php
/**
 * Created by PhpStorm.
 * User: XT
 * Date: 16/4/14
 * Time: 16:20
 */

namespace Topxia\Service\Custom\Impl;


use GuzzleHttp\Client;
use Symfony\Component\Yaml\Yaml;
use Topxia\Service\Custom\ServiceGateService;

class ServiceGateServiceImpl implements ServiceGateService
{
    private $baseurl, $appid, $secretkey, $flag, $serivce, $urlVersion, $dt, $dfPreid;

    public function __construct()
    {
        $this->set_time();
        $this->set_flag();
        $this->dfPreid = '1';
    }

    public function setAppid($appid)
    {
        $this->appid = $appid;
    }

    public function setSecretkey($key)
    {
        $this->secretkey = $key;
    }

    public function setBaseapiurl($url)
    {
        $this->baseurl = $url;
    }

    private function set_time()
    {
        $this->dt = time() - 8 * 60*60;
    }

    private function set_flag()
    {
        $this->flag = 'AMSTV';
    }

    public function generateUrl($service, $method, $version)
    {
        $this->urlVersion = $version . '.' . $this->dfPreid;
        $content = $this->get_content($service, $method, $version);
        $sign = $this->get_sign($content, $this->secretkey);
        $ret_url = $this->baseurl . 'api/' . $service . '/' . $this->urlVersion . '/' . $this->appid . '/' . $sign;
        return $ret_url;
    }

    private function get_content($service, $method, $version)
    {
        $t = $this->dt;
        $content = $this->flag . "\nappid=" . $this->appid . "\nmethod=" .
            $method . "\nservice=" . $service . "\ntime=" . $t . "\nversion=" .
            $this->urlVersion . "\n";
        return $content;
    }

    private function get_sign($content, $key)
    {
        $signature = urlencode(base64_encode(hash_hmac('sha1', $content, $key, true)));
        $sign = $this->flag . ':' . $this->dt . ':' . $signature;
        return $sign;
    }

    public function sendRequest($serviceName, $serviceMethod, $data, $serviceVesion, $dataType = '')
    {
        $yaml = Yaml::parse(file_get_contents(__DIR__ . '/../../../../Custom/WebBundle/Resources/config/requestParam.yml'));

        $appid = $yaml['appId'];
        $secretkey = $yaml['secretkey'];
        $baseapiUrl = $yaml['baseApiUrl'];
        $this->setAppid($appid);
        $this->setSecretkey($secretkey);
        $this->setBaseapiurl($baseapiUrl);
        $url = $this->generateUrl($serviceName, $serviceMethod, $serviceVesion);
        $client = new Client();
        if (strtoupper($serviceMethod) == 'GET')
        {
            $response = $client->request($serviceMethod, $url, ['query' => $data]);
        }
        else
        {
            if ($dataType == 'json')
            {
                $response = $client->request($serviceMethod, $url, ['json' => $data]);
            }
            else
            {
                $response = $client->request($serviceMethod, $url, ['form_params' => $data]);
            }
        }

        if ($response->getStatusCode() == 200)
        {
            $responseBody = $response->getBody();
            $stringBody = (string)$responseBody;
            return json_decode($stringBody, TRUE);
        }
        else
        {
            return array();
        }
    }
}