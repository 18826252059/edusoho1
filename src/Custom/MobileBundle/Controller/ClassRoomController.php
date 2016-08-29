<?php
/**
 * Created by PhpStorm.
 * User: XT
 * Date: 16/4/8
 * Time: 14:46
 */

namespace Custom\MobileBundle\Controller;


use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Yaml\Yaml;
use Topxia\Common\ArrayToolkit;

class ClassRoomController extends CustomMobileBaseController
{
    private $_redis_object, $_redis_key;

    public function __construct()
    {
        try
        {
            $yaml = Yaml::parse(file_get_contents(__DIR__ . '/../../MobileBundle/Resources/config/redis_config.yml'));
            if (!isset($yaml['ip']) || !isset($yaml['port']) || !isset($yaml['live_prefix']))
            {
                throw new Exception("Can't not connect to redis because of the wrong config file");
            }
            $this->_redis_object = new \redis();
            $this->_redis_object->connect($yaml['ip'], $yaml['port']);
            $this->_redis_key = $yaml['live_prefix'];
        } catch (Exception $e)
        {
            echo $e->getMessage();
            exit;
        }
    }

    //班级列表
    public function getClassRoomsAction(Request $request)
    {
        $service = 'ClassRoom';
        $method = 'myClassRoomsLpmas';
        $classroom = $this->getClass($request, $service, $method);
        $myClassroom = array();
        if (count($classroom['data']) > 0)
        {
            foreach ($classroom['data'] as $k => $v)
            {
                $myClassroom[$k]['id'] = $v['id'];
                $myClassroom[$k]['title'] = $v['title'];
                $myClassroom[$k]['courseNum'] = $v['courseNum'];
                $myClassroom[$k]['studentNum'] = $v['studentNum'];
                $myClassroom[$k]['picture'] = $v['middlePicture'];
                $myClassroom[$k]['liveStatus'] = empty($this->_redis_object->get($this->_redis_key . $v['id'])) ? 0 : 1;
                $this->get('logger')->info("ClassRoomList get redis data :{$this->_redis_object->get($this->_redis_key.$v['id'])}");
                $myClassroom[$k]['my'] = 1;
            }
        }


        $myClassroom = ArrayToolkit::index($myClassroom, 'id');
        $service = 'ClassRoom';
        $method = 'getClassRooms';
        $classroom = $this->getClass($request, $service, $method);
        $classrooms = array();
        if (isset($classroom['total']))
        {
            $this->_result['data']['start'] = $classroom['start'];
            $this->_result['data']['limit'] = $classroom['limit'];
            $this->_result['data']['total'] = $classroom['total'];
            if (count($classroom['data']) > 0)
            {
                foreach ($classroom['data'] as $k => $v)
                {
                    if (empty($myClassroom[$v['id']]))
                    {
                        $classrooms[] = array(
                            'id' => $v['id'],
                            'title' => $v['title'],
                            'about' => $v['about'],
                            'courseNum' => $v['courseNum'],
                            'studentNum' => $v['studentNum'],
                            'picture' => $v['middlePicture'],
                            'liveStatus' => empty($this->_redis_object->get($this->_redis_key . $v['id'])) ? 0 : 1,
                        );
                        $this->get('logger')->info("ClassRoomList get redis data :{$this->_redis_object->get($this->_redis_key.$v['id'])}");
                    }
                }
            }
        }

        if (empty($this->formData['start']))
        {
            $this->_result['data']['data'] = array_merge($myClassroom, $classrooms);
        }
        else
        {
            $this->_result['data']['data'] = $classrooms;
        }
        return $this->createResponse($request);
    }

    /**
     * 我的班级列表
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function getMyClassRoomsAction(Request $request)
    {
        $service = 'ClassRoom';
        $method = 'myClassRoomsLpmas';
        $classroom = $this->getClass($request, $service, $method);
        if (isset($classroom['total']))
        {
            $this->_result['data']['start'] = $classroom['start'];
            $this->_result['data']['limit'] = $classroom['limit'];
            $this->_result['data']['total'] = $classroom['total'];
            if (count($classroom['data']) > 0)
            {
                foreach ($classroom['data'] as $k => $v)
                {
                    $this->_result['data']['data'][$k]['id'] = $v['id'];
                    $this->_result['data']['data'][$k]['title'] = $v['title'];
                    $this->_result['data']['data'][$k]['courseNum'] = $v['courseNum'];
                    $this->_result['data']['data'][$k]['studentNum'] = $v['studentNum'];
                    $this->_result['data']['data'][$k]['picture'] = $v['middlePicture'];
                    $this->_result['data']['data'][$k]['my'] = 1;
                }
            }
        }
        return $this->createResponse($request);
    }

}