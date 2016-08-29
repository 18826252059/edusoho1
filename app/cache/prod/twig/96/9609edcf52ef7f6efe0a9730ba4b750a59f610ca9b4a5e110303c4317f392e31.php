<?php

/* TopxiaWebBundle:Course:learn.html.twig */
class __TwigTemplate_fdf58081c18d2cef3b61146a8fc97c538fb08055a625a1c5d5b1c47ba5d86f74 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "TopxiaWebBundle:Course:learn.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'footer' => array($this, 'block_footer'),
            'esBar' => array($this, 'block_esBar'),
            'full_content' => array($this, 'block_full_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["hideSetupHint"] = true;
        // line 7
        if ($this->env->getExtension('topxia_web_twig')->isPluginInstalled("Homework")) {
            // line 8
            $context["script_arguments"] = array("customChapter" => _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("course.custom_chapter_enabled"), true), "plugins" => array(0 => "lesson", 1 => "question", 2 => "note", 3 => "material", 4 => "homework"));
        } else {
            // line 10
            $context["script_arguments"] = array("customChapter" => _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("course.custom_chapter_enabled"), true), "plugins" => array(0 => "lesson", 1 => "question", 2 => "note", 3 => "material"));
        }
        // line 13
        $context["script_controller"] = "course/learn";
        // line 14
        $context["bodyClass"] = "lesson-dashboard-page";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "title", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 17
        echo "  ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
    }

    // line 20
    public function block_header($context, array $blocks = array())
    {
    }

    // line 21
    public function block_footer($context, array $blocks = array())
    {
    }

    // line 22
    public function block_esBar($context, array $blocks = array())
    {
    }

    // line 23
    public function block_full_content($context, array $blocks = array())
    {
        // line 24
        echo "  <div class=\"lesson-dashboard\" id=\"lesson-dashboard\"
    data-course-id=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "html", null, true);
        echo "\"
    data-course-uri=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
        echo "\"
    data-dashboard-uri=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_learn", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
        echo "\"
    data-watch-limit=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("magic.lesson_watch_limit"), "html", null, true);
        echo "\"
    data-starttime = \"";
        // line 29
        echo twig_escape_filter($this->env, ((array_key_exists("starttime", $context)) ? (_twig_default_filter((isset($context["starttime"]) ? $context["starttime"] : null), "")) : ("")), "html", null, true);
        echo "\"
    data-hide-media-lesson-learn-btn=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->isFeatureEnabled("hide_media_lesson_learn_btn"), "html", null, true);
        echo "\">
    <div class=\"dashboard-content\">
      ";
        // line 32
        $context["classroom"] = $this->env->getExtension('topxia_data_twig')->getData("GetClassroomByCourseId", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array())));
        // line 33
        echo "      ";
        if ((isset($context["classroom"]) ? $context["classroom"] : null)) {
            // line 34
            echo "        <a class=\"btn btn-primary  nav-btn back-course-btn\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_show", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-chevron-left\" ></span> 返回班级</a>
      ";
        } else {
            // line 36
            echo "        <a class=\"btn btn-primary  nav-btn back-course-btn\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-chevron-left\" ></span> 返回课程</a>
      ";
        }
        // line 38
        echo "       
       <a class=\"btn btn-primary  nav-btn prev-lesson-btn\" href=\"javascript:\" data-role=\"prev-lesson\" data-placement=\"right\" title=\"上一课时\"><span class=\"glyphicon glyphicon-chevron-up\" title=\"上一课时\"></span></a>
       <a class=\"btn btn-primary nav-btn next-lesson-btn\" href=\"javascript:\" data-role=\"next-lesson\" data-placement=\"right\" title=\"下一课时\"><span class=\"glyphicon glyphicon-chevron-down\"></span></a>

      <div class=\"dashboard-header\">
        <div class=\"pull-left title-group\">
          <span class=\"chapter-label\">
            ";
        // line 45
        if ( !_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("course.custom_chapter_enabled"), true)) {
            // line 46
            echo "              <span data-role=\"custom-chapter-number\">第";
            if ($this->env->getExtension('topxia_web_twig')->getSetting("default.chapter_name")) {
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.chapter_name"), "章"), "html", null, true);
            } else {
                echo "章";
            }
            echo "</span></span>
            ";
        } else {
            // line 48
            echo "              第<span data-role=\"chapter-number\"></span>";
            if ($this->env->getExtension('topxia_web_twig')->getSetting("default.chapter_name")) {
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.chapter_name"), "章"), "html", null, true);
            } else {
                echo "章";
            }
            echo "</span>
            ";
        }
        // line 50
        echo "          <span class=\"divider\">&raquo;</span>
          <span class=\"chapter-label\">
            ";
        // line 52
        if ( !_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("course.custom_chapter_enabled"), true)) {
            // line 53
            echo "              <span data-role=\"custom-unit-number\">第";
            if ($this->env->getExtension('topxia_web_twig')->getSetting("default.part_name")) {
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.part_name"), "节"), "html", null, true);
            } else {
                echo "节";
            }
            echo "</span></span>
            ";
        } else {
            // line 55
            echo "              第<span data-role=\"unit-number\"></span>";
            if ($this->env->getExtension('topxia_web_twig')->getSetting("default.part_name")) {
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.part_name"), "节"), "html", null, true);
            } else {
                echo "节";
            }
            echo "</span>
            ";
        }
        // line 57
        echo "          <span class=\"divider\">&raquo;</span>
          <span class=\"item-label\">";
        // line 58
        if (_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("course.custom_chapter_enabled"), true)) {
            echo "课时<span data-role=\"lesson-number\"></span>";
        }
        echo "</span>
          <span class=\"item-title\" data-role=\"lesson-title\">正在加载...</span>
        </div>
      </div>

      <div class=\"dashboard-body\">
        <div class=\"lesson-content\" id=\"lesson-video-content\" data-role=\"lesson-content\" style=\"display:none;\"
          ";
        // line 65
        if ((($this->env->getExtension('topxia_web_twig')->getSetting("storage.video_watermark") > 0) && $this->env->getExtension('topxia_web_twig')->getSetting("storage.video_watermark_image"))) {
            // line 66
            echo "            data-watermark=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->env->getExtension('topxia_web_twig')->getSetting("storage.video_watermark_image"), null, true), "html", null, true);
            echo "\"
          ";
        }
        // line 68
        echo "          ";
        if (($this->env->getExtension('topxia_web_twig')->getSetting("storage.video_fingerprint") && $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()))) {
            // line 69
            echo "            data-fingerprint=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFingerprint(), "html", null, true);
            echo "\"
          ";
        }
        // line 71
        echo "            data-user-id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array()), "html", null, true);
        echo "\"
            data-balloon-player=\"1\"
        ></div>
        <div class=\"watermarkEmbedded\" ></div>

        <div class=\"lesson-content lesson-content-audio\" id=\"lesson-audio-content\" data-role=\"lesson-content\" style=\"display:none;\"></div>
        <div class=\"lesson-content\" id=\"lesson-swf-content\" data-role=\"lesson-content\" style=\"display:none;\"></div>
        <div class=\"lesson-content\" id=\"lesson-iframe-content\" data-role=\"lesson-content\" style=\"display:none;\"></div>
        <div class=\"lesson-content lesson-content-text\" id=\"lesson-text-content\" data-role=\"lesson-content\" style=\"display:none;\"
        ";
        // line 80
        if ((_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("course.copy_enabled"), 0) > 0)) {
            echo " oncopy=\"return false;\" oncut=\"return false;\" onselectstart=\"return false\" oncontextmenu=\"return false;\"";
        }
        echo ">
          <div class=\"lesson-content-text-body\"></div>
        </div>

        <div class=\"lesson-content lesson-content-document\" id=\"lesson-document-content\" data-role=\"lesson-content\" style=\"display:none;\"
            ";
        // line 85
        if ($this->env->getExtension('topxia_web_twig')->getSetting("magic.doc_watermark")) {
            echo "data-watermark-url=\"";
            echo $this->env->getExtension('routing')->getPath("cloud_doc_watermark");
            echo "\" ";
        }
        // line 86
        echo "          >
          <div class=\"lesson-content-document-body\"></div>
        </div>   

        <div class=\"lesson-content lesson-content-text\" id=\"lesson-live-content\" data-role=\"lesson-content\" style=\"display:none;\">
          <div class=\"lesson-content-text-body\"></div>
        </div>
        <div class=\"lesson-content lesson-content-text\" id=\"lesson-unpublished-content\" data-role=\"lesson-content\" style=\"display:none;\">
          <div class=\"lesson-content-text-body\">当前课时正在编辑中，暂时无法观看。</div>
        </div>

        <div class=\"lesson-content lesson-content-text\" id=\"lesson-testpaper-content\" data-role=\"lesson-content\" style=\"display:none;\">
          <div class=\"lesson-content-text-body\"></div>
        </div>
        <div class=\"lesson-content lesson-content-text\" id=\"lesson-ppt-content\" data-role=\"lesson-content\" style=\"display:none;\"
            ";
        // line 101
        if ($this->env->getExtension('topxia_web_twig')->getSetting("magic.ppt_watermark")) {
            echo "data-watermark-url=\"";
            echo $this->env->getExtension('routing')->getPath("cloud_ppt_watermark");
            echo "\" ";
        }
        // line 102
        echo "          >
          <div class=\"lesson-content-text-body\"></div>
        </div>

      </div>

      <div class=\"dashboard-footer clearfix\">
        <div class=\"pull-right\">
          <button class=\"btn btn-primary finish-btn\" data-role=\"finish-lesson\" style=\"display:none;\"><span class=\"glyphicon glyphicon-unchecked\"></span> 学过了</button>
        </div>
      </div>
    </div>

    <div class=\"toolbar toolbar-open\" id=\"lesson-dashboard-toolbar\">
      <div class=\"toolbar-nav\">

        <ul class=\"toolbar-nav-stacked\" id=\"lesson-toolbar-primary\"></ul>
        <ul class=\"list-unstyled\">
          <li class=\"es-qrcode toolbar-qrcode\" data-url=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
        echo "\">
            <i class=\"es-icon es-icon-qrcode\"></i><br>
            扫一扫
            <span class=\"qrcode-popover\">
              <img src=\"\" alt=\"\">
              扫二维码继续学习
            </span>
          </li>
        </ul>
        <ul class=\"toolbar-nav-stacked\" id=\"lesson-toolbar-secondary\">
          <li class=\"hide-pane\" style=\"display:none;\">
            <a href=\"javascript:\"><span class=\"glyphicon glyphicon-chevron-right\"></span></a>
          </li>
        </ul>

      </div>
      <div class=\"toolbar-pane-container\">
      </div>
    </div>

  </div>

  <div class=\"modal\" id=\"course-learned-modal\" style=\"display:none;\">
    <div class=\"modal-dialog\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
          <h4 class=\"modal-title\">学习进度提示</h4>
        </div>
        <div class=\"modal-body\">
          <p class=\"text-success\">赞一个，这个课程你已经都学完啦，你可以再回顾一下或者去看看别的课程～～～</p>
        </div>
        <div class=\"modal-footer\">
          <a href=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-primary\">回课程主页</a>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

  <div class=\"modal\" id=\"mediaPlayed-control-modal\" style=\"display:none;\">
    <div class=\"modal-dialog\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
          <h4 class=\"modal-title\">媒体课时学习提示</h4>
        </div>
        <div class=\"modal-body\">
          <p class=\"text-success\">此课时设置了必须完整播放完整个课时才能学完～～</p>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

  <div class=\"modal\" id=\"homeworkDone-control-modal\" style=\"display:none;\">
    <div class=\"modal-dialog\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
          <h4 class=\"modal-title\">作业未完成提示</h4>
        </div>
        <div class=\"modal-body\">
          <p class=\"text-success\">此课时设置了必须做完本课时作业并提交后才能学完～～</p>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->


