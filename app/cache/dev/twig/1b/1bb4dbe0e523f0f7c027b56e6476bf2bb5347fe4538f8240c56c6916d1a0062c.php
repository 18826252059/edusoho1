<?php

/* TopxiaAdminBundle:User:approvals.html.twig */
class __TwigTemplate_c39016f77f64e0fc71f1fd2b94e996648921a10f73921edd9cbe61c78b77dc73 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:User:approvals.html.twig", 1);
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
        $context["script_controller"] = "user/approved";
        // line 5
        $context["menu"] = "admin_approval_approvals";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "<div class=\"btn-group\">
  <a type=\"button\" class=\"btn btn-default btn-sm ";
        // line 9
        if (((isset($context["approvalStatus"]) ? $context["approvalStatus"] : $this->getContext($context, "approvalStatus")) == "approving")) {
            echo "btn-primary";
        }
        echo "\" href=\"";
        echo $this->env->getExtension('routing')->getPath("admin_approval_approvals", array("approvalStatus" => "approving"));
        echo "\">审核中</a>
  <a type=\"button\" class=\"btn btn-default btn-sm ";
        // line 10
        if (((isset($context["approvalStatus"]) ? $context["approvalStatus"] : $this->getContext($context, "approvalStatus")) == "approved")) {
            echo "btn-primary";
        }
        echo "\" href=\"";
        echo $this->env->getExtension('routing')->getPath("admin_approval_approvals", array("approvalStatus" => "approved"));
        echo "\">审核成功</a>
</div>
<form id=\"user-search-form\" class=\"form-inline well well-sm mtl\" action=\"\" method=\"get\" novalidate>
 
    <div class=\"form-group\">
      <select class=\"form-control\" name=\"keywordType\">
        ";
        // line 16
        echo $this->env->getExtension('topxia_html_twig')->selectOptions(array("" => "--查询条件--", "nickname" => "用户名", "email" => "邮箱", "truename" => "真实姓名", "idcard" => "身份证号码"), $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "keywordType"), "method"));
        echo "
      </select>
    </div>
    <div class=\"form-group\">
      <input type=\"text\" id=\"keyword\" name=\"keyword\" class=\"form-control\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "keyword"), "method"), "html", null, true);
        echo "\" placeholder=\"关键词\">
    </div>
    <div class=\"form-group\">
      申请时间:
        <input class=\"form-control\" type=\"text\" id=\"startDate\" name=\"startDateTime\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "startDateTime"), "method"), "html", null, true);
        echo "\" placeholder=\"起始时间\">
        -
        <input class=\"form-control\" type=\"text\" id=\"endDate\" name=\"endDateTime\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "endDateTime"), "method"), "html", null, true);
        echo "\" placeholder=\"结束时间\">
    </div>
    <button class=\"btn btn-primary\">搜索</button>
</form>

";
        // line 31
        if ((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users"))) {
            // line 32
            echo "<table id=\"user-table\" class=\"table table-striped\">
  <thead>
    <tr>
      <th>ID</th>
      <th>用户名</th>
      <th>真实姓名</th>
      <th>身份证号码</th>
      <th>邮件</th>
      <th>申请时间</th>
      <th>操作</th>
    </tr>
  </thead>
  <tbody>
  ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 46
                echo "    <tr id=\"user-table-tr-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
                echo "\">
        <td>";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
                echo "</td>
        <td><strong>";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_macro"]) ? $context["admin_macro"] : $this->getContext($context, "admin_macro")), "user_link", array(0 => $context["user"]), "method"), "html", null, true);
                echo "</strong></td>
        <td>";
                // line 49
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["userProfiles"]) ? $context["userProfiles"] : $this->getContext($context, "userProfiles")), $this->getAttribute($context["user"], "id", array()), array(), "array"), "truename", array()), "html", null, true);
                echo "</td>
        <td>";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["userProfiles"]) ? $context["userProfiles"] : $this->getContext($context, "userProfiles")), $this->getAttribute($context["user"], "id", array()), array(), "array"), "idcard", array()), "html", null, true);
                echo "</td>
        <td>";
                // line 51
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
                echo "</td>
        <td>";
                // line 52
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["user"], "approvalTime", array()), "Y-m-d H:i"), "html", null, true);
                echo "</td>
        <td>
            ";
                // line 54
                if (((isset($context["approvalStatus"]) ? $context["approvalStatus"] : $this->getContext($context, "approvalStatus")) == "approved")) {
                    // line 55
                    echo "              <div class=\"btn-group\">
                <a href=\"#modal\" data-toggle=\"modal\" data-url=\"";
                    // line 56
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_approval_info_view", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
                    echo "\" class=\"btn btn-default btn-sm\">查看</a>

                <a href=\"#\" type=\"button\" class=\"btn btn-default btn-sm dropdown-toggle\" data-toggle=\"dropdown\">
                  <span class=\"caret\"></span>
                </a>
                
                <ul class=\"dropdown-menu\">
                  <li><a data-url=\"";
                    // line 63
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_approval_cancel", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
                    echo "\" class =\"btn cancel-approval\">撤销</a></li>
                </ul>
              </div>
            ";
                } elseif ((                // line 66
(isset($context["approvalStatus"]) ? $context["approvalStatus"] : $this->getContext($context, "approvalStatus")) == "approving")) {
                    // line 67
                    echo "              <a href=\"#modal\" data-toggle=\"modal\" data-url=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_approval_approve", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
                    echo "\" class=\"btn btn-default btn-sm\">审核</a>
            ";
                }
                // line 69
                echo "        </td>
    </tr>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            echo "  </tbody>
</table>

";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : $this->getContext($context, "web_macro")), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator"))), "method"), "html", null, true);
            echo "
