<?php

/* TopxiaWebBundle:Settings:email.html.twig */
class __TwigTemplate_894ac8a0b25a5ee432c5283ee497cb0df3f8de4a93bb0f7abd7a6c735c4a4fcd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:Settings:layout.html.twig", "TopxiaWebBundle:Settings:email.html.twig", 1);
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
        $context["script_controller"] = "settings/email";
        // line 7
        $context["side_nav"] = "email";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "邮箱设置 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 9
    public function block_main($context, array $blocks = array())
    {
        // line 10
        echo "  ";
        $this->loadTemplate("TopxiaWebBundle:Settings:email.html.twig", "TopxiaWebBundle:Settings:email.html.twig", 10, "1272666257")->display(array_merge($context, array("class" => "panel-col")));
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Settings:email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 10,  41 => 9,  34 => 3,  30 => 1,  28 => 7,  26 => 5,  11 => 1,);
    }
}


/* TopxiaWebBundle:Settings:email.html.twig */
class __TwigTemplate_894ac8a0b25a5ee432c5283ee497cb0df3f8de4a93bb0f7abd7a6c735c4a4fcd_1272666257 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("TopxiaWebBundle:Bootstrap:panel.html.twig", "TopxiaWebBundle:Settings:email.html.twig", 10);
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
        echo "邮箱设置";
    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        if (($this->getAttribute((isset($context["mailer"]) ? $context["mailer"] : null), "enabled", array()) == 1)) {
            // line 14
            echo "      <form id=\"setting-email-form\" class=\"form-horizontal\" method=\"post\" >
        ";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
            echo "

        <div class=\"form-group\">
          <div class=\"col-md-2 control-label\"><label>当前登录邮箱</label></div>
          <div class=\"col-md-8 controls\">
            <span class=\"control-text\">
              ";
            // line 21
            $context["emailArr"] = twig_split_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "email", array()), "@");
            // line 22
            echo "              ";
            if (($this->getAttribute((isset($context["emailArr"]) ? $context["emailArr"] : null), 1, array(), "array") != "edusoho.net")) {
                // line 23
                echo "                ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "email", array()), "html", null, true);
                echo "
                ";
                // line 24
                if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "emailVerified", array())) {
                    // line 25
                    echo "                  <span class=\"text-success\">(已验证)</span>
                ";
                } else {
                    // line 27
                    echo "                  <p class=\"help-block mtm\">
                    邮箱地址尚未验证，
                    <a id=\"send-verify-email\" class=\"btn btn-info btn-sm\" href=\"javascript:;\" data-url=\"";
                    // line 29
                    echo $this->env->getExtension('routing')->getPath("settings_email_verify");
                    echo "\">去验证</a>
                  </p>
                ";
                }
                // line 32
                echo "              ";
            } else {
                // line 33
                echo "                <span class=\"text-success\">您还未设置邮箱，请在下方设置你的新邮箱。</span>
              ";
            }
            // line 35
            echo "              
            </span>
          </div>
        </div>

        <div class=\"form-group\">
          <div class=\"col-md-2 control-label\">";
            // line 41
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'label', array("label" => "新登录邮箱"));
            echo "</div>
          <div class=\"col-md-8 controls\">
            ";
            // line 43
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
          </div>
        </div>

        <div class=\"form-group\">
          <div class=\"col-md-2 control-label\">";
            // line 48
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "password", array()), 'label', array("label" => "网站登录密码"));
            echo "</div>
          <div class=\"col-md-8 controls\">
            ";
            // line 50
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "password", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
            <p class=\"help-block\">设置新的登录邮箱，需要校验当前的网站登录密码</p>
          </div>
        </div>

        <div class=\"form-group\">
          <div class=\"col-md-2 control-label\"></div>
          <div class=\"col-md-8 controls\">
            ";
            // line 58
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
            echo "
            <button id=\"email-save-btn\" data-submiting-text=\"正在提交\" type=\"submit\" class=\"btn btn-primary\">提交</button>
          </div>
        </div>

        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
            echo "\">
      </form>
    ";
        } else {
            // line 66
            echo "      <div class=\"alert alert-danger\">管理员尚未设置邮件服务器，不能更改邮箱地址。</div>
    ";
        }
        // line 68
        echo "    ";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Settings:email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 68,  198 => 66,  192 => 63,  184 => 58,  173 => 50,  168 => 48,  160 => 43,  155 => 41,  147 => 35,  143 => 33,  140 => 32,  134 => 29,  130 => 27,  126 => 25,  124 => 24,  119 => 23,  116 => 22,  114 => 21,  105 => 15,  102 => 14,  99 => 13,  96 => 12,  90 => 11,  44 => 10,  41 => 9,  34 => 3,  30 => 1,  28 => 7,  26 => 5,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle:Settings:layout.html.twig' %}*/
