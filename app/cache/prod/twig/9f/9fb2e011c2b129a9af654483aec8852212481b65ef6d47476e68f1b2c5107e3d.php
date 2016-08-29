<?php

/* TopxiaWebBundle:Login:index.html.twig */
class __TwigTemplate_69668241a7cf5e2506e1317b2ece79223292cbdc3fcfc54ea22a236b588f5d3d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "TopxiaWebBundle:Login:index.html.twig", 1);
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
        $context["script_controller"] = "auth/login";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "登录 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "cookies", array()), "get", array(0 => "modalOpened"), "method") == 1)) {
            // line 7
            echo " <a href=\"#modal\" class=\" hidden\" data-toggle=\"modal\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("card_info", array("cardType" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "cardType"), "method"), "cardId" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "cardId"), "method"))), "html", null, true);
            echo "\" class=\"hidden\" ><span class=\"receive-modal\"></span></a>
";
        }
        // line 9
        echo "<div class=\"es-section login-section\">
  <div class=\"logon-tab clearfix\">
    <a class=\"active\">登录帐号</a>
    <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("register", array("goto" => (isset($context["_target_path"]) ? $context["_target_path"] : null))), "html", null, true);
        echo "\">注册帐号</a>
  </div>
  <div class=\"login-main\">
    <form id=\"login-form\" class=\"form-vertical\" method=\"post\" action=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\">

      ";
        // line 17
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 18
            echo "        <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "message", array())), "html", null, true);
            echo "</div>
      ";
        }
        // line 20
        echo "      ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "
      <div class=\"form-group mbl\">
        <label class=\"control-label\" for=\"login_username\">帐号</label>
        <div class=\"controls\">
          <input class=\"form-control input-lg\" id=\"login_username\" type=\"text\" name=\"_username\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : null), "html", null, true);
        echo "\" required placeholder='邮箱/手机/用户名' />
          <div class=\"help-block\"></div>
        </div>
      </div>
      <div class=\"form-group mbl\">
        <label class=\"control-label\" for=\"login_password\">密码</label>
        <div class=\"controls\">
          <input class=\"form-control input-lg\" id=\"login_password\" type=\"password\" name=\"_password\" required placeholder='密码'/>
        </div>
      </div>

      <div class=\"form-group mbl\">
        <div class=\"controls\">
          <input type=\"checkbox\" name=\"_remember_me\" checked=\"checked\"> 记住密码
        </div>
      </div>
      <div class=\"form-group mbl\">
        <button type=\"submit\" class=\"btn btn-primary btn-lg btn-block\">登录</button>
      </div>

      <input type=\"hidden\" name=\"_target_path\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, (isset($context["_target_path"]) ? $context["_target_path"] : null), "html", null, true);
        echo "\">
      <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
    </form>

    <div class=\"mbl\">
      <a href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("password_reset");
        echo "\">找回密码</a>
      <span class=\"text-muted mhs\">|</span>
      <span class=\"text-muted\">还没有注册帐号？</span>
      <a href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("register", array("goto" => (isset($context["_target_path"]) ? $context["_target_path"] : null))), "html", null, true);
        echo "\">立即注册</a>
    </div>

    ";
        // line 55
        if ($this->env->getExtension('topxia_web_twig')->getSetting("login_bind.enabled")) {
            // line 56
            echo "      <div class=\"social-login\">
        <span>
          ";
            // line 58
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Login:oauth2LoginsBlock", array("targetPath" => (isset($context["_target_path"]) ? $context["_target_path"] : null))));
            echo "
        </span>
        <div class=\"line\"></div>
      </div>
    ";
        }
        // line 63
        echo "  </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Login:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 63,  134 => 58,  130 => 56,  128 => 55,  122 => 52,  116 => 49,  109 => 45,  105 => 44,  82 => 24,  74 => 20,  68 => 18,  66 => 17,  61 => 15,  55 => 12,  50 => 9,  44 => 7,  42 => 6,  39 => 5,  32 => 3,  28 => 1,  26 => 4,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::layout.html.twig' %}*/
/* */
/* {% block title %}登录 - {{ parent() }}{% endblock %}*/
/* {% set script_controller = 'auth/login' %}*/
/* {% block content %}*/
/* {% if app.request.cookies.get('modalOpened') == 1 %}*/
/*  <a href="#modal" class=" hidden" data-toggle="modal" data-url="{{ path('card_info',{'cardType':app.request.query.get('cardType'),'cardId':app.request.query.get('cardId')}) }}" class="hidden" ><span class="receive-modal"></span></a>*/
/* {% endif %}*/
/* <div class="es-section login-section">*/
/*   <div class="logon-tab clearfix">*/
/*     <a class="active">登录帐号</a>*/
/*     <a href="{{ path('register', {goto:_target_path}) }}">注册帐号</a>*/
/*   </div>*/
/*   <div class="login-main">*/
/*     <form id="login-form" class="form-vertical" method="post" action="{{ path('login_check') }}">*/
/* */
/*       {% if error %}*/
/*         <div class="alert alert-danger">{{ error.message|trans }}</div>*/
/*       {% endif %}*/
/*       {{ web_macro.flash_messages() }}*/
/*       <div class="form-group mbl">*/
/*         <label class="control-label" for="login_username">帐号</label>*/
/*         <div class="controls">*/
/*           <input class="form-control input-lg" id="login_username" type="text" name="_username" value="{{ last_username }}" required placeholder='邮箱/手机/用户名' />*/
/*           <div class="help-block"></div>*/
/*         </div>*/
/*       </div>*/
/*       <div class="form-group mbl">*/
/*         <label class="control-label" for="login_password">密码</label>*/
/*         <div class="controls">*/
/*           <input class="form-control input-lg" id="login_password" type="password" name="_password" required placeholder='密码'/>*/
/*         </div>*/
/*       </div>*/
/* */
/*       <div class="form-group mbl">*/
/*         <div class="controls">*/
/*           <input type="checkbox" name="_remember_me" checked="checked"> 记住密码*/
/*         </div>*/
/*       </div>*/
/*       <div class="form-group mbl">*/
/*         <button type="submit" class="btn btn-primary btn-lg btn-block">登录</button>*/
/*       </div>*/
/* */
/*       <input type="hidden" name="_target_path" value="{{ _target_path }}">*/
/*       <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/*     </form>*/
/* */
/*     <div class="mbl">*/
/*       <a href="{{ path('password_reset') }}">找回密码</a>*/
/*       <span class="text-muted mhs">|</span>*/
/*       <span class="text-muted">还没有注册帐号？</span>*/
/*       <a href="{{ path('register', {goto:_target_path}) }}">立即注册</a>*/
/*     </div>*/
/* */
/*     {% if setting('login_bind.enabled') %}*/
/*       <div class="social-login">*/
/*         <span>*/
/*           {{ render(controller('TopxiaWebBundle:Login:oauth2LoginsBlock', {targetPath:_target_path})) }}*/
/*         </span>*/
/*         <div class="line"></div>*/
/*       </div>*/
/*     {% endif %}*/
/*   </div>*/
/* </div>*/
/* */
/* {% endblock %}*/
