<?php

/* TopxiaWebBundle:Course:live-show.html.twig */
class __TwigTemplate_bdf52e3af0963d981f8c69b2e390970cd435e1ccc5de12c868e83a8c75e89a4d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:Course:normal-show.html.twig", "TopxiaWebBundle:Course:live-show.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:Course:normal-show.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:live-show.html.twig";
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
/* {% extends 'TopxiaWebBundle:Course:normal-show.html.twig' %}*/
