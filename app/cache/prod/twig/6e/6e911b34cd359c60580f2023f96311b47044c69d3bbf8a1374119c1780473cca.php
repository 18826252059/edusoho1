<?php

/* TopxiaWebBundle:Default:message-modal.html.twig */
class __TwigTemplate_d656cc9202c6cb9e0ddfa9cb5266ea3decd87c6defaa459eca8c1c8a5b27c4d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "TopxiaWebBundle:Default:message-modal.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::bootstrap-modal-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["typeTitles"] = array("info" => "提示信息", "warning" => "警告信息", "error" => "错误提示");
        // line 5
        $context["title"] = ((array_key_exists("title", $context)) ? (_twig_default_filter((isset($context["title"]) ? $context["title"] : null), $this->getAttribute((isset($context["typeTitles"]) ? $context["typeTitles"] : null), (isset($context["type"]) ? $context["type"] : null), array(), "array"))) : ($this->getAttribute((isset($context["typeTitles"]) ? $context["typeTitles"] : null), (isset($context["type"]) ? $context["type"] : null), array(), "array")));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        // line 9
        echo " 
 <div id=\"page-message-container\" class=\"page-message-container\" data-goto=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["goto"]) ? $context["goto"] : null), "html", null, true);
        echo "\" data-duration=";
        echo twig_escape_filter($this->env, (isset($context["duration"]) ? $context["duration"] : null), "html", null, true);
        echo ">
  <div class=\"page-message-panel\">
    <div class=\"page-message-body\">";
        // line 12
        echo twig_escape_filter($this->env, ((array_key_exists("message", $context)) ? (_twig_default_filter((isset($context["message"]) ? $context["message"] : null), "")) : ("")), "html", null, true);
        echo "</div>
  </div>
</div>


";
    }

    // line 19
    public function block_footer($context, array $blocks = array())
    {
        // line 20
        echo "  <button class=\"btn btn-primary\" type=\"button\" data-dismiss=\"modal\">关闭</button>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Default:message-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 20,  64 => 19,  54 => 12,  47 => 10,  44 => 9,  41 => 8,  35 => 7,  31 => 1,  29 => 5,  27 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::bootstrap-modal-layout.html.twig' %}*/
/* */
/* {% set typeTitles = {info:'提示信息', warning:'警告信息', error: '错误提示'} %}*/
/* */
/* {% set title = title|default(typeTitles[type]) %}*/
/* */
/* {% block title %}{{ title }}{% endblock %}*/
/* {% block body %}*/
/*  */
/*  <div id="page-message-container" class="page-message-container" data-goto="{{ goto }}" data-duration={{ duration }}>*/
/*   <div class="page-message-panel">*/
/*     <div class="page-message-body">{{ message|default('') }}</div>*/
/*   </div>*/
/* </div>*/
/* */
/* */
/* {% endblock %}*/
/* */
/* {% block footer %}*/
/*   <button class="btn btn-primary" type="button" data-dismiss="modal">关闭</button>*/
/* {% endblock %}*/
