<?php
/**
 * Created by PhpStorm.
 * User: XT
 * Date: 16/4/14
 * Time: 20:20
 */

namespace Topxia\AdminBundle\Controller\Custom;

use Topxia\Common\Paginator;
use Symfony\Component\HttpFoundation\Request;
use Topxia\AdminBundle\Controller\BaseController;

class ProductBaseController extends BaseController
{
    public function indexAction(Request $request)
    {
        $total = $this->getProductBaseService()->findAllProductBasesCount();
        $paginator = new Paginator($request, $total, 20);
        $productBases = $this->getProductBaseService()->findAllProductBases($paginator->getOffsetCount(), $paginator->getPerPageCount());

        return $this->render('TopxiaAdminBundle:ProductBase:index.html.twig', array(
            'productBases' => $productBases,
            'paginator' => $paginator
        ));
    }

    public function updateAction(Request $request,$id){
        $productBases = $this->getProductBaseService()->getProductBase($id);
        if (empty($productBases)) {
            throw $this->createNotFoundException();
        }

        if ('POST' == $request->getMethod()) {
            $productBases = $this->getProductBaseService()->updateProductBase($id, $request->request->all());
            $this->setFlashMessage('success', '基地信息更新成功！');
        }

        return $this->render('TopxiaAdminBundle:ProductBase:product-base.html.twig', array(
            'productBase' => $productBases
        ));
    }

    public function createAction(Request $request){
        $productBases=array();
        if ('POST' == $request->getMethod()) {
            $productBases = $this->getProductBaseService()->addProductBase($request->request->all());
            $this->setFlashMessage('success', '基地信息已保存！');
        }

        return $this->render('TopxiaAdminBundle:ProductBase:product-base.html.twig', array(
            'productBase' => $productBases
        ));
    }

    public function deleteAction(Request $request, $id)
    {
        $this->getProductBaseService()->deleteProductBase($id);
        return $this->createJsonResponse( array('status' => 'ok'));
    }

    protected function getProductBaseService()
    {
        return $this->getServiceKernel()->createService('Custom.ProductBaseService');
    }


}