<?php

/* TopxiaAdminBundle:Coin:coin-course-set.html.twig */
class __TwigTemplate_b2868e0078e754c0a4a75ea82cde34a717777a92c7a54d7cb3eea4eeccfca8af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:Coin:coin-course-set.html.twig", 1);
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
        $context["menu"] = "admin_coin_model";
        // line 5
        $context["script_controller"] = "coin/save";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        // line 7
        echo "  ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "
  <form class=\"form-horizontal\" method=\"post\" id=\"coin-model-form\" action=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("admin_coin_model_save");
        echo "\">
  
    <ul class=\"breadcrumb\">
      <li><a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("admin_coin_model");
        echo "\">使用方式设置</a></li>
      <li class=\"active\">课程价格设置</li>
    </ul>

    <p>
      <span>使用方式：</span>
      <strong class=\"text-info\">";
        // line 17
        if (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "cash_model", array()) == "deduction")) {
            echo "用于抵扣";
        } else {
            echo "用于标价";
        }
        echo "</strong>
      <span class=\"mll\" data-val=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["set"]) ? $context["set"] : null), "cash_rate", array()), "html", null, true);
        echo "\" id=\"cash-rate\">汇率：</span>
      1元人民币兑换 <strong class=\"text-info\">";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["set"]) ? $context["set"] : null), "cash_rate", array()), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_name"), "html", null, true);
        echo "
      ";
        // line 20
        if (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "cash_model", array()) == "deduction")) {
        } else {
            echo "<a class=\"btn btn-info btn-sm set mlm\"><span class=\"glyphicon glyphicon-repeat\"></span> 按汇率批量设置价格</a>";
        }
        // line 21
        echo "    </p>
    <div id=\"typelist\">
      ";
        // line 23
        $this->loadTemplate("TopxiaAdminBundle:Coin:coin-table-setting.html.twig", "TopxiaAdminBundle:Coin:coin-course-set.html.twig", 23)->display($context);
        // line 24
        echo "    </div>
    <input type=\"hidden\" name=\"cash_model\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["set"]) ? $context["set"] : null), "cash_model", array()), "html", null, true);
        echo "\">
    <input type=\"hidden\" name=\"cash_rate\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["set"]) ? $context["set"] : null), "cash_rate", array()), "html", null, true);
        echo "\">
    <input type=\"hidden\" name=\"type\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "course")) : ("course")), "html", null, true);
        echo "\">
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
    <p>
      <button type=\"submit\" class=\"btn btn-primary pull-right\" id=\"finish\" >完成</button>
      <a type=\"button\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("admin_coin_model", array("set" => (isset($context["set"]) ? $context["set"] : null))), "html", null, true);
        echo "\" class=\"btn btn-link pull-right\">上一步</a>
    </p>
  </form>
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Coin:coin-course-set.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 31,  100 => 28,  96 => 27,  92 => 26,  88 => 25,  85 => 24,  83 => 23,  79 => 21,  74 => 20,  68 => 19,  64 => 18,  56 => 17,  47 => 11,  41 => 8,  36 => 7,  33 => 6,  29 => 1,  27 => 5,  25 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaAdminBundle::layout.html.twig' %}*/
/* */
/* {% set menu = 'admin_coin_model' %}*/
/* */
/* {% set script_controller = "coin/save" %}*/
/* {% block main %}*/
/*   {{ web_macro.flash_messages() }}*/
/*   <form class="form-horizontal" method="post" id="coin-model-form" action="{{path('admin_coin_model_save')}}">*/
/*   */
/*     <ul class="breadcrumb">*/
/*       <li><a href="{{path('admin_coin_model')}}">使用方式设置</a></li>*/
/*       <li class="active">课程价格设置</li>*/
/*     </ul>*/
/* */
/*     <p>*/
/*       <span>使用方式：</span>*/
/*       <strong class="text-info">{% if set.cash_model =="deduction" %}用于抵扣{% else %}用于标价{% endif %}</strong>*/
/*       <span class="mll" data-val="{{ set.cash_rate}}" id="cash-rate">汇率：</span>*/
/*       1元人民币兑换 <strong class="text-info">{{ set.cash_rate}}</strong> {{ setting('coin.coin_name') }}*/
/*       {% if set.cash_model =="deduction" %}{% else %}<a class="btn btn-info btn-sm set mlm"><span class="glyphicon glyphicon-repeat"></span> 按汇率批量设置价格</a>{% endif %}*/
/*     </p>*/
/*     <div id="typelist">*/
/*       {% include 'TopxiaAdminBundle:Coin:coin-table-setting.html.twig' %}*/
/*     </div>*/
/*     <input type="hidden" name="cash_model" value="{{ set.cash_model }}">*/
/*     <input type="hidden" name="cash_rate" value="{{ set.cash_rate }}">*/
/*     <input type="hidden" name="type" value="{{type|default('course')}}">*/
/*     <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/*     <p>*/
/*       <button type="submit" class="btn btn-primary pull-right" id="finish" >完成</button>*/
/*       <a type="button" href="{{ url('admin_coin_model',{set:set}) }}" class="btn btn-link pull-right">上一步</a>*/
/*     </p>*/
/*   </form>*/
/* {% endblock %}*/
