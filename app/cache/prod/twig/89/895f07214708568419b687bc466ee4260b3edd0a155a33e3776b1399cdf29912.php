<?php

/* TopxiaAdminBundle:System:default-avatar-crop.html.twig */
class __TwigTemplate_314130488ec241189bef1fb1331e97f03304ec11e726b594e1b44bfea4821f78 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:System:default-avatar-crop.html.twig", 1);
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
        $context["script_controller"] = "setting/default-avatar-crop";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        // line 7
        echo "
<meta http-equiv=\"pragma\" content=\"no-cache\" />
<div class=\"panel panel-default panel-col\">
  <div class=\"panel-heading\">
    自定义默认头像
  </div>

  <div class=\"panel-body\">

    <div class=\"form-group clearfix\">
      <div class=\"col-md-offset-2 col-md-8 controls\">
        <img src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath((isset($context["pictureUrl"]) ? $context["pictureUrl"] : null)), "html", null, true);
        echo "\" 
        id=\"default-avatar-crop\" 
        width=\"";
        // line 20
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
        id=\"upload-picture-btn\" 
        data-url=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("admin_setting_default_avatar_crop");
        echo "\"
        data-goto-url=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("admin_setting_avatar");
        echo "\"
        >保存</a>
        <a href=\"javascript:;\" class=\"go-back btn btn-link\">重新选择图片</a>
      </div>
    </div>

  </div>
</div>


";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System:default-avatar-crop.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 30,  72 => 29,  54 => 20,  49 => 18,  36 => 7,  33 => 6,  29 => 1,  27 => 4,  25 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaAdminBundle::layout.html.twig' %}*/
/* */
/* {% set menu = 'admin_user_avatar' %}*/
/* {% set script_controller = 'setting/default-avatar-crop' %}*/
/* */
/* {% block main %}*/
/* */
/* <meta http-equiv="pragma" content="no-cache" />*/
/* <div class="panel panel-default panel-col">*/
/*   <div class="panel-heading">*/
/*     自定义默认头像*/
/*   </div>*/
/* */
/*   <div class="panel-body">*/
/* */
/*     <div class="form-group clearfix">*/
/*       <div class="col-md-offset-2 col-md-8 controls">*/
/*         <img src="{{ filepath(pictureUrl) }}" */
/*         id="default-avatar-crop" */
/*         width="{{scaledSize.width}}" height="{{scaledSize.height}}" data-natural-width="{{ naturalSize.width }}" data-natural-height="{{ naturalSize.height }}" />*/
/*         <div class="help-block">提示：请选择图片裁剪区域。</div>*/
/*       </div>*/
/*     </div>*/
/* */
/*     <div class="form-group clearfix">*/
/*       <div class="col-md-offset-2 col-md-8 controls">*/
/*         <a class="btn btn-fat btn-primary" */
/*         id="upload-picture-btn" */
/*         data-url="{{path('admin_setting_default_avatar_crop')}}"*/
/*         data-goto-url="{{path('admin_setting_avatar')}}"*/
/*         >保存</a>*/
/*         <a href="javascript:;" class="go-back btn btn-link">重新选择图片</a>*/
/*       </div>*/
/*     </div>*/
/* */
/*   </div>*/
/* </div>*/
/* */
/* */
/* {% endblock %}*/
