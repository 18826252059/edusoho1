<?php

/* TopxiaWebBundle:PayCenter:show.html.twig */
class __TwigTemplate_09dc86883ba6bd0e36454334a4f2409c26e7889959c3e890b5f27a78a2370b66 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "TopxiaWebBundle:PayCenter:show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'esBar' => array($this, 'block_esBar'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 4
        $context["script_controller"] = "pay/select";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo " 支付中心 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 5
    public function block_esBar($context, array $blocks = array())
    {
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "<div class=\"order-pay\">
  
  <div class=\"es-section\">
    <ul class=\"es-step es-step-3 clearfix\">
      <li class=\"done\"><span class=\"number\"><i class=\"es-icon es-icon-done\"></i></span>订单确认</li>
      <li class=\"doing\"><span class=\"number\">2</span>订单支付</li>
      <li><span class=\"number\">3</span>订单完成</li>
    </ul>
    <div class=\"order-pay-body\">
      <div class=\"alert alert-success alert-dismissible\" role=\"alert\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
          <span aria-hidden=\"true\">×</span>
        </button>
        订单已提交，请在４８小时内完成支付！逾期订单将被取消。
      </div>
      
      ";
        // line 24
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller((isset($context["template"]) ? $context["template"] : null), array("sn" => (isset($context["sn"]) ? $context["sn"] : null))));
        echo "

      <div class=\"es-piece\" style=\"margin-bottom:20px;\"><div class=\"piece-header\">支付方式</div></div>
      <form class=\"form-paytype\" method=\"post\" action=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("pay_center_pay");
        echo "\">
        <input type=\"hidden\" name=\"targetType\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "targetType", array()), "html", null, true);
        echo "\"> 
        <input type=\"hidden\" name=\"orderId\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "id", array()), "html", null, true);
        echo "\"/>
        ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["payments"]) ? $context["payments"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["payment"] => $context["options"]) {
            // line 31
            echo "          ";
            if (($this->getAttribute($context["loop"], "index", array()) == 1)) {
                // line 32
                echo "            <input type=\"hidden\" name=\"payment\" value=";
                echo twig_escape_filter($this->env, $context["payment"], "html", null, true);
                echo ">
          ";
            }
            // line 34
            echo "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['payment'], $context['options'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
        <div class=\"form-group order-detail-bg\">
          ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["payments"]) ? $context["payments"] : null));
        $context['_iterated'] = false;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["payment"] => $context["options"]) {
            // line 38
            echo "            <div class=\"check ";
            if (($this->getAttribute($context["loop"], "index", array()) == 1)) {
                echo " active ";
            }
            echo "\" id=\"";
            echo twig_escape_filter($this->env, $context["payment"], "html", null, true);
            echo "\">
              ";
            // line 39
            $context["picture"] = (("assets/img/order/" . $context["payment"]) . ".png");
            // line 40
            echo "              <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((isset($context["picture"]) ? $context["picture"] : null)), "html", null, true);
            echo "\" />
              <span class=\"icon\"></span>
            </div>
          ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 44
            echo "            <div class=\"pay-type-label text-warning \">支付方式未开启，请联系管理员。</div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['payment'], $context['options'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "          ";
        if ( !twig_test_empty((isset($context["payAgreements"]) ? $context["payAgreements"] : null))) {
            // line 47
            echo "          <div class=\"js-pay-agreement\" style=\"display:none\">
            <ul class=\"pay-agreement-list row\">
              ";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["payAgreements"]) ? $context["payAgreements"] : null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["payAgreement"]) {
                // line 50
                echo "                <li id=\"unbind-bank-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["payAgreement"], "id", array()), "html", null, true);
                echo "\" class=\"col-md-6 js-pay-bank ";
                if (($this->getAttribute($context["loop"], "index0", array()) == 0)) {
                    echo "checked";
                }
                echo "\">
                  <div class=\"pay-bank clearfix\">
                    <input class=\"hidden\" type=\"radio\" name='payAgreementId' value=\"";
                // line 52
                echo twig_escape_filter($this->env, $this->getAttribute($context["payAgreement"], "id", array()), "html", null, true);
                echo "\" ";
                if (($this->getAttribute($context["loop"], "index0", array()) == 0)) {
                    echo "checked";
                }
                echo " />
                    <span class=\"name\">";
                // line 53
                echo twig_escape_filter($this->env, $this->getAttribute($context["payAgreement"], "bankName", array()), "html", null, true);
                echo "</span>
                    <span class=\"number\">***";
                // line 54
                echo twig_escape_filter($this->env, $this->getAttribute($context["payAgreement"], "bankNumber", array()), "html", null, true);
                echo "</span>
                    <span class=\"hidden-xs\">";
                // line 55
                if (($this->getAttribute($context["payAgreement"], "type", array()) == 0)) {
                    echo "储蓄卡";
                } else {
                    echo "信用卡";
                }
                echo "</span>
                    <a href=\"javascript:;\" class=\"closed visible-lg\" data-url=\"";
                // line 56
                echo $this->env->getExtension('routing')->getPath("auth_unbind_mobile_show");
                echo "\"><i class=\"es-icon es-icon-icon_close_circle\"></i></a>
                  </div>
                </li>
              ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['payAgreement'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "              <li class=\"col-md-6 js-pay-bank\">
                <div class=\"pay-bank\">
                  <input class=\"hidden\" type=\"radio\" name='payAgreementId' value=\"\"/>
                  <span class=\"color-gray\">使用新的银行卡</span>
                </div>
              </li>
            </ul>
          </div>
          ";
        }
        // line 69
        echo "        </div>
        <div class=\"form-group\">
          <div class=\"total-price\">
            应付金额：
            <span role=\"pay-rmb\" class=\"pay-rmb\">￥";
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "amount", array()), "html", null, true);
        echo "</span>
          </div>
        </div>
        <div class=\"form-group text-right\">
          ";
        // line 77
        $this->loadTemplate((("TopxiaWebBundle:PayCenter:" . (isset($context["targetType"]) ? $context["targetType"] : null)) . "-cancelled.html.twig"), "TopxiaWebBundle:PayCenter:show.html.twig", 77)->display($context);
        // line 78
        echo "          <button class=\"pay-button btn btn-primary\"  type=\"submit\">确认支付</button>
        </div>
      </form>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:PayCenter:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  286 => 78,  284 => 77,  277 => 73,  271 => 69,  260 => 60,  242 => 56,  234 => 55,  230 => 54,  226 => 53,  218 => 52,  208 => 50,  191 => 49,  187 => 47,  184 => 46,  177 => 44,  159 => 40,  157 => 39,  148 => 38,  130 => 37,  124 => 35,  110 => 34,  104 => 32,  101 => 31,  84 => 30,  80 => 29,  76 => 28,  72 => 27,  66 => 24,  48 => 8,  45 => 7,  40 => 5,  33 => 3,  29 => 1,  27 => 4,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::layout.html.twig' %}*/
