<?php

/* ClassroomBundle:Classroom/Course:notes-list.html.twig */
class __TwigTemplate_babaf2aa6569b4a75e642c9502cd17e9184c66c653dbc1ff1bca12183213b457 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ClassroomBundle:Classroom:content-layout.html.twig", "ClassroomBundle:Classroom/Course:notes-list.html.twig", 1);
        $this->blocks = array(
            'description' => array($this, 'block_description'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ClassroomBundle:Classroom:content-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["nav"] = "note";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_description($context, array $blocks = array())
    {
        echo $this->env->getExtension('topxia_web_twig')->plainTextFilter(((array_key_exists("classroomDescription", $context)) ? (_twig_default_filter((isset($context["classroomDescription"]) ? $context["classroomDescription"] : null), "")) : ("")), 100);
    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        // line 6
        echo "  
  ";
        // line 7
        $this->loadTemplate("ClassroomBundle:Classroom/Course:note-nav.html.twig", "ClassroomBundle:Classroom/Course:notes-list.html.twig", 7)->display($context);
        // line 8
        echo "
  ";
        // line 9
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Course/Note:list", array("request" => $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "courseIds" => (isset($context["courseIds"]) ? $context["courseIds"] : null), "filters" => (isset($context["filters"]) ? $context["filters"] : null))));
        echo "

";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:Classroom/Course:notes-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 9,  46 => 8,  44 => 7,  41 => 6,  38 => 5,  32 => 4,  28 => 1,  26 => 3,  11 => 1,);
    }
}
/* {% extends 'ClassroomBundle:Classroom:content-layout.html.twig' %}*/
/* */
/* {% set nav = 'note' %}*/
/* {% block description %}{{ classroomDescription|default('')|plain_text(100) }}{% endblock %}*/
/* {% block main %}*/
/*   */
/*   {% include 'ClassroomBundle:Classroom/Course:note-nav.html.twig' %}*/
/* */
/*   {{ render(controller('TopxiaWebBundle:Course/Note:list', {request:app.request, courseIds:courseIds, filters:filters})) }}*/
/* */
/* {% endblock %}*/
/* */
