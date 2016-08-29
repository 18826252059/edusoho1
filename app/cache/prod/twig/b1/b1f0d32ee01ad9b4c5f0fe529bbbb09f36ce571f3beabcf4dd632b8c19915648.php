<?php

/* TopxiaAdminBundle:MoneyCard:create-modal.html.twig */
class __TwigTemplate_b761fd3a15b641c9553448961978893959681b7ad11624c0a1c38c319ab007a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "TopxiaAdminBundle:MoneyCard:create-modal.html.twig", 1);
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
        echo "生成充值卡";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "
<form id=\"money-card-create-form\" class=\"form-horizontal\" method=\"post\" action=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("admin_money_card_create");
        echo "\">

  <div class=\"row form-group\">
    <div class=\"col-md-2 control-label\">
      <label for=\"money\">金额</label>
    </div>
    <div class=\"col-md-7 controls\">
      <input type=\"text\" id=\"money\" data-url=\"\" name=\"money\" class=\"form-control\" >
    </div>
  </div>

  <div class=\"row form-group\">
    <div class=\"col-md-2 control-label\">
      <label for=\"cardPrefix\">卡号前缀</label>
    </div>
    <div class=\"col-md-7 controls\">
      <input type=\"text\" id=\"cardPrefix\" name=\"cardPrefix\" data-url=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("admin_money_card_batch_card_prefix_check");
        echo "\" class=\"form-control\" >
    </div>
  </div>

   <div class=\"row form-group\">
    <div class=\"col-md-2 control-label\">
      <label for=\"cardLength\">卡号位数</label>
    </div>
      <div class=\"col-md-7 controls\">
        <input type=\"text\" id=\"cardLength\" name=\"cardLength\" class=\"form-control\">
      <p class=\"help-block\">卡号前缀位数包括在内</p>
    </div>
  </div>

  <div class=\"row form-group\">
    <div class=\"col-md-2 control-label\">
    <label for=\"passwordLength\">密码位数</label>
  </div>
    <div class=\"col-md-7 controls\">
      <input type=\"text\" id=\"passwordLength\" name=\"passwordLength\" class=\"form-control\">
    </div>
  </div>

  <div class=\"row form-group\">
    <div class=\"col-md-2 control-label\">
    <label for=\"deadlineCreate\">有效期</label>
  </div>
    <div class=\"col-md-7 controls\" style=\"z-index:2000;\">
      <input type=\"text\" id=\"deadlineCreate\" name=\"deadline\" class=\"form-control\" value=\"\">
    </div>
  </div>

  <div class=\"row form-group\">
    <div class=\"col-md-2 control-label\">
    <label for=\"number\">生成数量</label>
  </div>
    <div class=\"col-md-7 controls\">
      <input type=\"text\" id=\"number\" name=\"number\" class=\"form-control\">
    </div>
  </div>

  <div class=\"row form-group\">
    <div class=\"col-md-2 control-label\">
    <label for=\"note\">备注</label>
  </div>
    <div class=\"col-md-7 controls\">
      <textarea class=\"form-control\" rows=\"3\" name=\"note\"></textarea>
    </div>
  </div>

  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">

</form>
";
    }

    // line 79
    public function block_footer($context, array $blocks = array())
    {
        // line 80
        echo "  <button type=\"button\" class=\"btn btn-link pull-right\" data-dismiss=\"modal\">取消</button>
  <button type=\"submit\" class=\"btn btn-primary pull-right\" data-loading-text=\"正在生成，请稍后\" data-toggle=\"form-submit\" data-target=\"#money-card-create-form\" id=\"batch-create\">提交</button>

  <script>app.load('money-card/create-modal')</script>
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:MoneyCard:create-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 80,  125 => 79,  117 => 74,  64 => 24,  45 => 8,  42 => 7,  39 => 6,  33 => 5,  29 => 1,  27 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::bootstrap-modal-layout.html.twig' %}*/
/* */
/* {% set modalSize = 'large' %}*/
/* */
/* {% block title %}生成充值卡{% endblock %}*/
/* {% block body %}*/
/* */
/* <form id="money-card-create-form" class="form-horizontal" method="post" action="{{ path('admin_money_card_create')}}">*/
/* */
/*   <div class="row form-group">*/
/*     <div class="col-md-2 control-label">*/
/*       <label for="money">金额</label>*/
/*     </div>*/
/*     <div class="col-md-7 controls">*/
/*       <input type="text" id="money" data-url="" name="money" class="form-control" >*/
/*     </div>*/
/*   </div>*/
/* */
/*   <div class="row form-group">*/
/*     <div class="col-md-2 control-label">*/
/*       <label for="cardPrefix">卡号前缀</label>*/
/*     </div>*/
/*     <div class="col-md-7 controls">*/
/*       <input type="text" id="cardPrefix" name="cardPrefix" data-url="{{ path('admin_money_card_batch_card_prefix_check') }}" class="form-control" >*/
/*     </div>*/
/*   </div>*/
/* */
/*    <div class="row form-group">*/
/*     <div class="col-md-2 control-label">*/
/*       <label for="cardLength">卡号位数</label>*/
/*     </div>*/
/*       <div class="col-md-7 controls">*/
/*         <input type="text" id="cardLength" name="cardLength" class="form-control">*/
/*       <p class="help-block">卡号前缀位数包括在内</p>*/
/*     </div>*/
/*   </div>*/
/* */
/*   <div class="row form-group">*/
/*     <div class="col-md-2 control-label">*/
/*     <label for="passwordLength">密码位数</label>*/
/*   </div>*/
/*     <div class="col-md-7 controls">*/
/*       <input type="text" id="passwordLength" name="passwordLength" class="form-control">*/
/*     </div>*/
/*   </div>*/
/* */
/*   <div class="row form-group">*/
/*     <div class="col-md-2 control-label">*/
/*     <label for="deadlineCreate">有效期</label>*/
/*   </div>*/
/*     <div class="col-md-7 controls" style="z-index:2000;">*/
/*       <input type="text" id="deadlineCreate" name="deadline" class="form-control" value="">*/
/*     </div>*/
/*   </div>*/
/* */
/*   <div class="row form-group">*/
/*     <div class="col-md-2 control-label">*/
/*     <label for="number">生成数量</label>*/
/*   </div>*/
/*     <div class="col-md-7 controls">*/
/*       <input type="text" id="number" name="number" class="form-control">*/
/*     </div>*/
/*   </div>*/
/* */
/*   <div class="row form-group">*/
/*     <div class="col-md-2 control-label">*/
/*     <label for="note">备注</label>*/
/*   </div>*/
/*     <div class="col-md-7 controls">*/
/*       <textarea class="form-control" rows="3" name="note"></textarea>*/
/*     </div>*/
/*   </div>*/
/* */
/*   <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/* */
/* </form>*/
/* {% endblock %}*/
/* */
/* {% block footer %}*/
/*   <button type="button" class="btn btn-link pull-right" data-dismiss="modal">取消</button>*/
/*   <button type="submit" class="btn btn-primary pull-right" data-loading-text="正在生成，请稍后" data-toggle="form-submit" data-target="#money-card-create-form" id="batch-create">提交</button>*/
/* */
/*   <script>app.load('money-card/create-modal')</script>*/
/* {% endblock %}*/
