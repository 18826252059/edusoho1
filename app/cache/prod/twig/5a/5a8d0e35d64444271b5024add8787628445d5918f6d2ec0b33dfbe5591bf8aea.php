<?php

/* TopxiaAdminBundle:Coin:coin-user-records.html.twig */
class __TwigTemplate_69c5379cc1d7fd163e8ca31975aa1212e0ab7bdc882925328f61273d23b6b401 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:Coin:coin-user-records.html.twig", 1);
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
        $context["menu"] = "admin_coin_user";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        // line 6
        echo "
  ";
        // line 7
        if ($this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_enabled")) {
            // line 8
            echo "    <form id=\"coin-orders-search-form\" class=\"form-inline well well-sm\" action=\"\" method=\"get\" novalidate>

        <input value=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["condition"]) ? $context["condition"] : null), "type", array()), "html", null, true);
            echo "\" name=\"flowType\" type=\"hidden\"/>
        <input value=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["condition"]) ? $context["condition"] : null), "timeType", array()), "html", null, true);
            echo "\" name=\"timeType\" type=\"hidden\"/>
        <div class=\"form-group\">
          <select class=\"form-control\" name=\"searchType\"> 
               ";
            // line 14
            $context["options"] = array("nickname" => "用户名", "email" => "邮件地址");
            // line 15
            echo "            ";
            echo $this->env->getExtension('topxia_html_twig')->selectOptions((isset($context["options"]) ? $context["options"] : null), $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "searchType"), "method"));
            echo " 
          </select> 
        </div>

        <div class=\"form-group\">
            <input type=\"text\" id=\"keyword\" name=\"keyword\" class=\"form-control\" value=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "keyword"), "method"), "html", null, true);
            echo "\" placeholder=\"关键词\">
        </div>

      <button class=\"btn btn-primary\">搜索</button>
    </form>
    
    <div class=\"well\">
      <div>
      时间：

          <a type=\"button\" class=\"btn btn-default btn-sm ";
            // line 30
            if (((($this->getAttribute((isset($context["condition"]) ? $context["condition"] : null), "timeType", array()) != "threeMonths") && ($this->getAttribute((isset($context["condition"]) ? $context["condition"] : null), "timeType", array()) != "oneMonth")) && ($this->getAttribute((isset($context["condition"]) ? $context["condition"] : null), "timeType", array()) != "all"))) {
                echo "btn-info";
            }
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_coin_user_records", array("timeType" => "oneWeek", "searchType" => $this->getAttribute((isset($context["condition"]) ? $context["condition"] : null), "searchType", array()), "keyword" => $this->getAttribute((isset($context["condition"]) ? $context["condition"] : null), "keyword", array()))), "html", null, true);
            echo "\">本周</a>

          <a type=\"button\" class=\"btn btn-default btn-sm ";
            // line 32
            if (($this->getAttribute((isset($context["condition"]) ? $context["condition"] : null), "timeType", array()) == "oneMonth")) {
                echo "btn-info";
            }
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_coin_user_records", array("timeType" => "oneMonth", "searchType" => $this->getAttribute((isset($context["condition"]) ? $context["condition"] : null), "searchType", array()), "keyword" => $this->getAttribute((isset($context["condition"]) ? $context["condition"] : null), "keyword", array()))), "html", null, true);
            echo "\">本月</a>


          <a type=\"button\" class=\"btn btn-default btn-sm ";
            // line 35
            if (($this->getAttribute((isset($context["condition"]) ? $context["condition"] : null), "timeType", array()) == "threeMonths")) {
                echo "btn-info";
            }
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_coin_user_records", array("timeType" => "threeMonths", "searchType" => $this->getAttribute((isset($context["condition"]) ? $context["condition"] : null), "searchType", array()), "keyword" => $this->getAttribute((isset($context["condition"]) ? $context["condition"] : null), "keyword", array()))), "html", null, true);
            echo "\">三个月</a>

          <a type=\"button\" class=\"btn btn-default btn-sm ";
            // line 37
            if (($this->getAttribute((isset($context["condition"]) ? $context["condition"] : null), "timeType", array()) == "all")) {
                echo "btn-info";
            }
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_coin_user_records", array("timeType" => "all", "searchType" => $this->getAttribute((isset($context["condition"]) ? $context["condition"] : null), "searchType", array()), "keyword" => $this->getAttribute((isset($context["condition"]) ? $context["condition"] : null), "keyword", array()))), "html", null, true);
            echo "\">全部历史</a>

      <span class=\"mll\"></sapn>
      类型：

          <a type=\"button\" class=\"btn btn-default btn-sm ";
            // line 42
            if ((($this->getAttribute((isset($context["condition"]) ? $context["condition"] : null), "flowType", array()) != "out") && ($this->getAttribute((isset($context["condition"]) ? $context["condition"] : null), "flowType", array()) != "in"))) {
                echo "btn-info";
            }
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_coin_user_records", array("flowType" => "", "timeType" => $this->getAttribute((isset($context["condition"]) ? $context["condition"] : null), "timeType", array()), "sort" => $this->getAttribute((isset($context["condition"]) ? $context["condition"] : null), "sort", array()))), "html", null, true);
            echo "\">默认</a>

          <a type=\"button\" class=\"btn btn-default btn-sm ";
            // line 44
            if (($this->getAttribute((isset($context["condition"]) ? $context["condition"] : null), "flowType", array()) == "out")) {
                echo "btn-info";
            }
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_coin_user_records", array("flowType" => "out", "timeType" => $this->getAttribute((isset($context["condition"]) ? $context["condition"] : null), "timeType", array()), "sort" => $this->getAttribute((isset($context["condition"]) ? $context["condition"] : null), "sort", array()))), "html", null, true);
            echo "\">消费</a>


          <a type=\"button\" class=\"btn btn-default btn-sm ";
            // line 47
            if (($this->getAttribute((isset($context["condition"]) ? $context["condition"] : null), "flowType", array()) == "in")) {
                echo "btn-info";
            }
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_coin_user_records", array("flowType" => "in", "timeType" => $this->getAttribute((isset($context["condition"]) ? $context["condition"] : null), "timeType", array()), "sort" => $this->getAttribute((isset($context["condition"]) ? $context["condition"] : null), "sort", array()))), "html", null, true);
            echo "\">充值</a>

        <span class=\"mll\"></sapn>
        排序：

          <a type=\"button\" class=\"btn btn-default btn-sm ";
            // line 52
            if (($this->getAttribute((isset($context["condition"]) ? $context["condition"] : null), "sort", array()) == "up")) {
                echo "btn-info";
            }
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_coin_user_records", array("flowType" => $this->getAttribute((isset($context["condition"]) ? $context["condition"] : null), "flowType", array()), "timeType" => $this->getAttribute((isset($context["condition"]) ? $context["condition"] : null), "timeType", array()), "sort" => "up")), "html", null, true);
            echo "\">升序</a>

          <a type=\"button\" class=\"btn btn-default btn-sm ";
            // line 54
            if (($this->getAttribute((isset($context["condition"]) ? $context["condition"] : null), "sort", array()) == "down")) {
                echo "btn-info";
            }
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_coin_user_records", array("flowType" => $this->getAttribute((isset($context["condition"]) ? $context["condition"] : null), "flowType", array()), "timeType" => $this->getAttribute((isset($context["condition"]) ? $context["condition"] : null), "timeType", array()), "sort" => "down")), "html", null, true);
            echo "\">降序</a>

      </div>
    </div>

    <div class=\"table-responsive\">
      <table class=\"table table-striped\">
        <tr>
          <th width=\"30%\">用户</th>
          <th>充值 
          </th>
          <th>消费
          </a></th>
          <th>账户余额</th>
          <th>操作</th>
        </tr>

        ";
            // line 71
            if ((isset($context["userIds"]) ? $context["userIds"] : null)) {
                // line 72
                echo "          ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["userIds"]) ? $context["userIds"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["userId"]) {
                    // line 73
                    echo "             <tr>
              <td> ";
                    // line 74
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "user_link", array(0 => $this->getAttribute((isset($context["users"]) ? $context["users"] : null), $context["userId"], array(), "array"), 1 => "link-muted"), "method"), "html", null, true);
                    echo "</td>
              <td style=\"color:#1bb974;\"> ";
                    // line 75
                    echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getInCash($context["userId"], $this->getAttribute((isset($context["condition"]) ? $context["condition"] : null), "timeType", array())), "0.00"), "html", null, true);
                    echo "</td>
              <td style=\"color:#ff7b0e;\"> ";
                    // line 76
                    echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getOutCash($context["userId"], $this->getAttribute((isset($context["condition"]) ? $context["condition"] : null), "timeType", array())), "0.00"), "html", null, true);
                    echo "</td>
              <td style=\"color:blue;\"> ";
                    // line 77
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->env->getExtension('topxia_web_twig')->getAccount($context["userId"]), "cash", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->env->getExtension('topxia_web_twig')->getAccount($context["userId"]), "cash", array()), 0)) : (0)), "html", null, true);
                    echo "</td>
              <td>
                <a  class= ";
                    // line 79
                    if ($this->env->getExtension('topxia_web_twig')->getAccount($context["userId"])) {
                        echo " \"btn btn-default\"  ";
                    } else {
                        echo " \"btn btn-default disabled\"  ";
                    }
                    echo " data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_coin_flow_detail", array("userId" => $context["userId"], "timeType" => $this->getAttribute((isset($context["condition"]) ? $context["condition"] : null), "timeType", array()))), "html", null, true);
                    echo "\" href=\"javascript:;\">查看</a>
              </td>
            </tr>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['userId'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 83
                echo "        ";
            }
            // line 84
            echo "       
      </table>
      ";
            // line 86
            if ( !(isset($context["userIds"]) ? $context["userIds"] : null)) {
                echo " <div class=\"empty\">暂无记录</div>";
            }
            // line 87
            echo "      ";
            if (((array_key_exists("paginator", $context)) ? (_twig_default_filter((isset($context["paginator"]) ? $context["paginator"] : null), null)) : (null))) {
                // line 88
                echo "      ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
                echo "
      ";
            }
            // line 90
            echo "    </div>

