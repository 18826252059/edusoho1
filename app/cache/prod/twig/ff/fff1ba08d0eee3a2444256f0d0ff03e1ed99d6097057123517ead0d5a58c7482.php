<?php

/* TopxiaWebBundle:Order:order-create.html.twig */
class __TwigTemplate_75ba2b62c128db27e5303dd3e7a7a21bf40fb3cdc2d5b2ddcb28c432a038a4a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "TopxiaWebBundle:Order:order-create.html.twig", 1);
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
        // line 3
        $context["script_controller"] = "order/create";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo " 订单确认 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 5
    public function block_esBar($context, array $blocks = array())
    {
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "<div class=\"order-pay\">
  <div class=\"es-section\">
    <ul class=\"es-step es-step-3 clearfix\">
      <li class=\"doing\"><span class=\"number\">1</span>订单确认</li>
      <li><span class=\"number\">2</span>订单支付</li>
      <li><span class=\"number\">3</span>订单完成</li>
    </ul>
    <div class=\"order-pay-body\">
      <form id=\"order-create-form\" method=\"post\" action=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("order_create");
        echo "\">
        <input type=\"password\" style=\"display:none\">
      \t";
        // line 18
        if (((array_key_exists("order", $context)) ? (_twig_default_filter((isset($context["order"]) ? $context["order"] : null), null)) : (null))) {
            // line 19
            echo "        <input type=\"hidden\" name=\"orderId\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "id", array()), "html", null, true);
            echo "\"/>
        ";
        }
        // line 21
        echo "      \t<input type=\"hidden\" role=\"cash-rate\" value=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("cashRate", $context)) ? (_twig_default_filter((isset($context["cashRate"]) ? $context["cashRate"] : null), null)) : (null)), "html", null, true);
        echo "\"
        data-price-type = \"";
        // line 22
        echo twig_escape_filter($this->env, ((array_key_exists("priceType", $context)) ? (_twig_default_filter((isset($context["priceType"]) ? $context["priceType"] : null), "RMB")) : ("RMB")), "html", null, true);
        echo "\"/>
        <input type=\"hidden\" name=\"targetType\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["targetType"]) ? $context["targetType"] : null), "html", null, true);
        echo "\"/>
        <input type=\"hidden\" name=\"maxRate\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, ((array_key_exists("maxRate", $context)) ? (_twig_default_filter((isset($context["maxRate"]) ? $context["maxRate"] : null), 100)) : (100)), "html", null, true);
        echo "\"/>
        <input type=\"hidden\" name=\"targetId\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["targetId"]) ? $context["targetId"] : null), "html", null, true);
        echo "\"/>
        <input type=\"hidden\" name=\"totalPrice\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["totalPrice"]) ? $context["totalPrice"] : null), "html", null, true);
        echo "\"/>
        <input type=\"hidden\" name=\"shouldPayMoney\" value=\"\"/>
        <input type=\"hidden\" name=\"sms_code\" value=\"\"/>
        <input type=\"hidden\" name=\"mobile\" data-role=\"mobile\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["verifiedMobile"]) ? $context["verifiedMobile"] : null), "html", null, true);
        echo "\"/>
        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
        <div class=\"order-detail-bg\" style=\"border:none\">
        ";
        // line 32
        if ((((isset($context["targetType"]) ? $context["targetType"] : null) == "course") && ((array_key_exists("course", $context)) ? (_twig_default_filter((isset($context["course"]) ? $context["course"] : null), null)) : (null)))) {
            // line 33
            echo "          ";
            $this->loadTemplate("TopxiaWebBundle:Order:order-course.html.twig", "TopxiaWebBundle:Order:order-create.html.twig", 33)->display($context);
            // line 34
            echo "        ";
        }
        // line 35
        echo "        ";
        if (((isset($context["targetType"]) ? $context["targetType"] : null) == "vip")) {
            // line 36
            echo "          ";
            $this->loadTemplate("TopxiaWebBundle:Order:vip.html.twig", "TopxiaWebBundle:Order:order-create.html.twig", 36)->display($context);
            // line 37
            echo "        ";
        }
        // line 38
        echo "        ";
        if (((isset($context["targetType"]) ? $context["targetType"] : null) == "classroom")) {
            // line 39
            echo "          ";
            $this->loadTemplate("TopxiaWebBundle:Order:classroom.html.twig", "TopxiaWebBundle:Order:order-create.html.twig", 39)->display($context);
            // line 40
            echo "        ";
        }
        // line 41
        echo "        </div>

     
        <div class=\"order-detail-bg\">
          ";
        // line 45
        if (twig_in_filter((isset($context["targetType"]) ? $context["targetType"] : null), array(0 => "course", 1 => "vip", 2 => "classroom"))) {
            // line 46
            echo "
            ";
            // line 47
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Card:useableCoupons", array("targetType" => (isset($context["targetType"]) ? $context["targetType"] : null), "targetId" => (isset($context["targetId"]) ? $context["targetId"] : null), "totalPrice" => (isset($context["totalPrice"]) ? $context["totalPrice"] : null), "priceType" => ((array_key_exists("priceType", $context)) ? (_twig_default_filter((isset($context["priceType"]) ? $context["priceType"] : null), "RMB")) : ("RMB")))));
            echo "

          ";
        }
        // line 50
        echo "
          ";
        // line 51
        if ($this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_enabled")) {
            // line 52
            echo "          \t";
            $this->loadTemplate("TopxiaWebBundle:Order:order-item-coin.html.twig", "TopxiaWebBundle:Order:order-create.html.twig", 52)->display($context);
            // line 53
            echo "          ";
        }
        // line 54
        echo "        </div>


        <div class=\"form-group\">
          <div class=\"total-price\">
            应付金额：
            ";
        // line 60
        if ((((array_key_exists("priceType", $context)) ? (_twig_default_filter((isset($context["priceType"]) ? $context["priceType"] : null), "RMB")) : ("RMB")) == "Coin")) {
            // line 61
            echo "              <span role=\"pay-coin\">0</span> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_name"), "html", null, true);
            echo " ÷ 汇率(";
            echo twig_escape_filter($this->env, ((array_key_exists("cashRate", $context)) ? (_twig_default_filter((isset($context["cashRate"]) ? $context["cashRate"] : null), 1)) : (1)), "html", null, true);
            echo ") = <span class=\"pay-rmb\">￥</span> <span role=\"pay-rmb\" class=\"pay-rmb\"></span> 元
            ";
        } else {
            // line 63
            echo "              <span class=\"pay-rmb\">￥</span><span role=\"pay-rmb\" class=\"pay-rmb\"></span> 
            ";
        }
        // line 65
        echo "          </div>
        </div>
        <div class=\"form-group text-right\">
          <a 
            ";
        // line 69
        if ((((isset($context["targetType"]) ? $context["targetType"] : null) == "course") && ((array_key_exists("course", $context)) ? (_twig_default_filter((isset($context["course"]) ? $context["course"] : null), null)) : (null)))) {
            // line 70
            echo "              href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "\" 
            ";
        } elseif ((        // line 71
(isset($context["targetType"]) ? $context["targetType"] : null) == "vip")) {
            // line 72
            echo "              href=\"";
            echo $this->env->getExtension('routing')->getPath("vip_renew");
            echo "\"
            ";
        } elseif ((        // line 73
(isset($context["targetType"]) ? $context["targetType"] : null) == "classroom")) {
            // line 74
            echo "              href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_show", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
            echo "\"
            ";
        }
        // line 76
        echo "            class=\"btn btn-link\" style=\"\">取消</a>
          ";
        // line 77
        if (((_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("cloud_sms.sms_enabled"), "") == "1") && (_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("cloud_sms.sms_user_pay"), "") == "on"))) {
            echo " 
            <a class=\"btn btn-primary\" id=\"js-order-create-sms-btn\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
            // line 78
            echo $this->env->getExtension('routing')->getPath("order_pay_sms_verification");
            echo "\" >提交订单</a>
          ";
        } else {
            // line 80
            echo "            <button class=\"btn btn-primary\" id=\"order-create-btn\" type=\"submit\">提交订单</button>          
          ";
        }
        // line 81
        echo " 
        </div>
      </form>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Order:order-create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 81,  223 => 80,  218 => 78,  214 => 77,  211 => 76,  205 => 74,  203 => 73,  198 => 72,  196 => 71,  191 => 70,  189 => 69,  183 => 65,  179 => 63,  171 => 61,  169 => 60,  161 => 54,  158 => 53,  155 => 52,  153 => 51,  150 => 50,  144 => 47,  141 => 46,  139 => 45,  133 => 41,  130 => 40,  127 => 39,  124 => 38,  121 => 37,  118 => 36,  115 => 35,  112 => 34,  109 => 33,  107 => 32,  102 => 30,  98 => 29,  92 => 26,  88 => 25,  84 => 24,  80 => 23,  76 => 22,  71 => 21,  65 => 19,  63 => 18,  58 => 16,  48 => 8,  45 => 7,  40 => 5,  33 => 2,  29 => 1,  27 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::layout.html.twig' %}*/
