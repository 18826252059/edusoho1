<?php

/* TopxiaWebBundle:Course:header.html.twig */
class __TwigTemplate_0f3b05d50d97bbdf930929a0c4ba6690b069b239604a7f7bc33964b42024dbab extends Twig_Template
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
        $context["web_macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "TopxiaWebBundle:Course:header.html.twig", 1);
        // line 2
        echo "
<div class=\"es-section course-manage-header clearfix\">
  <a href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
        echo "\">
    <img class=\"picture\" src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "largePicture", array()), "course.png"), "html", null, true);
        echo "\" />
  </a>
  <h1 class=\"title\"><a class=\"link-dark\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "title", array()), "html", null, true);
        echo "</a> 
    ";
        // line 8
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "status", array()) == "closed")) {
            echo "  
      <span class=\"label label-danger \">已关闭</span>
    ";
        } elseif (($this->getAttribute(        // line 10
(isset($context["course"]) ? $context["course"] : null), "status", array()) == "draft")) {
            // line 11
            echo "      <span class=\"label label-warning \">未发布</span>
    ";
        } elseif (($this->getAttribute(        // line 12
(isset($context["course"]) ? $context["course"] : null), "status", array()) == "published")) {
            // line 13
            echo "      ";
            if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "serializeMode", array()) == "serialize")) {
                // line 14
                echo "        <span class=\"label label-success \">更新中</span>
      ";
            } elseif (($this->getAttribute(            // line 15
(isset($context["course"]) ? $context["course"] : null), "serializeMode", array()) == "finished")) {
                // line 16
                echo "        <span class=\"label label-warning \">已完结</span>
      ";
            }
            // line 18
            echo "    ";
        }
        // line 19
        echo "  </h1>

  <div class=\"teachers\">
    ";
        // line 22
        if ((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "teacherIds", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "teacherIds", array()), null)) : (null))) {
            // line 23
            echo "      教师：
      ";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "teacherIds", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["id"]) {
                // line 25
                echo "        ";
                $context["user"] = $this->getAttribute((isset($context["users"]) ? $context["users"] : null), $context["id"], array(), "array");
                // line 26
                echo "        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
                echo "\" >";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "nickname", array()), "html", null, true);
                echo "</a>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['id'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "    ";
        }
        // line 29
        echo "  </div>

  <div class=\"toolbar hidden-xs\">
    ";
        // line 32
        if ( !(isset($context["manage"]) ? $context["manage"] : null)) {
            // line 33
            echo "    <div class=\"btn-group\">
      <a class=\"btn btn-default btn-sm\" data-toggle=\"modal\" data-url=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_review_create", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "\" data-role=\"tooltip\" title=\"评价\" data-placement=\"top\" href=\"#modal\">
        <i class=\"esicon esicon-like\"></i> ";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "ratingNum", array()), "html", null, true);
            echo "</a>
      ";
            // line 36
            if (((($this->env->getExtension('topxia_web_twig')->getSetting("course.show_student_num_enabled", "1") == 1) || ((($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "role", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "role", array()), "student")) : ("student")) == "teacher")) || (isset($context["isAdmin"]) ? $context["isAdmin"] : null))) {
                // line 37
                echo "        <a class=\"btn btn-default btn-sm\" data-toggle=\"modal\" data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_members", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
                echo "\" data-role=\"tooltip\" title=\"查看";
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("default.user_name", "学员"), "html", null, true);
                echo "的学习进度, 还可以发私信进行联系!\" data-placement=\"bottom\"
        href=\"#modal\"><i class=\"esicon esicon-user\"></i> ";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "studentNum", array()), "html", null, true);
                echo "</a>
      ";
            }
            // line 40
            echo "
      <div class=\"btn-group\" data-role=\"tooltip\" title=\"分享到\" data-placement=\"left\" >
        <button class=\"btn btn-default btn-sm dropdown-toggle\" data-toggle=\"dropdown\">
          <i class=\"esicon esicon-share\"></i>
        </button>
        ";
            // line 45
            $this->loadTemplate("TopxiaWebBundle:Common:share-dropdown.html.twig", "TopxiaWebBundle:Course:header.html.twig", 45)->display(array_merge($context, array("type" => "course", "right" => true)));
            // line 46
            echo "      </div>
      ";
            // line 47
            if ((isset($context["canExit"]) ? $context["canExit"] : null)) {
                // line 48
                echo "        ";
                if ((($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "joinedType", array()) == "course") && $this->getAttribute((isset($context["member"]) ? $context["member"] : null), "orderId", array()))) {
                    // line 49
                    echo "        <a class=\"btn btn-default btn-sm \" title=\"退出学习\" type=\"button\" href=\"#modal\" data-toggle=\"modal\" data-url=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("order_refund", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "targetType" => "course")), "html", null, true);
                    echo "\">
        <i class=\"esicon esicon-exit\"></i></a>
        ";
                } else {
                    // line 52
                    echo "        <a class=\"btn btn-default btn-sm course-exit-btn\" id=\"exit-course-learning\" title=\"退出学习\" type=\"button\"  href=\"javascript:;\" data-url=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_exit", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
                    echo "\"  data-goto=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
                    echo "\">
        <i class=\"esicon esicon-exit\"></i></a>
        ";
                }
                // line 55
                echo "      ";
            }
            // line 56
            echo "      ";
            if ((isset($context["canManage"]) ? $context["canManage"] : null)) {
                // line 57
                echo "      <a class=\"btn btn-default btn-sm \" type=\"button\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
                echo "\"  title=\"课程管理\"  >
      <i class=\"esicon esicon-setting\"></i>
      </a>
      ";
            }
            // line 61
            echo "    </div>

    ";
        } else {
            // line 64
            echo "
      ";
            // line 65
            if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "status", array()) == "published")) {
                // line 66
                echo "        <div class=\"btn-group\">
          <a class=\"btn btn-default btn-sm\" href=\"";
                // line 67
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
                echo "\">返回课程主页</a>
        </div>
      ";
            }
            // line 70
            echo "
      <div class=\"btn-group\">
        <button class=\"btn btn-default btn-sm dropdown-toggle\" data-toggle=\"dropdown\">预览 <span class=\"caret\"></span></button>
        <ul class=\"dropdown-menu pull-right\">
          <li><a href=\"";
            // line 74
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "previewAs" => "member")), "html", null, true);
            echo "\" target=\"_blank\">作为 已购买用户</a></li>
          <li><a href=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "previewAs" => "guest")), "html", null, true);
            echo "\" target=\"_blank\">作为 未购买用户</a></li>
        </ul>
      </div>

      ";
            // line 79
            if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "status", array()) != "published")) {
                // line 80
                echo "        <div class=\"btn-group\">
          <button class=\"btn btn-success btn-sm course-publish-btn\" data-url=\"";
                // line 81
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_publish", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
                echo "\">发布课程</button>
        </div>
      ";
            }
            // line 84
            echo "
    ";
        }
        // line 86
        echo "  </div>
