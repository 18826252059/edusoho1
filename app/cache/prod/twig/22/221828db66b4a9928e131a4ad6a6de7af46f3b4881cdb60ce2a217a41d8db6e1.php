<?php

/* CustomWebBundle:Classroom:introduction.html.twig */
class __TwigTemplate_59ee285667125ff7bd43200a7a93c402f31973658027e1a9cb57d7ef96b4b5c4 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\"/>
    <title>培育班详情</title>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"/>
    <meta name=\"apple-mobile-web-app-capable\" content=\"yes\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\"/>
    <meta name=\"keywords\" content=\"培育班详情\"/>
    <meta name=\"description\" content=\"培育班详情\"/>
    <link rel=\"icon\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->env->getExtension('topxia_web_twig')->getSetting("site.favicon")), "html", null, true);
        echo "\" type=\"image/x-icon\"/>
    <link rel=\"shortcut icon\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->env->getExtension('topxia_web_twig')->getSetting("site.favicon")), "html", null, true);
        echo "\" type=\"image/x-icon\" media=\"screen\"/>
    <link rel=\"stylesheet\" media=\"screen\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/h5/style/css/global.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" media=\"screen\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/h5/style/css/global-v2.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" media=\"screen\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/h5/style/css/course.css"), "html", null, true);
        echo "\"/>
