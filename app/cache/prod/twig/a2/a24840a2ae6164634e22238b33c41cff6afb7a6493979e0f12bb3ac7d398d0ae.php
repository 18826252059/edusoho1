<?php

/* TopxiaWebBundle:Settings:profile.html.twig */
class __TwigTemplate_b260df9c7dffa4eebca9334f4e9240841ea001e6a02221441299e168e27f1e63 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:Settings:layout.html.twig", "TopxiaWebBundle:Settings:profile.html.twig", 1);
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
        $context["script_controller"] = "settings/profile";
        // line 6
        $context["side_nav"] = "profile";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "基础信息 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 8
    public function block_main($context, array $blocks = array())
    {
        // line 9
        echo "
\t";
        // line 10
        $this->loadTemplate("TopxiaWebBundle:Settings:profile.html.twig", "TopxiaWebBundle:Settings:profile.html.twig", 10, "1550641918")->display(array_merge($context, array("class" => "panel-col")));
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Settings:profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 10,  44 => 9,  41 => 8,  34 => 3,  30 => 1,  28 => 6,  26 => 5,  11 => 1,);
    }
}


/* TopxiaWebBundle:Settings:profile.html.twig */
class __TwigTemplate_b260df9c7dffa4eebca9334f4e9240841ea001e6a02221441299e168e27f1e63_1550641918 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("TopxiaWebBundle:Bootstrap:panel.html.twig", "TopxiaWebBundle:Settings:profile.html.twig", 10);
        $this->blocks = array(
            'heading' => array($this, 'block_heading'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:Bootstrap:panel.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 11
    public function block_heading($context, array $blocks = array())
    {
        echo "基础信息";
    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        // line 13
        echo "\t\t\t
\t\t\t";
        // line 14
        if ((isset($context["fromCourse"]) ? $context["fromCourse"] : null)) {
            // line 15
            echo "\t\t\t<div class=\"alert alert-info\">设置头衔、自我介绍并保存后，即可开始创建课程。</div>
\t\t\t";
        }
        // line 17
        echo "
\t\t\t<form id=\"user-profile-form\" class=\"form-horizontal\" method=\"post\">
\t\t\t\t";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-md-2 control-label\" >用户名</label>
\t\t\t\t\t\t<div class=\"col-md-7 controls\">
\t\t\t\t\t\t<div class=\"control-text\">
\t\t\t\t\t\t\t";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "nickname", array()), "html", null, true);
        echo " ";
        if ($this->env->getExtension('topxia_web_twig')->getSetting("user_partner.nickname_enabled")) {
            echo " <a href=\"";
            echo $this->env->getExtension('routing')->getPath("setting_nickname");
            echo "\">修改</a> ";
        }
        echo "</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t";
        // line 39
        echo "
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-md-2 control-label\" for=\"profile_truename\">姓名</label>
\t\t\t\t\t\t";
        // line 42
        if (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "truename", array()) && (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "approvalStatus", array()) == "approved") || ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "approvalStatus", array()) == "approving")))) {
            // line 43
            echo "              <div class=\"control-text\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "truename", array()), "html", null, true);
            echo "</div>
            ";
        } else {
            // line 45
            echo "            \t<div class=\"col-md-7 controls radios\">
              \t<input type=\"text\" id=\"profile_truename\" name=\"profile[truename]\" class=\"form-control\" data-widget-cid=\"widget-1\" data-explain=\"\" value=\"";
            // line 46
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "truename", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "truename", array()), "")) : ("")), "html", null, true);
            echo "\">              
              \t<div class=\"help-block\" style=\"display:none;\"></div>
            \t</div>
            ";
        }
        // line 50
        echo "\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"help-block approval\">
