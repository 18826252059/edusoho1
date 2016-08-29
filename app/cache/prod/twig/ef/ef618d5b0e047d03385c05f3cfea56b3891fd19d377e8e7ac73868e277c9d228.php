<?php

/* CustomWebBundle:LiveCourseLessonManage:live-lesson-modal.html.twig */
class __TwigTemplate_481f5dfb85a61dfc13704ab2edf0e35888eae001140e2e4c3396ee55ff408008 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "CustomWebBundle:LiveCourseLessonManage:live-lesson-modal.html.twig", 1);
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
        if (((array_key_exists("liveLesson", $context)) ? (_twig_default_filter((isset($context["liveLesson"]) ? $context["liveLesson"] : null), null)) : (null))) {
            echo "编辑";
        } else {
            echo "新增";
        }
        echo "直播课时";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "\t
  <form class=\"form-horizontal\" id=\"live-lesson-form\"　method=\"post\"  ";
        // line 9
        if (array_key_exists("parentId", $context)) {
            echo "data-parentId=\"";
            echo twig_escape_filter($this->env, (isset($context["parentId"]) ? $context["parentId"] : null), "html", null, true);
            echo "\" ";
        }
        // line 10
        echo "  
\t  ";
        // line 11
        if (((array_key_exists("liveLesson", $context)) ? (_twig_default_filter((isset($context["liveLesson"]) ? $context["liveLesson"] : null), null)) : (null))) {
            // line 12
            echo "\t  \taction=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lpmas_live_course_manage_lesson_edit", array("courseId" => $this->getAttribute((isset($context["liveCourse"]) ? $context["liveCourse"] : null), "id", array()), "lessonId" => $this->getAttribute((isset($context["liveLesson"]) ? $context["liveLesson"] : null), "id", array()))), "html", null, true);
            echo "\"
\t  ";
        } else {
            // line 13
            echo " 
\t    action=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lpmas_live_course_manage_lesson_create", array("id" => $this->getAttribute((isset($context["liveCourse"]) ? $context["liveCourse"] : null), "id", array()))), "html", null, true);
            echo "\"
\t  ";
        }
        // line 16
        echo "\t  >
\t 
    <div class=\"form-group\">
      <label class=\"col-md-2 control-label\" for=\"live-title-field\">标题</label>
      <div class=\"col-md-8 controls\">
        <input class=\"form-control\" id=\"live-title-field\" type=\"text\" name=\"title\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["liveLesson"]) ? $context["liveLesson"] : null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["liveLesson"]) ? $context["liveLesson"] : null), "title", array()))) : ("")), "html", null, true);
        echo "\" tabindex=\"2\">
      </div>
    </div> 

  \t<div class=\"form-group\">
  \t\t<label class=\"col-md-2 control-label\" >直播开始时间</label>
  \t\t<div class=\"col-md-8 controls\" style=\"z-index:2000;\">
        <input type=\"text\"  name=\"startTime\" class=\"form-control width-input width-input-large\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->dateformatFilter((($this->getAttribute((isset($context["liveLesson"]) ? $context["liveLesson"] : null), "startTime", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["liveLesson"]) ? $context["liveLesson"] : null), "startTime", array()))) : (""))), "html", null, true);
        echo "\">
        <div class=\"help-block\" id=\"starttime-help-block\">教师可在直播开始前1小时内进入直播教室，以准备相关教学资料。</div>
      </div>
  \t</div>

  \t<div class=\"form-group\">
      <label class=\"col-md-2 control-label\" >直播时长</label>
      <div class=\"col-md-8 controls\">
        <input type=\"text\"  name=\"timeLength\" id=\"live-length-field\" class=\"form-control width-input width-input-large\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["liveLesson"]) ? $context["liveLesson"] : null), "length", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["liveLesson"]) ? $context["liveLesson"] : null), "length", array()), 60)) : (60)), "html", null, true);
        echo "\" placeholder=\"时长\" data-calculate-left-capacity-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("live_lesson_calculate_left_capacity", array("courseId" => $this->getAttribute((isset($context["liveCourse"]) ? $context["liveCourse"] : null), "id", array()), "lessonId" => (($this->getAttribute((isset($context["liveLesson"]) ? $context["liveLesson"] : null), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["liveLesson"]) ? $context["liveLesson"] : null), "id", array()), 0)) : (0)))), "html", null, true);
        echo "\" data-max-Student-Num = \"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["liveCourse"]) ? $context["liveCourse"] : null), "maxStudentNum", array()), "html", null, true);
        echo "\"> 分钟
        <div class=\"help-block\" id=\"timelength-help-block\"></div>
      </div>

      <input type=\"hidden\" id=\"live_lesson_time_check\" data-url=\"";
        // line 40
        if (((array_key_exists("liveLesson", $context)) ? (_twig_default_filter((isset($context["liveLesson"]) ? $context["liveLesson"] : null), null)) : (null))) {
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("live_lesson_time_check", array("id" => $this->getAttribute((isset($context["liveCourse"]) ? $context["liveCourse"] : null), "id", array()), "lessonId" => $this->getAttribute((isset($context["liveLesson"]) ? $context["liveLesson"] : null), "id", array()))), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("live_lesson_time_check", array("id" => $this->getAttribute((isset($context["liveCourse"]) ? $context["liveCourse"] : null), "id", array()))), "html", null, true);
        }
        echo "\">
  \t</div>

  \t<div class=\"form-group\">
  \t\t<label class=\"col-md-2 control-label\" for=\"live-summary-field\">直播说明</label>
  \t\t<div class=\"col-md-8 controls\">
  \t\t\t<textarea class=\"form-control\" id=\"live_lesson-content-field\" rows=\"10\" name=\"summary\"
          data-image-upload-url=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editor_upload", array("token" => $this->env->getExtension('topxia_web_twig')->makeUpoadToken("course"))), "html", null, true);
        echo "\"
          data-flash-upload-url=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editor_upload", array("token" => $this->env->getExtension('topxia_web_twig')->makeUpoadToken("course", "flash"))), "html", null, true);
        echo "\">
          ";
        // line 49
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["liveLesson"]) ? $context["liveLesson"] : null), "summary", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["liveLesson"]) ? $context["liveLesson"] : null), "summary", array()), "")) : ("")), "html", null, true);
        echo "
        </textarea>
  \t\t</div>
  \t</div>

    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
  </form>

