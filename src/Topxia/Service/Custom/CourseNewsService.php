<?php
/**
 * Created by PhpStorm.
 * User: XT
 * Date: 16/4/16
 * Time: 13:48
 */

namespace Topxia\Service\Custom;


interface CourseNewsService
{
    public function addNewsByCourseId($data);

    public function deleteNewsByCourseId($id);

    public function findNewsByCourseId($courseId);

}