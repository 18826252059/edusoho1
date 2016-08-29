<?php

/* TopxiaWebBundle:Order:order-item-coin.html.twig */
class __TwigTemplate_3e3e76d0a3ebdb7cecbfd60ff9fd6100e301632a6a467dad6c42c25e8f94f001 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if (((isset($context["targetType"]) ? $context["targetType"] : null) == "classroom")) {
            // line 2
            echo "  ";
            $context["maxRate"] = $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "maxRate", array());
        } elseif ((        // line 3
(isset($context["targetType"]) ? $context["targetType"] : null) == "course")) {
            // line 4
            echo "  ";
            $context["maxRate"] = $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "maxRate", array());
        } else {
            // line 6
            echo "  ";
            $context["maxRate"] = $this->getAttribute((isset($context["level"]) ? $context["level"] : null), "maxRate", array());
        }
        // line 8
        echo "<div class=\"order-item clearfix\">
  <div class=\"order-item-title\" style=\"width:30%\">
    <i class=\"es-icon es-icon-money\"></i>
    <span class=\"title\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_name"), "html", null, true);
        echo "</span>
    <span>（1元 = ";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["cashRate"]) ? $context["cashRate"] : null), "html", null, true);
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_name"), "html", null, true);
        echo "）</span>
  </div>
  <div class=\"order-item-detail\">
    ";
        // line 15
        if ((isset($context["hasPayPassword"]) ? $context["hasPayPassword"] : null)) {
            // line 16
            echo "    本次使用
    <input  ";
            // line 17
            if ((((isset($context["maxRate"]) ? $context["maxRate"] : null) == 0) && (((array_key_exists("priceType", $context)) ? (_twig_default_filter((isset($context["priceType"]) ? $context["priceType"] : null), "RMB")) : ("RMB")) == "RMB"))) {
                echo "readonly=\"true\"";
            }
            echo " id=\"coinPayAmount\" class=\"form-control text-center inline-block width-input-small mhm\" role=\"coinNum\" type=\"text\" name=\"coinPayAmount\" value=\"";
            echo twig_escape_filter($this->env, min(((array_key_exists("coinPayAmount", $context)) ? (_twig_default_filter((isset($context["coinPayAmount"]) ? $context["coinPayAmount"] : null), 0)) : (0)), ((array_key_exists("maxCoin", $context)) ? (_twig_default_filter((isset($context["maxCoin"]) ? $context["maxCoin"] : null), 0)) : (0))), "html", null, true);
            echo "\" maxlength=\"\">
    ";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_name"), "html", null, true);
            echo "
    ";
        }
        // line 20
        echo "    <span class=\"coin-detail hidden-xs hidden-sm\">
      （账户余额：<span class=\"text-danger\" role=\"accountCash\">";
        // line 21
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["account"]) ? $context["account"] : null), "cash", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["account"]) ? $context["account"] : null), "cash", array()), 0)) : (0)), "html", null, true);
        echo "</span> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_name"), "html", null, true);
        echo "）
    </span>
    <input style=\"display:none\">";
        // line 24
        echo "    <input type=\"password\" style=\"display:none\">";
        // line 25
        echo "    ";
        if ( !(isset($context["hasPayPassword"]) ? $context["hasPayPassword"] : null)) {
            // line 26
            echo "    <div  class=\"alert alert-warning alert-xs mtm inline-block\" style=\"line-height:20px\">
        为了保障账户资金安全，请先
      <a class=\"alert-link\" href=\"javascript:;\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
            // line 28
            echo $this->env->getExtension('routing')->getPath("settings_set_pay_password");
            echo "\">设置支付密码</a>
    </div>
    ";
        } else {
            // line 31
            echo "    <div role=\"password-input\" style=\"display:none\">
      <div class=\"controls mtm\">
        <input id=\"payPassword\" class=\"form-control width-input-large inline-block\" name=\"payPassword\" type=\"password\" placeholder=\"请输入支付密码\" data-url=\"";
            // line 33
            echo $this->env->getExtension('routing')->getPath("pay_password_check");
            echo "\" autocomplete=\"off\"/>
        <a href=\"";
            // line 34
            echo $this->env->getExtension('routing')->getPath("settings_find_pay_password");
            echo "\" target='_blank' class=\"btn-link\">忘记密码？</a>
        <br>
      </div>
    </div>
    ";
        }
        // line 39
        echo "  </div>
  <div class=\"order-item-price\" style=\"width:25%\">
    <span class=\"mrs\">抵扣</span>
     ";
        // line 42
        if ((((array_key_exists("priceType", $context)) ? (_twig_default_filter((isset($context["priceType"]) ? $context["priceType"] : null), "RMB")) : ("RMB")) == "RMB")) {
            echo "<span>￥</span>";
        }
        // line 43
        echo "    <span role=\"cash-discount\" style=\"font-size: 24px\"></span>
    <span>
      ";
        // line 45
        if ((((array_key_exists("priceType", $context)) ? (_twig_default_filter((isset($context["priceType"]) ? $context["priceType"] : null), "RMB")) : ("RMB")) == "RMB")) {
            echo " ";
        } else {
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_name"), "html", null, true);
            echo " ";
        }
        // line 46
        echo "    </span>
    ";
        // line 47
        if ((((array_key_exists("priceType", $context)) ? (_twig_default_filter((isset($context["priceType"]) ? $context["priceType"] : null), "RMB")) : ("RMB")) == "RMB")) {
            // line 48
            echo "      <p style=\"font-size:13px;\" class=\"hidden-xs hidden-sm\">(本订单最高可以使用<span id= \"maxCoin\" role=\"maxCoin\">";
            echo twig_escape_filter($this->env, min(((array_key_exists("maxCoin", $context)) ? (_twig_default_filter((isset($context["maxCoin"]) ? $context["maxCoin"] : null), 0)) : (0)), ((array_key_exists("totalPrice", $context)) ? (_twig_default_filter((isset($context["totalPrice"]) ? $context["totalPrice"] : null), 0)) : (0))), "html", null, true);
            echo "</span>";
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_name"), "html", null, true);
            echo ")</p>
    ";
        }
        // line 50
        echo "  </div>
