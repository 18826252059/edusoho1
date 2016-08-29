<?php

/* TopxiaAdminBundle:EduCloud:apply-sms-form.html.twig */
class __TwigTemplate_c36513847c876bab947d061365485b026f43a06d58cf2a51c6c775cb94819feb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "TopxiaAdminBundle:EduCloud:apply-sms-form.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo " 申请云短信 ";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "\t<form id=\"apply-sms-form\" class=\"form-horizontal\" data-url=\"";
        echo $this->env->getExtension('routing')->getPath("admin_edu_cloud_apply_for_sms");
        echo "\">
\t\t<fieldset>
\t\t\t<div class=\"row form-group\">
\t\t      <div class=\"col-md-3 control-label\">
\t\t        <label>提醒</label>
\t\t      </div>
\t\t      <div class=\"col-md-7 controls\" style=\"padding-top: 5px;\">
\t\t      \t";
        // line 13
        if ((_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("cloud_sms.sms_school_name"), "") == "")) {
            // line 14
            echo "\t\t      \t\t<span>初次开启，需填写网校名称，审核需1到3个工作日，开启成功后，短信最低￥0.055/条</span>
\t\t      \t";
        } else {
            // line 16
            echo "\t\t      \t\t<span>审核需1到3个工作日，期间短信验证功能仍可以正常使用</span>
\t\t      \t";
        }
        // line 18
        echo "
\t\t      </div>
\t\t    </div>

\t\t\t<div class=\"row form-group\">
\t\t      <div class=\"col-md-3 control-label\">
\t\t        <label for=\"name\">网校名称</label>
\t\t      </div>
\t\t      <div class=\"col-md-7 controls\">
\t\t        <input type=\"text\" name=\"name\" class=\"form-control\" id=\"name\">
\t\t        <p>短信内容：“【<span id=\"js-school-name\"></span>】您的验证码是：123456(请勿泄露)，此验证码30分钟内输入有效”</p>
\t\t      </div>
\t\t    </div>
\t\t</fieldset>
\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
\t</form>
";
    }

    // line 36
    public function block_footer($context, array $blocks = array())
    {
        // line 37
        echo "\t<button class=\"btn btn-default col-md-offset-7\" data-dismiss=\"modal\">关闭</button>
\t<button class=\"btn btn-primary col-md-offset-2\" id=\"js-submit\">提交</button>
\t<script>app.load('educloud/apply-sms')</script>
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:EduCloud:apply-sms-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 37,  83 => 36,  76 => 32,  60 => 18,  56 => 16,  52 => 14,  50 => 13,  39 => 6,  36 => 5,  30 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::bootstrap-modal-layout.html.twig' %}*/
/* */
/* {% block title %} 申请云短信 {% endblock %}*/
/* */
/* {% block body %}*/
/* 	<form id="apply-sms-form" class="form-horizontal" data-url="{{ path('admin_edu_cloud_apply_for_sms') }}">*/
/* 		<fieldset>*/
/* 			<div class="row form-group">*/
/* 		      <div class="col-md-3 control-label">*/
/* 		        <label>提醒</label>*/
/* 		      </div>*/
/* 		      <div class="col-md-7 controls" style="padding-top: 5px;">*/
/* 		      	{% if (setting('cloud_sms.sms_school_name')|default('')) == '' %}*/
/* 		      		<span>初次开启，需填写网校名称，审核需1到3个工作日，开启成功后，短信最低￥0.055/条</span>*/
/* 		      	{% else %}*/
/* 		      		<span>审核需1到3个工作日，期间短信验证功能仍可以正常使用</span>*/
/* 		      	{% endif %}*/
/* */
/* 		      </div>*/
/* 		    </div>*/
/* */
/* 			<div class="row form-group">*/
/* 		      <div class="col-md-3 control-label">*/
/* 		        <label for="name">网校名称</label>*/
/* 		      </div>*/
/* 		      <div class="col-md-7 controls">*/
/* 		        <input type="text" name="name" class="form-control" id="name">*/
/* 		        <p>短信内容：“【<span id="js-school-name"></span>】您的验证码是：123456(请勿泄露)，此验证码30分钟内输入有效”</p>*/
/* 		      </div>*/
/* 		    </div>*/
/* 		</fieldset>*/
/* 		<input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/* 	</form>*/
/* {% endblock %}*/
/* */
/* {% block footer %}*/
/* 	<button class="btn btn-default col-md-offset-7" data-dismiss="modal">关闭</button>*/
/* 	<button class="btn btn-primary col-md-offset-2" id="js-submit">提交</button>*/
/* 	<script>app.load('educloud/apply-sms')</script>*/
/* {% endblock %}*/
