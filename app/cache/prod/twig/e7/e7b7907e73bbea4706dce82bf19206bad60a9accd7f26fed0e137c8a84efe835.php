<?php

/* TopxiaWebBundle:CourseManage:course-order.html.twig */
class __TwigTemplate_ec2890c93475ef7ebe3d1b341e4086758d144edeb2d99dd818ffa266304786e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:CourseManage:layout.html.twig", "TopxiaWebBundle:CourseManage:course-order.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:CourseManage:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["side_nav"] = "course_manage_order";
        // line 6
        $context["script_controller"] = "course-manage/order";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "课程订单查询 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 8
    public function block_main($context, array $blocks = array())
    {
        // line 9
        echo "
<div class=\"panel panel-default panel-col course-data\">
\t<div class=\"panel-heading\">课程订单查询
\t\t";
        // line 12
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "isAdmin", array(), "method") || ($this->env->getExtension('topxia_web_twig')->getSetting("course.teacher_search_order") == 1))) {
            // line 13
            echo "\t\t\t<a class=\"btn btn-info btn-sm pull-right mhs\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_order_export_csv", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "startDateTime" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 14
(isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "startDateTime"), "method"), "endDateTime" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 15
(isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "endDateTime"), "method"), "status" => $this->getAttribute(            // line 16
(isset($context["request"]) ? $context["request"] : null), "get", array(0 => "status"), "method"), "payment" => $this->getAttribute(            // line 17
(isset($context["request"]) ? $context["request"] : null), "get", array(0 => "payment"), "method"), "keywordType" => $this->getAttribute(            // line 18
(isset($context["request"]) ? $context["request"] : null), "get", array(0 => "keywordType"), "method"), "keyword" => $this->getAttribute(            // line 19
(isset($context["request"]) ? $context["request"] : null), "get", array(0 => "keyword"), "method"))), "html", null, true);
            echo "\"><i class=\"glyphicon glyphicon-export\"></i> 导出订单</a>
\t\t";
        }
        // line 21
        echo "\t</div>
\t<div class=\"panel-body\">
\t\t<form id=\"user-search-form\" class=\"form-inline well well-sm\" action=\"\" method=\"get\" novalidate>
\t\t\t<div class=\"mbm\">
\t\t\t\t创建时间 :
\t\t\t\t<div class=\"form-group\">
\t\t    \t\t<input class=\"form-control\" type=\"text\" id=\"startDate\" name=\"startDateTime\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "startDateTime"), "method"), "html", null, true);
        echo "\" placeholder=\"起始时间\">
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">-</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t    <input class=\"form-control\" type=\"text\" id=\"endDate\" name=\"endDateTime\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "endDateTime"), "method"), "html", null, true);
        echo "\" placeholder=\"结束时间\">
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div>
\t\t\t\t筛选条件 :
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<select class=\"form-control\" name=\"status\">
\t\t\t\t\t\t";
        // line 39
        echo $this->env->getExtension('topxia_html_twig')->selectOptions($this->env->getExtension('topxia_web_twig')->getDict("orderStatus"), $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "get", array(0 => "status"), "method"), "订单状态");
        echo "
\t\t\t\t\t</select>
\t\t\t\t</div>

\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<select class=\"form-control\" name=\"payment\">
\t\t\t\t\t\t";
        // line 45
        $context["options"] = array("" => "支付方式", "alipay" => "支付宝", "wxpay" => "微信支付", "none" => "其他支付");
        // line 46
        echo "\t\t\t\t\t\t";
        echo $this->env->getExtension('topxia_html_twig')->selectOptions((isset($context["options"]) ? $context["options"] : null), $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "get", array(0 => "payment"), "method"));
        echo "
\t\t\t\t\t</select>
\t\t\t\t</div>

\t\t\t\t<span class=\"divider\"></span>

\t    \t\t<div class=\"form-group\">
\t      \t\t\t<select class=\"form-control\" name=\"keywordType\">
\t        \t\t\t";
        // line 54
        $context["options"] = array("sn" => "订单号", "buyer" => "购买者用户名");
        // line 55
        echo "\t        \t\t\t";
        echo $this->env->getExtension('topxia_html_twig')->selectOptions((isset($context["options"]) ? $context["options"] : null), $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "get", array(0 => "keywordType"), "method"));
        echo "
\t      \t\t\t</select>
\t    \t\t</div>

\t    \t\t<div class=\"form-group\">
\t      \t\t\t<input class=\"form-control\" type=\"text\" name=\"keyword\" value=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "get", array(0 => "keyword"), "method"), "html", null, true);
        echo "\" placeholder=\"关键词\">
\t    \t\t</div>

