<?php

/* TopxiaWebBundle:CourseLesson:preview-modal.html.twig */
class __TwigTemplate_5a9620463153ed38f9b70052666ca65ea8bf5d4885ee2ec477908a088bcd5c20 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "TopxiaWebBundle:CourseLesson:preview-modal.html.twig", 1);
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
        echo "<span class=\"text-muted\">课时预览:</span> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "title", array()), "html", null, true);
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "    <link rel=\"stylesheet\" media=\"screen\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/libs/balloon-video-player/1.3.0/src/skin/video-js-debug.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
  
\t";
        // line 10
        if (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "status", array()) == "published")) {
            // line 11
            echo "\t  ";
            if (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "mediaSource", array()) == "iframe")) {
                // line 12
                echo "      <div id=\"lesson-preview-iframe\" data-url=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "mediaUri", array()), "html", null, true);
                echo "\" style=\"display:none;\">
      </div>
\t\t";
            } elseif ((($this->getAttribute(            // line 14
(isset($context["lesson"]) ? $context["lesson"] : null), "type", array()) == "video") || ($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "type", array()) == "audio"))) {
                // line 15
                echo "\t\t\t";
                if (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "mediaSource", array()) == "self")) {
                    // line 16
                    echo "\t\t\t\t<div id=\"lesson-preview-player\" 
          style=\"height:300px;overflow:hidden\"
          data-balloon-player=\"1\"
          ";
                    // line 19
                    if ( !$this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "free", array())) {
                        // line 20
                        echo "            data-timelimit=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "tryLookTime", array()), "html", null, true);
                        echo "\"
          ";
                    }
                    // line 22
                    echo "          data-player-url=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_lesson_player", array("courseId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "courseId", array()), "lessonId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "id", array()), "isPreview" => 1)), "html", null, true);
                    echo "\"
          ";
                    // line 23
                    if (($this->env->getExtension('topxia_web_twig')->getSetting("storage.video_watermark") && $this->env->getExtension('topxia_web_twig')->getSetting("storage.video_watermark_image"))) {
                        // line 24
                        echo "            data-watermark=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFileUrl($this->env->getExtension('topxia_web_twig')->getSetting("storage.video_watermark_image"), null, true), "html", null, true);
                        echo "\"
          ";
                    }
                    // line 26
                    echo "          ";
                    if (($this->env->getExtension('topxia_web_twig')->getSetting("storage.video_fingerprint") && $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()))) {
                        // line 27
                        echo "            data-fingerprint=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("cloud_video_fingerprint", array("userId" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array()))), "html", null, true);
                        echo "\"
          ";
                    }
                    // line 29
                    echo "        ></div>
        <div class=\"js-time-limit-dev hidden\">
          <div style=\"height:360px;background-color:black;\" class=\"text-center\">
            <br><br><br><br>
            <br><br><br><br>
            <div style=\"font-size:20px;color:#fff;\">
              立刻购买本课程，即可获得全部完整学习内容。
            </div>
          </div>
          <div class=\"js-buy-text\">
            <span class=\"text-success\">
              您可以免费试看前";
                    // line 40
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "tryLookTime", array()), "html", null, true);
                    echo "分钟，购买后可完整观看。
            </span>
          </div>
        </div>
        <input type=\"hidden\" id=\"videoWatermarkEmbedded\" value=\"";
                    // line 44
                    echo twig_escape_filter($this->env, (isset($context["hasVideoWatermarkEmbedded"]) ? $context["hasVideoWatermarkEmbedded"] : null), "html", null, true);
                    echo "\">
      ";
                } else {
                    // line 46
                    echo "        <div id=\"lesson-preview-swf-player\" data-url=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "mediaUri", array()), "html", null, true);
                    echo "\"></div>
      ";
                }
                // line 48
                echo "    ";
            } elseif (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "type", array()) == "ppt")) {
                // line 49
                echo "      <div id=\"lesson-preview-ppt-player\" data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_lesson_ppt", array("courseId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "courseId", array()), "lessonId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "id", array()))), "html", null, true);
                echo "\" class=\"lesson-preview-ppt\"></div>
    ";
            } elseif (($this->getAttribute(            // line 50
(isset($context["lesson"]) ? $context["lesson"] : null), "type", array()) == "document")) {
                // line 51
                echo "      <div id=\"lesson-preview-doucment\" data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_lesson_document", array("courseId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "courseId", array()), "lessonId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "id", array()))), "html", null, true);
                echo "\" ";
                if ($this->env->getExtension('topxia_web_twig')->getSetting("magic.doc_watermark")) {
                    echo "data-watermark-url=\"";
                    echo $this->env->getExtension('routing')->getPath("cloud_doc_watermark");
                    echo "\" ";
                }
                echo "></div>
    ";
            } elseif (($this->getAttribute(            // line 52
(isset($context["lesson"]) ? $context["lesson"] : null), "type", array()) == "flash")) {
                // line 53
                echo "      <div id=\"lesson-preview-flash\" data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_lesson_flash", array("courseId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "courseId", array()), "lessonId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "id", array()))), "html", null, true);
                echo "\" ></div>
    ";
            } else {
                // line 55
                echo "      <div ";
                if ((_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("course.copy_enabled"), 0) > 0)) {
                    echo " oncopy=\"return false;\" oncut=\"return false;\" onselectstart=\"return false\" oncontextmenu=\"return false;\"";
                }
                echo ">
        ";
                // line 56
                echo $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "content", array());
                echo "
      </div>
    ";
            }
            // line 59
            echo "  ";
        } else {
            // line 60
            echo "    <div class=\"empty\">课时尚未发布，无法预览！</div>
  ";
        }
        // line 62
        echo "  <script>app.load('course/lesson-preview')</script>
