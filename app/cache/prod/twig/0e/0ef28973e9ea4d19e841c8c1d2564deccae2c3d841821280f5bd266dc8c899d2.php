<?php

/* TopxiaMobileBundleV2:Teacher:list.html.twig */
class __TwigTemplate_4149b3748440c6ae79f347277b9a7d0746a8e5369c435395208dcb82b2436ac9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaMobileBundleV2::group.layout.html.twig", "TopxiaMobileBundleV2:Teacher:list.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'head_scripts' => array($this, 'block_head_scripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaMobileBundleV2::group.layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "名师列表";
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "
<div class=\"am-list-news-bd\">
  \t<ul class=\"am-list\">
    \t";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["teachers"]) ? $context["teachers"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["teacher"]) {
            // line 9
            echo "      \t\t";
            $context["profile"] = $this->getAttribute((isset($context["profiles"]) ? $context["profiles"] : null), $this->getAttribute($context["teacher"], "id", array()), array(), "array");
            // line 10
            echo "      \t\t\t<li onclick=\"window.edusoho.clickOnAndroid(";
            echo twig_escape_filter($this->env, $this->getAttribute($context["teacher"], "id", array()), "html", null, true);
            echo ")\" class=\"am-g am-list-item-desced am-list-item-thumbed am-list-item-thumb-left\" style=\"padding-top:12px\">
\t      \t\t\t\t<div class=\"am-u-sm-2 am-list-thumb\" >
\t          \t\t\t\t<img class=\"media-object\" style=\"width:100%;\" src=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["teacher"], "mediumAvatar", array()), "html", null, true);
            echo "\">
\t        \t\t\t</div>
\t        \t\t\t<div class=\"am-u-sm-10 am-list-main\">
\t          \t\t\t\t<h4 class=\"am-list-item-hd\" style=\"margin-bottom:5px\">";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["teacher"], "nickname", array()), "html", null, true);
            echo " 
\t          \t\t\t\t\t<span style=\"margin-left:15px\">";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["teacher"], "title", array()), "html", null, true);
            echo "</span>
\t          \t\t\t\t</h4>
\t          \t\t\t<div class=\"am-list-item-text\">
\t          \t\t\t\t";
            // line 19
            echo $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "about", array());
            echo "</div>
\t        \t\t\t</div>
      \t\t\t</li>
    \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['teacher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "  \t</ul>
</div>
";
        // line 25
        $this->displayBlock('head_scripts', $context, $blocks);
        // line 28
        echo "
";
    }

    // line 25
    public function block_head_scripts($context, array $blocks = array())
    {
        // line 26
        echo "\t";
        $this->displayParentBlock("head_scripts", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "TopxiaMobileBundleV2:Teacher:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 26,  94 => 25,  89 => 28,  87 => 25,  83 => 23,  73 => 19,  67 => 16,  63 => 15,  57 => 12,  51 => 10,  48 => 9,  44 => 8,  39 => 5,  36 => 4,  30 => 2,  11 => 1,);
    }
}
/* {% extends 'TopxiaMobileBundleV2::group.layout.html.twig' %}*/
/* {% block title %}{{ '名师列表' }}{% endblock %}*/
/* */
/* {% block content %}*/
/* */
/* <div class="am-list-news-bd">*/
/*   	<ul class="am-list">*/
/*     	{% for teacher in teachers %}*/
/*       		{% set profile = profiles[teacher.id] %}*/
/*       			<li onclick="window.edusoho.clickOnAndroid({{ teacher.id }})" class="am-g am-list-item-desced am-list-item-thumbed am-list-item-thumb-left" style="padding-top:12px">*/
/* 	      				<div class="am-u-sm-2 am-list-thumb" >*/
/* 	          				<img class="media-object" style="width:100%;" src="{{ teacher.mediumAvatar }}">*/
/* 	        			</div>*/
/* 	        			<div class="am-u-sm-10 am-list-main">*/
/* 	          				<h4 class="am-list-item-hd" style="margin-bottom:5px">{{ teacher.nickname }} */
/* 	          					<span style="margin-left:15px">{{ teacher.title }}</span>*/
/* 	          				</h4>*/
/* 	          			<div class="am-list-item-text">*/
/* 	          				{{ profile.about|raw }}</div>*/
/* 	        			</div>*/
/*       			</li>*/
/*     	{% endfor %}*/
/*   	</ul>*/
/* </div>*/
/* {% block head_scripts %}*/
/* 	{{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% endblock %}*/
