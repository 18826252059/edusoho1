<?php
/**
 * Created by PhpStorm.
 * User: XT
 * Date: 16/5/3
 * Time: 16:59
 */

namespace Custom\MobileBundle\Controller;


use Symfony\Component\HttpFoundation\Request;

class CourseQuestionController extends CustomMobileBaseController
{
    function addQuestionAction(Request $request)
    {
        $this->init($request);
        if (isset($this->formData['courseId']) && is_numeric($this->formData['courseId']) && $this->formData['courseId'] > 0)
        {

        }
        else
        {
            $this->_result['code'] = 102;
            return $this->createResponse($request);
        }
        if ($this->formData['questionId'] && is_numeric($this->formData['questionId']) && $this->formData['questionId'] > 0)
        {

        }
        else
        {
            $this->_result['code'] = 102;
            return $this->createResponse($request);
        }
        $this->_result['data'] = $this->getCourseQuestion()->addCourseQuestion($this->formData);
        return $this->createResponse($request);
    }


    protected function getCourseQuestion()
    {
        return $this->getServiceKernel()->createService('Custom.CourseQuestionService');
    }
}