/* {% block title %} 订单确认 - {{ parent() }}{% endblock %}*/
/* {% set script_controller = 'order/create' %}*/
/* */
/* {% block esBar %}{% endblock %}*/
/* */
/* {% block content %}*/
/* <div class="order-pay">*/
/*   <div class="es-section">*/
/*     <ul class="es-step es-step-3 clearfix">*/
/*       <li class="doing"><span class="number">1</span>订单确认</li>*/
/*       <li><span class="number">2</span>订单支付</li>*/
/*       <li><span class="number">3</span>订单完成</li>*/
/*     </ul>*/
/*     <div class="order-pay-body">*/
/*       <form id="order-create-form" method="post" action="{{path('order_create')}}">*/
/*         <input type="password" style="display:none">*/
/*       	{% if order|default(null) %}*/
/*         <input type="hidden" name="orderId" value="{{order.id}}"/>*/
/*         {% endif %}*/
/*       	<input type="hidden" role="cash-rate" value="{{cashRate|default(null)}}"*/
/*         data-price-type = "{{priceType|default('RMB')}}"/>*/
/*         <input type="hidden" name="targetType" value="{{targetType}}"/>*/
/*         <input type="hidden" name="maxRate" value="{{maxRate|default(100)}}"/>*/
/*         <input type="hidden" name="targetId" value="{{targetId}}"/>*/
/*         <input type="hidden" name="totalPrice" value="{{totalPrice}}"/>*/
/*         <input type="hidden" name="shouldPayMoney" value=""/>*/
/*         <input type="hidden" name="sms_code" value=""/>*/
/*         <input type="hidden" name="mobile" data-role="mobile" value="{{ verifiedMobile }}"/>*/
/*         <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/*         <div class="order-detail-bg" style="border:none">*/
/*         {% if targetType == "course" and course|default(null) %}*/
/*           {% include 'TopxiaWebBundle:Order:order-course.html.twig' %}*/
/*         {% endif %}*/
/*         {% if targetType == "vip" %}*/
/*           {% include 'TopxiaWebBundle:Order:vip.html.twig' %}*/
/*         {% endif %}*/
/*         {% if targetType == "classroom" %}*/
/*           {% include 'TopxiaWebBundle:Order:classroom.html.twig' %}*/
/*         {% endif %}*/
/*         </div>*/
/* */
/*      */
/*         <div class="order-detail-bg">*/
/*           {% if targetType in ['course','vip','classroom'] %}*/
/* */
/*             {{ render(controller('TopxiaWebBundle:Card:useableCoupons', {targetType: targetType, targetId: targetId, totalPrice: totalPrice,priceType:priceType|default('RMB') })) }}*/
/* */
/*           {% endif %}*/
/* */
/*           {% if setting('coin.coin_enabled') %}*/
/*           	{% include 'TopxiaWebBundle:Order:order-item-coin.html.twig' %}*/
/*           {% endif %}*/
/*         </div>*/
/* */
/* */
/*         <div class="form-group">*/
/*           <div class="total-price">*/
/*             应付金额：*/
/*             {% if priceType|default('RMB') == "Coin" %}*/
/*               <span role="pay-coin">0</span> {{setting("coin.coin_name")}} ÷ 汇率({{cashRate|default(1)}}) = <span class="pay-rmb">￥</span> <span role="pay-rmb" class="pay-rmb"></span> 元*/
/*             {% else %}*/
/*               <span class="pay-rmb">￥</span><span role="pay-rmb" class="pay-rmb"></span> */
/*             {% endif %}*/
/*           </div>*/
/*         </div>*/
/*         <div class="form-group text-right">*/
/*           <a */
/*             {% if targetType == "course" and course|default(null) %}*/
/*               href="{{ path('course_show', {id:course.id}) }}" */
/*             {% elseif targetType == "vip" %}*/
/*               href="{{ path('vip_renew') }}"*/
/*             {% elseif targetType == "classroom" %}*/
/*               href="{{ path('classroom_show', {id:classroom.id}) }}"*/
/*             {% endif %}*/
/*             class="btn btn-link" style="">取消</a>*/
/*           {% if ((setting('cloud_sms.sms_enabled')|default('')) == '1') and ((setting('cloud_sms.sms_user_pay')|default('')) == 'on') %} */
/*             <a class="btn btn-primary" id="js-order-create-sms-btn" data-toggle="modal" data-target="#modal" data-url="{{path('order_pay_sms_verification')}}" >提交订单</a>*/
/*           {% else %}*/
/*             <button class="btn btn-primary" id="order-create-btn" type="submit">提交订单</button>          */
/*           {% endif %} */
/*         </div>*/
/*       </form>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* {% endblock %}*/
