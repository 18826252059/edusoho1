<?php

/* @theme/default/block/home_top_banner.template.html.twig */
class __TwigTemplate_0158dab1a7c48a1d9f4260f7d2bd6e3bf11395bded416546cd763a9530349be8 extends Twig_Template
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
        $context['_seq'] = twig_ensure_traversable(((array_key_exists("carousel", $context)) ? (_twig_default_filter((isset($context["carousel"]) ? $context["carousel"] : $this->getContext($context, "carousel")), null)) : (null)));
        foreach ($context['_seq'] as $context["_key"] => $context["imglink"]) {
            if ((($this->getAttribute($context["imglink"], "src", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["imglink"], "src", array()), "")) : (""))) {
                // line 2
                echo "  <a href=\"";
                echo twig_escape_filter($this->env, (($this->getAttribute($context["imglink"], "href", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["imglink"], "href", array()), "")) : ("")), "html", null, true);
                echo "\" target=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["imglink"], "target", array()), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, (($this->getAttribute($context["imglink"], "src", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["imglink"], "src", array()), "")) : ("")), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, (($this->getAttribute($context["imglink"], "alt", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["imglink"], "alt", array()), "")) : ("")), "html", null, true);
                echo "\"></a>
";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['imglink'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "@theme/default/block/home_top_banner.template.html.twig";
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
/*   <a href="{{ imglink.href|default('') }}" target="{{ imglink.target }}"><img src="{{ imglink.src|default('') }}" alt="{{ imglink.alt|default('') }}"></a>*/
/* {% endfor %}*/
