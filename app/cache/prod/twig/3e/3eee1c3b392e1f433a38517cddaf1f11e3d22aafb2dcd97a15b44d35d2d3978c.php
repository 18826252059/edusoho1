<?php

/* TopxiaWebBundle:CourseTestpaperManage:list-item.html.twig */
class __TwigTemplate_36abdc03d00a6b154b843391fe325989482f1ee1d791bbfb6d788c98412da8d5 extends Twig_Template
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
        echo "<li class=\"item-chapter  clearfix\" id=\"lesson-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "id", array()), "html", null, true);
        echo "\" style=\"word-break: break-all;\" >
\t<div class=\"item-content\">
\t\t";
        // line 3
        if (_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("course.custom_chapter_enabled"), true)) {
            echo " 
          第 <span class=\"number\">";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "number", array()), "html", null, true);
            echo "</span> ";
            if ($this->env->getExtension('topxia_web_twig')->getSetting("default.chapter_name")) {
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.chapter_name"), "章"), "html", null, true);
            } else {
                echo "章";
            }
            echo "：
\t    ";
        }
        // line 5
        echo "  ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "title", array()), "html", null, true);
        echo "
    \t";
        // line 6
        if (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "status", array()) == "unpublished")) {
            // line 7
            echo "\t      <span class=\"unpublish-warning text-warning\">(未发布)</span>
\t    ";
        }
        // line 9
        echo "\t</div>
\t<div class=\"item-actions prs\">
\t\t<button class=\"btn btn-link\" title=\"编辑\" data-toggle=\"modal\" data-target=\"#modal\" data-keyboard=\"false\" data-url=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_lesson_edit_testpaper", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "lessonId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "id", array()))), "html", null, true);
        echo "\"><i class=\"glyphicon glyphicon-edit\"></i></button>

\t\t  <a class=\"btn btn-link\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_preview_test", array("testId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "mediaId", array()))), "html", null, true);
        echo "\" target=\"_blank\"><span class=\"es-icon es-icon-visibility prs\"></span>预览</a>

   \t\t <span class=\"dropdown\">
\t     \t\t <a class=\"dropdown-toggle dropdown-more\" id=\"dropdown-more\" data-toggle=\"dropdown\" href=\"#\"><i class=\"es-icon es-icon-keyboardarrowdown\" style=\"margin-right:3px\" aria-haspopup=\"true\" aria-expanded=\"false\"></i>更多</a>
\t                 <ul class=\"dropdown-menu pull-right dropdown-menu-more\" role=\"menu\">
\t\t\t     <li class=\"";
        // line 18
        if (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "status", array()) == "published")) {
            echo "hidden ";
        }
        echo "\">
\t\t\t          <a href=\"javascript:;\" class=\"publish-lesson-btn\" data-url=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_lesson_publish", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "lessonId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "id", array()))), "html", null, true);
        echo "\">
\t\t\t            <span class=\"glyphicon glyphicon-ok-circle prs\"></span>发布
\t\t\t          </a>
\t\t\t      </li>

\t\t\t        <li class=\"";
        // line 24
        if (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "status", array()) == "unpublished")) {
            echo "hidden ";
        }
        echo "\">
\t\t\t          <a href=\"javascript:;\" class=\"unpublish-lesson-btn\" data-url=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_lesson_unpublish", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "lessonId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "id", array()))), "html", null, true);
        echo "\">
\t\t\t            <span class=\"glyphicon glyphicon-remove-circle prs\"></span>取消发布
\t\t\t          </a>
\t\t\t        </li>
\t\t\t        <li class=\"";
        // line 29
        if (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "status", array()) == "published")) {
            echo "hidden ";
        }
        echo "\">
\t\t\t          <a href=\"javascript:;\" class=\"delete-lesson-btn\" data-url=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_lesson_delete", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "lessonId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "id", array()))), "html", null, true);
        echo "\">
\t\t\t            <span class=\"glyphicon glyphicon-trash prs\"></span>删除
\t\t\t          </a>
\t\t\t        </li>
\t\t\t       </ul> 
\t\t      </span>
\t\t</div>
</li>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseTestpaperManage:list-item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 30,  95 => 29,  88 => 25,  82 => 24,  74 => 19,  68 => 18,  60 => 13,  55 => 11,  51 => 9,  47 => 7,  45 => 6,  40 => 5,  29 => 4,  25 => 3,  19 => 1,);
    }
}
/* <li class="item-chapter  clearfix" id="lesson-{{ lesson.id }}" style="word-break: break-all;" >*/
/* 	<div class="item-content">*/
/* 		{% if setting('course.custom_chapter_enabled')|default(true) %} */
/*           第 <span class="number">{{ lesson.number }}</span> {% if setting('default.chapter_name') %}{{setting('default.chapter_name')|default('章')}}{% else %}章{% endif %}：*/
/* 	    {% endif %}  {{ lesson.title }}*/
/*     	{% if lesson.status == 'unpublished' %}*/
/* 	      <span class="unpublish-warning text-warning">(未发布)</span>*/
/* 	    {% endif %}*/
/* 	</div>*/
/* 	<div class="item-actions prs">*/
/* 		<button class="btn btn-link" title="编辑" data-toggle="modal" data-target="#modal" data-keyboard="false" data-url="{{ path('course_manage_lesson_edit_testpaper', {courseId:course.id, lessonId:lesson.id}) }}"><i class="glyphicon glyphicon-edit"></i></button>*/
/* */
/* 		  <a class="btn btn-link" href="{{ path('course_manage_preview_test', {testId:lesson.mediaId}) }}" target="_blank"><span class="es-icon es-icon-visibility prs"></span>预览</a>*/
/* */
/*    		 <span class="dropdown">*/
/* 	     		 <a class="dropdown-toggle dropdown-more" id="dropdown-more" data-toggle="dropdown" href="#"><i class="es-icon es-icon-keyboardarrowdown" style="margin-right:3px" aria-haspopup="true" aria-expanded="false"></i>更多</a>*/
/* 	                 <ul class="dropdown-menu pull-right dropdown-menu-more" role="menu">*/
/* 			     <li class="{% if lesson.status == 'published' %}hidden {% endif %}">*/
/* 			          <a href="javascript:;" class="publish-lesson-btn" data-url="{{ path('course_manage_lesson_publish', {courseId:course.id, lessonId:lesson.id}) }}">*/
/* 			            <span class="glyphicon glyphicon-ok-circle prs"></span>发布*/
/* 			          </a>*/
/* 			      </li>*/
/* */
/* 			        <li class="{% if lesson.status == 'unpublished' %}hidden {% endif %}">*/
/* 			          <a href="javascript:;" class="unpublish-lesson-btn" data-url="{{ path('course_manage_lesson_unpublish', {courseId:course.id, lessonId:lesson.id}) }}">*/
/* 			            <span class="glyphicon glyphicon-remove-circle prs"></span>取消发布*/
/* 			          </a>*/
/* 			        </li>*/
/* 			        <li class="{% if lesson.status == 'published' %}hidden {% endif %}">*/
/* 			          <a href="javascript:;" class="delete-lesson-btn" data-url="{{ path('course_manage_lesson_delete', {courseId:course.id, lessonId:lesson.id}) }}">*/
/* 			            <span class="glyphicon glyphicon-trash prs"></span>删除*/
/* 			          </a>*/
/* 			        </li>*/
/* 			       </ul> */
/* 		      </span>*/
/* 		</div>*/
/* </li>*/
