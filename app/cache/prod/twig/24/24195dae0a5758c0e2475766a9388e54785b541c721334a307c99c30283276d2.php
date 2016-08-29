<?php

/* TopxiaWebBundle:Settings:bind-mobile.html.twig */
class __TwigTemplate_4f238b151ba205aa1ebef2c81f39c023a8543a24645b2a71784ea73736ef7092 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:Settings:layout.html.twig", "TopxiaWebBundle:Settings:bind-mobile.html.twig", 1);
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
        $context["script_controller"] = "settings/bind-mobile";
        // line 4
        $context["side_nav"] = "security";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "绑定手机 - 安全设置 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        echo " 
 ";
        // line 7
        $this->loadTemplate("TopxiaWebBundle:Settings:bind-mobile.html.twig", "TopxiaWebBundle:Settings:bind-mobile.html.twig", 7, "885053564")->display(array_merge($context, array("class" => "panel-col")));
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Settings:bind-mobile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 7,  41 => 6,  34 => 2,  30 => 1,  28 => 4,  26 => 3,  11 => 1,);
    }
}


/* TopxiaWebBundle:Settings:bind-mobile.html.twig */
class __TwigTemplate_4f238b151ba205aa1ebef2c81f39c023a8543a24645b2a71784ea73736ef7092_885053564 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("TopxiaWebBundle:Bootstrap:panel.html.twig", "TopxiaWebBundle:Settings:bind-mobile.html.twig", 7);
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

    // line 8
    public function block_heading($context, array $blocks = array())
    {
        echo "绑定手机";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "
    \t<ul class=\"breadcrumb\">
\t      <li><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("settings_security");
        echo "\">安全设置</a></li>
\t      <li class=\"active\">手机号码绑定</li>
\t    </ul>
\t    
\t    ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "

\t    <form id=\"bind-mobile-form\" class=\"form-horizontal\" method=\"post\"> 

\t    \t";
        // line 20
        if ((twig_length_filter($this->env, (isset($context["verifiedMobile"]) ? $context["verifiedMobile"] : null)) > 0)) {
            // line 21
            echo "\t\t    \t<div class=\"form-group row\">
\t\t    \t\t<div  class=\"col-md-3 control-label\"><label>已绑定手机号</label></div>
\t\t    \t\t<div class=\"col-md-4 controls\"> 
\t\t    \t\t\t<div class=\"control-text\">";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->blur_phone_number((isset($context["verifiedMobile"]) ? $context["verifiedMobile"] : null)), "html", null, true);
            echo "</div>
\t\t    \t\t</div>\t    \t\t
\t\t    \t</div>
\t\t    ";
        }
        // line 28
        echo "
\t    \t<div class=\"form-group row\"> 
\t        <div  class=\"col-md-3 control-label\"><label for=\"password\">您的登录密码</label></div> 
\t        <div class=\"col-md-4 controls\"> 
\t        \t<input type=\"password\" id=\"password\" name=\"password\" class=\"form-control\" value=\"\"  data-url=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("settings_check_login_password");
        echo "\"> 
\t        </div> 
\t    \t</div>

\t\t    <div class=\"form-group row\"> 
\t        <div  class=\"col-md-3 control-label\"><label for=\"mobile\">手机号码</label></div> 
\t        <div class=\"col-md-4 controls\"> 
\t        \t<input type=\"text\" id=\"mobile\" name=\"mobile\" data-url=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("register_email_or_mobile_check");
        echo "\" class=\"form-control\" data-role=\"mobile\" value=\"\"> 
\t        </div> 
\t    \t</div>

\t    \t<div class=\"form-group row\"> 
\t        <div  class=\"col-md-3 control-label\"><label for=\"sms_code\">短信验证码</label></div> 

\t        <div class=\"col-md-2 controls\">
\t        \t<input type=\"text\" id=\"sms-code\" name=\"sms_code\" class=\"form-control\" value=\"\" data-url=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("edu_cloud_sms_check", array("type" => "sms_bind"));
        echo "\">
\t        </div>
\t        
        \t<div class=\"col-md-4 controls\"> 
\t\t      \t<a href=\"#modal\" data-toggle=\"modal\" class=\"btn btn-default btn-sm js-sms-send disabled\" data-url=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("register_captcha_modal");
        echo "\" data-sms-url=\"";
        echo $this->env->getExtension('routing')->getPath("edu_cloud_sms_send");
        echo "\">
\t\t            <span id=\"js-time-left\"></span>
\t\t            <span id=\"js-fetch-btn-text\">获取短信验证码</span>
\t\t         </a>
\t        </div>         \t
\t        \t
\t    \t</div>

