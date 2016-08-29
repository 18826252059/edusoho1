<?php

/* TopxiaWebBundle:Order:order-item-coupon.html.twig */
class __TwigTemplate_3126fc5c270eacabb93680c91784ed78a3555f76b37a0c55f02c9f8f30816251 extends Twig_Template
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
        echo "<div class=\"order-item clearfix\">
  <div class=\"order-item-title\">
    <i class=\"es-icon es-icon-localplay\">
    </i>
    <span class=\"title\">优惠码</span> 
    
      <span role=\"no-use-coupon-code\">
      （没有使用优惠码）</span>
    
  </div>



  <div class=\"order-item-detail  coupon-detail\">
";
        // line 16
        echo "  ";
        if (true) {
            // line 17
            echo "      <div role=\"null-coupon-code\">
        ";
            // line 18
            if ( !(null === (isset($context["coupons"]) ? $context["coupons"] : null))) {
                // line 19
                echo "          <select class=\"form-control width-input width-input-large\" id=\"coupon-select\" name=\"couponCode\">
              ";
                // line 20
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["coupons"]) ? $context["coupons"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["coupon"]) {
                    // line 21
                    echo "                ";
                    if (($this->getAttribute($context["coupon"], "type", array()) == "minus")) {
                        // line 22
                        echo "                  <option data-target-type=\"";
                        echo twig_escape_filter($this->env, (isset($context["targetType"]) ? $context["targetType"] : null), "html", null, true);
                        echo "\" data-target-id=\"";
                        echo twig_escape_filter($this->env, ((array_key_exists("targetId", $context)) ? (_twig_default_filter((isset($context["targetId"]) ? $context["targetId"] : null), 0)) : (0)), "html", null, true);
                        echo "\" data-amount=\"
             ";
                        // line 23
                        echo twig_escape_filter($this->env, (isset($context["totalPrice"]) ? $context["totalPrice"] : null), "html", null, true);
                        echo "\" data-code=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["coupon"], "code", array()), "html", null, true);
                        echo "\" value=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["coupon"], "code", array()), "html", null, true);
                        echo "\">优惠码 抵扣";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["coupon"], "rate", array()), "html", null, true);
                        echo "元</option>
                ";
                    }
                    // line 25
                    echo "                ";
                    if (($this->getAttribute($context["coupon"], "type", array()) == "discount")) {
                        // line 26
                        echo "                  <option data-target-type=\"";
                        echo twig_escape_filter($this->env, (isset($context["targetType"]) ? $context["targetType"] : null), "html", null, true);
                        echo "\" data-target-id=\"";
                        echo twig_escape_filter($this->env, ((array_key_exists("targetId", $context)) ? (_twig_default_filter((isset($context["targetId"]) ? $context["targetId"] : null), 0)) : (0)), "html", null, true);
                        echo "\" data-amount=\"
             ";
                        // line 27
                        echo twig_escape_filter($this->env, (isset($context["totalPrice"]) ? $context["totalPrice"] : null), "html", null, true);
                        echo "\" data-code=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["coupon"], "code", array()), "html", null, true);
                        echo "\" value=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["coupon"], "code", array()), "html", null, true);
                        echo "\">优惠码 抵价";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["coupon"], "rate", array()), "html", null, true);
                        echo "折</option>
                ";
                    }
                    // line 29
                    echo "              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coupon'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 30
                echo "              <option data-code=\"\" value=\"\">不使用优惠码</option>
          </select>
        ";
            }
            // line 33
            echo "        <a id=\"coupon-code-btn\" class=\"btn btn-primary\" href=\"javascript:;\">输入优惠码</a>
      </div>
    
    
    ";
            // line 37
            if (twig_in_filter((isset($context["targetType"]) ? $context["targetType"] : null), array(0 => "course", 1 => "vip", 2 => "classroom"))) {
                // line 38
                echo "      <div role=\"coupon-code\" class=\"input-group\" style=\"display: none;\">
        <input role=\"coupon-code-verified\" name=\"couponCode\" type=\"hidden\"/>
        <input style=\"width:150px;\" role=\"coupon-code-input\" type=\"text\" class=\"form-control mrm\" placeholder=\"请输入优惠码\" data-target-type=\"";
                // line 40
                echo twig_escape_filter($this->env, (isset($context["targetType"]) ? $context["targetType"] : null), "html", null, true);
                echo "\" data-target-id=\"";
                echo twig_escape_filter($this->env, ((array_key_exists("targetId", $context)) ? (_twig_default_filter((isset($context["targetId"]) ? $context["targetId"] : null), 0)) : (0)), "html", null, true);
                echo "\" data-amount=\"
         ";
                // line 41
                echo twig_escape_filter($this->env, (isset($context["totalPrice"]) ? $context["totalPrice"] : null), "html", null, true);
                echo "  ";
                // line 42
                echo "        \"/> 
          <button class=\"btn btn-primary\" type=\"button\" role=\"coupon-use\">使用</button>
          <a href=\"javascript:;\" class=\"btn btn-link\" role=\"cancel-coupon\">取消</a>
      </div>
    ";
            }
            // line 47
            echo "  ";
        } else {
            // line 48
            echo "    <a id=\"coupon-code-btn\" class=\"btn btn-primary\" href=\"javascript:;\">输入优惠码</a>
    ";
            // line 49
            if (twig_in_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "targetType"), "method"), array(0 => "course", 1 => "vip", 2 => "classroom"))) {
                // line 50
                echo "      <div role=\"coupon-code\" class=\"input-group\" style=\"display: none;\">
        <input role=\"coupon-code-verified\" name=\"couponCode\" type=\"hidden\"/>
        <input style=\"width:150px;\" role=\"coupon-code-input\" type=\"text\" class=\"form-control mrm\" placeholder=\"请输入优惠码\" data-target-type=\"";
                // line 52
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "targetType"), "method"), "html", null, true);
                echo "\" data-target-id=\"";
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "targetId"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "targetId"), "method"), 0)) : (0)), "html", null, true);
                echo "\" data-amount=\"
         ";
                // line 53
                echo twig_escape_filter($this->env, (isset($context["totalPrice"]) ? $context["totalPrice"] : null), "html", null, true);
                echo "  ";
                // line 54
                echo "        \"/> 
          <button class=\"btn btn-primary\" type=\"button\" role=\"coupon-use\">使用</button>
          <a href=\"javascript:;\" class=\"btn btn-link\" role=\"cancel-coupon\">取消</a>
      </div>
    ";
            }
            // line 59
            echo "  ";
        }
        // line 60
        echo "    <div role=\"code-notify\" class=\"alert alert-success alert-xs mtm\" style=\"display:none;line-height:20px;\"></div>
  </div>
  <div class=\"order-item-price\" role=\"coupon-price\">
    <span class=\"mrs\">抵扣</span>
    ";
        // line 64
        if ((((array_key_exists("priceType", $context)) ? (_twig_default_filter((isset($context["priceType"]) ? $context["priceType"] : null), "RMB")) : ("RMB")) == "RMB")) {
            echo "<span>￥</span>";
        }
        // line 65
        echo "    <span role=\"price\" style=\"font-size: 24px\">0.00</span>
    <span>
      ";
        // line 67
        if ((((array_key_exists("priceType", $context)) ? (_twig_default_filter((isset($context["priceType"]) ? $context["priceType"] : null), "RMB")) : ("RMB")) == "RMB")) {
            echo " ";
        } else {
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_name"), "html", null, true);
            echo " ";
        }
        // line 68
        echo "    </span>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Order:order-item-coupon.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 68,  176 => 67,  172 => 65,  168 => 64,  162 => 60,  159 => 59,  152 => 54,  149 => 53,  143 => 52,  139 => 50,  137 => 49,  134 => 48,  131 => 47,  124 => 42,  121 => 41,  115 => 40,  111 => 38,  109 => 37,  103 => 33,  98 => 30,  92 => 29,  81 => 27,  74 => 26,  71 => 25,  60 => 23,  53 => 22,  50 => 21,  46 => 20,  43 => 19,  41 => 18,  38 => 17,  35 => 16,  19 => 1,);
    }
}
/* <div class="order-item clearfix">*/
/*   <div class="order-item-title">*/
/*     <i class="es-icon es-icon-localplay">*/
/*     </i>*/
/*     <span class="title">优惠码</span> */
/*     */
/*       <span role="no-use-coupon-code">*/
/*       （没有使用优惠码）</span>*/
/*     */
/*   </div>*/
/* */
/* */
/* */
/*   <div class="order-item-detail  coupon-detail">*/
/* {#}  {% if version_compare(plugin_version('Coupon'),'1.3.3','>') %}#}*/
/*   {% if true %}*/
/*       <div role="null-coupon-code">*/
/*         {% if coupons is not null %}*/
/*           <select class="form-control width-input width-input-large" id="coupon-select" name="couponCode">*/
/*               {% for coupon in coupons %}*/
/*                 {% if coupon.type == 'minus' %}*/
/*                   <option data-target-type="{{targetType}}" data-target-id="{{targetId|default(0) }}" data-amount="*/
/*              {{ totalPrice }}" data-code="{{ coupon.code }}" value="{{ coupon.code }}">优惠码 抵扣{{ coupon.rate }}元</option>*/
/*                 {% endif %}*/
/*                 {% if coupon.type == 'discount' %}*/
/*                   <option data-target-type="{{targetType}}" data-target-id="{{targetId|default(0) }}" data-amount="*/
/*              {{ totalPrice }}" data-code="{{ coupon.code }}" value="{{ coupon.code }}">优惠码 抵价{{ coupon.rate }}折</option>*/
/*                 {% endif %}*/
/*               {% endfor %}*/
/*               <option data-code="" value="">不使用优惠码</option>*/
/*           </select>*/
/*         {% endif %}*/
/*         <a id="coupon-code-btn" class="btn btn-primary" href="javascript:;">输入优惠码</a>*/
/*       </div>*/
/*     */
/*     */
/*     {% if targetType in ['course','vip','classroom'] %}*/
/*       <div role="coupon-code" class="input-group" style="display: none;">*/
/*         <input role="coupon-code-verified" name="couponCode" type="hidden"/>*/
/*         <input style="width:150px;" role="coupon-code-input" type="text" class="form-control mrm" placeholder="请输入优惠码" data-target-type="{{targetType}}" data-target-id="{{targetId|default(0) }}" data-amount="*/
/*          {{ totalPrice }}  {# {{courses[0]['price']}} #}*/
/*         "/> */
/*           <button class="btn btn-primary" type="button" role="coupon-use">使用</button>*/
/*           <a href="javascript:;" class="btn btn-link" role="cancel-coupon">取消</a>*/
/*       </div>*/
/*     {% endif %}*/
/*   {% else %}*/
/*     <a id="coupon-code-btn" class="btn btn-primary" href="javascript:;">输入优惠码</a>*/
/*     {% if app.request.query.get('targetType') in ['course','vip','classroom'] %}*/
/*       <div role="coupon-code" class="input-group" style="display: none;">*/
/*         <input role="coupon-code-verified" name="couponCode" type="hidden"/>*/
/*         <input style="width:150px;" role="coupon-code-input" type="text" class="form-control mrm" placeholder="请输入优惠码" data-target-type="{{app.request.query.get('targetType')}}" data-target-id="{{app.request.query.get('targetId')|default(0) }}" data-amount="*/
/*          {{ totalPrice }}  {# {{courses[0]['price']}} #}*/
/*         "/> */
/*           <button class="btn btn-primary" type="button" role="coupon-use">使用</button>*/
/*           <a href="javascript:;" class="btn btn-link" role="cancel-coupon">取消</a>*/
/*       </div>*/
/*     {% endif %}*/
/*   {% endif %}*/
/*     <div role="code-notify" class="alert alert-success alert-xs mtm" style="display:none;line-height:20px;"></div>*/
/*   </div>*/
/*   <div class="order-item-price" role="coupon-price">*/
/*     <span class="mrs">抵扣</span>*/
/*     {% if priceType|default("RMB") == "RMB" %}<span>￥</span>{% endif %}*/
/*     <span role="price" style="font-size: 24px">0.00</span>*/
/*     <span>*/
/*       {% if priceType|default("RMB") == "RMB" %} {% else %} {{ setting("coin.coin_name") }} {% endif %}*/
/*     </span>*/
/*   </div>*/
/* </div>*/
