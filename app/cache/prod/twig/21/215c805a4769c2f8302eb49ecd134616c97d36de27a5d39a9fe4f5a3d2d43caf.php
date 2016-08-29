<?php

/* TopxiaAdminBundle:System:auth.html.twig */
class __TwigTemplate_ef14674c6d097dcf77b201d561891a7753cc7e2801de2253e5da6f57b8cc0524 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:System:auth.html.twig", 1);
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
        $context["menu"] = "admin_user_auth";
        // line 5
        $context["script_controller"] = "setting/auth";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "

<form  id=\"auth-form\" class=\"form-horizontal\" method=\"post\" novalidate>

  <fieldset>
    <legend>注册设置</legend>
    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label >用户注册模式</label>
      </div>
      <div class=\"controls col-md-8\">
        <div class=\"btn-group\">
          <button type=\"button\" class=\"btn btn-default ";
        // line 20
        if (($this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "register_mode", array()) == "email")) {
            echo "btn-primary";
        }
        echo " model\" data-modle=\"email\">邮箱注册</button>
          <button type=\"button\" class=\"btn btn-default ";
        // line 21
        if (($this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "register_mode", array()) == "mobile")) {
            echo "btn-primary";
        }
        echo " model\" data-modle=\"mobile\">手机注册</button>
          <button type=\"button\" class=\"btn btn-default ";
        // line 22
        if (($this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "register_mode", array()) == "email_or_mobile")) {
            echo "btn-primary";
        }
        echo " model\" data-modle=\"email_or_mobile\">邮箱或手机注册</button>
          <button type=\"button\" class=\"btn btn-default ";
        // line 23
        if (($this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "register_mode", array()) == "closed")) {
            echo "btn-primary";
        }
        echo " model\" data-modle=\"closed\">关闭</button>
        </div>
        <input type=\"hidden\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "register_mode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "register_mode", array()), "none")) : ("none")), "html", null, true);
        echo "\" name=\"register_mode\" />
        <div class=\"help-block\" >开启云短信后，才可使用“手机注册”或“邮箱或手机注册”</div>
      </div>
    </div>

    
    <div class=\"email-content ";
        // line 31
        if ((($this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "register_mode", array()) == "mobile") || ($this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "register_mode", array()) == "closed"))) {
            echo "hidden";
        }
        echo "\">
      <div class=\"form-group\">
        <div class=\"col-md-3 control-label\">
          <label >邮箱验证登录</label>
        </div>
        <div class=\"controls col-md-8 radios\">
          ";
        // line 37
        echo $this->env->getExtension('topxia_html_twig')->radios("email_enabled", array("opened" => "开启", "closed" => "关闭"), $this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "email_enabled", array()));
        echo "
        </div>
      </div>
      <div class=\"help-block\" style=\"margin-left:250px;margin-top:-15px;\">开启后,邮箱未验证的用户将无法登录,请先保证邮件服务器已设置</div>
      <input type=\"hidden\" name=\"setting_time\"  value=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("auth.setting_time"), "html", null, true);
        echo "\" >

      <div class=\"form-group\">
        <div class=\"col-md-3 control-label\">
          <label for=\"email_activation_title\" >新用户激活邮件标题</label>
        </div>
        <div class=\"controls col-md-8\">
          <input type=\"text\" id=\"email_activation_title\" name=\"email_activation_title\" class=\"form-control\" value=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "email_activation_title", array()), "html", null, true);
        echo "\">
        </div>
      </div>

      <div class=\"form-group\">
        <div class=\"col-md-3 control-label\">
          <label for=\"email_activation_body\">新用户激活邮件内容</label>
        </div>
        <div class=\"controls col-md-8\">
          <textarea id=\"email_activation_body\" name=\"email_activation_body\" class=\"form-control\" rows=\"5\">";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "email_activation_body", array()), "html", null, true);
        echo "</textarea>
          <div class=\"help-block\">
            ";
        // line 67
        echo "
            <div>变量说明：</div>
            <ul>
              <li>{{nickname}} 为接收方用户昵称</li>
              <li>{{sitename}} 为网站名称</li>
              <li>{{siteurl}} 为网站的地址</li>
              <li>{{verifyurl}} 为邮箱验证地址</li>
            </ul>
            ";
        echo "
          </div>
        </div>
      </div>
    </div>


    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label >注册防护机制</label>
      </div>

      <div class=\"controls col-md-8 radios\">
        <label>
          <input type=\"radio\" name=\"register_protective\" id=\"none\" value=\"none\" ";
        // line 81
        if (((($this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "register_protective", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "register_protective", array()), null)) : (null)) == "none")) {
            echo "checked=\"checked\"";
        }
        echo "> 无
        </label>
        <label>
          <input type=\"radio\" name=\"register_protective\" id=\"low\" value=\"low\" ";
        // line 84
        if (((($this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "register_protective", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "register_protective", array()), null)) : (null)) == "low")) {
            echo "checked=\"checked\"";
        }
        echo "> 低
        </label>
        <label>
          <input type=\"radio\" name=\"register_protective\" id=\"middle\" value=\"middle\" ";
        // line 87
        if (((($this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "register_protective", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "register_protective", array()), null)) : (null)) == "middle")) {
            echo "checked=\"checked\"";
        }
        echo "> 中
        </label>
        <label>
          <input type=\"radio\" name=\"register_protective\" id=\"high\" value=\"high\"";
        // line 90
        if (((($this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "register_protective", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "register_protective", array()), null)) : (null)) == "high")) {
            echo "checked=\"checked\"";
        }
        echo "> 高
        </label>
      </div>

      <div class=\"controls col-md-8 mtl low register-help  col-md-offset-3\" ";
        // line 94
        if (((($this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "register_protective", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "register_protective", array()), null)) : (null)) == "low")) {
        } else {
            echo "style=\"display:none;\"";
        }
        echo ">
        <div class=\"well\">
          方案说明：
          <p class=\"mll mtm\">1：注册时需填写验证码。</p>
        </div>
      </div>

      <div class=\"controls col-md-8 mtl middle register-help  col-md-offset-3\" ";
        // line 101
        if (((($this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "register_protective", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "register_protective", array()), null)) : (null)) == "middle")) {
        } else {
            echo "style=\"display:none;\"";
        }
        echo ">
        <div class=\"well\">
          方案说明：
          <p class=\"mll mtm\">1：注册时需填写验证码。</p>
          <p class=\"mll mtm\">2：同一IP24小时內只能注册30次。</p>
        </div>
      </div>

      <div class=\"controls col-md-8 mtl high register-help  col-md-offset-3\" ";
        // line 109
        if (((($this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "register_protective", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "register_protective", array()), null)) : (null)) == "high")) {
        } else {
            echo "style=\"display:none;\"";
        }
        echo ">
        <div class=\"well\">
          方案说明：
          <p class=\"mll mtm\">1：注册时需填写验证码。</p>
          <p class=\"mll mtm\">2：同一IP24小时內只能注册10次。</p>
          <p class=\"mll mtm\">3：同一IP1小时內只能注册1个账号。</p>
        </div>
      </div>
    </div>

  </fieldset>

  <fieldset>
    <legend>欢迎信息设置</legend>

    <div class=\"form-group\" style=\"display:none;\">
      <div class=\"col-md-3 control-label\">
        <label>发送欢迎信息</label>
      </div>
      <div class=\"controls col-md-8 checkboxs\">
        ";
        // line 129
        echo $this->env->getExtension('topxia_html_twig')->checkboxs("welcome_methods", array("message" => "站内私信", "email" => "电子邮件"), $this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "welcome_methods", array()));
        echo "
        <div class=\"help-block\">新用户邮件激活开启时，电子邮件的发送欢迎信息方式无效。</div>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"welcome_title\">发送欢迎信息</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 139
        echo $this->env->getExtension('topxia_html_twig')->radios("welcome_enabled", array("opened" => "开启", "closed" => "关闭"), $this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "welcome_enabled", array()));
        echo "
        <div class=\"help-block\">欢迎信以站内私信的方式，发送给新用户。</div>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"welcome_sender\">欢迎信息发送方</label>
      </div>
      <div class=\"controls col-md-8\">
        <input type=\"text\" id=\"welcome_sender\" name=\"welcome_sender\" class=\"form-control\" value=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "welcome_sender", array()), "html", null, true);
        echo "\">
        <div class=\"help-block\">通常为这个网站的管理员，请输入用户用户名。</div>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"welcome_title\">欢迎信息标题</label>
      </div>
      <div class=\"controls col-md-8\">
        <input type=\"text\" id=\"welcome_title\" name=\"welcome_title\" class=\"form-control\" value=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "welcome_title", array()), "html", null, true);
        echo "\">
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"welcome_body\">欢迎信息内容</label>
      </div>
      <div class=\"controls col-md-8\">
        <textarea id=\"welcome_body\" name=\"welcome_body\" class=\"form-control\" rows=\"5\">";
        // line 168
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "welcome_body", array()), "html", null, true);
        echo "</textarea>
        <div class=\"help-block\">
          ";
        // line 178
        echo "
          <div>注意： 私信长度不能超过1000个字符</div>
          <div>变量说明：</div>
          <ul>
            <li>{{nickname}} 为接收方用户用户名</li>
            <li>{{sitename}} 为网站名称</li>
            <li>{{siteurl}} 为网站的地址</li>
          </ul>
          ";
        echo "
        </div>
      </div>
    </div>
  </fieldset>

  <fieldset>
    <legend>服务条款设置</legend>
    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"user_terms\">是否开启服务条款</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 191
        echo $this->env->getExtension('topxia_html_twig')->radios("user_terms", array("opened" => "开启", "closed" => "关闭"), $this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "user_terms", array()));
        echo "
        <div class=\"help-block\">开启后用户注册时必须同意条款才能注册</div>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"user_terms_body\">条款内容</label>
      </div>
      <div class=\"controls col-md-8\">
        <textarea class=\"form-control\" id=\"user_terms_body\" rows=\"16\" name=\"user_terms_body\" data-image-upload-url=\"";
        // line 201
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editor_upload", array("token" => $this->env->getExtension('topxia_web_twig')->makeUpoadToken("default"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["auth"]) ? $context["auth"] : null), "user_terms_body", array()), "html", null, true);
        echo "</textarea>
      </div>
    </div>

  </fieldset>


  ";
        // line 208
        if (_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("magic.username_setting"), false)) {
            // line 209
            echo "    <fieldset>
      <legend>名称设置</legend>
      <div class=\"row form-group\">
          <div class=\"col-md-2 col-md-offset-2 control-label\">
              <label for=\"user_name\">用户名称</label>
          </div>
          <div class=\"controls col-md-4\">
            <input  type=\"text\" id=\"user_name\" name=\"user_name\" class=\"form-control\" ";
            // line 216
            if ($this->getAttribute((isset($context["defaultSetting"]) ? $context["defaultSetting"] : null), "user_name", array())) {
                echo "value=\"";
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["defaultSetting"]) ? $context["defaultSetting"] : null), "user_name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["defaultSetting"]) ? $context["defaultSetting"] : null), "user_name", array()), "学员")) : ("学员")), "html", null, true);
                echo "\" ";
            } else {
                echo " value=\"学员\" ";
            }
            echo ">
          </div>
      </div>

      <div class=\"alert alert-info deduction text-center\">
        <p><strong> 注：修改网校字段后，站内相关字段名称都会相应修改为已保存的名称
        </strong></p>
      </div>
    </fieldset> 
  ";
        }
        // line 226
        echo "  
  <div class=\"form-group\">
    <div class=\"col-md-3 control-label\"></div>
    <div class=\"controls col-md-8\">
      <button type=\"submit\" class=\"btn btn-primary\">提交</button>  
    </div>
  </div>
  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 233
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
  <input type=\"hidden\" name='_cloud_sms'  value= \"";
        // line 234
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("cloud_sms.sms_enabled"), "html", null, true);
        echo "\">
