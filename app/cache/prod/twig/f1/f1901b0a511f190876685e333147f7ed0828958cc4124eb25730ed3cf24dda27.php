<?php

/* TopxiaWebBundle:Settings:email-change.txt.twig */
class __TwigTemplate_55f82ddc17a33b0e04ee5a0b182cb3e6ecb418373085420a93a7456deb578c7b extends Twig_Template
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
        echo "Hi, ";
        echo $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "nickname", array());
        echo "

您的登录邮箱重设要求已经收到。请点击以下链接进行验证：

";
        // line 5
        echo $this->env->getExtension('routing')->getUrl("auth_email_confirm", array("token" => (isset($context["token"]) ? $context["token"] : null)));
        echo "

如果以上链接无法点击，请将上面的地址复制到你的浏览器(如IE)的地址栏中打开，该链接地址24小时内打开有效。

";
        // line 9
        echo $this->env->getExtension('topxia_web_twig')->getSetting("site.name");
        echo " ";
        echo $this->env->getExtension('topxia_web_twig')->getSetting("site.url");
        echo "

(这是一封自动产生的email，请勿回复。)";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Settings:email-change.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 9,  27 => 5,  19 => 1,);
    }
}
/* Hi, {{ user.nickname }}*/
/* */
/* 您的登录邮箱重设要求已经收到。请点击以下链接进行验证：*/
/* */
/* {{ url('auth_email_confirm', {'token':token}) }}*/
/* */
/* 如果以上链接无法点击，请将上面的地址复制到你的浏览器(如IE)的地址栏中打开，该链接地址24小时内打开有效。*/
/* */
/* {{ setting('site.name') }} {{ setting('site.url') }}*/
/* */
/* (这是一封自动产生的email，请勿回复。)*/
