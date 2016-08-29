<?php

/* TopxiaAdminBundle:User:user-avatar-modal.html.twig */
class __TwigTemplate_130dc51053ae6523e8b6c7c77d9ca769bce0b9f0466769c4edd9b64bd79911cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "TopxiaAdminBundle:User:user-avatar-modal.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::bootstrap-modal-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["modal_class"] = "modal-lg";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "设置用户头像";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "
  <form id=\"user-avatar-form\" class=\"form-horizontal\" method=\"post\" enctype=\"multipart/form-data\" action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_avatar", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
        echo "\">

    ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\"><b>当前头像</b></div>
      <div class=\"controls col-md-8 controls\">
      \t<img src=\"";
        // line 15
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
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->makeUpoadToken("tmp", "image"), "html", null, true);
        echo "\"
        data-goto-url=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_avatar_crop", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
        echo "\"
        >上传新头像</a>
        
      </div>
    </div>

    ";
        // line 39
        if ((isset($context["partnerAvatar"]) ? $context["partnerAvatar"] : null)) {
            // line 40
            echo "      <div class=\"form-group\">
        <div class=\"col-md-2 control-label\"><b>论坛头像</b></div>
        <div class=\"controls col-md-8 controls\">
          <img src=\"";
            // line 43
            echo twig_escape_filter($this->env, (isset($context["partnerAvatar"]) ? $context["partnerAvatar"] : null), "html", null, true);
            echo "\" class=\"mrm\">
          <button class=\"btn btn-default use-partner-avatar\" type=\"button\" data-url=\"";
            // line 44
            echo $this->env->getExtension('routing')->getPath("settings_avatar_fetch_partner");
            echo "\" data-goto=\"";
            echo $this->env->getExtension('routing')->getPath("settings_avatar");
            echo "\">使用该头像</button>
        </div>
      </div>
    ";
        }
        // line 48
        echo "
  </form>

";
    }

    // line 54
    public function block_footer($context, array $blocks = array())
    {
        // line 55
        echo "  <button type=\"button\" class=\"btn btn-link pull-right\" data-dismiss=\"modal\">关闭</button>
  <script>app.load('user/avatar-modal')</script>
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:User:user-avatar-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 55,  118 => 54,  111 => 48,  102 => 44,  98 => 43,  93 => 40,  91 => 39,  82 => 33,  78 => 32,  58 => 15,  50 => 10,  45 => 8,  42 => 7,  39 => 6,  33 => 5,  29 => 1,  27 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::bootstrap-modal-layout.html.twig' %}*/
/* */
/* {% set modal_class = 'modal-lg' %}*/
/* */
/* {% block title %}设置用户头像{% endblock %}*/
/* {% block body %}*/
/* */
/*   <form id="user-avatar-form" class="form-horizontal" method="post" enctype="multipart/form-data" action="{{ path('admin_user_avatar', {id:user.id}) }}">*/
/* */
/*     {{ web_macro.flash_messages() }}*/
/* */
/*     <div class="form-group">*/
/*       <div class="col-md-2 control-label"><b>当前头像</b></div>*/
/*       <div class="controls col-md-8 controls">*/
/*       	<img src="{{ filepath(user.largeAvatar, 'avatar.png') }}">*/
/*       </div>*/
/*     </div>*/
/* */
/*     <div class="form-group">*/
/*       <div class="col-md-2 control-label">*/
/*       </div>*/
/*       <div class="controls col-md-8 controls">*/
/*         <p class="help-block">你可以上传JPG、GIF或PNG格式的文件，文件大小不能超过<strong>2M</strong>。</p>*/
/*       </div>*/
/*     </div>*/
/* */
/*     <div class="form-group">*/
/*       <div class="col-md-2 control-label"></div>*/
/*       <div class="controls col-md-8 controls">*/
/*         <a id="upload-picture-btn" */
/*         class="btn btn-primary"*/
/*         data-upload-token="{{ upload_token('tmp', 'image') }}"*/
/*         data-goto-url="{{ path('admin_user_avatar_crop', {id:user.id}) }}"*/
/*         >上传新头像</a>*/
/*         */
/*       </div>*/
/*     </div>*/
/* */
/*     {% if partnerAvatar %}*/
/*       <div class="form-group">*/
/*         <div class="col-md-2 control-label"><b>论坛头像</b></div>*/
/*         <div class="controls col-md-8 controls">*/
/*           <img src="{{ partnerAvatar }}" class="mrm">*/
/*           <button class="btn btn-default use-partner-avatar" type="button" data-url="{{ path('settings_avatar_fetch_partner') }}" data-goto="{{ path('settings_avatar') }}">使用该头像</button>*/
/*         </div>*/
/*       </div>*/
/*     {% endif %}*/
/* */
/*   </form>*/
/* */
/* {% endblock %}*/
/* */
/* */
/* {% block footer %}*/
/*   <button type="button" class="btn btn-link pull-right" data-dismiss="modal">关闭</button>*/
/*   <script>app.load('user/avatar-modal')</script>*/
/* {% endblock %}*/
