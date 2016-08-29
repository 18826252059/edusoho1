<?php
/**
 * Created by PhpStorm.
 * User: XT
 * Date: 16/4/16
 * Time: 13:48
 */

namespace Topxia\Service\Custom;


interface CourseProductService
{
    public function addProductByCourseId($data);

    public function deleteProductByCourseId($id);

    public function findProductByCourseId($courseId,$type);

}