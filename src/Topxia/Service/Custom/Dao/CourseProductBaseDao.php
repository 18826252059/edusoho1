<?php
/**
 * Created by PhpStorm.
 * User: XT
 * Date: 16/4/15
 * Time: 17:39
 */

namespace Topxia\Service\Custom\Dao;


interface CourseProductBaseDao
{

    public function findActiveProductBaseByCourseId($courseId,$all=false);

    public function getCourseProductBase($id);

    public function addCourseProductBase($courseProductBase);

    public function updateByParam($params, $fields);

    public function findCoursesByProductBaseId($productBaseId);
}