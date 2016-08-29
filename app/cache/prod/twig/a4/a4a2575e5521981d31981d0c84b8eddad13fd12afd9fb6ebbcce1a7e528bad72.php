<?php

/* TopxiaWebBundle:Settings:find-pay-password-by-sms.html.twig */
class __TwigTemplate_7a361ec77b021016fdac2adabaa83648e85241b4b296dd789e866eb5724eec0c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:Settings:layout.html.twig", "TopxiaWebBundle:Settings:find-pay-password-by-sms.html.twig", 1);
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
        // line 3
        $context["script_controller"] = "settings/find_pay_password_by_sms";
        // line 4
        $context["side_nav"] = "security";
        // line 5
        $context["questionOptions"] = $this->env->getExtension('topxia_web_twig')->getDict("secureQuestion");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "支付密码 - 安全设置 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        echo " 
 ";
        // line 8
        $this->loadTemplate("TopxiaWebBundle:Settings:find-pay-password-by-sms.html.twig", "TopxiaWebBundle:Settings:find-pay-password-by-sms.html.twig", 8, "1174344441")->display(array_merge($context, array("class" => "panel-col")));
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Settings:find-pay-password-by-sms.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 8,  43 => 7,  36 => 2,  32 => 1,  30 => 5,  28 => 4,  26 => 3,  11 => 1,);
    }
}


