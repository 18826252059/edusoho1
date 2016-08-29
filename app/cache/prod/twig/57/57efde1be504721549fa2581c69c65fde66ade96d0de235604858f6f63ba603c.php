<?php

/* TopxiaWebBundle:MoneyRecord:layout.html.twig */
class __TwigTemplate_cfb8ddfa8c3eaced578fde7913031f980af5d398030a40b341a2045862244d78 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:My:layout.html.twig", "TopxiaWebBundle:MoneyRecord:layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
            'main_body' => array($this, 'block_main_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:My:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["side_nav"] = "income_records";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "账户余额 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "<div class=\"panel panel-default panel-col\">
  <div class=\"panel-heading\">账户余额</div>
  <div class=\"panel-body\">
  \t<div class=\"record\">
      余额:<span class=\"record_num\">100.00元</span>
      <button type=\"button\" class=\"btn btn-primary\">立即充值</button>
      <span class=\"glyphicon glyphicon-question-sign\"><a href=\"a\">充值帮助</a></span>
    </div>
    ";
        // line 16
        $context["main_nav"] = ((array_key_exists("main_nav", $context)) ? (_twig_default_filter((isset($context["main_nav"]) ? $context["main_nav"] : null), null)) : (null));
        // line 17
        echo "    <ul class=\"nav nav-pills nav-pills-sm clearfix\">
      <li";
        // line 18
        if (((isset($context["main_nav"]) ? $context["main_nav"] : null) == "IncomeRecords")) {
            echo " class=\"active\"";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('routing')->getPath("income_records");
        echo "\">充值记录</a></li>
      <li";
        // line 19
        if (((isset($context["main_nav"]) ? $context["main_nav"] : null) == "PayoutRecords")) {
            echo " class=\"active\"";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('routing')->getPath("payout_records");
        echo "\">消费记录</a></li>
    </ul>

    ";
        // line 22
        $this->displayBlock('main_body', $context, $blocks);
        // line 23
        echo "  </div>
</div>
";
    }

    // line 22
    public function block_main_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:MoneyRecord:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 22,  78 => 23,  76 => 22,  66 => 19,  58 => 18,  55 => 17,  53 => 16,  43 => 8,  40 => 7,  33 => 3,  29 => 1,  27 => 5,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle:My:layout.html.twig' %}*/
/* */
/* {% block title %}账户余额 - {{ parent() }}{% endblock %}*/
/* */
/* {% set side_nav = 'income_records' %}*/
/* */
/* {% block main %}*/
/* <div class="panel panel-default panel-col">*/
/*   <div class="panel-heading">账户余额</div>*/
/*   <div class="panel-body">*/
/*   	<div class="record">*/
/*       余额:<span class="record_num">100.00元</span>*/
/*       <button type="button" class="btn btn-primary">立即充值</button>*/
/*       <span class="glyphicon glyphicon-question-sign"><a href="a">充值帮助</a></span>*/
/*     </div>*/
/*     {% set main_nav = main_nav|default(null) %}*/
/*     <ul class="nav nav-pills nav-pills-sm clearfix">*/
/*       <li{% if main_nav == 'IncomeRecords' %} class="active"{% endif %}><a href="{{ path('income_records') }}">充值记录</a></li>*/
/*       <li{% if main_nav == 'PayoutRecords' %} class="active"{% endif %}><a href="{{ path('payout_records') }}">消费记录</a></li>*/
/*     </ul>*/
/* */
/*     {% block main_body %}{% endblock %}*/
/*   </div>*/
/* </div>*/
/* {% endblock %}*/