</head>
<body>
<div class=\"g-wrap g-pb0\">
    ";
        // line 20
        echo "    ";
        // line 21
        echo "    <div class=\"class-detail\" style=\"background: #5dab2f\">
        <div class=\"courseDetail\">
            <a href=\"javascript:;\" class=\"courseList1\">
                <img src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "middlePicture", array()), "classroom.png"), "html", null, true);
        echo "\" width=\"100\" height=\"80\">

                <div class=\"list-right\">
                    <p class=\"s-course-name overline2\">";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "title", array()), "html", null, true);
        echo "</p>

                    <p class=\"s-course-progress\">
                        <span>";
        // line 30
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "studentNum", array()) + $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "auditorNum", array())), "html", null, true);
        echo "人</span>
                        <span class=\"g-fr\">";
        // line 31
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "courseNum", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "courseNum", array()), "0")) : ("0")), "html", null, true);
        echo "个课程</span></p>
                </div>
            </a>
        </div>
    </div>
    <div>
        ";
        // line 37
        if (((array_key_exists("announcement", $context)) ? (_twig_default_filter((isset($context["announcement"]) ? $context["announcement"] : null), "")) : (""))) {
            // line 38
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("announcement_list", array("classroomId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
            echo "\">
        <div class=\"g-font-color5 bg-df9 g-mb10 overline1 base-adddress\" style=\"color: #FD8608\">
            ";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["announcement"]) ? $context["announcement"] : null), "title", array()), "html", null, true);
            if ((($this->getAttribute((isset($context["announcement"]) ? $context["announcement"] : null), "content", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["announcement"]) ? $context["announcement"] : null), "content", array()), "")) : (""))) {
                echo ": ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["announcement"]) ? $context["announcement"] : null), "content", array()), "html", null, true);
            }
            // line 41
            echo "            <span class=\"g-font-color3 add-icon ce-bg\" style=\"background: url(";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/h5/images/notice-icon.png"), "html", null, true);
            echo ") no-repeat  center / 15px auto !important;\"></span>
        </div>
            ";
        }
        // line 44
        echo "        </a>
        <div class=\"left-h2\">培育班介绍</div>
        <section class=\"g-mb10 bg-df9\">
            <article class=\"g-font-color course-detailContent\">
                ";
        // line 48
        echo twig_escape_filter($this->env, ((array_key_exists("classroomDescription", $context)) ? (_twig_default_filter((isset($context["classroomDescription"]) ? $context["classroomDescription"] : null), "")) : ("")), "html", null, true);
        echo "
            </article>
        </section>
        ";
        // line 51
        if ($this->env->getExtension('security')->isGranted("ROLE_BACKEND")) {
            // line 52
            echo "            <a href=\"lpmas://xiangnongyun/live/hls.lpmas.com/yunketang/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()), "html", null, true);
            echo "/playlist.m3u8\">
                <div class=\"g-font-color5 bg-df9 ";
            // line 53
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array()) && (($this->getAttribute((isset($context["teachers"]) ? $context["teachers"] : null), $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["teachers"]) ? $context["teachers"] : null), $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array()), array(), "array"), "")) : ("")))) {
            } else {
                echo "g-mb10 ";
            }
            echo " overline1 base-adddress ";
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array()) && (($this->getAttribute((isset($context["teachers"]) ? $context["teachers"] : null), $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["teachers"]) ? $context["teachers"] : null), $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array()), array(), "array"), "")) : ("")))) {
                echo "bor-b1 ";
            }
            echo "\">
                    现场监控
                    <span class=\"g-font-color3 add-icon ce-bg\"></span>
                    <span class=\"g-font-color3 add-dis\">设备";
            // line 56
            if (((isset($context["liveStatus"]) ? $context["liveStatus"] : null) == 1)) {
                echo "已连接";
            } else {
                echo "已断开";
            }
            echo "</span>
                </div>
            </a>
        ";
        }
        // line 60
        echo "
        ";
        // line 61
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()) && (($this->getAttribute((isset($context["teachers"]) ? $context["teachers"] : null), $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["teachers"]) ? $context["teachers"] : null), $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array()), array(), "array"), "")) : ("")))) {
            // line 62
            echo "            <a href=\"lpmas://xiangnongyun/classid/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "title", array()), "html", null, true);
            echo "\">
                <div class=\"g-font-color5 bg-df9 g-mb10 overline1 base-adddress\" id=\"live\">
                    传输现场情况
                    <span class=\"g-font-color3 add-icon ce-bg\"></span>
                </div>
            </a>
        ";
        }
        // line 69
        echo "        ";
        if (((array_key_exists("offlineSchedules", $context)) ? (_twig_default_filter((isset($context["offlineSchedules"]) ? $context["offlineSchedules"] : null), "")) : (""))) {
            // line 70
            echo "            <div class=\"left-h2 g-mt10\">线下课程表<a style=\"color: #5dab2f;\"
                                                href=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_offline_schedule", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
            echo "\"><span
                            class=\"course-rightPoint g-fr\">全部课程表</span></a></div>
            <section class=\"course-item\">
                <ul class=\"g-list\">
                    ";
            // line 75
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["offlineSchedules"]) ? $context["offlineSchedules"] : null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["offlineSchedule"]) {
                // line 76
                echo "                        <li>
                            <span class=\"list-num lh47\">";
                // line 77
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "</span>

                            <div class=\"list-div\">
                                <span class=\"list-title w50\">";
                // line 80
                echo twig_escape_filter($this->env, $this->getAttribute($context["offlineSchedule"], "title", array()), "html", null, true);
                echo "</span>
                                <span class=\"list-time w50\">";
                // line 81
                echo twig_escape_filter($this->env, $this->getAttribute($context["offlineSchedule"], "startTime", array()), "html", null, true);
                echo "
                                    -";
                // line 82
                echo twig_escape_filter($this->env, $this->getAttribute($context["offlineSchedule"], "endTime", array()), "html", null, true);
                echo "</span>

                                <p class=\"g-pt20\">
                                    <span class=\"g-font-color2\">";
                // line 85
                echo twig_escape_filter($this->env, $this->getAttribute($context["offlineSchedule"], "teacher", array()), "html", null, true);
                echo "   ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["offlineSchedule"], "address", array()), "html", null, true);
                echo "</span>
                                    <span class=\"g-fr\"><img src=\"";
                // line 86
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/h5/images/ui-play.png"), "html", null, true);
                echo "\"
                                                            class=\"ui-play\"></span>
                                </p>
                            </div>
                        </li>
                    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['offlineSchedule'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            echo "                </ul>
            </section>
        ";
        }
        // line 95
        echo "
        ";
        // line 96
        if ((isset($context["courses"]) ? $context["courses"] : null)) {
            // line 97
            echo "            <div class=\"left-h2\">视频课程<a style=\"color: #5dab2f;\"
                                        href=\"";
            // line 98
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lp_classroom_courses", array("classroomId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
            echo "\"><span
                            class=\"course-rightPoint g-fr\">全部课程</span></a></div>
            <section class=\"bg-df9 g-mb10 last-bor\">
                ";
            // line 101
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["courses"]) ? $context["courses"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
                // line 102
                echo "                    <div class=\"courseDetail\">
                        <a href=\"";
                // line 103
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_detail", array("id" => $this->getAttribute($context["course"], "id", array()))), "html", null, true);
                echo "\" class=\"courseList1\">
                            <img src=\"";
                // line 104
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute($context["course"], "middlePicture", array()), "classroom.png"), "html", null, true);
                echo "\" width=\"100\" height=\"80\">

                            <div class=\"list-right\">
                                <p class=\"s-course-name overline2\">";
                // line 107
                echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "title", array()), "html", null, true);
                echo "</p>

                                <p class=\"s-course-progress\">
                                    <span>";
                // line 110
                echo twig_escape_filter($this->env, (($this->getAttribute($context["course"], "lessonNum", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["course"], "lessonNum", array()), "0")) : ("0")), "html", null, true);
                echo "个课程</span>
                                    <span class=\"g-fr\">共";
                // line 111
                echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "studentNum", array()), "html", null, true);
                echo "人</span></p>
                            </div>
                        </a>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 116
            echo "            </section>
        ";
        }
        // line 118
        echo "
        <section class=\"g-mt10\"></section>
        <div class=\"left-h2\">课程专家</div>
        <section class=\"clearfix g-mb10 course-experts\">
            ";
        // line 122
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["teachers"]) ? $context["teachers"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["teacher"]) {
            // line 123
            echo "                <div class=\"course-expertsDetail\">
                    <a href=\"javascript:;\">
                        <img src=\"";
            // line 125
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute($context["teacher"], "mediumAvatar", array()), "avatar.png"), "html", null, true);
            echo "\" width=\"50\" height=\"50\">

                        <p class=\"overline1 g-font-color\">";
            // line 127
            echo twig_escape_filter($this->env, $this->getAttribute($context["teacher"], "nickname", array()), "html", null, true);
            echo "</p>

                        <p class=\"overline1 g-font-color2\">";
            // line 129
            echo twig_escape_filter($this->env, $this->getAttribute($context["teacher"], "title", array()), "html", null, true);
            echo "</p>
                    </a>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['teacher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 133
        echo "        </section>

        ";
        // line 135
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("CustomWebBundle:Classroom:latestMembersBlock", array("classroomId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))));
        echo "
        ";
        // line 136
        if ($this->getAttribute((isset($context["jiaocheng"]) ? $context["jiaocheng"] : null), "materials", array())) {
            // line 137
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["jiaocheng"]) ? $context["jiaocheng"] : null), "url", array()), "html", null, true);
            echo "\"><div class=\"left-h2\">精选教材 <span class=\"course-rightPoint g-fr\">更多教材</span></div></a>

            <section class=\"bg-df9 g-mb10 last-bor\">
                ";
            // line 140
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["jiaocheng"]) ? $context["jiaocheng"] : null), "materials", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 141
                echo "                    <div class=\"courseDetail\">
                        <a href=\"";
                // line 142
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "url", array()), "html", null, true);
                echo "\" class=\"courseList1\">
                            <img src=\"";
                // line 143
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "thumbUrl", array()), "html", null, true);
                echo "\" width=\"55\" height=\"80\" style=\"margin-left:30px;\">

                            <div class=\"list-right es-book\">
                                <p class=\"s-course-name overline1\">";
                // line 146
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "productTitle", array()), "html", null, true);
                echo "</p>
                                ";
                // line 148
                echo "                                ";
                // line 149
                echo "                                ";
                // line 150
                echo "                                ";
                if ($this->getAttribute($context["product"], "offerPrice", array())) {
                    // line 151
                    echo "                                    <p class=\"g-font-color4\">";
                    if (($this->getAttribute($context["product"], "currency", array()) == "CNY")) {
                        echo "￥";
                    }
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "offerPrice", array()), "html", null, true);
                    echo "</p>
                                ";
                }
                // line 153
                echo "                            </div>
                        </a>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 157
            echo "            </section>
        ";
        }
        // line 159
        echo "        ";
        $this->loadTemplate("CustomWebBundle:Course:nongzi.html.twig", "CustomWebBundle:Classroom:introduction.html.twig", 159)->display($context);
        // line 160
        echo "        ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("CustomWebBundle:Classroom:recommendClassroom"));
        echo "
        ";
        // line 161
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("CustomWebBundle:Classroom:attachment", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))));
        echo "
    </div>
