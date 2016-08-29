<?php

/* TopxiaWebBundle:Card:coupon-useable.html.twig */
class __TwigTemplate_061b231e57a664959f626a41270d5f5058a37dfb2a8544ccee30864deb8d2664 extends Twig_Template
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
        echo "<div class=\"card-pack-item coupon-item\">
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
        echo "
  ";
        // line 22
        if (($this->getAttribute((isset($context["cardDetail"]) ? $context["cardDetail"] : null), "targetType", array()) == "all")) {
            // line 23
            echo "    <p class=\"title\">可用于抵扣全站所有类型消费</p>
  ";
        }
        // line 25
        echo "
  <p class=\"price\">
    ";
        // line 27
        if (($this->getAttribute((isset($context["cardDetail"]) ? $context["cardDetail"] : null), "type", array()) == "minus")) {
            echo "￥";
        }
        echo "<strong>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cardDetail"]) ? $context["cardDetail"] : null), "rate", array()), "html", null, true);
        echo "</strong>";
        if (($this->getAttribute((isset($context["cardDetail"]) ? $context["cardDetail"] : null), "type", array()) == "discount")) {
            echo "折";
        }
        // line 28
        echo "    ";
        if ((($this->getAttribute((isset($context["cardDetail"]) ? $context["cardDetail"] : null), "targetType", array()) == "course") && ($this->getAttribute((isset($context["cardDetail"]) ? $context["cardDetail"] : null), "targetId", array()) != 0))) {
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute((isset($context["cardDetail"]) ? $context["cardDetail"] : null), "targetId", array()))), "html", null, true);
            echo "\">去购买课程 ></a>
    ";
        } elseif ((($this->getAttribute(        // line 29
(isset($context["cardDetail"]) ? $context["cardDetail"] : null), "targetType", array()) == "course") && ($this->getAttribute((isset($context["cardDetail"]) ? $context["cardDetail"] : null), "targetId", array()) == 0))) {
            echo "<a href=\"";
            echo $this->env->getExtension('routing')->getPath("course_explore");
            echo "\">去购买课程 ></a>
    ";
        } elseif (($this->getAttribute(        // line 30
(isset($context["cardDetail"]) ? $context["cardDetail"] : null), "targetType", array()) == "vip")) {
            echo "<a href=\"";
            echo $this->env->getExtension('routing')->getPath("vip");
            echo "\">去开通会员 ></a>
    ";
        } elseif (($this->getAttribute(        // line 31
(isset($context["cardDetail"]) ? $context["cardDetail"] : null), "targetType", array()) == "classroom")) {
            echo "<a href=\"";
            echo $this->env->getExtension('routing')->getPath("classroom_explore");
            echo "\">去购买班级 ></a>
    ";
        } else {
            // line 32
            echo "<a href=\"";
            echo $this->env->getExtension('routing')->getPath("course_explore");
            echo "\">去消费 ></a>
    ";
        }
        // line 34
        echo "  </p>  
  <p>有效期截止：<span>";
        // line 35
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["cardDetail"]) ? $context["cardDetail"] : null), "deadline", array()), "Y年n月d日"), "html", null, true);
        echo "</span></p>
</div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Card:coupon-useable.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 35,  121 => 34,  115 => 32,  108 => 31,  102 => 30,  96 => 29,  89 => 28,  79 => 27,  75 => 25,  71 => 23,  69 => 22,  66 => 21,  63 => 20,  59 => 18,  55 => 16,  52 => 15,  50 => 14,  47 => 13,  43 => 11,  41 => 10,  38 => 9,  35 => 8,  31 => 6,  27 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }
}
/* <div class="card-pack-item coupon-item">*/
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
/* */
/*   {% if cardDetail.targetType == "all" %}*/
/*     <p class="title">可用于抵扣全站所有类型消费</p>*/
/*   {% endif %}*/
/* */
/*   <p class="price">*/
/*     {% if cardDetail.type == "minus" %}￥{% endif %}<strong>{{ cardDetail.rate }}</strong>{% if cardDetail.type == "discount" %}折{% endif %}*/
/*     {% if cardDetail.targetType == "course" and cardDetail.targetId != 0 %}<a href="{{ path('course_show',{ id : cardDetail.targetId }) }}">去购买课程 ></a>*/
/*     {% elseif cardDetail.targetType == "course" and cardDetail.targetId == 0 %}<a href="{{ path('course_explore') }}">去购买课程 ></a>*/
/*     {% elseif cardDetail.targetType == "vip" %}<a href="{{ path('vip') }}">去开通会员 ></a>*/
/*     {% elseif cardDetail.targetType == "classroom" %}<a href="{{ path('classroom_explore') }}">去购买班级 ></a>*/
/*     {% else %}<a href="{{ path('course_explore') }}">去消费 ></a>*/
/*     {% endif %}*/
/*   </p>  */
/*   <p>有效期截止：<span>{{ (cardDetail.deadline)|date('Y年n月d日') }}</span></p>*/
/* </div>*/
/* */
