<?php

/* TopxiaWebBundle:EsBar:ListContent/notification.html.twig */
class __TwigTemplate_6e78bc22bf2a57f191080b78a94031246aa4ae172a80701595c96fb7e35de765 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:EsBar:layout.html.twig", "TopxiaWebBundle:EsBar:ListContent/notification.html.twig", 1);
        $this->blocks = array(
            'esBarTitle' => array($this, 'block_esBarTitle'),
            'esBarBody' => array($this, 'block_esBarBody'),
            'myMessage' => array($this, 'block_myMessage'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:EsBar:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_esBarTitle($context, array $blocks = array())
    {
        // line 3
        echo "    通知
";
    }

    // line 6
    public function block_esBarBody($context, array $blocks = array())
    {
        // line 7
        echo "  <ul class=\"bar-message\">
    ";
        // line 8
        $this->displayBlock('myMessage', $context, $blocks);
        // line 11
        echo "  </ul>
";
    }

    // line 8
    public function block_myMessage($context, array $blocks = array())
    {
        // line 9
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:EsBar:ListContent/notification.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 9,  51 => 8,  46 => 11,  44 => 8,  41 => 7,  38 => 6,  33 => 3,  30 => 2,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle:EsBar:layout.html.twig' %}*/
/* {% block esBarTitle %}*/
/*     通知*/
/* {% endblock %}*/
/* */
/* {% block esBarBody %}*/
/*   <ul class="bar-message">*/
/*     {% block myMessage %}*/
/* */
/*     {% endblock %}*/
/*   </ul>*/
/* {% endblock %}*/
/* */
