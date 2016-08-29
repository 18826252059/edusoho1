<?php

/* TopxiaWebBundle:PayCenter:wxpay-qrcode.html.twig */
class __TwigTemplate_b9de88da75dd65524851cb8f7d740afce73f710c4630700a18ff1db6180308dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "TopxiaWebBundle:PayCenter:wxpay-qrcode.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'esBar' => array($this, 'block_esBar'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["script_controller"] = "pay/wxpay-roll";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "微信支付 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 4
    public function block_esBar($context, array $blocks = array())
    {
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "  
  <div class=\"es-section section-wxpay\">
    <ul class=\"es-step es-step-3 clearfix\">
      <li class=\"done\"><span class=\"number\"><i class=\"es-icon es-icon-done\"></i></span>订单确认</li>
      <li class=\"doing\"><span class=\"number\">2</span>微信支付</li>
      <li><span class=\"number\">3</span>订单完成</li>
    </ul>
    <div class=\"order-pay-body\">
      <div class=\"alert alert-success alert-dismissible\" role=\"alert\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
        订单已提交，请在４８小时内完成支付！逾期订单将被取消。
      </div>
      <div class=\"pay-qrcode-body clearfix\">
        <div class=\"qrcode-img\">
          <img class = 'img-responsive img-js' src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("common_qrcode", array("text" => (isset($context["url"]) ? $context["url"] : null))), "html", null, true);
        echo "\"  data-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("wxpay_roll", array("order" => (isset($context["order"]) ? $context["order"] : null))), "html", null, true);
        echo "\" data-goto=\"";
        if ((($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "targetType", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "targetType", array()), null)) : (null))) {
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pay_success_show", array("id" => $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "id", array(), "array"))), "html", null, true);
            echo " ";
        } else {
            echo $this->env->getExtension('routing')->getPath("my_coin");
            echo " ";
        }
        echo "\">
          <div class=\"text-qrcode hidden-xs\">
            请使用微信扫一扫<br>扫描二维码支付
          </div>
          <div class=\"text-qrcode visible-xs\">
            请长按二维码支付
          </div>
        </div>
        <div class=\"qrcode-img-two hidden-xs\">
          <img class=\"img-responsive\" src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/v2/img/pay_phone.jpg"), "html", null, true);
        echo "\" alt=\"\"> 
        </div>
      </div>
      <div class=\"pay-qrcode-footer\">
        <a href=\"";
        // line 34
        if ((($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "targetType", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "targetType", array()), null)) : (null))) {
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pay_center_show", array("sn" => $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "sn", array(), "array"), "targetType" => $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "targetType", array(), "array"))), "html", null, true);
            echo " ";
        } else {
            echo $this->env->getExtension('routing')->getPath("my_coin_buy");
            echo " ";
        }
        echo " \" class=\"mrl\"><i class=\"es-icon es-icon-arrowback mrs\"></i>选择其他支付方式</a> 
        应付金额：<span class=\"pay-rmb\">¥";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "amount", array(), "array"), "html", null, true);
        echo "</span>
      </div>
    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:PayCenter:wxpay-qrcode.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 35,  94 => 34,  87 => 30,  64 => 21,  48 => 7,  45 => 6,  40 => 4,  33 => 3,  29 => 1,  27 => 5,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::layout.html.twig' %}*/
/* */
/* {% block title %}微信支付 - {{ parent() }}{% endblock %}*/
/* {% block esBar %}{% endblock %}*/
/* {% set script_controller = 'pay/wxpay-roll' %}*/
/* {% block content %}*/
/*   */
/*   <div class="es-section section-wxpay">*/
/*     <ul class="es-step es-step-3 clearfix">*/
/*       <li class="done"><span class="number"><i class="es-icon es-icon-done"></i></span>订单确认</li>*/
/*       <li class="doing"><span class="number">2</span>微信支付</li>*/
/*       <li><span class="number">3</span>订单完成</li>*/
/*     </ul>*/
/*     <div class="order-pay-body">*/
/*       <div class="alert alert-success alert-dismissible" role="alert">*/
/*         <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>*/
/*         订单已提交，请在４８小时内完成支付！逾期订单将被取消。*/
/*       </div>*/
/*       <div class="pay-qrcode-body clearfix">*/
/*         <div class="qrcode-img">*/
/*           <img class = 'img-responsive img-js' src="{{ path('common_qrcode',{text:url}) }}"  data-url="{{ path('wxpay_roll',{order:order}) }}" data-goto="{% if order.targetType|default(null) %} {{ path('pay_success_show',{id:order['id']}) }} {% else %}{{ path('my_coin') }} {% endif %}">*/
/*           <div class="text-qrcode hidden-xs">*/
/*             请使用微信扫一扫<br>扫描二维码支付*/
/*           </div>*/
/*           <div class="text-qrcode visible-xs">*/
/*             请长按二维码支付*/
/*           </div>*/
/*         </div>*/
/*         <div class="qrcode-img-two hidden-xs">*/
/*           <img class="img-responsive" src="{{asset('assets/v2/img/pay_phone.jpg')}}" alt=""> */
/*         </div>*/
/*       </div>*/
/*       <div class="pay-qrcode-footer">*/
/*         <a href="{% if order.targetType|default(null) %} {{ path('pay_center_show',{sn:order['sn'],targetType:order['targetType']}) }} {% else %}{{ path('my_coin_buy') }} {% endif %} " class="mrl"><i class="es-icon es-icon-arrowback mrs"></i>选择其他支付方式</a> */
/*         应付金额：<span class="pay-rmb">¥{{order['amount']}}</span>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* {% endblock %}*/
