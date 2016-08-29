<?php

/* TopxiaAdminBundle:CloudSetting:key-update.html.twig */
class __TwigTemplate_355b2c6edefecb6c76363aad7745d6a0c4ef099471e91070aa2aaef458adae73 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle:CloudSetting:layout.html.twig", "TopxiaAdminBundle:CloudSetting:key-update.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'maincontent' => array($this, 'block_maincontent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle:CloudSetting:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["submenu"] = "key";
        // line 6
        $context["script_controller"] = "setting/cloud-key-update";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "云平台设置 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 8
    public function block_maincontent($context, array $blocks = array())
    {
        // line 9
        echo "
";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "

<form class=\"form-horizontal\" id=\"key-update-form\" method=\"post\" novalidate>

  <div class=\"form-group\">
    <label class=\"col-md-3 control-label\" for=\"access-key-field\">AccessKey</label>
    <div class=\"col-md-6 controls\">
      <input id=\"access-key-field\" class=\"form-control\" type=\"text\" name=\"accessKey\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "request", array(), "any", false, true), "get", array(0 => "accessKey"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "request", array(), "any", false, true), "get", array(0 => "accessKey"), "method"), $this->env->getExtension('topxia_web_twig')->getSetting("storage.cloud_access_key", ""))) : ($this->env->getExtension('topxia_web_twig')->getSetting("storage.cloud_access_key", ""))), "html", null, true);
        echo "\">
      <p class=\"help-block\">";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->removeCopyright("在线升级EduSoho系统、购买EduSoho应用、使用EduSoho云服务，都需使用此Key。"), "html", null, true);
        echo "</p>
    </div>
  </div>

  <div class=\"form-group\">
    <label class=\"col-md-3 control-label\" for=\"secret-key-field\">SecretKey</label>
    <div class=\"col-md-6 controls\">
      <input id=\"secret-key-field\" class=\"form-control\" type=\"text\" name=\"secretKey\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "request", array(), "any", false, true), "get", array(0 => "secretKey"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "request", array(), "any", false, true), "get", array(0 => "secretKey"), "method"), $this->env->getExtension('topxia_web_twig')->getSetting("storage.cloud_secret_key", ""))) : ($this->env->getExtension('topxia_web_twig')->getSetting("storage.cloud_secret_key", ""))), "html", null, true);
        echo "\">
    </div>
  </div>

  <div class=\"form-group\">
    <div class=\"col-md-3 control-label\"></div>
    <div class=\"controls col-md-6\">
      <button type=\"submit\" class=\"btn btn-primary save-btn\" data-loading-text=\"正在保存，请稍等...\">保存</button>

      ";
        // line 34
        if ( !$this->env->getExtension('topxia_web_twig')->getSetting("storage.cloud_key_applied")) {
            // line 35
            echo "        <span class=\"pull-right\"><span class=\"text-info\">还没有授权码?</span> <a href=\"javascript:;\" id=\"key-apply-btn\" class=\"btn btn-sm btn-warning\" data-url=\"";
            echo $this->env->getExtension('routing')->getPath("admin_setting_cloud_key_apply");
            echo "\" data-goto-url=\"";
            echo $this->env->getExtension('routing')->getPath("admin_setting_cloud_key");
            echo "\"  data-loading-text=\"正在申请授权码，请稍等...\">申请授权码</a></span>
      ";
        }
        // line 37
        echo "
    </div>
  </div>

  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
</form>

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:CloudSetting:key-update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 41,  93 => 37,  85 => 35,  83 => 34,  71 => 25,  61 => 18,  57 => 17,  47 => 10,  44 => 9,  41 => 8,  34 => 3,  30 => 1,  28 => 6,  26 => 5,  11 => 1,);
    }
}
/*   {% extends 'TopxiaAdminBundle:CloudSetting:layout.html.twig' %}*/
/* */
/* {% block title %}云平台设置 - {{ parent() }}{% endblock %}*/
/* */
/* {% set submenu = 'key' %}*/
/* {% set script_controller = 'setting/cloud-key-update' %}*/
/* */
/* {% block maincontent %}*/
/* */
/* {{ web_macro.flash_messages() }}*/
/* */
/* <form class="form-horizontal" id="key-update-form" method="post" novalidate>*/
/* */
/*   <div class="form-group">*/
/*     <label class="col-md-3 control-label" for="access-key-field">AccessKey</label>*/
/*     <div class="col-md-6 controls">*/
/*       <input id="access-key-field" class="form-control" type="text" name="accessKey" value="{{ app.request.request.get('accessKey')|default(setting('storage.cloud_access_key', '')) }}">*/
/*       <p class="help-block">{{ '在线升级EduSoho系统、购买EduSoho应用、使用EduSoho云服务，都需使用此Key。'|copyright_less }}</p>*/
/*     </div>*/
/*   </div>*/
/* */
/*   <div class="form-group">*/
/*     <label class="col-md-3 control-label" for="secret-key-field">SecretKey</label>*/
/*     <div class="col-md-6 controls">*/
/*       <input id="secret-key-field" class="form-control" type="text" name="secretKey" value="{{ app.request.request.get('secretKey')|default(setting('storage.cloud_secret_key', '')) }}">*/
/*     </div>*/
/*   </div>*/
/* */
/*   <div class="form-group">*/
/*     <div class="col-md-3 control-label"></div>*/
/*     <div class="controls col-md-6">*/
/*       <button type="submit" class="btn btn-primary save-btn" data-loading-text="正在保存，请稍等...">保存</button>*/
/* */
/*       {% if not setting('storage.cloud_key_applied') %}*/
/*         <span class="pull-right"><span class="text-info">还没有授权码?</span> <a href="javascript:;" id="key-apply-btn" class="btn btn-sm btn-warning" data-url="{{ path('admin_setting_cloud_key_apply') }}" data-goto-url="{{ path('admin_setting_cloud_key') }}"  data-loading-text="正在申请授权码，请稍等...">申请授权码</a></span>*/
/*       {% endif %}*/
/* */
/*     </div>*/
/*   </div>*/
/* */
/*   <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/* </form>*/
/* */
/* {% endblock %}*/
