<?php
/**
 * Created by PhpStorm.
 * User: XT
 * Date: 16/5/3
 * Time: 16:52
 */

namespace Topxia\Service\Custom;


interface CourseQuestionService
{
    public function addCourseQuestion(array $courseQuestion);

    public function getQuestionIdsByCourseId($courseId);
}