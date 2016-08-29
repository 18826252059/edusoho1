<?php

/* TopxiaWebBundle:Settings:find-pay-password.html.twig */
class __TwigTemplate_f36fc673882b43762a87262182a430b2fb6cff5e6e9e3073bd0cb2054da83e7f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:Settings:layout.html.twig", "TopxiaWebBundle:Settings:find-pay-password.html.twig", 1);
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
        $context["script_controller"] = "settings/find_pay_password";
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
        $this->loadTemplate("TopxiaWebBundle:Settings:find-pay-password.html.twig", "TopxiaWebBundle:Settings:find-pay-password.html.twig", 8, "1245444380")->display(array_merge($context, array("class" => "panel-col")));
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Settings:find-pay-password.html.twig";
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


/* TopxiaWebBundle:Settings:find-pay-password.html.twig */
class __TwigTemplate_f36fc673882b43762a87262182a430b2fb6cff5e6e9e3073bd0cb2054da83e7f_1245444380 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("TopxiaWebBundle:Bootstrap:panel.html.twig", "TopxiaWebBundle:Settings:find-pay-password.html.twig", 8);
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
        $context["type"] = "questions";
        // line 20
        echo "      ";
        $this->loadTemplate("TopxiaWebBundle:Settings:questions-or-sms-tabs.html.twig", "TopxiaWebBundle:Settings:find-pay-password.html.twig", 20)->display($context);
        // line 21
        echo "      ";
        // line 22
        echo "

    ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo " 

    <form id=\"settings-find-pay-password-form\" class=\"form-horizontal\" method=\"post\" >
        <div class=\"form-group row\"> 
          <div  class=\"col-md-2 control-label\"><label for=\"answer\">";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["questionOptions"]) ? $context["questionOptions"] : null), (isset($context["question"]) ? $context["question"] : null), array(), "array"), "html", null, true);
        echo "</label></div> 
          <div class=\" col-md-8 controls\"> 
            <input type=\"text\" id=\"answer\" name=\"answer\" class=\"form-control\" value=\"\" placeholder=\"安全问题答案\"> 
          </div> 
          ";
        // line 33
        echo "        </div> 

        <div class=\"form-group\">
          <div class=\"col-md-offset-2 col-md-8 controls\">
            <input id=\"answer-question-btn\" data-submiting-text=\"正在保存\" class=\"btn btn-primary\" type=\"submit\" value=\"提交\">
          </div>
        </div>

        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
        <input type=\"hidden\" name=\"questionNum\" class=\"form-control\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["questionNum"]) ? $context["questionNum"] : null), "html", null, true);
        echo "\"> 
    </form>      


    ";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Settings:find-pay-password.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 42,  150 => 41,  140 => 33,  133 => 28,  126 => 24,  122 => 22,  120 => 21,  117 => 20,  115 => 19,  108 => 15,  104 => 13,  101 => 12,  96 => 10,  93 => 9,  48 => 8,  43 => 7,  36 => 2,  32 => 1,  30 => 5,  28 => 4,  26 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle:Settings:layout.html.twig' %}*/
/* {% block title %}支付密码 - 安全设置 - {{ parent() }}{% endblock %}*/
/* {% set script_controller = 'settings/find_pay_password' %} */
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
/*       {% set type = 'questions' %}*/
/*       {% include 'TopxiaWebBundle:Settings:questions-or-sms-tabs.html.twig' %}*/
/*       {# <br> #}*/
/* */
/* */
/*     {{ web_macro.flash_messages() }} */
/* */
/*     <form id="settings-find-pay-password-form" class="form-horizontal" method="post" >*/
/*         <div class="form-group row"> */
/*           <div  class="col-md-2 control-label"><label for="answer">{{ questionOptions[question] }}</label></div> */
/*           <div class=" col-md-8 controls"> */
/*             <input type="text" id="answer" name="answer" class="form-control" value="" placeholder="安全问题答案"> */
/*           </div> */
/*           {# <div class="controls"><p class="help-block"></p></div> #}*/
/*         </div> */
/* */
/*         <div class="form-group">*/
/*           <div class="col-md-offset-2 col-md-8 controls">*/
/*             <input id="answer-question-btn" data-submiting-text="正在保存" class="btn btn-primary" type="submit" value="提交">*/
/*           </div>*/
/*         </div>*/
/* */
/*         <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/*         <input type="hidden" name="questionNum" class="form-control" value="{{questionNum}}"> */
/*     </form>      */
/* */
/* */
/*     {% endblock %}*/
/*   {% endembed %}*/
/* {% endblock %}*/
