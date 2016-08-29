<?php

/* ClassroomBundle:ClassroomManage:index.html.twig */
class __TwigTemplate_028d6453104752954f95b4ff122163d5354cf6e4454fb7cdf74541eb84ff7d4d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ClassroomBundle:ClassroomManage:layout.html.twig", "ClassroomBundle:ClassroomManage:index.html.twig", 1);
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
        $context["side_nav"] = "main";
        // line 6
        $context["script_controller"] = "classroombundle/controller/classroom/index";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
        echo "管理 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 8
    public function block_main($context, array $blocks = array())
    {
        // line 9
        echo "
";
        // line 10
        $context["unsetted"] = "";
        // line 11
        echo "
<div class=\"panel panel-default panel-col\">
  <div class=\"panel-body\">
    ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "
    <div class=\"row\">
      <div class=\"col-md-4\">
        <div class=\"well\">
          <h4>设置</h4>
          <table class=\"table\">
            <tr>
              <td>简介</td>
              ";
        // line 22
        if ( !$this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "about", array())) {
            // line 23
            echo "                <td>
                  <a class=\"btn btn-danger btn-xs pull-right\" href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_manage_set_info", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
            echo "\">
                    未设置 <i class=\"glyphicon glyphicon-circle-arrow-right\"></i>
                  </a>
                </td>
                ";
            // line 28
            $context["unsetted"] = ((isset($context["unsetted"]) ? $context["unsetted"] : null) . ",简介");
            // line 29
            echo "              ";
        } else {
            // line 30
            echo "                <td>
                  <i class=\"glyphicon glyphicon-ok-sign pull-right text-success\"></i>
                </td>
              ";
        }
        // line 34
        echo "            </tr>
            <tr>
              <td>图片</td>
              ";
        // line 37
        if ( !$this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "smallPicture", array())) {
            // line 38
            echo "                <td>
                  <a class=\"btn btn-danger btn-xs pull-right\" href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_manage_set_picture", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
            echo "\">
                    未设置 <i class=\"glyphicon glyphicon-circle-arrow-right\"></i>
                  </a>
                </td>
                ";
            // line 43
            $context["unsetted"] = ((isset($context["unsetted"]) ? $context["unsetted"] : null) . ",图片");
            // line 44
            echo "              ";
        } else {
            // line 45
            echo "                <td>
                  <i class=\"glyphicon glyphicon-ok-sign pull-right text-success\"></i>
                </td>
              ";
        }
        // line 49
        echo "            </tr>
            <tr>
              <td>价格</td>
              <td>
                <a class=\"btn btn-info btn-xs pull-right\" href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_manage_set_price", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
        echo "\">
                  ";
        // line 54
        if (($this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_enabled") && ($this->env->getExtension('topxia_web_twig')->getSetting("coin.price_type") == "Coin"))) {
            // line 55
            echo "                    ";
            echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "price", array()) * $this->env->getExtension('topxia_web_twig')->getSetting("coin.cash_rate")), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_name"), "html", null, true);
            echo "
                    ";
            // line 56
            if ((($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "price", array()) * $this->env->getExtension('topxia_web_twig')->getSetting("coin.cash_rate")) == 0)) {
                // line 57
                echo "                      ";
                $context["unsetted"] = ((isset($context["unsetted"]) ? $context["unsetted"] : null) . ",价格");
                // line 58
                echo "                    ";
            }
            // line 59
            echo "                  ";
        } else {
            // line 60
            echo "                    ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "price", array()), "html", null, true);
            echo "元
                    ";
            // line 61
            if (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "price", array()) == 0)) {
                // line 62
                echo "                      ";
                $context["unsetted"] = ((isset($context["unsetted"]) ? $context["unsetted"] : null) . ",价格");
                // line 63
                echo "                    ";
            }
            // line 64
            echo "                  ";
        }
        // line 65
        echo "                  <i class=\"glyphicon glyphicon-circle-arrow-right\"></i>
                </a>
              </td>
            </tr>
          </table>
        </div>
      </div>
      <div class=\"col-md-4\">
        <div class=\"well\">
          <h4>课程</h4>
          <table class=\"table\">
            <tr>
              <td>课程数</td>
              <td>
                <a class=\"btn btn-";
        // line 79
        if (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "courseNum", array()) > 0)) {
            echo "info";
        } else {
            echo "danger";
        }
        echo " btn-xs pull-right\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_manage_courses", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
        echo "\">
                  ";
        // line 80
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "courseNum", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "courseNum", array()), 0)) : (0)), "html", null, true);
        echo " <i class=\"glyphicon glyphicon-circle-arrow-right\"></i>
                </a>
              </td>
              ";
        // line 83
        if (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "courseNum", array()) == 0)) {
            // line 84
            echo "                ";
            $context["unsetted"] = ((isset($context["unsetted"]) ? $context["unsetted"] : null) . ",课程");
            // line 85
            echo "              ";
        }
        // line 86
        echo "            </tr>
            <tr>
              <td>课时数</td>
              <td><span class=\"label label-default pull-right\">";
        // line 89
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "lessonNum", array()), "html", null, true);
        echo "</span></td>
            </tr>
          </table>
        </div>
      </div>
      <div class=\"col-md-4\">
        <div class=\"well\">
          <h4>学员</h4>
          <table class=\"table\">
            <tr>
              <td>学员数</td>
              <td>
                <a class=\"btn ";
        // line 101
        if (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "studentNum", array()) > 0)) {
            echo "btn-info";
        } else {
            echo "btn-danger";
        }
        echo " btn-xs pull-right\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_manage_students", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
        echo "\">
                  ";
        // line 102
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "studentNum", array()), "html", null, true);
        echo " <i class=\"glyphicon glyphicon-circle-arrow-right\"></i>
                </a>
              </td>
            </tr>
            <tr>
              <td>旁听生数</td>
              <td>
                <a class=\"btn ";
        // line 109
        if (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "auditorNum", array()) > 0)) {
            echo "btn-info";
        } else {
            echo "btn-danger";
        }
        echo " btn-xs pull-right\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_manage_aduitor", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
        echo "\">
                  ";
        // line 110
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "auditorNum", array()), "html", null, true);
        echo " <i class=\"glyphicon glyphicon-circle-arrow-right\"></i>
                </a>
              </td>
            </tr>
          </table>
        </div>
      </div>
    </div>
    ";
        // line 118
        if (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "status", array()) == "published")) {
            // line 119
            echo "      <hr>
      <div class=\"row\">
        <div class=\"col-md-6\">
          <h4>";
            // line 122
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
            echo "学习情况</h4>
          <table class=\"table\">
            <thead>
              <th></th>
              <th>昨日</th>
              <th>今日</th>
            </thead>
            <tr>
              <td>全部学员数</td>
              <td>";
            // line 131
            echo twig_escape_filter($this->env, (isset($context["yestodayAllCount"]) ? $context["yestodayAllCount"] : null), "html", null, true);
            echo "</td>
              <td>";
            // line 132
            echo twig_escape_filter($this->env, (isset($context["allCount"]) ? $context["allCount"] : null), "html", null, true);
            echo "</td>
            </tr>
            <tr>
              <td>正式学员数</td>
              <td>";
            // line 136
            echo twig_escape_filter($this->env, (isset($context["yestodayStudentCount"]) ? $context["yestodayStudentCount"] : null), "html", null, true);
            echo "</td>
              <td>";
            // line 137
            echo twig_escape_filter($this->env, (isset($context["studentCount"]) ? $context["studentCount"] : null), "html", null, true);
            echo "</td>
            </tr>
            <tr>
              <td>课时完成学习数</td>
              <td>";
            // line 141
            echo twig_escape_filter($this->env, (isset($context["yesterdayFinishedLessonNum"]) ? $context["yesterdayFinishedLessonNum"] : null), "html", null, true);
            echo "</td>
              <td>";
            // line 142
            echo twig_escape_filter($this->env, (isset($context["todayFinishedLessonNum"]) ? $context["todayFinishedLessonNum"] : null), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <td>新增话题数</td>
                <td>";
            // line 146
            echo twig_escape_filter($this->env, (isset($context["yesterdayThreadCount"]) ? $context["yesterdayThreadCount"] : null), "html", null, true);
            echo "</td>
                <td>";
            // line 147
            echo twig_escape_filter($this->env, (isset($context["todayThreadCount"]) ? $context["todayThreadCount"] : null), "html", null, true);
            echo "</td>
            </tr>
          </table>
        </div>

        <div class=\"col-md-6 reviews\">
          <h4>最新评价</h4>
          <br>
          ";
            // line 155
            if ((isset($context["reviews"]) ? $context["reviews"] : null)) {
                // line 156
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["reviews"]) ? $context["reviews"] : null));
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
                foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
                    // line 157
                    echo "              ";
                    if (($this->getAttribute($context["loop"], "index", array()) <= 4)) {
                        // line 158
                        echo "                <div class=\"media\">
                  <div class=\"pull-left\">
                    <span class=\"class-name\">";
                        // line 160
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["reviewUsers"]) ? $context["reviewUsers"] : null), $this->getAttribute($context["review"], "userId", array()), array(), "array"), "nickname", array()), "html", null, true);
                        echo "</span>
                  </div>
                  <div class=\"media-body\">
                    <div class=\"stars-";
                        // line 163
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["review"], "rating", array())), "html", null, true);
                        echo "\"></div>
                    &nbsp;&nbsp;&nbsp;&nbsp;<time>";
                        // line 164
                        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->smarttimeFilter($this->getAttribute($context["review"], "createdTime", array())), "html", null, true);
                        echo "</time>                                                    
                    <button class=\"btn btn-success btn-xs\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
                        // line 165
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("message_create", array("toId" => $this->getAttribute($this->getAttribute((isset($context["reviewUsers"]) ? $context["reviewUsers"] : null), $this->getAttribute($context["review"], "userId", array()), array(), "array"), "id", array()))), "html", null, true);
                        echo "\" style=\"float:right;\">私信</button>
                  </div>
                  <p>";
                        // line 167
                        echo $this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute($context["review"], "content", array()), 40);
                        echo "</p>
                </div>
              ";
                    }
                    // line 170
                    echo "            ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 171
                echo "          ";
            } else {
                // line 172
                echo "            <div class=\"empty\">该";
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
                echo "尚无评价</div>
          ";
            }
            // line 174
            echo "        </div>
      </div>
      <hr>
    ";
        }
        // line 178
        echo "  </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:ClassroomManage:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  412 => 178,  406 => 174,  400 => 172,  397 => 171,  383 => 170,  377 => 167,  372 => 165,  368 => 164,  364 => 163,  358 => 160,  354 => 158,  351 => 157,  333 => 156,  331 => 155,  320 => 147,  316 => 146,  309 => 142,  305 => 141,  298 => 137,  294 => 136,  287 => 132,  283 => 131,  271 => 122,  266 => 119,  264 => 118,  253 => 110,  243 => 109,  233 => 102,  223 => 101,  208 => 89,  203 => 86,  200 => 85,  197 => 84,  195 => 83,  189 => 80,  179 => 79,  163 => 65,  160 => 64,  157 => 63,  154 => 62,  152 => 61,  147 => 60,  144 => 59,  141 => 58,  138 => 57,  136 => 56,  129 => 55,  127 => 54,  123 => 53,  117 => 49,  111 => 45,  108 => 44,  106 => 43,  99 => 39,  96 => 38,  94 => 37,  89 => 34,  83 => 30,  80 => 29,  78 => 28,  71 => 24,  68 => 23,  66 => 22,  55 => 14,  50 => 11,  48 => 10,  45 => 9,  42 => 8,  34 => 3,  30 => 1,  28 => 6,  26 => 5,  11 => 1,);
    }
}
/* {% extends 'ClassroomBundle:ClassroomManage:layout.html.twig' %}*/
/* */
/* {% block title %}{{ setting('classroom.name')|default("班级") }}管理 - {{ parent() }}{% endblock %}*/
/* */
/* {% set side_nav = 'main' %}*/
/* {% set script_controller = 'classroombundle/controller/classroom/index' %}*/
/* */
/* {% block main %}*/
/* */
/* {% set unsetted = "" %}*/
/* */
/* <div class="panel panel-default panel-col">*/
/*   <div class="panel-body">*/
/*     {{ web_macro.flash_messages() }}*/
/*     <div class="row">*/
/*       <div class="col-md-4">*/
/*         <div class="well">*/
/*           <h4>设置</h4>*/
/*           <table class="table">*/
/*             <tr>*/
/*               <td>简介</td>*/
/*               {% if not classroom.about %}*/
/*                 <td>*/
/*                   <a class="btn btn-danger btn-xs pull-right" href="{{path('classroom_manage_set_info',{id:classroom.id})}}">*/
/*                     未设置 <i class="glyphicon glyphicon-circle-arrow-right"></i>*/
/*                   </a>*/
/*                 </td>*/
/*                 {% set unsetted = unsetted ~ ",简介" %}*/
/*               {% else %}*/
/*                 <td>*/
/*                   <i class="glyphicon glyphicon-ok-sign pull-right text-success"></i>*/
/*                 </td>*/
/*               {% endif %}*/
/*             </tr>*/
/*             <tr>*/
/*               <td>图片</td>*/
/*               {% if not classroom.smallPicture %}*/
/*                 <td>*/
/*                   <a class="btn btn-danger btn-xs pull-right" href="{{path('classroom_manage_set_picture',{id:classroom.id})}}">*/
/*                     未设置 <i class="glyphicon glyphicon-circle-arrow-right"></i>*/
/*                   </a>*/
/*                 </td>*/
/*                 {% set unsetted = unsetted ~ ",图片" %}*/
/*               {% else %}*/
/*                 <td>*/
/*                   <i class="glyphicon glyphicon-ok-sign pull-right text-success"></i>*/
/*                 </td>*/
/*               {% endif %}*/
/*             </tr>*/
/*             <tr>*/
/*               <td>价格</td>*/
/*               <td>*/
/*                 <a class="btn btn-info btn-xs pull-right" href="{{path('classroom_manage_set_price',{id:classroom.id})}}">*/
/*                   {% if setting('coin.coin_enabled') and setting('coin.price_type') == 'Coin' %}*/
/*                     {{classroom.price * setting('coin.cash_rate') }} {{setting('coin.coin_name')}}*/
/*                     {% if classroom.price * setting('coin.cash_rate')  == 0 %}*/
/*                       {% set unsetted = unsetted ~ ",价格" %}*/
/*                     {% endif %}*/
/*                   {% else %}*/
/*                     {{ classroom.price }}元*/
/*                     {% if classroom.price == 0 %}*/
/*                       {% set unsetted = unsetted ~ ",价格" %}*/
/*                     {% endif %}*/
/*                   {% endif %}*/
/*                   <i class="glyphicon glyphicon-circle-arrow-right"></i>*/
/*                 </a>*/
/*               </td>*/
/*             </tr>*/
/*           </table>*/
/*         </div>*/
/*       </div>*/
/*       <div class="col-md-4">*/
/*         <div class="well">*/
/*           <h4>课程</h4>*/
/*           <table class="table">*/
/*             <tr>*/
/*               <td>课程数</td>*/
/*               <td>*/
/*                 <a class="btn btn-{% if classroom.courseNum > 0 %}info{% else %}danger{% endif %} btn-xs pull-right" href="{{ path('classroom_manage_courses', {id:classroom.id}) }}">*/
/*                   {{classroom.courseNum|default(0)}} <i class="glyphicon glyphicon-circle-arrow-right"></i>*/
/*                 </a>*/
/*               </td>*/
/*               {% if classroom.courseNum == 0 %}*/
/*                 {% set unsetted = unsetted ~ ",课程" %}*/
/*               {% endif %}*/
/*             </tr>*/
/*             <tr>*/
/*               <td>课时数</td>*/
/*               <td><span class="label label-default pull-right">{{classroom.lessonNum}}</span></td>*/
/*             </tr>*/
/*           </table>*/
/*         </div>*/
/*       </div>*/
/*       <div class="col-md-4">*/
/*         <div class="well">*/
/*           <h4>学员</h4>*/
/*           <table class="table">*/
/*             <tr>*/
/*               <td>学员数</td>*/
/*               <td>*/
/*                 <a class="btn {% if (classroom.studentNum) > 0 %}btn-info{% else %}btn-danger{% endif %} btn-xs pull-right" href="{{ path('classroom_manage_students', {id:classroom.id}) }}">*/
/*                   {{classroom.studentNum}} <i class="glyphicon glyphicon-circle-arrow-right"></i>*/
/*                 </a>*/
/*               </td>*/
/*             </tr>*/
/*             <tr>*/
/*               <td>旁听生数</td>*/
/*               <td>*/
/*                 <a class="btn {% if (classroom.auditorNum) > 0 %}btn-info{% else %}btn-danger{% endif %} btn-xs pull-right" href="{{ path('classroom_manage_aduitor', {id:classroom.id}) }}">*/
/*                   {{classroom.auditorNum}} <i class="glyphicon glyphicon-circle-arrow-right"></i>*/
/*                 </a>*/
/*               </td>*/
/*             </tr>*/
/*           </table>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*     {% if classroom.status == "published" %}*/
/*       <hr>*/
/*       <div class="row">*/
/*         <div class="col-md-6">*/
/*           <h4>{{ setting('classroom.name')|default("班级") }}学习情况</h4>*/
/*           <table class="table">*/
/*             <thead>*/
/*               <th></th>*/
/*               <th>昨日</th>*/
/*               <th>今日</th>*/
/*             </thead>*/
/*             <tr>*/
/*               <td>全部学员数</td>*/
/*               <td>{{yestodayAllCount}}</td>*/
/*               <td>{{allCount}}</td>*/
/*             </tr>*/
/*             <tr>*/
/*               <td>正式学员数</td>*/
/*               <td>{{yestodayStudentCount}}</td>*/
/*               <td>{{studentCount}}</td>*/
/*             </tr>*/
/*             <tr>*/
/*               <td>课时完成学习数</td>*/
/*               <td>{{yesterdayFinishedLessonNum}}</td>*/
/*               <td>{{todayFinishedLessonNum}}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <td>新增话题数</td>*/
/*                 <td>{{yesterdayThreadCount}}</td>*/
/*                 <td>{{todayThreadCount}}</td>*/
/*             </tr>*/
/*           </table>*/
/*         </div>*/
/* */
/*         <div class="col-md-6 reviews">*/
/*           <h4>最新评价</h4>*/
/*           <br>*/
/*           {% if reviews%}*/
/*             {% for review in reviews %}*/
/*               {% if loop.index <= 4 %}*/
/*                 <div class="media">*/
/*                   <div class="pull-left">*/
/*                     <span class="class-name">{{reviewUsers[review.userId].nickname}}</span>*/
/*                   </div>*/
/*                   <div class="media-body">*/
/*                     <div class="stars-{{ (review.rating)|number_format }}"></div>*/
/*                     &nbsp;&nbsp;&nbsp;&nbsp;<time>{{review.createdTime|smart_time}}</time>                                                    */
/*                     <button class="btn btn-success btn-xs" data-toggle="modal" data-target="#modal" data-url="{{path('message_create', {toId:reviewUsers[review.userId].id})}}" style="float:right;">私信</button>*/
/*                   </div>*/
/*                   <p>{{ review.content|plain_text(40) }}</p>*/
/*                 </div>*/
/*               {% endif %}*/
/*             {% endfor %}*/
/*           {% else %}*/
/*             <div class="empty">该{{ setting('classroom.name')|default("班级") }}尚无评价</div>*/
/*           {% endif %}*/
/*         </div>*/
/*       </div>*/
/*       <hr>*/
/*     {% endif %}*/
/*   </div>*/
/* </div>*/
/* */
/* {% endblock %}*/
