<?php

/* TopxiaWebBundle:QuizQuestionTest:question-preview.html.twig */
class __TwigTemplate_935950792d36d13864833e423323316282cce102d17906268d3b438efecdcf99 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "TopxiaWebBundle:QuizQuestionTest:question-preview.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "  <style>
    body {
      background-color: #fff;
    }
  </style>
  <div style=\"padding:20px;\">
  ";
        // line 10
        $this->loadTemplate((("TopxiaWebBundle:QuizQuestionTest:do-test-" . (isset($context["type"]) ? $context["type"] : null)) . ".html.twig"), "TopxiaWebBundle:QuizQuestionTest:question-preview.html.twig", 10)->display($context);
        // line 11
        echo "  </div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:QuizQuestionTest:question-preview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 11,  39 => 10,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::layout.html.twig' %}*/
/* */
/* {% block body %}*/
/*   <style>*/
/*     body {*/
/*       background-color: #fff;*/
/*     }*/
/*   </style>*/
/*   <div style="padding:20px;">*/
/*   {% include 'TopxiaWebBundle:QuizQuestionTest:do-test-' ~ type ~ '.html.twig' %}*/
/*   </div>*/
/* {% endblock %}*/
