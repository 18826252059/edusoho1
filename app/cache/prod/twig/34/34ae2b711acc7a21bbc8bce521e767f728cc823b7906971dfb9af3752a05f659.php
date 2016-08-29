<?php

/* TopxiaWebBundle:Login:bind-choose.html.twig */
class __TwigTemplate_1a1d21a22f5765f1dbfbc367bd554c796578b479ddb8c950b5050757443bbf18 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "TopxiaWebBundle:Login:bind-choose.html.twig", 1);
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
        $context["script_controller"] = "auth/login-bind-choose";
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
    <form id=\"set-bind-new-form\" class=\"form-vertical\" method=\"post\" action=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("login_bind_newset", array("type" => (isset($context["type"]) ? $context["type"] : null))), "html", null, true);
        echo "\" data-goto=\"";
        if ((isset($context["hasPartnerAuth"]) ? $context["hasPartnerAuth"] : null)) {
            echo $this->env->getExtension('routing')->getPath("partner_login");
        } else {
            echo $this->env->getExtension('routing')->getPath("homepage");
        }
        echo "\">
      <div class=\"alert alert-danger\" id=\"bind-new-form-error\" style=\"display:none;\"></div>
      <div class=\"form-group mbl\">
        <label class=\"control-label\" for=\"set-bind-nickname-field\">用户名</label>
        <div class=\"controls\">
          <input id=\"set-bind-nickname-field\" class=\"form-control input-lg\" type=\"text\" name=\"nickname\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["oauthUser"]) ? $context["oauthUser"] : null), "name", array()), "html", null, true);
        echo "\" data-url=\"";
        echo $this->env->getExtension('routing')->getPath("register_nickname_check");
        echo "\" />
          <p class=\"help-block\">用户名最长18个英文或者9个汉字</p>
        </div>
      </div>
      ";
        // line 20
        if ($this->env->getExtension('topxia_web_twig')->getSetting((("login_bind." . (isset($context["type"]) ? $context["type"] : null)) . "_set_fill_account"))) {
            // line 21
            echo "        <div class=\"form-group mbl\">
          <label class=\"control-label\" for=\"set_bind_email\">邮箱地址</label>
          <div class=\"controls\">
            <input id=\"set_bind_email\" class=\"form-control input-lg\" type=\"email\" name=\"set_bind_emailOrMobile\" data-url=\"";
            // line 24
            echo $this->env->getExtension('routing')->getPath("register_email_check");
            echo "\">
          </div>
        </div>
      ";
        }
        // line 28
        echo "      <div class=\"form-group mbl\">
        <label id=\"user_terms\">
          <input type=\"checkbox\"  checked=\"checked\">我已阅读并同意<a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("user_terms");
        echo "\" target=\"_blank\">《服务协议》</a>
        </label>
      </div>

      <div class=\"form-group\">
        <button id=\"set-bind-new-btn\" class=\"btn btn-primary btn-lg btn-block\" type='submit' data-loading-text=\"正在登录...\">确认登录</button>
      </div>

      <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
      <div class=\"form-group text-right\">
        <a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("login_bind_change", array("type" => (isset($context["type"]) ? $context["type"] : null))), "html", null, true);
        echo "\">绑定已有帐号</a>
      </div>
    </form>
</div>

";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Login:bind-choose.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 40,  103 => 38,  92 => 30,  88 => 28,  81 => 24,  76 => 21,  74 => 20,  65 => 16,  51 => 11,  46 => 9,  42 => 7,  39 => 6,  32 => 3,  28 => 1,  26 => 4,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::layout.html.twig' %}*/
/* */
/* {% block title %}登录 - {{ parent() }}{% endblock %}*/
/* {% set script_controller = 'auth/login-bind-choose' %}*/
/* */
/* {% block content %}*/
/* <div class="es-section login-section">*/
/*   <div class="section-header">*/
/*     <h1>{{ name }}</h1>*/
/*   </div>*/
/*     <form id="set-bind-new-form" class="form-vertical" method="post" action="{{ path('login_bind_newset', {type:type}) }}" data-goto="{% if hasPartnerAuth %}{{ path('partner_login') }}{% else %}{{ path('homepage') }}{% endif %}">*/
/*       <div class="alert alert-danger" id="bind-new-form-error" style="display:none;"></div>*/
/*       <div class="form-group mbl">*/
/*         <label class="control-label" for="set-bind-nickname-field">用户名</label>*/
/*         <div class="controls">*/
/*           <input id="set-bind-nickname-field" class="form-control input-lg" type="text" name="nickname" value="{{ oauthUser.name }}" data-url="{{ path('register_nickname_check') }}" />*/
/*           <p class="help-block">用户名最长18个英文或者9个汉字</p>*/
/*         </div>*/
/*       </div>*/
/*       {% if setting('login_bind.' ~ type ~ '_set_fill_account') %}*/
/*         <div class="form-group mbl">*/
/*           <label class="control-label" for="set_bind_email">邮箱地址</label>*/
/*           <div class="controls">*/
/*             <input id="set_bind_email" class="form-control input-lg" type="email" name="set_bind_emailOrMobile" data-url="{{path('register_email_check')}}">*/
/*           </div>*/
/*         </div>*/
/*       {% endif %}*/
/*       <div class="form-group mbl">*/
/*         <label id="user_terms">*/
/*           <input type="checkbox"  checked="checked">我已阅读并同意<a href="{{ path('user_terms') }}" target="_blank">《服务协议》</a>*/
/*         </label>*/
/*       </div>*/
/* */
/*       <div class="form-group">*/
/*         <button id="set-bind-new-btn" class="btn btn-primary btn-lg btn-block" type='submit' data-loading-text="正在登录...">确认登录</button>*/
/*       </div>*/
/* */
/*       <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/*       <div class="form-group text-right">*/
/*         <a href="{{ path('login_bind_change', {type: type}) }}">绑定已有帐号</a>*/
/*       </div>*/
/*     </form>*/
/* </div>*/
/* */
/* {% endblock %}*/