</form>

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System:auth.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  389 => 234,  385 => 233,  376 => 226,  357 => 216,  348 => 209,  346 => 208,  334 => 201,  321 => 191,  297 => 178,  292 => 168,  280 => 159,  267 => 149,  254 => 139,  241 => 129,  215 => 109,  201 => 101,  188 => 94,  179 => 90,  171 => 87,  163 => 84,  155 => 81,  130 => 67,  125 => 57,  113 => 48,  103 => 41,  96 => 37,  85 => 31,  76 => 25,  69 => 23,  63 => 22,  57 => 21,  51 => 20,  36 => 8,  33 => 7,  29 => 1,  27 => 5,  25 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaAdminBundle::layout.html.twig' %}*/
/* */
/* {% set menu = 'admin_user_auth' %}*/
/* */
/* {% set script_controller = 'setting/auth' %}*/
/* */
/* {% block main %}*/
/* {{ web_macro.flash_messages() }}*/
/* */
/* <form  id="auth-form" class="form-horizontal" method="post" novalidate>*/
/* */
/*   <fieldset>*/
/*     <legend>注册设置</legend>*/
/*     <div class="form-group">*/
/*       <div class="col-md-3 control-label">*/
/*         <label >用户注册模式</label>*/
/*       </div>*/
/*       <div class="controls col-md-8">*/
/*         <div class="btn-group">*/
/*           <button type="button" class="btn btn-default {% if auth.register_mode =="email" %}btn-primary{% endif %} model" data-modle="email">邮箱注册</button>*/
/*           <button type="button" class="btn btn-default {% if auth.register_mode =="mobile" %}btn-primary{% endif %} model" data-modle="mobile">手机注册</button>*/
/*           <button type="button" class="btn btn-default {% if auth.register_mode =="email_or_mobile" %}btn-primary{% endif %} model" data-modle="email_or_mobile">邮箱或手机注册</button>*/
/*           <button type="button" class="btn btn-default {% if auth.register_mode =="closed" %}btn-primary{% endif %} model" data-modle="closed">关闭</button>*/
/*         </div>*/
/*         <input type="hidden" value="{{ auth.register_mode|default('none') }}" name="register_mode" />*/
/*         <div class="help-block" >开启云短信后，才可使用“手机注册”或“邮箱或手机注册”</div>*/
/*       </div>*/
/*     </div>*/
/* */
/*     */
/*     <div class="email-content {% if auth.register_mode == 'mobile' or auth.register_mode == 'closed' %}hidden{% endif %}">*/
/*       <div class="form-group">*/
/*         <div class="col-md-3 control-label">*/
/*           <label >邮箱验证登录</label>*/
/*         </div>*/
/*         <div class="controls col-md-8 radios">*/
/*           {{ radios('email_enabled', {'opened':'开启', 'closed':'关闭'}, auth.email_enabled) }}*/
/*         </div>*/
/*       </div>*/
/*       <div class="help-block" style="margin-left:250px;margin-top:-15px;">开启后,邮箱未验证的用户将无法登录,请先保证邮件服务器已设置</div>*/
/*       <input type="hidden" name="setting_time"  value="{{setting('auth.setting_time') }}" >*/
/* */
/*       <div class="form-group">*/
/*         <div class="col-md-3 control-label">*/
/*           <label for="email_activation_title" >新用户激活邮件标题</label>*/
/*         </div>*/
/*         <div class="controls col-md-8">*/
/*           <input type="text" id="email_activation_title" name="email_activation_title" class="form-control" value="{{auth.email_activation_title}}">*/
/*         </div>*/
/*       </div>*/
/* */
/*       <div class="form-group">*/
/*         <div class="col-md-3 control-label">*/
/*           <label for="email_activation_body">新用户激活邮件内容</label>*/
/*         </div>*/
/*         <div class="controls col-md-8">*/
/*           <textarea id="email_activation_body" name="email_activation_body" class="form-control" rows="5">{{auth.email_activation_body}}</textarea>*/
/*           <div class="help-block">*/
/*             {% verbatim %}*/
/*             <div>变量说明：</div>*/
/*             <ul>*/
/*               <li>{{nickname}} 为接收方用户昵称</li>*/
/*               <li>{{sitename}} 为网站名称</li>*/
/*               <li>{{siteurl}} 为网站的地址</li>*/
/*               <li>{{verifyurl}} 为邮箱验证地址</li>*/
/*             </ul>*/
/*             {% endverbatim %}*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/* */
/* */
/*     <div class="form-group">*/
/*       <div class="col-md-3 control-label">*/
/*         <label >注册防护机制</label>*/
/*       </div>*/
/* */
/*       <div class="controls col-md-8 radios">*/
/*         <label>*/
/*           <input type="radio" name="register_protective" id="none" value="none" {% if auth.register_protective|default(none) == "none" %}checked="checked"{% endif %}> 无*/
/*         </label>*/
/*         <label>*/
/*           <input type="radio" name="register_protective" id="low" value="low" {% if  auth.register_protective|default(null) == "low" %}checked="checked"{% endif %}> 低*/
/*         </label>*/
/*         <label>*/
/*           <input type="radio" name="register_protective" id="middle" value="middle" {% if  auth.register_protective|default(null) == "middle" %}checked="checked"{% endif %}> 中*/
/*         </label>*/
/*         <label>*/
/*           <input type="radio" name="register_protective" id="high" value="high"{% if auth.register_protective|default(null) == "high" %}checked="checked"{% endif %}> 高*/
/*         </label>*/
/*       </div>*/
/* */
/*       <div class="controls col-md-8 mtl low register-help  col-md-offset-3" {% if  auth.register_protective|default(null) == "low" %}{% else %}style="display:none;"{% endif %}>*/
/*         <div class="well">*/
/*           方案说明：*/
/*           <p class="mll mtm">1：注册时需填写验证码。</p>*/
/*         </div>*/
/*       </div>*/
/* */
/*       <div class="controls col-md-8 mtl middle register-help  col-md-offset-3" {% if  auth.register_protective|default(null) == "middle" %}{% else %}style="display:none;"{% endif %}>*/
/*         <div class="well">*/
/*           方案说明：*/
/*           <p class="mll mtm">1：注册时需填写验证码。</p>*/
/*           <p class="mll mtm">2：同一IP24小时內只能注册30次。</p>*/
/*         </div>*/
/*       </div>*/
/* */
/*       <div class="controls col-md-8 mtl high register-help  col-md-offset-3" {% if  auth.register_protective|default(null) == "high" %}{% else %}style="display:none;"{% endif %}>*/
/*         <div class="well">*/
/*           方案说明：*/
/*           <p class="mll mtm">1：注册时需填写验证码。</p>*/
/*           <p class="mll mtm">2：同一IP24小时內只能注册10次。</p>*/
/*           <p class="mll mtm">3：同一IP1小时內只能注册1个账号。</p>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/* */
/*   </fieldset>*/
/* */
/*   <fieldset>*/
/*     <legend>欢迎信息设置</legend>*/
/* */
/*     <div class="form-group" style="display:none;">*/
/*       <div class="col-md-3 control-label">*/
/*         <label>发送欢迎信息</label>*/
/*       </div>*/
/*       <div class="controls col-md-8 checkboxs">*/
/*         {{ checkboxs('welcome_methods', {'message':'站内私信', 'email':'电子邮件'}, auth.welcome_methods) }}*/
/*         <div class="help-block">新用户邮件激活开启时，电子邮件的发送欢迎信息方式无效。</div>*/
/*       </div>*/
/*     </div>*/
/* */
/*     <div class="form-group">*/
/*       <div class="col-md-3 control-label">*/
/*         <label for="welcome_title">发送欢迎信息</label>*/
/*       </div>*/
/*       <div class="controls col-md-8 radios">*/
/*         {{ radios('welcome_enabled', {'opened':'开启', 'closed':'关闭'}, auth.welcome_enabled) }}*/
/*         <div class="help-block">欢迎信以站内私信的方式，发送给新用户。</div>*/
/*       </div>*/
/*     </div>*/
/* */
/*     <div class="form-group">*/
/*       <div class="col-md-3 control-label">*/
/*         <label for="welcome_sender">欢迎信息发送方</label>*/
/*       </div>*/
/*       <div class="controls col-md-8">*/
/*         <input type="text" id="welcome_sender" name="welcome_sender" class="form-control" value="{{auth.welcome_sender}}">*/
/*         <div class="help-block">通常为这个网站的管理员，请输入用户用户名。</div>*/
/*       </div>*/
/*     </div>*/
/* */
/*     <div class="form-group">*/
/*       <div class="col-md-3 control-label">*/
/*         <label for="welcome_title">欢迎信息标题</label>*/
/*       </div>*/
/*       <div class="controls col-md-8">*/
/*         <input type="text" id="welcome_title" name="welcome_title" class="form-control" value="{{auth.welcome_title}}">*/
/*       </div>*/
/*     </div>*/
/* */
/*     <div class="form-group">*/
/*       <div class="col-md-3 control-label">*/
/*         <label for="welcome_body">欢迎信息内容</label>*/
/*       </div>*/
/*       <div class="controls col-md-8">*/
/*         <textarea id="welcome_body" name="welcome_body" class="form-control" rows="5">{{auth.welcome_body}}</textarea>*/
/*         <div class="help-block">*/
/*           {% verbatim %}*/
/*           <div>注意： 私信长度不能超过1000个字符</div>*/
/*           <div>变量说明：</div>*/
/*           <ul>*/
/*             <li>{{nickname}} 为接收方用户用户名</li>*/
/*             <li>{{sitename}} 为网站名称</li>*/
/*             <li>{{siteurl}} 为网站的地址</li>*/
/*           </ul>*/
/*           {% endverbatim %}*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </fieldset>*/
/* */
/*   <fieldset>*/
/*     <legend>服务条款设置</legend>*/
/*     <div class="form-group">*/
/*       <div class="col-md-3 control-label">*/
/*         <label for="user_terms">是否开启服务条款</label>*/
/*       </div>*/
/*       <div class="controls col-md-8 radios">*/
/*         {{ radios('user_terms', {'opened':'开启', 'closed':'关闭'}, auth.user_terms) }}*/
/*         <div class="help-block">开启后用户注册时必须同意条款才能注册</div>*/
/*       </div>*/
/*     </div>*/
/* */
/*     <div class="form-group">*/
/*       <div class="col-md-3 control-label">*/
/*         <label for="user_terms_body">条款内容</label>*/
/*       </div>*/
/*       <div class="controls col-md-8">*/
/*         <textarea class="form-control" id="user_terms_body" rows="16" name="user_terms_body" data-image-upload-url="{{ path('editor_upload', {token:upload_token('default')}) }}">{{ auth.user_terms_body }}</textarea>*/
/*       </div>*/
/*     </div>*/
/* */
/*   </fieldset>*/
/* */
/* */
/*   {% if setting('magic.username_setting')|default(false) %}*/
/*     <fieldset>*/
/*       <legend>名称设置</legend>*/
/*       <div class="row form-group">*/
/*           <div class="col-md-2 col-md-offset-2 control-label">*/
/*               <label for="user_name">用户名称</label>*/
/*           </div>*/
/*           <div class="controls col-md-4">*/
/*             <input  type="text" id="user_name" name="user_name" class="form-control" {% if defaultSetting.user_name %}value="{{defaultSetting.user_name|default('学员')}}" {% else %} value="学员" {% endif %}>*/
/*           </div>*/
/*       </div>*/
/* */
/*       <div class="alert alert-info deduction text-center">*/
/*         <p><strong> 注：修改网校字段后，站内相关字段名称都会相应修改为已保存的名称*/
/*         </strong></p>*/
/*       </div>*/
/*     </fieldset> */
/*   {% endif %}*/
/*   */
/*   <div class="form-group">*/
/*     <div class="col-md-3 control-label"></div>*/
/*     <div class="controls col-md-8">*/
/*       <button type="submit" class="btn btn-primary">提交</button>  */
/*     </div>*/
/*   </div>*/
/*   <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/*   <input type="hidden" name='_cloud_sms'  value= "{{setting('cloud_sms.sms_enabled')}}">*/
/* </form>*/
/* */
/* {% endblock %}*/