";
        } else {
            // line 77
            echo "  ";
            if (((isset($context["approvalStatus"]) ? $context["approvalStatus"] : $this->getContext($context, "approvalStatus")) == "approved")) {
                // line 78
                echo "    <div class=\"empty\">暂无已经审核成功的实名认证用户</div>
  ";
            } elseif ((            // line 79
(isset($context["approvalStatus"]) ? $context["approvalStatus"] : $this->getContext($context, "approvalStatus")) == "approving")) {
                // line 80
                echo "    <div class=\"empty\">暂无需要审核中的实名认证用户</div>
  ";
            }
        }
        // line 83
        echo "
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:User:approvals.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 83,  193 => 80,  191 => 79,  188 => 78,  185 => 77,  180 => 75,  175 => 72,  167 => 69,  161 => 67,  159 => 66,  153 => 63,  143 => 56,  140 => 55,  138 => 54,  133 => 52,  129 => 51,  125 => 50,  121 => 49,  117 => 48,  113 => 47,  108 => 46,  104 => 45,  89 => 32,  87 => 31,  79 => 26,  74 => 24,  67 => 20,  60 => 16,  47 => 10,  39 => 9,  36 => 8,  33 => 7,  29 => 1,  27 => 5,  25 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaAdminBundle::layout.html.twig' %}*/
/* */
/* {% set script_controller = 'user/approved' %}*/
/* */
/* {% set menu = 'admin_approval_approvals' %}*/
/* */
/* {% block main %}*/
/* <div class="btn-group">*/
/*   <a type="button" class="btn btn-default btn-sm {% if approvalStatus == 'approving' %}btn-primary{% endif %}" href="{{ path('admin_approval_approvals',{approvalStatus: 'approving'}) }}">审核中</a>*/
/*   <a type="button" class="btn btn-default btn-sm {% if approvalStatus == 'approved' %}btn-primary{% endif %}" href="{{ path('admin_approval_approvals',{approvalStatus: 'approved'}) }}">审核成功</a>*/
/* </div>*/
/* <form id="user-search-form" class="form-inline well well-sm mtl" action="" method="get" novalidate>*/
/*  */
/*     <div class="form-group">*/
/*       <select class="form-control" name="keywordType">*/
/*         {{ select_options({'':'--查询条件--',nickname:'用户名',email:'邮箱',truename:'真实姓名',idcard:'身份证号码'}, app.request.get('keywordType')) }}*/
/*       </select>*/
/*     </div>*/
/*     <div class="form-group">*/
/*       <input type="text" id="keyword" name="keyword" class="form-control" value="{{ app.request.query.get('keyword') }}" placeholder="关键词">*/
/*     </div>*/
/*     <div class="form-group">*/
/*       申请时间:*/
/*         <input class="form-control" type="text" id="startDate" name="startDateTime" value="{{app.request.query.get('startDateTime')}}" placeholder="起始时间">*/
/*         -*/
/*         <input class="form-control" type="text" id="endDate" name="endDateTime" value="{{app.request.query.get('endDateTime')}}" placeholder="结束时间">*/
/*     </div>*/
/*     <button class="btn btn-primary">搜索</button>*/
/* </form>*/
/* */
/* {% if users %}*/
/* <table id="user-table" class="table table-striped">*/
/*   <thead>*/
/*     <tr>*/
/*       <th>ID</th>*/
/*       <th>用户名</th>*/
/*       <th>真实姓名</th>*/
/*       <th>身份证号码</th>*/
/*       <th>邮件</th>*/
/*       <th>申请时间</th>*/
/*       <th>操作</th>*/
/*     </tr>*/
/*   </thead>*/
/*   <tbody>*/
/*   {% for user in users %}*/
/*     <tr id="user-table-tr-{{ user.id }}">*/
/*         <td>{{user.id }}</td>*/
/*         <td><strong>{{ admin_macro.user_link(user) }}</strong></td>*/
/*         <td>{{userProfiles[user.id].truename}}</td>*/
/*         <td>{{userProfiles[user.id].idcard}}</td>*/
/*         <td>{{user.email}}</td>*/
/*         <td>{{user.approvalTime | date('Y-m-d H:i')}}</td>*/
/*         <td>*/
/*             {% if approvalStatus == 'approved'%}*/
/*               <div class="btn-group">*/
/*                 <a href="#modal" data-toggle="modal" data-url="{{ path('admin_approval_info_view', {id:user.id}) }}" class="btn btn-default btn-sm">查看</a>*/
/* */
/*                 <a href="#" type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">*/
/*                   <span class="caret"></span>*/
/*                 </a>*/
/*                 */
/*                 <ul class="dropdown-menu">*/
/*                   <li><a data-url="{{ path('admin_approval_cancel', {id:user.id}) }}" class ="btn cancel-approval">撤销</a></li>*/
/*                 </ul>*/
/*               </div>*/
/*             {% elseif approvalStatus == 'approving' %}*/
/*               <a href="#modal" data-toggle="modal" data-url="{{ path('admin_approval_approve', {id:user.id}) }}" class="btn btn-default btn-sm">审核</a>*/
/*             {% endif %}*/
/*         </td>*/
/*     </tr>*/
/*   {% endfor %}*/
/*   </tbody>*/
/* </table>*/
/* */
/* {{ web_macro.paginator(paginator) }}*/
/* {% else %}*/
/*   {% if approvalStatus == 'approved' %}*/
/*     <div class="empty">暂无已经审核成功的实名认证用户</div>*/
/*   {% elseif approvalStatus == 'approving' %}*/
/*     <div class="empty">暂无需要审核中的实名认证用户</div>*/
/*   {% endif %}*/
/* {% endif %}*/
/* */
/* {% endblock %}*/
/* */
