<?php

/* TopxiaWebBundle:Card:coupon-used.html.twig */
class __TwigTemplate_0799b3072f68f384018b7c15b0549f8b435e6c81caec0d04c03d7f6e22e32049 extends Twig_Template
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
        echo "<div class=\"card-pack-item coupon-item useless\">
  ";
        // line 2
        if (($this->getAttribute((isset($context["cardDetail"]) ? $context["cardDetail"] : null), "targetType", array()) == "course")) {
            // line 3
            echo "    <p class=\"title\">此课程优惠券已使用</p>
  ";
        }
        // line 5
        echo "  ";
        if (($this->getAttribute((isset($context["cardDetail"]) ? $context["cardDetail"] : null), "targetType", array()) == "classroom")) {
            // line 6
            echo "    <p class=\"title\">此班级优惠券已使用</p>
  ";
        }
        // line 8
        echo "  ";
        if (($this->getAttribute((isset($context["cardDetail"]) ? $context["cardDetail"] : null), "targetType", array()) == "vip")) {
            // line 9
            echo "    <p class=\"title\">此会员优惠券已使用</p>
  ";
        }
        // line 11
        echo "\t";
        if (($this->getAttribute((isset($context["cardDetail"]) ? $context["cardDetail"] : null), "targetType", array()) == "all")) {
            // line 12
            echo "\t\t\t<p class=\"title\">此抵价优惠券已使用</p>
\t";
        }
        // line 14
        echo "  <p class=\"price\">
    ";
        // line 15
        if (($this->getAttribute((isset($context["cardDetail"]) ? $context["cardDetail"] : null), "type", array()) == "minus")) {
            echo "￥";
        }
        echo "<strong>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cardDetail"]) ? $context["cardDetail"] : null), "rate", array()), "html", null, true);
        echo "</strong>";
        if (($this->getAttribute((isset($context["cardDetail"]) ? $context["cardDetail"] : null), "type", array()) == "discount")) {
            echo "折";
        }
        // line 16
        echo "  </p>
  <p>有效期截止：<span>";
        // line 17
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["cardDetail"]) ? $context["cardDetail"] : null), "deadline", array()), "Y年n月d日"), "html", null, true);
        echo "</span></p>
  <div class=\"stamp stamp-used\"></div>
</div>

";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Card:coupon-used.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 17,  62 => 16,  52 => 15,  49 => 14,  45 => 12,  42 => 11,  38 => 9,  35 => 8,  31 => 6,  28 => 5,  24 => 3,  22 => 2,  19 => 1,);
    }
}
/* <div class="card-pack-item coupon-item useless">*/
/*   {% if cardDetail.targetType == "course" %}*/
/*     <p class="title">此课程优惠券已使用</p>*/
/*   {% endif %}*/
/*   {% if cardDetail.targetType == "classroom" %}*/
/*     <p class="title">此班级优惠券已使用</p>*/
/*   {% endif %}*/
/*   {% if cardDetail.targetType == "vip" %}*/
/*     <p class="title">此会员优惠券已使用</p>*/
/*   {% endif %}*/
/* 	{% if cardDetail.targetType == "all" %}*/
/* 			<p class="title">此抵价优惠券已使用</p>*/
/* 	{% endif %}*/
/*   <p class="price">*/
/*     {% if cardDetail.type == "minus" %}￥{% endif %}<strong>{{ cardDetail.rate }}</strong>{% if cardDetail.type == "discount" %}折{% endif %}*/
/*   </p>*/
/*   <p>有效期截止：<span>{{ (cardDetail.deadline)|date('Y年n月d日') }}</span></p>*/
/*   <div class="stamp stamp-used"></div>*/
/* </div>*/
/* */
/* */
