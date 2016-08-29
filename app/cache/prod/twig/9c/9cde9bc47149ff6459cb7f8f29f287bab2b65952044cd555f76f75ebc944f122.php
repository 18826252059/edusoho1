<?php

/* TopxiaWebBundle:Article:index.html.twig */
class __TwigTemplate_04e40def9a09731b48aa688956aa6bb3722bb02a5a9aa07932b437ac020a6785 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "TopxiaWebBundle:Article:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["bodyClass"] = "artcile-list-page";
        // line 6
        $context["script_controller"] = "article/list.js";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("article.name", "资讯频道"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 9
        echo "
  <div class=\"es-tabs article-list-header\">
    <div class=\"tab-header\">
      ";
        // line 12
        $this->loadTemplate("TopxiaWebBundle:Article/Part:list-header-nav.html.twig", "TopxiaWebBundle:Article:index.html.twig", 12)->display($context);
        // line 13
        echo "    </div>
  </div>
  
  <!-- 资讯头部 -->
  ";
        // line 17
        $this->loadTemplate("TopxiaWebBundle:Article/Part:list-header.html.twig", "TopxiaWebBundle:Article:index.html.twig", 17)->display($context);
        // line 18
        echo "  
  <div class=\"article-list-body row\">

    <!-- list主内容-->
    <div class=\"col-md-8 article-list-main\">
      ";
        // line 23
        $this->loadTemplate("TopxiaWebBundle:Article/Part:list-main.html.twig", "TopxiaWebBundle:Article:index.html.twig", 23)->display(array_merge($context, array("articles" => (isset($context["latestArticles"]) ? $context["latestArticles"] : null))));
        // line 24
        echo "    </div>

    <aside class=\"col-md-4 article-sidebar\">
      ";
        // line 27
        $this->loadTemplate("TopxiaWebBundle:Article/Widget:sidebar.html.twig", "TopxiaWebBundle:Article:index.html.twig", 27)->display($context);
        // line 28
        echo "    </aside>
  </div>


";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Article:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 28,  74 => 27,  69 => 24,  67 => 23,  60 => 18,  58 => 17,  52 => 13,  50 => 12,  45 => 9,  42 => 8,  34 => 3,  30 => 1,  28 => 6,  26 => 5,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::layout.html.twig' %}*/
/* */
/* {% block title %}{{ setting('article.name', '资讯频道') }} - {{ parent() }}{% endblock %}*/
/* */
/* {% set bodyClass = 'artcile-list-page' %}*/
/* {% set script_controller = 'article/list.js' %}*/
/* */
/* {% block content %}*/
/* */
/*   <div class="es-tabs article-list-header">*/
/*     <div class="tab-header">*/
/*       {% include 'TopxiaWebBundle:Article/Part:list-header-nav.html.twig' %}*/
/*     </div>*/
/*   </div>*/
/*   */
/*   <!-- 资讯头部 -->*/
/*   {% include 'TopxiaWebBundle:Article/Part:list-header.html.twig' %}*/
/*   */
/*   <div class="article-list-body row">*/
/* */
/*     <!-- list主内容-->*/
/*     <div class="col-md-8 article-list-main">*/
/*       {% include 'TopxiaWebBundle:Article/Part:list-main.html.twig' with {articles:latestArticles} %}*/
/*     </div>*/
/* */
/*     <aside class="col-md-4 article-sidebar">*/
/*       {% include 'TopxiaWebBundle:Article/Widget:sidebar.html.twig' %}*/
/*     </aside>*/
/*   </div>*/
/* */
/* */
/* {% endblock %}*/
/* */
