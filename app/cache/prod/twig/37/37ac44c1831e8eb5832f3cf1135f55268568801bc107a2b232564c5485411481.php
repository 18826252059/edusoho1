<?php

/* CustomWebBundle:Course:introduction.html.twig */
class __TwigTemplate_98fe0de493f449f042e1a3d63471a55ae0adcbfa13b15232ce91aa45465c0b0a extends Twig_Template
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
    <title>课程详情</title>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"/>
    <meta name=\"apple-mobile-web-app-capable\" content=\"yes\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\"/>
    <meta name=\"keywords\" content=\"课程详情\"/>
    <meta name=\"description\" content=\"课程详情\"/>
    <link rel=\"icon\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->env->getExtension('topxia_web_twig')->getSetting("site.favicon")), "html", null, true);
        echo "\" type=\"image/x-icon\"/>
    <link rel=\"shortcut icon\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->env->getExtension('topxia_web_twig')->getSetting("site.favicon")), "html", null, true);
        echo "\" type=\"image/x-icon\" media=\"screen\"/>
    ";
        // line 14
        echo "    <link rel=\"stylesheet\" media=\"screen\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/h5/style/css/bootstrap.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" media=\"screen\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/h5/style/css/willesPlay.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" media=\"screen\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/h5/style/css/global.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" media=\"screen\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/h5/style/css/global-v2.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" media=\"screen\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/h5/style/css/swiper/swiper.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" media=\"screen\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/h5/style/css/course.css"), "html", null, true);
        echo "\"/>
    <style>
        .course-list .swiper-slide{margin-top: 0;padding-bottom: 50px;}
        .course-list{margin-top: 50px;}
        .course-list .course-dots{position: relative;top:0;}
        .swiper-container{z-index: 9998;}
        .swiper-container .swiper-slide .box-contain{background: #eee;}
        .place-box{height: 200px;width: 100%;}
        /*add*/
        .g-video .video-play{    background-position: 0 -62px;}
        .canvas-img{position: absolute;width: 100%;max-height: 200px;display: block;}
    </style>
</head>
<body>
<div class=\"g-wrap g-pb0\">
    <div class=\"g-h2 f-tac\">
        <a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\" class=\"back-a\"><i class=\"back-point\"></i></a>课程详情
        <span class=\"header-icon collert-icon ";
        // line 36
        if ((isset($context["hasFavorited"]) ? $context["hasFavorited"] : null)) {
            echo "hascollect";
        } else {
            echo "nocollect";
        }
        echo "\"></span>
        ";
        // line 38
        echo "    </div>
    ";
        // line 39
        $context["video"] = 1;
        // line 40
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lessons"]) ? $context["lessons"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["lesson"]) {
            // line 41
            echo "        ";
            if ((((($this->getAttribute($context["lesson"], "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["lesson"], "type", array()), "")) : ("")) == "video") && ((isset($context["video"]) ? $context["video"] : null) == 1))) {
                // line 42
                echo "            <div id=\"willesPlay\" class=\"g-video\">
                <div class=\"playContent\">
                    <img src=\"";
                // line 44
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "middlePicture", array()), "course.png"), "html", null, true);
                echo "\" class=\"canvas-img\">
                    <video width=\"100%\" height=\"100%\" id=\"playVideo\" class=\"video-content\">
                        <source src=\"";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute($context["lesson"], "mediaUri", array()), "html", null, true);
                echo "\">
                        当前浏览器不支持 video直接播放
                    </video>
                    <div class=\"playTip glyphicon glyphicon-play\"></div>
                </div>
                <div class=\"playControll video-control\">
                    <div class=\"playPause playIcon video-play\"></div>
                    <div class=\"timebar\">
                        <span class=\"currentTime start-time\">0:00:00</span>

                        <div class=\"progress\">
                            <div class=\"progress-bar progress-bar-danger progress-bar-striped video-progress\"
                                 role=\"progressbar\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 0%\">
                                <div class=\"video-point\"></div>
                            </div>
                        </div>
                        <span class=\"duration total-time\">";
                // line 62
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->durationFilter($this->getAttribute($context["lesson"], "length", array())), "html", null, true);
                echo "</span>
                    </div>
                    <div class=\"otherControl\">
                        <span class=\"fullScreen glyphicon glyphicon-fullscreen video-fullscreen\"></span>
                    </div>
                </div>
            </div>
            ";
                // line 69
                $context["video"] = ((isset($context["video"]) ? $context["video"] : null) + 1);
                // line 70
                echo "        ";
            }
            // line 71
            echo "        ";
            if ((((($this->getAttribute($context["lesson"], "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["lesson"], "type", array()), "")) : ("")) == "live") && ((isset($context["video"]) ? $context["video"] : null) == 1))) {
                // line 72
                echo "            <div id=\"willesPlay\" class=\"g-video\">
                <div class=\"playContent\">
                    <img src=\"";
                // line 74
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "middlePicture", array()), "course.png"), "html", null, true);
                echo "\" class=\"canvas-img\">
                    <p class=\"countdown-tip\" style=\"display: none\">直播倒计时14:21</p>
                    <p class=\"goback-tip\" style=\"display: none\">直播已结束</p>
                    <video width=\"100%\" height=\"100%\" id=\"playVideo\" class=\"video-content\">
                        <source src=\"\">
                        当前浏览器不支持 video直接播放
                    </video>
                    <div class=\"playTip glyphicon glyphicon-play\"></div>
                </div>
                <div class=\"playControll video-control\">
                    <div class=\"playPause playIcon video-play\"></div>
                    <div class=\"timebar\">
                        <span class=\"currentTime start-time\">0:00:00</span>

                        <div class=\"progress\">
                            <div class=\"progress-bar progress-bar-danger progress-bar-striped video-progress\"
                                 role=\"progressbar\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 0%\">
                                <div class=\"video-point\"></div>
                            </div>
                        </div>
                        <span class=\"duration total-time\">";
                // line 94
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->durationFilter($this->getAttribute($context["lesson"], "length", array())), "html", null, true);
                echo "</span>
                    </div>
                    <div class=\"otherControl\">
                        <span class=\"fullScreen glyphicon glyphicon-fullscreen video-fullscreen\"></span>
                    </div>
                </div>
            </div>
            ";
                // line 101
                $context["video"] = ((isset($context["video"]) ? $context["video"] : null) + 1);
                // line 102
                echo "        ";
            }
            // line 103
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lesson'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "
    <div class=\"swiper-container course-list\">
        <div class=\"swiper-wrapper\">
            <div class=\"swiper-slide\">
                <div class=\"place-box\"></div>
                <div class=\"box-contain\">
                <div class=\"swiper-pagination course-dots\"></div>
                <div class=\"course-msg g-mb10\">
                    <h3>";
        // line 112
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "title", array()), "html", null, true);
        echo "</h3>
                    <span>";
        // line 113
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "lessonNum", array()), "html", null, true);
        echo "课时 共";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "studentNum", array()), "html", null, true);
        echo "人学习</span>
                </div>
                <div class=\"left-h2\">课程简介</div>
                <section class=\"g-mb10 bg-df9\">
                    <article class=\"g-font-color course-detailContent\">
                        ";
        // line 118
        echo $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "about", array());
        echo "
                    </article>
                </section>
                <a href=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_comment", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
        echo "\">
                    <div class=\"left-h2 g-mt10\">课程评论<span
                                class=\"course-rightPoint g-fr c-666\">";
        // line 123
        if ((isset($context["commentCount"]) ? $context["commentCount"] : null)) {
            echo twig_escape_filter($this->env, (isset($context["commentCount"]) ? $context["commentCount"] : null), "html", null, true);
            echo "条评论";
        } else {
            echo "查看评论";
        }
        echo "</span>
                    </div>
                </a>
                <div class=\"course-item\">
                    ";
        // line 127
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reviews"]) ? $context["reviews"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
            if ((($this->getAttribute((isset($context["reviewsUsers"]) ? $context["reviewsUsers"] : null), $this->getAttribute($context["review"], "userId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["reviewsUsers"]) ? $context["reviewsUsers"] : null), $this->getAttribute($context["review"], "userId", array()), array(), "array"), false)) : (false))) {
                // line 128
                echo "                        ";
                $context["user"] = $this->getAttribute((isset($context["reviewsUsers"]) ? $context["reviewsUsers"] : null), $this->getAttribute($context["review"], "userId", array()), array(), "array");
                // line 129
                echo "                        <div class=\"comment-box\">
                            <div class=\"head-img\">
                                <img src=\"";
                // line 131
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "smallAvatar", array()), "avatar.png"), "html", null, true);
                echo "\">
                            </div>
                            <div class=\"info-box\">
                                <p>";
                // line 134
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "nickname", array()), "html", null, true);
                echo "<span
                                            class=\"g-fr\">";
                // line 135
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["review"], "createdTime", array()), "Y-m-d H:i:s"), "html", null, true);
                echo "</span></p>

                                <div class=\"info-content\">
                                    ";
                // line 138
                echo twig_escape_filter($this->env, $this->getAttribute($context["review"], "content", array()), "html", null, true);
                echo "            </div>
                            </div>
                        </div>
                    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 142
        echo "
                </div>
                ";
        // line 144
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["teachers"]) ? $context["teachers"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["teacher"]) {
            // line 145
            echo "                    ";
            if (($this->getAttribute($context["loop"], "index", array()) < 2)) {
                // line 146
                echo "                        <div class=\"left-h2 g-mt10\">导师介绍</div>
                        <div class=\"course-item g-mb10\">
                            <div class=\"teacher-info\">
                                <div class=\"t-img\">
                                    <img src=\"";
                // line 150
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute($context["teacher"], "mediumAvatar", array()), "avatar.png"), "html", null, true);
                echo "\">
                                </div>
                                <h4 class=\"t-name\">";
                // line 152
                echo twig_escape_filter($this->env, $this->getAttribute($context["teacher"], "nickname", array()), "html", null, true);
                echo "</h4>

                                <p class=\"t-title\">";
                // line 154
                echo twig_escape_filter($this->env, $this->getAttribute($context["teacher"], "title", array()), "html", null, true);
                echo "</p>

                                <div class=\"t-content\">
                                    <span>";
                // line 157
                echo $this->getAttribute($context["teacher"], "about", array());
                echo "</span>
                                </div>
                                <div class=\"t-more\"><a href=\"";
                // line 159
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("expert_detail", array("id" => $this->getAttribute($context["teacher"], "id", array()))), "html", null, true);
                echo "\">更多内容</a></div>
                            </div>
                        </div>
                    ";
            }
            // line 163
            echo "                ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['teacher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 164
        echo "                ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("CustomWebBundle:CourseDetail:recommendTeachers"));
        echo "
                <div class=\"left-h2 g-mt10 g-mb10 unshow-h2\" onclick=\"tipAlert()\" style=\"display:none;\">随堂练习<span
                            class=\"course-rightPoint c-666 g-fr\"></span></div>
                ";
        // line 168
        echo "
                ";
        // line 169
        if ((($this->getAttribute((isset($context["jiaocheng"]) ? $context["jiaocheng"] : null), "materials", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["jiaocheng"]) ? $context["jiaocheng"] : null), "materials", array()), "")) : (""))) {
            // line 170
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["jiaocheng"]) ? $context["jiaocheng"] : null), "url", array()), "html", null, true);
            echo "\">
                        <div class=\"left-h2\">精选教材 <span
                                    class=\"course-rightPoint g-fr\">更多教材</span>
                        </div>
                    </a>
                    <section class=\"bg-df9 g-mb10 last-bor\">
                        ";
            // line 176
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["jiaocheng"]) ? $context["jiaocheng"] : null), "materials", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 177
                echo "                            <div class=\"courseDetail\">
                                <a href=\"";
                // line 178
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "url", array()), "html", null, true);
                echo "\" class=\"courseList1\">
                                    <img src=\"";
                // line 179
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "thumbUrl", array()), "html", null, true);
                echo "\" width=\"55\" height=\"80\" style=\"margin-left:30px;\">

                                    <div class=\"list-right es-book\">
                                        <p class=\"s-course-name overline1\">";
                // line 182
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "productTitle", array()), "html", null, true);
                echo "</p>
                                        ";
                // line 184
                echo "                                        ";
                // line 185
                echo "                                        ";
                // line 186
                echo "                                        ";
                if ($this->getAttribute($context["product"], "offerPrice", array())) {
                    // line 187
                    echo "                                            <p class=\"g-font-color4\">";
                    if (($this->getAttribute($context["product"], "currency", array()) == "CNY")) {
                        echo "￥";
                    }
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "offerPrice", array()), "html", null, true);
                    echo "</p>
                                        ";
                }
                // line 189
                echo "                                    </div>
                                </a>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 193
            echo "                    </section>
                ";
        }
        // line 195
        echo "
                ";
        // line 196
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("CustomWebBundle:Course:news", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))));
        echo "
                ";
        // line 198
        echo "                ";
        $this->loadTemplate("CustomWebBundle:Course:nongzi.html.twig", "CustomWebBundle:Course:introduction.html.twig", 198)->display($context);
        // line 199
        echo "                ";
        if (((array_key_exists("productBaseCount", $context)) ? (_twig_default_filter((isset($context["productBaseCount"]) ? $context["productBaseCount"] : null), 0)) : (0))) {
            // line 200
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("all_product_base", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "\">
                        <div class=\"left-h2 g-mt10 g-mb10 unshow-h2\">";
            // line 201
            echo twig_escape_filter($this->env, (isset($context["productBaseCount"]) ? $context["productBaseCount"] : null), "html", null, true);
            echo "
                            个培训基地<span class=\"course-rightPoint c-666 g-fr\"></span></div>
                    </a>
                ";
        }
        // line 205
        echo "                ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("CustomWebBundle:CourseDetail:students", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))));
        echo "
                ";
        // line 206
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("CustomWebBundle:Course:recommendCourses"));
        echo "
                </div>
            </div>

            <div class=\"swiper-slide\">
                <div class=\"place-box\"></div>
                <div class=\"box-contain\">
                <div class=\"swiper-pagination course-dots\"></div>
                ";
        // line 214
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("CustomWebBundle:Course:question", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))));
        echo "
                <a href=\"lpmas://yunketang/ask/";
        // line 215
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "html", null, true);
        echo "\">
                    <div class=\"myask-btn g-mt10\">我要提问</div>
                </a>
                </div>
            </div>
     ";
        // line 220
        $context["currentTime"] = twig_date_format_filter($this->env, "now", "U");
        // line 221
        echo "            <div class=\"swiper-slide\">
                <div class=\"place-box\"></div>
                <div class=\"box-contain\">
                <div class=\"swiper-pagination course-dots\"></div>
                ";
        // line 225
        $context["index"] = 1;
        // line 226
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lessons"]) ? $context["lessons"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["lesson"]) {
            // line 227
            echo "                    ";
            if (((($this->getAttribute($context["lesson"], "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["lesson"], "type", array()), "")) : ("")) == "chapter")) {
                // line 228
                echo "                        <div class=\"g-h3 head-line g-mt10\">
                            <span>";
                // line 229
                echo twig_escape_filter($this->env, $this->getAttribute($context["lesson"], "title", array()), "html", null, true);
                echo "</span>
                        </div>
                        <div class=\"course-item\">
                            <ul class=\"g-list\">
                                ";
                // line 233
                $context["num"] = 1;
                // line 234
                echo "                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["lessons"]) ? $context["lessons"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["tmplesson"]) {
                    // line 235
                    echo "                                    ";
                    if (((((($this->getAttribute($context["tmplesson"], "chapterId", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["tmplesson"], "chapterId", array()), "")) : ("")) == $this->getAttribute($context["lesson"], "id", array())) && twig_in_filter((($this->getAttribute($context["tmplesson"], "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["tmplesson"], "type", array()), "")) : ("")), array(0 => "video", 1 => "live"))) && ((($this->getAttribute($context["tmplesson"], "status", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["tmplesson"], "status", array()), "")) : ("")) == "published"))) {
                        // line 236
                        echo "                                        ";
                        if (($this->getAttribute($context["tmplesson"], "type", array()) == "video")) {
                            // line 237
                            echo "                                        <li onclick=\"videoPlay(";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "html", null, true);
                            echo ",";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["tmplesson"], "id", array()), "html", null, true);
                            echo ")\">
                                        ";
                        } else {
                            // line 239
                            echo "                                        <li  data-live-start-time=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["lesson"], "startTime", array()), "html", null, true);
                            echo "\"
                                            data-live-end-time=\"";
                            // line 240
                            echo twig_escape_filter($this->env, $this->getAttribute($context["lesson"], "endTime", array()), "html", null, true);
                            echo "\" data-course-id=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "html", null, true);
                            echo "\" data-lesson-id=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["tmplesson"], "id", array()), "html", null, true);
                            echo "\"
                                            data-live-title=\"";
                            // line 241
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "title", array()), "html", null, true);
                            echo "\"
                                            ";
                            // line 242
                            if ((isset($context["isTeacher"]) ? $context["isTeacher"] : null)) {
                                echo " data-url=\"lpmas://xiangnongyun/courseid/900";
                                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "html", null, true);
                                echo twig_escape_filter($this->env, $this->getAttribute($context["tmplesson"], "id", array()), "html", null, true);
                                echo "/";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["tmplesson"], "title", array()), "html", null, true);
                                echo "\"
                                                ";
                            } else {
                                // line 243
                                echo " data-url=\"http://hls.lpmas.com/yunketang/900";
                                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "html", null, true);
                                echo twig_escape_filter($this->env, $this->getAttribute($context["tmplesson"], "id", array()), "html", null, true);
                                echo "/playlist.m3u8\" ";
                            }
                            echo ">
                                        ";
                        }
                        // line 245
                        echo "                                            <span class=\"list-num\">";
                        echo twig_escape_filter($this->env, (isset($context["num"]) ? $context["num"] : null), "html", null, true);
                        echo "</span>
                                            <div class=\"list-div\">
                                    <span class=\"list-title\"><img src=\"";
                        // line 247
                        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/h5/images/ui-play.png"), "html", null, true);
                        echo "\"
                                                                  class=\"ui-play\">";
                        // line 248
                        echo twig_escape_filter($this->env, $this->getAttribute($context["tmplesson"], "title", array()), "html", null, true);
                        echo "</span>
                                                <span class=\"list-time\">
                                                    ";
                        // line 250
                        if (((($this->getAttribute($context["tmplesson"], "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["tmplesson"], "type", array()), "")) : ("")) == "video")) {
                            // line 251
                            echo "                                                    ";
                            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->durationFilter($this->getAttribute($context["tmplesson"], "length", array())), "html", null, true);
                            echo "
                                                    ";
                        } else {
                            // line 253
                            echo "                                                       ";
                            if (($this->getAttribute($context["tmplesson"], "startTime", array()) > (isset($context["currentTime"]) ? $context["currentTime"] : null))) {
                                // line 254
                                echo "                                                           直播未开始
                                                       ";
                            } elseif ((($this->getAttribute(                            // line 255
$context["tmplesson"], "startTime", array()) <= (isset($context["currentTime"]) ? $context["currentTime"] : null)) && ($this->getAttribute($context["tmplesson"], "endTime", array()) >= (isset($context["currentTime"]) ? $context["currentTime"] : null)))) {
                                // line 256
                                echo "                                                           直播中
                                                       ";
                            } elseif (($this->getAttribute(                            // line 257
$context["tmplesson"], "endTime", array()) < (isset($context["currentTime"]) ? $context["currentTime"] : null))) {
                                // line 258
                                echo "                                                           直播已结束
                                                       ";
                            }
                            // line 260
                            echo "                                                    ";
                        }
                        // line 261
                        echo "                                                </span>
                                            </div>
                                        </li>
                                        ";
                        // line 264
                        $context["num"] = ((isset($context["num"]) ? $context["num"] : null) + 1);
                        // line 265
                        echo "                                    ";
                    }
                    // line 266
                    echo "                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tmplesson'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 267
                echo "                            </ul>
                        </div>
                    ";
            } elseif ((twig_in_filter($this->getAttribute(            // line 269
$context["lesson"], "type", array()), array(0 => "video", 1 => "live")) && ($this->getAttribute($context["lesson"], "chapterId", array()) == "0"))) {
                // line 270
                echo "                        <div class=\"course-item\" data-time=\"";
                echo twig_escape_filter($this->env, (isset($context["currentTime"]) ? $context["currentTime"] : null), "html", null, true);
                echo "\">
                            <ul class=\"g-list\">
                                ";
                // line 272
                if (($this->getAttribute($context["lesson"], "type", array()) == "video")) {
                    // line 273
                    echo "                                <li onclick=\"videoPlay(";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "html", null, true);
                    echo ",";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["lesson"], "id", array()), "html", null, true);
                    echo ")\">
                                    ";
                } else {
                    // line 275
                    echo "                                <li  data-live-start-time=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["lesson"], "startTime", array()), "html", null, true);
                    echo "\"
                                     data-live-end-time=\"";
                    // line 276
                    echo twig_escape_filter($this->env, $this->getAttribute($context["lesson"], "endTime", array()), "html", null, true);
                    echo "\" data-course-id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "html", null, true);
                    echo "\" data-lesson-id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["lesson"], "id", array()), "html", null, true);
                    echo "\"
                                        ";
                    // line 277
                    if ((isset($context["isTeacher"]) ? $context["isTeacher"] : null)) {
                        echo " data-url=\"lpmas://xiangnongyun/courseid/900";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "html", null, true);
                        echo twig_escape_filter($this->env, $this->getAttribute($context["lesson"], "id", array()), "html", null, true);
                        echo "/";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["lesson"], "title", array()), "html", null, true);
                        echo "\"
                                        ";
                    } else {
                        // line 278
                        echo " data-url=\"http://hls.lpmas.com/yunketang/900";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "html", null, true);
                        echo twig_escape_filter($this->env, $this->getAttribute($context["lesson"], "id", array()), "html", null, true);
                        echo "/playlist.m3u8\" ";
                    }
                    echo ">
                                    ";
                }
                // line 280
                echo "                                    <span class=\"list-num\">";
                echo twig_escape_filter($this->env, (isset($context["index"]) ? $context["index"] : null), "html", null, true);
                echo "</span>

                                    <div class=\"list-div\">
                            <span class=\"list-title\"><img src=\"";
                // line 283
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/h5/images/ui-play.png"), "html", null, true);
                echo "\"
                                                          class=\"ui-play\">";
                // line 284
                echo twig_escape_filter($this->env, $this->getAttribute($context["lesson"], "title", array()), "html", null, true);
                echo "</span>
                                        <span class=\"list-time\">
                                            ";
                // line 286
                if (((($this->getAttribute($context["lesson"], "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["lesson"], "type", array()), "")) : ("")) == "video")) {
                    // line 287
                    echo "                                                ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->durationFilter($this->getAttribute($context["lesson"], "length", array())), "html", null, true);
                    echo "
                                            ";
                } else {
                    // line 289
                    echo "                                                ";
                    if (($this->getAttribute($context["lesson"], "startTime", array()) > (isset($context["currentTime"]) ? $context["currentTime"] : null))) {
                        // line 290
                        echo "                                                    直播未开始
                                                ";
                    } elseif ((($this->getAttribute(                    // line 291
$context["lesson"], "startTime", array()) <= (isset($context["currentTime"]) ? $context["currentTime"] : null)) && ($this->getAttribute($context["lesson"], "endTime", array()) >= (isset($context["currentTime"]) ? $context["currentTime"] : null)))) {
                        // line 292
                        echo "                                                    直播中
                                                ";
                    } elseif (($this->getAttribute(                    // line 293
$context["lesson"], "endTime", array()) < (isset($context["currentTime"]) ? $context["currentTime"] : null))) {
                        // line 294
                        echo "                                                    直播已结束
                                                ";
                    }
                    // line 296
                    echo "                                            ";
                }
                // line 297
                echo "                                        </span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        ";
                // line 302
                $context["index"] = ((isset($context["index"]) ? $context["index"] : null) + 1);
                // line 303
                echo "                    ";
            }
            // line 304
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lesson'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 305
        echo "                </div>
            </div>

        </div>
    </div>
</div>
";
        // line 311
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "type", array()) == "live")) {
            // line 312
            echo "<div class=\"bottom-tip\">
    ";
            // line 313
            if ((isset($context["isTeacher"]) ? $context["isTeacher"] : null)) {
                // line 314
                echo "            ";
                if ($this->getAttribute((isset($context["lessons"]) ? $context["lessons"] : null), 0, array(), "array")) {
                    // line 315
                    echo "    <div class=\"video-btn go-back\">开启直播</div>
            ";
                } else {
                    // line 317
                    echo "    <div class=\"video-btn go-back\">直播课时未设置</div>
            ";
                }
                // line 319
                echo "    ";
            } else {
                // line 320
                echo "    <div class=\"video-btn no-start\"><a href=\"#\" style=\"color: inherit;\">直播未开始</a></div>
    ";
            }
            // line 322
            echo "</div>
";
        }
        // line 324
        echo "<!-- <div class=\"bottom-tip\">
     <div class=\"video-btn no-start\">正在直播</div>
 </div>
 <div class=\"bottom-tip\">
     <div class=\"video-btn go-back\">查看回放</div>
 </div>-->
