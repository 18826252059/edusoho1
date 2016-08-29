<?php

/* TopxiaWebBundle:CourseQuestionManage:question-form-single_choice.html.twig */
class __TwigTemplate_cd57cc1c1d459d0cf650037bbfff6d6d0a714730592465478378dde32490d13e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:CourseQuestionManage:question-form-choice.html.twig", "TopxiaWebBundle:CourseQuestionManage:question-form-single_choice.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:CourseQuestionManage:question-form-choice.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseQuestionManage:question-form-single_choice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle:CourseQuestionManage:question-form-choice.html.twig' %}*/
