<?php

/* TopxiaWebBundle:CourseLessonManage:lesson-modal.html.twig */
class __TwigTemplate_4715958c666a1f591abbe26fe3a9e5fd60d8c445a60a0dca0c91f7c75d69e3fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "TopxiaWebBundle:CourseLessonManage:lesson-modal.html.twig", 1);
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
        // line 4
        $context["lesson"] = ((array_key_exists("lesson", $context)) ? (_twig_default_filter((isset($context["lesson"]) ? $context["lesson"] : null), null)) : (null));
        // line 160
        $context["hideFooter"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        // line 8
        echo "  ";
        if ((isset($context["lesson"]) ? $context["lesson"] : null)) {
            echo "编辑课时";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "number", array()), "html", null, true);
        } else {
            echo "添加课时";
        }
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 12
        echo "
<form id=\"course-lesson-form\" data-course-id=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "html", null, true);
        echo "\" class=\"form-horizontal lesson-form\" method=\"post\" ";
        if (array_key_exists("parentId", $context)) {
            echo "data-parentId=\"";
            echo twig_escape_filter($this->env, (isset($context["parentId"]) ? $context["parentId"] : null), "html", null, true);
            echo "\" ";
        }
        // line 14
        echo "  data-create-draft-url=\"";
        echo $this->env->getExtension('routing')->getPath("course_draft_create");
        echo "\"
  ";
        // line 15
        if ((isset($context["lesson"]) ? $context["lesson"] : null)) {
            // line 16
            echo "    action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_lesson_edit", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "lessonId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "id", array()))), "html", null, true);
            echo "\" data-lesson-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "id", array()), "html", null, true);
            echo "\"
  ";
        } else {
            // line 18
            echo "    action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_lesson_create", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "\"
  ";
        }
        // line 20
        echo "  >

  <div class=\"form-group\" ";
        // line 22
        if ((isset($context["lesson"]) ? $context["lesson"] : null)) {
            echo "style=\"display:none;\"";
        }
        echo ">
    <div class=\"col-md-2 control-label\"><label>类型</label></div>
    <div class=\"col-md-9 controls\">
      <div class=\"radios\">
        ";
        // line 26
        echo $this->env->getExtension('topxia_html_twig')->radios("type", $this->env->getExtension('topxia_web_twig')->getDict("lessonType"), _twig_default_filter($this->env->getExtension('topxia_html_twig')->fieldValue((isset($context["lesson"]) ? $context["lesson"] : null), "type"), "video"));
        echo "
      </div>
    </div>
  </div>

  <div class=\"form-group for-text-type for-video-type for-audio-type ";
        // line 31
        if (($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "upload_mode", array()) == "cloud")) {
            echo "for-ppt-type for-document-type for-flash-type";
        }
        echo "\" >
    <div class=\"col-md-2 control-label\"><label for=\"lesson-title-field\">标题</label></div>
    <div class=\"col-md-9 controls\">
      <div class=\"row\">
        <div class=\"col-md-10\">
          <input id=\"lesson-title-field\" class=\"form-control\" type=\"text\" name=\"title\" value=\"";
        // line 36
        echo $this->env->getExtension('topxia_html_twig')->fieldValue((isset($context["lesson"]) ? $context["lesson"] : null), "title");
        echo "\" >
        </div>
        <div class=\"col-md-2\">
          <div class=\"checkbox\">
            <label><input type=\"checkbox\" name=\"free\" value=\"1\" ";
        // line 40
        if ($this->env->getExtension('topxia_html_twig')->fieldValue((isset($context["lesson"]) ? $context["lesson"] : null), "free")) {
            echo " checked=\"checked\" ";
        }
        echo "> 免费课时</label>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class=\"form-group for-text-type for-video-type for-audio-type ";
        // line 47
        if (($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "upload_mode", array()) == "cloud")) {
            echo "for-ppt-type for-document-type for-flash-type";
        }
        echo "\">
    <div class=\"col-md-2 control-label\"><label for=\"lesson-summary-field\">简介</label></div>
    <div class=\"col-md-9 controls\"><textarea class=\"form-control\" id=\"lesson-summary-field\" name=\"summary\" >";
        // line 49
        echo $this->env->getExtension('topxia_html_twig')->fieldValue((isset($context["lesson"]) ? $context["lesson"] : null), "summary");
        echo "</textarea>

    </div>
  </div>

  <div class=\"form-group for-text-type\">



    <div class=\"col-md-2 control-label\"><label for=\"lesson-content-field\" class=\"style1\">内容</label></div>
    <div class=\"col-md-9 controls\">
      
      ";
        // line 61
        if (((array_key_exists("draft", $context)) ? (_twig_default_filter((isset($context["draft"]) ? $context["draft"] : null), false)) : (false))) {
            // line 62
            echo "      <a id =\"see-draft-btn\" class=\"btn btn-link\" data-url=\"";
            echo $this->env->getExtension('routing')->getPath("course_draft_view");
            echo "\" >
        <small>
        您有一段自动保存内容，继续编辑请点击
        </small>
      </a>
      ";
        }
        // line 68
        echo "
      <textarea class=\"form-control\" id=\"lesson-content-field\" name=\"content\"
      data-image-upload-url=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editor_upload", array("token" => $this->env->getExtension('topxia_web_twig')->makeUpoadToken("course"))), "html", null, true);
        echo "\"
      data-flash-upload-url=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editor_upload", array("token" => $this->env->getExtension('topxia_web_twig')->makeUpoadToken("course", "flash"))), "html", null, true);
        echo "\" data-image-download-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editor_download", array("token" => $this->env->getExtension('topxia_web_twig')->makeUpoadToken("course"))), "html", null, true);
        echo "\"
      >";
        // line 72
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "content", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "content", array()), "")) : ("")), "html", null, true);
        echo "</textarea>
    </div>
  </div>

  <div class=\"form-group for-video-type for-audio-type ";
        // line 76
        if (($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "upload_mode", array()) == "cloud")) {
            echo "for-ppt-type for-document-type for-flash-type";
        }
        echo " \">
    <div class=\"col-md-2 control-label for-video-type\"><label>视频</label></div>
    <div class=\"col-md-2 control-label for-audio-type\"><label>音频</label></div>
    <div class=\"col-md-2 control-label for-ppt-type\"><label>PPT</label></div>
    <div class=\"col-md-2 control-label for-document-type\"><label>文档</label></div>
    <div class=\"col-md-2 control-label for-flash-type\"><label>Flash</label></div>
    <div class=\"col-md-9 controls\">
      ";
        // line 83
        $this->loadTemplate("TopxiaWebBundle:CourseLessonManage:media-choose.html.twig", "TopxiaWebBundle:CourseLessonManage:lesson-modal.html.twig", 83)->display($context);
        // line 84
        echo "      <input id=\"lesson-media-field\" type=\"hidden\" name=\"media\" value=\"";
        echo twig_escape_filter($this->env, twig_jsonencode_filter($this->env->getExtension('topxia_html_twig')->fieldValue((isset($context["lesson"]) ? $context["lesson"] : null), "media")), "html", null, true);
        echo "\">
    </div>
  </div>

  <div class=\"form-group for-none-type ";
        // line 88
        if (($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "upload_mode", array()) != "cloud")) {
            echo "for-ppt-type";
        }
        echo "\">
    <div class=\"col-md-offset-2 col-md-9\">
      <div class=\"alert alert-info\">
        <p>";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->removeCopyright("PPT课时需要开通EduSoho云文档服务才能使用,"), "html", null, true);
        echo "点击<a href=\"http://open.edusoho.com/show/cloud/doc\" target=\"_blank\">这里</a>了解详情。</p>
      </div>
    </div>
  </div>

  <div class=\"form-group for-none-type ";
        // line 96
        if (($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "upload_mode", array()) != "cloud")) {
            echo "for-document-type";
        }
        echo "\">
    <div class=\"col-md-offset-2 col-md-9\">
      <div class=\"alert alert-info\">
        <p>";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->removeCopyright("文档课时需要开通EduSoho云文档服务才能使用,"), "html", null, true);
        echo "点击<a href=\"http://open.edusoho.com/show/cloud/doc\" target=\"_blank\">这里</a>了解详情。</p>
      </div>
    </div>
  </div>

  <div class=\"form-group for-none-type ";
        // line 104
        if (($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "upload_mode", array()) != "cloud")) {
            echo "for-flash-type";
        }
        echo "\">
    <div class=\"col-md-offset-2 col-md-9\">
      <div class=\"alert alert-info\">
        <p>";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->removeCopyright("Flash课时需要开通EduSoho云视频服务才能使用,"), "html", null, true);
        echo "点击<a href=\"http://open.edusoho.com/show/cloud/video\" target=\"_blank\">这里</a>了解详情。</p>
      </div>
    </div>
  </div>

  <div class=\"form-group for-video-type for-audio-type\" id=\"lesson-length-form-group\">
      <div class=\"col-md-2 control-label for-video-type\"><label>视频时长</label></div>
      <div class=\"hide\"><label for=\"lesson-length-field\">视频时长或</label></div>
      <div class=\"col-md-2 control-label for-audio-type\"><label for=\"lesson-length-field\">音频时长</label></div>
    <div class=\"col-md-9 controls\">
      <input class=\"form-control width-input width-input-small\" id=\"lesson-minute-field\" type=\"text\" name=\"minute\" value=\"";
        // line 117
        echo $this->env->getExtension('topxia_html_twig')->fieldValue((isset($context["lesson"]) ? $context["lesson"] : null), "minute");
        echo "\">分
      <input class=\"form-control width-input width-input-small\" id=\"lesson-second-field\" type=\"text\" name=\"second\" value=\"";
        // line 118
        echo $this->env->getExtension('topxia_html_twig')->fieldValue((isset($context["lesson"]) ? $context["lesson"] : null), "second");
        echo "\">秒
      <div class=\"help-block\">时长必须为整数。</div>
    </div>
  </div>

  ";
        // line 123
        if (twig_in_filter("lesson_credit", (isset($context["features"]) ? $context["features"] : null))) {
            // line 124
            echo "  <div class=\"form-group for-text-type for-video-type for-audio-type for-ppt-type\">
    <div class=\"col-md-2 control-label\"><label for=\"lesson-give-credit-field\">学分</label></div>
    <div class=\"col-md-9 controls\">
      <input class=\"form-control width-input width-input-small\" id=\"lesson-give-credit-field\" type=\"text\" name=\"giveCredit\" value=\"";
            // line 127
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "giveCredit", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "giveCredit", array()), 0)) : (0)), "html", null, true);
            echo "\"> 分
      <div class=\"help-block\">学完此课时，可获得的学分</div>
    </div>
  </div>
  ";
        }
        // line 132
        echo "
  
  <div class=\"form-group\">
    <div class=\"col-md-2 control-label\"><label>建议学习时长</label></div>
    <div class=\"col-md-9 controls\">
      <input class=\"form-control width-input width-input-small\" id=\"lesson-suggest-period-field\" type=\"text\" name=\"suggestHours\" value=\"";
        // line 137
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "suggestHours", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "suggestHours", array()), "1.0")) : ("1.0")), "html", null, true);
        echo "\">小时
      <span class=\"for-video-type\">（如未设置，则默认学习时长为视频时长3倍取整。）</span>
      <span class=\"for-audio-type\">（如未设置，则默认学习时长为音频时长3倍取整。）</span>
      <span class=\"for-flash-type for-text-type for-ppt-type for-document-type\">（如未设置，则默认学习时长1小时。）</span>
      <div class=\"help-block\"></div>
    </div>
  </div>

  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">