";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:learn.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  326 => 153,  290 => 120,  270 => 102,  264 => 101,  247 => 86,  241 => 85,  231 => 80,  218 => 71,  212 => 69,  209 => 68,  203 => 66,  201 => 65,  189 => 58,  186 => 57,  176 => 55,  166 => 53,  164 => 52,  160 => 50,  150 => 48,  140 => 46,  138 => 45,  129 => 38,  123 => 36,  117 => 34,  114 => 33,  112 => 32,  107 => 30,  103 => 29,  99 => 28,  95 => 27,  91 => 26,  87 => 25,  84 => 24,  81 => 23,  76 => 22,  71 => 21,  66 => 20,  59 => 17,  56 => 16,  48 => 3,  44 => 1,  42 => 14,  40 => 13,  37 => 10,  34 => 8,  32 => 7,  30 => 5,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::layout.html.twig' %}*/
/* */
/* {% block title %}{{ course.title }} - {{ parent() }}{% endblock %}*/
/* */
/* {% set hideSetupHint = true %}*/
/* */
/* {% if is_plugin_installed('Homework') %}*/
/*   {% set script_arguments = {customChapter: setting('course.custom_chapter_enabled')|default(true), plugins: ['lesson', 'question', 'note', 'material', 'homework']}  %}*/
/* {% else %}  */
/*   {% set script_arguments = {customChapter: setting('course.custom_chapter_enabled')|default(true), plugins: ['lesson', 'question', 'note', 'material']}  %}*/
/* {% endif %}*/
/* */
/* {% set script_controller = 'course/learn' %}*/
/* {% set bodyClass = 'lesson-dashboard-page' %}*/
/* */
/* {% block stylesheets %}*/
/*   {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block header %}{% endblock %}*/
/* {% block footer %}{% endblock %}*/
/* {% block esBar %}{% endblock %}*/
/* {% block full_content %}*/
/*   <div class="lesson-dashboard" id="lesson-dashboard"*/
/*     data-course-id="{{ course.id }}"*/
/*     data-course-uri="{{ path('course_show', {id:course.id}) }}"*/
/*     data-dashboard-uri="{{ path('course_learn', {id:course.id}) }}"*/
/*     data-watch-limit="{{ setting('magic.lesson_watch_limit') }}"*/
/*     data-starttime = "{{starttime|default('')}}"*/
/*     data-hide-media-lesson-learn-btn="{{ is_feature_enabled('hide_media_lesson_learn_btn') }}">*/
/*     <div class="dashboard-content">*/
/*       {% set classroom = data('GetClassroomByCourseId',{courseId:course.id}) %}*/
/*       {% if classroom %}*/
/*         <a class="btn btn-primary  nav-btn back-course-btn" href="{{ path('classroom_show', {id:classroom.id}) }}"><span class="glyphicon glyphicon-chevron-left" ></span> 返回班级</a>*/
/*       {% else %}*/
/*         <a class="btn btn-primary  nav-btn back-course-btn" href="{{ path('course_show', {id:course.id}) }}"><span class="glyphicon glyphicon-chevron-left" ></span> 返回课程</a>*/
/*       {% endif %}*/
/*        */
/*        <a class="btn btn-primary  nav-btn prev-lesson-btn" href="javascript:" data-role="prev-lesson" data-placement="right" title="上一课时"><span class="glyphicon glyphicon-chevron-up" title="上一课时"></span></a>*/
/*        <a class="btn btn-primary nav-btn next-lesson-btn" href="javascript:" data-role="next-lesson" data-placement="right" title="下一课时"><span class="glyphicon glyphicon-chevron-down"></span></a>*/
/* */
/*       <div class="dashboard-header">*/
/*         <div class="pull-left title-group">*/
/*           <span class="chapter-label">*/
/*             {% if not setting('course.custom_chapter_enabled')|default(true)%}*/
/*               <span data-role="custom-chapter-number">第{% if setting('default.chapter_name') %}{{setting('default.chapter_name')|default('章')}}{% else %}章{% endif %}</span></span>*/
/*             {% else %}*/
/*               第<span data-role="chapter-number"></span>{% if setting('default.chapter_name') %}{{setting('default.chapter_name')|default('章')}}{% else %}章{% endif %}</span>*/
/*             {% endif %}*/
/*           <span class="divider">&raquo;</span>*/
/*           <span class="chapter-label">*/
/*             {% if not setting('course.custom_chapter_enabled')|default(true)%}*/
/*               <span data-role="custom-unit-number">第{% if setting('default.part_name') %}{{setting('default.part_name')|default('节')}}{% else %}节{% endif %}</span></span>*/
/*             {% else %}*/
/*               第<span data-role="unit-number"></span>{% if setting('default.part_name') %}{{setting('default.part_name')|default('节')}}{% else %}节{% endif %}</span>*/
/*             {% endif %}*/
/*           <span class="divider">&raquo;</span>*/
/*           <span class="item-label">{% if  setting('course.custom_chapter_enabled')|default(true)%}课时<span data-role="lesson-number"></span>{% endif %}</span>*/
/*           <span class="item-title" data-role="lesson-title">正在加载...</span>*/
/*         </div>*/
/*       </div>*/
/* */
/*       <div class="dashboard-body">*/
/*         <div class="lesson-content" id="lesson-video-content" data-role="lesson-content" style="display:none;"*/
/*           {% if setting('storage.video_watermark') > 0 and setting('storage.video_watermark_image') %}*/
/*             data-watermark="{{ filepath(setting('storage.video_watermark_image'), null, true) }}"*/
/*           {% endif %}*/
/*           {% if setting('storage.video_fingerprint') and app.user %}*/
/*             data-fingerprint="{{ finger_print() }}"*/
/*           {% endif %}*/
/*             data-user-id="{{ app.user.id }}"*/
/*             data-balloon-player="1"*/
/*         ></div>*/
/*         <div class="watermarkEmbedded" ></div>*/
/* */
/*         <div class="lesson-content lesson-content-audio" id="lesson-audio-content" data-role="lesson-content" style="display:none;"></div>*/
/*         <div class="lesson-content" id="lesson-swf-content" data-role="lesson-content" style="display:none;"></div>*/
/*         <div class="lesson-content" id="lesson-iframe-content" data-role="lesson-content" style="display:none;"></div>*/
/*         <div class="lesson-content lesson-content-text" id="lesson-text-content" data-role="lesson-content" style="display:none;"*/
/*         {% if setting('course.copy_enabled')|default(0) > 0 %} oncopy="return false;" oncut="return false;" onselectstart="return false" oncontextmenu="return false;"{% endif %}>*/
/*           <div class="lesson-content-text-body"></div>*/
/*         </div>*/
/* */
/*         <div class="lesson-content lesson-content-document" id="lesson-document-content" data-role="lesson-content" style="display:none;"*/
/*             {% if setting('magic.doc_watermark') %}data-watermark-url="{{ path('cloud_doc_watermark') }}" {% endif %}*/
/*           >*/
/*           <div class="lesson-content-document-body"></div>*/
/*         </div>   */
/* */
/*         <div class="lesson-content lesson-content-text" id="lesson-live-content" data-role="lesson-content" style="display:none;">*/
/*           <div class="lesson-content-text-body"></div>*/
/*         </div>*/
/*         <div class="lesson-content lesson-content-text" id="lesson-unpublished-content" data-role="lesson-content" style="display:none;">*/
/*           <div class="lesson-content-text-body">当前课时正在编辑中，暂时无法观看。</div>*/
/*         </div>*/
/* */
/*         <div class="lesson-content lesson-content-text" id="lesson-testpaper-content" data-role="lesson-content" style="display:none;">*/
/*           <div class="lesson-content-text-body"></div>*/
/*         </div>*/
/*         <div class="lesson-content lesson-content-text" id="lesson-ppt-content" data-role="lesson-content" style="display:none;"*/
/*             {% if setting('magic.ppt_watermark') %}data-watermark-url="{{ path('cloud_ppt_watermark') }}" {% endif %}*/
/*           >*/
/*           <div class="lesson-content-text-body"></div>*/
/*         </div>*/
/* */
/*       </div>*/
/* */
/*       <div class="dashboard-footer clearfix">*/
/*         <div class="pull-right">*/
/*           <button class="btn btn-primary finish-btn" data-role="finish-lesson" style="display:none;"><span class="glyphicon glyphicon-unchecked"></span> 学过了</button>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/* */
/*     <div class="toolbar toolbar-open" id="lesson-dashboard-toolbar">*/
/*       <div class="toolbar-nav">*/
/* */
/*         <ul class="toolbar-nav-stacked" id="lesson-toolbar-primary"></ul>*/
/*         <ul class="list-unstyled">*/
/*           <li class="es-qrcode toolbar-qrcode" data-url="{{path('course_show',{id: course.id})}}">*/
/*             <i class="es-icon es-icon-qrcode"></i><br>*/
/*             扫一扫*/
/*             <span class="qrcode-popover">*/
/*               <img src="" alt="">*/
/*               扫二维码继续学习*/
/*             </span>*/
/*           </li>*/
/*         </ul>*/
/*         <ul class="toolbar-nav-stacked" id="lesson-toolbar-secondary">*/
/*           <li class="hide-pane" style="display:none;">*/
/*             <a href="javascript:"><span class="glyphicon glyphicon-chevron-right"></span></a>*/
/*           </li>*/
/*         </ul>*/
/* */
/*       </div>*/
/*       <div class="toolbar-pane-container">*/
/*       </div>*/
/*     </div>*/
/* */
/*   </div>*/
/* */
/*   <div class="modal" id="course-learned-modal" style="display:none;">*/
/*     <div class="modal-dialog">*/
/*       <div class="modal-content">*/
/*         <div class="modal-header">*/
/*           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>*/
/*           <h4 class="modal-title">学习进度提示</h4>*/
/*         </div>*/
/*         <div class="modal-body">*/
/*           <p class="text-success">赞一个，这个课程你已经都学完啦，你可以再回顾一下或者去看看别的课程～～～</p>*/
/*         </div>*/
/*         <div class="modal-footer">*/
/*           <a href="{{ path('course_show', {id:course.id}) }}" class="btn btn-primary">回课程主页</a>*/
/*         </div>*/
/*       </div><!-- /.modal-content -->*/
/*     </div><!-- /.modal-dialog -->*/
/*   </div><!-- /.modal -->*/
/* */
/*   <div class="modal" id="mediaPlayed-control-modal" style="display:none;">*/
/*     <div class="modal-dialog">*/
/*       <div class="modal-content">*/
/*         <div class="modal-header">*/
/*           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>*/
/*           <h4 class="modal-title">媒体课时学习提示</h4>*/
/*         </div>*/
/*         <div class="modal-body">*/
/*           <p class="text-success">此课时设置了必须完整播放完整个课时才能学完～～</p>*/
/*         </div>*/
/*       </div><!-- /.modal-content -->*/
/*     </div><!-- /.modal-dialog -->*/
/*   </div><!-- /.modal -->*/
/* */
/*   <div class="modal" id="homeworkDone-control-modal" style="display:none;">*/
/*     <div class="modal-dialog">*/
/*       <div class="modal-content">*/
/*         <div class="modal-header">*/
/*           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>*/
/*           <h4 class="modal-title">作业未完成提示</h4>*/
/*         </div>*/
/*         <div class="modal-body">*/
/*           <p class="text-success">此课时设置了必须做完本课时作业并提交后才能学完～～</p>*/
/*         </div>*/
/*       </div><!-- /.modal-content -->*/
/*     </div><!-- /.modal-dialog -->*/
/*   </div><!-- /.modal -->*/
/* */
/* */
/* {% endblock %}*/
/* */
/* */
