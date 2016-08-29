<?php

/* TopxiaAdminBundle:System:login-connect.html.twig */
class __TwigTemplate_fe989fddb67a5d83ad12cd8d41ab40d8fa3be150b50d629a6f330105bc1dcdb7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:System:login-connect.html.twig", 1);
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
        $context["script_controller"] = "system/login_bind";
        // line 5
        $context["menu"] = "admin_setting_login_bind";
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "

<form class=\"form-horizontal\" method=\"post\" id=\"login_bind-form\" novalidate>

  <fieldset>
    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label >用户登录限制</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 19
        echo $this->env->getExtension('topxia_html_twig')->radios("login_limit", array(1 => "开启", 0 => "关闭"), $this->getAttribute((isset($context["loginConnect"]) ? $context["loginConnect"] : null), "login_limit", array()));
        echo "
      <p class=\"help-block\">开启后同一帐号只能在一处登录</p>
      </div>
    </div>
  </fieldset>
<br>

  <fieldset>
    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label >第三方登录</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 32
        echo $this->env->getExtension('topxia_html_twig')->radios("enabled", array(1 => "开启", 0 => "关闭"), $this->getAttribute((isset($context["loginConnect"]) ? $context["loginConnect"] : null), "enabled", array()));
        echo "
      </div>
    </div>
  </fieldset>
<br>


<fieldset>
<div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
          <label >用户登录保护</label>
      </div>
      <div class=\"controls col-md-8 radios\">
          ";
        // line 45
        echo $this->env->getExtension('topxia_html_twig')->radios("temporary_lock_enabled", array(1 => "开启", 0 => "关闭"), $this->getAttribute((isset($context["loginConnect"]) ? $context["loginConnect"] : null), "temporary_lock_enabled", array()));
        echo " 
          <p class=\"help-block\">开启后，登录时用户连续多次输入错误密码时暂时封禁用户,此功能不影响admin手动永久封禁用户</p>
      </div>

      <div id=\"times_and_minutes\" class=\"col-md-8 col-md-offset-3\">
        <div class=\"row\">
          <div class=\"col-md-4 lock-user-text-right\">
            用户连续输入错误密码
          </div>
          <div class=\"controls col-md-2 form-group\">
            <input type=\"text\" id=\"temporary_lock_allowed_times\" name=\"temporary_lock_allowed_times\" class=\"form-control\" value=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loginConnect"]) ? $context["loginConnect"] : null), "temporary_lock_allowed_times", array()), "html", null, true);
        echo "\">
          </div>
          <div class=\"col-md-3 lock-user-text-left\">
            次，将暂时封禁用户
          </div>
        </div>
        <div class=\"row\">
          <div class=\"col-md-4 lock-user-text-right\">
            同一IP连续输入错误密码
          </div>
          <div class=\"controls col-md-2 form-group\">
            <input type=\"text\" id=\"temporary_lock_allowed_times\" name=\"ip_temporary_lock_allowed_times\" class=\"form-control\" value=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loginConnect"]) ? $context["loginConnect"] : null), "ip_temporary_lock_allowed_times", array()), "html", null, true);
        echo "\">
          </div>
          <div class=\"col-md-3 lock-user-text-left\">
            次，将暂时封禁IP
          </div>
        </div>


        <div class=\"row\">
          <div class=\"col-md-4 lock-user-text-right\">
            经过
          </div>
          <div class=\"controls col-md-2 form-group\">
            <input type=\"text\" id=\"temporary_lock_minutes\" name=\"temporary_lock_minutes\" class=\"form-control\" value=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loginConnect"]) ? $context["loginConnect"] : null), "temporary_lock_minutes", array()), "html", null, true);
        echo "\">
          </div>
          <div class=\"col-md-3 lock-user-text-left\">
            分钟后，解锁用户/IP
          </div>  
        </div>
      </div> 
  </div>
  </fieldset>
