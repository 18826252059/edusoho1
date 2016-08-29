<?php

/* TopxiaWebBundle:Login:bind-weixin.html.twig */
class __TwigTemplate_af71dd650726fe9fbaf591d704e91fbeadaa3e5232d8e51c92849c1197c877b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "TopxiaWebBundle:Login:bind-weixin.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["script_controller"] = "auth/login-bind-exist";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"row row-6\">
  <div class=\"col-md-6 col-md-offset-3\">
    <div class=\"panel panel-default panel-page\">
      <div class=\"panel-heading\"><h2>绑定到已有帐号</h2></div>
      <form id=\"bind-exist-form\" class=\"form-vertical\" method=\"post\" action=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("login_bind_existbind");
        echo "\" data-goto=\"";
        if ((isset($context["hasPartnerAuth"]) ? $context["hasPartnerAuth"] : null)) {
            echo $this->env->getExtension('routing')->getPath("partner_login");
        } else {
            echo $this->env->getExtension('routing')->getPath("homepage");
        }
        echo "\">

        <div class=\"alert alert-danger\" id=\"bind-exist-form-error\" style=\"display:none;\"></div>
        <div class=\"form-group\">
          <label class=\"control-label\" for=\"bind-email-field\">Email / 手机</label>
          <div class=\"controls\">
            <input id=\"bind-email-field\" class=\"form-control\" type=\"text\" name=\"emailOrMobile\">
            <p class=\"help-block\">请填写在";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("site.name"), "html", null, true);
        echo "注册时填写的Email地址/手机号码</p>
          </div>
        </div>
        <div class=\"form-group\">
          <label class=\"control-label\" for=\"bind-password-field\">密码</label>
          <div class=\"controls\">
            <input id=\"bind-password-field\" class=\"form-control\" type=\"password\" name=\"password\">
          </div>
        </div>

        <div class=\"form-group\">
          <div class=\"controls\">
            <button class=\"btn btn-fat btn-default btn-lg\" type=\"submit\" data-loading-text=\"正在提交...\">绑定</button>
            <a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\" class=\"btn btn-fat btn-link btn-default btn-lg pull-right\">返回</a>
          </div>
        </div>

        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
      </form>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Login:bind-weixin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 32,  72 => 28,  56 => 15,  40 => 8,  34 => 4,  31 => 3,  27 => 1,  25 => 2,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::layout.html.twig' %}*/
/* {% set script_controller = 'auth/login-bind-exist' %}*/
/* {% block content %}*/
/* <div class="row row-6">*/
/*   <div class="col-md-6 col-md-offset-3">*/
/*     <div class="panel panel-default panel-page">*/
/*       <div class="panel-heading"><h2>绑定到已有帐号</h2></div>*/
/*       <form id="bind-exist-form" class="form-vertical" method="post" action="{{ path('login_bind_existbind') }}" data-goto="{% if hasPartnerAuth %}{{ path('partner_login') }}{% else %}{{ path('homepage') }}{% endif %}">*/
/* */
/*         <div class="alert alert-danger" id="bind-exist-form-error" style="display:none;"></div>*/
/*         <div class="form-group">*/
/*           <label class="control-label" for="bind-email-field">Email / 手机</label>*/
/*           <div class="controls">*/
/*             <input id="bind-email-field" class="form-control" type="text" name="emailOrMobile">*/
/*             <p class="help-block">请填写在{{ setting('site.name') }}注册时填写的Email地址/手机号码</p>*/
/*           </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*           <label class="control-label" for="bind-password-field">密码</label>*/
/*           <div class="controls">*/
/*             <input id="bind-password-field" class="form-control" type="password" name="password">*/
/*           </div>*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*           <div class="controls">*/
/*             <button class="btn btn-fat btn-default btn-lg" type="submit" data-loading-text="正在提交...">绑定</button>*/
/*             <a href="{{path('homepage')}}" class="btn btn-fat btn-link btn-default btn-lg pull-right">返回</a>*/
/*           </div>*/
/*         </div>*/
/* */
/*         <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/*       </form>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* {% endblock %}*/
