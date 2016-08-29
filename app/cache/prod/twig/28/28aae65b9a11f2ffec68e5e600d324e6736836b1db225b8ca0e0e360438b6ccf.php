<?php

/* TopxiaWebBundle:Order:order-table.html.twig */
class __TwigTemplate_98a603357e69173d8acf9489c067876f53329a269d25b24c74f26c8ccb87ded6 extends Twig_Template
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
        // line 7
        echo "
";
        // line 8
        $context["web_macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "TopxiaWebBundle:Order:order-table.html.twig", 8);
        // line 9
        echo "
";
        // line 10
        $context["mode"] = ((array_key_exists("mode", $context)) ? (_twig_default_filter((isset($context["mode"]) ? $context["mode"] : null), array(0 => "my"))) : (array(0 => "my")));
        // line 11
        echo "  <thead>
    <tr>
      <th>名称</th>
      <th>创建时间</th>
      <th>状态</th>
      <th>实付(元)</th>
      ";
        // line 17
        if (twig_in_filter((isset($context["mode"]) ? $context["mode"] : null), array(0 => "course", 1 => "admin"))) {
            // line 18
            echo "        <th>购买者</th>
      ";
        }
        // line 20
        echo "      <th>支付方式</th>
      <th style=\"min-width:100px\">操作</th>
    </tr>
  </thead>
  <tbody>
    ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["orders"]) ? $context["orders"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
            // line 26
            echo "      ";
            $context["buyer"] = (($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["order"], "userId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["order"], "userId", array()), array(), "array"), null)) : (null));
            // line 27
            echo "        <tr id=\"order-table-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "id", array()), "html", null, true);
            echo "\" style=\"word-break: break-all;word-wrap: break-word;\">
          <td>
            ";
            // line 29
            if (($this->getAttribute($context["order"], "targetType", array()) == "course")) {
                // line 30
                echo "              <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($context["order"], "targetId", array()))), "html", null, true);
                echo "\" target=\"_blank\"><strong>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "title", array()), "html", null, true);
                echo "</strong></a>
            ";
            } elseif (($this->getAttribute(            // line 31
$context["order"], "targetType", array()) == "vip")) {
                // line 32
                echo "              <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vip", array("id" => $this->getAttribute($context["order"], "targetId", array()))), "html", null, true);
                echo "\" target=\"_blank\"><strong>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "title", array()), "html", null, true);
                echo "</strong></a>
            ";
            } elseif (($this->getAttribute(            // line 33
$context["order"], "targetType", array()) == "classroom")) {
                // line 34
                echo "              <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_show", array("id" => $this->getAttribute($context["order"], "targetId", array()))), "html", null, true);
                echo "\" target=\"_blank\"><strong>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "title", array()), "html", null, true);
                echo "</strong></a>
            ";
            } else {
                // line 36
                echo "              <strong>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "title", array()), "html", null, true);
                echo "</strong>
            ";
            }
            // line 38
            echo "            <br>
            <span class=\"text-muted text-sm\">订单号：";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "sn", array()), "html", null, true);
            echo "</span>
          </td>
          <td><span class=\"text-muted text-sm\">";
            // line 41
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["order"], "createdTime", array()), "Y-n-d H:i:s"), "html", null, true);
            echo "</span></td>
          <td>";
            // line 42
            echo $this->env->getExtension('topxia_web_twig')->getDictText("orderStatus:html", $this->getAttribute($context["order"], "status", array()));
            echo "</td>
          <td><span class=\"money-text\">";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "amount", array()), "html", null, true);
            echo "</span></td>
          ";
            // line 44
            if (twig_in_filter((isset($context["mode"]) ? $context["mode"] : null), array(0 => "admin", 1 => "course"))) {
                // line 45
                echo "            <td>
              ";
                // line 46
                echo $context["web_macro"]->getuser_link((isset($context["buyer"]) ? $context["buyer"] : null));
                echo "
            </td>
          ";
            }
            // line 49
            echo "          <td>
            ";
            // line 50
            if (($this->getAttribute($context["order"], "paidTime", array()) > 0)) {
                // line 51
                echo "              ";
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getDictText("payment", $this->getAttribute($context["order"], "payment", array())), "--"), "html", null, true);
                echo "
              <br>
              <span class=\"text-muted text-sm\">";
                // line 53
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["order"], "paidTime", array()), "Y-n-d H:i:s"), "html", null, true);
                echo "</span>
            ";
            } else {
                // line 55
                echo "              --
            ";
            }
            // line 57
            echo "          </td>
          <td>
            ";
            // line 59
            if (("admin" == (isset($context["mode"]) ? $context["mode"] : null))) {
                // line 60
                echo "                <a href=\"javascript:;\" class=\"btn btn-sm btn-default\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_order_detail", array("id" => $this->getAttribute($context["order"], "id", array()))), "html", null, true);
                echo "\">详情</a>
              ";
            }
            // line 62
            echo "            ";
            if (("course" == (isset($context["mode"]) ? $context["mode"] : null))) {
                // line 63
                echo "            <a href=\"javascript:;\" class=\"btn btn-sm btn-default\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_order_detail", array("id" => $this->getAttribute($context["order"], "id", array()))), "html", null, true);
                echo "\">详情</a>
            ";
            }
            // line 65
            echo "
            ";
            // line 66
            if (("my" == (isset($context["mode"]) ? $context["mode"] : null))) {
                // line 67
                echo "              <div class=\"btn-group\">
                <a href=\"javascript:;\" class=\"btn btn-sm btn-default\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
                // line 68
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("web_user_order_detail", array("id" => $this->getAttribute($context["order"], "id", array()))), "html", null, true);
                echo "\">详情</a> 
                ";
                // line 69
                if ((($this->getAttribute($context["order"], "status", array()) == "refunding") || ($this->getAttribute($context["order"], "status", array()) == "created"))) {
                    // line 70
                    echo "                  <a href=\"#\" type=\"button\" class=\"btn btn-default btn-sm dropdown-toggle\" data-toggle=\"dropdown\">
                  <span class=\"caret\"></span>
                  </a>
                  <ul class=\"dropdown-menu pull-right ";
                    // line 73
                    echo "\" style=\"min-width: 120px;\" > 

                  ";
                    // line 76
                    echo "                    ";
                    if (($this->getAttribute($context["order"], "status", array()) == "refunding")) {
                        // line 77
                        echo "                      <li><a href=\"javascript:;\" class=\"cancel-refund\" data-url=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("my_order_cancel_refund", array("id" => $this->getAttribute($context["order"], "id", array()))), "html", null, true);
                        echo "\">取消退款</a></li>
                    ";
                    }
                    // line 79
                    echo "                    ";
                    if (($this->getAttribute($context["order"], "status", array()) == "created")) {
                        // line 80
                        echo "
                      <li>
                        <a href=\"";
                        // line 82
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pay_center_show", array("sn" => $this->getAttribute($context["order"], "sn", array()), "targetType" => $this->getAttribute($context["order"], "targetType", array()))), "html", null, true);
                        echo "\"  style=\"display:block\" >去支付</a>
                      </li>
                      <li><a href=\"javascript:;\" class=\" cancel\" style=\"display:block\" data-url=\"";
                        // line 84
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("my_order_cancel", array("id" => $this->getAttribute($context["order"], "id", array()))), "html", null, true);
                        echo "\">取消订单</a></li>

                    ";
                    }
                    // line 87
                    echo "                   ";
                    // line 88
                    echo "                  </ul>
                ";
                }
                // line 90
                echo "              </div>
            ";
            }
            // line 92
            echo "          </td>
        </tr>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 95
            echo "      <tr><td colspan=\"20\"><div class=\"empty\">暂无订单记录</div></td></tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "  </tbody>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Order:order-table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  244 => 97,  237 => 95,  230 => 92,  226 => 90,  222 => 88,  220 => 87,  214 => 84,  209 => 82,  205 => 80,  202 => 79,  196 => 77,  193 => 76,  189 => 73,  184 => 70,  182 => 69,  178 => 68,  175 => 67,  173 => 66,  170 => 65,  164 => 63,  161 => 62,  155 => 60,  153 => 59,  149 => 57,  145 => 55,  140 => 53,  134 => 51,  132 => 50,  129 => 49,  123 => 46,  120 => 45,  118 => 44,  114 => 43,  110 => 42,  106 => 41,  101 => 39,  98 => 38,  92 => 36,  84 => 34,  82 => 33,  75 => 32,  73 => 31,  66 => 30,  64 => 29,  58 => 27,  55 => 26,  50 => 25,  43 => 20,  39 => 18,  37 => 17,  29 => 11,  27 => 10,  24 => 9,  22 => 8,  19 => 7,);
    }
}
/* {# */
/*     mode的取值有:*/
/*       my:该模式下不显示购买者*/
/*       admin:该模式下详情无下拉菜单 */
/*       course:该模式下详情无下拉菜单*/
/* #}*/
/* */
/* {% import "TopxiaWebBundle::macro.html.twig" as web_macro %}*/
/* */
/* {% set mode = mode|default(['my']) %}*/
/*   <thead>*/
/*     <tr>*/
/*       <th>名称</th>*/
/*       <th>创建时间</th>*/
/*       <th>状态</th>*/
/*       <th>实付(元)</th>*/
/*       {% if mode in ['course', 'admin'] %}*/
/*         <th>购买者</th>*/
/*       {% endif %}*/
/*       <th>支付方式</th>*/
/*       <th style="min-width:100px">操作</th>*/
/*     </tr>*/
/*   </thead>*/
/*   <tbody>*/
/*     {% for order in orders %}*/
/*       {% set buyer = users[order.userId]|default(null) %}*/
/*         <tr id="order-table-{{order.id}}" style="word-break: break-all;word-wrap: break-word;">*/
/*           <td>*/
/*             {% if order.targetType == 'course' %}*/
/*               <a href="{{ path('course_show', {id:order.targetId}) }}" target="_blank"><strong>{{order.title}}</strong></a>*/
/*             {% elseif order.targetType == 'vip' %}*/
/*               <a href="{{ path('vip', {id:order.targetId}) }}" target="_blank"><strong>{{order.title}}</strong></a>*/
/*             {% elseif order.targetType == 'classroom' %}*/
/*               <a href="{{ path('classroom_show', {id:order.targetId}) }}" target="_blank"><strong>{{order.title}}</strong></a>*/
/*             {% else %}*/
/*               <strong>{{order.title}}</strong>*/
/*             {% endif %}*/
/*             <br>*/
/*             <span class="text-muted text-sm">订单号：{{order.sn}}</span>*/
/*           </td>*/
/*           <td><span class="text-muted text-sm">{{ order.createdTime|date('Y-n-d H:i:s') }}</span></td>*/
/*           <td>{{ dict_text('orderStatus:html', order.status) }}</td>*/
/*           <td><span class="money-text">{{order.amount}}</span></td>*/
/*           {% if mode in ['admin', 'course'] %}*/
/*             <td>*/
/*               {{ web_macro.user_link(buyer) }}*/
/*             </td>*/
/*           {% endif %}*/
/*           <td>*/
/*             {% if order.paidTime > 0 %}*/
/*               {{ dict_text('payment', order.payment)|default('--') }}*/
/*               <br>*/
/*               <span class="text-muted text-sm">{{ order.paidTime |date('Y-n-d H:i:s') }}</span>*/
/*             {% else %}*/
/*               --*/
/*             {% endif %}*/
/*           </td>*/
/*           <td>*/
/*             {% if 'admin' == mode  %}*/
/*                 <a href="javascript:;" class="btn btn-sm btn-default" data-toggle="modal" data-target="#modal" data-url="{{ path('admin_order_detail', {id:order.id}) }}">详情</a>*/
/*               {% endif %}*/
/*             {% if 'course' == mode %}*/
/*             <a href="javascript:;" class="btn btn-sm btn-default" data-toggle="modal" data-target="#modal" data-url="{{ path('course_order_detail', {id:order.id}) }}">详情</a>*/
/*             {% endif %}*/
/* */
/*             {% if 'my' == mode %}*/
/*               <div class="btn-group">*/
/*                 <a href="javascript:;" class="btn btn-sm btn-default" data-toggle="modal" data-target="#modal" data-url="{{ path('web_user_order_detail', {id:order.id}) }}">详情</a> */
/*                 {% if order.status == 'refunding' or  order.status == 'created' %}*/
/*                   <a href="#" type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">*/
/*                   <span class="caret"></span>*/
/*                   </a>*/
/*                   <ul class="dropdown-menu pull-right {# text-right #}" style="min-width: 120px;" > */
/* */
/*                   {# <div class="actions"> #}*/
/*                     {% if order.status == 'refunding' %}*/
/*                       <li><a href="javascript:;" class="cancel-refund" data-url="{{ path('my_order_cancel_refund', {id:order.id}) }}">取消退款</a></li>*/
/*                     {% endif %}*/
/*                     {% if order.status == 'created' %}*/
/* */
/*                       <li>*/
/*                         <a href="{{path('pay_center_show', {sn:order.sn,targetType:order.targetType})}}"  style="display:block" >去支付</a>*/
/*                       </li>*/
/*                       <li><a href="javascript:;" class=" cancel" style="display:block" data-url="{{ path('my_order_cancel', {id:order.id}) }}">取消订单</a></li>*/
/* */
/*                     {% endif %}*/
/*                    {#  </div> #}*/
/*                   </ul>*/
/*                 {% endif %}*/
/*               </div>*/
/*             {% endif %}*/
/*           </td>*/
/*         </tr>*/
/*     {% else %}*/
/*       <tr><td colspan="20"><div class="empty">暂无订单记录</div></td></tr>*/
/*     {% endfor %}*/
/*   </tbody>*/
/* */
