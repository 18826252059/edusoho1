<?php

/* TopxiaAdminBundle:MoneyCard:index.html.twig */
class __TwigTemplate_8c00d4be1a9d44a5c20ba234d93ba0889f83715292f44f279bcb40fcbcdb4754 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle:User:layout.html.twig", "TopxiaAdminBundle:MoneyCard:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle:User:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["menu"] = "money_card";
        // line 7
        $context["script_controller"] = "money-card/money-card-list";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "用户管理 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 9
    public function block_main($context, array $blocks = array())
    {
        // line 10
        echo "
<div class=\"page-header clearfix\">
  <button class=\"btn btn-info btn-sm pull-right\" id=\"add-navigation-btn\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("admin_money_card_create");
        echo "\">生成充值卡</button>
  <h1 class=\"pull-left\">充值卡管理</h1>
</div>



<ul class=\"nav nav-tabs\">
  <li class=\"active\"><a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("admin_money_card");
        echo "\">充值卡</a></li>
  <li><a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("admin_money_card_batch");
        echo "\">生成记录</a></li>
</ul>
<br>

    <form id=\"money-card-search-form\" class=\"form-inline well well-sm\" action=\"\" method=\"get\" novalidate>

        <div class=\"form-group\">
          <input type=\"text\" id=\"cardIdSearch\" name=\"cardId\" class=\"form-control\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "cardId"), "method"), "html", null, true);
        echo "\" placeholder=\"卡号\">
        </div>

        <span class=\"divider\"></span>

        <div class=\"form-group\">
          <input type=\"text\" id=\"deadlineSearch\" name=\"deadlineSearch\" class=\"form-control\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "deadlineSearch"), "method"), "html", null, true);
        echo "\" placeholder=\"有效期\">
        </div>

        <span class=\"divider\"></span>

        <div class=\"form-group\">
          <input type=\"text\" id=\"batchIdSearch\" name=\"batchId\" class=\"form-control\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "batchId"), "method"), "html", null, true);
        echo "\" placeholder=\"批次\">
        </div>

        <button class=\"btn btn-primary\">搜索</button>
    </form>

    <table id=\"money-card-table\" class=\"table table-striped table-hover\" data-search-form=\"#money-card-search-form\">
      <thead>
        <tr>
          <th>卡号</th>
          <th>密码</th>
          <th>有效期</th>
          <th>批次</th>
          <th>状态</th>
          <th>充值记录</th>
          <th>操作</th>
        </tr>
      </thead>
      <tbody>
      ";
        // line 58
        if ((isset($context["moneyCards"]) ? $context["moneyCards"] : null)) {
            // line 59
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["moneyCards"]) ? $context["moneyCards"] : null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["moneyCard"]) {
                // line 60
                echo "            ";
                $this->loadTemplate("TopxiaAdminBundle:MoneyCard:money-card-table-tr.html.twig", "TopxiaAdminBundle:MoneyCard:index.html.twig", 60)->display(array_merge($context, array("moneyCard" => $context["moneyCard"])));
                // line 61
                echo "        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['moneyCard'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "      </tbody>
    </table>
      ";
        } else {
            // line 65
            echo "      </tbody>
    </table>
    <div class='empty'>数据库君表示自己非常不给力，啥都没找到~~</div>
      ";
        }
        // line 69
        echo "  ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo "

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:MoneyCard:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 69,  154 => 65,  149 => 62,  135 => 61,  132 => 60,  114 => 59,  112 => 58,  90 => 39,  81 => 33,  72 => 27,  62 => 20,  58 => 19,  48 => 12,  44 => 10,  41 => 9,  34 => 3,  30 => 1,  28 => 7,  26 => 5,  11 => 1,);
    }
}
/* {% extends 'TopxiaAdminBundle:User:layout.html.twig' %}*/
/* */
/* {% block title %}用户管理 - {{ parent() }}{% endblock %}*/
/* */
/* {% set menu = 'money_card' %}*/
/* */
/* {% set script_controller = 'money-card/money-card-list' %}*/
/* */
/* {% block main %}*/
/* */
/* <div class="page-header clearfix">*/
/*   <button class="btn btn-info btn-sm pull-right" id="add-navigation-btn" data-toggle="modal" data-target="#modal" data-url="{{path('admin_money_card_create')}}">生成充值卡</button>*/
/*   <h1 class="pull-left">充值卡管理</h1>*/
/* </div>*/
/* */
/* */
/* */
/* <ul class="nav nav-tabs">*/
/*   <li class="active"><a href="{{ path('admin_money_card') }}">充值卡</a></li>*/
/*   <li><a href="{{ path('admin_money_card_batch') }}">生成记录</a></li>*/
/* </ul>*/
/* <br>*/
/* */
/*     <form id="money-card-search-form" class="form-inline well well-sm" action="" method="get" novalidate>*/
/* */
/*         <div class="form-group">*/
/*           <input type="text" id="cardIdSearch" name="cardId" class="form-control" value="{{ app.request.query.get('cardId') }}" placeholder="卡号">*/
/*         </div>*/
/* */
/*         <span class="divider"></span>*/
/* */
/*         <div class="form-group">*/
/*           <input type="text" id="deadlineSearch" name="deadlineSearch" class="form-control" value="{{ app.request.query.get('deadlineSearch') }}" placeholder="有效期">*/
/*         </div>*/
/* */
/*         <span class="divider"></span>*/
/* */
/*         <div class="form-group">*/
/*           <input type="text" id="batchIdSearch" name="batchId" class="form-control" value="{{ app.request.query.get('batchId') }}" placeholder="批次">*/
/*         </div>*/
/* */
/*         <button class="btn btn-primary">搜索</button>*/
/*     </form>*/
/* */
/*     <table id="money-card-table" class="table table-striped table-hover" data-search-form="#money-card-search-form">*/
/*       <thead>*/
/*         <tr>*/
/*           <th>卡号</th>*/
/*           <th>密码</th>*/
/*           <th>有效期</th>*/
/*           <th>批次</th>*/
/*           <th>状态</th>*/
/*           <th>充值记录</th>*/
/*           <th>操作</th>*/
/*         </tr>*/
/*       </thead>*/
/*       <tbody>*/
/*       {% if moneyCards %}*/
/*         {% for moneyCard in moneyCards %}*/
/*             {% include 'TopxiaAdminBundle:MoneyCard:money-card-table-tr.html.twig' with {moneyCard:moneyCard} %}*/
/*         {% endfor %}*/
/*       </tbody>*/
/*     </table>*/
/*       {% else %}*/
/*       </tbody>*/
/*     </table>*/
/*     <div class='empty'>数据库君表示自己非常不给力，啥都没找到~~</div>*/
/*       {% endif %}*/
/*   {{ web_macro.paginator(paginator) }}*/
/* */
/* {% endblock %}*/
