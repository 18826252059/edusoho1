<?php

/* TopxiaWebBundle::layout.html.twig */
class __TwigTemplate_5c82226fec6f9b18d942cb0a0555701175fe858426355ff349371fd56945283f extends Twig_Template
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
        if (((array_key_exists("bodyClass", $context)) ? (_twig_default_filter((isset($context["bodyClass"]) ? $context["bodyClass"] : $this->getContext($context, "bodyClass")), "")) : (""))) {
            echo "class=\"";
            echo twig_escape_filter($this->env, (isset($context["bodyClass"]) ? $context["bodyClass"] : $this->getContext($context, "bodyClass")), "html", null, true);
            echo "\"";
        }
        echo ">
";
        // line 41
        $this->displayBlock('body', $context, $blocks);
        // line 89
        echo "
";
        // line 90
        $this->loadTemplate("TopxiaWebBundle::script_boot.html.twig", "TopxiaWebBundle::layout.html.twig", 90)->display(array_merge($context, array("script_main" => $this->env->getExtension('assets')->getAssetUrl("bundles/topxiaweb/js/app.js"))));
        // line 91
        echo "<!-- Piwik -->
<script type=\"text/javascript\">
  var _paq = _paq || [];
  _paq.push([\"setDomains\", [\"*.edu.1haowenjian.cn\"]]);
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u=\"//120.25.128.246/piwik/\";
    _paq.push(['setTrackerUrl', u+'piwik.php']);
    _paq.push(['setSiteId', 2]);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<noscript><p><img src=\"//120.25.128.246/piwik/piwik.php?idsite=2\" style=\"border:0;\" alt=\"\" /></p></noscript>
<!-- End Piwik Code -->

<script>
  var _hmt = _hmt || [];
  (function() {
    var hm = document.createElement(\"script\");
    hm.src = \"//hm.baidu.com/hm.js?f5719f0546ba5038d2aef25691998bb7\";
    var s = document.getElementsByTagName(\"script\")[0];
    s.parentNode.insertBefore(hm, s);
  })();
</script>

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
            echo " - Powered By 隆平现代农业科技服务有限公司";
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
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Theme:getCurrentConfigColor", array("isEditColor" => ((array_key_exists("isEditColor", $context)) ? (_twig_default_filter((isset($context["isEditColor"]) ? $context["isEditColor"] : $this->getContext($context, "isEditColor")), false)) : (false)))));
        echo "
  ";
    }

    // line 37
    public function block_head_scripts($context, array $blocks = array())
    {
    }

    // line 41
    public function block_body($context, array $blocks = array())
    {
        // line 42
        echo "  <div class=\"es-wrap\">

    ";
        // line 44
        if (((array_key_exists("isIndex", $context)) ? (_twig_default_filter((isset($context["isIndex"]) ? $context["isIndex"] : $this->getContext($context, "isIndex")), "")) : (""))) {
            // line 45
            echo "    <!-- 导航栏 -->
    <!-- 导航栏 完 -->
    ";
        }
        // line 48
        echo "
    ";
        // line 49
        $this->displayBlock('header', $context, $blocks);
        // line 53
        echo "
    ";
        // line 54
        $this->displayBlock('full_content', $context, $blocks);
        // line 63
        echo "
    ";
        // line 64
        $this->displayBlock('footer', $context, $blocks);
        // line 67
        echo "
    ";
        // line 68
        $this->displayBlock('bottom', $context, $blocks);
        // line 69
        echo "  </div>

  ";
        // line 71
        $this->displayBlock('esBar', $context, $blocks);
        // line 76
        echo "
  ";
        // line 77
        $this->displayBlock('floatConsult', $context, $blocks);
        // line 84
        echo "
  <div id=\"login-modal\" class=\"modal\" data-url=\"";
        // line 85
        echo $this->env->getExtension('routing')->getPath("login_ajax");
        echo "\"></div>
  <div id=\"modal\" class=\"modal\"></div>

";
    }

    // line 49
    public function block_header($context, array $blocks = array())
    {
        // line 50
        echo "      ";
        $this->loadTemplate("TopxiaWebBundle::site-hint.html.twig", "TopxiaWebBundle::layout.html.twig", 50)->display($context);
        // line 51
        echo "      ";
        $this->loadTemplate("TopxiaWebBundle:Default:header.html.twig", "TopxiaWebBundle::layout.html.twig", 51)->display($context);
        // line 52
        echo "    ";
    }

    // line 54
    public function block_full_content($context, array $blocks = array())
    {
        // line 55
        echo "      ";
        $this->displayBlock('top_content', $context, $blocks);
        // line 56
        echo "
      <div id=\"content-container\" class=\"container mt0\">
        ";
        // line 58
        $this->displayBlock('content', $context, $blocks);
        // line 59
        echo "      </div>

      ";
        // line 61
        $this->displayBlock('bottom_content', $context, $blocks);
        // line 62
        echo "    ";
    }

    // line 55
    public function block_top_content($context, array $blocks = array())
    {
    }

    // line 58
    public function block_content($context, array $blocks = array())
    {
    }

    // line 61
    public function block_bottom_content($context, array $blocks = array())
    {
    }

    // line 64
    public function block_footer($context, array $blocks = array())
    {
        // line 65
        echo "      ";
        $this->loadTemplate("TopxiaWebBundle:Default:footer.html.twig", "TopxiaWebBundle::layout.html.twig", 65)->display($context);
        // line 66
        echo "    ";
    }

    // line 68
    public function block_bottom($context, array $blocks = array())
    {
    }

    // line 71
    public function block_esBar($context, array $blocks = array())
    {
        // line 72
        echo "    ";
        if ($this->env->getExtension('topxia_web_twig')->getSetting("esBar.enabled", 0)) {
            // line 73
            echo "        ";
            $this->loadTemplate("TopxiaWebBundle:EsBar:index.html.twig", "TopxiaWebBundle::layout.html.twig", 73)->display($context);
            // line 74
            echo "    ";
        }
        // line 75
        echo "  ";
    }

    // line 77
    public function block_floatConsult($context, array $blocks = array())
    {
        // line 78
        echo "    ";
        if (($this->env->getExtension('topxia_web_twig')->getSetting("consult.enabled", 0) && (((array_key_exists("consultDisplay", $context)) ? (_twig_default_filter((isset($context["consultDisplay"]) ? $context["consultDisplay"] : $this->getContext($context, "consultDisplay")), false)) : (false)) || (((array_key_exists("siteNav", $context)) ? (_twig_default_filter((isset($context["siteNav"]) ? $context["siteNav"] : $this->getContext($context, "siteNav")))) : ("")) == "/")))) {
            // line 79
            echo "      ";
            if ( !$this->env->getExtension('topxia_web_twig')->getSetting("esBar.enabled", 0)) {
                // line 80
                echo "        ";
                $this->loadTemplate("TopxiaWebBundle::float-consult.html.twig", "TopxiaWebBundle::layout.html.twig", 80)->display($context);
                // line 81
                echo "      ";
            }
            // line 82
            echo "    ";
        }
        // line 83
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
        return array (  357 => 83,  354 => 82,  351 => 81,  348 => 80,  345 => 79,  342 => 78,  339 => 77,  335 => 75,  332 => 74,  329 => 73,  326 => 72,  323 => 71,  318 => 68,  314 => 66,  311 => 65,  308 => 64,  303 => 61,  298 => 58,  293 => 55,  289 => 62,  287 => 61,  283 => 59,  281 => 58,  277 => 56,  274 => 55,  271 => 54,  267 => 52,  264 => 51,  261 => 50,  258 => 49,  250 => 85,  247 => 84,  245 => 77,  242 => 76,  240 => 71,  236 => 69,  234 => 68,  231 => 67,  229 => 64,  226 => 63,  224 => 54,  221 => 53,  219 => 49,  216 => 48,  211 => 45,  209 => 44,  205 => 42,  202 => 41,  197 => 37,  190 => 29,  187 => 28,  181 => 18,  175 => 17,  164 => 14,  161 => 13,  129 => 91,  127 => 90,  124 => 89,  122 => 41,  114 => 40,  110 => 38,  108 => 37,  102 => 34,  98 => 33,  94 => 31,  92 => 28,  89 => 27,  84 => 25,  79 => 24,  77 => 23,  73 => 22,  69 => 21,  65 => 20,  61 => 19,  57 => 18,  53 => 17,  50 => 16,  48 => 13,  36 => 2,  34 => 1,);
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
/*       {{ setting('site.name', 'EduSoho') }}{% if setting('site.slogan') %} - {{ setting('site.slogan') }}{% endif %}{% if not setting('copyright.owned') %} - Powered By 隆平现代农业科技服务有限公司{% endif %}*/
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
/* */
/*   <!--[if lt IE 9]>*/
/*     <script src="{{ asset('assets/libs/html5shiv.js') }}"></script>*/
/*     <script src="{{ asset('assets/libs/respond.min.js') }}"></script>*/
/*   <![endif]-->*/
/* */
/*   {% block head_scripts %}{% endblock %}*/
/* */
/* </head>*/
/* <body {% if bodyClass|default('') %}class="{{ bodyClass }}"{% endif %}>*/
/* {% block body %}*/
/*   <div class="es-wrap">*/
/* */
/*     {% if isIndex|default('') %}*/
/*     <!-- 导航栏 -->*/
/*     <!-- 导航栏 完 -->*/
/*     {% endif %}*/
/* */
/*     {% block header %}*/
/*       {% include 'TopxiaWebBundle::site-hint.html.twig' %}*/
/*       {% include 'TopxiaWebBundle:Default:header.html.twig' %}*/
/*     {% endblock %}*/
/* */
/*     {% block full_content %}*/
/*       {% block top_content %}{% endblock %}*/
/* */
/*       <div id="content-container" class="container mt0">*/
/*         {% block content %}{% endblock %}*/
/*       </div>*/
/* */
/*       {% block bottom_content %}{% endblock %}*/
/*     {% endblock %}*/
/* */
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
/* */
/* {% endblock %}*/
/* */
/* {% include 'TopxiaWebBundle::script_boot.html.twig' with {script_main: asset('bundles/topxiaweb/js/app.js')} %}*/
/* <!-- Piwik -->*/
/* <script type="text/javascript">*/
/*   var _paq = _paq || [];*/
/*   _paq.push(["setDomains", ["*.edu.1haowenjian.cn"]]);*/
/*   _paq.push(['trackPageView']);*/
/*   _paq.push(['enableLinkTracking']);*/
/*   (function() {*/
/*     var u="//120.25.128.246/piwik/";*/
/*     _paq.push(['setTrackerUrl', u+'piwik.php']);*/
/*     _paq.push(['setSiteId', 2]);*/
/*     var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];*/
/*     g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);*/
/*   })();*/
/* </script>*/
/* <noscript><p><img src="//120.25.128.246/piwik/piwik.php?idsite=2" style="border:0;" alt="" /></p></noscript>*/
/* <!-- End Piwik Code -->*/
/* */
/* <script>*/
/*   var _hmt = _hmt || [];*/
/*   (function() {*/
/*     var hm = document.createElement("script");*/
/*     hm.src = "//hm.baidu.com/hm.js?f5719f0546ba5038d2aef25691998bb7";*/
/*     var s = document.getElementsByTagName("script")[0];*/
/*     s.parentNode.insertBefore(hm, s);*/
/*   })();*/
/* </script>*/
/* */
/* </body>*/
/* </html>*/