</div>

";
        // line 89
        if ((((array_key_exists("vipChecked", $context)) ? (_twig_default_filter((isset($context["vipChecked"]) ? $context["vipChecked"] : null), "ok")) : ("ok")) != "ok")) {
            // line 90
            echo "  <div class=\"alert alert-danger alert-dismissable\">
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
    ";
            // line 92
            if (((isset($context["vipChecked"]) ? $context["vipChecked"] : null) == "not_member")) {
                // line 93
                echo "      您已经不是会员，不能学习此课程！
      ";
                // line 94
                if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "price", array()) > 0)) {
                    // line 95
                    echo "        请重新<a class=\"alert-link\" href=\"";
                    echo $this->env->getExtension('routing')->getPath("vip");
                    echo "\" target=\"_blank\">开通会员</a>
      ";
                } else {
                    // line 97
                    echo "        <a class=\"alert-link js-exit-course\" href=\"javascript:;\" data-url=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_exit", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
                    echo "\" data-go=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
                    echo "\">返回课程首页</a>
      ";
                }
                // line 98
                echo "！
    ";
            } elseif ((            // line 99
(isset($context["vipChecked"]) ? $context["vipChecked"] : null) == "member_expired")) {
                // line 100
                echo "      您的会员已过期，不能学习此课程，请先<a class=\"alert-link\" href=\"";
                echo $this->env->getExtension('routing')->getPath("vip_renew");
                echo "\" target=\"_blank\">续费</a>。
    ";
            } elseif ((            // line 101
(isset($context["vipChecked"]) ? $context["vipChecked"] : null) == "level_low")) {
                // line 102
                echo "      会员等级不够，不能学习此课程。请先<a class=\"alert-link\" href=\"";
                echo $this->env->getExtension('routing')->getPath("vip_upgrade");
                echo "\" target=\"_blank\">升级会员</a>。
    ";
            } else {
                // line 104
                echo "      此课程已不支持会员免费学，<a class=\"alert-link js-exit-course\" href=\"javascript:;\" data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_exit", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
                echo "\" data-go=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
                echo "\">返回课程首页</a>
    ";
            }
            // line 106
            echo "  </div>
";
        }
        // line 108
        echo "
