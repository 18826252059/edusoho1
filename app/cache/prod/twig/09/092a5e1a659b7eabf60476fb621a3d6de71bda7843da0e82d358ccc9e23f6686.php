<?php

/* TopxiaWebBundle:MyTask:index.html.twig */
class __TwigTemplate_b31608ed792a76d2786645dc599c95747a6d926b5357fe129041d9f7d9b6bb5e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:My:layout.html.twig", "TopxiaWebBundle:MyTask:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:My:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["side_nav"] = "my-task";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "我的任务 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "
<div class=\"panel panel-default panel-col\">
    <div class=\"panel-heading\">我的任务日历</div>
     ";
        // line 11
        $this->loadTemplate("TopxiaWebBundle:MyTask:task-calendar.html.twig", "TopxiaWebBundle:MyTask:index.html.twig", 11)->display($context);
        // line 12
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:MyTask:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 12,  47 => 11,  42 => 8,  39 => 7,  32 => 3,  28 => 1,  26 => 5,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle:My:layout.html.twig' %}*/
/* */
/* {% block title %}我的任务 - {{ parent() }}{% endblock %}*/
/* */
/* {% set side_nav = 'my-task' %}*/
/* */
/* {% block main %}*/
/* */
/* <div class="panel panel-default panel-col">*/
/*     <div class="panel-heading">我的任务日历</div>*/
/*      {% include 'TopxiaWebBundle:MyTask:task-calendar.html.twig' %}*/
/* </div>*/
/* {% endblock %}*/
