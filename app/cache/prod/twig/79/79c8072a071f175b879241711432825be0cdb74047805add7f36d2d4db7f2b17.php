<?php

/* TopxiaMobileBundleV2:Content:notification.html.twig */
class __TwigTemplate_3a78338ea188039f7239b65aec2d9be18afe1390b383ed176e488bbab165ee77 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
";
        // line 2
        $this->displayBlock('content', $context, $blocks);
    }

    public function block_content($context, array $blocks = array())
    {
        // line 3
        $this->loadTemplate((("TopxiaWebBundle:Notification:item-" . $this->getAttribute((isset($context["notification"]) ? $context["notification"] : null), "type", array())) . ".html.twig"), "TopxiaMobileBundleV2:Content:notification.html.twig", 3)->display($context);
    }

    public function getTemplateName()
    {
        return "TopxiaMobileBundleV2:Content:notification.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  23 => 2,  20 => 1,);
    }
}
/* */
/* {% block content %}*/
/* {% include 'TopxiaWebBundle:Notification:item-' ~ notification.type ~ '.html.twig' %}*/
/* {% endblock %}*/
