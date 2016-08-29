<?php

/* TopxiaWebBundle:Login:bind-choose-exist.html.twig */
class __TwigTemplate_0239ac04fd4244645ff6ea798e4fcff2814d2f1060a1fe5397707247ac2390e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "TopxiaWebBundle:Login:bind-choose-exist.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 4
        $context["script_controller"] = "auth/login-bind-exist";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "登录 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "<div class=\"es-section login-section\">
  <div class=\"section-header\">
    <h1>";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo "</h1>
  </div>
 <form id=\"bind-exist-form\" class=\"form-vertical\" method=\"post\" action=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("login_bind_exist", array("type" => (isset($context["type"]) ? $context["type"] : null))), "html", null, true);
        echo "\" data-goto=\"";
        if ((isset($context["hasPartnerAuth"]) ? $context["hasPartnerAuth"] : null)) {
            echo $this->env->getExtension('routing')->getPath("partner_login");
        } else {
            echo $this->env->getExtension('routing')->getPath("homepage");
        }
        echo "\">
    <div class=\"alert alert-danger\" id=\"bind-exist-form-error\" style=\"display:none;\"></div>
    
    ";
        // line 14
        if (((($this->env->getExtension('topxia_web_twig')->getSetting("auth.register_mode") == "mobile") || ($this->env->getExtension('topxia_web_twig')->getSetting("auth.register_mode") == "email_or_mobile")) && $this->env->getExtension('topxia_web_twig')->getSetting("cloud_sms.sms_enabled"))) {
            // line 15
            echo "    <div class=\"form-group mbl\">
      <label class=\"control-label\" for=\"bind-email-field\">Email / 手机</label>
        <div class=\"controls\">
          <input id=\"bind-email-field\" class=\"form-control\" type=\"text\" name=\"emailOrMobile\">
          <p class=\"help-block\">请填写在";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("site.name"), "html", null, true);
            echo "注册时填写的Email地址/手机号码</p>
        </div>
    </div>
    ";
        } else {
            // line 23
            echo "    <div class=\"form-group mbl\">
      <label class=\"control-label\" for=\"bind-email-field\">Email地址</label>
        <div class=\"controls\">
          <input id=\"bind-email-field\" class=\"form-control\" type=\"email\" name=\"emailOrMobile\">
          <p class=\"help-block\">请填写在";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("site.name"), "html", null, true);
            echo "注册时填写的Email地址</p>
        </div>
    </div>
    ";
        }
        // line 31
        echo "
    <div class=\"form-group mbl\">
      <label class=\"control-label\" for=\"bind-password-field\">密码</label>
        <div class=\"controls\">
          <input id=\"bind-password-field\" class=\"form-control\" type=\"password\" name=\"password\">
        </div>
    </div>

    <div class=\"form-group\">
      <button class=\"btn btn-primary btn-lg btn-block\" type=\"submit\" data-loading-text=\"正在提交...\">确认绑定</button>
    </div>

    <div class=\"form-group text-right\">
      <a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("login_bind_choose", array("type" => (isset($context["type"]) ? $context["type"] : null))), "html", null, true);
        echo "\">绑定新帐号</a>
    </div>
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
  </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Login:bind-choose-exist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 46,  106 => 44,  91 => 31,  84 => 27,  78 => 23,  71 => 19,  65 => 15,  63 => 14,  51 => 11,  46 => 9,  42 => 7,  39 => 6,  32 => 3,  28 => 1,  26 => 4,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::layout.html.twig' %}*/
/* */
/* {% block title %}登录 - {{ parent() }}{% endblock %}*/
/* {% set script_controller = 'auth/login-bind-exist' %}*/
/* */
/* {% block content %}*/
/* <div class="es-section login-section">*/
/*   <div class="section-header">*/
/*     <h1>{{ name }}</h1>*/
/*   </div>*/
/*  <form id="bind-exist-form" class="form-vertical" method="post" action="{{ path('login_bind_exist', {type:type}) }}" data-goto="{% if hasPartnerAuth %}{{ path('partner_login') }}{% else %}{{ path('homepage') }}{% endif %}">*/
/*     <div class="alert alert-danger" id="bind-exist-form-error" style="display:none;"></div>*/
/*     */
/*     {% if (setting('auth.register_mode') == 'mobile' or setting('auth.register_mode') == 'email_or_mobile') and setting('cloud_sms.sms_enabled') %}*/
/*     <div class="form-group mbl">*/
/*       <label class="control-label" for="bind-email-field">Email / 手机</label>*/
/*         <div class="controls">*/
/*           <input id="bind-email-field" class="form-control" type="text" name="emailOrMobile">*/
/*           <p class="help-block">请填写在{{ setting('site.name') }}注册时填写的Email地址/手机号码</p>*/
/*         </div>*/
/*     </div>*/
/*     {% else %}*/
/*     <div class="form-group mbl">*/
/*       <label class="control-label" for="bind-email-field">Email地址</label>*/
/*         <div class="controls">*/
/*           <input id="bind-email-field" class="form-control" type="email" name="emailOrMobile">*/
/*           <p class="help-block">请填写在{{ setting('site.name') }}注册时填写的Email地址</p>*/
/*         </div>*/
/*     </div>*/
/*     {% endif %}*/
/* */
/*     <div class="form-group mbl">*/
/*       <label class="control-label" for="bind-password-field">密码</label>*/
/*         <div class="controls">*/
/*           <input id="bind-password-field" class="form-control" type="password" name="password">*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="form-group">*/
/*       <button class="btn btn-primary btn-lg btn-block" type="submit" data-loading-text="正在提交...">确认绑定</button>*/
/*     </div>*/
/* */
/*     <div class="form-group text-right">*/
/*       <a href="{{ path('login_bind_choose', {type: type}) }}">绑定新帐号</a>*/
/*     </div>*/
/*     <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/*   </form>*/
/* </div>*/
/* {% endblock %}*/
