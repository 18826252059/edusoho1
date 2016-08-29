<?php

/* TopxiaWebBundle:Block:live_top_banner.template.html.twig */
class __TwigTemplate_22c3f208b554bf2ef2101087a0c885bd42d56a25d9a255fe3aa4059c9c028050 extends Twig_Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(((array_key_exists("carousel", $context)) ? (_twig_default_filter((isset($context["carousel"]) ? $context["carousel"] : null), null)) : (null)));
        foreach ($context['_seq'] as $context["_key"] => $context["imglink"]) {
            if ((($this->getAttribute($context["imglink"], "src", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["imglink"], "src", array()), "")) : (""))) {
                // line 2
                echo "  <a href=\"";
                echo twig_escape_filter($this->env, (($this->getAttribute($context["imglink"], "href", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["imglink"], "href", array()), "")) : ("")), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($context["imglink"], "src", array())), "html", null, true);
                echo "\" /></a>
";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['imglink'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Block:live_top_banner.template.html.twig";
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
/* {% for imglink in carousel|default(null) if imglink.src|default('') %}*/
/*   <a href="{{ imglink.href|default('') }}"><img src="{{ asset(imglink.src) }}" /></a>*/
/* {% endfor %}*/
/* */
