<?php

/* TopxiaWebBundle:Content:blank.html.twig */
class __TwigTemplate_8b70a22f947727f76085e9c3865d8dd743f5679775ce3186732dcf224c46df61 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "TopxiaWebBundle:Content:blank.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'keywords' => array($this, 'block_keywords'),
            'description' => array($this, 'block_description'),
            'header' => array($this, 'block_header'),
            'footer' => array($this, 'block_footer'),
            'esBar' => array($this, 'block_esBar'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 7
        $context["siteNav"] = ("page/" . (($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "alias", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "alias", array()), $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "id", array()))) : ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "id", array()))));
        // line 9
        $context["bodyClass"] = "custompage";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "title", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 4
    public function block_keywords($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "title", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("site.name"), "html", null, true);
    }

    // line 5
    public function block_description($context, array $blocks = array())
    {
        echo $this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "body", array()), 100);
    }

    // line 11
    public function block_header($context, array $blocks = array())
    {
    }

    // line 12
    public function block_footer($context, array $blocks = array())
    {
    }

    // line 13
    public function block_esBar($context, array $blocks = array())
    {
    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
        // line 16
        echo "<div class=\"es-section\">
  
  <div class=\"section-header\"><h1>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "title", array()), "html", null, true);
        echo "</h1></div>
  
  ";
        // line 20
        if ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "body", array())) {
            // line 21
            echo "    ";
            echo $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "body", array());
            echo "
  ";
        } else {
            // line 23
            echo "    <div class=\"empty\">当前页面尚未编辑内容，请在管理后台编辑。</div>
  ";
        }
        // line 25
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Content:blank.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 25,  96 => 23,  90 => 21,  88 => 20,  83 => 18,  79 => 16,  76 => 15,  71 => 13,  66 => 12,  61 => 11,  55 => 5,  47 => 4,  39 => 3,  35 => 1,  33 => 9,  31 => 7,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::layout.html.twig' %}*/
/* */
/* {% block title %}{{ content.title }} - {{ parent() }}{% endblock %}*/
/* {% block keywords %}{{ content.title }} {{ setting('site.name') }}{% endblock %}*/
/* {% block description %}{{ content.body|plain_text(100) }}{% endblock %}*/
/* */
/* {% set siteNav = 'page/' ~ content.alias|default(content.id) %}*/
/* */
/* {% set bodyClass = 'custompage' %}*/
/* */
/* {% block header %}{% endblock %}*/
/* {% block footer %}{% endblock %}*/
/* {% block esBar %}{% endblock %}*/
/* */
/* {% block content %}*/
/* <div class="es-section">*/
/*   */
/*   <div class="section-header"><h1>{{ content.title }}</h1></div>*/
/*   */
/*   {% if content.body %}*/
/*     {{ content.body|raw }}*/
/*   {% else %}*/
/*     <div class="empty">当前页面尚未编辑内容，请在管理后台编辑。</div>*/
/*   {% endif %}*/
/* </div>*/
/* {% endblock %}*/
