<?php

/* TopxiaWebBundle:Register:index.html.twig */
class __TwigTemplate_a68fb4a5109a85a46123cd97dc15c9f87428181618297c2b27ec38de9747f909 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "TopxiaWebBundle:Register:index.html.twig", 1);
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
        $context["script_controller"] = "auth/register";
        // line 6
        $context["parameter"] = $this->env->getExtension('topxia_web_twig')->getParametersFromUrl($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uri", array()));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "注册 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "
<div class=\"es-section login-section\">
  <div class=\"logon-tab clearfix\">
    <a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("login", array("goto" => (isset($context["_target_path"]) ? $context["_target_path"] : $this->getContext($context, "_target_path")))), "html", null, true);
        echo "\">登录帐号</a>
    <a class=\"active\">注册帐号</a>
  </div>
  <div class=\"login-main\">
    ";
        // line 15
        if ((isset($context["isRegisterEnabled"]) ? $context["isRegisterEnabled"] : $this->getContext($context, "isRegisterEnabled"))) {
            // line 16
            echo "      <form id=\"register-form\" method=\"post\" action=\"\">
        ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : $this->getContext($context, "web_macro")), "flash_messages", array(), "method"), "html", null, true);
            echo "

        ";
            // line 19
            if (((isset($context["inviteCode"]) ? $context["inviteCode"] : $this->getContext($context, "inviteCode")) != null)) {
                // line 20
                echo "          <div class=\"alert alert-info alert-sm\">您正在通过<span class=\"color-gray mhs\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["inviteUser"]) ? $context["inviteUser"] : $this->getContext($context, "inviteUser")), "nickname", array(), "array"), "html", null, true);
                echo "</span>的邀请注册。</div>
        ";
            }
            // line 22
            echo "      
        ";
            // line 23
            if (($this->env->getExtension('topxia_web_twig')->getSetting("auth.register_mode") == "email")) {
                // line 24
                echo "          <div class=\"form-group mbl\">
            <label class=\"control-label required\" for=\"register_email\">邮箱地址</label>
            <div class=\"controls\">
              <input type=\"email\" id=\"register_email\" name=\"email\" required=\"required\" class=\"form-control input-lg\" data-url=\"";
                // line 27
                echo $this->env->getExtension('routing')->getPath("register_email_check");
                echo "\" placeholder=\"填写你常用的邮箱作为登录帐号\">
              <p class=\"help-block\"></p>
            </div>
          </div>
        ";
            } elseif (($this->env->getExtension('topxia_web_twig')->getSetting("auth.register_mode") == "mobile")) {
                // line 32
                echo "          <div class=\"form-group mbl\">
            <label class=\"control-label required\" for=\"register_mobile\">手机号码</label>
            <div class=\"controls\">
              <input type=\"number\" id=\"register_mobile\" name=\"verifiedMobile\" required=\"required\" class=\"form-control input-lg\" data-url=\"";
                // line 35
                echo $this->env->getExtension('routing')->getPath("register_mobile_check");
                echo "\" placeholder=\"填写你常用的手机号码作为登录帐号\">
              <p class=\"help-block\"></p>
            </div>
          </div>
        ";
            } else {
                // line 40
                echo "          <div class=\"form-group mbl\">
            <label class=\"control-label required\" for=\"register_emailOrmobile\">手机/邮箱</label>
            <div class=\"controls\">
              <input type=\"text\" id=\"register_emailOrMobile\" name=\"emailOrMobile\" required=\"required\" class=\"form-control input-lg\" data-url=\"";
                // line 43
                echo $this->env->getExtension('routing')->getPath("register_email_or_mobile_check");
                echo "\" placeholder=\"填写你常用的邮箱或手机号码作为登录帐号\">
              <p class=\"help-block\"></p>
            </div>
          </div>
        ";
            }
            // line 48
            echo "
        <div class=\"form-group mbl\">
          <label class=\"control-label required\" for=\"register_nickname\">用户名</label>
          <div class=\"controls\">
            <input type=\"text\" id=\"register_nickname\" name=\"nickname\" required=\"required\" class=\"form-control input-lg\" data-url=\"";
            // line 52
            echo $this->env->getExtension('routing')->getPath("register_nickname_check");
            echo "\" placeholder=\"该怎么称呼你？ 中、英文均可，最长18个英文或9个汉字\">
            <p class=\"help-block\"></p>
          </div>
        </div>
        <div class=\"form-group mbl\">
          <label class=\"control-label required\" for=\"register_password\">密码</label>
          <div class=\"controls\">
            <input type=\"password\" id=\"register_password\" name=\"password\" required=\"required\" class=\"form-control input-lg\" placeholder=\"5-20位英文、数字、符号，区分大小写\">
            <p class=\"help-block\"></p>
          </div>
        </div>
        ";
            // line 63
            if (((_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("auth.captcha_enabled"), 0) == 1) && ($this->env->getExtension('topxia_web_twig')->getSetting("auth.register_mode") != "mobile"))) {
                // line 64
                echo "          <div class=\"form-group mbl js-captcha\">
            <label class=\"control-label required\" for=\"captcha_code\">验证码</label>
            <div class=\"controls row\">
              <div class = \"col-xs-7\">
                <input type=\"text\" class=\"form-control input-lg\" id=\"captcha_code\" name=\"captcha_code\" maxlength=\"5\" placeholder=\"验证码\" required=\"required\"  data-url=\"";
                // line 68
                echo $this->env->getExtension('routing')->getPath("register_captcha_check");
                echo "\" >
              </div>
              <div class=\"col-xs-5\">
                <img src=\"";
                // line 71
                echo $this->env->getExtension('routing')->getPath("register_captcha_num");
                echo "\" data-url=\"";
                echo $this->env->getExtension('routing')->getPath("register_captcha_num");
                echo "\" id=\"getcode_num\" title=\"看不清，点击换一张\" style=\"cursor:pointer;height:40px;width:100%\">
              </div>
              <div class=\"col-md-12 help-block\"></div>  
            </div>
          </div>    
        ";
            }
            // line 77
            echo "        ";
            if ((($this->env->getExtension('topxia_web_twig')->getSetting("auth.register_mode") == "email_or_mobile") || ($this->env->getExtension('topxia_web_twig')->getSetting("auth.register_mode") == "mobile"))) {
                // line 78
                echo "          <div class=\"form-group mbl ";
                if (($this->env->getExtension('topxia_web_twig')->getSetting("auth.register_mode") != "mobile")) {
                    echo "hidden";
                }
                echo " email_mobile_msg\">
            <label class=\"control-label required\" for=\"sms_code\">短信验证码</label>
            <div class=\"controls row\" >
              <div class = \"col-xs-7\" >
                <input type=\"number\" class=\"form-control input-lg\" id=\"sms_code\" name=\"sms_code\" placeholder=\"填写你的短信验证码\" required=\"required\" data-url=\"";
                // line 82
                echo $this->env->getExtension('routing')->getPath("edu_cloud_sms_check", array("type" => "sms_registration"));
                echo "\">
                <p class=\"help-block\"> </p> 
              </div>
              <div class=\"col-xs-5\">
                <a href=\"#modal\" data-toggle=\"modal\" class=\"btn btn-default btn-lg js-sms-send disabled\" data-url=\"";
                // line 86
                echo $this->env->getExtension('routing')->getPath("register_captcha_modal");
                echo "\" data-sms-url=\"";
                echo $this->env->getExtension('routing')->getPath("edu_cloud_sms_send");
                echo "\">
                  <span id=\"js-time-left\"></span>
                  <span id=\"js-fetch-btn-text\">获取短信验证码</span>
               </a> 
              </div>
            </div>
          </div>
        ";
            }
            // line 94
            echo "        ";
            if (((_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("invite.invite_code_setting"), 0) == 1) && ((isset($context["inviteCode"]) ? $context["inviteCode"] : $this->getContext($context, "inviteCode")) == null))) {
                // line 95
                echo "        <div class=\"form-group mbl\">
          <label class=\"control-label required\" for=\"invite_code\">邀请码<span class=\"text-success\">（选填）</span></label>
          <div class=\"controls\">
            <input type=\"text\" name=\"invite_code\" required=\"required\" class=\"form-control input-lg invitecode\" data-url=\"";
                // line 98
                echo $this->env->getExtension('routing')->getPath("invitecode_check");
                echo "\" placeholder=\"如果您有邀请码，请填写您的邀请码\">
          </div>
        </div>
        ";
            }
            // line 102
            echo "
        ";
            // line 103
            if (($this->env->getExtension('topxia_web_twig')->getSetting("auth.user_terms") == "opened")) {
                // line 104
                echo "          <div class=\"form-group mbl\">
            <div class=\"controls\">
              <label>
                <input type=\"checkbox\" id=\"user_terms\" checked=\"checked\"> 我已阅读并同意<a href=\"";
                // line 107
                echo $this->env->getExtension('routing')->getPath("user_terms");
                echo "\" target=\"_blank\">《服务协议》</a>
              </label>
            </div>
          </div>
        ";
            }
            // line 112
            echo "        
        <div class=\"form-group mbl\">
          <div class=\"controls\">
            <button type=\"submit\" id=\"register-btn\" data-submiting-text=\"正在提交\" class=\"btn btn-primary btn-lg btn-block\">注册</button>
          </div>
        </div>

        <input type=\"hidden\" name=\"captcha_enabled\" value=\"";
            // line 119
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("auth.captcha_enabled"), "html", null, true);
            echo "\" />
        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 120
            echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
            echo "\">
        ";
            // line 121
            if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "inviteCode", 1 => ""), "method")) {
                echo " 
        <input type=\"hidden\" name=\"invite_code\" value=\"";
                // line 122
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "inviteCode", 1 => ""), "method"), "html", null, true);
                echo "\">
        ";
            }
            // line 124
            echo "
      </form>

      ";
            // line 127
            if ($this->env->getExtension('topxia_web_twig')->getSetting("login_bind.enabled")) {
                // line 128
                echo "        <div class=\"social-login\">
          <span>
            ";
                // line 130
                echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Login:oauth2LoginsBlock", array("targetPath" => (isset($context["_target_path"]) ? $context["_target_path"] : $this->getContext($context, "_target_path")))));
                echo "
          </span>
          <div class=\"line\"></div>
        </div>
      ";
            }
            // line 134
            echo "     
    ";
        } else {
            // line 136
            echo "      <div class=\"empty\">系统暂时关闭注册，请联系管理员</div>
    ";
        }
        // line 138
        echo "  </div>
