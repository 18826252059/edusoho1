<?php

/* TopxiaAdminBundle:Default:unsolved-questions-block.html.twig */
class __TwigTemplate_81e8a98bcbff1b44c744a65ab5397afc252b0a1fcb2fff1ee615b3c91b5c81d1 extends Twig_Template
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
        $context["admin_macro"] = $this->loadTemplate("TopxiaAdminBundle::macro.html.twig", "TopxiaAdminBundle:Default:unsolved-questions-block.html.twig", 1);
        // line 2
        echo "<div class=\"col-md-12\">
\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-heading\">

           \t<a class=\"pull-right\" href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getUrl("admin_question", array("postStatus" => "unPosted"));
        echo "\"
           \t>更多</a>
\t\t\t<h3 class=\"panel-title\">最新未回复问答</h3>
\t\t\t 
\t\t</div>

\t";
        // line 12
        if ((isset($context["questions"]) ? $context["questions"] : $this->getContext($context, "questions"))) {
            // line 13
            echo "\t    <table class=\"table table-condensed table-bordered table-striped table-hover\">
\t      <thead>
\t        <tr>
\t          <th width=\"40%\">问答标题</th>
\t          <th width=\"35%\">所属课程</th>
\t          <th width=\"10%\">提问人</th>
\t          <th width=\"15%\">操作</th>
\t        </tr>
\t      </thead>
\t      <tbody class=\"tbody\">
\t        ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["questions"]) ? $context["questions"] : $this->getContext($context, "questions")));
            foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
                // line 24
                echo "\t          ";
                $context["course"] = (($this->getAttribute((isset($context["courses"]) ? $context["courses"] : null), $this->getAttribute($context["question"], "courseId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["courses"]) ? $context["courses"] : null), $this->getAttribute($context["question"], "courseId", array()), array(), "array"), null)) : (null));
                // line 25
                echo "\t\t        <tr>
\t\t          <td>
\t              <a href=\"";
                // line 27
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_thread_show", array("courseId" => $this->getAttribute($context["question"], "courseId", array()), "threadId" => $this->getAttribute($context["question"], "id", array()))), "html", null, true);
                echo "\" target=\"_blank\">
\t                ";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "title", array()), "html", null, true);
                echo "
\t              </a>
\t              <br />
\t              <span class=\"text-muted text-sm\">";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "hitNum", array()), "html", null, true);
                echo "次查看</span>
\t              <span class=\"text-muted text-sm\">•</span>
\t              <span class=\"text-muted text-sm\">发表于";
                // line 33
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["question"], "createdTime", array()), "Y-n-d H:i"), "html", null, true);
                echo "</span>
\t\t          </td>
\t\t          <td>
\t\t          \t";
                // line 36
                if ((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course"))) {
                    // line 37
                    echo "\t\t              <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($this->getAttribute((isset($context["courses"]) ? $context["courses"] : $this->getContext($context, "courses")), $this->getAttribute($context["question"], "courseId", array()), array(), "array"), "id", array()))), "html", null, true);
                    echo "\" target=\"_blank\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["courses"]) ? $context["courses"] : $this->getContext($context, "courses")), $this->getAttribute($context["question"], "courseId", array()), array(), "array"), "title", array()), "html", null, true);
                    echo "</a>
\t\t              <br>
\t\t              <span class=\"text-muted text-sm\">老师：
\t\t\t\t            ";
                    // line 40
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["courses"]) ? $context["courses"] : $this->getContext($context, "courses")), $this->getAttribute($context["question"], "courseId", array()), array(), "array"), "teacherIds", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["teacherId"]) {
                        // line 41
                        echo "\t\t\t\t              ";
                        echo $context["admin_macro"]->getuser_link($this->getAttribute((isset($context["teachers"]) ? $context["teachers"] : $this->getContext($context, "teachers")), $context["teacherId"], array(), "array"), "text-muted text-sm");
                        echo "
\t\t\t\t            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['teacherId'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 43
                    echo "\t\t\t\t          </span>
\t\t\t          ";
                } else {
                    // line 45
                    echo "\t\t\t            --
\t\t\t          ";
                }
                // line 47
                echo "\t\t          </td>
\t\t          <td>
\t\t            ";
                // line 49
                echo $context["admin_macro"]->getuser_link($this->getAttribute((isset($context["askers"]) ? $context["askers"] : $this->getContext($context, "askers")), $this->getAttribute($context["question"], "userId", array()), array(), "array"));
                echo "
\t\t          </td>
\t\t          <td>
\t\t          \t";
                // line 52
                if ((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course"))) {
                    // line 53
                    echo "\t\t\t\t          <button class=\"btn btn-default btn-sm remind-teachers\" data-url=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_question_remind_teachers", array("courseId" => $this->getAttribute($context["question"], "courseId", array()), "questionId" => $this->getAttribute($context["question"], "id", array()))), "html", null, true);
                    echo "\">提醒教师</button>
\t\t\t          ";
                }
                // line 55
                echo "\t\t\t        </td>
