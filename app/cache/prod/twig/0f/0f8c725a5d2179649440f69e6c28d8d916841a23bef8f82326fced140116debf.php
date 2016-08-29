<?php

/* TopxiaWebBundle:CourseThread:form.html.twig */
class __TwigTemplate_cc5bd5c3a23e2ef1d076b7a89072752d0e67a52e79b99cd7c4f804947b4a185f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:Course:normal-layout.html.twig", "TopxiaWebBundle:CourseThread:form.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'course_main' => array($this, 'block_course_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:Course:normal-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["thread"] = ((array_key_exists("thread", $context)) ? (_twig_default_filter((isset($context["thread"]) ? $context["thread"] : null), null)) : (null));
        // line 7
        $context["script_controller"] = "course/thread-form";
        // line 9
        $context["tab"] = "thread";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        if ((isset($context["thread"]) ? $context["thread"] : null)) {
            echo "编辑话题";
        } else {
            echo "发表话题";
        }
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 11
    public function block_course_main($context, array $blocks = array())
    {
        // line 12
        echo "
<ul class=\"breadcrumb\">
  <li><a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_threads", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
        echo "\">讨论区</a></li>
  ";
        // line 15
        if ((isset($context["thread"]) ? $context["thread"] : null)) {
            // line 16
            echo "    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_thread_show", array("courseId" => $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "courseId", array()), "threadId" => $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "id", array()))), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "title", array()), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "title", array()), 10);
            echo "</a></li>
    <li class=\"active\">";
            // line 17
            if (((isset($context["type"]) ? $context["type"] : null) == "question")) {
                echo "编辑问题";
            } else {
                echo "编辑话题";
            }
            echo "</li>
  ";
        } else {
            // line 19
            echo "    <li class=\"active\">";
            if (((isset($context["type"]) ? $context["type"] : null) == "question")) {
                echo "提问题";
            } else {
                echo "发表话题";
            }
            echo "</li>
  ";
        }
        // line 21
        echo "</ul>


<form id=\"thread-form\" class=\"form-vertical\" method=\"post\" 
  ";
        // line 25
        if ((isset($context["thread"]) ? $context["thread"] : null)) {
            // line 26
            echo "    action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_thread_edit", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "id" => $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "id", array()))), "html", null, true);
            echo "\"
  ";
        } else {
            // line 28
            echo "    action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_thread_create", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "\"
    ";
        }
        // line 30
        echo "  >

  <div class=\"form-group\">
    <div class=\"controls\">
      ";
        // line 34
        $context["placeholder"] = ((((isset($context["type"]) ? $context["type"] : null) == "question")) ? ("标题，用一句话说清你的问题") : ("标题"));
        // line 35
        echo "      ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "title", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => (isset($context["placeholder"]) ? $context["placeholder"] : null), "data-display" => "标题")));
        echo "
    </div>
  </div>

  <div class=\"form-group\">
    <div class=\"controls\">
      ";
        // line 41
        echo         // line 42
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(        // line 43
(isset($context["form"]) ? $context["form"] : null), "content", array()), 'widget', array("attr" => array("class" => "form-control", "rows" => 15, "data-display" => "内容", "data-image-upload-url" => $this->env->getExtension('routing')->getPath("editor_upload", array("token" => $this->env->getExtension('topxia_web_twig')->makeUpoadToken("course"))), "data-image-download-url" => $this->env->getExtension('routing')->getPath("editor_download", array("token" => $this->env->getExtension('topxia_web_twig')->makeUpoadToken("course"))))));
        // line 61
        echo "
    </div>
  </div>

  <div class=\"form-group clearfix\">
    <div class=\"controls pull-right\">
      ";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "
      ";
        // line 68
        if ((isset($context["thread"]) ? $context["thread"] : null)) {
            // line 69
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_thread_show", array("courseId" => $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "courseId", array()), "threadId" => $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-link\">取消</a>
        <button type=\"submit\" class=\"btn btn-primary btn-fat\">保存</button>
      ";
        } else {
            // line 72
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_threads", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-link\">取消</a>
        <button type=\"submit\" class=\"btn btn-primary\">发表</button>
      ";
        }
        // line 75
        echo "    </div>
  </div>

  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
