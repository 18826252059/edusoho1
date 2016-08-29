<?php

/* TopxiaWebBundle:Register:user-terms.html.twig */
class __TwigTemplate_fc659ded535d93c5f5f3940dfa10f27a93f0efd5fec5cb5886a0b1e153b474f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "TopxiaWebBundle:Register:user-terms.html.twig", 1);
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
        echo "服务协议 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
<div class=\"es-section\">
  <div class=\"section-header\"><h1>服务协议</h1></div>
  ";
        // line 9
        echo (isset($context["userTerms"]) ? $context["userTerms"] : null);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Register:user-terms.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 9,  39 => 6,  36 => 5,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::layout.html.twig' %}*/
/* */
/* {% block title %}服务协议 - {{ parent() }}{% endblock %}*/
/* */
/* {% block content %}*/
/* */
/* <div class="es-section">*/
/*   <div class="section-header"><h1>服务协议</h1></div>*/
/*   {{ userTerms|raw }}*/
/* </div>*/
/* {% endblock %}*/
