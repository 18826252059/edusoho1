<?php

/* TopxiaAdminBundle:Article:article-picture-crop-modal.html.twig */
class __TwigTemplate_7d1ab70ecaf23d4bdd8fcc54d20aa57ce236dc81a1f6a3f8d108af4b33c3da4a extends Twig_Template
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
        echo "<div class=\"modal-dialog modal-lg\">
  <div class=\"modal-content\">
    <div class=\"modal-header\">
      <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
      <h4 class=\"modal-title\">设置资讯图片</h4>
    </div>
    <div class=\"modal-body\">

    <form id=\"article-pic-crop-form\" method=\"post\" >
     
      <div class=\"form-group clearfix\">
        <div class=\"col-md-offset-2 col-md-8 controls\">
          <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath((isset($context["pictureUrl"]) ? $context["pictureUrl"] : null)), "html", null, true);
        echo "\" id=\"article-pic-crop\"
           width=\"";
        // line 14
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
          id=\"upload-picture-crop-btn\" 
          data-goto=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("admin_article_show_upload");
        echo "\"
          data-goto-url=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("admin_article_picture_crop");
        echo "\">保存</a>
        </div>
      </div>

    </form>
</div>
          <div class=\"modal-footer\">  <button type=\"button\" class=\"btn btn-link pull-right\" data-dismiss=\"modal\">取消</button>
  <script>app.load('article/picture-crop-modal')</script>
</div>
      </div>
</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Article:article-picture-crop-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 24,  55 => 23,  37 => 14,  33 => 13,  19 => 1,);
    }
}
/* <div class="modal-dialog modal-lg">*/
/*   <div class="modal-content">*/
/*     <div class="modal-header">*/
/*       <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>*/
/*       <h4 class="modal-title">设置资讯图片</h4>*/
/*     </div>*/
/*     <div class="modal-body">*/
/* */
/*     <form id="article-pic-crop-form" method="post" >*/
/*      */
/*       <div class="form-group clearfix">*/
/*         <div class="col-md-offset-2 col-md-8 controls">*/
/*           <img src="{{ filepath(pictureUrl) }}" id="article-pic-crop"*/
/*            width="{{scaledSize.width}}" height="{{scaledSize.height}}" data-natural-width="{{ naturalSize.width }}" data-natural-height="{{ naturalSize.height }}" />*/
/*           <div class="help-block">提示：请选择图片裁剪区域。</div>*/
/*         </div>*/
/*       </div>*/
/* */
/*       <div class="form-group clearfix">*/
/*         <div class="col-md-offset-2 col-md-8 controls">*/
/*           <a class="btn btn-fat btn-primary" */
/*           id="upload-picture-crop-btn" */
/*           data-goto="{{ path('admin_article_show_upload')}}"*/
/*           data-goto-url="{{ path('admin_article_picture_crop')}}">保存</a>*/
/*         </div>*/
/*       </div>*/
/* */
/*     </form>*/
/* </div>*/
/*           <div class="modal-footer">  <button type="button" class="btn btn-link pull-right" data-dismiss="modal">取消</button>*/
/*   <script>app.load('article/picture-crop-modal')</script>*/
/* </div>*/
/*       </div>*/
/* </div>*/
