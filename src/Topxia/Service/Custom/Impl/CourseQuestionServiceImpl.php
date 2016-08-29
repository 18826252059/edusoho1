<?php
/**
 * Created by PhpStorm.
 * User: XT
 * Date: 16/5/3
 * Time: 16:53
 */

namespace Topxia\Service\Custom\Impl;


use Topxia\Common\ArrayToolkit;
use Topxia\Service\Common\BaseService;
use Topxia\Service\Custom\CourseQuestionService;

class CourseQuestionServiceImpl extends BaseService implements CourseQuestionService
{

    public function addCourseQuestion(array $courseQuestion)
    {
        $courseQuestion = ArrayToolkit::parts($courseQuestion, array('courseId', 'questionId'));

        $courseQuestion['createTime'] = date('Y-m-d H:i:s');

        $courseQuestion = $this->getCourseQuestionDao()->addCourseQuestion($courseQuestion);

        $this->getLogService()->info('courseQuestion', 'create', "添加 课程{$courseQuestion['courseId']}的问答{$courseQuestion['questionId']}");
        return $courseQuestion;
    }

    public function getQuestionIdsByCourseId($courseId)
    {
        return $this->getCourseQuestionDao()->getQuestionIdsByCourseId($courseId);
    }

    protected function getCourseQuestionDao()
    {
        return $this->createDao('Custom.CourseQuestionDao');
    }

    protected function getLogService()
    {
        return $this->createService('System.LogService');
    }


}