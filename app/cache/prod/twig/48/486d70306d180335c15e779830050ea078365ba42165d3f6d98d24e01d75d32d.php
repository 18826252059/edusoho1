<?php

/* TopxiaWebBundle:CourseStudentManage:import.step3.html.twig */
class __TwigTemplate_12f3481e94fb67a04c67aaf62741f77d5e133c77305430ecfdc3e3b622cc401c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:CourseManage:layout.html.twig", "TopxiaWebBundle:CourseStudentManage:import.step3.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:CourseManage:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["side_nav"] = "students";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "导入管理 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "

";
        // line 10
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Importer:importExcelData", array("request" => $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "target" => array("type" => "course", "id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array())))));
        echo "

";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseStudentManage:import.step3.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 10,  42 => 8,  39 => 7,  32 => 3,  28 => 1,  26 => 5,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle:CourseManage:layout.html.twig' %}*/
/* */
/* {% block title %}导入管理 - {{ parent() }}{% endblock %}*/
/* */
/* {% set side_nav = 'students' %}*/
/* */
/* {% block main %}*/
/* {{ web_macro.flash_messages() }}*/
/* */
/* {{ render(controller('TopxiaWebBundle:Importer:importExcelData',{request:app.request, target:{type:'course', id:course.id}})) }}*/
/* */
/* {% endblock %}*/
