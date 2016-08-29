<?php

/* ClassroomBundle:Classroom:layout.html.twig */
class __TwigTemplate_32d12b604e998a2f9e9314c5e6d93843f47c48497677fab992b60cbcdf4abc44 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "ClassroomBundle:Classroom:layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'keywords' => array($this, 'block_keywords'),
            'top_content' => array($this, 'block_top_content'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $this->env->getExtension('topxia_web_twig')->loadScript("classroombundle/controller/classroom/unjoin");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "title", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 4
    public function block_keywords($context, array $blocks = array())
    {
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "title", array()), "html", null, true);
        echo " ";
    }

    // line 8
    public function block_top_content($context, array $blocks = array())
    {
        // line 9
        echo "
";
        // line 10
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ClassroomBundle:Classroom:header", array("classroomId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "id", array()), "previewAs" => (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "get", array(0 => "previewAs"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "get", array(0 => "previewAs"), "method"), "")) : ("")))));
        echo "

";
    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        // line 15
        echo "  ";
        $this->loadTemplate("ClassroomBundle:Classroom:content-layout.html.twig", "ClassroomBundle:Classroom:layout.html.twig", 15)->display($context);
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:Classroom:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 15,  63 => 14,  56 => 10,  53 => 9,  50 => 8,  42 => 4,  34 => 3,  30 => 1,  28 => 5,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::layout.html.twig' %}*/
/* */
/* {% block title %}{{ classroom.title }} - {{ parent() }}{% endblock %}*/
/* {% block keywords %} {{classroom.title}} {% endblock %}*/
/* {% do load_script('classroombundle/controller/classroom/unjoin') %}*/
/* */
/* */
/* {% block top_content %}*/
/* */
/* {{ render(controller('ClassroomBundle:Classroom:header',{classroomId:classroom.id,previewAs:app.request.get('previewAs')|default("")})) }}*/
/* */
/* {% endblock %}*/
/* */
/* {% block content %}*/
/*   {% include 'ClassroomBundle:Classroom:content-layout.html.twig' %}*/
/* {% endblock %}*/
