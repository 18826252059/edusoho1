<?php

/* TopxiaAdminBundle:System:default-course-picture-crop.html.twig */
class __TwigTemplate_0ece7ddd472be5d16f9340fa0f489e4fb183268193f275c3806857fe22e655eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:System:default-course-picture-crop.html.twig", 1);
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
        // line 5
        $context["script_controller"] = "setting/default-course-picture-crop";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "
<meta http-equiv=\"pragma\" content=\"no-cache\" />
<div class=\"panel panel-default panel-col\">
  <div class=\"panel-heading\">
    自定义默认课程图片
  </div>

  <div class=\"panel-body\">

      <div class=\"form-group clearfix\">
        <div class=\"col-md-offset-2 col-md-8 controls\">
          <img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath((isset($context["pictureUrl"]) ? $context["pictureUrl"] : null)), "html", null, true);
        echo "\" 
          id=\"default-course-picture-crop\" 
          width=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["scaledSize"]) ? $context["scaledSize"] : null), "width", array()), "html", null, true);
        echo "\" height=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["scaledSize"]) ? $context["scaledSize"] : null), "height", array()), "html", null, true);
        echo "\" data-natural-width=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["naturalSize"]) ? $context["naturalSize"] : null), "width", array()), "html", null, true);
        echo "\" data-natural-height=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["naturalSize"]) ? $context["naturalSize"] : null), "height", array()), "html", null, true);
        echo "\" />
          <div class=\"help-block\">提示：请选择图片裁剪区域。</div>
        </div>
      </div>

      <div class=\"form-group clearfix\">
        <div class=\"col-md-offset-2 col-md-8 controls\">
          <a class=\"btn btn-fat btn-primary\" 
          data-url=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("admin_setting_default_course_picture_crop");
        echo "\"
          data-goto-url=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("admin_setting_course_avatar");
        echo "\"
          id=\"upload-course-picture-btn\" >保存</a>
          <a href=\"javascript:;\" class=\"go-back btn btn-link\">重新选择图片</a>
        </div>
      </div>

  </div>
</div>


";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System:default-course-picture-crop.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 30,  71 => 29,  54 => 21,  49 => 19,  36 => 8,  33 => 7,  29 => 1,  27 => 5,  25 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaAdminBundle::layout.html.twig' %}*/
/* */
/* {% set menu = 'admin_setting_course_avatar' %}*/
/* */
/* {% set script_controller = 'setting/default-course-picture-crop' %}*/
/* */
/* {% block main %}*/
/* */
/* <meta http-equiv="pragma" content="no-cache" />*/
/* <div class="panel panel-default panel-col">*/
/*   <div class="panel-heading">*/
/*     自定义默认课程图片*/
/*   </div>*/
/* */
/*   <div class="panel-body">*/
/* */
/*       <div class="form-group clearfix">*/
/*         <div class="col-md-offset-2 col-md-8 controls">*/
/*           <img src="{{ filepath(pictureUrl) }}" */
/*           id="default-course-picture-crop" */
/*           width="{{scaledSize.width}}" height="{{scaledSize.height}}" data-natural-width="{{ naturalSize.width }}" data-natural-height="{{ naturalSize.height }}" />*/
/*           <div class="help-block">提示：请选择图片裁剪区域。</div>*/
/*         </div>*/
/*       </div>*/
/* */
/*       <div class="form-group clearfix">*/
/*         <div class="col-md-offset-2 col-md-8 controls">*/
/*           <a class="btn btn-fat btn-primary" */
/*           data-url="{{path('admin_setting_default_course_picture_crop')}}"*/
/*           data-goto-url="{{path('admin_setting_course_avatar')}}"*/
/*           id="upload-course-picture-btn" >保存</a>*/
/*           <a href="javascript:;" class="go-back btn btn-link">重新选择图片</a>*/
/*         </div>*/
/*       </div>*/
/* */
/*   </div>*/
/* </div>*/
/* */
/* */
/* {% endblock %}*/
