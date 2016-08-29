<?php

/* TopxiaAdminBundle:OperationAnalysis:analysis-base-layout.html.twig */
class __TwigTemplate_dccbcb2fbdd6686ba599064f89a7648f8fc2d19c43ab4474959bcfa450138514 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:OperationAnalysis:analysis-base-layout.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
            'analysisHead' => array($this, 'block_analysisHead'),
            'analysisBody' => array($this, 'block_analysisBody'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["panel"] = "dashboard";
        // line 3
        $context["nav"] = "system";
        // line 4
        $context["menu"] = "admin_operation_analysis_register";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        // line 7
        echo "  <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/libs/gallery/morris/0.5.0/morris.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
<div class=\"row\">


  <div class=\"col-md-12\">
  ";
        // line 12
        $this->displayBlock('analysisHead', $context, $blocks);
        // line 59
        $this->displayBlock('analysisBody', $context, $blocks);
        // line 61
        echo "</div>
</div>

";
    }

    // line 12
    public function block_analysisHead($context, array $blocks = array())
    {
        // line 13
        echo "  <div class=\"col-md-12\">
";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "

  <form  class=\"well well-sm form-inline\" action=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("admin_operation_analysis_rount", array("tab" => (isset($context["tab"]) ? $context["tab"] : null))), "html", null, true);
        echo "\" method=\"get\" id=\"operation-form\"  role=\"form\" >
          <div class=\"form-group\">
    <select class=\"form-control\" name=\"analysisDateType\">
        ";
        // line 19
        echo $this->env->getExtension('topxia_html_twig')->selectOptions($this->env->getExtension('topxia_web_twig')->getDict("analysisDateType"), $this->getAttribute((isset($context["dataInfo"]) ? $context["dataInfo"] : null), "analysisDateType", array()), "--选择数据类型--");
        echo "
    </select>
  </div>
        <div class=\"form-group\">
         <a  type=\"button\" class=\"btn btn-default\"  id=\"btn-month\" currentMonthStart=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dataInfo"]) ? $context["dataInfo"] : null), "currentMonthStart", array()), "html", null, true);
        echo "\" currentMonthEnd=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dataInfo"]) ? $context["dataInfo"] : null), "currentMonthEnd", array()), "html", null, true);
        echo "\">本月</a>
        </div>
        <div class=\"form-group\">
         <a type=\"button\"  class=\"btn btn-default \"  id=\"btn-lastMonth\" lastMonthStart=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dataInfo"]) ? $context["dataInfo"] : null), "lastMonthStart", array()), "html", null, true);
        echo "\" lastMonthEnd=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dataInfo"]) ? $context["dataInfo"] : null), "lastMonthEnd", array()), "html", null, true);
        echo "\">上月</a>
        </div>

        <div class=\"form-group\">
          <a type=\"button\"  class=\"btn btn-default \" id=\"btn-lastThreeMonths\" lastThreeMonthsStart=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dataInfo"]) ? $context["dataInfo"] : null), "lastThreeMonthsStart", array()), "html", null, true);
        echo "\" lastThreeMonthsEnd=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dataInfo"]) ? $context["dataInfo"] : null), "lastThreeMonthsEnd", array()), "html", null, true);
        echo "\">近三月</a>
        </div>

        <div class=\"form-group mll\">
          <label class=\"ptm\" >起始日期</label>
            <input type=\"text\" class=\"form-control analysis-input mls\" name=\"startTime\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dataInfo"]) ? $context["dataInfo"] : null), "startTime", array()), "html", null, true);
        echo "\">
        </div>

        <div class=\"form-group mls\">
          <label class=\"ptm\" >截止日期</label>
            <input type=\"text\" class=\"form-control analysis-input mls\"  name=\"endTime\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dataInfo"]) ? $context["dataInfo"] : null), "endTime", array()), "html", null, true);
        echo "\">
        </div>

        <button class=\"btn btn-primary pull-right\" id=\"btn-search\">查询</button>
      </form>

      ";
        // line 46
        if ((((array_key_exists("showHelpMessage", $context)) ? (_twig_default_filter((isset($context["showHelpMessage"]) ? $context["showHelpMessage"] : null), null)) : (null)) == 1)) {
            // line 47
            echo "        <div class=\"help-block\">视频观看数，将从数据统计功能更新启用之日起开始记录</div>
      ";
        }
        // line 49
        echo "  </div>
  <div class=\"col-md-12\"><br>
  </div>
  <div class=\"col-md-12\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
        <li role=\"presentation\"";
        // line 54
        if (((isset($context["tab"]) ? $context["tab"] : null) == "trend")) {
            echo " class=\"active\"";
        }
        echo " ><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["href"]) ? $context["href"] : null), array("tab" => "trend", "startTime" => $this->getAttribute((isset($context["dataInfo"]) ? $context["dataInfo"] : null), "startTime", array()), "endTime" => $this->getAttribute((isset($context["dataInfo"]) ? $context["dataInfo"] : null), "endTime", array()), "analysisDateType" => $this->getAttribute((isset($context["dataInfo"]) ? $context["dataInfo"] : null), "analysisDateType", array()))), "html", null, true);
        echo "\">趋势</a></li>
        <li role=\"presentation\" ";
        // line 55
        if (((isset($context["tab"]) ? $context["tab"] : null) == "detail")) {
            echo " class=\"active\"";
        }
        echo "><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["href"]) ? $context["href"] : null), array("tab" => "detail", "startTime" => $this->getAttribute((isset($context["dataInfo"]) ? $context["dataInfo"] : null), "startTime", array()), "endTime" => $this->getAttribute((isset($context["dataInfo"]) ? $context["dataInfo"] : null), "endTime", array()), "analysisDateType" => $this->getAttribute((isset($context["dataInfo"]) ? $context["dataInfo"] : null), "analysisDateType", array()))), "html", null, true);
        echo "\">明细</a></li>
      </ul>
  </div>
