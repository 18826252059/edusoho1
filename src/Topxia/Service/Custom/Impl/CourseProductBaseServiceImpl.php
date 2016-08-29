<?php
/**
 * Created by PhpStorm.
 * User: XT
 * Date: 16/4/16
 * Time: 13:49
 */

namespace Topxia\Service\Custom\Impl;


use Topxia\Common\ArrayToolkit;
use Topxia\Service\Common\BaseService;
use Topxia\Service\Custom\CourseProductBaseService;

class CourseProductBaseServiceImpl extends BaseService implements CourseProductBaseService
{

    public function addProductBaseByCourseId($courseId, $productBaseIds)
    {
        $productBases = $this->getProductBaseDao()->findProductBasesByIds($productBaseIds);
        $productBases=ArrayToolkit::column($productBases,'id');
        $activeProductBases = $this->getProductBaseService()->findProductBaseByCourseId($courseId,true);
        $activeProductBases=ArrayToolkit::column($activeProductBases,'id');
        $productBasesNotAdd = array_diff($productBases, $activeProductBases);
        foreach ($productBasesNotAdd as $productBase)
        {
            $this->getCourseProductBaseDao()->addCourseProductBase(array('courseId' => $courseId, 'productBaseId' => $productBase, 'disabled' => 0));
        }
        $productBasesAdd = array_diff($productBases, $productBasesNotAdd);
        foreach ($productBasesAdd as $productBase)
        {
            $this->getCourseProductBaseDao()->updateByParam(array('courseId' => $courseId, 'productBaseId' => $productBase), array('disabled' => 0));
        }
    }

    public function deleteProductBaseByCourseId($courseId, $productBaseId)
    {
        $this->getCourseProductBaseDao()->updateByParam(array('courseId' => $courseId, 'productBaseId' => $productBaseId), array('disabled' => 1));
    }

    protected function getCourseProductBaseDao()
    {
        return $this->createDao('Custom.CourseProductBaseDao');
    }

    protected function getProductBaseDao()
    {
        return $this->createDao('Custom.ProductBaseDao');
    }

    protected function getProductBaseService()
    {
        return $this->createService('Custom.ProductBaseService');
    }

    public function findCoursesByProductBaseId($productBaseId)
    {
        return $this->getCourseProductBaseDao()->findCoursesByProductBaseId($productBaseId);
    }
}