\t\t        </tr>
\t        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "\t      </tbody>
        </table>
    ";
        } else {
            // line 61
            echo "      <div class=\"empty\">暂无最新未回复问答</div>
    ";
        }
        // line 63
        echo "\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Default:unsolved-questions-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 63,  145 => 61,  140 => 58,  132 => 55,  126 => 53,  124 => 52,  118 => 49,  114 => 47,  110 => 45,  106 => 43,  97 => 41,  93 => 40,  84 => 37,  82 => 36,  76 => 33,  71 => 31,  65 => 28,  61 => 27,  57 => 25,  54 => 24,  50 => 23,  38 => 13,  36 => 12,  27 => 6,  21 => 2,  19 => 1,);
    }
}
/* {% import "TopxiaAdminBundle::macro.html.twig" as admin_macro %}*/
/* <div class="col-md-12">*/
/* 	<div class="panel panel-default">*/
/* 		<div class="panel-heading">*/
/* */
/*            	<a class="pull-right" href="{{ url('admin_question', {postStatus: 'unPosted'}) }}"*/
/*            	>更多</a>*/
/* 			<h3 class="panel-title">最新未回复问答</h3>*/
/* 			 */
/* 		</div>*/
/* */
/* 	{% if questions %}*/
/* 	    <table class="table table-condensed table-bordered table-striped table-hover">*/
/* 	      <thead>*/
/* 	        <tr>*/
/* 	          <th width="40%">问答标题</th>*/
/* 	          <th width="35%">所属课程</th>*/
/* 	          <th width="10%">提问人</th>*/
/* 	          <th width="15%">操作</th>*/
/* 	        </tr>*/
/* 	      </thead>*/
/* 	      <tbody class="tbody">*/
/* 	        {% for question in questions %}*/
/* 	          {% set course =  courses[question.courseId]|default(null) %}*/
/* 		        <tr>*/
/* 		          <td>*/
/* 	              <a href="{{ path('course_thread_show', {courseId:question.courseId, threadId:question.id}) }}" target="_blank">*/
/* 	                {{ question.title }}*/
/* 	              </a>*/
/* 	              <br />*/
/* 	              <span class="text-muted text-sm">{{ question.hitNum }}次查看</span>*/
/* 	              <span class="text-muted text-sm">•</span>*/
/* 	              <span class="text-muted text-sm">发表于{{question.createdTime |date('Y-n-d H:i') }}</span>*/
/* 		          </td>*/
/* 		          <td>*/
/* 		          	{% if course %}*/
/* 		              <a href="{{ path('course_show', {id:courses[question.courseId].id}) }}" target="_blank">{{ courses[question.courseId].title }}</a>*/
/* 		              <br>*/
/* 		              <span class="text-muted text-sm">老师：*/
/* 				            {% for teacherId in courses[question.courseId].teacherIds %}*/
/* 				              {{ admin_macro.user_link(teachers[teacherId], 'text-muted text-sm') }}*/
/* 				            {% endfor %}*/
/* 				          </span>*/
/* 			          {% else %}*/
/* 			            --*/
/* 			          {% endif %}*/
/* 		          </td>*/
/* 		          <td>*/
/* 		            {{ admin_macro.user_link(askers[question.userId]) }}*/
/* 		          </td>*/
/* 		          <td>*/
/* 		          	{% if course %}*/
/* 				          <button class="btn btn-default btn-sm remind-teachers" data-url="{{ path('admin_question_remind_teachers', {courseId:question.courseId, questionId:question.id}) }}">提醒教师</button>*/
/* 			          {% endif %}*/
/* 			        </td>*/
/* 		        </tr>*/
/* 	        {% endfor %}*/
/* 	      </tbody>*/
/*         </table>*/
/*     {% else %}*/
/*       <div class="empty">暂无最新未回复问答</div>*/
/*     {% endif %}*/
/* 	</div>*/
/* </div>*/