";
    }

    // line 59
    public function block_footer($context, array $blocks = array())
    {
        // line 60
        echo "  <button type=\"button\" class=\"btn btn-link\" data-dismiss=\"modal\">取消</button>
  <button type=\"submit\" class=\"btn btn-primary\"  data-toggle=\"form-submit\" data-submiting-text=\"正在保存\" data-target=\"#live-lesson-form\" id=\"live-course-create-btn\">保存</button>

  <script>app.load('live-course-manage/live-lesson-modal')</script>

";
    }

    public function getTemplateName()
    {
        return "CustomWebBundle:LiveCourseLessonManage:live-lesson-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 60,  152 => 59,  144 => 54,  136 => 49,  132 => 48,  128 => 47,  114 => 40,  103 => 36,  92 => 28,  82 => 21,  75 => 16,  70 => 14,  67 => 13,  61 => 12,  59 => 11,  56 => 10,  50 => 9,  47 => 8,  44 => 7,  33 => 5,  29 => 1,  27 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::bootstrap-modal-layout.html.twig' %}*/
/* */
/* {% set modal_class = 'modal-lg' %}*/
/* */
/* {% block title %}{% if liveLesson|default(null) %}编辑{% else %}新增{% endif %}直播课时{% endblock %}*/
/* */
/* {% block body %}*/
/* 	*/
/*   <form class="form-horizontal" id="live-lesson-form"　method="post"  {% if parentId is defined%}data-parentId="{{parentId}}" {% endif %}*/
/*   */
/* 	  {% if liveLesson|default(null) %}*/
/* 	  	action="{{ path('lpmas_live_course_manage_lesson_edit',{courseId:liveCourse.id,lessonId:liveLesson.id}) }}"*/
/* 	  {% else %} */
/* 	    action="{{ path('lpmas_live_course_manage_lesson_create',{id:liveCourse.id}) }}"*/
/* 	  {% endif %}*/
/* 	  >*/
/* 	 */
/*     <div class="form-group">*/
/*       <label class="col-md-2 control-label" for="live-title-field">标题</label>*/
/*       <div class="col-md-8 controls">*/
/*         <input class="form-control" id="live-title-field" type="text" name="title" value="{{ liveLesson.title|default() }}" tabindex="2">*/
/*       </div>*/
/*     </div> */
/* */
/*   	<div class="form-group">*/
/*   		<label class="col-md-2 control-label" >直播开始时间</label>*/
/*   		<div class="col-md-8 controls" style="z-index:2000;">*/
/*         <input type="text"  name="startTime" class="form-control width-input width-input-large" value="{{ liveLesson.startTime|default()|date_format }}">*/
/*         <div class="help-block" id="starttime-help-block">教师可在直播开始前1小时内进入直播教室，以准备相关教学资料。</div>*/
/*       </div>*/
/*   	</div>*/
/* */
/*   	<div class="form-group">*/
/*       <label class="col-md-2 control-label" >直播时长</label>*/
/*       <div class="col-md-8 controls">*/
/*         <input type="text"  name="timeLength" id="live-length-field" class="form-control width-input width-input-large" value="{{ liveLesson.length|default(60) }}" placeholder="时长" data-calculate-left-capacity-url="{{ path('live_lesson_calculate_left_capacity', {courseId:liveCourse.id, lessonId:liveLesson.id|default(0)}) }}" data-max-Student-Num = "{{ liveCourse.maxStudentNum }}"> 分钟*/
/*         <div class="help-block" id="timelength-help-block"></div>*/
/*       </div>*/
/* */
/*       <input type="hidden" id="live_lesson_time_check" data-url="{% if liveLesson|default(null) %}{{path('live_lesson_time_check',{id:liveCourse.id,lessonId:liveLesson.id}) }}{% else %}{{path('live_lesson_time_check',{id:liveCourse.id})}}{% endif %}">*/
/*   	</div>*/
/* */
/*   	<div class="form-group">*/
/*   		<label class="col-md-2 control-label" for="live-summary-field">直播说明</label>*/
/*   		<div class="col-md-8 controls">*/
/*   			<textarea class="form-control" id="live_lesson-content-field" rows="10" name="summary"*/
/*           data-image-upload-url="{{ path('editor_upload', {token:upload_token('course')}) }}"*/
/*           data-flash-upload-url="{{ path('editor_upload', {token:upload_token('course', 'flash')}) }}">*/
/*           {{ liveLesson.summary|default('') }}*/
/*         </textarea>*/
/*   		</div>*/
/*   	</div>*/
/* */
/*     <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/*   </form>*/
/* */
/* {% endblock %}*/
/* */
/* {% block footer %}*/
/*   <button type="button" class="btn btn-link" data-dismiss="modal">取消</button>*/
/*   <button type="submit" class="btn btn-primary"  data-toggle="form-submit" data-submiting-text="正在保存" data-target="#live-lesson-form" id="live-course-create-btn">保存</button>*/
/* */
/*   <script>app.load('live-course-manage/live-lesson-modal')</script>*/
/* */
/* {% endblock %}*/
