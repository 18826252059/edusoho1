<?php

/* CustomWebBundle:Course:nongzi.html.twig */
class __TwigTemplate_09cf2d7fc36a58f7b6bb92f441a56aa2d81d5ebabd3d5a4374fa445ce2458ec3 extends Twig_Template
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
";
        // line 2
        if ((($this->getAttribute((isset($context["nongzi"]) ? $context["nongzi"] : null), "farmInputs", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["nongzi"]) ? $context["nongzi"] : null), "farmInputs", array()), "")) : (""))) {
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["nongzi"]) ? $context["nongzi"] : null), "url", array()), "html", null, true);
            echo "\"><div class=\"left-h2\">相关农资<span class=\"course-rightPoint g-fr\">更多农资</span></div></a>
<section class=\"bg-df9 g-mb10 nongzi-box\">
    <div class=\"swiper-container containerNew\">
        <div class=\"swiper-wrapper\">
            <div class=\"swiper-slide\" style=\"white-space: nowrap;\">
                    ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["nongzi"]) ? $context["nongzi"] : null), "farmInputs", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 8
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "url", array()), "html", null, true);
                echo "\">
                            <div class=\"nongzi-detail\">
                                <img src=\"";
                // line 10
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "thumbUrl", array()), "html", null, true);
                echo "\" width=\"115\" height=\"115\">

                                <p class=\"overline1 dec\">";
                // line 12
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "productTitle", array()), "html", null, true);
                echo "</p>
                                ";
                // line 14
                echo "                            </div>
                        </a>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "            </div>
        </div>
    </div>
</section>
";
        }
    }

    public function getTemplateName()
    {
        return "CustomWebBundle:Course:nongzi.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 17,  51 => 14,  47 => 12,  42 => 10,  36 => 8,  32 => 7,  22 => 2,  19 => 1,);
    }
}
/* */
/* {% if nongzi.farmInputs|default('')  %}<a href="{{ nongzi.url }}"><div class="left-h2">相关农资<span class="course-rightPoint g-fr">更多农资</span></div></a>*/
/* <section class="bg-df9 g-mb10 nongzi-box">*/
/*     <div class="swiper-container containerNew">*/
/*         <div class="swiper-wrapper">*/
/*             <div class="swiper-slide" style="white-space: nowrap;">*/
/*                     {% for product in  nongzi.farmInputs %}*/
/*                         <a href="{{ product.url }}">*/
/*                             <div class="nongzi-detail">*/
/*                                 <img src="{{ product.thumbUrl }}" width="115" height="115">*/
/* */
/*                                 <p class="overline1 dec">{{ product.productTitle }}</p>*/
/*                                 {#<p class="g-font-color4">￥59</p>#}*/
/*                             </div>*/
/*                         </a>*/
/*                     {% endfor %}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </section>*/
/* {% endif %}*/
