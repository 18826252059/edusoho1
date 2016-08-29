<?php

/* TopxiaWebBundle:Card:coupon-outdate.html.twig */
class __TwigTemplate_1112e3820edd86711fef74335a15da8fe5d0ec5e3c4f6d1bb513955dff3cbd71 extends Twig_Template
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
            echo "    ";
            if (($this->getAttribute((isset($context["cardDetail"]) ? $context["cardDetail"] : null), "targetId", array()) == 0)) {
                // line 4
                echo "      <p class=\"title\">可用于抵扣全站课程</p>
    ";
            } else {
                // line 6
                echo "      <p class=\"title\">用于抵扣指定课程</p>
    ";
            }
            // line 8
            echo "  ";
        }
        // line 9
        echo "
  ";
        // line 10
        if (($this->getAttribute((isset($context["cardDetail"]) ? $context["cardDetail"] : null), "targetType", array()) == "classroom")) {
            // line 11
            echo "    <p class=\"title\">可用于抵扣全站班级</p>
  ";
        }
        // line 13
        echo "
  ";
        // line 14
        if (($this->getAttribute((isset($context["cardDetail"]) ? $context["cardDetail"] : null), "targetType", array()) == "vip")) {
            // line 15
            echo "    ";
            if (($this->getAttribute((isset($context["cardDetail"]) ? $context["cardDetail"] : null), "targetId", array()) == 0)) {
                // line 16
                echo "      <p class=\"title\">可用于抵扣全站会员</p>
    ";
            } else {
                // line 18
                echo "      <p class=\"title\">用于抵扣指定会员</p>
    ";
            }
            // line 20
            echo "  ";
        }
        // line 21
        echo "  ";
        if (($this->getAttribute((isset($context["cardDetail"]) ? $context["cardDetail"] : null), "targetType", array()) == "all")) {
            // line 22
            echo "    <p class=\"title\">可用于抵扣全站所有类型消费</p>
  ";
        }
        // line 24
        echo "  <p class=\"price\">
    ";
        // line 25
        if (($this->getAttribute((isset($context["cardDetail"]) ? $context["cardDetail"] : null), "type", array()) == "minus")) {
            echo "￥";
        }
        echo "<strong>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cardDetail"]) ? $context["cardDetail"] : null), "rate", array()), "html", null, true);
        echo "</strong>";
        if (($this->getAttribute((isset($context["cardDetail"]) ? $context["cardDetail"] : null), "type", array()) == "discount")) {
            echo "折";
        }
        // line 26
        echo "  </p>
  <p>有效期截止：<span>";
        // line 27
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["cardDetail"]) ? $context["cardDetail"] : null), "deadline", array()), "Y年n月d日"), "html", null, true);
        echo "</span></p>
  <div class=\"stamp stamp-outdate\"></div>
</div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Card:coupon-outdate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 27,  86 => 26,  76 => 25,  73 => 24,  69 => 22,  66 => 21,  63 => 20,  59 => 18,  55 => 16,  52 => 15,  50 => 14,  47 => 13,  43 => 11,  41 => 10,  38 => 9,  35 => 8,  31 => 6,  27 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }
}
/* <div class="card-pack-item coupon-item useless">*/
/*   {% if cardDetail.targetType == "course" %}*/
/*     {% if cardDetail.targetId == 0 %}*/
/*       <p class="title">可用于抵扣全站课程</p>*/
/*     {% else %}*/
/*       <p class="title">用于抵扣指定课程</p>*/
/*     {% endif %}*/
/*   {% endif %}*/
/* */
/*   {% if cardDetail.targetType == "classroom" %}*/
/*     <p class="title">可用于抵扣全站班级</p>*/
/*   {% endif %}*/
/* */
/*   {% if cardDetail.targetType == "vip" %}*/
/*     {% if cardDetail.targetId == 0 %}*/
/*       <p class="title">可用于抵扣全站会员</p>*/
/*     {% else %}*/
/*       <p class="title">用于抵扣指定会员</p>*/
/*     {% endif %}*/
/*   {% endif %}*/
/*   {% if cardDetail.targetType == "all" %}*/
/*     <p class="title">可用于抵扣全站所有类型消费</p>*/
/*   {% endif %}*/
/*   <p class="price">*/
/*     {% if cardDetail.type == "minus" %}￥{% endif %}<strong>{{ cardDetail.rate }}</strong>{% if cardDetail.type == "discount" %}折{% endif %}*/
/*   </p>*/
/*   <p>有效期截止：<span>{{ cardDetail.deadline|date('Y年n月d日') }}</span></p>*/
/*   <div class="stamp stamp-outdate"></div>*/
/* </div>*/
/* */
