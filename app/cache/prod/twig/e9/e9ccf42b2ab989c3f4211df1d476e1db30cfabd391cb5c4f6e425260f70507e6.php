<?php

/* TopxiaWebBundle:Coin:coin-table.html.twig */
class __TwigTemplate_0a66bbef4a46bec30efdce04f573432ed13fcdf3ac4aef52bbd6d66defc46e0b extends Twig_Template
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
        $context["web_macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "TopxiaWebBundle:Coin:coin-table.html.twig", 2);
        // line 3
        if ($this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_enabled")) {
            // line 4
            echo "<table class=\"table table-striped table-hover\" id=\"order-table\">
  <thead>
    <tr>
      <th>名称</th>
      <th>创建时间</th>
      <th>状态</th>
      <th>价格<small class=\"text-muted\">(元)</small></th>
      <th>购买者</th>
      <th>支付方式</th>
      
      ";
            // line 15
            echo "    </tr>
  </thead>
  <tbody>
  ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["orders"]) ? $context["orders"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 19
                echo "    <tr style=\"word-break: break-all;word-wrap: break-word;\">
      <td ><strong>";
                // line 20
                echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "title", array()), "html", null, true);
                echo "</strong>
        <br>
        <span class=\"text-muted text-sm\">订单号：";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "sn", array()), "html", null, true);
                echo "</span>
      </td>
       <td>
        <span class=\"text-muted text-sm\">";
                // line 25
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["order"], "createdTime", array()), "Y-m-d H:i:s"), "html", null, true);
                echo "</span>
      </td> 
      <td>
      ";
                // line 28
                echo $this->env->getExtension('topxia_web_twig')->getDictText("orderStatus:html", $this->getAttribute($context["order"], "status", array()));
                echo "
      </td>
      <td>
        <span class=\"money-text\">";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "amount", array()), "html", null, true);
                echo "</span>
      </td> 
      <td>
        <a target=\"_blank\" href=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($context["order"], "userId", array()))), "html", null, true);
                echo "\">
        ";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["order"], "userId", array()), array(), "array"), "nickname", array()), "html", null, true);
                echo "</a>
      </td>
      <td>
        ";
                // line 38
                echo $this->env->getExtension('topxia_web_twig')->getDictText("payment", $this->getAttribute($context["order"], "payment", array()));
                echo "
        <br>
        <span class=\"text-muted text-sm\">";
                // line 40
                if ($this->getAttribute($context["order"], "paidTime", array())) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["order"], "paidTime", array()), "Y-m-d H:i:s"), "html", null, true);
                } else {
                    echo "-";
                }
                echo "</span>
      </td>
     
    ";
                // line 46
                echo "    </tr>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "  </tbody>
</table>
";
        } else {
            // line 51
            echo "<div class=\"well\" style=\"text-align:center;\">
虚拟币未开启，请先在<a href=\"";
            // line 52
            echo $this->env->getExtension('routing')->getPath("admin_coin_model");
            echo "\"> 系统-账务设置-虚拟币-使用方式  </a>中设置开启
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Coin:coin-table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 52,  116 => 51,  111 => 48,  104 => 46,  94 => 40,  89 => 38,  83 => 35,  79 => 34,  73 => 31,  67 => 28,  61 => 25,  55 => 22,  50 => 20,  47 => 19,  43 => 18,  38 => 15,  26 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }
}
/*     */
/* {% import "TopxiaWebBundle::macro.html.twig" as web_macro %}*/
/* {% if setting('coin.coin_enabled') %}*/
/* <table class="table table-striped table-hover" id="order-table">*/
/*   <thead>*/
/*     <tr>*/
/*       <th>名称</th>*/
/*       <th>创建时间</th>*/
/*       <th>状态</th>*/
/*       <th>价格<small class="text-muted">(元)</small></th>*/
/*       <th>购买者</th>*/
/*       <th>支付方式</th>*/
/*       */
/*       {# <th>查看</th> #}*/
/*     </tr>*/
/*   </thead>*/
/*   <tbody>*/
/*   {% for order in orders %}*/
/*     <tr style="word-break: break-all;word-wrap: break-word;">*/
/*       <td ><strong>{{order.title}}</strong>*/
/*         <br>*/
/*         <span class="text-muted text-sm">订单号：{{order.sn}}</span>*/
/*       </td>*/
/*        <td>*/
/*         <span class="text-muted text-sm">{{order.createdTime|date('Y-m-d H:i:s')}}</span>*/
/*       </td> */
/*       <td>*/
/*       {{ dict_text('orderStatus:html', order.status) }}*/
/*       </td>*/
/*       <td>*/
/*         <span class="money-text">{{order.amount}}</span>*/
/*       </td> */
/*       <td>*/
/*         <a target="_blank" href="{{ path('user_show', {id:order.userId}) }}">*/
/*         {{users[order.userId].nickname}}</a>*/
/*       </td>*/
/*       <td>*/
/*         {{dict_text('payment',order.payment)}}*/
/*         <br>*/
/*         <span class="text-muted text-sm">{% if order.paidTime %}{{order.paidTime|date('Y-m-d H:i:s')}}{% else %}-{% endif %}</span>*/
/*       </td>*/
/*      */
/*     {#           <td>*/
/*         <a href="javascript:;" class="btn btn-sm btn-default" data-toggle="modal" data-target="#modal" data-url="{{path('admin_coin_orders_log',{id:order.id})}}">详情</a>*/
/*       </td> #}*/
/*     </tr>*/
/*   {% endfor %}*/
/*   </tbody>*/
/* </table>*/
/* {% else %}*/
/* <div class="well" style="text-align:center;">*/
/* 虚拟币未开启，请先在<a href="{{ path('admin_coin_model') }}"> 系统-账务设置-虚拟币-使用方式  </a>中设置开启*/
/* </div>*/
/* {% endif %}*/
