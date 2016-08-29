<?php

/* TopxiaWebBundle:Order:classroom.html.twig */
class __TwigTemplate_7523f861fddd10190c8110aa0dde6f5f3a6e58fe440f0cf627bdf909a34708a3 extends Twig_Template
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
        echo "
<div class=\"order-detail\">
  <div class=\"order-img  hidden-xs\">
    <a href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_show", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
        echo "\">
      <img class=\"img-responsive\" src=\"";
        // line 5
        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "middlePicture", array()), "classroom.png"), $this->env->getExtension('assets')->getAssetUrl("assets/img/default/classroom-default-213-142.png")), "html", null, true);
        echo "\" alt=\"\" width=\"213\" height=\"142\"></a>
  </div>
  <div class=\"order-info\">";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "title", array()), "html", null, true);
        echo "</div>
  <div class=\"order-price\">
    ";
        // line 9
        if ((((array_key_exists("priceType", $context)) ? (_twig_default_filter((isset($context["priceType"]) ? $context["priceType"] : null), "RMB")) : ("RMB")) == "RMB")) {
            // line 10
            echo "    <span class=\"pay-rmb\">￥</span>
    <span class=\"pay-rmb\">";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "price", array()), "html", null, true);
            echo "</span>
    ";
        } elseif ((((        // line 12
array_key_exists("priceType", $context)) ? (_twig_default_filter((isset($context["priceType"]) ? $context["priceType"] : null), "RMB")) : ("RMB")) == "Coin")) {
            // line 13
            echo "    <span class=\"pay-rmb\">";
            echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "price", array()) * (isset($context["cashRate"]) ? $context["cashRate"] : null)), "html", null, true);
            echo "</span>
    ";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_name"), "html", null, true);
            echo "
    ";
        }
        // line 16
        echo "    <span role=\"total-price\" class=\"order-price hidden\">";
        echo twig_escape_filter($this->env, (isset($context["totalPrice"]) ? $context["totalPrice"] : null), "html", null, true);
        echo "</span>
  </div>
</div>
";
        // line 19
        if (((twig_length_filter($this->env, (isset($context["paidCourses"]) ? $context["paidCourses"] : null)) > 0) && (_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.discount_buy"), 1) == 1))) {
            // line 20
            $this->loadTemplate("TopxiaWebBundle:Order:paid-course.html.twig", "TopxiaWebBundle:Order:classroom.html.twig", 20)->display($context);
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Order:classroom.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 20,  66 => 19,  59 => 16,  54 => 14,  49 => 13,  47 => 12,  43 => 11,  40 => 10,  38 => 9,  33 => 7,  28 => 5,  24 => 4,  19 => 1,);
    }
}
/* */
/* <div class="order-detail">*/
/*   <div class="order-img  hidden-xs">*/
/*     <a href="{{path('classroom_show',{id:classroom.id})}}">*/
/*       <img class="img-responsive" src="{{ filepath(classroom.middlePicture, 'classroom.png')|default(asset('assets/img/default/classroom-default-213-142.png')) }}" alt="" width="213" height="142"></a>*/
/*   </div>*/
/*   <div class="order-info">{{ classroom.title}}</div>*/
/*   <div class="order-price">*/
/*     {% if priceType|default('RMB') == "RMB" %}*/
/*     <span class="pay-rmb">￥</span>*/
/*     <span class="pay-rmb">{{classroom.price}}</span>*/
/*     {% elseif priceType|default('RMB') == "Coin" %}*/
/*     <span class="pay-rmb">{{classroom.price * cashRate}}</span>*/
/*     {{setting("coin.coin_name")}}*/
/*     {% endif %}*/
/*     <span role="total-price" class="order-price hidden">{{totalPrice}}</span>*/
/*   </div>*/
/* </div>*/
/* {% if paidCourses|length > 0 and setting('classroom.discount_buy')|default(1) == 1 %}*/
/* {% include 'TopxiaWebBundle:Order:paid-course.html.twig' %}*/
/* {% endif %}*/
