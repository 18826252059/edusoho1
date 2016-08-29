<?php

/* TopxiaWebBundle:MoneyRecord:payout.html.twig */
class __TwigTemplate_c1fbd22416796b18048084718edae2cefc2ce44f9c622951af820476862f2082 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:MoneyRecord:layout.html.twig", "TopxiaWebBundle:MoneyRecord:payout.html.twig", 1);
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
        $context["main_nav"] = "PayoutRecords";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_main_body($context, array $blocks = array())
    {
        // line 8
        echo "  <table class=\"table table-striped table-hover\" id=\"payouts-table\">
    <thead>
      <th>名称</th>
      <th>消费金额</th>
      <th>消费时间</th>
    </thead>
    <tbody>
      ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["payoutRecords"]) ? $context["payoutRecords"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["payoutRecord"]) {
            // line 16
            echo "        <tr>
          <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["payoutRecord"], "title", array()), "html", null, true);
            echo "</td>
          <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["payoutRecord"], "amount", array()), "html", null, true);
            echo "</td>
          <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["payoutRecord"], "transactionTime", array()), "html", null, true);
            echo "</td>  
        </tr>
      ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 22
            echo "        <tr>
          <td colspan=\"20\" class=\"empty\">无消费记录</td>
        </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['payoutRecord'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "    </tbody>
  </table>
    ";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:MoneyRecord:payout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 28,  78 => 26,  69 => 22,  61 => 19,  57 => 18,  53 => 17,  50 => 16,  45 => 15,  36 => 8,  33 => 7,  29 => 1,  27 => 5,  25 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle:MoneyRecord:layout.html.twig' %}*/
/* */
/* {% set script_controller = 'my/orders' %}*/
/* */
/* {% set main_nav = 'PayoutRecords' %}*/
/* */
/* {% block main_body %}*/
/*   <table class="table table-striped table-hover" id="payouts-table">*/
/*     <thead>*/
/*       <th>名称</th>*/
/*       <th>消费金额</th>*/
/*       <th>消费时间</th>*/
/*     </thead>*/
/*     <tbody>*/
/*       {% for payoutRecord in payoutRecords %}*/
/*         <tr>*/
/*           <td>{{ payoutRecord.title }}</td>*/
/*           <td>{{ payoutRecord.amount }}</td>*/
/*           <td>{{ payoutRecord.transactionTime }}</td>  */
/*         </tr>*/
/*       {% else %}*/
/*         <tr>*/
/*           <td colspan="20" class="empty">无消费记录</td>*/
/*         </tr>*/
/*       {% endfor %}*/
/*     </tbody>*/
/*   </table>*/
/*     {{ web_macro.paginator(paginator) }}*/
/* {% endblock %}*/