\t\t\t\t\t\t<label class=\"col-md-2 control-label\" ></label>
\t\t\t\t\t\t\t";
        // line 54
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "approvalStatus", array()) == "approving")) {
            // line 55
            echo "\t\t\t\t\t\t\t\t<p class=\"text-primary\" > 
\t\t\t\t\t\t\t\t\t正在实名认证中，管理员会尽快答复您。
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t";
        } elseif (($this->getAttribute($this->getAttribute(        // line 58
(isset($context["app"]) ? $context["app"] : null), "user", array()), "approvalStatus", array()) == "approved")) {
            // line 59
            echo "\t\t\t\t\t\t\t\t<p class=\"text-success\" >
\t\t\t\t\t\t\t\t\t恭喜您，已通过实名认证！
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t";
        } elseif (($this->getAttribute($this->getAttribute(        // line 62
(isset($context["app"]) ? $context["app"] : null), "user", array()), "approvalStatus", array()) == "unapprove")) {
            // line 63
            echo "\t\t\t\t\t\t\t\t<p class=\"text-warning\" > 
\t\t\t\t\t\t\t\t\t您尚未实名认证，<strong><a href=\"";
            // line 64
            echo $this->env->getExtension('routing')->getPath("setting_approval_submit");
            echo "\">点此认证</a>。
\t\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t";
        } elseif (($this->getAttribute($this->getAttribute(        // line 67
(isset($context["app"]) ? $context["app"] : null), "user", array()), "approvalStatus", array()) == "approve_fail")) {
            // line 68
            echo "\t\t\t\t\t\t\t\t <p class=\"text-danger\" > 
\t\t\t\t\t\t\t\t\t实名认证审核尚未通过，请参照通知中的信息，修改后重新<strong><a href=\"";
            // line 69
            echo $this->env->getExtension('routing')->getPath("setting_approval_submit");
            echo "\">认证。</a>
\t\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t\t </p>
\t\t\t\t\t\t\t";
        }
        // line 73
        echo "\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-md-2 control-label\">性别</label>
\t\t\t\t\t\t<div class=\"col-md-7 controls radios\">
\t\t\t\t\t\t\t<div id=\"profile_gender\">
\t\t\t\t\t\t\t\t<input type=\"radio\" id=\"profile_gender_0\" name=\"profile[gender]\" required=\"required\" value=\"male\" ";
        // line 79
        if (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "gender", array()) == "male")) {
            echo "checked=\"checked\"";
        }
        echo ">
\t\t\t\t\t\t\t\t<label for=\"profile_gender_0\" class=\"required\">男</label>
\t\t\t\t\t\t\t\t<input type=\"radio\" id=\"profile_gender_1\" name=\"profile[gender]\" required=\"required\" value=\"female\" ";
        // line 81
        if (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "gender", array()) == "female")) {
            echo "checked=\"checked\"";
        }
        echo ">
\t\t\t\t\t\t\t\t<label for=\"profile_gender_1\" class=\"required\">女</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-md-2 control-label\" for=\"profile_idcard\">身份证号</label>
\t\t\t\t\t\t";
        // line 89
        if (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "idcard", array()) && (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "approvalStatus", array()) == "approved") || ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "approvalStatus", array()) == "approving")))) {
            // line 90
            echo "              <div class=\"col-md-7 controls\">
                <div class=\"control-text\">";
            // line 91
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->blur_idcard_number($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "idcard", array())), "html", null, true);
            echo "</div>
              </div>
            ";
        } else {
            // line 94
            echo "              <div class=\"col-md-7 controls radios\">
                <input type=\"text\" id=\"profile_idcard\" name=\"profile[idcard]\" class=\"form-control\" value=\"";
            // line 95
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "idcard", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "idcard", array()), "")) : ("")), "html", null, true);
            echo "\">
                <div class=\"help-block\" style=\"display:none;\"></div>
              </div>
            ";
        }
        // line 99
        echo "\t\t\t\t\t</div>

\t\t\t\t\t";
        // line 101
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "verifiedMobile", array())) > 0)) {
            // line 102
            echo "\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"profile_mobile\" class=\"col-md-2 control-label\">手机号码</label>
\t\t\t\t\t\t\t<div class=\"col-md-7 controls\">
\t\t\t\t\t\t\t\t<div class=\"control-text\">
\t\t\t\t\t\t\t\t\t";
            // line 106
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->blur_phone_number((($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "verifiedMobile", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "verifiedMobile", array()), "")) : (""))), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t<small class=\"text-success\">(已绑定)</small>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        } else {
            // line 112
            echo "\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"profile_mobile\" class=\"col-md-2 control-label\">手机号码</label>
\t\t\t\t\t\t\t<div class=\"col-md-7 controls\">
\t\t\t\t\t\t\t\t<input type=\"text\" id=\"profile_mobile\" name=\"profile[mobile]\" class=\"form-control\" data-widget-cid=\"widget-5\" data-explain=\"\" value=\"";
            // line 115
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "mobile", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "mobile", array()), "")) : ("")), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"help-block\" style=\"display:none\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            // line 120
            if (($this->env->getExtension('topxia_web_twig')->getSetting("cloud_sms.sms_enabled", "") == "1")) {
                // line 121
                echo "\t\t\t\t\t\t\t<div class=\"help-block\">
\t\t\t\t\t\t\t\t<label class=\"col-md-2 control-label\"></label>
\t\t\t\t\t\t\t\t<p class=\"text-warning\"> 
\t\t\t\t\t\t\t\t还没绑定手机号，<strong><a href=\"";
                // line 124
                echo $this->env->getExtension('routing')->getPath("settings_bind_mobile");
                echo "\">前去绑定</a>。
\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 129
            echo "\t\t\t\t\t";
        }
        // line 130
        echo "
