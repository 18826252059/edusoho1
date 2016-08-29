<?php

/* TopxiaWebBundle:Group:setting-logo-crop.html.twig */
class __TwigTemplate_2001791751ce04c05be31aa242255c81fa714ef252d7f2aaf22adc07f32dd16d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:Group:setting-layout.html.twig", "TopxiaWebBundle:Group:setting-logo-crop.html.twig", 1);
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
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "page"), "method") == "logoCrop")) {
            // line 4
            $context["script_controller"] = "group/group_logo_crop";
            // line 5
            $context["settingNav"] = "logo";
        }
        // line 8
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "page"), "method") == "backGroundLogoCrop")) {
            // line 9
            $context["script_controller"] = "group/group_backgroundlogo_crop";
            // line 10
            $context["settingNav"] = "background";
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["groupinfo"]) ? $context["groupinfo"] : null), "title", array()), "html", null, true);
        echo "小组 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 15
    public function block_group_setting_body($context, array $blocks = array())
    {
        // line 16
        echo "
  <div class=\"form-group clearfix\">
    <div class=\"col-md-offset-2 col-md-8 controls\">
      <img class=\"img-responsive\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath((isset($context["pictureUrl"]) ? $context["pictureUrl"] : null)), "html", null, true);
        echo "\" 
      id=\"logo-crop\" 
      width=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["scaledSize"]) ? $context["scaledSize"] : null), "width", array()), "html", null, true);
        echo "\" height=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["scaledSize"]) ? $context["scaledSize"] : null), "height", array()), "html", null, true);
        echo "\" data-natural-width=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["naturalSize"]) ? $context["naturalSize"] : null), "width", array()), "html", null, true);
        echo "\" data-natural-height=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["naturalSize"]) ? $context["naturalSize"] : null), "height", array()), "html", null, true);
        echo "\"/>
      <div class=\"help-block\">提示：请选择图片裁剪区域。</div>
    </div>
  </div>
  <div class=\"form-group clearfix\">
    <div class=\"col-md-offset-2 col-md-8 controls\">
      <a class=\"btn btn-fat btn-primary\" 
      id=\"upload-picture-btn\" 
      ";
        // line 29
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "page"), "method") == "backGroundLogoCrop")) {
            // line 30
            echo "      data-reload-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_backgroundlogo_set", array("id" => $this->getAttribute((isset($context["groupinfo"]) ? $context["groupinfo"] : null), "id", array()))), "html", null, true);
            echo "\"
      ";
        } elseif (($this->getAttribute($this->getAttribute(        // line 31
(isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "page"), "method") == "logoCrop")) {
            // line 32
            echo "      data-reload-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_logo_set", array("id" => $this->getAttribute((isset($context["groupinfo"]) ? $context["groupinfo"] : null), "id", array()))), "html", null, true);
            echo "\"
      ";
        }
        // line 34
        echo "      >保存</a>
    </div>
  </div>
  

";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Group:setting-logo-crop.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 34,  91 => 32,  89 => 31,  84 => 30,  82 => 29,  65 => 21,  60 => 19,  55 => 16,  52 => 15,  44 => 13,  40 => 1,  37 => 10,  35 => 9,  33 => 8,  30 => 5,  28 => 4,  26 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle:Group:setting-layout.html.twig' %}*/
/* */
/* {% if app.request.get('page')=='logoCrop' %}*/
/*   {% set script_controller = 'group/group_logo_crop' %}*/
/*   {% set settingNav = 'logo' %}*/
/* {% endif %}*/
/* */
/* {% if app.request.get('page')=='backGroundLogoCrop' %}*/
/*   {% set script_controller = 'group/group_backgroundlogo_crop' %}*/
/*   {% set settingNav = 'background' %}*/
/* {% endif %}*/
/* */
/* {% block title %}{{groupinfo.title}}小组 - {{ parent() }}{% endblock %}*/
/* */
/* {% block group_setting_body %}*/
/* */
/*   <div class="form-group clearfix">*/
/*     <div class="col-md-offset-2 col-md-8 controls">*/
/*       <img class="img-responsive" src="{{ filepath(pictureUrl) }}" */
/*       id="logo-crop" */
/*       width="{{scaledSize.width}}" height="{{scaledSize.height}}" data-natural-width="{{ naturalSize.width }}" data-natural-height="{{ naturalSize.height }}"/>*/
/*       <div class="help-block">提示：请选择图片裁剪区域。</div>*/
/*     </div>*/
/*   </div>*/
/*   <div class="form-group clearfix">*/
/*     <div class="col-md-offset-2 col-md-8 controls">*/
/*       <a class="btn btn-fat btn-primary" */
/*       id="upload-picture-btn" */
/*       {% if app.request.get('page')=='backGroundLogoCrop' %}*/
/*       data-reload-url="{{path('group_backgroundlogo_set',{id:groupinfo.id})}}"*/
/*       {% elseif app.request.get('page')=='logoCrop' %}*/
/*       data-reload-url="{{path('group_logo_set',{id:groupinfo.id})}}"*/
/*       {% endif %}*/
/*       >保存</a>*/
/*     </div>*/
/*   </div>*/
/*   */
/* */
/* {% endblock %}*/
