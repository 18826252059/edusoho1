<?php

/* TopxiaMobileBundleV2:ESMobile:main.index-debug.html.twig */
class __TwigTemplate_c3d4c9c05ed31c3be45197d41c3265d2973d3a2e0a9101546235410b4d8962bc extends Twig_Template
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
        // line 16
        echo "
<script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/topxiamobilebundlev2/libs/angular/1.3.0/angular.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/topxiamobilebundlev2/libs/angular-ui-router.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/topxiamobilebundlev2/libs/angular/1.3.0/angular-sanitize.min.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/topxiamobilebundlev2/libs/fastclick.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/topxiamobilebundlev2/libs/frozen/1.3.0/js/lib/zepto.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/topxiamobilebundlev2/libs/frozen/1.2.1/js/frozen.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/topxiamobilebundlev2/libs/bindonce.min.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/topxiamobilebundlev2/main/js/app.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/topxiamobilebundlev2/main/js/service.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/topxiamobilebundlev2/main/js/filter.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/topxiamobilebundlev2/main/js/directive.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/topxiamobilebundlev2/main/js/factory.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/topxiamobilebundlev2/main/js/provider.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/topxiamobilebundlev2/main/js/controller/AppInitController.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/topxiamobilebundlev2/main/js/controller/MainController.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/topxiamobilebundlev2/main/js/controller/FoundTabController.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/topxiamobilebundlev2/main/js/controller/LoginController.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/topxiamobilebundlev2/main/js/controller/RegistController.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/topxiamobilebundlev2/main/js/controller/UserController.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/topxiamobilebundlev2/main/js/controller/SettingController.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/topxiamobilebundlev2/main/js/controller/CourseController.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/topxiamobilebundlev2/main/js/controller/LessonController.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/topxiamobilebundlev2/main/js/controller/CourseListController.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/topxiamobilebundlev2/main/js/controller/MyLearnController.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/topxiamobilebundlev2/main/js/controller/MyFavoriteController.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/topxiamobilebundlev2/main/js/controller/MyGroupController.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/topxiamobilebundlev2/main/js/controller/QuestionController.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/topxiamobilebundlev2/main/js/controller/CourseNoticeController.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/topxiamobilebundlev2/main/js/controller/PayController.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/topxiamobilebundlev2/main/js/controller/SearchController.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/topxiamobilebundlev2/main/js/controller/ClassRoomListController.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/topxiamobilebundlev2/main/js/controller/ArticleController.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/topxiamobilebundlev2/libs/angular-sideview.js"), "html", null, true);
        echo "\"></script>
";
        // line 54
        if (((isset($context["clientType"]) ? $context["clientType"] : null) == "Android")) {
            // line 55
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/topxiamobilebundlev2/main/js/Androidcordova.js"), "html", null, true);
            echo "\"></script>
";
        } elseif ((        // line 56
(isset($context["clientType"]) ? $context["clientType"] : null) == "iOS")) {
            echo " 
    <script src=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/topxiamobilebundlev2/main/js/iOScordova.js"), "html", null, true);
            echo "\"></script>
";
        }
        // line 59
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/topxiamobilebundlev2/main/js/Androidcordova.js"), "html", null, true);
        echo "\"></script>

";
        // line 61
        $this->displayBlock('head_scripts', $context, $blocks);
        // line 64
        echo "</head>

<body>
<div ui-view = \"rootView\" class=\"rootView\"></div>

";
        // line 69
        $this->displayBlock('content', $context, $blocks);
        // line 75
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/topxiamobilebundlev2/libs/frozen/1.2.1/css/frozen.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
<link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/topxiamobilebundlev2/main/css/ui.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
<link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/topxiamobilebundlev2/libs/sideview-component.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
<link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/topxiamobilebundlev2/main/css/iconfont.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />

