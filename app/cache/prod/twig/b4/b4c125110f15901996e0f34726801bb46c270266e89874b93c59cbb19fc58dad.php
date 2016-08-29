<?php

/* TopxiaAdminBundle:Default:popular-courses-table.html.twig */
class __TwigTemplate_dda494ff16e21f18446215bafc24d20d3d0bbfe1314768e8eeba64259e4c6dbf extends Twig_Template
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
        if ((isset($context["sortedCourses"]) ? $context["sortedCourses"] : null)) {
            // line 2
            echo "\t<table class=\"table table-condensed table-striped table-hover\" style=\"word-break: break-all;\">
\t  <thead>
\t    <tr>
\t      <th>课程名称</th>
\t      <th>新增学生人数</th>
\t      <th>总学生人数</th>
\t      <th>新增收入</th>
\t    </tr>
\t  </thead>
\t\t<tbody>
\t\t\t";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["sortedCourses"]) ? $context["sortedCourses"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["sortedcourse"]) {
                // line 13
                echo "\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
                // line 15
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($context["sortedcourse"], "courseId", array()))), "html", null, true);
                echo "\" target=\"_blank\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["sortedcourse"], "title", array()), "html", null, true);
                echo "</a>
\t\t\t\t\t</td>
\t\t\t\t\t<td>";
                // line 17
                echo twig_escape_filter($this->env, $this->getAttribute($context["sortedcourse"], "addedStudentNum", array(), "array"), "html", null, true);
                echo " 人 </td>
\t\t\t\t\t<td>";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute($context["sortedcourse"], "studentNum", array(), "array"), "html", null, true);
                echo " 人</td>
\t\t\t\t\t<td class=\"money-text\">";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute($context["sortedcourse"], "addedMoney", array(), "array"), "html", null, true);
                echo " 元 </td>
\t\t\t\t</tr>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sortedcourse'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "\t\t</tbody>
\t</table>
";
        } else {
            // line 25
            echo "  <div class=\"empty\">暂无受欢迎课程</div>
";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Default:popular-courses-table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 25,  65 => 22,  56 => 19,  52 => 18,  48 => 17,  41 => 15,  37 => 13,  33 => 12,  21 => 2,  19 => 1,);
    }
}
/* {% if sortedCourses %}*/
/* 	<table class="table table-condensed table-striped table-hover" style="word-break: break-all;">*/
/* 	  <thead>*/
/* 	    <tr>*/
/* 	      <th>课程名称</th>*/
/* 	      <th>新增学生人数</th>*/
/* 	      <th>总学生人数</th>*/
/* 	      <th>新增收入</th>*/
/* 	    </tr>*/
/* 	  </thead>*/
/* 		<tbody>*/
/* 			{% for sortedcourse in sortedCourses %}*/
/* 				<tr>*/
/* 					<td>*/
/* 						<a href="{{ path('course_show', {id: sortedcourse.courseId}) }}" target="_blank">{{ sortedcourse.title }}</a>*/
/* 					</td>*/
/* 					<td>{{ sortedcourse['addedStudentNum'] }} 人 </td>*/
/* 					<td>{{ sortedcourse['studentNum'] }} 人</td>*/
/* 					<td class="money-text">{{sortedcourse['addedMoney'] }} 元 </td>*/
/* 				</tr>*/
/* 			{% endfor %}*/
/* 		</tbody>*/
/* 	</table>*/
/* {% else %}*/
/*   <div class="empty">暂无受欢迎课程</div>*/
/* {% endif %}*/
