<?php

/* TopxiaAdminBundle:Coin:order.html.twig */
class __TwigTemplate_2a02168bf2ea5935b6a6a3bc2235f12fd88c5606f67eaa293e5fa0660810ee07 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::new-layout.html.twig", "TopxiaAdminBundle:Coin:order.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle::new-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["nav"] = "admin_order";
        // line 5
        $context["menu"] = "admin_coin_orders";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "  
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Coin:order.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 8,  33 => 7,  29 => 1,  27 => 5,  25 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaAdminBundle::new-layout.html.twig' %}*/
/* */
/* {% set nav = 'admin_order' %}*/
/* */
/* {% set menu = 'admin_coin_orders' %}*/
/* */
/* {% block main %}*/
/*   */
/* {% endblock %}*/
/* */
