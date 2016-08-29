<?php
/**
 * Created by PhpStorm.
 * User: XT
 * Date: 16/4/22
 * Time: 21:10
 */

namespace Topxia\Service\Custom\Dao;


interface CourseProductDao
{
    public function addProductByCourseId($data);

    public function deleteProductByCourseId($id);

    public function findProductByCourseId($courseId,$type,$relationType);
}