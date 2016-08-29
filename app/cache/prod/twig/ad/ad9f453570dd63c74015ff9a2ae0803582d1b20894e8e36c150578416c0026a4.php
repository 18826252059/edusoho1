<?php

/* TopxiaWebBundle:Order:vip.html.twig */
class __TwigTemplate_5d4ebab2509b031d1ca13fa5c2cb1d0ca58ed6be193ed9a35b418368406de72d extends Twig_Template
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
        echo "<input type=\"hidden\" name=\"buyType\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["buyType"]) ? $context["buyType"] : null), "html", null, true);
        echo "\"/>
<input type=\"hidden\" name=\"duration\" value=\"";
        // line 2
        echo twig_escape_filter($this->env, ((array_key_exists("duration", $context)) ? (_twig_default_filter((isset($context["duration"]) ? $context["duration"] : null), "")) : ("")), "html", null, true);
        echo "\"/>
<input type=\"hidden\" name=\"unitType\" value=\"";
        // line 3
        echo twig_escape_filter($this->env, ((array_key_exists("unitType", $context)) ? (_twig_default_filter((isset($context["unitType"]) ? $context["unitType"] : null), "")) : ("")), "html", null, true);
        echo "\"/>
<input type=\"hidden\" name=\"type\" value=\"";
        // line 4
        echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "")) : ("")), "html", null, true);
        echo "\"/>
<div class=\"order-detail\">
  <div class=\"order-img hidden-xs\">
    <a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vip_course_explore", array("levelId" => $this->getAttribute((isset($context["level"]) ? $context["level"] : null), "id", array()))), "html", null, true);
        echo "\">
      <img class=\"img-responsive\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["level"]) ? $context["level"] : null), "picture", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["level"]) ? $context["level"] : null), "picture", array()), $this->env->getExtension('assets')->getAssetUrl("assets/img/default/vip-default.png"))) : ($this->env->getExtension('assets')->getAssetUrl("assets/img/default/vip-default.png"))), "html", null, true);
        echo "\" alt=\"\">
    </a>
  </div>
  <div class=\"order-info\">
    ";
        // line 12
        if (((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), true)) : (true))) {
            // line 13
            echo "      ";
            if (((isset($context["buyType"]) ? $context["buyType"] : null) == "upgrade")) {
                // line 14
                echo "      会员升级为：";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["level"]) ? $context["level"] : null), "name", array()), "html", null, true);
                echo "
      ";
            } elseif ((            // line 15
(isset($context["buyType"]) ? $context["buyType"] : null) == "renew")) {
                // line 16
                echo "      ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["level"]) ? $context["level"] : null), "name", array()), "html", null, true);
                echo " 会员续费 x ";
                echo twig_escape_filter($this->env, (isset($context["duration"]) ? $context["duration"] : null), "html", null, true);
                if (((isset($context["unitType"]) ? $context["unitType"] : null) == "month")) {
                    echo "个月";
                } elseif (((isset($context["unitType"]) ? $context["unitType"] : null) == "year")) {
                    echo "年";
                }
                // line 17
                echo "      ";
            } else {
                // line 18
                echo "      购买 ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["level"]) ? $context["level"] : null), "name", array()), "html", null, true);
                echo "会员 x ";
                echo twig_escape_filter($this->env, (isset($context["duration"]) ? $context["duration"] : null), "html", null, true);
                if (((isset($context["unitType"]) ? $context["unitType"] : null) == "month")) {
                    echo "个月";
                } elseif (((isset($context["unitType"]) ? $context["unitType"] : null) == "year")) {
                    echo "年";
                }
                // line 19
                echo "      ";
            }
            // line 20
            echo "    ";
        }
        // line 21
        echo "  </div>
  <div class=\"order-price\">
    ";
        // line 23
        if ((((array_key_exists("priceType", $context)) ? (_twig_default_filter((isset($context["priceType"]) ? $context["priceType"] : null), "RMB")) : ("RMB")) == "RMB")) {
            // line 24
            echo "      <span class=\"pay-rmb\">￥</span>
    ";
        }
        // line 26
        echo "    <span role=\"total-price\" class=\"pay-rmb\">";
        echo twig_escape_filter($this->env, (isset($context["totalPrice"]) ? $context["totalPrice"] : null), "html", null, true);
        echo "</span>
    ";
        // line 27
        if ((((array_key_exists("priceType", $context)) ? (_twig_default_filter((isset($context["priceType"]) ? $context["priceType"] : null), "RMB")) : ("RMB")) == "RMB")) {
            // line 28
            echo "    ";
        } elseif ((((array_key_exists("priceType", $context)) ? (_twig_default_filter((isset($context["priceType"]) ? $context["priceType"] : null), "RMB")) : ("RMB")) == "Coin")) {
            // line 29
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_name"), "html", null, true);
            echo "
    ";
        }
        // line 31
        echo "  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Order:vip.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 31,  110 => 29,  107 => 28,  105 => 27,  100 => 26,  96 => 24,  94 => 23,  90 => 21,  87 => 20,  84 => 19,  74 => 18,  71 => 17,  61 => 16,  59 => 15,  54 => 14,  51 => 13,  49 => 12,  42 => 8,  38 => 7,  32 => 4,  28 => 3,  24 => 2,  19 => 1,);
    }
}
/* <input type="hidden" name="buyType" value="{{buyType}}"/>*/
/* <input type="hidden" name="duration" value="{{duration|default('')}}"/>*/
/* <input type="hidden" name="unitType" value="{{unitType|default('')}}"/>*/
/* <input type="hidden" name="type" value="{{type|default('')}}"/>*/
/* <div class="order-detail">*/
/*   <div class="order-img hidden-xs">*/
/*     <a href="{{ path('vip_course_explore', {levelId:level.id}) }}">*/
/*       <img class="img-responsive" src="{{ level.picture|default(asset('assets/img/default/vip-default.png')) }}" alt="">*/
/*     </a>*/
/*   </div>*/
/*   <div class="order-info">*/
/*     {% if type|default(true) %}*/
/*       {% if buyType == "upgrade" %}*/
/*       会员升级为：{{level.name}}*/
/*       {% elseif buyType == "renew" %}*/
/*       {{ level.name}} 会员续费 x {{duration}}{% if unitType == "month" %}个月{% elseif unitType == "year" %}年{% endif %}*/
/*       {% else %}*/
/*       购买 {{ level.name}}会员 x {{duration}}{% if unitType == "month" %}个月{% elseif unitType == "year" %}年{% endif %}*/
/*       {% endif %}*/
/*     {% endif %}*/
/*   </div>*/
/*   <div class="order-price">*/
/*     {% if priceType|default('RMB') == "RMB" %}*/
/*       <span class="pay-rmb">￥</span>*/
/*     {% endif %}*/
/*     <span role="total-price" class="pay-rmb">{{totalPrice}}</span>*/
/*     {% if priceType|default('RMB') == "RMB" %}*/
/*     {% elseif priceType|default('RMB') == "Coin" %}*/
/*     {{setting("coin.coin_name")}}*/
/*     {% endif %}*/
/*   </div>*/
/* </div>*/
