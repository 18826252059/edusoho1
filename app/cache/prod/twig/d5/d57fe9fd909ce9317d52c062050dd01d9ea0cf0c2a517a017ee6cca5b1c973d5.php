<?php

/* TopxiaAdminBundle:Block/Label:text.html.twig */
class __TwigTemplate_46b5604a01d5e62672d48ab4a9ba7c4979ea0509d0020eeda47b2a22f7b6025e extends Twig_Template
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
        echo "<span class=\"title-label js-title-label ellipsis\" data-no-link=\"true\">";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "value", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "value", array()), null)) : (null)), "html", null, true);
        echo "</span>";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Block/Label:text.html.twig";
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
/* <span class="title-label js-title-label ellipsis" data-no-link="true">{{ data.value|default(null) }}</span>*/
