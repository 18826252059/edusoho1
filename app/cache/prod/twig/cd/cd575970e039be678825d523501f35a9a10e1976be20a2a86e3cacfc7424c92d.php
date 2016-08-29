<?php

/* TopxiaAdminBundle:Default:index.html.twig */
class __TwigTemplate_025b13bfd56b84855a5ad3d179d7059559238022b1c00802b22e30ff595fc8db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["panel"] = "dashboard";
        // line 4
        $context["script_controller"] = "default/index";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "管理后台";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
";
        // line 7
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaAdminBundle:Default:inspect"));
        echo "
<div class=\"page-header\">
  <h1>管理中心  </h1>
</div>
";
        // line 11
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 12
            echo "  
  <div class=\"row\">
    <div class=\"col-md-12\">
      <div id=\"app-upgrade-alert\" class=\"alert alert-info alert-dismissable hide\" data-url=\"";
            // line 15
            echo $this->env->getExtension('routing')->getPath("admin_app_upgrades_count");
            echo "\" data-upgrade-url=\"";
            echo $this->env->getExtension('routing')->getPath("admin_app_upgrades");
            echo "\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
      </div>
    </div>

";
            // line 20
            if (((_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("copyright.thirdCopyright"), null) == 0) && (_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("copyright"), null) == 0))) {
                // line 21
                echo "  <div class=\"col-md-12\">
        ";
                // line 22
                echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaAdminBundle:Default:getCloudNotices"));
                echo "
    </div>
";
            }
            // line 25
            echo " 

 <div class=\"col-md-6\">
  <div class=\"panel panel-default\">
  
    <div class=\"panel-heading clearfix\">
     <span class=\"pull-right\" style=\"display:block\">
         <span id=\"onlineNum\" data-url=\"";
            // line 32
            echo $this->env->getExtension('routing')->getPath("admin_online_count");
            echo "\">正在载入在线人数...</span>（<span id=\"loginNum\" data-url=\"";
            echo $this->env->getExtension('routing')->getPath("admin_login_count");
            echo "\">正在载入登录人数...</span>）
     </span>
     <h3 class=\"panel-title pull-left\" id=\"operation-analysis-title\" data-url=\"";
            // line 34
            echo $this->env->getExtension('routing')->getPath("admin_operation_analysis");
            echo "\"> 数据统计

     </h3>
    </div>
    <div id=\"operation-analysis-table\" >
      <div class=\"empty\">正在载入数据，请稍等。</div>
    </div>
  </div>
</div>
";
            // line 53
            echo "    ";
            if ((_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("copyright.thirdCopyright"), null) != 1)) {
                // line 54
                echo "    ";
                // line 55
                echo "       ";
                // line 56
                echo "        ";
                // line 57
                echo "          ";
                // line 58
                echo "        ";
                // line 59
                echo "        ";
                // line 60
                echo "          ";
                // line 61
                echo "        ";
                // line 62
                echo "      ";
                // line 63
                echo "    ";
                // line 64
                echo "    ";
            }
            // line 65
            echo "    <div id=\"popular-courses-panel\" class=\"col-md-6\">
       <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
          <select id=\"popular-courses-type\" class=\"pull-right\" data-url=\"";
            // line 68
            echo $this->env->getExtension('routing')->getPath("admin_popular_courses");
            echo "\">
              ";
            // line 69
            echo $this->env->getExtension('topxia_html_twig')->selectOptions($this->env->getExtension('topxia_web_twig')->getDict("dateType"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "dateType"), "method"));
            echo "
          </select>
          <h3 class=\"panel-title\">受欢迎课程</h3>
        </div>
        <div id=\"popular-courses-table\">
        \t<div class=\"empty\">正在载入数据，请稍等。</div>
        </div>
      </div>
    </div>
  </div>

  <div class=\"row\">
    ";
            // line 81
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaAdminBundle:Default:userCoinsRecordsBlock"));
            echo "
  </div>

  <div class=\"row\">
    ";
            // line 85
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaAdminBundle:Default:unsolvedQuestionsBlock"));
            echo "
  </div>

  <div class=\"row\">
    ";
            // line 89
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaAdminBundle:Default:latestPaidOrdersBlock"));
            echo "
  </div>

";
        } else {
            // line 93
            echo "  <div class=\"row\">
    <div class=\"col-md-12\">
      <h4>欢迎来到";
            // line 95
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("site.name"), "html", null, true);
            echo "管理后台</h4>
    </div>
  </div>
