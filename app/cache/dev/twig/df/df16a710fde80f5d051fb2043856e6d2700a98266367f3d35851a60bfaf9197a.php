<?php

/* TopxiaWebBundle:Default:show.html.twig */
class __TwigTemplate_15b685b9b76130211c33a173787117dc28ba21f530356b25bdb9637c7dac3cf8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "TopxiaWebBundle:Default:show.html.twig", 1);
        $this->blocks = array(
            'keywords' => array($this, 'block_keywords'),
            'description' => array($this, 'block_description'),
            'full_content' => array($this, 'block_full_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 6
        $context["bodyClass"] = "homepage";
        // line 7
        $context["siteNav"] = "/";
        // line 8
        $context["script_controller"] = "index";
        // line 9
        $context["_target_path"] = $this->env->getExtension('routing')->getPath("homepage");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_keywords($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("site.seo_keywords"), "html", null, true);
    }

    // line 4
    public function block_description($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("site.seo_description"), "html", null, true);
    }

    // line 11
    public function block_full_content($context, array $blocks = array())
    {
        // line 12
        echo "
  ";
        // line 13
        echo $this->env->getExtension('topxia_block_twig')->showBlock("jianmo:home_top_banner");
        echo "

    ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((($this->getAttribute($this->getAttribute((isset($context["themeConfig"]) ? $context["themeConfig"] : null), "blocks", array(), "any", false, true), "left", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["themeConfig"]) ? $context["themeConfig"] : null), "blocks", array(), "any", false, true), "left", array()), array())) : (array())));
        foreach ($context['_seq'] as $context["_key"] => $context["pendant"]) {
            // line 16
            echo "
      ";
            // line 17
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Theme:pendant", array("config" => $context["pendant"])));
            echo "

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pendant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Default:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 20,  69 => 17,  66 => 16,  62 => 15,  57 => 13,  54 => 12,  51 => 11,  45 => 4,  39 => 3,  35 => 1,  33 => 9,  31 => 8,  29 => 7,  27 => 6,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::layout.html.twig' %}*/
/* */
/* {% block keywords %}{{ setting('site.seo_keywords') }}{% endblock %}*/
/* {% block description %}{{ setting('site.seo_description') }}{% endblock %}*/
/* */
/* {% set bodyClass = 'homepage' %}*/
/* {% set siteNav = '/' %}*/
/* {% set script_controller = 'index' %}*/
/* {% set _target_path = path('homepage') %}*/
/* */
/* {% block full_content %}*/
/* */
/*   {{ block_show('jianmo:home_top_banner') }}*/
/* */
/*     {% for pendant in themeConfig.blocks.left|default([]) %}*/
/* */
/*       {{ render(controller('TopxiaWebBundle:Theme:pendant', {config:pendant})) }}*/
/* */
/*     {% endfor %}*/
/* */
/* {% endblock %}*/
/* */
