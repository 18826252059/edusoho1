<?php
/**
 * Created by PhpStorm.
 * User: XT
 * Date: 16/4/20
 * Time: 18:24
 */

namespace Custom\WebBundle\Controller;


use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Yaml\Yaml;
use Topxia\Common\ArrayToolkit;
use Topxia\WebBundle\Controller\CourseBaseController;

class CourseDetailController extends CourseBaseController
{
    public function detailAction(Request $request, $id)
    {
        list($course, $member) = $this->buildCourseLayoutData($request, $id);

        if ($course['parentId'])
        {
            $classroom = $this->getClassroomService()->findClassroomByCourseId($course['id']);

            if (!$this->getClassroomService()->canLookClassroom($classroom['classroomId']))
            {
                return $this->createMessageResponse('info', '非常抱歉，您无权限访问该班级，如有需要请联系客服', '', 3, $this->generateUrl('homepage'));
            }
        }

        $isTeacher = 0;
        if (count($member) == 0)
        {
            $user = $this->getCurrentUser();
//            $member = $this->getCourseService()->becomeStudentByClassroomJoined($id, $user->id);
            if (!empty($user->id))
            {
                $member = $this->getCourseService()->becomeStudent($id, $user->id);
                if (isset($member["id"]))
                {
                    $course['studentNum']++;
                }
            }
        }
        else
        {
            $user = $this->getCurrentUser();
            if (!empty($user->id))
            {
                $db_member = $this->getCourseService()->getCourseMember($id,$user->id);
                if (isset($db_member['role']) && 'teacher' == $db_member['role'])
                {
                    $isTeacher = 1;
                }
            }
        }

        $this->getCourseService()->hitCourse($id);

        $items = $this->getCourseService()->getCourseItems($course['id']);
        $courseAbout = $course['about'];

        $courseAbout = strip_tags($courseAbout, '');

        $courseAbout = preg_replace("/ /", "", $courseAbout);
        $courseAbout = substr($courseAbout, 0, 100);

        $teachersNoSort = $this->getUserService()->findUsersByIds($course['teacherIds']);
        $teachersProfiles = $this->getUserService()->findUserProfilesByIds($course['teacherIds']);
        $teachers = array();
        foreach ($course['teacherIds'] as $key => $teacherId)
        {
            $teachers[$teacherId] = array_merge($teachersNoSort[$teacherId], $teachersProfiles[$teacherId]);
        }

        $productBases = $this->getProductBaseService()->findProductBaseByCourseId($id);

        $lessons = $this->lessonsAction($request, $id);

        //查询相关教程
        $jiaocheng = $this->getCourseProductService()->findProductByCourseId($id, 'jiaocheng');
        $jiaocheng = $this->queryProduct($jiaocheng, 'jiaocheng');
        //查询相关农资
        $nongzi = $this->getCourseProductService()->findProductByCourseId($id, 'nongzi');
        $nongzi = $this->queryProduct($nongzi, 'nongzi');
//        $relation=$this->relation($course['categoryId']);

        $commentCount = $this->getReviewService()->getCourseReviewCount($id);
        $reviews = $this->getReviewService()->findCourseReviews(
            $id,
            0,
            3
        );
        $reviewsUsers = $this->getUserService()->findUsersByIds(ArrayToolkit::column($reviews, 'userId'));

        $hasFavorited = $this->getCourseService()->hasFavoritedCourse($course['id']);
        return $this->render("CustomWebBundle:Course:introduction.html.twig", array_merge($lessons, array(
            'course' => $course,
            'member' => $member,
            'items' => $items,
            'courseAbout' => $courseAbout,
            'teachers' => $teachers,
            'productBaseCount' => count($productBases),
            'jiaocheng' => $jiaocheng,
            'nongzi' => $nongzi,
            'commentCount' => $commentCount,
            'reviews' => $reviews,
            'reviewsUsers' => $reviewsUsers,
            'hasFavorited' => $hasFavorited,
            'isTeacher' => $isTeacher
        )));
    }

