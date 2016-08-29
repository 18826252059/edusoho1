<?php

/* TopxiaAdminBundle:Coin:coin-orders.html.twig */
class __TwigTemplate_cf86c39de0640c6c9f41e8282a874dba3cc5e4d1cd4426e8ada8f8f674653711 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:Coin:coin-orders.html.twig", 1);
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
        $context["menu"] = "admin_coin_orders";
        // line 5
        $context["script_controller"] = "manage/list";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "
  <form id=\"coin-orders-search-form\" class=\"form-inline well well-sm\" action=\"\" method=\"get\" novalidate>
    <div class=\"mbm\">
    <div class=\"form-group\">
      <label class=\"ptm\" >创建时间:</label>
        <input class=\"form-control\" type=\"text\" id=\"startDate\" name=\"startDateTime\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "get", array(0 => "startDateTime"), "method"), "html", null, true);
        echo "\" placeholder=\"起始时间\">
        -
        <input class=\"form-control\" type=\"text\" id=\"endDate\" name=\"endDateTime\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "get", array(0 => "endDateTime"), "method"), "html", null, true);
        echo "\" placeholder=\"结束时间\">
    </div>
    </div>
    <div class=\"mbm\">
    <div class=\"form-group\">
     <label class=\"ptm\" >筛选条件:</label>
      <select class=\"form-control\" name=\"status\">
        ";
        // line 22
        echo $this->env->getExtension('topxia_html_twig')->selectOptions(array("paid" => "已支付", "created" => "未付款", "cancelled" => "已取消"), $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "get", array(0 => "status"), "method"), "订单状态");
        echo "
      </select>
      <select class=\"form-control\" name=\"payment\">
        ";
        // line 25
        echo $this->env->getExtension('topxia_html_twig')->selectOptions($this->env->getExtension('topxia_web_twig')->getDict("payment"), $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "payment"), "method"), "支付方式");
        echo "
      </select>
    </div>
   

    <div class=\"form-group\">
     <label class=\"ptm\" >关键词:</label>
        <select class=\"form-control\" name=\"keywordType\">
        ";
        // line 33
        echo $this->env->getExtension('topxia_html_twig')->selectOptions($this->env->getExtension('topxia_web_twig')->getDict("coinOrderType"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "keywordType"), "method"), "--选择类型--");
        echo "
        </select>
  
    <input type=\"text\" id=\"keyword\" name=\"keyword\" class=\"form-control\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "keyword"), "method"), "html", null, true);
        echo "\" placeholder=\"关键词\">
    </div>

    <button class=\"btn btn-primary\">搜索</button>
    <a class=\"btn btn-primary\" href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_order_manage_export_coin_csv", array("startTime" => $this->getAttribute(        // line 41
(isset($context["request"]) ? $context["request"] : null), "get", array(0 => "startDateTime"), "method"), "endTime" => $this->getAttribute(        // line 42
(isset($context["request"]) ? $context["request"] : null), "get", array(0 => "endDateTime"), "method"), "status" => $this->getAttribute(        // line 43
(isset($context["request"]) ? $context["request"] : null), "get", array(0 => "status"), "method"), "payment" => $this->getAttribute(        // line 44
(isset($context["request"]) ? $context["request"] : null), "get", array(0 => "payment"), "method"), "keywordType" => $this->getAttribute(        // line 45
(isset($context["request"]) ? $context["request"] : null), "get", array(0 => "keywordType"), "method"), "keyword" => $this->getAttribute(        // line 46
(isset($context["request"]) ? $context["request"] : null), "get", array(0 => "keyword"), "method"))), "html", null, true);
        // line 47
        echo "\">导出结果</a>
     </div>
  </form>

  ";
        // line 51
        $this->loadTemplate("TopxiaWebBundle:Coin:coin-table.html.twig", "TopxiaAdminBundle:Coin:coin-orders.html.twig", 51)->display($context);
        // line 52
        echo "
  <div class=\"paginator\">
    ";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo " 
  </div>


";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Coin:coin-orders.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 54,  104 => 52,  102 => 51,  96 => 47,  94 => 46,  93 => 45,  92 => 44,  91 => 43,  90 => 42,  89 => 41,  88 => 40,  81 => 36,  75 => 33,  64 => 25,  58 => 22,  48 => 15,  43 => 13,  36 => 8,  33 => 7,  29 => 1,  27 => 5,  25 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaAdminBundle::layout.html.twig' %}*/
/* */
/* {% set menu = 'admin_coin_orders' %}*/
/* */
/* {% set script_controller = 'manage/list' %}*/
/* */
/* {% block main %}*/
/* */
/*   <form id="coin-orders-search-form" class="form-inline well well-sm" action="" method="get" novalidate>*/
/*     <div class="mbm">*/
/*     <div class="form-group">*/
/*       <label class="ptm" >创建时间:</label>*/
/*         <input class="form-control" type="text" id="startDate" name="startDateTime" value="{{request.get('startDateTime')}}" placeholder="起始时间">*/
/*         -*/
/*         <input class="form-control" type="text" id="endDate" name="endDateTime" value="{{request.get('endDateTime')}}" placeholder="结束时间">*/
/*     </div>*/
/*     </div>*/
/*     <div class="mbm">*/
/*     <div class="form-group">*/
/*      <label class="ptm" >筛选条件:</label>*/
/*       <select class="form-control" name="status">*/
/*         {{ select_options({ paid: '已支付',created:'未付款',cancelled:'已取消'}, request.get('status'), '订单状态') }}*/
/*       </select>*/
/*       <select class="form-control" name="payment">*/
/*         {{ select_options(dict('payment'), app.request.get('payment'), '支付方式') }}*/
/*       </select>*/
/*     </div>*/
/*    */
/* */
/*     <div class="form-group">*/
/*      <label class="ptm" >关键词:</label>*/
/*         <select class="form-control" name="keywordType">*/
/*         {{ select_options(dict('coinOrderType'), app.request.query.get('keywordType'), '--选择类型--') }}*/
/*         </select>*/
/*   */
/*     <input type="text" id="keyword" name="keyword" class="form-control" value="{{ app.request.query.get('keyword') }}" placeholder="关键词">*/
/*     </div>*/
/* */
/*     <button class="btn btn-primary">搜索</button>*/
/*     <a class="btn btn-primary" href="{{ path('admin_order_manage_export_coin_csv',*/
/*     {startTime:request.get('startDateTime'),*/
/*     endTime:request.get('endDateTime'),*/
/*     status:request.get('status'),*/
/*     payment:request.get('payment'),*/
/*     keywordType:request.get('keywordType'),*/
/*     keyword:request.get('keyword')*/
/*     })}}">导出结果</a>*/
/*      </div>*/
/*   </form>*/
/* */
/*   {% include 'TopxiaWebBundle:Coin:coin-table.html.twig'  %}*/
/* */
/*   <div class="paginator">*/
/*     {{ web_macro.paginator(paginator) }} */
/*   </div>*/
/* */
/* */
/* {% endblock %}*/
