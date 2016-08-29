<?php

/* TopxiaAdminBundle:System:user-center.html.twig */
class __TwigTemplate_5c97fcd3e84e9a8e90bab79b7d7e2f7dcf8ade5699c16babeecb8957bcc96186 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:System:user-center.html.twig", 1);
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
        // line 5
        $context["menu"] = "admin_setting_user_center";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "
  ";
        // line 9
        if (($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "mode", array()) != "default")) {
            // line 10
            echo "    <div class=\"page-header clearfix\"><a href=\"";
            echo $this->env->getExtension('routing')->getPath("admin_setting_admin_sync");
            echo "\" class=\"pull-right btn btn-link\">管理员帐号同步</a>
    </div>
  ";
        }
        // line 13
        echo "  

";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "

<form class=\"form-horizontal\" method=\"post\" novalidate>
  <div class=\"row form-group\">
    <div class=\"col-md-3 control-label\">
      <label >用户中心</label>
    </div>
    <div class=\"controls col-md-8 radios mode-radios\">
      ";
        // line 23
        echo $this->env->getExtension('topxia_html_twig')->radios("mode", array("default" => "无", "discuz" => "Discuz (Ucenter)", "phpwind" => "phpwind (WindID)"), $this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "mode", array()));
        echo "
      <div class=\"help-block\">支持phpwind 9系列，Discuz X2.5/X3.0/X3.1的用户中心</div>
    </div>
  </div>

  <div class=\"row form-group with-discuz\" style=\"display:none;\">
    <div class=\"col-md-3 control-label\"><label>Ucenter配置</label></div>
    <div class=\"controls col-md-8\">
      <textarea class=\"form-control\" name=\"discuz_config\" rows=\"10\">";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["discuzConfig"]) ? $context["discuzConfig"] : null), "html", null, true);
        echo "</textarea>
      <div class=\"help-block\">从Ucenter复制配置，粘帖到此处。注意：请在第一行加上\" &lt;?php\"。 <a href=\"http://www.qiqiuyu.com/course/125\" target=\"_blank\">如何配置？</a></div>
    </div>
  </div>

  <div class=\"row form-group with-phpwind\" style=\"display:none;\">
    <div class=\"col-md-3 control-label\"><label>WindId配置</label></div>
    <div class=\"controls col-md-8\">
      <textarea class=\"form-control\" name=\"phpwind_config\" rows=\"10\">";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["phpwindConfig"]) ? $context["phpwindConfig"] : null), "html", null, true);
        echo "</textarea>
      <div class=\"help-block\">如使用phpwind (WindID)的用户中心，请填写此项配置。<a href=\"http://demo.edusoho.com/course/125\" target=\"_blank\">如何配置？</a></div>
    </div>
  </div>

    <div class=\"form-group with-phpwind with-discuz\">
    <div class=\"col-md-3 control-label\">
      <label for=\"email_filter\">过滤邮箱地址清单</label>
    </div>
    <div class=\"controls col-md-8\">
      <textarea id=\"email_filter\" name=\"email_filter\" class=\"form-control\" rows=\"5\">";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "email_filter", array()), "html", null, true);
        echo "</textarea>
      <div class=\"help-block\">
        ";
        // line 53
        echo "
        <div>每行输入一个邮箱地址。名单中的邮箱地址如果出现在第三方登录的过程中，则会给该用户随机生成一个邮箱</div>
        ";
        echo "
      </div>
    </div>
  </div>


  <div class=\"row form-group\">
    <div class=\"col-md-3 control-label\"></div>
    <div class=\"controls col-md-8\">
      <button type=\"submit\" class=\"btn btn-primary\">提交</button>
    </div>
  </div>




  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
</form>

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System:user-center.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 69,  103 => 53,  98 => 49,  85 => 39,  74 => 31,  63 => 23,  52 => 15,  48 => 13,  41 => 10,  39 => 9,  36 => 8,  33 => 7,  29 => 1,  27 => 5,  25 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaAdminBundle::layout.html.twig' %}*/
/* */
/* {% set script_controller = 'setting/user-center' %}*/
/* */
/* {% set menu = 'admin_setting_user_center' %}*/
/* */
/* {% block main %}*/
/* */
/*   {% if setting.mode !='default' %}*/
/*     <div class="page-header clearfix"><a href="{{ path('admin_setting_admin_sync') }}" class="pull-right btn btn-link">管理员帐号同步</a>*/
/*     </div>*/
/*   {% endif %}*/
/*   */
/* */
/* {{ web_macro.flash_messages() }}*/
/* */
/* <form class="form-horizontal" method="post" novalidate>*/
/*   <div class="row form-group">*/
/*     <div class="col-md-3 control-label">*/
/*       <label >用户中心</label>*/
/*     </div>*/
/*     <div class="controls col-md-8 radios mode-radios">*/
/*       {{ radios('mode', {'default':'无', 'discuz':'Discuz (Ucenter)', 'phpwind':'phpwind (WindID)'}, setting.mode) }}*/
/*       <div class="help-block">支持phpwind 9系列，Discuz X2.5/X3.0/X3.1的用户中心</div>*/
/*     </div>*/
/*   </div>*/
/* */
/*   <div class="row form-group with-discuz" style="display:none;">*/
/*     <div class="col-md-3 control-label"><label>Ucenter配置</label></div>*/
/*     <div class="controls col-md-8">*/
/*       <textarea class="form-control" name="discuz_config" rows="10">{{ discuzConfig }}</textarea>*/
/*       <div class="help-block">从Ucenter复制配置，粘帖到此处。注意：请在第一行加上" &lt;?php"。 <a href="http://www.qiqiuyu.com/course/125" target="_blank">如何配置？</a></div>*/
/*     </div>*/
/*   </div>*/
/* */
/*   <div class="row form-group with-phpwind" style="display:none;">*/
/*     <div class="col-md-3 control-label"><label>WindId配置</label></div>*/
/*     <div class="controls col-md-8">*/
/*       <textarea class="form-control" name="phpwind_config" rows="10">{{ phpwindConfig }}</textarea>*/
/*       <div class="help-block">如使用phpwind (WindID)的用户中心，请填写此项配置。<a href="http://demo.edusoho.com/course/125" target="_blank">如何配置？</a></div>*/
/*     </div>*/
/*   </div>*/
/* */
/*     <div class="form-group with-phpwind with-discuz">*/
/*     <div class="col-md-3 control-label">*/
/*       <label for="email_filter">过滤邮箱地址清单</label>*/
/*     </div>*/
/*     <div class="controls col-md-8">*/
/*       <textarea id="email_filter" name="email_filter" class="form-control" rows="5">{{setting.email_filter}}</textarea>*/
/*       <div class="help-block">*/
/*         {% verbatim %}*/
/*         <div>每行输入一个邮箱地址。名单中的邮箱地址如果出现在第三方登录的过程中，则会给该用户随机生成一个邮箱</div>*/
/*         {% endverbatim %}*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* */
/* */
/*   <div class="row form-group">*/
/*     <div class="col-md-3 control-label"></div>*/
/*     <div class="controls col-md-8">*/
/*       <button type="submit" class="btn btn-primary">提交</button>*/
/*     </div>*/
/*   </div>*/
/* */
/* */
/* */
/* */
/*   <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/* </form>*/
/* */
/* {% endblock %}*/