\t\t\t\t\t";
        // line 146
        echo "
\t\t\t\t\t<div class=\"form-group form-forIam-group form-notStudent-group\">
\t\t\t\t\t\t<label class=\"col-md-2 control-label\">公司</label>
\t\t\t\t\t\t<div class=\"col-md-7 controls\">
\t\t\t\t\t\t\t<input type=\"text\" id=\"profile_company\" name=\"profile[company]\" class=\"form-control\" value=\"";
        // line 150
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "company", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "company", array()), "")) : ("")), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t<div class=\"help-block\" style=\"display:none;\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group form-forIam-group form-notStudent-group\">
\t\t\t\t\t\t<label class=\"col-md-2 control-label\">职务</label>
\t\t\t\t\t\t<div class=\"col-md-7 controls\">
\t\t\t\t\t\t\t<input type=\"text\" id=\"profile_job\" name=\"profile[job]\" class=\"form-control\" value=\"";
        // line 158
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "job", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "job", array()), "")) : ("")), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t<div class=\"help-block\" style=\"display:none;\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-md-2 control-label\">头衔</label>
\t\t\t\t\t\t<div class=\"col-md-7 controls\">
\t\t\t\t\t\t\t<input type=\"text\" id=\"profile_title\" name=\"profile[title]\" class=\"form-control\" value=\"";
        // line 166
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "title", array()), "")) : ("")), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t<div class=\"help-block\" style=\"display:none;\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-md-2 control-label\">个人签名</label>
\t\t\t\t\t\t<div class=\"col-md-7 controls\">
\t\t\t\t\t\t\t<textarea type=\"text\" rows=\"5\" maxlength=\"130\" id=\"profile_signature\" name=\"profile[signature]\" class=\"form-control\">";
        // line 174
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "signature", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "signature", array()), "")) : ("")), "html", null, true);
        echo "</textarea>
\t\t\t\t\t\t\t<div class=\"help-block\" style=\"display:none;\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-md-2 control-label\">自我介绍</label>
\t\t\t\t\t\t<div class=\"col-md-7 controls\">
\t\t\t\t\t\t\t<textarea name=\"profile[about]\" rows=\"10\" id=\"profile_about\" class=\"form-control\" data-image-upload-url=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editor_upload", array("token" => $this->env->getExtension('topxia_web_twig')->makeUpoadToken("user"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "about", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "about", array()), "")) : ("")), "html", null, true);
        echo "</textarea>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-md-2 control-label\">个人主页</label>
\t\t\t\t\t\t<div class=\"col-md-7 controls\">
\t\t\t\t\t\t\t<input type=\"text\" id=\"profile_site\" name=\"profile[site]\" class=\"form-control\" data-widget-cid=\"widget-4\" data-explain=\"\" value=\"";
        // line 189
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "site", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "site", array()), "")) : ("")), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t<div class=\"help-block\" style=\"display:none;\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<div class=\"col-md-2 control-label\">
\t\t\t\t\t\t\t<label for=\"weibo\">微博</label> 
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-7 controls\">
\t\t\t\t\t\t\t<input type=\"text\" id=\"weibo\" name=\"profile[weibo]\" class=\"form-control\" data-widget-cid=\"widget-3\" data-explain=\"\" value=\"";
        // line 199
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "weibo", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "weibo", array()), "")) : ("")), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t<div class=\"help-block\" style=\"display:none;\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-md-2 control-label\">微信</label>
\t\t\t\t\t\t<div class=\"col-md-7 controls\">
\t\t\t\t\t\t\t<input type=\"text\" id=\"profile_weixin\" name=\"profile[weixin]\" class=\"form-control\" value=\"";
        // line 207
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "weixin", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "weixin", array()), "")) : ("")), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t<div class=\"help-block\" style=\"display:none;\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>       

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"profile_qq\" class=\"col-md-2 control-label\">QQ</label>
\t\t\t\t\t\t<div class=\"col-md-7 controls\">
\t\t\t\t\t\t\t<input type=\"text\" id=\"profile_qq\" name=\"profile[qq]\" class=\"form-control\" data-widget-cid=\"widget-2\" data-explain=\"\" value=\"";
        // line 215
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "qq", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "qq", array()), "")) : ("")), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t<div class=\"help-block\" style=\"display:none;\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>