";
        } else {
            // line 93
            echo "<div class=\"well\" style=\"text-align:center;\">


虚拟币未开启，请先在<a href=\"";
            // line 96
            echo $this->env->getExtension('routing')->getPath("admin_coin_model");
            echo "\"> 系统-账务设置-虚拟币-使用方式  </a>中设置开启

</div>
";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Coin:coin-user-records.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  254 => 96,  249 => 93,  244 => 90,  238 => 88,  235 => 87,  231 => 86,  227 => 84,  224 => 83,  208 => 79,  203 => 77,  199 => 76,  195 => 75,  191 => 74,  188 => 73,  183 => 72,  181 => 71,  157 => 54,  148 => 52,  136 => 47,  126 => 44,  117 => 42,  105 => 37,  96 => 35,  86 => 32,  77 => 30,  64 => 20,  55 => 15,  53 => 14,  47 => 11,  43 => 10,  39 => 8,  37 => 7,  34 => 6,  31 => 5,  27 => 1,  25 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaAdminBundle::layout.html.twig' %}*/
/* */
/* {% set menu = 'admin_coin_user' %}*/
/* */
/* {% block main %}*/
/* */
/*   {% if setting('coin.coin_enabled')  %}*/
/*     <form id="coin-orders-search-form" class="form-inline well well-sm" action="" method="get" novalidate>*/
/* */
/*         <input value="{{condition.type}}" name="flowType" type="hidden"/>*/
/*         <input value="{{condition.timeType}}" name="timeType" type="hidden"/>*/
/*         <div class="form-group">*/
/*           <select class="form-control" name="searchType"> */
/*                {% set options = {'nickname':'用户名','email':'邮件地址'} %}*/
/*             {{ select_options(options, app.request.get('searchType')) }} */
/*           </select> */
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*             <input type="text" id="keyword" name="keyword" class="form-control" value="{{ app.request.query.get('keyword') }}" placeholder="关键词">*/
/*         </div>*/
/* */
/*       <button class="btn btn-primary">搜索</button>*/
/*     </form>*/
/*     */
/*     <div class="well">*/
/*       <div>*/
/*       时间：*/
/* */
/*           <a type="button" class="btn btn-default btn-sm {% if condition.timeType != "threeMonths" and  condition.timeType != "oneMonth" and  condition.timeType != "all" %}btn-info{% endif %}" href="{{path('admin_coin_user_records',{timeType:"oneWeek",searchType:condition.searchType,keyword:condition.keyword})}}">本周</a>*/
/* */
/*           <a type="button" class="btn btn-default btn-sm {% if condition.timeType == "oneMonth" %}btn-info{% endif %}" href="{{path('admin_coin_user_records',{timeType:"oneMonth",searchType:condition.searchType,keyword:condition.keyword})}}">本月</a>*/
/* */
/* */
/*           <a type="button" class="btn btn-default btn-sm {% if condition.timeType == "threeMonths" %}btn-info{% endif %}" href="{{path('admin_coin_user_records',{timeType:"threeMonths",searchType:condition.searchType,keyword:condition.keyword})}}">三个月</a>*/
/* */
/*           <a type="button" class="btn btn-default btn-sm {% if condition.timeType == "all" %}btn-info{% endif %}" href="{{path('admin_coin_user_records',{timeType:"all",searchType:condition.searchType,keyword:condition.keyword})}}">全部历史</a>*/
/* */
/*       <span class="mll"></sapn>*/
/*       类型：*/
/* */
/*           <a type="button" class="btn btn-default btn-sm {% if condition.flowType != "out" and  condition.flowType != "in" %}btn-info{% endif %}" href="{{path('admin_coin_user_records',{flowType:"",timeType:condition.timeType,sort:condition.sort})}}">默认</a>*/
/* */
/*           <a type="button" class="btn btn-default btn-sm {% if condition.flowType == "out" %}btn-info{% endif %}" href="{{path('admin_coin_user_records',{flowType:"out",timeType:condition.timeType,sort:condition.sort})}}">消费</a>*/
/* */
/* */
/*           <a type="button" class="btn btn-default btn-sm {% if condition.flowType == "in" %}btn-info{% endif %}" href="{{path('admin_coin_user_records',{flowType:"in",timeType:condition.timeType,sort:condition.sort})}}">充值</a>*/
/* */
/*         <span class="mll"></sapn>*/
/*         排序：*/
/* */
/*           <a type="button" class="btn btn-default btn-sm {% if condition.sort == "up"  %}btn-info{% endif %}" href="{{path('admin_coin_user_records',{flowType:condition.flowType,timeType:condition.timeType,sort:"up"})}}">升序</a>*/
/* */
/*           <a type="button" class="btn btn-default btn-sm {% if condition.sort == "down"  %}btn-info{% endif %}" href="{{path('admin_coin_user_records',{flowType:condition.flowType,timeType:condition.timeType,sort:"down"})}}">降序</a>*/
/* */
/*       </div>*/
/*     </div>*/
/* */
/*     <div class="table-responsive">*/
/*       <table class="table table-striped">*/
/*         <tr>*/
/*           <th width="30%">用户</th>*/
/*           <th>充值 */
/*           </th>*/
/*           <th>消费*/
/*           </a></th>*/
/*           <th>账户余额</th>*/
/*           <th>操作</th>*/
/*         </tr>*/
/* */
/*         {% if userIds %}*/
/*           {% for userId in userIds %}*/
/*              <tr>*/
/*               <td> {{ web_macro.user_link(users[userId] , 'link-muted') }}</td>*/
/*               <td style="color:#1bb974;"> {{userInCash(userId,condition.timeType)|default("0.00")}}</td>*/
/*               <td style="color:#ff7b0e;"> {{userOutCash(userId,condition.timeType)|default("0.00")}}</td>*/
/*               <td style="color:blue;"> {{userAccount(userId).cash|default(0)}}</td>*/
/*               <td>*/
/*                 <a  class= {% if userAccount(userId) %} "btn btn-default"  {% else %} "btn btn-default disabled"  {% endif %} data-toggle="modal" data-target="#modal" data-url="{{path('admin_coin_flow_detail',{userId:userId,timeType:condition.timeType})}}" href="javascript:;">查看</a>*/
/*               </td>*/
/*             </tr>*/
/*           {% endfor %}*/
/*         {% endif %}*/
/*        */
/*       </table>*/
/*       {% if not userIds %} <div class="empty">暂无记录</div>{% endif %}*/
/*       {% if paginator|default(null) %}*/
/*       {{ web_macro.paginator(paginator) }}*/
/*       {% endif %}*/
/*     </div>*/
/* */
/* {% else %}*/
/* <div class="well" style="text-align:center;">*/
/* */
/* */
/* 虚拟币未开启，请先在<a href="{{ path('admin_coin_model') }}"> 系统-账务设置-虚拟币-使用方式  </a>中设置开启*/
/* */
/* </div>*/
/* {% endif %}*/
/* {% endblock %}*/
