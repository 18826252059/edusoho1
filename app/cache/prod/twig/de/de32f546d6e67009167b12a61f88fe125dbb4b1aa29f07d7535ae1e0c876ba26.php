<?php

/* TopxiaWebBundle:MyOrder:detail-order.html.twig */
class __TwigTemplate_a66d2d2b10e1331210bb6662c74b0b36ac5dc5ec7b6fbc8e6a2f3bea59531d53 extends Twig_Template
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
<div class=\"tab-content\">

  <div class=\"tab-pane fade active in\" id=\"detail\">
     <table class=\"table table-striped order-table\">
      <tr> <th width=\"25%\">订单号</th> <td width=\"75%\">";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "sn", array()), "html", null, true);
        echo "</td> </tr>
      <tr> <th width=\"25%\">订单状态</th> 
           <td width=\"75%\">
            ";
        // line 9
        if (($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "status", array()) == "created")) {
            echo " 未完成
            ";
        } elseif (($this->getAttribute(        // line 10
(isset($context["order"]) ? $context["order"] : null), "status", array()) == "paid")) {
            echo " 已付款
            ";
        } elseif (($this->getAttribute(        // line 11
(isset($context["order"]) ? $context["order"] : null), "status", array()) == "cancelled")) {
            echo " 已关闭
            ";
        } elseif (($this->getAttribute(        // line 12
(isset($context["order"]) ? $context["order"] : null), "status", array()) == "refunding")) {
            echo " 申请退款
            ";
        } elseif (($this->getAttribute(        // line 13
(isset($context["order"]) ? $context["order"] : null), "status", array()) == "refunded")) {
            echo " 退款成功
            ";
        }
        // line 15
        echo "           </td> 
      </tr>
      <tr>
        <th width=\"25%\">订单名称</th>
        <td width=\"75%\">
          ";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "title", array()), "html", null, true);
        echo "
        </td>
      </tr>
      <tr> <th width=\"25%\">购买者</th> 
        <td width=\"75%\">
          <strong>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_macro"]) ? $context["admin_macro"] : null), "user_link", array(0 => (isset($context["user"]) ? $context["user"] : null)), "method"), "html", null, true);
        echo "</strong>
        </td>
      </tr>
      <tr> <th width=\"25%\">订单价格</th> 
        <td width=\"75%\">
          <span class=\"money-text\">";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "totalPrice", array()), "html", null, true);
        echo "</span>
          ";
        // line 31
        if (($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "priceType", array()) == "RMB")) {
            // line 32
            echo "          元
          ";
        } elseif (($this->getAttribute(        // line 33
(isset($context["order"]) ? $context["order"] : null), "priceType", array()) == "Coin")) {
            // line 34
            echo "          ";
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_name"), "html", null, true);
            echo "
          ";
        }
        // line 36
        echo "        </td>
      </tr>
      <tr> <th width=\"25%\">优惠码</th> 
        <td width=\"75%\">
          ";
        // line 40
        if ($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "coupon", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "coupon", array()), "html", null, true);
        } else {
            echo "无";
        }
        // line 41
        echo "        </td>
      </tr>
      <tr> <th width=\"25%\">优惠金额</th> 
        <td width=\"75%\">
          <span class=\"money-text\">";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "couponDiscount", array()), "html", null, true);
        echo "</span>
          ";
        // line 46
        if (($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "priceType", array()) == "RMB")) {
            // line 47
            echo "          元
          ";
        } elseif (($this->getAttribute(        // line 48
(isset($context["order"]) ? $context["order"] : null), "priceType", array()) == "Coin")) {
            // line 49
            echo "          ";
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_name"), "html", null, true);
            echo "
          ";
        }
        // line 51
        echo "        </td>
      </tr>
      ";
        // line 53
        if ((_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_enabled"), 0) == 1)) {
            // line 54
            echo "      <tr> <th width=\"25%\">虚拟币支付</th> 
        <td width=\"75%\">
          <span class=\"money-text\">";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "coinAmount", array()), "html", null, true);
            echo "</span> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_name"), "html", null, true);
            echo "
        </td>
      </tr>
      ";
        }
        // line 60
        echo "      <tr> <th width=\"25%\">现金支付</th> 
        <td width=\"75%\">
          <span class=\"money-text\">";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "amount", array()), "html", null, true);
        echo "</span> 元
        </td>
      </tr>
      <tr> <th width=\"25%\">支付方式</th> 
           <td width=\"75%\">
            ";
        // line 68
        echo "            ";
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getOrderPayment((isset($context["order"]) ? $context["order"] : null)), "html", null, true);
        echo "
           </td> 
      </tr>
      <tr> <th width=\"25%\">银行编号</th> 
           <td width=\"75%\">
            ";
        // line 73
        if (($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "bank", array()) == null)) {
            echo " 暂无
            ";
        } else {
            // line 74
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "bank", array()), "html", null, true);
            echo "
            ";
        }
        // line 76
        echo "           </td> 
      </tr>
      <tr> <th width=\"25%\">创建时间</th> <td width=\"75%\">";
        // line 78
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "createdTime", array()), "Y-n-d H:i:s"), "html", null, true);
        echo "</td> </tr>
      ";
        // line 79
        if (($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "status", array()) == "paid")) {
            // line 80
            echo "        <tr> <th width=\"25%\">付款时间</th> <td width=\"75%\">";
            if (( !$this->getAttribute((isset($context["order"]) ? $context["order"] : null), "paidTime", array()) == 0)) {
                echo " ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "paidTime", array()), "Y-n-d H:i:s"), "html", null, true);
                echo " ";
            }
            echo "</td> </tr>
        ";
            // line 81
            if ($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "token", array())) {
                // line 82
                echo "          <tr> <th width=\"25%\">商户订单号</th> <td width=\"75%\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "token", array()), "html", null, true);
                echo "</td> </tr>
        ";
            }
            // line 84
            echo "      ";
        }
        // line 85
        echo "    </table>
  </div>

  <div class=\"tab-pane fade\" id=\"log\">
    ";
        // line 89
        if ((isset($context["orderLogs"]) ? $context["orderLogs"] : null)) {
            // line 90
            echo "      <table class=\"table\">
        <thead>
          <tr>
            <th width=\"50%\">日志信息</th>
            <th width=\"25%\">操作人</th>
            <th width=\"25%\">创建时间</th>
          </tr>
        </thead>
        <tbody>
          ";
            // line 99
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["orderLogs"]) ? $context["orderLogs"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["orderLog"]) {
                // line 100
                echo "            ";
                $context["logUser"] = (($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["orderLog"], "userId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["orderLog"], "userId", array()), array(), "array"), null)) : (null));
                // line 101
                echo "            <tr>
              <td>
                ";
                // line 103
                echo $this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute($context["orderLog"], "message", array()), 50);
                echo "
                <br>
                <span class=\"text-muted text-sm\">";
                // line 105
                echo twig_escape_filter($this->env, $this->getAttribute($context["orderLog"], "type", array()), "html", null, true);
                echo "</span>
              </td>
              <td>
                ";
                // line 108
                if ((isset($context["logUser"]) ? $context["logUser"] : null)) {
                    // line 109
                    echo "                  ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_macro"]) ? $context["admin_macro"] : null), "user_link", array(0 => (isset($context["logUser"]) ? $context["logUser"] : null)), "method"), "html", null, true);
                    echo "
                ";
                } else {
                    // line 111
                    echo "                  --
                ";
                }
                // line 113
                echo "              </td>
              <td>
                ";
                // line 115
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["orderLog"], "createdTime", array()), "Y-n-d H:i"), "html", null, true);
                echo "
                <br>
                <span class=\"text-muted text-sm\">";
                // line 117
                echo twig_escape_filter($this->env, $this->getAttribute($context["orderLog"], "ip", array()), "html", null, true);
                echo "</span>
              </td>
            </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['orderLog'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 121
            echo "        </tbody>
      </table>
    ";
        } else {
            // line 124
            echo "      <div class=\"empty\">暂无交易日志!</div>
    ";
        }
        // line 126
        echo "  </div>
     
