<?php

/* TopxiaAdminBundle:Order:manage.html.twig */
class __TwigTemplate_e23815213578c6573eae403587fab5e151626eabfd221dcc0b7f7cd9768c4983 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:Order:manage.html.twig", 1);
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
        // line 7
        $context["menu"] = (("admin_" . (isset($context["targetType"]) ? $context["targetType"] : null)) . "_order");
        // line 9
        $context["script_controller"] = "manage/list";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 11
    public function block_main($context, array $blocks = array())
    {
        // line 12
        echo "
  <form id=\"user-search-form\" class=\"form-inline well well-sm\" action=\"\" method=\"get\" novalidate>
    <div class=\"mbm\">
    <div class=\"form-group\">
      <label class=\"ptm\" >创建时间:</label>
        <input class=\"form-control\" type=\"text\" id=\"startDate\" name=\"startDateTime\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "get", array(0 => "startDateTime"), "method"), "html", null, true);
        echo "\" placeholder=\"起始时间\">
        -
        <input class=\"form-control\" type=\"text\" id=\"endDate\" name=\"endDateTime\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "get", array(0 => "endDateTime"), "method"), "html", null, true);
        echo "\" placeholder=\"结束时间\">
    </div>
    </div>
    <div class=\"mbm\">
    <div class=\"form-group\">
      <label class=\"ptm\" >筛选条件:</label>
        <select class=\"form-control\" name=\"status\">
          ";
        // line 26
        echo $this->env->getExtension('topxia_html_twig')->selectOptions($this->env->getExtension('topxia_web_twig')->getDict("orderStatus"), $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "get", array(0 => "status"), "method"), "订单状态");
        echo "
        </select>
  
      <select class=\"form-control\" name=\"payment\">
        ";
        // line 30
        echo $this->env->getExtension('topxia_html_twig')->selectOptions($this->env->getExtension('topxia_web_twig')->getDict("payment"), $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "get", array(0 => "payment"), "method"), "支付方式");
        echo "
      </select>
    </div> 
    <div class=\"form-group\" style=\"display:none;\">
      <input class=\"form-control\" type=\"text\" name=\"paidTimeRange\", placeholder=\"付款时间段\">
    </div>


    <div class=\"form-group\">
    <label class=\"ptm\" >关键词:</label>
      <select class=\"form-control\" name=\"keywordType\">
        ";
        // line 41
        $context["options"] = array("sn" => "订单号", "buyer" => "购买者用户名", "targetId" => ($this->env->getExtension('topxia_web_twig')->getDictText("targetName", (isset($context["targetType"]) ? $context["targetType"] : null)) . "编号"), "title" => ($this->env->getExtension('topxia_web_twig')->getDictText("targetName", (isset($context["targetType"]) ? $context["targetType"] : null)) . "名"));
        // line 42
        echo "        ";
        echo $this->env->getExtension('topxia_html_twig')->selectOptions((isset($context["options"]) ? $context["options"] : null), $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "get", array(0 => "keywordType"), "method"));
        echo "
      </select>

    <input class=\"form-control\" type=\"text\" name=\"keyword\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "get", array(0 => "keyword"), "method"), "html", null, true);
        echo "\" placeholder=\"关键词\">
    </div>

    <button class=\"btn btn-primary\">搜索</button>
    <a class=\"btn btn-primary\" href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_order_manage_export_csv", array("targetType" =>         // line 50
(isset($context["targetType"]) ? $context["targetType"] : null), "startTime" => $this->getAttribute(        // line 51
(isset($context["request"]) ? $context["request"] : null), "get", array(0 => "startDateTime"), "method"), "endTime" => $this->getAttribute(        // line 52
(isset($context["request"]) ? $context["request"] : null), "get", array(0 => "endDateTime"), "method"), "status" => $this->getAttribute(        // line 53
(isset($context["request"]) ? $context["request"] : null), "get", array(0 => "status"), "method"), "payment" => $this->getAttribute(        // line 54
(isset($context["request"]) ? $context["request"] : null), "get", array(0 => "payment"), "method"), "keywordType" => $this->getAttribute(        // line 55
(isset($context["request"]) ? $context["request"] : null), "get", array(0 => "keywordType"), "method"), "keyword" => $this->getAttribute(        // line 56
(isset($context["request"]) ? $context["request"] : null), "get", array(0 => "keyword"), "method"))), "html", null, true);
        // line 57
        echo "\">导出结果</a>
    </div>
  </form>

  <table class=\"table table-striped table-hover\" id=\"order-table\">
    ";
        // line 62
        $this->loadTemplate("TopxiaWebBundle:Order:order-table.html.twig", "TopxiaAdminBundle:Order:manage.html.twig", 62)->display(array_merge($context, array("mode" => "admin")));
        // line 63
        echo "  </table>

  <div class=\"paginator\">
    ";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo " 
  </div>


