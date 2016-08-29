<?php

/* TopxiaAdminBundle:System:user-avatar.html.twig */
class __TwigTemplate_e0c220a5a96e9560342b036af6419eec44d672b9e708abfd03586f2b7000193e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:System:user-avatar.html.twig", 1);
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
        $context["menu"] = "admin_user_avatar";
        // line 4
        $context["script_controller"] = "setting/default-user-avatar";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "

 <fieldset>
    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\"></div>
      <div class=\"controls col-md-8 radios\" id=\"default-avatar\" >
        ";
        // line 13
        echo $this->env->getExtension('topxia_html_twig')->radios("avatar", array(1 => "自定义默认头像", 0 => "系统默认头像"), (($this->getAttribute((isset($context["defaultSetting"]) ? $context["defaultSetting"] : null), "defaultAvatar", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["defaultSetting"]) ? $context["defaultSetting"] : null), "defaultAvatar", array()), 0)) : (0)));
        echo "
        <p>网校内未上传头像的用户，都会显示该默认头像。推荐尺寸（270*270）</p>    
        ";
        // line 15
        $this->loadTemplate("TopxiaAdminBundle:System:default-avatar.html.twig", "TopxiaAdminBundle:System:user-avatar.html.twig", 15)->display($context);
        // line 16
        echo "      </div>
    </div>
  </fieldset>
  <form method=\"post\" action=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("admin_setting_avatar");
        echo "\" >
    <div class=\"form-group mll\">
        <div class=\"col-md-3 control-label\"></div>
        <div class=\"controls col-md-8\">
          <button type=\"submit\" class=\"btn btn-primary mtl\">提交</button>  
        </div>
      <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
      <input type=\"hidden\" name=\"defaultAvatar\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["defaultSetting"]) ? $context["defaultSetting"] : null), "defaultAvatar", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["defaultSetting"]) ? $context["defaultSetting"] : null), "defaultAvatar", array()), 0)) : (0)), "html", null, true);
        echo "\">
    </div>
  </form>

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System:user-avatar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 26,  66 => 25,  57 => 19,  52 => 16,  50 => 15,  45 => 13,  36 => 7,  33 => 6,  29 => 1,  27 => 4,  25 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaAdminBundle::layout.html.twig' %}*/
/* */
/* {% set menu = 'admin_user_avatar' %}*/
/* {% set script_controller = 'setting/default-user-avatar' %}*/
/* */
/* {% block main %}*/
/* {{ web_macro.flash_messages() }}*/
/* */
/*  <fieldset>*/
/*     <div class="form-group">*/
/*       <div class="col-md-3 control-label"></div>*/
/*       <div class="controls col-md-8 radios" id="default-avatar" >*/
/*         {{ radios('avatar', {1:'自定义默认头像', 0:'系统默认头像'}, defaultSetting.defaultAvatar|default(0)) }}*/
/*         <p>网校内未上传头像的用户，都会显示该默认头像。推荐尺寸（270*270）</p>    */
/*         {% include 'TopxiaAdminBundle:System:default-avatar.html.twig' %}*/
/*       </div>*/
/*     </div>*/
/*   </fieldset>*/
/*   <form method="post" action="{{ path('admin_setting_avatar') }}" >*/
/*     <div class="form-group mll">*/
/*         <div class="col-md-3 control-label"></div>*/
/*         <div class="controls col-md-8">*/
/*           <button type="submit" class="btn btn-primary mtl">提交</button>  */
/*         </div>*/
/*       <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/*       <input type="hidden" name="defaultAvatar" value="{{ defaultSetting.defaultAvatar|default(0) }}">*/
/*     </div>*/
/*   </form>*/
/* */
/* {% endblock %}*/