\t\t\t\t<button class=\"btn btn-primary\">搜索</button>
\t\t\t</div>
\t\t</form>

\t\t<table class=\"table table-striped table-hover\" id=\"order-table\">
\t    \t";
        // line 68
        $this->loadTemplate("TopxiaWebBundle:Order:order-table.html.twig", "TopxiaWebBundle:CourseManage:course-order.html.twig", 68)->display(array_merge($context, array("mode" => "course")));
        // line 69
        echo "\t  \t</table>
\t\t";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo "
\t</div>
</div>

";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseManage:course-order.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 70,  136 => 69,  134 => 68,  123 => 60,  114 => 55,  112 => 54,  100 => 46,  98 => 45,  89 => 39,  78 => 31,  71 => 27,  63 => 21,  58 => 19,  57 => 18,  56 => 17,  55 => 16,  54 => 15,  53 => 14,  51 => 13,  49 => 12,  44 => 9,  41 => 8,  34 => 3,  30 => 1,  28 => 6,  26 => 5,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle:CourseManage:layout.html.twig' %}*/
/* */
/* {% block title %}课程订单查询 - {{ parent() }}{% endblock %}*/
/* */
/* {% set side_nav = 'course_manage_order' %}*/
/* {% set script_controller = 'course-manage/order' %}*/
/* */
/* {% block main %}*/
/* */
/* <div class="panel panel-default panel-col course-data">*/
/* 	<div class="panel-heading">课程订单查询*/
/* 		{% if app.user.isAdmin() or setting('course.teacher_search_order') == 1 %}*/
/* 			<a class="btn btn-info btn-sm pull-right mhs" href="{{ path('course_manage_order_export_csv', {id:course.id, */
/* 			startDateTime:app.request.query.get('startDateTime'), */
/* 			endDateTime:app.request.query.get('endDateTime'), */
/* 			status:request.get('status'), */
/* 			payment:request.get('payment'), */
/* 			keywordType:request.get('keywordType'), */
/* 			keyword:request.get('keyword')}) }}"><i class="glyphicon glyphicon-export"></i> 导出订单</a>*/
/* 		{% endif %}*/
/* 	</div>*/
/* 	<div class="panel-body">*/
/* 		<form id="user-search-form" class="form-inline well well-sm" action="" method="get" novalidate>*/
/* 			<div class="mbm">*/
/* 				创建时间 :*/
/* 				<div class="form-group">*/
/* 		    		<input class="form-control" type="text" id="startDate" name="startDateTime" value="{{app.request.query.get('startDateTime')}}" placeholder="起始时间">*/
/* 				</div>*/
/* 				<div class="form-group">-</div>*/
/* 				<div class="form-group">*/
/* 				    <input class="form-control" type="text" id="endDate" name="endDateTime" value="{{app.request.query.get('endDateTime')}}" placeholder="结束时间">*/
/* 				</div>*/
/* 			</div>*/
/* */
/* 			<div>*/
/* 				筛选条件 :*/
/* 				<div class="form-group">*/
/* 					<select class="form-control" name="status">*/
/* 						{{ select_options(dict('orderStatus'), request.get('status'), '订单状态') }}*/
/* 					</select>*/
/* 				</div>*/
/* */
/* 				<div class="form-group">*/
/* 					<select class="form-control" name="payment">*/
/* 						{% set options = {'':'支付方式','alipay':'支付宝','wxpay':'微信支付','none':'其他支付'} %}*/
/* 						{{ select_options(options, request.get('payment')) }}*/
/* 					</select>*/
/* 				</div>*/
/* */
/* 				<span class="divider"></span>*/
/* */
/* 	    		<div class="form-group">*/
/* 	      			<select class="form-control" name="keywordType">*/
/* 	        			{% set options = {sn: '订单号', buyer:'购买者用户名'} %}*/
/* 	        			{{ select_options(options, request.get('keywordType')) }}*/
/* 	      			</select>*/
/* 	    		</div>*/
/* */
/* 	    		<div class="form-group">*/
/* 	      			<input class="form-control" type="text" name="keyword" value="{{ request.get('keyword') }}" placeholder="关键词">*/
/* 	    		</div>*/
/* */
/* 				<button class="btn btn-primary">搜索</button>*/
/* 			</div>*/
/* 		</form>*/
/* */
/* 		<table class="table table-striped table-hover" id="order-table">*/
/* 	    	{% include 'TopxiaWebBundle:Order:order-table.html.twig' with {mode:'course'} %}*/
/* 	  	</table>*/
/* 		{{ web_macro.paginator(paginator) }}*/
/* 	</div>*/
/* </div>*/
/* */
/* {% endblock %}*/
/* */
/* */
/* */
/* */
