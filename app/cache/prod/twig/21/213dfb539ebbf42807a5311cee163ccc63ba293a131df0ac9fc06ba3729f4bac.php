<?php

/* ClassroomBundle:ClassroomThread:create.html.twig */
class __TwigTemplate_32b35aa1f0f78d3c253440cd0e96cee26e7b09ab9045fe132834019648fbaf0a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ClassroomBundle:Classroom:content-layout.html.twig", "ClassroomBundle:ClassroomThread:create.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
        $context["thread"] = ((array_key_exists("thread", $context)) ? (_twig_default_filter((isset($context["thread"]) ? $context["thread"] : null), null)) : (null));
        // line 7
        $context["script_controller"] = "thread/thread-form";
        // line 8
        $context["nav"] = "thread";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        if ((isset($context["thread"]) ? $context["thread"] : null)) {
            echo "编辑";
            echo $this->env->getExtension('topxia_web_twig')->getDictText("threadType", (isset($context["type"]) ? $context["type"] : null));
        } else {
            echo "发表";
            echo $this->env->getExtension('topxia_web_twig')->getDictText("threadType", (isset($context["type"]) ? $context["type"] : null));
        }
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 9
    public function block_main($context, array $blocks = array())
    {
        // line 10
        echo "
    ";
        // line 11
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Thread:create", array("request" => $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "target" => array("type" => "classroom", "id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array())), "thread" => (isset($context["thread"]) ? $context["thread"] : null), "type" => (isset($context["type"]) ? $context["type"] : null))));
        echo "

";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:ClassroomThread:create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 11,  53 => 10,  50 => 9,  36 => 5,  32 => 1,  30 => 8,  28 => 7,  26 => 3,  11 => 1,);
    }
}
/* {% extends 'ClassroomBundle:Classroom:content-layout.html.twig' %}*/
/* */
/* {% set thread = thread|default(null) %}*/
/* */
/* {% block title %}{% if thread %}编辑{{ dict_text('threadType', type) }}{% else %}发表{{ dict_text('threadType', type) }}{% endif %} - {{ parent() }}{% endblock %}*/
/* */
/* {% set script_controller = 'thread/thread-form' %}*/
/* {% set nav = 'thread' %}*/
/* {% block main %}*/
/* */
/*     {{ render(controller('TopxiaWebBundle:Thread:create', {request:app.request, target:{type:'classroom', id:classroom.id}, thread:thread, type:type})) }}*/
/* */
/* {% endblock %}*/
/* */
