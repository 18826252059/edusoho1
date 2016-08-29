<?php

/* TopxiaWebBundle:Content:article-list.html.twig */
class __TwigTemplate_aa968c4302605d510641e9831dfe1b9bd369e03581d7bc984cb28a5572229bf2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "TopxiaWebBundle:Content:article-list.html.twig", 1);
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
        // line 4
        $context["nav"] = "course";
        // line 6
        $context["bodyClass"] = "homepage";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "课程 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 9
        echo "  <p>请创建模版文件customize/content/";
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
        echo "/list.html.twig，自定义。</p>
  <div class=\"row es-row-light\">



    <div class=\"col-md-8\">

      <div class=\"panel panel-default panel-primary\">
        <div class=\"panel-heading\"><h2>最新文章</h2></div>

        <ul class=\"media-list content-list article-list\">
          ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["contents"]) ? $context["contents"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["content"]) {
            // line 21
            echo "            ";
            $context["contentCategory"] = (($this->getAttribute((isset($context["categories"]) ? $context["categories"] : null), $this->getAttribute($context["content"], "categoryId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["categories"]) ? $context["categories"] : null), $this->getAttribute($context["content"], "categoryId", array()), array(), "array"), null)) : (null));
            // line 22
            echo "            <li class=\"media\">
              ";
            // line 23
            if ($this->getAttribute($context["content"], "picture", array())) {
                // line 24
                echo "              <a class=\"pull-right\" href=\"#\">
                <img class=\"media-object\" src=\"";
                // line 25
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute($context["content"], "picture", array())), "html", null, true);
                echo "\">
              </a>
              ";
            }
            // line 28
            echo "              <div class=\"media-body\">
                <h4 class=\"media-heading\"><a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("content_article_show", array("alias" => (($this->getAttribute($context["content"], "alias", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["content"], "alias", array()), $this->getAttribute($context["content"], "id", array()))) : ($this->getAttribute($context["content"], "id", array()))))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["content"], "title", array()), "html", null, true);
            echo "</a></h4>
                ";
            // line 30
            echo $this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute($context["content"], "body", array()), 120);
            echo "
                <div class=\"text-muted\">
                  <span class=\"text-muted\">发布于 ";
            // line 32
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["content"], "publishedTime", array()), "Y-n-d"), "html", null, true);
            echo "</span>
                  ";
            // line 33
            if ((isset($context["contentCategory"]) ? $context["contentCategory"] : null)) {
                // line 34
                echo "                    <span>, 属于 <a href=\"#\" class=\"text-muted\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contentCategory"]) ? $context["contentCategory"] : null), "name", array()), "html", null, true);
                echo "</a> 分类</span>
                  ";
            }
            // line 36
            echo "                </div>
              </div>
            </li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['content'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "        </ul>
        <nav class=\"text-center\">
          ";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo "
        </nav>
      </div>
    </div>

    <div class=\"col-md-4\">
      <div class=\"panel panel-default\">
        <div class=\"panel-heading\">分类</div>

          <div class=\"list-group list-group-flush\">
            ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categoryTree"]) ? $context["categoryTree"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 53
            echo "              <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("content_article_list", array("categoryId" => $this->getAttribute($context["category"], "id", array()))), "html", null, true);
            echo "\" class=\"list-group-item\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "</a>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "          </div>

      </div>

    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Content:article-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 55,  136 => 53,  132 => 52,  119 => 42,  115 => 40,  106 => 36,  100 => 34,  98 => 33,  94 => 32,  89 => 30,  83 => 29,  80 => 28,  74 => 25,  71 => 24,  69 => 23,  66 => 22,  63 => 21,  59 => 20,  44 => 9,  41 => 8,  34 => 3,  30 => 1,  28 => 6,  26 => 4,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::layout.html.twig' %}*/
/* */
/* {% block title %}课程 - {{ parent() }}{% endblock %}*/
/* {% set nav = 'course' %}*/
/* */
/* {% set bodyClass = 'homepage' %}*/
/* */
/* {% block content %}*/
/*   <p>请创建模版文件customize/content/{{ type }}/list.html.twig，自定义。</p>*/
/*   <div class="row es-row-light">*/
/* */
/* */
/* */
/*     <div class="col-md-8">*/
/* */
/*       <div class="panel panel-default panel-primary">*/
/*         <div class="panel-heading"><h2>最新文章</h2></div>*/
/* */
/*         <ul class="media-list content-list article-list">*/
/*           {% for content in contents %}*/
/*             {% set contentCategory = categories[content.categoryId]|default(null)  %}*/
/*             <li class="media">*/
/*               {% if content.picture %}*/
/*               <a class="pull-right" href="#">*/
/*                 <img class="media-object" src="{{ filepath(content.picture) }}">*/
/*               </a>*/
/*               {% endif %}*/
/*               <div class="media-body">*/
/*                 <h4 class="media-heading"><a href="{{ path('content_article_show', {alias:content.alias|default(content.id)}) }}">{{ content.title }}</a></h4>*/
/*                 {{ content.body|plain_text(120) }}*/
/*                 <div class="text-muted">*/
/*                   <span class="text-muted">发布于 {{ content.publishedTime|date('Y-n-d') }}</span>*/
/*                   {% if contentCategory %}*/
/*                     <span>, 属于 <a href="#" class="text-muted">{{ contentCategory.name }}</a> 分类</span>*/
/*                   {% endif %}*/
/*                 </div>*/
/*               </div>*/
/*             </li>*/
/*           {% endfor %}*/
/*         </ul>*/
/*         <nav class="text-center">*/
/*           {{ web_macro.paginator(paginator) }}*/
/*         </nav>*/
/*       </div>*/
/*     </div>*/
/* */
/*     <div class="col-md-4">*/
/*       <div class="panel panel-default">*/
/*         <div class="panel-heading">分类</div>*/
/* */
/*           <div class="list-group list-group-flush">*/
/*             {% for category in categoryTree %}*/
/*               <a href="{{ path('content_article_list', {categoryId:category.id}) }}" class="list-group-item">{{ category.name }}</a>*/
/*               {% endfor  %}*/
/*           </div>*/
/* */
/*       </div>*/
/* */
/*     </div>*/
/*   </div>*/
/* {% endblock %}*/
