<?php
/**
 * Created by PhpStorm.
 * User: XT
 * Date: 16/4/22
 * Time: 21:01
 */

namespace Topxia\WebBundle\Controller\Custom;

use GuzzleHttp\Client;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Yaml\Yaml;
use Topxia\Common\ArrayToolkit;
use Topxia\Common\Paginator;
use Topxia\WebBundle\Controller\BaseController;

class CourseNongziManageController extends BaseController
{
    /**
     * 课程相关资讯
     * @param Request $request
     * @param $id 课程Id
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(Request $request, $id, $type)
    {
        $course = $this->getCourseService()->tryManageCourse($id);

        $course = $this->getCourseService()->getCourse($id);

        $nongzi = $this->getCourseProductService()->findProductByCourseId($id, $type);
        $courseProduct = ArrayToolkit::index($nongzi, 'productId');
        $nongzi = $this->queryProduct($nongzi);

        return $this->render("TopxiaWebBundle:CourseManage/nongzi:nongzi-base.html.twig", array(
            'nongzi' => $nongzi,
            'course' => $course,
            'courseProduct' => $courseProduct,
            'type' => $type));
    }

    public function queryProduct($ids)
    {
        $courseProduct = $ids;
        if (count($ids) > 0)
        {
            $ids = ArrayToolkit::column($ids, 'productId');
            $ids = json_encode($ids);
            $ids = str_replace('[', '', $ids);
            $ids = str_replace(']', '', $ids);
            $ids = str_replace('"', '', $ids);
        }
        $yaml = Yaml::parse(file_get_contents(__DIR__ . '/../../../../Custom/WebBundle/Resources/config/requestParam.yml'));
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
            $product = $response['content'];
            foreach ($product as $k => $v)
            {
                $product[$k]['img'] = $yaml['productImgBase'] . "/{$v['sku']}/s_1.jpg";
            }
        }
        return $product;
    }


    public function listsAction(Request $request, $courseId, $type)
    {
        $yaml = Yaml::parse(file_get_contents(__DIR__ . '/../../../../Custom/WebBundle/Resources/config/requestParam.yml'));
        $serviceVesion = $yaml['productApiServiceVesion'];
        $serviceName = 'product.info.list';
        $serviceMethod = 'GET';
        $paginator = new Paginator(
            $this->get('request'),
            40,
            30
        );
        $catalogId = $request->query->get('catalogId');
        $top = true;
        if (!empty($catalogId) && is_numeric($catalogId) && $catalogId > 0)
        {
            $catalogId = $catalogId;
            $top = false;
        }
        elseif ($type == 'nongzi')
        {
            $catalogId = $yaml['nongziCatalogId'];
        }
        elseif ($type == 'jiaocheng')
        {
            $catalogId = $yaml['jiaochengCatalogId'];
        }
        $data = array(
            'storeId' => 21,
            'catalogId' => $catalogId,
            'pageSize' => $paginator->getPerPageCount(),
            'pageNum' =>  $paginator->getOffsetCount() / $paginator->getPerPageCount() + 1
        );
        $response = $this->getServiceGate()->sendRequest($serviceName, $serviceMethod, $data, $serviceVesion);
        $product = array();
        if (!empty($response['content']))
        {
            $product = $response['content']['productList'];
            foreach ($product as $k => $v)
            {
                $product[$k]['img'] = $yaml['productImgBase'] . "/{$v['sku']}/1.jpg";
            }
            $paginator->setItemCount($response['content']['pageBean']['totalRecordNum']);
        }

        $catalog = $this->catalogAction($request, $type);
        return $this->render("TopxiaWebBundle:CourseManage/nongzi:nongzi-pick-modal.html.twig", array(
            'top' => $top,
            'catalogId' => $catalogId,
            'product' => $product,
            'courseId' => $courseId,
            'paginator' => $paginator,
            'type' => $type,
            'catalog' => $catalog
        ));
    }

    public function catalogAction(Request $request, $type, $catalogId = 0)
    {
        $yaml = Yaml::parse(file_get_contents(__DIR__ . '/../../../../Custom/WebBundle/Resources/config/requestParam.yml'));
        $serviceVesion = $yaml['productApiServiceVesion'];
        $serviceName = 'product.catalog.list';
        $serviceMethod = 'GET';
        if (!empty($catalogId) && is_numeric($catalogId) && $catalogId > 0)
        {

        }
        elseif ($type == 'nongzi')
        {
            $catalogId = $yaml['nongziCatalogId'];
            $catalog = $this->catalogAction($request, $type, $catalogId);
            $nongziCatalog = array(
                array('catalogId' => 242, 'catalogName' => '种子'), array('catalogId' => 241, 'catalogName' => '化肥'), array('catalogId' => 240, 'catalogName' => '农药')
            );
            $catalog = array_merge($catalog, $nongziCatalog);
            foreach ($nongziCatalog as $c)
            {
                $catalog = array_merge($this->catalogAction($request, $type, $c['catalogId']), $catalog);
            }
            return $catalog;
        }
        elseif ($type == 'jiaocheng')
        {
            $catalogId = $yaml['jiaochengCatalogId'];
        }
        $data = array(
            'catalogId' => $catalogId,
        );
        $response = $this->getServiceGate()->sendRequest($serviceName, $serviceMethod, $data, $serviceVesion);
        $catalog = array();
        if (!empty($response['content']))
        {
            $catalog = $response['content'];
        }
        return $catalog;
    }

    public function productSelectAction(Request $request, $courseId, $type)
    {
        $this->getCourseService()->tryManageCourse($courseId);

        $data = $request->request->all();
        if (isset($data['ids']) && $data['ids'] != "")
        {
            $data = json_decode($data['ids'], TRUE);
            if (empty($data))
            {
                return $this->createJsonResponse(array('status' => 'ok'));
            }
            foreach ($data as $v)
            {
                $v['courseId'] = $courseId;
                $v['type'] = $type;
                $this->getCourseProductService()->addProductByCourseId($v);
            }
        }
        else
        {
            return $this->createJsonResponse(array('status' => 'ok'));
        }
        $this->setFlashMessage('success', "资讯添加成功");
        return $this->createJsonResponse(array('status' => 'ok'));
    }

    public function productDeleteAction(Request $request, $courseId)
    {
        $this->getCourseService()->tryManageCourse($courseId);


        $courseProductId = $request->request->get("courseProductId");
        if (empty($courseProductId) || $courseProductId < 0)
        {
            return $this->createJsonResponse(array('status' => 'ok'));
        }

        $this->getCourseProductService()->deleteProductByCourseId($courseProductId);
        return $this->createJsonResponse(array('status' => 'ok'));
    }

    protected function getCourseService()
    {
        return $this->getServiceKernel()->createService('Course.CourseService');
    }

    protected function getServiceGate()
    {
        return $this->getServiceKernel()->createService('Custom.ServiceGateService');
    }

    protected function getCourseProductService()
    {
        return $this->getServiceKernel()->createService('Custom.CourseProductService');
    }

    protected function getSettingService()
    {
        return $this->getServiceKernel()->createService('System.SettingService');
    }


}