    private function queryProduct($ids, $type)
    {
        if (count($ids) > 0)
        {
            $ids = ArrayToolkit::column($ids, 'productId');
            $ids = json_encode($ids);
            $ids = str_replace('[', '', $ids);
            $ids = str_replace(']', '', $ids);
            $ids = str_replace('"', '', $ids);
        }
        $yaml = Yaml::parse(file_get_contents(__DIR__ . '/../Resources/config/requestParam.yml'));
        $serviceVesion = $yaml['productApiServiceVesion'];
        $serviceName = 'product.info.query';
        $serviceMethod = 'GET';
        $data = array(
            'productIds' => $ids
        );
        $response = $this->getServiceGate()->sendRequest($serviceName, $serviceMethod, $data, $serviceVesion);
        $product = array();
        if (!empty($response['content']))
        {
            foreach ($response['content'] as $p)
            {
                $product[] = array(
                    'thumbUrl' => $yaml['productImgBase'] . "/{$p['sku']}/1.jpg",
                    'productTitle' => $p['productTitle'],
                    'sku' => $p['sku'],
                    'offerPrice' => $p['offerPrice'],
                    'currency' => $p['currency'],
                    'productId' => intval($p['productId']),
                    'url' => "{$yaml['productUrl']}/{$p['sku']}.shtml"
                );
            }
        }
        if ($type == 'nongzi')
        {
            $relationMaterial = array('farmInputsCount' => count($product), 'farmInputs' => $product, 'url' => $yaml['farmInputsUrl']);
        }
        else
        {
            $relationMaterial = array('materialCount' => count($product), 'materials' => $product, 'url' => $yaml['materialsUrl']);
        }
        return $relationMaterial;
    }

    public function recommendTeachersAction(Request $request)
    {
        $conditions = array(
            'roles' => 'ROLE_TEACHER',
        );

        $users = $this->getUserService()->searchUsers(
            $conditions,
            array('promotedTime', 'DESC'),
            0,
            3
        );
        return $this->render("CustomWebBundle:Course:recommend-teacher.html.twig", array(
            'users' => $users,
        ));
    }

    public function studentsAction(Request $request, $courseId, $type = '')
    {
        list($course, $member) = $this->buildCourseLayoutData($request, $courseId);
        $members = $this->getCourseService()->findCourseStudents($course['id'], 0, 2000);
        $students = $this->getUserService()->findUsersByIds(ArrayToolkit::column($members, 'userId'));

        if ($type == 'all')
        {
            return $this->render("CustomWebBundle:Course:member-list.html.twig", array(
                'course' => $course,
                'members' => $members,
                'students' => $students,
            ));
        }
        else
        {
            return $this->render('CustomWebBundle:Course:normal-sidebar-students.html.twig', array(
                'students' => $students,
                'members' => $members,
                'course' => $course
            ));
        }
    }

    public function lessonsAction(Request $request, $courseId)
    {

        $lessons = $this->getCourseService()->getCourseItems($courseId);

        $user = $this->getCurrentUser();
        if ($user->isLogin())
        {
            $learnStatuses = $this->getCourseService()->getUserLearnLessonStatuses($user['id'], $courseId);
        }
        else
        {
            $learnStatuses = null;
        }
        foreach ($lessons as $k => $lesson)
        {
            if ($lesson['type'] == 'video')
            {
                $lessons[$k] = $this->getVideoLesson($request, $lesson);
            }
        }
        return array(
            "lessons" => array_values($lessons),
            "learnStatuses" => empty($learnStatuses) ? array("-1" => "learning") : $learnStatuses
        );
    }


