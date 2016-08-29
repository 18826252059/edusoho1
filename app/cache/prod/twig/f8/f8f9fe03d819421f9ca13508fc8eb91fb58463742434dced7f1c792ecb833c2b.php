<?php

/* TopxiaWebBundle:Article/Part:detail-breadcrumb.html.twig */
class __TwigTemplate_0a4e51241ebbb35b63c55fae9fdad61af2f6714e3ee39bb018c97d581cc4af94 extends Twig_Template
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
        echo "<ol class=\"breadcrumb\">
  <li><a href=\"";
        // line 2
        echo $this->env->getExtension('routing')->getPath("article_show");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("article.name", "资讯频道"), "html", null, true);
        echo "</a></li>
  ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 4
            echo "    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_category", array("categoryCode" => $this->getAttribute($context["breadcrumb"], "code", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["breadcrumb"], "name", array()), "html", null, true);
            echo "</a></li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "  <li class=\"active\">正文</li>
</ol>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Article/Part:detail-breadcrumb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 6,  32 => 4,  28 => 3,  22 => 2,  19 => 1,);
    }
}
/* <ol class="breadcrumb">*/
/*   <li><a href="{{path('article_show')}}">{{ setting('article.name', '资讯频道') }}</a></li>*/
/*   {% for breadcrumb in breadcrumbs %}*/
/*     <li><a href="{{path('article_category',{categoryCode:breadcrumb.code})}}">{{breadcrumb.name}}</a></li>*/
/*   {% endfor %}*/
/*   <li class="active">正文</li>*/
/* </ol>*/
