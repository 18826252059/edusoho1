<?php

/* TopxiaWebBundle:CourseThread:post-form.html.twig */
class __TwigTemplate_4b5e39c7b140b6852f94de5f470d45dd0d1cc88c439e0f0d780ae26b654b8a4f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:Course:normal-layout.html.twig", "TopxiaWebBundle:CourseThread:post-form.html.twig", 1);
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
        $context["tab"] = "thread";
        // line 5
        $context["post"] = ((array_key_exists("post", $context)) ? (_twig_default_filter((isset($context["post"]) ? $context["post"] : null), null)) : (null));
        // line 9
        $context["script_controller"] = "course/thread-post-form";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
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
  <li><a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_thread_show", array("courseId" => $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "courseId", array()), "threadId" => $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "id", array()))), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "title", array()), 10);
        echo "</a></li>
  <li class=\"active\">编辑帖子</li>
</ul>

<form id=\"thread-post-form\" method=\"post\"
  ";
        // line 20
        if ((isset($context["post"]) ? $context["post"] : null)) {
            // line 21
            echo "    action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_thread_post_edit", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "threadId" => $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "threadId", array()), "id" => $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "id", array()))), "html", null, true);
            echo "\"
  ";
        } else {
            // line 23
            echo "    action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_thread_post", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "id" => $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "id", array()))), "html", null, true);
            echo "\"
  ";
        }
        // line 25
        echo "  >
  <div class=\"form-group\">
    <div class=\"controls\">
      ";
        // line 28
        echo         // line 29
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(        // line 30
(isset($context["form"]) ? $context["form"] : null), "content", array()), 'widget', array("attr" => array("class" => "form-control", "rows" => 15, "data-display" => "内容", "data-image-upload-url" => $this->env->getExtension('routing')->getPath("editor_upload", array("token" => $this->env->getExtension('topxia_web_twig')->makeUpoadToken("course"))), "data-image-download-url" => $this->env->getExtension('routing')->getPath("editor_download", array("token" => $this->env->getExtension('topxia_web_twig')->makeUpoadToken("course"))))));
        // line 48
        echo "
    </div>
  </div>
  <div class=\"form-group\">
    <div class=\"controls clearfix\">
      ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "
      <button type=\"submit\" class=\"btn btn-primary pull-right\">发表</button>
      <a href=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_threads", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-link pull-right\">取消</a>
    </div>
  </div>

  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
</form>

";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseThread:post-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 59,  104 => 55,  99 => 53,  92 => 48,  90 => 30,  89 => 29,  88 => 28,  83 => 25,  77 => 23,  71 => 21,  69 => 20,  59 => 15,  55 => 14,  51 => 12,  48 => 11,  36 => 7,  32 => 1,  30 => 9,  28 => 5,  26 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle:Course:normal-layout.html.twig' %}*/
/* */
/* {% set tab = 'thread' %}*/
/* */
/* {% set post = post|default(null) %}*/
/* */
/* {% block title %}{% if post %}编辑帖子{% else %}回复帖子{% endif %} - {{ parent() }}{% endblock %}*/
/* */
/* {% set script_controller = 'course/thread-post-form' %}*/
/* */
/* {% block course_main %}*/
/* */
/* <ul class="breadcrumb">*/
/*   <li><a href="{{ path('course_threads', {id:course.id}) }}">讨论区</a></li>*/
/*   <li><a href="{{ path('course_thread_show', {courseId:thread.courseId, threadId:thread.id}) }}">{{ thread.title|plain_text(10) }}</a></li>*/
/*   <li class="active">编辑帖子</li>*/
/* </ul>*/
/* */
/* <form id="thread-post-form" method="post"*/
/*   {% if post %}*/
/*     action="{{ path('course_thread_post_edit', {courseId:course.id, threadId:post.threadId, id:post.id}) }}"*/
/*   {% else %}*/
/*     action="{{ path('course_thread_post', {courseId:course.id, id:post.id}) }}"*/
/*   {% endif %}*/
/*   >*/
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
/*               )*/
/*             }*/
/*           }*/
/*         ) */
/*       }}*/
/*     </div>*/
/*   </div>*/
/*   <div class="form-group">*/
/*     <div class="controls clearfix">*/
/*       {{ form_rest(form) }}*/
/*       <button type="submit" class="btn btn-primary pull-right">发表</button>*/
/*       <a href="{{ path('course_threads', {id:course.id}) }}" class="btn btn-link pull-right">取消</a>*/
/*     </div>*/
/*   </div>*/
/* */
/*   <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/* </form>*/
/* */
/* {% endblock %}*/
/* */