/* TopxiaWebBundle:Settings:find-pay-password-by-sms.html.twig */
class __TwigTemplate_7a361ec77b021016fdac2adabaa83648e85241b4b296dd789e866eb5724eec0c_1174344441 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("TopxiaWebBundle:Bootstrap:panel.html.twig", "TopxiaWebBundle:Settings:find-pay-password-by-sms.html.twig", 8);
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

    // line 9
    public function block_heading($context, array $blocks = array())
    {
        // line 10
        echo "      安全设置
    ";
    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        // line 13
        echo "
      <ul class=\"breadcrumb\">
        <li><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("settings_security");
        echo "\">安全设置</a></li>
        <li class=\"active\">找回支付密码</li>
      </ul>

      ";
        // line 19
        $context["type"] = "sms";
        // line 20
        echo "      ";
        $this->loadTemplate("TopxiaWebBundle:Settings:questions-or-sms-tabs.html.twig", "TopxiaWebBundle:Settings:find-pay-password-by-sms.html.twig", 20)->display($context);
        // line 21
        echo "      ";
        // line 22
        echo "

    ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo " 

    <form id=\"settings-find-pay-password-form\" class=\"form-horizontal\" method=\"post\" >

        <div class=\"form-group row\" style=\"display: none;\"> 
\t        <div  class=\"col-md-2 control-label\"><label for=\"mobile\">手机号码</label></div> 
\t        <div class=\" col-md-8 controls\"> 
\t        \t<input type=\"text\" id=\"mobile\" name=\"mobile\" class=\"form-control\" data-role=\"mobile\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["verifiedMobile"]) ? $context["verifiedMobile"] : null), "html", null, true);
        echo "\"> 
\t        </div>           
        </div> 

        <div class=\"form-group row\"> 
          <div  class=\"col-md-2 control-label\"> <label>已绑定手机号</label></div>
          <div class=\"col-md-5 controls\"> 
            <div class=\"col-md-5 control-text\">
              ";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->blur_phone_number((isset($context["verifiedMobile"]) ? $context["verifiedMobile"] : null)), "html", null, true);
        echo "
            </div>
            <a class=\"btn-link col-md-5 control-text\" href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("settings_bind_mobile");
        echo "\" target=\"_blank\">修改手机号？</a>
          </div>
        </div>

        <div class=\"form-group row\"> 
          <div  class=\"col-md-2 control-label\"><label for=\"sms_code\">短信验证码</label></div> 
          <div class=\"col-md-3  controls\"> 
            <input type=\"text\" id=\"sms-code\" name=\"sms_code\" class=\"form-control\" value=\"\" data-url=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("edu_cloud_sms_check", array("type" => "sms_forget_pay_password"));
        echo "\">
          </div>
          <div class=\"col-md-3\">
            <a href=\"#modal\" data-toggle=\"modal\" class=\"btn btn-default btn-sm js-sms-send ";
        // line 51
        if ( !(isset($context["verifiedMobile"]) ? $context["verifiedMobile"] : null)) {
            echo "disabled";
        }
        echo "\" data-url=\"";
        echo $this->env->getExtension('routing')->getPath("register_captcha_modal");
        echo "\" data-sms-url=\"";
        echo $this->env->getExtension('routing')->getPath("edu_cloud_sms_send");
        echo "\">
              <span id=\"js-time-left\"></span>
              <span id=\"js-fetch-btn-text\">获取短信验证码</span>
            </a>
          </div>
        </div>

    \t  <div class=\"form-group row\"> 
        \t<div class=\"col-md-4 col-md-offset-2  controls\"> 
            \t<button id=\"submit-btn\" data-submiting-text=\"正在提交\" type=\"submit\" class=\"btn btn-primary\">提交</button> 
        \t</div> 
        </div> 

        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
    </form>   

";
        // line 70
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Settings:find-pay-password-by-sms.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 70,  190 => 64,  168 => 51,  162 => 48,  152 => 41,  147 => 39,  136 => 31,  126 => 24,  122 => 22,  120 => 21,  117 => 20,  115 => 19,  108 => 15,  104 => 13,  101 => 12,  96 => 10,  93 => 9,  48 => 8,  43 => 7,  36 => 2,  32 => 1,  30 => 5,  28 => 4,  26 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle:Settings:layout.html.twig' %}*/
/* {% block title %}支付密码 - 安全设置 - {{ parent() }}{% endblock %}*/
/* {% set script_controller = 'settings/find_pay_password_by_sms' %} */
/* {% set side_nav = 'security' %} */
/* {% set questionOptions = dict('secureQuestion') %} */
/*   */
/* {% block main %} */
/*  {% embed "TopxiaWebBundle:Bootstrap:panel.html.twig" with {class:'panel-col'} %}*/
/*     {% block heading %}*/
/*       安全设置*/
/*     {% endblock %}*/
/*     {% block body %}*/
/* */
/*       <ul class="breadcrumb">*/
/*         <li><a href="{{ path('settings_security') }}">安全设置</a></li>*/
/*         <li class="active">找回支付密码</li>*/
/*       </ul>*/
/* */
/*       {% set type = 'sms' %}*/
/*       {% include 'TopxiaWebBundle:Settings:questions-or-sms-tabs.html.twig' %}*/
/*       {# <br> #}*/
/* */
/* */
/*     {{ web_macro.flash_messages() }} */
/* */
/*     <form id="settings-find-pay-password-form" class="form-horizontal" method="post" >*/
/* */
/*         <div class="form-group row" style="display: none;"> */
/* 	        <div  class="col-md-2 control-label"><label for="mobile">手机号码</label></div> */
/* 	        <div class=" col-md-8 controls"> */
/* 	        	<input type="text" id="mobile" name="mobile" class="form-control" data-role="mobile" value="{{verifiedMobile}}"> */
/* 	        </div>           */
/*         </div> */
/* */
/*         <div class="form-group row"> */
/*           <div  class="col-md-2 control-label"> <label>已绑定手机号</label></div>*/
/*           <div class="col-md-5 controls"> */
/*             <div class="col-md-5 control-text">*/
/*               {{blur_phone_number(verifiedMobile)}}*/
/*             </div>*/
/*             <a class="btn-link col-md-5 control-text" href="{{path('settings_bind_mobile')}}" target="_blank">修改手机号？</a>*/
/*           </div>*/
/*         </div>*/
/* */
/*         <div class="form-group row"> */
/*           <div  class="col-md-2 control-label"><label for="sms_code">短信验证码</label></div> */
/*           <div class="col-md-3  controls"> */
/*             <input type="text" id="sms-code" name="sms_code" class="form-control" value="" data-url="{{path('edu_cloud_sms_check',{type:'sms_forget_pay_password'})}}">*/
/*           </div>*/
/*           <div class="col-md-3">*/
/*             <a href="#modal" data-toggle="modal" class="btn btn-default btn-sm js-sms-send {% if not verifiedMobile %}disabled{% endif %}" data-url="{{ path('register_captcha_modal') }}" data-sms-url="{{ path('edu_cloud_sms_send') }}">*/
/*               <span id="js-time-left"></span>*/
/*               <span id="js-fetch-btn-text">获取短信验证码</span>*/
/*             </a>*/
/*           </div>*/
/*         </div>*/
/* */
/*     	  <div class="form-group row"> */
/*         	<div class="col-md-4 col-md-offset-2  controls"> */
/*             	<button id="submit-btn" data-submiting-text="正在提交" type="submit" class="btn btn-primary">提交</button> */
/*         	</div> */
/*         </div> */
/* */
/*         <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/*     </form>   */
/* */
/* {#       <div class="alert alert-info">*/
/*           <p>您已经绑定了手机&nbsp;{{blur_phone_number(verifiedMobile)}}</p>*/
/*       </div> #}*/
/* */
/*     {% endblock %}*/
/*   {% endembed %}*/
/* {% endblock %}*/
