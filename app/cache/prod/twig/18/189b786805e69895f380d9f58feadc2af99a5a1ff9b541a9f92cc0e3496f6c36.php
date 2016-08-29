<?php

/* TopxiaAdminBundle:Block/Label:img.html.twig */
class __TwigTemplate_ddafaa5db22a65b1effda110cb8b1685ff58fb866ab79c582628964a71a877a4 extends Twig_Template
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
        echo "<a class=\"glyphicon glyphicon-picture pull-left js-img-preview\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "src", array())), "html", null, true);
        echo "\" target=\"_blank\"></a>
<span class=\"mls title-label js-title-label ellipsis\">";
        // line 2
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "alt", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "alt", array()), "")) : ("")), "html", null, true);
        echo "</span>";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Block/Label:img.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 2,  19 => 1,);
    }
}
/* <a class="glyphicon glyphicon-picture pull-left js-img-preview" href="{{ asset(data.src) }}" target="_blank"></a>*/
/* <span class="mls title-label js-title-label ellipsis">{{ data.alt|default('') }}</span>*/
