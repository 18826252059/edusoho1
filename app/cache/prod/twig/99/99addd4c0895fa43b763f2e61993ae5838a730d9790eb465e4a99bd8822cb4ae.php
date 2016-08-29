<?php

/* TopxiaAdminBundle:Money:records.html.twig */
class __TwigTemplate_e4e29f1dd12666ce32f8ea72e2e506690cc21845bb1e5ddc28628050cf4b355b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("TopxiaAdminBundle:Order:layout.html.twig", "TopxiaAdminBundle:Money:records.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle:Order:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["admin_macro"] = $this->loadTemplate("TopxiaAdminBundle::macro.html.twig", "TopxiaAdminBundle:Money:records.html.twig", 1);
        // line 6
        $context["menu"] = "money_records";
        // line 2
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "账户明细 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 8
    public function block_main($context, array $blocks = array())
    {
        // line 9
        echo "  <div class=\"page-header\">
    <h1>账户明细</h1>
  </div>

  <form id=\"message-search-form\" class=\"form-inline well well-sm\" action=\"\" method=\"get\" novalidate>
    <div class=\"form-group\">
      <select class=\"form-control\" name=\"type\">
        ";
        // line 16
        echo $this->env->getExtension('topxia_html_twig')->selectOptions($this->env->getExtension('topxia_web_twig')->getDict("moneyRecordType"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "type"), "method"), "交易类型");
        echo "
      </select>
    </div>
    <div class=\"form-group\">
      <input class=\"form-control\" type=\"text\" placeholder=\"交易号\" name=\"transactionNo\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "transactionNo"), "method"), "html", null, true);
        echo "\">
    </div>
    <div class=\"form-group\">
      <input class=\"form-control\" type=\"text\" placeholder=\"交易人用户名\" name=\"nickname\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "nickname"), "method"), "html", null, true);
        echo "\">
    </div>

    <button class=\"btn btn-primary\">搜索</button>
  </form>

  <table class=\"table table-striped table-hover\" id=\"record-table\">
    <thead>
      <tr>
        <th>编号</th>
        <th width=\"20%\">金额(元)</th>
        <th>名称</th>
        <th>交易类型</th>
        <th>交易人</th>
        <th>交易号</th>
        <th>交易时间</th>
      </tr>
    </thead>
    <tbody>
      ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["records"]) ? $context["records"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 43
            echo "        ";
            $context["user"] = (($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["record"], "userId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["record"], "userId", array()), array(), "array"), null)) : (null));
            // line 44
            echo "        <tr>
          <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["record"], "id", array()), "html", null, true);
            echo "</td>
          <td><span class=\"money-text\">";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["record"], "amount", array()), "html", null, true);
            echo "</span></td>
          <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["record"], "title", array()), "html", null, true);
            echo "</td>
          <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["record"], "type", array()), "html", null, true);
            echo "</td>
          <td>";
            // line 49
            echo $context["admin_macro"]->getuser_link((isset($context["user"]) ? $context["user"] : null));
            echo "</td>
          <td>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["record"], "transactionNo", array()), "html", null, true);
            echo "</td>
          <td>";
            // line 51
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["record"], "transactionTime", array()), "Y-n-d H:i"), "html", null, true);
            echo "</td>
        </tr>
      ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 54
            echo "        <tr><td colspan=\"20\"><div class=\"empty\">暂无交易记录</div></td></tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "    </tbody>

\t</table>
  ";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo "

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Money:records.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 59,  138 => 56,  131 => 54,  123 => 51,  119 => 50,  115 => 49,  111 => 48,  107 => 47,  103 => 46,  99 => 45,  96 => 44,  93 => 43,  88 => 42,  66 => 23,  60 => 20,  53 => 16,  44 => 9,  41 => 8,  34 => 4,  30 => 2,  28 => 6,  26 => 1,  11 => 2,);
    }
}
/* {% import "TopxiaAdminBundle::macro.html.twig" as admin_macro %}*/
/* {% extends 'TopxiaAdminBundle:Order:layout.html.twig' %}*/
/* */
/* {% block title %}账户明细 - {{ parent() }}{% endblock %}*/
/* */
/* {% set menu = 'money_records' %}*/
/* */
/* {% block main %}*/
/*   <div class="page-header">*/
/*     <h1>账户明细</h1>*/
/*   </div>*/
/* */
/*   <form id="message-search-form" class="form-inline well well-sm" action="" method="get" novalidate>*/
/*     <div class="form-group">*/
/*       <select class="form-control" name="type">*/
/*         {{ select_options(dict('moneyRecordType'), app.request.query.get('type'), '交易类型') }}*/
/*       </select>*/
/*     </div>*/
/*     <div class="form-group">*/
/*       <input class="form-control" type="text" placeholder="交易号" name="transactionNo" value="{{ app.request.get('transactionNo') }}">*/
/*     </div>*/
/*     <div class="form-group">*/
/*       <input class="form-control" type="text" placeholder="交易人用户名" name="nickname" value="{{ app.request.get('nickname') }}">*/
/*     </div>*/
/* */
/*     <button class="btn btn-primary">搜索</button>*/
/*   </form>*/
/* */
/*   <table class="table table-striped table-hover" id="record-table">*/
/*     <thead>*/
/*       <tr>*/
/*         <th>编号</th>*/
/*         <th width="20%">金额(元)</th>*/
/*         <th>名称</th>*/
/*         <th>交易类型</th>*/
/*         <th>交易人</th>*/
/*         <th>交易号</th>*/
/*         <th>交易时间</th>*/
/*       </tr>*/
/*     </thead>*/
/*     <tbody>*/
/*       {% for record in records %}*/
/*         {% set user = users[record.userId]|default(null) %}*/
/*         <tr>*/
/*           <td>{{ record.id }}</td>*/
/*           <td><span class="money-text">{{ record.amount }}</span></td>*/
/*           <td>{{ record.title }}</td>*/
/*           <td>{{ record.type }}</td>*/
/*           <td>{{ admin_macro.user_link(user) }}</td>*/
/*           <td>{{ record.transactionNo }}</td>*/
/*           <td>{{ record.transactionTime|date('Y-n-d H:i') }}</td>*/
/*         </tr>*/
/*       {% else %}*/
/*         <tr><td colspan="20"><div class="empty">暂无交易记录</div></td></tr>*/
/*       {% endfor %}*/
/*     </tbody>*/
/* */
/* 	</table>*/
/*   {{ web_macro.paginator(paginator) }}*/
/* */
/* {% endblock %}*/
