<?php

/* ClassroomBundle:ClassroomManage:set-picture.html.twig */
class __TwigTemplate_43d8a7c1668f736e3248d060ce34830d2b90b590cbd282fba2e8b1863381832d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ClassroomBundle:ClassroomManage:layout.html.twig", "ClassroomBundle:ClassroomManage:set-picture.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ClassroomBundle:ClassroomManage:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["side_nav"] = "picture";
        // line 4
        $context["script_controller"] = "classroombundle/controller/classroom/picture";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "封面图片 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 8
    public function block_main($context, array $blocks = array())
    {
        // line 9
        echo "
<div class=\"panel panel-default panel-col\">
  <div class=\"panel-heading\">封面图片</div>
  <div class=\"panel-body\">
    ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "
    <form id=\"classroom-picture-form\" method=\"post\" enctype=\"multipart/form-data\">
      <div class=\"form-group clearfix\">
        <div class=\"col-md-offset-2 col-md-8 controls\">
          <img class=\"img-responsive\" src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "largePicture", array()), "classroom.png"), "html", null, true);
        echo "\" />
        </div>
      </div>

      <div class=\"form-group clearfix\">
        <div class=\"col-md-offset-2 col-md-8 controls\">
          <p class=\"help-block\">你可以上传jpg, gif, png格式的文件, 图片建议尺寸至少为525x350。<br>文件大小不能超过<strong>2M</strong>。</p>

        </div>
      </div>

      <div class=\"form-group clearfix\">
        <div class=\"col-md-offset-2 col-md-8 controls\">
          <a class=\"btn btn-fat btn-primary\" id=\"upload-picture-btn\" 
          data-upload-token=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->makeUpoadToken("tmp", "image"), "html", null, true);
        echo "\"
          data-goto-url=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_manage_picture_crop", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
        echo "\"
          >上传新图片</a>
        </div>
      </div>

      <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
      
    </form>
  </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:ClassroomManage:set-picture.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 37,  78 => 32,  74 => 31,  57 => 17,  50 => 13,  44 => 9,  41 => 8,  34 => 6,  30 => 1,  28 => 4,  26 => 3,  11 => 1,);
    }
}
/* {% extends 'ClassroomBundle:ClassroomManage:layout.html.twig' %}*/
/* */
/* {% set side_nav = 'picture' %}*/
/* {% set script_controller = 'classroombundle/controller/classroom/picture' %}*/
/* */
/* {% block title %}封面图片 - {{ parent() }}{% endblock %}*/
/* */
/* {% block main %}*/
/* */
/* <div class="panel panel-default panel-col">*/
/*   <div class="panel-heading">封面图片</div>*/
/*   <div class="panel-body">*/
/*     {{ web_macro.flash_messages() }}*/
/*     <form id="classroom-picture-form" method="post" enctype="multipart/form-data">*/
/*       <div class="form-group clearfix">*/
/*         <div class="col-md-offset-2 col-md-8 controls">*/
/*           <img class="img-responsive" src="{{ filepath(classroom.largePicture, 'classroom.png') }}" />*/
/*         </div>*/
/*       </div>*/
/* */
/*       <div class="form-group clearfix">*/
/*         <div class="col-md-offset-2 col-md-8 controls">*/
/*           <p class="help-block">你可以上传jpg, gif, png格式的文件, 图片建议尺寸至少为525x350。<br>文件大小不能超过<strong>2M</strong>。</p>*/
/* */
/*         </div>*/
/*       </div>*/
/* */
/*       <div class="form-group clearfix">*/
/*         <div class="col-md-offset-2 col-md-8 controls">*/
/*           <a class="btn btn-fat btn-primary" id="upload-picture-btn" */
/*           data-upload-token="{{ upload_token('tmp', 'image') }}"*/
/*           data-goto-url="{{path('classroom_manage_picture_crop', {id:classroom.id})}}"*/
/*           >上传新图片</a>*/
/*         </div>*/
/*       </div>*/
/* */
/*       <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/*       */
/*     </form>*/
/*   </div>*/
/* </div>*/
/* */
/* {% endblock %}*/
/* */