<fieldset id=\"third_login\"  ";
        // line 88
        if (((($this->getAttribute((isset($context["loginConnect"]) ? $context["loginConnect"] : null), "enabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["loginConnect"]) ? $context["loginConnect"] : null), "enabled", array()), null)) : (null)) == 0)) {
            echo " style=\"display:none\"";
        }
        echo ">
  ";
        // line 89
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clients"]) ? $context["clients"] : null));
        foreach ($context['_seq'] as $context["type"] => $context["client"]) {
            // line 90
            echo "    <fieldset data-role=\"oauth2-setting\" data-type=\"";
            echo twig_escape_filter($this->env, $context["type"], "html", null, true);
            echo "\">
      <legend>";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "admin_name", array()), "html", null, true);
            echo "</legend>
      <div class=\"form-group\">
        <div class=\"col-md-3 control-label\">
            <label >";
            // line 94
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "admin_name", array()), "html", null, true);
            echo "</label>
        </div>
        <div class=\"controls col-md-8 radios\">
          ";
            // line 97
            echo $this->env->getExtension('topxia_html_twig')->radios(($context["type"] . "_enabled"), array(1 => "开启", 0 => "关闭"), $this->getAttribute((isset($context["loginConnect"]) ? $context["loginConnect"] : null), ($context["type"] . "_enabled"), array(), "array"));
            echo "
          ";
            // line 98
            if ((($this->getAttribute($context["client"], "apply_url", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["client"], "apply_url", array()), null)) : (null))) {
                // line 99
                echo "            <div class=\"help-block\"><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "apply_url", array()), "html", null, true);
                echo "\" target=\"_blank\">申请";
                echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "admin_name", array()), "html", null, true);
                echo "</a> 
              ";
                // line 100
                if (($context["type"] == "qq")) {
                    // line 101
                    echo "              <a class=\"pll\" href=\"javascript:;\" id=\"help\" data-toggle=\"popover\" data-trigger=\"click\" data-placement=\"top\" title=\"接入帮助:\" data-html=\"true\" data-content=\"1.你的QQ开放平台账号认证度（个人信息完善）要达到75%，才能创建应用在网站设置第三方登录；<br>2.需填写的回调地址为：<br><a><span class='text-danger'>XXX</span>/login/bind/qq/callback;<span class='text-danger'>XXX</span>/settings/bind/qq/callback</a><br>，<span class='text-danger'>XXX</span>为你的ES系统网址。例如，气球鱼学院的回调地址填写为：http://www.qiqiuyu.com/login/bind/qq/callback;http://www.qiqiuyu.com/settings<br>/bind/qq/callback；网址一定要有www哦；<br>3.QQ的按钮，在开放平台你的个人信息中，找到ID和key，填写到edusoho后台，开启ID上方的QQ登录。<br>如果QQ接入审核失败，提示“登录按钮位置不对”，请检查ES后台【系统】【用户设置】【登录】，开启第三方登录以及开启QQ登录。\">接入帮助</a>
              ";
                }
                // line 103
                echo "            </div>
          ";
            }
            // line 105
            echo "        </div>
      </div>

      <div class=\"form-group\">
        <div class=\"col-md-3 control-label\">
          <label for=\"";
            // line 110
            echo twig_escape_filter($this->env, $context["type"], "html", null, true);
            echo "_key\" >";
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "key_setting_label", array()), "html", null, true);
            echo "</label>
        </div>
        <div class=\"controls col-md-8\">
          <input type=\"text\" id=\"";
            // line 113
            echo twig_escape_filter($this->env, $context["type"], "html", null, true);
            echo "_key\" name=\"";
            echo twig_escape_filter($this->env, $context["type"], "html", null, true);
            echo "_key\" class=\"form-control\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loginConnect"]) ? $context["loginConnect"] : null), ($context["type"] . "_key"), array(), "array"), "html", null, true);
            echo "\">
        </div>
      </div>

      <div class=\"form-group\">
        <div class=\"col-md-3 control-label\">
          <label for=\"";
            // line 119
            echo twig_escape_filter($this->env, $context["type"], "html", null, true);
            echo "_secret\" >";
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "secret_setting_label", array()), "html", null, true);
            echo "</label>
        </div>
        <div class=\"controls col-md-8\">
          <input type=\"text\" id=\"";
            // line 122
            echo twig_escape_filter($this->env, $context["type"], "html", null, true);
            echo "_secret\" name=\"";
            echo twig_escape_filter($this->env, $context["type"], "html", null, true);
            echo "_secret\" class=\"form-control\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loginConnect"]) ? $context["loginConnect"] : null), ($context["type"] . "_secret"), array(), "array"), "html", null, true);
            echo "\">
        </div>
      </div>
        <div class=\"form-group\">
          <div class=\"col-md-3 control-label\">
            <label for=\"\">登录时必须设置邮箱</label>
          </div>
            <div class=\"controls col-md-8 radios\">    
              ";
            // line 130
            echo $this->env->getExtension('topxia_html_twig')->radios(($context["type"] . "_set_fill_account"), array(1 => "开启", 0 => "关闭"), $this->getAttribute((isset($context["loginConnect"]) ? $context["loginConnect"] : null), ($context["type"] . "_set_fill_account"), array(), "array"));
            echo "
                <p class=\"help-block\">在";
            // line 131
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "admin_name", array()), "html", null, true);
            echo "官方审核通过您的接入申请以前，请不要开启此选项，否则可能审核将无法通过</p>
            </div>
        </div>
      ";
            // line 134
            if ((($context["type"] != "weixinmob") && ($context["type"] != "weixinweb"))) {
                // line 135
                echo "        <div class=\"form-group\">
          <div class=\"col-md-3 control-label\">
            <label for=\"\"></label>
          </div>
          <div class=\"controls col-md-8 radios\">
            <div class=\"help-block\"><a href=\"#port\">最后一步,请在底部输入登录接口验证代码></a></div>
          </div>
        </div>
      ";
            }
            // line 144
            echo "    </fieldset>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 146
        echo "
  <fieldset>
    <legend id=\"port\" >登录接口验证代码</legend>
    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"verify_code\" >验证代码</label>
      </div>
      <div class=\"controls col-md-8\">
        <textarea id=\"verify_code\" name=\"verify_code\" class=\"form-control\" rows=\"5\">";
        // line 154
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loginConnect"]) ? $context["loginConnect"] : null), "verify_code", array()), "html", null, true);
        echo "</textarea>
        <div class=\"help-block\">在申请第三方登录接口时，会要求验证您的网站域名。请把相关验证代码粘到此处，然后提交保存。</div>
      </div>
    </div>
  </fieldset>
