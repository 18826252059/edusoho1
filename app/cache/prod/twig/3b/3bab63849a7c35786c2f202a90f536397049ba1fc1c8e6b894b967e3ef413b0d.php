<?php

/* TopxiaWebBundle:CourseLessonManage:index.html.twig */
class __TwigTemplate_29d451becc2f95d6ead65ed9f75c996229423ac58a2366a86f6b7ff890ec8274 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:CourseManage:layout.html.twig", "TopxiaWebBundle:CourseLessonManage:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:CourseManage:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["side_nav"] = "lesson";
        // line 6
        $context["script_controller"] = "course-manage/lesson";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "课时管理 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 8
    public function block_main($context, array $blocks = array())
    {
        // line 9
        echo "
<div class=\"panel panel-default panel-col lesson-manage-panel\">
\t<div class=\"panel-heading\">
\t\t<div class=\"pull-right\">

\t\t\t<button class=\"btn btn-info btn-sm\" id=\"lesson-create-btn\" data-toggle=\"modal\" data-target=\"#modal\" data-backdrop=\"static\" data-keyboard=\"false\" data-url=\"";
        // line 14
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "type", array()) == "normal")) {
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_lesson_create", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lpmas_live_course_manage_lesson_create", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
        }
        echo "\"><i class=\"glyphicon glyphicon-plus\"></i> ";
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "type", array()) == "normal")) {
            echo "课时";
        } else {
            echo "直播课时";
        }
        echo "</button>

\t\t\t";
        // line 16
        if ((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "type", array()) == "normal") || ($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "type", array()) == "live"))) {
            // line 17
            echo "\t\t\t\t<button class=\"btn btn-info btn-sm\" id=\"lesson-create-btn\" data-toggle=\"modal\" data-target=\"#modal\" data-backdrop=\"static\" data-keyboard=\"false\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_lesson_create_testpaper", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "\"><i class=\"glyphicon glyphicon-plus\"></i> 试卷</button>
\t\t\t";
        }
        // line 19
        echo "
\t\t\t<div class=\"btn-group\">
\t\t\t  <button type=\"button\" class=\"btn btn-sm btn-success dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t    <i class=\"glyphicon glyphicon-plus\"></i> ";
        // line 22
        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.chapter_name"), "章"), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.part_name"), "节"), "html", null, true);
        echo " <span class=\"caret\"></span>
\t\t\t  </button>
\t\t\t  <ul class=\"dropdown-menu\" role=\"menu\">
\t\t\t    <li>
\t\t\t      <a href=\"#\" id=\"chapter-create-btn\" data-toggle=\"modal\" data-target=\"#modal\" data-backdrop=\"static\" data-keyboard=\"false\" data-url=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_chapter_create", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
        echo "\"><i class=\"glyphicon glyphicon-plus\"></i> 添加 ";
        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.chapter_name"), "章"), "html", null, true);
        echo "</a>
\t\t\t    </li>
\t\t\t    <li>
\t\t\t      <a href=\"#\" id=\"chapter-create-btn\" data-toggle=\"modal\" data-target=\"#modal\" data-backdrop=\"static\" data-keyboard=\"false\" data-url=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_chapter_create", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "type" => "unit")), "html", null, true);
        echo "\"><i class=\"glyphicon glyphicon-plus\"></i> 添加 ";
        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.part_name"), "节"), "html", null, true);
        echo "</a>
\t\t\t    </li>
\t\t\t  </ul>
\t\t\t</div>
\t\t</div>

\t\t课时管理
\t</div>

\t";
        // line 38
        if (twig_test_empty((isset($context["items"]) ? $context["items"] : null))) {
            // line 39
            echo "
\t <div class=\"empty\">暂无课时内容！</div>

\t ";
        }
        // line 43
        echo "
\t<div class=\"panel-body\">
\t\t<ul class=\"lesson-list sortable-list\" id=\"course-item-list\" data-sort-url=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_lesson_sort", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
        echo "\">
