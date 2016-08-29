<?php

/* TopxiaAdminBundle:System:mobile.setting.html.twig */
class __TwigTemplate_3a7c2aee3d8059758300ef4aef188babb999eac2249a3fb716dead9b2b119e1e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:System:mobile.setting.html.twig", 1);
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
        $context["menu"] = "admin_setting_mobile";
        // line 5
        $context["script_controller"] = "setting/mobile";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_main($context, array $blocks = array())
    {
        // line 9
        echo "<style>
#mobile-splash1-container img ,
#mobile-splash2-container img ,
#mobile-splash3-container img ,
#mobile-splash4-container img ,
#mobile-splash5-container img ,
#mobile-logo-container img ,
#site-appcover-container img,
#site-applogo-container img
{max-width: 80%; margin-bottom: 10px;}
</style>

";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "

<form class=\"form-horizontal\" id=\"mobile-form\" method=\"post\">

  <div class=\"form-group\">
    <div class=\"col-md-2 control-label\">
      <label >是否开启客户端</label>
    </div>
    <div class=\"controls col-md-8 radios\">
      ";
        // line 30
        echo $this->env->getExtension('topxia_html_twig')->radios("enabled", array(1 => "开启", 0 => "关闭"), $this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "enabled", array()));
        echo "
      <div class=\"help-block\">开启后，网站首页顶部导航会出现客户端入口<a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("admin_operation_mobile");
        echo "\">常规设置点这里</a></div>
    </div>
  </div>

  <div class=\"form-group ";
        // line 35
        if ((((($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "enabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "enabled", array()), 0)) : (0)) != 1) && (isset($context["hasMobile"]) ? $context["hasMobile"] : null))) {
            echo "hidden ";
        }
        echo "\">
    <div class=\"col-md-2 control-label\">
      <label >版本选择</label>
    </div>
    <div class=\"controls col-md-8 radios\">
      ";
        // line 40
        echo $this->env->getExtension('topxia_html_twig')->radios("ver", array(1 => "安卓新版APP3.0", 0 => "安卓旧版APP2.6"), $this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "ver", array()));
        echo "
      <div class=\"alert alert-warning \" role=\"alert\"><i class=\"glyphicon glyphicon-info-sign\"></i>  选择后请勿随意切换。</div>
    </div>
  </div>
  
  <div class=\"form-group\">
    <div class=\"col-md-2 control-label\">
      <label for=\"mobile_about\">网校简介</label>
    </div>
    <div class=\"controls col-md-8\">
      <textarea class=\"form-control\" id=\"mobile_about\" rows=\"10\" name=\"about\" data-image-upload-url=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editor_upload", array("token" => $this->env->getExtension('topxia_web_twig')->makeUpoadToken("default"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "about", array()), "html", null, true);
        echo "</textarea>
      <div class=\"help-block\">此简介将显示在移动客户端的\"关于网校\"</div>
    </div>
  </div>

  <div class=\"form-group\">
    <div class=\"col-md-2 control-label\">
      <label for=\"logo\">网校LOGO</label>
    </div>
    <div class=\"col-md-8 controls\">
      <div id=\"mobile-logo-container\">";
        // line 60
        if ($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "logo", array())) {
            echo "<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "logo", array())), "html", null, true);
            echo "\">";
        }
        echo "</div>
      <a class=\"btn btn-default btn-sm\" id=\"mobile-logo-upload\" data-upload-token=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->makeUpoadToken("system", "image"), "html", null, true);
        echo "\" data-goto-url=\"";
        echo $this->env->getExtension('routing')->getPath("admin_setting_mobile_picture_upload", array("type" => "logo"));
        echo "\">上传</a>
      <button class=\"btn btn-default btn-sm\" id=\"mobile-logo-remove\" type=\"button\" data-url=\"";
        // line 62
        echo $this->env->getExtension('routing')->getPath("admin_setting_mobile_picture_remove", array("type" => "logo"));
        echo "\" ";
        if ( !$this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "logo", array())) {
            echo "style=\"display:none;\"";
        }
        echo ">删除</button>
      <p class=\"help-block\">请上传png, gif, jpg格式的图片文件。LOGO图片的高度建议不要超过50px。</p>
      <input type=\"hidden\" name=\"logo\" value=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "logo", array()), "html", null, true);
        echo "\">
    </div>
  </div>

  <div class=\"form-group\">
    <div class=\"col-md-2 control-label\">
      <label for=\"logo\">公告</label>
    </div>
    <div class=\"col-md-8 controls\">
      <input type=\"text\" class=\"form-control\" name=\"notice\" value=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "notice", array()), "html", null, true);
        echo "\">
      <p class=\"help-block\">将会在手机端banner下面显示网校的公告，建议用简练概括的语言描述，字数在20字以下。</p>
    </div>
  </div>

";
        // line 78
        if ((((isset($context["mobileCode"]) ? $context["mobileCode"] : null) != "edusoho") && ((isset($context["mobileCode"]) ? $context["mobileCode"] : null) != "edusohov3"))) {
            // line 79
            echo "  <fieldset>
    <legend>定制APP设置项</legend>
      <div class=\"form-group\">
        <div class=\"col-md-2 control-label\">
          <label for=\"appname\">APP名称</label>
        </div>
        <div class=\"col-md-8 controls\">
        <input type=\"text\" class=\"form-control\" name=\"appname\" value=\"";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "appname", array()), "html", null, true);
            echo "\" >
        </div>
      </div>

      <div class=\"form-group\">
        <div class=\"col-md-2 control-label\">
          <label for=\"appabout\">APP简介</label>
        </div>
        <div class=\"col-md-8 controls\">
        <input type=\"text\" class=\"form-control\" name=\"appabout\" value=\"";
            // line 95
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "appabout", array()), "html", null, true);
            echo "\">
        </div>
      </div>

      <div class=\"form-group\">
        <div class=\"col-md-2 control-label\">
          <label for=\"applogo\">APP图标</label>
        </div>
        <div class=\"col-md-8 controls\">

         <div id=\"site-applogo-container\" class=\"mbl\">";
            // line 105
            if ($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "applogo", array())) {
                echo "<img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "applogo", array())), "html", null, true);
                echo "\">";
            }
            echo "</div>
          <a class=\"btn btn-default btn-sm\" id=\"site-applogo-upload\" data-upload-token=\"";
            // line 106
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->makeUpoadToken("system", "image"), "html", null, true);
            echo "\"
          data-goto-url=\"";
            // line 107
            echo $this->env->getExtension('routing')->getPath("admin_setting_mobile_picture_upload", array("type" => "applogo"));
            echo "\">上传</a>
          <button class=\"btn btn-default btn-sm\" id=\"site-applogo-remove\" type=\"button\"
          data-url=\"";
            // line 109
            echo $this->env->getExtension('routing')->getPath("admin_setting_mobile_picture_remove", array("type" => "applogo"));
            echo "\" ";
            if ( !$this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "applogo", array())) {
                echo "style=\"display:none;\"";
            }
            echo ">删除</button>
          <p class=\"help-block\">请上传png, gif, jpg格式的图片文件。推荐尺寸 120*120。</p>
           <input type=\"hidden\" name=\"applogo\" value=\"";
            // line 111
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "applogo", array()), "html", null, true);
            echo "\">
        </div>
      </div>

      <div class=\"form-group\">
        <div class=\"col-md-2 control-label\">
          <label for=\"appcover\">APP封面</label>
        </div>
        <div class=\"col-md-8 controls\">
         <div id=\"site-appcover-container\" class=\"mbl\">";
            // line 120
            if ($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "appcover", array())) {
                echo "<img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "appcover", array())), "html", null, true);
                echo "\">";
            }
            echo "</div>
          <a class=\"btn btn-default btn-sm\" id=\"site-appcover-upload\" data-upload-token=\"";
            // line 121
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->makeUpoadToken("system", "image"), "html", null, true);
            echo "\"
          data-goto-url=\"";
            // line 122
            echo $this->env->getExtension('routing')->getPath("admin_setting_mobile_picture_upload", array("type" => "appcover"));
            echo "\">上传</a>
          <button class=\"btn btn-default btn-sm\" id=\"site-appcover-remove\" type=\"button\"
          data-url=\"";
            // line 124
            echo $this->env->getExtension('routing')->getPath("admin_setting_mobile_picture_remove", array("type" => "appcover"));
            echo "\" ";
            if ( !$this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "appcover", array())) {
                echo "style=\"display:none;\"";
            }
            echo ">删除</button>
          <p class=\"help-block\">请上传png, gif, jpg格式的图片文件。推荐尺寸 225*400。</p>
          <input type=\"hidden\" name=\"appcover\" value=\"";
            // line 126
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "appcover", array()), "html", null, true);
            echo "\">
        </div>

      </div>
  </fieldset>
