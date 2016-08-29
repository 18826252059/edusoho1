<?php

/* TopxiaAdminBundle:System:share.html.twig */
class __TwigTemplate_18caf5432633dc964ea7f965935f41bb8c96754a3821699a748501ccf9ca6a8e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:System:share.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["menu"] = "admin_setting_share";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        // line 6
        echo "<meta http-equiv=\"pragma\" content=\"no-cache\" />
  ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "

  ";
        // line 9
        $this->loadTemplate("TopxiaAdminBundle:System:default-share-content.html.twig", "TopxiaAdminBundle:System:share.html.twig", 9)->display($context);
        // line 10
        echo "
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System:share.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 10,  42 => 9,  37 => 7,  34 => 6,  31 => 5,  27 => 1,  25 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaAdminBundle::layout.html.twig' %}*/
/* */
/* {% set menu = 'admin_setting_share' %}*/
/* */
/* {% block main %}*/
/* <meta http-equiv="pragma" content="no-cache" />*/
/*   {{ web_macro.flash_messages() }}*/
/* */
/*   {% include 'TopxiaAdminBundle:System:default-share-content.html.twig' %}*/
/* */
/* {% endblock %}*/
