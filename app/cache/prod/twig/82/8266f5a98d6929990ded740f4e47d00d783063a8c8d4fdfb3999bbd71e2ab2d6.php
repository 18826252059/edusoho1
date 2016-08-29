<?php

/* TopxiaWebBundle:PasswordReset:index.html.twig */
class __TwigTemplate_19d985c99f7da1c051b62b7cba67de16bd0bcca2498311b8535fc0b5fcc712dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "TopxiaWebBundle:PasswordReset:index.html.twig", 1);
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
        $context["script_controller"] = "auth/password-reset";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "重设密码 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "<div class=\"row row-6\">
  <div class=\"col-md-6 col-md-offset-3 ptl\">
    <div class=\"panel panel-default panel-page\">
      <div class=\"panel-heading\"><h2>重设密码</h2></div>

        <ul class=\"nav nav-tabs mbl js-find-password\">
          <li class=\"active js-find-by-email\">
            <a style=\"cursor: pointer;\">邮箱地址
            </a>
          </li>
          ";
        // line 17
        if ((_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("cloud_sms.sms_enabled"), "") == "1")) {
            // line 18
            echo "            <li class=\"js-find-by-mobile\">
              <a style=\"cursor: pointer;\">手机号码
              </a>
            </li>
          ";
        }
        // line 23
        echo "        </ul>

      ";
        // line 25
        if ((isset($context["error"]) ? $context["error"] : null)) {
            echo " <div id=\"alertxx\" class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : null), "html", null, true);
            echo "</div> ";
        }
        // line 26
        echo "
      <form id=\"password-reset-form\" class=\"form-vertical\" method=\"post\">
        <div class=\"form-group\">
          ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "邮箱地址"));
        echo "
          <div class=\"controls\">
            ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            <p class=\"help-block\">请输入你在";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("site.name"), "html", null, true);
        echo "注册时填写的邮箱地址</p>
          </div>
        </div>

        <div class=\"form-group\">
          <div class=\"controls\">
            ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "
            <button type=\"submit\" class=\"btn btn-primary\" data-loading-text=\"正在发送重设密码邮件...\">重设密码</button>
          </div>
        </div>

        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">

      </form>


      <form id=\"password-reset-by-mobile-form\" class=\"form-vertical\" action=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("password_reset_by_sms");
        echo "\" method=\"post\" style=\"display: none;\">
        ";
        // line 55
        echo "
        <div class=\"form-group\">
          <label class=\"control-label required\" for=\"mobile\">手机号码</label>
          <div class=\"controls\">
            <input type=\"text\" id=\"mobile\" name=\"mobile\" data-url=\"";
        // line 59
        echo $this->env->getExtension('routing')->getPath("password_reset_check_mobile");
        echo "\" class=\"form-control\" data-role=\"mobile\">
          </div>
        </div>

        <div class=\"form-group\">
          <label class=\"control-label required\" for=\"sms_code\">短信验证码</label>
          <div class=\"controls row\" >
            <div class = \"col-md-8\" >
              <input type=\"text\" class=\"form-control\" id=\"sms-code\" name=\"sms_code\" data-explain=\"输入短信验证码\" required=\"required\" data-url=\"";
        // line 67
        echo $this->env->getExtension('routing')->getPath("edu_cloud_sms_check", array("type" => "sms_forget_password"));
        echo "\">
            </div>

            <div class=\"col-md-4\">
              <a href=\"#modal\" data-toggle=\"modal\" class=\"btn btn-default btn-sm js-sms-send disabled\" data-url=\"";
        // line 71
        echo $this->env->getExtension('routing')->getPath("register_captcha_modal");
        echo "\" data-sms-url=\"";
        echo $this->env->getExtension('routing')->getPath("edu_cloud_sms_send");
        echo "\">
                <span id=\"js-time-left\"></span>
                <span id=\"js-fetch-btn-text\">获取短信验证码</span>
             </a> 
            </div>

            <div class=\"col-md-12 help-block\"></div>            
          </div>
        </div>

        

        <div class=\"form-group\">
          <div class=\"controls\">
            <button type=\"submit\" class=\"btn btn-primary\" data-loading-text=\"提交中...\">重设密码</button>
          </div>
        </div>

        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
      </form>

    </div><!-- /panel -->

  </div>

