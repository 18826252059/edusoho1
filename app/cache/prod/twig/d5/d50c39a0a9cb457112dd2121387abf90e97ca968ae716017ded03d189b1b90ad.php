<?php

/* TopxiaMobileBundleV2:ESMobile:main.index-release.html.twig */
class __TwigTemplate_1f3de5c35daf0782905c4f6482699a14741ebad541fb3852a80dc1e74d164338 extends Twig_Template
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
<meta http-equiv=\"content-type\" content=\"text/html;charset=utf-8\">
<meta name=\"viewport\" content=\"initial-scale=1, width=device-width, minimum-scale=1.0, maximum-scale=1, user-scalable=no\">
";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 17
        if (((isset($context["clientType"]) ? $context["clientType"] : null) == "Android")) {
            // line 18
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/topxiamobilebundlev2/main/js/Androidcordova.js"), "html", null, true);
            echo "\"></script>
";
        } elseif ((        // line 19
(isset($context["clientType"]) ? $context["clientType"] : null) == "iOS")) {
            echo " 
    <script src=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/topxiamobilebundlev2/main/js/iOScordova.js"), "html", null, true);
            echo "\"></script>
";
        }
        // line 22
        echo "
";
        // line 23
        $this->displayBlock('head_scripts', $context, $blocks);
        // line 26
        echo "</head>

<body>
<div ui-view = \"rootView\" class=\"rootView\"></div>

";
        // line 31
        $this->displayBlock('content', $context, $blocks);
        // line 37
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

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 9
        echo "
<link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/topxiamobilebundlev2/main/release/all.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />

<script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/topxiamobilebundlev2/main/release/libs.all.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/topxiamobilebundlev2/main/release/app.all.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/topxiamobilebundlev2/main/release/template.js"), "html", null, true);
        echo "\"></script>

";
    }

    // line 23
    public function block_head_scripts($context, array $blocks = array())
    {
        // line 24
        echo "
";
    }

    // line 31
    public function block_content($context, array $blocks = array())
    {
        // line 32
        echo "
";
        // line 33
        $this->displayBlock('bottom_scripts', $context, $blocks);
        // line 35
        echo "
";
    }

    // line 33
    public function block_bottom_scripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "TopxiaMobileBundleV2:ESMobile:main.index-release.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 33,  131 => 35,  129 => 33,  126 => 32,  123 => 31,  118 => 24,  115 => 23,  108 => 14,  104 => 13,  100 => 12,  95 => 10,  92 => 9,  89 => 8,  84 => 5,  78 => 2,  72 => 37,  70 => 31,  63 => 26,  61 => 23,  58 => 22,  53 => 20,  49 => 19,  44 => 18,  42 => 17,  40 => 8,  34 => 5,  30 => 3,  28 => 2,  25 => 1,);
    }
}
/* <!doctype html>*/
/* {% block html %}<html>{% endblock %}*/
/* <head>*/
/* */
/* <title>{% block title %}{% endblock %}</title>*/
/* <meta http-equiv="content-type" content="text/html;charset=utf-8">*/
/* <meta name="viewport" content="initial-scale=1, width=device-width, minimum-scale=1.0, maximum-scale=1, user-scalable=no">*/
/* {% block stylesheets %}*/
/* */
/* <link href="{{ asset('bundles/topxiamobilebundlev2/main/release/all.min.css') }}" rel="stylesheet" />*/
/* */
/* <script src="{{ asset('bundles/topxiamobilebundlev2/main/release/libs.all.js') }}"></script>*/
/* <script src="{{ asset('bundles/topxiamobilebundlev2/main/release/app.all.js') }}"></script>*/
/* <script src="{{ asset('bundles/topxiamobilebundlev2/main/release/template.js') }}"></script>*/
/* */
/* {% endblock %}*/
/* {% if clientType == 'Android' %}*/
/*     <script src="{{ asset('bundles/topxiamobilebundlev2/main/js/Androidcordova.js') }}"></script>*/
/* {%  elseif clientType == 'iOS' %} */
/*     <script src="{{ asset('bundles/topxiamobilebundlev2/main/js/iOScordova.js') }}"></script>*/
/* {% endif %}*/
/* */
/* {% block head_scripts %}*/
/* */
/* {% endblock %}*/
/* </head>*/
/* */
/* <body>*/
/* <div ui-view = "rootView" class="rootView"></div>*/
/* */
/* {% block content %}*/
/* */
/* {% block bottom_scripts %}*/
/* {% endblock %}*/
/* */
/* {% endblock %}*/
/* </body>*/
/* */
/* </html>*/
