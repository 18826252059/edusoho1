<?php

/* @root\src\Topxia\WebBundle\Extensions\NotificationTemplate\cash-account.tpl.html.twig */
class __TwigTemplate_0af374036db513823c97c8ee0aee907264707e45650fb8553f279cd84069e8e6 extends Twig_Template
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
        echo "<li class=\"media\">
  <div class=\"pull-left\">
    <span class=\"glyphicon glyphicon-volume-down media-object\"></span>
  </div>
  <div class=\"media-body\">
    <div class=\"notification-body\">
      ";
        // line 7
        $context["data"] = $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "content", array());
        // line 8
        echo "       ";
        if (($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "type", array()) == "changeOk")) {
            // line 9
            echo "          您已成功充值";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "value", array()), "html", null, true);
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_name"), "虚拟币"), "html", null, true);
            echo ",前往 <a href=\"";
            echo $this->env->getExtension('routing')->getPath("my_coin");
            echo "\">我的账户</a> 查看
       ";
        } elseif (($this->getAttribute(        // line 10
(isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "type", array()) == "deduct")) {
            // line 11
            echo "          您被扣除";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "value", array()), "html", null, true);
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_name"), "虚拟币"), "html", null, true);
            echo ",前往 <a href=\"";
            echo $this->env->getExtension('routing')->getPath("my_coin");
            echo "\">我的账户</a> 查看
       ";
        } elseif (($this->getAttribute(        // line 12
(isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "type", array()) == "changing")) {
            // line 13
            echo "          您已成功兑换";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "value", array()), "html", null, true);
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_name"), "虚拟币"), "html", null, true);
            echo "\">我的账户</a> 查看
       ";
        }
        // line 15
        echo "    </div>
    <div class=\"notification-footer\">
      ";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->dateformatFilter($this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "createdTime", array())), "html", null, true);
        echo " 
    </div>
  </div>
</li>
";
    }

    public function getTemplateName()
    {
        return "@root\\src\\Topxia\\WebBundle\\Extensions\\NotificationTemplate\\cash-account.tpl.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 17,  59 => 15,  52 => 13,  50 => 12,  42 => 11,  40 => 10,  32 => 9,  29 => 8,  27 => 7,  19 => 1,);
    }
}
/* <li class="media">*/
/*   <div class="pull-left">*/
/*     <span class="glyphicon glyphicon-volume-down media-object"></span>*/
/*   </div>*/
/*   <div class="media-body">*/
/*     <div class="notification-body">*/
/*       {% set data = notification.content %}*/
/*        {% if data.type == 'changeOk' %}*/
/*           您已成功充值{{data.value}}{{setting('coin.coin_name')|default('虚拟币')}},前往 <a href="{{path('my_coin')}}">我的账户</a> 查看*/
/*        {% elseif data.type == 'deduct' %}*/
/*           您被扣除{{data.value}}{{setting('coin.coin_name')|default('虚拟币')}},前往 <a href="{{path('my_coin')}}">我的账户</a> 查看*/
/*        {% elseif data.type == 'changing' %}*/
/*           您已成功兑换{{data.value}}{{setting('coin.coin_name')|default('虚拟币')}}">我的账户</a> 查看*/
/*        {% endif %}*/
/*     </div>*/
/*     <div class="notification-footer">*/
/*       {{ notification.createdTime|date_format }} */
/*     </div>*/
/*   </div>*/
/* </li>*/
/* */