</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:MyOrder:detail-order.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  290 => 126,  286 => 124,  281 => 121,  271 => 117,  266 => 115,  262 => 113,  258 => 111,  252 => 109,  250 => 108,  244 => 105,  239 => 103,  235 => 101,  232 => 100,  228 => 99,  217 => 90,  215 => 89,  209 => 85,  206 => 84,  200 => 82,  198 => 81,  189 => 80,  187 => 79,  183 => 78,  179 => 76,  173 => 74,  168 => 73,  159 => 68,  151 => 62,  147 => 60,  138 => 56,  134 => 54,  132 => 53,  128 => 51,  122 => 49,  120 => 48,  117 => 47,  115 => 46,  111 => 45,  105 => 41,  99 => 40,  93 => 36,  87 => 34,  85 => 33,  82 => 32,  80 => 31,  76 => 30,  68 => 25,  60 => 20,  53 => 15,  48 => 13,  44 => 12,  40 => 11,  36 => 10,  32 => 9,  26 => 6,  19 => 1,);
    }
}
/* */
/* <div class="tab-content">*/
/* */
/*   <div class="tab-pane fade active in" id="detail">*/
/*      <table class="table table-striped order-table">*/
/*       <tr> <th width="25%">订单号</th> <td width="75%">{{ order.sn }}</td> </tr>*/
/*       <tr> <th width="25%">订单状态</th> */
/*            <td width="75%">*/
/*             {% if order.status == 'created' %} 未完成*/
/*             {% elseif order.status == 'paid' %} 已付款*/
/*             {% elseif order.status == 'cancelled' %} 已关闭*/
/*             {% elseif order.status == 'refunding' %} 申请退款*/
/*             {% elseif order.status == 'refunded' %} 退款成功*/
/*             {% endif %}*/
/*            </td> */
/*       </tr>*/
/*       <tr>*/
/*         <th width="25%">订单名称</th>*/
/*         <td width="75%">*/
/*           {{ order.title }}*/
/*         </td>*/
/*       </tr>*/
/*       <tr> <th width="25%">购买者</th> */
/*         <td width="75%">*/
/*           <strong>{{ admin_macro.user_link(user) }}</strong>*/
/*         </td>*/
/*       </tr>*/
/*       <tr> <th width="25%">订单价格</th> */
/*         <td width="75%">*/
/*           <span class="money-text">{{ order.totalPrice }}</span>*/
/*           {% if order.priceType == "RMB" %}*/
/*           元*/
/*           {% elseif order.priceType == "Coin" %}*/
/*           {{setting("coin.coin_name")}}*/
/*           {% endif %}*/
/*         </td>*/
/*       </tr>*/
/*       <tr> <th width="25%">优惠码</th> */
/*         <td width="75%">*/
/*           {% if order.coupon %}{{ order.coupon }}{% else %}无{% endif %}*/
/*         </td>*/
/*       </tr>*/
/*       <tr> <th width="25%">优惠金额</th> */
/*         <td width="75%">*/
/*           <span class="money-text">{{ order.couponDiscount }}</span>*/
/*           {% if order.priceType == "RMB" %}*/
/*           元*/
/*           {% elseif order.priceType == "Coin" %}*/
/*           {{setting("coin.coin_name")}}*/
/*           {% endif %}*/
/*         </td>*/
/*       </tr>*/
/*       {% if setting("coin.coin_enabled")|default(0) == 1 %}*/
/*       <tr> <th width="25%">虚拟币支付</th> */
/*         <td width="75%">*/
/*           <span class="money-text">{{ order.coinAmount }}</span> {{setting("coin.coin_name")}}*/
/*         </td>*/
/*       </tr>*/
/*       {% endif %}*/
/*       <tr> <th width="25%">现金支付</th> */
/*         <td width="75%">*/
/*           <span class="money-text">{{ order.amount }}</span> 元*/
/*         </td>*/
/*       </tr>*/
/*       <tr> <th width="25%">支付方式</th> */
/*            <td width="75%">*/
/*             {# {% if order.payment == 'none' %} 暂无 #}*/
/*             {{ order_payment(order) }}*/
/*            </td> */
/*       </tr>*/
/*       <tr> <th width="25%">银行编号</th> */
/*            <td width="75%">*/
/*             {% if order.bank == null %} 暂无*/
/*             {% else %} {{ order.bank }}*/
/*             {% endif %}*/
/*            </td> */
/*       </tr>*/
/*       <tr> <th width="25%">创建时间</th> <td width="75%">{{ order.createdTime | date('Y-n-d H:i:s') }}</td> </tr>*/
/*       {% if order.status == 'paid' %}*/
/*         <tr> <th width="25%">付款时间</th> <td width="75%">{% if not order.paidTime == 0 %} {{ order.paidTime | date('Y-n-d H:i:s') }} {% endif %}</td> </tr>*/
/*         {% if order.token %}*/
/*           <tr> <th width="25%">商户订单号</th> <td width="75%">{{order.token}}</td> </tr>*/
/*         {% endif %}*/
/*       {% endif %}*/
/*     </table>*/
/*   </div>*/
/* */
/*   <div class="tab-pane fade" id="log">*/
/*     {% if orderLogs %}*/
/*       <table class="table">*/
/*         <thead>*/
/*           <tr>*/
/*             <th width="50%">日志信息</th>*/
/*             <th width="25%">操作人</th>*/
/*             <th width="25%">创建时间</th>*/
/*           </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*           {% for orderLog in orderLogs %}*/
/*             {% set logUser = users[orderLog.userId]|default(null) %}*/
/*             <tr>*/
/*               <td>*/
/*                 {{ orderLog.message | plain_text(50) }}*/
/*                 <br>*/
/*                 <span class="text-muted text-sm">{{ orderLog.type }}</span>*/
/*               </td>*/
/*               <td>*/
/*                 {% if logUser %}*/
/*                   {{ admin_macro.user_link(logUser) }}*/
/*                 {% else %}*/
/*                   --*/
/*                 {% endif %}*/
/*               </td>*/
/*               <td>*/
/*                 {{ orderLog.createdTime|date('Y-n-d H:i')}}*/
/*                 <br>*/
/*                 <span class="text-muted text-sm">{{ orderLog.ip}}</span>*/
/*               </td>*/
/*             </tr>*/
/*           {% endfor %}*/
/*         </tbody>*/
/*       </table>*/
/*     {% else %}*/
/*       <div class="empty">暂无交易日志!</div>*/
/*     {% endif %}*/
/*   </div>*/
/*      */
/* </div>*/
