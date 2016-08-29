<?php

/* TopxiaWebBundle:MyQuiz:my-quiz-tr.html.twig */
class __TwigTemplate_fd8f2368ca0de94bab1eb22a9efb96ab00d2794e616da48ffe0d3a61e96b2817 extends Twig_Template
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
        if ((isset($context["myTestpaper"]) ? $context["myTestpaper"] : null)) {
            // line 2
            echo "<tr>
  <td width=\"55%\">
    ";
            // line 4
            echo $this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute((isset($context["myTestpaper"]) ? $context["myTestpaper"] : null), "name", array()), 60);
            echo "
    <div>
      <small class=\"text-muted\">来自课程《";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "title", array()), "html", null, true);
            echo "》</small>
      <small class=\"text-muted mhs\">•</small>
      <small class=\"text-muted\" title=\"开始考试时间\">";
            // line 8
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["myTestpaperResult"]) ? $context["myTestpaperResult"] : null), "beginTime", array()), "Y年n月d日 H:i"), "html", null, true);
            echo "</small>
    </div>
  </td>

\t<td>
\t\t";
            // line 13
            if (($this->getAttribute((isset($context["myTestpaperResult"]) ? $context["myTestpaperResult"] : null), "status", array()) == "reviewing")) {
                // line 14
                echo "\t\t  <span class=\"text-warning\">正在批阅</span>
\t\t";
            } elseif (($this->getAttribute(            // line 15
(isset($context["myTestpaperResult"]) ? $context["myTestpaperResult"] : null), "status", array()) == "finished")) {
                // line 16
                echo "\t\t\t<span class=\"text-muted\">得分<strong class=\"text-warning\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["myTestpaperResult"]) ? $context["myTestpaperResult"] : null), "score", array()), "html", null, true);
                echo "</strong>分</span><br>
\t\t\t<small class=\"text-muted\">做对<strong>";
                // line 17
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["myTestpaperResult"]) ? $context["myTestpaperResult"] : null), "rightItemCount", array()), "html", null, true);
                echo "</strong>题 / 共<strong>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["myTestpaper"]) ? $context["myTestpaper"] : null), "itemCount", array()), "html", null, true);
                echo "</strong>题</small>
\t\t";
            } else {
                // line 19
                echo "\t\t  <span class=\"text-muted\">未交卷</span>
\t\t";
            }
            // line 21
            echo "\t</td>
\t<td>
\t\t";
            // line 23
            if (twig_in_filter($this->getAttribute((isset($context["myTestpaperResult"]) ? $context["myTestpaperResult"] : null), "status", array()), array(0 => "doing", 1 => "paused"))) {
                // line 24
                echo "\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_show_test", array("id" => $this->getAttribute((isset($context["myTestpaperResult"]) ? $context["myTestpaperResult"] : null), "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-default btn-sm\">继续考试</a>
\t\t";
            } else {
                // line 26
                echo "\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_lesson_redo_test", array("lessonId" => $this->getAttribute((isset($context["myTestpaperResult"]) ? $context["myTestpaperResult"] : null), "lessonId", array()), "testId" => $this->getAttribute((isset($context["myTestpaper"]) ? $context["myTestpaper"] : null), "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-default btn-sm\">再做一次</a>
\t\t\t<a href=\"";
                // line 27
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_test_results", array("id" => $this->getAttribute((isset($context["myTestpaperResult"]) ? $context["myTestpaperResult"] : null), "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-link btn-sm\" target=\"_blank\">查看结果</a>
\t\t";
            }
            // line 29
            echo "\t</td>

</tr>
";
        } else {
            // line 33
            echo "
<tr>
    <td colspan=\"3\">
        <a href=\"javascript:;\">";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["myTestpaperResult"]) ? $context["myTestpaperResult"] : null), "paperName", array()), "html", null, true);
            echo "</a> 
        <br>
        <small>该试卷已删除</small>
    </td>
</tr>

";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:MyQuiz:my-quiz-tr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 36,  94 => 33,  88 => 29,  83 => 27,  78 => 26,  72 => 24,  70 => 23,  66 => 21,  62 => 19,  55 => 17,  50 => 16,  48 => 15,  45 => 14,  43 => 13,  35 => 8,  30 => 6,  25 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% if myTestpaper %}*/
/* <tr>*/
/*   <td width="55%">*/
/*     {{ myTestpaper.name|plain_text(60) }}*/
/*     <div>*/
/*       <small class="text-muted">来自课程《{{ course.title }}》</small>*/
/*       <small class="text-muted mhs">•</small>*/
/*       <small class="text-muted" title="开始考试时间">{{ myTestpaperResult.beginTime|date("Y年n月d日 H:i") }}</small>*/
/*     </div>*/
/*   </td>*/
/* */
/* 	<td>*/
/* 		{% if myTestpaperResult.status == 'reviewing' %}*/
/* 		  <span class="text-warning">正在批阅</span>*/
/* 		{% elseif myTestpaperResult.status == 'finished' %}*/
/* 			<span class="text-muted">得分<strong class="text-warning">{{ myTestpaperResult.score }}</strong>分</span><br>*/
/* 			<small class="text-muted">做对<strong>{{ myTestpaperResult.rightItemCount }}</strong>题 / 共<strong>{{ myTestpaper.itemCount }}</strong>题</small>*/
/* 		{% else %}*/
/* 		  <span class="text-muted">未交卷</span>*/
/* 		{% endif %}*/
/* 	</td>*/
/* 	<td>*/
/* 		{% if myTestpaperResult.status in ['doing', 'paused'] %}*/
/* 			<a href="{{ path('course_manage_show_test', {id:myTestpaperResult.id}) }}" class="btn btn-default btn-sm">继续考试</a>*/
/* 		{% else %}*/
/* 			<a href="{{ path('course_lesson_redo_test',{lessonId:myTestpaperResult.lessonId,testId:myTestpaper.id}) }}" class="btn btn-default btn-sm">再做一次</a>*/
/* 			<a href="{{ path('course_manage_test_results', {id:myTestpaperResult.id}) }}" class="btn btn-link btn-sm" target="_blank">查看结果</a>*/
/* 		{% endif %}*/
/* 	</td>*/
/* */
/* </tr>*/
/* {% else %}*/
/* */
/* <tr>*/
/*     <td colspan="3">*/
/*         <a href="javascript:;">{{ myTestpaperResult.paperName }}</a> */
/*         <br>*/
/*         <small>该试卷已删除</small>*/
/*     </td>*/
/* </tr>*/
/* */
/* {% endif %}*/
/* */
