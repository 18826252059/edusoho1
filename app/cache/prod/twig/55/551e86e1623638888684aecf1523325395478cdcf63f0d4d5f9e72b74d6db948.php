<?php

/* TopxiaAdminBundle:Coin:order-create-modal.html.twig */
class __TwigTemplate_096a0c48156189f98ce56f29bc65d7ef1a2cac0cc548fdde554b64ca18dc6629 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "TopxiaAdminBundle:Coin:order-create-modal.html.twig", 1);
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
        echo "发放虚拟币";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "
<form id=\"give-coin-form\" class=\"form-horizontal\" method=\"post\" action=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("admin_coin_give");
        echo "\">

  <div class=\"row form-group\">
    <div class=\"col-md-3 control-label\">
      <label for=\"nickname\">用户名</label>
    </div>
    <div class=\"col-md-7 controls\">
      <input id=\"nickname\" type=\"text\" name=\"nickname\" value=\"\"  class=\"form-control\" 
      data-url=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("admin_coin_give_check_nickname");
        echo "\"/>
      <div class=\"help-block\">只能选择系统中已注册的用户</div>
    </div>
  </div>

  <div class=\"row form-group\">
    <div class=\"col-md-3 control-label\">
      <label for=\"name\">类型</label>
    </div>
    <div class=\"col-md-7 controls\">
      <input type=\"radio\" id=\"type_0\" name=\"type\"  value=\"add\" checked=true >
              <label for=\"type_0\" class=\"required\" style=\"padding: 0 20px 0 0px;\">添加</label>
              <input type=\"radio\" id=\"type_1\" name=\"type\"value=\"cut\" >
              <label for=\"type_1\"  >扣除</label>
    </div>
  </div>

  <div class=\"row form-group\">
    <div class=\"col-md-3 control-label\">
      <label for=\"amount\">数量</label>
    </div>
    <div class=\"col-md-7 controls\">
      <input type=\"text\" id=\"amount\" name=\"amount\"  class=\"form-control\" >
    </div>
  </div>

  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">

</form>
";
    }

    // line 47
    public function block_footer($context, array $blocks = array())
    {
        // line 48
        echo "  <button id=\"create-btn\" data-submiting-text=\"正在提交\" type=\"submit\" class=\"btn btn-primary pull-right\" data-toggle=\"form-submit\" data-target=\"#give-coin-form\">提交</button>
  <button type=\"button\" class=\"btn btn-link pull-right\" data-dismiss=\"modal\">取消</button>
  <script>app.load('coin/give')</script>
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Coin:order-create-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 48,  93 => 47,  85 => 42,  56 => 16,  45 => 8,  42 => 7,  39 => 6,  33 => 5,  29 => 1,  27 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::bootstrap-modal-layout.html.twig' %}*/
/* */
/* {% set modalSize = 'large' %}*/
/* */
/* {% block title %}发放虚拟币{% endblock %}*/
/* {% block body %}*/
/* */
/* <form id="give-coin-form" class="form-horizontal" method="post" action="{{path('admin_coin_give')}}">*/
/* */
/*   <div class="row form-group">*/
/*     <div class="col-md-3 control-label">*/
/*       <label for="nickname">用户名</label>*/
/*     </div>*/
/*     <div class="col-md-7 controls">*/
/*       <input id="nickname" type="text" name="nickname" value=""  class="form-control" */
/*       data-url="{{ path('admin_coin_give_check_nickname')}}"/>*/
/*       <div class="help-block">只能选择系统中已注册的用户</div>*/
/*     </div>*/
/*   </div>*/
/* */
/*   <div class="row form-group">*/
/*     <div class="col-md-3 control-label">*/
/*       <label for="name">类型</label>*/
/*     </div>*/
/*     <div class="col-md-7 controls">*/
/*       <input type="radio" id="type_0" name="type"  value="add" checked=true >*/
/*               <label for="type_0" class="required" style="padding: 0 20px 0 0px;">添加</label>*/
/*               <input type="radio" id="type_1" name="type"value="cut" >*/
/*               <label for="type_1"  >扣除</label>*/
/*     </div>*/
/*   </div>*/
/* */
/*   <div class="row form-group">*/
/*     <div class="col-md-3 control-label">*/
/*       <label for="amount">数量</label>*/
/*     </div>*/
/*     <div class="col-md-7 controls">*/
/*       <input type="text" id="amount" name="amount"  class="form-control" >*/
/*     </div>*/
/*   </div>*/
/* */
/*   <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/* */
/* </form>*/
/* {% endblock %}*/
/* */
/* {% block footer %}*/
/*   <button id="create-btn" data-submiting-text="正在提交" type="submit" class="btn btn-primary pull-right" data-toggle="form-submit" data-target="#give-coin-form">提交</button>*/
/*   <button type="button" class="btn btn-link pull-right" data-dismiss="modal">取消</button>*/
/*   <script>app.load('coin/give')</script>*/
/* {% endblock %}*/
