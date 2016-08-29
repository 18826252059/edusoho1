<?php

/* TopxiaWebBundle:Coin:cash_bill.html.twig */
class __TwigTemplate_2ece0332ebfbb51ad3d69532e8e106a70c09769cf371f9169a18fe784b4e485f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:Coin:layout.html.twig", "TopxiaWebBundle:Coin:cash_bill.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:Coin:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["side_nav"] = "my-bill";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "我的现金账单 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "<div class=\"es-section h400\">
  ";
        // line 9
        $this->loadTemplate("TopxiaWebBundle:Coin:bill-bar.html.twig", "TopxiaWebBundle:Coin:cash_bill.html.twig", 9)->display($context);
        // line 10
        echo "
  <form id=\"user-search-form\" class=\"form-inline well well-sm\" action=\"\" method=\"get\" novalidate>
    <div class=\"form-group\">
      <select class=\"form-control\" name=\"lastHowManyMonths\"  onchange=\"submit();\">
        ";
        // line 14
        $context["options"] = array("" => "全部记录", "oneWeek" => "最近一周", "twoWeeks" => "最近两周", "oneMonth" => "最近一个月", "twoMonths" => "最近两个月", "threeMonths" => "最近三个月");
        // line 15
        echo "        ";
        echo $this->env->getExtension('topxia_html_twig')->selectOptions((isset($context["options"]) ? $context["options"] : null), $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "lastHowManyMonths"), "method"));
        echo "
      </select>
    </div>

    ";
        // line 20
        echo "     <div class=\"control-label pull-right\" style=\"padding-top: 8px;\">
      收入：<span style=\"color:#1bb974;\">";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["amountInflow"]) ? $context["amountInflow"] : null), "html", null, true);
        echo "</span>&nbsp;元&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      支出：<span style=\"color:#ff7b0e;\">";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["amountOutflow"]) ? $context["amountOutflow"] : null), "html", null, true);
        echo "</span>&nbsp;元
      </div>
  </form>
  <br>
  <div class=\"table-responsive\">
    <table class=\"table table-striped\">
      ";
        // line 28
        if ((isset($context["cashes"]) ? $context["cashes"] : null)) {
            // line 29
            echo "        <tr>
          <th><span class=\"text-sm\">流水号</span></th>
          <th><span class=\"text-sm\">名称</span></th>          
          <th><span class=\"text-sm\">成交时间</span></th>
          <th class=\"text-right\" style=\"padding-right: 60px;\"><span class=\"text-sm\">收支</span></th>
          <th><span class=\"text-sm\">支付方式</span></th>
        </tr>
        ";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["cashes"]) ? $context["cashes"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["cash"]) {
                // line 37
                echo "          <tr>
            <td><span class=\"text-sm\">";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute($context["cash"], "sn", array()), "html", null, true);
                echo "</span></td>
            <td><span class=\"text-sm\">";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute($context["cash"], "name", array()), "html", null, true);
                echo "</span><br>
                <span class=\"text-muted text-sm\">订单号：";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute($context["cash"], "orderSn", array()), "html", null, true);
                echo "</span></td>            
            <td><span class=\"text-sm\">";
                // line 41
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["cash"], "createdTime", array()), "Y-m-d H:i:s"), "html", null, true);
                echo "</span></td>

            ";
                // line 43
                if (($this->getAttribute($context["cash"], "type", array()) == "inflow")) {
                    // line 44
                    echo "            <td class=\"text-right\" style=\"color:#1bb974;padding-right: 50px;\">
               ";
                    // line 45
                    echo twig_escape_filter($this->env, $this->getAttribute($context["cash"], "amount", array()), "html", null, true);
                    echo " 
            </td>
            ";
                }
                // line 48
                echo "            ";
                if (($this->getAttribute($context["cash"], "type", array()) == "outflow")) {
                    // line 49
                    echo "            <td  class=\"text-right\" style=\"color:#ff7b0e;padding-right: 50px;\">
               -&nbsp;";
                    // line 50
                    echo twig_escape_filter($this->env, $this->getAttribute($context["cash"], "amount", array()), "html", null, true);
                    echo "               
            </td>
            ";
                }
                // line 53
                echo "           
            <td>
              <span class=\"text-sm\">
                ";
                // line 56
                if (($this->getAttribute($context["cash"], "type", array()) == "inflow")) {
                    // line 57
                    echo "                  ";
                    echo $this->env->getExtension('topxia_web_twig')->getDictText("payment", $this->getAttribute($context["cash"], "payment", array()));
                    echo "
                ";
                } else {
                    // line 59
                    echo "                  网校支付
                ";
                }
                // line 61
                echo "              </span>
            </td> 
          </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cash'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "      ";
        } else {
            // line 66
            echo "      <div class=\"empty\">暂无记录</div>
      ";
        }
        // line 68
        echo "    </table>
  </div>
  <nav class=\"text-center\">
    ";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo "
  </nav>
