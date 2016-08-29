<?php
/**
 * Created by PhpStorm.
 * User: XT
 * Date: 16/6/7
 * Time: 12:03
 */

namespace Custom\AdminBundle\Controller;


use Symfony\Component\HttpFoundation\Request;
use Topxia\AdminBundle\Controller\BaseController;
use Topxia\Common\Paginator;

class AnnouncementManageController extends BaseController
{
    public function indexAction(Request $request, $id)
    {
        $this->getClassroomService()->tryManageClassroom($id);
        $classroom = $this->getClassroomService()->getClassroom($id);
        $total = $this->getClassroomAnnouncementService()->findAllClassroomAnnouncementCountByClassroomId($id);
        $paginator = new Paginator($request, $total, 20);
        $classroomAnnouncements = $this->getClassroomAnnouncementService()->findAllClassroomAnnouncementByClassroomId($id, $paginator->getOffsetCount(), $paginator->getPerPageCount());

        return $this->render('CustomAdminBundle:ClassRoomManage/announcement:index.html.twig', array(
            'classroomAnnouncements' => $classroomAnnouncements,
            'paginator' => $paginator,
            'classroom' => $classroom
        ));
    }

    public function createAction(Request $request, $id)
    {
        $this->getClassroomService()->tryManageClassroom($id);
        $classroom = $this->getClassroomService()->getClassroom($id);
        $classroomAnnouncement = array();
        if ('POST' == $request->getMethod())
        {
            $classroomAnnouncements = $this->getClassroomAnnouncementService()->addClassroomAnnouncement(array_merge(array('classroomId' => $id), $request->request->all()));
            $this->setFlashMessage('success', '课程信息已保存！');
//            return $this->createJsonResponse( array('status' => 'ok'));
            return $this->redirect($this->generateUrl('announcement_manage', array('id' => $id)));
        }
        return $this->render('CustomAdminBundle:ClassRoomManage/announcement:announcement.html.twig', array(
            'classroomAnnouncement' => $classroomAnnouncement,
            'classroom' => $classroom
        ));
    }

    public function updateAction(Request $request, $id)
    {
        $this->getClassroomService()->tryManageClassroom($id);
        $classroom = $this->getClassroomService()->getClassroom($id);
        $anId = $request->get('anId');
        $classroomAnnouncement = $this->getClassroomAnnouncementService()->getClassroomAnnouncement($anId);
        if (empty($classroomAnnouncement))
        {
            throw $this->createNotFoundException();
        }

        if ('POST' == $request->getMethod())
        {
            $offlineSchedule = $this->getClassroomAnnouncementService()->updateClassroomAnnouncement($anId, $request->request->all());
            $this->setFlashMessage('success', '课程信息更新成功！');
//            return $this->createJsonResponse( array('status' => 'ok'));
            return $this->redirect($this->generateUrl('announcement_manage', array('id' => $id)));
        }
        return $this->render('CustomAdminBundle:ClassRoomManage/announcement:announcement.html.twig', array(
            'classroomAnnouncement' => $classroomAnnouncement,
            'classroom' => $classroom
        ));
    }

    public function deleteAction(Request $request, $id)
    {
        $this->getClassroomAnnouncementService()->deleteClassroomAnnouncement($id);
        return $this->createJsonResponse(array('status' => 'ok'));
    }


    protected function getClassroomAnnouncementService()
    {
        return $this->getServiceKernel()->createService('Custom:Classroom.ClassroomAnnouncementService');
    }

    private function getClassroomService()
    {
        return $this->getServiceKernel()->createService('Classroom:Classroom.ClassroomService');
    }
}