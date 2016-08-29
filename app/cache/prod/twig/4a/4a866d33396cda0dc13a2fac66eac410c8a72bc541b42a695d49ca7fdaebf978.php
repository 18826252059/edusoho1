<?php

/* TopxiaAdminBundle:Article:aticle-picture-modal.html.twig */
class __TwigTemplate_bd81dbde1c2569ba58d505d6053cc873070f140db09481911e786a9e32029ac5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "TopxiaAdminBundle:Article:aticle-picture-modal.html.twig", 1);
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
        echo "设置资讯图片";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "
  <form id=\"aticel-picture-form\" class=\"form-horizontal\" method=\"post\" enctype=\"multipart/form-data\" action=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("admin_article_show_upload");
        echo "\">

    ";
        // line 10
        if ((isset($context["pictureUrl"]) ? $context["pictureUrl"] : null)) {
            // line 11
            echo "    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\"><b>资讯图片</b></div>
      <div class=\"controls col-md-8 controls\">
      \t<img src=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((isset($context["pictureUrl"]) ? $context["pictureUrl"] : null)), "html", null, true);
            echo "\" id=\"article-pic-crop\" width=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["scaledSize"]) ? $context["scaledSize"] : null), "width", array()), "html", null, true);
            echo "\" height=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["scaledSize"]) ? $context["scaledSize"] : null), "height", array()), "html", null, true);
            echo "\" data-natural-width=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["naturalSize"]) ? $context["naturalSize"] : null), "width", array()), "html", null, true);
            echo "\" data-natural-height=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["naturalSize"]) ? $context["naturalSize"] : null), "height", array()), "html", null, true);
            echo "\" />
      </div>
    </div>
    ";
        }
        // line 18
        echo "
    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
      </div>
      <div class=\"controls col-md-8 controls\">
        <p class=\"help-block\">你可以上传JPG、GIF或PNG格式的文件,推荐尺寸754*424px,文件大小不能超过<strong>2M</strong>。</p>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\"></div>
      <div class=\"controls col-md-8 controls\">
        <a id=\"article-upload-btn\" 
        data-goto-url=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("admin_article_picture_crop");
        echo "\" 
        data-upload-token=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->makeUpoadToken("tmp", "image"), "html", null, true);
        echo "\"
        class=\"btn btn-primary\">选择上传的文件</a>
        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
      </div>
    </div>

  </form>

";
    }

    // line 43
    public function block_footer($context, array $blocks = array())
    {
        // line 44
        echo "  <button type=\"button\" class=\"btn btn-link pull-right\" data-dismiss=\"modal\">取消</button>
  <script>app.load('article/picture-upload-modal')</script>
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Article:aticle-picture-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 44,  107 => 43,  96 => 34,  91 => 32,  87 => 31,  72 => 18,  57 => 14,  52 => 11,  50 => 10,  45 => 8,  42 => 7,  39 => 6,  33 => 5,  29 => 1,  27 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::bootstrap-modal-layout.html.twig' %}*/
/* */
/* {% set modal_class = 'modal-lg' %}*/
/* */
/* {% block title %}设置资讯图片{% endblock %}*/
/* {% block body %}*/
/* */
/*   <form id="aticel-picture-form" class="form-horizontal" method="post" enctype="multipart/form-data" action="{{ path('admin_article_show_upload') }}">*/
/* */
/*     {% if pictureUrl %}*/
/*     <div class="form-group">*/
/*       <div class="col-md-2 control-label"><b>资讯图片</b></div>*/
/*       <div class="controls col-md-8 controls">*/
/*       	<img src="{{ asset(pictureUrl) }}" id="article-pic-crop" width="{{scaledSize.width}}" height="{{scaledSize.height}}" data-natural-width="{{ naturalSize.width }}" data-natural-height="{{ naturalSize.height }}" />*/
/*       </div>*/
/*     </div>*/
/*     {% endif %}*/
/* */
/*     <div class="form-group">*/
/*       <div class="col-md-2 control-label">*/
/*       </div>*/
/*       <div class="controls col-md-8 controls">*/
/*         <p class="help-block">你可以上传JPG、GIF或PNG格式的文件,推荐尺寸754*424px,文件大小不能超过<strong>2M</strong>。</p>*/
/*       </div>*/
/*     </div>*/
/* */
/*     <div class="form-group">*/
/*       <div class="col-md-2 control-label"></div>*/
/*       <div class="controls col-md-8 controls">*/
/*         <a id="article-upload-btn" */
/*         data-goto-url="{{ path('admin_article_picture_crop') }}" */
/*         data-upload-token="{{ upload_token('tmp', 'image') }}"*/
/*         class="btn btn-primary">选择上传的文件</a>*/
/*         <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/*       </div>*/
/*     </div>*/
/* */
/*   </form>*/
/* */
/* {% endblock %}*/
/* */
/* */
/* {% block footer %}*/
/*   <button type="button" class="btn btn-link pull-right" data-dismiss="modal">取消</button>*/
/*   <script>app.load('article/picture-upload-modal')</script>*/
/* {% endblock %}*/