\t    \t<div class=\"form-group row\"> 
        \t<div class=\"col-md-4 col-md-offset-3  controls\"> 
            <button id=\"submit-btn\" data-submiting-text=\"正在提交\" type=\"submit\" class=\"btn btn-primary\">提交</button> 
        \t</div> 
\t      </div> 

        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\"> 
\t    </form>


    ";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Settings:bind-mobile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 65,  166 => 51,  159 => 47,  148 => 39,  138 => 32,  132 => 28,  125 => 24,  120 => 21,  118 => 20,  111 => 16,  104 => 12,  100 => 10,  97 => 9,  91 => 8,  46 => 7,  41 => 6,  34 => 2,  30 => 1,  28 => 4,  26 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle:Settings:layout.html.twig' %}*/
/* {% block title %}绑定手机 - 安全设置 - {{ parent() }}{% endblock %}*/
/* {% set script_controller = 'settings/bind-mobile' %} */
/* {% set side_nav = 'security' %} */
/* */
/* {% block main %} */
/*  {% embed "TopxiaWebBundle:Bootstrap:panel.html.twig" with {class:'panel-col'} %}*/
/*     {% block heading %}绑定手机{% endblock %}*/
/*     {% block body %}*/
/* */
/*     	<ul class="breadcrumb">*/
/* 	      <li><a href="{{ path('settings_security') }}">安全设置</a></li>*/
/* 	      <li class="active">手机号码绑定</li>*/
/* 	    </ul>*/
/* 	    */
/* 	    {{ web_macro.flash_messages() }}*/
/* */
/* 	    <form id="bind-mobile-form" class="form-horizontal" method="post"> */
/* */
/* 	    	{% if verifiedMobile | length > 0 %}*/
/* 		    	<div class="form-group row">*/
/* 		    		<div  class="col-md-3 control-label"><label>已绑定手机号</label></div>*/
/* 		    		<div class="col-md-4 controls"> */
/* 		    			<div class="control-text">{{blur_phone_number(verifiedMobile)}}</div>*/
/* 		    		</div>	    		*/
/* 		    	</div>*/
/* 		    {% endif %}*/
/* */
/* 	    	<div class="form-group row"> */
/* 	        <div  class="col-md-3 control-label"><label for="password">您的登录密码</label></div> */
/* 	        <div class="col-md-4 controls"> */
/* 	        	<input type="password" id="password" name="password" class="form-control" value=""  data-url="{{ path('settings_check_login_password') }}"> */
/* 	        </div> */
/* 	    	</div>*/
/* */
/* 		    <div class="form-group row"> */
/* 	        <div  class="col-md-3 control-label"><label for="mobile">手机号码</label></div> */
/* 	        <div class="col-md-4 controls"> */
/* 	        	<input type="text" id="mobile" name="mobile" data-url="{{path('register_email_or_mobile_check')}}" class="form-control" data-role="mobile" value=""> */
/* 	        </div> */
/* 	    	</div>*/
/* */
/* 	    	<div class="form-group row"> */
/* 	        <div  class="col-md-3 control-label"><label for="sms_code">短信验证码</label></div> */
/* */
/* 	        <div class="col-md-2 controls">*/
/* 	        	<input type="text" id="sms-code" name="sms_code" class="form-control" value="" data-url="{{path('edu_cloud_sms_check',{type:'sms_bind'})}}">*/
/* 	        </div>*/
/* 	        */
/*         	<div class="col-md-4 controls"> */
/* 		      	<a href="#modal" data-toggle="modal" class="btn btn-default btn-sm js-sms-send disabled" data-url="{{ path('register_captcha_modal') }}" data-sms-url="{{ path('edu_cloud_sms_send') }}">*/
/* 		            <span id="js-time-left"></span>*/
/* 		            <span id="js-fetch-btn-text">获取短信验证码</span>*/
/* 		         </a>*/
/* 	        </div>         	*/
/* 	        	*/
/* 	    	</div>*/
/* */
/* 	    	<div class="form-group row"> */
/*         	<div class="col-md-4 col-md-offset-3  controls"> */
/*             <button id="submit-btn" data-submiting-text="正在提交" type="submit" class="btn btn-primary">提交</button> */
/*         	</div> */
/* 	      </div> */
/* */
/*         <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}"> */
/* 	    </form>*/
/* */
/* */
/*     {% endblock %}*/
/*   {% endembed %}*/
/* {% endblock %}*/
