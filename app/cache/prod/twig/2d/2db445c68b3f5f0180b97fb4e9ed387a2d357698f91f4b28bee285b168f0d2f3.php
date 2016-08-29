<?php

/* TopxiaWebBundle:Coin:index.html.twig */
class __TwigTemplate_c5d7e14f964bff269689dc5b6635287965250ae34861bb5b9aef49331501306b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:Coin:layout.html.twig", "TopxiaWebBundle:Coin:index.html.twig", 1);
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
        // line 4
        $context["side_nav"] = "my-coin";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "我的";
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_name"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        // line 7
        echo "  <div class=\"es-section h400\">
    ";
        // line 8
        $this->loadTemplate("TopxiaWebBundle:Coin:bill-bar.html.twig", "TopxiaWebBundle:Coin:index.html.twig", 8)->display($context);
        // line 9
        echo "    <span class=\"label label-primary label-md\">账户余额</span>
    ";
        // line 10
        if ($this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_content")) {
            // line 11
            echo "      <a href=\"/coin/show\" target=\"_blank\" class=\"pull-right\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_name"), "html", null, true);
            echo "说明</a>
    ";
        }
        // line 13
        echo "    <br>
    <div class=\"coin-block clearfix\">
      <div class=\"coin-text\">
        ";
        // line 16
        if ($this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_picture")) {
            // line 17
            echo "          <img class=\"coin-picture\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_picture")), "html", null, true);
            echo "\" alt=\"虚拟币图片\" width=\"30px\" >
        ";
        }
        // line 19
        echo "        <strong>";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["account"]) ? $context["account"] : null), "cash", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["account"]) ? $context["account"] : null), "cash", array()), 0)) : (0)), "html", null, true);
        echo "</strong>
      </div>

      ";
        // line 22
        if ($this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_enabled")) {
            // line 23
            echo "        <div class=\"coin-btn\">
          ";
            // line 24
            if (($this->env->getExtension('topxia_web_twig')->isPluginInstalled("ChargeCoin") && $this->env->getExtension('topxia_web_twig')->getSetting("coin.charge_coin_enabled"))) {
                // line 25
                echo "            <a href=\"";
                echo $this->env->getExtension('routing')->getPath("my_coin_buy");
                echo "\" target=\"_blank\" class=\"mll btn btn-primary\"> &nbsp;&nbsp;充&nbsp;值&nbsp;&nbsp; </a>
          ";
            }
            // line 27
            echo "          ";
            if ($this->env->getExtension('topxia_web_twig')->isPluginInstalled("MoneyCard")) {
                // line 28
                echo "            <a href=\"";
                echo $this->env->getExtension('routing')->getPath("money_card_use");
                echo "\" target=\"_blank\" class=\"mll btn btn-default\">使用学习卡</a>
          ";
            }
            // line 30
            echo "        </div>
      ";
        }
        // line 32
        echo "    </div>
    <hr>
    <ul class=\"nav nav-pills\" role=\"tablist\">
      <li role=\"presentation\" ";
        // line 35
        if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "type"), "method") != "inflow") && ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "type"), "method") != "outflow"))) {
            echo "class=\"active\"";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('routing')->getPath("my_coin", array("type" => ""));
        echo "\">全部记录</a></li>
      <li role=\"presentation\" ";
        // line 36
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "type"), "method") == "inflow")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('routing')->getPath("my_coin", array("type" => "inflow"));
        echo "\">充值记录</a></li>
      <li role=\"presentation\" ";
        // line 37
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "type"), "method") == "outflow")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('routing')->getPath("my_coin", array("type" => "outflow"));
        echo "\">消费记录</a></li>
    </ul>
    <br>
    <form id=\"user-search-form\" class=\"form-inline well well-sm clearfix\" action=\"\" method=\"get\" novalidate> 
      <div class=\"form-group\"> 
        <input type=\"hidden\" name=\"type\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "type"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "type"), "method"), "")) : ("")), "html", null, true);
        echo "\">
        <select class=\"form-control\" name=\"lastHowManyMonths\" onchange=\"submit();\"> 
          ";
        // line 44
        $context["options"] = array("" => "全部记录", "oneWeek" => "最近一周", "twoWeeks" => "最近两周", "oneMonth" => "最近一个月", "twoMonths" => "最近两个月", "threeMonths" => "最近三个月");
        // line 45
        echo "          ";
        echo $this->env->getExtension('topxia_html_twig')->selectOptions((isset($context["options"]) ? $context["options"] : null), $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "lastHowManyMonths"), "method"));
        echo " 
        </select> 
      </div> 

      <div class=\"control-label pull-right\" style=\"padding-top: 8px;\">
        ";
        // line 50
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "type"), "method") != "outflow")) {
            // line 51
            echo "          收入：<span style=\"color:#1bb974;\">";
            echo twig_escape_filter($this->env, (isset($context["amountInflow"]) ? $context["amountInflow"] : null), "html", null, true);
            echo "</span>&nbsp;";
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_name"), "html", null, true);
            echo "
        ";
        }
        // line 53
        echo "        ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "type"), "method") != "inflow")) {
            // line 54
            echo "          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          支出：<span style=\"color:#ff7b0e;\">";
            // line 55
            echo twig_escape_filter($this->env, (isset($context["amountOutflow"]) ? $context["amountOutflow"] : null), "html", null, true);
            echo "</span>&nbsp;";
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_name"), "html", null, true);
            echo "
        ";
        }
        // line 57
        echo "      </div>
    </form>
    <br>
    <div class=\"table-responsive\">
      <table class=\"table table-striped\">
        ";
        // line 62
        if ((isset($context["cashes"]) ? $context["cashes"] : null)) {
            // line 63
            echo "        <tr>
          <th><span class=\"text-sm\">流水号</span></th>
          <th><span class=\"text-sm\">名称</span></th>          
          <th><span class=\"text-sm\">成交时间</span></th>          
          <th class=\"text-right\" style=\"padding-right: 60px;\"><span class=\"text-sm\">收支</span></th>
          <th><span class=\"text-sm\">支付方式</span></th>
        </tr>
        ";
            // line 70
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["cashes"]) ? $context["cashes"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["cash"]) {
                // line 71
                echo "          <tr>
            <td><span class=\"text-sm\">";
                // line 72
                echo twig_escape_filter($this->env, $this->getAttribute($context["cash"], "sn", array()), "html", null, true);
                echo "</span></td>
            <td><span class=\"text-sm\">";
                // line 73
                echo twig_escape_filter($this->env, $this->getAttribute($context["cash"], "name", array()), "html", null, true);
                echo "</span><br>
                <span class=\"text-muted text-sm\">订单号：";
                // line 74
                echo twig_escape_filter($this->env, $this->getAttribute($context["cash"], "orderSn", array()), "html", null, true);
                echo "</span></td>            
            <td><span class=\"text-sm\">";
                // line 75
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["cash"], "createdTime", array()), "Y-m-d H:i:s"), "html", null, true);
                echo "</span></td>

            ";
                // line 77
                if (($this->getAttribute($context["cash"], "type", array()) == "inflow")) {
                    // line 78
                    echo "            <td class=\"text-right\" style=\"color:#1bb974;padding-right: 50px;\">
               ";
                    // line 79
                    echo twig_escape_filter($this->env, $this->getAttribute($context["cash"], "amount", array()), "html", null, true);
                    echo " 
            </td>
            ";
                }
                // line 82
                echo "            ";
                if (($this->getAttribute($context["cash"], "type", array()) == "outflow")) {
                    // line 83
                    echo "            <td  class=\"text-right\" style=\"color:#ff7b0e;padding-right: 50px;\">
               -&nbsp;";
                    // line 84
                    echo twig_escape_filter($this->env, $this->getAttribute($context["cash"], "amount", array()), "html", null, true);
                    echo "               
            </td>
            ";
                }
                // line 87
                echo "
            <td>
              <span class=\"text-sm\">
                ";
                // line 90
                if ((($this->getAttribute($context["cash"], "cashType", array()) == "Coin") && ($this->getAttribute($context["cash"], "category", array()) == "inflow"))) {
                    // line 91
                    echo "                学习卡充值
                ";
                } elseif ((($this->getAttribute(                // line 92
$context["cash"], "cashType", array()) == "Coin") && ($this->getAttribute($context["cash"], "category", array()) == "change"))) {
                    // line 93
                    echo "                  ";
                    echo $this->env->getExtension('topxia_web_twig')->getDictText("payment", $this->getAttribute($context["cash"], "payment", array()));
                    echo "
                ";
                } elseif (($this->getAttribute(                // line 94
$context["cash"], "category", array()) == "moneyCardRecharge")) {
                    // line 95
                    echo "                学习卡
                ";
                } else {
                    // line 97
                    echo "                余额支付             
                ";
                }
                // line 99
                echo "              </span>
            </td>
          </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cash'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 103
            echo "        ";
        } else {
            // line 104
            echo "          <div class=\"empty\">暂无记录</div>
        ";
        }
        // line 106
        echo "      </table>
    </div>
    <nav class=\"text-center\">
      ";
        // line 109
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo "
    </nav>
  </div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Coin:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  291 => 109,  286 => 106,  282 => 104,  279 => 103,  270 => 99,  266 => 97,  262 => 95,  260 => 94,  255 => 93,  253 => 92,  250 => 91,  248 => 90,  243 => 87,  237 => 84,  234 => 83,  231 => 82,  225 => 79,  222 => 78,  220 => 77,  215 => 75,  211 => 74,  207 => 73,  203 => 72,  200 => 71,  196 => 70,  187 => 63,  185 => 62,  178 => 57,  171 => 55,  168 => 54,  165 => 53,  157 => 51,  155 => 50,  146 => 45,  144 => 44,  139 => 42,  127 => 37,  119 => 36,  111 => 35,  106 => 32,  102 => 30,  96 => 28,  93 => 27,  87 => 25,  85 => 24,  82 => 23,  80 => 22,  73 => 19,  67 => 17,  65 => 16,  60 => 13,  54 => 11,  52 => 10,  49 => 9,  47 => 8,  44 => 7,  41 => 6,  32 => 2,  28 => 1,  26 => 4,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle:Coin:layout.html.twig' %}*/
