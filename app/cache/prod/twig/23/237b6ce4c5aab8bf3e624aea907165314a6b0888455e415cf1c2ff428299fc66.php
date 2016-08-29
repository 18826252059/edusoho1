<?php

/* TopxiaWebBundle:Settings:pay-password.html.twig */
class __TwigTemplate_8dc170595c230541d296f53c7b5f3d27d28bd4249d194e10938db9c1a3f9d213 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:Settings:layout.html.twig", "TopxiaWebBundle:Settings:pay-password.html.twig", 1);
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
        $context["script_controller"] = "settings/pay_password";
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
        $this->loadTemplate("TopxiaWebBundle:Settings:pay-password.html.twig", "TopxiaWebBundle:Settings:pay-password.html.twig", 7, "1458930917")->display(array_merge($context, array("class" => "panel-col")));
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Settings:pay-password.html.twig";
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


/* TopxiaWebBundle:Settings:pay-password.html.twig */
class __TwigTemplate_8dc170595c230541d296f53c7b5f3d27d28bd4249d194e10938db9c1a3f9d213_1458930917 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("TopxiaWebBundle:Bootstrap:panel.html.twig", "TopxiaWebBundle:Settings:pay-password.html.twig", 7);
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
        // line 9
        echo "       安全设置
    ";
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 12
        echo "
      <ul class=\"breadcrumb\">
        <li><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("settings_security");
        echo "\">安全设置</a></li>
        <li class=\"active\">设置支付密码</li>
      </ul>

      ";
        // line 18
        if ( !$this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "password", array())) {
            // line 19
            echo "        <div class=\"alert alert-warning\">
          <p>当前帐号从第三方帐号直接登录时创建，尚未设置登录密码。</p>
          <p>为了帐号的安全，请通过邮箱找回密码的方式，重设登录密码！</p>
          <p><a href=\"";
            // line 22
            echo $this->env->getExtension('routing')->getPath("password_reset");
            echo "\" class=\"btn btn-primary\">现在就去重设登录密码！</a></p>
        </div>
      ";
        }
        // line 25
        echo "
      <form id=\"settings-pay-password-form\" class=\"form-horizontal\" method=\"post\" ";
        // line 26
        if ( !$this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "password", array())) {
            echo " style=\"display:none;\"";
        }
        echo ">

        ";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "
        
        <div class=\"form-group\">
          <div class=\"col-md-2 control-label\">";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "currentUserLoginPassword", array()), 'label', array("label" => "用户登录密码"));
        echo "</div>
          <div class=\"controls col-md-8 controls\">
            ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "currentUserLoginPassword", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
          </div>
        </div>

        <div class=\"form-group\">
          <div class=\"col-md-2 control-label\">";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "newPayPassword", array()), 'label', array("label" => "新支付密码"));
        echo "</div>
          <div class=\"controls col-md-8 controls\">
            ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "newPayPassword", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
          </div>
        </div>

        <div class=\"form-group\">
          <div class=\"col-md-2 control-label\">";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "confirmPayPassword", array()), 'label', array("label" => "确认支付密码"));
        echo "</div>
          <div class=\"controls col-md-8 controls\">
            ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "confirmPayPassword", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
          </div>
        </div>

        <div class=\"form-group\">
          <div class=\"col-md-2 control-label\"></div>
          <div class=\"controls col-md-8 controls\">
            ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "
            <button id=\"password-save-btn\" data-submiting-text=\"正在保存\" type=\"submit\" class=\"btn btn-primary\">提交</button>
          </div>
        </div>

        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">

      </form>


    ";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Settings:pay-password.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 59,  183 => 54,  173 => 47,  168 => 45,  160 => 40,  155 => 38,  147 => 33,  142 => 31,  136 => 28,  129 => 26,  126 => 25,  120 => 22,  115 => 19,  113 => 18,  106 => 14,  102 => 12,  99 => 11,  94 => 9,  91 => 8,  46 => 7,  41 => 6,  34 => 2,  30 => 1,  28 => 4,  26 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle:Settings:layout.html.twig' %}*/
/* {% block title %}支付密码 - 安全设置 - {{ parent() }}{% endblock %}*/
/* {% set script_controller = 'settings/pay_password' %} */
/* {% set side_nav = 'security' %} */
/* */
/* {% block main %} */
/*  {% embed "TopxiaWebBundle:Bootstrap:panel.html.twig" with {class:'panel-col'} %}*/
/*     {% block heading %}*/
/*        安全设置*/
/*     {% endblock %}*/
/*     {% block body %}*/
/* */
/*       <ul class="breadcrumb">*/
/*         <li><a href="{{ path('settings_security') }}">安全设置</a></li>*/
/*         <li class="active">设置支付密码</li>*/
/*       </ul>*/
/* */
/*       {% if not app.user.password %}*/
/*         <div class="alert alert-warning">*/
/*           <p>当前帐号从第三方帐号直接登录时创建，尚未设置登录密码。</p>*/
/*           <p>为了帐号的安全，请通过邮箱找回密码的方式，重设登录密码！</p>*/
/*           <p><a href="{{ path('password_reset') }}" class="btn btn-primary">现在就去重设登录密码！</a></p>*/
/*         </div>*/
/*       {% endif %}*/
/* */
/*       <form id="settings-pay-password-form" class="form-horizontal" method="post" {% if not app.user.password %} style="display:none;"{% endif %}>*/
/* */
/*         {{ web_macro.flash_messages() }}*/
/*         */
/*         <div class="form-group">*/
/*           <div class="col-md-2 control-label">{{ form_label(form.currentUserLoginPassword, '用户登录密码') }}</div>*/
/*           <div class="controls col-md-8 controls">*/
/*             {{ form_widget(form.currentUserLoginPassword, {attr:{class:'form-control'}}) }}*/
/*           </div>*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*           <div class="col-md-2 control-label">{{ form_label(form.newPayPassword, '新支付密码') }}</div>*/
/*           <div class="controls col-md-8 controls">*/
/*             {{ form_widget(form.newPayPassword, {attr:{class:'form-control'}}) }}*/
/*           </div>*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*           <div class="col-md-2 control-label">{{ form_label(form.confirmPayPassword, '确认支付密码') }}</div>*/
/*           <div class="controls col-md-8 controls">*/
/*             {{ form_widget(form.confirmPayPassword, {attr:{class:'form-control'}}) }}*/
/*           </div>*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*           <div class="col-md-2 control-label"></div>*/
/*           <div class="controls col-md-8 controls">*/
/*             {{ form_rest(form) }}*/
/*             <button id="password-save-btn" data-submiting-text="正在保存" type="submit" class="btn btn-primary">提交</button>*/
/*           </div>*/
/*         </div>*/
/* */
/*         <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/* */
/*       </form>*/
/* */
/* */
/*     {% endblock %}*/
/*   {% endembed %}*/
/* {% endblock %}*/
