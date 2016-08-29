<?php

/* TopxiaWebBundle:Settings:setup.html.twig */
class __TwigTemplate_3e05ee7da89ad43ac1237927becb0821f8abb78cadc0973802ba6ec62dfc577c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "TopxiaWebBundle:Settings:setup.html.twig", 1);
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
        $context["script_controller"] = "settings/setup";
        // line 6
        $context["hideSetupHint"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "设置帐号 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 9
        echo "<div class=\"row row-6\">
  <div class=\"col-md-6 col-md-offset-3\">

    <div class=\"panel panel-default panel-page\">
      <div class=\"panel-heading\"><h2>设置帐号</h2></div>

      ";
        // line 15
        $context["emailArr"] = twig_split_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "email", array()), "@");
        // line 16
        echo "      ";
        if (( !$this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "setup", array()) || ($this->getAttribute((isset($context["emailArr"]) ? $context["emailArr"] : null), 1, array(), "array") == "edusoho.net"))) {
            // line 17
            echo "        <form id=\"setup-form\" class=\"form-vertical\" method=\"post\" action=\"";
            echo $this->env->getExtension('routing')->getPath("settings_setup");
            echo "\">

          <div class=\"alert alert-warning\"> 为了帐号的安全以及更好的使用体验，请设置以下信息。 </div>

          <div class=\"form-group\">
            <label class=\"control-label\" for=\"setup-email-field\">Email地址</label>
            <div class=\"controls\">
              <input class=\"form-control\" id=\"setup-email-field\" type=\"text\" name=\"email\" value=\"\" data-url=\"";
            // line 24
            echo $this->env->getExtension('routing')->getPath("register_email_check");
            echo "\" />
            </div>
          </div>

          <div class=\"form-group\">
            <label class=\"control-label\" for=\"setup-nickname-field\">用户名</label>
            <div class=\"controls\">
              <input class=\"form-control\" id=\"setup-nickname-field\" type=\"text\" name=\"nickname\" value=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "nickname", array()), "html", null, true);
            echo "\" data-url=\"";
            echo $this->env->getExtension('routing')->getPath("settings_setup_check_nickname");
            echo "\" />
              <div class=\"help-block\">用户名一旦保存，就不能再修改了</div>
            </div>
          </div>

          <div class=\"form-group\">
            <div class=\"controls\">
              <button type=\"submit\" class=\"btn btn-fat btn-primary btn-large\" data-loading-text=\"正在保存...\" data-goto=\"";
            // line 38
            echo $this->env->getExtension('routing')->getPath("homepage");
            echo "\">保存</button>
            </div>
          </div>

          <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
            echo "\">
        </form>
      ";
        } else {
            // line 45
            echo "        <div class=\"alert alert-danger\">
          <p>该帐号已经设置过Email地址和用户名，不能再次设置！</p>
          <p><a href=\"";
            // line 47
            echo $this->env->getExtension('routing')->getPath("homepage");
            echo "\" class=\"btn btn-primary\">返回首页</a></p>
        </div>
      ";
        }
        // line 50
        echo "
    </div>

  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Settings:setup.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 50,  107 => 47,  103 => 45,  97 => 42,  90 => 38,  78 => 31,  68 => 24,  57 => 17,  54 => 16,  52 => 15,  44 => 9,  41 => 8,  34 => 3,  30 => 1,  28 => 6,  26 => 4,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::layout.html.twig' %}*/
/* */
/* {% block title %}设置帐号 - {{ parent() }}{% endblock %}*/
/* {% set script_controller = 'settings/setup' %}*/
/* */
/* {% set hideSetupHint = true %}*/
/* */
/* {% block content %}*/
/* <div class="row row-6">*/
/*   <div class="col-md-6 col-md-offset-3">*/
/* */
/*     <div class="panel panel-default panel-page">*/
/*       <div class="panel-heading"><h2>设置帐号</h2></div>*/
/* */
/*       {% set emailArr = app.user.email|split('@') %}*/
/*       {% if not app.user.setup or emailArr[1] == 'edusoho.net' %}*/
/*         <form id="setup-form" class="form-vertical" method="post" action="{{ path('settings_setup') }}">*/
/* */
/*           <div class="alert alert-warning"> 为了帐号的安全以及更好的使用体验，请设置以下信息。 </div>*/
/* */
/*           <div class="form-group">*/
/*             <label class="control-label" for="setup-email-field">Email地址</label>*/
/*             <div class="controls">*/
/*               <input class="form-control" id="setup-email-field" type="text" name="email" value="" data-url="{{ path('register_email_check') }}" />*/
/*             </div>*/
/*           </div>*/
/* */
/*           <div class="form-group">*/
/*             <label class="control-label" for="setup-nickname-field">用户名</label>*/
/*             <div class="controls">*/
/*               <input class="form-control" id="setup-nickname-field" type="text" name="nickname" value="{{ app.user.nickname }}" data-url="{{ path('settings_setup_check_nickname') }}" />*/
/*               <div class="help-block">用户名一旦保存，就不能再修改了</div>*/
/*             </div>*/
/*           </div>*/
/* */
/*           <div class="form-group">*/
/*             <div class="controls">*/
/*               <button type="submit" class="btn btn-fat btn-primary btn-large" data-loading-text="正在保存..." data-goto="{{ path('homepage') }}">保存</button>*/
/*             </div>*/
/*           </div>*/
/* */
/*           <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/*         </form>*/
/*       {% else %}*/
/*         <div class="alert alert-danger">*/
/*           <p>该帐号已经设置过Email地址和用户名，不能再次设置！</p>*/
/*           <p><a href="{{ path('homepage') }}" class="btn btn-primary">返回首页</a></p>*/
/*         </div>*/
/*       {% endif %}*/
/* */
/*     </div>*/
/* */
/*   </div>*/
/* </div>*/
/* {% endblock %}*/
