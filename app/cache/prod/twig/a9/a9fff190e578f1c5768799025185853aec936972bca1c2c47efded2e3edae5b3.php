<?php

/* TopxiaWebBundle:CourseManage:layout.html.twig */
class __TwigTemplate_a141cd3240ed6ddc5dcd2e4e4d75efcc0d6a7a00f9d75b817aa9026b7a60b87d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "TopxiaWebBundle:CourseManage:layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'side' => array($this, 'block_side'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "课程管理 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<style>
.locked li a{
  padding:10px 15px 10px 0px !important;
}
.locked li a>span{
  display:inline-block;
  width:35px;
  padding:0px 10px;
}
</style>
  ";
        // line 16
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Course:header", array("course" => (isset($context["course"]) ? $context["course"] : null), "manage" => true)));
        echo "

<div class=\"row\">
  <div class=\"col-md-3\">
    ";
        // line 20
        $this->displayBlock('side', $context, $blocks);
        // line 191
        echo "  </div>
  <div class=\"col-md-9\">
    ";
        // line 193
        $this->displayBlock('main', $context, $blocks);
        // line 194
        echo "  </div>
</div>
";
    }

    // line 20
    public function block_side($context, array $blocks = array())
    {
        // line 21
        echo "      ";
        $context["side_nav"] = ((array_key_exists("side_nav", $context)) ? (_twig_default_filter((isset($context["side_nav"]) ? $context["side_nav"] : null), null)) : (null));
        // line 22
        echo "      <div class=\"sidenav locked\">
        <ul class=\"list-group\">
          <li class=\"list-group-heading\">课程信息</li>  
          <li class=\"list-group-item ";
        // line 25
        if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "base")) {
            echo "active";
        }
        echo "\">
            <a href=\"";
        // line 26
        if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array()), 0)) : (0)) == 1)) {
            // line 27
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_course_sync", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "type" => "base")), "html", null, true);
        } else {
            // line 28
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_base", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "
            ";
        }
        // line 29
        echo "\">
              <span ";
        // line 30
        if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array()), 0)) : (0)) == 1)) {
            echo "class=\"es-icon es-icon-lock\" aria-hidden=\"true\" ";
        }
        echo " ></span>基本信息
            </a>
          </li>
          <li class=\"list-group-item ";
        // line 33
        if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "detail")) {
            echo "active";
        }
        echo "\">
            <a href=\"";
        // line 34
        if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array()), 0)) : (0)) == 1)) {
            // line 35
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_course_sync", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "type" => "detail")), "html", null, true);
        } else {
            // line 36
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_detail", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "
            ";
        }
        // line 37
        echo "\">
              <span ";
        // line 38
        if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array()), 0)) : (0)) == 1)) {
            echo "class=\"es-icon es-icon-lock\" aria-hidden=\"true\" ";
        }
        echo " ></span>详细信息
            </a>
          </li>
          <li class=\"list-group-item ";
        // line 41
        if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "picture")) {
            echo "active";
        }
        echo "\">
            <a href=\"";
        // line 42
        if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array()), 0)) : (0)) == 1)) {
            // line 43
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_course_sync", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "type" => "picture")), "html", null, true);
        } else {
            // line 44
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_picture", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "
            ";
        }
        // line 45
        echo "\">
              <span ";
        // line 46
        if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array()), 0)) : (0)) == 1)) {
            echo "class=\"es-icon es-icon-lock\" aria-hidden=\"true\" ";
        }
        echo " ></span>课程图片
            </a>
          </li>
          <li class=\"list-group-item ";
        // line 49
        if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "lesson")) {
            echo "active";
        }
        echo "\">
            <a href=\"";
        // line 50
        if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array()), 0)) : (0)) == 1)) {
            // line 51
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_course_sync", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "type" => "lesson")), "html", null, true);
        } else {
            // line 52
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_lesson", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "
            ";
        }
        // line 53
        echo "\">
              <span ";
        // line 54
        if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array()), 0)) : (0)) == 1)) {
            echo "class=\"es-icon es-icon-lock\" aria-hidden=\"true\" ";
        }
        echo " ></span>课时管理
            </a>
          </li>
          ";
        // line 57
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "type", array()) == "live")) {
            // line 58
            echo "          <li class=\"list-group-item ";
            if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "replay")) {
                echo "active";
            }
            echo "\" >
            <a href=\"";
            // line 59
            if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array()), 0)) : (0)) == 1)) {
                // line 60
                echo "            ";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_course_sync", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "type" => "replay")), "html", null, true);
            } else {
                // line 61
                echo "            ";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("live_course_manage_replay", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
                echo "
            ";
            }
            // line 62
            echo "\"><span ";
            if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array()), 0)) : (0)) == 1)) {
                echo "class=\"es-icon es-icon-lock\" aria-hidden=\"true\" ";
            }
            echo "></span>录播管理</a>
          </li>
          ";
        }
        // line 65
        echo "          <li class=\"list-group-item ";
        if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "files")) {
            echo "active";
        }
        echo "\">
            <a href=\"";
        // line 66
        if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array()), 0)) : (0)) == 1)) {
            // line 67
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_course_sync", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "type" => "files")), "html", null, true);
        } else {
            // line 68
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_files", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "
            ";
        }
        // line 69
        echo "\">
              <span ";
        // line 70
        if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array()), 0)) : (0)) == 1)) {
            echo "class=\"es-icon es-icon-lock\" aria-hidden=\"true\" ";
        }
        echo " ></span>文件管理
            </a>
          </li>
          <li class=\"list-group-item ";
        // line 73
        if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "productBase")) {
            echo "active";
        }
        echo "\">
            <a href=\"";
        // line 74
        if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array()), 0)) : (0)) == 1)) {
            // line 75
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_course_sync", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "type" => "product")), "html", null, true);
        } else {
            // line 76
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_product_base", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "
            ";
        }
        // line 77
        echo "\">
              <span ";
        // line 78
        if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array()), 0)) : (0)) == 1)) {
            echo "class=\"es-icon es-icon-lock\" aria-hidden=\"true\" ";
        }
        echo " ></span>基地管理
            </a>
          </li>
          <li class=\"list-group-item ";
        // line 81
        if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "news")) {
            echo "active";
        }
        echo "\">
            <a href=\"";
        // line 82
        if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array()), 0)) : (0)) == 1)) {
            // line 83
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_course_sync", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "type" => "product")), "html", null, true);
        } else {
            // line 84
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_news", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "
            ";
        }
        // line 85
        echo "\">
              <span ";
        // line 86
        if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array()), 0)) : (0)) == 1)) {
            echo "class=\"es-icon es-icon-lock\" aria-hidden=\"true\" ";
        }
        echo " ></span>资讯管理
            </a>
          </li>
          <li class=\"list-group-item ";
        // line 89
        if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "nongzi")) {
            echo "active";
        }
        echo "\">
            <a href=\"";
        // line 90
        if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array()), 0)) : (0)) == 1)) {
            // line 91
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_course_sync", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "type" => "product")), "html", null, true);
        } else {
            // line 92
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_nongzi", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "type" => "nongzi")), "html", null, true);
            echo "
            ";
        }
        // line 93
        echo "\">
              <span ";
        // line 94
        if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array()), 0)) : (0)) == 1)) {
            echo "class=\"es-icon es-icon-lock\" aria-hidden=\"true\" ";
        }
        echo " ></span>相关农资
            </a>
          </li>
          <li class=\"list-group-item ";
        // line 97
        if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "jiaocheng")) {
            echo "active";
        }
        echo "\">
            <a href=\"";
        // line 98
        if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array()), 0)) : (0)) == 1)) {
            // line 99
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_course_sync", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "type" => "product")), "html", null, true);
        } else {
            // line 100
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_nongzi", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "type" => "jiaocheng")), "html", null, true);
            echo "
            ";
        }
        // line 101
        echo "\">
              <span ";
        // line 102
        if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array()), 0)) : (0)) == 1)) {
            echo "class=\"es-icon es-icon-lock\" aria-hidden=\"true\" ";
        }
        echo " ></span>相关教程
            </a>
          </li>
        </ul>

        <ul class=\"list-group\">
          <li class=\"list-group-heading\">课程设置</li>
          <li class=\"list-group-item ";
        // line 109
        if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "price")) {
            echo "active";
        }
        echo "\">
            <a href=\"";
        // line 110
        if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array()), 0)) : (0)) == 1)) {
            // line 111
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_course_sync", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "type" => "price")), "html", null, true);
        } else {
            // line 112
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_price", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "
            ";
        }
        // line 113
        echo "\">
              <span ";
        // line 114
        if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array()), 0)) : (0)) == 1)) {
            echo "class=\"es-icon es-icon-lock\" aria-hidden=\"true\" ";
        }
        echo "></span>价格设置
            </a>
          </li>
          <li class=\"list-group-item ";
        // line 117
        if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "teachers")) {
            echo "active";
        }
        echo "\">
            <a href=\"";
        // line 118
        if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array()), 0)) : (0)) == 1)) {
            // line 119
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_course_sync", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "type" => "teachers")), "html", null, true);
        } else {
            // line 120
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_teachers", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "
            ";
        }
        // line 121
        echo "\">
              <span ";
        // line 122
        if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array()), 0)) : (0)) == 1)) {
            echo "class=\"es-icon es-icon-lock\" aria-hidden=\"true\" ";
        }
        echo "></span>教师设置
            </a>
          </li>
          <li class=\"list-group-item ";
        // line 125
        if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "students")) {
            echo "active";
        }
        echo "\">
            <a href=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_students", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
        echo "\">
              <span></span>";
        // line 127
        if ($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name")) {
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), "学员"), "html", null, true);
        }
        echo "管理
            </a>
          </li>
        </ul>

        <ul class=\"list-group\">
          <li class=\"list-group-heading\">题库</li>
          <li class=\"list-group-item ";
        // line 134
        if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "question")) {
            echo "active";
        }
        echo "\">
            <a href=\"";
        // line 135
        if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array()), 0)) : (0)) == 1)) {
            // line 136
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_course_sync", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "type" => "question")), "html", null, true);
        } else {
            // line 137
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_question", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "
            ";
        }
        // line 138
        echo "\">
              <span ";
        // line 139
        if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array()), 0)) : (0)) == 1)) {
            echo "class=\"es-icon es-icon-lock\" aria-hidden=\"true\" ";
        }
        echo "></span>题目管理
            </a>
          </li>

          ";
        // line 143
        if (($this->env->getExtension('topxia_web_twig')->isPluginInstalled("QuestionPlus") && $this->env->getExtension('topxia_web_twig')->getSetting("question_plus.enabled"))) {
            // line 144
            echo "            <li class=\"list-group-item ";
            if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "question_plumber")) {
                echo "active";
            }
            echo "\">
              <a href=\"";
            // line 145
            if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array()), 0)) : (0)) == 1)) {
                // line 146
                echo "              ";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_course_sync", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "type" => "question_plumber")), "html", null, true);
            } else {
                // line 147
                echo "              ";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_question_plumber", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "type" => "import")), "html", null, true);
                echo "
              ";
            }
            // line 148
            echo "\">
              <span ";
            // line 149
            if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array()), 0)) : (0)) == 1)) {
                echo "class=\"es-icon es-icon-lock\" aria-hidden=\"true\" ";
            }
            echo "></span>题目导入/导出
            </a>
            </li>
          ";
        }
        // line 153
        echo "
          <!-- <li class=\"list-group-item ";
        // line 154
        if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "question_category")) {
            echo "active";
        }
        echo "\">
            <a href=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_question_category", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
        echo "\">题目类别管理</a>
          </li> -->
          
          <li class=\"list-group-item ";
        // line 158
        if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "testpaper")) {
            echo "active";
        }
        echo "\">
            <a href=\"";
        // line 159
        if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array()), 0)) : (0)) == 1)) {
            // line 160
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_course_sync", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "type" => "testpaper")), "html", null, true);
        } else {
            // line 161
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_testpaper", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "
            ";
        }
        // line 162
        echo "\">
              <span ";
        // line 163
        if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array()), 0)) : (0)) == 1)) {
            echo "class=\"es-icon es-icon-lock\" aria-hidden=\"true\" ";
        }
        echo "></span>试卷管理
            </a>
          </li>
          <li class=\"list-group-item ";
        // line 166
        if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "testCheck")) {
            echo "active";
        }
        echo "\">
            <a href=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_test_check", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "status" => "reviewing")), "html", null, true);
        echo "\"><span></span>试卷批阅</a>
          </li>
          ";
        // line 169
        if ($this->env->getExtension('topxia_web_twig')->isPluginInstalled("Homework")) {
            // line 170
            echo "            <li class=\"list-group-item ";
            if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "homeworkCheck")) {
                echo "active";
            }
            echo "\">
              <a href=\"";
            // line 171
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_homework_check_list", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "status" => "reviewing")), "html", null, true);
            echo "\"><span></span>作业批改</a>
            </li>
          ";
        }
        // line 174
        echo "        </ul>

        <ul class=\"list-group\">
          <li class=\"list-group-heading\">课程运营</li>
          <li class=\"list-group-item ";
        // line 178
        if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "course_manage_data")) {
            echo "active";
        }
        echo "\">
            <a href=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_data", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
        echo "\">
              <span></span>课程学习数据</a>
          </li>

          ";
        // line 183
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "isAdmin", array(), "method") || ($this->env->getExtension('topxia_web_twig')->getSetting("course.teacher_search_order") == 1))) {
            // line 184
            echo "          <li class=\"list-group-item ";
            if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "course_manage_order")) {
                echo "active";
            }
            echo "\">
            <a href=\"";
            // line 185
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_order", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "\"><span></span>课程订单查询</a>
          </li>
          ";
        }
        // line 188
        echo "        </ul>
      </div>
    ";
    }

    // line 193
    public function block_main($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseManage:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  634 => 193,  628 => 188,  622 => 185,  615 => 184,  613 => 183,  606 => 179,  600 => 178,  594 => 174,  588 => 171,  581 => 170,  579 => 169,  574 => 167,  568 => 166,  560 => 163,  557 => 162,  551 => 161,  547 => 160,  545 => 159,  539 => 158,  533 => 155,  527 => 154,  524 => 153,  515 => 149,  512 => 148,  506 => 147,  502 => 146,  500 => 145,  493 => 144,  491 => 143,  482 => 139,  479 => 138,  473 => 137,  469 => 136,  467 => 135,  461 => 134,  449 => 127,  445 => 126,  439 => 125,  431 => 122,  428 => 121,  422 => 120,  418 => 119,  416 => 118,  410 => 117,  402 => 114,  399 => 113,  393 => 112,  389 => 111,  387 => 110,  381 => 109,  369 => 102,  366 => 101,  360 => 100,  356 => 99,  354 => 98,  348 => 97,  340 => 94,  337 => 93,  331 => 92,  327 => 91,  325 => 90,  319 => 89,  311 => 86,  308 => 85,  302 => 84,  298 => 83,  296 => 82,  290 => 81,  282 => 78,  279 => 77,  273 => 76,  269 => 75,  267 => 74,  261 => 73,  253 => 70,  250 => 69,  244 => 68,  240 => 67,  238 => 66,  231 => 65,  222 => 62,  216 => 61,  212 => 60,  210 => 59,  203 => 58,  201 => 57,  193 => 54,  190 => 53,  184 => 52,  180 => 51,  178 => 50,  172 => 49,  164 => 46,  161 => 45,  155 => 44,  151 => 43,  149 => 42,  143 => 41,  135 => 38,  132 => 37,  126 => 36,  122 => 35,  120 => 34,  114 => 33,  106 => 30,  103 => 29,  97 => 28,  93 => 27,  91 => 26,  85 => 25,  80 => 22,  77 => 21,  74 => 20,  68 => 194,  66 => 193,  62 => 191,  60 => 20,  53 => 16,  41 => 6,  38 => 5,  31 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::layout.html.twig' %}*/
/* */
/* {% block title %}课程管理 - {{ parent() }}{% endblock %}*/
/* */
/* {% block content %}*/
/* <style>*/
/* .locked li a{*/
/*   padding:10px 15px 10px 0px !important;*/
/* }*/
/* .locked li a>span{*/
/*   display:inline-block;*/
/*   width:35px;*/
/*   padding:0px 10px;*/
/* }*/
/* </style>*/
/*   {{ render(controller('TopxiaWebBundle:Course:header', {course:course, manage: true})) }}*/
/* */
/* <div class="row">*/
/*   <div class="col-md-3">*/
/*     {% block side %}*/
/*       {% set side_nav = side_nav|default(null) %}*/
/*       <div class="sidenav locked">*/
/*         <ul class="list-group">*/
/*           <li class="list-group-heading">课程信息</li>  */
/*           <li class="list-group-item {% if side_nav == 'base' %}active{% endif %}">*/
/*             <a href="{% if course.locked|default(0) == 1 %}*/
/*             {{ path('course_manage_course_sync', {id:course.id,type:'base'}) }}{% else %}*/
/*             {{ path('course_manage_base', {id:course.id}) }}*/
/*             {% endif %}">*/
/*               <span {% if course.locked|default(0) == 1 %}class="es-icon es-icon-lock" aria-hidden="true" {% endif %} ></span>基本信息*/
/*             </a>*/
/*           </li>*/
/*           <li class="list-group-item {% if side_nav == 'detail' %}active{% endif %}">*/
/*             <a href="{% if course.locked|default(0) == 1 %}*/
/*             {{ path('course_manage_course_sync', {id:course.id,type:'detail'}) }}{% else %}*/
/*             {{ path('course_manage_detail', {id:course.id}) }}*/
/*             {% endif %}">*/
/*               <span {% if course.locked|default(0) == 1 %}class="es-icon es-icon-lock" aria-hidden="true" {% endif %} ></span>详细信息*/
/*             </a>*/
/*           </li>*/
/*           <li class="list-group-item {% if side_nav == 'picture' %}active{% endif %}">*/
/*             <a href="{% if course.locked|default(0) == 1 %}*/
/*             {{ path('course_manage_course_sync', {id:course.id,type:'picture'}) }}{% else %}*/
/*             {{ path('course_manage_picture', {id:course.id}) }}*/
/*             {% endif %}">*/
/*               <span {% if course.locked|default(0) == 1 %}class="es-icon es-icon-lock" aria-hidden="true" {% endif %} ></span>课程图片*/
/*             </a>*/
/*           </li>*/
/*           <li class="list-group-item {% if side_nav == 'lesson' %}active{% endif %}">*/
/*             <a href="{% if course.locked|default(0) == 1 %}*/
/*             {{ path('course_manage_course_sync', {id:course.id,type:'lesson'}) }}{% else %}*/
/*             {{ path('course_manage_lesson', {id:course.id}) }}*/
/*             {% endif %}">*/
/*               <span {% if course.locked|default(0) == 1 %}class="es-icon es-icon-lock" aria-hidden="true" {% endif %} ></span>课时管理*/
/*             </a>*/
/*           </li>*/
/*           {% if course.type == 'live' %}*/
/*           <li class="list-group-item {% if side_nav == 'replay' %}active{% endif %}" >*/
/*             <a href="{% if course.locked|default(0) == 1 %}*/
/*             {{ path('course_manage_course_sync', {id:course.id,type:'replay'}) }}{% else %}*/
/*             {{ path('live_course_manage_replay', {id:course.id}) }}*/
/*             {% endif %}"><span {% if course.locked|default(0) == 1 %}class="es-icon es-icon-lock" aria-hidden="true" {% endif %}></span>录播管理</a>*/
/*           </li>*/
/*           {% endif %}*/
/*           <li class="list-group-item {% if side_nav == 'files' %}active{% endif %}">*/
/*             <a href="{% if course.locked|default(0) == 1 %}*/
/*             {{ path('course_manage_course_sync', {id:course.id,type:'files'}) }}{% else %}*/
/*             {{ path('course_manage_files', {id:course.id}) }}*/
/*             {% endif %}">*/
/*               <span {% if course.locked|default(0) == 1 %}class="es-icon es-icon-lock" aria-hidden="true" {% endif %} ></span>文件管理*/
/*             </a>*/
/*           </li>*/
/*           <li class="list-group-item {% if side_nav == 'productBase' %}active{% endif %}">*/
/*             <a href="{% if course.locked|default(0) == 1 %}*/
/*             {{ path('course_manage_course_sync', {id:course.id,type:'product'}) }}{% else %}*/
/*             {{ path('course_manage_product_base', {id:course.id}) }}*/
/*             {% endif %}">*/
/*               <span {% if course.locked|default(0) == 1 %}class="es-icon es-icon-lock" aria-hidden="true" {% endif %} ></span>基地管理*/
/*             </a>*/
/*           </li>*/
/*           <li class="list-group-item {% if side_nav == 'news' %}active{% endif %}">*/
/*             <a href="{% if course.locked|default(0) == 1 %}*/
/*             {{ path('course_manage_course_sync', {id:course.id,type:'product'}) }}{% else %}*/
/*             {{ path('course_manage_news', {id:course.id}) }}*/
/*             {% endif %}">*/
/*               <span {% if course.locked|default(0) == 1 %}class="es-icon es-icon-lock" aria-hidden="true" {% endif %} ></span>资讯管理*/
/*             </a>*/
/*           </li>*/
/*           <li class="list-group-item {% if side_nav == 'nongzi' %}active{% endif %}">*/
/*             <a href="{% if course.locked|default(0) == 1 %}*/
/*             {{ path('course_manage_course_sync', {id:course.id,type:'product'}) }}{% else %}*/
/*             {{ path('course_manage_nongzi', {id:course.id,type:'nongzi'}) }}*/
/*             {% endif %}">*/
/*               <span {% if course.locked|default(0) == 1 %}class="es-icon es-icon-lock" aria-hidden="true" {% endif %} ></span>相关农资*/
/*             </a>*/
/*           </li>*/
/*           <li class="list-group-item {% if side_nav == 'jiaocheng' %}active{% endif %}">*/
/*             <a href="{% if course.locked|default(0) == 1 %}*/
/*             {{ path('course_manage_course_sync', {id:course.id,type:'product'}) }}{% else %}*/
/*             {{ path('course_manage_nongzi', {id:course.id,type:'jiaocheng'}) }}*/
/*             {% endif %}">*/
/*               <span {% if course.locked|default(0) == 1 %}class="es-icon es-icon-lock" aria-hidden="true" {% endif %} ></span>相关教程*/
/*             </a>*/
/*           </li>*/
/*         </ul>*/
/* */
/*         <ul class="list-group">*/
/*           <li class="list-group-heading">课程设置</li>*/
/*           <li class="list-group-item {% if side_nav == 'price' %}active{% endif %}">*/
/*             <a href="{% if course.locked|default(0) == 1 %}*/
/*             {{ path('course_manage_course_sync', {id:course.id,type:'price'}) }}{% else %}*/
/*             {{ path('course_manage_price', {id:course.id}) }}*/
/*             {% endif %}">*/
/*               <span {% if course.locked|default(0) == 1 %}class="es-icon es-icon-lock" aria-hidden="true" {% endif %}></span>价格设置*/
/*             </a>*/
/*           </li>*/
/*           <li class="list-group-item {% if side_nav == 'teachers' %}active{% endif %}">*/
/*             <a href="{% if course.locked|default(0) == 1 %}*/
/*             {{ path('course_manage_course_sync', {id:course.id,type:'teachers'}) }}{% else %}*/
/*             {{ path('course_manage_teachers', {id:course.id}) }}*/
/*             {% endif %}">*/
/*               <span {% if course.locked|default(0) == 1 %}class="es-icon es-icon-lock" aria-hidden="true" {% endif %}></span>教师设置*/
/*             </a>*/
/*           </li>*/
/*           <li class="list-group-item {% if side_nav == 'students' %}active{% endif %}">*/
/*             <a href="{{ path('course_manage_students', {id:course.id}) }}">*/
/*               <span></span>{% if setting('default.user_name') %}{{setting('default.user_name')|default('学员')}}{% endif %}管理*/
/*             </a>*/
/*           </li>*/
/*         </ul>*/
/* */
/*         <ul class="list-group">*/
/*           <li class="list-group-heading">题库</li>*/
/*           <li class="list-group-item {% if side_nav == 'question' %}active{% endif %}">*/
/*             <a href="{% if course.locked|default(0) == 1 %}*/
/*             {{ path('course_manage_course_sync', {id:course.id,type:'question'}) }}{% else %}*/
/*             {{ path('course_manage_question', {courseId:course.id}) }}*/
/*             {% endif %}">*/
/*               <span {% if course.locked|default(0) == 1 %}class="es-icon es-icon-lock" aria-hidden="true" {% endif %}></span>题目管理*/
/*             </a>*/
/*           </li>*/
/* */
/*           {% if is_plugin_installed('QuestionPlus') and setting('question_plus.enabled') %}*/
/*             <li class="list-group-item {% if side_nav == 'question_plumber' %}active{% endif %}">*/
/*               <a href="{% if course.locked|default(0) == 1 %}*/
/*               {{ path('course_manage_course_sync', {id:course.id,type:'question_plumber'}) }}{% else %}*/
/*               {{ path('course_question_plumber', {courseId:course.id, type:'import'}) }}*/
/*               {% endif %}">*/
/*               <span {% if course.locked|default(0) == 1 %}class="es-icon es-icon-lock" aria-hidden="true" {% endif %}></span>题目导入/导出*/
/*             </a>*/
/*             </li>*/
/*           {% endif %}*/
/* */
/*           <!-- <li class="list-group-item {% if side_nav == 'question_category' %}active{% endif %}">*/
/*             <a href="{{ path('course_manage_question_category', {courseId:course.id}) }}">题目类别管理</a>*/
/*           </li> -->*/
/*           */
/*           <li class="list-group-item {% if side_nav == 'testpaper' %}active{% endif %}">*/
/*             <a href="{% if course.locked|default(0) == 1 %}*/
/*             {{ path('course_manage_course_sync', {id:course.id,type:'testpaper'}) }}{% else %}*/
/*             {{ path('course_manage_testpaper', {courseId:course.id}) }}*/
/*             {% endif %}">*/
/*               <span {% if course.locked|default(0) == 1 %}class="es-icon es-icon-lock" aria-hidden="true" {% endif %}></span>试卷管理*/
/*             </a>*/
/*           </li>*/
/*           <li class="list-group-item {% if side_nav == 'testCheck' %}active{% endif %}">*/
/*             <a href="{{ path('course_manage_test_check', {id:course.id, status:'reviewing'}) }}"><span></span>试卷批阅</a>*/
/*           </li>*/
/*           {% if is_plugin_installed('Homework') %}*/
/*             <li class="list-group-item {% if side_nav == 'homeworkCheck' %}active{% endif %}">*/
/*               <a href="{{ path('course_homework_check_list', {courseId:course.id,status:'reviewing'}) }}"><span></span>作业批改</a>*/
/*             </li>*/
/*           {% endif %}*/
/*         </ul>*/
/* */
/*         <ul class="list-group">*/
/*           <li class="list-group-heading">课程运营</li>*/
/*           <li class="list-group-item {% if side_nav == 'course_manage_data' %}active{% endif %}">*/
/*             <a href="{{path('course_manage_data',{id:course.id})}}">*/
/*               <span></span>课程学习数据</a>*/
/*           </li>*/
/* */
/*           {% if app.user.isAdmin() or setting('course.teacher_search_order') == 1 %}*/
/*           <li class="list-group-item {% if side_nav == 'course_manage_order' %}active{% endif %}">*/
/*             <a href="{{path('course_manage_order',{id:course.id})}}"><span></span>课程订单查询</a>*/
/*           </li>*/
/*           {% endif %}*/
/*         </ul>*/
/*       </div>*/
/*     {% endblock %}*/
/*   </div>*/
/*   <div class="col-md-9">*/
/*     {% block main %}{% endblock %}*/
/*   </div>*/
/* </div>*/
/* {% endblock %}*/
