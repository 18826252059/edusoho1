<?php
/**
 * Created by PhpStorm.
 * User: XT
 * Date: 16/4/14
 * Time: 20:49
 */

namespace Topxia\Service\Custom\Impl;


use Topxia\Common\ArrayToolkit;
use Topxia\Service\Common\BaseService;
use Topxia\Service\Custom\ProductBaseService;

class ProductBaseServiceImpl extends BaseService implements ProductBaseService
{

    public function findAllProductBasesCount()
    {
        return $this->getProductBaseDao()->findAllProductBasesCount();
    }

    public function findAllProductBases($start, $limit)
    {
        return $this->getProductBaseDao()->findAllProductBases($start, $limit);
    }


    public function getProductBase($id)
    {
        return $this->getProductBaseDao()->getProductBase($id);
    }

    public function updateProductBase($id, array $fields)
    {
        $productBase = $this->getProductBase($id);
        if (empty($productBase))
        {
            throw $this->createServiceException("基地信息(#{$id})不存在，更新失败！");
        }

        $fields = ArrayToolkit::parts($fields, array('title', 'about', 'baiduLon', 'baiduLat', 'address'));
        $this->filterproductBaseFields($fields, $productBase);

        $this->getLogService()->info('productBase', 'update', "编辑基地基础信息(#{$id})");

        return $this->getProductBaseDao()->updateProductBase($id, $fields);
    }

    public function addProductBase(array $productBase)
    {
        $productBase = ArrayToolkit::parts($productBase, array('title', 'about', 'baiduLon', 'baiduLat', 'address'));

        $productBase = $this->filterproductBaseFields($productBase);
        $productBase['createdTime'] = time();

        $productBase = $this->getProductBaseDao()->addProductBase($productBase);

        $this->getLogService()->info('productBase', 'create', "添加基地基础信息(#{$productBase['id']})");

        return $productBase;
    }

    public function deleteProductBase($id)
    {
        $productBase = $this->getProductBase($id);
        if (empty($productBase))
        {
            throw $this->createServiceException("基地信息(#{$id})不存在，更新失败！");
        }

        $fields['status'] = 'delete';

        $this->getLogService()->info('productBase', 'update', "删除基地基础信息(#{$id})");

        return $this->getProductBaseDao()->updateProductBase($id, $fields);
    }

    public function findProductBaseByCourseId($id, $all = false, $start = 0, $limit = 0)
    {
        $productBases = $this->getCourseProductBase()->findActiveProductBaseByCourseId($id, $all, $start, $limit);
        $productBaseIds = ArrayToolkit::column($productBases, 'productBaseId');

        if (empty($productBaseIds))
        {
            return array();
        }

        $productBases = $this->getProductBaseDao()->findProductBasesByIds($productBaseIds, $all);
        $productBases = ArrayToolkit::index($productBases, 'id');

        return $productBases;
    }

    protected function filterproductBaseFields(&$productBase, $relatedProductBase = null)
    {
        if (empty($productBase['title']))
        {
            throw $this->createServiceException('基地名不能为空，添加失败！');
        }

        $productBase['title'] = (string)$productBase['title'];

        return $productBase;
    }


    protected function getProductBaseDao()
    {
        return $this->createDao('Custom.ProductBaseDao');
    }

    protected function getCourseProductBase()
    {
        return $this->createDao('Custom.CourseProductBaseDao');
    }

    protected function getLogService()
    {
        return $this->createService('System.LogService');
    }


    public function searchProductBases($conditions, $start, $limit)
    {

        $orderBy = array('createdTime', 'ASC');


        return $this->getProductBaseDao()->searchProductBases($conditions, $orderBy, $start, $limit);
    }

    public function searchProductBaseCount($conditions)
    {
        return $this->getProductBaseDao()->searchProductBaseCount($conditions);
    }
}