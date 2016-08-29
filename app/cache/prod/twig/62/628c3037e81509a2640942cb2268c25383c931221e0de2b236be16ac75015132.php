<?php

/* TopxiaWebBundle:Article:detail.html.twig */
class __TwigTemplate_9ecabe33f7834539b584278ccf441bffe9e3b8ab6e8e58ff82fbe5b82aa644b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "TopxiaWebBundle:Article:detail.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'keywords' => array($this, 'block_keywords'),
            'description' => array($this, 'block_description'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 9
        $context["bodyClass"] = "artcile-detail-page";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "title", array()), "html", null, true);
        echo " - ";
        if ($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "seoTitle", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "seoTitle", array()), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "name", array()), "html", null, true);
        }
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 5
    public function block_keywords($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (isset($context["seoKeyword"]) ? $context["seoKeyword"] : null), "html", null, true);
    }

    // line 7
    public function block_description($context, array $blocks = array())
    {
        echo $this->env->getExtension('topxia_web_twig')->plainTextFilter((isset($context["seoDesc"]) ? $context["seoDesc"] : null), 100);
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        // line 12
        echo "
  ";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->loadScript("article/detail"), "html", null, true);
        echo "

  <div class=\"article-detail row\" id=\"detail-content\">
    <!-- 主内容 -->
    <div class=\"col-md-8 article-detail-main\">
      <section class=\"es-section article-content\">
        ";
        // line 19
        $this->loadTemplate("TopxiaWebBundle:Article/Part:detail-breadcrumb.html.twig", "TopxiaWebBundle:Article:detail.html.twig", 19)->display($context);
        // line 20
        echo "        
        ";
        // line 21
        $this->loadTemplate("TopxiaWebBundle:Article/Part:detail-metas.html.twig", "TopxiaWebBundle:Article:detail.html.twig", 21)->display($context);
        // line 22
        echo "        
        ";
        // line 23
        $this->loadTemplate("TopxiaWebBundle:Article/Part:detail-boy.html.twig", "TopxiaWebBundle:Article:detail.html.twig", 23)->display($context);
        // line 24
        echo "
        ";
        // line 25
        $this->loadTemplate("TopxiaWebBundle:Article/Part:detail-copyright.html.twig", "TopxiaWebBundle:Article:detail.html.twig", 25)->display($context);
        // line 26
        echo "
        ";
        // line 27
        $this->loadTemplate("TopxiaWebBundle:Article/Part:detail-tags.html.twig", "TopxiaWebBundle:Article:detail.html.twig", 27)->display($context);
        // line 28
        echo "
        ";
        // line 29
        $this->loadTemplate("TopxiaWebBundle:Article/Part:detail-share.html.twig", "TopxiaWebBundle:Article:detail.html.twig", 29)->display($context);
        // line 30
        echo "
        ";
        // line 31
        $this->loadTemplate("TopxiaWebBundle:Article/Part:detail-related-article.html.twig", "TopxiaWebBundle:Article:detail.html.twig", 31)->display($context);
        // line 32
        echo "        
        ";
        // line 33
        $this->loadTemplate("TopxiaWebBundle:Article/Part:detail-post-form.html.twig", "TopxiaWebBundle:Article:detail.html.twig", 33)->display($context);
        // line 34
        echo "
        ";
        // line 35
        $this->loadTemplate("TopxiaWebBundle:Article/Part:detail-post-list.html.twig", "TopxiaWebBundle:Article:detail.html.twig", 35)->display($context);
        // line 36
        echo "        
      </section>
    </div>
    
    <aside class=\"col-md-4 article-sidebar\">
      ";
        // line 41
        $this->loadTemplate("TopxiaWebBundle:Article/Widget:sidebar.html.twig", "TopxiaWebBundle:Article:detail.html.twig", 41)->display($context);
        // line 42
        echo "    </aside>
    
  </div>

";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Article:detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 42,  124 => 41,  117 => 36,  115 => 35,  112 => 34,  110 => 33,  107 => 32,  105 => 31,  102 => 30,  100 => 29,  97 => 28,  95 => 27,  92 => 26,  90 => 25,  87 => 24,  85 => 23,  82 => 22,  80 => 21,  77 => 20,  75 => 19,  66 => 13,  63 => 12,  60 => 11,  54 => 7,  48 => 5,  34 => 3,  30 => 1,  28 => 9,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::layout.html.twig' %}*/
/* */
/* {% block title %}{{ article.title }} - {% if category.seoTitle %}{{ category.seoTitle }}{% else %}{{ category.name }}{% endif %} - {{ parent() }}{% endblock %}*/
/* */
/* {% block keywords %}{{ seoKeyword }}{% endblock %}*/
/* */
/* {% block description %}{{ seoDesc|plain_text(100) }}{% endblock %}*/
/* */
/* {% set bodyClass = 'artcile-detail-page' %}*/
/* */
/* {% block content %}*/
/* */
/*   {{ load_script('article/detail') }}*/
/* */
/*   <div class="article-detail row" id="detail-content">*/
/*     <!-- 主内容 -->*/
/*     <div class="col-md-8 article-detail-main">*/
/*       <section class="es-section article-content">*/
/*         {% include 'TopxiaWebBundle:Article/Part:detail-breadcrumb.html.twig' %}*/
/*         */
/*         {% include 'TopxiaWebBundle:Article/Part:detail-metas.html.twig' %}*/
/*         */
/*         {% include 'TopxiaWebBundle:Article/Part:detail-boy.html.twig' %}*/
/* */
/*         {% include 'TopxiaWebBundle:Article/Part:detail-copyright.html.twig' %}*/
/* */
/*         {% include 'TopxiaWebBundle:Article/Part:detail-tags.html.twig' %}*/
/* */
/*         {% include 'TopxiaWebBundle:Article/Part:detail-share.html.twig' %}*/
/* */
/*         {% include 'TopxiaWebBundle:Article/Part:detail-related-article.html.twig' %}*/
/*         */
/*         {% include 'TopxiaWebBundle:Article/Part:detail-post-form.html.twig' %}*/
/* */
/*         {% include 'TopxiaWebBundle:Article/Part:detail-post-list.html.twig' %}*/
/*         */
/*       </section>*/
/*     </div>*/
/*     */
/*     <aside class="col-md-4 article-sidebar">*/
/*       {% include 'TopxiaWebBundle:Article/Widget:sidebar.html.twig' %}*/
/*     </aside>*/
/*     */
/*   </div>*/
/* */
/* {% endblock %}*/
/* */
/* */
