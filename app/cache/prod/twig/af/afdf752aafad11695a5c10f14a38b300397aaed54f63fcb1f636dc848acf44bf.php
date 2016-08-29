<?php

/* TopxiaWebBundle:CourseManage:picture.html.twig */
class __TwigTemplate_6d9f75b3f2eca2235a6b4333b744fd7a35f4432f30e995631934e1c7298f1a36 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:CourseManage:layout.html.twig", "TopxiaWebBundle:CourseManage:picture.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:CourseManage:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["side_nav"] = "picture";
        // line 6
        $context["script_controller"] = "course-manage/picture";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "课程图片 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "
<div class=\"panel panel-default panel-col\">
  <div class=\"panel-heading\">
    课程图片
  </div>

  <div class=\"panel-body\">
      ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "

      <div class=\"form-group clearfix\">
        <div class=\"col-md-offset-2 col-md-8 controls\">
          <img class=\"img-responsive\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "largePicture", array()), "course.png"), "html", null, true);
        echo "\" />
        </div>
      </div>

      <div class=\"form-group clearfix\">
        <div class=\"col-md-offset-2 col-md-8 controls\">
          <p class=\"help-block\">你可以上传jpg, gif, png格式的文件, 图片建议尺寸至少为480x270。<br>文件大小不能超过<strong>2M</strong>。</p>
        </div>
      </div>

      <div class=\"form-group clearfix\">
        <div class=\"col-md-offset-2 col-md-8 controls\">
          <a 
          id=\"upload-picture-btn\"
          class=\"btn btn-fat btn-primary\" 
          data-upload-token=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->makeUpoadToken("tmp", "image"), "html", null, true);
        echo "\"
          data-goto-url=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_picture_crop", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
        echo "\"
          >选择要上传的图片</a>
        </div>
      </div>

  </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseManage:picture.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 35,  78 => 34,  60 => 19,  53 => 15,  44 => 8,  41 => 7,  34 => 3,  30 => 1,  28 => 6,  26 => 5,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle:CourseManage:layout.html.twig' %}*/
/* */
/* {% block title %}课程图片 - {{ parent() }}{% endblock %}*/
/* */
/* {% set side_nav = 'picture' %}*/
/* {% set script_controller = 'course-manage/picture' %}*/
/* {% block main %}*/
/* */
/* <div class="panel panel-default panel-col">*/
/*   <div class="panel-heading">*/
/*     课程图片*/
/*   </div>*/
/* */
/*   <div class="panel-body">*/
/*       {{ web_macro.flash_messages() }}*/
/* */
/*       <div class="form-group clearfix">*/
/*         <div class="col-md-offset-2 col-md-8 controls">*/
/*           <img class="img-responsive" src="{{ filepath(course.largePicture, 'course.png') }}" />*/
/*         </div>*/
/*       </div>*/
/* */
/*       <div class="form-group clearfix">*/
/*         <div class="col-md-offset-2 col-md-8 controls">*/
/*           <p class="help-block">你可以上传jpg, gif, png格式的文件, 图片建议尺寸至少为480x270。<br>文件大小不能超过<strong>2M</strong>。</p>*/
/*         </div>*/
/*       </div>*/
/* */
/*       <div class="form-group clearfix">*/
/*         <div class="col-md-offset-2 col-md-8 controls">*/
/*           <a */
/*           id="upload-picture-btn"*/
/*           class="btn btn-fat btn-primary" */
/*           data-upload-token="{{ upload_token('tmp', 'image') }}"*/
/*           data-goto-url="{{path('course_manage_picture_crop', {id:course.id})}}"*/
/*           >选择要上传的图片</a>*/
/*         </div>*/
/*       </div>*/
/* */
/*   </div>*/
/* </div>*/
/* */
/* {% endblock %}*/
/* */
/* */
