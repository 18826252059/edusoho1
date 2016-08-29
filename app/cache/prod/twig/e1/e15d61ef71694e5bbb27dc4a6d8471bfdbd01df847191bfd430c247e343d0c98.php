<?php

/* TopxiaWebBundle:Settings:email-verify.txt.twig */
class __TwigTemplate_ad4515e8011a40568b54ec363e37775b4bbf9aed57ae82b33d338734e1c98589 extends Twig_Template
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

请点击下面的链接完成邮箱的验证：

";
        // line 5
        echo $this->env->getExtension('routing')->getUrl("auth_email_confirm", array("token" => (isset($context["token"]) ? $context["token"] : null)));
        echo "

如果以上链接无法点击，请将上面的地址复制到你的浏览器(如IE)的地址栏中打开，该链接地址24小时内打开有效。

感谢对";
        // line 9
        echo $this->env->getExtension('topxia_web_twig')->getSetting("site.name");
        echo "的支持！

";
        // line 11
        echo $this->env->getExtension('topxia_web_twig')->getSetting("site.name");
        echo " ";
        echo $this->env->getExtension('topxia_web_twig')->getSetting("site.url");
        echo "

(这是一封自动产生的email，请勿回复。)";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Settings:email-verify.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 11,  34 => 9,  27 => 5,  19 => 1,);
    }
}
/* Hi, {{ user.nickname }}*/
/* */
/* 请点击下面的链接完成邮箱的验证：*/
/* */
/* {{ url('auth_email_confirm', {token:token}) }}*/
/* */
/* 如果以上链接无法点击，请将上面的地址复制到你的浏览器(如IE)的地址栏中打开，该链接地址24小时内打开有效。*/
/* */
/* 感谢对{{ setting('site.name') }}的支持！*/
/* */
/* {{ setting('site.name') }} {{ setting('site.url') }}*/
/* */
/* (这是一封自动产生的email，请勿回复。)*/
