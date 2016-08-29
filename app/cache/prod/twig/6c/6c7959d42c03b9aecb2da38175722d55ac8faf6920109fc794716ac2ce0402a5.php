<?php

/* TopxiaWebBundle:LiveCourseReplayManage:index.html.twig */
class __TwigTemplate_c00b600a5f32366cfd5c336e70d4f78188ed9389e9ed30c3e90b800ae4b67f92 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:CourseManage:layout.html.twig", "TopxiaWebBundle:LiveCourseReplayManage:index.html.twig", 1);
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
        $context["side_nav"] = "replay";
        // line 6
        $context["script_controller"] = "course-manage/lesson";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "录播管理 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 8
    public function block_main($context, array $blocks = array())
    {
        // line 9
        echo "
<div class=\"panel panel-default panel-col lesson-manage-panel\">
\t<div class=\"panel-heading\">
\t\t录播管理
\t</div>

\t";
        // line 15
        if (twig_test_empty((isset($context["items"]) ? $context["items"] : null))) {
            // line 16
            echo "
\t <div class=\"empty\">暂无课时内容！</div>

\t ";
        }
        // line 20
        echo "
\t<div class=\"panel-body\">
\t\t<ul class=\"lesson-list sortable-list\" id=\"course-item-list\" data-sort-url=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_lesson_sort", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
        echo "\">

\t\t\t";
        // line 24
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
            // line 25
            echo "\t\t\t  ";
            if (twig_in_filter("chapter", $context["id"])) {
                // line 26
                echo "\t\t\t    ";
                $this->loadTemplate("TopxiaWebBundle:LiveCourseReplayManage:chapter-item.html.twig", "TopxiaWebBundle:LiveCourseReplayManage:index.html.twig", 26)->display(array_merge($context, array("chapter" => $context["item"])));
                // line 27
                echo "\t\t\t  ";
            } elseif (twig_in_filter("lesson", $context["id"])) {
                // line 28
                echo "\t\t\t    ";
                $this->loadTemplate("TopxiaWebBundle:LiveCourseReplayManage:list-item.html.twig", "TopxiaWebBundle:LiveCourseReplayManage:index.html.twig", 28)->display(array_merge($context, array("lesson" => $context["item"])));
                // line 29
                echo "\t\t\t  ";
            }
            // line 30
            echo "\t\t\t";
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
        // line 31
        echo "\t\t\t
\t\t</ul>
\t</div>
</div>

";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:LiveCourseReplayManage:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 31,  101 => 30,  98 => 29,  95 => 28,  92 => 27,  89 => 26,  86 => 25,  69 => 24,  64 => 22,  60 => 20,  54 => 16,  52 => 15,  44 => 9,  41 => 8,  34 => 3,  30 => 1,  28 => 6,  26 => 5,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle:CourseManage:layout.html.twig' %}*/
/* */
/* {% block title %}录播管理 - {{ parent() }}{% endblock %}*/
/* */
/* {% set side_nav = 'replay' %}*/
/* {% set script_controller = 'course-manage/lesson' %}*/
/* */
/* {% block main %}*/
/* */
/* <div class="panel panel-default panel-col lesson-manage-panel">*/
/* 	<div class="panel-heading">*/
/* 		录播管理*/
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
/* */
/* 			{% for id, item in items %}*/
/* 			  {% if 'chapter' in id %}*/
/* 			    {% include 'TopxiaWebBundle:LiveCourseReplayManage:chapter-item.html.twig' with {chapter: item} %}*/
/* 			  {% elseif 'lesson' in id %}*/
/* 			    {% include 'TopxiaWebBundle:LiveCourseReplayManage:list-item.html.twig' with {lesson: item} %}*/
/* 			  {% endif %}*/
/* 			{% endfor %}*/
/* 			*/
/* 		</ul>*/
/* 	</div>*/
/* </div>*/
/* */
/* {% endblock %}*/
/* */