";
    }

    // line 65
    public function block_footer($context, array $blocks = array())
    {
        // line 66
        echo "  <span class=\"es-qrcode bottom mrl\" data-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_lesson_qrcode", array("lessonId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "id", array()), "courseId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "courseId", array()))), "html", null, true);
        echo "\">
    <i class=\"es-icon es-icon-qrcode\"></i>
    <span class=\"qrcode-popover\">
      <img src=\"\" alt=\"\">
      扫二维码继续学习
    </span>
  </span>
  ";
        // line 73
        if ($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "buyable", array())) {
            // line 74
            echo "   ";
            if ((($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "status", array()) == "published") && ($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "parentId", array()) == "0"))) {
                // line 75
                echo "
    ";
                // line 76
                if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "price", array()) == "0.00")) {
                    // line 77
                    echo "      <a id=\"js-buy-btn\" type=\"button\" class=\"btn btn-primary js-buy-btn\" 
        ";
                    // line 78
                    if ((_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("course.buy_fill_userinfo"), false) || (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "approval", array()) && $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array())) && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "approvalStatus", array()) != "approved")))) {
                        // line 79
                        echo "          href=\"#modal\" 
          data-toggle=\"modal\" 
          data-url=\"";
                        // line 81
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_buy", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "targetType" => "course")), "html", null, true);
                        echo "\"
        ";
                    } else {
                        // line 83
                        echo "          href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("order_show", array("targetId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "targetType" => "course")), "html", null, true);
                        echo "\"
        ";
                    }
                    // line 85
                    echo "      >
        ";
                    // line 86
                    if ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array())) {
                        // line 87
                        echo "          免费加入学习
        ";
                    } else {
                        // line 89
                        echo "          登录后加入学习
        ";
                    }
                    // line 91
                    echo "      </a>
    ";
                } else {
                    // line 93
                    echo "      <a id=\"js-buy-btn\" type=\"button\" class=\"btn btn-primary js-buy-btn\" 
        ";
                    // line 94
                    if (((_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("course.buy_fill_userinfo"), false) || ((isset($context["vipStatus"]) ? $context["vipStatus"] : null) == "ok")) || (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "approval", array()) && $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array())) && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "approvalStatus", array()) != "approved")))) {
                        // line 95
                        echo "          href=\"javascript:;\" 
          data-url=\"";
                        // line 96
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_buy", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "targetType" => "course")), "html", null, true);
                        echo "\"
        ";
                    } else {
                        // line 98
                        echo "          href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("order_show", array("targetId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "targetType" => "course")), "html", null, true);
                        echo "\"
        ";
                    }
                    // line 100
                    echo "      >
        ";
                    // line 101
                    if ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array())) {
                        // line 102
                        echo "          ";
                        if (((isset($context["vipStatus"]) ? $context["vipStatus"] : null) == "ok")) {
                            // line 103
                            echo "            觉得不错？点击加入此课程
          ";
                        } else {
                            // line 105
                            echo "            觉得不错？点击购买此课程（";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "price", array()), "html", null, true);
                            echo "元）
          ";
                        }
                        // line 107
                        echo "        ";
                    } else {
                        // line 108
                        echo "          登录后购买学习完整的课程
        ";
                    }
                    // line 110
                    echo "      </a>
    ";
                }
                // line 112
                echo "  ";
            }
            echo " 
 ";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseLesson:preview-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  294 => 112,  290 => 110,  286 => 108,  283 => 107,  277 => 105,  273 => 103,  270 => 102,  268 => 101,  265 => 100,  259 => 98,  254 => 96,  251 => 95,  249 => 94,  246 => 93,  242 => 91,  238 => 89,  234 => 87,  232 => 86,  229 => 85,  223 => 83,  218 => 81,  214 => 79,  212 => 78,  209 => 77,  207 => 76,  204 => 75,  201 => 74,  199 => 73,  188 => 66,  185 => 65,  180 => 62,  176 => 60,  173 => 59,  167 => 56,  160 => 55,  154 => 53,  152 => 52,  141 => 51,  139 => 50,  134 => 49,  131 => 48,  125 => 46,  120 => 44,  113 => 40,  100 => 29,  94 => 27,  91 => 26,  85 => 24,  83 => 23,  78 => 22,  72 => 20,  70 => 19,  65 => 16,  62 => 15,  60 => 14,  54 => 12,  51 => 11,  49 => 10,  43 => 8,  40 => 7,  33 => 5,  29 => 1,  27 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::bootstrap-modal-layout.html.twig' %}*/