</div>   ";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Order:order-item-coin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 50,  135 => 48,  133 => 47,  130 => 46,  122 => 45,  118 => 43,  114 => 42,  109 => 39,  101 => 34,  97 => 33,  93 => 31,  87 => 28,  83 => 26,  80 => 25,  78 => 24,  71 => 21,  68 => 20,  63 => 18,  55 => 17,  52 => 16,  50 => 15,  43 => 12,  39 => 11,  34 => 8,  30 => 6,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if targetType == 'classroom'%}*/
/*   {% set maxRate = classroom.maxRate %}*/
/* {% elseif targetType == 'course' %}*/
/*   {% set maxRate = course.maxRate %}*/
/* {% else %}*/
/*   {% set maxRate = level.maxRate %}*/
/* {% endif %}*/
/* <div class="order-item clearfix">*/
/*   <div class="order-item-title" style="width:30%">*/
/*     <i class="es-icon es-icon-money"></i>*/
/*     <span class="title">{{ setting("coin.coin_name") }}</span>*/
/*     <span>（1元 = {{cashRate}}{{setting("coin.coin_name")}}）</span>*/
/*   </div>*/
/*   <div class="order-item-detail">*/
/*     {% if hasPayPassword %}*/
/*     本次使用*/
/*     <input  {% if maxRate == 0 and priceType|default("RMB") == "RMB" %}readonly="true"{% endif %} id="coinPayAmount" class="form-control text-center inline-block width-input-small mhm" role="coinNum" type="text" name="coinPayAmount" value="{{ (min(coinPayAmount|default(0),maxCoin|default(0)))}}" maxlength="">*/
/*     {{setting("coin.coin_name")}}*/
/*     {% endif %}*/
/*     <span class="coin-detail hidden-xs hidden-sm">*/
/*       （账户余额：<span class="text-danger" role="accountCash">{{account.cash|default(0)}}</span> {{setting("coin.coin_name")}}）*/
/*     </span>*/
/*     <input style="display:none">{# Prevent autocompleting #}*/
/*     <input type="password" style="display:none">{# Prevent autocompleting #}*/
/*     {% if not hasPayPassword %}*/
/*     <div  class="alert alert-warning alert-xs mtm inline-block" style="line-height:20px">*/
/*         为了保障账户资金安全，请先*/
/*       <a class="alert-link" href="javascript:;" data-toggle="modal" data-target="#modal" data-url="{{path('settings_set_pay_password')}}">设置支付密码</a>*/
/*     </div>*/
/*     {% else %}*/
/*     <div role="password-input" style="display:none">*/
/*       <div class="controls mtm">*/
/*         <input id="payPassword" class="form-control width-input-large inline-block" name="payPassword" type="password" placeholder="请输入支付密码" data-url="{{path('pay_password_check')}}" autocomplete="off"/>*/
/*         <a href="{{path('settings_find_pay_password')}}" target='_blank' class="btn-link">忘记密码？</a>*/
/*         <br>*/
/*       </div>*/
/*     </div>*/
/*     {% endif %}*/
/*   </div>*/
/*   <div class="order-item-price" style="width:25%">*/
/*     <span class="mrs">抵扣</span>*/
/*      {% if priceType|default("RMB") == "RMB" %}<span>￥</span>{% endif %}*/
/*     <span role="cash-discount" style="font-size: 24px"></span>*/
/*     <span>*/
/*       {% if priceType|default("RMB") == "RMB" %} {% else %} {{ setting("coin.coin_name") }} {% endif %}*/
/*     </span>*/
/*     {% if priceType|default("RMB") == "RMB" %}*/
/*       <p style="font-size:13px;" class="hidden-xs hidden-sm">(本订单最高可以使用<span id= "maxCoin" role="maxCoin">{{(min(maxCoin|default(0),totalPrice|default(0)))}}</span>{{setting("coin.coin_name")}})</p>*/
/*     {% endif %}*/
/*   </div>*/
/* </div>   */
