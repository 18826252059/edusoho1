<?php

/* TopxiaWebBundle:MoneyRecord:index.html.twig */
class __TwigTemplate_49185062bddfa49fbee4f71c93cbe0e61224a0e325d01910b4147ad70095ee16 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:MoneyRecord:layout.html.twig", "TopxiaWebBundle:MoneyRecord:index.html.twig", 1);
        $this->blocks = array(
            'main_body' => array($this, 'block_main_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:MoneyRecord:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["script_controller"] = "my/orders";
        // line 5
        $context["main_nav"] = "IncomeRecords";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_main_body($context, array $blocks = array())
    {
        // line 8
        echo "  <table class=\"table table-striped table-hover\" id=\"incomes-table\">
    <thead>
      <th>金额</th>
      <th>充值方式</th>
      <th>交易号</th>
      <th>充值时间</th>
    </thead>
    <tbody>
      ";
        // line 16
        if ((isset($context["incomeRecords"]) ? $context["incomeRecords"] : null)) {
            // line 17
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["incomeRecords"]) ? $context["incomeRecords"] : null));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["incomeRecord"]) {
                // line 18
                echo "          <tr>
            <td>";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute($context["incomeRecord"], "amount", array()), "html", null, true);
                echo "</td>
            <td></td>
            <td>";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute($context["incomeRecord"], "transactionNo", array()), "html", null, true);
                echo "元</td>
            <td>";
                // line 22
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["incomeRecord"], "createdTime", array()), "Y-n-d H:i"), "html", null, true);
                echo "</td>
          </tr>
        ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 25
                echo "          <tr>
            <td colspan=\"20\" class=\"empty\">无充值记录</td>
          </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['incomeRecord'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "  
      ";
        }
        // line 30
        echo "    </tbody>
  </table>
    ";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:MoneyRecord:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 32,  87 => 30,  83 => 28,  74 => 25,  66 => 22,  62 => 21,  57 => 19,  54 => 18,  48 => 17,  46 => 16,  36 => 8,  33 => 7,  29 => 1,  27 => 5,  25 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle:MoneyRecord:layout.html.twig' %}*/
/* */
/* {% set script_controller = 'my/orders' %}*/
/* */
/* {% set main_nav = 'IncomeRecords' %}*/
/* */
/* {% block main_body %}*/
/*   <table class="table table-striped table-hover" id="incomes-table">*/
/*     <thead>*/
/*       <th>金额</th>*/
/*       <th>充值方式</th>*/
/*       <th>交易号</th>*/
/*       <th>充值时间</th>*/
/*     </thead>*/
/*     <tbody>*/
/*       {% if incomeRecords %}*/
/*         {% for incomeRecord in incomeRecords %}*/
/*           <tr>*/
/*             <td>{{ incomeRecord.amount }}</td>*/
/*             <td></td>*/
/*             <td>{{ incomeRecord.transactionNo }}元</td>*/
/*             <td>{{ incomeRecord.createdTime|date('Y-n-d H:i') }}</td>*/
/*           </tr>*/
/*         {% else %}*/
/*           <tr>*/
/*             <td colspan="20" class="empty">无充值记录</td>*/
/*           </tr>*/
/*         {% endfor %}  */
/*       {% endif %}*/
/*     </tbody>*/
/*   </table>*/
/*     {{ web_macro.paginator(paginator) }}*/
/* {% endblock %}*/