</form>



";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseThread:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 78,  159 => 75,  152 => 72,  145 => 69,  143 => 68,  139 => 67,  131 => 61,  129 => 43,  128 => 42,  127 => 41,  117 => 35,  115 => 34,  109 => 30,  103 => 28,  97 => 26,  95 => 25,  89 => 21,  79 => 19,  70 => 17,  61 => 16,  59 => 15,  55 => 14,  51 => 12,  48 => 11,  36 => 5,  32 => 1,  30 => 9,  28 => 7,  26 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle:Course:normal-layout.html.twig' %}*/
/* */
/* {% set thread = thread|default(null) %}*/
/* */
/* {% block title %}{% if thread %}编辑话题{% else %}发表话题{% endif %} - {{ parent() }}{% endblock %}*/
/* */
/* {% set script_controller = 'course/thread-form' %}*/
/* */
/* {% set tab = 'thread' %}*/
/* */
/* {% block course_main %}*/
/* */
/* <ul class="breadcrumb">*/
/*   <li><a href="{{ path('course_threads', {id:course.id}) }}">讨论区</a></li>*/
/*   {% if thread %}*/
/*     <li><a href="{{ path('course_thread_show', {courseId:thread.courseId, threadId:thread.id}) }}" title="{{ thread.title }}">{{ thread.title|plain_text(10) }}</a></li>*/
/*     <li class="active">{% if type == 'question' %}编辑问题{% else %}编辑话题{% endif %}</li>*/
/*   {% else %}*/
/*     <li class="active">{% if type == 'question' %}提问题{% else %}发表话题{% endif %}</li>*/
/*   {% endif %}*/
/* </ul>*/
/* */
/* */
/* <form id="thread-form" class="form-vertical" method="post" */
/*   {% if thread %}*/
/*     action="{{ path('course_thread_edit', {courseId:course.id, id:thread.id}) }}"*/
/*   {% else %}*/
/*     action="{{ path('course_thread_create', {id:course.id}) }}"*/
/*     {% endif %}*/
/*   >*/
/* */
/*   <div class="form-group">*/
/*     <div class="controls">*/
/*       {% set placeholder = type == 'question' ? '标题，用一句话说清你的问题' : '标题' %}*/
/*       {{ form_widget(form.title, {attr:{class:'form-control', placeholder:placeholder, 'data-display':'标题'}}) }}*/
/*     </div>*/
/*   </div>*/
/* */
/*   <div class="form-group">*/
/*     <div class="controls">*/
/*       {{ */
/*         form_widget(*/
/*           form.content, {*/
/*             attr:{*/
/*               class:'form-control', */
/*               rows:15, */
/*               'data-display':'内容', */
/*               'data-image-upload-url': path(*/
/*                 'editor_upload', {*/
/*                   token:upload_token('course')*/
/*                 }*/
/*               ), */
/*               'data-image-download-url': path(*/
/*                 'editor_download', {*/
/*                   token:upload_token('course')*/
/*                 }*/
/*               ) */
/*             }*/
/*           }*/
/*         ) */
/*       }}*/
/*     </div>*/
/*   </div>*/
/* */
/*   <div class="form-group clearfix">*/
/*     <div class="controls pull-right">*/
/*       {{ form_rest(form) }}*/
/*       {% if thread %}*/
/*         <a href="{{ path('course_thread_show', {courseId:thread.courseId, threadId:thread.id}) }}" class="btn btn-link">取消</a>*/
/*         <button type="submit" class="btn btn-primary btn-fat">保存</button>*/
/*       {% else %}*/
/*         <a href="{{ path('course_threads', {id:course.id}) }}" class="btn btn-link">取消</a>*/
/*         <button type="submit" class="btn btn-primary">发表</button>*/
/*       {% endif  %}*/
/*     </div>*/
/*   </div>*/
/* */
/*   <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/* </form>*/
/* */
/* */
/* */
/* {% endblock %}*/
/* */
