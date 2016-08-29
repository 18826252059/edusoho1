<?php

/* TopxiaAdminBundle:System:default-avatar.html.twig */
class __TwigTemplate_b5ecd018104e330710cb0119be0f2e10e3841764a2cae86edaf02a168d42c6b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"form-group\" id=\"avatar-class\"
";
        // line 2
        if (($this->env->getExtension('topxia_web_twig')->getSetting("default.defaultAvatar") == 0)) {
            // line 3
            echo "style=\"display:none;\"
";
        }
        // line 5
        echo ">
  <div class=\"col-md-8 control-label\"><b>自定义默认头像</b></div>
  <form id=\"avatar-form\" method=\"post\">
    <div class=\"controls col-md-8 controls\">
      <img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSystemDefaultPath("avatar.png"), "html", null, true);
        echo "\">
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\"></div>
      <div class=\"controls col-md-8 controls\">
        <p class=\"help-block\">你可以上传JPG、GIF或PNG格式的文件。</p>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\"></div>
      <div class=\"controls col-md-8 controls\">
        <a id=\"default-avatar-btn\" 
          class=\"btn btn-default btn-sm\"
          data-upload-token=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->makeUpoadToken("system", "image"), "html", null, true);
        echo "\"
          data-goto-url=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("admin_setting_default_avatar_crop");
        echo "\"
        >上传</a>
      </div>
    </div>
  </form>
</div>

<div class=\"form-group\" id=\"system-avatar-class\" 
";
        // line 33
        if (($this->env->getExtension('topxia_web_twig')->getSetting("default.defaultAvatar") == 1)) {
            // line 34
            echo "style=\"display:none;\"
";
        }
        // line 36
        echo ">
  <div class=\"col-md-8 control-label\"><b>系统默认头像</b></div>
    <div class=\"controls col-md-8 controls\">
      <img src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/default/avatar.png"), "html", null, true);
        echo "\">
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System:default-avatar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 39,  73 => 36,  69 => 34,  67 => 33,  56 => 25,  52 => 24,  34 => 9,  28 => 5,  24 => 3,  22 => 2,  19 => 1,);
    }
}
/* <div class="form-group" id="avatar-class"*/
/* {% if setting('default.defaultAvatar') == 0 %}*/
/* style="display:none;"*/
/* {% endif %}*/
/* >*/
/*   <div class="col-md-8 control-label"><b>自定义默认头像</b></div>*/
/*   <form id="avatar-form" method="post">*/
/*     <div class="controls col-md-8 controls">*/
/*       <img src="{{ system_default_path('avatar.png' ) }}">*/
/*     </div>*/
/* */
/*     <div class="form-group">*/
/*       <div class="col-md-2 control-label"></div>*/
/*       <div class="controls col-md-8 controls">*/
/*         <p class="help-block">你可以上传JPG、GIF或PNG格式的文件。</p>*/
/*       </div>*/
/*     </div>*/
/* */
/*     <div class="form-group">*/
/*       <div class="col-md-2 control-label"></div>*/
/*       <div class="controls col-md-8 controls">*/
/*         <a id="default-avatar-btn" */
/*           class="btn btn-default btn-sm"*/
/*           data-upload-token="{{ upload_token('system', 'image') }}"*/
/*           data-goto-url="{{path('admin_setting_default_avatar_crop')}}"*/
/*         >上传</a>*/
/*       </div>*/
/*     </div>*/
/*   </form>*/
/* </div>*/
/* */
/* <div class="form-group" id="system-avatar-class" */
/* {% if setting('default.defaultAvatar') == 1 %}*/
/* style="display:none;"*/
/* {% endif %}*/
/* >*/
/*   <div class="col-md-8 control-label"><b>系统默认头像</b></div>*/
/*     <div class="controls col-md-8 controls">*/
/*       <img src="{{ asset('assets/img/default/avatar.png') }}">*/
/*     </div>*/
/* </div>*/
/* */
