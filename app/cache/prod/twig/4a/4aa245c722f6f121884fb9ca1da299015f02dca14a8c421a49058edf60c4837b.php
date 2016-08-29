<?php

/* TopxiaWebBundle:Settings:questions-or-sms-tabs.html.twig */
class __TwigTemplate_c899a99eb14fd2dec8b4622ccd2cfb87aeb61fb83a7e5936e38560e086e5d2d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "      <ul class=\"nav nav-tabs mbl\">
        ";
        // line 2
        if ((isset($context["hasSecurityQuestions"]) ? $context["hasSecurityQuestions"] : null)) {
            // line 3
            echo "          <li class=\"js-find-by-question
          ";
            // line 4
            if (((isset($context["type"]) ? $context["type"] : null) == "questions")) {
                // line 5
                echo "            active
          ";
            }
            // line 7
            echo "          \">
            <a href=\"";
            // line 8
            echo $this->env->getExtension('routing')->getPath("settings_find_pay_password");
            echo "\" style=\"cursor: pointer;\">通过安全问题找回
            </a>
          </li>
        ";
        }
        // line 12
        echo "
        ";
        // line 13
        if (((isset($context["hasVerifiedMobile"]) ? $context["hasVerifiedMobile"] : null) && (_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("cloud_sms.sms_enabled"), "") == "1"))) {
            // line 14
            echo "          <li class=\"js-find-by-mobile
          ";
            // line 15
            if (((isset($context["type"]) ? $context["type"] : null) == "sms")) {
                // line 16
                echo "            active
          ";
            }
            // line 18
            echo "          \">
            <a href=\"";
            // line 19
            echo $this->env->getExtension('routing')->getPath("settings_find_pay_password_by_sms");
            echo "\" style=\"cursor: pointer;\">通过手机找回
            </a>
          </li>
        ";
        }
        // line 23
        echo "
      </ul>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Settings:questions-or-sms-tabs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 23,  60 => 19,  57 => 18,  53 => 16,  51 => 15,  48 => 14,  46 => 13,  43 => 12,  36 => 8,  33 => 7,  29 => 5,  27 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }
}
/*       <ul class="nav nav-tabs mbl">*/
/*         {% if hasSecurityQuestions %}*/
/*           <li class="js-find-by-question*/
/*           {% if type == 'questions' %}*/
/*             active*/
/*           {% endif %}*/
/*           ">*/
/*             <a href="{{ path('settings_find_pay_password') }}" style="cursor: pointer;">通过安全问题找回*/
/*             </a>*/
/*           </li>*/
/*         {% endif %}*/
/* */
/*         {% if hasVerifiedMobile and (setting('cloud_sms.sms_enabled')|default('')) == '1' %}*/
/*           <li class="js-find-by-mobile*/
/*           {% if type == 'sms' %}*/
/*             active*/
/*           {% endif %}*/
/*           ">*/
/*             <a href="{{ path('settings_find_pay_password_by_sms') }}" style="cursor: pointer;">通过手机找回*/
/*             </a>*/
/*           </li>*/
/*         {% endif %}*/
/* */
/*       </ul>*/
