<?php
/**
 * Created by PhpStorm.
 * User: rocezon
 * Date: 6/7/16
 * Time: 3:35 PM
 */

namespace Custom\WebBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Yaml\Yaml;
use Topxia\Common\ArrayToolkit;
use Topxia\WebBundle\Controller\CourseBaseController;

class AnnouncementController extends CourseBaseController
{
   public function listAction(Request $request,$classroomId)
   {
       $classroomId = intval($classroomId);
       $storage_announcement = $this->getClassroomAnnouncementService()->findAllClassroomAnnouncementByClassroomId($classroomId,0,0);
       return $this->render('CustomWebBundle:Announcement:announcement-list.html.twig',array('announcements' => $storage_announcement));
   }

    public function detailAction(Request $request,$classroomId,$announcementId)
    {
        $classroomId = intval($classroomId);
        $announcementId = intval($announcementId);
        $storage_announcement = $this->getClassroomAnnouncementService()->getClassroomAnnouncement($announcementId);
        return $this->render('CustomWebBundle:Announcement:announcement-detail.html.twig',array('announcement' => $storage_announcement));
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