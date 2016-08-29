<?php

/* TopxiaAdminBundle:System:default-course-picture.html.twig */
class __TwigTemplate_a227804aa6391d27e88653f578574cc5722f05c87829f6241e765f0e37d2e179 extends Twig_Template
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
<div class=\"form-group\" id=\"course-picture-class\" 
";
        // line 3
        if (($this->env->getExtension('topxia_web_twig')->getSetting("default.defaultCoursePicture") == 0)) {
            // line 4
            echo "style=\"display:none;\"
";
        }
        // line 6
        echo ">
<div class=\"col-md-8 control-label\"><b>自定义默认课程图片</b></div>
  <form id=\"course-picture-form\" method=\"post\" >
    <div class=\"controls col-md-8 controls\">
      <img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSystemDefaultPath("course.png"), "html", null, true);
        echo "\">
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\"></div>
      <div class=\"controls col-md-8 controls\">      
        <a id=\"default-course-picture-btn\"
        data-upload-token=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->makeUpoadToken("system", "image"), "html", null, true);
        echo "\"
        data-goto-url=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("admin_setting_default_course_picture_crop");
        echo "\"
        class=\"btn btn-default btn-sm\">上传</a>
      </div>
    </div>
  </form>
</div>

<div class=\"form-group\" id=\"system-course-picture-class\" 
";
        // line 26
        if (($this->env->getExtension('topxia_web_twig')->getSetting("default.defaultCoursePicture") == 1)) {
            // line 27
            echo "style=\"display:none;\"
";
        }
        // line 29
        echo ">
  <div class=\"col-md-8 control-label\"><b>系统默认课程图片</b></div>
    <div class=\"controls col-md-8 controls\">
      <img src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/default/course.png"), "html", null, true);
        echo "\">
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System:default-course-picture.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 32,  66 => 29,  62 => 27,  60 => 26,  49 => 18,  45 => 17,  35 => 10,  29 => 6,  25 => 4,  23 => 3,  19 => 1,);
    }
}
/* */
/* <div class="form-group" id="course-picture-class" */
/* {% if setting('default.defaultCoursePicture') == 0 %}*/
/* style="display:none;"*/
/* {% endif %}*/
/* >*/
/* <div class="col-md-8 control-label"><b>自定义默认课程图片</b></div>*/
/*   <form id="course-picture-form" method="post" >*/
/*     <div class="controls col-md-8 controls">*/
/*       <img src="{{ system_default_path('course.png' ) }}">*/
/*     </div>*/
/* */
/*     <div class="form-group">*/
/*       <div class="col-md-2 control-label"></div>*/
/*       <div class="controls col-md-8 controls">      */
/*         <a id="default-course-picture-btn"*/
/*         data-upload-token="{{ upload_token('system', 'image') }}"*/
/*         data-goto-url="{{path('admin_setting_default_course_picture_crop')}}"*/
/*         class="btn btn-default btn-sm">上传</a>*/
/*       </div>*/
/*     </div>*/
/*   </form>*/
/* </div>*/
/* */
/* <div class="form-group" id="system-course-picture-class" */
/* {% if setting('default.defaultCoursePicture') == 1 %}*/
/* style="display:none;"*/
/* {% endif %}*/
/* >*/
/*   <div class="col-md-8 control-label"><b>系统默认课程图片</b></div>*/
/*     <div class="controls col-md-8 controls">*/
/*       <img src="{{ asset('assets/img/default/course.png') }}">*/
/*     </div>*/
/* </div>*/
/* */
/* */
