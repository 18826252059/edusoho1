<?php

/* TopxiaWebBundle:Course:Part/normal-header.html.twig */
class __TwigTemplate_dc48d3f7465f86b98176532133c13d8cb15ef827d64b61e0ecd1c20be34f86d3 extends Twig_Template
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
        $context["web_macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "TopxiaWebBundle:Course:Part/normal-header.html.twig", 1);
        // line 2
        $context["header_macro"] = $this;
        // line 3
        echo "
";
        // line 4
        $this->env->getExtension('topxia_web_twig')->loadScript("course/common");
        // line 5
        echo "
";
        // line 6
        if (((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")) &&  !$this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "locked", array()))) {
            // line 7
            echo "  ";
            $this->loadTemplate("TopxiaWebBundle:Course:Part/normal-header-for-member.html.twig", "TopxiaWebBundle:Course:Part/normal-header.html.twig", 7)->display($context);
        } elseif ((($this->getAttribute(        // line 8
(isset($context["course"]) ? $context["course"] : null), "parentId", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "parentId", array()), false)) : (false))) {
            // line 9
            echo "  ";
            $this->loadTemplate("TopxiaWebBundle:Course:Part/normal-header-for-guest.html.twig", "TopxiaWebBundle:Course:Part/normal-header.html.twig", 9)->display(array_merge($context, array("source" => "classroom")));
        } else {
            // line 11
            echo "  
  ";
            // line 12
            $this->loadTemplate("TopxiaWebBundle:Course:Part/normal-header-for-guest.html.twig", "TopxiaWebBundle:Course:Part/normal-header.html.twig", 12)->display($context);
        }
        // line 14
        echo "
";
        // line 36
        echo "
";
        // line 129
        echo "
";
        // line 146
        echo "
";
        // line 162
        echo "
";
    }

    // line 15
    public function getpicture($__course__ = null, $__previewLesson__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "course" => $__course__,
            "previewLesson" => $__previewLesson__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 16
            echo "  <div class=\"course-img\">
    ";
            // line 17
            if ((isset($context["previewLesson"]) ? $context["previewLesson"] : $this->getContext($context, "previewLesson"))) {
                // line 18
                echo "      <a href=\"#modal\" data-toggle=\"modal\" data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_lessons_preview", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "lessonId" => $this->getAttribute((isset($context["previewLesson"]) ? $context["previewLesson"] : $this->getContext($context, "previewLesson")), "id", array()))), "html", null, true);
                echo "\" class=\"course-img-cover\">
        <i class=\"es-icon es-icon-playcircleoutline\"></i>
      </a>
    ";
            }
            // line 22
            echo "
    <img class=\"img-responsive\" src=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "largePicture", array()), "course.png"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "title", array()), "html", null, true);
            echo "\">
    <div class=\"tags\">
      ";
            // line 25
            if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "serializeMode", array()) == "serialize")) {
                // line 26
                echo "        <span class=\"tag-serialing\"></span>
      ";
            } elseif (($this->getAttribute(            // line 27
(isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "serializeMode", array()) == "finished")) {
                // line 28
                echo "        <span class=\"tag-finished\"></span>
      ";
            }
            // line 30
            echo "      ";
            if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "type", array()) == "live")) {
                // line 31
                echo "        <span class=\"tag-live\"></span>
      ";
            }
            // line 33
            echo "    </div>
  </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 37
    public function getinfo($__course__ = null, $__member__ = null, $__userVipStatus__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "course" => $__course__,
            "member" => $__member__,
            "userVipStatus" => $__userVipStatus__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 38
            echo "  ";
            $context["web_macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "TopxiaWebBundle:Course:Part/normal-header.html.twig", 38);
            // line 39
            echo "  <div class=\"course-info\">
    <h2 class=\"title\">
      ";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "title", array()), "html", null, true);
            echo "
      <span class=\"es-qrcode top\" data-url=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_qrcode", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
            echo "\">
        <i class=\"es-icon es-icon-qrcode\"></i>
        <span class=\"qrcode-popover\">
          <img src=\"\" alt=\"\">
          扫二维码继续学习
        </span>
      </span>
    </h2>
    <div class=\"subtitle\">";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "subtitle", array()), "html", null, true);
            echo "</div>
    <div class=\"metas\">
      <div class=\"score\">
        ";
            // line 53
            echo $context["web_macro"]->getstar($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "rating", array()));
            echo "
        <span>(";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "ratingNum", array()), "html", null, true);
            echo "人)</span>
      </div>

      ";
            // line 57
            if (((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")) && ($this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "deadline", array()) > 0))) {
                // line 58
                echo "        ";
                if (($this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "deadline", array()) > twig_date_format_filter($this->env, "now", "U"))) {
                    // line 59
                    echo "          <p class=\"expiry-date hidden-sm\">
            <label for=\"\">有效期</label><span>还有";
                    // line 60
                    echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->remainTimeFilter($this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "deadline", array())), "html", null, true);
                    echo "</span>
          </p>
        ";
                } else {
                    // line 63
                    echo "         <div class=\"alert alert-danger alert-dismissable\">
            您购买的课程已到期，无法学习课时、提问等。如有疑问请联系老师，或点击
            <a class=\" \"  href=\"";
                    // line 65
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_rebuy", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
                    echo "\">
            ";
                    // line 66
                    if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "price", array()) > 0)) {
                        // line 67
                        echo "            重新购买
            ";
                    } else {
                        // line 69
                        echo "            重新加入
            ";
                    }
                    // line 71
                    echo "            </a>。
          </div>
        ";
                }
                // line 74
                echo "      ";
            }
            // line 75
            echo "

      ";
            // line 77
            if ( !(isset($context["member"]) ? $context["member"] : $this->getContext($context, "member"))) {
                // line 78
                echo "        ";
                if ($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "expiryDay", array())) {
                    // line 79
                    echo "          <p class=\"expiry-date hidden-sm\">
            <label for=\"\">有效期</label>
            <span>";
                    // line 81
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "expiryDay", array()), "html", null, true);
                    echo "天</span>
          </p>
        ";
                }
                // line 84
                echo "        <p class=\"discount-price\">
          <label>价格</label>
          ";
                // line 86
                $this->loadTemplate("TopxiaWebBundle:Course:Widget/course-price.html.twig", "TopxiaWebBundle:Course:Part/normal-header.html.twig", 86)->display(array_merge($context, array("shows" => array(0 => "price", 1 => "discount"))));
                // line 87
                echo "        </p>
        ";
                // line 88
                if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "discountId", array()) > 0)) {
                    // line 89
                    echo "          <p class=\"old-price hidden-sm\">
            <label>原价</label>
            ";
                    // line 91
                    $this->loadTemplate("TopxiaWebBundle:Course:Widget/course-price.html.twig", "TopxiaWebBundle:Course:Part/normal-header.html.twig", 91)->display(array_merge($context, array("shows" => array(0 => "originPrice"))));
                    // line 92
                    echo "          </p>
          ";
                    // line 93
                    if ((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "discountObj", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "discountObj", array()), null)) : (null))) {
                        // line 94
                        echo "            <p class=\"activity\">
              <label>活动</label>
              <span class=\"name\">";
                        // line 96
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "discountObj", array()), "name", array()), "html", null, true);
                        echo "</span>
              <span>
                <i class=\"es-icon es-icon-accesstime\"></i>
                <span id=\"discount-endtime-countdown\" class=\"text-muted\" data-remaintime=\"";
                        // line 99
                        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "discountObj", array()), "endTime", array()) - twig_date_format_filter($this->env, "now", "U")), "html", null, true);
                        echo "\"
                ></span>
              </span>
            </p>
          ";
                    }
                    // line 104
                    echo "        ";
                }
                // line 105
                echo "      ";
            }
            // line 106
            echo "    </div>

    ";
            // line 108
            if ((((( !(($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "fake", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "fake", array()), false)) : (false)) && (isset($context["member"]) ? $context["member"] : $this->getContext($context, "member"))) && ($this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "role", array()) == "student")) && ($this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "levelId", array()) > 0)) && ((isset($context["userVipStatus"]) ? $context["userVipStatus"] : $this->getContext($context, "userVipStatus")) != "ok"))) {
                // line 109
                echo "      <div class=\"alert alert-danger\">
        ";
                // line 110
                if (((isset($context["userVipStatus"]) ? $context["userVipStatus"] : $this->getContext($context, "userVipStatus")) == "not_member")) {
                    // line 111
                    echo "          您已经不是会员，不能学习此课程！
          ";
                    // line 112
                    if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "price", array()) > 0)) {
                        // line 113
                        echo "            请重新<a class=\"btn-link\" href=\"";
                        echo $this->env->getExtension('routing')->getPath("vip");
                        echo "\" target=\"_blank\">开通会员</a>
          ";
                    } else {
                        // line 115
                        echo "            <a class=\"btn-link js-exit-course\" data-url=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_exit", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
                        echo "\" data-go=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
                        echo "\">返回课程首页</a>
          ";
                    }
                    // line 116
                    echo "！
        ";
                } elseif ((                // line 117
(isset($context["userVipStatus"]) ? $context["userVipStatus"] : $this->getContext($context, "userVipStatus")) == "member_expired")) {
                    // line 118
                    echo "          您的会员已过期，不能学习此课程，请先<a class=\"btn-link\" href=\"";
                    echo $this->env->getExtension('routing')->getPath("vip_renew");
                    echo "\" target=\"_blank\">续费</a>。
        ";
                } elseif ((                // line 119
(isset($context["userVipStatus"]) ? $context["userVipStatus"] : $this->getContext($context, "userVipStatus")) == "level_low")) {
                    // line 120
                    echo "          会员等级不够，不能学习此课程。请先<a class=\"btn-link\" href=\"";
                    echo $this->env->getExtension('routing')->getPath("vip_upgrade");
                    echo "\" target=\"_blank\">升级会员</a>。
        ";
                } else {
                    // line 122
                    echo "          此课程已不支持会员免费学，<a class=\"btn-link js-exit-course\" href=\"javascript:;\" data-url=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_exit", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
                    echo "\" data-go=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
                    echo "\">返回课程首页</a>
        ";
                }
                // line 124
                echo "      </div>
    ";
            }
            // line 126
            echo "
  </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 130
    public function getstudent_num($__course__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "course" => $__course__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 131
            echo "  <div class=\"student-num hidden-xs\">
    ";
            // line 132
            if (($this->env->getExtension('topxia_web_twig')->getSetting("course.show_student_num_enabled", "1") == 1)) {
                // line 133
                echo "      <i class=\"es-icon es-icon-people\"></i>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "studentNum", array()), "html", null, true);
                echo "人
      ";
                // line 134
                if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "maxStudentNum", array()) > 0)) {
                    // line 135
                    echo "        ";
                    if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "studentNum", array()) >= $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "maxStudentNum", array()))) {
                        // line 136
                        echo "          <small class=\"hidden-sm text-sm\">(名额已满)</small>
        ";
                    } else {
                        // line 138
                        echo "          <small class=\"hidden-sm text-sm\">(";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "maxStudentNum", array()), "html", null, true);
                        echo "名额)</small>
        ";
                    }
                    // line 140
                    echo "      ";
                }
                // line 141
                echo "    ";
            } else {
                // line 142
                echo "      <i class=\"es-icon es-icon-accesstime\"></i>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "lessonNum", array()), "html", null, true);
                echo "课时
    ";
            }
            // line 144
            echo "  </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 147
    public function getfavorite_btn($__course__ = null, $__hasFavorited__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "course" => $__course__,
            "hasFavorited" => $__hasFavorited__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 148
            echo "  <li id=\"unfavorite-btn\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_unfavorite", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
            echo "\" ";
            if ( !(isset($context["hasFavorited"]) ? $context["hasFavorited"] : $this->getContext($context, "hasFavorited"))) {
                echo "style=\"display:none;\"";
            }
            echo ">
    <a href=\"javascript:;\" class=\"color-primary\">
      <p><i class=\"es-icon es-icon-bookmark\"></i></p>
      <p>已收藏</p>
    </a>
  </li>

  <li id=\"favorite-btn\" data-url=\"";
            // line 155
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_favorite", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
            echo "\" ";
            if ((isset($context["hasFavorited"]) ? $context["hasFavorited"] : $this->getContext($context, "hasFavorited"))) {
                echo "style=\"display:none;\"";
            }
            echo ">
    <a href=\"javascript:;\">
      <p><i class=\"es-icon es-icon-bookmarkoutline\"></i></p>
      <p>收藏</p>
    </a>
  </li>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 163
    public function getshare_btn($__course__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "course" => $__course__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 164
            echo "  <li>
    <span class=\"es-share top\">
      <a class=\"dropdown-toggle\" href=\"\" data-toggle=\"dropdown\">
        <p><i class=\"es-icon es-icon-share\"></i></p>
        <p>分享</p>
      </a>
      ";
            // line 170
            $this->loadTemplate("TopxiaWebBundle:Common:share-dropdown.html.twig", "TopxiaWebBundle:Course:Part/normal-header.html.twig", 170)->display(array_merge($context, array("type" => "course")));
            // line 171
            echo "    </span>
  </li>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:Part/normal-header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  495 => 171,  493 => 170,  485 => 164,  473 => 163,  451 => 155,  436 => 148,  423 => 147,  411 => 144,  405 => 142,  402 => 141,  399 => 140,  393 => 138,  389 => 136,  386 => 135,  384 => 134,  379 => 133,  377 => 132,  374 => 131,  362 => 130,  349 => 126,  345 => 124,  337 => 122,  331 => 120,  329 => 119,  324 => 118,  322 => 117,  319 => 116,  311 => 115,  305 => 113,  303 => 112,  300 => 111,  298 => 110,  295 => 109,  293 => 108,  289 => 106,  286 => 105,  283 => 104,  275 => 99,  269 => 96,  265 => 94,  263 => 93,  260 => 92,  258 => 91,  254 => 89,  252 => 88,  249 => 87,  247 => 86,  243 => 84,  237 => 81,  233 => 79,  230 => 78,  228 => 77,  224 => 75,  221 => 74,  216 => 71,  212 => 69,  208 => 67,  206 => 66,  202 => 65,  198 => 63,  192 => 60,  189 => 59,  186 => 58,  184 => 57,  178 => 54,  174 => 53,  168 => 50,  157 => 42,  153 => 41,  149 => 39,  146 => 38,  132 => 37,  119 => 33,  115 => 31,  112 => 30,  108 => 28,  106 => 27,  103 => 26,  101 => 25,  94 => 23,  91 => 22,  83 => 18,  81 => 17,  78 => 16,  65 => 15,  60 => 162,  57 => 146,  54 => 129,  51 => 36,  48 => 14,  45 => 12,  42 => 11,  38 => 9,  36 => 8,  33 => 7,  31 => 6,  28 => 5,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% import "TopxiaWebBundle::macro.html.twig" as web_macro %}*/
/* {% import _self as header_macro %}*/
/* */
/* {% do load_script('course/common') %}*/
/* */
/* {% if member and not member.locked %}*/
/*   {% include 'TopxiaWebBundle:Course:Part/normal-header-for-member.html.twig' %}*/
/* {% elseif course.parentId|default(false) %}*/
/*   {% include 'TopxiaWebBundle:Course:Part/normal-header-for-guest.html.twig' with {source:"classroom"} %}*/
/* {% else %}*/
/*   */
/*   {% include 'TopxiaWebBundle:Course:Part/normal-header-for-guest.html.twig' %}*/
/* {% endif %}*/
/* */
/* {% macro picture(course, previewLesson) %}*/
/*   <div class="course-img">*/
/*     {% if previewLesson %}*/
/*       <a href="#modal" data-toggle="modal" data-url="{{ path('course_lessons_preview', {courseId: course.id, lessonId:previewLesson.id }) }}" class="course-img-cover">*/
/*         <i class="es-icon es-icon-playcircleoutline"></i>*/
/*       </a>*/
/*     {% endif %}*/
/* */
/*     <img class="img-responsive" src="{{ filepath(course.largePicture, 'course.png') }}" alt="{{ course.title }}">*/
/*     <div class="tags">*/
/*       {% if course.serializeMode == 'serialize' %}*/
/*         <span class="tag-serialing"></span>*/
/*       {% elseif course.serializeMode == 'finished' %}*/
/*         <span class="tag-finished"></span>*/
/*       {% endif %}*/
/*       {% if course.type == 'live' %}*/
/*         <span class="tag-live"></span>*/
/*       {% endif %}*/
/*     </div>*/
/*   </div>*/
/* {% endmacro %}*/
/* */
/* {% macro info(course, member, userVipStatus) %}*/
/*   {% import "TopxiaWebBundle::macro.html.twig" as web_macro %}*/
/*   <div class="course-info">*/
/*     <h2 class="title">*/
/*       {{ course.title }}*/
/*       <span class="es-qrcode top" data-url="{{path('course_qrcode',{id: course.id})}}">*/
/*         <i class="es-icon es-icon-qrcode"></i>*/
/*         <span class="qrcode-popover">*/
/*           <img src="" alt="">*/
/*           扫二维码继续学习*/
/*         </span>*/
/*       </span>*/
/*     </h2>*/
/*     <div class="subtitle">{{ course.subtitle }}</div>*/
/*     <div class="metas">*/
/*       <div class="score">*/
/*         {{ web_macro.star(course.rating) }}*/
/*         <span>({{ course.ratingNum }}人)</span>*/
/*       </div>*/
/* */
/*       {% if member and member.deadline > 0 %}*/
/*         {% if member.deadline > 'now'|date('U') %}*/
/*           <p class="expiry-date hidden-sm">*/
/*             <label for="">有效期</label><span>还有{{ member.deadline|remain_time }}</span>*/
/*           </p>*/
/*         {% else %}*/
/*          <div class="alert alert-danger alert-dismissable">*/
/*             您购买的课程已到期，无法学习课时、提问等。如有疑问请联系老师，或点击*/
/*             <a class=" "  href="{{path('course_rebuy',{courseId:course.id})}}">*/
/*             {% if course.price>0 %}*/
/*             重新购买*/
/*             {% else %}*/
/*             重新加入*/
/*             {% endif %}*/
/*             </a>。*/
/*           </div>*/
/*         {% endif %}*/
/*       {% endif %}*/
/* */
/* */
/*       {% if not member %}*/
/*         {% if course.expiryDay %}*/
/*           <p class="expiry-date hidden-sm">*/
/*             <label for="">有效期</label>*/
/*             <span>{{ course.expiryDay }}天</span>*/
/*           </p>*/
/*         {% endif %}*/
/*         <p class="discount-price">*/
/*           <label>价格</label>*/
/*           {% include 'TopxiaWebBundle:Course:Widget/course-price.html.twig' with {shows: ['price', 'discount']} %}*/
/*         </p>*/
/*         {% if course.discountId > 0 %}*/
/*           <p class="old-price hidden-sm">*/
/*             <label>原价</label>*/
/*             {% include 'TopxiaWebBundle:Course:Widget/course-price.html.twig' with {shows: ['originPrice']} %}*/
/*           </p>*/
/*           {% if course.discountObj|default(null) %}*/
/*             <p class="activity">*/
/*               <label>活动</label>*/
/*               <span class="name">{{ course.discountObj.name }}</span>*/
/*               <span>*/
/*                 <i class="es-icon es-icon-accesstime"></i>*/
/*                 <span id="discount-endtime-countdown" class="text-muted" data-remaintime="{{ course.discountObj.endTime - 'now'|date('U') }}"*/
/*                 ></span>*/
/*               </span>*/
/*             </p>*/
/*           {% endif %}*/
/*         {% endif %}*/
/*       {% endif %}*/
/*     </div>*/
/* */
/*     {% if not member.fake|default(false) and member and member.role == 'student' and member.levelId > 0 and userVipStatus != 'ok' %}*/
/*       <div class="alert alert-danger">*/
/*         {% if userVipStatus == 'not_member' %}*/
/*           您已经不是会员，不能学习此课程！*/
/*           {% if course.price > 0 %}*/
/*             请重新<a class="btn-link" href="{{ path('vip') }}" target="_blank">开通会员</a>*/
/*           {% else %}*/
/*             <a class="btn-link js-exit-course" data-url="{{ path('course_exit', { id:course.id }) }}" data-go="{{ path('course_show', { id:course.id }) }}">返回课程首页</a>*/
/*           {% endif %}！*/
/*         {% elseif userVipStatus == 'member_expired' %}*/
/*           您的会员已过期，不能学习此课程，请先<a class="btn-link" href="{{ path('vip_renew') }}" target="_blank">续费</a>。*/
/*         {% elseif userVipStatus == 'level_low' %}*/
/*           会员等级不够，不能学习此课程。请先<a class="btn-link" href="{{ path('vip_upgrade') }}" target="_blank">升级会员</a>。*/
/*         {% else %}*/
/*           此课程已不支持会员免费学，<a class="btn-link js-exit-course" href="javascript:;" data-url="{{ path('course_exit', { id:course.id }) }}" data-go="{{ path('course_show', { id:course.id }) }}">返回课程首页</a>*/
/*         {% endif %}*/
/*       </div>*/
/*     {% endif %}*/
/* */
/*   </div>*/
/* {% endmacro %}*/
/* */
/* {% macro student_num(course) %}*/
/*   <div class="student-num hidden-xs">*/
/*     {% if setting('course.show_student_num_enabled', '1') == 1  %}*/
/*       <i class="es-icon es-icon-people"></i>{{ course.studentNum }}人*/
/*       {% if course.maxStudentNum > 0 %}*/
/*         {% if course.studentNum >= course.maxStudentNum %}*/
/*           <small class="hidden-sm text-sm">(名额已满)</small>*/
/*         {% else %}*/
/*           <small class="hidden-sm text-sm">({{ course.maxStudentNum }}名额)</small>*/
/*         {% endif %}*/
/*       {% endif %}*/
/*     {% else %}*/
/*       <i class="es-icon es-icon-accesstime"></i>{{ course.lessonNum }}课时*/
/*     {% endif %}*/
/*   </div>*/
/* {% endmacro %}*/
/* */
/* {% macro favorite_btn(course, hasFavorited) %}*/
/*   <li id="unfavorite-btn" data-url="{{ path('course_unfavorite', {id:course.id}) }}" {% if not hasFavorited %}style="display:none;"{% endif %}>*/
/*     <a href="javascript:;" class="color-primary">*/
/*       <p><i class="es-icon es-icon-bookmark"></i></p>*/
/*       <p>已收藏</p>*/
/*     </a>*/
/*   </li>*/
/* */
/*   <li id="favorite-btn" data-url="{{ path('course_favorite', {id:course.id}) }}" {% if hasFavorited %}style="display:none;"{% endif %}>*/
/*     <a href="javascript:;">*/
/*       <p><i class="es-icon es-icon-bookmarkoutline"></i></p>*/
/*       <p>收藏</p>*/
/*     </a>*/
/*   </li>*/
/* {% endmacro %}*/
/* */
/* {% macro share_btn(course) %}*/
/*   <li>*/
/*     <span class="es-share top">*/
/*       <a class="dropdown-toggle" href="" data-toggle="dropdown">*/
/*         <p><i class="es-icon es-icon-share"></i></p>*/
/*         <p>分享</p>*/
/*       </a>*/
/*       {% include 'TopxiaWebBundle:Common:share-dropdown.html.twig' with {type:'course'} %}*/
/*     </span>*/
/*   </li>*/
/* {% endmacro %}*/
