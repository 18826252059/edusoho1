<?php

/* TopxiaWebBundle:PayCenter:show-mobile.html.twig */
class __TwigTemplate_c0f49e3e0ba79c6281ef2cc50ac6c9f16df209b1528b9f04a1d4d005cfc8b573 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "TopxiaWebBundle:PayCenter:show-mobile.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "核实银行预留手机";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "<style>
.unbind{
  height:100px;
  overflow: hidden;
}
.unbind-frame{
  padding:15px;
}
.unbind-down{
  margin-bottom: 0px !important;
}
.form-horizontal{
  margin:12px auto;
}
.modal-body{
  padding:0px !important;
}
</style>
    
    <div class=\"pannel pannel-default unbind\">
      <div class=\"unbind-frame\">
        <form id=\"unbind-form\" class=\"form-horizontal\" method=\"post\" action=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("pay_center_auth_unbind");
        echo "\">
          <input type=\"hidden\" name=\"payAgreementId\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["payAgreementId"]) ? $context["payAgreementId"] : null), "html", null, true);
        echo "\"/>
          <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
          <div class=\"form-group unbind-down\">
            <div class=\"col-md-3 control-label\">
              <label for=\"mobile\">银行预留手机号</label>
            </div>
            <div class=\"col-md-6 controls\">
              <input type=\"text\" id=\"mobile\" name=\"mobile\" class=\"form-control\" placeholder=\"手机号码\">
              <div class=\"help-block\"></div>
            </div>
          </div>        
        </form>
      </div>
    </div>
";
    }

    // line 43
    public function block_footer($context, array $blocks = array())
    {
        // line 44
        echo "  <button id=\"unbind-btn\" data-submiting-text=\"正在提交\" class=\"btn btn-primary pull-right\" data-toggle=\"form-submit\" data-target=\"#unbind-form\">确定</button>
  <button type=\"button\" class=\"btn btn-link\" data-dismiss=\"modal\">取消</button>
  <script>app.load('pay/show-mobile-modal')</script>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:PayCenter:show-mobile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 44,  88 => 43,  70 => 28,  66 => 27,  62 => 26,  39 => 5,  36 => 4,  30 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::bootstrap-modal-layout.html.twig' %}*/
/* */
/* {% block title %}核实银行预留手机{% endblock %}*/
/* {% block body %}*/
/* <style>*/
/* .unbind{*/
/*   height:100px;*/
/*   overflow: hidden;*/
/* }*/
/* .unbind-frame{*/
/*   padding:15px;*/
/* }*/
/* .unbind-down{*/
/*   margin-bottom: 0px !important;*/
/* }*/
/* .form-horizontal{*/
/*   margin:12px auto;*/
/* }*/
/* .modal-body{*/
/*   padding:0px !important;*/
/* }*/
/* </style>*/
/*     */
/*     <div class="pannel pannel-default unbind">*/
/*       <div class="unbind-frame">*/
/*         <form id="unbind-form" class="form-horizontal" method="post" action="{{ path('pay_center_auth_unbind') }}">*/
/*           <input type="hidden" name="payAgreementId" value="{{payAgreementId}}"/>*/
/*           <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/*           <div class="form-group unbind-down">*/
/*             <div class="col-md-3 control-label">*/
/*               <label for="mobile">银行预留手机号</label>*/
/*             </div>*/
/*             <div class="col-md-6 controls">*/
/*               <input type="text" id="mobile" name="mobile" class="form-control" placeholder="手机号码">*/
/*               <div class="help-block"></div>*/
/*             </div>*/
/*           </div>        */
/*         </form>*/
/*       </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block footer %}*/
/*   <button id="unbind-btn" data-submiting-text="正在提交" class="btn btn-primary pull-right" data-toggle="form-submit" data-target="#unbind-form">确定</button>*/
/*   <button type="button" class="btn btn-link" data-dismiss="modal">取消</button>*/
/*   <script>app.load('pay/show-mobile-modal')</script>*/
/* {% endblock %}*/
/* */
