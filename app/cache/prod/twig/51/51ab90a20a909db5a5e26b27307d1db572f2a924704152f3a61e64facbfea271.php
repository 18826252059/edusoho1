<?php

/* TopxiaWebBundle:Content:show.html.twig */
class __TwigTemplate_01cfd2e873d02b187ad2b25132ebfdb2d3d960ac3d847b07ac8fe8049c277f85 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $this->loadTemplate(array(0 => (("@customize/content/" .         // line 3
(isset($context["type"]) ? $context["type"] : null)) . "/show.html.twig"), 1 => (("TopxiaWebBundle:Content:" .         // line 4
(isset($context["type"]) ? $context["type"] : null)) . "-show.html.twig")), "TopxiaWebBundle:Content:show.html.twig", 2)->display($context);
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Content:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 4,  20 => 3,  19 => 2,);
    }
}
/* {% */
/* 	include [*/
/* 		'@customize/content/' ~  type  ~ '/show.html.twig',*/
/* 		'TopxiaWebBundle:Content:' ~  type  ~ '-show.html.twig'*/
/* 	]*/
/* %}*/