</div>
<div class=\"tipBox\">
    <div class=\"tipDiv\">
        <i class=\"i-cancel\" onclick=\"hideBox()\"></i>

        <p>开发中</p></div>
</div>
<script src=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/h5/js/src/vendor/jquery-2.1.0.min.js"), "html", null, true);
        echo "\"></script>
<script>
    function hideBox() {
        \$('.tipBox').hide();
        \$('body').css('overflow', 'auto');
    }
    function tipAlert() {
        \$('.tipBox').show();
        \$('body').css('overflow', 'hidden');
    }
</script>
";
        // line 181
        $this->loadTemplate("CustomWebBundle::tongji.html.twig", "CustomWebBundle:Classroom:introduction.html.twig", 181)->display($context);
        // line 182
        echo "</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "CustomWebBundle:Classroom:introduction.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  445 => 182,  443 => 181,  429 => 170,  417 => 161,  412 => 160,  409 => 159,  405 => 157,  396 => 153,  387 => 151,  384 => 150,  382 => 149,  380 => 148,  376 => 146,  370 => 143,  366 => 142,  363 => 141,  359 => 140,  352 => 137,  350 => 136,  346 => 135,  342 => 133,  332 => 129,  327 => 127,  322 => 125,  318 => 123,  314 => 122,  308 => 118,  304 => 116,  293 => 111,  289 => 110,  283 => 107,  277 => 104,  273 => 103,  270 => 102,  266 => 101,  260 => 98,  257 => 97,  255 => 96,  252 => 95,  247 => 92,  227 => 86,  221 => 85,  215 => 82,  211 => 81,  207 => 80,  201 => 77,  198 => 76,  181 => 75,  174 => 71,  171 => 70,  168 => 69,  155 => 62,  153 => 61,  150 => 60,  139 => 56,  126 => 53,  121 => 52,  119 => 51,  113 => 48,  107 => 44,  100 => 41,  94 => 40,  88 => 38,  86 => 37,  77 => 31,  73 => 30,  67 => 27,  61 => 24,  56 => 21,  54 => 20,  47 => 15,  43 => 14,  39 => 13,  35 => 12,  31 => 11,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/*     <meta http-equiv="content-type" content="text/html; charset=utf-8"/>*/
