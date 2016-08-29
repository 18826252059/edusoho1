<?php

/* TopxiaWebBundle:Course:price-widget.html.twig */
class __TwigTemplate_ea3ee7c4bb7febdcf979a131c34d9a10e94ab0e965fd34e475fb8dc64acee6e4 extends Twig_Template
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
        // line 8
        echo "
";
        // line 9
        $context["shows"] = ((array_key_exists("shows", $context)) ? (_twig_default_filter((isset($context["shows"]) ? $context["shows"] : $this->getContext($context, "shows")), array(0 => "full"))) : (array(0 => "full")));
        // line 10
        $context["priceType"] = ((($this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_enabled") && ($this->env->getExtension('topxia_web_twig')->getSetting("coin.price_type") == "Coin"))) ? ("coin") : ("default"));
        // line 11
        echo "
<span class=\"course-price-widget\">
  ";
        // line 13
        if ($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "discountId", array())) {
            // line 14
            echo "
    ";
            // line 15
            if ((twig_in_filter("full", (isset($context["shows"]) ? $context["shows"] : $this->getContext($context, "shows"))) || twig_in_filter("price", (isset($context["shows"]) ? $context["shows"] : $this->getContext($context, "shows"))))) {
                // line 16
                echo "      ";
                if (((isset($context["priceType"]) ? $context["priceType"] : $this->getContext($context, "priceType")) == "coin")) {
                    // line 17
                    echo "        <span class=\"price\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "coinPrice", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_name", "虚拟币"), "html", null, true);
                    echo "</span>
      ";
                } else {
                    // line 19
                    echo "        <span class=\"price\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "price", array()), "html", null, true);
                    echo " 元</span>
      ";
                }
                // line 21
                echo "    ";
            }
            // line 22
            echo "
    ";
            // line 23
            if ((twig_in_filter("full", (isset($context["shows"]) ? $context["shows"] : $this->getContext($context, "shows"))) || twig_in_filter("originPrice", (isset($context["shows"]) ? $context["shows"] : $this->getContext($context, "shows"))))) {
                // line 24
                echo "      ";
                if (((isset($context["priceType"]) ? $context["priceType"] : $this->getContext($context, "priceType")) == "coin")) {
                    // line 25
                    echo "        <span class=\"origin-price\"><del>";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "originCoinPrice", array()), "html", null, true);
                    echo "</del></span>
      ";
                } else {
                    // line 27
                    echo "        <span class=\"origin-price\"><del>";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "originPrice", array()), "html", null, true);
                    echo "</del></span>
      ";
                }
                // line 29
                echo "    ";
            }
            // line 30
            echo "
    ";
            // line 31
            if ((twig_in_filter("full", (isset($context["shows"]) ? $context["shows"] : $this->getContext($context, "shows"))) || twig_in_filter("discount", (isset($context["shows"]) ? $context["shows"] : $this->getContext($context, "shows"))))) {
                // line 32
                echo "
      <span class=\"discount\">
        ";
                // line 34
                if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "discount", array()) == 0) || (((isset($context["priceType"]) ? $context["priceType"] : $this->getContext($context, "priceType")) == "coin") && ($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "originCoinPrice", array()) == 0))) || (((isset($context["priceType"]) ? $context["priceType"] : $this->getContext($context, "priceType")) == "default") && ($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "originPrice", array()) == 0)))) {
                    // line 35
                    echo "          限免
        ";
                } else {
                    // line 37
                    echo "          ";
                    echo twig_escape_filter($this->env, twig_round($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "discount", array()), 2, "common"), "html", null, true);
                    echo " 折
        ";
                }
                // line 39
                echo "      </span>

    ";
            }
            // line 42
            echo "
  ";
        } else {
            // line 44
            echo "
    ";
            // line 45
            if ((twig_in_filter("full", (isset($context["shows"]) ? $context["shows"] : $this->getContext($context, "shows"))) || twig_in_filter("price", (isset($context["shows"]) ? $context["shows"] : $this->getContext($context, "shows"))))) {
                // line 46
                echo "      <span class=\"price\">
        ";
                // line 47
                if (($this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_enabled") && ($this->env->getExtension('topxia_web_twig')->getSetting("coin.price_type") == "Coin"))) {
                    // line 48
                    echo "          ";
                    if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "coinPrice", array()) > 0)) {
                        echo " ";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "coinPrice", array()), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_name", "虚拟币"), "html", null, true);
                        echo " ";
                    } else {
                        echo " 免费 ";
                    }
                    // line 49
                    echo "        ";
                } else {
                    // line 50
                    echo "          ";
                    if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "price", array()) > 0)) {
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "price", array()), "html", null, true);
                        echo " 元";
                    } else {
                        echo " 免费 ";
                    }
                    // line 51
                    echo "        ";
                }
                // line 52
                echo "      </span>
    ";
            }
            // line 54
            echo "
  ";
        }
        // line 56
        echo "</span>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:price-widget.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 56,  149 => 54,  145 => 52,  142 => 51,  134 => 50,  131 => 49,  120 => 48,  118 => 47,  115 => 46,  113 => 45,  110 => 44,  106 => 42,  101 => 39,  95 => 37,  91 => 35,  89 => 34,  85 => 32,  83 => 31,  80 => 30,  77 => 29,  71 => 27,  65 => 25,  62 => 24,  60 => 23,  57 => 22,  54 => 21,  48 => 19,  40 => 17,  37 => 16,  35 => 15,  32 => 14,  30 => 13,  26 => 11,  24 => 10,  22 => 9,  19 => 8,);
    }
}
/* {# */
/*   mode的取值有：*/
/*     full：该模式下显示折扣价、原价、打折*/
/*     price: 该模式下如有打折活动则显示折扣价，没有打折活动就显示为原价*/
/*     originPrice：该模式下只显示原价*/
/*     discount：该模式下只显示折扣*/
/* #}*/
/* */
/* {% set shows = shows|default(['full']) %}*/
/* {% set priceType = (setting('coin.coin_enabled') and setting('coin.price_type') == 'Coin') ? 'coin' : 'default'  %}*/
/* */
/* <span class="course-price-widget">*/
/*   {% if course.discountId %}*/
/* */
/*     {% if 'full' in shows or 'price' in shows %}*/
/*       {% if priceType == 'coin' %}*/
/*         <span class="price">{{ course.coinPrice }} {{setting('coin.coin_name', '虚拟币')}}</span>*/
/*       {% else %}*/
/*         <span class="price">{{ course.price }} 元</span>*/
/*       {% endif %}*/
/*     {% endif %}*/
/* */
/*     {% if 'full' in shows or 'originPrice' in shows %}*/
/*       {% if priceType == 'coin' %}*/
/*         <span class="origin-price"><del>{{course.originCoinPrice}}</del></span>*/
/*       {% else %}*/
/*         <span class="origin-price"><del>{{course.originPrice}}</del></span>*/
/*       {% endif %}*/
/*     {% endif %}*/
/* */
/*     {% if 'full' in shows or 'discount' in shows %}*/
/* */
/*       <span class="discount">*/
/*         {% if (course.discount == 0) or (priceType == 'coin' and course.originCoinPrice == 0) or (priceType == 'default' and course.originPrice == 0) %}*/
/*           限免*/
/*         {% else  %}*/
/*           {{ course.discount|round(2, 'common') }} 折*/
/*         {% endif %}*/
/*       </span>*/
/* */
/*     {% endif %}*/
/* */
/*   {% else %}*/
/* */
/*     {% if 'full' in shows or 'price' in shows %}*/
/*       <span class="price">*/
/*         {% if setting('coin.coin_enabled') and setting('coin.price_type') == 'Coin' %}*/
/*           {% if course.coinPrice > 0 %} {{ course.coinPrice }} {{setting('coin.coin_name', '虚拟币')}} {% else %} 免费 {% endif %}*/
/*         {% else %}*/
/*           {% if course.price > 0 %}{{ course.price }} 元{% else %} 免费 {% endif %}*/
/*         {% endif %}*/
/*       </span>*/
/*     {% endif %}*/
/* */
/*   {% endif %}*/
/* </span>*/
