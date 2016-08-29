<?php

/* TopxiaWebBundle:Settings:security-questions.html.twig */
class __TwigTemplate_19403df330b04a8639496b0d4b34ce9495aa4e85cbb52f9aa219342dfa71bb20 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:Settings:layout.html.twig", "TopxiaWebBundle:Settings:security-questions.html.twig", 1);
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
        $context["script_controller"] = "settings/security-questions";
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
        echo "安全问题 - 安全设置 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        echo " 
 ";
        // line 8
        $this->loadTemplate("TopxiaWebBundle:Settings:security-questions.html.twig", "TopxiaWebBundle:Settings:security-questions.html.twig", 8, "484030147")->display(array_merge($context, array("class" => "panel-col")));
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Settings:security-questions.html.twig";
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


/* TopxiaWebBundle:Settings:security-questions.html.twig */
class __TwigTemplate_19403df330b04a8639496b0d4b34ce9495aa4e85cbb52f9aa219342dfa71bb20_484030147 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("TopxiaWebBundle:Bootstrap:panel.html.twig", "TopxiaWebBundle:Settings:security-questions.html.twig", 8);
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
    ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo " 

  ";
        // line 16
        if ( !(isset($context["hasSecurityQuestions"]) ? $context["hasSecurityQuestions"] : null)) {
            // line 17
            echo "
    <ul class=\"breadcrumb\">
      <li><a href=\"";
            // line 19
            echo $this->env->getExtension('routing')->getPath("settings_security");
            echo "\">安全设置</a></li>
      <li class=\"active\">设置安全问题</li>
    </ul>

    <div class=\"alert alert-warning\"> <span class=\"glyphicon glyphicon-info-sign\"></span> 安全问题一经设置，不可再次修改。</div>

    <form id=\"settings-security-questions-form\" class=\"form-horizontal\" autocomplete=\"off\" method=\"post\" ";
            // line 25
            echo "> 
      
      <input style=\"display:none\">";
            // line 28
            echo "      <input type=\"password\" style=\"display:none\">

      <div class=\"form-group row\"> 
        <div  class=\"col-md-3 control-label\"><label for=\"question-1\">安全问题1</label></div> 
        <div class=\"col-md-4\">
          <select class=\"form-control\" id=\"question-1\" name=\"question-1\"> 
            ";
            // line 34
            echo $this->env->getExtension('topxia_html_twig')->selectOptions((isset($context["questionOptions"]) ? $context["questionOptions"] : null), ((array_key_exists("question1", $context)) ? (_twig_default_filter((isset($context["question1"]) ? $context["question1"] : null), "parents")) : ("parents")));
            echo " 
          </select> 
        </div> 
      </div> 
      <div class=\"form-group row\"> 
        <div  class=\"col-md-3 control-label\"><label for=\"answer-1\">答案</label></div> 
        <div class=\"col-md-4 controls\"> 
          <input type=\"text\" id=\"answer-1\" name=\"answer-1\" class=\"form-control\" autocomplete=\"off\" value=\"\" placeholder=\"安全问题1答案\"> 
        </div> 
      </div> 



      <div class=\"form-group row\"> 
        <div class=\"col-md-3 control-label\"><label for=\"question-2\">安全问题2</label></div> 
        <div class=\"col-md-4\"> 
          <select class=\"form-control \" id=\"question-2\" name=\"question-2\"> 
            ";
            // line 51
            echo $this->env->getExtension('topxia_html_twig')->selectOptions((isset($context["questionOptions"]) ? $context["questionOptions"] : null), ((array_key_exists("question2", $context)) ? (_twig_default_filter((isset($context["question2"]) ? $context["question2"] : null), "teacher")) : ("teacher")));
            echo " 
          </select> 
        </div> 
      </div> 

      <div class=\"form-group row\"> 
        <div  class=\"col-md-3 control-label\"><label for=\"answer-2\">答案</label></div> 
        <div class=\"col-md-4 controls\"> 
          <input type=\"text\" id=\"answer-2\" name=\"answer-2\" class=\"form-control\" autocomplete=\"off\"  value=\"\" placeholder=\"安全问题2答案\"> 
        </div> 
      </div> 

      <div class=\"form-group row\"> 
        <div  class=\"col-md-3 control-label\"><label for=\"question-3\">安全问题3</label></div> 
        <div class=\"col-md-4\"> 
          <select class=\"form-control\" id=\"question-3\" name=\"question-3\"> 
            ";
            // line 67
            echo $this->env->getExtension('topxia_html_twig')->selectOptions((isset($context["questionOptions"]) ? $context["questionOptions"] : null), ((array_key_exists("question3", $context)) ? (_twig_default_filter((isset($context["question3"]) ? $context["question3"] : null), "lover")) : ("lover")));
            echo " 
          </select> 
        </div> 
      </div> 
    
      <div class=\"form-group row\"> 
        <div  class=\"col-md-3 control-label\"><label for=\"answer-3\">答案</label></div> 
        <div class=\"col-md-4 controls\"> 
          <input type=\"text\" id=\"answer-3\" name=\"answer-3\" class=\"form-control\" autocomplete=\"off\" value=\"\" placeholder=\"安全问题3答案\"> 
        </div> 
      </div> 

      <div class=\"form-group row\"> 
        <div  class=\"col-md-3 control-label\"><label for=\"userLoginPassword\">您的登录密码</label></div> 
        <div class=\"col-md-4 controls\"> 
          <input type=\"password\" id=\"userLoginPassword\" name=\"userLoginPassword\" class=\"form-control\" autocomplete=\"off\" value=\"\"> 
        </div> 
      </div> 

      <br>
      <div class=\"form-group row\"> 
          <div class=\"col-md-4 col-md-offset-3  controls\"> 
            <button id=\"password-save-btn\" data-submiting-text=\"正在保存\" type=\"submit\" class=\"btn btn-primary ";
            // line 89
            echo "\">提交</button> 
          </div> 
        </div> 

        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 93
            echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
            echo "\"> 
 
    </form> 

  ";
        } else {
            // line 98
            echo "
    <ul class=\"breadcrumb\">
      <li><a href=\"";
            // line 100
            echo $this->env->getExtension('routing')->getPath("settings_security");
            echo "\">安全设置</a></li>
      <li class=\"active\">查看安全问题</li>
    </ul>


    <form class=\"form-horizontal\" role=\"form\">
      <div class=\"form-group row\">
        <label  class=\"col-md-3 control-label\">安全问题1</label>
        <p class=\"form-control-static\">";
            // line 108
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["questionOptions"]) ? $context["questionOptions"] : null), (isset($context["question1"]) ? $context["question1"] : null), array(), "array"), "html", null, true);
            echo "</p>
      </div>
      <div class=\"form-group row\"> 
        <label  class=\"col-md-3 control-label\">安全问题2</label> 
        <p class=\"form-control-static\">";
            // line 112
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["questionOptions"]) ? $context["questionOptions"] : null), (isset($context["question2"]) ? $context["question2"] : null), array(), "array"), "html", null, true);
            echo "</p>
      </div>  
      <div class=\"form-group row\"> 
        <label  class=\"col-md-3 control-label\">安全问题3</label> 
        <p class=\"form-control-static\">";
            // line 116
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["questionOptions"]) ? $context["questionOptions"] : null), (isset($context["question3"]) ? $context["question3"] : null), array(), "array"), "html", null, true);
            echo "</p>
      </div>
    </form>
  ";
        }
        // line 120
        echo "    ";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Settings:security-questions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  253 => 120,  246 => 116,  239 => 112,  232 => 108,  221 => 100,  217 => 98,  209 => 93,  203 => 89,  178 => 67,  159 => 51,  139 => 34,  131 => 28,  127 => 25,  118 => 19,  114 => 17,  112 => 16,  107 => 14,  104 => 13,  101 => 12,  96 => 10,  93 => 9,  48 => 8,  43 => 7,  36 => 2,  32 => 1,  30 => 5,  28 => 4,  26 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle:Settings:layout.html.twig' %}*/
