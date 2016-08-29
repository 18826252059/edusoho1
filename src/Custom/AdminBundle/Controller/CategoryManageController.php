<?php
/**
 * Created by PhpStorm.
 * User: XT
 * Date: 16/5/27
 * Time: 11:22
 */

namespace Custom\AdminBundle\Controller;


use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Yaml\Yaml;
use Topxia\AdminBundle\Controller\BaseController;

class CategoryManageController extends BaseController
{
    private $fromType = "courseCategory";

    public function newsAction(Request $request, $id, $type)
    {
        $category = $this->getCategoryService()->getCategory($id);
        if (empty($category))
        {
            throw $this->createNotFoundException();
        }
        $newsCategory = $this->getCategoryRelationService()->findtoIdByfromId($id, $this->fromType, $type);
        $default = $this->getSettingService()->get('default', array());
        return $this->render("CustomAdminBundle:Category:category-news.html.twig", array('category' => $category, 'newsCategory' => $newsCategory, 'type' => $type, 'default' => $default));
    }


    public function newsCategoriesAction($id, $type)
    {
        $yaml = Yaml::parse(file_get_contents(__DIR__ . '/../../WebBundle/Resources/config/requestParam.yml'));
        $serviceVesion = $yaml['newsApiServiceVesion'];
        $serviceName = 'article.section.query';
        $serviceMethod = 'POST';
        $data = array(
            'websiteCode' => 'ahl',
            'sectionPath' => 'ahlroot'
        );
        $response = $this->getServiceGate()->sendRequest($serviceName, $serviceMethod, $data, $serviceVesion);
        $categories = array();
        if (!empty($response['content']))
        {
            $response['content']['depth'] = 1;
            $categories[] = $response['content'];
            $categories = $this->getAllSectionPath($response['content'], $categories);

        }
        return $this->render("CustomAdminBundle:Category:category-news-pick.html.twig", array('categories' => $categories, 'id' => $id, 'type' => $type));
    }

    public function nongziCategoryAction($id, $type)
    {
        $categories = $this->catalogAction($type);
        return $this->render("CustomAdminBundle:Category:category-nongzi-pick.html.twig", array('categories' => $categories, 'id' => $id, 'type' => $type));
    }

    public function catalogAction($type, $catalogId = 0)
    {
        $yaml = Yaml::parse(file_get_contents(__DIR__ . '/../../WebBundle/Resources/config/requestParam.yml'));
        $serviceVesion = $yaml['productApiServiceVesion'];
        $serviceName = 'product.catalog.list';
        $serviceMethod = 'GET';
        $catalog = array();
        if (!empty($catalogId) && is_numeric($catalogId) && $catalogId > 0)
        {

        }
        elseif ($type == 'nongzi')
        {
            $catalogId = $yaml['nongziCatalogId'];
            $catalog = $this->catalogAction($type, $catalogId);
            $nongziCatalog = array(
                array('catalogId' => $catalogId, 'catalogName' => '农资'),array('catalogId' => 242, 'catalogName' => '种子'), array('catalogId' => 241, 'catalogName' => '化肥'), array('catalogId' => 240, 'catalogName' => '农药')
            );
            $catalog = array_merge($catalog, $nongziCatalog);
            foreach ($nongziCatalog as $c)
            {
                $catalog = array_merge($this->catalogAction($type, $c['catalogId']), $catalog);
            }
            return $catalog;
        }
        elseif ($type == 'jiaocheng')
        {
            $catalogId = $yaml['jiaochengCatalogId'];
            $catalog = array(array('catalogId' => $catalogId, 'catalogName' => '教程'));
        }
        $data = array(
            'catalogId' => $catalogId,
        );
        $response = $this->getServiceGate()->sendRequest($serviceName, $serviceMethod, $data, $serviceVesion);
        if (!empty($response['content']))
        {
            $responaseCatalog = $response['content'];
            foreach ($responaseCatalog as $c)
            {
                $catalog = array_merge($this->catalogAction($type, $c['catalogId']), $responaseCatalog);
            }
        }
        return $catalog;
    }

    public function newsSelectAction(Request $request, $id, $type)
    {
        $category = $this->getCategoryService()->getCategory($id);
        $data = $request->request->all();
        if (isset($data['ids']) && $data['ids'] != "")
        {
            $data = json_decode($data['ids'], TRUE);
            if (empty($data))
            {
                return $this->createJsonResponse(array('status' => 'ok'));
            }
            foreach ($data as $k => $v)
            {
                $data[$k]['toType'] = $type;
            }
            $this->getCategoryRelationService()->add($id, $this->fromType, $category['name'], $data);
        }
        else
        {
            return $this->createJsonResponse(array('status' => 'ok'));
        }
        $this->setFlashMessage('success', "添加成功");
        return $this->createJsonResponse(array('status' => 'ok'));
    }

    public function deleteAction(Request $request, $id)
    {
        $this->getCategoryRelationService()->delete($id);
        return $this->createJsonResponse(array('status' => 'ok'));
    }

    private function getAllSectionPath($data, $categories)
    {
        if ($data['hasChildren'])
        {
            foreach ($data['subSectionList'] as $k => $v)
            {
                $data['subSectionList'][$k]['depth'] = $data['depth'] + 1;
                $categories = array_merge($categories, array($data['subSectionList'][$k]));
                if ($data['subSectionList'][$k]['hasChildren'])
                {
                    $categories = $this->getAllSectionPath($data['subSectionList'][$k], $categories);
                }
            }
        }
        return $categories;
    }

    protected function getCategoryService()
    {
        return $this->getServiceKernel()->createService('Taxonomy.CategoryService');
    }

    protected function getServiceGate()
    {
        return $this->getServiceKernel()->createService('Custom.ServiceGateService');
    }

    protected function getCategoryRelationService()
    {
        return $this->getServiceKernel()->createService('Custom:Relation.CategoryRelationService');
    }

    protected function getSettingService()
    {
        return $this->getServiceKernel()->createService('System.SettingService');
    }

}