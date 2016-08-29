<?php

/* TopxiaWebBundle:Course:Part/normal-nav.html.twig */
class __TwigTemplate_ea0dfdf0bebbf2221823b5b9dfad1b4e2acbf9556b81ee2ae214745fc911dfc4 extends Twig_Template
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
        $context["tab"] = ((array_key_exists("tab", $context)) ? (_twig_default_filter((isset($context["tab"]) ? $context["tab"] : $this->getContext($context, "tab")), null)) : (null));
        // line 2
        $context["previewAs"] = $this->env->getExtension('topxia_web_twig')->getParametersFromUrl($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uri", array()));
        // line 3
        echo "<div class=\"nav-btn-tab\">
  <ul class=\"nav nav-tabs\" role=\"tablist\">
    ";
        // line 5
        if ( !(isset($context["member"]) ? $context["member"] : $this->getContext($context, "member"))) {
            // line 6
            echo "      <li role=\"presentation\" ";
            if (((isset($context["tab"]) ? $context["tab"] : $this->getContext($context, "tab")) == "overview")) {
                echo "class=\"active\"";
            }
            echo "><a ";
            if ((isset($context["previewAs"]) ? $context["previewAs"] : $this->getContext($context, "previewAs"))) {
                echo "href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "previewAs" => "guest")), "html", null, true);
                echo "\"";
            } else {
                echo "href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
                echo "\" ";
            }
            echo ">课程概览</a></li>
      <li role=\"presentation\" ";
            // line 7
            if (((isset($context["tab"]) ? $context["tab"] : $this->getContext($context, "tab")) == "lesson-list")) {
                echo "class=\"active\"";
            }
            echo "><a ";
            if ((isset($context["previewAs"]) ? $context["previewAs"] : $this->getContext($context, "previewAs"))) {
                echo "href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_lesson_list", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "previewAs" => "guest")), "html", null, true);
                echo "\"";
            } else {
                echo "href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_lesson_list", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
                echo "\"";
            }
            echo ">课时</a></li>
      <li role=\"presentation\" ";
            // line 8
            if (((isset($context["tab"]) ? $context["tab"] : $this->getContext($context, "tab")) == "review")) {
                echo "class=\"active\"";
            }
            echo "><a ";
            if ((isset($context["previewAs"]) ? $context["previewAs"] : $this->getContext($context, "previewAs"))) {
                echo "href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_review_list", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "previewAs" => "guest")), "html", null, true);
                echo "\"";
            } else {
                echo "href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_review_list", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
                echo "\" ";
            }
            echo ">评价";
            if ($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "ratingNum", array())) {
                echo " <small class=\"text-muted\">( ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "ratingNum", array()), "html", null, true);
                echo " )</small>";
            }
            echo "</a>
      </li>
      <li role=\"presentation\" ";
            // line 10
            if (((isset($context["tab"]) ? $context["tab"] : $this->getContext($context, "tab")) == "note")) {
                echo "class=\"active\"";
            }
            echo "><a ";
            if ((isset($context["previewAs"]) ? $context["previewAs"] : $this->getContext($context, "previewAs"))) {
                echo "href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_notes", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "previewAs" => "guest")), "html", null, true);
                echo "\"";
            } else {
                echo "href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_notes", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
                echo "\"";
            }
            echo "> 笔记";
            if ($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "noteNum", array())) {
                echo " <small class=\"text-muted\">( ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "noteNum", array()), "html", null, true);
                echo " )</small>";
            }
            echo "</a></li>
    ";
        } else {
            // line 12
            echo "      <li role=\"presentation\" ";
            if (((isset($context["tab"]) ? $context["tab"] : $this->getContext($context, "tab")) == "overview")) {
                echo "class=\"active\"";
            }
            echo "><a ";
            if ((isset($context["previewAs"]) ? $context["previewAs"] : $this->getContext($context, "previewAs"))) {
                echo "href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "previewAs" => "member")), "html", null, true);
                echo "\"";
            } else {
                echo "href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
                echo "\"";
            }
            echo ">课时</a></li>
      <li role=\"presentation\" ";
            // line 13
            if (((isset($context["tab"]) ? $context["tab"] : $this->getContext($context, "tab")) == "thread")) {
                echo "class=\"active\"";
            }
            echo "><a ";
            if ((isset($context["previewAs"]) ? $context["previewAs"] : $this->getContext($context, "previewAs"))) {
                echo "href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_threads", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "previewAs" => "member")), "html", null, true);
                echo "\"";
            } else {
                echo "href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_threads", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
                echo "\"";
            }
            echo ">讨论区</a></li>
      <li role=\"presentation\" ";
            // line 14
            if (((isset($context["tab"]) ? $context["tab"] : $this->getContext($context, "tab")) == "material")) {
                echo "class=\"active\"";
            }
            echo "><a ";
            if ((isset($context["previewAs"]) ? $context["previewAs"] : $this->getContext($context, "previewAs"))) {
                echo "href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_materials", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "previewAs" => "member")), "html", null, true);
                echo "\"";
            } else {
                echo "href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_materials", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
                echo "\"";
            }
            echo ">资料区</a></li>
      <li role=\"presentation\" ";
            // line 15
            if (((isset($context["tab"]) ? $context["tab"] : $this->getContext($context, "tab")) == "review")) {
                echo "class=\"active\"";
            }
            echo "><a ";
            if ((isset($context["previewAs"]) ? $context["previewAs"] : $this->getContext($context, "previewAs"))) {
                echo "href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_review_list", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "previewAs" => "member")), "html", null, true);
                echo "\"";
            } else {
                echo "href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_review_list", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
                echo "\"";
            }
            echo ">评价";
            if ($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "ratingNum", array())) {
                echo " <small class=\"text-muted\">( ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "ratingNum", array()), "html", null, true);
                echo " )</small>";
            }
            echo "</a> 
      </li>
      <li role=\"presentation\" ";
            // line 17
            if (((isset($context["tab"]) ? $context["tab"] : $this->getContext($context, "tab")) == "note")) {
                echo "class=\"active\"";
            }
            echo "><a ";
            if ((isset($context["previewAs"]) ? $context["previewAs"] : $this->getContext($context, "previewAs"))) {
                echo " href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_notes", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "previewAs" => "member")), "html", null, true);
                echo "\"";
            } else {
                echo " href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_notes", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
                echo "\"";
            }
            echo ">笔记";
            if ($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "noteNum", array())) {
                echo " <small class=\"text-muted\">( ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "noteNum", array()), "html", null, true);
                echo " )</small>";
            }
            echo "</a>
      </li>
      <li role=\"presentation\" ";
            // line 19
            if (((isset($context["tab"]) ? $context["tab"] : $this->getContext($context, "tab")) == "info")) {
                echo "class=\"active\"";
            }
            echo "><a ";
            if ((isset($context["previewAs"]) ? $context["previewAs"] : $this->getContext($context, "previewAs"))) {
                echo "href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_info", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "previewAs" => "member")), "html", null, true);
                echo "\"";
            } else {
                echo "href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_info", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
                echo "\" ";
            }
            echo ">概览</a></li>
    ";
        }
        // line 21
        echo "
  </ul>

  ";
        // line 24
        if (((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "admin", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "admin", array()), false)) : (false)) || ((($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "role", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "role", array()), "")) : ("")) == "teacher"))) {
            // line 25
            echo "  <div class=\"btnbar hidden-xs\">
    <a href=\"#modal\" data-toggle=\"modal\" data-url=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("announcement_add", array("targetType" => "course", "targetId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-link\">
        <i class=\"es-icon es-icon-anonymous-iconfont\"></i>
        公告
      </a>
  </div>
  ";
        }
        // line 32
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:Part/normal-nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 32,  230 => 26,  227 => 25,  225 => 24,  220 => 21,  203 => 19,  180 => 17,  157 => 15,  141 => 14,  125 => 13,  108 => 12,  85 => 10,  62 => 8,  46 => 7,  29 => 6,  27 => 5,  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% set tab = tab|default(null) %}*/
/* {% set previewAs = get_parameters_from_url(app.request.uri) %}*/
/* <div class="nav-btn-tab">*/
/*   <ul class="nav nav-tabs" role="tablist">*/
/*     {% if not member %}*/
/*       <li role="presentation" {% if tab == 'overview' %}class="active"{% endif %}><a {% if previewAs %}href="{{ path('course_show', {id:course.id,previewAs:'guest'}) }}"{% else %}href="{{ path('course_show', {id:course.id}) }}" {% endif %}>课程概览</a></li>*/
/*       <li role="presentation" {% if tab == 'lesson-list' %}class="active"{% endif %}><a {% if previewAs %}href="{{ path('course_lesson_list', {id:course.id, previewAs:'guest'}) }}"{% else %}href="{{ path('course_lesson_list', {id:course.id})}}"{% endif %}>课时</a></li>*/
/*       <li role="presentation" {% if tab == 'review' %}class="active"{% endif %}><a {% if previewAs %}href="{{ path('course_review_list', {id:course.id,previewAs:'guest'}) }}"{% else %}href="{{ path('course_review_list', {id:course.id}) }}" {% endif %}>评价{% if course.ratingNum %} <small class="text-muted">( {{ course.ratingNum }} )</small>{% endif %}</a>*/
/*       </li>*/
/*       <li role="presentation" {% if tab == 'note' %}class="active"{% endif %}><a {% if previewAs %}href="{{ path('course_notes', {courseId:course.id,previewAs:'guest'}) }}"{% else %}href="{{ path('course_notes', {courseId:course.id}) }}"{% endif %}> 笔记{% if course.noteNum %} <small class="text-muted">( {{ course.noteNum }} )</small>{% endif %}</a></li>*/
/*     {% else %}*/
/*       <li role="presentation" {% if tab == 'overview' %}class="active"{% endif %}><a {% if previewAs %}href="{{ path('course_show', {id:course.id, previewAs:'member'}) }}"{% else %}href="{{ path('course_show', {id:course.id})}}"{% endif %}>课时</a></li>*/
/*       <li role="presentation" {% if tab == 'thread' %}class="active"{% endif %}><a {% if previewAs %}href="{{ path('course_threads', {id:course.id, previewAs:'member'}) }}"{% else %}href="{{ path('course_threads', {id:course.id}) }}"{% endif %}>讨论区</a></li>*/
/*       <li role="presentation" {% if tab == 'material' %}class="active"{% endif %}><a {% if previewAs %}href="{{ path('course_materials', {id:course.id, previewAs:'member'}) }}"{% else %}href="{{ path('course_materials', {id:course.id}) }}"{% endif %}>资料区</a></li>*/
/*       <li role="presentation" {% if tab == 'review' %}class="active"{% endif %}><a {% if previewAs %}href="{{ path('course_review_list', {id:course.id,previewAs:'member'}) }}"{% else %}href="{{ path('course_review_list', {id:course.id}) }}"{% endif %}>评价{% if course.ratingNum %} <small class="text-muted">( {{ course.ratingNum }} )</small>{% endif %}</a> */
/*       </li>*/
/*       <li role="presentation" {% if tab == 'note' %}class="active"{% endif %}><a {% if previewAs %} href="{{ path('course_notes', {courseId:course.id,previewAs:'member'}) }}"{% else %} href="{{ path('course_notes', {courseId:course.id}) }}"{% endif %}>笔记{% if course.noteNum %} <small class="text-muted">( {{ course.noteNum }} )</small>{% endif %}</a>*/
/*       </li>*/
/*       <li role="presentation" {% if tab == 'info' %}class="active"{% endif %}><a {% if previewAs %}href="{{ path('course_info', {id:course.id,previewAs:'member'}) }}"{% else %}href="{{ path('course_info', {id:course.id}) }}" {% endif %}>概览</a></li>*/
/*     {% endif %}*/
/* */
/*   </ul>*/
/* */
/*   {% if app.user.admin|default(false) or member.role|default('') == "teacher" %}*/
/*   <div class="btnbar hidden-xs">*/
/*     <a href="#modal" data-toggle="modal" data-url="{{ path('announcement_add',{targetType:'course',targetId:course.id}) }}" class="btn btn-link">*/
/*         <i class="es-icon es-icon-anonymous-iconfont"></i>*/
/*         公告*/
/*       </a>*/
/*   </div>*/
/*   {% endif %}*/
/* </div>*/
