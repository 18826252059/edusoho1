<?php

/* TopxiaWebBundle:Register:email-verify-error.html.twig */
class __TwigTemplate_532cf58f0161e09148d9731723da9d9656dabe414b33dc77a89451aca22cab86 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "TopxiaWebBundle:Register:email-verify-error.html.twig", 1);
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
        echo "邮箱验证失败 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
<div class=\"es-section login-section\">
  <div class=\"section-header\">
    <h3>邮箱验证失败</h3>
  </div>
  <div class=\"alert alert-danger\">验证地址已过期！</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Register:email-verify-error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 6,  36 => 5,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::layout.html.twig' %}*/
/* */
/* {% block title %}邮箱验证失败 - {{ parent() }}{% endblock %}*/
/* */
/* {% block content %}*/
/* */
/* <div class="es-section login-section">*/
/*   <div class="section-header">*/
/*     <h3>邮箱验证失败</h3>*/
/*   </div>*/
/*   <div class="alert alert-danger">验证地址已过期！</div>*/
/* </div>*/
/* {% endblock %}*/
