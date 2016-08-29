<?php

/* TopxiaWebBundle:Order:order-course.html.twig */
class __TwigTemplate_94b1c600a6f925c3c889b28bc0003ff203e4592c27337a63f3d335e1349be19b extends Twig_Template
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
        echo "<div class=\"order-detail clearfix\">
  <div class=\"order-img hidden-xs\">
    <a href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
        echo "\">
      <img class=\"img-responsive\" src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "middlePicture", array()), "course.png"), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "title", array()), "html", null, true);
        echo "\"></a>
  </div>
  <div class=\"order-info text-overflow\">";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "title", array()), "html", null, true);
        echo "</div>
  <div class=\"order-price\">
    ";
        // line 8
        if ((((array_key_exists("priceType", $context)) ? (_twig_default_filter((isset($context["priceType"]) ? $context["priceType"] : null), "RMB")) : ("RMB")) == "RMB")) {
            // line 9
            echo "      <span class=\"pay-rmb\">￥</span>
    ";
        }
        // line 11
        echo "    <span role=\"total-price\" class=\"pay-rmb\">";
        echo twig_escape_filter($this->env, (isset($context["totalPrice"]) ? $context["totalPrice"] : null), "html", null, true);
        echo "</span>
    ";
        // line 12
        if ((((array_key_exists("priceType", $context)) ? (_twig_default_filter((isset($context["priceType"]) ? $context["priceType"] : null), "RMB")) : ("RMB")) == "RMB")) {
            // line 13
            echo "    ";
        } elseif ((((array_key_exists("priceType", $context)) ? (_twig_default_filter((isset($context["priceType"]) ? $context["priceType"] : null), "RMB")) : ("RMB")) == "Coin")) {
            // line 14
            echo "      ";
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_name"), "html", null, true);
            echo "
    ";
        }
        // line 16
        echo "  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Order:order-course.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 16,  55 => 14,  52 => 13,  50 => 12,  45 => 11,  41 => 9,  39 => 8,  34 => 6,  27 => 4,  23 => 3,  19 => 1,);
    }
}
/* <div class="order-detail clearfix">*/
/*   <div class="order-img hidden-xs">*/
/*     <a href="{{ path('course_show', {id:course.id}) }}">*/
/*       <img class="img-responsive" src="{{ filepath(course.middlePicture, 'course.png') }}" alt="{{ course.title }}"></a>*/
/*   </div>*/
/*   <div class="order-info text-overflow">{{ course.title }}</div>*/
/*   <div class="order-price">*/
/*     {% if priceType|default('RMB') == "RMB" %}*/
/*       <span class="pay-rmb">￥</span>*/
/*     {% endif %}*/
/*     <span role="total-price" class="pay-rmb">{{totalPrice}}</span>*/
/*     {% if priceType|default('RMB') == "RMB" %}*/
/*     {% elseif priceType|default('RMB') == "Coin" %}*/
/*       {{setting("coin.coin_name")}}*/
/*     {% endif %}*/
/*   </div>*/
/* </div>*/
