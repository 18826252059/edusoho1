<?php

/* TopxiaAdminBundle:Coin:coin-admin.html.twig */
class __TwigTemplate_45e8ef675ed8efb832e7492f10d189e6e15ffef2a1c4e21233144da405135b9c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle:System:layout.html.twig", "TopxiaAdminBundle:Coin:coin-admin.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle:System:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["menu"] = "coin";
        // line 6
        $context["submenu"] = "admin";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "虚拟币管理 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 9
    public function block_main($context, array $blocks = array())
    {
        // line 10
        echo "    ";
        $this->loadTemplate("TopxiaAdminBundle:Coin:coin-ul.html.twig", "TopxiaAdminBundle:Coin:coin-admin.html.twig", 10)->display($context);
        // line 11
        echo "
    <div class=\"page-header\">
        <a href=\"javascript:;\" class=\"btn btn-info btn-sm pull-right\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("admin_coin_give");
        echo "\">发放虚拟币</a>
        <h1>虚拟币管理</h1>

    </div>

    <form id=\"coin-orders-search-form\" class=\"form-inline well well-sm\" action=\"\" method=\"get\" novalidate>

        <div class=\"form-group\">
          <input class=\"form-control \" type=\"text\" placeholder=\"请输入用户名\" name=\"nickName\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "nickName"), "method"), "html", null, true);
        echo "\">

          <button class=\"btn btn-primary\">搜索</button>
        </div>
    </form>



    <div class=\"table-responsive\">
        <table class=\"table table-striped\">
           <tr>
                <th width=\"70%\">用户名</th>
                <th>虚拟币余额</th>
                <th>操作</th>
           </tr>

            ";
        // line 37
        if ((isset($context["cashes"]) ? $context["cashes"] : null)) {
            // line 38
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["cashes"]) ? $context["cashes"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["cash"]) {
                // line 39
                echo "                <tr>
                    <td><a target=\"_blank\" href=\"";
                // line 40
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($context["cash"], "userId", array()))), "html", null, true);
                echo "\">
                    ";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["cash"], "userId", array()), array(), "array"), "nickname", array()), "html", null, true);
                echo "</a></td>
                    <td>";
                // line 42
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->scoreTextFilter($this->getAttribute($context["cash"], "cash", array())), "html", null, true);
                echo "</td>
                    <td><a href=\"javascript:;\" class=\"btn btn-sm btn-default\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
                // line 43
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_coin_admin_edit", array("id" => $this->getAttribute($context["cash"], "id", array()))), "html", null, true);
                echo "\">修改</a></td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cash'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "
            ";
        }
        // line 48
        echo "      
        </table>
    </div>
 ";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo "
<div class=\"alert alert-info\">
  <p><strong>注：虚拟币记录只有在进入虚拟币页面时才会记录</strong></p>
</div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Coin:coin-admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 51,  116 => 48,  112 => 46,  103 => 43,  99 => 42,  95 => 41,  91 => 40,  88 => 39,  83 => 38,  81 => 37,  62 => 21,  51 => 13,  47 => 11,  44 => 10,  41 => 9,  34 => 3,  30 => 1,  28 => 6,  26 => 5,  11 => 1,);
    }
}
/* {% extends 'TopxiaAdminBundle:System:layout.html.twig' %}*/
/* */
/* {% block title %}虚拟币管理 - {{ parent() }}{% endblock %}*/
/* */
/* {% set menu = 'coin' %}*/
/* {% set submenu = 'admin' %}*/
/* */
/*  */
/* {% block main %}*/
/*     {% include 'TopxiaAdminBundle:Coin:coin-ul.html.twig' %}*/
/* */
/*     <div class="page-header">*/
/*         <a href="javascript:;" class="btn btn-info btn-sm pull-right" data-toggle="modal" data-target="#modal" data-url="{{path('admin_coin_give')}}">发放虚拟币</a>*/
/*         <h1>虚拟币管理</h1>*/
/* */
/*     </div>*/
/* */
/*     <form id="coin-orders-search-form" class="form-inline well well-sm" action="" method="get" novalidate>*/
/* */
/*         <div class="form-group">*/
/*           <input class="form-control " type="text" placeholder="请输入用户名" name="nickName" value="{{ app.request.get('nickName') }}">*/
/* */
/*           <button class="btn btn-primary">搜索</button>*/
/*         </div>*/
/*     </form>*/
/* */
/* */
/* */
/*     <div class="table-responsive">*/
/*         <table class="table table-striped">*/
/*            <tr>*/
/*                 <th width="70%">用户名</th>*/
/*                 <th>虚拟币余额</th>*/
/*                 <th>操作</th>*/
/*            </tr>*/
/* */
/*             {% if cashes %}*/
/*                 {% for cash in cashes %}*/
/*                 <tr>*/
/*                     <td><a target="_blank" href="{{ path('user_show', {id:cash.userId}) }}">*/
/*                     {{users[cash.userId].nickname}}</a></td>*/
/*                     <td>{{cash.cash|score_text}}</td>*/
/*                     <td><a href="javascript:;" class="btn btn-sm btn-default" data-toggle="modal" data-target="#modal" data-url="{{path('admin_coin_admin_edit',{id:cash.id})}}">修改</a></td>*/
/*                 </tr>*/
/*                 {% endfor %}*/
/* */
/*             {% endif %}*/
/*       */
/*         </table>*/
/*     </div>*/
/*  {{ web_macro.paginator(paginator) }}*/
/* <div class="alert alert-info">*/
/*   <p><strong>注：虚拟币记录只有在进入虚拟币页面时才会记录</strong></p>*/
/* </div>*/
/* {% endblock %}*/
