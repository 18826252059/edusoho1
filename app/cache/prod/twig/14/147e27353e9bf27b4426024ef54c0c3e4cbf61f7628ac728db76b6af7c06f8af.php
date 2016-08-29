<?php

/* TopxiaWebBundle:User:fill-userinfo-fields.html.twig */
class __TwigTemplate_c1e8fc547540b6a85f6b5568a77e8503bf583f80e44563e1947680a74f0584e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "TopxiaWebBundle:User:fill-userinfo-fields.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'esBar' => array($this, 'block_esBar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 4
        $context["script_controller"] = "user/fill-userinfo-fields";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "注册 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "
<div class=\"row row-6\">
  <div class=\"col-md-6 col-md-offset-3 ptl\">
    <div class=\"panel panel-default panel-page\">
      <div class=\"panel-heading empty\">
        <h3>仅需一步，完善资料，让我们更好的为你服务！ </h3>
      </div>

      <form id=\"fill-userinfo-form\" class=\"form-horizontal\" method=\"post\" action=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("login_after_fill_userinfo", array("goto" => (isset($context["goto"]) ? $context["goto"] : null))), "html", null, true);
        echo "\">


        ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "

        ";
        // line 20
        $context["userinfo_enable"] = _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("auth.fill_userinfo_after_login"), false);
        // line 21
        echo "        ";
        $context["checkedFields"] = _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("auth.registerSort"), array());
        // line 22
        echo "        ";
        $this->loadTemplate("TopxiaWebBundle:User:fill-userinfo-fields-block.html.twig", "TopxiaWebBundle:User:fill-userinfo-fields.html.twig", 22)->display(array_merge($context, array("isBuyFillUserinfo" => (isset($context["userinfo_enable"]) ? $context["userinfo_enable"] : null), "userinfoFieldsSetting" => (isset($context["checkedFields"]) ? $context["checkedFields"] : null), "userFields" => (isset($context["userFields"]) ? $context["userFields"] : null), "user" => (isset($context["user"]) ? $context["user"] : null), "showNavTip" => 0)));
        // line 23
        echo "
          <div class=\"form-group\">
            <div class=\"controls text-center\">
              <button type=\"submit\" id=\"fill-userinfo-form-btn\" data-submiting-text=\"正在提交\" class=\"btn btn-primary btn-large\">保存</button>
            </div>
          </div>
          <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
      </form>
    </div>    
  </div>
</div>
";
    }

    // line 35
    public function block_esBar($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:User:fill-userinfo-fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 35,  80 => 29,  72 => 23,  69 => 22,  66 => 21,  64 => 20,  59 => 18,  53 => 15,  43 => 7,  40 => 6,  33 => 3,  29 => 1,  27 => 4,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::layout.html.twig' %}*/
/* */
/* {% block title %}注册 - {{ parent() }}{% endblock %}*/
/* {% set script_controller = 'user/fill-userinfo-fields' %}*/
/* */
/* {% block content %}*/
/* */
/* <div class="row row-6">*/
/*   <div class="col-md-6 col-md-offset-3 ptl">*/
/*     <div class="panel panel-default panel-page">*/
/*       <div class="panel-heading empty">*/
/*         <h3>仅需一步，完善资料，让我们更好的为你服务！ </h3>*/
/*       </div>*/
/* */
/*       <form id="fill-userinfo-form" class="form-horizontal" method="post" action="{{path('login_after_fill_userinfo', {goto:goto})}}">*/
/* */
/* */
/*         {{ web_macro.flash_messages() }}*/
/* */
/*         {% set userinfo_enable = setting('auth.fill_userinfo_after_login')|default(false) %}*/
/*         {% set checkedFields = setting('auth.registerSort')|default([]) %}*/
/*         {% include 'TopxiaWebBundle:User:fill-userinfo-fields-block.html.twig' with {isBuyFillUserinfo:userinfo_enable, userinfoFieldsSetting:checkedFields, userFields:userFields, user:user, showNavTip:0} %}*/
/* */
/*           <div class="form-group">*/
/*             <div class="controls text-center">*/
/*               <button type="submit" id="fill-userinfo-form-btn" data-submiting-text="正在提交" class="btn btn-primary btn-large">保存</button>*/
/*             </div>*/
/*           </div>*/
/*           <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/*       </form>*/
/*     </div>    */
/*   </div>*/
/* </div>*/
/* {% endblock %}*/
/* {% block esBar %}{% endblock %}*/
