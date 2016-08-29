<?php

/* TopxiaAdminBundle:Block/Label:imglink.html.twig */
class __TwigTemplate_1129f0529135e80ce3755e8171919f1c615ff751d5272077917a884c2a29f445 extends Twig_Template
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
<a class=\"mls title-label js-title-label ellipsis\" style=\"color: #428bca;\" href=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "href", array()), "html", null, true);
        echo "\" target=\"_blank\">";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "alt", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "alt", array()), "")) : ("")), "html", null, true);
        echo "</a>";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Block/Label:imglink.html.twig";
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
/* <a class="mls title-label js-title-label ellipsis" style="color: #428bca;" href="{{ data.href }}" target="_blank">{{ data.alt|default('') }}</a>*/
