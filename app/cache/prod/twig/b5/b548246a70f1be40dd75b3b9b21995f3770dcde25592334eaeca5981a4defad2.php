<?php

/* ClassroomBundle:Classroom:course-list.html.twig */
class __TwigTemplate_8b0099119fa8921fe54583ea193b07182da65f5eb2a276e89b5bf44786da8fd2 extends Twig_Template
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
        echo "<div class=\"panel panel-default\">
  <div class=\"panel-body\">
    ";
        // line 3
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ClassroomBundle:Classroom:dashboard", array("classroom" => (isset($context["classroom"]) ? $context["classroom"] : null), "nav" => (isset($context["nav"]) ? $context["nav"] : null), "member" => (isset($context["member"]) ? $context["member"] : null))));
        echo "
    ";
        // line 4
        if (twig_test_empty((isset($context["courses"]) ? $context["courses"] : null))) {
            // line 5
            echo "      <ul class=\"media-list\">
        <li class=\"mvl tac text-muted\">暂无课程内容</li>
      </ul>
    ";
        } else {
            // line 9
            echo "      <div class=\"class-content\">
        <div class=\"class-about\">
          <p>
            ";
            // line 12
            echo $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "description", array());
            echo "
          </p>
        </div>
        <ul class=\"class-course\">
          ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["courses"]) ? $context["courses"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
                // line 17
                echo "          <li class=\"course-item\">
            <a class=\"course-priture\" href=\"";
                // line 18
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($context["course"], "id", array()))), "html", null, true);
                echo "\" target=\"_blank\">
              <img src=\"";
                // line 19
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute($context["course"], "middlePicture", array()), "course.png"), "html", null, true);
                echo "\" >
            </a>
            <div class=\"course-body\">
              <h4 class=\"title\">
                <a href=\"";
                // line 23
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($context["course"], "id", array()))), "html", null, true);
                echo "\" target=\"_blank\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "title", array()), "html", null, true);
                echo "</a>
              </h4>
              <div class=\"metas\">
                <span class=\"period\">";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "lessonNum", array()), "html", null, true);
                echo "课时</span>
                <span class=\"price\">
                ";
                // line 28
                if ((($this->getAttribute((isset($context["courseMembers"]) ? $context["courseMembers"] : null), $this->getAttribute($context["course"], "id", array()), array(), "array") &&  !(isset($context["member"]) ? $context["member"] : null)) && $this->env->getExtension('topxia_web_twig')->getSetting("classroom.discount_buy"))) {
                    // line 29
                    echo "                已购买
                ";
                } else {
                    // line 31
                    echo "                  ";
                    if (((isset($context["member"]) ? $context["member"] : null) && twig_in_filter( !"auditor", $this->getAttribute((isset($context["member"]) ? $context["member"] : null), "role", array())))) {
                        // line 32
                        echo "                    ";
                        if (($this->getAttribute((isset($context["courseMembers"]) ? $context["courseMembers"] : null), $this->getAttribute($context["course"], "id", array()), array(), "array") && ($this->getAttribute($this->getAttribute((isset($context["courseMembers"]) ? $context["courseMembers"] : null), $this->getAttribute($context["course"], "id", array()), array(), "array"), "learnedNum", array()) == 0))) {
                            // line 33
                            echo "                    未学
                    ";
                        } elseif (($this->getAttribute(                        // line 34
(isset($context["courseMembers"]) ? $context["courseMembers"] : null), $this->getAttribute($context["course"], "id", array()), array(), "array") && ($this->getAttribute($this->getAttribute((isset($context["courseMembers"]) ? $context["courseMembers"] : null), $this->getAttribute($context["course"], "id", array()), array(), "array"), "learnedNum", array()) == $this->getAttribute($context["course"], "lessonNum", array())))) {
                            // line 35
                            echo "                    <span class=\"text-success\">已学完</span>
                    ";
                        } elseif (($this->getAttribute(                        // line 36
(isset($context["courseMembers"]) ? $context["courseMembers"] : null), $this->getAttribute($context["course"], "id", array()), array(), "array") && ($this->getAttribute($this->getAttribute((isset($context["courseMembers"]) ? $context["courseMembers"] : null), $this->getAttribute($context["course"], "id", array()), array(), "array"), "learnedNum", array()) < $this->getAttribute($context["course"], "lessonNum", array())))) {
                            // line 37
                            echo "                    <span class=\"text-info\">学习中</span>
                    ";
                        } else {
                            // line 39
                            echo "                    未学
                    ";
                        }
                        // line 40
                        echo " 


                  ";
                    } elseif (((($this->getAttribute(                    // line 43
(isset($context["courseMembers"]) ? $context["courseMembers"] : null), $this->getAttribute($context["course"], "id", array()), array(), "array") && (isset($context["member"]) ? $context["member"] : null)) && twig_in_filter("auditor", $this->getAttribute((isset($context["member"]) ? $context["member"] : null), "role", array()))) && $this->env->getExtension('topxia_web_twig')->getSetting("classroom.discount_buy"))) {
                        // line 44
                        echo "                  已购买
                  ";
                    } else {
                        // line 46
                        echo "                      ";
                        if (($this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_enabled") && ($this->env->getExtension('topxia_web_twig')->getSetting("coin. price_type") == "Coin"))) {
                            // line 47
                            echo "
                        ";
                            // line 48
                            if ((($this->getAttribute($context["course"], "price", array()) * $this->env->getExtension('topxia_web_twig')->getSetting("coin.cash_rate")) > 0)) {
                                // line 49
                                echo "                        ";
                                echo twig_escape_filter($this->env, ($this->getAttribute($context["course"], "price", array()) * $this->env->getExtension('topxia_web_twig')->getSetting("coin.cash_rate")), "html", null, true);
                                echo " ";
                                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_name"), "html", null, true);
                                echo " 
                        ";
                            } else {
                                // line 50
                                echo "免费";
                            }
                            // line 51
                            echo "
                      ";
                        } else {
                            // line 53
                            echo "
                        ";
                            // line 54
                            if (($this->getAttribute($context["course"], "price", array()) > 0)) {
                                // line 55
                                echo "                           ";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "price", array()), "html", null, true);
                                echo "元 
                        ";
                            } else {
                                // line 56
                                echo "免费";
                            }
                            // line 57
                            echo "
                      ";
                        }
                        // line 59
                        echo "
                  ";
                    }
                    // line 61
                    echo "
                ";
                }
                // line 63
                echo "                </span>
              </div>
              <div class=\"metas\">
                <span class=\"class-teacher\">
                  <i class=\"fa fa-user\"></i>
                  ";
                // line 68
                $context["teacher"] = (($this->getAttribute((isset($context["teachers"]) ? $context["teachers"] : null), $this->getAttribute($context["course"], "id", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["teachers"]) ? $context["teachers"] : null), $this->getAttribute($context["course"], "id", array()), array(), "array"), null)) : (null));
                // line 69
                echo "                    ";
                if ((isset($context["teacher"]) ? $context["teacher"] : null)) {
                    // line 70
                    echo "                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["teacher"]) ? $context["teacher"] : null));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                        // line 71
                        echo "                    ";
                        if (($this->getAttribute($context["loop"], "index", array()) <= 3)) {
                            // line 72
                            echo "                      <a class=\"teacher-nickname mrl\" href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
                            echo "\" target=\"_blank\">";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "nickname", array()), "html", null, true);
                            echo "</a>
                    ";
                        }
                        // line 74
                        echo "                    ";
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 75
                    echo "                    ";
                }
                // line 76
                echo "                </span>
                ";
                // line 77
                if (($this->env->getExtension('topxia_web_twig')->getSetting("course.show_student_num_enabled", "1") == 1)) {
                    // line 78
                    echo "                <span class=\"class-student\"><i class=\"fa fa-users\"></i>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "studentNum", array()), "html", null, true);
                    echo "</span>
                ";
                }
                // line 80
                echo "                <span class=\"stars-";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["course"], "rating", array())), "html", null, true);
                echo " pull-right hidden-xs\">&nbsp;</span>
              </div>
            </div>
          </li>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 85
            echo "        </ul>
      </div>
    ";
        }
        // line 88
        echo "  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:Classroom:course-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  254 => 88,  249 => 85,  237 => 80,  231 => 78,  229 => 77,  226 => 76,  223 => 75,  209 => 74,  201 => 72,  198 => 71,  180 => 70,  177 => 69,  175 => 68,  168 => 63,  164 => 61,  160 => 59,  156 => 57,  153 => 56,  147 => 55,  145 => 54,  142 => 53,  138 => 51,  135 => 50,  127 => 49,  125 => 48,  122 => 47,  119 => 46,  115 => 44,  113 => 43,  108 => 40,  104 => 39,  100 => 37,  98 => 36,  95 => 35,  93 => 34,  90 => 33,  87 => 32,  84 => 31,  80 => 29,  78 => 28,  73 => 26,  65 => 23,  58 => 19,  54 => 18,  51 => 17,  47 => 16,  40 => 12,  35 => 9,  29 => 5,  27 => 4,  23 => 3,  19 => 1,);
    }
}
/* <div class="panel panel-default">*/
/*   <div class="panel-body">*/
/*     {{ render(controller('ClassroomBundle:Classroom:dashboard',{classroom:classroom, nav:nav, member:member})) }}*/
/*     {% if courses is empty %}*/
/*       <ul class="media-list">*/
/*         <li class="mvl tac text-muted">暂无课程内容</li>*/
/*       </ul>*/
/*     {% else %}*/
/*       <div class="class-content">*/
/*         <div class="class-about">*/
/*           <p>*/
/*             {{classroom.description|raw}}*/
/*           </p>*/
/*         </div>*/
/*         <ul class="class-course">*/
/*           {% for course in courses %}*/
/*           <li class="course-item">*/
/*             <a class="course-priture" href="{{path('course_show',{id:course.id})}}" target="_blank">*/
/*               <img src="{{ filepath(course.middlePicture, 'course.png') }}" >*/
/*             </a>*/
/*             <div class="course-body">*/
/*               <h4 class="title">*/
/*                 <a href="{{path('course_show',{id:course.id})}}" target="_blank">{{course.title}}</a>*/
/*               </h4>*/
/*               <div class="metas">*/
/*                 <span class="period">{{course.lessonNum}}课时</span>*/
/*                 <span class="price">*/
/*                 {% if courseMembers[course.id] and not member and setting('classroom.discount_buy') %}*/
/*                 已购买*/
/*                 {% else %}*/
/*                   {% if member and not 'auditor' in member.role %}*/
/*                     {% if courseMembers[course.id] and courseMembers[course.id].learnedNum == 0 %}*/
/*                     未学*/
/*                     {% elseif courseMembers[course.id] and courseMembers[course.id].learnedNum == course.lessonNum %}*/
/*                     <span class="text-success">已学完</span>*/
/*                     {% elseif courseMembers[course.id] and courseMembers[course.id].learnedNum < course.lessonNum %}*/
/*                     <span class="text-info">学习中</span>*/
/*                     {% else %}*/
/*                     未学*/
/*                     {% endif %} */
/* */
/* */
/*                   {% elseif courseMembers[course.id] and member and 'auditor' in member.role  and setting('classroom.discount_buy') %}*/
/*                   已购买*/
/*                   {% else %}*/
/*                       {% if setting('coin.coin_enabled') and setting('coin. price_type') == 'Coin' %}*/
/* */
/*                         {% if course.price * setting('coin.cash_rate') > 0 %}*/
/*                         {{course.price * setting('coin.cash_rate') }} {{setting('coin.coin_name')}} */
/*                         {% else %}免费{% endif %}*/
/* */
/*                       {% else %}*/
/* */
/*                         {% if course.price > 0 %}*/
/*                            {{ course.price }}元 */
/*                         {% else %}免费{% endif %}*/
/* */
/*                       {% endif %}*/
/* */
/*                   {% endif %}*/
/* */
/*                 {% endif %}*/
/*                 </span>*/
/*               </div>*/
/*               <div class="metas">*/
/*                 <span class="class-teacher">*/
/*                   <i class="fa fa-user"></i>*/
/*                   {% set teacher = teachers[course.id]|default(null) %}*/
/*                     {% if teacher %}*/
/*                     {% for user in teacher%}*/
/*                     {% if loop.index <= 3%}*/
/*                       <a class="teacher-nickname mrl" href="{{ path('user_show', {id:user.id}) }}" target="_blank">{{ user.nickname }}</a>*/
/*                     {% endif %}*/
/*                     {% endfor %}*/
/*                     {% endif %}*/
/*                 </span>*/
/*                 {% if setting('course.show_student_num_enabled', '1') == 1  %}*/
/*                 <span class="class-student"><i class="fa fa-users"></i>{{course.studentNum}}</span>*/
/*                 {% endif %}*/
/*                 <span class="stars-{{ (course.rating)|number_format }} pull-right hidden-xs">&nbsp;</span>*/
/*               </div>*/
/*             </div>*/
/*           </li>*/
/*           {% endfor %}*/
/*         </ul>*/
/*       </div>*/
/*     {% endif %}*/
/*   </div>*/
/* </div>*/
