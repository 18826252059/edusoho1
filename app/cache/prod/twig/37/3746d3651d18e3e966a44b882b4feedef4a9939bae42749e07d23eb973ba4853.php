<?php

/* TopxiaWebBundle:Tag:show.html.twig */
class __TwigTemplate_e53465724b2cc6e8344f5c324fbd38321479c83c4eef8a0d274a8f0140ddac16 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "TopxiaWebBundle:Tag:show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'keywords' => array($this, 'block_keywords'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "标签";
        if ((isset($context["tag"]) ? $context["tag"] : null)) {
            echo ":";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tag"]) ? $context["tag"] : null), "name", array()), "html", null, true);
        }
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 4
    public function block_keywords($context, array $blocks = array())
    {
        if ((isset($context["tag"]) ? $context["tag"] : null)) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tag"]) ? $context["tag"] : null), "name", array()), "html", null, true);
        }
        echo ",";
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("site.seo_keywords"), "html", null, true);
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
<div class=\"es-section\">
  <div class=\"section-header\">
    <h1>标签";
        // line 9
        if ((isset($context["tag"]) ? $context["tag"] : null)) {
            echo ":";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tag"]) ? $context["tag"] : null), "name", array()), "html", null, true);
        }
        echo "</h1>
    <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("tag");
        echo "\" class=\"more\"><i class=\"es-icon es-icon-morehoriz\"></i></a>
  </div>
  ";
        // line 12
        if ((isset($context["tag"]) ? $context["tag"] : null)) {
            // line 13
            echo "    ";
            if ((isset($context["courses"]) ? $context["courses"] : null)) {
                // line 14
                echo "      ";
                echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Course:coursesBlock", array("courses" => (isset($context["courses"]) ? $context["courses"] : null), "view" => "list")));
                echo "
      ";
                // line 15
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
                echo " 
    ";
            } else {
                // line 17
                echo "      <div class=\"empty\">没有搜到相关课程，请换个标签试试！</div>
    ";
            }
            // line 19
            echo "  ";
        } else {
            // line 20
            echo "    <div class=\"empty\">标签不存在，请重新输入！</div>
  ";
        }
        // line 22
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Tag:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 22,  94 => 20,  91 => 19,  87 => 17,  82 => 15,  77 => 14,  74 => 13,  72 => 12,  67 => 10,  60 => 9,  55 => 6,  52 => 5,  42 => 4,  30 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::layout.html.twig' %}*/
/* */
/* {% block title %}标签{% if tag %}:{{ tag.name }}{% endif %} - {{ parent() }}{% endblock %}*/
/* {% block keywords %}{% if tag %}{{ tag.name }}{% endif %},{{ setting('site.seo_keywords') }}{% endblock %}*/
/* {% block content %}*/
/* */
/* <div class="es-section">*/
/*   <div class="section-header">*/
/*     <h1>标签{% if tag %}:{{ tag.name }}{% endif %}</h1>*/
/*     <a href="{{ path('tag') }}" class="more"><i class="es-icon es-icon-morehoriz"></i></a>*/
/*   </div>*/
/*   {% if tag %}*/
/*     {% if courses %}*/
/*       {{ render(controller('TopxiaWebBundle:Course:coursesBlock', {courses:courses, view: 'list'})) }}*/
/*       {{ web_macro.paginator(paginator) }} */
/*     {% else %}*/
/*       <div class="empty">没有搜到相关课程，请换个标签试试！</div>*/
/*     {% endif %}*/
/*   {% else %}*/
/*     <div class="empty">标签不存在，请重新输入！</div>*/
/*   {% endif %}*/
/* </div>*/
/* {% endblock %}*/
