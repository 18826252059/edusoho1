<?php
/**
 * Created by PhpStorm.
 * User: XT
 * Date: 16/4/12
 * Time: 11:46
 */

namespace Topxia\AdminBundle\Controller\Custom;


use Symfony\Component\HttpFoundation\Request;
use Topxia\Common\ArrayToolkit;
use Topxia\Common\Paginator;
use Topxia\WebBundle\Controller\BaseController;

class ProductBaseFileManageController extends BaseController
{
    public function indexAction(Request $request, $id)
    {
        $productBase = $this->getProductBaseService()->getProductBase($id);

        $type = $request->query->get('type');
        $type = in_array($type, array('productBase')) ? $type : 'productBase';

        $conditions = array(
            'targetType' => $type,
            'targetId' => $productBase['id']
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
        return $this->render('TopxiaAdminBundle:ProductBaseFileManage:index.html.twig', array(
            'type' => $type,
            'productBase' => $productBase,
            'courseLessons' => $files,
            'users' => ArrayToolkit::index($users, 'id'),
            'paginator' => $paginator,
            'now' => time(),
            'storageSetting' => $storageSetting
        ));
    }


    public function uploadProductBaseFilesAction(Request $request, $id, $targetType)
    {
        if (!empty($id))
        {
            $productBase = $this->getProductBaseService()->getProductBase($id);
        }
        else
        {
            $productBase = null;
        }
        $storageSetting = $this->getSettingService()->get('storage', array());
        return $this->render('TopxiaAdminBundle:ProductBaseFileManage:modal-upload-course-files.html.twig', array(
            'productBase' => $productBase,
            'storageSetting' => $storageSetting,
            'targetType' => $targetType,
            'targetId' => $id,
        ));
    }

    public function batchUploadProductBaseFilesAction(Request $request, $id, $targetType)
    {
        if("materiallib" <> $targetType){
            $productBase = $this->getProductBaseService()->getProductBase($id);
        }else{
            $productBase = null;
        }

        $storageSetting = $this->getSettingService()->get('storage', array());
        $fileExts = "";

        if("productBase" == $targetType){
            $fileExts = "*.png,*.jpg,*.jpeg,*.gif,*.png";
        }

        return $this->render('TopxiaAdminBundle:ProductBaseFileManage:batch-upload.html.twig', array(
            'productBase' => $productBase,
            'storageSetting' => $storageSetting,
            'targetType' => $targetType,
            'targetId'=>$id,
            'fileExts'=>$fileExts
        ));
    }


    public function showAction(Request $request, $id, $fileId)
    {
        $productBase = $this->getProductBaseService()->getProductBase($id);

        $file = $this->getUploadFileService()->getFile($fileId);


        if (empty($file)) {
            throw $this->createNotFoundException();
        }

        if($id != $file["targetId"]){
            throw $this->createNotFoundException();
        }
        if ($file['targetType'] == 'productBase') {
            return $this->forward('TopxiaWebBundle:CourseLesson:file', array('fileId' => $file['id'], 'isDownload' => false));
        }
        throw $this->createNotFoundException();
    }

    protected function getProductBaseService()
    {
        return $this->getServiceKernel()->createService('Custom.ProductBaseService');
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