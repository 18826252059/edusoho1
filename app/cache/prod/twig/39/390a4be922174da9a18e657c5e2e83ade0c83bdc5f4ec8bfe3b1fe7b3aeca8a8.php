<?php

/* TopxiaMobileBundleV2:Article:detail.html.twig */
class __TwigTemplate_68cabac3e8f4fbbe50ba781ef7a49cc70b0b7701dbf7d7bf4f0fbbb01c3a5c08 extends Twig_Template
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
        echo "<div class=\"ui-content\">
 \t<h3 class=\"subtitle blod ui-nowrap\">";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "title", array()), "html", null, true);
        echo "</h3>
 \t<h6 class=\"title\">
 \t\t<span class=\"ui-txt-info\">";
        // line 4
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "publishedTime", array()), "Y-m-d H:i"), "html", null, true);
        echo "</span>
 \t\t<span >";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "source", array()), "html", null, true);
        echo "</span> 
 \t\t<span class=\"ui-txt-highlight\">阅读 ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "hits", array()), "html", null, true);
        echo "</span>
 \t</h6>
 \t<p class=\"content-body\">";
        // line 8
        echo $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "body", array());
        echo "</p>
</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaMobileBundleV2:Article:detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 8,  35 => 6,  31 => 5,  27 => 4,  22 => 2,  19 => 1,);
    }
}
/* <div class="ui-content">*/
/*  	<h3 class="subtitle blod ui-nowrap">{{ article.title}}</h3>*/
/*  	<h6 class="title">*/
/*  		<span class="ui-txt-info">{{ article.publishedTime|date('Y-m-d H:i') }}</span>*/
/*  		<span >{{ article.source}}</span> */
/*  		<span class="ui-txt-highlight">阅读 {{ article.hits }}</span>*/
/*  	</h6>*/
/*  	<p class="content-body">{{ article.body | raw}}</p>*/
/* </div>*/