";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Order:manage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 66,  113 => 63,  111 => 62,  104 => 57,  102 => 56,  101 => 55,  100 => 54,  99 => 53,  98 => 52,  97 => 51,  96 => 50,  95 => 49,  88 => 45,  81 => 42,  79 => 41,  65 => 30,  58 => 26,  48 => 19,  43 => 17,  36 => 12,  33 => 11,  29 => 1,  27 => 9,  25 => 7,  11 => 1,);
    }
}
/* {% extends 'TopxiaAdminBundle::layout.html.twig' %}*/
/* */
/* {#*/
/*     {% set script_controller = 'trade/index' %}*/
/* #}*/
/* */
/* {% set menu = 'admin_' ~ targetType ~ '_order' %}*/
/* */
/* {% set script_controller = 'manage/list' %}*/
/* */
/* {% block main %}*/
/* */
/*   <form id="user-search-form" class="form-inline well well-sm" action="" method="get" novalidate>*/
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
/*       <label class="ptm" >筛选条件:</label>*/
/*         <select class="form-control" name="status">*/
/*           {{ select_options(dict('orderStatus'), request.get('status'), '订单状态') }}*/
/*         </select>*/
/*   */
/*       <select class="form-control" name="payment">*/
/*         {{ select_options(dict('payment'), request.get('payment'), '支付方式') }}*/
/*       </select>*/
/*     </div> */
/*     <div class="form-group" style="display:none;">*/
/*       <input class="form-control" type="text" name="paidTimeRange", placeholder="付款时间段">*/
/*     </div>*/
/* */
/* */
/*     <div class="form-group">*/
/*     <label class="ptm" >关键词:</label>*/
/*       <select class="form-control" name="keywordType">*/
/*         {% set options = {sn: '订单号', buyer:'购买者用户名', targetId: dict_text('targetName', targetType) ~ '编号', title: dict_text('targetName', targetType) ~ '名'} %}*/
/*         {{ select_options(options, request.get('keywordType')) }}*/
/*       </select>*/
/* */
/*     <input class="form-control" type="text" name="keyword" value="{{ request.get('keyword') }}" placeholder="关键词">*/
/*     </div>*/
/* */
/*     <button class="btn btn-primary">搜索</button>*/
/*     <a class="btn btn-primary" href="{{ path('admin_order_manage_export_csv',*/
/*     {targetType:targetType,*/
/*     startTime:request.get('startDateTime'),*/
/*     endTime:request.get('endDateTime'),*/
/*     status:request.get('status'),*/
/*     payment:request.get('payment'),*/
/*     keywordType:request.get('keywordType'),*/
/*     keyword:request.get('keyword')*/
/*     })}}">导出结果</a>*/
/*     </div>*/
/*   </form>*/
/* */
/*   <table class="table table-striped table-hover" id="order-table">*/
/*     {% include 'TopxiaWebBundle:Order:order-table.html.twig' with {mode:'admin'} %}*/
/*   </table>*/
/* */
/*   <div class="paginator">*/
/*     {{ web_macro.paginator(paginator) }} */
/*   </div>*/
/* */
/* */
/* {% endblock %}*/
/* */
