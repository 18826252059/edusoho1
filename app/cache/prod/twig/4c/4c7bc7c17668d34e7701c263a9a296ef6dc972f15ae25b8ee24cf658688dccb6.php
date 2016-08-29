<?php

/* ClassroomBundle:Classroom/Course:lessons-list.html.twig */
class __TwigTemplate_c17474700636b2abda0a95940ec1a53059e5a5332c8519c46312bf3a9c591d17 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:CourseLesson:list", array("courseId" => (isset($context["courseId"]) ? $context["courseId"] : null), "member" => (isset($context["member"]) ? $context["member"] : null), "previewUrl" => $this->env->getExtension('routing')->getPath("classroom_course_lessons_preview", array("courseId" => (isset($context["courseId"]) ? $context["courseId"] : null), "classroomId" => (isset($context["classroomId"]) ? $context["classroomId"] : null))))));
        echo "
";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:Classroom/Course:lessons-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* {{ render(controller('TopxiaWebBundle:CourseLesson:list', {courseId: courseId, member: member, previewUrl: path('classroom_course_lessons_preview', {courseId:courseId, classroomId:classroomId})} )) }}*/
/* */
