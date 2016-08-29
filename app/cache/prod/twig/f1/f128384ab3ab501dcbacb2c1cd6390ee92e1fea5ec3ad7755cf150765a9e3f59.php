<?php

/* TopxiaWebBundle:Settings:update-pay-password-from-email-or-secure-questions.html.twig */
class __TwigTemplate_6b95958d95c34e22a0546e0a0f7b727be6306cadb1dab547d1ae7a248e5863f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:Settings:layout.html.twig", "TopxiaWebBundle:Settings:update-pay-password-from-email-or-secure-questions.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:Settings:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["script_controller"] = "settings/update_pay_password";
        // line 4
        $context["side_nav"] = "security";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "支付密码 - 安全设置 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        echo " 
 ";
        // line 7
        $this->loadTemplate("TopxiaWebBundle:Settings:update-pay-password-from-email-or-secure-questions.html.twig", "TopxiaWebBundle:Settings:update-pay-password-from-email-or-secure-questions.html.twig", 7, "1031815462")->display(array_merge($context, array("class" => "panel-col")));
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Settings:update-pay-password-from-email-or-secure-questions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 7,  41 => 6,  34 => 2,  30 => 1,  28 => 4,  26 => 3,  11 => 1,);
    }
}


/* TopxiaWebBundle:Settings:update-pay-password-from-email-or-secure-questions.html.twig */
class __TwigTemplate_6b95958d95c34e22a0546e0a0f7b727be6306cadb1dab547d1ae7a248e5863f7_1031815462 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("TopxiaWebBundle:Bootstrap:panel.html.twig", "TopxiaWebBundle:Settings:update-pay-password-from-email-or-secure-questions.html.twig", 7);
        $this->blocks = array(
            'heading' => array($this, 'block_heading'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:Bootstrap:panel.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_heading($context, array $blocks = array())
    {
        echo "安全设置";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "
      <ul class=\"breadcrumb\">
        <li><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("settings_security");
        echo "\">安全设置</a></li>
        <li class=\"active\">找回支付密码</li>
      </ul> 

    ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo " 

      <form id=\"pay-password-reset-update-form\" class=\"form-horizontal\" method=\"post\" action=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("settings_update_pay_password");
        echo "\">

        ";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "

        <div class=\"form-group\">
          <div class=\"col-md-3 control-label\">
            ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "payPassword", array()), 'label', array("label" => "新支付密码"));
        echo "
          </div>
          <div class=\"col-md-8 controls\">
            ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "payPassword", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            <p class=\"help-block\">请输入支付密码</p>
          </div>
        </div>

        <div class=\"form-group\">
          <div class=\"col-md-3 control-label\">
            ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "confirmPayPassword", array()), 'label', array("label" => "确认支付密码"));
        echo "
          </div>
          <div class=\"col-md-8 controls\">
            ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "confirmPayPassword", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            <p class=\"help-block\">请再输入一次支付密码</p>
          </div>
        </div>

        <div class=\"form-group\">
          <div class=\"col-md-3 control-label\">
            ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "currentUserLoginPassword", array()), 'label', array("label" => "用户登录密码"));
        echo "
          </div>
          <div class=\"col-md-8 controls\">
            ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "currentUserLoginPassword", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            <p class=\"help-block\">请输入用户登录密码</p>
          </div>
        </div>

        <div class=\"form-group\">
          <div class=\"col-md-offset-3 col-md-8\">
            ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "
            <button  id=\"payPassword-save-btn\" type=\"submit\" class=\"btn btn-primary\">重设支付密码</button>
          </div>
        </div>

        <input type=\"hidden\" name=\"token\" value=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["token"]) ? $context["token"] : null), "token", array()), "html", null, true);
        echo "\">
        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">

      </form>    


    ";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Settings:update-pay-password-from-email-or-secure-questions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 60,  184 => 59,  176 => 54,  166 => 47,  160 => 44,  150 => 37,  144 => 34,  134 => 27,  128 => 24,  121 => 20,  116 => 18,  111 => 16,  104 => 12,  100 => 10,  97 => 9,  91 => 8,  46 => 7,  41 => 6,  34 => 2,  30 => 1,  28 => 4,  26 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle:Settings:layout.html.twig' %}*/
/* {% block title %}支付密码 - 安全设置 - {{ parent() }}{% endblock %}*/
/* {% set script_controller = 'settings/update_pay_password' %} */
/* {% set side_nav = 'security' %} */
/* */
/* {% block main %} */
/*  {% embed "TopxiaWebBundle:Bootstrap:panel.html.twig" with {class:'panel-col'} %}*/
/*     {% block heading %}安全设置{% endblock %}*/
/*     {% block body %}*/
/* */
/*       <ul class="breadcrumb">*/
/*         <li><a href="{{ path('settings_security') }}">安全设置</a></li>*/
/*         <li class="active">找回支付密码</li>*/
/*       </ul> */
/* */
/*     {{ web_macro.flash_messages() }} */
/* */
/*       <form id="pay-password-reset-update-form" class="form-horizontal" method="post" action="{{ path('settings_update_pay_password') }}">*/
/* */
/*         {{ web_macro.flash_messages() }}*/
/* */
/*         <div class="form-group">*/
/*           <div class="col-md-3 control-label">*/
/*             {{ form_label(form.payPassword, '新支付密码') }}*/
/*           </div>*/
/*           <div class="col-md-8 controls">*/
/*             {{ form_widget(form.payPassword, {attr:{class:'form-control'}}) }}*/
/*             <p class="help-block">请输入支付密码</p>*/
/*           </div>*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*           <div class="col-md-3 control-label">*/
/*             {{ form_label(form.confirmPayPassword, '确认支付密码') }}*/
/*           </div>*/
/*           <div class="col-md-8 controls">*/
/*             {{ form_widget(form.confirmPayPassword, {attr:{class:'form-control'}}) }}*/
/*             <p class="help-block">请再输入一次支付密码</p>*/
/*           </div>*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*           <div class="col-md-3 control-label">*/
/*             {{ form_label(form.currentUserLoginPassword, '用户登录密码') }}*/
/*           </div>*/
/*           <div class="col-md-8 controls">*/
/*             {{ form_widget(form.currentUserLoginPassword, {attr:{class:'form-control'}}) }}*/
/*             <p class="help-block">请输入用户登录密码</p>*/
/*           </div>*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*           <div class="col-md-offset-3 col-md-8">*/
/*             {{ form_rest(form) }}*/
/*             <button  id="payPassword-save-btn" type="submit" class="btn btn-primary">重设支付密码</button>*/
/*           </div>*/
/*         </div>*/
/* */
/*         <input type="hidden" name="token" value="{{ token.token }}">*/
/*         <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/* */
/*       </form>    */
/* */
/* */
/*     {% endblock %}*/
/*   {% endembed %}*/
/* {% endblock %}*/
