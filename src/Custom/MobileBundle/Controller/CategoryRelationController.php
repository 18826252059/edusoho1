<?php
/**
 * Created by PhpStorm.
 * User: XT
 * Date: 16/5/31
 * Time: 10:51
 */

namespace Custom\MobileBundle\Controller;


use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Yaml\Yaml;
use Topxia\Common\ArrayToolkit;

class CategoryRelationController extends CustomMobileBaseController
{
    private $fromType = "courseCategory";
    private $requestParam;


    public function indexAction(Request $request)
    {
        $this->requestParam = Yaml::parse(file_get_contents(__DIR__ . '/../../WebBundle/Resources/config/requestParam.yml'));
        $this->init($request);
        if (empty($this->formData['categoryId']) || !is_numeric($this->formData['categoryId']) || $this->formData['categoryId'] < 0)
        {
            $this->_result['code'] = 102;
            return $this->createResponse($request);
        }
        $categoryId = $this->formData['categoryId'];
        //查询相关资讯
        $relations = $this->getCategoryRelationService()->findtoIdByfromId($categoryId, $this->fromType, "news");
        $this->_result['data']['relationNews'] = $this->queryNews($relations);

        //查询相关农资
        $relations = $this->getCategoryRelationService()->findtoIdByfromId($categoryId, $this->fromType, "nongzi");
        $this->_result['data']['relationFarmInputs'] = $this->queryProducts($relations, 'nongzi');

        //查询相关教程
        $relations = $this->getCategoryRelationService()->findtoIdByfromId($categoryId, $this->fromType, "jiaocheng");
        $this->_result['data']['relationMaterial'] = $this->queryProducts($relations, 'jiaocheng');
        return $this->createResponse($request);
    }

    private function queryNews($categories)
    {
        $relationNews = array('newsCount' => 0, 'news' => array());
        if (empty($categories))
        {
            return $relationNews;
        }
        $categories = ArrayToolkit::column($categories, "toPath");
        $categories = json_encode($categories);
        $categories = substr($categories, 1, strlen($categories) - 2);
        $categories = str_replace('"', '', $categories);
        $serviceName = 'article.article.list';
        $serviceMethod = 'POST';
        $serviceVesion = $this->requestParam['newsApiServiceVesion'];
        $data = array(
            'appCode' => 'ahl',
            'sectionPaths' => $categories,
            'pageNum' => 1,
            'pageSize' => 3
        );
        $response = $this->getServiceGate()->sendRequest($serviceName, $serviceMethod, $data, $serviceVesion);
        if ($response['code'] == 1 && !empty($response['content']))
        {
            $news = array();
            foreach ($response['content'] as $content)
            {
                $news = array_merge($content['articleInfoList'], $news);
            }
            if (count($news) > 3)
            {
                $news = ArrayToolkit::index($news, 'articleId');
                $randNewsIndex = array_rand($news, 3);
                $randNews[] = $news[$randNewsIndex[0]];
                $randNews[] = $news[$randNewsIndex[1]];
                $randNews[] = $news[$randNewsIndex[2]];
                $news = $randNews;
            }
            if (count($news) > 0)
            {
                $relationNews['newsCount'] = count($news);
                foreach ($news as $n)
                {
                    $relationNews['news'][] = array(
                        'articleId' => intval($n['articleId']),
                        'articleTitle' => $n['articleTitle'],
                        'pictureList' => $n['pictureList'],
                        'pubDate' => $n['pubDate'],
                        'articleType' => intval($n['articleType']),
                        'url' => $n['articleUrl'],
                        'createTime' => $n['pubDate'],
                        'sourceName' => $n['sourceName']);
                }
            }
        }
        return $relationNews;
    }

    private function queryProducts($categories, $type)
    {
        if ($type == 'nongzi')
        {
            $relationMaterial = array('farmInputsCount' => 0, 'farmInputs' => array(), 'url' => $this->requestParam['farmInputsUrl']);
        }
        else
        {
            $relationMaterial = array('materialCount' => 0, 'materials' => array(), 'url' => $this->requestParam['materialsUrl']);
        }

        if (empty($categories))
        {
            return $relationMaterial;
        }
        $serviceVesion = $this->requestParam['productApiServiceVesion'];
        $serviceName = 'product.info.list';
        $serviceMethod = 'GET';
        $responseContent = array();
        foreach ($categories as $c)
        {
            $data = array(
                'storeId' => 21,
                'catalogId' => $c['toId'],
                'pageSize' => 6,
                'pageNum' => 1,
            );
            $response = $this->getServiceGate()->sendRequest($serviceName, $serviceMethod, $data, $serviceVesion);
            if (!empty($response['content']))
            {
                $currentResponseContent = $response['content']['productList'];
                foreach ($currentResponseContent as $k => $v)
                {
                    $currentResponseContent[$k]['img'] = $this->requestParam['productImgBase'] . "/{$v['sku']}/1.jpg";
                }
                $responseContent = array_merge($responseContent, $currentResponseContent);
            }
        }
        if (count($responseContent) > 6)
        {
            $responseContent = ArrayToolkit::index($responseContent, 'productId');
            $randProductsIndex = array_rand($responseContent, 6);
            $randProducts[] = $responseContent[$randProductsIndex[0]];
            $randProducts[] = $responseContent[$randProductsIndex[1]];
            $randProducts[] = $responseContent[$randProductsIndex[2]];
            $randProducts[] = $responseContent[$randProductsIndex[3]];
            $randProducts[] = $responseContent[$randProductsIndex[4]];
            $randProducts[] = $responseContent[$randProductsIndex[5]];
            $responseContent = $randProducts;
        }
        $products = array();
        if (count($responseContent) > 0)
        {
            foreach ($responseContent as $p)
            {
                if (!empty($p['sku']))
                {
                    $products[] = array(
                        'thumbUrl' => $this->requestParam['productImgBase'] . "/{$p['sku']}/1.jpg",
                        'productTitle' => $p['productTitle'],
                        'sku' => $p['sku'],
                        'offerPrice' => $p['offerPrice'],
                        'currency' => $p['currency'],
                        'productId' => intval($p['productId']),
                        'url' => "{$this->requestParam['productUrl']}/{$p['sku']}.shtml"
                    );
                }
            }
        }
        if ($type == 'nongzi')
        {
            $relationMaterial ['farmInputsCount'] = count($products);
            $relationMaterial ['farmInputs'] = $products;
        }
        else
        {
            $relationMaterial ['materialCount'] = count($products);
            $relationMaterial ['materials'] = $products;
        }
        return $relationMaterial;
    }

    protected function getServiceGate()
    {
        return $this->getServiceKernel()->createService('Custom.ServiceGateService');
    }

    protected function getCategoryRelationService()
    {
        return $this->getServiceKernel()->createService('Custom:Relation.CategoryRelationService');
    }

}