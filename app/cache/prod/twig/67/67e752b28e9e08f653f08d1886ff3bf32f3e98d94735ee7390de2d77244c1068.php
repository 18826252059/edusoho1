<?php

/* TopxiaWebBundle:Settings:edu-cloud-error.html.twig */
class __TwigTemplate_ad5ee8cd1547ce25708eaa0a6a0710a99ba2badc97f0cb3f3b144747feffc669 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:Settings:layout.html.twig", "TopxiaWebBundle:Settings:edu-cloud-error.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:Settings:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["script_controller"] = "settings/bind-mobile";
        // line 4
        $context["side_nav"] = "security";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "场景未开启 - 安全设置 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        echo " 
 ";
        // line 7
        $this->loadTemplate("TopxiaWebBundle:Settings:edu-cloud-error.html.twig", "TopxiaWebBundle:Settings:edu-cloud-error.html.twig", 7, "238619063")->display(array_merge($context, array("class" => "panel-col")));
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Settings:edu-cloud-error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 7,  41 => 6,  34 => 2,  30 => 1,  28 => 4,  26 => 3,  11 => 1,);
    }
}


/* TopxiaWebBundle:Settings:edu-cloud-error.html.twig */
class __TwigTemplate_ad5ee8cd1547ce25708eaa0a6a0710a99ba2badc97f0cb3f3b144747feffc669_238619063 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("TopxiaWebBundle:Bootstrap:panel.html.twig", "TopxiaWebBundle:Settings:edu-cloud-error.html.twig", 7);
        $this->blocks = array(
            'heading' => array($this, 'block_heading'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:Bootstrap:panel.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_heading($context, array $blocks = array())
    {
        echo "场景未开启";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "
\t\t<div class=\"text-center\">
\t\t  <h1 class=\"text-muted\">该使用场景未开启</h1>
\t\t</div>
\t\t
    ";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Settings:edu-cloud-error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 10,  97 => 9,  91 => 8,  46 => 7,  41 => 6,  34 => 2,  30 => 1,  28 => 4,  26 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle:Settings:layout.html.twig' %}*/
/* {% block title %}场景未开启 - 安全设置 - {{ parent() }}{% endblock %}*/
/* {% set script_controller = 'settings/bind-mobile' %} */
/* {% set side_nav = 'security' %} */
/* */
/* {% block main %} */
/*  {% embed "TopxiaWebBundle:Bootstrap:panel.html.twig" with {class:'panel-col'} %}*/
/*     {% block heading %}场景未开启{% endblock %}*/
/*     {% block body %}*/
/* */
/* 		<div class="text-center">*/
/* 		  <h1 class="text-muted">该使用场景未开启</h1>*/
/* 		</div>*/
/* 		*/
/*     {% endblock %}*/
/*   {% endembed %}*/
/* {% endblock %}*/
