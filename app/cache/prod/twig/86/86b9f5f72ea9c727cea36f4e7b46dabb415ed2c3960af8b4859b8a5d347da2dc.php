<?php

/* TopxiaAdminBundle:LiveCourse:tr.html.twig */
class __TwigTemplate_df7fc849f75d1dc8b62f090ca1e1da4e214fb2d0efe595c9971b3beb3c60dca1 extends Twig_Template
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
        echo "<tr id=\"tag-tr-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "id", array()), "html", null, true);
        echo "\">
  ";
        // line 2
        $context["lessonUrl"] = (($this->env->getExtension('routing')->getPath("course_learn", array("id" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "courseId", array()))) . "#lesson/") . $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "id", array()));
        // line 3
        echo "  <td>
    <a href=\"";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["lessonUrl"]) ? $context["lessonUrl"] : null), "html", null, true);
        echo "\" target=\"_blank\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "title", array()), "html", null, true);
        echo "</a>
    <div class=\"mts\">
      ";
        // line 6
        if ((isset($context["course"]) ? $context["course"] : null)) {
            // line 7
            echo "        <a class=\"text-success text-sm\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "title", array()), "html", null, true);
            echo "</a>
      ";
        } else {
            // line 9
            echo "        <span class=\"text-muted text-sm\">课程已删除</span>
      ";
        }
        // line 11
        echo "    </div>
  </td>
  <td>";
        // line 13
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "startTime", array()), "Y-m-d H:i"), "html", null, true);
        echo "</td>
  <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "length", array()), "html", null, true);
        echo "</td>
  <td>
    ";
        // line 16
        if ((isset($context["course"]) ? $context["course"] : null)) {
            // line 17
            echo "      ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "maxStudentNum", array()), "html", null, true);
            echo "
    ";
        } else {
            // line 19
            echo "      <span class=\"text-muted\">课程已删除</div>
    ";
        }
        // line 21
        echo "  </td>
  ";
        // line 30
        echo "</tr>";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:LiveCourse:tr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 30,  75 => 21,  71 => 19,  65 => 17,  63 => 16,  58 => 14,  54 => 13,  50 => 11,  46 => 9,  38 => 7,  36 => 6,  29 => 4,  26 => 3,  24 => 2,  19 => 1,);
    }
}
/* <tr id="tag-tr-{{ lesson.id }}">*/
/*   {% set lessonUrl = path('course_learn', {id:lesson.courseId}) ~ '#lesson/' ~ lesson.id %}*/
/*   <td>*/
/*     <a href="{{ lessonUrl }}" target="_blank">{{ lesson.title }}</a>*/
/*     <div class="mts">*/
/*       {% if course %}*/
/*         <a class="text-success text-sm" href="{{ path('course_show', {id:course.id}) }}" target="_blank">{{ course.title }}</a>*/
/*       {% else %}*/
/*         <span class="text-muted text-sm">课程已删除</span>*/
/*       {% endif %}*/
/*     </div>*/
/*   </td>*/
/*   <td>{{ lesson.startTime|date('Y-m-d H:i') }}</td>*/
/*   <td>{{ lesson.length }}</td>*/
/*   <td>*/
/*     {% if course %}*/
/*       {{ course.maxStudentNum }}*/
/*     {% else %}*/
/*       <span class="text-muted">课程已删除</div>*/
/*     {% endif %}*/
/*   </td>*/
/*   {#*/
/*   <td>{{ lesson.maxOnlineNum }}</td>*/
/*   <td>*/
/*   {% if lesson.status == 'published' and status == 'end' %}*/
/*     <a  class="btn btn-link replay-lesson-btn" title="获取在线人数峰值" data-url="{{ path('admin_live_get_max_online', {courseId:course.id, lessonId:lesson.id}) }}"><span class="glyphicon glyphicon-refresh"></span></a>*/
/*   {% endif %}*/
/*   </td>*/
/*   #}*/
/* </tr>*/
