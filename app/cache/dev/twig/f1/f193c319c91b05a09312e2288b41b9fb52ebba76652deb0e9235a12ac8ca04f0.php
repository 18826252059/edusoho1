<?php

/* TopxiaWebBundle:Course:Part/normal-header-for-member.html.twig */
class __TwigTemplate_4a4f70acc0df51db0495d86240562a9d426bf2eaf39e26b4db0b286a2f297cc6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:Course:Part/normal-header-layout.html.twig", "TopxiaWebBundle:Course:Part/normal-header-for-member.html.twig", 1);
        $this->blocks = array(
            'before_content' => array($this, 'block_before_content'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:Course:Part/normal-header-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["layoutClass"] = "after";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_before_content($context, array $blocks = array())
    {
        // line 6
        echo "  <ol class=\"breadcrumb breadcrumb-o\">
    <li><a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">首页</a></li>
    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : $this->getContext($context, "breadcrumbs")));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 9
            echo "      <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_explore", array("category" => $this->getAttribute($context["breadcrumb"], "code", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["breadcrumb"], "name", array()), "html", null, true);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "    <li class=\"active\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "title", array()), "html", null, true);
        echo "</li>
  </ol>
";
    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
        // line 16
        echo "  ";
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->loadScript("course/common"), "html", null, true);
        echo "

  <div class=\"course-header-top clearfix\">

    ";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["header_macro"]) ? $context["header_macro"] : $this->getContext($context, "header_macro")), "picture", array(0 => (isset($context["course"]) ? $context["course"] : $this->getContext($context, "course"))), "method"), "html", null, true);
        echo "

    ";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["header_macro"]) ? $context["header_macro"] : $this->getContext($context, "header_macro")), "info", array(0 => (isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), 1 => (isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), 2 => (isset($context["userVipStatus"]) ? $context["userVipStatus"] : $this->getContext($context, "userVipStatus"))), "method"), "html", null, true);
        echo "

    <div class=\"course-operation\">
      ";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["header_macro"]) ? $context["header_macro"] : $this->getContext($context, "header_macro")), "student_num", array(0 => (isset($context["course"]) ? $context["course"] : $this->getContext($context, "course"))), "method"), "html", null, true);
        echo "
      <ul class=\"course-data clearfix ";
        // line 26
        if ( !(( !(($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "fake", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "fake", array()), false)) : (false)) && ($this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "role", array()) == "student")) && ($this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "joinedType", array()) == "course"))) {
            echo " two-col ";
        }
        echo "\">
        ";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["header_macro"]) ? $context["header_macro"] : $this->getContext($context, "header_macro")), "favorite_btn", array(0 => (isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), 1 => (isset($context["hasFavorited"]) ? $context["hasFavorited"] : $this->getContext($context, "hasFavorited"))), "method"), "html", null, true);
        echo "
        ";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["header_macro"]) ? $context["header_macro"] : $this->getContext($context, "header_macro")), "share_btn", array(0 => (isset($context["course"]) ? $context["course"] : $this->getContext($context, "course"))), "method"), "html", null, true);
        echo "
        ";
        // line 29
        if ((( !(($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "fake", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "fake", array()), false)) : (false)) && ($this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "role", array()) == "student")) && ($this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "joinedType", array()) == "course"))) {
            // line 30
            echo "          <li>
            ";
            // line 31
            if ($this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "orderId", array())) {
                // line 32
                echo "              <a href=\"#modal\" data-toggle=\"modal\" data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("order_refund", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "targetType" => "course")), "html", null, true);
                echo "\">
                <p><i class=\"es-icon es-icon-exit\"></i><p>
                <p>退出</p>
              </a>
            ";
            } else {
                // line 37
                echo "              <a id=\"exit-course-learning\" class=\"course-exit-btn\" href=\"javascript:;\" data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_exit", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
                echo "\"  data-goto=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
                echo "\" ";
                if (($this->getAttribute((isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "role", array()) != "student")) {
                    echo " disabled ";
                }
                echo ">
                <p><i class=\"es-icon es-icon-exit\"></i><p>
                <p>退出</p>
              </a>
            ";
            }
            // line 42
            echo "          </li>
        ";
        }
        // line 44
        echo "      </ul>
    </div>
  </div>

  <div class=\"progress progress-sm\">
    <div class=\"progress-bar\" role=\"progressbar\" style=\"width: ";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["learnProgress"]) ? $context["learnProgress"] : $this->getContext($context, "learnProgress")), "percent", array()), "html", null, true);
        echo "\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["learnProgress"]) ? $context["learnProgress"] : $this->getContext($context, "learnProgress")), "percent", array()), "html", null, true);
        echo "\">
    </div>
  </div>

  <div class=\"course-header-bottom clearfix\">
    <span class=\"pull-left\">完成课时： ";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["learnProgress"]) ? $context["learnProgress"] : $this->getContext($context, "learnProgress")), "number", array()), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["learnProgress"]) ? $context["learnProgress"] : $this->getContext($context, "learnProgress")), "total", array()), "html", null, true);
        echo "</span>
    ";
        // line 55
        if ((isset($context["nextLearnLesson"]) ? $context["nextLearnLesson"] : $this->getContext($context, "nextLearnLesson"))) {
            // line 56
            echo "      <a class=\"btn btn-lg btn-primary\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_learn", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
            echo "#lesson/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["nextLearnLesson"]) ? $context["nextLearnLesson"] : $this->getContext($context, "nextLearnLesson")), "id", array()), "html", null, true);
            echo "\">继续学习</a>
      <span class=\"next-class hidden-xs\">下一课时：<a href=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_learn", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
            echo "#lesson/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["nextLearnLesson"]) ? $context["nextLearnLesson"] : $this->getContext($context, "nextLearnLesson")), "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["nextLearnLesson"]) ? $context["nextLearnLesson"] : $this->getContext($context, "nextLearnLesson")), "title", array()), "html", null, true);
            echo "</a></span>
    ";
        }
        // line 59
        echo "  </div>

