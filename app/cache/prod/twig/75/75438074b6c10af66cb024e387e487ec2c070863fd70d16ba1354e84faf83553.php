<?php

/* TopxiaWebBundle::email-setting.html.twig */
class __TwigTemplate_55dd22705a28d57c1ea1933e814146ba223a6c497e188db19488bfc571735457 extends Twig_Template
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
        if (((($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()) && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "setup", array()) == 0)) && ( !array_key_exists("hideSetupHint", $context) || ((isset($context["hideSetupHint"]) ? $context["hideSetupHint"] : null) != true))) &&  !$this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "cookies", array()), "get", array(0 => "close_set_email_alert"), "method"))) {
            // line 2
            echo "<div class=\"alert alert-success set-email-alert hidden-xs\">
  <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
  为了帐号的安全，以及更好的使用体验，请设置您的Email地址。
  <a href=\"/settings/setup\">现在就去设置</a>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle::email-setting.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 2,  19 => 1,);
    }
}
/* {% if app.user and app.user.setup == 0 and (hideSetupHint is not defined or hideSetupHint != true) and not app.request.cookies.get('close_set_email_alert') %}*/
/* <div class="alert alert-success set-email-alert hidden-xs">*/
/*   <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>*/
/*   为了帐号的安全，以及更好的使用体验，请设置您的Email地址。*/
/*   <a href="/settings/setup">现在就去设置</a>*/
/* </div>*/
/* {% endif %}*/
