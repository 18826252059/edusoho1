<?php

/* TopxiaWebBundle:Question:question-uncertain_choice-finished.html.twig */
class __TwigTemplate_b73a20f68ff6dfa235bec81bf913fc49660c9c6a3aeb1abb03efa52abdaa43ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:Question:question-choice-finished.html.twig", "TopxiaWebBundle:Question:question-uncertain_choice-finished.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:Question:question-choice-finished.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Question:question-uncertain_choice-finished.html.twig";
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
/* {% extends 'TopxiaWebBundle:Question:question-choice-finished.html.twig' %}*/
