<?php

/* TopxiaAdminBundle:Coin:order-edit-modal.html.twig */
class __TwigTemplate_f7e0645ac4466b4ed00dae1691d5c759b5cf78e0ed18c0863f0a1657353bd6ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "TopxiaAdminBundle:Coin:order-edit-modal.html.twig", 1);
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
        echo "修改";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "
<form id=\"edit-form\" class=\"form-horizontal\" method=\"post\" action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_coin_admin_edit", array("id" => (isset($context["id"]) ? $context["id"] : null))), "html", null, true);
        echo "\">

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
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">

</form>
";
    }

    // line 36
    public function block_footer($context, array $blocks = array())
    {
        // line 37
        echo "  <button id=\"create-btn\" data-submiting-text=\"正在提交\" type=\"submit\" class=\"btn btn-primary pull-right\" data-toggle=\"form-submit\" data-target=\"#edit-form\">提交</button>
  <button type=\"button\" class=\"btn btn-link pull-right\" data-dismiss=\"modal\">取消</button>
  <script>app.load('coin/edit')</script>
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Coin:order-edit-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 37,  79 => 36,  71 => 31,  45 => 8,  42 => 7,  39 => 6,  33 => 5,  29 => 1,  27 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::bootstrap-modal-layout.html.twig' %}*/
/* */
/* {% set modalSize = 'large' %}*/
/* */
/* {% block title %}修改{% endblock %}*/
/* {% block body %}*/
/* */
/* <form id="edit-form" class="form-horizontal" method="post" action="{{path('admin_coin_admin_edit',{id:id})}}">*/
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
/*   <button id="create-btn" data-submiting-text="正在提交" type="submit" class="btn btn-primary pull-right" data-toggle="form-submit" data-target="#edit-form">提交</button>*/
/*   <button type="button" class="btn btn-link pull-right" data-dismiss="modal">取消</button>*/
/*   <script>app.load('coin/edit')</script>*/
/* {% endblock %}*/
