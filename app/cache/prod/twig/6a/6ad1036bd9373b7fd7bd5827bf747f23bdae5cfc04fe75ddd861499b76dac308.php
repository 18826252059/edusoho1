<?php

/* TopxiaWebBundle:Question:question-material-reviewing.html.twig */
class __TwigTemplate_d7f2578e839507032453b6d02b24982883ee97ca88211de2a60dfb20582e5733 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:Question:question-material-finished.html.twig", "TopxiaWebBundle:Question:question-material-reviewing.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:Question:question-material-finished.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Question:question-material-reviewing.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle:Question:question-material-finished.html.twig' %}*/
