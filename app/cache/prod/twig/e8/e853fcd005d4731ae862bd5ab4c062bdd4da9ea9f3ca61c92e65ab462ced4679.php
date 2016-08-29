<?php

/* TopxiaWebBundle:My:index.html.twig */
class __TwigTemplate_a6e7e5e7b6525a282f5c45e198ecba331f6775e756a8d061634969616d72f3b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "TopxiaWebBundle:My:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["nav"] = "index";
        // line 4
        $context["bodyClass"] = "index";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "个人中心 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
<div class=\"row\">
  ";
        // line 8
        $this->loadTemplate("TopxiaWebBundle:My:my-nav.html.twig", "TopxiaWebBundle:My:index.html.twig", 8)->display($context);
        // line 9
        echo "    <div class=\"col-md-9\">
        <div class=\"panel panel-default panel-col\">
          <div class=\"panel-heading\">
            ";
        // line 12
        $this->loadTemplate("TopxiaWebBundle:MyCourse:my-courses-nav.html.twig", "TopxiaWebBundle:My:index.html.twig", 12)->display($context);
        // line 13
        echo "              </div>
              <div class=\"panel-body\">
                ";
        // line 15
        if (twig_test_empty((isset($context["learningCourses"]) ? $context["learningCourses"] : null))) {
            // line 16
            echo "                <h3>你还没有学习任何课程，<a href=\"";
            echo $this->env->getExtension('routing')->getPath("course_explore");
            echo "\">来探索更多课程吧！ </a>
            ";
        } else {
            // line 18
            echo "                ";
            $this->loadTemplate("TopxiaWebBundle:MyCourse:my-courses-list.html.twig", "TopxiaWebBundle:My:index.html.twig", 18)->display(array_merge($context, array("users" => (isset($context["users"]) ? $context["users"] : null), "courses" => (isset($context["learningCourses"]) ? $context["learningCourses"] : null))));
            // line 19
            echo "            ";
        }
        // line 20
        echo "            </div>
        </div>
        ";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo "
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:My:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 22,  75 => 20,  72 => 19,  69 => 18,  63 => 16,  61 => 15,  57 => 13,  55 => 12,  50 => 9,  48 => 8,  44 => 6,  41 => 5,  34 => 2,  30 => 1,  28 => 4,  26 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::layout.html.twig' %}*/
/* {% block title %}个人中心 - {{ parent() }}{% endblock %}*/
/* {% set nav = 'index' %}*/
/* {% set bodyClass = 'index' %}*/
/* {% block content %}*/
/* */
/* <div class="row">*/
/*   {% include 'TopxiaWebBundle:My:my-nav.html.twig' %}*/
/*     <div class="col-md-9">*/
/*         <div class="panel panel-default panel-col">*/
/*           <div class="panel-heading">*/
/*             {% include 'TopxiaWebBundle:MyCourse:my-courses-nav.html.twig' %}*/
/*               </div>*/
/*               <div class="panel-body">*/
/*                 {% if learningCourses is empty %}*/
/*                 <h3>你还没有学习任何课程，<a href="{{ path('course_explore') }}">来探索更多课程吧！ </a>*/
/*             {% else %}*/
/*                 {% include 'TopxiaWebBundle:MyCourse:my-courses-list.html.twig' with { users: users, courses: learningCourses } %}*/
/*             {% endif %}*/
/*             </div>*/
/*         </div>*/
/*         {{ web_macro.paginator(paginator) }}*/
/*     </div>*/
/* </div>*/
/* */
/* {% endblock %}*/
/* */
