<?php

/* TopxiaWebBundle:Article:list-articles-by-tag.html.twig */
class __TwigTemplate_83198adb81d41b2662bde11f5b8e1f0c0fd23686908d3725884875a45167e6cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "TopxiaWebBundle:Article:list-articles-by-tag.html.twig", 1);
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
        $context["bodyClass"] = "artcile-tag-page";
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

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "  
  <div class=\"article-list-body row\">

    <!-- list主内容-->
    <div class=\"col-md-8 article-list-main\">
      ";
        // line 13
        $this->loadTemplate("TopxiaWebBundle:Article/Part:tag-header.html.twig", "TopxiaWebBundle:Article:list-articles-by-tag.html.twig", 13)->display($context);
        // line 14
        echo "      ";
        $this->loadTemplate("TopxiaWebBundle:Article/Part:list-main.html.twig", "TopxiaWebBundle:Article:list-articles-by-tag.html.twig", 14)->display($context);
        // line 15
        echo "    </div>

    <aside class=\"col-md-4 article-sidebar\">
      ";
        // line 18
        $this->loadTemplate("TopxiaWebBundle:Article/Widget:tag-sidebar.html.twig", "TopxiaWebBundle:Article:list-articles-by-tag.html.twig", 18)->display($context);
        // line 19
        echo "    </aside>
  </div>


";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Article:list-articles-by-tag.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 19,  60 => 18,  55 => 15,  52 => 14,  50 => 13,  43 => 8,  40 => 7,  32 => 3,  28 => 1,  26 => 5,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::layout.html.twig' %}*/
/* */
/* {% block title %}{{ setting('article.name', '资讯频道') }} - {{ parent() }}{% endblock %}*/
/* */
/* {% set bodyClass = 'artcile-tag-page' %}*/
/* */
/* {% block content %}*/
/*   */
/*   <div class="article-list-body row">*/
/* */
/*     <!-- list主内容-->*/
/*     <div class="col-md-8 article-list-main">*/
/*       {% include 'TopxiaWebBundle:Article/Part:tag-header.html.twig' %}*/
/*       {% include 'TopxiaWebBundle:Article/Part:list-main.html.twig' %}*/
/*     </div>*/
/* */
/*     <aside class="col-md-4 article-sidebar">*/
/*       {% include 'TopxiaWebBundle:Article/Widget:tag-sidebar.html.twig' %}*/
/*     </aside>*/
/*   </div>*/
/* */
/* */
/* {% endblock %}*/
/* */