/* {% block title %}我的{{setting('coin.coin_name')}} - {{ parent() }}{% endblock %}*/
/* */
/* {% set side_nav = 'my-coin' %}*/
/* */
/* {% block main %}*/
/*   <div class="es-section h400">*/
/*     {% include 'TopxiaWebBundle:Coin:bill-bar.html.twig' %}*/
/*     <span class="label label-primary label-md">账户余额</span>*/
/*     {% if setting('coin.coin_content') %}*/
/*       <a href="/coin/show" target="_blank" class="pull-right">{{setting('coin.coin_name')}}说明</a>*/
/*     {% endif %}*/
/*     <br>*/
/*     <div class="coin-block clearfix">*/
/*       <div class="coin-text">*/
/*         {% if setting('coin.coin_picture') %}*/
/*           <img class="coin-picture" src="{{asset(setting('coin.coin_picture')) }}" alt="虚拟币图片" width="30px" >*/
/*         {% endif %}*/
/*         <strong>{{account.cash|default(0)}}</strong>*/
/*       </div>*/
/* */
/*       {% if setting('coin.coin_enabled') %}*/
/*         <div class="coin-btn">*/
/*           {% if is_plugin_installed('ChargeCoin') and setting('coin.charge_coin_enabled') %}*/
/*             <a href="{{path('my_coin_buy')}}" target="_blank" class="mll btn btn-primary"> &nbsp;&nbsp;充&nbsp;值&nbsp;&nbsp; </a>*/
/*           {% endif %}*/
/*           {% if is_plugin_installed('MoneyCard') %}*/
/*             <a href="{{path('money_card_use')}}" target="_blank" class="mll btn btn-default">使用学习卡</a>*/
/*           {% endif %}*/
/*         </div>*/
/*       {% endif %}*/
/*     </div>*/
/*     <hr>*/
/*     <ul class="nav nav-pills" role="tablist">*/
/*       <li role="presentation" {% if app.request.query.get('type') != "inflow" and app.request.query.get('type') != "outflow" %}class="active"{% endif %}><a href="{{path('my_coin',{type:''})}}">全部记录</a></li>*/
/*       <li role="presentation" {% if app.request.query.get('type') == "inflow" %}class="active"{% endif %}><a href="{{path('my_coin',{type:'inflow'})}}">充值记录</a></li>*/
/*       <li role="presentation" {% if app.request.query.get('type') == "outflow" %}class="active"{% endif %}><a href="{{path('my_coin',{type:'outflow'})}}">消费记录</a></li>*/
/*     </ul>*/
/*     <br>*/
/*     <form id="user-search-form" class="form-inline well well-sm clearfix" action="" method="get" novalidate> */
/*       <div class="form-group"> */
/*         <input type="hidden" name="type" value="{{ app.request.query.get('type')|default('') }}">*/
/*         <select class="form-control" name="lastHowManyMonths" onchange="submit();"> */
/*           {% set options = {'':'全部记录','oneWeek':'最近一周','twoWeeks':'最近两周','oneMonth':'最近一个月','twoMonths':'最近两个月','threeMonths':'最近三个月'} %}*/
/*           {{ select_options(options, app.request.get('lastHowManyMonths')) }} */
/*         </select> */
/*       </div> */
/* */
/*       <div class="control-label pull-right" style="padding-top: 8px;">*/
/*         {% if app.request.query.get('type') != "outflow"  %}*/
/*           收入：<span style="color:#1bb974;">{{ amountInflow }}</span>&nbsp;{{setting('coin.coin_name')}}*/
/*         {% endif %}*/
/*         {% if app.request.query.get('type') != "inflow"  %}*/
/*           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/
/*           支出：<span style="color:#ff7b0e;">{{ amountOutflow }}</span>&nbsp;{{setting('coin.coin_name')}}*/
/*         {% endif %}*/
/*       </div>*/
/*     </form>*/
/*     <br>*/
/*     <div class="table-responsive">*/
/*       <table class="table table-striped">*/
/*         {% if cashes %}*/
/*         <tr>*/
/*           <th><span class="text-sm">流水号</span></th>*/
/*           <th><span class="text-sm">名称</span></th>          */
/*           <th><span class="text-sm">成交时间</span></th>          */
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
/* */
/*             <td>*/
/*               <span class="text-sm">*/
/*                 {% if cash.cashType == "Coin" and cash.category == "inflow" %}*/
/*                 学习卡充值*/
/*                 {% elseif cash.cashType == "Coin" and cash.category == "change" %}*/
/*                   {{ dict_text('payment', cash.payment) }}*/
/*                 {% elseif cash.category == "moneyCardRecharge" %}*/
/*                 学习卡*/
/*                 {% else %}*/
/*                 余额支付             */
/*                 {% endif %}*/
/*               </span>*/
/*             </td>*/
/*           </tr>*/
/*         {% endfor %}*/
/*         {% else %}*/
/*           <div class="empty">暂无记录</div>*/
/*         {% endif %}*/
/*       </table>*/
/*     </div>*/
/*     <nav class="text-center">*/
/*       {{ web_macro.paginator(paginator) }}*/
/*     </nav>*/
/*   </div>*/
/* {% endblock %}*/
