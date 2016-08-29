<?php
/**
 * Created by PhpStorm.
 * User: XT
 * Date: 16/5/3
 * Time: 16:50
 */

namespace Topxia\Service\Custom\Dao;


interface CourseQuestionDao
{

    public function getCourseQuestion($id);

    public function addCourseQuestion(array $courseQuestion);

    public function getQuestionIdsByCourseId($courseId);

}