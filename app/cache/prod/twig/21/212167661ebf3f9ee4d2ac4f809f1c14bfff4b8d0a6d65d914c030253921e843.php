<?php

/* TopxiaWebBundle:Coin:coin-change-modal.html.twig */
class __TwigTemplate_eb96ab8a3ee4c13438fad52b0e164a20e071018dd2eaf31dfbec7acd713c855e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "TopxiaWebBundle:Coin:coin-change-modal.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::bootstrap-modal-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["modalSize"] = "large";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "兑换";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "
<form id=\"change-form\" class=\"form-horizontal\" method=\"post\" action=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("coin_change");
        echo "\">

  <div class=\"row form-group\">
    <div class=\"col-md-3 control\">
      <label for=\"amount\">可兑换金额(元):</label>
    </div>
    <div class=\"col-md-3 controls\">
       <label class=\"money-text\">";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["changeAmount"]) ? $context["changeAmount"] : null), "html", null, true);
        echo "</label>
    </div>

    <div class=\"col-md-3 control\">
      <label for=\"amount\">已兑换:</label>
    </div>
    <div class=\"col-md-3 controls\">
       <label class=\"money-text\">";
        // line 22
        echo twig_escape_filter($this->env, ((isset($context["amount"]) ? $context["amount"] : null) - (isset($context["changeAmount"]) ? $context["changeAmount"] : null)), "html", null, true);
        echo "</label>
    </div>

  </div>
  <div class=\"table-responsive\">
  <table class=\"table table-striped\">
    <tr>
      <th>消费赠送</th>
      <th>赠送";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_name"), "html", null, true);
        echo "</th>
    </tr>
    ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["data"]);
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 33
            echo "    <tr>
      <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "send", array()), "html", null, true);
            echo "</td><td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "sendAmount", array()), "html", null, true);
            echo "</td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "  </table>
  ";
        // line 38
        if ( !(isset($context["data"]) ? $context["data"] : null)) {
            // line 39
            echo "    <div class=\"empty\">暂无可兑换信息</div>
  ";
        }
        // line 41
        echo "</div>
  <div class=\"row form-group\">
    <div class=\"col-md-3 control\">
      <label for=\"amount\">消费:</label>
    </div>
    <div class=\"col-md-3 controls\">
       <label class=\"money-text\">";
        // line 47
        echo twig_escape_filter($this->env, ((isset($context["changeAmount"]) ? $context["changeAmount"] : null) - (isset($context["canUseAmount"]) ? $context["canUseAmount"] : null)), "html", null, true);
        echo "</label>
    </div>
    <div class=\"col-md-3 control\">
      <label for=\"amount\">累计赠送:</label>
    </div>
    <div class=\"col-md-3 controls\">
       <label class=\"money-text\">";
        // line 53
        echo twig_escape_filter($this->env, (isset($context["canChange"]) ? $context["canChange"] : null), "html", null, true);
        echo "</label>
    </div>
  </div>

  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">

</form>
";
    }

    // line 62
    public function block_footer($context, array $blocks = array())
    {
        // line 63
        echo "  <button id=\"create-btn\" data-submiting-text=\"正在提交\" type=\"submit\" class=\"btn btn-primary pull-right\" data-toggle=\"form-submit\" data-target=\"#change-form\">兑换</button>
  <button type=\"button\" class=\"btn btn-link pull-right\" data-dismiss=\"modal\">取消</button>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Coin:coin-change-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 63,  140 => 62,  132 => 57,  125 => 53,  116 => 47,  108 => 41,  104 => 39,  102 => 38,  99 => 37,  88 => 34,  85 => 33,  81 => 32,  76 => 30,  65 => 22,  55 => 15,  45 => 8,  42 => 7,  39 => 6,  33 => 5,  29 => 1,  27 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::bootstrap-modal-layout.html.twig' %}*/
/* */
/* {% set modalSize = 'large' %}*/
/* */
/* {% block title %}兑换{% endblock %}*/
/* {% block body %}*/
/* */
/* <form id="change-form" class="form-horizontal" method="post" action="{{path('coin_change')}}">*/
/* */
/*   <div class="row form-group">*/
/*     <div class="col-md-3 control">*/
/*       <label for="amount">可兑换金额(元):</label>*/
/*     </div>*/
/*     <div class="col-md-3 controls">*/
/*        <label class="money-text">{{changeAmount}}</label>*/
/*     </div>*/
/* */
/*     <div class="col-md-3 control">*/
/*       <label for="amount">已兑换:</label>*/
/*     </div>*/
/*     <div class="col-md-3 controls">*/
/*        <label class="money-text">{{amount-changeAmount}}</label>*/
/*     </div>*/
/* */
/*   </div>*/
/*   <div class="table-responsive">*/
/*   <table class="table table-striped">*/
/*     <tr>*/
/*       <th>消费赠送</th>*/
/*       <th>赠送{{setting('coin.coin_name')}}</th>*/
/*     </tr>*/
/*     {% for data in data%}*/
/*     <tr>*/
/*       <td>{{data.send}}</td><td>{{data.sendAmount}}</td>*/
/*     </tr>*/
/*     {% endfor %}*/
/*   </table>*/
/*   {% if not data %}*/
/*     <div class="empty">暂无可兑换信息</div>*/
/*   {% endif %}*/
/* </div>*/
/*   <div class="row form-group">*/
/*     <div class="col-md-3 control">*/
/*       <label for="amount">消费:</label>*/
/*     </div>*/
/*     <div class="col-md-3 controls">*/
/*        <label class="money-text">{{changeAmount-canUseAmount}}</label>*/
/*     </div>*/
/*     <div class="col-md-3 control">*/
/*       <label for="amount">累计赠送:</label>*/
/*     </div>*/
/*     <div class="col-md-3 controls">*/
/*        <label class="money-text">{{canChange}}</label>*/
/*     </div>*/
/*   </div>*/
/* */
/*   <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/* */
/* </form>*/
/* {% endblock %}*/
/* */
/* {% block footer %}*/
/*   <button id="create-btn" data-submiting-text="正在提交" type="submit" class="btn btn-primary pull-right" data-toggle="form-submit" data-target="#change-form">兑换</button>*/
/*   <button type="button" class="btn btn-link pull-right" data-dismiss="modal">取消</button>*/
/* {% endblock %}*/
