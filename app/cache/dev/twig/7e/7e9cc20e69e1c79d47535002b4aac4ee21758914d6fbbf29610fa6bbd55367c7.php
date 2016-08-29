<?php

/* TopxiaWebBundle:MyCourse:learning.html.twig */
class __TwigTemplate_73159e8b21199831d871a57d7b7f768367262e16c3bb8e66aef347cb4d648577 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:MyCourse:layout.html.twig", "TopxiaWebBundle:MyCourse:learning.html.twig", 1);
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
        $context["tab_nav"] = "learning";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "学习中 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "\t<div class=\"panel panel-default panel-col\">
\t  <div class=\"panel-heading\">我的课程</div>
\t  <div class=\"panel-body\">
  \t\t  \t ";
        // line 11
        $this->loadTemplate("TopxiaWebBundle:MyCourse:nav-pill.html.twig", "TopxiaWebBundle:MyCourse:learning.html.twig", 11)->display($context);
        // line 12
        echo "\t  \t ";
        if ((isset($context["courses"]) ? $context["courses"] : $this->getContext($context, "courses"))) {
            // line 13
            echo "\t\t     ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Course:coursesBlock", array("courses" => (isset($context["courses"]) ? $context["courses"] : $this->getContext($context, "courses")), "view" => "grid", "mode" => "learn")));
            echo "
\t\t\t\t";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : $this->getContext($context, "web_macro")), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator"))), "method"), "html", null, true);
            echo " 
\t\t  ";
        } else {
            // line 16
            echo "\t\t    <div class=\"empty\">暂无学习中的课程</div>
\t\t  ";
        }
        // line 18
        echo "\t  </div>
\t</div>

";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:MyCourse:learning.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 18,  62 => 16,  57 => 14,  52 => 13,  49 => 12,  47 => 11,  42 => 8,  39 => 7,  32 => 3,  28 => 1,  26 => 5,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle:MyCourse:layout.html.twig' %}*/
/* */
/* {% block title %}学习中 - {{ parent() }}{% endblock %}*/
/* */
/* {% set tab_nav = 'learning' %}*/
/* */
/* {% block main %}*/
/* 	<div class="panel panel-default panel-col">*/
/* 	  <div class="panel-heading">我的课程</div>*/
/* 	  <div class="panel-body">*/
/*   		  	 {% include 'TopxiaWebBundle:MyCourse:nav-pill.html.twig' %}*/
/* 	  	 {% if courses %}*/
/* 		     {{ render(controller('TopxiaWebBundle:Course:coursesBlock', {courses:courses, view: 'grid', mode:'learn'})) }}*/
/* 				{{ web_macro.paginator(paginator) }} */
/* 		  {% else %}*/
/* 		    <div class="empty">暂无学习中的课程</div>*/
/* 		  {% endif %}*/
/* 	  </div>*/
/* 	</div>*/
/* */
/* {% endblock %}*/
/* */
/* */
/* */
/* */
/* */
