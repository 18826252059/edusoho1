<?php

/* TopxiaWebBundle:PayCenter:pay-return.html.twig */
class __TwigTemplate_0c0753182dbae27c18b8ad708b744ac6abc264928e1998d410bdb90a624901b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "TopxiaWebBundle:PayCenter:pay-return.html.twig", 1);
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
        $context["script_controller"] = "pay/success-redirect";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo " 支付中心 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "<div class=\"order-pay\">
  <div  class=\"es-section\">
    <ul class=\"es-step es-step-3 clearfix\">
      <li class=\"done\"><span class=\"number\"><i class=\"es-icon es-icon-done\"></i></span>订单确认</li>
      <li class=\"done\"><span class=\"number\"><i class=\"es-icon es-icon-done\"></i></span>订单支付</li>
      <li class=\"done\"><span class=\"number\"><i class=\"es-icon es-icon-done\"></i></span>订单完成</li>
    </ul>
    <div class=\"order-pay-body\">
      <div class=\"order-pay-state\">
        <i class=\"es-icon  es-icon-iccheckcircleblack24px\"></i>
        <p class=\"js-turn\" data-url= ";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["goto"]) ? $context["goto"] : null), "html", null, true);
        echo ">订单支付成功，将在 <span class=\"js-countdown\">3</span> 秒后跳转</p>
      </div>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:PayCenter:pay-return.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 17,  42 => 7,  39 => 6,  32 => 3,  28 => 1,  26 => 4,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::layout.html.twig' %}*/
/* */
/* {% block title %} 支付中心 - {{ parent() }}{% endblock %}*/
/* {% set script_controller = 'pay/success-redirect' %}*/
/* */
/* {% block content %}*/
/* <div class="order-pay">*/
/*   <div  class="es-section">*/
/*     <ul class="es-step es-step-3 clearfix">*/
/*       <li class="done"><span class="number"><i class="es-icon es-icon-done"></i></span>订单确认</li>*/
/*       <li class="done"><span class="number"><i class="es-icon es-icon-done"></i></span>订单支付</li>*/
/*       <li class="done"><span class="number"><i class="es-icon es-icon-done"></i></span>订单完成</li>*/
/*     </ul>*/
/*     <div class="order-pay-body">*/
/*       <div class="order-pay-state">*/
/*         <i class="es-icon  es-icon-iccheckcircleblack24px"></i>*/
/*         <p class="js-turn" data-url= {{ goto }}>订单支付成功，将在 <span class="js-countdown">3</span> 秒后跳转</p>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* {% endblock %}*/