\t\t\t\t\t";
        // line 222
        if ((isset($context["fields"]) ? $context["fields"] : null)) {
            // line 223
            echo "\t\t\t\t\t<hr>
\t\t\t\t\t";
            // line 224
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["fields"]) ? $context["fields"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 225
                echo "\t\t\t\t\t";
                if (($this->getAttribute($context["field"], "type", array()) == "text")) {
                    // line 226
                    echo "\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"";
                    // line 227
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
                    echo "\" class=\"col-md-2 control-label\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "title", array()), "html", null, true);
                    echo "</label>
\t\t\t\t\t\t<div class=\"col-md-7 controls\">
\t\t\t\t\t\t\t<textarea id=\"";
                    // line 229
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
                    echo "\" name=\"profile[";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
                    echo "]\" class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "type", array()), "html", null, true);
                    echo " form-control\">";
                    echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), $this->getAttribute($context["field"], "fieldName", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), $this->getAttribute($context["field"], "fieldName", array()), array(), "array"), "")) : ("")), "html", null, true);
                    echo "</textarea>
\t\t\t\t\t\t\t<div class=\"help-block\" style=\"display:none;\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
                } elseif (($this->getAttribute(                // line 233
$context["field"], "type", array()) == "int")) {
                    // line 234
                    echo "\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"";
                    // line 235
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
                    echo "\" class=\"col-md-2 control-label\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "title", array()), "html", null, true);
                    echo "</label>
\t\t\t\t\t\t<div class=\"col-md-7 controls\">
\t\t\t\t\t\t\t<input type=\"text\" id=\"";
                    // line 237
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
                    echo "\" placeholder=\"最大值为9位整数\" name=\"profile[";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
                    echo "]\" class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "type", array()), "html", null, true);
                    echo " form-control\"  value=\"";
                    echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), $this->getAttribute($context["field"], "fieldName", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), $this->getAttribute($context["field"], "fieldName", array()), array(), "array"), "")) : ("")), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t<div class=\"help-block\" style=\"display:none;\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
                } elseif (($this->getAttribute(                // line 241
$context["field"], "type", array()) == "float")) {
                    // line 242
                    echo "\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"";
                    // line 243
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
                    echo "\" class=\"col-md-2 control-label\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "title", array()), "html", null, true);
                    echo "</label>
\t\t\t\t\t\t<div class=\"col-md-7 controls\">
\t\t\t\t\t\t\t<input type=\"text\" id=\"";
                    // line 245
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
                    echo "\" placeholder=\"保留到2位小数\" name=\"profile[";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
                    echo "]\" class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "type", array()), "html", null, true);
                    echo " form-control\"  value=\"";
                    echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), $this->getAttribute($context["field"], "fieldName", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), $this->getAttribute($context["field"], "fieldName", array()), array(), "array"), "")) : ("")), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t<div class=\"help-block\" style=\"display:none;\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
                } elseif (($this->getAttribute(                // line 249
$context["field"], "type", array()) == "date")) {
                    // line 250
                    echo "\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"";
                    // line 251
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
                    echo "\" class=\"col-md-2 control-label\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "title", array()), "html", null, true);
                    echo "</label>
\t\t\t\t\t\t<div class=\"col-md-7 controls\">
\t\t\t\t\t\t\t<input type=\"text\" id=\"";
                    // line 253
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
                    echo "\" name=\"profile[";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
                    echo "]\" class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "type", array()), "html", null, true);
                    echo " form-control\" value=\"";
                    if ($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), $this->getAttribute($context["field"], "fieldName", array()), array(), "array")) {
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), $this->getAttribute($context["field"], "fieldName", array()), array(), "array"), "html", null, true);
                    }
                    echo "\">
