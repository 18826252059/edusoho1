<?php
/**
 * Created by PhpStorm.
 * User: XT
 * Date: 16/4/19
 * Time: 14:55
 */

namespace Custom\WebBundle\Controller;


use GuzzleHttp\Client;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Yaml\Yaml;
use Topxia\Common\ArrayToolkit;
use Topxia\Common\Paginator;
use Topxia\WebBundle\Controller\BaseController;

class ProductBaseController extends BaseController
{
    public function indexAction(Request $request, $id)
    {
        $productBase = $this->getProductBaseService()->getProductBase($id);

        if (!$productBase)
        {
            $about = array();
        }
        else
        {
            $about = $productBase['about'];
            $about = strip_tags($about, '');
            $about = preg_replace("/ /", "", $about);
        }
        $images = $this->images($request, $id);
        if (count($images) > 0)
        {
            $images = $images[0];
        }
        return $this->render('CustomWebBundle:ProductBase:detail.html.twig',
            array('about' => $about, 'productBase' => $productBase, 'image' => $images));
    }

    private function images(Request $request, $id)
    {
        $type = 'productBase';

        $conditions = array(
            'targetType' => $type,
            'targetId' => $id
        );

        $paginator = new Paginator(
            $request,
            $this->getUploadFileService()->searchFileCount($conditions),
            20
        );

        $files = $this->getUploadFileService()->searchFiles(
            $conditions,
            'latestCreated',
            $paginator->getOffsetCount(),
            $paginator->getPerPageCount()
        );
        return $files;
    }

    public function productBaseAction(Request $request, $courseId)
    {
        $productBases = $this->getProductBaseService()->findProductBaseByCourseId($courseId);
        foreach ($productBases as $k => $productBase)
        {
            $courses = $this->getCourseProductBaseService()->findCoursesByProductBaseId($productBase['id']);
            $courseIds = ArrayToolkit::column($courses, 'courseId');
            $courses = $this->getCourseService()->findCoursesByIds($courseIds);
            foreach ($courses as $c => $s)
            {
                if ($s['status'] != 'published')
                {
                    unset($courses[$c]);
                }
            }
            $productBases[$k]['courseCount'] = count($courses);
            $images = $this->images($request, $productBase['id']);
            if (count($images) > 0)
            {
                $productBases[$k]['image'] = $images[0];
            }
        }
        return $this->render('CustomWebBundle:Course:all-product-base.html.twig', array(
            "productBases" => $productBases,
        ));
    }

    public function coursesAction(Request $request, $id)
    {
        $courses = $this->getCourseProductBaseService()->findCoursesByProductBaseId($id);
        $courseIds = ArrayToolkit::column($courses, 'courseId');
        $courses = $this->getCourseService()->findCoursesByIds($courseIds);
        foreach ($courses as $k => $v)
        {
            if ($v['status'] != 'published')
            {
                unset($courses[$k]);
            }
        }
        $type = $request->get('type');
        if ($type == 'all')
        {
            return $this->render('CustomWebBundle:ProductBase:course-list.html.twig', array('courses' => $courses));
        }
        else
        {
            return $this->render('CustomWebBundle:ProductBase:course.html.twig', array('courses' => $courses, 'productBaseId' => $id));
        }

    }

    public function distanceAction(Request $request, $productBase)
    {
        $distance = 0;
        $clientIp = $request->getClientIp();
        $client = new Client();
        $yaml = Yaml::parse(file_get_contents(__DIR__ . '/../Resources/config/requestParam.yml'));
        if (!empty($yaml['baiduApi']) && !empty($yaml['baiduApiAK']))
        {
            $url = "{$yaml['baiduApi']}?ak={$yaml['baiduApiAK']}&ip=$clientIp&coor=bd09ll";
        }
        else
        {
            return $this->render('CustomWebBundle:ProductBase:distance.html.twig', array('distance' => intval($distance)));
        }
        $response = $client->request('GET', $url);
        if ($response->getStatusCode() == 200)
        {
            $responseBody = $response->getBody();
            $stringBody = (string)$responseBody;

            $stringBody = json_decode($stringBody, TRUE);
            if ($stringBody['status'] == 0 && !empty($stringBody['content']['point']))
            {
                $lat = empty($stringBody['content']['point']['y']) ? 0 : $stringBody['content']['point']['y'];
                $lng = empty($stringBody['content']['point']['x']) ? 0 : $stringBody['content']['point']['x'];
                if (!empty($lat) && !empty($lng) && !empty($productBase['baiduLon']) && !empty($productBase['baiduLat']))
                {
                    $distance = $this->getDistance($lng, $lat, $productBase['baiduLon'], $productBase['baiduLat']);
                }
            }

        }
        return $this->render('CustomWebBundle:ProductBase:distance.html.twig', array('distance' => intval($distance)));
    }

    /**
     *求两个已知经纬度之间的距离,单位为米
     * @param lng1 ,lng2 经度
     * @param lat1 ,lat2 纬度
     * @return float 距离，单位米
     **/
    protected function getDistance($lng1, $lat1, $lng2, $lat2)//根据经纬度计算距离
    {
        //将角度转为狐度
        $radLat1 = deg2rad($lat1);
        $radLat2 = deg2rad($lat2);
        $radLng1 = deg2rad($lng1);
        $radLng2 = deg2rad($lng2);
        $a = $radLat1 - $radLat2;//两纬度之差,纬度<90
        $b = $radLng1 - $radLng2;//两经度之差纬度<180
        $s = 2 * asin(sqrt(pow(sin($a / 2), 2) + cos($radLat1) * cos($radLat2) * pow(sin($b / 2), 2))) * 6378.137;
        return $s;
    }

    protected function getProductBaseService()
    {
        return $this->getServiceKernel()->createService('Custom.ProductBaseService');
    }

    protected function getCourseProductBaseService()
    {
        return $this->getServiceKernel()->createService('Custom.CourseProductBaseService');
    }

    protected function getUploadFileService()
    {
        return $this->getServiceKernel()->createService('File.UploadFileService');
    }

    protected function getCourseService()
    {
        return $this->getServiceKernel()->createService('Course.CourseService');
    }

}