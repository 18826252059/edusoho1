<?php

/* TopxiaWebBundle:Order:order-sms-modal.html.twig */
class __TwigTemplate_16dff72d81bf81c4f20746ab6283ac441518579f6d73bee3f2efb4c1b155173b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "TopxiaWebBundle:Order:order-sms-modal.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::bootstrap-modal-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["showSms"] = (twig_length_filter($this->env, (isset($context["verifiedMobile"]) ? $context["verifiedMobile"] : null)) > 0);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo " 短信验证码 ";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        if ((isset($context["showSms"]) ? $context["showSms"] : null)) {
            echo "  
    <form id = \"js-sms-modal-form\">
      <input type=\"hidden\" name=\"mobile\" data-role=\"mobile\" value=\"";
            // line 9
            echo twig_escape_filter($this->env, (isset($context["verifiedMobile"]) ? $context["verifiedMobile"] : null), "html", null, true);
            echo "\"/>
      <div class = \"form-group\">
        <div class = \"controls row\" >
          <div class = \"col-md-5 col-md-offset-2\" >
            <label class=\"control-label\">已绑定手机号码 ";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->blur_phone_number((isset($context["verifiedMobile"]) ? $context["verifiedMobile"] : null)), "html", null, true);
            echo "</label>
          </div>
          <div class = \"col-md-3\" >
            <a class=\"text-sm text-muted\" href=\"";
            // line 16
            echo $this->env->getExtension('routing')->getPath("settings_bind_mobile");
            echo "\" target=\"_blank\">修改手机号码</a>
          </div>
        </div>
        <br>
        <div class=\"controls row\" >
          <div class = \"col-md-5 col-md-offset-2\" >
            <input type=\"text\" class=\"form-control\" id=\"sms-code-modal\" name=\"sms_code_modal\" ";
            // line 22
            echo " required=\"required\" placeholder=\"输入短信验证码\" data-url=\"";
            echo $this->env->getExtension('routing')->getPath("edu_cloud_sms_check", array("type" => "sms_user_pay"));
            echo "\">
          </div>
          <div class=\"col-md-5\">
            <span class=\"btn btn-default btn-sm js-sms-send\" data-url=\"";
            // line 25
            echo $this->env->getExtension('routing')->getPath("edu_cloud_sms_send");
            echo "\">
              <span id=\"js-time-left\"></span>
              <span id=\"js-fetch-btn-text\">获取短信验证码";
            // line 27
            echo "</span>
           </span> 
          </div>
          <div class=\"col-md-12 col-md-offset-2\">
            <div class=\"help-block\"></div> 
          </div>
        </div>

      </div>
    </form>
";
        } else {
            // line 38
            echo "  <span>&nbsp;&nbsp;您还未绑定手机号<a class=\"btn btn-link\" href=\"";
            echo $this->env->getExtension('routing')->getPath("settings_bind_mobile");
            echo "\" target=\"_blank\">去绑定</a></span>  
";
        }
        // line 40
        echo "
";
    }

    // line 43
    public function block_footer($context, array $blocks = array())
    {
        // line 44
        echo "  ";
        if ((isset($context["showSms"]) ? $context["showSms"] : null)) {
            // line 45
            echo "     <button class=\"btn btn-primary pull-right js-confirm\">确定</button>
     <script>app.load('order/order-create-sms');</script>
  ";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Order:order-sms-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 45,  108 => 44,  105 => 43,  100 => 40,  94 => 38,  81 => 27,  76 => 25,  69 => 22,  60 => 16,  54 => 13,  47 => 9,  42 => 7,  39 => 6,  33 => 4,  29 => 1,  27 => 2,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::bootstrap-modal-layout.html.twig' %}*/
/* {% set showSms = ( verifiedMobile|length > 0) %}*/
/* */
/* {% block title %} 短信验证码 {% endblock %}*/
/* */
/* {% block body %}*/
/* {% if showSms %}  */
/*     <form id = "js-sms-modal-form">*/
/*       <input type="hidden" name="mobile" data-role="mobile" value="{{ verifiedMobile }}"/>*/
/*       <div class = "form-group">*/
/*         <div class = "controls row" >*/
/*           <div class = "col-md-5 col-md-offset-2" >*/
/*             <label class="control-label">已绑定手机号码 {{ blur_phone_number(verifiedMobile) }}</label>*/
/*           </div>*/
/*           <div class = "col-md-3" >*/
/*             <a class="text-sm text-muted" href="{{path('settings_bind_mobile')}}" target="_blank">修改手机号码</a>*/
/*           </div>*/
/*         </div>*/
/*         <br>*/
/*         <div class="controls row" >*/
/*           <div class = "col-md-5 col-md-offset-2" >*/
/*             <input type="text" class="form-control" id="sms-code-modal" name="sms_code_modal" {# data-explain="输入短信验证码" #} required="required" placeholder="输入短信验证码" data-url="{{path('edu_cloud_sms_check',{type:'sms_user_pay'})}}">*/
/*           </div>*/
/*           <div class="col-md-5">*/
/*             <span class="btn btn-default btn-sm js-sms-send" data-url="{{ path('edu_cloud_sms_send') }}">*/
/*               <span id="js-time-left"></span>*/
/*               <span id="js-fetch-btn-text">获取短信验证码{# 秒后重新获取 #}</span>*/
/*            </span> */
/*           </div>*/
/*           <div class="col-md-12 col-md-offset-2">*/
/*             <div class="help-block"></div> */
/*           </div>*/
/*         </div>*/
/* */
/*       </div>*/
/*     </form>*/
/* {% else %}*/
/*   <span>&nbsp;&nbsp;您还未绑定手机号<a class="btn btn-link" href="{{path('settings_bind_mobile')}}" target="_blank">去绑定</a></span>  */
/* {% endif %}*/
/* */
/* {% endblock %}*/
/* */
/* {% block footer %}*/
/*   {% if showSms %}*/
/*      <button class="btn btn-primary pull-right js-confirm">确定</button>*/
/*      <script>app.load('order/order-create-sms');</script>*/
/*   {% endif %}*/
/* {% endblock %}*/
