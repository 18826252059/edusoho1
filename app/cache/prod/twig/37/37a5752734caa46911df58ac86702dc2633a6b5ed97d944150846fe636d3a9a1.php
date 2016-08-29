<?php

/* TopxiaWebBundle:Group:setting-logo.html.twig */
class __TwigTemplate_6e6c163c60a9fc57408f31768e859722d3105d859bf6c59c41c6c02ffa28139a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:Group:setting-layout.html.twig", "TopxiaWebBundle:Group:setting-logo.html.twig", 1);
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
        $context["settingNav"] = "logo";
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
        echo "  <form class=\"form-horizontal\">
    <div class=\"form-group\">
      <label class=\"col-md-2 control-label\">当前图标</label>
      <div class=\"controls col-md-8 controls\">
        <img class=\"avatar-square-md\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath((isset($context["logo"]) ? $context["logo"] : null), "group.png"), "html", null, true);
        echo "\">
      </div>
    </div>
    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
      </div>
      <div class=\"controls col-md-8 controls\">
        <p class=\"help-block\">你可以上传JPG、GIF或PNG格式的文件，文件大小不能超过<strong>2M</strong>。推荐大小（180*180）</p>
      </div>
    </div>
    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\"></div>
      <div class=\"controls col-md-8 controls\">
        <a id=\"group-save-btn\" 
        data-upload-token=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->makeUpoadToken("tmp", "image"), "html", null, true);
        echo "\"
        data-goto-url=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_setLogoCrop", array("id" => (isset($context["id"]) ? $context["id"] : null), "page" => "logoCrop")), "html", null, true);
        echo "\"
        class=\"btn btn-primary\">上传新图标</a>
      </div>
    </div>
  </form>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Group:setting-logo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 29,  68 => 28,  51 => 14,  45 => 10,  42 => 9,  34 => 5,  30 => 1,  28 => 7,  26 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle:Group:setting-layout.html.twig' %}*/
/* */
/* {% set script_controller = 'group/group_logo' %}*/
/* */
/* {% block title %}{{groupinfo.title}}小组 - {{ parent() }}{% endblock %}*/
/* */
/* {% set settingNav = 'logo' %}*/
/* */
/* {% block group_setting_body %}*/
/*   <form class="form-horizontal">*/
/*     <div class="form-group">*/
/*       <label class="col-md-2 control-label">当前图标</label>*/
/*       <div class="controls col-md-8 controls">*/
/*         <img class="avatar-square-md" src="{{ filepath(logo, 'group.png')}}">*/
/*       </div>*/
/*     </div>*/
/*     <div class="form-group">*/
/*       <div class="col-md-2 control-label">*/
/*       </div>*/
/*       <div class="controls col-md-8 controls">*/
/*         <p class="help-block">你可以上传JPG、GIF或PNG格式的文件，文件大小不能超过<strong>2M</strong>。推荐大小（180*180）</p>*/
/*       </div>*/
/*     </div>*/
/*     <div class="form-group">*/
/*       <div class="col-md-2 control-label"></div>*/
/*       <div class="controls col-md-8 controls">*/
/*         <a id="group-save-btn" */
/*         data-upload-token="{{ upload_token('tmp', 'image') }}"*/
/*         data-goto-url="{{path('group_setLogoCrop', {id: id, page:'logoCrop'})}}"*/
/*         class="btn btn-primary">上传新图标</a>*/
/*       </div>*/
/*     </div>*/
/*   </form>*/
/* {% endblock %}*/
