<?php

/* TopxiaAdminBundle:Coin:cash-bill.html.twig */
class __TwigTemplate_35bebf6bcf46b4bc9904d5034ab457689cc687e20d873ec5f36fea44774e8ced extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:Coin:cash-bill.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["menu"] = "admin_cash_bill";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        // line 6
        echo "
    <form id=\"user-search-form\" class=\"form-inline well well-sm\" action=\"\" method=\"get\" novalidate>
      <div class=\"form-group\">
        <select class=\"form-control\" name=\"lastHowManyMonths\"  onchange=\"submit();\">
          ";
        // line 10
        $context["options"] = array("" => "全部记录", "oneWeek" => "最近一周", "twoWeeks" => "最近两周", "oneMonth" => "最近一个月", "twoMonths" => "最近两个月", "threeMonths" => "最近三个月");
        // line 11
        echo "          ";
        echo $this->env->getExtension('topxia_html_twig')->selectOptions((isset($context["options"]) ? $context["options"] : null), $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "lastHowManyMonths"), "method"));
        echo "
        </select>
      </div>
    <div class=\"form-group\">
        <input type=\"text\" id=\"nickname\" name=\"nickname\" class=\"form-control\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "nickname"), "method"), "html", null, true);
        echo "\" placeholder=\"用户名\">
    </div>

    <button class=\"btn btn-primary\">搜索</button>
    <a class=\"btn btn-primary\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_bill_export_csv", array("lastHowManyMonths" => $this->getAttribute($this->getAttribute(        // line 20
(isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "lastHowManyMonths"), "method"), "cashType" =>         // line 21
(isset($context["cashType"]) ? $context["cashType"] : null), "nickname" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 22
(isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "nickname"), "method"))), "html", null, true);
        // line 23
        echo "\">导出结果</a>

    </form>

    <p class=\"text-muted\">
      <span class=\"mrl\">收入：<strong class=\"inflow-num\">";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["amountInflow"]) ? $context["amountInflow"] : null), "html", null, true);
        echo "</strong> 元</span>
      <span class=\"mrl\">支出：<strong class=\"outflow-num\">";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["amountOutflow"]) ? $context["amountOutflow"] : null), "html", null, true);
        echo "</strong> 元</span>
    </p>

    <div class=\"table-responsive\">
      <table class=\"table table-striped\">
        ";
        // line 34
        if ((isset($context["cashes"]) ? $context["cashes"] : null)) {
            // line 35
            echo "        <tr>
          <th><span class=\"text-sm\">流水号</span></th>
          <th><span class=\"text-sm\">名称</span></th>  
          <th><span class=\"text-sm\">用户名</span></th>             
          <th><span class=\"text-sm\">成交时间</span></th>
          <th class=\"text-right\" style=\"padding-right: 60px;\"><span class=\"text-sm\">收支</span></th>
          
          <th><span class=\"text-sm\">支付方式</span></th>
        </tr>
        ";
            // line 44
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["cashes"]) ? $context["cashes"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["cash"]) {
                // line 45
                echo "           <tr>
            <td><span class=\"text-sm\">";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute($context["cash"], "sn", array()), "html", null, true);
                echo "</span></td>
            <td><span class=\"text-sm\">";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute($context["cash"], "name", array()), "html", null, true);
                echo "</span><br>
                <span class=\"text-muted text-sm\">订单号：";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute($context["cash"], "orderSn", array()), "html", null, true);
                echo "</span></td>
            <td><span class=\"text-sm\"><a href=\"";
                // line 49
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($context["cash"], "userId", array()))), "html", null, true);
                echo "\">
            ";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["cash"], "userId", array()), array(), "array"), "nickname", array()), "html", null, true);
                echo "</a></span></td>            
            <td><span class=\"text-sm\">";
                // line 51
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["cash"], "createdTime", array()), "Y-m-d H:i:s"), "html", null, true);
                echo "</span></td>

            ";
                // line 53
                if (($this->getAttribute($context["cash"], "type", array()) == "inflow")) {
                    // line 54
                    echo "            <td class=\"text-right\" style=\"color:#1bb974;padding-right: 50px;\">
               ";
                    // line 55
                    echo twig_escape_filter($this->env, $this->getAttribute($context["cash"], "amount", array()), "html", null, true);
                    echo " 
            </td>
            ";
                }
                // line 58
                echo "            ";
                if (($this->getAttribute($context["cash"], "type", array()) == "outflow")) {
                    // line 59
                    echo "            <td  class=\"text-right\" style=\"color:#ff7b0e;padding-right: 50px;\">
               -&nbsp;";
                    // line 60
                    echo twig_escape_filter($this->env, $this->getAttribute($context["cash"], "amount", array()), "html", null, true);
                    echo "               
            </td>
            ";
                }
                // line 63
                echo "           
            <td>
              <span class=\"text-sm\">
                ";
                // line 66
                if (($this->getAttribute($context["cash"], "type", array()) == "inflow")) {
                    // line 67
                    echo "                  ";
                    echo $this->env->getExtension('topxia_web_twig')->getDictText("payment", $this->getAttribute($context["cash"], "payment", array()));
                    echo "
                ";
                } else {
                    // line 69
                    echo "                  网校支付
                ";
                }
                // line 71
                echo "              </span>
            </td> 
          </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cash'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
            echo "        ";
        } else {
            // line 76
            echo "        <div class=\"empty\">暂无记录</div>
        ";
        }
        // line 78
        echo "      </table>
    </div>
 ";
        // line 80
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo "


