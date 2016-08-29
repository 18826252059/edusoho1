<?php

/* TopxiaAdminBundle:System:course-avatar.html.twig */
class __TwigTemplate_984777f9204937972aca10521e264b106abf936e6d97fb6b51eafda515e6c03f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:System:course-avatar.html.twig", 1);
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
        $context["menu"] = "admin_setting_course_avatar";
        // line 4
        $context["script_controller"] = "setting/default-course-picture";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        // line 7
        echo "

";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "

  <fieldset>
    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\"></div>
      <div class=\"controls col-md-8 radios\" id=\"defaultCoursePicture\">
        ";
        // line 15
        echo $this->env->getExtension('topxia_html_twig')->radios("coursePicture", array(1 => "自定义默认课程图片", 0 => "系统默认课程图片"), (($this->getAttribute((isset($context["defaultSetting"]) ? $context["defaultSetting"] : null), "defaultCoursePicture", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["defaultSetting"]) ? $context["defaultSetting"] : null), "defaultCoursePicture", array()), 0)) : (0)));
        echo "
        <p>支持jpg、gif、png格式的图片，建议尺寸：480*270px.</p>
        ";
        // line 17
        $this->loadTemplate("TopxiaAdminBundle:System:default-course-picture.html.twig", "TopxiaAdminBundle:System:course-avatar.html.twig", 17)->display($context);
        // line 18
        echo "      </div>
    </div>
  </fieldset>

<form class=\"form-horizontal\" method=\"post\" id=\"course-form\" novalidate>
  <input type=\"hidden\" name=\"defaultCoursePicture\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["defaultSetting"]) ? $context["defaultSetting"] : null), "defaultCoursePicture", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["defaultSetting"]) ? $context["defaultSetting"] : null), "defaultCoursePicture", array()), 0)) : (0)), "html", null, true);
        echo "\">

  <div class=\"form-group\">
    <div class=\"controls col-md-offset-3 col-md-8\">
      <button type=\"submit\" class=\"btn btn-primary mtl mll\">提交</button>
    </div>
  </div>
  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
</form>

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System:course-avatar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 30,  63 => 23,  56 => 18,  54 => 17,  49 => 15,  40 => 9,  36 => 7,  33 => 6,  29 => 1,  27 => 4,  25 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaAdminBundle::layout.html.twig' %}*/
/* */
/* {% set menu = 'admin_setting_course_avatar' %}*/
/* {% set script_controller = 'setting/default-course-picture' %}*/
/* */
/* {% block main %}*/
/* */
/* */
/* {{ web_macro.flash_messages() }}*/
/* */
/*   <fieldset>*/
/*     <div class="form-group">*/
/*       <div class="col-md-3 control-label"></div>*/
/*       <div class="controls col-md-8 radios" id="defaultCoursePicture">*/
/*         {{ radios('coursePicture', {1:'自定义默认课程图片', 0:'系统默认课程图片'}, defaultSetting.defaultCoursePicture|default(0)) }}*/
/*         <p>支持jpg、gif、png格式的图片，建议尺寸：480*270px.</p>*/
/*         {% include 'TopxiaAdminBundle:System:default-course-picture.html.twig' %}*/
/*       </div>*/
/*     </div>*/
/*   </fieldset>*/
/* */
/* <form class="form-horizontal" method="post" id="course-form" novalidate>*/
/*   <input type="hidden" name="defaultCoursePicture" value="{{ defaultSetting.defaultCoursePicture|default(0) }}">*/
/* */
/*   <div class="form-group">*/
/*     <div class="controls col-md-offset-3 col-md-8">*/
/*       <button type="submit" class="btn btn-primary mtl mll">提交</button>*/
/*     </div>*/
/*   </div>*/
/*   <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/* </form>*/
/* */
/* {% endblock %}*/
/* */
/* */
/* */
/* */