/* {% block title %}安全问题 - 安全设置 - {{ parent() }}{% endblock %}*/
/* {% set script_controller = 'settings/security-questions' %} */
/* {% set side_nav = 'security' %} */
/* {% set questionOptions = dict('secureQuestion') %} */
/* */
/* {% block main %} */
/*  {% embed "TopxiaWebBundle:Bootstrap:panel.html.twig" with {class:'panel-col'} %}*/
/*     {% block heading %}*/
/*       安全设置*/
/*     {% endblock %}*/
/*     {% block body %}*/
/* */
/*     {{ web_macro.flash_messages() }} */
/* */
/*   {%  if not hasSecurityQuestions  %}*/
/* */
/*     <ul class="breadcrumb">*/
/*       <li><a href="{{ path('settings_security') }}">安全设置</a></li>*/
/*       <li class="active">设置安全问题</li>*/
/*     </ul>*/
/* */
/*     <div class="alert alert-warning"> <span class="glyphicon glyphicon-info-sign"></span> 安全问题一经设置，不可再次修改。</div>*/
/* */
/*     <form id="settings-security-questions-form" class="form-horizontal" autocomplete="off" method="post" {# {% if not app.user.password %} style="display:none;"{% endif %} #}> */
/*       */
/*       <input style="display:none">{# Prevent autocompleting #}*/
/*       <input type="password" style="display:none">*/
/* */
/*       <div class="form-group row"> */
/*         <div  class="col-md-3 control-label"><label for="question-1">安全问题1</label></div> */
/*         <div class="col-md-4">*/
/*           <select class="form-control" id="question-1" name="question-1"> */
/*             {{ select_options(questionOptions, question1|default('parents') ) }} */
/*           </select> */
/*         </div> */
/*       </div> */
/*       <div class="form-group row"> */
/*         <div  class="col-md-3 control-label"><label for="answer-1">答案</label></div> */
/*         <div class="col-md-4 controls"> */
/*           <input type="text" id="answer-1" name="answer-1" class="form-control" autocomplete="off" value="" placeholder="安全问题1答案"> */
/*         </div> */
/*       </div> */
/* */
/* */
/* */
/*       <div class="form-group row"> */
/*         <div class="col-md-3 control-label"><label for="question-2">安全问题2</label></div> */
/*         <div class="col-md-4"> */
/*           <select class="form-control " id="question-2" name="question-2"> */
/*             {{ select_options(questionOptions, question2|default('teacher')) }} */
/*           </select> */
/*         </div> */
/*       </div> */
/* */
/*       <div class="form-group row"> */
/*         <div  class="col-md-3 control-label"><label for="answer-2">答案</label></div> */
/*         <div class="col-md-4 controls"> */
/*           <input type="text" id="answer-2" name="answer-2" class="form-control" autocomplete="off"  value="" placeholder="安全问题2答案"> */
/*         </div> */
/*       </div> */
/* */
/*       <div class="form-group row"> */
/*         <div  class="col-md-3 control-label"><label for="question-3">安全问题3</label></div> */
/*         <div class="col-md-4"> */
/*           <select class="form-control" id="question-3" name="question-3"> */
/*             {{ select_options(questionOptions,question3|default('lover')) }} */
/*           </select> */
/*         </div> */
/*       </div> */
/*     */
/*       <div class="form-group row"> */
/*         <div  class="col-md-3 control-label"><label for="answer-3">答案</label></div> */
/*         <div class="col-md-4 controls"> */
/*           <input type="text" id="answer-3" name="answer-3" class="form-control" autocomplete="off" value="" placeholder="安全问题3答案"> */
/*         </div> */
/*       </div> */
/* */
/*       <div class="form-group row"> */
/*         <div  class="col-md-3 control-label"><label for="userLoginPassword">您的登录密码</label></div> */
/*         <div class="col-md-4 controls"> */
/*           <input type="password" id="userLoginPassword" name="userLoginPassword" class="form-control" autocomplete="off" value=""> */
/*         </div> */
/*       </div> */
/* */
/*       <br>*/
/*       <div class="form-group row"> */
/*           <div class="col-md-4 col-md-offset-3  controls"> */
/*             <button id="password-save-btn" data-submiting-text="正在保存" type="submit" class="btn btn-primary {# pull-right #}">提交</button> */
/*           </div> */
/*         </div> */
/* */
/*         <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}"> */
/*  */
/*     </form> */
/* */
/*   {% else %}*/
/* */
/*     <ul class="breadcrumb">*/
/*       <li><a href="{{ path('settings_security') }}">安全设置</a></li>*/
/*       <li class="active">查看安全问题</li>*/
/*     </ul>*/
/* */
/* */
/*     <form class="form-horizontal" role="form">*/
/*       <div class="form-group row">*/
/*         <label  class="col-md-3 control-label">安全问题1</label>*/
/*         <p class="form-control-static">{{ questionOptions[question1] }}</p>*/
/*       </div>*/
/*       <div class="form-group row"> */
/*         <label  class="col-md-3 control-label">安全问题2</label> */
/*         <p class="form-control-static">{{ questionOptions[question2] }}</p>*/
/*       </div>  */
/*       <div class="form-group row"> */
/*         <label  class="col-md-3 control-label">安全问题3</label> */
/*         <p class="form-control-static">{{ questionOptions[question3] }}</p>*/
/*       </div>*/
/*     </form>*/
/*   {% endif %}*/
/*     {% endblock %}*/
/*   {% endembed %}*/
/* {% endblock %}*/
