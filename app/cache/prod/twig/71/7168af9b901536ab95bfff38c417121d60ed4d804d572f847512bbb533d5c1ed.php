<?php

/* TopxiaWebBundle:Article/Part:detail-metas.html.twig */
class __TwigTemplate_fa48d7796f5a1cdcb2ba523f0c06d818f9db01f5d82bc9196b5e2caa45112ef0 extends Twig_Template
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
        echo "<div class=\"article-metas\">
  <div class=\"pull-left\">
    <div class=\"date\">
      <div class=\"day\">";
        // line 4
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "publishedTime", array()), "d"), "html", null, true);
        echo "</div>
      <div class=\"month\">";
        // line 5
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "publishedTime", array()), "m"), "html", null, true);
        echo "月</div>
    </div>
  </div>
  <div class=\"metas-body\">
    <h2 class=\"title\">
      ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "title", array()), "html", null, true);
        echo "
    </h2>
    <div class=\"sns\">
      <span class=\"views-num\">
        <i class=\"es-icon es-icon-visibility\"></i>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "hits", array()), "html", null, true);
        echo "
      </span>
      <span class=\"comment-num\">
        <i class=\"es-icon es-icon-textsms\"></i>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "postNum", array()), "html", null, true);
        echo "
      </span>
      <span class=\"love-num\">
        <i class=\"es-icon es-icon-favorite\"></i><span class=\"js-like-num\">";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "upsNum", array()), "html", null, true);
        echo "</span>
      </span>
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Article/Part:detail-metas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 20,  49 => 17,  43 => 14,  36 => 10,  28 => 5,  24 => 4,  19 => 1,);
    }
}
/* <div class="article-metas">*/
/*   <div class="pull-left">*/
/*     <div class="date">*/
/*       <div class="day">{{ article.publishedTime|date('d') }}</div>*/
/*       <div class="month">{{ article.publishedTime|date('m') }}月</div>*/
/*     </div>*/
/*   </div>*/
/*   <div class="metas-body">*/
/*     <h2 class="title">*/
/*       {{ article.title }}*/
/*     </h2>*/
/*     <div class="sns">*/
/*       <span class="views-num">*/
/*         <i class="es-icon es-icon-visibility"></i>{{ article.hits }}*/
/*       </span>*/
/*       <span class="comment-num">*/
/*         <i class="es-icon es-icon-textsms"></i>{{ article.postNum }}*/
/*       </span>*/
/*       <span class="love-num">*/
/*         <i class="es-icon es-icon-favorite"></i><span class="js-like-num">{{ article.upsNum }}</span>*/
/*       </span>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