\t\t\t\t\t\t\t<div class=\"help-block\" style=\"display:none;\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
                } elseif (($this->getAttribute(                // line 257
$context["field"], "type", array()) == "varchar")) {
                    // line 258
                    echo "\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"";
                    // line 259
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
                    echo "\" class=\"col-md-2 control-label\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "title", array()), "html", null, true);
                    echo "</label>
\t\t\t\t\t\t<div class=\"col-md-7 controls\">
\t\t\t\t\t\t\t<input type=\"text\" id=\"";
                    // line 261
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
                    echo "\" name=\"profile[";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
                    echo "]\" class=\"form-control\" value=\"";
                    echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), $this->getAttribute($context["field"], "fieldName", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), $this->getAttribute($context["field"], "fieldName", array()), array(), "array"), "")) : ("")), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t<div class=\"help-block\" style=\"display:none;\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 266
                echo "\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 267
            echo "\t\t\t\t\t";
        }
        // line 268
        echo "
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-7 col-md-offset-2\">
\t\t\t\t\t\t\t<button id=\"profile-save-btn\" data-submiting-text=\"正在保存\" type=\"submit\" class=\"btn btn-primary\">保存</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 275
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
\t\t\t</form>

\t\t";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Settings:profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  567 => 275,  558 => 268,  555 => 267,  549 => 266,  537 => 261,  530 => 259,  527 => 258,  525 => 257,  510 => 253,  503 => 251,  500 => 250,  498 => 249,  485 => 245,  478 => 243,  475 => 242,  473 => 241,  460 => 237,  453 => 235,  450 => 234,  448 => 233,  435 => 229,  428 => 227,  425 => 226,  422 => 225,  418 => 224,  415 => 223,  413 => 222,  403 => 215,  392 => 207,  381 => 199,  368 => 189,  356 => 182,  345 => 174,  334 => 166,  323 => 158,  312 => 150,  306 => 146,  303 => 130,  300 => 129,  292 => 124,  287 => 121,  285 => 120,  277 => 115,  272 => 112,  263 => 106,  257 => 102,  255 => 101,  251 => 99,  244 => 95,  241 => 94,  235 => 91,  232 => 90,  230 => 89,  217 => 81,  210 => 79,  202 => 73,  195 => 69,  192 => 68,  190 => 67,  184 => 64,  181 => 63,  179 => 62,  174 => 59,  172 => 58,  167 => 55,  165 => 54,  159 => 50,  152 => 46,  149 => 45,  143 => 43,  141 => 42,  136 => 39,  123 => 25,  114 => 19,  110 => 17,  106 => 15,  104 => 14,  101 => 13,  98 => 12,  92 => 11,  47 => 10,  44 => 9,  41 => 8,  34 => 3,  30 => 1,  28 => 6,  26 => 5,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle:Settings:layout.html.twig' %}*/
/* */
/* {% block title %}基础信息 - {{ parent() }}{% endblock %}*/
/* */
/* {% set script_controller = 'settings/profile' %}*/
/* {% set side_nav = 'profile' %}*/
/* */
/* {% block main %}*/
/* */
/* 	{% embed "TopxiaWebBundle:Bootstrap:panel.html.twig" with {class:'panel-col'} %}*/
/* 		{% block heading %}基础信息{% endblock %}*/
/* 		{% block body %}*/
/* 			*/
/* 			{% if fromCourse %}*/
/* 			<div class="alert alert-info">设置头衔、自我介绍并保存后，即可开始创建课程。</div>*/
/* 			{% endif %}*/
/* */
/* 			<form id="user-profile-form" class="form-horizontal" method="post">*/
/* 				{{ web_macro.flash_messages() }}*/
/* */
/* 					<div class="form-group">*/
/* 					<label class="col-md-2 control-label" >用户名</label>*/
/* 						<div class="col-md-7 controls">*/
/* 						<div class="control-text">*/
/* 							{{app.user.nickname}} {% if setting('user_partner.nickname_enabled') %} <a href="{{ path('setting_nickname') }}">修改</a> {% endif %}</div>*/
/* 						</div>*/
/* 					</div>*/
/* */
/* 					{# <div class="form-group form-iam-group">*/
/* 						<label class="col-md-2 control-label">我是</label>*/
/* 						<div class="col-md-7 controls radios">*/
/* 							<div id="profile_iam">*/
/* 								<input type="radio" id="profile_iam_0" name="profile[iam]" required="required" value="student" {% if profile.iam == 'student' %}checked="checked"{% endif %}>*/
/* 								<label for="profile_iam_0" class="required">在校生</label>*/
/* 								<input type="radio" id="profile_iam_1" name="profile[iam]" required="required" value="notStudent" {% if profile.iam == 'notStudent' %}checked="checked"{% endif %}>*/
/* 								<label for="profile_iam_1" class="required">非在校生</label></div>*/
/* 							</div>*/
/* 					</div> #}*/
/* */
/* 					<div class="form-group">*/
/* 						<label class="col-md-2 control-label" for="profile_truename">姓名</label>*/
/* 						{% if profile.truename and (app.user.approvalStatus == 'approved' or app.user.approvalStatus == 'approving') %}*/
/*               <div class="control-text">{{ profile.truename }}</div>*/
/*             {% else %}*/
/*             	<div class="col-md-7 controls radios">*/
/*               	<input type="text" id="profile_truename" name="profile[truename]" class="form-control" data-widget-cid="widget-1" data-explain="" value="{{ profile.truename|default('') }}">              */
/*               	<div class="help-block" style="display:none;"></div>*/
/*             	</div>*/
/*             {% endif %}*/
/* 					</div>*/
/* */
/* 					<div class="help-block approval">*/
/* 						<label class="col-md-2 control-label" ></label>*/
/* 							{% if app.user.approvalStatus == 'approving' %}*/
/* 								<p class="text-primary" > */
/* 									正在实名认证中，管理员会尽快答复您。*/
/* 								</p>*/
/* 							{% elseif  app.user.approvalStatus == 'approved' %}*/
/* 								<p class="text-success" >*/
/* 									恭喜您，已通过实名认证！*/
/* 								</p>*/
/* 							{% elseif  app.user.approvalStatus == 'unapprove' %}*/
/* 								<p class="text-warning" > */
/* 									您尚未实名认证，<strong><a href="{{ path('setting_approval_submit') }}">点此认证</a>。*/
/* 									</strong>*/
/* 								</p>*/
/* 							{% elseif app.user.approvalStatus == 'approve_fail' %}*/
/* 								 <p class="text-danger" > */
/* 									实名认证审核尚未通过，请参照通知中的信息，修改后重新<strong><a href="{{ path('setting_approval_submit') }}">认证。</a>*/
/* 									</strong>*/
/* 								 </p>*/
/* 							{% endif %}*/
/* 					</div>*/
/* */
/* 					<div class="form-group">*/
/* 						<label class="col-md-2 control-label">性别</label>*/
/* 						<div class="col-md-7 controls radios">*/
/* 							<div id="profile_gender">*/
/* 								<input type="radio" id="profile_gender_0" name="profile[gender]" required="required" value="male" {% if profile.gender == 'male' %}checked="checked"{% endif %}>*/
/* 								<label for="profile_gender_0" class="required">男</label>*/
/* 								<input type="radio" id="profile_gender_1" name="profile[gender]" required="required" value="female" {% if profile.gender == 'female' %}checked="checked"{% endif %}>*/
/* 								<label for="profile_gender_1" class="required">女</label>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* */
/* 					<div class="form-group">*/
/* 						<label class="col-md-2 control-label" for="profile_idcard">身份证号</label>*/
/* 						{% if profile.idcard and (app.user.approvalStatus == 'approved' or app.user.approvalStatus == 'approving') %}*/
/*               <div class="col-md-7 controls">*/
/*                 <div class="control-text">{{ blur_idcard_number(profile.idcard) }}</div>*/
/*               </div>*/
/*             {% else %}*/
/*               <div class="col-md-7 controls radios">*/
/*                 <input type="text" id="profile_idcard" name="profile[idcard]" class="form-control" value="{{ profile.idcard|default('') }}">*/
/*                 <div class="help-block" style="display:none;"></div>*/
/*               </div>*/
/*             {% endif %}*/
/* 					</div>*/
/* */
/* 					{% if (user.verifiedMobile|length) > 0 %}*/
/* 						<div class="form-group">*/
/* 							<label for="profile_mobile" class="col-md-2 control-label">手机号码</label>*/
/* 							<div class="col-md-7 controls">*/
/* 								<div class="control-text">*/
/* 									{{ blur_phone_number(user.verifiedMobile|default('')) }}*/
/* 									<small class="text-success">(已绑定)</small>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 					{% else %}*/
/* 						<div class="form-group">*/
/* 							<label for="profile_mobile" class="col-md-2 control-label">手机号码</label>*/
/* 							<div class="col-md-7 controls">*/
/* 								<input type="text" id="profile_mobile" name="profile[mobile]" class="form-control" data-widget-cid="widget-5" data-explain="" value="{{ profile.mobile|default('') }}">*/
/* 								*/
/* 								<div class="help-block" style="display:none"></div>*/
/* 							</div>*/
/* 						</div>*/
/* 						{% if setting('cloud_sms.sms_enabled', '') == '1' %}*/
/* 							<div class="help-block">*/
/* 								<label class="col-md-2 control-label"></label>*/
/* 								<p class="text-warning"> */
/* 								还没绑定手机号，<strong><a href="{{path('settings_bind_mobile')}}">前去绑定</a>。*/
/* 								</strong>*/
/* 								</p>*/
/* 							</div>*/
/* 						{% endif %}*/
/* 					{% endif %}*/
/* */
/* 					{# <div class="form-group form-forIam-group form-student-group">*/
/* 						<label class="col-md-2 control-label">学校</label>*/
/* 						<div class="col-md-7 controls">*/
/* 							<input type="text" id="profile_school" name="profile[school]" class="form-control" value="{{ profile.school|default('') }}">*/
/* 							<div class="help-block" style="display:none;"></div>*/
/* 						</div>*/
/* 					</div>*/
/* */
/* 					<div class="form-group form-forIam-group form-student-group">*/
/* 						<label class="col-md-2 control-label">班级</label>*/
/* 						<div class="col-md-7 controls">*/
/* 							<input type="text" id="profile_class" name="profile[class]" class="form-control" value="{{ profile.class|default('') }}">*/
/* 							<div class="help-block" style="display:none;"></div>*/
/* 						</div>*/
/* 					</div> #}*/
/* */
/* 					<div class="form-group form-forIam-group form-notStudent-group">*/
/* 						<label class="col-md-2 control-label">公司</label>*/
/* 						<div class="col-md-7 controls">*/
/* 							<input type="text" id="profile_company" name="profile[company]" class="form-control" value="{{ profile.company|default('') }}">*/
/* 							<div class="help-block" style="display:none;"></div>*/
/* 						</div>*/
/* 					</div>*/
/* */
/* 					<div class="form-group form-forIam-group form-notStudent-group">*/
/* 						<label class="col-md-2 control-label">职务</label>*/
/* 						<div class="col-md-7 controls">*/
/* 							<input type="text" id="profile_job" name="profile[job]" class="form-control" value="{{ profile.job|default('') }}">*/
/* 							<div class="help-block" style="display:none;"></div>*/
/* 						</div>*/
/* 					</div>*/
/* */
/* 					<div class="form-group">*/
/* 						<label class="col-md-2 control-label">头衔</label>*/
/* 						<div class="col-md-7 controls">*/
/* 							<input type="text" id="profile_title" name="profile[title]" class="form-control" value="{{ profile.title|default('') }}">*/
/* 							<div class="help-block" style="display:none;"></div>*/
/* 						</div>*/
/* 					</div> */
/* */
/* 					<div class="form-group">*/
/* 						<label class="col-md-2 control-label">个人签名</label>*/
/* 						<div class="col-md-7 controls">*/
/* 							<textarea type="text" rows="5" maxlength="130" id="profile_signature" name="profile[signature]" class="form-control">{{ profile.signature|default('') }}</textarea>*/
/* 							<div class="help-block" style="display:none;"></div>*/
/* 						</div>*/
/* 					</div>*/
/* */
/* 					<div class="form-group">*/
/* 						<label class="col-md-2 control-label">自我介绍</label>*/
/* 						<div class="col-md-7 controls">*/
/* 							<textarea name="profile[about]" rows="10" id="profile_about" class="form-control" data-image-upload-url="{{ path('editor_upload', {token:upload_token('user')}) }}">{{ profile.about|default('') }}</textarea>*/
/* 						</div>*/
/* 					</div>*/
/* */
/* 					<div class="form-group">*/
/* 						<label class="col-md-2 control-label">个人主页</label>*/
/* 						<div class="col-md-7 controls">*/
/* 							<input type="text" id="profile_site" name="profile[site]" class="form-control" data-widget-cid="widget-4" data-explain="" value="{{ profile.site|default('') }}">*/
/* 							<div class="help-block" style="display:none;"></div>*/
/* 						</div>*/
/* 					</div>*/
/* */
/* 					<div class="form-group">*/
/* 						<div class="col-md-2 control-label">*/
/* 							<label for="weibo">微博</label> */
/* 						</div>*/
/* 						<div class="col-md-7 controls">*/
/* 							<input type="text" id="weibo" name="profile[weibo]" class="form-control" data-widget-cid="widget-3" data-explain="" value="{{ profile.weibo|default('') }}">*/
/* 							<div class="help-block" style="display:none;"></div>*/
/* 						</div>*/
/* 					</div>*/
/* */
/* 					<div class="form-group">*/
/* 						<label class="col-md-2 control-label">微信</label>*/
/* 						<div class="col-md-7 controls">*/
/* 							<input type="text" id="profile_weixin" name="profile[weixin]" class="form-control" value="{{ profile.weixin|default('') }}">*/
/* 							<div class="help-block" style="display:none;"></div>*/
/* 						</div>*/
/* 					</div>       */
/* */
/* 					<div class="form-group">*/
/* 						<label for="profile_qq" class="col-md-2 control-label">QQ</label>*/
/* 						<div class="col-md-7 controls">*/
/* 							<input type="text" id="profile_qq" name="profile[qq]" class="form-control" data-widget-cid="widget-2" data-explain="" value="{{ profile.qq|default('') }}">*/
/* 							<div class="help-block" style="display:none;"></div>*/
/* 						</div>*/
/* 					</div>*/
/* */
/* */
/* */
/* 					{% if fields %}*/
/* 					<hr>*/
/* 					{% for field in fields %}*/
/* 					{% if field.type=="text" %}*/
/* 					<div class="form-group">*/
/* 						<label for="{{field.fieldName}}" class="col-md-2 control-label">{{field.title}}</label>*/
/* 						<div class="col-md-7 controls">*/
/* 							<textarea id="{{field.fieldName}}" name="profile[{{field.fieldName}}]" class="{{field.type}} form-control">{{ profile[field.fieldName]|default('') }}</textarea>*/
/* 							<div class="help-block" style="display:none;"></div>*/
/* 						</div>*/
/* 					</div>*/
/* 					{% elseif field.type=="int" %}*/
/* 					<div class="form-group">*/
/* 						<label for="{{field.fieldName}}" class="col-md-2 control-label">{{field.title}}</label>*/
/* 						<div class="col-md-7 controls">*/
/* 							<input type="text" id="{{field.fieldName}}" placeholder="最大值为9位整数" name="profile[{{field.fieldName}}]" class="{{field.type}} form-control"  value="{{ profile[field.fieldName]|default('') }}">*/
/* 							<div class="help-block" style="display:none;"></div>*/
/* 						</div>*/
/* 					</div>*/
/* 					{% elseif field.type=="float" %}*/
/* 					<div class="form-group">*/
/* 						<label for="{{field.fieldName}}" class="col-md-2 control-label">{{field.title}}</label>*/
/* 						<div class="col-md-7 controls">*/
/* 							<input type="text" id="{{field.fieldName}}" placeholder="保留到2位小数" name="profile[{{field.fieldName}}]" class="{{field.type}} form-control"  value="{{ profile[field.fieldName]|default('') }}">*/
/* 							<div class="help-block" style="display:none;"></div>*/
/* 						</div>*/
/* 					</div>*/
/* 					{% elseif field.type=="date" %}*/
/* 					<div class="form-group">*/
/* 						<label for="{{field.fieldName}}" class="col-md-2 control-label">{{field.title}}</label>*/
/* 						<div class="col-md-7 controls">*/
/* 							<input type="text" id="{{field.fieldName}}" name="profile[{{field.fieldName}}]" class="{{field.type}} form-control" value="{% if profile[field.fieldName] %}{{profile[field.fieldName]}}{% endif %}">*/
/* 							<div class="help-block" style="display:none;"></div>*/
/* 						</div>*/
/* 					</div>*/
/* 					{% elseif field.type=="varchar" %}*/
/* 					<div class="form-group">*/
/* 						<label for="{{field.fieldName}}" class="col-md-2 control-label">{{field.title}}</label>*/
/* 						<div class="col-md-7 controls">*/
/* 							<input type="text" id="{{field.fieldName}}" name="profile[{{field.fieldName}}]" class="form-control" value="{{ profile[field.fieldName]|default('') }}">*/
/* 							<div class="help-block" style="display:none;"></div>*/
/* 						</div>*/
/* 					</div>*/
/* 					{% endif %}*/
/* 					{% endfor %}*/
/* 					{% endif %}*/
/* */
/* 					<div class="row">*/
/* 						<div class="col-md-7 col-md-offset-2">*/
/* 							<button id="profile-save-btn" data-submiting-text="正在保存" type="submit" class="btn btn-primary">保存</button>*/
/* 						</div>*/
/* 					</div>*/
/* */
/* 					<input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/* 			</form>*/
/* */
/* 		{% endblock %}*/
/* 	{% endembed %}*/
/* {% endblock %}*/
