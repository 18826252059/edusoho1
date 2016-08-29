<?php

/* TopxiaAdminBundle:Statistic:index.html.twig */
class __TwigTemplate_b768c65dda5f482b7e7a8f77cbe2029fb62e1bf8f6d71b0e62a5d201f7429d40 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle:Statistic:layout.html.twig", "TopxiaAdminBundle:Statistic:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle:Statistic:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["menu"] = "statistic";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo " 导航管理 ";
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Statistic:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 8,  38 => 7,  32 => 3,  28 => 1,  26 => 5,  11 => 1,);
    }
}
/* {% extends 'TopxiaAdminBundle:Statistic:layout.html.twig' %}*/
/* */
/* {% block title %} 导航管理 {% endblock %}*/
/* */
/* {% set menu = 'statistic' %}*/
/* */
/* {% block main %}*/
/* */
/* */
/* {% endblock %}*/
/* */
