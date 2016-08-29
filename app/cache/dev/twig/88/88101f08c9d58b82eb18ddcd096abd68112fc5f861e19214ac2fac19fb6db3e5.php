<?php

/* TopxiaWebBundle:My:layout.html.twig */
class __TwigTemplate_b27488f90a0ce7f2aece34dbfefd98664e06a789e902c65c5913fbcd0c2cedb9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "TopxiaWebBundle:My:layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
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
        echo "我的学习 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
";
        // line 7
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:My:avatarAlert"));
        echo "

<div class=\"row row-3-9\">
  <div class=\"col-md-3\">
    <div class=\"sidenav\">
      ";
        // line 12
        if ($this->env->getExtension('topxia_web_twig')->isPluginInstalled("Point")) {
            // line 13
            echo "        <ul class=\"list-group\">
          <li class=\"list-group-heading\">我的网校</li>
          <li class=\"list-group-item
           ";
            // line 16
            if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "growth")) {
                echo " active ";
            }
            echo "\">
            <a href=\"";
            // line 17
            echo $this->env->getExtension('routing')->getPath("my");
            echo "\">我的成长</a>
          </li>
        </ul>
      ";
        }
        // line 21
        echo "      ";
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "isTeacher", array(), "method")) {
            // line 22
            echo "        <ul class=\"list-group\">
          <li class=\"list-group-heading\">我的教学</li>
          <li class=\"list-group-item
           ";
            // line 25
            if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "my-teaching-courses")) {
                echo " active ";
            }
            echo "\">
            <a href=\"";
            // line 26
            echo $this->env->getExtension('routing')->getPath("my_teaching_courses");
            echo "\">在教课程</a>
          </li>

          ";
            // line 29
            if (_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.enabled"), 0)) {
                // line 30
                echo "            <li class=\"list-group-item ";
                if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "my-teaching-classroom")) {
                    echo " active ";
                }
                echo "\">
              <a href=\"";
                // line 31
                echo $this->env->getExtension('routing')->getPath("my_teaching_classrooms");
                echo "\">所教";
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
                echo "
              </a>
           </li>
          ";
            }
            // line 35
            echo "
          <li class=\"list-group-item ";
            // line 36
            if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "my-teaching-questions")) {
                echo "active ";
            }
            echo "\">
            <a href=\"";
            // line 37
            echo $this->env->getExtension('routing')->getPath("my_teaching_threads", array("type" => "question"));
            echo "\">";
            if ($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name")) {
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), "学员"), "html", null, true);
            } else {
                echo "学员";
            }
            echo "问答
            </a>
          </li>
          <li class=\"list-group-item ";
            // line 40
            if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "my-teaching-discussions")) {
                echo " active ";
            }
            echo "\">
            <a href=\"";
            // line 41
            echo $this->env->getExtension('routing')->getPath("my_teaching_threads", array("type" => "discussion"));
            echo "\">";
            if ($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name")) {
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), "学员"), "html", null, true);
            } else {
                echo "学员";
            }
            echo "话题</a>
          </li>
          
          <li class=\"list-group-item ";
            // line 44
            if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "my-teaching-check")) {
                echo " active ";
            }
            echo "\">
            <a href=\"";
            // line 45
            echo $this->env->getExtension('routing')->getPath("course_manage_list_teacher_test_reviewing");
            echo "\">试卷批阅
            </a>
          </li>
          
          ";
            // line 49
            if ($this->env->getExtension('topxia_web_twig')->isPluginInstalled("Homework")) {
                // line 50
                echo "            <li class=\"list-group-item ";
                if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "my-teaching-homework-check")) {
                    echo " active ";
                }
                echo "\">
              <a href=\"";
                // line 51
                echo $this->env->getExtension('routing')->getPath("my_teaching_homework_list");
                echo "\">作业批改</a>
            </li>
          ";
            }
            // line 54
            echo "
          ";
            // line 55
            if ($this->env->getExtension('topxia_web_twig')->isPluginInstalled("MaterialLib")) {
                // line 56
                echo "            <li class=\"list-group-item ";
                if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "material-lib")) {
                    echo " active ";
                }
                echo "\">
              <a href=\"";
                // line 57
                echo $this->env->getExtension('routing')->getPath("material_lib_browsing");
                echo "\">教学资料库</a>
            </li>
          ";
            }
            // line 60
            echo "        </ul>
      ";
        }
        // line 62
        echo "        
      <ul class=\"list-group\">
        <li class=\"list-group-heading\">我的学习</li>
        <li class=\"list-group-item ";
        // line 65
        if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "my-learning")) {
            echo " active ";
        }
        echo "\">
          <a href=\"";
        // line 66
        echo $this->env->getExtension('routing')->getPath("my_courses_learning");
        echo "\">我的课程</a>
        </li>

        ";
        // line 69
        if (_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.enabled"), 0)) {
            // line 70
            echo "          <li class=\"list-group-item ";
            if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "my-classroom")) {
                echo " active ";
            }
            echo "\">
            <a href=\"";
            // line 71
            echo $this->env->getExtension('routing')->getPath("my_classrooms");
            echo "\">我的";
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
            echo "</a>
          </li>
        ";
        }
        // line 74
        echo "
        ";
        // line 75
        if ($this->env->getExtension('topxia_web_twig')->getSetting("course.live_course_enabled")) {
            // line 76
            echo "        <li class=\"list-group-item
          ";
            // line 77
            if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "my-learning-live")) {
                echo " active ";
            }
            echo "\">
          <a href=\"";
            // line 78
            echo $this->env->getExtension('routing')->getPath("my_live_courses_learning");
            echo "\">我的直播课表</a>
        </li>
        ";
        }
        // line 81
        echo "
        <li class=\"list-group-item
        ";
        // line 83
        if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "my-questions")) {
            echo " active ";
        }
        echo "\" >
          <a href=\"";
        // line 84
        echo $this->env->getExtension('routing')->getPath("my_questions");
        echo "\">我的问答</a>
        </li>
        <li class=\"list-group-item
        ";
        // line 87
        if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "my-discussions")) {
            echo " active ";
        }
        echo "\">
          <a href=\"";
        // line 88
        echo $this->env->getExtension('routing')->getPath("my_discussions");
        echo "\">我的话题</a>
        </li>
        <li class=\"list-group-item
        ";
        // line 91
        if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "my-notes")) {
            echo " active ";
        }
        echo "\">
          <a href=\"";
        // line 92
        echo $this->env->getExtension('routing')->getPath("my_notebooks");
        echo "\">我的笔记</a>
        </li>
      
        ";
        // line 95
        if ($this->env->getExtension('topxia_web_twig')->isPluginInstalled("Homework")) {
            // line 96
            echo "          <li class=\"list-group-item ";
            if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "my-homeworks")) {
                echo " active ";
            }
            echo "\">
            <a href=\"";
            // line 97
            echo $this->env->getExtension('routing')->getPath("my_homework_list");
            echo "\">我的作业</a>
          </li>
        ";
        }
        // line 100
        echo "       
        <li class=\"list-group-item
        ";
        // line 102
        if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "my-quiz")) {
            echo " active ";
        }
        echo "\" >
          <a href=\"";
        // line 103
        echo $this->env->getExtension('routing')->getPath("my_quiz");
        echo "\">我的考试</a>
        </li>
        <li class=\"list-group-item
        ";
        // line 106
        if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "my-group")) {
            echo " active ";
        }
        echo "\">
          <a href=\"";
        // line 107
        echo $this->env->getExtension('routing')->getPath("group_member_center");
        echo "\">我的小组</a>
        </li>
        ";
        // line 109
        if ($this->env->getExtension('topxia_web_twig')->isPluginInstalled("ClassroomPlan")) {
            // line 110
            echo "          <li class=\"list-group-item
          ";
            // line 111
            if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "my-task")) {
                echo " active ";
            }
            echo "\" >
            <a href=\"";
            // line 112
            echo $this->env->getExtension('routing')->getPath("my_task_calendar");
            echo "\">我的任务</a>
          </li>
        ";
        }
        // line 115
        echo "      </ul>
    </div>
  </div>
  <div class=\"col-md-9\">";
        // line 118
        $this->displayBlock('main', $context, $blocks);
        echo "</div>
