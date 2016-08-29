<?php
/**
 * Created by PhpStorm.
 * User: XT
 * Date: 16/4/8
 * Time: 11:56
 */

namespace Custom\MobileBundle\Controller;

use Symfony\Component\Yaml\Yaml;
use Symfony\Component\HttpFoundation\Request;
use Topxia\MobileBundleV2\Controller\MobileBaseController;

abstract class CustomMobileBaseController extends MobileBaseController
{
    protected $_result;

    protected function init($request)
    {
        $this->request = $request;
        $this->pathInfo = $request->getPathInfo();
        if ($request->getMethod() == "POST")
        {
            $this->formData = $request->request->all();
        }
        else
        {
            $this->formData = $request->query->all();
        }
        $this->_result = array('code' => 0, 'message' => '', 'data' => null);
    }

    protected function getClassName($name)
    {
        $namespace = __NAMESPACE__;
        return 'Topxia\\MobileBundleV2\\Processor\\Impl\\' . $name . 'ProcessorImpl';
    }

    protected function getClass(Request $request, $service, $method)
    {
        $this->init($request);
        $class = $this->getClassName($service);

        if (!class_exists($class))
        {
            return "service not exists";
        }

        $instance = call_user_func(array($class, "getInstance"), $class, $this);
        $result = call_user_func(array($instance, $method));
        return $result;
    }

    protected function createResponse($request)
    {

        $yaml = Yaml::parse(file_get_contents(__DIR__ . '/../Resources/config/message.yml'));
        if (isset($this->_result['code']) && !empty($yaml[$this->_result['code']]))
        {
            $this->_result['message'] = $yaml[$this->_result['code']];
            if (!empty($this->_result['codeMsg']) && !empty($yaml[$this->_result['codeMsg']]))
            {
                $this->_result['message'] = $yaml[$this->_result['code']] . "-" . $yaml[$this->_result['codeMsg']];
                unset($this->_result['codeMsg']);
            }
        }
        if (is_a($this->_result, "Symfony\Component\HttpFoundation\Response"))
        {
            return $this->_result;
        }
        return $this->createJson($request, $this->_result);
    }


    public function createErrorResponse($request, $name, $message)
    {
        $yaml = Yaml::parse(file_get_contents(__DIR__ . '/../Resources/config/message.yml'));

        if (isset($this->_result['code']) && !empty($yaml[$this->_result['code']]))
        {
            $this->_result['message'] = $yaml[$this->_result['code']];
            if (isset($message))
            {
                $this->_result['message'] = $message;
            }
            elseif (!empty($this->_result['codeMsg']) && !empty($yaml[$this->_result['codeMsg']]))
            {
                $this->_result['message'] = $yaml[$this->_result['code']] . "-" . $yaml[$this->_result['codeMsg']];
                unset($this->_result['codeMsg']);
            }
        }
        if (is_a($this->_result, "Symfony\Component\HttpFoundation\Response"))
        {
            return $this->_result;
        }
        return $this->createJson($request,$this->_result);
    }


}