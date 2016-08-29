<?php
/**
 * Created by PhpStorm.
 * User: XT
 * Date: 16/5/25
 * Time: 14:44
 */

namespace Custom\MobileBundle\Controller;

use Custom\MobileBundle\Controller\CustomMobileBaseController;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Yaml\Yaml;

class LiveController extends CustomMobileBaseController
{
    private $_redis_object, $_redis_key;

    public function __construct()
    {
        try
        {
            $yaml = Yaml::parse(file_get_contents(__DIR__ . '/../Resources/config/redis_config.yml'));
            if (!isset($yaml['ip']) || !isset($yaml['port']) || !isset($yaml['live_prefix']))
            {
                throw new Exception("Can't not connect to redis because of the wrong config file");
            }
            $this->_redis_object = new \redis();
            $this->_redis_object->connect($yaml['ip'], $yaml['port']);
            $this->_redis_key = $yaml['live_prefix'];
        } catch (\Exception $e)
        {
            echo $e->getMessage();
            exit;
        }
    }

    public function indexAction(Request $request)
    {
        $this->init($request);
        $body_content = file_get_contents('php://input');
        $body_json = json_decode($body_content, true);
        $uid = isset($body_json['uid']) ? intval($body_json['uid']) : '';
        $classid = isset($body_json['classid']) ? intval($body_json['classid']) : '';
        $status = isset($body_json['status']) ? $body_json['status'] : '';
        if (empty($uid) || empty($classid) || empty($status) || !in_array($status, array('start', 'stop')))
        {
            $this->_result['code'] = 106;
            $this->_result['data'] = new \stdClass();
            return $this->createResponse($request);
        }
        if ('start' == $status)
        {
            $cache_data = $this->_redis_object->get($this->_redis_key . $classid);
            if (!empty($cache_data))
            {
                $this->_result['data'] = json_decode($cache_data, true);
            }
            else
            {
                $this->_result['data'] = array(
                    'uid' => $uid,
                    'classid' => $classid,
                    'interval' => 5,
                    'sourceid' => $classid,
                    'streamurl' => 'publish.lpmas.com/yunketang/'
                );
                $this->_redis_object->set($this->_redis_key . $classid, json_encode($this->_result['data']), 30);
            }
        }
        else
        {
            $this->_redis_object->delete($this->_redis_key . $classid);
        }
        return $this->createResponse($request);
    }

    public function recordingAction(Request $request)
    {
        $this->init($request);
        $body_content = file_get_contents('php://input');
        $body_json = json_decode($body_content, true);
        $uid = isset($body_json['uid']) ? intval($body_json['uid']) : '';
        $sourceid = isset($body_json['classid']) ? intval($body_json['classid']) : '';
        $classid = isset($body_json['sourceid']) ? intval($body_json['sourceid']) : '';
        $status = isset($body_json['status']) ? $body_json['status'] : '';
        if (empty($uid) || empty($classid) || empty($status) || !in_array($status, array('recording')))
        {
            $this->_result['code'] = 106;
            $this->_result['data'] = new \stdClass();
            return $this->createResponse($request);
        }
        $cache_data = $this->_redis_object->get($this->_redis_key . $classid);
        if (!empty($cache_data))
        {
            $this->_result['data'] = json_decode($cache_data, true);
            $this->_redis_object->set($this->_redis_key . $classid, $cache_data, 30);
        }
        else
        {
            $this->_result['code'] = 112;
            $this->_result['data'] = new \stdClass();
        }
        return $this->createResponse($request);
    }

