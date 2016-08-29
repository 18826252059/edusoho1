<?php

/* TopxiaWebBundle:Course/Part:normal-header-vip.html.twig */
class __TwigTemplate_faee123ed321fcfc3e393e07019bf1606886d625c749fc67b9b8248562086aa7 extends Twig_Template
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
        // line 2
        if ((isset($context["courseVip"]) ? $context["courseVip"] : null)) {
            // line 3
            echo "  ";
            if (((isset($context["userVipStatus"]) ? $context["userVipStatus"] : null) == "ok")) {
                // line 4
                echo "    ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["courseVip"]) ? $context["courseVip"] : null), "name", array()), "html", null, true);
                echo "免费学
  ";
            } elseif ((            // line 5
(isset($context["userVipStatus"]) ? $context["userVipStatus"] : null) == "level_low")) {
                // line 6
                echo "    ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["courseVip"]) ? $context["courseVip"] : null), "name", array()), "html", null, true);
                echo "免费学 ";
                echo twig_escape_filter($this->env, twig_replace_filter("<a href=\"%href%\" target=\"_blank\">升级会员</a>", array("%href%" => $this->env->getExtension('routing')->getPath("vip"))), "html");
                echo "
  ";
            } else {
                // line 8
                echo "    ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["courseVip"]) ? $context["courseVip"] : null), "name", array()), "html", null, true);
                echo "免费学 ";
                echo twig_escape_filter($this->env, twig_replace_filter("<a href=\"%href%\" target=\"_blank\">加入会员</a>", array("%href%" => $this->env->getExtension('routing')->getPath("vip"))), "html");
                echo "
  ";
            }
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course/Part:normal-header-vip.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 8,  31 => 6,  29 => 5,  24 => 4,  21 => 3,  19 => 2,);
    }
}
/* {% autoescape %}*/
/* {% if courseVip %}*/
/*   {% if userVipStatus == 'ok' %}*/
/*     {{ courseVip.name }}免费学*/
/*   {% elseif userVipStatus == 'level_low' %}*/
/*     {{ courseVip.name }}免费学 {{ '<a href="%href%" target="_blank">升级会员</a>'|replace({'%href%': path('vip') })|e('html') }}*/
/*   {% else %}*/
/*     {{ courseVip.name }}免费学 {{ '<a href="%href%" target="_blank">加入会员</a>'|replace({'%href%': path('vip') })|e('html') }}*/
/*   {% endif %}*/
/* {% endif %}*/
/* {% endautoescape %}*/