";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Coin:cash-bill.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 80,  182 => 78,  178 => 76,  175 => 75,  166 => 71,  162 => 69,  156 => 67,  154 => 66,  149 => 63,  143 => 60,  140 => 59,  137 => 58,  131 => 55,  128 => 54,  126 => 53,  121 => 51,  117 => 50,  113 => 49,  109 => 48,  105 => 47,  101 => 46,  98 => 45,  94 => 44,  83 => 35,  81 => 34,  73 => 29,  69 => 28,  62 => 23,  60 => 22,  59 => 21,  58 => 20,  57 => 19,  50 => 15,  42 => 11,  40 => 10,  34 => 6,  31 => 5,  27 => 1,  25 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaAdminBundle::layout.html.twig' %}*/
/* */
/* {% set menu = 'admin_cash_bill' %}*/
/* */
/* {% block main %}*/
/* */
/*     <form id="user-search-form" class="form-inline well well-sm" action="" method="get" novalidate>*/
/*       <div class="form-group">*/
/*         <select class="form-control" name="lastHowManyMonths"  onchange="submit();">*/
/*           {% set options = {'':'全部记录','oneWeek':'最近一周','twoWeeks':'最近两周','oneMonth':'最近一个月','twoMonths':'最近两个月','threeMonths':'最近三个月'} %}*/
/*           {{ select_options(options, app.request.get('lastHowManyMonths')) }}*/
/*         </select>*/
/*       </div>*/
/*     <div class="form-group">*/
/*         <input type="text" id="nickname" name="nickname" class="form-control" value="{{ app.request.query.get('nickname') }}" placeholder="用户名">*/
/*     </div>*/
/* */
/*     <button class="btn btn-primary">搜索</button>*/
/*     <a class="btn btn-primary" href="{{ path('admin_bill_export_csv',{*/
/*     lastHowManyMonths:app.request.get('lastHowManyMonths'),*/
/*     cashType:cashType,*/
/*     nickname:app.request.query.get('nickname'),*/
/*     })}}">导出结果</a>*/
/* */
/*     </form>*/
/* */
/*     <p class="text-muted">*/
/*       <span class="mrl">收入：<strong class="inflow-num">{{ amountInflow }}</strong> 元</span>*/
/*       <span class="mrl">支出：<strong class="outflow-num">{{ amountOutflow }}</strong> 元</span>*/
/*     </p>*/
/* */
/*     <div class="table-responsive">*/
/*       <table class="table table-striped">*/
/*         {% if cashes %}*/
/*         <tr>*/
/*           <th><span class="text-sm">流水号</span></th>*/
/*           <th><span class="text-sm">名称</span></th>  */
/*           <th><span class="text-sm">用户名</span></th>             */
/*           <th><span class="text-sm">成交时间</span></th>*/
/*           <th class="text-right" style="padding-right: 60px;"><span class="text-sm">收支</span></th>*/
/*           */
/*           <th><span class="text-sm">支付方式</span></th>*/
/*         </tr>*/
/*         {% for cash in cashes %}*/
/*            <tr>*/
/*             <td><span class="text-sm">{{cash.sn}}</span></td>*/
/*             <td><span class="text-sm">{{cash.name}}</span><br>*/
/*                 <span class="text-muted text-sm">订单号：{{cash.orderSn}}</span></td>*/
/*             <td><span class="text-sm"><a href="{{ path('user_show', {id:cash.userId}) }}">*/
/*             {{users[cash.userId].nickname}}</a></span></td>            */
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
/*         {% else %}*/
/*         <div class="empty">暂无记录</div>*/
/*         {% endif %}*/
/*       </table>*/
/*     </div>*/
/*  {{ web_macro.paginator(paginator) }}*/
/* */
/* */
/* {% endblock %}*/
