<?php

/* TopxiaWebBundle:MyCourse:favorited.html.twig */
class __TwigTemplate_0690391c8cfc953e8078574a58fc352db3fd098f28f70ac18c81ad4766191a9a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:MyCourse:layout.html.twig", "TopxiaWebBundle:MyCourse:favorited.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:MyCourse:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["tab_nav"] = "favorited";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "已收藏 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "<div class=\"panel panel-default panel-col\">
\t  <div class=\"panel-heading\">我的课程</span></div>
\t  \t<div class=\"panel-body\">

\t  \t\t ";
        // line 12
        $this->loadTemplate("TopxiaWebBundle:MyCourse:nav-pill.html.twig", "TopxiaWebBundle:MyCourse:favorited.html.twig", 12)->display($context);
        // line 13
        echo "
 ";
        // line 14
        if ((isset($context["courses"]) ? $context["courses"] : null)) {
            // line 15
            echo "\t\t";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Course:coursesBlock", array("courses" => (isset($context["courses"]) ? $context["courses"] : null), "view" => "grid")));
            echo "
\t\t";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
            echo " 
  ";
        } else {
            // line 18
            echo "    <div class=\"empty\">暂无已收藏的课程</div>
  ";
        }
        // line 20
        echo "
</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:MyCourse:favorited.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 20,  65 => 18,  60 => 16,  55 => 15,  53 => 14,  50 => 13,  48 => 12,  42 => 8,  39 => 7,  32 => 3,  28 => 1,  26 => 5,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle:MyCourse:layout.html.twig' %}*/
/* */
/* {% block title %}已收藏 - {{ parent() }}{% endblock %}*/
/* */
/* {% set tab_nav = 'favorited' %}*/
/* */
/* {% block main %}*/
/* <div class="panel panel-default panel-col">*/
/* 	  <div class="panel-heading">我的课程</span></div>*/
/* 	  	<div class="panel-body">*/
/* */
/* 	  		 {% include 'TopxiaWebBundle:MyCourse:nav-pill.html.twig' %}*/
/* */
/*  {% if courses %}*/
/* 		{{ render(controller('TopxiaWebBundle:Course:coursesBlock', {courses:courses, view: 'grid'})) }}*/
/* 		{{ web_macro.paginator(paginator) }} */
/*   {% else %}*/
/*     <div class="empty">暂无已收藏的课程</div>*/
/*   {% endif %}*/
/* */
/* </div>*/
/* </div>*/
/* {% endblock %}*/