";
    }

    // line 59
    public function block_analysisBody($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:OperationAnalysis:analysis-base-layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 59,  149 => 55,  141 => 54,  134 => 49,  130 => 47,  128 => 46,  119 => 40,  111 => 35,  101 => 30,  92 => 26,  84 => 23,  77 => 19,  71 => 16,  66 => 14,  63 => 13,  60 => 12,  53 => 61,  51 => 59,  49 => 12,  40 => 7,  37 => 6,  33 => 1,  31 => 4,  29 => 3,  27 => 2,  11 => 1,);
    }
}
/* {% extends 'TopxiaAdminBundle::layout.html.twig' %}*/
/* {% set panel = 'dashboard' %}*/
/* {% set nav = 'system' %}*/
/* {% set menu = 'admin_operation_analysis_register' %}*/
/* */
/* {% block main %}*/
/*   <link href="{{ asset('assets/libs/gallery/morris/0.5.0/morris.css') }}" rel="stylesheet" />*/
/* <div class="row">*/
/* */
/* */
/*   <div class="col-md-12">*/
/*   {% block analysisHead %}*/
/*   <div class="col-md-12">*/
/* {{ web_macro.flash_messages() }}*/
/* */
/*   <form  class="well well-sm form-inline" action="{{url("admin_operation_analysis_rount",{tab:tab})}}" method="get" id="operation-form"  role="form" >*/
/*           <div class="form-group">*/
/*     <select class="form-control" name="analysisDateType">*/
/*         {{ select_options(dict('analysisDateType'), dataInfo.analysisDateType, '--选择数据类型--') }}*/
/*     </select>*/
/*   </div>*/
/*         <div class="form-group">*/
/*          <a  type="button" class="btn btn-default"  id="btn-month" currentMonthStart="{{dataInfo.currentMonthStart}}" currentMonthEnd="{{dataInfo.currentMonthEnd}}">本月</a>*/
/*         </div>*/
/*         <div class="form-group">*/
/*          <a type="button"  class="btn btn-default "  id="btn-lastMonth" lastMonthStart="{{dataInfo.lastMonthStart}}" lastMonthEnd="{{dataInfo.lastMonthEnd}}">上月</a>*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*           <a type="button"  class="btn btn-default " id="btn-lastThreeMonths" lastThreeMonthsStart="{{dataInfo.lastThreeMonthsStart}}" lastThreeMonthsEnd="{{dataInfo.lastThreeMonthsEnd}}">近三月</a>*/
/*         </div>*/
/* */
/*         <div class="form-group mll">*/
/*           <label class="ptm" >起始日期</label>*/
/*             <input type="text" class="form-control analysis-input mls" name="startTime" value="{{dataInfo.startTime}}">*/
/*         </div>*/
/* */
/*         <div class="form-group mls">*/
/*           <label class="ptm" >截止日期</label>*/
/*             <input type="text" class="form-control analysis-input mls"  name="endTime" value="{{dataInfo.endTime}}">*/
/*         </div>*/
/* */
/*         <button class="btn btn-primary pull-right" id="btn-search">查询</button>*/
/*       </form>*/
/* */
/*       {% if showHelpMessage|default(null ) == 1 %}*/
/*         <div class="help-block">视频观看数，将从数据统计功能更新启用之日起开始记录</div>*/
/*       {% endif %}*/
/*   </div>*/
/*   <div class="col-md-12"><br>*/
/*   </div>*/
/*   <div class="col-md-12">*/
/*       <ul class="nav nav-tabs" role="tablist">*/
/*         <li role="presentation"{% if tab=="trend" %} class="active"{% endif %} ><a href="{{path(href,{tab:"trend",startTime:dataInfo.startTime,endTime:dataInfo.endTime,analysisDateType:dataInfo.analysisDateType})}}">趋势</a></li>*/
/*         <li role="presentation" {% if tab=="detail" %} class="active"{% endif %}><a href="{{path(href,{tab:"detail",startTime:dataInfo.startTime,endTime:dataInfo.endTime,analysisDateType:dataInfo.analysisDateType})}}">明细</a></li>*/
/*       </ul>*/
/*   </div>*/
/* {% endblock %}*/
/* {% block analysisBody %}*/
/* {% endblock %}*/
/* </div>*/
/* </div>*/
/* */
/* {% endblock %}*/
/* */
