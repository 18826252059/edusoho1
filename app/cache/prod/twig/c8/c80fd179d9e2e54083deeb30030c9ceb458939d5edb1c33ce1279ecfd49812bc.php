<?php

/* TopxiaAdminBundle:Coin:coin-records.html.twig */
class __TwigTemplate_f4594b9eaa5cb52e699af8a82d61c3ccf8a56bbea0b97b8b811dfd11066c369c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:Coin:coin-records.html.twig", 1);
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
        $context["menu"] = "admin_coin_records";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        // line 6
        echo "
    <form id=\"coin-orders-search-form\" class=\"form-inline well well-sm\" action=\"\" method=\"get\" novalidate>

        <div class=\"form-group\"> 
          <select class=\"form-control\" name=\"type\" onchange=\"submit();\"> 
               ";
        // line 11
        $context["options"] = array("inflow" => "充值记录", "outflow" => "消费记录", "" => "全部记录");
        // line 12
        echo "            ";
        echo $this->env->getExtension('topxia_html_twig')->selectOptions((isset($context["options"]) ? $context["options"] : null), $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "type"), "method"));
        echo " 
          </select> 
        </div> 
        <div class=\"form-group\"> 
          <select class=\"form-control\" name=\"createdTime\" onchange=\"submit();\"> 
               ";
        // line 17
        $context["options"] = array("oneWeek" => "最近一周", "oneMonth" => "最近一个月", "threeMonths" => "最近三个月", "all" => "全部记录");
        // line 18
        echo "            ";
        echo $this->env->getExtension('topxia_html_twig')->selectOptions((isset($context["options"]) ? $context["options"] : null), $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "createdTime"), "method"));
        echo " 
          </select> 
        </div> 

        <div class=\"form-group\">
            <select class=\"form-control\" name=\"keywordType\">
          ";
        // line 24
        echo $this->env->getExtension('topxia_html_twig')->selectOptions($this->env->getExtension('topxia_web_twig')->getDict("coinRecordType"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "keywordType"), "method"), "--选择类型--");
        echo "
        </select>
        </div>

        <div class=\"form-group\">
            <input type=\"text\" id=\"keyword\" name=\"keyword\" class=\"form-control\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "keyword"), "method"), "html", null, true);
        echo "\" placeholder=\"关键词\">
        </div>

      <button class=\"btn btn-primary\">搜索</button>
      <a class=\"btn btn-primary\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_bill_export_csv", array("cashType" =>         // line 34
(isset($context["cashType"]) ? $context["cashType"] : null), "createdTime" => $this->getAttribute($this->getAttribute(        // line 35
(isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "createdTime"), "method"), "type" => $this->getAttribute($this->getAttribute(        // line 36
(isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "type"), "method"), "keywordType" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 37
(isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "keywordType"), "method"), "keyword" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 38
(isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "keyword"), "method"))), "html", null, true);
        // line 39
        echo "\">导出结果</a>
    </form>
  
    <p class=\"text-muted\">
      <span class=\"mrl\">网校余额：<strong class=\"amount-num\">";
        // line 43
        echo twig_escape_filter($this->env, ((array_key_exists("amounts", $context)) ? (_twig_default_filter((isset($context["amounts"]) ? $context["amounts"] : null), 0)) : (0)), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_name"), "html", null, true);
        echo "</span>
      <span class=\"mrl\">充值：<strong class=\"inflow-num\">";
        // line 44
        echo twig_escape_filter($this->env, ((array_key_exists("inflow", $context)) ? (_twig_default_filter((isset($context["inflow"]) ? $context["inflow"] : null), 0)) : (0)), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_name"), "html", null, true);
        echo "</span>
      <span class=\"mrl\">消费：<strong class=\"outflow-num\">";
        // line 45
        echo twig_escape_filter($this->env, ((array_key_exists("outflow", $context)) ? (_twig_default_filter((isset($context["outflow"]) ? $context["outflow"] : null), 0)) : (0)), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_name"), "html", null, true);
        echo "</span>
    </p>
    <div class=\"table-responsive\">
      <table class=\"table table-striped\">
        <tr>
          <th>流水号</th>
          <th>名称</th>
          <th>用户</th>
          <th>成交时间</th>
          <th class=\"text-right\" style=\"padding-right: 50px;\">收支</th>
        </tr>

       ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cashes"]) ? $context["cashes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["cash"]) {
            // line 58
            echo "       <tr>
            <td>";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["cash"], "sn", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["cash"], "name", array()), "html", null, true);
            echo "<br>
                <span class=\"text-muted text-sm\">订单号：";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["cash"], "orderSn", array()), "html", null, true);
            echo "</span></td>
            <td>   <a target=\"_blank\" href=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($context["cash"], "userId", array()))), "html", null, true);
            echo "\">
            ";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["cash"], "userId", array()), array(), "array"), "nickname", array()), "html", null, true);
            echo "</a></td>
            <td>";
            // line 64
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["cash"], "createdTime", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "</td>     
            ";
            // line 65
            if (($this->getAttribute($context["cash"], "type", array()) == "inflow")) {
                // line 66
                echo "            <td class=\"text-right\" style=\"color:#1bb974;padding-right: 50px;\">
               ";
                // line 67
                echo twig_escape_filter($this->env, $this->getAttribute($context["cash"], "amount", array()), "html", null, true);
                echo " 
            </td>
            ";
            }
            // line 70
            echo "            ";
            if (($this->getAttribute($context["cash"], "type", array()) == "outflow")) {
                // line 71
                echo "            <td  class=\"text-right\" style=\"color:#ff7b0e;padding-right: 50px;\">
               -&nbsp;";
                // line 72
                echo twig_escape_filter($this->env, $this->getAttribute($context["cash"], "amount", array()), "html", null, true);
                echo "               
            </td>
            ";
            }
            // line 75
            echo "       </tr>
       ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cash'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "      </table>
    </div>
 ";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo "

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Coin:coin-records.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 79,  182 => 77,  175 => 75,  169 => 72,  166 => 71,  163 => 70,  157 => 67,  154 => 66,  152 => 65,  148 => 64,  144 => 63,  140 => 62,  136 => 61,  132 => 60,  128 => 59,  125 => 58,  121 => 57,  104 => 45,  98 => 44,  92 => 43,  86 => 39,  84 => 38,  83 => 37,  82 => 36,  81 => 35,  80 => 34,  79 => 33,  72 => 29,  64 => 24,  54 => 18,  52 => 17,  43 => 12,  41 => 11,  34 => 6,  31 => 5,  27 => 1,  25 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaAdminBundle::layout.html.twig' %}*/
/* */
/* {% set menu = 'admin_coin_records' %}*/
/* */
/* {% block main %}*/
/* */
/*     <form id="coin-orders-search-form" class="form-inline well well-sm" action="" method="get" novalidate>*/
/* */
/*         <div class="form-group"> */
/*           <select class="form-control" name="type" onchange="submit();"> */
/*                {% set options = {'inflow':'充值记录','outflow':'消费记录','':'全部记录'} %}*/
/*             {{ select_options(options, app.request.get('type')) }} */
/*           </select> */
/*         </div> */
/*         <div class="form-group"> */
/*           <select class="form-control" name="createdTime" onchange="submit();"> */
/*                {% set options = {'oneWeek':'最近一周','oneMonth':'最近一个月','threeMonths':'最近三个月','all':'全部记录',} %}*/
/*             {{ select_options(options, app.request.get('createdTime')) }} */
/*           </select> */
/*         </div> */
/* */
/*         <div class="form-group">*/
/*             <select class="form-control" name="keywordType">*/
/*           {{ select_options(dict('coinRecordType'), app.request.query.get('keywordType'), '--选择类型--') }}*/
/*         </select>*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*             <input type="text" id="keyword" name="keyword" class="form-control" value="{{ app.request.query.get('keyword') }}" placeholder="关键词">*/
/*         </div>*/
/* */
/*       <button class="btn btn-primary">搜索</button>*/
/*       <a class="btn btn-primary" href="{{ path('admin_bill_export_csv',{*/
/*       cashType:cashType,*/
/*       createdTime:app.request.get('createdTime'),*/
/*       type:app.request.get('type'),      */
/*       keywordType:app.request.query.get('keywordType'),*/
/*       keyword:app.request.query.get('keyword'),*/
/*       })}}">导出结果</a>*/
/*     </form>*/
/*   */
/*     <p class="text-muted">*/
/*       <span class="mrl">网校余额：<strong class="amount-num">{{amounts|default(0)}}</strong> {{ setting('coin.coin_name') }}</span>*/
/*       <span class="mrl">充值：<strong class="inflow-num">{{inflow|default(0)}}</strong> {{ setting('coin.coin_name') }}</span>*/
/*       <span class="mrl">消费：<strong class="outflow-num">{{outflow|default(0)}}</strong> {{ setting('coin.coin_name') }}</span>*/
/*     </p>*/
/*     <div class="table-responsive">*/
/*       <table class="table table-striped">*/
/*         <tr>*/
/*           <th>流水号</th>*/
/*           <th>名称</th>*/
/*           <th>用户</th>*/
/*           <th>成交时间</th>*/
/*           <th class="text-right" style="padding-right: 50px;">收支</th>*/
/*         </tr>*/
/* */
/*        {% for cash in cashes %}*/
/*        <tr>*/
/*             <td>{{cash.sn}}</td>*/
/*             <td>{{cash.name}}<br>*/
/*                 <span class="text-muted text-sm">订单号：{{cash.orderSn}}</span></td>*/
/*             <td>   <a target="_blank" href="{{ path('user_show', {id:cash.userId}) }}">*/
/*             {{users[cash.userId].nickname}}</a></td>*/
/*             <td>{{cash.createdTime|date('Y-m-d H:i:s')}}</td>     */
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
/*        </tr>*/
/*        {% endfor %}*/
/*       </table>*/
/*     </div>*/
/*  {{ web_macro.paginator(paginator) }}*/
/* */
/* {% endblock %}*/
