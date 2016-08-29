<?php

/* TopxiaWebBundle:CourseThread:post.html.twig */
class __TwigTemplate_7a95dee344b4c5200fd7a6f258b620d77cf3a406f358b6b26e7d879f7edc4bfa extends Twig_Template
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
        echo "<form id=\"thread-post-form\" class=\"form-vertical\" method=\"post\" action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_thread_post", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "id" => $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "id", array()))), "html", null, true);
        echo "\" data-auto-submit=\"false\" novalidate>
  <div class=\"form-group\">
    <div class=\"controls\">
      ";
        // line 4
        echo         // line 5
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute(        // line 6
(isset($context["form"]) ? $context["form"] : null), "content", array()), 'widget', array("attr" => array("class" => "form-control", "rows" => 8, "data-display" => "内容", "data-image-upload-url" => $this->env->getExtension('routing')->getPath("editor_upload", array("token" => $this->env->getExtension('topxia_web_twig')->makeUpoadToken("course"))), "data-image-download-url" => $this->env->getExtension('routing')->getPath("editor_download", array("token" => $this->env->getExtension('topxia_web_twig')->makeUpoadToken("course"))))));
        // line 24
        echo "
    </div>
  </div>
  <div class=\"form-group\">
    <div class=\"controls clearfix\">
      ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "
      <button type=\"submit\" class=\"btn btn-primary pull-right\">添加";
        // line 30
        if (($this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "type", array()) == "question")) {
            echo "答案";
        } else {
            echo "回复";
        }
        echo "</button>
    </div>
  </div>

  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
</form>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseThread:post.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 34,  41 => 30,  37 => 29,  30 => 24,  28 => 6,  27 => 5,  26 => 4,  19 => 1,);
    }
}
/* <form id="thread-post-form" class="form-vertical" method="post" action="{{ path('course_thread_post', {courseId:course.id, id:thread.id}) }}" data-auto-submit="false" novalidate>*/
/*   <div class="form-group">*/
/*     <div class="controls">*/
/*       {{ */
/*         form_widget(*/
/*           form.content, {*/
/*             attr:{*/
/*               class:'form-control', */
/*               rows:8, */
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
/*   <div class="form-group">*/
/*     <div class="controls clearfix">*/
/*       {{ form_rest(form) }}*/
/*       <button type="submit" class="btn btn-primary pull-right">添加{% if thread.type == 'question' %}答案{% else %}回复{% endif %}</button>*/
/*     </div>*/
/*   </div>*/
/* */
/*   <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/* </form>*/
