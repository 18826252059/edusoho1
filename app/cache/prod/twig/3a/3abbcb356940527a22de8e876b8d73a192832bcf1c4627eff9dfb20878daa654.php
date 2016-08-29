<?php

/* TopxiaWebBundle::layout.html.twig */
class __TwigTemplate_6f28d8a0596b227b79fd1b64df4a4cee72550814731526eac230ba5ed92800f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'keywords' => array($this, 'block_keywords'),
            'description' => array($this, 'block_description'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'head_scripts' => array($this, 'block_head_scripts'),
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
            'full_content' => array($this, 'block_full_content'),
            'top_content' => array($this, 'block_top_content'),
            'content' => array($this, 'block_content'),
            'bottom_content' => array($this, 'block_bottom_content'),
            'footer' => array($this, 'block_footer'),
            'bottom' => array($this, 'block_bottom'),
            'esBar' => array($this, 'block_esBar'),
            'floatConsult' => array($this, 'block_floatConsult'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["web_macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "TopxiaWebBundle::layout.html.twig", 1);
        // line 2
        echo "<!DOCTYPE html>
<!--[if lt IE 7]>      <html class=\"lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>         <html class=\"lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]>         <html class=\"lt-ie9\"> <![endif]-->
<!--[if gt IE 8]><!--> <html> <!--<![endif]-->
<head>
  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,Chrome=1\">
  <meta name=\"renderer\" content=\"webkit\">
  <meta name=\"viewport\" content=\"width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no\">
  <title>";
        // line 13
        $this->displayBlock('title', $context, $blocks);
        // line 16
        echo "</title>
  <meta name=\"keywords\" content=\"";
        // line 17
        $this->displayBlock('keywords', $context, $blocks);
        echo "\" />
  <meta name=\"description\" content=\"";
        // line 18
        $this->displayBlock('description', $context, $blocks);
        echo "\" />
  <meta content=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\" name=\"csrf-token\" />
  <meta content=\"";
        // line 20
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "isLogin", array(), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "isLogin", array(), "method"), 0)) : (0)), "html", null, true);
        echo "\" name=\"is-login\" />
  <meta content=\"";
        // line 21
        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("login_bind.weixinmob_enabled"), 0), "html", null, true);
        echo "\" name=\"is-open\" />
  ";
        // line 22
        echo $this->env->getExtension('topxia_web_twig')->getSetting("login_bind.verify_code", "");
        echo "
  ";
        // line 23
        if ($this->env->getExtension('topxia_web_twig')->getSetting("site.favicon")) {
            // line 24
            echo "  <link rel=\"icon\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->env->getExtension('topxia_web_twig')->getSetting("site.favicon")), "html", null, true);
            echo "\" type=\"image/x-icon\" />
  <link rel=\"shortcut icon\" href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->env->getExtension('topxia_web_twig')->getSetting("site.favicon")), "html", null, true);
            echo "\" type=\"image/x-icon\" media=\"screen\"/>
  ";
        }
        // line 27
        echo "
  ";
        // line 28
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 31
        echo "  
  <!--[if lt IE 9]>
    <script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/libs/html5shiv.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/libs/respond.min.js"), "html", null, true);
        echo "\"></script>
  <![endif]-->

  ";
        // line 37
        $this->displayBlock('head_scripts', $context, $blocks);
        // line 38
        echo "
</head>
<body ";
        // line 40
        if (((array_key_exists("bodyClass", $context)) ? (_twig_default_filter((isset($context["bodyClass"]) ? $context["bodyClass"] : null), "")) : (""))) {
            echo "class=\"";
            echo twig_escape_filter($this->env, (isset($context["bodyClass"]) ? $context["bodyClass"] : null), "html", null, true);
            echo "\"";
        }
        echo ">

";
        // line 42
        $this->displayBlock('body', $context, $blocks);
        // line 85
        echo "
