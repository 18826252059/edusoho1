<?php

/* TopxiaWebBundle:Settings:avatar.html.twig */
class __TwigTemplate_8d29f5626f30cc29b173c486cbc0374cc2f5b6673d00b52a8ac41d7f1331d079 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:Settings:layout.html.twig", "TopxiaWebBundle:Settings:avatar.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:Settings:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 4
        $context["side_nav"] = "avatar";
        // line 5
        $context["script_controller"] = "settings/avatar";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "头像 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "  ";
        $this->loadTemplate("TopxiaWebBundle:Settings:avatar.html.twig", "TopxiaWebBundle:Settings:avatar.html.twig", 8, "2010880928")->display(array_merge($context, array("class" => "panel-col")));
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Settings:avatar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 8,  41 => 7,  34 => 3,  30 => 1,  28 => 5,  26 => 4,  11 => 1,);
    }
}


/* TopxiaWebBundle:Settings:avatar.html.twig */
class __TwigTemplate_8d29f5626f30cc29b173c486cbc0374cc2f5b6673d00b52a8ac41d7f1331d079_2010880928 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("TopxiaWebBundle:Bootstrap:panel.html.twig", "TopxiaWebBundle:Settings:avatar.html.twig", 8);
        $this->blocks = array(
            'heading' => array($this, 'block_heading'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:Bootstrap:panel.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_heading($context, array $blocks = array())
    {
        echo "头像";
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        // line 11
        echo "      
      ";
        // line 12
        if ((isset($context["fromCourse"]) ? $context["fromCourse"] : null)) {
            // line 13
            echo "      <div class=\"alert alert-info\">请设置自定义头像。</div>
      ";
        }
        // line 15
        echo "
      <form id=\"settings-avatar-form\" class=\"form-horizontal\" method=\"post\">

        ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "

        <div class=\"form-group\">
          <div class=\"col-md-2 control-label\"><b>当前头像</b></div>
          <div class=\"controls col-md-8 controls\">
          \t<img src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "largeAvatar", array()), "avatar.png"), "html", null, true);
        echo "\">
          </div>
        </div>

        <div class=\"form-group\">
          <div class=\"col-md-2 control-label\">
          </div>
          <div class=\"controls col-md-8 controls\">
            <p class=\"help-block\">你可以上传JPG、GIF或PNG格式的文件，文件大小不能超过<strong>2M</strong>。</p>
          </div>
        </div>

        <div class=\"form-group\">
          <div class=\"col-md-2 control-label\"></div>
          <div class=\"controls col-md-8 controls\">
            <a id=\"upload-picture-btn\" 
            class=\"btn btn-primary\"
            data-upload-token=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->makeUpoadToken("tmp", "image"), "html", null, true);
        echo "\"
            data-goto-url=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("settings_avatar_crop");
        echo "\"
            >上传新头像</a>
          </div>
        </div>

        ";
        // line 46
        if ((isset($context["partnerAvatar"]) ? $context["partnerAvatar"] : null)) {
            // line 47
            echo "          <div class=\"form-group\">
            <div class=\"col-md-2 control-label\"><b>论坛头像</b></div>
            <div class=\"controls col-md-8 controls\">
              <img src=\"";
            // line 50
            echo twig_escape_filter($this->env, (isset($context["partnerAvatar"]) ? $context["partnerAvatar"] : null), "html", null, true);
            echo "\" class=\"mrm\">
              <button class=\"btn btn-default use-partner-avatar\" type=\"button\" data-url=\"";
            // line 51
            echo $this->env->getExtension('routing')->getPath("settings_avatar_fetch_partner");
            echo "\" data-goto=\"";
            echo $this->env->getExtension('routing')->getPath("settings_avatar");
            echo "\" data-img-url=\"";
            echo twig_escape_filter($this->env, (isset($context["partnerAvatar"]) ? $context["partnerAvatar"] : null), "html", null, true);
            echo "\" >使用该头像</button>
            </div>
          </div>
        ";
        }
        // line 55
        echo "
      </form>

    ";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Settings:avatar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 55,  164 => 51,  160 => 50,  155 => 47,  153 => 46,  145 => 41,  141 => 40,  121 => 23,  113 => 18,  108 => 15,  104 => 13,  102 => 12,  99 => 11,  96 => 10,  90 => 9,  44 => 8,  41 => 7,  34 => 3,  30 => 1,  28 => 5,  26 => 4,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle:Settings:layout.html.twig' %}*/
/* */
/* {% block title %}头像 - {{ parent() }}{% endblock %}*/
/* {% set side_nav = 'avatar' %}*/
/* {% set script_controller = 'settings/avatar' %}*/
/* */
/* {% block main %}*/
/*   {% embed "TopxiaWebBundle:Bootstrap:panel.html.twig" with {class:'panel-col'} %}*/
/*     {% block heading %}头像{% endblock %}*/
/*     {% block body %}*/
/*       */
/*       {% if fromCourse %}*/
/*       <div class="alert alert-info">请设置自定义头像。</div>*/
/*       {% endif %}*/
/* */
/*       <form id="settings-avatar-form" class="form-horizontal" method="post">*/
/* */
/*         {{ web_macro.flash_messages() }}*/
/* */
/*         <div class="form-group">*/
/*           <div class="col-md-2 control-label"><b>当前头像</b></div>*/
/*           <div class="controls col-md-8 controls">*/
/*           	<img src="{{ filepath(user.largeAvatar, 'avatar.png') }}">*/
/*           </div>*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*           <div class="col-md-2 control-label">*/
/*           </div>*/
/*           <div class="controls col-md-8 controls">*/
/*             <p class="help-block">你可以上传JPG、GIF或PNG格式的文件，文件大小不能超过<strong>2M</strong>。</p>*/
/*           </div>*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*           <div class="col-md-2 control-label"></div>*/
/*           <div class="controls col-md-8 controls">*/
/*             <a id="upload-picture-btn" */
/*             class="btn btn-primary"*/
/*             data-upload-token="{{ upload_token('tmp', 'image') }}"*/
/*             data-goto-url="{{path('settings_avatar_crop')}}"*/
/*             >上传新头像</a>*/
/*           </div>*/
/*         </div>*/
/* */
/*         {% if partnerAvatar %}*/
/*           <div class="form-group">*/
/*             <div class="col-md-2 control-label"><b>论坛头像</b></div>*/
/*             <div class="controls col-md-8 controls">*/
/*               <img src="{{ partnerAvatar }}" class="mrm">*/
/*               <button class="btn btn-default use-partner-avatar" type="button" data-url="{{ path('settings_avatar_fetch_partner') }}" data-goto="{{ path('settings_avatar') }}" data-img-url="{{ partnerAvatar }}" >使用该头像</button>*/
/*             </div>*/
/*           </div>*/
/*         {% endif %}*/
/* */
/*       </form>*/
/* */
/*     {% endblock %}*/
/*   {% endembed %}*/
/* {% endblock %}*/
