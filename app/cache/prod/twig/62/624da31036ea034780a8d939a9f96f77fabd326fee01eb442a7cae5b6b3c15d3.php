<?php

/* TopxiaWebBundle:Register:email-verify-success.html.twig */
class __TwigTemplate_ac870ead9cee8796214d4e2b9b9d0d550f3a4dcb4755a8d5359a0f1f1b103820 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "TopxiaWebBundle:Register:email-verify-success.html.twig", 1);
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
        // line 4
        $context["script_controller"] = "auth/email-verify";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "邮箱验证成功 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "
<div class=\"es-section login-section\">
  <div class=\"section-header\">
    <h3>邮箱验证成功</h3>
  </div>
  <input type=\"hidden\" name=\"verifyUrl\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("register_email_verify", array("token" => $this->getAttribute((isset($context["token"]) ? $context["token"] : null), "token", array()))), "html", null, true);
        echo "\">

  <p>正在跳转到首页...<a id=\"jump-btn\" href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\" class=\"mll\"> &raquo; 点此直接进入</a></p>
</div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Register:email-verify-success.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 14,  49 => 12,  42 => 7,  39 => 6,  32 => 3,  28 => 1,  26 => 4,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::layout.html.twig' %}*/
/* */
/* {% block title %}邮箱验证成功 - {{ parent() }}{% endblock %}*/
/* {% set script_controller = 'auth/email-verify' %}*/
/* */
/* {% block content %}*/
/* */
/* <div class="es-section login-section">*/
/*   <div class="section-header">*/
/*     <h3>邮箱验证成功</h3>*/
/*   </div>*/
/*   <input type="hidden" name="verifyUrl" value="{{ path('register_email_verify', {token:token.token}) }}">*/
/* */
/*   <p>正在跳转到首页...<a id="jump-btn" href="{{ path('homepage') }}" class="mll"> &raquo; 点此直接进入</a></p>*/
/* </div>*/
/* {% endblock %}*/