";
        }
        // line 99
        echo "
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 99,  184 => 95,  180 => 93,  173 => 89,  166 => 85,  159 => 81,  144 => 69,  140 => 68,  135 => 65,  132 => 64,  130 => 63,  128 => 62,  126 => 61,  124 => 60,  122 => 59,  120 => 58,  118 => 57,  116 => 56,  114 => 55,  112 => 54,  109 => 53,  97 => 34,  90 => 32,  81 => 25,  75 => 22,  72 => 21,  70 => 20,  60 => 15,  55 => 12,  53 => 11,  46 => 7,  43 => 6,  40 => 5,  34 => 2,  30 => 1,  28 => 4,  26 => 3,  11 => 1,);
    }
}
/*   {% extends 'TopxiaAdminBundle::layout.html.twig' %}*/
/* {% block title %}管理后台{% endblock %}*/
/* {% set panel = 'dashboard' %}*/
/* {% set script_controller = 'default/index' %}*/
/* {% block content %}*/
/* */
/* {{ render(controller('TopxiaAdminBundle:Default:inspect')) }}*/
/* <div class="page-header">*/
/*   <h1>管理中心  </h1>*/
/* </div>*/
/* {% if is_granted('ROLE_ADMIN') %}*/
/*   */
/*   <div class="row">*/
/*     <div class="col-md-12">*/
/*       <div id="app-upgrade-alert" class="alert alert-info alert-dismissable hide" data-url="{{path('admin_app_upgrades_count') }}" data-upgrade-url="{{ path('admin_app_upgrades') }}">*/
/*         <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>*/
/*       </div>*/
/*     </div>*/
/* */
/* {% if setting('copyright.thirdCopyright')|default(null) == 0 and setting('copyright')|default(null) == 0 %}*/
/*   <div class="col-md-12">*/
/*         {{ render(controller('TopxiaAdminBundle:Default:getCloudNotices')) }}*/
/*     </div>*/
/* {% endif %}*/
/*  */
/* */
/*  <div class="col-md-6">*/
/*   <div class="panel panel-default">*/
/*   */
/*     <div class="panel-heading clearfix">*/
/*      <span class="pull-right" style="display:block">*/
/*          <span id="onlineNum" data-url="{{path('admin_online_count')}}">正在载入在线人数...</span>（<span id="loginNum" data-url="{{path('admin_login_count')}}">正在载入登录人数...</span>）*/
/*      </span>*/
/*      <h3 class="panel-title pull-left" id="operation-analysis-title" data-url="{{path('admin_operation_analysis')}}"> 数据统计*/
/* */
/*      </h3>*/
/*     </div>*/
/*     <div id="operation-analysis-table" >*/
/*       <div class="empty">正在载入数据，请稍等。</div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* {#     <div class="col-md-6">*/
/*        <div class="panel panel-default">*/
/*         <div class="panel-heading">*/
/*           <h3 class="panel-title" id="open-message-title" data-url="{{path('admin_official_messages')}}">{{ 'EduSoho官方消息'|copyright_less }}</h3>*/
/*         </div>*/
/*         <div id="edusoho-open-message" >*/
/*           <div class="empty">正在载入数据，请稍等。</div>*/
/*         </div>*/
/*       </div>*/
/*     </div> #}*/
/*     {% if setting('copyright.thirdCopyright')|default(null) != 1  %}*/
/*     {#<div class="col-md-6">#}*/
/*        {#<div class="panel panel-default">#}*/
/*         {#<div class="panel-heading">#}*/
/*           {#<h3 class="panel-title" id="system-status-title" data-url="{{path('admin_system_status')}}">系统状态</h3>#}*/
/*         {#</div>#}*/
/*         {#<div id="system-status" >#}*/
/*           {#<div class="empty">正在载入数据，请稍等。</div>#}*/
/*         {#</div>#}*/
/*       {#</div>#}*/
/*     {#</div>#}*/
/*     {% endif %}*/
/*     <div id="popular-courses-panel" class="col-md-6">*/
/*        <div class="panel panel-default">*/
/*         <div class="panel-heading">*/
/*           <select id="popular-courses-type" class="pull-right" data-url="{{path('admin_popular_courses')}}">*/
/*               {{ select_options(dict('dateType'), app.request.query.get('dateType')) }}*/
/*           </select>*/
/*           <h3 class="panel-title">受欢迎课程</h3>*/
/*         </div>*/
/*         <div id="popular-courses-table">*/
/*         	<div class="empty">正在载入数据，请稍等。</div>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* */
/*   <div class="row">*/
/*     {{ render(controller('TopxiaAdminBundle:Default:userCoinsRecordsBlock')) }}*/
/*   </div>*/
/* */
/*   <div class="row">*/
/*     {{ render(controller('TopxiaAdminBundle:Default:unsolvedQuestionsBlock')) }}*/
/*   </div>*/
/* */
/*   <div class="row">*/
/*     {{ render(controller('TopxiaAdminBundle:Default:latestPaidOrdersBlock')) }}*/
/*   </div>*/
/* */
/* {% else %}*/
/*   <div class="row">*/
/*     <div class="col-md-12">*/
/*       <h4>欢迎来到{{ setting('site.name') }}管理后台</h4>*/
/*     </div>*/
/*   </div>*/
/* {% endif %}*/
/* */
/* {% endblock %}*/