";
        // line 109
        if ( !(isset($context["isNonExpired"]) ? $context["isNonExpired"] : null)) {
            // line 110
            echo "  <div class=\"alert alert-danger alert-dismissable\">
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
    您购买的课程已到期，无法学习课时、提问等。如有疑问，请联系老师，或点击
    <a class=\"btn btn-primary btn-sm \"  href=\"";
            // line 113
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_rebuy", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "\">
    ";
            // line 114
            if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "price", array()) > 0)) {
                // line 115
                echo "      重新购买
    ";
            } else {
                // line 117
                echo "      重新加入
    ";
            }
            // line 119
            echo "    </a>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  314 => 119,  310 => 117,  306 => 115,  304 => 114,  300 => 113,  295 => 110,  293 => 109,  290 => 108,  286 => 106,  278 => 104,  272 => 102,  270 => 101,  265 => 100,  263 => 99,  260 => 98,  252 => 97,  246 => 95,  244 => 94,  241 => 93,  239 => 92,  235 => 90,  233 => 89,  228 => 86,  224 => 84,  218 => 81,  215 => 80,  213 => 79,  206 => 75,  202 => 74,  196 => 70,  190 => 67,  187 => 66,  185 => 65,  182 => 64,  177 => 61,  169 => 57,  166 => 56,  163 => 55,  154 => 52,  147 => 49,  144 => 48,  142 => 47,  139 => 46,  137 => 45,  130 => 40,  125 => 38,  118 => 37,  116 => 36,  112 => 35,  108 => 34,  105 => 33,  103 => 32,  98 => 29,  95 => 28,  84 => 26,  81 => 25,  77 => 24,  74 => 23,  72 => 22,  67 => 19,  64 => 18,  60 => 16,  58 => 15,  55 => 14,  52 => 13,  50 => 12,  47 => 11,  45 => 10,  40 => 8,  34 => 7,  29 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% import "TopxiaWebBundle::macro.html.twig" as web_macro %}*/