";
        }
        // line 132
        echo "
 <fieldset>
  <legend>设置启动图</legend>
  <div class=\"help-block\">最多允许设置5张启动图(尺寸为640*960)，用户首次登录网校时会显示启动图。</div>
  <div class=\"form-group\">
    <div class=\"col-md-2 control-label\">
      <label for=\"splash1\">启动图1</label>
    </div>
    <div class=\"col-md-8 controls\">
      <div id=\"mobile-splash1-container\">";
        // line 141
        if ($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "splash1", array())) {
            echo "<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "splash1", array())), "html", null, true);
            echo "\">";
        }
        echo "</div>
      <a class=\"btn btn-default btn-sm\" id=\"mobile-splash1-upload\" data-upload-token=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->makeUpoadToken("system", "image"), "html", null, true);
        echo "\"data-goto-url=\"";
        echo $this->env->getExtension('routing')->getPath("admin_setting_mobile_picture_upload", array("type" => "splash1"));
        echo "\">上传</a>
      <button class=\"btn btn-default btn-sm\" id=\"mobile-splash1-remove\" type=\"button\" data-url=\"";
        // line 143
        echo $this->env->getExtension('routing')->getPath("admin_setting_mobile_picture_remove", array("type" => "splash1"));
        echo "\" ";
        if ( !$this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "splash1", array())) {
            echo "style=\"display:none;\"";
        }
        echo ">删除</button>
      <p class=\"help-block\">请上传png, gif, jpg格式的图片文件。</p>
      <input type=\"hidden\" name=\"splash1\" value=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "splash1", array()), "html", null, true);
        echo "\">
    </div>
  </div>

  <div class=\"form-group\">
    <div class=\"col-md-2 control-label\">
      <label for=\"splash2\">启动图2</label>
    </div>
    <div class=\"col-md-8 controls\">
      <div id=\"mobile-splash2-container\">";
        // line 154
        if ($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "splash2", array())) {
            echo "<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "splash2", array())), "html", null, true);
            echo "\">";
        }
        echo "</div>
      <a class=\"btn btn-default btn-sm\" id=\"mobile-splash2-upload\" data-upload-token=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->makeUpoadToken("system", "image"), "html", null, true);
        echo "\" data-goto-url=\"";
        echo $this->env->getExtension('routing')->getPath("admin_setting_mobile_picture_upload", array("type" => "splash2"));
        echo "\">上传</a>
      <button class=\"btn btn-default btn-sm\" id=\"mobile-splash2-remove\" type=\"button\" data-url=\"";
        // line 156
        echo $this->env->getExtension('routing')->getPath("admin_setting_mobile_picture_remove", array("type" => "splash2"));
        echo "\" ";
        if ( !$this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "splash2", array())) {
            echo "style=\"display:none;\"";
        }
        echo ">删除</button>
      <p class=\"help-block\">请上传png, gif, jpg格式的图片文件。</p>
      <input type=\"hidden\" name=\"splash2\" value=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "splash2", array()), "html", null, true);
        echo "\">
    </div>
  </div>

  <div class=\"form-group\">
    <div class=\"col-md-2 control-label\">
      <label for=\"splash3\">启动图3</label>
    </div>
    <div class=\"col-md-8 controls\">
      <div id=\"mobile-splash3-container\">";
        // line 167
        if ($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "splash3", array())) {
            echo "<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "splash3", array())), "html", null, true);
            echo "\">";
        }
        echo "</div>
      <a class=\"btn btn-default btn-sm\" id=\"mobile-splash3-upload\" data-upload-token=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->makeUpoadToken("system", "image"), "html", null, true);
        echo "\" data-goto-url=\"";
        echo $this->env->getExtension('routing')->getPath("admin_setting_mobile_picture_upload", array("type" => "splash3"));
        echo "\">上传</a>
      <button class=\"btn btn-default btn-sm\" id=\"mobile-splash3-remove\" type=\"button\" data-url=\"";
        // line 169
        echo $this->env->getExtension('routing')->getPath("admin_setting_mobile_picture_remove", array("type" => "splash3"));
        echo "\" ";
        if ( !$this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "splash3", array())) {
            echo "style=\"display:none;\"";
        }
        echo ">删除</button>
      <p class=\"help-block\">请上传png, gif, jpg格式的图片文件。</p>
      <input type=\"hidden\" name=\"splash3\" value=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "splash3", array()), "html", null, true);
        echo "\">
    </div>
  </div>

  <div class=\"form-group\">
    <div class=\"col-md-2 control-label\">
      <label for=\"splash4\">启动图4</label>
    </div>
    <div class=\"col-md-8 controls\">
      <div id=\"mobile-splash4-container\">";
        // line 180
        if ($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "splash4", array())) {
            echo "<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "splash4", array())), "html", null, true);
            echo "\">";
        }
        echo "</div>
      <a class=\"btn btn-default btn-sm\" id=\"mobile-splash4-upload\" data-upload-token=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->makeUpoadToken("system", "image"), "html", null, true);
        echo "\" data-goto-url=\"";
        echo $this->env->getExtension('routing')->getPath("admin_setting_mobile_picture_upload", array("type" => "splash4"));
        echo "\">上传</a>
      <button class=\"btn btn-default btn-sm\" id=\"mobile-splash4-remove\" type=\"button\" data-url=\"";
        // line 182
        echo $this->env->getExtension('routing')->getPath("admin_setting_mobile_picture_remove", array("type" => "splash4"));
        echo "\" ";
        if ( !$this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "splash4", array())) {
            echo "style=\"display:none;\"";
        }
        echo ">删除</button>
      <p class=\"help-block\">请上传png, gif, jpg格式的图片文件。</p>
      <input type=\"hidden\" name=\"splash4\" value=\"";
        // line 184
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "splash4", array()), "html", null, true);
        echo "\">
    </div>
  </div>

  <div class=\"form-group\">
    <div class=\"col-md-2 control-label\">
      <label for=\"splash5\">启动图5</label>
    </div>
    <div class=\"col-md-8 controls\">
      <div id=\"mobile-splash5-container\">";
        // line 193
        if ($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "splash5", array())) {
            echo "<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "splash5", array())), "html", null, true);
            echo "\">";
        }
        echo "</div>
      <a class=\"btn btn-default btn-sm\" id=\"mobile-splash5-upload\" data-upload-token=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->makeUpoadToken("system", "image"), "html", null, true);
        echo "\" data-goto-url=\"";
        echo $this->env->getExtension('routing')->getPath("admin_setting_mobile_picture_upload", array("type" => "splash5"));
        echo "\">上传</a>
      <button class=\"btn btn-default btn-sm\" id=\"mobile-splash5-remove\" type=\"button\" data-url=\"";
        // line 195
        echo $this->env->getExtension('routing')->getPath("admin_setting_mobile_picture_remove", array("type" => "splash5"));
        echo "\" ";
        if ( !$this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "splash5", array())) {
            echo "style=\"display:none;\"";
        }
        echo ">删除</button>
      <p class=\"help-block\">请上传png, gif, jpg格式的图片文件。</p>
      <input type=\"hidden\" name=\"splash5\" value=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "splash5", array()), "html", null, true);
        echo "\">
    </div>
  </div>

  </fieldset>



  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 205
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
  
  <div class=\"row form-group\">
    <div class=\"controls col-md-offset-2 col-md-8\">
      <button type=\"submit\" class=\"btn btn-primary\">提交</button>
    </div>
  </div>

