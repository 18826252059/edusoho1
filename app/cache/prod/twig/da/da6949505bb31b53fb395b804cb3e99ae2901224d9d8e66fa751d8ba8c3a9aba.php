<?php

/* TopxiaWebBundle:Settings:password.html.twig */
class __TwigTemplate_efcc70ff32c0da2d09c14075b2d02417574fe966cf5662136f7cc0379d3feedb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:Settings:layout.html.twig", "TopxiaWebBundle:Settings:password.html.twig", 1);
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
        // line 5
        $context["script_controller"] = "settings/password";
        // line 7
        $context["side_nav"] = "security";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "密码修改 - 安全设置 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 9
    public function block_main($context, array $blocks = array())
    {
        // line 10
        echo "
  <div class=\"panel panel-default panel-col\">
    <div class=\"panel-heading\">安全设置</div>
    <div class=\"panel-body\">

      <ul class=\"breadcrumb\">
        <li><a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("settings_security");
        echo "\">安全设置</a></li>
        <li class=\"active\">登录密码修改</li>
      </ul>  


";
        // line 21
        if ( !$this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "password", array())) {
            // line 22
            echo "        <div class=\"alert alert-warning\">
          <p>当前帐号从第三方帐号直接登录时创建，尚未设置密码。</p>
          <p>为了帐号的安全，请通过邮箱找回密码的方式，重设密码！</p>
          <p><a href=\"";
            // line 25
            echo $this->env->getExtension('routing')->getPath("password_reset");
            echo "\" class=\"btn btn-primary\">现在就去重设密码！</a></p>
        </div>
      ";
        }
        // line 28
        echo "
      <form id=\"settings-password-form\" class=\"form-horizontal\" method=\"post\" ";
        // line 29
        if ( !$this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "password", array())) {
            echo " style=\"display:none;\"";
        }
        echo ">

        ";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "
        
        <div class=\"form-group\">
          <div class=\"col-md-2 control-label\">";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "currentPassword", array()), 'label', array("label" => "当前密码"));
        echo "</div>
          <div class=\"controls col-md-8 controls\">
            ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "currentPassword", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
          </div>
        </div>

        <div class=\"form-group\">
          <div class=\"col-md-2 control-label\">";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "newPassword", array()), 'label', array("label" => "新密码"));
        echo "</div>
          <div class=\"controls col-md-8 controls\">
            ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "newPassword", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
          </div>
        </div>

        <div class=\"form-group\">
          <div class=\"col-md-2 control-label\">";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "confirmPassword", array()), 'label', array("label" => "确认密码"));
        echo "</div>
          <div class=\"controls col-md-8 controls\">
            ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "confirmPassword", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
          </div>
        </div>

        <div class=\"form-group\">
          <div class=\"col-md-2 control-label\"></div>
          <div class=\"controls col-md-8 controls\">
            ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "
            <button id=\"password-save-btn\" data-submiting-text=\"正在保存\" type=\"submit\" class=\"btn btn-primary\">提交</button>
          </div>
        </div>

        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">

      </form>

    </div>
  </div>

";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Settings:password.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 62,  130 => 57,  120 => 50,  115 => 48,  107 => 43,  102 => 41,  94 => 36,  89 => 34,  83 => 31,  76 => 29,  73 => 28,  67 => 25,  62 => 22,  60 => 21,  52 => 16,  44 => 10,  41 => 9,  34 => 3,  30 => 1,  28 => 7,  26 => 5,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle:Settings:layout.html.twig' %}*/
/* */
/* {% block title %}密码修改 - 安全设置 - {{ parent() }}{% endblock %}*/
/* */
/* {% set script_controller = 'settings/password' %}*/
/* {# {% set side_nav = 'password' %} #}*/
/* {% set side_nav = 'security' %}*/
/* */
/* {% block main %}*/
/* */
/*   <div class="panel panel-default panel-col">*/
/*     <div class="panel-heading">安全设置</div>*/
/*     <div class="panel-body">*/
/* */
/*       <ul class="breadcrumb">*/
/*         <li><a href="{{ path('settings_security') }}">安全设置</a></li>*/
/*         <li class="active">登录密码修改</li>*/
/*       </ul>  */
/* */
/* */
/* {% if not app.user.password %}*/
/*         <div class="alert alert-warning">*/
/*           <p>当前帐号从第三方帐号直接登录时创建，尚未设置密码。</p>*/
/*           <p>为了帐号的安全，请通过邮箱找回密码的方式，重设密码！</p>*/
/*           <p><a href="{{ path('password_reset') }}" class="btn btn-primary">现在就去重设密码！</a></p>*/
/*         </div>*/
/*       {% endif %}*/
/* */
/*       <form id="settings-password-form" class="form-horizontal" method="post" {% if not app.user.password %} style="display:none;"{% endif %}>*/
/* */
/*         {{ web_macro.flash_messages() }}*/
/*         */
/*         <div class="form-group">*/
/*           <div class="col-md-2 control-label">{{ form_label(form.currentPassword, '当前密码') }}</div>*/
/*           <div class="controls col-md-8 controls">*/
/*             {{ form_widget(form.currentPassword, {attr:{class:'form-control'}}) }}*/
/*           </div>*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*           <div class="col-md-2 control-label">{{ form_label(form.newPassword, '新密码') }}</div>*/
/*           <div class="controls col-md-8 controls">*/
/*             {{ form_widget(form.newPassword, {attr:{class:'form-control'}}) }}*/
/*           </div>*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*           <div class="col-md-2 control-label">{{ form_label(form.confirmPassword, '确认密码') }}</div>*/
/*           <div class="controls col-md-8 controls">*/
/*             {{ form_widget(form.confirmPassword, {attr:{class:'form-control'}}) }}*/
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
/*     </div>*/
/*   </div>*/
/* */
/* {% endblock %}*/
