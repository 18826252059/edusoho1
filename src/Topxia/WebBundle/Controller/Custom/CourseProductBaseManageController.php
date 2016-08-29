<?php
/**
 * Created by PhpStorm.
 * User: XT
 * Date: 16/4/15
 * Time: 17:20
 */

namespace Topxia\WebBundle\Controller\Custom;


use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Topxia\Common\ArrayToolkit;
use Topxia\Common\Paginator;
use Topxia\WebBundle\Controller\BaseController;

class CourseProductBaseManageController extends BaseController
{

    /**
     * 课程相关基地
     * @param Request $request
     * @param $id 课程Id
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(Request $request, $id)
    {
        $course = $this->getCourseService()->tryManageCourse($id);

        $course = $this->getCourseService()->getCourse($id);

        if ($request->getMethod() == 'POST')
        {
            $courseIds = $request->request->get('courseIds');

            if (empty($courseIds))
            {
                $courseIds = array();
            }

            $this->getClassroomService()->updateClassroomCourses($id, $courseIds);

            $this->setFlashMessage('success', "课程修改成功");

            return $this->redirect($this->generateUrl('classroom_manage_courses', array(
                'id' => $id
            )));
        }

        $productBases = $this->getProductBaseService()->findProductBaseByCourseId($id);
        return $this->render("TopxiaWebBundle:CourseManage:product-base.html.twig", array(
            'productBases' => $productBases,
            'course' => $course));
    }

    public function pickAction(Request $request, $courseId)
    {
        $this->getCourseService()->tryManageCourse($courseId);
        $activeproductBases = $this->getProductBaseService()->findProductBaseByCourseId($courseId);

        $excludeIds = ArrayToolkit::column($activeproductBases, 'id');
        $conditions = array(
            'status' => 'published',
            'excludeIds' => $excludeIds,
        );

        $key = $request->request->get("key");
        if (!empty($key))
        {
            $conditions['title'] = $key;
        }

        $paginator = new Paginator(
            $this->get('request'),
            $this->getProductBaseService()->searchProductBaseCount($conditions),
            5
        );

        $productBases = $this->getProductBaseService()->searchProductBases(
            $conditions,
            $paginator->getOffsetCount(),
            $paginator->getPerPageCount()
        );

        return $this->render("TopxiaWebBundle:CourseManage/ProductBase:product-base-pick-modal.html.twig", array(
            'productBases' => $productBases,
            'courseId' => $courseId,
            'paginator' => $paginator,
        ));
    }

    public function productBaseSelectAction(Request $request, $id)
    {
        $this->getCourseService()->tryManageCourse($id);

        $data = $request->request->all();
        $ids = array();
        if (isset($data['ids']) && $data['ids'] != "")
        {
            $ids = $data['ids'];
            $ids = explode(",", $ids);
        }
        else
        {
            return $this->createJsonResponse(array('status' => 'ok'));
        }

        $this->getCourseProductBaseService()->addProductBaseByCourseId($id, $ids);
        $this->setFlashMessage('success', "基地添加成功");

        return $this->createJsonResponse(array('status' => 'ok'));
    }

    public function productBaseDeleteAction(Request $request, $id)
    {
        $this->getCourseService()->tryManageCourse($id);


        $productBaseId = $request->request->get("productBaseId");
        if (empty($productBaseId) || $productBaseId < 0)
        {
            return $this->createJsonResponse(array('status' => 'ok'));
        }

        $this->getCourseProductBaseService()->deleteProductBaseByCourseId($id, $productBaseId);
        return $this->createJsonResponse(array('status' => 'ok'));
    }

    protected function getCourseService()
    {
        return $this->getServiceKernel()->createService('Course.CourseService');
    }

    protected function getProductBaseService()
    {
        return $this->getServiceKernel()->createService('Custom.ProductBaseService');
    }

    protected function getCourseProductBaseService()
    {
        return $this->getServiceKernel()->createService('Custom.CourseProductBaseService');
    }
}