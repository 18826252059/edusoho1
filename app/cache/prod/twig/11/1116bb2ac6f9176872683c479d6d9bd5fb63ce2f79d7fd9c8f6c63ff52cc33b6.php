<?php

/* TopxiaAdminBundle:System:ip-blacklist.html.twig */
class __TwigTemplate_3e74a4e222cc5fc74b20e7d2af82923a5645aa56697099dcd07232b6d4c552b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:System:ip-blacklist.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["menu"] = "admin_setting_ip_blacklist";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        // line 6
        echo "
";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "

<form method=\"post\">
\t<textarea id=\"ips\" name=\"ips\" rows=\"18\" class=\"form-control\">";
        // line 10
        if ((isset($context["ips"]) ? $context["ips"] : null)) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ips"]) ? $context["ips"] : null), "ips", array()), "html", null, true);
        }
        // line 11
        echo "</textarea>

  <div class=\"help-block\">一行一个IP，被加入黑名单的IP将被禁止访问！暂不支持网段的封锁!</div>
  <input type=\"submit\" class=\"btn btn-primary\" value=\"提交\">
  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
</form>

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System:ip-blacklist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 15,  47 => 11,  43 => 10,  37 => 7,  34 => 6,  31 => 5,  27 => 1,  25 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaAdminBundle::layout.html.twig' %}*/
/* */
/* {% set menu = 'admin_setting_ip_blacklist' %}*/
/* */
/* {% block main %}*/
/* */
/* {{ web_macro.flash_messages() }}*/
/* */
/* <form method="post">*/
/* 	<textarea id="ips" name="ips" rows="18" class="form-control">{% if ips  %}{{ips.ips}}{% endif %}*/
/* </textarea>*/
/* */
/*   <div class="help-block">一行一个IP，被加入黑名单的IP将被禁止访问！暂不支持网段的封锁!</div>*/
/*   <input type="submit" class="btn btn-primary" value="提交">*/
/*   <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/* </form>*/
/* */
/* {% endblock %}*/
