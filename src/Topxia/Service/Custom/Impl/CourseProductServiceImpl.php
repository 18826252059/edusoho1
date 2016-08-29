<?php
/**
 * Created by PhpStorm.
 * User: XT
 * Date: 16/4/22
 * Time: 21:10
 */

namespace Topxia\Service\Custom\Impl;


use Topxia\Common\ArrayToolkit;
use Topxia\Service\Common\BaseService;
use Topxia\Service\Custom\CourseProductService;

class CourseProductServiceImpl extends BaseService implements CourseProductService
{

    public function addProductByCourseId($data)
    {
        $product = ArrayToolkit::parts($data, array('courseId', 'productId', 'catalogId', 'type','relationType'));

        $product['createTime'] = date('Y-m-d H:i:s');
        $courseProduct = $this->findProductByCourseId($product['courseId'],$product['type']);
        $courseProductIds = ArrayToolkit::column($courseProduct, 'productId');
        if (in_array($product['productId'], $courseProductIds))
        {
            return 0;
        }

        return $this->getCourseProductDao()->addProductByCourseId($product);
    }

    public function deleteProductByCourseId($id)
    {
        return $this->getCourseProductDao()->deleteProductByCourseId($id);
    }

    public function findProductByCourseId($courseId,$type,$relationType='0')
    {
        return $this->getCourseProductDao()->findProductByCourseId($courseId,$type,$relationType);
    }

    protected function getCourseProductDao()
    {
        return $this->createDao('Custom.CourseProductDao');
    }
}