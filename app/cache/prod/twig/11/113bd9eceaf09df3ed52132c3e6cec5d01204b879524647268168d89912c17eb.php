<?php

/* TopxiaWebBundle:Tag:index.html.twig */
class __TwigTemplate_eba72f7c4b777cb0a20128c20d1d09d6be0602e2588a4becd1b8545a8fdf0e63 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "TopxiaWebBundle:Tag:index.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "标签 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
<div class=\"es-section\">
  <div class=\"section-header\"><h1>标签</h1></div>
  ";
        // line 9
        if ((isset($context["tags"]) ? $context["tags"] : null)) {
            // line 10
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tags"]) ? $context["tags"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 11
                echo "      <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tag_show", array("name" => $this->getAttribute($context["tag"], "name", array()))), "html", null, true);
                echo "\" class=\"btn-tag\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "name", array()), "html", null, true);
                echo "</a>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "  ";
        } else {
            // line 14
            echo "    <div class=\"empty\">当前还没有标签!</div>
  ";
        }
        // line 16
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Tag:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 16,  65 => 14,  62 => 13,  51 => 11,  46 => 10,  44 => 9,  39 => 6,  36 => 5,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::layout.html.twig' %}*/
/* */
/* {% block title %}标签 - {{ parent() }}{% endblock %}*/
/* */
/* {% block content %}*/
/* */
/* <div class="es-section">*/
/*   <div class="section-header"><h1>标签</h1></div>*/
/*   {% if tags  %}*/
/*     {% for tag in tags %}*/
/*       <a href="{{ path('tag_show', {name:tag.name}) }}" class="btn-tag">{{ tag.name }}</a>*/
/*     {% endfor %}*/
/*   {% else %}*/
/*     <div class="empty">当前还没有标签!</div>*/
/*   {% endif %}*/
/* </div>*/
/* {% endblock %}*/
