<?php
/**
 * Created by PhpStorm.
 * User: XT
 * Date: 16/4/12
 * Time: 11:46
 */

namespace Classroom\ClassroomBundle\Controller;


use Symfony\Component\HttpFoundation\Request;
use Topxia\Common\ArrayToolkit;
use Topxia\Common\Paginator;
use Topxia\WebBundle\Controller\BaseController;

class ClassroomFileManageController extends BaseController
{
    public function indexAction(Request $request, $id)
    {
        $this->getClassroomService()->tryManageClassroom($id);
        $classroom = $this->getClassroomService()->getClassroom($id);

        $type = $request->query->get('type');
        $type = in_array($type, array('classroom')) ? $type : 'classroom';

        $conditions = array(
            'targetType' => $type,
            'targetId' => $classroom['id']
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

        foreach ($files as $key => $file)
        {

            $files[$key]['metas2'] = json_decode($file['metas2'], true) ?: array();

            $files[$key]['convertParams'] = json_decode($file['convertParams']) ?: array();
            $files[$key]['useNum'] = 1;
        }

        $users = $this->getUserService()->findUsersByIds(ArrayToolkit::column($files, 'updatedUserId'));

        $storageSetting = $this->getSettingService()->get("storage");
        return $this->render('ClassroomBundle:ClassroomFileManage:index.html.twig', array(
            'type' => $type,
            'classroom' => $classroom,
            'courseLessons' => $files,
            'users' => ArrayToolkit::index($users, 'id'),
            'paginator' => $paginator,
            'now' => time(),
            'storageSetting' => $storageSetting
        ));
    }


    public function uploadClassroomFilesAction(Request $request, $id, $targetType)
    {
        if (!empty($id))
        {
            $classroom = $this->getClassroomService()->tryManageClassroom($id);
        }
        else
        {
            $classroom = null;
        }
        $storageSetting = $this->getSettingService()->get('storage', array());
        return $this->render('ClassroomBundle:ClassroomFileManage:modal-upload-course-files.html.twig', array(
            'classroom' => $classroom,
            'storageSetting' => $storageSetting,
            'targetType' => $targetType,
            'targetId' => $id,
        ));
    }

    public function batchUploadClassroomFilesAction(Request $request, $id, $targetType)
    {
        if("materiallib" <> $targetType){
            $classroom = $this->getClassroomService()->tryManageClassroom($id);
        }else{
            $classroom = null;
        }

        $storageSetting = $this->getSettingService()->get('storage', array());
        $fileExts = "";

        if("courselesson" == $targetType){
            $fileExts = "*.mp3;*.mp4;*.avi;*.flv;*.wmv;*.mov;*.ppt;*.pptx;*.doc;*.docx;*.pdf;*.swf";
        }

        return $this->render('TopxiaWebBundle:CourseFileManage:batch-upload.html.twig', array(
            'classroom' => $classroom,
            'storageSetting' => $storageSetting,
            'targetType' => $targetType,
            'targetId'=>$id,
            'fileExts'=>$fileExts
        ));
    }


    public function showAction(Request $request, $id, $fileId)
    {
        $classroom = $this->getClassroomService()->tryManageClassroom($id);

        $file = $this->getUploadFileService()->getFile($fileId);


        if (empty($file)) {
            throw $this->createNotFoundException();
        }

        if($id != $file["targetId"]){
            throw $this->createNotFoundException();
        }
        if ($file['targetType'] == 'classroom') {
            return $this->forward('TopxiaWebBundle:CourseLesson:file', array('fileId' => $file['id'], 'isDownload' => false));
        }
        throw $this->createNotFoundException();
    }

    protected function getClassroomService()
    {
        return $this->getServiceKernel()->createService('Classroom:Classroom.ClassroomService');
    }

    protected function getUploadFileService()
    {
        return $this->getServiceKernel()->createService('File.UploadFileService');
    }

    protected function getSettingService()
    {
        return $this->getServiceKernel()->createService('System.SettingService');
    }
}