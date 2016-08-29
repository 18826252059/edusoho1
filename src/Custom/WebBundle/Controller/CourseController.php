<?php
/**
 * Created by PhpStorm.
 * User: XT
 * Date: 16/4/16
 * Time: 16:58
 */

namespace Custom\WebBundle\Controller;


use Custom\MobileBundle\Controller\CustomMobileBaseController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Yaml\Yaml;
use Topxia\Common\ArrayToolkit;

class CourseController extends CustomMobileBaseController
{
    public function listsAction()
    {
        return $this->render('CustomWebBundle:Course:explore-list.html.twig');
    }

    public function categoryAction(Request $request)
    {
        $service = 'Category';
        $method = 'getCategorieTree';
        $categories = $this->getClass($request, $service, $method);
        if (!empty($categories['data'][0]['childs']))
        {
            $categories = $categories['data'][0]['childs'];
        }
        return $this->render('CustomWebBundle:Category:explore-list.html.twig', array('categories' => $categories));
    }

    public function recommendCoursesAction(Request $request)
    {
        $service = 'School';
        $method = 'getRecommendCourses';
        $courses = $this->getClass($request, $service, $method);
        $courseSimples = array();
        if (!empty($courses['data']) && count($courses['data']) > 0)
        {
            foreach ($courses['data'] as $c)
            {
                $courseSimples[] = array(
                    'id' => $c['id'],
                    'title' => $c['title'],
                    'middlePicture' => $c['middlePicture'],
                    'lessonNum' => $c['lessonNum'],
                    'studentNum' => $c['studentNum'],
                );
            }
        }
        return $this->render('CustomWebBundle:Course:recommend-course.html.twig', array('courses' => $courseSimples));
    }

    public function newsAction(Request $request, $courseId)
    {
        $news = $this->getCourseNewsService()->findNewsByCourseId($courseId);
        if (count(($news) > 0))
        {
            foreach ($news as $k => $new)
            {
                $imgs = json_decode($new['pictureList'], TRUE);
                $news[$k]['img'] = !empty($imgs[0]) ? $imgs[0] : '';
            }
        }
        return $this->render('CustomWebBundle:Course:course-news.html.twig', array('news' => $news));
    }

    public function questionAction(Request $request, $courseId)
    {
        $questions = array();
        $questionId = ArrayToolkit::column($this->getCourseQuestionService()->getQuestionIdsByCourseId($courseId), 'questionId');

        if (!empty($questionId) && count($questionId) > 0)
        {
            $questionId = json_encode($questionId);
            $questionId = str_replace(['"', '[', ']'], [''], $questionId);
            $yaml = Yaml::parse(file_get_contents(__DIR__ . '/../Resources/config/requestParam.yml'));
            $serviceVesion = $yaml['askApiServiceVesion'];
            $serviceName = 'ask.question.query';
            $serviceMethod = 'POST';
            $data = array(
                'questionIds' => $questionId,
            );
            $response = $this->getServiceGate()->sendRequest($serviceName, $serviceMethod, $data, $serviceVesion);
            if (!empty($response['content']))
            {
                $questions = $response['content'];
            }
        }
//        var_dump($questions);die;
        return $this->render('CustomWebBundle:Course:course-question.html.twig', array('questions' => $questions));
    }

    public function answerAction(Request $request, $answerId, $answerCount)
    {
        $setting = $request->request->get('setting', array());
        $answer = array();
        $yaml = Yaml::parse(file_get_contents(__DIR__ . '/../Resources/config/requestParam.yml'));
        $serviceVesion = $yaml['askApiServiceVesion'];
        $serviceName = 'ask.answer.list';
        $serviceMethod = 'POST';
        $data = array(
            'answerIds' => $answerId,
        );
        $response = $this->getServiceGate()->sendRequest($serviceName, $serviceMethod, $data, $serviceVesion);
        if (!empty($response['content']))
        {
            $answer = $response['content'];
            foreach ($answer as $k => $v)
            {
                if (!empty($v['userId']))
                {
                    $userInfo = $this->getSettingService()->get('userInfo' . $v['userId'], $setting);
                    if (empty($userInfo))
                    {
                        $serviceVesion = $yaml['passportServiceVesion'];
                        $serviceName = 'user.snap.query';
                        $serviceMethod = 'POST';
                        $data = array('data'=>json_encode(array(
                            'userIds' => $v['userId'],
                        )));
                        $response = $this->getServiceGate()->sendRequest($serviceName, $serviceMethod, $data, $serviceVesion);
                        if (!empty($response['content']))
                        {
                            $userInfo=json_decode($response['content'],TRUE)[0];
                            $this->getSettingService()->set('userInfo' . $v['userId'],$userInfo );
                        }
                    }
                    $answer[$k] = array_merge($answer[$k], $userInfo);
                }

            }
        }
        return $this->render('CustomWebBundle:Course:question-answer.html.twig', array('answer' => $answer, 'answerCount' => $answerCount));
    }

    protected function getCourseNewsService()
    {
        return $this->getServiceKernel()->createService('Custom.CourseNewsService');
    }

    protected function getCourseQuestionService()
    {
        return $this->getServiceKernel()->createService('Custom.CourseQuestionService');
    }

    protected function getServiceGate()
    {
        return $this->getServiceKernel()->createService('Custom.ServiceGateService');
    }
}