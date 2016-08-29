<?php

/* TopxiaWebBundle:Search:search-article-item.html.twig */
class __TwigTemplate_bea79aa63ae157c0f79e815d4b932c6459c519834152d5acfcc509a61ef70f7a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<article class=\"article-item\">
  <div class=\"article-metas clearfix\">
    <div class=\"pull-left\">
      <div class=\"date\">
        <div class=\"day\">";
        // line 5
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "publishedTime", array()), "d"), "html", null, true);
        echo "</div>
        <div class=\"month\">";
        // line 6
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "publishedTime", array()), "m"), "html", null, true);
        echo "月</div>
      </div>
    </div>
    <div class=\"metas-body\">
      <p>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "name", array()), "html", null, true);
        echo " </p>
      <h2 class=\"title\"><a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_detail", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "id", array()))), "html", null, true);
        echo "\">";
        echo $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "title", array());
        echo "</a></h2>
    </div>
  </div>
  ";
        // line 14
        if ($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "thumb", array())) {
            // line 15
            echo "    <div class=\"media\">
      <div class=\"media-left\">
        <a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_detail", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "id", array()))), "html", null, true);
            echo "\">
          <img class=\"media-object\" src=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "thumb", array()), ""), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "title", array()), "html", null, true);
            echo "\">
        </a>
      </div>
      <div class=\"media-body\">
        ";
            // line 22
            echo $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "body", array());
            echo "
      </div>
    </div>
  ";
        } else {
            // line 26
            echo "    <div class=\"content\">
      ";
            // line 27
            echo $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "body", array());
            echo "
    </div>
  ";
        }
        // line 30
        echo "</article>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Search:search-article-item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 30,  77 => 27,  74 => 26,  67 => 22,  58 => 18,  54 => 17,  50 => 15,  48 => 14,  40 => 11,  36 => 10,  29 => 6,  25 => 5,  19 => 1,);
    }
}
/* <article class="article-item">*/
/*   <div class="article-metas clearfix">*/
/*     <div class="pull-left">*/
/*       <div class="date">*/
/*         <div class="day">{{ article.publishedTime|date('d') }}</div>*/
/*         <div class="month">{{ article.publishedTime|date('m') }}月</div>*/
/*       </div>*/
/*     </div>*/
/*     <div class="metas-body">*/
/*       <p>{{ category.name }} </p>*/
/*       <h2 class="title"><a href="{{ path('article_detail', {id:article.id}) }}">{{ article.title|raw }}</a></h2>*/
/*     </div>*/
/*   </div>*/
/*   {% if article.thumb %}*/
/*     <div class="media">*/
/*       <div class="media-left">*/
/*         <a href="{{ path('article_detail', { id:article.id }) }}">*/
/*           <img class="media-object" src="{{ filepath(article.thumb, '') }}" alt="{{ article.title }}">*/
/*         </a>*/
/*       </div>*/
/*       <div class="media-body">*/
/*         {{ article.body|raw}}*/
/*       </div>*/
/*     </div>*/
/*   {% else %}*/
/*     <div class="content">*/
/*       {{ article.body|raw}}*/
/*     </div>*/
/*   {% endif %}*/
/* </article>*/
