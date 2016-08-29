<?php
/**
 * Created by PhpStorm.
 * User: XT
 * Date: 16/4/22
 * Time: 21:01
 */

namespace Topxia\WebBundle\Controller\Custom;

use GuzzleHttp\Client;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Yaml\Yaml;
use Topxia\Common\Paginator;
use Topxia\WebBundle\Controller\BaseController;

class CourseNewsManageController extends BaseController
{
    /**
     * 课程相关资讯
     * @param Request $request
     * @param $id 课程Id
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(Request $request, $id)
    {
        $course = $this->getCourseService()->tryManageCourse($id);

        $course = $this->getCourseService()->getCourse($id);

        $news = $this->getCourseNewsService()->findNewsByCourseId($id);
        return $this->render("TopxiaWebBundle:CourseManage/news:news-base.html.twig", array(
            'news' => $news,
            'course' => $course));
    }


    public function listsAction(Request $request, $courseId)
    {

        $setting = $request->request->get('setting', array());
        $categories = $this->getSettingService()->get('news_category', $setting);
        $yaml = Yaml::parse(file_get_contents(__DIR__ . '/../../../../Custom/WebBundle/Resources/config/requestParam.yml'));
        $serviceVesion = $yaml['newsApiServiceVesion'];
        if (empty($categories))
        {
            $serviceName = 'article.section.query';
            $serviceMethod = 'POST';
            $data = array(
                'websiteCode' => 'ahl',
                'sectionPath' => 'ahlroot'
            );
            $response = $this->getServiceGate()->sendRequest($serviceName, $serviceMethod, $data, $serviceVesion);
            if (!empty($response['content']))
            {
                $categories = $response['content']['sectionPath'];
                $categories = $this->getAllSectionPath($response['content'], $categories);

            }
            $this->getSettingService()->set('news_category', $categories);
        }
        $serviceName = 'article.article.list';
        $serviceMethod = 'POST';
        $paginator = new Paginator(
            $this->get('request'),
            40,
            5
        );
        $data = array(
            'appCode' => 'ahl',
            'sectionPaths' => $categories,
            'pageNum' => $paginator->getOffsetCount() / $paginator->getPerPageCount() + 1,
            'pageSize' => $paginator->getPerPageCount()
        );
        $key = $request->request->get("key");
        if (!empty($key))
        {
            $data['articleTitle'] = $key;
        }

        $response = $this->getServiceGate()->sendRequest($serviceName, $serviceMethod, $data, $serviceVesion);
        $news = array();
        if (!empty($response['content']))
        {
            foreach ($response['content'] as $content)
            {
                $news = array_merge($news, $content['articleInfoList']);
            }
        }

        return $this->render("TopxiaWebBundle:CourseManage/news:news-pick-modal.html.twig", array(
            'news' => $news,
            'courseId' => $courseId,
            'paginator' => $paginator,
        ));
    }

    private function getAllSectionPath($data, $categories)
    {
        if (!empty($data['subSectionList']))
        {
            foreach ($data['subSectionList'] as $subSection)
            {
                $categories .= ",{$subSection['sectionPath']}";
//                if(!empty($subSection['subSectionList'])){
//                    $categories.=$this->getAllSectionPath($subSection,$categories);
//                }
            }
        }
        return $categories;
    }

//    public function sendRequest($serviceName, $serviceMethod, $data, $serviceVesion)
//    {
//        $yaml = Yaml::parse(file_get_contents(__DIR__ . '/../../../../Custom/WebBundle/Resources/config/requestParam.yml'));
//
//        $appid = $yaml['appId'];
//        $secretkey = $yaml['secretkey'];
//        $baseapiUrl = $yaml['baseApiUrl'];
//        $this->getServiceGate()->setAppid($appid);
//        $this->getServiceGate()->setSecretkey($secretkey);
//        $this->getServiceGate()->setBaseapiurl($baseapiUrl);
//        $url = $this->getServiceGate()->generateUrl($serviceName, $serviceMethod, $serviceVesion);
//        $client = new Client();
//        if (strtoupper($serviceMethod) == 'GET')
//        {
//            $response = $client->request($serviceMethod, $url, ['query' => $data]);
//        }
//        else
//        {
//            $response = $client->request($serviceMethod, $url, ['form_params' => $data]);
//        }
//
//        if ($response->getStatusCode() == 200)
//        {
//            $responseBody = $response->getBody();
//            $stringBody = (string)$responseBody;
//            return json_decode($stringBody, TRUE);
//        }
//
//    }

    public function newsSelectAction(Request $request, $courseId)
    {
        $this->getCourseService()->tryManageCourse($courseId);

        $data = $request->request->all();
        if (isset($data['ids']) && $data['ids'] != "")
        {
            $data = json_decode($data['ids'], TRUE);
            if (empty($data))
            {
                return $this->createJsonResponse(array('status' => 'ok'));
            }
            foreach ($data as $v)
            {
                $v['courseId'] = $courseId;
                $this->getCourseNewsService()->addNewsByCourseId($v);
            }
        }
        else
        {
            return $this->createJsonResponse(array('status' => 'ok'));
        }
        $this->setFlashMessage('success', "资讯添加成功");
        return $this->createJsonResponse(array('status' => 'ok'));
    }

    public function newsDeleteAction(Request $request, $courseId)
    {
        $this->getCourseService()->tryManageCourse($courseId);


        $courseNewsId = $request->request->get("courseNewsId");
        if (empty($courseNewsId) || $courseNewsId < 0)
        {
            return $this->createJsonResponse(array('status' => 'ok'));
        }

        $this->getCourseNewsService()->deleteNewsByCourseId($courseNewsId);
        return $this->createJsonResponse(array('status' => 'ok'));
    }

    protected function getCourseService()
    {
        return $this->getServiceKernel()->createService('Course.CourseService');
    }

    protected function getServiceGate()
    {
        return $this->getServiceKernel()->createService('Custom.ServiceGateService');
    }

    protected function getCourseNewsService()
    {
        return $this->getServiceKernel()->createService('Custom.CourseNewsService');
    }

    protected function getSettingService()
    {
        return $this->getServiceKernel()->createService('System.SettingService');
    }


}