\t\t\t";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["id"] => $context["item"]) {
            // line 47
            echo "\t\t\t  ";
            if (twig_in_filter("chapter", $context["id"])) {
                // line 48
                echo "\t\t\t    ";
                $this->loadTemplate("TopxiaWebBundle:CourseChapterManage:list-item.html.twig", "TopxiaWebBundle:CourseLessonManage:index.html.twig", 48)->display(array_merge($context, array("chapter" => $context["item"])));
                // line 49
                echo "\t\t\t  ";
            } elseif (twig_in_filter("lesson", $context["id"])) {
                // line 50
                echo "\t\t\t    ";
                $this->loadTemplate("TopxiaWebBundle:CourseLessonManage:list-item.html.twig", "TopxiaWebBundle:CourseLessonManage:index.html.twig", 50)->display(array_merge($context, array("lesson" => $context["item"], "file" => (($this->getAttribute((isset($context["files"]) ? $context["files"] : null), $this->getAttribute($context["item"], "mediaId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["files"]) ? $context["files"] : null), $this->getAttribute($context["item"], "mediaId", array()), array(), "array"), null)) : (null)))));
                // line 51
                echo "\t\t\t  ";
                // line 55
                echo "\t\t\t  ";
            }
            echo "  
\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "\t\t\t
\t\t</ul>
\t</div>
</div>

";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseLessonManage:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 57,  157 => 55,  155 => 51,  152 => 50,  149 => 49,  146 => 48,  143 => 47,  126 => 46,  122 => 45,  118 => 43,  112 => 39,  110 => 38,  96 => 29,  88 => 26,  79 => 22,  74 => 19,  68 => 17,  66 => 16,  51 => 14,  44 => 9,  41 => 8,  34 => 3,  30 => 1,  28 => 6,  26 => 5,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle:CourseManage:layout.html.twig' %}*/
/* */
/* {% block title %}课时管理 - {{ parent() }}{% endblock %}*/
/* */
/* {% set side_nav = 'lesson' %}*/
/* {% set script_controller = 'course-manage/lesson' %}*/
/* */
/* {% block main %}*/
/* */
/* <div class="panel panel-default panel-col lesson-manage-panel">*/
/* 	<div class="panel-heading">*/
/* 		<div class="pull-right">*/
/* */
/* 			<button class="btn btn-info btn-sm" id="lesson-create-btn" data-toggle="modal" data-target="#modal" data-backdrop="static" data-keyboard="false" data-url="{% if course.type == 'normal' %}{{ path('course_manage_lesson_create', {id:course.id}) }}{% else %}{{ path('lpmas_live_course_manage_lesson_create', {id:course.id}) }}{% endif %}"><i class="glyphicon glyphicon-plus"></i> {% if course.type == 'normal' %}课时{% else %}直播课时{% endif %}</button>*/
/* */
/* 			{% if course.type == 'normal' or course.type == 'live' %}*/
/* 				<button class="btn btn-info btn-sm" id="lesson-create-btn" data-toggle="modal" data-target="#modal" data-backdrop="static" data-keyboard="false" data-url="{{ path('course_manage_lesson_create_testpaper', {id:course.id}) }}"><i class="glyphicon glyphicon-plus"></i> 试卷</button>*/
/* 			{% endif %}*/
/* */
/* 			<div class="btn-group">*/
/* 			  <button type="button" class="btn btn-sm btn-success dropdown-toggle" data-toggle="dropdown">*/
/* 			    <i class="glyphicon glyphicon-plus"></i> {{setting('default.chapter_name')|default('章')}}/{{setting('default.part_name')|default('节')}} <span class="caret"></span>*/
/* 			  </button>*/
/* 			  <ul class="dropdown-menu" role="menu">*/
/* 			    <li>*/
/* 			      <a href="#" id="chapter-create-btn" data-toggle="modal" data-target="#modal" data-backdrop="static" data-keyboard="false" data-url="{{ path('course_manage_chapter_create', {id:course.id}) }}"><i class="glyphicon glyphicon-plus"></i> 添加 {{setting('default.chapter_name')|default('章')}}</a>*/
/* 			    </li>*/
/* 			    <li>*/
/* 			      <a href="#" id="chapter-create-btn" data-toggle="modal" data-target="#modal" data-backdrop="static" data-keyboard="false" data-url="{{ path('course_manage_chapter_create', {id:course.id, type:'unit'}) }}"><i class="glyphicon glyphicon-plus"></i> 添加 {{setting('default.part_name')|default('节')}}</a>*/
/* 			    </li>*/
/* 			  </ul>*/
/* 			</div>*/
/* 		</div>*/
/* */
/* 		课时管理*/
/* 	</div>*/
/* */
/* 	{% if items is empty %}*/
/* */
/* 	 <div class="empty">暂无课时内容！</div>*/
/* */
/* 	 {% endif %}*/
/* */
/* 	<div class="panel-body">*/
/* 		<ul class="lesson-list sortable-list" id="course-item-list" data-sort-url="{{ path('course_manage_lesson_sort', {id:course.id}) }}">*/
/* 			{% for id, item in items %}*/
/* 			  {% if 'chapter' in id %}*/
/* 			    {% include 'TopxiaWebBundle:CourseChapterManage:list-item.html.twig' with {chapter: item} %}*/
/* 			  {% elseif 'lesson' in id  %}*/
/* 			    {% include 'TopxiaWebBundle:CourseLessonManage:list-item.html.twig' with {lesson: item, file: files[item.mediaId]|default(null)} %}*/
/* 			  {#*/
/* 			  {% elseif  item.type == 'testpaper'  %}*/
/* 			      {% include 'TopxiaWebBundle:CourseTestpaperManage:list-item.html.twig' with {lesson: item, file: files[item.mediaId]|default(null)} %}*/
/* 			  #}*/
/* 			  {% endif %}  */
/* 			{% endfor %}*/
/* 			*/
/* 		</ul>*/
/* 	</div>*/
/* </div>*/
/* */
/* {% endblock %}*/
/* */