/* */
/* <div class="es-section course-manage-header clearfix">*/
/*   <a href="{{ path('course_show', {id:course.id}) }}">*/
/*     <img class="picture" src="{{ filepath(course.largePicture, 'course.png') }}" />*/
/*   </a>*/
/*   <h1 class="title"><a class="link-dark" href="{{ path('course_show', {id:course.id}) }}">{{ course.title }}</a> */
/*     {% if course.status=='closed' %}  */
/*       <span class="label label-danger ">已关闭</span>*/
/*     {% elseif course.status=='draft' %}*/
/*       <span class="label label-warning ">未发布</span>*/
/*     {% elseif course.status=='published' %}*/
/*       {% if course.serializeMode=='serialize' %}*/
/*         <span class="label label-success ">更新中</span>*/
/*       {% elseif course.serializeMode=='finished' %}*/
/*         <span class="label label-warning ">已完结</span>*/
/*       {% endif %}*/
/*     {% endif %}*/
/*   </h1>*/
/* */
/*   <div class="teachers">*/
/*     {% if course.teacherIds|default(null) %}*/
/*       教师：*/
/*       {% for id in course.teacherIds %}*/
/*         {% set user = users[id] %}*/
/*         <a href="{{ path('user_show',  {id:user.id}) }}" >{{ user.nickname }}</a>*/
/*       {% endfor %}*/
/*     {% endif  %}*/
/*   </div>*/
/* */
/*   <div class="toolbar hidden-xs">*/
/*     {% if not manage %}*/
/*     <div class="btn-group">*/
/*       <a class="btn btn-default btn-sm" data-toggle="modal" data-url="{{ path('course_review_create', {id:course.id}) }}" data-role="tooltip" title="评价" data-placement="top" href="#modal">*/
/*         <i class="esicon esicon-like"></i> {{ course.ratingNum }}</a>*/
/*       {% if setting('course.show_student_num_enabled', '1') == 1 or member.role|default('student') == 'teacher' or isAdmin %}*/
/*         <a class="btn btn-default btn-sm" data-toggle="modal" data-url="{{ path('course_members', {id:course.id}) }}" data-role="tooltip" title="查看{{setting('default.user_name', '学员')}}的学习进度, 还可以发私信进行联系!" data-placement="bottom"*/
/*         href="#modal"><i class="esicon esicon-user"></i> {{course.studentNum}}</a>*/
/*       {% endif %}*/
/* */
/*       <div class="btn-group" data-role="tooltip" title="分享到" data-placement="left" >*/
/*         <button class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">*/
/*           <i class="esicon esicon-share"></i>*/
/*         </button>*/
/*         {% include 'TopxiaWebBundle:Common:share-dropdown.html.twig' with {type:'course', right: true} %}*/
/*       </div>*/
/*       {% if canExit %}*/
/*         {% if member.joinedType == 'course' and member.orderId %}*/
/*         <a class="btn btn-default btn-sm " title="退出学习" type="button" href="#modal" data-toggle="modal" data-url="{{ path('order_refund', {id:course.id, targetType:'course'}) }}">*/
/*         <i class="esicon esicon-exit"></i></a>*/
/*         {% else %}*/
/*         <a class="btn btn-default btn-sm course-exit-btn" id="exit-course-learning" title="退出学习" type="button"  href="javascript:;" data-url="{{ path('course_exit', {id:course.id}) }}"  data-goto="{{ path('course_show', {id:course.id}) }}">*/
/*         <i class="esicon esicon-exit"></i></a>*/
/*         {% endif %}*/
/*       {% endif %}*/
/*       {% if canManage %}*/
/*       <a class="btn btn-default btn-sm " type="button" href="{{ path('course_manage', {id:course.id}) }}"  title="课程管理"  >*/
/*       <i class="esicon esicon-setting"></i>*/
/*       </a>*/
/*       {% endif %}*/
/*     </div>*/
/* */
/*     {% else %}*/
/* */
/*       {% if course.status == 'published' %}*/
/*         <div class="btn-group">*/
/*           <a class="btn btn-default btn-sm" href="{{ path('course_show', {id:course.id}) }}">返回课程主页</a>*/
/*         </div>*/
/*       {% endif %}*/
/* */
/*       <div class="btn-group">*/
/*         <button class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">预览 <span class="caret"></span></button>*/
/*         <ul class="dropdown-menu pull-right">*/
/*           <li><a href="{{ path('course_show', {id:course.id, previewAs:'member'}) }}" target="_blank">作为 已购买用户</a></li>*/
/*           <li><a href="{{ path('course_show', {id:course.id, previewAs:'guest'}) }}" target="_blank">作为 未购买用户</a></li>*/
/*         </ul>*/
/*       </div>*/
/* */
/*       {% if course.status != 'published' %}*/
/*         <div class="btn-group">*/
/*           <button class="btn btn-success btn-sm course-publish-btn" data-url="{{ path('course_manage_publish', {id:course.id}) }}">发布课程</button>*/
/*         </div>*/
/*       {% endif  %}*/
/* */
/*     {% endif %}*/
/*   </div>*/
/* </div>*/
/* */
/* {% if vipChecked|default('ok') != 'ok' %}*/
/*   <div class="alert alert-danger alert-dismissable">*/
/*     <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>*/
/*     {% if vipChecked == 'not_member' %}*/
/*       您已经不是会员，不能学习此课程！*/
/*       {% if course.price > 0 %}*/
/*         请重新<a class="alert-link" href="{{ path('vip') }}" target="_blank">开通会员</a>*/
/*       {% else %}*/
/*         <a class="alert-link js-exit-course" href="javascript:;" data-url="{{ path('course_exit', { id:course.id }) }}" data-go="{{ path('course_show', { id:course.id }) }}">返回课程首页</a>*/
/*       {% endif %}！*/
/*     {% elseif vipChecked == 'member_expired' %}*/
/*       您的会员已过期，不能学习此课程，请先<a class="alert-link" href="{{ path('vip_renew') }}" target="_blank">续费</a>。*/
/*     {% elseif vipChecked == 'level_low' %}*/
/*       会员等级不够，不能学习此课程。请先<a class="alert-link" href="{{ path('vip_upgrade') }}" target="_blank">升级会员</a>。*/
/*     {% else %}*/
/*       此课程已不支持会员免费学，<a class="alert-link js-exit-course" href="javascript:;" data-url="{{ path('course_exit', { id:course.id }) }}" data-go="{{ path('course_show', { id:course.id }) }}">返回课程首页</a>*/
/*     {% endif %}*/
/*   </div>*/
/* {% endif %}*/
/* */
/* {% if not isNonExpired %}*/
/*   <div class="alert alert-danger alert-dismissable">*/
/*     <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>*/
/*     您购买的课程已到期，无法学习课时、提问等。如有疑问，请联系老师，或点击*/
/*     <a class="btn btn-primary btn-sm "  href="{{path('course_rebuy',{courseId:course.id})}}">*/
/*     {% if course.price>0 %}*/
/*       重新购买*/
/*     {% else %}*/
/*       重新加入*/
/*     {% endif %}*/
/*     </a>*/
/*   </div>*/
/* {% endif %}*/
/* */