</div>

";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Coin:cash_bill.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 71,  170 => 68,  166 => 66,  163 => 65,  154 => 61,  150 => 59,  144 => 57,  142 => 56,  137 => 53,  131 => 50,  128 => 49,  125 => 48,  119 => 45,  116 => 44,  114 => 43,  109 => 41,  105 => 40,  101 => 39,  97 => 38,  94 => 37,  90 => 36,  81 => 29,  79 => 28,  70 => 22,  66 => 21,  63 => 20,  55 => 15,  53 => 14,  47 => 10,  45 => 9,  42 => 8,  39 => 7,  32 => 3,  28 => 1,  26 => 5,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle:Coin:layout.html.twig' %}*/
/* */
/* {% block title %}我的现金账单 - {{ parent() }}{% endblock %}*/
/* */
/* {% set side_nav = 'my-bill' %}*/
/* */
/* {% block main %}*/
/* <div class="es-section h400">*/
/*   {% include 'TopxiaWebBundle:Coin:bill-bar.html.twig' %}*/
/* */
/*   <form id="user-search-form" class="form-inline well well-sm" action="" method="get" novalidate>*/
/*     <div class="form-group">*/
/*       <select class="form-control" name="lastHowManyMonths"  onchange="submit();">*/
/*         {% set options = {'':'全部记录','oneWeek':'最近一周','twoWeeks':'最近两周','oneMonth':'最近一个月','twoMonths':'最近两个月','threeMonths':'最近三个月'} %}*/
/*         {{ select_options(options, app.request.get('lastHowManyMonths')) }}*/
/*       </select>*/
/*     </div>*/
/* */
/*     {#<button class="btn btn-primary">搜索</button>#}*/
/*      <div class="control-label pull-right" style="padding-top: 8px;">*/
/*       收入：<span style="color:#1bb974;">{{ amountInflow }}</span>&nbsp;元&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/
/*       支出：<span style="color:#ff7b0e;">{{ amountOutflow }}</span>&nbsp;元*/
/*       </div>*/
/*   </form>*/
/*   <br>*/
/*   <div class="table-responsive">*/
/*     <table class="table table-striped">*/
/*       {% if cashes %}*/
/*         <tr>*/
/*           <th><span class="text-sm">流水号</span></th>*/
/*           <th><span class="text-sm">名称</span></th>          */
/*           <th><span class="text-sm">成交时间</span></th>*/
/*           <th class="text-right" style="padding-right: 60px;"><span class="text-sm">收支</span></th>*/
/*           <th><span class="text-sm">支付方式</span></th>*/
/*         </tr>*/
/*         {% for cash in cashes %}*/
/*           <tr>*/
/*             <td><span class="text-sm">{{cash.sn}}</span></td>*/
/*             <td><span class="text-sm">{{cash.name}}</span><br>*/
/*                 <span class="text-muted text-sm">订单号：{{cash.orderSn}}</span></td>            */
/*             <td><span class="text-sm">{{cash.createdTime|date('Y-m-d H:i:s')}}</span></td>*/
/* */
/*             {% if cash.type =="inflow" %}*/
/*             <td class="text-right" style="color:#1bb974;padding-right: 50px;">*/
/*                {{cash.amount}} */
/*             </td>*/
/*             {% endif %}*/
/*             {% if cash.type =="outflow" %}*/
/*             <td  class="text-right" style="color:#ff7b0e;padding-right: 50px;">*/
/*                -&nbsp;{{cash.amount}}               */
/*             </td>*/
/*             {% endif %}*/
/*            */
/*             <td>*/
/*               <span class="text-sm">*/
/*                 {% if cash.type =="inflow" %}*/
/*                   {{ dict_text('payment', cash.payment) }}*/
/*                 {% else %}*/
/*                   网校支付*/
/*                 {% endif %}*/
/*               </span>*/
/*             </td> */
/*           </tr>*/
/*         {% endfor %}*/
/*       {% else %}*/
/*       <div class="empty">暂无记录</div>*/
/*       {% endif %}*/
/*     </table>*/
/*   </div>*/
/*   <nav class="text-center">*/
/*     {{ web_macro.paginator(paginator) }}*/
/*   </nav>*/
/* </div>*/
/* */
/* {% endblock %}*/
