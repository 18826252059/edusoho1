<?php

/* TopxiaWebBundle:MyQuiz:list-course-test-paper.html.twig */
class __TwigTemplate_352dac9ad965d32bee16e588956157f38e1aa0482e9ebc36c8b4cec279080e25 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:CourseManage:layout.html.twig", "TopxiaWebBundle:MyQuiz:list-course-test-paper.html.twig", 1);
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
        $context["macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "TopxiaWebBundle:MyQuiz:list-course-test-paper.html.twig", 2);
        // line 6
        $context["side_nav"] = "testCheck";
        // line 7
        $context["parentId"] = ((array_key_exists("parentId", $context)) ? (_twig_default_filter((isset($context["parentId"]) ? $context["parentId"] : null), null)) : (null));
        // line 8
        $context["script_controller"] = "test-paper/index";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "试卷批阅 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 10
    public function block_main($context, array $blocks = array())
    {
        // line 11
        echo "
<div class=\"panel panel-default panel-col\">

  <div class=\"panel-heading\">
    试卷批阅
  </div>
  <div class=\"panel-body\">
    <ul class=\"nav nav-tabs\">
      <li class=\"";
        // line 19
        if (((isset($context["status"]) ? $context["status"] : null) == "reviewing")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_test_check", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "status" => "reviewing")), "html", null, true);
        echo "\">未批阅</a></li>
      <li class=\"";
        // line 20
        if (((isset($context["status"]) ? $context["status"] : null) == "finished")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_test_check", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "status" => "finished")), "html", null, true);
        echo "\">已批阅</a></li>
    </ul>
    <br>
    ";
        // line 23
        $this->loadTemplate("TopxiaWebBundle:MyQuiz:list-teacher-test.html.twig", "TopxiaWebBundle:MyQuiz:list-course-test-paper.html.twig", 23)->display($context);
        // line 24
        echo "    
  </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:MyQuiz:list-course-test-paper.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 24,  76 => 23,  66 => 20,  58 => 19,  48 => 11,  45 => 10,  38 => 4,  34 => 1,  32 => 8,  30 => 7,  28 => 6,  26 => 2,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle:CourseManage:layout.html.twig' %}*/
/* {% import 'TopxiaWebBundle::macro.html.twig' as macro %}*/
/* */
/* {% block title %}试卷批阅 - {{ parent() }}{% endblock %}*/
/* */
/* {% set side_nav = 'testCheck' %}*/
/* {% set parentId = parentId | default(null)%}*/
/* {% set script_controller = 'test-paper/index' %}*/
/* */
/* {% block main %}*/
/* */
/* <div class="panel panel-default panel-col">*/
/* */
/*   <div class="panel-heading">*/
/*     试卷批阅*/
/*   </div>*/
/*   <div class="panel-body">*/
/*     <ul class="nav nav-tabs">*/
/*       <li class="{% if status == 'reviewing' %}active{% endif %}"><a href="{{ path('course_manage_test_check', {id:course.id, status:'reviewing'}) }}">未批阅</a></li>*/
/*       <li class="{% if status == 'finished' %}active{% endif %}"><a href="{{ path('course_manage_test_check', {id:course.id, status:'finished'}) }}">已批阅</a></li>*/
/*     </ul>*/
/*     <br>*/
/*     {% include 'TopxiaWebBundle:MyQuiz:list-teacher-test.html.twig' %}*/
/*     */
/*   </div>*/
/* </div>*/
/* */
/* {% endblock %}*/