/* */
/* {% set modal_class = 'modal-lg' %}*/
/* */
/* {% block title %}<span class="text-muted">课时预览:</span> {{lesson.title}}{% endblock %}*/
/* */
/* {% block body %}*/
/*     <link rel="stylesheet" media="screen" href="{{asset('assets/libs/balloon-video-player/1.3.0/src/skin/video-js-debug.css') }}" rel="stylesheet" type="text/css">*/
/*   */
/* 	{% if lesson.status == 'published' %}*/
/* 	  {% if lesson.mediaSource == 'iframe' %}*/
/*       <div id="lesson-preview-iframe" data-url="{{ lesson.mediaUri }}" style="display:none;">*/
/*       </div>*/
/* 		{% elseif lesson.type == 'video' or lesson.type == 'audio' %}*/
/* 			{% if lesson.mediaSource == 'self' %}*/
/* 				<div id="lesson-preview-player" */
/*           style="height:300px;overflow:hidden"*/
/*           data-balloon-player="1"*/
/*           {% if not lesson.free %}*/
/*             data-timelimit="{{ course.tryLookTime }}"*/
/*           {% endif %}*/
/*           data-player-url="{{path('course_lesson_player', {courseId:lesson.courseId, lessonId:lesson.id, isPreview:1})}}"*/
/*           {% if setting('storage.video_watermark') and setting('storage.video_watermark_image') %}*/
/*             data-watermark="{{ file_url(setting('storage.video_watermark_image'), null, true) }}"*/
/*           {% endif %}*/
/*           {% if setting('storage.video_fingerprint') and app.user %}*/
/*             data-fingerprint="{{ url('cloud_video_fingerprint', {userId:app.user.id}) }}"*/
/*           {% endif %}*/
/*         ></div>*/
/*         <div class="js-time-limit-dev hidden">*/
/*           <div style="height:360px;background-color:black;" class="text-center">*/
/*             <br><br><br><br>*/
/*             <br><br><br><br>*/
/*             <div style="font-size:20px;color:#fff;">*/
/*               立刻购买本课程，即可获得全部完整学习内容。*/
/*             </div>*/
/*           </div>*/
/*           <div class="js-buy-text">*/
/*             <span class="text-success">*/
/*               您可以免费试看前{{ course.tryLookTime }}分钟，购买后可完整观看。*/
/*             </span>*/
/*           </div>*/
/*         </div>*/
/*         <input type="hidden" id="videoWatermarkEmbedded" value="{{ hasVideoWatermarkEmbedded }}">*/
/*       {% else %}*/
/*         <div id="lesson-preview-swf-player" data-url="{{ lesson.mediaUri }}"></div>*/
/*       {% endif %}*/
/*     {% elseif lesson.type == 'ppt' %}*/
/*       <div id="lesson-preview-ppt-player" data-url="{{ path('course_lesson_ppt', {courseId:lesson.courseId, lessonId:lesson.id}) }}" class="lesson-preview-ppt"></div>*/
/*     {% elseif lesson.type == 'document' %}*/
/*       <div id="lesson-preview-doucment" data-url="{{ path('course_lesson_document', {courseId:lesson.courseId, lessonId:lesson.id}) }}" {% if setting('magic.doc_watermark') %}data-watermark-url="{{ path('cloud_doc_watermark') }}" {% endif %}></div>*/
/*     {% elseif lesson.type == 'flash' %}*/
/*       <div id="lesson-preview-flash" data-url="{{ path('course_lesson_flash', {courseId:lesson.courseId, lessonId:lesson.id}) }}" ></div>*/
/*     {% else %}*/
/*       <div {% if setting('course.copy_enabled')|default(0) > 0 %} oncopy="return false;" oncut="return false;" onselectstart="return false" oncontextmenu="return false;"{% endif %}>*/
/*         {{ lesson.content|raw }}*/
/*       </div>*/
/*     {% endif %}*/
/*   {% else %}*/
/*     <div class="empty">课时尚未发布，无法预览！</div>*/
/*   {% endif %}*/
/*   <script>app.load('course/lesson-preview')</script>*/
/* {% endblock %}*/
/* */
/* {% block footer %}*/
/*   <span class="es-qrcode bottom mrl" data-url="{{path('course_lesson_qrcode',{lessonId: lesson.id,courseId: lesson.courseId})}}">*/
/*     <i class="es-icon es-icon-qrcode"></i>*/
/*     <span class="qrcode-popover">*/
/*       <img src="" alt="">*/
/*       扫二维码继续学习*/
/*     </span>*/
/*   </span>*/
/*   {% if course.buyable %}*/
/*    {% if lesson.status == 'published' and course.parentId == '0' %}*/
/* */
/*     {% if course.price == '0.00'  %}*/
/*       <a id="js-buy-btn" type="button" class="btn btn-primary js-buy-btn" */
/*         {% if setting("course.buy_fill_userinfo")|default(false) or (course.approval and app.user and app.user.approvalStatus != 'approved') %}*/
/*           href="#modal" */
/*           data-toggle="modal" */
/*           data-url="{{ path('course_buy', {id:course.id, targetType:'course'}) }}"*/
/*         {% else %}*/
/*           href="{{ path('order_show', {targetId:course.id, targetType:'course'}) }}"*/
/*         {% endif %}*/
/*       >*/
/*         {% if user.id %}*/
/*           免费加入学习*/
/*         {% else %}*/
/*           登录后加入学习*/
/*         {% endif %}*/
/*       </a>*/
/*     {% else %}*/
/*       <a id="js-buy-btn" type="button" class="btn btn-primary js-buy-btn" */
/*         {% if (setting("course.buy_fill_userinfo")|default(false) or vipStatus == 'ok' or (course.approval and app.user and app.user.approvalStatus != 'approved')) %}*/
/*           href="javascript:;" */
/*           data-url="{{ path('course_buy', {id:course.id, targetType:'course'}) }}"*/
/*         {% else %}*/
/*           href="{{ path('order_show', {targetId:course.id, targetType:'course'}) }}"*/
/*         {% endif %}*/
/*       >*/
/*         {% if user.id %}*/
/*           {% if vipStatus == 'ok' %}*/
/*             觉得不错？点击加入此课程*/
/*           {% else %}*/
/*             觉得不错？点击购买此课程（{{ course.price }}元）*/
/*           {% endif %}*/
/*         {% else %}*/
/*           登录后购买学习完整的课程*/
/*         {% endif %}*/
/*       </a>*/
/*     {% endif %}*/
/*   {% endif %} */
/*  {#  {% include 'TopxiaWebBundle:Course:Part/normal-header-buy-btn.html.twig' with {course:course,userVipStatus:vipStatus} %} #}*/
/* {% endif %}*/
/* {% endblock %}*/
