<?php

/* TopxiaAdminBundle:Invite:index.html.twig */
class __TwigTemplate_9fe334a8a36654566ac244e9d7fd06da8a88088de5085c7005eb5b168e173279 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:Invite:index.html.twig", 1);
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
        $context["menu"] = "admin_operation_invite_manage";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        // line 6
        echo "\t<form  class=\"form-inline well well-sm\" action=\"";
        echo $this->env->getExtension('routing')->getPath("admin_invite");
        echo "\" method=\"get\" novalidate>
    <input class=\"form-control\" type=\"text\" name=\"nickname\" placeholder=\"用户名\" value=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "nickname"), "method"), "html", null, true);
        echo "\">
    <button class=\"btn btn-primary\" type=\"submit\">搜索</button>
\t</form>

  <table class=\"table table-hover table-striped\" >
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th width=\"10%\">用户名</th>
\t\t\t\t<th width=\"10%\">邀请人数</th>
\t\t\t\t<th width=\"15%\">付费用户数</th>
\t\t\t\t<th width=\"20%\">订单消费总额</th>
\t\t\t\t<th width=\"15%\">订单虚拟币总额</th>
\t\t\t\t<th width=\"15%\">订单现金总额</th>
\t\t\t\t<th width=\"10%\">操作</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t";
        // line 24
        if ((isset($context["inviteInformations"]) ? $context["inviteInformations"] : null)) {
            // line 25
            echo "\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["inviteInformations"]) ? $context["inviteInformations"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["inviteInformation"]) {
                // line 26
                echo "\t\t\t\t\t<tr>
\t\t\t\t\t<td>";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($context["inviteInformation"], "nickname", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t<td>";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute($context["inviteInformation"], "count", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t<td>";
                // line 29
                echo twig_escape_filter($this->env, (($this->getAttribute($context["inviteInformation"], "payingUserCount", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["inviteInformation"], "payingUserCount", array()), "0")) : ("0")), "html", null, true);
                echo "</td>
\t\t\t\t\t<td>";
                // line 30
                echo twig_escape_filter($this->env, (($this->getAttribute($context["inviteInformation"], "payingUserTotalPrice", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["inviteInformation"], "payingUserTotalPrice", array()), "0")) : ("0")), "html", null, true);
                echo "</td>
\t\t\t\t\t<td>";
                // line 31
                echo twig_escape_filter($this->env, (($this->getAttribute($context["inviteInformation"], "coinAmountPrice", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["inviteInformation"], "coinAmountPrice", array()), "0")) : ("0")), "html", null, true);
                echo "</td>
\t\t\t\t\t<td>";
                // line 32
                echo twig_escape_filter($this->env, (($this->getAttribute($context["inviteInformation"], "amountPrice", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["inviteInformation"], "amountPrice", array()), "0")) : ("0")), "html", null, true);
                echo "</td>
\t\t\t\t\t<td><a href=\"#modal\" data-toggle=\"modal\" class=\"btn btn-default\" data-url=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_invite_detail", array("inviteUserId" => $this->getAttribute($context["inviteInformation"], "id", array()), "payingUserCount" => $this->getAttribute($context["inviteInformation"], "payingUserCount", array()))), "html", null, true);
                echo "\">详细</a>
\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inviteInformation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "\t\t\t";
        } else {
            // line 38
            echo "\t\t\t\t<tr><td colspan=\"20\"><div class=\"empty\">暂无页面记录</div></td></tr>
\t\t\t";
        }
        // line 40
        echo "\t\t</tbody>
\t</table>

";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Invite:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 43,  110 => 40,  106 => 38,  103 => 37,  93 => 33,  89 => 32,  85 => 31,  81 => 30,  77 => 29,  73 => 28,  69 => 27,  66 => 26,  61 => 25,  59 => 24,  39 => 7,  34 => 6,  31 => 5,  27 => 1,  25 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaAdminBundle::layout.html.twig' %}*/
/* */
/* {% set menu = 'admin_operation_invite_manage' %}*/
/* */
/* {% block main %}*/
/* 	<form  class="form-inline well well-sm" action="{{path('admin_invite')}}" method="get" novalidate>*/
/*     <input class="form-control" type="text" name="nickname" placeholder="用户名" value="{{ app.request.query.get('nickname')}}">*/
/*     <button class="btn btn-primary" type="submit">搜索</button>*/
/* 	</form>*/
/* */
/*   <table class="table table-hover table-striped" >*/
/* 		<thead>*/
/* 			<tr>*/
/* 				<th width="10%">用户名</th>*/
/* 				<th width="10%">邀请人数</th>*/
/* 				<th width="15%">付费用户数</th>*/
/* 				<th width="20%">订单消费总额</th>*/
/* 				<th width="15%">订单虚拟币总额</th>*/
/* 				<th width="15%">订单现金总额</th>*/
/* 				<th width="10%">操作</th>*/
/* 			</tr>*/
/* 		</thead>*/
/* 		<tbody>*/
/* 			{% if inviteInformations %}*/
/* 				{% for inviteInformation in inviteInformations %}*/
/* 					<tr>*/
/* 					<td>{{inviteInformation.nickname}}</td>*/
/* 					<td>{{inviteInformation.count}}</td>*/
/* 					<td>{{inviteInformation.payingUserCount|default('0')}}</td>*/
/* 					<td>{{inviteInformation.payingUserTotalPrice|default('0')}}</td>*/
/* 					<td>{{inviteInformation.coinAmountPrice|default('0')}}</td>*/
/* 					<td>{{inviteInformation.amountPrice|default('0')}}</td>*/
/* 					<td><a href="#modal" data-toggle="modal" class="btn btn-default" data-url="{{path('admin_invite_detail',{inviteUserId:inviteInformation.id,payingUserCount:inviteInformation.payingUserCount} )}}">详细</a>*/
/* 					</td>*/
/* 					</tr>*/
/* 				{% endfor %}*/
/* 			{% else %}*/
/* 				<tr><td colspan="20"><div class="empty">暂无页面记录</div></td></tr>*/
/* 			{% endif %}*/
/* 		</tbody>*/
/* 	</table>*/
/* */
/* {{ web_macro.paginator(paginator) }}*/
/* {% endblock %}*/
