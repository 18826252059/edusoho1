<?php

/* TopxiaWebBundle:MyOrder:index.html.twig */
class __TwigTemplate_04f5f6813ee3306b39b336e5e3f79549303b2ac8c65ad7309e37e8566e482999 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:MyOrder:layout.html.twig", "TopxiaWebBundle:MyOrder:index.html.twig", 1);
        $this->blocks = array(
            'main_body' => array($this, 'block_main_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:MyOrder:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["script_controller"] = "my/orders";
        // line 5
        $context["main_nav"] = "orders";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_main_body($context, array $blocks = array())
    {
        // line 8
        echo "  <ul class=\"nav nav-pills\" role=\"tablist\">
    <li role=\"presentation\" ";
        // line 9
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "status"), "method") == "")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('routing')->getPath("my_orders", array("status" => ""));
        echo "\">全部订单</a></li>
    <li role=\"presentation\" ";
        // line 10
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "status"), "method") == "created")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('routing')->getPath("my_orders", array("status" => "created"));
        echo "\">待付款<span class=\"badge\">";
        echo twig_escape_filter($this->env, (isset($context["waitToBePaidCount"]) ? $context["waitToBePaidCount"] : null), "html", null, true);
        echo "</span></a></li>
    <li role=\"presentation\" ";
        // line 11
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "status"), "method") == "paid")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('routing')->getPath("my_orders", array("status" => "paid"));
        echo "\">已付款</a></li>
  </ul>
  <br>
  <form id=\"user-search-form\" class=\"form-inline well well-sm\" action=\"\" method=\"get\" novalidate>
    <input type=\"hidden\" name=\"status\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "status"), "method"), "html", null, true);
        echo "\"> 
    <div class=\"form-group\">
      <select class=\"form-control\" name=\"lastHowManyMonths\"  onchange=\"submit();\" >
        ";
        // line 18
        $context["options"] = array("oneWeek" => "最近一周", "twoWeeks" => "最近两周", "oneMonth" => "最近一个月", "twoMonths" => "最近两个月", "threeMonths" => "最近三个月", "" => "全部记录");
        // line 19
        echo "        ";
        echo $this->env->getExtension('topxia_html_twig')->selectOptions((isset($context["options"]) ? $context["options"] : null), $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "get", array(0 => "lastHowManyMonths"), "method"));
        echo "
      </select>
    </div>
    <div class=\"form-group\">
      <select class=\"form-control\" name=\"payWays\"  onchange=\"submit();\" >

        ";
        // line 25
        $context["options"] = array("alipay" => "支付宝", "wxpay" => "微信支付", "heepay" => "网银支付", "quickpay" => "快捷支付", "none" => "其他支付", "" => "支付方式");
        // line 26
        echo "        ";
        echo $this->env->getExtension('topxia_html_twig')->selectOptions((isset($context["options"]) ? $context["options"] : null), $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "get", array(0 => "payWays"), "method"));
        echo "
      </select>
    </div>
  </form>
  <div class=\"table-responsive\">
    <table class=\"table table-striped table-hover\" id=\"orders-table\">
      ";
        // line 32
        $this->loadTemplate("TopxiaWebBundle:Order:order-table.html.twig", "TopxiaWebBundle:MyOrder:index.html.twig", 32)->display(array_merge($context, array("mode" => "my")));
        // line 33
        echo "    </table>
  </div>
";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:MyOrder:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 35,  100 => 33,  98 => 32,  88 => 26,  86 => 25,  76 => 19,  74 => 18,  68 => 15,  57 => 11,  47 => 10,  39 => 9,  36 => 8,  33 => 7,  29 => 1,  27 => 5,  25 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle:MyOrder:layout.html.twig' %}*/
/* */
/* {% set script_controller = 'my/orders' %}*/
/* */
/* {% set main_nav = 'orders' %}*/
/* */
/* {% block main_body %}*/
/*   <ul class="nav nav-pills" role="tablist">*/
/*     <li role="presentation" {% if app.request.query.get('status')=='' %}class="active"{% endif %}><a href="{{path('my_orders',{status:''})}}">全部订单</a></li>*/
/*     <li role="presentation" {% if app.request.query.get('status')=='created' %}class="active"{% endif %}><a href="{{path('my_orders',{status:'created'})}}">待付款<span class="badge">{{waitToBePaidCount}}</span></a></li>*/
/*     <li role="presentation" {% if app.request.query.get('status')=='paid' %}class="active"{% endif %}><a href="{{path('my_orders',{status:'paid'})}}">已付款</a></li>*/
/*   </ul>*/
/*   <br>*/
/*   <form id="user-search-form" class="form-inline well well-sm" action="" method="get" novalidate>*/
/*     <input type="hidden" name="status" value="{{app.request.query.get('status')}}"> */
/*     <div class="form-group">*/
/*       <select class="form-control" name="lastHowManyMonths"  onchange="submit();" >*/
/*         {% set options = {'oneWeek':'最近一周','twoWeeks':'最近两周','oneMonth':'最近一个月','twoMonths':'最近两个月','threeMonths':'最近三个月','':'全部记录'} %}*/
/*         {{ select_options(options, request.get('lastHowManyMonths')) }}*/
/*       </select>*/
/*     </div>*/
/*     <div class="form-group">*/
/*       <select class="form-control" name="payWays"  onchange="submit();" >*/
/* */
/*         {% set options = {'alipay':'支付宝','wxpay':'微信支付','heepay':'网银支付','quickpay':'快捷支付','none':'其他支付','':'支付方式'} %}*/
/*         {{ select_options(options, request.get('payWays')) }}*/
/*       </select>*/
/*     </div>*/
/*   </form>*/
/*   <div class="table-responsive">*/
/*     <table class="table table-striped table-hover" id="orders-table">*/
/*       {% include 'TopxiaWebBundle:Order:order-table.html.twig' with {mode: 'my'} %}*/
/*     </table>*/
/*   </div>*/
/* {{ web_macro.paginator(paginator) }}*/
/* {% endblock %}*/
