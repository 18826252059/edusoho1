<?php

/* TopxiaMobileBundleV2:Article:index.html.twig */
class __TwigTemplate_49b18923483ca3220d6c9b8f210a0df4bceaa404c147df4cf89a23cb5d6f0e2f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaMobileBundleV2::article.layout.html.twig", "TopxiaMobileBundleV2:Article:index.html.twig", 1);
        $this->blocks = array(
            'html' => array($this, 'block_html'),
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'bottom_scripts' => array($this, 'block_bottom_scripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaMobileBundleV2::article.layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_html($context, array $blocks = array())
    {
        echo "<html>";
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "网校资讯";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
\t<div ui-view=\"categoryList\" class=\"ui-poptips ui-poptips-null ng-hide\" style=\"height:100%;z-index: 99999;\" ng-show=\"isShowCategory\">
\t</div>

\t<ion-nav-view name=\"articleContent\"></ion-nav-view>
";
        // line 11
        $this->displayBlock('bottom_scripts', $context, $blocks);
        // line 21
        echo "
";
    }

    // line 11
    public function block_bottom_scripts($context, array $blocks = array())
    {
        // line 12
        echo "  
  <script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/topxiamobilebundlev2/libs/ionic/1.0.0/js/ionic.bundle.min.js"), "html", null, true);
        echo "\"></script>
  <!--
  <script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/topxiamobilebundlev2/libs/angular/1.3.0/angular.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/topxiamobilebundlev2/libs/angular-ui-router.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/topxiamobilebundlev2/libs/angular/1.3.0/angular-sanitize.min.js"), "html", null, true);
        echo "\"></script>
  -->
    ";
        // line 19
        $this->displayParentBlock("bottom_scripts", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "TopxiaMobileBundleV2:Article:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 19,  79 => 17,  75 => 16,  71 => 15,  66 => 13,  63 => 12,  60 => 11,  55 => 21,  53 => 11,  46 => 6,  43 => 5,  37 => 3,  31 => 2,  11 => 1,);
    }
}
/* {% extends 'TopxiaMobileBundleV2::article.layout.html.twig' %}*/
/* {% block html %}<html>{% endblock %}*/
/* {% block title %}网校资讯{% endblock %}*/
/* */
/* {% block content %}*/
/* */
/* 	<div ui-view="categoryList" class="ui-poptips ui-poptips-null ng-hide" style="height:100%;z-index: 99999;" ng-show="isShowCategory">*/
/* 	</div>*/
/* */
/* 	<ion-nav-view name="articleContent"></ion-nav-view>*/
/* {% block bottom_scripts %}*/
/*   */
/*   <script src="{{ asset('bundles/topxiamobilebundlev2/libs/ionic/1.0.0/js/ionic.bundle.min.js') }}"></script>*/
/*   <!--*/
/*   <script src="{{ asset('bundles/topxiamobilebundlev2/libs/angular/1.3.0/angular.min.js') }}"></script>*/
/*   <script src="{{ asset('bundles/topxiamobilebundlev2/libs/angular-ui-router.min.js') }}"></script>*/
/*   <script src="{{ asset('bundles/topxiamobilebundlev2/libs/angular/1.3.0/angular-sanitize.min.js') }}"></script>*/
/*   -->*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% endblock %}*/
/* */
