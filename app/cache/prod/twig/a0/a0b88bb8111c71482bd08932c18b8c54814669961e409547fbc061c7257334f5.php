<?php

/* TopxiaWebBundle:Settings:security.html.twig */
class __TwigTemplate_1982659a589b930ca89ab5769265f93530be633ddca6abdded3916b1eb004e0a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:Settings:layout.html.twig", "TopxiaWebBundle:Settings:security.html.twig", 1);
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
        // line 4
        $context["side_nav"] = "security";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "安全设置 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        echo " 
 ";
        // line 7
        $this->loadTemplate("TopxiaWebBundle:Settings:security.html.twig", "TopxiaWebBundle:Settings:security.html.twig", 7, "893106479")->display(array_merge($context, array("class" => "panel-col")));
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Settings:security.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 7,  39 => 6,  32 => 2,  28 => 1,  26 => 4,  11 => 1,);
    }
}


/* TopxiaWebBundle:Settings:security.html.twig */
class __TwigTemplate_1982659a589b930ca89ab5769265f93530be633ddca6abdded3916b1eb004e0a_893106479 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("TopxiaWebBundle:Bootstrap:panel.html.twig", "TopxiaWebBundle:Settings:security.html.twig", 7);
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
        echo "安全设置";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "
    
      <div class=\"row safety-setting\">
        <div class=\"col-xs-2 tar\">
          <span class=\"esicon esicon-safety ";
        // line 14
        if (((isset($context["progressScore"]) ? $context["progressScore"] : null) > 90)) {
            echo "text-success";
        } elseif (((isset($context["progressScore"]) ? $context["progressScore"] : null) > 60)) {
            echo "text-warning";
        } else {
            echo "text-danger";
        }
        echo "\" style=\"font-size:20px\"></span>
        </div>
      <div class=\"col-sm-6 col-xs-5\">
        <div class=\"progress\" style=\"margin-top:5px;\">
          <div class=\"progress-bar\" role=\"progressbar\" style=\"width: ";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["progressScore"]) ? $context["progressScore"] : null), "html", null, true);
        echo "%;\"></div>
        </div>
      </div>
      <div class=\"col-sm-4 col-xs-5\">
        ";
        // line 22
        if (((isset($context["progressScore"]) ? $context["progressScore"] : null) > 80)) {
            // line 23
            echo "          <span class=\"text-success\" style=\"display:block;margin-top:5px;\">安全等级：高</span>
        ";
        } elseif ((        // line 24
(isset($context["progressScore"]) ? $context["progressScore"] : null) > 30)) {
            // line 25
            echo "        <span class=\"text-warning\" style=\"display:block;margin-top:5px;\">安全等级：中</span>
        ";
        } else {
            // line 27
            echo "          <span class=\"text-danger\" style=\"display:block;margin-top:5px;\">安全等级：低</span>
        ";
        }
        // line 29
        echo "      </div>
    </div>

    <hr>
    
    <div class=\"row\">
      <div class=\"col-xs-2 tar
        ";
        // line 36
        if ((isset($context["hasLoginPassword"]) ? $context["hasLoginPassword"] : null)) {
            echo " 
          text-success
        ";
        } else {
            // line 39
            echo "          text-danger
        ";
        }
        // line 41
        echo "      \" style=\"font-size:20px\">
        ";
        // line 42
        if ((isset($context["hasLoginPassword"]) ? $context["hasLoginPassword"] : null)) {
            echo " 
          <span class=\"glyphicon glyphicon-ok\"></span>
        ";
        } else {
            // line 45
            echo "          <span class=\"glyphicon glyphicon-warning-sign\"></span>
        ";
        }
        // line 47
        echo "      </div>

      <span class=\"col-sm-3 col-xs-6\" style=\"margin-top: 5px;\" >登录密码</span>

      <span class=\"col-sm-4 hidden-xs\" style=\"margin-top: 5px;\" >登录网校时需要输入的密码</span>

      <a href=\"";
        // line 53
        echo $this->env->getExtension('routing')->getPath("settings_password");
        echo "\" class=\"col-xs-offset-1 btn btn-primary\" style=\"margin-top: -3px;\" >修改</a>
    </div>
    <hr>

    <div class=\"row\">
      <div class=\"col-xs-2 tar
        ";
        // line 59
        if ((isset($context["hasPayPassword"]) ? $context["hasPayPassword"] : null)) {
            echo " 
          text-success
        ";
        } else {
            // line 62
            echo "          text-danger
        ";
        }
        // line 64
        echo "      \" style=\"font-size:20px\">
        ";
        // line 65
        if ((isset($context["hasPayPassword"]) ? $context["hasPayPassword"] : null)) {
            echo " 
          <span class=\"glyphicon glyphicon-ok\"></span>
        ";
        } else {
            // line 68
            echo "          <span class=\"glyphicon glyphicon-warning-sign\"></span>
        ";
        }
        // line 70
        echo "      </div>

      <span class=\"col-sm-3 col-xs-6\" style=\"margin-top: 5px;\" >支付密码</span>

      <span class=\"col-sm-4 hidden-xs\" style=\"margin-top: 5px;\" >在网校进行消费行为时需要输入的密码</span>

      ";
        // line 76
        if ((isset($context["hasPayPassword"]) ? $context["hasPayPassword"] : null)) {
            echo " 
        <a href=\"";
            // line 77
            echo $this->env->getExtension('routing')->getPath("settings_reset_pay_password");
            echo "\" class=\"col-xs-offset-1 btn btn-primary\" style=\"margin-top: -3px;\" >重置</a>   
      ";
        } else {
            // line 79
            echo "        <a href=\"";
            echo $this->env->getExtension('routing')->getPath("settings_pay_password");
            echo "\" class=\"col-xs-offset-1  btn btn-primary\" style=\"margin-top: -3px;\" >设置</a>
      ";
        }
        // line 81
        echo "      
    </div>
    <hr>
      
    <div class=\"row\">
      <div class=\"col-xs-2 tar
        ";
        // line 87
        if ((isset($context["hasFindPayPasswordQuestion"]) ? $context["hasFindPayPasswordQuestion"] : null)) {
            echo " 
          text-success
        ";
        } else {
            // line 90
            echo "          text-danger
        ";
        }
        // line 91
        echo " \" 
        style=\"font-size:20px\">
      
        ";
        // line 94
        if ((isset($context["hasFindPayPasswordQuestion"]) ? $context["hasFindPayPasswordQuestion"] : null)) {
            echo " 
          <span class=\"glyphicon glyphicon-ok\"></span>
        ";
        } else {
            // line 97
            echo "          <span class=\"glyphicon glyphicon-warning-sign\"></span>
        ";
        }
        // line 99
        echo "      </div>

      <span class=\"col-sm-3 col-xs-6\" style=\"margin-top: 5px;\" >安全问题</span>

      <span class=\"col-sm-4 hidden-xs\" style=\"margin-top: 5px;\" >通过设置并且验证安全问题，保护帐号密码安全。</span>

      <a href=\"";
        // line 105
        echo $this->env->getExtension('routing')->getPath("settings_security_questions");
        echo "\" class=\"col-xs-offset-1 btn btn-primary\" style=\"margin-top: -3px;\" >
      ";
        // line 106
        if ((isset($context["hasFindPayPasswordQuestion"]) ? $context["hasFindPayPasswordQuestion"] : null)) {
            // line 107
            echo "        查看
      ";
        } else {
            // line 109
            echo "        设置
      ";
        }
        // line 111
        echo "
      </a>
    </div>

    ";
        // line 115
        if (((_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("cloud_sms.sms_enabled"), "") == "1") && (_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("cloud_sms.sms_bind"), "") == "on"))) {
            // line 116
            echo "      <hr>
        
      <div class=\"row\">
        <div class=\"col-xs-2 tar
          ";
            // line 120
            if ((isset($context["hasVerifiedMobile"]) ? $context["hasVerifiedMobile"] : null)) {
                echo " 
            text-success
          ";
            } else {
                // line 123
                echo "            text-danger
          ";
            }
            // line 124
            echo " \" 
          style=\"font-size:20px\">
        
          ";
            // line 127
            if ((isset($context["hasVerifiedMobile"]) ? $context["hasVerifiedMobile"] : null)) {
                echo " 
            <span class=\"glyphicon glyphicon-ok\"></span>
          ";
            } else {
                // line 130
                echo "            <span class=\"glyphicon glyphicon-warning-sign\"></span>
          ";
            }
            // line 132
            echo "        </div>

        <span class=\"col-sm-3 col-xs-6\" style=\"margin-top: 5px;\" >手机绑定</span>

        <span class=\"col-sm-4 hidden-xs\" style=\"margin-top: 5px;\" >增加账户登录、购买课程时的安全性，同时还可以找回登录密码，支付密码。</span>

        <a href=\"";
            // line 138
            echo $this->env->getExtension('routing')->getPath("settings_bind_mobile");
            echo "\" class=\"col-xs-offset-1 btn btn-primary\" style=\"margin-top: -3px;\" >
        ";
            // line 139
            if ((isset($context["hasVerifiedMobile"]) ? $context["hasVerifiedMobile"] : null)) {
                // line 140
                echo "          修改
        ";
            } else {
                // line 142
                echo "          绑定
        ";
            }
            // line 144
            echo "        </a>
      </div>
    ";
        }
        // line 147
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Settings:security.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  357 => 147,  352 => 144,  348 => 142,  344 => 140,  342 => 139,  338 => 138,  330 => 132,  326 => 130,  320 => 127,  315 => 124,  311 => 123,  305 => 120,  299 => 116,  297 => 115,  291 => 111,  287 => 109,  283 => 107,  281 => 106,  277 => 105,  269 => 99,  265 => 97,  259 => 94,  254 => 91,  250 => 90,  244 => 87,  236 => 81,  230 => 79,  225 => 77,  221 => 76,  213 => 70,  209 => 68,  203 => 65,  200 => 64,  196 => 62,  190 => 59,  181 => 53,  173 => 47,  169 => 45,  163 => 42,  160 => 41,  156 => 39,  150 => 36,  141 => 29,  137 => 27,  133 => 25,  131 => 24,  128 => 23,  126 => 22,  119 => 18,  106 => 14,  98 => 10,  95 => 9,  89 => 8,  44 => 7,  39 => 6,  32 => 2,  28 => 1,  26 => 4,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle:Settings:layout.html.twig' %}*/
/* {% block title %}安全设置 - {{ parent() }}{% endblock %}*/
/* {# {% set script_controller = 'settings/security' %}  #}*/
/* {% set side_nav = 'security' %} */
/* */
/* {% block main %} */
/*  {% embed "TopxiaWebBundle:Bootstrap:panel.html.twig" with {class:'panel-col'} %}*/
/*     {% block heading %}安全设置{% endblock %}*/
/*     {% block body %}*/
/*     {{ web_macro.flash_messages() }}*/
/*     */
/*       <div class="row safety-setting">*/
/*         <div class="col-xs-2 tar">*/
/*           <span class="esicon esicon-safety {% if progressScore > 90 %}text-success{% elseif progressScore > 60 %}text-warning{% else %}text-danger{% endif %}" style="font-size:20px"></span>*/
/*         </div>*/
/*       <div class="col-sm-6 col-xs-5">*/
/*         <div class="progress" style="margin-top:5px;">*/
/*           <div class="progress-bar" role="progressbar" style="width: {{ progressScore }}%;"></div>*/
/*         </div>*/
/*       </div>*/
/*       <div class="col-sm-4 col-xs-5">*/
/*         {% if progressScore > 80 %}*/
/*           <span class="text-success" style="display:block;margin-top:5px;">安全等级：高</span>*/
/*         {% elseif progressScore > 30 %}*/
/*         <span class="text-warning" style="display:block;margin-top:5px;">安全等级：中</span>*/
/*         {% else %}*/
/*           <span class="text-danger" style="display:block;margin-top:5px;">安全等级：低</span>*/
/*         {% endif %}*/
/*       </div>*/
/*     </div>*/
/* */
/*     <hr>*/
/*     */
/*     <div class="row">*/
/*       <div class="col-xs-2 tar*/
/*         {% if hasLoginPassword %} */
/*           text-success*/
/*         {% else %}*/
/*           text-danger*/
/*         {% endif %}*/
/*       " style="font-size:20px">*/
/*         {% if hasLoginPassword %} */
/*           <span class="glyphicon glyphicon-ok"></span>*/
/*         {% else %}*/
/*           <span class="glyphicon glyphicon-warning-sign"></span>*/
/*         {% endif %}*/
/*       </div>*/
/* */
/*       <span class="col-sm-3 col-xs-6" style="margin-top: 5px;" >登录密码</span>*/
/* */
/*       <span class="col-sm-4 hidden-xs" style="margin-top: 5px;" >登录网校时需要输入的密码</span>*/
/* */
/*       <a href="{{ path('settings_password') }}" class="col-xs-offset-1 btn btn-primary" style="margin-top: -3px;" >修改</a>*/
/*     </div>*/
/*     <hr>*/
/* */
/*     <div class="row">*/
/*       <div class="col-xs-2 tar*/
/*         {% if hasPayPassword %} */
/*           text-success*/
/*         {% else %}*/
/*           text-danger*/
/*         {% endif %}*/
/*       " style="font-size:20px">*/
/*         {% if hasPayPassword %} */
/*           <span class="glyphicon glyphicon-ok"></span>*/
/*         {% else %}*/
/*           <span class="glyphicon glyphicon-warning-sign"></span>*/
/*         {% endif %}*/
/*       </div>*/
/* */
/*       <span class="col-sm-3 col-xs-6" style="margin-top: 5px;" >支付密码</span>*/
/* */
/*       <span class="col-sm-4 hidden-xs" style="margin-top: 5px;" >在网校进行消费行为时需要输入的密码</span>*/
/* */
/*       {% if hasPayPassword %} */
/*         <a href="{{ path('settings_reset_pay_password') }}" class="col-xs-offset-1 btn btn-primary" style="margin-top: -3px;" >重置</a>   */
/*       {% else %}*/
/*         <a href="{{ path('settings_pay_password') }}" class="col-xs-offset-1  btn btn-primary" style="margin-top: -3px;" >设置</a>*/
/*       {% endif %}*/
/*       */
/*     </div>*/
/*     <hr>*/
/*       */
/*     <div class="row">*/
/*       <div class="col-xs-2 tar*/
/*         {% if hasFindPayPasswordQuestion %} */
/*           text-success*/
/*         {% else %}*/
/*           text-danger*/
/*         {% endif %} " */
/*         style="font-size:20px">*/
/*       */
/*         {% if hasFindPayPasswordQuestion %} */
/*           <span class="glyphicon glyphicon-ok"></span>*/
/*         {% else %}*/
/*           <span class="glyphicon glyphicon-warning-sign"></span>*/
/*         {% endif %}*/
/*       </div>*/
/* */
/*       <span class="col-sm-3 col-xs-6" style="margin-top: 5px;" >安全问题</span>*/
/* */
/*       <span class="col-sm-4 hidden-xs" style="margin-top: 5px;" >通过设置并且验证安全问题，保护帐号密码安全。</span>*/
/* */
/*       <a href="{{ path('settings_security_questions') }}" class="col-xs-offset-1 btn btn-primary" style="margin-top: -3px;" >*/
/*       {% if hasFindPayPasswordQuestion %}*/
/*         查看*/
/*       {% else %}*/
/*         设置*/
/*       {% endif %}*/
/* */
/*       </a>*/
/*     </div>*/
/* */
/*     {% if (setting('cloud_sms.sms_enabled')|default('')) == '1' and (setting('cloud_sms.sms_bind')|default('')) == 'on' %}*/
/*       <hr>*/
/*         */
/*       <div class="row">*/
/*         <div class="col-xs-2 tar*/
/*           {% if hasVerifiedMobile %} */
/*             text-success*/
/*           {% else %}*/
/*             text-danger*/
/*           {% endif %} " */
/*           style="font-size:20px">*/
/*         */
/*           {% if hasVerifiedMobile %} */
/*             <span class="glyphicon glyphicon-ok"></span>*/
/*           {% else %}*/
/*             <span class="glyphicon glyphicon-warning-sign"></span>*/
/*           {% endif %}*/
/*         </div>*/
/* */
/*         <span class="col-sm-3 col-xs-6" style="margin-top: 5px;" >手机绑定</span>*/
/* */
/*         <span class="col-sm-4 hidden-xs" style="margin-top: 5px;" >增加账户登录、购买课程时的安全性，同时还可以找回登录密码，支付密码。</span>*/
/* */
/*         <a href="{{ path('settings_bind_mobile') }}" class="col-xs-offset-1 btn btn-primary" style="margin-top: -3px;" >*/
/*         {% if hasVerifiedMobile %}*/
/*           修改*/
/*         {% else %}*/
/*           绑定*/
/*         {% endif %}*/
/*         </a>*/
/*       </div>*/
/*     {% endif %}*/
/* */
/*     {% endblock %}*/
/*   {% endembed %}*/
/* {% endblock %}*/
