<?php
/**
 * Created by PhpStorm.
 * User: XT
 * Date: 16/4/16
 * Time: 13:48
 */

namespace Topxia\Service\Custom;


interface CourseProductBaseService
{
    public function addProductBaseByCourseId($courseId,$productBaseIds);

    public function deleteProductBaseByCourseId($courseId,$productBaseId);

    public function findCoursesByProductBaseId($productBaseId);

}