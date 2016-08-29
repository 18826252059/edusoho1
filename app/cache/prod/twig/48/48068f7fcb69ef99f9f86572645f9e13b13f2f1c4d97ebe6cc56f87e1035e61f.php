<?php

/* TopxiaAdminBundle:User:user-avatar-crop-modal.html.twig */
class __TwigTemplate_f58554bb7b0b64bc7f411042a978b55a810bc1fbd43791aed3dee12a77a9e424 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "

<div class=\"modal-dialog modal-lg\">
  <div class=\"modal-content\">
    <div class=\"modal-header\">
      <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
      <h4 class=\"modal-title\">头像设置</h4>
    </div>
    <div class=\"modal-body\">

    <form id=\"avatar-crop-form\" method=\"post\" action=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_avatar_crop", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
        echo "\" >
     
      <div class=\"form-group clearfix\">
        <div class=\"col-md-offset-2 col-md-8 controls\">
          <img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath((isset($context["pictureUrl"]) ? $context["pictureUrl"] : null)), "html", null, true);
        echo "\" id=\"avatar-crop\" width=\"";
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
          id=\"upload-avatar-btn\" 
          data-url=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_avatar_crop", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
        echo "\"
          data-goto-url=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_avatar", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
        echo "\"
          >保存</a>
        </div>
      </div>

      <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
      
    </form>



</div>
          <div class=\"modal-footer\">  <button type=\"button\" class=\"btn btn-link pull-right\" data-dismiss=\"modal\">关闭</button>
  <script>app.load('user/avatar-crop-modal')</script>
</div>
      </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:User:user-avatar-crop-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 30,  62 => 25,  58 => 24,  38 => 15,  31 => 11,  19 => 1,);
    }
}
/* */
/* */
/* <div class="modal-dialog modal-lg">*/
/*   <div class="modal-content">*/
/*     <div class="modal-header">*/
/*       <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>*/
/*       <h4 class="modal-title">头像设置</h4>*/
/*     </div>*/
/*     <div class="modal-body">*/
/* */
/*     <form id="avatar-crop-form" method="post" action="{{ path('admin_user_avatar_crop', {id:user.id}) }}" >*/
/*      */
/*       <div class="form-group clearfix">*/
/*         <div class="col-md-offset-2 col-md-8 controls">*/
/*           <img src="{{ filepath(pictureUrl) }}" id="avatar-crop" width="{{scaledSize.width}}" height="{{scaledSize.height}}" data-natural-width="{{ naturalSize.width }}" data-natural-height="{{ naturalSize.height }}" />*/
/*           <div class="help-block">提示：请选择图片裁剪区域。</div>*/
/*         </div>*/
/*       </div>*/
/* */
/*       <div class="form-group clearfix">*/
/*         <div class="col-md-offset-2 col-md-8 controls">*/
/*           <a class="btn btn-fat btn-primary" */
/*           id="upload-avatar-btn" */
/*           data-url="{{path('admin_user_avatar_crop', {id: user.id})}}"*/
/*           data-goto-url="{{path('admin_user_avatar', {id: user.id})}}"*/
/*           >保存</a>*/
/*         </div>*/
/*       </div>*/
/* */
/*       <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/*       */
/*     </form>*/
/* */
/* */
/* */
/* </div>*/
/*           <div class="modal-footer">  <button type="button" class="btn btn-link pull-right" data-dismiss="modal">关闭</button>*/
/*   <script>app.load('user/avatar-crop-modal')</script>*/
/* </div>*/
/*       </div>*/
/* </div>*/
/* */