    public function classroomLiveStatusAction(Request $request)
    {
        $this->init($request);
        $classid = empty($this->formData['classid']) ? '' : $this->formData['classid'];
        if (!empty($classid))
        {
            $classids = explode(',', $classid);
            foreach ($classids as $k => $v)
            {
                $classids[$k] = $this->_redis_key . $v;
            }

        }
        else
        {
//            $classids = $this->_redis_object->keys($this->_redis_key . '*');
            $classids = array();
            $classroomids = array();
            $it = NULL; /* Initialize our iterator to NULL */
            $this->_redis_object->setOption(\Redis::OPT_SCAN, \Redis::SCAN_RETRY); /* retry when we get no keys back */
            while ($arr_keys = $this->_redis_object->scan($it, "{$this->_redis_key}*",1000))
            {
                $classids = array_merge($classids, $arr_keys);
            }
            if (count($classids) > 0)
            {
                foreach ($classids as $k => $s1)
                {
                    $matches = array();
                    preg_match_all("/{$this->_redis_key}(?P<classroomId>\d+)/", $s1, $matches);
                    if (isset($matches['classroomId'][0]))
                    {
                        $classid = $matches['classroomId'][0];
                        $classroomids[] = intval($matches['classroomId'][0]);
                    }
                    else
                    {
                        unset($classids[$k]);
                    }
                }
            }
        }
        if (empty($classids))
        {
            return $this->createResponse($request);
        }
        $res = $this->_redis_object->getMultiple($classids);
        $class_info = $this->getClassroomService()->findClassroomsByIds($classroomids);
        if (!empty($res))
        {
            foreach ($res as $k => $v)
            {
                if ($v == false)
                {
                    unset($res[$k]);
                }
                else
                {
                    $res[$k] = json_decode($v, true);
                    $res[$k]['playurl']="http://hls.lpmas.com/yunketang/{$res[$k]['sourceid']}/playlist.m3u8";
                    if(isset($class_info[intval($res[$k]['classid'])]))
                    {
                        $res[$k]['thirdClassroomId'] = intval($class_info[intval($res[$k]['classid'])]['thirdClassroomId']);
                    }
                }
            }
        }
        if (!empty($res))
        {
            $this->_result['data']['classrooms'] = $res;
        }
        return $this->createResponse($request);
    }

    public function thirdClassroomLiveStatusAction(Request $request)
    {
        $this->init($request);
        $classid = empty($this->formData['classid']) ? '' : $this->formData['classid'];
        $classids = array();
        if (!empty($classid))
        {
            $classids = explode(',', $classid);
            foreach ($classids as $v)
            {
                if (0 == intval($v))
                {
                    $this->_result['code'] = 106;
                    $this->_result['data'] = new \stdClass();
                    return $this->createResponse($request);
                }
            }
        }
        else
        {
            $this->_result['code'] = 106;
            $this->_result['data'] =  new \stdClass();;
            return $this->createResponse($request);
        }
        $class_info = $this->getCustomClassroomService()->getClassroomsBythirdClassroomIds($classids);
        if (!empty($class_info))
        {
            $redis_classroom_keys = array();
            foreach($class_info as $k)
            {
                $redis_classroom_keys[] = $this->_redis_key.$k['id'];
            }
        }
        else
        {
            $this->_result['code'] = 117;
            $this->_result['data'] =  new \stdClass();
            return $this->createResponse($request);
        }
        $res = $this->_redis_object->getMultiple($redis_classroom_keys);
        if (!empty($res))
        {
            foreach ($res as $k => $v)
            {
                if ($v == false)
                {
                    unset($res[$k]);
                }
                else
                {
                    $res[$k] = json_decode($v, true);
                    $res[$k]['playurl']="http://hls.lpmas.com/yunketang/{$res[$k]['sourceid']}/playlist.m3u8";
                    if(isset($class_info[intval($res[$k]['classid'])]))
                    {
                        $res[$k]['thirdClassroomId'] = intval($class_info[intval($res[$k]['classid'])]['thirdClassroomId']);
                    }
                }
            }
        }
        if (!empty($res))
        {
            $this->_result['data']['classrooms'] = $res;
        }
        else
        {
            $this->_result['code'] = 113;
            $this->_result['data'] = new \stdClass();
        }
        return $this->createResponse($request);
    }

    protected function getClassroomService()
    {
        return $this->getServiceKernel()->createService('Classroom:Classroom.ClassroomService');
    }

    protected function getCustomClassroomService()
    {
        return $this->getServiceKernel()->createService('Custom:Classroom.ClassroomService');
    }
}