<?php

/* ClassroomBundle:ClassroomManage:courses.html.twig */
class __TwigTemplate_5e2f4c9e7441089f01299d71752e2698cfef1461eec80c525d1ed56f8315f42f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ClassroomBundle:ClassroomManage:layout.html.twig", "ClassroomBundle:ClassroomManage:courses.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ClassroomBundle:ClassroomManage:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["script_controller"] = "classroombundle/controller/classroom/course";
        // line 6
        $context["side_nav"] = "courses";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "课程管理 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 8
    public function block_main($context, array $blocks = array())
    {
        // line 9
        echo "
<style>

.sort{
    padding-top: 50px;
    padding-right: 20px;
    padding-left: 20px;
}

.price{
  color: #e57259;
  font-size: 16px;
}

</style>

";
        // line 25
        $context["url"] = $this->env->getExtension('routing')->getPath("classroom_courses_select", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array())));
        echo "       
<div class=\"panel panel-default panel-col\">
  <div class=\"panel-heading\">课程管理
    <button class=\"btn btn-success btn-sm panel-bar\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_courses_pick", array("classroomId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
        echo "\">添加课程</button></div>
  <div class=\"panel-body\">

        <form id=\"courses-form\" class=\"form-horizontal\" method=\"post\">
          ";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "

          <div class=\"form-group\" id=\"courses-form-group\">
            <div class=\"col-md-12 controls\">
              <ul class=\"course-list-group sortable-list course-wide-list courses-selected\" id=\"course-list-group\" data-role=\"list\" >

                ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["courses"]) ? $context["courses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
            // line 39
            echo "
                <li class=\"course-item item-";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "id", array()), "html", null, true);
            echo " clearfix\" data-role=\"item\" >
                <input type=\"hidden\" name=\"courseIds[]\" value=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "id", array()), "html", null, true);
            echo "\" />
                <span class=\"glyphicon glyphicon-resize-vertical sort-handle sort\"></span>    <a class=\"course-picture-link\" href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($context["course"], "id", array()))), "html", null, true);
            echo "\" target=\"_blank\">
                <img class=\"course-picture\" src=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute($context["course"], "middlePicture", array()), "course.png"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "title", array()), "html", null, true);
            echo "\">
                    </a>
                        <button class=\"close delete-btn pull-right mrl mts mll\" data-role=\"item-delete\" type=\"button\" title=\"删除\" style=\"font-size:35px;\" data-id=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "id", array()), "html", null, true);
            echo "\">× </button>
                    <div class=\"course-body\">
                     <div style=\"float:right;\" class=\"text-muted mrm mls\">
                        ";
            // line 48
            if (($this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_enabled") && ($this->env->getExtension('topxia_web_twig')->getSetting("coin.price_type") == "Coin"))) {
                // line 49
                echo "                            <span class=\"course-price course-price-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "id", array()), "html", null, true);
                echo "\" style=\"display:inline\" data-price=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "coinPrice", array()), "html", null, true);
                echo "\">
                              ";
                // line 50
                if (($this->getAttribute($context["course"], "coinPrice", array()) > 0)) {
                    // line 51
                    echo "                                ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "coinPrice", array()), "html", null, true);
                    echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_name"), "html", null, true);
                    echo "
                              ";
                } else {
                    // line 53
                    echo "                                免费
                              ";
                }
                // line 55
                echo "                            </span>

                        ";
            } else {
                // line 58
                echo "                          <span class=\"course-price course-price-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "id", array()), "html", null, true);
                echo "\" data-price=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "price", array()), "html", null, true);
                echo "\">
                            ";
                // line 59
                if (($this->getAttribute($context["course"], "price", array()) > 0)) {
                    // line 60
                    echo "                              ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "price", array()), "html", null, true);
                    echo " 元
                            ";
                } else {
                    // line 62
                    echo "                              免费
                            ";
                }
                // line 64
                echo "                          </span>
                        ";
            }
            // line 66
            echo "                      </div>

                      <h4 class=\"course-title\"><a href=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($context["course"], "id", array()))), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "title", array()), "html", null, true);
            echo "</a>
                      ";
            // line 69
            if (($this->getAttribute($context["course"], "serializeMode", array()) == "serialize")) {
                // line 70
                echo "                        <span class=\"label label-success \">更新中</span>
                      ";
            } elseif (($this->getAttribute(            // line 71
$context["course"], "serializeMode", array()) == "finished")) {
                // line 72
                echo "                        <span class=\"label label-warning \">已完结</span>
                      ";
            }
            // line 74
            echo "                      ";
            if (($this->getAttribute($context["course"], "type", array()) == "live")) {
                // line 75
                echo "                          ";
                $context["lesson"] = (($this->getAttribute($context["course"], "lesson", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($context["course"], "lesson", array(), "array"), null)) : (null));
                // line 76
                echo "                          ";
                if ((((isset($context["lesson"]) ? $context["lesson"] : null) && (twig_date_format_filter($this->env, "now", "U") >= $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "startTime", array()))) && (twig_date_format_filter($this->env, "now", "U") <= $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "endTime", array())))) {
                    // line 77
                    echo "                            <span class=\"label label-warning series-mode-label\">正在直播中</span>
                          ";
                } else {
                    // line 79
                    echo "                            <span class=\"label label-success series-mode-label\">直播</span>
                          ";
                }
                // line 81
                echo "                      ";
            }
            // line 82
            echo "                      </h4>

                      ";
            // line 84
            if (($this->getAttribute($context["course"], "type", array()) == "live")) {
                // line 85
                echo "                        ";
                $context["lesson"] = (($this->getAttribute($context["course"], "lesson", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["course"], "lesson", array()), null)) : (null));
                // line 86
                echo "                        ";
                if ((isset($context["lesson"]) ? $context["lesson"] : null)) {
                    // line 87
                    echo "                          <div class=\"live-course-lesson mbm\">
                            <span class=\"text-success fsm mrm\">";
                    // line 88
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "startTime", array()), "n月j日 H:i"), "html", null, true);
                    echo " ~ ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "endTime", array()), "H:i"), "html", null, true);
                    echo "</span>
                            <span class=\"text-muted fsm mrm\">第";
                    // line 89
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "number", array()), "html", null, true);
                    echo "课时</span>
                          </div>
                        ";
                }
                // line 92
                echo "                      ";
            } else {
                // line 93
                echo "                        <div class=\"course-about ellipsis\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "subtitle", array()), "html", null, true);
                echo "</div>
                      ";
            }
            // line 95
            echo "
                      <div class=\"course-footer clearfix\">
                        ";
            // line 97
            $context["teacher"] = (($this->getAttribute((isset($context["users"]) ? $context["users"] : null), twig_first($this->env, $this->getAttribute($context["course"], "teacherIds", array())), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["users"]) ? $context["users"] : null), twig_first($this->env, $this->getAttribute($context["course"], "teacherIds", array())), array(), "array"), null)) : (null));
            // line 98
            echo "                        ";
            if ((isset($context["teacher"]) ? $context["teacher"] : null)) {
                // line 99
                echo "                          <div class=\"teacher\">
                            <a href=\"";
                // line 100
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : null), "id", array()))), "html", null, true);
                echo "\" target=\"_blank\"><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : null), "smallAvatar", array()), "avatar.png"), "html", null, true);
                echo "\" class=\"teacher-avatar\"></a>
                            <a class=\"teacher-nickname ellipsis\" target=\"_blank\"  href=\"";
                // line 101
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : null), "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : null), "nickname", array()), "html", null, true);
                echo "</a>
                            <span class=\"teacher-title ellipsis\">";
                // line 102
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : null), "title", array()), "html", null, true);
                echo "</span>
                          </div>
                        ";
            }
            // line 105
            echo "
                        <div class=\"course-metas\">  

                          ";
            // line 108
            if (($this->env->getExtension('topxia_web_twig')->getSetting("course.show_student_num_enabled", "1") == 1)) {
                // line 109
                echo "                          <span class=\"text-muted text-sm\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "studentNum", array()), "html", null, true);
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("default.user_name", "学员"), "html", null, true);
                echo "</span>
                          <span class=\"divider\"></span>
                          ";
            }
            // line 111
            echo "  

                            <span class=\"text-muted text-sm\">
                                ";
            // line 114
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "lessonNum", array()), "html", null, true);
            echo "个课时
                            </span>
                            <span class=\"divider\"></span>
                            <span class=\"text-muted text-sm\">
                                有效期:
                                ";
            // line 119
            if ($this->getAttribute($context["course"], "expiryDay", array())) {
                // line 120
                echo "                                    ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "expiryDay", array()), "html", null, true);
                echo "天
                                ";
            } else {
                // line 122
                echo "                                    永久
                                ";
            }
            // line 124
            echo "                            </span>
                        </div>

                      </div>

                    </div>
                </li>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 133
        echo "
              </ul>
            </div>  
          </div>

          ";
        // line 138
        if ((isset($context["courses"]) ? $context["courses"] : null)) {
            // line 139
            echo "          <div class=\"alert alert-warning pull-right\">若";
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
            echo "课程被移除，则该课程内所有学习数据将被清空。</div>
          <div class=\"form-group\">
            <div class=\"col-md-offset-9 col-md-3 controls\">
              <div class=\"mbl pull-right\">共计: &nbsp; &nbsp;
                  ";
            // line 143
            if (($this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_enabled") && ($this->env->getExtension('topxia_web_twig')->getSetting("coin.price_type") == "Coin"))) {
                // line 144
                echo "                    <span class=\"price\" style=\"display:inline\">

                        <span  id=\"price\">";
                // line 146
                echo twig_escape_filter($this->env, (isset($context["coinPrice"]) ? $context["coinPrice"] : null), "html", null, true);
                echo "</span>";
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_name"), "html", null, true);
                echo "

                    </span>

                  ";
            } else {
                // line 151
                echo "                    <span class=\"price\">

                        <span id=\"price\">";
                // line 153
                echo twig_escape_filter($this->env, (isset($context["price"]) ? $context["price"] : null), "html", null, true);
                echo "</span>元
                      
                    </span>
                  ";
            }
            // line 157
            echo "  
              </div>

              <button type=\"submit\" class=\"btn btn-fat btn-primary pull-right\">保存修改</button>

            </div>  
          </div>
          ";
        } else {
            // line 165
            echo "          <div class=\"empty\">赶紧添加课程吧！</div>
          ";
        }
        // line 167
        echo "
          <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">

        </form>

  </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:ClassroomManage:courses.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  388 => 168,  385 => 167,  381 => 165,  371 => 157,  364 => 153,  360 => 151,  350 => 146,  346 => 144,  344 => 143,  336 => 139,  334 => 138,  327 => 133,  313 => 124,  309 => 122,  303 => 120,  301 => 119,  293 => 114,  288 => 111,  280 => 109,  278 => 108,  273 => 105,  267 => 102,  261 => 101,  255 => 100,  252 => 99,  249 => 98,  247 => 97,  243 => 95,  237 => 93,  234 => 92,  228 => 89,  222 => 88,  219 => 87,  216 => 86,  213 => 85,  211 => 84,  207 => 82,  204 => 81,  200 => 79,  196 => 77,  193 => 76,  190 => 75,  187 => 74,  183 => 72,  181 => 71,  178 => 70,  176 => 69,  170 => 68,  166 => 66,  162 => 64,  158 => 62,  152 => 60,  150 => 59,  143 => 58,  138 => 55,  134 => 53,  127 => 51,  125 => 50,  118 => 49,  116 => 48,  110 => 45,  103 => 43,  99 => 42,  95 => 41,  91 => 40,  88 => 39,  84 => 38,  75 => 32,  68 => 28,  62 => 25,  44 => 9,  41 => 8,  34 => 3,  30 => 1,  28 => 6,  26 => 5,  11 => 1,);
    }
}
/* {% extends 'ClassroomBundle:ClassroomManage:layout.html.twig' %}*/
/* */
/* {% block title %}课程管理 - {{ parent() }}{% endblock %}*/
/* */
/* {% set script_controller = 'classroombundle/controller/classroom/course' %}*/
/* {% set side_nav = 'courses' %}*/
/* */
/* {% block main %}*/
/* */
/* <style>*/
/* */
/* .sort{*/
/*     padding-top: 50px;*/
/*     padding-right: 20px;*/
/*     padding-left: 20px;*/
/* }*/
/* */
/* .price{*/
/*   color: #e57259;*/
/*   font-size: 16px;*/
/* }*/
/* */
/* </style>*/
/* */
/* {% set url = path('classroom_courses_select',{id:classroom.id}) %}       */
/* <div class="panel panel-default panel-col">*/
/*   <div class="panel-heading">课程管理*/
/*     <button class="btn btn-success btn-sm panel-bar" data-toggle="modal" data-target="#modal" data-url="{{path('classroom_courses_pick',{classroomId:classroom.id})}}">添加课程</button></div>*/
/*   <div class="panel-body">*/
/* */
/*         <form id="courses-form" class="form-horizontal" method="post">*/
/*           {{ web_macro.flash_messages() }}*/
/* */
/*           <div class="form-group" id="courses-form-group">*/
/*             <div class="col-md-12 controls">*/
/*               <ul class="course-list-group sortable-list course-wide-list courses-selected" id="course-list-group" data-role="list" >*/
/* */
/*                 {% for course in courses %}*/
/* */
/*                 <li class="course-item item-{{course.id}} clearfix" data-role="item" >*/
/*                 <input type="hidden" name="courseIds[]" value="{{course.id}}" />*/
/*                 <span class="glyphicon glyphicon-resize-vertical sort-handle sort"></span>    <a class="course-picture-link" href="{{ path('course_show', {id:course.id}) }}" target="_blank">*/
/*                 <img class="course-picture" src="{{ filepath(course.middlePicture, 'course.png') }}" alt="{{ course.title }}">*/
/*                     </a>*/
/*                         <button class="close delete-btn pull-right mrl mts mll" data-role="item-delete" type="button" title="删除" style="font-size:35px;" data-id="{{course.id}}">× </button>*/
/*                     <div class="course-body">*/
/*                      <div style="float:right;" class="text-muted mrm mls">*/
/*                         {% if setting('coin.coin_enabled') and setting('coin.price_type') == 'Coin' %}*/
/*                             <span class="course-price course-price-{{course.id}}" style="display:inline" data-price="{{ course.coinPrice }}">*/
/*                               {% if course.coinPrice > 0 %}*/
/*                                 {{ course.coinPrice }}{{setting('coin.coin_name')}}*/
/*                               {% else %}*/
/*                                 免费*/
/*                               {% endif %}*/
/*                             </span>*/
/* */
/*                         {% else %}*/
/*                           <span class="course-price course-price-{{course.id}}" data-price="{{ course.price }}">*/
/*                             {% if course.price > 0 %}*/
/*                               {{ course.price }} 元*/
/*                             {% else %}*/
/*                               免费*/
/*                             {% endif %}*/
/*                           </span>*/
/*                         {% endif %}*/
/*                       </div>*/
/* */
/*                       <h4 class="course-title"><a href="{{ path('course_show', {id:course.id}) }}" target="_blank">{{ course.title }}</a>*/
/*                       {% if course.serializeMode=='serialize' %}*/
/*                         <span class="label label-success ">更新中</span>*/
/*                       {% elseif course.serializeMode=='finished' %}*/
/*                         <span class="label label-warning ">已完结</span>*/
/*                       {% endif %}*/
/*                       {% if course.type == 'live' %}*/
/*                           {% set lesson = course['lesson']|default(null) %}*/
/*                           {% if lesson and "now"|date("U") >= lesson.startTime and "now"|date("U") <= lesson.endTime %}*/
/*                             <span class="label label-warning series-mode-label">正在直播中</span>*/
/*                           {% else %}*/
/*                             <span class="label label-success series-mode-label">直播</span>*/
/*                           {% endif %}*/
/*                       {% endif %}*/
/*                       </h4>*/
/* */
/*                       {% if course.type == 'live' %}*/
/*                         {% set lesson = course.lesson|default(null) %}*/
/*                         {% if lesson %}*/
/*                           <div class="live-course-lesson mbm">*/
/*                             <span class="text-success fsm mrm">{{ lesson.startTime|date('n月j日 H:i') }} ~ {{ lesson.endTime|date('H:i') }}</span>*/
/*                             <span class="text-muted fsm mrm">第{{ lesson.number }}课时</span>*/
/*                           </div>*/
/*                         {% endif %}*/
/*                       {% else %}*/
/*                         <div class="course-about ellipsis">{{ course.subtitle }}</div>*/
/*                       {% endif %}*/
/* */
/*                       <div class="course-footer clearfix">*/
/*                         {% set teacher = users[course.teacherIds|first]|default(null) %}*/
/*                         {% if teacher %}*/
/*                           <div class="teacher">*/
/*                             <a href="{{ path('user_show', {id:teacher.id}) }}" target="_blank"><img src="{{ filepath(teacher.smallAvatar, 'avatar.png') }}" class="teacher-avatar"></a>*/
/*                             <a class="teacher-nickname ellipsis" target="_blank"  href="{{ path('user_show', {id:teacher.id}) }}">{{ teacher.nickname }}</a>*/
/*                             <span class="teacher-title ellipsis">{{ teacher.title }}</span>*/
/*                           </div>*/
/*                         {% endif %}*/
/* */
/*                         <div class="course-metas">  */
/* */
/*                           {% if setting('course.show_student_num_enabled', '1') == 1  %}*/
/*                           <span class="text-muted text-sm">{{ course.studentNum }}{{setting('default.user_name', '学员')}}</span>*/
/*                           <span class="divider"></span>*/
/*                           {% endif %}  */
/* */
/*                             <span class="text-muted text-sm">*/
/*                                 {{course.lessonNum}}个课时*/
/*                             </span>*/
/*                             <span class="divider"></span>*/
/*                             <span class="text-muted text-sm">*/
/*                                 有效期:*/
/*                                 {% if course.expiryDay %}*/
/*                                     {{course.expiryDay}}天*/
/*                                 {% else %}*/
/*                                     永久*/
/*                                 {% endif %}*/
/*                             </span>*/
/*                         </div>*/
/* */
/*                       </div>*/
/* */
/*                     </div>*/
/*                 </li>*/
/* */
/*                 {% endfor %}*/
/* */
/*               </ul>*/
/*             </div>  */
/*           </div>*/
/* */
/*           {% if courses %}*/
/*           <div class="alert alert-warning pull-right">若{{setting("classroom.name")|default("班级")}}课程被移除，则该课程内所有学习数据将被清空。</div>*/
/*           <div class="form-group">*/
/*             <div class="col-md-offset-9 col-md-3 controls">*/
/*               <div class="mbl pull-right">共计: &nbsp; &nbsp;*/
/*                   {% if setting('coin.coin_enabled') and setting('coin.price_type') == 'Coin' %}*/
/*                     <span class="price" style="display:inline">*/
/* */
/*                         <span  id="price">{{ coinPrice }}</span>{{setting('coin.coin_name')}}*/
/* */
/*                     </span>*/
/* */
/*                   {% else %}*/
/*                     <span class="price">*/
/* */
/*                         <span id="price">{{ price }}</span>元*/
/*                       */
/*                     </span>*/
/*                   {% endif %}*/
/*   */
/*               </div>*/
/* */
/*               <button type="submit" class="btn btn-fat btn-primary pull-right">保存修改</button>*/
/* */
/*             </div>  */
/*           </div>*/
/*           {% else %}*/
/*           <div class="empty">赶紧添加课程吧！</div>*/
/*           {% endif %}*/
/* */
/*           <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/* */
/*         </form>*/
/* */
/*   </div>*/
/* </div>*/
/* */
/* {% endblock %}*/