    private function getVideoLesson($request, $lesson)
    {
        $mediaId = $lesson['mediaId'];
        $mediaSource = $lesson['mediaSource'];
        $mediaUri = $lesson['mediaUri'];

        if ($lesson['length'] > 0)
        {
            $lesson['length'] = $this->container->get('topxia.twig.web_extension')->durationFilter($lesson['length']);
        }
        else
        {
            $lesson['length'] = '';
        }

        if ($mediaSource == 'self')
        {
            $file = $this->getUploadFileService()->getFile($lesson['mediaId']);

            if (!empty($file))
            {
//                if ($file['storage'] == 'cloud') {
//                    $factory = new CloudClientFactory();
//                    $client  = $factory->createClient();
//
//                    $lesson['mediaConvertStatus'] = $file['convertStatus'];
//
//                    if (!empty($file['metas2']) && !empty($file['metas2']['sd']['key'])) {
//                        if (isset($file['convertParams']['convertor']) && ($file['convertParams']['convertor'] == 'HLSEncryptedVideo')) {
//                            $headLeaderInfo = $this->getHeadLeaderInfo();
//
//                            if ($headLeaderInfo) {
//                                $token = $this->getTokenService()->makeToken('hls.playlist', array(
//                                    'data'     => array(
//                                        'id'      => $headLeaderInfo['id'],
//                                        'fromApi' => true
//                                    ),
//                                    'times'    => 2,
//                                    'duration' => 3600
//                                ));
//
//                                $headUrl = array(
//                                    'url' => $this->controller->generateUrl('hls_playlist', array(
//                                        'id'            => $headLeaderInfo['id'],
//                                        'token'         => $token['token'],
//                                        'line'          => $this->request->get('line'),
//                                        'hideBeginning' => 1
//                                    ), true)
//                                );
//
//                                $lesson['headUrl'] = $headUrl['url'];
//                            }
//
//                            $token = $this->getTokenService()->makeToken('hls.playlist', array(
//                                'data'     => array(
//                                    'id'      => $file['id'],
//                                    'fromApi' => true
//                                ),
//                                'times'    => 2,
//                                'duration' => 3600
//                            ));
//
//                            $url = array(
//                                'url' => $this->controller->generateUrl('hls_playlist', array(
//                                    'id'            => $file['id'],
//                                    'token'         => $token['token'],
//                                    'line'          => $this->request->get('line'),
//                                    'hideBeginning' => 1
//                                ), true)
//                            );
//                        } else {
//                            $url = $client->generateHLSQualitiyListUrl($file['metas2'], 3600);
//                        }
//
//                        $lesson['mediaUri'] = (isset($url) && is_array($url) && !empty($url['url'])) ? $url['url'] : '';
//                    } else {
//                        if (!empty($file['metas']) && !empty($file['metas']['hd']['key'])) {
//                            $key = $file['metas']['hd']['key'];
//                        } else {
//                            if ($file['type'] == 'video') {
//                                $key = null;
//                            } else {
//                                $key = $file['hashId'];
//                            }
//                        }
//
//                        if ($key) {
//                            $url                = $client->generateFileUrl($client->getBucket(), $key, 3600);
//                            $lesson['mediaUri'] = isset($url["url"]) ? $url['url'] : "";
//                        } else {
//                            $lesson['mediaUri'] = '';
//                        }
//                    }
//                } else {
                $lesson['mediaUri'] = $request->getSchemeAndHttpHost() . "/mapi_v2/Lesson/getLocalVideo?targetId={$file['id']}";
//                }
            }
            else
            {
                $lesson['mediaUri'] = '';
            }
        }
        else

            if ($mediaSource == 'youku')
            {
                $matched = preg_match('/\/sid\/(.*?)\/v\.swf/s', $lesson['mediaUri'], $matches);

                if ($matched)
                {
                    $lesson['mediaUri'] = "http://player.youku.com/embed/{$matches[1]}";
                }
                else
                {
                    $lesson['mediaUri'] = '';
                }
            }
            else

                if ($mediaSource == 'tudou')
                {
                    $matched = preg_match('/\/v\/(.*?)\/v\.swf/s', $lesson['mediaUri'], $matches);

                    if ($matched)
                    {
                        $lesson['mediaUri'] = "http://www.tudou.com/programs/view/html5embed.action?code={$matches[1]}";
                    }
                    else
                    {
                        $lesson['mediaUri'] = '';
                    }
                }
                else
                {
                    $lesson['mediaUri'] = $mediaUri;
                }

        return $lesson;
    }

    public function relation($categoryId)
    {
        $result = array('nongzi' => array(), 'jiaocheng' => array(), 'news' => array());
        $yaml = Yaml::parse(file_get_contents(__DIR__ . '/../Resources/config/requestParam.yml'));
        $serviceVesion = $yaml['courseApiServiceVesion'];
        $serviceName = 'course.category.relation';
        $serviceMethod = 'GET';
        $data = array(
            'categoryId' => $categoryId
        );
        $response = $this->getServiceGate()->sendRequest($serviceName, $serviceMethod, $data, $serviceVesion);
        if ($response['code'] == 0)
        {
            $nongzi = $response['data']['relationFarmInputs'];
            $jiaocheng = $response['data']['relationMaterial'];
            $news = $response['data']['relationNews']['news'];
            $result = array('nongzi' => $nongzi, 'jiaocheng' => $jiaocheng, 'news' => $news);
        }
        return $result;
    }

    protected function getUploadFileService()
    {
        return $this->getServiceKernel()->createService('File.UploadFileService');
    }


    protected function getClassroomService()
    {
        return $this->getServiceKernel()->createService('Classroom:Classroom.ClassroomService');
    }

    protected function getProductBaseService()
    {
        return $this->getServiceKernel()->createService('Custom.ProductBaseService');
    }

    protected function getCourseProductService()
    {
        return $this->getServiceKernel()->createService('Custom.CourseProductService');
    }

    protected function getServiceGate()
    {
        return $this->getServiceKernel()->createService('Custom.ServiceGateService');
    }

    protected function getReviewService()
    {
        return $this->getServiceKernel()->createService('Course.ReviewService');
    }

}