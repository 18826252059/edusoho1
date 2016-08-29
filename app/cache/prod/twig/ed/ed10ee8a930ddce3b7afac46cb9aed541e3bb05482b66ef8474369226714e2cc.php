<?php

/* TopxiaWebBundle:Search:cloud-search.html.twig */
class __TwigTemplate_d93653496e474f59f42e3ca06ea362d77327ae6fbae2ec7614ed68073c205784 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "TopxiaWebBundle:Search:cloud-search.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'top_content' => array($this, 'block_top_content'),
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
        $this->env->getExtension('topxia_web_twig')->loadScript("search/cloud-search");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "搜索：";
        if ((isset($context["keywords"]) ? $context["keywords"] : null)) {
            echo twig_escape_filter($this->env, (isset($context["keywords"]) ? $context["keywords"] : null), "html", null, true);
        } else {
            echo "全部课程";
        }
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 6
    public function block_top_content($context, array $blocks = array())
    {
        // line 7
        echo "  <div class=\"search-banner\">
    <div class=\"container\">
      <form class=\"input-group search-input-group\" id=\"search-input-group\" action=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("search");
        echo "\" method=\"get\">
        <div class=\"input-wrap\">
          <input type=\"hidden\" name=\"type\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "")) : ("")), "html", null, true);
        echo "\" >
          <input type=\"hidden\" name=\"targetType\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, ((array_key_exists("targetType", $context)) ? (_twig_default_filter((isset($context["targetType"]) ? $context["targetType"] : null), "")) : ("")), "html", null, true);
        echo "\" >
          <input type=\"text\" name=\"q\" class=\"form-control\" placeholder=\"搜索\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["keywords"]) ? $context["keywords"] : null), "html", null, true);
        echo "\">
          <i class=\"js-btn-clear es-icon es-icon-close01\"></i>
        </div>
        <span class=\"input-group-btn\">
          <button class=\"btn btn-primary\" type=\"submit\">搜索</button>
        </span>
      </form>
    </div>
  </div>
";
    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        // line 25
        echo "  <div class=\"row\">
    <div class=\"col-md-8\">
      <div class=\"es-section\">
        <ul class=\"nav nav-tabs\" id=\"search-nav-tabs\" role=\"tablist\">
          <li ";
        // line 29
        if (((isset($context["type"]) ? $context["type"] : null) == "course")) {
            echo "class=\"active\" ";
        }
        echo "><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cloud_search", array("q" => (isset($context["keywords"]) ? $context["keywords"] : null), "type" => "course")), "html", null, true);
        echo "\" data-type=\"course\" >课程</a></li>
          <li ";
        // line 30
        if (((isset($context["type"]) ? $context["type"] : null) == "teacher")) {
            echo "class=\"active\" ";
        }
        echo "><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cloud_search", array("q" => (isset($context["keywords"]) ? $context["keywords"] : null), "type" => "teacher")), "html", null, true);
        echo "\" data-type=\"teacher\" >教师</a></li>
          <li ";
        // line 31
        if (((isset($context["type"]) ? $context["type"] : null) == "thread")) {
            echo "class=\"active\" ";
        }
        echo "><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cloud_search", array("q" => (isset($context["keywords"]) ? $context["keywords"] : null), "type" => "thread")), "html", null, true);
        echo "\" data-type=\"thread\" >话题</a></li>
          <li ";
        // line 32
        if (((isset($context["type"]) ? $context["type"] : null) == "article")) {
            echo "class=\"active\" ";
        }
        echo "><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cloud_search", array("q" => (isset($context["keywords"]) ? $context["keywords"] : null), "type" => "article")), "html", null, true);
        echo "\" data-type=\"article\" >资讯</a></li>
        </ul>
        <div class=\"search-result\" id=\"search-result\">
        ";
        // line 35
        if ((isset($context["type"]) ? $context["type"] : null)) {
            // line 36
            echo "          ";
            $this->loadTemplate((("TopxiaWebBundle:Search:search-" . twig_lower_filter($this->env, (isset($context["type"]) ? $context["type"] : null))) . ".html.twig"), "TopxiaWebBundle:Search:cloud-search.html.twig", 36)->display($context);
            // line 37
            echo "        ";
        }
        // line 38
        echo "        </div>
        <nav class=\"text-center\">
          ";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo "
        </nav>
      </div>
    </div>
    <div class=\"col-md-4\">
      <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
          <h3 class=\"panel-title\">常用关键词</h3>
        </div>
        <div class=\"panel-body\">

        </div>
      </div>
    </div>
  </div>
  
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Search:cloud-search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 40,  131 => 38,  128 => 37,  125 => 36,  123 => 35,  113 => 32,  105 => 31,  97 => 30,  89 => 29,  83 => 25,  80 => 24,  66 => 13,  62 => 12,  58 => 11,  53 => 9,  49 => 7,  46 => 6,  33 => 3,  29 => 1,  27 => 5,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::layout.html.twig' %}*/
/* */
/* {% block title %}搜索：{% if keywords %}{{ keywords }}{% else %}全部课程{% endif %} - {{ parent() }}{% endblock %}*/
/* */
/* {% do load_script('search/cloud-search') %}*/
/* {% block top_content %}*/
/*   <div class="search-banner">*/
/*     <div class="container">*/
/*       <form class="input-group search-input-group" id="search-input-group" action="{{path('search')}}" method="get">*/
/*         <div class="input-wrap">*/
/*           <input type="hidden" name="type" value="{{type|default('')}}" >*/
/*           <input type="hidden" name="targetType" value="{{targetType|default('')}}" >*/
/*           <input type="text" name="q" class="form-control" placeholder="搜索" value="{{keywords}}">*/
/*           <i class="js-btn-clear es-icon es-icon-close01"></i>*/
/*         </div>*/
/*         <span class="input-group-btn">*/
/*           <button class="btn btn-primary" type="submit">搜索</button>*/
/*         </span>*/
/*       </form>*/
/*     </div>*/
/*   </div>*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/*   <div class="row">*/
/*     <div class="col-md-8">*/
/*       <div class="es-section">*/
/*         <ul class="nav nav-tabs" id="search-nav-tabs" role="tablist">*/
/*           <li {% if type == 'course' %}class="active" {% endif %}><a href="{{path('cloud_search',{q : keywords,type : 'course'}) }}" data-type="course" >课程</a></li>*/
/*           <li {% if type == 'teacher' %}class="active" {% endif %}><a href="{{path('cloud_search',{q : keywords,type : 'teacher'}) }}" data-type="teacher" >教师</a></li>*/
/*           <li {% if type == 'thread' %}class="active" {% endif %}><a href="{{path('cloud_search',{q : keywords,type : 'thread'}) }}" data-type="thread" >话题</a></li>*/
/*           <li {% if type == 'article' %}class="active" {% endif %}><a href="{{path('cloud_search',{q : keywords,type : 'article'}) }}" data-type="article" >资讯</a></li>*/
/*         </ul>*/
/*         <div class="search-result" id="search-result">*/
/*         {% if type %}*/
/*           {% include 'TopxiaWebBundle:Search:search-' ~ type|lower ~ '.html.twig' %}*/
/*         {% endif %}*/
/*         </div>*/
/*         <nav class="text-center">*/
/*           {{ web_macro.paginator(paginator) }}*/
/*         </nav>*/
/*       </div>*/
/*     </div>*/
/*     <div class="col-md-4">*/
/*       <div class="panel panel-default">*/
/*         <div class="panel-heading">*/
/*           <h3 class="panel-title">常用关键词</h3>*/
/*         </div>*/
/*         <div class="panel-body">*/
/* */
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/*   */
/* {% endblock %}*/
