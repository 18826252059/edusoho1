<?php

/* TopxiaWebBundle:Course:course-select-list.html.twig */
class __TwigTemplate_0d210300bf1d47113e0c67f2b0a94ff8bf5d1ca57e1572844038f6419ff4b560 extends Twig_Template
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
        $context["web_macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "TopxiaWebBundle:Course:course-select-list.html.twig", 1);
        // line 2
        echo "<style>
.course-wide-list .enabled:hover{

    background: #eee;
    border-color: #ddd;
}

.course-wide-list .enabled{

    cursor: default;
    background: #eee;
}

</style>
<ul class=\"course-wide-list\">
  ";
        // line 17
        if ((isset($context["courses"]) ? $context["courses"] : null)) {
            // line 18
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["courses"]) ? $context["courses"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
                // line 19
                echo "  <li class=\"course-item clearfix\"   data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "id", array()), "html", null, true);
                echo "\" >
    <a class=\"course-picture-link\" href=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($context["course"], "id", array()))), "html", null, true);
                echo "\" target=\"_blank\">
      <img class=\"course-picture\" src=\"";
                // line 21
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute($context["course"], "middlePicture", array()), "course.png"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "title", array()), "html", null, true);
                echo "\">
    </a>
    <div class=\"course-body\">
     <div style=\"float:right;\" class=\"text-muted mrm mls\">
        ";
                // line 25
                if (($this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_enabled") && ($this->env->getExtension('topxia_web_twig')->getSetting("coin.price_type") == "Coin"))) {
                    // line 26
                    echo "            <span class=\"course-price\" style=\"display:inline\">
              ";
                    // line 27
                    if (($this->getAttribute($context["course"], "coinPrice", array()) > 0)) {
                        // line 28
                        echo "                 价格： ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "coinPrice", array()), "html", null, true);
                        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_name"), "html", null, true);
                        echo "
              ";
                    } else {
                        // line 30
                        echo "                免费
              ";
                    }
                    // line 32
                    echo "            </span>
        ";
                } else {
                    // line 34
                    echo "          <span class=\"course-price\">
            ";
                    // line 35
                    if (($this->getAttribute($context["course"], "price", array()) > 0)) {
                        // line 36
                        echo "               价格： ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "price", array()), "html", null, true);
                        echo "元
            ";
                    } else {
                        // line 38
                        echo "              免费
            ";
                    }
                    // line 40
                    echo "          </span>
        ";
                }
                // line 42
                echo "
        ";
                // line 43
                if (($this->env->getExtension('topxia_web_twig')->getSetting("course.show_student_num_enabled", "1") == 1)) {
                    // line 44
                    echo "          <span class=\"divider\"></span>
          <span class=\"text-muted mrm mls\"><strong>";
                    // line 45
                    echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "studentNum", array()), "html", null, true);
                    echo "</strong>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("default.user_name", "学员"), "html", null, true);
                    echo "</span>
        ";
                }
                // line 47
                echo "
        </div>

      <h4 class=\"course-title\"><a href=\"";
                // line 50
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($context["course"], "id", array()))), "html", null, true);
                echo "\" target=\"_blank\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "title", array()), "html", null, true);
                echo "</a>
      ";
                // line 51
                if (($this->getAttribute($context["course"], "serializeMode", array()) == "serialize")) {
                    // line 52
                    echo "        <span class=\"label label-success \">更新中</span>
      ";
                } elseif (($this->getAttribute(                // line 53
$context["course"], "serializeMode", array()) == "finished")) {
                    // line 54
                    echo "        <span class=\"label label-warning \">已完结</span>
      ";
                }
                // line 56
                echo "      ";
                if (($this->getAttribute($context["course"], "type", array()) == "live")) {
                    // line 57
                    echo "          ";
                    $context["lesson"] = (($this->getAttribute($context["course"], "lesson", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($context["course"], "lesson", array(), "array"), null)) : (null));
                    // line 58
                    echo "          ";
                    if ((((isset($context["lesson"]) ? $context["lesson"] : null) && (twig_date_format_filter($this->env, "now", "U") >= $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "startTime", array()))) && (twig_date_format_filter($this->env, "now", "U") <= $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "endTime", array())))) {
                        // line 59
                        echo "            <span class=\"label label-warning series-mode-label\">正在直播中</span>
          ";
                    } else {
                        // line 61
                        echo "            <span class=\"label label-success series-mode-label\">直播</span>
          ";
                    }
                    // line 63
                    echo "      ";
                }
                // line 64
                echo "      </h4>

      ";
                // line 66
                if (($this->getAttribute($context["course"], "type", array()) == "live")) {
                    // line 67
                    echo "        ";
                    $context["lesson"] = (($this->getAttribute($context["course"], "lesson", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["course"], "lesson", array()), null)) : (null));
                    // line 68
                    echo "        ";
                    if ((isset($context["lesson"]) ? $context["lesson"] : null)) {
                        // line 69
                        echo "          <div class=\"live-course-lesson mbm\">
            <span class=\"text-success fsm mrm\">";
                        // line 70
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "startTime", array()), "n月j日 H:i"), "html", null, true);
                        echo " ~ ";
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "endTime", array()), "H:i"), "html", null, true);
                        echo "</span>
            <span class=\"text-muted fsm mrm\">第";
                        // line 71
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "number", array()), "html", null, true);
                        echo "课时</span>
          </div>
        ";
                    }
                    // line 74
                    echo "      ";
                } else {
                    // line 75
                    echo "        <div class=\"course-about ellipsis\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "subtitle", array()), "html", null, true);
                    echo "</div>
      ";
                }
                // line 77
                echo "
      <div class=\"course-footer clearfix\">
        ";
                // line 79
                $context["teacher"] = (($this->getAttribute((isset($context["users"]) ? $context["users"] : null), twig_first($this->env, $this->getAttribute($context["course"], "teacherIds", array())), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["users"]) ? $context["users"] : null), twig_first($this->env, $this->getAttribute($context["course"], "teacherIds", array())), array(), "array"), null)) : (null));
                // line 80
                echo "        ";
                if ((isset($context["teacher"]) ? $context["teacher"] : null)) {
                    // line 81
                    echo "          <div class=\"teacher\">
            <a href=\"";
                    // line 82
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : null), "id", array()))), "html", null, true);
                    echo "\" target=\"_blank\"><img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : null), "smallAvatar", array()), "course.png"), "html", null, true);
                    echo "\" class=\"teacher-avatar\"></a>
            <a class=\"teacher-nickname ellipsis\" target=\"_blank\"  href=\"";
                    // line 83
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : null), "id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : null), "nickname", array()), "html", null, true);
                    echo "</a>
            <span class=\"teacher-title ellipsis\">";
                    // line 84
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : null), "title", array()), "html", null, true);
                    echo "</span>
          </div>
        ";
                }
                // line 87
                echo "
        <div class=\"course-metas-";
                // line 88
                echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "id", array()), "html", null, true);
                echo "\" style=\"display:none;\">        
          <span class=\"glyphicon glyphicon-ok pull-right\" style=\"z-index:100;color:#02b980;font-size:30px;\"></span>
        </div>

      </div>
    </div>
  </li>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 96
            echo "  ";
        } else {
            // line 97
            echo "  <div class=\"empty\">找不到相关课程！</div>
  ";
        }
        // line 99
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:course-select-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  251 => 99,  247 => 97,  244 => 96,  230 => 88,  227 => 87,  221 => 84,  215 => 83,  209 => 82,  206 => 81,  203 => 80,  201 => 79,  197 => 77,  191 => 75,  188 => 74,  182 => 71,  176 => 70,  173 => 69,  170 => 68,  167 => 67,  165 => 66,  161 => 64,  158 => 63,  154 => 61,  150 => 59,  147 => 58,  144 => 57,  141 => 56,  137 => 54,  135 => 53,  132 => 52,  130 => 51,  124 => 50,  119 => 47,  112 => 45,  109 => 44,  107 => 43,  104 => 42,  100 => 40,  96 => 38,  90 => 36,  88 => 35,  85 => 34,  81 => 32,  77 => 30,  70 => 28,  68 => 27,  65 => 26,  63 => 25,  54 => 21,  50 => 20,  45 => 19,  40 => 18,  38 => 17,  21 => 2,  19 => 1,);
    }
}
/* {% import "TopxiaWebBundle::macro.html.twig" as web_macro %}*/
/* <style>*/
/* .course-wide-list .enabled:hover{*/
/* */
/*     background: #eee;*/
/*     border-color: #ddd;*/
/* }*/
/* */
/* .course-wide-list .enabled{*/
/* */
/*     cursor: default;*/
/*     background: #eee;*/
/* }*/
/* */
/* </style>*/
/* <ul class="course-wide-list">*/
/*   {% if courses %}*/
/*   {% for course in courses %}*/
/*   <li class="course-item clearfix"   data-id="{{course.id}}" >*/
/*     <a class="course-picture-link" href="{{ path('course_show', {id:course.id}) }}" target="_blank">*/
/*       <img class="course-picture" src="{{ filepath(course.middlePicture, 'course.png') }}" alt="{{ course.title }}">*/
/*     </a>*/
/*     <div class="course-body">*/
/*      <div style="float:right;" class="text-muted mrm mls">*/
/*         {% if setting('coin.coin_enabled') and setting('coin.price_type') == 'Coin' %}*/
/*             <span class="course-price" style="display:inline">*/
/*               {% if course.coinPrice > 0 %}*/
/*                  价格： {{ course.coinPrice }}{{setting('coin.coin_name')}}*/
/*               {% else %}*/
/*                 免费*/
/*               {% endif %}*/
/*             </span>*/
/*         {% else %}*/
/*           <span class="course-price">*/
/*             {% if course.price > 0 %}*/
/*                价格： {{ course.price }}元*/
/*             {% else %}*/
/*               免费*/
/*             {% endif %}*/
/*           </span>*/
/*         {% endif %}*/
/* */
/*         {% if setting('course.show_student_num_enabled', '1') == 1 %}*/
/*           <span class="divider"></span>*/
/*           <span class="text-muted mrm mls"><strong>{{ course.studentNum }}</strong>{{setting('default.user_name', '学员')}}</span>*/
/*         {% endif %}*/
/* */
/*         </div>*/
/* */
/*       <h4 class="course-title"><a href="{{ path('course_show', {id:course.id}) }}" target="_blank">{{ course.title }}</a>*/
/*       {% if course.serializeMode=='serialize' %}*/
/*         <span class="label label-success ">更新中</span>*/
/*       {% elseif course.serializeMode=='finished' %}*/
/*         <span class="label label-warning ">已完结</span>*/
/*       {% endif %}*/
/*       {% if course.type == 'live' %}*/
/*           {% set lesson = course['lesson']|default(null) %}*/
/*           {% if lesson and "now"|date("U") >= lesson.startTime and "now"|date("U") <= lesson.endTime %}*/
/*             <span class="label label-warning series-mode-label">正在直播中</span>*/
/*           {% else %}*/
/*             <span class="label label-success series-mode-label">直播</span>*/
/*           {% endif %}*/
/*       {% endif %}*/
/*       </h4>*/
/* */
/*       {% if course.type == 'live' %}*/
/*         {% set lesson = course.lesson|default(null) %}*/
/*         {% if lesson %}*/
/*           <div class="live-course-lesson mbm">*/
/*             <span class="text-success fsm mrm">{{ lesson.startTime|date('n月j日 H:i') }} ~ {{ lesson.endTime|date('H:i') }}</span>*/
/*             <span class="text-muted fsm mrm">第{{ lesson.number }}课时</span>*/
/*           </div>*/
/*         {% endif %}*/
/*       {% else %}*/
/*         <div class="course-about ellipsis">{{ course.subtitle }}</div>*/
/*       {% endif %}*/
/* */
/*       <div class="course-footer clearfix">*/
/*         {% set teacher = users[course.teacherIds|first]|default(null) %}*/
/*         {% if teacher %}*/
/*           <div class="teacher">*/
/*             <a href="{{ path('user_show', {id:teacher.id}) }}" target="_blank"><img src="{{ filepath(teacher.smallAvatar, 'course.png') }}" class="teacher-avatar"></a>*/
/*             <a class="teacher-nickname ellipsis" target="_blank"  href="{{ path('user_show', {id:teacher.id}) }}">{{ teacher.nickname }}</a>*/
/*             <span class="teacher-title ellipsis">{{ teacher.title }}</span>*/
/*           </div>*/
/*         {% endif %}*/
/* */
/*         <div class="course-metas-{{course.id}}" style="display:none;">        */
/*           <span class="glyphicon glyphicon-ok pull-right" style="z-index:100;color:#02b980;font-size:30px;"></span>*/
/*         </div>*/
/* */
/*       </div>*/
/*     </div>*/
/*   </li>*/
/*   {% endfor %}*/
/*   {% else %}*/
/*   <div class="empty">找不到相关课程！</div>*/
/*   {% endif %}*/
/* </ul>*/
/* */