";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:Part/normal-header-for-member.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 59,  172 => 57,  165 => 56,  163 => 55,  157 => 54,  147 => 49,  140 => 44,  136 => 42,  121 => 37,  112 => 32,  110 => 31,  107 => 30,  105 => 29,  101 => 28,  97 => 27,  91 => 26,  87 => 25,  81 => 22,  76 => 20,  68 => 16,  65 => 15,  57 => 11,  46 => 9,  42 => 8,  38 => 7,  35 => 6,  32 => 5,  28 => 1,  26 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle:Course:Part/normal-header-layout.html.twig' %}*/
/* */
/* {% set layoutClass = 'after' %}*/
/* */
/* {% block before_content %}*/
/*   <ol class="breadcrumb breadcrumb-o">*/
/*     <li><a href="{{ path('homepage') }}">首页</a></li>*/
/*     {% for breadcrumb in breadcrumbs %}*/
/*       <li><a href="{{ path('course_explore',{'category':breadcrumb.code}) }}">{{ breadcrumb.name }}</a></li>*/
/*     {% endfor %}*/
/*     <li class="active">{{ course.title }}</li>*/
/*   </ol>*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/*   {{ load_script('course/common') }}*/
/* */
/*   <div class="course-header-top clearfix">*/
/* */
/*     {{ header_macro.picture(course) }}*/
/* */
/*     {{ header_macro.info(course, member, userVipStatus) }}*/
/* */
/*     <div class="course-operation">*/
/*       {{ header_macro.student_num(course) }}*/
/*       <ul class="course-data clearfix {% if not ( not member.fake|default(false) and member.role == 'student' and member.joinedType == 'course') %} two-col {% endif %}">*/
/*         {{ header_macro.favorite_btn(course, hasFavorited) }}*/
/*         {{ header_macro.share_btn(course) }}*/
/*         {% if not member.fake|default(false) and member.role == 'student' and member.joinedType == 'course' %}*/
/*           <li>*/
/*             {% if member.orderId  %}*/
/*               <a href="#modal" data-toggle="modal" data-url="{{ path('order_refund', {id:course.id, targetType:'course'}) }}">*/
/*                 <p><i class="es-icon es-icon-exit"></i><p>*/
/*                 <p>退出</p>*/
/*               </a>*/
/*             {% else %}*/
/*               <a id="exit-course-learning" class="course-exit-btn" href="javascript:;" data-url="{{ path('course_exit', {id:course.id}) }}"  data-goto="{{ path('course_show', {id:course.id}) }}" {% if member.role != 'student' %} disabled {% endif %}>*/
/*                 <p><i class="es-icon es-icon-exit"></i><p>*/
/*                 <p>退出</p>*/
/*               </a>*/
/*             {% endif %}*/
/*           </li>*/
/*         {% endif %}*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/* */
/*   <div class="progress progress-sm">*/
/*     <div class="progress-bar" role="progressbar" style="width: {{ learnProgress.percent }}" data-toggle="tooltip" data-placement="right" title="{{ learnProgress.percent }}">*/
/*     </div>*/
/*   </div>*/
/* */
/*   <div class="course-header-bottom clearfix">*/
/*     <span class="pull-left">完成课时： {{ learnProgress.number }}/{{ learnProgress.total }}</span>*/
/*     {% if nextLearnLesson %}*/
/*       <a class="btn btn-lg btn-primary" href="{{ path('course_learn', {id:course.id}) }}#lesson/{{ nextLearnLesson.id }}">继续学习</a>*/
/*       <span class="next-class hidden-xs">下一课时：<a href="{{ path('course_learn', {id:course.id}) }}#lesson/{{ nextLearnLesson.id }}">{{ nextLearnLesson.title }}</a></span>*/
/*     {% endif %}*/
/*   </div>*/
/* */
/* {% endblock %}*/
/* */
/* */
/* */