</form>

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System:mobile.setting.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  448 => 205,  437 => 197,  428 => 195,  422 => 194,  414 => 193,  402 => 184,  393 => 182,  387 => 181,  379 => 180,  367 => 171,  358 => 169,  352 => 168,  344 => 167,  332 => 158,  323 => 156,  317 => 155,  309 => 154,  297 => 145,  288 => 143,  282 => 142,  274 => 141,  263 => 132,  254 => 126,  245 => 124,  240 => 122,  236 => 121,  228 => 120,  216 => 111,  207 => 109,  202 => 107,  198 => 106,  190 => 105,  177 => 95,  165 => 86,  156 => 79,  154 => 78,  146 => 73,  134 => 64,  125 => 62,  119 => 61,  111 => 60,  96 => 50,  83 => 40,  73 => 35,  66 => 31,  62 => 30,  50 => 21,  36 => 9,  33 => 8,  29 => 1,  27 => 5,  25 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaAdminBundle::layout.html.twig' %}*/
/* */
/* {% set menu = 'admin_setting_mobile' %}*/
/* */
/* {% set script_controller = 'setting/mobile' %}*/
/* */
/* */
/* {% block main %}*/
/* <style>*/
/* #mobile-splash1-container img ,*/
/* #mobile-splash2-container img ,*/
/* #mobile-splash3-container img ,*/
/* #mobile-splash4-container img ,*/
/* #mobile-splash5-container img ,*/
/* #mobile-logo-container img ,*/
/* #site-appcover-container img,*/
/* #site-applogo-container img*/
/* {max-width: 80%; margin-bottom: 10px;}*/
/* </style>*/
/* */
/* {{ web_macro.flash_messages() }}*/
/* */
/* <form class="form-horizontal" id="mobile-form" method="post">*/
/* */
/*   <div class="form-group">*/
/*     <div class="col-md-2 control-label">*/
/*       <label >是否开启客户端</label>*/
/*     </div>*/
/*     <div class="controls col-md-8 radios">*/
/*       {{ radios('enabled', {1:'开启', 0:'关闭'}, mobile.enabled) }}*/
/*       <div class="help-block">开启后，网站首页顶部导航会出现客户端入口<a href="{{path('admin_operation_mobile')}}">常规设置点这里</a></div>*/
/*     </div>*/
/*   </div>*/
/* */
/*   <div class="form-group {% if mobile.enabled|default(0) != 1 and hasMobile %}hidden {% endif %}">*/
/*     <div class="col-md-2 control-label">*/
/*       <label >版本选择</label>*/
/*     </div>*/
/*     <div class="controls col-md-8 radios">*/
/*       {{ radios('ver', {1:'安卓新版APP3.0', 0:'安卓旧版APP2.6'}, mobile.ver) }}*/
/*       <div class="alert alert-warning " role="alert"><i class="glyphicon glyphicon-info-sign"></i>  选择后请勿随意切换。</div>*/
/*     </div>*/
/*   </div>*/
/*   */
/*   <div class="form-group">*/
/*     <div class="col-md-2 control-label">*/
/*       <label for="mobile_about">网校简介</label>*/
/*     </div>*/
/*     <div class="controls col-md-8">*/
/*       <textarea class="form-control" id="mobile_about" rows="10" name="about" data-image-upload-url="{{ path('editor_upload', {token:upload_token('default')}) }}">{{ mobile.about }}</textarea>*/
/*       <div class="help-block">此简介将显示在移动客户端的"关于网校"</div>*/
/*     </div>*/
/*   </div>*/
/* */
/*   <div class="form-group">*/
/*     <div class="col-md-2 control-label">*/
/*       <label for="logo">网校LOGO</label>*/
/*     </div>*/
/*     <div class="col-md-8 controls">*/
/*       <div id="mobile-logo-container">{% if mobile.logo %}<img src="{{ asset(mobile.logo) }}">{% endif %}</div>*/
/*       <a class="btn btn-default btn-sm" id="mobile-logo-upload" data-upload-token="{{ upload_token('system', 'image') }}" data-goto-url="{{ path('admin_setting_mobile_picture_upload', {type:'logo'}) }}">上传</a>*/
/*       <button class="btn btn-default btn-sm" id="mobile-logo-remove" type="button" data-url="{{ path('admin_setting_mobile_picture_remove', {type:'logo'}) }}" {% if not mobile.logo %}style="display:none;"{% endif %}>删除</button>*/
/*       <p class="help-block">请上传png, gif, jpg格式的图片文件。LOGO图片的高度建议不要超过50px。</p>*/
/*       <input type="hidden" name="logo" value="{{ mobile.logo }}">*/
/*     </div>*/
/*   </div>*/
/* */
/*   <div class="form-group">*/
/*     <div class="col-md-2 control-label">*/
/*       <label for="logo">公告</label>*/
/*     </div>*/
/*     <div class="col-md-8 controls">*/
/*       <input type="text" class="form-control" name="notice" value="{{ mobile.notice }}">*/
/*       <p class="help-block">将会在手机端banner下面显示网校的公告，建议用简练概括的语言描述，字数在20字以下。</p>*/
/*     </div>*/
/*   </div>*/
/* */
/* {% if mobileCode != 'edusoho' and mobileCode != 'edusohov3' %}*/
/*   <fieldset>*/
/*     <legend>定制APP设置项</legend>*/
/*       <div class="form-group">*/
/*         <div class="col-md-2 control-label">*/
/*           <label for="appname">APP名称</label>*/
/*         </div>*/
/*         <div class="col-md-8 controls">*/
/*         <input type="text" class="form-control" name="appname" value="{{mobile.appname}}" >*/
/*         </div>*/
/*       </div>*/
/* */
/*       <div class="form-group">*/
/*         <div class="col-md-2 control-label">*/
/*           <label for="appabout">APP简介</label>*/
/*         </div>*/
/*         <div class="col-md-8 controls">*/
/*         <input type="text" class="form-control" name="appabout" value="{{mobile.appabout}}">*/
/*         </div>*/
/*       </div>*/
/* */
/*       <div class="form-group">*/
/*         <div class="col-md-2 control-label">*/
/*           <label for="applogo">APP图标</label>*/
/*         </div>*/
/*         <div class="col-md-8 controls">*/
/* */
/*          <div id="site-applogo-container" class="mbl">{% if mobile.applogo %}<img src="{{ asset(mobile.applogo) }}">{% endif %}</div>*/
/*           <a class="btn btn-default btn-sm" id="site-applogo-upload" data-upload-token="{{ upload_token('system', 'image') }}"*/
/*           data-goto-url="{{ path('admin_setting_mobile_picture_upload', {type:'applogo'}) }}">上传</a>*/
/*           <button class="btn btn-default btn-sm" id="site-applogo-remove" type="button"*/
/*           data-url="{{ path('admin_setting_mobile_picture_remove', {type:'applogo'}) }}" {% if not mobile.applogo %}style="display:none;"{% endif %}>删除</button>*/
/*           <p class="help-block">请上传png, gif, jpg格式的图片文件。推荐尺寸 120*120。</p>*/
/*            <input type="hidden" name="applogo" value="{{ mobile.applogo }}">*/
/*         </div>*/
/*       </div>*/
/* */
/*       <div class="form-group">*/
/*         <div class="col-md-2 control-label">*/
/*           <label for="appcover">APP封面</label>*/
/*         </div>*/
/*         <div class="col-md-8 controls">*/
/*          <div id="site-appcover-container" class="mbl">{% if mobile.appcover %}<img src="{{ asset(mobile.appcover) }}">{% endif %}</div>*/
/*           <a class="btn btn-default btn-sm" id="site-appcover-upload" data-upload-token="{{ upload_token('system', 'image') }}"*/
/*           data-goto-url="{{ path('admin_setting_mobile_picture_upload', {type:'appcover'}) }}">上传</a>*/
/*           <button class="btn btn-default btn-sm" id="site-appcover-remove" type="button"*/
/*           data-url="{{ path('admin_setting_mobile_picture_remove', {type:'appcover'}) }}" {% if not mobile.appcover %}style="display:none;"{% endif %}>删除</button>*/
/*           <p class="help-block">请上传png, gif, jpg格式的图片文件。推荐尺寸 225*400。</p>*/
/*           <input type="hidden" name="appcover" value="{{ mobile.appcover }}">*/
/*         </div>*/
/* */
/*       </div>*/
/*   </fieldset>*/
/* {% endif %}*/
/* */
/*  <fieldset>*/
/*   <legend>设置启动图</legend>*/
/*   <div class="help-block">最多允许设置5张启动图(尺寸为640*960)，用户首次登录网校时会显示启动图。</div>*/
/*   <div class="form-group">*/
/*     <div class="col-md-2 control-label">*/
/*       <label for="splash1">启动图1</label>*/
/*     </div>*/
/*     <div class="col-md-8 controls">*/
/*       <div id="mobile-splash1-container">{% if mobile.splash1 %}<img src="{{ asset(mobile.splash1) }}">{% endif %}</div>*/
/*       <a class="btn btn-default btn-sm" id="mobile-splash1-upload" data-upload-token="{{ upload_token('system', 'image') }}"data-goto-url="{{ path('admin_setting_mobile_picture_upload', {type:'splash1'}) }}">上传</a>*/
/*       <button class="btn btn-default btn-sm" id="mobile-splash1-remove" type="button" data-url="{{ path('admin_setting_mobile_picture_remove', {type:'splash1'}) }}" {% if not mobile.splash1 %}style="display:none;"{% endif %}>删除</button>*/
/*       <p class="help-block">请上传png, gif, jpg格式的图片文件。</p>*/
/*       <input type="hidden" name="splash1" value="{{ mobile.splash1 }}">*/
/*     </div>*/
/*   </div>*/
/* */
/*   <div class="form-group">*/
/*     <div class="col-md-2 control-label">*/
/*       <label for="splash2">启动图2</label>*/
/*     </div>*/
/*     <div class="col-md-8 controls">*/
/*       <div id="mobile-splash2-container">{% if mobile.splash2 %}<img src="{{ asset(mobile.splash2) }}">{% endif %}</div>*/
/*       <a class="btn btn-default btn-sm" id="mobile-splash2-upload" data-upload-token="{{ upload_token('system', 'image') }}" data-goto-url="{{ path('admin_setting_mobile_picture_upload', {type:'splash2'}) }}">上传</a>*/
/*       <button class="btn btn-default btn-sm" id="mobile-splash2-remove" type="button" data-url="{{ path('admin_setting_mobile_picture_remove', {type:'splash2'}) }}" {% if not mobile.splash2 %}style="display:none;"{% endif %}>删除</button>*/
/*       <p class="help-block">请上传png, gif, jpg格式的图片文件。</p>*/
/*       <input type="hidden" name="splash2" value="{{ mobile.splash2 }}">*/
/*     </div>*/
/*   </div>*/
/* */
/*   <div class="form-group">*/
/*     <div class="col-md-2 control-label">*/
/*       <label for="splash3">启动图3</label>*/
/*     </div>*/
/*     <div class="col-md-8 controls">*/
/*       <div id="mobile-splash3-container">{% if mobile.splash3 %}<img src="{{ asset(mobile.splash3) }}">{% endif %}</div>*/
/*       <a class="btn btn-default btn-sm" id="mobile-splash3-upload" data-upload-token="{{ upload_token('system', 'image') }}" data-goto-url="{{ path('admin_setting_mobile_picture_upload', {type:'splash3'}) }}">上传</a>*/
/*       <button class="btn btn-default btn-sm" id="mobile-splash3-remove" type="button" data-url="{{ path('admin_setting_mobile_picture_remove', {type:'splash3'}) }}" {% if not mobile.splash3 %}style="display:none;"{% endif %}>删除</button>*/
/*       <p class="help-block">请上传png, gif, jpg格式的图片文件。</p>*/
/*       <input type="hidden" name="splash3" value="{{ mobile.splash3 }}">*/
/*     </div>*/
/*   </div>*/
/* */
/*   <div class="form-group">*/
/*     <div class="col-md-2 control-label">*/
/*       <label for="splash4">启动图4</label>*/
/*     </div>*/
/*     <div class="col-md-8 controls">*/
/*       <div id="mobile-splash4-container">{% if mobile.splash4 %}<img src="{{ asset(mobile.splash4) }}">{% endif %}</div>*/
/*       <a class="btn btn-default btn-sm" id="mobile-splash4-upload" data-upload-token="{{ upload_token('system', 'image') }}" data-goto-url="{{ path('admin_setting_mobile_picture_upload', {type:'splash4'}) }}">上传</a>*/
/*       <button class="btn btn-default btn-sm" id="mobile-splash4-remove" type="button" data-url="{{ path('admin_setting_mobile_picture_remove', {type:'splash4'}) }}" {% if not mobile.splash4 %}style="display:none;"{% endif %}>删除</button>*/
/*       <p class="help-block">请上传png, gif, jpg格式的图片文件。</p>*/
/*       <input type="hidden" name="splash4" value="{{ mobile.splash4 }}">*/
/*     </div>*/
/*   </div>*/
/* */
/*   <div class="form-group">*/
/*     <div class="col-md-2 control-label">*/
/*       <label for="splash5">启动图5</label>*/
/*     </div>*/
/*     <div class="col-md-8 controls">*/
/*       <div id="mobile-splash5-container">{% if mobile.splash5 %}<img src="{{ asset(mobile.splash5) }}">{% endif %}</div>*/
/*       <a class="btn btn-default btn-sm" id="mobile-splash5-upload" data-upload-token="{{ upload_token('system', 'image') }}" data-goto-url="{{ path('admin_setting_mobile_picture_upload', {type:'splash5'}) }}">上传</a>*/
/*       <button class="btn btn-default btn-sm" id="mobile-splash5-remove" type="button" data-url="{{ path('admin_setting_mobile_picture_remove', {type:'splash5'}) }}" {% if not mobile.splash5 %}style="display:none;"{% endif %}>删除</button>*/
/*       <p class="help-block">请上传png, gif, jpg格式的图片文件。</p>*/
/*       <input type="hidden" name="splash5" value="{{ mobile.splash5 }}">*/
/*     </div>*/
/*   </div>*/
/* */
/*   </fieldset>*/
/* */
/* */
/* */
/*   <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/*   */
/*   <div class="row form-group">*/
/*     <div class="controls col-md-offset-2 col-md-8">*/
/*       <button type="submit" class="btn btn-primary">提交</button>*/
/*     </div>*/
/*   </div>*/
/* */
/* </form>*/
/* */
/* {% endblock %}*/
