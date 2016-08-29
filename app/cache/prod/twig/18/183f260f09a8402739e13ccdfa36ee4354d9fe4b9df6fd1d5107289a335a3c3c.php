<?php

/* TopxiaWebBundle::dialog-layout.json.twig */
class __TwigTemplate_dc443dfb11d463f198af3bd0d46c1c11a0898502a8556bbac94c92b05802a364 extends Twig_Template
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
        // line 1
        echo twig_jsonencode_filter(array("id" => ((array_key_exists("id", $context)) ? (_twig_default_filter((isset($context["id"]) ? $context["id"] : null), "")) : ("")), "title" => ((array_key_exists("title", $context)) ? (_twig_default_filter((isset($context["title"]) ? $context["title"] : null), "")) : ("")), "body" => ((array_key_exists("body", $context)) ? (_twig_default_filter((isset($context["body"]) ? $context["body"] : null), "")) : ("")), "footer" => ((array_key_exists("footer", $context)) ? (_twig_default_filter((isset($context["footer"]) ? $context["footer"] : null), "")) : (""))));
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle::dialog-layout.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* {{ {id: id|default(''), title: title|default(''), body:body|default(''), footer:footer|default('')}|json_encode|raw }}*/
