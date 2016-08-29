<?php
/**
 * Created by PhpStorm.
 * User: XT
 * Date: 16/4/18
 * Time: 16:12
 */

namespace Custom\WebBundle\Controller;


use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Yaml\Yaml;
use Topxia\Common\ArrayToolkit;
use Topxia\Common\Paginator;
use Topxia\WebBundle\Controller\BaseController;

class ClassRoomController extends BaseController
{
    private $_redis_object,$_redis_key;
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
            $this->_redis_object->connect($yaml['ip'],$yaml['port']);
            $this->_redis_key = $yaml['live_prefix'];
        }
        catch(Exception $e)
        {
            echo $e->getMessage();
            exit;
        }
    }

    public function livelistsAction()
    {
        return $this->render('CustomWebBundle:Classroom:live-explore-list.html.twig');
    }

    public function listsAction()
    {
        return $this->render('CustomWebBundle:Classroom:explore-list.html.twig');
    }

    public function myListsAction()
    {
        return $this->render('CustomWebBundle:Classroom:explore-list.html.twig', array('my' => true));
    }

    public function lists2Action()
    {
        return $this->render('CustomWebBundle:Classroom:explore-list-v2.html.twig');
    }

    public function myLists2Action()
    {
        return $this->render('CustomWebBundle:Classroom:explore-list-v2.html.twig', array('my' => true));
    }

    /**
     * 课程详情页
     * @param Request $request
     * @param $id
     * @return \Symfony\Component\HttpFoundation\Response|\Topxia\WebBundle\Controller\Response
     */
    public function introductionAction(Request $request, $id)
    {
        $classroom = $this->getClassroomService()->getClassroom($id);
        $introduction = $classroom['about'];
        $user = $this->getCurrentUser();
        $member = $user ? $this->getClassroomService()->getClassroomMember($classroom['id'], $user['id']) : null;

        if (!$this->getClassroomService()->canLookClassroom($classroom['id']))
        {
            return $this->createMessageResponse('info', "非常抱歉，您无权限访问该{$classroom['title']}，如有需要请联系客服", '', 3, $this->generateUrl('homepage'));
        }

        if (!$classroom)
        {
            $classroomDescription = array();
        }
        else
        {
            $classroomDescription = $classroom['about'];
            $classroomDescription = strip_tags($classroomDescription, '');
            $classroomDescription = preg_replace("/ /", "", $classroomDescription);
        }
        $headTeacher = $this->getClassroomService()->findClassroomMembersByRole($classroom['id'], 'headTeacher', 0, 1);
        $headTeacherIds = ArrayToolkit::column($headTeacher, 'userId');
        $teacherIds = $this->getClassroomService()->findTeachers($classroom['id']);
        $assisantIds = $this->getClassroomService()->findAssistants($classroom['id']);

        $teacherIds = array_unique(array_merge($headTeacherIds, $teacherIds, $assisantIds));
        $newteacherIds = array();
        foreach ($teacherIds as $key => $value)
        {
            $newteacherIds[] = $value;
        }
        $teacherIds = $newteacherIds;
        $teachers = $this->getUserService()->findUsersByIds($teacherIds);

        $layout = 'ClassroomBundle:Classroom:layout.html.twig';

        if ($member && !$member['locked'])
        {
            $layout = 'ClassroomBundle:Classroom:join-layout.html.twig';
        }

        $offlineSchedules = $this->getOfflineScheduleService()->findAllOfflineScheduleByClassroomId($id, 0, 3);
        foreach ($offlineSchedules as $k => $v)
        {
            $startDay = date('Y-m-d', strtotime($v['startTime']));
            $endDay = date('Y-m-d', strtotime($v['endTime']));
            if ($startDay == $endDay)
            {
                $offlineSchedules[$k]['endTime'] = date('H:i', strtotime($v['endTime']));
            }
            else
            {
                $offlineSchedules[$k]['endTime'] = date('m-d H:i', strtotime($v['endTime']));
            }
            $offlineSchedules[$k]['startTime'] = date('m-d H:i', strtotime($v['startTime']));
        }
        //查询相关教程
        $jiaocheng = $this->getCourseProductService()->findProductByCourseId($id, 'jiaocheng', 1);
        $jiaocheng = $this->queryProduct($jiaocheng, 'jiaocheng');
        //查询相关农资
        $nongzi = $this->getCourseProductService()->findProductByCourseId($id, 'nongzi', 1);
        $nongzi = $this->queryProduct($nongzi, 'nongzi');

        $courses = $this->getClassroomService()->findActiveCoursesByClassroomId($id);

        $storage_announcement = $this->getClassroomAnnouncementService()->findAllClassroomAnnouncementByClassroomId($id,0,1);
        return $this->render("CustomWebBundle:Classroom:introduction.html.twig", array(
            'introduction' => $introduction,
            'layout' => $layout,
            'classroom' => $classroom,
            'member' => $member,
            'classroomDescription' => $classroomDescription,
            'teachers' => $teachers,
            'offlineSchedules' => $offlineSchedules,
            'jiaocheng' => $jiaocheng,
            'nongzi' => $nongzi,
            'courses'=>$courses,
            'coursesCount'=>count($courses),
            'liveStatus'=>empty($this->_redis_object->get($this->_redis_key.(int)$id))?0:1,
            'announcement'=>count($storage_announcement)>0?$storage_announcement[0]:array()
        ));
    }

    public function coursesAction(Request $request,$classroomId){
        $courses = $this->getClassroomService()->findActiveCoursesByClassroomId($classroomId);
        return $this->render("CustomWebBundle:ProductBase:course-list.html.twig", array(
            'courses'=>$courses,
            'coursesCount'=>count($courses)
        ));
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


    public function offlineScheduleAction(Request $request, $id)
    {
        $classroom = $this->getClassroomService()->getClassroom($id);
        $offlineSchedules = $this->getOfflineScheduleService()->findAllOfflineScheduleByClassroomId($id, 0, 0);
        foreach ($offlineSchedules as $k => $v)
        {
            $startDay = date('Y-m-d', strtotime($v['startTime']));
            $endDay = date('Y-m-d', strtotime($v['endTime']));
            if ($startDay == $endDay)
            {
                $offlineSchedules[$k]['endTime'] = date('H:i', strtotime($v['endTime']));
            }
            else
            {
                $offlineSchedules[$k]['endTime'] = date('m-d H:i', strtotime($v['endTime']));
            }
            $offlineSchedules[$k]['startTime'] = date('m-d H:i', strtotime($v['startTime']));
        }

        return $this->render("CustomWebBundle:Classroom:offline-schedule.html.twig", array(
            'offlineSchedules' => $offlineSchedules,
            'classroom' => $classroom
        ));
    }

    /**
     * 课程详情页--学员
     * @param $classroom
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function latestMembersBlockAction($classroomId, $type = '')
    {
        $classroom = $this->getClassroomService()->getClassroom($classroomId);
        $users = $this->getClassroomService()->findClassroomStudents($classroomId, 0, 2000);
        $students = $this->getUserService()->findUsersByIds(ArrayToolkit::column($users, 'userId'));
        if ($type == 'all')
        {
            return $this->render("CustomWebBundle:Course:member-list.html.twig", array(
                'students' => $students,
                'members' => $users,
                'classroom' => $classroom
            ));
        }
        else
        {
            return $this->render('CustomWebBundle:Classroom:latest-members-block.html.twig', array(
                'students' => $students,
                'users' => $users,
                'classroom' => $classroom
            ));
        }
    }

    /**
     * 课程详情页推荐班级
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function recommendClassroomAction(Request $request)
    {
        $conditions = $request->query->all();
        $conditions['status'] = 'published';
        $conditions['showable'] = 1;
        $conditions['fliter'] = array(
            'price' => 'all',
            'currentLevelId' => 'all'
        );
        $orderBy = 'recommendedSeq';
        $conditions['recommended'] = 1;

        $paginator = new Paginator(
            $this->get('request'),
            $this->getClassroomService()->searchClassroomsCount($conditions),
            9
        );

        $classrooms = $this->getClassroomService()->searchClassrooms(
            $conditions,
            array($orderBy, 'desc'),
            $paginator->getOffsetCount(),
            $paginator->getPerPageCount()
        );

        return $this->render("CustomWebBundle:Classroom:recommend.html.twig", array(
            'paginator' => $paginator,
            'classrooms' => $classrooms,
            'path' => 'classroom_explore',
        ));
    }

    /**
     * 课程详情页--附件
     * @param Request $request
     * @param $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function attachmentAction(Request $request, $id)
    {
        $type = $request->query->get('type');
        $type = in_array($type, array('classroom')) ? $type : 'classroom';

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
        return $this->render('CustomWebBundle:Classroom:attachment.html.twig', array('files' => $files));

    }

    public function downloadAction($fileId)
    {
        $file = $this->getUploadFileService()->getFile($fileId);

        if (empty($file))
        {
            throw $this->createNotFoundException();
        }
        if ($file['targetType'] == 'classroom')
        {
            return $this->forward('TopxiaWebBundle:CourseLesson:file', array('fileId' => $file['id'], 'isDownload' => true));
        }
        elseif ($file['targetType'] == 'productBase')
        {
            return $this->forward('TopxiaWebBundle:CourseLesson:file', array('fileId' => $file['id'], 'isDownload' => false));
        }
        throw $this->createNotFoundException();
    }


    protected function getUserService()
    {
        return $this->getServiceKernel()->createService('User.UserService');
    }

    private function getClassroomService()
    {
        return $this->getServiceKernel()->createService('Classroom:Classroom.ClassroomService');
    }

    protected function getUploadFileService()
    {
        return $this->getServiceKernel()->createService('File.UploadFileService');
    }

    protected function getOfflineScheduleService()
    {
        return $this->getServiceKernel()->createService('Custom.OfflineScheduleService');
    }

    protected function getCourseProductService()
    {
        return $this->getServiceKernel()->createService('Custom.CourseProductService');
    }

    protected function getServiceGate()
    {
        return $this->getServiceKernel()->createService('Custom.ServiceGateService');
    }

    protected function getClassroomAnnouncementService()
    {
        return $this->getServiceKernel()->createService('Custom:Classroom.ClassroomAnnouncementService');
    }

}