</form>
 

<script>app.load('course-manage/lesson-modal')</script>


";
    }

    // line 155
    public function block_footer($context, array $blocks = array())
    {
        // line 156
        echo "    <button type=\"button\" class=\"btn btn-link\" data-dismiss=\"modal\" id=\"cancel-btn\">取消</button>
    <button id=\"course-lesson-btn\" data-submiting-text=\"正在提交\" type=\"submit\" class=\"btn btn-primary\" data-toggle=\"form-submit\" data-target=\"#course-lesson-form\">";
        // line 157
        if ((isset($context["lesson"]) ? $context["lesson"] : null)) {
            echo "保存";
        } else {
            echo "添加";
        }
        echo "</button>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseLessonManage:lesson-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  330 => 157,  327 => 156,  324 => 155,  310 => 145,  299 => 137,  292 => 132,  284 => 127,  279 => 124,  277 => 123,  269 => 118,  265 => 117,  252 => 107,  244 => 104,  236 => 99,  228 => 96,  220 => 91,  212 => 88,  204 => 84,  202 => 83,  190 => 76,  183 => 72,  177 => 71,  173 => 70,  169 => 68,  159 => 62,  157 => 61,  142 => 49,  135 => 47,  123 => 40,  116 => 36,  106 => 31,  98 => 26,  89 => 22,  85 => 20,  79 => 18,  71 => 16,  69 => 15,  64 => 14,  56 => 13,  53 => 12,  50 => 11,  40 => 8,  37 => 7,  33 => 1,  31 => 160,  29 => 4,  27 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::bootstrap-modal-layout.html.twig' %}*/
/* */
/* {% set modal_class = 'modal-lg' %}*/
/* {% set lesson = lesson|default(null) %}*/
/* */
/* */
/* {% block title %}*/
/*   {% if lesson %}编辑课时{{ lesson.number }}{% else %}添加课时{% endif %}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/* <form id="course-lesson-form" data-course-id="{{course.id}}" class="form-horizontal lesson-form" method="post" {% if parentId is defined%}data-parentId="{{parentId}}" {% endif %}*/
/*   data-create-draft-url="{{path('course_draft_create')}}"*/
/*   {% if lesson %}*/
/*     action="{{ path('course_manage_lesson_edit', {courseId:course.id, lessonId:lesson.id}) }}" data-lesson-id="{{lesson.id}}"*/
/*   {% else %}*/
/*     action="{{ path('course_manage_lesson_create', {id:course.id}) }}"*/
/*   {% endif %}*/
/*   >*/
/* */
/*   <div class="form-group" {% if lesson %}style="display:none;"{% endif %}>*/
/*     <div class="col-md-2 control-label"><label>类型</label></div>*/
/*     <div class="col-md-9 controls">*/
/*       <div class="radios">*/
/*         {{ radios('type', dict('lessonType'), field_value(lesson, 'type')|default('video')) }}*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* */
/*   <div class="form-group for-text-type for-video-type for-audio-type {% if storageSetting.upload_mode == 'cloud' %}for-ppt-type for-document-type for-flash-type{% endif %}" >*/
/*     <div class="col-md-2 control-label"><label for="lesson-title-field">标题</label></div>*/
/*     <div class="col-md-9 controls">*/
/*       <div class="row">*/
/*         <div class="col-md-10">*/
/*           <input id="lesson-title-field" class="form-control" type="text" name="title" value="{{ field_value(lesson, 'title') }}" >*/
/*         </div>*/
/*         <div class="col-md-2">*/
/*           <div class="checkbox">*/
/*             <label><input type="checkbox" name="free" value="1" {% if field_value(lesson, 'free') %} checked="checked" {% endif %}> 免费课时</label>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* */
/*   <div class="form-group for-text-type for-video-type for-audio-type {% if storageSetting.upload_mode == 'cloud' %}for-ppt-type for-document-type for-flash-type{% endif %}">*/
/*     <div class="col-md-2 control-label"><label for="lesson-summary-field">简介</label></div>*/
/*     <div class="col-md-9 controls"><textarea class="form-control" id="lesson-summary-field" name="summary" >{{ field_value(lesson, 'summary') }}</textarea>*/
/* */
/*     </div>*/
/*   </div>*/
/* */
/*   <div class="form-group for-text-type">*/
/* */
/* */
/* */
/*     <div class="col-md-2 control-label"><label for="lesson-content-field" class="style1">内容</label></div>*/
/*     <div class="col-md-9 controls">*/
/*       */
/*       {% if draft|default(false) %}*/
/*       <a id ="see-draft-btn" class="btn btn-link" data-url="{{path('course_draft_view')}}" >*/
/*         <small>*/
/*         您有一段自动保存内容，继续编辑请点击*/
/*         </small>*/
/*       </a>*/
/*       {% endif %}*/
/* */
/*       <textarea class="form-control" id="lesson-content-field" name="content"*/
/*       data-image-upload-url="{{ path('editor_upload', {token:upload_token('course')}) }}"*/
/*       data-flash-upload-url="{{ path('editor_upload', {token:upload_token('course', 'flash')}) }}" data-image-download-url="{{ path('editor_download', {token:upload_token('course')}) }}"*/
/*       >{{ lesson.content|default('') }}</textarea>*/
/*     </div>*/
/*   </div>*/
/* */
/*   <div class="form-group for-video-type for-audio-type {% if storageSetting.upload_mode == 'cloud' %}for-ppt-type for-document-type for-flash-type{% endif %} ">*/
/*     <div class="col-md-2 control-label for-video-type"><label>视频</label></div>*/
/*     <div class="col-md-2 control-label for-audio-type"><label>音频</label></div>*/
/*     <div class="col-md-2 control-label for-ppt-type"><label>PPT</label></div>*/
/*     <div class="col-md-2 control-label for-document-type"><label>文档</label></div>*/
/*     <div class="col-md-2 control-label for-flash-type"><label>Flash</label></div>*/
/*     <div class="col-md-9 controls">*/
/*       {% include "TopxiaWebBundle:CourseLessonManage:media-choose.html.twig" %}*/
/*       <input id="lesson-media-field" type="hidden" name="media" value="{{ field_value(lesson, 'media')|json_encode }}">*/
/*     </div>*/
/*   </div>*/
/* */
/*   <div class="form-group for-none-type {% if storageSetting.upload_mode != 'cloud' %}for-ppt-type{% endif %}">*/
/*     <div class="col-md-offset-2 col-md-9">*/
/*       <div class="alert alert-info">*/
/*         <p>{{ 'PPT课时需要开通EduSoho云文档服务才能使用,'|copyright_less }}点击<a href="http://open.edusoho.com/show/cloud/doc" target="_blank">这里</a>了解详情。</p>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* */
/*   <div class="form-group for-none-type {% if storageSetting.upload_mode != 'cloud' %}for-document-type{% endif %}">*/
/*     <div class="col-md-offset-2 col-md-9">*/
/*       <div class="alert alert-info">*/
/*         <p>{{ '文档课时需要开通EduSoho云文档服务才能使用,'|copyright_less }}点击<a href="http://open.edusoho.com/show/cloud/doc" target="_blank">这里</a>了解详情。</p>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* */
/*   <div class="form-group for-none-type {% if storageSetting.upload_mode != 'cloud' %}for-flash-type{% endif %}">*/
/*     <div class="col-md-offset-2 col-md-9">*/
/*       <div class="alert alert-info">*/
/*         <p>{{ 'Flash课时需要开通EduSoho云视频服务才能使用,'|copyright_less }}点击<a href="http://open.edusoho.com/show/cloud/video" target="_blank">这里</a>了解详情。</p>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* */
/*   <div class="form-group for-video-type for-audio-type" id="lesson-length-form-group">*/
/*       <div class="col-md-2 control-label for-video-type"><label>视频时长</label></div>*/
/*       <div class="hide"><label for="lesson-length-field">视频时长或</label></div>*/
/*       <div class="col-md-2 control-label for-audio-type"><label for="lesson-length-field">音频时长</label></div>*/
/*     <div class="col-md-9 controls">*/
/*       <input class="form-control width-input width-input-small" id="lesson-minute-field" type="text" name="minute" value="{{ field_value(lesson, 'minute') }}">分*/
/*       <input class="form-control width-input width-input-small" id="lesson-second-field" type="text" name="second" value="{{ field_value(lesson, 'second') }}">秒*/
/*       <div class="help-block">时长必须为整数。</div>*/
/*     </div>*/
/*   </div>*/
/* */
/*   {% if 'lesson_credit' in features %}*/
/*   <div class="form-group for-text-type for-video-type for-audio-type for-ppt-type">*/
/*     <div class="col-md-2 control-label"><label for="lesson-give-credit-field">学分</label></div>*/
/*     <div class="col-md-9 controls">*/
/*       <input class="form-control width-input width-input-small" id="lesson-give-credit-field" type="text" name="giveCredit" value="{{ lesson.giveCredit|default(0) }}"> 分*/
/*       <div class="help-block">学完此课时，可获得的学分</div>*/
/*     </div>*/
/*   </div>*/
/*   {% endif %}*/
/* */
/*   */
/*   <div class="form-group">*/
/*     <div class="col-md-2 control-label"><label>建议学习时长</label></div>*/
/*     <div class="col-md-9 controls">*/
/*       <input class="form-control width-input width-input-small" id="lesson-suggest-period-field" type="text" name="suggestHours" value="{{ lesson.suggestHours|default('1.0') }}">小时*/
/*       <span class="for-video-type">（如未设置，则默认学习时长为视频时长3倍取整。）</span>*/
/*       <span class="for-audio-type">（如未设置，则默认学习时长为音频时长3倍取整。）</span>*/
/*       <span class="for-flash-type for-text-type for-ppt-type for-document-type">（如未设置，则默认学习时长1小时。）</span>*/
/*       <div class="help-block"></div>*/
/*     </div>*/
/*   </div>*/
/* */
/*   <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/* */
/* */
/* </form>*/
/*  */
/* */
/* <script>app.load('course-manage/lesson-modal')</script>*/
/* */
/* */
/* {% endblock %}*/
/* {% block footer %}*/
/*     <button type="button" class="btn btn-link" data-dismiss="modal" id="cancel-btn">取消</button>*/
/*     <button id="course-lesson-btn" data-submiting-text="正在提交" type="submit" class="btn btn-primary" data-toggle="form-submit" data-target="#course-lesson-form">{% if lesson %}保存{% else %}添加{% endif %}</button>*/
/* {% endblock %}*/
/* */
/* {% set hideFooter = true %}*/
