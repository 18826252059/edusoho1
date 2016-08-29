<?php

/* TopxiaMobileBundleV2::article.layout.html.twig */
class __TwigTemplate_62cb14bfadb6bf3160b527cccc9c9c5152fa038e46372526f4cc4a10dc6e9c00 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'html' => array($this, 'block_html'),
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'head_scripts' => array($this, 'block_head_scripts'),
            'content' => array($this, 'block_content'),
            'bottom_scripts' => array($this, 'block_bottom_scripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
";
        // line 2
        $this->displayBlock('html', $context, $blocks);
        // line 3
        echo "<head>

<title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
<meta name=\"viewport\" content=\"width=device-width, minimum-scale=1.0, initial-scale=1.0, user-scalable=yes\">
";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        if (((isset($context["clientType"]) ? $context["clientType"] : null) == "Android")) {
            // line 15
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/topxiamobilebundlev2/js/cordova_Android.js"), "html", null, true);
            echo "\"></script>
";
        } elseif ((        // line 16
(isset($context["clientType"]) ? $context["clientType"] : null) == "iOS")) {
            echo " 
    <script src=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/topxiamobilebundlev2/js/cordova_iOS.js"), "html", null, true);
            echo "\"></script>
";
        }
        // line 19
        $this->displayBlock('head_scripts', $context, $blocks);
        // line 22
        echo "</head>

<body unresolved  onload=\"onLoad()\">

<script type=\"text/javascript\">
    window.onLoad = function() {
                document.addEventListener(\"deviceready\", onDeviceReady, false);
    }

    window.onDeviceReady = function() {
        console.log(\"onDeviceReady:\");
    }
</script>
";
        // line 35
        $this->displayBlock('content', $context, $blocks);
        // line 58
        echo "</body>

</html>";
    }

    // line 2
    public function block_html($context, array $blocks = array())
    {
        echo "<html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "
<link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/topxiamobilebundlev2/libs/frozen/1.2.1/css/global.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
<link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/topxiamobilebundlev2/libs/ionic/1.0.0/css/ionic.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
<link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/topxiamobilebundlev2/css/ui-style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />

";
    }

    // line 19
    public function block_head_scripts($context, array $blocks = array())
    {
        // line 20
        echo "
";
    }

    // line 35
    public function block_content($context, array $blocks = array())
    {
        // line 36
        echo "
";
        // line 37
        $this->displayBlock('bottom_scripts', $context, $blocks);
        // line 56
        echo "
";
    }

    // line 37
    public function block_bottom_scripts($context, array $blocks = array())
    {
        // line 38
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/topxiamobilebundlev2/libs/sea.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">
    seajs.config({
      base: \"/bundles/topxiamobilebundlev2/\",
      alias: {
        \"AppControllers\": \"article/js/controller.js\",
        \"AppDirectives\": \"article/js/directive.js\",
        \"AppFilters\": \"article/js/filter.js\",
        \"AppServices\": \"article/js/service.js\",
        \"frozen\": \"libs/frozen/1.2.1/js/frozen.js\",
        \"app\": \"article/js/app.js\"
      }
    })

    // 加载入口模块
    seajs.use(\"app\");
</script>
";
    }

    public function getTemplateName()
    {
        return "TopxiaMobileBundleV2::article.layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 38,  135 => 37,  130 => 56,  128 => 37,  125 => 36,  122 => 35,  117 => 20,  114 => 19,  107 => 11,  103 => 10,  99 => 9,  96 => 8,  93 => 7,  88 => 5,  82 => 2,  76 => 58,  74 => 35,  59 => 22,  57 => 19,  52 => 17,  48 => 16,  43 => 15,  41 => 14,  39 => 7,  34 => 5,  30 => 3,  28 => 2,  25 => 1,);
    }
}
/* <!doctype html>*/
/* {% block html %}<html>{% endblock %}*/
/* <head>*/
/* */
/* <title>{% block title %}{% endblock %}</title>*/
/* <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1.0, user-scalable=yes">*/
/* {% block stylesheets %}*/
/* */
/* <link href="{{ asset('bundles/topxiamobilebundlev2/libs/frozen/1.2.1/css/global.css') }}" rel="stylesheet" />*/
/* <link href="{{ asset('bundles/topxiamobilebundlev2/libs/ionic/1.0.0/css/ionic.min.css') }}" rel="stylesheet" />*/
/* <link href="{{ asset('bundles/topxiamobilebundlev2/css/ui-style.css') }}" rel="stylesheet" />*/
/* */
/* {% endblock %}*/
/* {% if clientType == 'Android' %}*/
/*     <script src="{{ asset('bundles/topxiamobilebundlev2/js/cordova_Android.js') }}"></script>*/
/* {%  elseif clientType == 'iOS' %} */
/*     <script src="{{ asset('bundles/topxiamobilebundlev2/js/cordova_iOS.js') }}"></script>*/
/* {% endif %}*/
/* {% block head_scripts %}*/
/* */
/* {% endblock %}*/
/* </head>*/
/* */
/* <body unresolved  onload="onLoad()">*/
/* */
/* <script type="text/javascript">*/
/*     window.onLoad = function() {*/
/*                 document.addEventListener("deviceready", onDeviceReady, false);*/
/*     }*/
/* */
/*     window.onDeviceReady = function() {*/
/*         console.log("onDeviceReady:");*/
/*     }*/
/* </script>*/
/* {% block content %}*/
/* */
/* {% block bottom_scripts %}*/
/* <script src="{{ asset('bundles/topxiamobilebundlev2/libs/sea.js') }}"></script>*/
/* <script type="text/javascript">*/
/*     seajs.config({*/
/*       base: "/bundles/topxiamobilebundlev2/",*/
/*       alias: {*/
/*         "AppControllers": "article/js/controller.js",*/
/*         "AppDirectives": "article/js/directive.js",*/
/*         "AppFilters": "article/js/filter.js",*/
/*         "AppServices": "article/js/service.js",*/
/*         "frozen": "libs/frozen/1.2.1/js/frozen.js",*/
/*         "app": "article/js/app.js"*/
/*       }*/
/*     })*/
/* */
/*     // 加载入口模块*/
/*     seajs.use("app");*/
/* </script>*/
/* {% endblock %}*/
/* */
/* {% endblock %}*/
/* </body>*/
/* */
/* </html>*/