</div>

";
    }

    public function block_main($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:My:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  356 => 118,  351 => 115,  345 => 112,  339 => 111,  336 => 110,  334 => 109,  329 => 107,  323 => 106,  317 => 103,  311 => 102,  307 => 100,  301 => 97,  294 => 96,  292 => 95,  286 => 92,  280 => 91,  274 => 88,  268 => 87,  262 => 84,  256 => 83,  252 => 81,  246 => 78,  240 => 77,  237 => 76,  235 => 75,  232 => 74,  224 => 71,  217 => 70,  215 => 69,  209 => 66,  203 => 65,  198 => 62,  194 => 60,  188 => 57,  181 => 56,  179 => 55,  176 => 54,  170 => 51,  163 => 50,  161 => 49,  154 => 45,  148 => 44,  136 => 41,  130 => 40,  118 => 37,  112 => 36,  109 => 35,  100 => 31,  93 => 30,  91 => 29,  85 => 26,  79 => 25,  74 => 22,  71 => 21,  64 => 17,  58 => 16,  53 => 13,  51 => 12,  43 => 7,  40 => 6,  37 => 5,  30 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::layout.html.twig' %}*/
/* */
/* {% block title %}我的学习 - {{ parent() }}{% endblock %}*/
/* */
/* {% block content %}*/
/* */
/* {{ render(controller('TopxiaWebBundle:My:avatarAlert')) }}*/
/* */
/* <div class="row row-3-9">*/
/*   <div class="col-md-3">*/
/*     <div class="sidenav">*/
/*       {% if is_plugin_installed('Point') %}*/
/*         <ul class="list-group">*/
/*           <li class="list-group-heading">我的网校</li>*/
/*           <li class="list-group-item*/
/*            {% if side_nav == 'growth' %} active {% endif %}">*/
/*             <a href="{{path('my')}}">我的成长</a>*/
/*           </li>*/
/*         </ul>*/
/*       {% endif %}*/
/*       {% if app.user.isTeacher() %}*/
/*         <ul class="list-group">*/
/*           <li class="list-group-heading">我的教学</li>*/
/*           <li class="list-group-item*/
/*            {% if side_nav == 'my-teaching-courses' %} active {% endif %}">*/
/*             <a href="{{path('my_teaching_courses')}}">在教课程</a>*/
/*           </li>*/
/* */
/*           {% if setting('classroom.enabled')|default(0) %}*/
/*             <li class="list-group-item {% if side_nav == 'my-teaching-classroom' %} active {% endif %}">*/
/*               <a href="{{path('my_teaching_classrooms')}}">所教{{ setting('classroom.name')|default("班级") }}*/
/*               </a>*/
/*            </li>*/
/*           {% endif %}*/
/* */
/*           <li class="list-group-item {% if side_nav == 'my-teaching-questions' %}active {% endif %}">*/
/*             <a href="{{path('my_teaching_threads', {type:'question'}) }}">{% if setting('default.user_name') %}{{setting('default.user_name')|default('学员')}}{% else %}学员{% endif %}问答*/
/*             </a>*/
/*           </li>*/
/*           <li class="list-group-item {% if side_nav == 'my-teaching-discussions' %} active {% endif %}">*/
/*             <a href="{{path('my_teaching_threads', {type:'discussion'}) }}">{% if setting('default.user_name') %}{{setting('default.user_name')|default('学员')}}{% else %}学员{% endif %}话题</a>*/
/*           </li>*/
/*           */
/*           <li class="list-group-item {% if side_nav == 'my-teaching-check' %} active {% endif %}">*/
/*             <a href="{{path('course_manage_list_teacher_test_reviewing') }}">试卷批阅*/
/*             </a>*/
/*           </li>*/
/*           */
/*           {% if is_plugin_installed('Homework') %}*/
/*             <li class="list-group-item {% if side_nav == 'my-teaching-homework-check' %} active {% endif %}">*/
/*               <a href="{{path('my_teaching_homework_list') }}">作业批改</a>*/
/*             </li>*/
/*           {% endif %}*/
/* */
/*           {% if is_plugin_installed('MaterialLib') %}*/
/*             <li class="list-group-item {% if side_nav == 'material-lib' %} active {% endif %}">*/
/*               <a href="{{path('material_lib_browsing') }}">教学资料库</a>*/
/*             </li>*/
/*           {% endif %}*/
/*         </ul>*/
/*       {% endif %}*/
/*         */
/*       <ul class="list-group">*/
/*         <li class="list-group-heading">我的学习</li>*/
/*         <li class="list-group-item {% if side_nav == 'my-learning' %} active {% endif %}">*/
/*           <a href="{{path('my_courses_learning')}}">我的课程</a>*/
/*         </li>*/
/* */
/*         {% if setting('classroom.enabled')|default(0) %}*/
/*           <li class="list-group-item {% if side_nav == 'my-classroom' %} active {% endif %}">*/
/*             <a href="{{path('my_classrooms')}}">我的{{ setting('classroom.name')|default("班级") }}</a>*/
/*           </li>*/
/*         {% endif %}*/
/* */
/*         {% if setting('course.live_course_enabled') %}*/
/*         <li class="list-group-item*/
/*           {% if side_nav == 'my-learning-live' %} active {% endif %}">*/
/*           <a href="{{path('my_live_courses_learning')}}">我的直播课表</a>*/
/*         </li>*/
/*         {% endif %}*/
/* */
/*         <li class="list-group-item*/
/*         {% if side_nav == 'my-questions' %} active {% endif %}" >*/
/*           <a href="{{path('my_questions')}}">我的问答</a>*/
/*         </li>*/
/*         <li class="list-group-item*/
/*         {% if side_nav == 'my-discussions' %} active {% endif %}">*/
/*           <a href="{{path('my_discussions')}}">我的话题</a>*/
/*         </li>*/
/*         <li class="list-group-item*/
/*         {% if side_nav == 'my-notes' %} active {% endif %}">*/
/*           <a href="{{path('my_notebooks')}}">我的笔记</a>*/
/*         </li>*/
/*       */
/*         {% if is_plugin_installed('Homework') %}*/
/*           <li class="list-group-item {% if side_nav == 'my-homeworks' %} active {% endif %}">*/
/*             <a href="{{ path('my_homework_list') }}">我的作业</a>*/
/*           </li>*/
/*         {% endif %}*/
/*        */
/*         <li class="list-group-item*/
/*         {% if side_nav == 'my-quiz' %} active {% endif %}" >*/
/*           <a href="{{path('my_quiz')}}">我的考试</a>*/
/*         </li>*/
/*         <li class="list-group-item*/
/*         {% if side_nav == 'my-group' %} active {% endif %}">*/
/*           <a href="{{path('group_member_center')}}">我的小组</a>*/
/*         </li>*/
/*         {% if is_plugin_installed('ClassroomPlan') %}*/
/*           <li class="list-group-item*/
/*           {% if side_nav == 'my-task' %} active {% endif %}" >*/
/*             <a href="{{path('my_task_calendar')}}">我的任务</a>*/
/*           </li>*/
/*         {% endif %}*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/*   <div class="col-md-9">{% block main %}{% endblock %}</div>*/
/* </div>*/
/* */
/* {% endblock %}*/