<div class=\"tipBox\">
    <div class=\"tipDiv\">
        <i class=\"i-cancel\" onclick=\"hideBox()\"></i>
        <p>开发中</p></div>
</div>
<script src=\"";
        // line 335
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/h5/js/src/vendor/jquery-2.1.0.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 336
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/h5/js/src/vendor/swiper.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 337
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/h5/js/src/vendor/swiper-setting.js"), "html", null, true);
        echo "\"></script>
";
        // line 338
        if ((0 == (isset($context["isTeacher"]) ? $context["isTeacher"] : null))) {
            // line 339
            echo "<script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/h5/js/src/vendor/willesPlay.js"), "html", null, true);
            echo "\"></script>
";
        }
        // line 341
        echo "<script>

    ";
        // line 343
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "type", array()) == "live")) {
            // line 344
            echo "    var iID = null;
    var waitingStatus = false;
    var isTeacher = ";
            // line 346
            echo twig_escape_filter($this->env, (isset($context["isTeacher"]) ? $context["isTeacher"] : null), "html", null, true);
            echo "
    var CurrentDate =  ";
            // line 347
            echo twig_escape_filter($this->env, (isset($context["currentTime"]) ? $context["currentTime"] : null), "html", null, true);
            echo " ;
    nowTimer = CurrentDate;
    \$current_click_live_li = null;
    \$('.timebar .duration').hide();
    \$('.g-list').on('click','li',function(){
           waitingStatus = false;
          if (\$current_click_live_li != null && \$current_click_live_li.get(0) != this) {
              ";
            // line 354
            if ((0 == (isset($context["isTeacher"]) ? $context["isTeacher"] : null))) {
                // line 355
                echo "              \$('#playVideo').get(0).pause();
              \$('#playVideo').removeAttr('src');
//              \$('.playTip').removeClass('glyphicon-pause').addClass('glyphicon-play').fadeIn();
//              if (!\$('.playPause').hasClass('playIcon')) {
//                  \$('.playPause').addClass('playIcon');
//              }
              \$('#playVideo').off('waiting');
              \$('#playVideo').off('playing');
              ";
            }
            // line 364
            echo "          }

         if (\$(this).data('live-end-time') < nowTimer ){
             \$('.video-control').hide();
             \$('.playTip').hide();
             \$('.canvas-img').show();
         }
           \$current_click_live_li = \$(this);
           \$('.goback-tip').hide();

          var courseId = \$(this).data('course-id');
          var lessonId = \$(this).data('lesson-id');
          var startTime = \$(this).data('live-start-time');
          var endTime = \$(this).data('live-end-time');
          CurrentDate = nowTimer;
           ";
            // line 379
            if ((0 == (isset($context["isTeacher"]) ? $context["isTeacher"] : null))) {
                // line 380
                echo "
           \$(\".bottom-tip .video-btn a\").on('click',function(event){
               event.preventDefault();
           });
          \$('.playContent').off('click');
           ";
            }
            // line 386
            echo "

           if (iID) {
               clearInterval(iID);
           }

           var intervalSecond = 0;

           function generateHtml() {
               var nowDate = CurrentDate + intervalSecond;
               var startLeftSeconds = parseInt(startTime - nowDate);
               var endLeftSeconds = parseInt(endTime - nowDate);
               var days = Math.floor(startLeftSeconds / (60 * 60 * 24));
               var modulo = startLeftSeconds % (60 * 60 * 24);
               var hours = Math.floor(modulo / (60 * 60));
               modulo = modulo % (60 * 60);
               var minutes = Math.floor(modulo / 60);
               var seconds = modulo % 60;


               if (0 < startLeftSeconds) {
                   \$('.video-control').hide();
                   \$('.playTip').hide();
                   if (isTeacher) {
                       \$(\".go-back\").css('background','#E0E0E0');
                       \$(\".go-back\").text('开启直播');
                       if (startLeftSeconds < 20) {
                           if (\$(\".bottom-tip a\").length == 0) {
                               \$(\".bottom-tip .video-btn\").wrap(\$('<a href=\"' + \$current_click_live_li.data('url') + '\"></a>'));
                           }
                           if(0 == startLeftSeconds)
                           {
                               \$(\".bottom-tip a\").trigger('click');
                           }
                           \$(\".go-back\").css('background','#5DAB2F');
                       }
                   }else{
                       \$('.canvas-img').show();
                       \$(\".no-start a\").text('直播未开始');
                   }
                   \$('.countdown-tip').show();
                   \$('.countdown-tip').text(showTimeDownWord(days,hours,minutes,seconds));

               };

               if (startLeftSeconds <= 0 && endLeftSeconds > 0) {
                   \$current_click_live_li.find('.list-time').text('正在直播');
                   \$('.countdown-tip').hide();
                   if (isTeacher) {
                       \$(\".go-back\").css('background','#5DAB2F');
                       if( \$(\".bottom-tip > a\").length > 0 && '' != \$(\".bottom-tip > a\").attr('href'))
                       {
                           \$(\".go-back\").text('开启直播');
                       }else{
                           \$(\".bottom-tip .video-btn\").wrap(\$('<a href=\"'+\$current_click_live_li.data('url')+'\"></a>'));
                       }
                   } else {
                       if ('' == \$('#playVideo').attr('src') || undefined == \$('#playVideo').attr('src')) {
                           \$('.video-control').show();
                           \$('.playTip').show();
                           \$('#playVideo').attr('src', \$current_click_live_li.data('url'));
                           \$('.canvas-img').show();
                           \$('#willesPlay').on('click',function(){
                               if (\$('.playPause').hasClass('playIcon')) {
                                   \$('.canvas-img').show();
                               }else{
                                   \$('.canvas-img').hide();
                               }
                           });
                           \$('.playContent').on('click',function(){
                               \$('.playPause').toggleClass('playIcon');
                               if (\$('video').get(0).paused) {
                                   \$('video').get(0).play();
                                   \$('.playTip').removeClass('glyphicon-play').addClass('glyphicon-pause').fadeOut();
                               } else {
                                   \$('video').get(0).pause();
                                   \$('.playTip').removeClass('glyphicon-pause').addClass('glyphicon-play').fadeIn();
                               }
                           });
                           \$('#playVideo').on('playing',function(){waitingStatus = false});
                           \$('#playVideo').on('waiting',function(){
                               var course_id = \$current_click_live_li.data('course-id');
                               var lesson_id = \$current_click_live_li.data('lesson-id');
                               checkLiveStatus(course_id,lesson_id);
                           });
                           \$(\".bottom-tip .video-btn\").on('click',function(event){
                               if (\$('.playPause').hasClass('playIcon')){
                                   \$('.playPause').trigger('click');
                               }
                           });
                           \$(\".video-btn\").css('background','#5DAB2F');
                       }
                       \$(\".bottom-tip .video-btn a\").text('正在直播');

                   }
               };
               if (endLeftSeconds <= 0) {
                   \$('.countdown-tip').hide();
                   clearInterval(iID);
                   if (isTeacher) {
                       \$(\".bottom-tip .video-btn\").appendTo(\$('.bottom-tip'));
                       \$('.bottom-tip a').remove();
                       \$(\".go-back\").css('background','#E0E0E0');
                       \$(\".bottom-tip .video-btn\").text('直播已结束');
                       \$('.goback-tip').show();
                   } else {
                       \$(\".video-btn\").css('background','#E0E0E0');
                       //\$('.playContent').off('click');
                       //\$('#willesPlay').off('click');
                       //\$('#playVideo').get(0).pause();
                      // \$('#playVideo').attr('src','');
                       \$(\".bottom-tip .video-btn a\").text('直播已结束');
                       \$(\".bottom-tip .video-btn\").off('click');
                        // \$('.goback-tip').show();
                       // \$('.video-control').hide();
                       //\$('.playTip').hide();
                       //\$('.canvas-img').show();
                   }
                   \$current_click_live_li.find('.list-time').text('直播已结束');
               };
               intervalSecond++;
           }
           function showTimeDownWord(d,h,m,s) {
               var w = '直播倒计时:';
               if (d != 0){
                   w += d + '天';
               }
               if (h != 0){
                   w += h + '时';
               }
               if (m != 0){
                   w += m + '分';
               }
               if (s != 0){
                   w += s + '秒';
               }
               return w;
           }
        ";
            // line 524
            if ((0 == (isset($context["isTeacher"]) ? $context["isTeacher"] : null))) {
                // line 525
                echo "           function checkLiveStatus(cid,lid){
               var urlOrgin =  \"";
                // line 526
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lpmas_live_status_check", array("courseId" => "courseid", "lessonId" => "lessonid")), "html", null, true);
                echo "\";
               urlOrgin = urlOrgin.replace('courseid', cid);
               urlOrgin = urlOrgin.replace('lessonid', lid);
               \$.ajax({
                   url:urlOrgin,
                   type: 'GET',
                   contentType: 'text/json',
                   success: function (dataJson) {
                        if (undefined != dataJson && dataJson.code != 0 && !waitingStatus){
                            \$('.tipBox p').text(dataJson.message);
                            \$('.tipBox').fadeIn(2000).fadeOut(1000);
                            waitingStatus = true
                        }
                   },
                   error:function(){
                   }
               })
           }
        ";
            }
            // line 545
            echo "           generateHtml();
           iID = setInterval(generateHtml, 1000);
       });
    \$('.video-control').hide();
    setInterval(function(){nowTimer += 1;}, 1000);
    \$('.playTip').hide();
    \$('.g-list li:first-child').trigger('click');
    ";
        } else {
            // line 553
            echo "      \$('#willesPlay').on('click',function(){
            \$('.canvas-img').hide();
    });
    ";
        }
        // line 557
        echo "
    var \$img = \$('.course-item .detail-info .li-pic .imgbox');
    var img_w = \$img.width();
    \$img.height(img_w * 0.8);

    var url = \"";
        // line 562
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mapi_mobile_api", array("service" => "Lesson", "method" => "getLesson")), "html", null, true);
        echo "\",
            favoriteCourse = \"";
        // line 563
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mapi_mobile_api", array("service" => "Course", "method" => "favoriteCourse")), "html", null, true);
        echo "\",
            unFavoriteCourse = \"";
        // line 564
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mapi_mobile_api", array("service" => "Course", "method" => "unFavoriteCourse")), "html", null, true);
        echo "\";
    //    var playPause = \$('.playPause');
    //    var playVideo = \$('video');
    //    playVideo[0].play();
    //    var courseList = new Swiper('.course-list',{
    //        pagination: '.course-dots',
    //        paginationClickable: true,
    //        resistanceRatio: 0,
    //        touchMoveStopPropagation : false,
    //        paginationBulletRender: function (index, className) {
    //            switch (index) {
    //                case 0: name='简介';break;
    //                case 1: name='问答';break;
    //                case 2: name='章节';break;
    //                default: name='';
    //            }
    //            return '<span class=\"' + className + '\">' + name + '</span>';
    //        }
    //    });
    var courseNav = \$('.course-dots').height();
    var header = \$('.g-h2').height();
    var video = \$('.g-video').height();
    var swiper = \$('.course-list');
    var swiperSilde = \$('.course-list .swiper-slide');
    swiper.css({
        'height': \$(window).height() - header  + 'px',
        'overflow': 'hidden'
    });
    swiperSilde.css({
        'height': \$(window).height() - header  + 'px'
    });
    function videoPlay(courseId, lessonId) {
        \$.ajax({
            url: url,
            type: 'POST',
            contentType: 'application/x-www-form-urlencoded',
            data: {
                courseId: courseId,
                lessonId: lessonId
            },
            success: function (json) {
                if (null == json) {
                } else {
                    if (json.error) {
                        console.log(json.error.message);
                    } else {
                        \$('.g-video .video-progress').css('width', '0px');
                        \$('.video-content').attr('src', json.mediaUri);
                        \$('.playTip').css('display', 'none');
                        var playVideo = \$('video');
                        playVideo[0].play();
                        \$('.video-play').removeClass('playIcon');
                        \$('.canvas-img').hide();
                    }
                }
            }
        })
    }
    function hideBox() {
        \$('.tipBox').hide();
        \$('body').css('overflow', 'auto');
    }
    function tipAlert() {
        \$('.tipBox').show();
        \$('body').css('overflow', 'hidden');
    }
    //点击收藏
    \$('.collert-icon').on('click', function () {
        if (\$(this).hasClass('nocollect')) {  //点击收藏
            \$.ajax({
                url: favoriteCourse,
                type: 'POST',
                dataType: 'jsonp',
                data: {
                    courseId: ";
        // line 638
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "html", null, true);
        echo "
                },
                success: function (json) {
                    if (\"undefined\" != typeof(json.error) && json.error.name == 'not_login') {
                        //未登录跳转到登录
                        window.location.href = \"lpmas://yunketang/login\";
                    } else if (json) {
                        \$('.collert-icon').removeClass('nocollect').addClass('hascollect');
                    }
                }

            })
        } else {       //点击取消收藏
            \$.ajax({
                url: unFavoriteCourse,
                type: 'POST',
                dataType: 'jsonp',
                data: {
                    courseId: ";
        // line 656
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "html", null, true);
        echo "
                },
                success: function (json) {
                    if (\"undefined\" != typeof(json.error) && json.error.name == 'not_login') {
                        //未登录跳转到登录
                        window.location.href = \"lpmas://yunketang/login\";
                    } else if (json) {
                        \$('.collert-icon').removeClass('hascollect').addClass('nocollect');
                    }
                }

            })
        }

    })
    \$('.place-box').on('click',function(){

            \$(this).parents('.swiper-slide').scrollTop(0);
            \$('.g-video').css('z-index','10002');
        });
        \$('.swiper-slide').on('scroll',function(){
      if(\$(this).scrollTop() == 0){
          \$('.g-video').css('z-index','10002');
      }else{
          \$('.g-video').css('z-index','9997');
      }
  });
  \$('.box-contain').on('touchstart',function(){
      if(\$(this).parents(\".swiper-slide\").scrollTop() == 0){
          \$('.g-video').css('z-index','10002');
      }else{
          \$('.g-video').css('z-index','9997');
      }
  });
  \$('.box-contain').on('touchmove',function(){
      if(\$(this).parents(\".swiper-slide\").scrollTop() == 0){
          \$('.g-video').css('z-index','10002');
      }else{
          \$('.g-video').css('z-index','9997');
      }
  });
</script>
";
        // line 698
        $this->loadTemplate("CustomWebBundle::tongji.html.twig", "CustomWebBundle:Course:introduction.html.twig", 698)->display($context);
        // line 699
        echo "</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "CustomWebBundle:Course:introduction.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1218 => 699,  1216 => 698,  1171 => 656,  1150 => 638,  1073 => 564,  1069 => 563,  1065 => 562,  1058 => 557,  1052 => 553,  1042 => 545,  1020 => 526,  1017 => 525,  1015 => 524,  875 => 386,  867 => 380,  865 => 379,  848 => 364,  837 => 355,  835 => 354,  825 => 347,  821 => 346,  817 => 344,  815 => 343,  811 => 341,  805 => 339,  803 => 338,  799 => 337,  795 => 336,  791 => 335,  778 => 324,  774 => 322,  770 => 320,  767 => 319,  763 => 317,  759 => 315,  756 => 314,  754 => 313,  751 => 312,  749 => 311,  741 => 305,  735 => 304,  732 => 303,  730 => 302,  723 => 297,  720 => 296,  716 => 294,  714 => 293,  711 => 292,  709 => 291,  706 => 290,  703 => 289,  697 => 287,  695 => 286,  690 => 284,  686 => 283,  679 => 280,  670 => 278,  660 => 277,  652 => 276,  647 => 275,  639 => 273,  637 => 272,  631 => 270,  629 => 269,  625 => 267,  619 => 266,  616 => 265,  614 => 264,  609 => 261,  606 => 260,  602 => 258,  600 => 257,  597 => 256,  595 => 255,  592 => 254,  589 => 253,  583 => 251,  581 => 250,  576 => 248,  572 => 247,  566 => 245,  557 => 243,  547 => 242,  543 => 241,  535 => 240,  530 => 239,  522 => 237,  519 => 236,  516 => 235,  511 => 234,  509 => 233,  502 => 229,  499 => 228,  496 => 227,  491 => 226,  489 => 225,  483 => 221,  481 => 220,  473 => 215,  469 => 214,  458 => 206,  453 => 205,  446 => 201,  441 => 200,  438 => 199,  435 => 198,  431 => 196,  428 => 195,  424 => 193,  415 => 189,  406 => 187,  403 => 186,  401 => 185,  399 => 184,  395 => 182,  389 => 179,  385 => 178,  382 => 177,  378 => 176,  368 => 170,  366 => 169,  363 => 168,  356 => 164,  342 => 163,  335 => 159,  330 => 157,  324 => 154,  319 => 152,  314 => 150,  308 => 146,  305 => 145,  288 => 144,  284 => 142,  273 => 138,  267 => 135,  263 => 134,  257 => 131,  253 => 129,  250 => 128,  245 => 127,  233 => 123,  228 => 121,  222 => 118,  212 => 113,  208 => 112,  198 => 104,  192 => 103,  189 => 102,  187 => 101,  177 => 94,  154 => 74,  150 => 72,  147 => 71,  144 => 70,  142 => 69,  132 => 62,  113 => 46,  108 => 44,  104 => 42,  101 => 41,  96 => 40,  94 => 39,  91 => 38,  83 => 36,  79 => 35,  60 => 19,  56 => 18,  52 => 17,  48 => 16,  44 => 15,  39 => 14,  35 => 12,  31 => 11,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/*     <meta http-equiv="content-type" content="text/html; charset=utf-8"/>*/
/*     <title>课程详情</title>*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge"/>*/
/*     <meta name="apple-mobile-web-app-capable" content="yes"/>*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>*/
/*     <meta name="keywords" content="课程详情"/>*/
/*     <meta name="description" content="课程详情"/>*/
/*     <link rel="icon" href="{{ asset(setting('site.favicon')) }}" type="image/x-icon"/>*/
/*     <link rel="shortcut icon" href="{{ asset(setting('site.favicon')) }}" type="image/x-icon" media="screen"/>*/
/*     {#<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">#}*/
/*     <link rel="stylesheet" media="screen" href="{{ asset('themes/h5/style/css/bootstrap.min.css') }}"/>*/
/*     <link rel="stylesheet" media="screen" href="{{ asset('themes/h5/style/css/willesPlay.css') }}"/>*/
/*     <link rel="stylesheet" media="screen" href="{{ asset('themes/h5/style/css/global.css') }}"/>*/
/*     <link rel="stylesheet" media="screen" href="{{ asset('themes/h5/style/css/global-v2.css') }}"/>*/
/*     <link rel="stylesheet" media="screen" href="{{ asset('themes/h5/style/css/swiper/swiper.min.css') }}"/>*/
/*     <link rel="stylesheet" media="screen" href="{{ asset('themes/h5/style/css/course.css') }}"/>*/
/*     <style>*/
/*         .course-list .swiper-slide{margin-top: 0;padding-bottom: 50px;}*/
/*         .course-list{margin-top: 50px;}*/
/*         .course-list .course-dots{position: relative;top:0;}*/
/*         .swiper-container{z-index: 9998;}*/
/*         .swiper-container .swiper-slide .box-contain{background: #eee;}*/
/*         .place-box{height: 200px;width: 100%;}*/
/*         /*add*//* */
/*         .g-video .video-play{    background-position: 0 -62px;}*/
/*         .canvas-img{position: absolute;width: 100%;max-height: 200px;display: block;}*/
/*     </style>*/
/* </head>*/
/* <body>*/
/* <div class="g-wrap g-pb0">*/
/*     <div class="g-h2 f-tac">*/
/*         <a href="{{ path('homepage') }}" class="back-a"><i class="back-point"></i></a>课程详情*/
/*         <span class="header-icon collert-icon {% if hasFavorited %}hascollect{% else %}nocollect{% endif %}"></span>*/
/*         {#<span class="header-icon download-icon"></span>#}*/
/*     </div>*/
/*     {% set video=1 %}*/
/*     {% for lesson in lessons %}*/
/*         {% if lesson.type|default('')=='video' and video==1 %}*/
/*             <div id="willesPlay" class="g-video">*/
/*                 <div class="playContent">*/
/*                     <img src="{{ filepath(course.middlePicture, 'course.png') }}" class="canvas-img">*/
/*                     <video width="100%" height="100%" id="playVideo" class="video-content">*/
/*                         <source src="{{ lesson.mediaUri }}">*/
/*                         当前浏览器不支持 video直接播放*/
/*                     </video>*/
/*                     <div class="playTip glyphicon glyphicon-play"></div>*/
/*                 </div>*/
/*                 <div class="playControll video-control">*/
/*                     <div class="playPause playIcon video-play"></div>*/
/*                     <div class="timebar">*/
/*                         <span class="currentTime start-time">0:00:00</span>*/
/* */
/*                         <div class="progress">*/
/*                             <div class="progress-bar progress-bar-danger progress-bar-striped video-progress"*/
/*                                  role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width: 0%">*/
/*                                 <div class="video-point"></div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <span class="duration total-time">{{ lesson.length|duration }}</span>*/
/*                     </div>*/
/*                     <div class="otherControl">*/
/*                         <span class="fullScreen glyphicon glyphicon-fullscreen video-fullscreen"></span>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             {% set video=video+1 %}*/
/*         {% endif %}*/
/*         {% if lesson.type|default('') == 'live' and video == 1 %}*/
/*             <div id="willesPlay" class="g-video">*/
/*                 <div class="playContent">*/
/*                     <img src="{{ filepath(course.middlePicture, 'course.png') }}" class="canvas-img">*/
/*                     <p class="countdown-tip" style="display: none">直播倒计时14:21</p>*/
/*                     <p class="goback-tip" style="display: none">直播已结束</p>*/
/*                     <video width="100%" height="100%" id="playVideo" class="video-content">*/
/*                         <source src="">*/
/*                         当前浏览器不支持 video直接播放*/
/*                     </video>*/
/*                     <div class="playTip glyphicon glyphicon-play"></div>*/
/*                 </div>*/
/*                 <div class="playControll video-control">*/
/*                     <div class="playPause playIcon video-play"></div>*/
/*                     <div class="timebar">*/
/*                         <span class="currentTime start-time">0:00:00</span>*/
/* */
/*                         <div class="progress">*/
/*                             <div class="progress-bar progress-bar-danger progress-bar-striped video-progress"*/
/*                                  role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width: 0%">*/
/*                                 <div class="video-point"></div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <span class="duration total-time">{{ lesson.length|duration }}</span>*/
/*                     </div>*/
/*                     <div class="otherControl">*/
/*                         <span class="fullScreen glyphicon glyphicon-fullscreen video-fullscreen"></span>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             {% set video=video+1 %}*/
/*         {% endif %}*/
/*     {% endfor %}*/
/* */
/*     <div class="swiper-container course-list">*/
/*         <div class="swiper-wrapper">*/
/*             <div class="swiper-slide">*/
/*                 <div class="place-box"></div>*/
/*                 <div class="box-contain">*/
/*                 <div class="swiper-pagination course-dots"></div>*/
/*                 <div class="course-msg g-mb10">*/
/*                     <h3>{{ course.title }}</h3>*/
/*                     <span>{{ course.lessonNum }}课时 共{{ course.studentNum }}人学习</span>*/
/*                 </div>*/
/*                 <div class="left-h2">课程简介</div>*/
/*                 <section class="g-mb10 bg-df9">*/
/*                     <article class="g-font-color course-detailContent">*/
/*                         {{ course.about|raw }}*/
/*                     </article>*/
/*                 </section>*/
/*                 <a href="{{ path('course_comment',{courseId:course.id}) }}">*/
/*                     <div class="left-h2 g-mt10">课程评论<span*/
/*                                 class="course-rightPoint g-fr c-666">{% if commentCount %}{{ commentCount }}条评论{% else %}查看评论{% endif %}</span>*/
/*                     </div>*/
/*                 </a>*/
/*                 <div class="course-item">*/
/*                     {% for review in reviews if reviewsUsers[review.userId]|default(false)  %}*/
/*                         {% set user = reviewsUsers[review.userId] %}*/
/*                         <div class="comment-box">*/
/*                             <div class="head-img">*/
/*                                 <img src="{{ filepath(user.smallAvatar, 'avatar.png') }}">*/
/*                             </div>*/
/*                             <div class="info-box">*/
/*                                 <p>{{ user.nickname }}<span*/
/*                                             class="g-fr">{{ review.createdTime|date('Y-m-d H:i:s') }}</span></p>*/
/* */
/*                                 <div class="info-content">*/
/*                                     {{ review.content }}            </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     {% endfor %}*/
/* */
/*                 </div>*/
/*                 {% for teacher in teachers %}*/
/*                     {% if loop.index<2 %}*/
/*                         <div class="left-h2 g-mt10">导师介绍</div>*/
/*                         <div class="course-item g-mb10">*/
/*                             <div class="teacher-info">*/
/*                                 <div class="t-img">*/
/*                                     <img src="{{ filepath(teacher.mediumAvatar, 'avatar.png') }}">*/
/*                                 </div>*/
/*                                 <h4 class="t-name">{{ teacher.nickname }}</h4>*/
/* */
/*                                 <p class="t-title">{{ teacher.title }}</p>*/
/* */
/*                                 <div class="t-content">*/
/*                                     <span>{{ teacher.about|raw }}</span>*/
/*                                 </div>*/
/*                                 <div class="t-more"><a href="{{ path('expert_detail',{id:teacher.id}) }}">更多内容</a></div>*/
/*                             </div>*/
/*                         </div>*/
/*                     {% endif %}*/
/*                 {% endfor %}*/
/*                 {{ render(controller('CustomWebBundle:CourseDetail:recommendTeachers')) }}*/
/*                 <div class="left-h2 g-mt10 g-mb10 unshow-h2" onclick="tipAlert()" style="display:none;">随堂练习<span*/
/*                             class="course-rightPoint c-666 g-fr"></span></div>*/
/*                 {#<a href="{{ path('custom_mobile_api_addcourseQuestion',{id:course.id}) }}"><div class="left-h2 g-mt10 g-mb10 unshow-h2" >我要提问<span class="course-rightPoint c-666 g-fr"></span></div></a>#}*/
/* */
/*                 {% if jiaocheng.materials|default('') %}*/
/*                     <a href="{{ jiaocheng.url }}">*/
/*                         <div class="left-h2">精选教材 <span*/
/*                                     class="course-rightPoint g-fr">更多教材</span>*/
/*                         </div>*/
/*                     </a>*/
/*                     <section class="bg-df9 g-mb10 last-bor">*/
/*                         {% for product in  jiaocheng.materials %}*/
/*                             <div class="courseDetail">*/
/*                                 <a href="{{ product.url }}" class="courseList1">*/
/*                                     <img src="{{ product.thumbUrl }}" width="55" height="80" style="margin-left:30px;">*/
/* */
/*                                     <div class="list-right es-book">*/
/*                                         <p class="s-course-name overline1">{{ product.productTitle }}</p>*/
/*                                         {#<p class="s-course-progress">#}*/
/*                                         {#<span>作家:陈明斌</span>#}*/
/*                                         {#</p>#}*/
/*                                         {% if product.offerPrice %}*/
/*                                             <p class="g-font-color4">{% if product.currency=='CNY' %}￥{% endif %}{{ product.offerPrice }}</p>*/
/*                                         {% endif %}*/
/*                                     </div>*/
/*                                 </a>*/
/*                             </div>*/
/*                         {% endfor %}*/
/*                     </section>*/
/*                 {% endif %}*/
/* */
/*                 {{ render(controller('CustomWebBundle:Course:news',{courseId:course.id})) }}*/
/*                 {#{% include 'CustomWebBundle:Course:course-news.html.twig' %}#}*/
/*                 {% include 'CustomWebBundle:Course:nongzi.html.twig' %}*/
/*                 {% if  productBaseCount|default(0) %}*/
/*                     <a href="{{ path('all_product_base',{courseId:course.id}) }}">*/
/*                         <div class="left-h2 g-mt10 g-mb10 unshow-h2">{{ productBaseCount }}*/
/*                             个培训基地<span class="course-rightPoint c-666 g-fr"></span></div>*/
/*                     </a>*/
/*                 {% endif %}*/
/*                 {{ render(controller('CustomWebBundle:CourseDetail:students',{courseId:course.id})) }}*/
/*                 {{ render(controller('CustomWebBundle:Course:recommendCourses')) }}*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="swiper-slide">*/
/*                 <div class="place-box"></div>*/
/*                 <div class="box-contain">*/
/*                 <div class="swiper-pagination course-dots"></div>*/
/*                 {{ render(controller('CustomWebBundle:Course:question',{courseId:course.id})) }}*/
/*                 <a href="lpmas://yunketang/ask/{{ course.id }}">*/
/*                     <div class="myask-btn g-mt10">我要提问</div>*/
/*                 </a>*/
/*                 </div>*/
/*             </div>*/
/*      {% set currentTime = 'now'|date('U') %}*/
/*             <div class="swiper-slide">*/
/*                 <div class="place-box"></div>*/
/*                 <div class="box-contain">*/
/*                 <div class="swiper-pagination course-dots"></div>*/
/*                 {% set index=1 %}*/
/*                 {% for lesson in lessons %}*/
/*                     {% if lesson.type|default('')=='chapter' %}*/
/*                         <div class="g-h3 head-line g-mt10">*/
/*                             <span>{{ lesson.title }}</span>*/
/*                         </div>*/
/*                         <div class="course-item">*/
/*                             <ul class="g-list">*/
/*                                 {% set num=1 %}*/
/*                                 {% for tmplesson in lessons %}*/
/*                                     {% if tmplesson.chapterId|default('')==lesson.id and tmplesson.type|default('') in ['video','live']  and tmplesson.status|default('')=='published' %}*/
/*                                         {% if tmplesson.type == 'video' %}*/
/*                                         <li onclick="videoPlay({{ course.id }},{{ tmplesson.id }})">*/
/*                                         {% else %}*/
/*                                         <li  data-live-start-time="{{ lesson.startTime }}"*/
/*                                             data-live-end-time="{{ lesson.endTime }}" data-course-id="{{ course.id }}" data-lesson-id="{{ tmplesson.id }}"*/
/*                                             data-live-title="{{ course.title }}"*/
/*                                             {% if isTeacher %} data-url="lpmas://xiangnongyun/courseid/900{{ course.id }}{{ tmplesson.id }}/{{ tmplesson.title }}"*/
/*                                                 {% else %} data-url="http://hls.lpmas.com/yunketang/900{{ course.id }}{{ tmplesson.id }}/playlist.m3u8" {% endif %}>*/
/*                                         {% endif %}*/
/*                                             <span class="list-num">{{ num }}</span>*/
/*                                             <div class="list-div">*/
/*                                     <span class="list-title"><img src="{{ asset('themes/h5/images/ui-play.png') }}"*/
/*                                                                   class="ui-play">{{ tmplesson.title }}</span>*/
/*                                                 <span class="list-time">*/
/*                                                     {% if tmplesson.type|default('') == 'video' %}*/
/*                                                     {{ tmplesson.length|duration }}*/
/*                                                     {% else %}*/
/*                                                        {% if tmplesson.startTime > currentTime %}*/
/*                                                            直播未开始*/
/*                                                        {% elseif tmplesson.startTime <= currentTime and tmplesson.endTime >= currentTime %}*/
/*                                                            直播中*/
/*                                                        {% elseif tmplesson.endTime < currentTime %}*/
/*                                                            直播已结束*/
/*                                                        {% endif %}*/
/*                                                     {% endif %}*/
/*                                                 </span>*/
/*                                             </div>*/
/*                                         </li>*/
/*                                         {% set num=num+1 %}*/
/*                                     {% endif %}*/
/*                                 {% endfor %}*/
/*                             </ul>*/
/*                         </div>*/
/*                     {% elseif lesson.type in ['video','live'] and lesson.chapterId=='0' %}*/
/*                         <div class="course-item" data-time="{{ currentTime }}">*/
/*                             <ul class="g-list">*/
/*                                 {% if lesson.type == 'video' %}*/
/*                                 <li onclick="videoPlay({{ course.id }},{{ lesson.id }})">*/
/*                                     {% else %}*/
/*                                 <li  data-live-start-time="{{ lesson.startTime }}"*/
/*                                      data-live-end-time="{{ lesson.endTime }}" data-course-id="{{ course.id }}" data-lesson-id="{{ lesson.id }}"*/
/*                                         {% if isTeacher %} data-url="lpmas://xiangnongyun/courseid/900{{ course.id }}{{ lesson.id }}/{{ lesson.title }}"*/
/*                                         {% else %} data-url="http://hls.lpmas.com/yunketang/900{{ course.id }}{{ lesson.id }}/playlist.m3u8" {% endif %}>*/
/*                                     {% endif %}*/
/*                                     <span class="list-num">{{ index }}</span>*/
/* */
/*                                     <div class="list-div">*/
/*                             <span class="list-title"><img src="{{ asset('themes/h5/images/ui-play.png') }}"*/
/*                                                           class="ui-play">{{ lesson.title }}</span>*/
/*                                         <span class="list-time">*/
/*                                             {% if lesson.type|default('') == 'video' %}*/
/*                                                 {{ lesson.length|duration }}*/
/*                                             {% else %}*/
/*                                                 {% if lesson.startTime > currentTime %}*/
/*                                                     直播未开始*/
/*                                                 {% elseif lesson.startTime <= currentTime and lesson.endTime >= currentTime %}*/
/*                                                     直播中*/
/*                                                 {% elseif lesson.endTime < currentTime %}*/
/*                                                     直播已结束*/
/*                                                 {% endif %}*/
/*                                             {% endif %}*/
/*                                         </span>*/
/*                                     </div>*/
/*                                 </li>*/
/*                             </ul>*/
/*                         </div>*/
/*                         {% set index=index+1 %}*/
/*                     {% endif %}*/
/*                 {% endfor %}*/
/*                 </div>*/
/*             </div>*/
/* */
/*         </div>*/
/*     </div>*/
/* </div>*/
/* {% if (course.type == 'live') %}*/
/* <div class="bottom-tip">*/
/*     {% if isTeacher  %}*/
/*             {% if lessons[0] %}*/
/*     <div class="video-btn go-back">开启直播</div>*/
/*             {% else %}*/
/*     <div class="video-btn go-back">直播课时未设置</div>*/
/*             {% endif %}*/
/*     {% else %}*/
/*     <div class="video-btn no-start"><a href="#" style="color: inherit;">直播未开始</a></div>*/
/*     {% endif %}*/
/* </div>*/
/* {% endif %}*/
/* <!-- <div class="bottom-tip">*/
/*      <div class="video-btn no-start">正在直播</div>*/
/*  </div>*/
/*  <div class="bottom-tip">*/
/*      <div class="video-btn go-back">查看回放</div>*/
/*  </div>-->*/
/* <div class="tipBox">*/
/*     <div class="tipDiv">*/
/*         <i class="i-cancel" onclick="hideBox()"></i>*/
/*         <p>开发中</p></div>*/
/* </div>*/
/* <script src="{{ asset('themes/h5/js/src/vendor/jquery-2.1.0.min.js') }}"></script>*/
/* <script src="{{ asset('themes/h5/js/src/vendor/swiper.min.js') }}"></script>*/
/* <script src="{{ asset('themes/h5/js/src/vendor/swiper-setting.js') }}"></script>*/
/* {% if 0 == isTeacher  %}*/
/* <script src="{{ asset('themes/h5/js/src/vendor/willesPlay.js') }}"></script>*/
/* {% endif %}*/
/* <script>*/
/* */
/*     {% if course.type == 'live' %}*/
/*     var iID = null;*/
/*     var waitingStatus = false;*/
/*     var isTeacher = {{ isTeacher }}*/
/*     var CurrentDate =  {{ currentTime }} ;*/
/*     nowTimer = CurrentDate;*/
/*     $current_click_live_li = null;*/
/*     $('.timebar .duration').hide();*/
/*     $('.g-list').on('click','li',function(){*/
/*            waitingStatus = false;*/
/*           if ($current_click_live_li != null && $current_click_live_li.get(0) != this) {*/
/*               {% if ( 0 == isTeacher) %}*/
/*               $('#playVideo').get(0).pause();*/
/*               $('#playVideo').removeAttr('src');*/
/* //              $('.playTip').removeClass('glyphicon-pause').addClass('glyphicon-play').fadeIn();*/
/* //              if (!$('.playPause').hasClass('playIcon')) {*/
/* //                  $('.playPause').addClass('playIcon');*/
/* //              }*/
/*               $('#playVideo').off('waiting');*/
/*               $('#playVideo').off('playing');*/
/*               {% endif %}*/
/*           }*/
/* */
/*          if ($(this).data('live-end-time') < nowTimer ){*/
/*              $('.video-control').hide();*/
/*              $('.playTip').hide();*/
/*              $('.canvas-img').show();*/
/*          }*/
/*            $current_click_live_li = $(this);*/
/*            $('.goback-tip').hide();*/
/* */
/*           var courseId = $(this).data('course-id');*/
/*           var lessonId = $(this).data('lesson-id');*/
/*           var startTime = $(this).data('live-start-time');*/
/*           var endTime = $(this).data('live-end-time');*/
/*           CurrentDate = nowTimer;*/
/*            {% if 0 == isTeacher %}*/
/* */
/*            $(".bottom-tip .video-btn a").on('click',function(event){*/
/*                event.preventDefault();*/
/*            });*/
/*           $('.playContent').off('click');*/
/*            {% endif %}*/
/* */
/* */
/*            if (iID) {*/
/*                clearInterval(iID);*/
/*            }*/
/* */
/*            var intervalSecond = 0;*/
/* */
/*            function generateHtml() {*/
/*                var nowDate = CurrentDate + intervalSecond;*/
/*                var startLeftSeconds = parseInt(startTime - nowDate);*/
/*                var endLeftSeconds = parseInt(endTime - nowDate);*/
/*                var days = Math.floor(startLeftSeconds / (60 * 60 * 24));*/
/*                var modulo = startLeftSeconds % (60 * 60 * 24);*/
/*                var hours = Math.floor(modulo / (60 * 60));*/
/*                modulo = modulo % (60 * 60);*/
/*                var minutes = Math.floor(modulo / 60);*/
/*                var seconds = modulo % 60;*/
/* */
/* */
/*                if (0 < startLeftSeconds) {*/
/*                    $('.video-control').hide();*/
/*                    $('.playTip').hide();*/
/*                    if (isTeacher) {*/
/*                        $(".go-back").css('background','#E0E0E0');*/
/*                        $(".go-back").text('开启直播');*/
/*                        if (startLeftSeconds < 20) {*/
/*                            if ($(".bottom-tip a").length == 0) {*/
/*                                $(".bottom-tip .video-btn").wrap($('<a href="' + $current_click_live_li.data('url') + '"></a>'));*/
/*                            }*/
/*                            if(0 == startLeftSeconds)*/
/*                            {*/
/*                                $(".bottom-tip a").trigger('click');*/
/*                            }*/
/*                            $(".go-back").css('background','#5DAB2F');*/
/*                        }*/
/*                    }else{*/
/*                        $('.canvas-img').show();*/
/*                        $(".no-start a").text('直播未开始');*/
/*                    }*/
/*                    $('.countdown-tip').show();*/
/*                    $('.countdown-tip').text(showTimeDownWord(days,hours,minutes,seconds));*/
/* */
/*                };*/
/* */
/*                if (startLeftSeconds <= 0 && endLeftSeconds > 0) {*/
/*                    $current_click_live_li.find('.list-time').text('正在直播');*/
/*                    $('.countdown-tip').hide();*/
/*                    if (isTeacher) {*/
/*                        $(".go-back").css('background','#5DAB2F');*/
/*                        if( $(".bottom-tip > a").length > 0 && '' != $(".bottom-tip > a").attr('href'))*/
/*                        {*/
/*                            $(".go-back").text('开启直播');*/
/*                        }else{*/
/*                            $(".bottom-tip .video-btn").wrap($('<a href="'+$current_click_live_li.data('url')+'"></a>'));*/
/*                        }*/
/*                    } else {*/
/*                        if ('' == $('#playVideo').attr('src') || undefined == $('#playVideo').attr('src')) {*/
/*                            $('.video-control').show();*/
/*                            $('.playTip').show();*/
/*                            $('#playVideo').attr('src', $current_click_live_li.data('url'));*/
/*                            $('.canvas-img').show();*/
/*                            $('#willesPlay').on('click',function(){*/
/*                                if ($('.playPause').hasClass('playIcon')) {*/
/*                                    $('.canvas-img').show();*/
/*                                }else{*/
/*                                    $('.canvas-img').hide();*/
/*                                }*/
/*                            });*/
/*                            $('.playContent').on('click',function(){*/
/*                                $('.playPause').toggleClass('playIcon');*/
/*                                if ($('video').get(0).paused) {*/
/*                                    $('video').get(0).play();*/
/*                                    $('.playTip').removeClass('glyphicon-play').addClass('glyphicon-pause').fadeOut();*/
/*                                } else {*/
/*                                    $('video').get(0).pause();*/
/*                                    $('.playTip').removeClass('glyphicon-pause').addClass('glyphicon-play').fadeIn();*/
/*                                }*/
/*                            });*/
/*                            $('#playVideo').on('playing',function(){waitingStatus = false});*/
/*                            $('#playVideo').on('waiting',function(){*/
/*                                var course_id = $current_click_live_li.data('course-id');*/
/*                                var lesson_id = $current_click_live_li.data('lesson-id');*/
/*                                checkLiveStatus(course_id,lesson_id);*/
/*                            });*/
/*                            $(".bottom-tip .video-btn").on('click',function(event){*/
/*                                if ($('.playPause').hasClass('playIcon')){*/
/*                                    $('.playPause').trigger('click');*/
/*                                }*/
/*                            });*/
/*                            $(".video-btn").css('background','#5DAB2F');*/
/*                        }*/
/*                        $(".bottom-tip .video-btn a").text('正在直播');*/
/* */
/*                    }*/
/*                };*/
/*                if (endLeftSeconds <= 0) {*/
/*                    $('.countdown-tip').hide();*/
/*                    clearInterval(iID);*/
/*                    if (isTeacher) {*/
/*                        $(".bottom-tip .video-btn").appendTo($('.bottom-tip'));*/
/*                        $('.bottom-tip a').remove();*/
/*                        $(".go-back").css('background','#E0E0E0');*/
/*                        $(".bottom-tip .video-btn").text('直播已结束');*/
/*                        $('.goback-tip').show();*/
/*                    } else {*/
/*                        $(".video-btn").css('background','#E0E0E0');*/
/*                        //$('.playContent').off('click');*/
/*                        //$('#willesPlay').off('click');*/
/*                        //$('#playVideo').get(0).pause();*/
/*                       // $('#playVideo').attr('src','');*/
/*                        $(".bottom-tip .video-btn a").text('直播已结束');*/
/*                        $(".bottom-tip .video-btn").off('click');*/
/*                         // $('.goback-tip').show();*/
/*                        // $('.video-control').hide();*/
/*                        //$('.playTip').hide();*/
/*                        //$('.canvas-img').show();*/
/*                    }*/
/*                    $current_click_live_li.find('.list-time').text('直播已结束');*/
/*                };*/
/*                intervalSecond++;*/
/*            }*/
/*            function showTimeDownWord(d,h,m,s) {*/
/*                var w = '直播倒计时:';*/
/*                if (d != 0){*/
/*                    w += d + '天';*/
/*                }*/
/*                if (h != 0){*/
/*                    w += h + '时';*/
/*                }*/
/*                if (m != 0){*/
/*                    w += m + '分';*/
/*                }*/
/*                if (s != 0){*/
/*                    w += s + '秒';*/
/*                }*/
/*                return w;*/
/*            }*/
/*         {% if ( 0 == isTeacher) %}*/
/*            function checkLiveStatus(cid,lid){*/
/*                var urlOrgin =  "{{ path('lpmas_live_status_check',{courseId:'courseid',lessonId:'lessonid'})  }}";*/
/*                urlOrgin = urlOrgin.replace('courseid', cid);*/
/*                urlOrgin = urlOrgin.replace('lessonid', lid);*/
/*                $.ajax({*/
/*                    url:urlOrgin,*/
/*                    type: 'GET',*/
/*                    contentType: 'text/json',*/
/*                    success: function (dataJson) {*/
/*                         if (undefined != dataJson && dataJson.code != 0 && !waitingStatus){*/
/*                             $('.tipBox p').text(dataJson.message);*/
/*                             $('.tipBox').fadeIn(2000).fadeOut(1000);*/
/*                             waitingStatus = true*/
/*                         }*/
/*                    },*/
/*                    error:function(){*/
/*                    }*/
/*                })*/
/*            }*/
/*         {% endif %}*/
/*            generateHtml();*/
/*            iID = setInterval(generateHtml, 1000);*/
/*        });*/
/*     $('.video-control').hide();*/
/*     setInterval(function(){nowTimer += 1;}, 1000);*/
/*     $('.playTip').hide();*/
/*     $('.g-list li:first-child').trigger('click');*/
/*     {% else %}*/
/*       $('#willesPlay').on('click',function(){*/
/*             $('.canvas-img').hide();*/
/*     });*/
/*     {% endif %}*/
/* */
/*     var $img = $('.course-item .detail-info .li-pic .imgbox');*/
/*     var img_w = $img.width();*/
/*     $img.height(img_w * 0.8);*/
/* */
/*     var url = "{{ path('mapi_mobile_api',{service:'Lesson',method:'getLesson'}) }}",*/
/*             favoriteCourse = "{{ path('mapi_mobile_api',{service:'Course',method:'favoriteCourse'}) }}",*/
/*             unFavoriteCourse = "{{ path('mapi_mobile_api',{service:'Course',method:'unFavoriteCourse'}) }}";*/
/*     //    var playPause = $('.playPause');*/
/*     //    var playVideo = $('video');*/
/*     //    playVideo[0].play();*/
/*     //    var courseList = new Swiper('.course-list',{*/
/*     //        pagination: '.course-dots',*/
/*     //        paginationClickable: true,*/
/*     //        resistanceRatio: 0,*/
/*     //        touchMoveStopPropagation : false,*/
/*     //        paginationBulletRender: function (index, className) {*/
/*     //            switch (index) {*/
/*     //                case 0: name='简介';break;*/
/*     //                case 1: name='问答';break;*/
/*     //                case 2: name='章节';break;*/
/*     //                default: name='';*/
/*     //            }*/
/*     //            return '<span class="' + className + '">' + name + '</span>';*/
/*     //        }*/
/*     //    });*/
/*     var courseNav = $('.course-dots').height();*/
/*     var header = $('.g-h2').height();*/
/*     var video = $('.g-video').height();*/
/*     var swiper = $('.course-list');*/
/*     var swiperSilde = $('.course-list .swiper-slide');*/
/*     swiper.css({*/
/*         'height': $(window).height() - header  + 'px',*/
/*         'overflow': 'hidden'*/
/*     });*/
/*     swiperSilde.css({*/
/*         'height': $(window).height() - header  + 'px'*/
/*     });*/
/*     function videoPlay(courseId, lessonId) {*/
/*         $.ajax({*/
/*             url: url,*/
/*             type: 'POST',*/
/*             contentType: 'application/x-www-form-urlencoded',*/
/*             data: {*/
/*                 courseId: courseId,*/
/*                 lessonId: lessonId*/
/*             },*/
/*             success: function (json) {*/
/*                 if (null == json) {*/
/*                 } else {*/
/*                     if (json.error) {*/
/*                         console.log(json.error.message);*/
/*                     } else {*/
/*                         $('.g-video .video-progress').css('width', '0px');*/
/*                         $('.video-content').attr('src', json.mediaUri);*/
/*                         $('.playTip').css('display', 'none');*/
/*                         var playVideo = $('video');*/
/*                         playVideo[0].play();*/
/*                         $('.video-play').removeClass('playIcon');*/
/*                         $('.canvas-img').hide();*/
/*                     }*/
/*                 }*/
/*             }*/
/*         })*/
/*     }*/
/*     function hideBox() {*/
/*         $('.tipBox').hide();*/
/*         $('body').css('overflow', 'auto');*/
/*     }*/
/*     function tipAlert() {*/
/*         $('.tipBox').show();*/
/*         $('body').css('overflow', 'hidden');*/
/*     }*/
/*     //点击收藏*/
/*     $('.collert-icon').on('click', function () {*/
/*         if ($(this).hasClass('nocollect')) {  //点击收藏*/
/*             $.ajax({*/
/*                 url: favoriteCourse,*/
/*                 type: 'POST',*/
/*                 dataType: 'jsonp',*/
/*                 data: {*/
/*                     courseId: {{ course.id }}*/
/*                 },*/
/*                 success: function (json) {*/
/*                     if ("undefined" != typeof(json.error) && json.error.name == 'not_login') {*/
/*                         //未登录跳转到登录*/
/*                         window.location.href = "lpmas://yunketang/login";*/
/*                     } else if (json) {*/
/*                         $('.collert-icon').removeClass('nocollect').addClass('hascollect');*/
/*                     }*/
/*                 }*/
/* */
/*             })*/
/*         } else {       //点击取消收藏*/
/*             $.ajax({*/
/*                 url: unFavoriteCourse,*/
/*                 type: 'POST',*/
/*                 dataType: 'jsonp',*/
/*                 data: {*/
/*                     courseId: {{ course.id }}*/
/*                 },*/
/*                 success: function (json) {*/
/*                     if ("undefined" != typeof(json.error) && json.error.name == 'not_login') {*/
/*                         //未登录跳转到登录*/
/*                         window.location.href = "lpmas://yunketang/login";*/
/*                     } else if (json) {*/
/*                         $('.collert-icon').removeClass('hascollect').addClass('nocollect');*/
/*                     }*/
/*                 }*/
/* */
/*             })*/
/*         }*/
/* */
/*     })*/
/*     $('.place-box').on('click',function(){*/
/* */
/*             $(this).parents('.swiper-slide').scrollTop(0);*/
/*             $('.g-video').css('z-index','10002');*/
/*         });*/
/*         $('.swiper-slide').on('scroll',function(){*/
/*       if($(this).scrollTop() == 0){*/
/*           $('.g-video').css('z-index','10002');*/
/*       }else{*/
/*           $('.g-video').css('z-index','9997');*/
/*       }*/
/*   });*/
/*   $('.box-contain').on('touchstart',function(){*/
/*       if($(this).parents(".swiper-slide").scrollTop() == 0){*/
/*           $('.g-video').css('z-index','10002');*/
/*       }else{*/
/*           $('.g-video').css('z-index','9997');*/
/*       }*/
/*   });*/
/*   $('.box-contain').on('touchmove',function(){*/
/*       if($(this).parents(".swiper-slide").scrollTop() == 0){*/
/*           $('.g-video').css('z-index','10002');*/
/*       }else{*/
/*           $('.g-video').css('z-index','9997');*/
/*       }*/
/*   });*/
/* </script>*/
/* {% include "CustomWebBundle::tongji.html.twig" %}*/
/* </body>*/
/* </html>*/
/* */