</div>
  ";
        // line 140
        if (($this->env->getExtension('topxia_web_twig')->getSetting("login_bind.weixinmob_enabled") == "1")) {
            // line 141
            echo "    ";
            $this->env->getExtension('topxia_web_twig')->loadScript("auth/isWeiXin");
            // line 142
            echo "  ";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Register:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  291 => 142,  288 => 141,  286 => 140,  282 => 138,  278 => 136,  274 => 134,  266 => 130,  262 => 128,  260 => 127,  255 => 124,  250 => 122,  246 => 121,  242 => 120,  238 => 119,  229 => 112,  221 => 107,  216 => 104,  214 => 103,  211 => 102,  204 => 98,  199 => 95,  196 => 94,  183 => 86,  176 => 82,  166 => 78,  163 => 77,  152 => 71,  146 => 68,  140 => 64,  138 => 63,  124 => 52,  118 => 48,  110 => 43,  105 => 40,  97 => 35,  92 => 32,  84 => 27,  79 => 24,  77 => 23,  74 => 22,  68 => 20,  66 => 19,  61 => 17,  58 => 16,  56 => 15,  49 => 11,  44 => 8,  41 => 7,  34 => 3,  30 => 1,  28 => 6,  26 => 4,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::layout.html.twig' %}*/
/* */
/* {% block title %}注册 - {{ parent() }}{% endblock %}*/
/* {% set script_controller = 'auth/register' %}*/
/* */
/* {% set parameter = get_parameters_from_url(app.request.uri) %}*/
/* {% block content %}*/
/* */
/* <div class="es-section login-section">*/
/*   <div class="logon-tab clearfix">*/
/*     <a href="{{ path('login', {goto:_target_path}) }}">登录帐号</a>*/
/*     <a class="active">注册帐号</a>*/
/*   </div>*/
/*   <div class="login-main">*/
/*     {% if isRegisterEnabled %}*/
/*       <form id="register-form" method="post" action="">*/
/*         {{ web_macro.flash_messages() }}*/
/* */
/*         {% if inviteCode != null  %}*/
/*           <div class="alert alert-info alert-sm">您正在通过<span class="color-gray mhs">{{ inviteUser['nickname'] }}</span>的邀请注册。</div>*/
/*         {% endif %}*/
/*       */
/*         {% if setting('auth.register_mode') == 'email' %}*/
/*           <div class="form-group mbl">*/
/*             <label class="control-label required" for="register_email">邮箱地址</label>*/
/*             <div class="controls">*/
/*               <input type="email" id="register_email" name="email" required="required" class="form-control input-lg" data-url="{{path('register_email_check')}}" placeholder="填写你常用的邮箱作为登录帐号">*/
/*               <p class="help-block"></p>*/
/*             </div>*/
/*           </div>*/
/*         {% elseif setting('auth.register_mode') == 'mobile' %}*/
/*           <div class="form-group mbl">*/
/*             <label class="control-label required" for="register_mobile">手机号码</label>*/
/*             <div class="controls">*/
/*               <input type="number" id="register_mobile" name="verifiedMobile" required="required" class="form-control input-lg" data-url="{{path('register_mobile_check')}}" placeholder="填写你常用的手机号码作为登录帐号">*/
/*               <p class="help-block"></p>*/
/*             </div>*/
/*           </div>*/
/*         {% else %}*/
/*           <div class="form-group mbl">*/
/*             <label class="control-label required" for="register_emailOrmobile">手机/邮箱</label>*/
/*             <div class="controls">*/
/*               <input type="text" id="register_emailOrMobile" name="emailOrMobile" required="required" class="form-control input-lg" data-url="{{path('register_email_or_mobile_check')}}" placeholder="填写你常用的邮箱或手机号码作为登录帐号">*/
/*               <p class="help-block"></p>*/
/*             </div>*/
/*           </div>*/
/*         {% endif %}*/
/* */
/*         <div class="form-group mbl">*/
/*           <label class="control-label required" for="register_nickname">用户名</label>*/
/*           <div class="controls">*/
/*             <input type="text" id="register_nickname" name="nickname" required="required" class="form-control input-lg" data-url="{{path('register_nickname_check')}}" placeholder="该怎么称呼你？ 中、英文均可，最长18个英文或9个汉字">*/
/*             <p class="help-block"></p>*/
/*           </div>*/
/*         </div>*/
/*         <div class="form-group mbl">*/
/*           <label class="control-label required" for="register_password">密码</label>*/
/*           <div class="controls">*/
/*             <input type="password" id="register_password" name="password" required="required" class="form-control input-lg" placeholder="5-20位英文、数字、符号，区分大小写">*/
/*             <p class="help-block"></p>*/
/*           </div>*/
/*         </div>*/
/*         {% if (setting('auth.captcha_enabled')|default(0)) == 1 and setting('auth.register_mode') != 'mobile' %}*/
/*           <div class="form-group mbl js-captcha">*/
/*             <label class="control-label required" for="captcha_code">验证码</label>*/
/*             <div class="controls row">*/
/*               <div class = "col-xs-7">*/
/*                 <input type="text" class="form-control input-lg" id="captcha_code" name="captcha_code" maxlength="5" placeholder="验证码" required="required"  data-url="{{path('register_captcha_check')}}" >*/
/*               </div>*/
/*               <div class="col-xs-5">*/
/*                 <img src="{{ path('register_captcha_num') }}" data-url="{{ path('register_captcha_num') }}" id="getcode_num" title="看不清，点击换一张" style="cursor:pointer;height:40px;width:100%">*/
/*               </div>*/
/*               <div class="col-md-12 help-block"></div>  */
/*             </div>*/
/*           </div>    */
/*         {% endif %}*/
/*         {% if setting('auth.register_mode') == 'email_or_mobile' or setting('auth.register_mode') == 'mobile' %}*/
/*           <div class="form-group mbl {% if setting('auth.register_mode') != 'mobile' %}hidden{% endif %} email_mobile_msg">*/
/*             <label class="control-label required" for="sms_code">短信验证码</label>*/
/*             <div class="controls row" >*/
/*               <div class = "col-xs-7" >*/
/*                 <input type="number" class="form-control input-lg" id="sms_code" name="sms_code" placeholder="填写你的短信验证码" required="required" data-url="{{path('edu_cloud_sms_check',{type:'sms_registration'})}}">*/
/*                 <p class="help-block"> </p> */
/*               </div>*/
/*               <div class="col-xs-5">*/
/*                 <a href="#modal" data-toggle="modal" class="btn btn-default btn-lg js-sms-send disabled" data-url="{{ path('register_captcha_modal') }}" data-sms-url="{{ path('edu_cloud_sms_send') }}">*/
/*                   <span id="js-time-left"></span>*/
/*                   <span id="js-fetch-btn-text">获取短信验证码</span>*/
/*                </a> */
/*               </div>*/
/*             </div>*/
/*           </div>*/
/*         {% endif %}*/
/*         {% if (setting('invite.invite_code_setting')|default(0) == 1) and  inviteCode == null  %}*/
/*         <div class="form-group mbl">*/
/*           <label class="control-label required" for="invite_code">邀请码<span class="text-success">（选填）</span></label>*/
/*           <div class="controls">*/
/*             <input type="text" name="invite_code" required="required" class="form-control input-lg invitecode" data-url="{{path('invitecode_check')}}" placeholder="如果您有邀请码，请填写您的邀请码">*/
/*           </div>*/
/*         </div>*/
/*         {% endif %}*/
/* */
/*         {% if setting('auth.user_terms') == 'opened' %}*/
/*           <div class="form-group mbl">*/
/*             <div class="controls">*/
/*               <label>*/
/*                 <input type="checkbox" id="user_terms" checked="checked"> 我已阅读并同意<a href="{{ path('user_terms') }}" target="_blank">《服务协议》</a>*/
/*               </label>*/
/*             </div>*/
/*           </div>*/
/*         {% endif %}*/
/*         */
/*         <div class="form-group mbl">*/
/*           <div class="controls">*/
/*             <button type="submit" id="register-btn" data-submiting-text="正在提交" class="btn btn-primary btn-lg btn-block">注册</button>*/
/*           </div>*/
/*         </div>*/
/* */
/*         <input type="hidden" name="captcha_enabled" value="{{ setting('auth.captcha_enabled') }}" />*/
/*         <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/*         {% if app.request.get('inviteCode', '') %} */
/*         <input type="hidden" name="invite_code" value="{{ app.request.get('inviteCode', '')}}">*/
/*         {% endif %}*/
/* */
/*       </form>*/
/* */
/*       {% if setting('login_bind.enabled') %}*/
/*         <div class="social-login">*/
/*           <span>*/
/*             {{ render(controller('TopxiaWebBundle:Login:oauth2LoginsBlock', {targetPath:_target_path})) }}*/
/*           </span>*/
/*           <div class="line"></div>*/
/*         </div>*/
/*       {% endif %}     */
/*     {% else %}*/
/*       <div class="empty">系统暂时关闭注册，请联系管理员</div>*/
/*     {% endif %}*/
/*   </div>*/
/* </div>*/
/*   {% if setting('login_bind.weixinmob_enabled') == '1' %}*/
/*     {% do load_script('auth/isWeiXin') %}*/
/*   {% endif %}*/
/* {% endblock %}*/
