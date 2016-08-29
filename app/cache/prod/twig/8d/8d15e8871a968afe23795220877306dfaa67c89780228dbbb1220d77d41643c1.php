<?php

/* ClassroomBundle:ClassroomThread:post-update.html.twig */
class __TwigTemplate_35db0e25c714d51fa5ba7cff280c0031e29f5d30fa8938cfa1f10eef04aecd72 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ClassroomBundle:Classroom:content-layout.html.twig", "ClassroomBundle:ClassroomThread:post-update.html.twig", 1);
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
        $context["post"] = ((array_key_exists("post", $context)) ? (_twig_default_filter((isset($context["post"]) ? $context["post"] : null), null)) : (null));
        // line 7
        $context["script_controller"] = "thread/thread-post-form";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        if ((isset($context["post"]) ? $context["post"] : null)) {
            echo "编辑帖子";
        } else {
            echo "回复帖子";
        }
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 9
    public function block_main($context, array $blocks = array())
    {
        // line 10
        echo "
  <ul class=\"breadcrumb\">
    <li><a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath(($this->getAttribute((isset($context["target"]) ? $context["target"] : null), "type", array()) . "_threads"), array(($this->getAttribute((isset($context["target"]) ? $context["target"] : null), "type", array()) . "Id") => $this->getAttribute((isset($context["target"]) ? $context["target"] : null), "id", array()))), "html", null, true);
        echo "\">话题</a></li>
    <li><a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath(($this->getAttribute((isset($context["target"]) ? $context["target"] : null), "type", array()) . "_thread_show"), array(($this->getAttribute((isset($context["target"]) ? $context["target"] : null), "type", array()) . "Id") => $this->getAttribute((isset($context["target"]) ? $context["target"] : null), "id", array()), "threadId" => $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "id", array()))), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "title", array()), 10);
        echo "</a></li>
    <li class=\"active\">编辑帖子</li>
  </ul>

  ";
        // line 17
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Thread:postUpdate", array("request" => $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "target" => array("type" => "classroom", "id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array())), "thread" => (isset($context["thread"]) ? $context["thread"] : null), "post" => (isset($context["post"]) ? $context["post"] : null))));
        echo "



";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:ClassroomThread:post-update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 17,  57 => 13,  53 => 12,  49 => 10,  46 => 9,  34 => 5,  30 => 1,  28 => 7,  26 => 3,  11 => 1,);
    }
}
/* {% extends 'ClassroomBundle:Classroom:content-layout.html.twig' %}*/
/* */
/* {% set post = post|default(null) %}*/
/* */
/* {% block title %}{% if post %}编辑帖子{% else %}回复帖子{% endif %} - {{ parent() }}{% endblock %}*/
/* */
/* {% set script_controller = 'thread/thread-post-form' %}*/
/* */
/* {% block main %}*/
/* */
/*   <ul class="breadcrumb">*/
/*     <li><a href="{{ path(target.type ~ '_threads', {(target.type ~ 'Id'): target.id}) }}">话题</a></li>*/
/*     <li><a href="{{ path(target.type ~ '_thread_show', {(target.type ~ 'Id'): target.id, threadId: thread.id}) }}">{{ thread.title|plain_text(10) }}</a></li>*/
/*     <li class="active">编辑帖子</li>*/
/*   </ul>*/
/* */
/*   {{ render(controller('TopxiaWebBundle:Thread:postUpdate', {request:app.request, target:{type:'classroom', id:classroom.id}, thread:thread, post:post})) }}*/
/* */
/* */
/* */
/* {% endblock %}*/
/* */