/* */
/* {% block title %}邮箱设置 - {{ parent() }}{% endblock %}*/
/* */
/* {% set script_controller = 'settings/email' %}*/
/* */
/* {% set side_nav = 'email' %}*/
/* */
/* {% block main %}*/
/*   {% embed "TopxiaWebBundle:Bootstrap:panel.html.twig" with {class:'panel-col'} %}*/
/*     {% block heading %}邮箱设置{% endblock %}*/
/*     {% block body %}*/
/*     {% if mailer.enabled == 1 %}*/
/*       <form id="setting-email-form" class="form-horizontal" method="post" >*/
/*         {{ web_macro.flash_messages() }}*/
/* */
/*         <div class="form-group">*/
/*           <div class="col-md-2 control-label"><label>当前登录邮箱</label></div>*/
/*           <div class="col-md-8 controls">*/
/*             <span class="control-text">*/
/*               {% set emailArr = app.user.email|split('@') %}*/
/*               {% if emailArr[1] != 'edusoho.net' %}*/
/*                 {{ app.user.email }}*/
/*                 {% if app.user.emailVerified %}*/
/*                   <span class="text-success">(已验证)</span>*/
/*                 {% else %}*/
/*                   <p class="help-block mtm">*/
/*                     邮箱地址尚未验证，*/
/*                     <a id="send-verify-email" class="btn btn-info btn-sm" href="javascript:;" data-url="{{ path('settings_email_verify') }}">去验证</a>*/
/*                   </p>*/
/*                 {% endif %}*/
/*               {% else %}*/
/*                 <span class="text-success">您还未设置邮箱，请在下方设置你的新邮箱。</span>*/
/*               {% endif %}*/
/*               */
/*             </span>*/
/*           </div>*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*           <div class="col-md-2 control-label">{{ form_label(form.email, '新登录邮箱') }}</div>*/
/*           <div class="col-md-8 controls">*/
/*             {{ form_widget(form.email, {attr:{class:'form-control'}}) }}*/
/*           </div>*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*           <div class="col-md-2 control-label">{{ form_label(form.password, '网站登录密码') }}</div>*/
/*           <div class="col-md-8 controls">*/
/*             {{ form_widget(form.password, {attr:{class:'form-control'}}) }}*/
/*             <p class="help-block">设置新的登录邮箱，需要校验当前的网站登录密码</p>*/
/*           </div>*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*           <div class="col-md-2 control-label"></div>*/
/*           <div class="col-md-8 controls">*/
/*             {{ form_rest(form) }}*/
/*             <button id="email-save-btn" data-submiting-text="正在提交" type="submit" class="btn btn-primary">提交</button>*/
/*           </div>*/
/*         </div>*/
/* */
/*         <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/*       </form>*/
/*     {% else %}*/
/*       <div class="alert alert-danger">管理员尚未设置邮件服务器，不能更改邮箱地址。</div>*/
/*     {% endif %}*/
/*     {% endblock %}*/
/*   {% endembed %}*/
/* {% endblock %}*/