</fieldset>
  <div class=\"form-group\">
    <div class=\"controls col-md-offset-3 col-md-8\">
      <button type=\"submit\" class=\"btn btn-primary\">提交</button>
    </div>
  </div>
  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
  
</form>

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System:login-connect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  294 => 165,  280 => 154,  270 => 146,  263 => 144,  252 => 135,  250 => 134,  244 => 131,  240 => 130,  225 => 122,  217 => 119,  204 => 113,  196 => 110,  189 => 105,  185 => 103,  181 => 101,  179 => 100,  172 => 99,  170 => 98,  166 => 97,  160 => 94,  154 => 91,  149 => 90,  145 => 89,  139 => 88,  127 => 79,  111 => 66,  97 => 55,  84 => 45,  68 => 32,  52 => 19,  39 => 9,  36 => 8,  33 => 7,  29 => 1,  27 => 5,  25 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaAdminBundle::layout.html.twig' %}*/
/* */
/* {% set script_controller = 'system/login_bind' %}*/
/* */
/* {% set menu = 'admin_setting_login_bind' %}*/
/* */
/* {% block main %}*/
/* */
/* {{ web_macro.flash_messages() }}*/
/* */
/* <form class="form-horizontal" method="post" id="login_bind-form" novalidate>*/
/* */
/*   <fieldset>*/
/*     <div class="form-group">*/
/*       <div class="col-md-3 control-label">*/
/*         <label >用户登录限制</label>*/
/*       </div>*/
/*       <div class="controls col-md-8 radios">*/
/*         {{ radios('login_limit', {1:'开启', 0:'关闭'}, loginConnect.login_limit) }}*/
/*       <p class="help-block">开启后同一帐号只能在一处登录</p>*/
/*       </div>*/
/*     </div>*/
/*   </fieldset>*/
/* <br>*/
/* */
/*   <fieldset>*/
/*     <div class="form-group">*/
/*       <div class="col-md-3 control-label">*/
/*         <label >第三方登录</label>*/
/*       </div>*/
/*       <div class="controls col-md-8 radios">*/
/*         {{ radios('enabled', {1:'开启', 0:'关闭'}, loginConnect.enabled) }}*/
/*       </div>*/
/*     </div>*/
/*   </fieldset>*/
/* <br>*/
/* */
/* */
/* <fieldset>*/
/* <div class="form-group">*/
/*       <div class="col-md-3 control-label">*/
/*           <label >用户登录保护</label>*/
/*       </div>*/
/*       <div class="controls col-md-8 radios">*/
/*           {{ radios('temporary_lock_enabled', {1:'开启', 0:'关闭'}, loginConnect.temporary_lock_enabled) }} */
/*           <p class="help-block">开启后，登录时用户连续多次输入错误密码时暂时封禁用户,此功能不影响admin手动永久封禁用户</p>*/
/*       </div>*/
/* */
/*       <div id="times_and_minutes" class="col-md-8 col-md-offset-3">*/
/*         <div class="row">*/
/*           <div class="col-md-4 lock-user-text-right">*/
/*             用户连续输入错误密码*/
/*           </div>*/
/*           <div class="controls col-md-2 form-group">*/
/*             <input type="text" id="temporary_lock_allowed_times" name="temporary_lock_allowed_times" class="form-control" value="{{loginConnect.temporary_lock_allowed_times}}">*/
/*           </div>*/
/*           <div class="col-md-3 lock-user-text-left">*/
/*             次，将暂时封禁用户*/
/*           </div>*/
/*         </div>*/
/*         <div class="row">*/
/*           <div class="col-md-4 lock-user-text-right">*/
/*             同一IP连续输入错误密码*/
/*           </div>*/
/*           <div class="controls col-md-2 form-group">*/
/*             <input type="text" id="temporary_lock_allowed_times" name="ip_temporary_lock_allowed_times" class="form-control" value="{{loginConnect.ip_temporary_lock_allowed_times}}">*/
/*           </div>*/
/*           <div class="col-md-3 lock-user-text-left">*/
/*             次，将暂时封禁IP*/
/*           </div>*/
/*         </div>*/
/* */
/* */
/*         <div class="row">*/
/*           <div class="col-md-4 lock-user-text-right">*/
/*             经过*/
/*           </div>*/
/*           <div class="controls col-md-2 form-group">*/
/*             <input type="text" id="temporary_lock_minutes" name="temporary_lock_minutes" class="form-control" value="{{loginConnect.temporary_lock_minutes}}">*/
/*           </div>*/
/*           <div class="col-md-3 lock-user-text-left">*/
/*             分钟后，解锁用户/IP*/
/*           </div>  */
/*         </div>*/
/*       </div> */
/*   </div>*/
/*   </fieldset>*/
/* <fieldset id="third_login"  {% if loginConnect.enabled|default(null) == 0 %} style="display:none"{% endif %}>*/
/*   {% for type, client in clients %}*/
/*     <fieldset data-role="oauth2-setting" data-type="{{ type }}">*/
/*       <legend>{{ client.admin_name }}</legend>*/
/*       <div class="form-group">*/
/*         <div class="col-md-3 control-label">*/
/*             <label >{{ client.admin_name }}</label>*/
/*         </div>*/
/*         <div class="controls col-md-8 radios">*/
/*           {{ radios( type ~ '_enabled', {1:'开启', 0:'关闭'}, loginConnect[type ~ '_enabled']) }}*/
/*           {% if client.apply_url|default(null) %}*/
/*             <div class="help-block"><a href="{{ client.apply_url }}" target="_blank">申请{{ client.admin_name }}</a> */
/*               {% if type == "qq" %}*/
/*               <a class="pll" href="javascript:;" id="help" data-toggle="popover" data-trigger="click" data-placement="top" title="接入帮助:" data-html="true" data-content="1.你的QQ开放平台账号认证度（个人信息完善）要达到75%，才能创建应用在网站设置第三方登录；<br>2.需填写的回调地址为：<br><a><span class='text-danger'>XXX</span>/login/bind/qq/callback;<span class='text-danger'>XXX</span>/settings/bind/qq/callback</a><br>，<span class='text-danger'>XXX</span>为你的ES系统网址。例如，气球鱼学院的回调地址填写为：http://www.qiqiuyu.com/login/bind/qq/callback;http://www.qiqiuyu.com/settings<br>/bind/qq/callback；网址一定要有www哦；<br>3.QQ的按钮，在开放平台你的个人信息中，找到ID和key，填写到edusoho后台，开启ID上方的QQ登录。<br>如果QQ接入审核失败，提示“登录按钮位置不对”，请检查ES后台【系统】【用户设置】【登录】，开启第三方登录以及开启QQ登录。">接入帮助</a>*/
/*               {% endif %}*/
/*             </div>*/
/*           {% endif %}*/
/*         </div>*/
/*       </div>*/
/* */
/*       <div class="form-group">*/
/*         <div class="col-md-3 control-label">*/
/*           <label for="{{ type }}_key" >{{ client.key_setting_label }}</label>*/
/*         </div>*/
/*         <div class="controls col-md-8">*/
/*           <input type="text" id="{{ type }}_key" name="{{ type }}_key" class="form-control" value="{{loginConnect[type ~ '_key']}}">*/
/*         </div>*/
/*       </div>*/
/* */
/*       <div class="form-group">*/
/*         <div class="col-md-3 control-label">*/
/*           <label for="{{ type }}_secret" >{{ client.secret_setting_label }}</label>*/
/*         </div>*/
/*         <div class="controls col-md-8">*/
/*           <input type="text" id="{{ type }}_secret" name="{{ type }}_secret" class="form-control" value="{{loginConnect[type ~ '_secret']}}">*/
/*         </div>*/
/*       </div>*/
/*         <div class="form-group">*/
/*           <div class="col-md-3 control-label">*/
/*             <label for="">登录时必须设置邮箱</label>*/
/*           </div>*/
/*             <div class="controls col-md-8 radios">    */
/*               {{ radios(type ~ '_set_fill_account' , {1:'开启', 0:'关闭'}, loginConnect[type ~ '_set_fill_account']) }}*/
/*                 <p class="help-block">在{{ client.admin_name }}官方审核通过您的接入申请以前，请不要开启此选项，否则可能审核将无法通过</p>*/
/*             </div>*/
/*         </div>*/
/*       {% if type != 'weixinmob' and type != 'weixinweb' %}*/
/*         <div class="form-group">*/
/*           <div class="col-md-3 control-label">*/
/*             <label for=""></label>*/
/*           </div>*/
/*           <div class="controls col-md-8 radios">*/
/*             <div class="help-block"><a href="#port">最后一步,请在底部输入登录接口验证代码></a></div>*/
/*           </div>*/
/*         </div>*/
/*       {% endif %}*/
/*     </fieldset>*/
/*   {% endfor %}*/
/* */
/*   <fieldset>*/
/*     <legend id="port" >登录接口验证代码</legend>*/
/*     <div class="form-group">*/
/*       <div class="col-md-3 control-label">*/
/*         <label for="verify_code" >验证代码</label>*/
/*       </div>*/
/*       <div class="controls col-md-8">*/
/*         <textarea id="verify_code" name="verify_code" class="form-control" rows="5">{{loginConnect.verify_code}}</textarea>*/
/*         <div class="help-block">在申请第三方登录接口时，会要求验证您的网站域名。请把相关验证代码粘到此处，然后提交保存。</div>*/
/*       </div>*/
/*     </div>*/
/*   </fieldset>*/
/* </fieldset>*/
/*   <div class="form-group">*/
/*     <div class="controls col-md-offset-3 col-md-8">*/
/*       <button type="submit" class="btn btn-primary">提交</button>*/
/*     </div>*/
/*   </div>*/
/*   <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/*   */
/* </form>*/
/* */
/* {% endblock %}*/
