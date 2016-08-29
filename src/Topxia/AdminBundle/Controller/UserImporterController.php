<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/8/15
 * Time: 10:49
 */
namespace Topxia\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Topxia\Common\ArrayToolkit;
use Topxia\Common\FileToolkit;
use Topxia\Service\Importer\ImporterProcessorFactory;


class UserImporterController extends BaseController
{
    public function ValidateExcelInfoAction(Request $request, $target)
    {
        $processor = $this->getImporterProcessor($target['type']);
        $targetObject = $processor->tryManage($target['id']);

        $data = array();
        $data['excel_example'] = $processor->getExcelExample();
        $data['excel_validate_url'] = $processor->getExcelInfoValidateUrl();
        $data['excel_import_url'] = $processor->getExcelInfoImportUrl();

        if ($request->getMethod() == 'POST') {

            $file = $request->files->get('excel');

            $errorMessage = $processor->validateExcelFile($file);
            if (!empty($errorMessage)) {
                $this->setFlashMessage('danger', $errorMessage);
//                return;
                return $this->render('TopxiaAdminBundle:Import:import.step1.html.twig', array(
                    'targetObject' => $targetObject,
                    'data' => $data
                ));
            }


            $repeatInfo = $processor->checkRepeatData();

            if($repeatInfo){
                return $this->render('TopxiaAdminBundle:Import:import.step2.html.twig', array(
                    'errorInfo' => $repeatInfo,
                    'targetObject' => $targetObject,
                    'data' => $data
                ));

            }

            $userData = $processor->getUserData();
            $allUserData = json_decode($userData['allUserData'],true);

            return $this->render('TopxiaAdminBundle:Import:import.step2.html.twig', array(
                'userCount' => $userData['userCount'],
                'errorInfo' => $userData['errorInfo'],
                'checkInfo' => $userData['checkInfo'],
//                'allUserData' => $userData['allUserData'],
                'allUserData' => $allUserData,
                'data' => $data,
                'targetObject' => $targetObject,
            ));

        }

        //sa:按下“批量。。。”调用上传界面
        return $this->render('TopxiaAdminBundle:Import:import.step1.html.twig', array(
            'data' => $data,
            'targetObject' => $targetObject,
        ));
    }

    public function importExcelDataAction(Request $request, $target)
    {
        $processor = $this->getImporterProcessor($target['type']);
        $targetObject = $processor->tryManage($target['id']);

        $userData = $request->request->get("data");
        $userData = json_decode($userData,true);

        $currentUser = $this->getCurrentUser();
        $userUrl = $this->generateUrl('user_show', array('id'=>$currentUser['id']), true);

        $validateRout = $processor->getExcelInfoValidateUrl();
        $count = $processor->excelDataImporting($targetObject, $userData, $userUrl);

        return $this->render('TopxiaAdminBundle:Import:import.step3.html.twig',
            array(
                'targetObject' => $targetObject,
                'count' => $count,
                'validateRout' => $validateRout,
            )
        );
    }


    protected function getImporterProcessor($targetType)
    {
        return ImporterProcessorFactory::create($targetType);
    }

}