";
    }

    // line 61
    public function block_head_scripts($context, array $blocks = array())
    {
        // line 62
        echo "
";
    }

    // line 69
    public function block_content($context, array $blocks = array())
    {
        // line 70
        echo "
";
        // line 71
        $this->displayBlock('bottom_scripts', $context, $blocks);
        // line 73
        echo "
";
    }

    // line 71
    public function block_bottom_scripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "TopxiaMobileBundleV2:ESMobile:main.index-debug.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  277 => 71,  272 => 73,  270 => 71,  267 => 70,  264 => 69,  259 => 62,  256 => 61,  249 => 13,  245 => 12,  241 => 11,  237 => 10,  234 => 9,  231 => 8,  226 => 5,  220 => 2,  214 => 75,  212 => 69,  205 => 64,  203 => 61,  197 => 59,  192 => 57,  188 => 56,  183 => 55,  181 => 54,  177 => 53,  172 => 51,  168 => 50,  164 => 49,  160 => 48,  156 => 47,  152 => 46,  148 => 45,  144 => 44,  140 => 43,  136 => 42,  132 => 41,  128 => 40,  124 => 39,  120 => 38,  116 => 37,  112 => 36,  108 => 35,  104 => 34,  100 => 33,  95 => 31,  91 => 30,  87 => 29,  83 => 28,  79 => 27,  75 => 26,  70 => 24,  66 => 23,  62 => 22,  58 => 21,  53 => 19,  49 => 18,  45 => 17,  42 => 16,  40 => 8,  34 => 5,  30 => 3,  28 => 2,  25 => 1,);
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
/* <link href="{{ asset('bundles/topxiamobilebundlev2/libs/frozen/1.2.1/css/frozen.css') }}" rel="stylesheet" />*/
/* <link href="{{ asset('bundles/topxiamobilebundlev2/main/css/ui.css') }}" rel="stylesheet" />*/
/* <link href="{{ asset('bundles/topxiamobilebundlev2/libs/sideview-component.css') }}" rel="stylesheet" />*/
/* <link href="{{ asset('bundles/topxiamobilebundlev2/main/css/iconfont.css') }}" rel="stylesheet" />*/
/* */
/* {% endblock %}*/
/* */
/* <script src="{{ asset('bundles/topxiamobilebundlev2/libs/angular/1.3.0/angular.min.js') }}"></script>*/
/* <script src="{{ asset('bundles/topxiamobilebundlev2/libs/angular-ui-router.min.js') }}"></script>*/
/* <script src="{{ asset('bundles/topxiamobilebundlev2/libs/angular/1.3.0/angular-sanitize.min.js') }}"></script>*/
/* */
/* <script src="{{ asset('bundles/topxiamobilebundlev2/libs/fastclick.js') }}"></script>*/
/* <script src="{{ asset('bundles/topxiamobilebundlev2/libs/frozen/1.3.0/js/lib/zepto.min.js') }}"></script>*/
/* <script src="{{ asset('bundles/topxiamobilebundlev2/libs/frozen/1.2.1/js/frozen.js') }}"></script>*/
/* <script src="{{ asset('bundles/topxiamobilebundlev2/libs/bindonce.min.js') }}"></script>*/
/* */
/* <script src="{{ asset('bundles/topxiamobilebundlev2/main/js/app.js') }}"></script>*/
/* <script src="{{ asset('bundles/topxiamobilebundlev2/main/js/service.js') }}"></script>*/
/* <script src="{{ asset('bundles/topxiamobilebundlev2/main/js/filter.js') }}"></script>*/
/* <script src="{{ asset('bundles/topxiamobilebundlev2/main/js/directive.js') }}"></script>*/
/* <script src="{{ asset('bundles/topxiamobilebundlev2/main/js/factory.js') }}"></script>*/
/* <script src="{{ asset('bundles/topxiamobilebundlev2/main/js/provider.js') }}"></script>*/
/* */
/* <script src="{{ asset('bundles/topxiamobilebundlev2/main/js/controller/AppInitController.js') }}"></script>*/
/* <script src="{{ asset('bundles/topxiamobilebundlev2/main/js/controller/MainController.js') }}"></script>*/
/* <script src="{{ asset('bundles/topxiamobilebundlev2/main/js/controller/FoundTabController.js') }}"></script>*/
/* <script src="{{ asset('bundles/topxiamobilebundlev2/main/js/controller/LoginController.js') }}"></script>*/
/* <script src="{{ asset('bundles/topxiamobilebundlev2/main/js/controller/RegistController.js') }}"></script>*/
/* <script src="{{ asset('bundles/topxiamobilebundlev2/main/js/controller/UserController.js') }}"></script>*/
/* <script src="{{ asset('bundles/topxiamobilebundlev2/main/js/controller/SettingController.js') }}"></script>*/
/* <script src="{{ asset('bundles/topxiamobilebundlev2/main/js/controller/CourseController.js') }}"></script>*/
/* <script src="{{ asset('bundles/topxiamobilebundlev2/main/js/controller/LessonController.js') }}"></script>*/
/* <script src="{{ asset('bundles/topxiamobilebundlev2/main/js/controller/CourseListController.js') }}"></script>*/
/* <script src="{{ asset('bundles/topxiamobilebundlev2/main/js/controller/MyLearnController.js') }}"></script>*/
/* <script src="{{ asset('bundles/topxiamobilebundlev2/main/js/controller/MyFavoriteController.js') }}"></script>*/
/* <script src="{{ asset('bundles/topxiamobilebundlev2/main/js/controller/MyGroupController.js') }}"></script>*/
/* <script src="{{ asset('bundles/topxiamobilebundlev2/main/js/controller/QuestionController.js') }}"></script>*/
/* <script src="{{ asset('bundles/topxiamobilebundlev2/main/js/controller/CourseNoticeController.js') }}"></script>*/
/* <script src="{{ asset('bundles/topxiamobilebundlev2/main/js/controller/PayController.js') }}"></script>*/
/* <script src="{{ asset('bundles/topxiamobilebundlev2/main/js/controller/SearchController.js') }}"></script>*/
/* <script src="{{ asset('bundles/topxiamobilebundlev2/main/js/controller/ClassRoomListController.js') }}"></script>*/
/* <script src="{{ asset('bundles/topxiamobilebundlev2/main/js/controller/ArticleController.js') }}"></script>*/
/* */
/* <script src="{{ asset('bundles/topxiamobilebundlev2/libs/angular-sideview.js') }}"></script>*/
/* {% if clientType == 'Android' %}*/
/*     <script src="{{ asset('bundles/topxiamobilebundlev2/main/js/Androidcordova.js') }}"></script>*/
/* {%  elseif clientType == 'iOS' %} */
/*     <script src="{{ asset('bundles/topxiamobilebundlev2/main/js/iOScordova.js') }}"></script>*/
/* {% endif %}*/
/* <script src="{{ asset('bundles/topxiamobilebundlev2/main/js/Androidcordova.js') }}"></script>*/
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
