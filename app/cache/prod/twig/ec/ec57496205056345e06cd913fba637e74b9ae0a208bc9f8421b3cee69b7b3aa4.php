<?php

/* TopxiaAdminBundle:EduCloud:edu-cloud.html.twig */
class __TwigTemplate_a65d29707fa7582c2ebf7cb5d95a944d328eeb7e3cdb5465f29f8425be015f91 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle:EduCloud:edu-cloud-layout.html.twig", "TopxiaAdminBundle:EduCloud:edu-cloud.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle:EduCloud:edu-cloud-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["menu"] = "overview";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "教育云 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 8
    public function block_main($context, array $blocks = array())
    {
        // line 9
        echo "  <div class=\"page-header\"><h1>概览</h1></div>
";
        // line 10
        if ((isset($context["account"]) ? $context["account"] : null)) {
            // line 11
            echo "  <div class=\"panel panel-default\">
    <table class=\"table table-striped table-hover\" style=\"word-break:break-all;\">
      <thead>
          <tr>
              <th style=\"text-align: center; width: 40%\">项目</th>
              <th style=\"text-align: center; width: 30%\">内容</th>
              <th style=\"text-align: center;\">操作</th>
          </tr>
      </thead>
      <tbody style=\"text-align: center;\">
        
          <tr>
            <td>账户余额</td> 
            <td><span>";
            // line 24
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["account"]) ? $context["account"] : null), "cash", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["account"]) ? $context["account"] : null), "cash", array()), 0)) : (0)), "html", null, true);
            echo "</span> 元 </td>
            <td><a class=\"btn btn-primary btn-sm\" href=\"";
            // line 25
            echo $this->env->getExtension('routing')->getPath("admin_cloud_recharge");
            echo "\" target=\"_blank\"> 去充值 </a></td>
          </tr>
        
          <tr>
            <td>云短信状态</td>
            <td>
              <span>
              ";
            // line 32
            if (($this->getAttribute((isset($context["smsStatus"]) ? $context["smsStatus"] : null), "status", array()) == "auditing")) {
                // line 33
                echo "                审核中
              ";
            }
            // line 35
            echo "              ";
            if (($this->getAttribute((isset($context["smsStatus"]) ? $context["smsStatus"] : null), "status", array()) == "failed")) {
                // line 36
                echo "                未通过
              ";
            }
            // line 38
            echo "              ";
            if (($this->getAttribute((isset($context["smsStatus"]) ? $context["smsStatus"] : null), "status", array()) == "passed")) {
                // line 39
                echo "                已通过
              ";
            }
            // line 41
            echo "              ";
            if (($this->getAttribute((isset($context["smsStatus"]) ? $context["smsStatus"] : null), "status", array()) == "error")) {
                // line 42
                echo "                ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["smsStatus"]) ? $context["smsStatus"] : null), "message", array()), "html", null, true);
                echo "
              ";
            }
            // line 44
            echo "              </span>
            </td>

            <td>
              ";
            // line 48
            if (($this->getAttribute((isset($context["smsStatus"]) ? $context["smsStatus"] : null), "status", array()) == "error")) {
                echo " ";
                // line 49
                echo "                <span class=\"btn btn-default btn-sm\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
                echo $this->env->getExtension('routing')->getPath("admin_edu_cloud_apply_for_sms");
                echo "\" > 申请开通云短信 </span>
              ";
            }
            // line 51
            echo "            </td>
          </tr>
      <tbody>
    </table>
  </div>
";
        } else {
            // line 57
            echo "  <td><a class=\"btn btn-primary btn-sm\" href=\"http://open.edusoho.com/register\" target=\"_blank\"> 没有帐号? 去注册 </a></td>
";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:EduCloud:edu-cloud.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 57,  120 => 51,  114 => 49,  111 => 48,  105 => 44,  99 => 42,  96 => 41,  92 => 39,  89 => 38,  85 => 36,  82 => 35,  78 => 33,  76 => 32,  66 => 25,  62 => 24,  47 => 11,  45 => 10,  42 => 9,  39 => 8,  32 => 3,  28 => 1,  26 => 5,  11 => 1,);
    }
}
/* {% extends 'TopxiaAdminBundle:EduCloud:edu-cloud-layout.html.twig' %}*/
/* */
/* {% block title %}教育云 - {{ parent() }}{% endblock %}*/
/* */
/* {% set menu = 'overview' %}*/
/* {# {% set script_controller = '' %} #}*/
/* */
/* {% block main %}*/
/*   <div class="page-header"><h1>概览</h1></div>*/
/* {% if account %}*/
/*   <div class="panel panel-default">*/
/*     <table class="table table-striped table-hover" style="word-break:break-all;">*/
/*       <thead>*/
/*           <tr>*/
/*               <th style="text-align: center; width: 40%">项目</th>*/
/*               <th style="text-align: center; width: 30%">内容</th>*/
/*               <th style="text-align: center;">操作</th>*/
/*           </tr>*/
/*       </thead>*/
/*       <tbody style="text-align: center;">*/
/*         */
/*           <tr>*/
/*             <td>账户余额</td> */
/*             <td><span>{{account.cash|default(0)}}</span> 元 </td>*/
/*             <td><a class="btn btn-primary btn-sm" href="{{path('admin_cloud_recharge')}}" target="_blank"> 去充值 </a></td>*/
/*           </tr>*/
/*         */
/*           <tr>*/
/*             <td>云短信状态</td>*/
/*             <td>*/
/*               <span>*/
/*               {% if smsStatus.status == 'auditing' %}*/
/*                 审核中*/
/*               {% endif %}*/
/*               {% if smsStatus.status == 'failed' %}*/
/*                 未通过*/
/*               {% endif %}*/
/*               {% if smsStatus.status == 'passed' %}*/
/*                 已通过*/
/*               {% endif %}*/
/*               {% if smsStatus.status == 'error' %}*/
/*                 {{ smsStatus.message }}*/
/*               {% endif %}*/
/*               </span>*/
/*             </td>*/
/* */
/*             <td>*/
/*               {% if smsStatus.status == 'error' %} {# or smsStatus.status == 'failed' #}*/
/*                 <span class="btn btn-default btn-sm" data-toggle="modal" data-target="#modal" data-url="{{path('admin_edu_cloud_apply_for_sms')}}" > 申请开通云短信 </span>*/
/*               {% endif %}*/
/*             </td>*/
/*           </tr>*/
/*       <tbody>*/
/*     </table>*/
/*   </div>*/
/* {% else %}*/
/*   <td><a class="btn btn-primary btn-sm" href="http://open.edusoho.com/register" target="_blank"> 没有帐号? 去注册 </a></td>*/
/* {% endif %}*/
/* {% endblock %}*/
