<?php

/* TopxiaWebBundle:PasswordReset:reset.txt.twig */
class __TwigTemplate_545764a3767e63f62ddd1bca65e43df4f644b2c53f516e74746ef9acf2076855 extends Twig_Template
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
        echo "亲爱的";
        echo $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "nickname", array());
        echo "：

您的密码重设要求已经得到验证。请点击以下链接输入您新的密码：

";
        // line 5
        echo $this->env->getExtension('routing')->getUrl("password_reset_update", array("token" => (isset($context["token"]) ? $context["token"] : null)));
        echo "

如果您的email程序不支持链接点击，请将上面的地址拷贝至您的浏览器(例如IE)的地址栏进入";
        // line 7
        echo $this->env->getExtension('topxia_web_twig')->getSetting("site.name");
        echo "。

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
        return "TopxiaWebBundle:PasswordReset:reset.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 9,  32 => 7,  27 => 5,  19 => 1,);
    }
}
/* 亲爱的{{ user.nickname }}：*/
/* */
/* 您的密码重设要求已经得到验证。请点击以下链接输入您新的密码：*/
/* */
/* {{ url('password_reset_update', {token:token}) }}*/
/* */
/* 如果您的email程序不支持链接点击，请将上面的地址拷贝至您的浏览器(例如IE)的地址栏进入{{ setting('site.name') }}。*/
/* */
/* {{ setting('site.name') }} {{ setting('site.url') }}*/
/* */
/* (这是一封自动产生的email，请勿回复。)*/
