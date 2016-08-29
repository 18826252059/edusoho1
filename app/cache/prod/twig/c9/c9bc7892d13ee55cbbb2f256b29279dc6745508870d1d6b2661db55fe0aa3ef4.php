<?php

/* TopxiaWebBundle:Marker:index.html.twig */
class __TwigTemplate_d4c6b7f0fb7ae10c03465c18872bb3e996b5d9dea5f720572c8df6ce18c91c91 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "TopxiaWebBundle:Marker:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 4
        $context["script_controller"] = "marker/index";
        // line 5
        $context["bodyClass"] = "question-manage";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "弹题管理";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "    <div class=\"mvl mhl\">
      <a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_lesson", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-primary mrm\">返回课时管理</a>
      <a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_learn", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "preview" => 1)), "html", null, true);
        echo "#lesson/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "id", array()), "html", null, true);
        echo "\" class=\"btn btn-default mrm\" target=\"_blank\">预览弹题</a>
      <span class=\"text-sm color-gray\">本页面所有操作自动保存</span>
    </div>
  \t<div class=\"lesson-dashboard lesson-dashboard-open\" id=\"lesson-dashboard\"
    data-course-id=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "html", null, true);
        echo "\"
    data-lesson-id=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "id", array()), "html", null, true);
        echo "\"
    data-lesson-mediaid=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "mediaId", array()), "html", null, true);
        echo "\"
    data-hide-media-lesson-learn-btn=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->isFeatureEnabled("hide_media_lesson_learn_btn"), "html", null, true);
        echo "\">
  \t\t";
        // line 18
        $this->loadTemplate("TopxiaWebBundle:Marker:player.html.twig", "TopxiaWebBundle:Marker:index.html.twig", 18)->display($context);
        // line 19
        echo "  \t\t<div class=\"question hidden-xs\" data-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_lesson_question_marker_list", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "lessonId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "id", array()))), "html", null, true);
        echo "\"></div>
  \t</div>
\t<div class=\"modal\"></div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Marker:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 19,  75 => 18,  71 => 17,  67 => 16,  63 => 15,  59 => 14,  50 => 10,  46 => 9,  43 => 8,  40 => 7,  34 => 2,  30 => 1,  28 => 5,  26 => 4,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::layout.html.twig' %}*/
/* {% block title %}弹题管理{% endblock %}*/
/* */
/* {% set script_controller = 'marker/index' %}*/
/* {% set bodyClass="question-manage" %}*/
/* */
/* {% block body %}*/
/*     <div class="mvl mhl">*/
/*       <a href="{{ path('course_manage_lesson', {id:course.id}) }}" class="btn btn-primary mrm">返回课时管理</a>*/
/*       <a href="{{ path('course_learn', {id:course.id, preview:1}) }}#lesson/{{ lesson.id }}" class="btn btn-default mrm" target="_blank">预览弹题</a>*/
/*       <span class="text-sm color-gray">本页面所有操作自动保存</span>*/
/*     </div>*/
/*   	<div class="lesson-dashboard lesson-dashboard-open" id="lesson-dashboard"*/
/*     data-course-id="{{ course.id }}"*/
/*     data-lesson-id="{{ lesson.id }}"*/
/*     data-lesson-mediaid="{{ lesson.mediaId }}"*/
/*     data-hide-media-lesson-learn-btn="{{ is_feature_enabled('hide_media_lesson_learn_btn') }}">*/
/*   		{% include 'TopxiaWebBundle:Marker:player.html.twig' %}*/
/*   		<div class="question hidden-xs" data-url="{{ path('course_lesson_question_marker_list',{courseId:course.id,lessonId:lesson.id})}}"></div>*/
/*   	</div>*/
/* 	<div class="modal"></div>*/
/* {% endblock %}*/
