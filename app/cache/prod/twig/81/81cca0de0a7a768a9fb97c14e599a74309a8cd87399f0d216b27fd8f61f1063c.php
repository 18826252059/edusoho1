<?php

/* TopxiaAdminBundle:EduCloud:sms-bill.html.twig */
class __TwigTemplate_1f049516d623fee375c98d2dd12105b6df740f10dae71019055437fab91e0071 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle:Cloud:layout.html.twig", "TopxiaAdminBundle:EduCloud:sms-bill.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'maincontent' => array($this, 'block_maincontent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle:Cloud:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["submenu"] = "sms";
        // line 6
        $context["script_controller"] = "";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "云短信账单 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 8
    public function block_maincontent($context, array $blocks = array())
    {
        // line 9
        echo "\t<div class=\"page-header\"><h1>云短信账单</h1></div>
\t<div class=\"well well-sm\">
\t  账户余额：<strong class=\"text-success\">";
        // line 11
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["account"]) ? $context["account"] : null), "cash", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["account"]) ? $context["account"] : null), "cash", array()), 0)) : (0)), "html", null, true);
        echo "元</strong>&nbsp;&nbsp;&nbsp;&nbsp;
\t  <a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("admin_cloud_recharge");
        echo "\" target=\"_blank\" class=\"btn btn-primary\">充值</a>
\t  <a href=\"http://open.edusoho.com/article/1#recharge\" style=\"float:right;\" target=\"_blank\" class=\"btn btn-link\">充值帮助</a>
\t</div>

  <table class=\"table table-hover\" id=\"bill-table\">
    <tr>
      <th>账单日期</th>
      <th>账单金额</th>
      <th>账单明细</th>
      <th>生成时间</th>
    </tr>
    ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["bills"]) ? $context["bills"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["bill"]) {
            // line 24
            echo "    <tr>
      <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["bill"], "date", array()), "html", null, true);
            echo "</td>
      <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["bill"], "amount", array()), "html", null, true);
            echo "</td>
      <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["bill"], "title", array()), "html", null, true);
            echo "</td>
      <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["bill"], "createdTime", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "</td>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 30
            echo "      <tr><td colspan=\"20\"><div class=\"empty\">暂无账单记录</div></td></tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bill'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "  </table>

  ";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:EduCloud:sms-bill.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 34,  100 => 32,  93 => 30,  86 => 28,  82 => 27,  78 => 26,  74 => 25,  71 => 24,  66 => 23,  52 => 12,  48 => 11,  44 => 9,  41 => 8,  34 => 3,  30 => 1,  28 => 6,  26 => 5,  11 => 1,);
    }
}
/* {% extends 'TopxiaAdminBundle:Cloud:layout.html.twig' %}*/
/* */
/* {% block title %}云短信账单 - {{ parent() }}{% endblock %}*/
/* */
/* {% set submenu = 'sms' %} */
/* {% set script_controller = '' %}*/
/* */
/* {% block maincontent %}*/
/* 	<div class="page-header"><h1>云短信账单</h1></div>*/
/* 	<div class="well well-sm">*/
/* 	  账户余额：<strong class="text-success">{{account.cash|default(0)}}元</strong>&nbsp;&nbsp;&nbsp;&nbsp;*/
/* 	  <a href="{{path('admin_cloud_recharge')}}" target="_blank" class="btn btn-primary">充值</a>*/
/* 	  <a href="http://open.edusoho.com/article/1#recharge" style="float:right;" target="_blank" class="btn btn-link">充值帮助</a>*/
/* 	</div>*/
/* */
/*   <table class="table table-hover" id="bill-table">*/
/*     <tr>*/
/*       <th>账单日期</th>*/
/*       <th>账单金额</th>*/
/*       <th>账单明细</th>*/
/*       <th>生成时间</th>*/
/*     </tr>*/
/*     {% for bill in bills %}*/
/*     <tr>*/
/*       <td>{{ bill.date }}</td>*/
/*       <td>{{ bill.amount }}</td>*/
/*       <td>{{ bill.title }}</td>*/
/*       <td>{{ bill.createdTime| date('Y-m-d H:i:s') }}</td>*/
/*     {% else %}*/
/*       <tr><td colspan="20"><div class="empty">暂无账单记录</div></td></tr>*/
/*     {% endfor %}*/
/*   </table>*/
/* */
/*   {{ web_macro.paginator(paginator) }} */
/* {% endblock %}*/
