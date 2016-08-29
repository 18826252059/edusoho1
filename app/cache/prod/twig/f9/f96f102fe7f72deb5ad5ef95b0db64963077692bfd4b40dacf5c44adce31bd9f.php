<?php

/* TopxiaWebBundle:Course/Part:normal-header-vip-link.html.twig */
class __TwigTemplate_17a0e097f65c3b890636bdb702be1eb4720755238ba62ab948e4703d6eb05178 extends Twig_Template
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
        if ((isset($context["userVipStatus"]) ? $context["userVipStatus"] : null)) {
            // line 2
            echo "\t\t";
            if (((isset($context["userVipStatus"]) ? $context["userVipStatus"] : null) == "not_login")) {
                // line 3
                echo "\t\t\t<a href=\"";
                echo $this->env->getExtension('routing')->getPath("login");
                echo "\" class=\"color-warning\" >会员</a>
\t\t";
            } elseif (twig_in_filter(            // line 4
(isset($context["userVipStatus"]) ? $context["userVipStatus"] : null), array(0 => "not_member", 1 => "member_expired"))) {
                // line 5
                echo "\t\t\t<a href=\"";
                echo $this->env->getExtension('routing')->getPath("vip_buy");
                echo "\" class=\"color-warning\">会员</a>  
\t\t";
            } elseif ((            // line 6
(isset($context["userVipStatus"]) ? $context["userVipStatus"] : null) == "level_low")) {
                // line 7
                echo "\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vip_upgrade", array("level" => $this->getAttribute((isset($context["level"]) ? $context["level"] : null), "id", array()))), "html", null, true);
                echo "\" class=\"color-warning\" >会员</a>
\t\t";
            } elseif ((            // line 8
(isset($context["userVipStatus"]) ? $context["userVipStatus"] : null) == "ok")) {
                // line 9
                echo "\t\t\t<a href=\"javascript:;\" class=\"color-warning\">会员</a>
\t\t";
            }
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course/Part:normal-header-vip-link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 9,  43 => 8,  38 => 7,  36 => 6,  31 => 5,  29 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if userVipStatus %}*/
/* 		{% if userVipStatus == 'not_login' %}*/
/* 			<a href="{{ path('login') }}" class="color-warning" >会员</a>*/
/* 		{% elseif userVipStatus in ['not_member', 'member_expired'] %}*/
/* 			<a href="{{ path('vip_buy') }}" class="color-warning">会员</a>  */
/* 		{% elseif userVipStatus == 'level_low' %}*/
/* 			<a href="{{ path('vip_upgrade', {level:level.id}) }}" class="color-warning" >会员</a>*/
/* 		{% elseif userVipStatus == 'ok' %}*/
/* 			<a href="javascript:;" class="color-warning">会员</a>*/
/* 		{% endif %}*/
/* {% endif %}*/
