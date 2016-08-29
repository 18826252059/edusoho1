<?php

namespace Custom\MobileBundle\Controller;

use Symfony\Component\HttpFoundation\Request;

class MobileApiController extends CustomMobileBaseController
{

    //首页banner
    public function getBannerAction(Request $request)
    {
        $service = 'School';
        $method = 'getSchoolBanner';
        $this->_result['data'] = $this->getClass($request, $service, $method);
        foreach ($this->_result['data'] as $k => $a)
        {
            $this->_result['data'][$k]['title'] = '';
        }
        return $this->createResponse($request);
    }

    //推荐课程
    public function recommendAction(Request $request)
    {
        $service = 'School';
        $method = 'getRecommendCourses';
        $courses = $this->getClass($request, $service, $method);
        if (!empty($courses['data']) && count($courses['data']) > 0)
        {
            $this->_result['data']['start'] = $courses['start'];
            $this->_result['data']['limit'] = $courses['limit'];
            $this->_result['data']['total'] = intval($courses['total']);
            foreach ($courses['data'] as $c)
            {
                $this->_result['data']['data'][] = array(
                    'id' => $c['id'],
                    'title' => $c['title'],
                    'subtitle' => $c['subtitle'],
                    'categoryId' => $c['categoryId'],
                    'tags' => $c['tags'],
                    'smallPicture' => $c['smallPicture'],
                    'middlePicture' => $c['middlePicture'],
                    'largePicture' => $c['largePicture'],
                    'about' => $c['about'],
                    'lessonNum' => $c['lessonNum'],
                    'studentNum' => $c['studentNum'],
                    'searchUrl' => $request->getSchemeAndHttpHost() . $this->generateUrl('course_detail', array('id' => $c['id']))
                );
            }

        }
        return $this->createResponse($request);
    }

    //课程分类
    public function categoryAction(Request $request)
    {
        $service = 'Category';
        $method = 'getCategorieTree';
        $categories = $this->getClass($request, $service, $method);

        $this->_result['data'] = $categories;
        return $this->createResponse($request);
    }


}