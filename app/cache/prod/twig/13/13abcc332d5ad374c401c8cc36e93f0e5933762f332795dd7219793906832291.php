<?php

/* TopxiaWebBundle:Partner:message.html.twig */
class __TwigTemplate_8f2b9c3638f5f6c8d74c6e31f2f0e32bf35f48b7e8360339ec37bb15745d586e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:Default:message.html.twig", "TopxiaWebBundle:Partner:message.html.twig", 1);
        $this->blocks = array(
            'head_scripts' => array($this, 'block_head_scripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:Default:message.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head_scripts($context, array $blocks = array())
    {
        echo (isset($context["script"]) ? $context["script"] : null);
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Partner:message.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle:Default:message.html.twig' %}*/
/* */
/* {% block head_scripts %}{{ script|raw }}{% endblock %}*/
