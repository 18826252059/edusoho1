<?php
/**
 * Created by PhpStorm.
 * User: XT
 * Date: 16/4/8
 * Time: 14:25
 */

namespace Custom\MobileBundle\Controller;


use Symfony\Component\HttpFoundation\Request;

class CourseController extends CustomMobileBaseController
{
    //课程列表
    public function searchCourseAction(Request $request)
    {
        $service = 'Course';
        $method = 'searchCourse';
        $course = $this->getClass($request, $service, $method);
        if (isset($course['total']))
        {
            $this->_result['data']['start'] = $course['start'];
            $this->_result['data']['limit'] = $course['limit'];
            $this->_result['data']['total'] = $course['total'];
            if (count($course) > 0)
            {
                foreach ($course['data'] as $k => $v)
                {
                    $this->_result['data']['data'][$k]['id'] = $v['id'];
                    $this->_result['data']['data'][$k]['title'] = $v['title'];
                    $this->_result['data']['data'][$k]['subtitle'] = $v['subtitle'];
                    $this->_result['data']['data'][$k]['lessonNum'] = $v['lessonNum'];
                    $this->_result['data']['data'][$k]['studentNum'] = $v['studentNum'];
                    $this->_result['data']['data'][$k]['picture'] = $v['middlePicture'];
                }
            }
        }
        return $this->createResponse($request);
    }


}