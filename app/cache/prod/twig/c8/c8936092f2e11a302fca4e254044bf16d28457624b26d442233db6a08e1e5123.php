<?php

/* TopxiaWebBundle:Group:setting-background.html.twig */
class __TwigTemplate_7bbbc47471417def8215ea3c00bfd8d41521b8fbedb7dece360689940513f9b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:Group:setting-layout.html.twig", "TopxiaWebBundle:Group:setting-background.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'group_setting_body' => array($this, 'block_group_setting_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:Group:setting-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["script_controller"] = "group/group_logo";
        // line 7
        $context["settingNav"] = "background";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["groupinfo"]) ? $context["groupinfo"] : null), "title", array()), "html", null, true);
        echo "小组 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 9
    public function block_group_setting_body($context, array $blocks = array())
    {
        // line 10
        echo "
<form id=\"group-avatar-form\" class=\"form-horizontal\" method=\"post\" enctype=\"multipart/form-data\" action=\"\"> 

  <div class=\"form-group\">
    <label class=\"col-md-2 control-label\">当前背景</label>
    <div class=\"controls col-md-8\">
      <img class=\"img-responsive\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath((isset($context["logo"]) ? $context["logo"] : null), "background_group.jpg"), "html", null, true);
        echo "\" >
    </div>
  </div>

  <div class=\"form-group\">
    <label class=\"col-md-2 control-label\" for=\"form_avatar\"></label>
    <div class=\"controls col-md-8\">
      <p class=\"help-block\">你可以上传JPG、GIF或PNG格式的文件，文件大小不能超过<strong>2M</strong>。推荐大小（1140*150）</p>
    </div>
  </div>

  <div class=\"form-group\">
    <div class=\"controls col-md-8 col-md-offset-2\">
      <a id=\"group-save-btn\" 
      data-upload-token=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->makeUpoadToken("tmp", "image"), "html", null, true);
        echo "\"
      data-goto-url=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_setLogoCrop", array("id" => (isset($context["id"]) ? $context["id"] : null), "page" => "backGroundLogoCrop")), "html", null, true);
        echo "\"
      data-submiting-text=\"正在上传\" class=\"btn btn-primary\">上传新背景</a>
    </div>
  </div>

</form>

";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Group:setting-background.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 31,  70 => 30,  53 => 16,  45 => 10,  42 => 9,  34 => 5,  30 => 1,  28 => 7,  26 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle:Group:setting-layout.html.twig' %}*/
/* */
/* {% set script_controller = 'group/group_logo' %}*/
/* */
/* {% block title %}{{groupinfo.title}}小组 - {{ parent() }}{% endblock %}*/
/* */
/* {% set settingNav = 'background' %}*/
/* */
/* {% block group_setting_body %}*/
/* */
/* <form id="group-avatar-form" class="form-horizontal" method="post" enctype="multipart/form-data" action=""> */
/* */
/*   <div class="form-group">*/
/*     <label class="col-md-2 control-label">当前背景</label>*/
/*     <div class="controls col-md-8">*/
/*       <img class="img-responsive" src="{{filepath(logo, 'background_group.jpg')}}" >*/
/*     </div>*/
/*   </div>*/
/* */
/*   <div class="form-group">*/
/*     <label class="col-md-2 control-label" for="form_avatar"></label>*/
/*     <div class="controls col-md-8">*/
/*       <p class="help-block">你可以上传JPG、GIF或PNG格式的文件，文件大小不能超过<strong>2M</strong>。推荐大小（1140*150）</p>*/
/*     </div>*/
/*   </div>*/
/* */
/*   <div class="form-group">*/
/*     <div class="controls col-md-8 col-md-offset-2">*/
/*       <a id="group-save-btn" */
/*       data-upload-token="{{ upload_token('tmp', 'image') }}"*/
/*       data-goto-url="{{path('group_setLogoCrop', {id: id, page:'backGroundLogoCrop'})}}"*/
/*       data-submiting-text="正在上传" class="btn btn-primary">上传新背景</a>*/
/*     </div>*/
/*   </div>*/
/* */
/* </form>*/
/* */
/* {% endblock %}*/