/*     <title>培育班详情</title>*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge"/>*/
/*     <meta name="apple-mobile-web-app-capable" content="yes"/>*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>*/
/*     <meta name="keywords" content="培育班详情"/>*/
/*     <meta name="description" content="培育班详情"/>*/
/*     <link rel="icon" href="{{ asset(setting('site.favicon')) }}" type="image/x-icon"/>*/
/*     <link rel="shortcut icon" href="{{ asset(setting('site.favicon')) }}" type="image/x-icon" media="screen"/>*/
/*     <link rel="stylesheet" media="screen" href="{{ asset('themes/h5/style/css/global.css') }}"/>*/
/*     <link rel="stylesheet" media="screen" href="{{ asset('themes/h5/style/css/global-v2.css') }}"/>*/
/*     <link rel="stylesheet" media="screen" href="{{ asset('themes/h5/style/css/course.css') }}"/>*/
/* </head>*/
/* <body>*/
/* <div class="g-wrap g-pb0">*/
/*     {#<div class="g-h2 f-tac"><a href="javascript:;" class="back-a"><i class="back-point"></i></a>培育班详情</div>#}*/
/*     {#<div class="placeHolder"></div>#}*/
/*     <div class="class-detail" style="background: #5dab2f">*/
/*         <div class="courseDetail">*/
/*             <a href="javascript:;" class="courseList1">*/
/*                 <img src="{{ filepath(classroom.middlePicture, 'classroom.png') }}" width="100" height="80">*/
/* */
/*                 <div class="list-right">*/
/*                     <p class="s-course-name overline2">{{ classroom.title }}</p>*/
/* */
/*                     <p class="s-course-progress">*/
/*                         <span>{{ classroom.studentNum + classroom.auditorNum }}人</span>*/
/*                         <span class="g-fr">{{ classroom.courseNum|default('0') }}个课程</span></p>*/
/*                 </div>*/
/*             </a>*/
/*         </div>*/
/*     </div>*/
/*     <div>*/
/*         {% if announcement|default('') %}*/
/*         <a href="{{ path('announcement_list',{'classroomId':classroom.id })}}">*/
/*         <div class="g-font-color5 bg-df9 g-mb10 overline1 base-adddress" style="color: #FD8608">*/
/*             {{ announcement.title }}{% if announcement.content|default('') %}: {{ announcement.content }}{% endif %}*/
/*             <span class="g-font-color3 add-icon ce-bg" style="background: url({{ asset('themes/h5/images/notice-icon.png') }}) no-repeat  center / 15px auto !important;"></span>*/
/*         </div>*/
/*             {% endif %}*/
/*         </a>*/
/*         <div class="left-h2">培育班介绍</div>*/
/*         <section class="g-mb10 bg-df9">*/
/*             <article class="g-font-color course-detailContent">*/
/*                 {{ classroomDescription|default('') }}*/
/*             </article>*/
/*         </section>*/
/*         {% if is_granted('ROLE_BACKEND') %}*/
/*             <a href="lpmas://xiangnongyun/live/hls.lpmas.com/yunketang/{{ classroom.id }}/playlist.m3u8">*/
/*                 <div class="g-font-color5 bg-df9 {% if app.user.id and teachers[app.user.id]|default('') %}{% else %}g-mb10 {% endif %} overline1 base-adddress {% if app.user.id and teachers[app.user.id]|default('') %}bor-b1 {% endif %}">*/
/*                     现场监控*/
/*                     <span class="g-font-color3 add-icon ce-bg"></span>*/
/*                     <span class="g-font-color3 add-dis">设备{% if liveStatus==1 %}已连接{% else %}已断开{% endif %}</span>*/
/*                 </div>*/
/*             </a>*/
/*         {% endif %}*/
/* */
/*         {% if app.user and teachers[app.user.id]|default('') %}*/
/*             <a href="lpmas://xiangnongyun/classid/{{ classroom.id }}/{{ classroom.title }}">*/
/*                 <div class="g-font-color5 bg-df9 g-mb10 overline1 base-adddress" id="live">*/
/*                     传输现场情况*/
/*                     <span class="g-font-color3 add-icon ce-bg"></span>*/
/*                 </div>*/
/*             </a>*/
/*         {% endif %}*/
/*         {% if offlineSchedules|default('') %}*/
/*             <div class="left-h2 g-mt10">线下课程表<a style="color: #5dab2f;"*/
/*                                                 href="{{ path('classroom_offline_schedule',{id:classroom.id}) }}"><span*/
/*                             class="course-rightPoint g-fr">全部课程表</span></a></div>*/
/*             <section class="course-item">*/
/*                 <ul class="g-list">*/
/*                     {% for offlineSchedule in offlineSchedules %}*/
/*                         <li>*/
/*                             <span class="list-num lh47">{{ loop.index }}</span>*/
/* */
/*                             <div class="list-div">*/
/*                                 <span class="list-title w50">{{ offlineSchedule.title }}</span>*/
/*                                 <span class="list-time w50">{{ offlineSchedule.startTime }}*/
/*                                     -{{ offlineSchedule.endTime }}</span>*/
/* */
/*                                 <p class="g-pt20">*/
/*                                     <span class="g-font-color2">{{ offlineSchedule.teacher }}   {{ offlineSchedule.address }}</span>*/
/*                                     <span class="g-fr"><img src="{{ asset('themes/h5/images/ui-play.png') }}"*/
/*                                                             class="ui-play"></span>*/
/*                                 </p>*/
/*                             </div>*/
/*                         </li>*/
/*                     {% endfor %}*/
/*                 </ul>*/
/*             </section>*/
/*         {% endif %}*/
/* */
/*         {% if courses %}*/
/*             <div class="left-h2">视频课程<a style="color: #5dab2f;"*/
/*                                         href="{{ path('lp_classroom_courses',{classroomId:classroom.id}) }}"><span*/
/*                             class="course-rightPoint g-fr">全部课程</span></a></div>*/
/*             <section class="bg-df9 g-mb10 last-bor">*/
/*                 {% for course in courses %}*/
/*                     <div class="courseDetail">*/
/*                         <a href="{{ path('course_detail',{id:course.id}) }}" class="courseList1">*/
/*                             <img src="{{ filepath(course.middlePicture, 'classroom.png') }}" width="100" height="80">*/
/* */
/*                             <div class="list-right">*/
/*                                 <p class="s-course-name overline2">{{ course.title }}</p>*/
/* */
/*                                 <p class="s-course-progress">*/
/*                                     <span>{{ course.lessonNum|default('0') }}个课程</span>*/
/*                                     <span class="g-fr">共{{ course.studentNum }}人</span></p>*/
/*                             </div>*/
/*                         </a>*/
/*                     </div>*/
/*                 {% endfor %}*/
/*             </section>*/
/*         {% endif %}*/
/* */
/*         <section class="g-mt10"></section>*/
/*         <div class="left-h2">课程专家</div>*/
/*         <section class="clearfix g-mb10 course-experts">*/
/*             {% for teacher in teachers %}*/
/*                 <div class="course-expertsDetail">*/
/*                     <a href="javascript:;">*/
/*                         <img src="{{ filepath(teacher.mediumAvatar, 'avatar.png') }}" width="50" height="50">*/
/* */
/*                         <p class="overline1 g-font-color">{{ teacher.nickname }}</p>*/
/* */
/*                         <p class="overline1 g-font-color2">{{ teacher.title }}</p>*/
/*                     </a>*/
/*                 </div>*/
/*             {% endfor %}*/
/*         </section>*/
/* */
/*         {{ render(controller('CustomWebBundle:Classroom:latestMembersBlock',{classroomId:classroom.id})) }}*/
/*         {% if jiaocheng.materials %}*/
/*         <a href="{{ jiaocheng.url }}"><div class="left-h2">精选教材 <span class="course-rightPoint g-fr">更多教材</span></div></a>*/
/* */
/*             <section class="bg-df9 g-mb10 last-bor">*/
/*                 {% for product in  jiaocheng.materials %}*/
/*                     <div class="courseDetail">*/
/*                         <a href="{{ product.url }}" class="courseList1">*/
/*                             <img src="{{ product.thumbUrl }}" width="55" height="80" style="margin-left:30px;">*/
/* */
/*                             <div class="list-right es-book">*/
/*                                 <p class="s-course-name overline1">{{ product.productTitle }}</p>*/
/*                                 {#<p class="s-course-progress">#}*/
/*                                 {#<span>作家:陈明斌</span>#}*/
/*                                 {#</p>#}*/
/*                                 {% if product.offerPrice %}*/
/*                                     <p class="g-font-color4">{% if product.currency=='CNY' %}￥{% endif %}{{ product.offerPrice }}</p>*/
/*                                 {% endif %}*/
/*                             </div>*/
/*                         </a>*/
/*                     </div>*/
/*                 {% endfor %}*/
/*             </section>*/
/*         {% endif %}*/
/*         {% include 'CustomWebBundle:Course:nongzi.html.twig' %}*/
/*         {{ render(controller('CustomWebBundle:Classroom:recommendClassroom')) }}*/
/*         {{ render(controller('CustomWebBundle:Classroom:attachment',{id:classroom.id})) }}*/
/*     </div>*/
/* </div>*/
/* <div class="tipBox">*/
/*     <div class="tipDiv">*/
/*         <i class="i-cancel" onclick="hideBox()"></i>*/
/* */
/*         <p>开发中</p></div>*/
/* </div>*/
/* <script src="{{ asset('themes/h5/js/src/vendor/jquery-2.1.0.min.js') }}"></script>*/
/* <script>*/
/*     function hideBox() {*/
/*         $('.tipBox').hide();*/
/*         $('body').css('overflow', 'auto');*/
/*     }*/
/*     function tipAlert() {*/
/*         $('.tipBox').show();*/
/*         $('body').css('overflow', 'hidden');*/
/*     }*/
/* </script>*/
/* {% include "CustomWebBundle::tongji.html.twig"  %}*/
/* </body>*/
/* </html>*/
/* */
