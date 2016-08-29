<?php

/* TopxiaAdminBundle:System:admin-sync.html.twig */
class __TwigTemplate_d92eddef9b91a1b06392cd8f0eae34819aea7ebfe9fe7478c463d61033132aa0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:System:admin-sync.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["script_controller"] = "setting/user-center";
        // line 4
        $context["menu"] = "admin_setting_user_center";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        // line 7
        echo "
";
        // line 8
        $context["user_center_name"] = ((((isset($context["mode"]) ? $context["mode"] : null) == "phpwind")) ? ("WindID") : ("Ucenter"));
        // line 9
        echo "
<div class=\"page-header\">
  <h1>管理员帐号同步</h1>
</div>

";
        // line 14
        if ( !(isset($context["bind"]) ? $context["bind"] : null)) {
            // line 15
            echo "
";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
            echo "

<form class=\"form-horizontal with-discuz\" method=\"post\" novalidate id=\"sync-discuz-form\">
  <div class=\"alert alert-info\">
    <p><strong>注意事项：</strong></p>
    <p>同步管理帐号，是将用户中心";
            // line 21
            echo twig_escape_filter($this->env, (isset($context["user_center_name"]) ? $context["user_center_name"] : null), "html", null, true);
            echo "的管理员帐号的用户名、Email、密码，覆盖掉EduoSoho中您<strong>当前登录</strong>的的管理帐号。<br>每个帐号只能同步一次。</p>
  </div>

  <div class=\"row form-group\">
    <div class=\"col-md-3 control-label\"><label>";
            // line 25
            echo twig_escape_filter($this->env, (isset($context["user_center_name"]) ? $context["user_center_name"] : null), "html", null, true);
            echo "管理员用户名</label></div>
    <div class=\"controls col-md-8\">
      <input class=\"form-control\" name=\"nickname\">
    </div>
  </div>

  <div class=\"row form-group\">
    <div class=\"col-md-3 control-label\"><label>";
            // line 32
            echo twig_escape_filter($this->env, (isset($context["user_center_name"]) ? $context["user_center_name"] : null), "html", null, true);
            echo "管理员密码</label></div>
    <div class=\"controls col-md-8\">
      <input type=\"password\" class=\"form-control\" name=\"password\">
    </div>
  </div>

  <div class=\"row form-group\">
    <div class=\"col-md-3 control-label\"></div>
    <div class=\"controls col-md-8\">
      <button type=\"submit\" class=\"btn btn-primary\">同步</button>
      <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
            echo "\">
    </div>
  </div>

</form>

";
        } else {
            // line 49
            echo "  <div class=\"alert alert-danger\">该管理员帐号已同步，无需再同步。</div>

";
        }
        // line 52
        echo "
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System:admin-sync.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 52,  101 => 49,  91 => 42,  78 => 32,  68 => 25,  61 => 21,  53 => 16,  50 => 15,  48 => 14,  41 => 9,  39 => 8,  36 => 7,  33 => 6,  29 => 1,  27 => 4,  25 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaAdminBundle::layout.html.twig' %}*/
/* */
/* {% set script_controller = 'setting/user-center' %}*/
/* {% set menu = 'admin_setting_user_center' %}*/
/* */
/* {% block main %}*/
/* */
/* {% set user_center_name = mode == 'phpwind' ? 'WindID' : 'Ucenter' %}*/
/* */
/* <div class="page-header">*/
/*   <h1>管理员帐号同步</h1>*/
/* </div>*/
/* */
/* {% if not bind %}*/
/* */
/* {{ web_macro.flash_messages() }}*/
/* */
/* <form class="form-horizontal with-discuz" method="post" novalidate id="sync-discuz-form">*/
/*   <div class="alert alert-info">*/
/*     <p><strong>注意事项：</strong></p>*/
/*     <p>同步管理帐号，是将用户中心{{ user_center_name }}的管理员帐号的用户名、Email、密码，覆盖掉EduoSoho中您<strong>当前登录</strong>的的管理帐号。<br>每个帐号只能同步一次。</p>*/
/*   </div>*/
/* */
/*   <div class="row form-group">*/
/*     <div class="col-md-3 control-label"><label>{{ user_center_name }}管理员用户名</label></div>*/
/*     <div class="controls col-md-8">*/
/*       <input class="form-control" name="nickname">*/
/*     </div>*/
/*   </div>*/
/* */
/*   <div class="row form-group">*/
/*     <div class="col-md-3 control-label"><label>{{ user_center_name }}管理员密码</label></div>*/
/*     <div class="controls col-md-8">*/
/*       <input type="password" class="form-control" name="password">*/
/*     </div>*/
/*   </div>*/
/* */
/*   <div class="row form-group">*/
/*     <div class="col-md-3 control-label"></div>*/
/*     <div class="controls col-md-8">*/
/*       <button type="submit" class="btn btn-primary">同步</button>*/
/*       <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/*     </div>*/
/*   </div>*/
/* */
/* </form>*/
/* */
/* {% else %}*/
/*   <div class="alert alert-danger">该管理员帐号已同步，无需再同步。</div>*/
/* */
/* {% endif %}*/
/* */
/* {% endblock %}*/
