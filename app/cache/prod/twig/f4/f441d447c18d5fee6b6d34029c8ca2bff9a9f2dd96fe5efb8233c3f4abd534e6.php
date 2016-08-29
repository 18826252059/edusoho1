<?php

/* TopxiaWebBundle:Login:ajax.html.twig */
class __TwigTemplate_265eef39dc0d3be80986c4274dbdc3f5638bb652442d06be98fe4d3f472c0f6f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "TopxiaWebBundle:Login:ajax.html.twig", 1);
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
        // line 4
        $context["modal_class"] = "login-modal";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "登录";
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("site.name"), "html", null, true);
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
<form id=\"login-ajax-form\" class=\"form-vertical form-vertical-small\" method=\"post\" action=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\">

  <div class=\"alert alert-danger\" style=\"display:none;\"></div>

  <div class=\"form-group mbl\">
    <label class=\"control-label hidden\" for=\"ajax-username\">邮箱/手机/用户名</label>
    <div class=\"controls\">
      <input class=\"form-control input-lg\" type=\"text\" id=\"ajax-username\" name=\"_username\" placeholder=\"邮箱/手机/用户名\" />
    </div>
  </div>

  <div class=\"form-group mbl\">
    <label class=\"control-label hidden\" for=\"ajax-password\">密码</label>
    <div class=\"controls\">
      <input class=\"form-control input-lg\" type=\"password\" id=\"ajax-password\" name=\"_password\" placeholder=\"密码\" />
    </div>
  </div>

  <div class=\"form-group mbl text-muted\">
    <input type=\"checkbox\" name=\"_remember_me\" checked=\"checked\"> 记住密码
  </div>

  <div class=\"form-group\">
    <button type=\"submit\" class=\"btn btn-primary btn-lg btn-block\">登录</button>
  </div>

  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">

</form>
<script>
\tapp.load('auth/login-ajax');
</script>

";
    }

    // line 42
    public function block_footer($context, array $blocks = array())
    {
        // line 43
        echo "<div class=\"text-left text-sm\">
  <a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("password_reset");
        echo "\">找回密码</a>
  <span class=\"text-muted mhs\">|</span>
  <span class=\"text-muted\">还没有注册帐号？</span>
  <a href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("register", array("goto" => (isset($context["_target_path"]) ? $context["_target_path"] : null))), "html", null, true);
        echo "\">立即注册</a>
</div>

";
        // line 50
        if ($this->env->getExtension('topxia_web_twig')->getSetting("login_bind.enabled")) {
            // line 51
            echo "  <div class=\"social-login\">
    <span>
      ";
            // line 53
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Login:oauth2LoginsBlock", array("targetPath" => (isset($context["_target_path"]) ? $context["_target_path"] : null))));
            echo "
    </span>
    <div class=\"line\"></div>
  </div>
";
        }
        // line 58
        echo "
 
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Login:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 58,  111 => 53,  107 => 51,  105 => 50,  99 => 47,  93 => 44,  90 => 43,  87 => 42,  75 => 33,  46 => 7,  43 => 6,  40 => 5,  33 => 3,  29 => 1,  27 => 4,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::bootstrap-modal-layout.html.twig' %}*/
/* */
/* {% block title %}登录{{ setting('site.name') }}{% endblock %}*/
/* {% set modal_class = 'login-modal' %}*/
/* {% block body %}*/
/* */
/* <form id="login-ajax-form" class="form-vertical form-vertical-small" method="post" action="{{ path('login_check') }}">*/
/* */
/*   <div class="alert alert-danger" style="display:none;"></div>*/
/* */
/*   <div class="form-group mbl">*/
/*     <label class="control-label hidden" for="ajax-username">邮箱/手机/用户名</label>*/
/*     <div class="controls">*/
/*       <input class="form-control input-lg" type="text" id="ajax-username" name="_username" placeholder="邮箱/手机/用户名" />*/
/*     </div>*/
/*   </div>*/
/* */
/*   <div class="form-group mbl">*/
/*     <label class="control-label hidden" for="ajax-password">密码</label>*/
/*     <div class="controls">*/
/*       <input class="form-control input-lg" type="password" id="ajax-password" name="_password" placeholder="密码" />*/
/*     </div>*/
/*   </div>*/
/* */
/*   <div class="form-group mbl text-muted">*/
/*     <input type="checkbox" name="_remember_me" checked="checked"> 记住密码*/
/*   </div>*/
/* */
/*   <div class="form-group">*/
/*     <button type="submit" class="btn btn-primary btn-lg btn-block">登录</button>*/
/*   </div>*/
/* */
/*   <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/* */
/* </form>*/
/* <script>*/
/* 	app.load('auth/login-ajax');*/
/* </script>*/
/* */
/* {% endblock %}*/
/* */
/* {% block footer %}*/
/* <div class="text-left text-sm">*/
/*   <a href="{{ path('password_reset') }}">找回密码</a>*/
/*   <span class="text-muted mhs">|</span>*/
/*   <span class="text-muted">还没有注册帐号？</span>*/
/*   <a href="{{ path('register', {goto:_target_path}) }}">立即注册</a>*/
/* </div>*/
/* */
/* {% if setting('login_bind.enabled') %}*/
/*   <div class="social-login">*/
/*     <span>*/
/*       {{ render(controller('TopxiaWebBundle:Login:oauth2LoginsBlock', {targetPath:_target_path})) }}*/
/*     </span>*/
/*     <div class="line"></div>*/
/*   </div>*/
/* {% endif %}*/
/* */
/*  */
/* {% endblock %}*/
