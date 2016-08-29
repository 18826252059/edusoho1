<?php
/**
 * Created by PhpStorm.
 * User: XT
 * Date: 16/4/22
 * Time: 21:10
 */

namespace Topxia\Service\Custom\Dao;


interface CourseNewsDao
{
    public function addNewsByCourseId($data);

    public function deleteNewsByCourseId($id);

    public function findNewsByCourseId($courseId);
}