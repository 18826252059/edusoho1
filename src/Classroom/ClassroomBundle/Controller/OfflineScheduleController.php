<?php
/**
 * Created by PhpStorm.
 * User: XT
 * Date: 16/4/20
 * Time: 10:52
 */

namespace Classroom\ClassroomBundle\Controller;


use Symfony\Component\HttpFoundation\Request;
use Topxia\AdminBundle\Controller\BaseController;
use Topxia\Common\Paginator;

class OfflineScheduleController extends BaseController
{
    function indexAction(Request $request,$id ){
        $this->getClassroomService()->tryManageClassroom($id);
        $classroom = $this->getClassroomService()->getClassroom($id);
        $total = $this->getOfflineScheduleService()->findAllOfflineScheduleCountByClassroomId($id);
        $paginator = new Paginator($request, $total, 20);
        $offlineSchedules = $this->getOfflineScheduleService()->findAllOfflineScheduleByClassroomId($id,$paginator->getOffsetCount(), $paginator->getPerPageCount());

        return $this->render('ClassroomBundle:OfflineSchedule:index.html.twig', array(
            'offlineSchedules' => $offlineSchedules,
            'paginator' => $paginator,
            'classroom'=>$classroom
        ));
    }

    public function updateAction(Request $request,$id){
        $this->getClassroomService()->tryManageClassroom($id);
        $classroom = $this->getClassroomService()->getClassroom($id);
        $sceduleId=$request->get('sceduleId');
        $offlineSchedule = $this->getOfflineScheduleService()->getOfflineSchedule($sceduleId);
        if (empty($offlineSchedule)) {
            throw $this->createNotFoundException();
        }

        if ('POST' == $request->getMethod()) {
            $offlineSchedule = $this->getOfflineScheduleService()->updateOfflineSchedule($sceduleId, $request->request->all());
            $this->setFlashMessage('success', '课程信息更新成功！');
//            return $this->createJsonResponse( array('status' => 'ok'));
            return $this->redirect($this->generateUrl('offline_schedule_manage',array('id'=>$id)));
        }
        return $this->render('ClassroomBundle:OfflineSchedule:offline-schedule.html.twig', array(
            'offlineSchedule' => $offlineSchedule,
            'classroom'=>$classroom
        ));
    }

    public function createAction(Request $request,$id){
        $this->getClassroomService()->tryManageClassroom($id);
        $classroom = $this->getClassroomService()->getClassroom($id);
        $offlineSchedule=array();
        if ('POST' == $request->getMethod()) {
            $offlineSchedule = $this->getOfflineScheduleService()->addOfflineSchedule(array_merge(array('classroomId'=>$id),$request->request->all()));
            $this->setFlashMessage('success', '课程信息已保存！');
//            return $this->createJsonResponse( array('status' => 'ok'));
            return $this->redirect($this->generateUrl('offline_schedule_manage',array('id'=>$id)));
        }

        return $this->render('ClassroomBundle:OfflineSchedule:offline-schedule.html.twig', array(
            'offlineSchedule' => $offlineSchedule,
            'classroom'=>$classroom
        ));
    }

    public function deleteAction(Request $request, $id)
    {
        $this->getOfflineScheduleService()->deleteOfflineSchedule($id);
        return $this->createJsonResponse( array('status' => 'ok'));
    }

    protected function getOfflineScheduleService()
    {
        return $this->getServiceKernel()->createService('Custom.OfflineScheduleService');
    }


    private function getClassroomService()
    {
        return $this->getServiceKernel()->createService('Classroom:Classroom.ClassroomService');
    }

}