/* */
/* {% block title %} 支付中心 - {{ parent() }}{% endblock %}*/
/* {% set script_controller = 'pay/select' %}*/
/* {% block esBar %}*/
/* {% endblock %}*/
/* {% block content %}*/
/* <div class="order-pay">*/
/*   */
/*   <div class="es-section">*/
/*     <ul class="es-step es-step-3 clearfix">*/
/*       <li class="done"><span class="number"><i class="es-icon es-icon-done"></i></span>订单确认</li>*/
/*       <li class="doing"><span class="number">2</span>订单支付</li>*/
/*       <li><span class="number">3</span>订单完成</li>*/
/*     </ul>*/
/*     <div class="order-pay-body">*/
/*       <div class="alert alert-success alert-dismissible" role="alert">*/
/*         <button type="button" class="close" data-dismiss="alert" aria-label="Close">*/
/*           <span aria-hidden="true">×</span>*/
/*         </button>*/
/*         订单已提交，请在４８小时内完成支付！逾期订单将被取消。*/
/*       </div>*/
/*       */
/*       {{ render(controller(template , {'sn':sn})) }}*/
/* */
/*       <div class="es-piece" style="margin-bottom:20px;"><div class="piece-header">支付方式</div></div>*/
/*       <form class="form-paytype" method="post" action="{{path('pay_center_pay')}}">*/
/*         <input type="hidden" name="targetType" value="{{order.targetType}}"> */
/*         <input type="hidden" name="orderId" value="{{order.id}}"/>*/
/*         {% for payment,options in payments %}*/
/*           {% if loop.index == 1 %}*/
/*             <input type="hidden" name="payment" value={{payment}}>*/
/*           {% endif %}*/
/*         {% endfor %}*/
/*         <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/*         <div class="form-group order-detail-bg">*/
/*           {% for payment, options in payments %}*/
/*             <div class="check {% if loop.index == 1 %} active {% endif %}" id="{{payment}}">*/
/*               {% set picture = 'assets/img/order/'~payment~'.png' %}*/
/*               <img src="{{ asset(picture) }}" />*/
/*               <span class="icon"></span>*/
/*             </div>*/
/*           {% else %}*/
/*             <div class="pay-type-label text-warning ">支付方式未开启，请联系管理员。</div>*/
/*           {% endfor %}*/
/*           {% if payAgreements is not empty %}*/
/*           <div class="js-pay-agreement" style="display:none">*/
/*             <ul class="pay-agreement-list row">*/
/*               {% for payAgreement in payAgreements %}*/
/*                 <li id="unbind-bank-{{payAgreement.id}}" class="col-md-6 js-pay-bank {% if loop.index0 == 0 %}checked{% endif %}">*/
/*                   <div class="pay-bank clearfix">*/
/*                     <input class="hidden" type="radio" name='payAgreementId' value="{{payAgreement.id}}" {% if loop.index0 == 0 %}checked{% endif %} />*/
/*                     <span class="name">{{payAgreement.bankName}}</span>*/
/*                     <span class="number">***{{payAgreement.bankNumber}}</span>*/
/*                     <span class="hidden-xs">{% if payAgreement.type == 0 %}储蓄卡{% else %}信用卡{% endif %}</span>*/
/*                     <a href="javascript:;" class="closed visible-lg" data-url="{{ path('auth_unbind_mobile_show')}}"><i class="es-icon es-icon-icon_close_circle"></i></a>*/
/*                   </div>*/
/*                 </li>*/
/*               {% endfor %}*/
/*               <li class="col-md-6 js-pay-bank">*/
/*                 <div class="pay-bank">*/
/*                   <input class="hidden" type="radio" name='payAgreementId' value=""/>*/
/*                   <span class="color-gray">使用新的银行卡</span>*/
/*                 </div>*/
/*               </li>*/
/*             </ul>*/
/*           </div>*/
/*           {% endif %}*/
/*         </div>*/
/*         <div class="form-group">*/
/*           <div class="total-price">*/
/*             应付金额：*/
/*             <span role="pay-rmb" class="pay-rmb">￥{{order.amount}}</span>*/
/*           </div>*/
/*         </div>*/
/*         <div class="form-group text-right">*/
/*           {% include 'TopxiaWebBundle:PayCenter:' ~ targetType ~ '-cancelled.html.twig' %}*/
/*           <button class="pay-button btn btn-primary"  type="submit">确认支付</button>*/
/*         </div>*/
/*       </form>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* {% endblock %}*/
