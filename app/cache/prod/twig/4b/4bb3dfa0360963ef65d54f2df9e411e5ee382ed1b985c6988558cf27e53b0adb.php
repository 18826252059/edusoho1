<?php

/* TopxiaWebBundle:Settings:pay-password-modal.html.twig */
class __TwigTemplate_42e8494b02447a9867f874c2280649603c3a536c2db51d4fcf8fade4e120d89a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "TopxiaWebBundle:Settings:pay-password-modal.html.twig", 1);
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
        echo "设置支付密码";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "
      <form id=\"settings-pay-password-form\" class=\"form-horizontal\" method=\"post\" action=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("settings_set_pay_password");
        echo "\">
        
        <div class=\"form-group\">
          <div class=\"col-md-3 col-md-offset-1 control-label\">";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "currentUserLoginPassword", array()), 'label', array("label" => "用户登录密码"));
        echo "</div>
          <div class=\"controls col-md-6 controls\">
            ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "currentUserLoginPassword", array()), 'widget', array("attr" => array("class" => "form-control", "data-url" => $this->env->getExtension('routing')->getPath("settings_check_login_password"))));
        echo "
          </div>
        </div>

        <div class=\"form-group\">
          <div class=\"col-md-3 col-md-offset-1 control-label\">";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "newPayPassword", array()), 'label', array("label" => "新支付密码"));
        echo "</div>
          <div class=\"controls col-md-6 controls\">
            ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "newPayPassword", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
          </div>
        </div>

        <div class=\"form-group\">
          <div class=\"col-md-3 col-md-offset-1 control-label\">";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "confirmPayPassword", array()), 'label', array("label" => "确认支付密码"));
        echo "</div>
          <div class=\"controls col-md-6 controls\">
            ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "confirmPayPassword", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
          </div>
        </div>

\t\t    <div style=\"display: none;\">
            ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "
        </div>

        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">

      </form>


";
    }

    // line 42
    public function block_footer($context, array $blocks = array())
    {
        // line 43
        echo "  <span class=\"btn btn-primary pull-right js-submit-form\">提交</span>
  <button type=\"button\" class=\"btn btn-link pull-right\" data-dismiss=\"modal\">取消</button>

  <script>app.load('settings/pay_password_modal')</script>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Settings:pay-password-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 43,  106 => 42,  96 => 35,  90 => 32,  82 => 27,  77 => 25,  69 => 20,  64 => 18,  56 => 13,  51 => 11,  45 => 8,  42 => 7,  39 => 6,  33 => 5,  29 => 1,  27 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::bootstrap-modal-layout.html.twig' %}*/
/* */
/* {% set modalSize = 'large' %}*/
/* */
/* {% block title %}设置支付密码{% endblock %}*/
/* {% block body %}*/
/* */
/*       <form id="settings-pay-password-form" class="form-horizontal" method="post" action="{{path('settings_set_pay_password')}}">*/
/*         */
/*         <div class="form-group">*/
/*           <div class="col-md-3 col-md-offset-1 control-label">{{ form_label(form.currentUserLoginPassword, '用户登录密码') }}</div>*/
/*           <div class="controls col-md-6 controls">*/
/*             {{ form_widget( form.currentUserLoginPassword,{attr:{ class:'form-control', 'data-url':path('settings_check_login_password')}}) }}*/
/*           </div>*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*           <div class="col-md-3 col-md-offset-1 control-label">{{ form_label(form.newPayPassword, '新支付密码') }}</div>*/
/*           <div class="controls col-md-6 controls">*/
/*             {{ form_widget(form.newPayPassword, {attr:{class:'form-control'}}) }}*/
/*           </div>*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*           <div class="col-md-3 col-md-offset-1 control-label">{{ form_label(form.confirmPayPassword, '确认支付密码') }}</div>*/
/*           <div class="controls col-md-6 controls">*/
/*             {{ form_widget(form.confirmPayPassword, {attr:{class:'form-control'}}) }}*/
/*           </div>*/
/*         </div>*/
/* */
/* 		    <div style="display: none;">*/
/*             {{ form_rest(form) }}*/
/*         </div>*/
/* */
/*         <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/* */
/*       </form>*/
/* */
/* */
/* {% endblock %}*/
/* */
/* {% block footer %}*/
/*   <span class="btn btn-primary pull-right js-submit-form">提交</span>*/
/*   <button type="button" class="btn btn-link pull-right" data-dismiss="modal">取消</button>*/
/* */
/*   <script>app.load('settings/pay_password_modal')</script>*/
/* {% endblock %}*/
