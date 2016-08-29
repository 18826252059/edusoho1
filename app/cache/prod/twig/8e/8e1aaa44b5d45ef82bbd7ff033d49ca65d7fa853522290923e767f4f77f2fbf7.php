<?php

/* TopxiaWebBundle:CourseQuestionCategoryManage:index.html.twig */
class __TwigTemplate_54d2d1141d2cf3283500647f7d8bb2a4bc6ebb5c8265c72bcc542c5f7add361f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:CourseManage:layout.html.twig", "TopxiaWebBundle:CourseQuestionCategoryManage:index.html.twig", 1);
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
        // line 2
        $context["macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "TopxiaWebBundle:CourseQuestionCategoryManage:index.html.twig", 2);
        // line 6
        $context["side_nav"] = "question_category";
        // line 7
        $context["script_controller"] = "quiz-question/catgory";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "题目类别管理 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 9
    public function block_main($context, array $blocks = array())
    {
        // line 10
        echo "
<div class=\"panel panel-default panel-col\">
  <div class=\"panel-heading\">题目类别管理
  <button class=\"btn btn-sm btn-info pull-right add-category\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_question_category_create", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
        echo "\">添加类别</button>

  </div>
  <div class=\"panel-body\">
  <table class=\"table table-hover\" id=\"category-table\">
    <thead>
      <tr>
        <th width=\"70%\">名称</th>
        <th width=\"30%\">操作</th>
      </tr>
    </thead>
    <tbody data-sort-url=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_question_category_sort", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
        echo "\" class=\"tbady-category\">
      ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["id"] => $context["category"]) {
            // line 26
            echo "        ";
            $this->loadTemplate("TopxiaWebBundle:CourseQuestionCategoryManage:tr.html.twig", "TopxiaWebBundle:CourseQuestionCategoryManage:index.html.twig", 26)->display($context);
            // line 27
            echo "      ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 28
            echo "        <tr><td colspan=\"4\"><div class=\"empty\">暂无分类，请添加</div></td></tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "    </tbody>
   </table>
      
  </div>
</div>





";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseQuestionCategoryManage:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 30,  103 => 28,  90 => 27,  87 => 26,  69 => 25,  65 => 24,  51 => 13,  46 => 10,  43 => 9,  36 => 4,  32 => 1,  30 => 7,  28 => 6,  26 => 2,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle:CourseManage:layout.html.twig' %}*/
/* {% import 'TopxiaWebBundle::macro.html.twig' as macro %}*/
/* */
/* {% block title %}题目类别管理 - {{ parent() }}{% endblock %}*/
/* */
/* {% set side_nav = 'question_category' %}*/
/* {% set script_controller = 'quiz-question/catgory' %}*/
/* */
/* {% block main %}*/
/* */
/* <div class="panel panel-default panel-col">*/
/*   <div class="panel-heading">题目类别管理*/
/*   <button class="btn btn-sm btn-info pull-right add-category" data-toggle="modal" data-target="#modal" data-url="{{ path('course_manage_question_category_create', {courseId:course.id}) }}">添加类别</button>*/
/* */
/*   </div>*/
/*   <div class="panel-body">*/
/*   <table class="table table-hover" id="category-table">*/
/*     <thead>*/
/*       <tr>*/
/*         <th width="70%">名称</th>*/
/*         <th width="30%">操作</th>*/
/*       </tr>*/
/*     </thead>*/
/*     <tbody data-sort-url="{{ path('course_manage_question_category_sort',{courseId:course.id})}}" class="tbady-category">*/
/*       {% for id, category in categories %}*/
/*         {% include 'TopxiaWebBundle:CourseQuestionCategoryManage:tr.html.twig' %}*/
/*       {% else %}*/
/*         <tr><td colspan="4"><div class="empty">暂无分类，请添加</div></td></tr>*/
/*       {% endfor %}*/
/*     </tbody>*/
/*    </table>*/
/*       */
/*   </div>*/
/* </div>*/
/* */
/* */
/* */
/* */
/* */
/* {% endblock %}*/
/* */
/* */
/* */
/*  */
