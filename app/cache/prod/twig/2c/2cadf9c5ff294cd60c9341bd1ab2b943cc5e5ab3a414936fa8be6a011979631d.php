<?php

/* TopxiaWebBundle:Content:list.html.twig */
class __TwigTemplate_a12a07ab1aac1af7185f547e01b71e67f40b6fd3a9a19dc5bebd392236934496 extends Twig_Template
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
(isset($context["type"]) ? $context["type"] : null)) . "/list.html.twig"), 1 => (("TopxiaWebBundle:Content:" .         // line 4
(isset($context["type"]) ? $context["type"] : null)) . "-list.html.twig")), "TopxiaWebBundle:Content:list.html.twig", 2)->display($context);
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Content:list.html.twig";
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
/* 		'@customize/content/' ~  type  ~ '/list.html.twig',*/
/* 		'TopxiaWebBundle:Content:' ~  type  ~ '-list.html.twig'*/
/* 	]*/
/* %}*/