</div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:PasswordReset:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 89,  140 => 71,  133 => 67,  122 => 59,  116 => 55,  112 => 48,  104 => 43,  96 => 38,  87 => 32,  83 => 31,  78 => 29,  73 => 26,  67 => 25,  63 => 23,  56 => 18,  54 => 17,  42 => 7,  39 => 6,  32 => 3,  28 => 1,  26 => 4,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::layout.html.twig' %}*/
/* */
/* {% block title %}重设密码 - {{ parent() }}{% endblock %}*/
/* {% set script_controller = 'auth/password-reset' %}*/
/* */
/* {% block content %}*/
/* <div class="row row-6">*/
/*   <div class="col-md-6 col-md-offset-3 ptl">*/
/*     <div class="panel panel-default panel-page">*/
/*       <div class="panel-heading"><h2>重设密码</h2></div>*/
/* */
/*         <ul class="nav nav-tabs mbl js-find-password">*/
/*           <li class="active js-find-by-email">*/
/*             <a style="cursor: pointer;">邮箱地址*/
/*             </a>*/
/*           </li>*/
/*           {% if (setting('cloud_sms.sms_enabled')|default('')) == '1' %}*/
/*             <li class="js-find-by-mobile">*/
/*               <a style="cursor: pointer;">手机号码*/
/*               </a>*/
/*             </li>*/
/*           {% endif %}*/
/*         </ul>*/
/* */
/*       {% if error %} <div id="alertxx" class="alert alert-danger">{{ error }}</div> {% endif %}*/
/* */
/*       <form id="password-reset-form" class="form-vertical" method="post">*/
/*         <div class="form-group">*/
/*           {{ form_label(form.email, '邮箱地址', {label_attr:{class:'control-label'}}) }}*/
/*           <div class="controls">*/
/*             {{ form_widget(form.email, {attr:{class:'form-control'}}) }}*/
/*             <p class="help-block">请输入你在{{ setting('site.name') }}注册时填写的邮箱地址</p>*/
/*           </div>*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*           <div class="controls">*/
/*             {{ form_rest(form) }}*/
/*             <button type="submit" class="btn btn-primary" data-loading-text="正在发送重设密码邮件...">重设密码</button>*/
/*           </div>*/
/*         </div>*/
/* */
/*         <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/* */
/*       </form>*/
/* */
/* */
/*       <form id="password-reset-by-mobile-form" class="form-vertical" action="{{ path('password_reset_by_sms') }}" method="post" style="display: none;">*/
/*         {# <div class="form-group">*/
/*           <label class="control-label required" for="nickname">用户名</label>*/
/*           <div class="controls">*/
/*             <input type="text" id="nickname" name="nickname"  class="form-control" data-role="nickname">*/
/*           </div>*/
/*         </div> #}*/
/* */
/*         <div class="form-group">*/
/*           <label class="control-label required" for="mobile">手机号码</label>*/
/*           <div class="controls">*/
/*             <input type="text" id="mobile" name="mobile" data-url="{{path('password_reset_check_mobile')}}" class="form-control" data-role="mobile">*/
/*           </div>*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*           <label class="control-label required" for="sms_code">短信验证码</label>*/
/*           <div class="controls row" >*/
/*             <div class = "col-md-8" >*/
/*               <input type="text" class="form-control" id="sms-code" name="sms_code" data-explain="输入短信验证码" required="required" data-url="{{path('edu_cloud_sms_check',{type:'sms_forget_password'})}}">*/
/*             </div>*/
/* */
/*             <div class="col-md-4">*/
/*               <a href="#modal" data-toggle="modal" class="btn btn-default btn-sm js-sms-send disabled" data-url="{{ path('register_captcha_modal') }}" data-sms-url="{{ path('edu_cloud_sms_send') }}">*/
/*                 <span id="js-time-left"></span>*/
/*                 <span id="js-fetch-btn-text">获取短信验证码</span>*/
/*              </a> */
/*             </div>*/
/* */
/*             <div class="col-md-12 help-block"></div>            */
/*           </div>*/
/*         </div>*/
/* */
/*         */
/* */
/*         <div class="form-group">*/
/*           <div class="controls">*/
/*             <button type="submit" class="btn btn-primary" data-loading-text="提交中...">重设密码</button>*/
/*           </div>*/
/*         </div>*/
/* */
/*         <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/*       </form>*/
/* */
/*     </div><!-- /panel -->*/
/* */
/*   </div>*/
/* */
/* </div>*/
/* {% endblock %}*/