";
        // line 86
        $this->loadTemplate("TopxiaWebBundle::script_boot.html.twig", "TopxiaWebBundle::layout.html.twig", 86)->display(array_merge($context, array("script_main" => $this->env->getExtension('assets')->getAssetUrl("bundles/topxiaweb/js/app.js"))));
        // line 87
        echo "
</body>
</html>";
    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("site.name", "EduSoho"), "html", null, true);
        if ($this->env->getExtension('topxia_web_twig')->getSetting("site.slogan")) {
            echo " - ";
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("site.slogan"), "html", null, true);
        }
        if ( !$this->env->getExtension('topxia_web_twig')->getSetting("copyright.owned")) {
            echo " - Powered By 隆平现代农业科技服务有限公司 ";
        }
    }

    // line 17
    public function block_keywords($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("site.seo_keywords"), "html", null, true);
    }

    // line 18
    public function block_description($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("site.seo_description"), "html", null, true);
    }

    // line 28
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 29
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Theme:getCurrentConfigColor", array("isEditColor" => ((array_key_exists("isEditColor", $context)) ? (_twig_default_filter((isset($context["isEditColor"]) ? $context["isEditColor"] : null), false)) : (false)))));
        echo "
  ";
    }

    // line 37
    public function block_head_scripts($context, array $blocks = array())
    {
    }

    // line 42
    public function block_body($context, array $blocks = array())
    {
        // line 43
        echo "  <div class=\"es-wrap\">

    ";
        // line 45
        $this->displayBlock('header', $context, $blocks);
        // line 49
        echo "    
    ";
        // line 50
        $this->displayBlock('full_content', $context, $blocks);
        // line 59
        echo "    
    ";
        // line 60
        $this->displayBlock('footer', $context, $blocks);
        // line 63
        echo "
    ";
        // line 64
        $this->displayBlock('bottom', $context, $blocks);
        // line 65
        echo "  </div>

  ";
        // line 67
        $this->displayBlock('esBar', $context, $blocks);
        // line 72
        echo "
  ";
        // line 73
        $this->displayBlock('floatConsult', $context, $blocks);
        // line 80
        echo "
  <div id=\"login-modal\" class=\"modal\" data-url=\"";
        // line 81
        echo $this->env->getExtension('routing')->getPath("login_ajax");
        echo "\"></div>
  <div id=\"modal\" class=\"modal\"></div>
  
";
    }

    // line 45
    public function block_header($context, array $blocks = array())
    {
        // line 46
        echo "      ";
        $this->loadTemplate("TopxiaWebBundle::site-hint.html.twig", "TopxiaWebBundle::layout.html.twig", 46)->display($context);
        // line 47
        echo "      ";
        $this->loadTemplate("TopxiaWebBundle:Default:header.html.twig", "TopxiaWebBundle::layout.html.twig", 47)->display($context);
        // line 48
        echo "    ";
    }

    // line 50
    public function block_full_content($context, array $blocks = array())
    {
        // line 51
        echo "      ";
        $this->displayBlock('top_content', $context, $blocks);
        // line 52
        echo "      
      <div id=\"content-container\" class=\"container\">
        ";
        // line 54
        $this->displayBlock('content', $context, $blocks);
        // line 55
        echo "      </div>
      
      ";
        // line 57
        $this->displayBlock('bottom_content', $context, $blocks);
        // line 58
        echo "    ";
    }

    // line 51
    public function block_top_content($context, array $blocks = array())
    {
    }

    // line 54
    public function block_content($context, array $blocks = array())
    {
    }

    // line 57
    public function block_bottom_content($context, array $blocks = array())
    {
    }

    // line 60
    public function block_footer($context, array $blocks = array())
    {
        // line 61
        echo "      ";
        $this->loadTemplate("TopxiaWebBundle:Default:footer.html.twig", "TopxiaWebBundle::layout.html.twig", 61)->display($context);
        // line 62
        echo "    ";
    }

    // line 64
    public function block_bottom($context, array $blocks = array())
    {
    }

    // line 67
    public function block_esBar($context, array $blocks = array())
    {
        // line 68
        echo "    ";
        if ($this->env->getExtension('topxia_web_twig')->getSetting("esBar.enabled", 0)) {
            // line 69
            echo "        ";
            $this->loadTemplate("TopxiaWebBundle:EsBar:index.html.twig", "TopxiaWebBundle::layout.html.twig", 69)->display($context);
            // line 70
            echo "    ";
        }
        // line 71
        echo "  ";
    }

    // line 73
    public function block_floatConsult($context, array $blocks = array())
    {
        // line 74
        echo "    ";
        if (($this->env->getExtension('topxia_web_twig')->getSetting("consult.enabled", 0) && (((array_key_exists("consultDisplay", $context)) ? (_twig_default_filter((isset($context["consultDisplay"]) ? $context["consultDisplay"] : null), false)) : (false)) || (((array_key_exists("siteNav", $context)) ? (_twig_default_filter((isset($context["siteNav"]) ? $context["siteNav"] : null))) : ("")) == "/")))) {
            // line 75
            echo "      ";
            if ( !$this->env->getExtension('topxia_web_twig')->getSetting("esBar.enabled", 0)) {
                // line 76
                echo "        ";
                $this->loadTemplate("TopxiaWebBundle::float-consult.html.twig", "TopxiaWebBundle::layout.html.twig", 76)->display($context);
                // line 77
                echo "      ";
            }
            // line 78
            echo "    ";
        }
        // line 79
        echo "  ";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  322 => 79,  319 => 78,  316 => 77,  313 => 76,  310 => 75,  307 => 74,  304 => 73,  300 => 71,  297 => 70,  294 => 69,  291 => 68,  288 => 67,  283 => 64,  279 => 62,  276 => 61,  273 => 60,  268 => 57,  263 => 54,  258 => 51,  254 => 58,  252 => 57,  248 => 55,  246 => 54,  242 => 52,  239 => 51,  236 => 50,  232 => 48,  229 => 47,  226 => 46,  223 => 45,  215 => 81,  212 => 80,  210 => 73,  207 => 72,  205 => 67,  201 => 65,  199 => 64,  196 => 63,  194 => 60,  191 => 59,  189 => 50,  186 => 49,  184 => 45,  180 => 43,  177 => 42,  172 => 37,  165 => 29,  162 => 28,  156 => 18,  150 => 17,  139 => 14,  136 => 13,  130 => 87,  128 => 86,  125 => 85,  123 => 42,  114 => 40,  110 => 38,  108 => 37,  102 => 34,  98 => 33,  94 => 31,  92 => 28,  89 => 27,  84 => 25,  79 => 24,  77 => 23,  73 => 22,  69 => 21,  65 => 20,  61 => 19,  57 => 18,  53 => 17,  50 => 16,  48 => 13,  36 => 2,  34 => 1,);
    }
}
/* {% import "TopxiaWebBundle::macro.html.twig" as web_macro %}*/
/* <!DOCTYPE html>*/
/* <!--[if lt IE 7]>      <html class="lt-ie9 lt-ie8 lt-ie7"> <![endif]-->*/
/* <!--[if IE 7]>         <html class="lt-ie9 lt-ie8"> <![endif]-->*/
/* <!--[if IE 8]>         <html class="lt-ie9"> <![endif]-->*/
/* <!--[if gt IE 8]><!--> <html> <!--<![endif]-->*/
/* <head>*/
/*   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">*/
/*   <meta http-equiv="X-UA-Compatible" content="IE=edge,Chrome=1">*/
/*   <meta name="renderer" content="webkit">*/
/*   <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">*/
/*   <title>*/
/*     {%- block title -%}*/
/*       {{ setting('site.name', 'EduSoho') }}{% if setting('site.slogan') %} - {{ setting('site.slogan') }}{% endif %}{% if not setting('copyright.owned') %} - Powered By 隆平现代农业科技服务有限公司 {% endif %}*/
/*     {%- endblock -%}*/
/*   </title>*/
/*   <meta name="keywords" content="{% block keywords %}{{ setting('site.seo_keywords') }}{% endblock %}" />*/
/*   <meta name="description" content="{% block description %}{{ setting('site.seo_description') }}{% endblock %}" />*/
/*   <meta content="{{ csrf_token('site') }}" name="csrf-token" />*/
/*   <meta content="{{ app.user.isLogin()|default(0) }}" name="is-login" />*/
/*   <meta content="{{ setting('login_bind.weixinmob_enabled')|default(0) }}" name="is-open" />*/
/*   {{ setting('login_bind.verify_code', '')|raw }}*/
/*   {% if setting('site.favicon') %}*/
/*   <link rel="icon" href="{{ asset(setting('site.favicon')) }}" type="image/x-icon" />*/
/*   <link rel="shortcut icon" href="{{ asset(setting('site.favicon')) }}" type="image/x-icon" media="screen"/>*/
/*   {% endif %}*/
/* */
/*   {% block stylesheets %}*/
/*     {{ render(controller('TopxiaWebBundle:Theme:getCurrentConfigColor', {isEditColor:isEditColor|default(false)})) }}*/
/*   {% endblock %}*/
/*   */
/*   <!--[if lt IE 9]>*/
/*     <script src="{{ asset('assets/libs/html5shiv.js') }}"></script>*/
/*     <script src="{{ asset('assets/libs/respond.min.js') }}"></script>*/
/*   <![endif]-->*/
/* */
/*   {% block head_scripts %}{% endblock %}*/
/* */
/* </head>*/
/* <body {% if bodyClass|default('') %}class="{{ bodyClass }}"{% endif %}>*/
/* */
/* {% block body %}*/
/*   <div class="es-wrap">*/
/* */
/*     {% block header %}*/
/*       {% include 'TopxiaWebBundle::site-hint.html.twig' %}*/
/*       {% include 'TopxiaWebBundle:Default:header.html.twig' %}*/
/*     {% endblock %}*/
/*     */
/*     {% block full_content %}*/
/*       {% block top_content %}{% endblock %}*/
/*       */
/*       <div id="content-container" class="container">*/
/*         {% block content %}{% endblock %}*/
/*       </div>*/
/*       */
/*       {% block bottom_content %}{% endblock %}*/
/*     {% endblock %}*/
/*     */
/*     {% block footer %}*/
/*       {% include 'TopxiaWebBundle:Default:footer.html.twig' %}*/
/*     {% endblock %}*/
/* */
/*     {% block bottom %}{% endblock %}*/
/*   </div>*/
/* */
/*   {% block esBar %}*/
/*     {% if setting('esBar.enabled', 0) %}*/
/*         {% include 'TopxiaWebBundle:EsBar:index.html.twig' %}*/
/*     {% endif %}*/
/*   {% endblock %}*/
/* */
/*   {% block floatConsult %}*/
/*     {% if setting('consult.enabled', 0) and (consultDisplay|default(false) or siteNav|default() == '/' ) %}*/
/*       {% if not setting('esBar.enabled',0) %}*/
/*         {% include 'TopxiaWebBundle::float-consult.html.twig' %}*/
/*       {% endif %}*/
/*     {% endif %}*/
/*   {% endblock %}*/
/* */
/*   <div id="login-modal" class="modal" data-url="{{ path('login_ajax') }}"></div>*/
/*   <div id="modal" class="modal"></div>*/
/*   */
/* {% endblock %}*/
/* */
/* {% include 'TopxiaWebBundle::script_boot.html.twig' with {script_main: asset('bundles/topxiaweb/js/app.js')} %}*/
/* */
/* </body>*/
/* </html>*/
