<?php

/* TopxiaWebBundle:Default:stylesheet.html.twig */
class __TwigTemplate_56ac5b8f667762488c6c67f9efdf6f7e77f669dce65dd624c482ce035e7ac7b1 extends Twig_Template
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
        if ((isset($context["isEditColor"]) ? $context["isEditColor"] : $this->getContext($context, "isEditColor"))) {
            // line 2
            echo "\t";
            $context["maincolor"] = (($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "config", array(), "any", false, true), "maincolor", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "config", array(), "any", false, true), "maincolor", array()), "default")) : ("default"));
            // line 3
            echo "\t";
            $context["navigationcolor"] = (($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "config", array(), "any", false, true), "navigationcolor", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "config", array(), "any", false, true), "navigationcolor", array()), "default")) : ("default"));
        } else {
            // line 5
            echo "\t";
            $context["maincolor"] = (($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "confirmConfig", array(), "any", false, true), "maincolor", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "confirmConfig", array(), "any", false, true), "maincolor", array()), "default")) : ("default"));
            // line 6
            echo "\t";
            $context["navigationcolor"] = (($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "confirmConfig", array(), "any", false, true), "navigationcolor", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "confirmConfig", array(), "any", false, true), "navigationcolor", array()), "default")) : ("default"));
        }
        // line 8
        echo "

";
        // line 10
        if (((isset($context["maincolor"]) ? $context["maincolor"] : $this->getContext($context, "maincolor")) == "default")) {
            // line 11
            echo "  <link href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/v2/bootstrap/css/bootstrap.css"), "html", null, true);
            echo "\" rel=\"stylesheet\" />
";
        } else {
            // line 13
            echo "  <link href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("assets/v2/bootstrap/css/bootstrap-" . (isset($context["maincolor"]) ? $context["maincolor"] : $this->getContext($context, "maincolor"))) . ".css")), "html", null, true);
            echo "\" rel=\"stylesheet\" />
";
        }
        // line 15
        echo "
<link rel=\"stylesheet\" media=\"screen\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/common.css"), "html", null, true);
        echo "\" />
<link rel=\"stylesheet\" media=\"screen\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/font-awesome.min.css"), "html", null, true);
        echo "\" />
<link rel=\"stylesheet\" media=\"screen\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/v2/css/es-icon.css"), "html", null, true);
        echo "\" />

";
        // line 20
        if (((isset($context["maincolor"]) ? $context["maincolor"] : $this->getContext($context, "maincolor")) == "default")) {
            // line 21
            echo "  <link href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/v2/css/main.css"), "html", null, true);
            echo "\" rel=\"stylesheet\" />
";
        } else {
            // line 23
            echo "  <link href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("assets/v2/css/main-" . (isset($context["maincolor"]) ? $context["maincolor"] : $this->getContext($context, "maincolor"))) . ".css")), "html", null, true);
            echo "\" rel=\"stylesheet\" />
";
        }
        // line 25
        echo "
";
        // line 26
        if (((isset($context["navigationcolor"]) ? $context["navigationcolor"] : $this->getContext($context, "navigationcolor")) != "default")) {
            // line 27
            echo "  <link href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("assets/v2/css/header-" . (isset($context["navigationcolor"]) ? $context["navigationcolor"] : $this->getContext($context, "navigationcolor"))) . ".css")), "html", null, true);
            echo "\" rel=\"stylesheet\" />
";
        }
        // line 29
        echo "



";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Default:stylesheet.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 29,  88 => 27,  86 => 26,  83 => 25,  77 => 23,  71 => 21,  69 => 20,  64 => 18,  60 => 17,  56 => 16,  53 => 15,  47 => 13,  41 => 11,  39 => 10,  35 => 8,  31 => 6,  28 => 5,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if isEditColor %}*/
/* 	{% set maincolor = config.config.maincolor|default('default') %}*/
/* 	{% set navigationcolor = config.config.navigationcolor|default('default') %}*/
/* {% else %}*/
/* 	{% set maincolor = config.confirmConfig.maincolor|default('default') %}*/
/* 	{% set navigationcolor = config.confirmConfig.navigationcolor|default('default') %}*/
/* {% endif %}*/
/* */
/* */
/* {% if maincolor == 'default' %}*/
/*   <link href="{{ asset('assets/v2/bootstrap/css/bootstrap.css') }}" rel="stylesheet" />*/
/* {% else %}*/
/*   <link href="{{ asset('assets/v2/bootstrap/css/bootstrap-' ~ maincolor ~ '.css') }}" rel="stylesheet" />*/
/* {% endif %}*/
/* */
/* <link rel="stylesheet" media="screen" href="{{ asset('assets/css/common.css') }}" />*/
/* <link rel="stylesheet" media="screen" href="{{ asset('assets/css/font-awesome.min.css') }}" />*/
/* <link rel="stylesheet" media="screen" href="{{ asset('assets/v2/css/es-icon.css') }}" />*/
/* */
/* {% if maincolor == 'default' %}*/
/*   <link href="{{ asset('assets/v2/css/main.css') }}" rel="stylesheet" />*/
/* {% else %}*/
/*   <link href="{{ asset('assets/v2/css/main-' ~ maincolor ~ '.css') }}" rel="stylesheet" />*/
/* {% endif %}*/
/* */
/* {% if navigationcolor != 'default' %}*/
/*   <link href="{{ asset('assets/v2/css/header-' ~ navigationcolor ~ '.css') }}" rel="stylesheet" />*/
/* {% endif %}*/
/* */
/* */
/* */
/* */
/* */
