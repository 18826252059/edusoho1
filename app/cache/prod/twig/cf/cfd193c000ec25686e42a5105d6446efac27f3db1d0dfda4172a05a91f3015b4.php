<?php

/* TopxiaWebBundle:MyQuiz:list-teacher-test.html.twig */
class __TwigTemplate_8df2bf2d414c399aee761e4f9c5327905925a4824856d5ed5dcc00a65cf61644 extends Twig_Template
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
        echo "
";
        // line 2
        if ((isset($context["paperResults"]) ? $context["paperResults"] : null)) {
            // line 3
            echo "
<table class=\"table table-striped table-hover\">
\t<tbody>
\t\t";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["paperResults"]) ? $context["paperResults"] : null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["paperResult"]) {
                // line 7
                echo "\t\t\t";
                $context["testpaper"] = $this->getAttribute((isset($context["testpapers"]) ? $context["testpapers"] : null), $this->getAttribute($context["paperResult"], "testId", array()), array(), "array");
                // line 8
                echo "\t\t\t";
                $context["student"] = $this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["paperResult"], "userId", array()), array(), "array");
                // line 9
                echo "\t\t\t";
                if (((array_key_exists("courses", $context)) ? (_twig_default_filter((isset($context["courses"]) ? $context["courses"] : null), null)) : (null))) {
                    // line 10
                    echo "\t\t\t\t";
                    $context["course"] = $this->getAttribute((isset($context["courses"]) ? $context["courses"] : null), $this->env->getExtension('topxia_web_twig')->getCourseidFilter($this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "target", array())), array(), "array");
                    // line 11
                    echo "\t\t\t";
                }
                // line 12
                echo "\t\t\t";
                if (((array_key_exists("teachers", $context)) ? (_twig_default_filter((isset($context["teachers"]) ? $context["teachers"] : null), null)) : (null))) {
                    // line 13
                    echo "\t\t\t\t";
                    $context["teacher"] = (($this->getAttribute((isset($context["teachers"]) ? $context["teachers"] : null), $this->getAttribute($context["paperResult"], "checkTeacherId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["teachers"]) ? $context["teachers"] : null), $this->getAttribute($context["paperResult"], "checkTeacherId", array()), array(), "array"), null)) : (null));
                    // line 14
                    echo "\t\t\t";
                }
                // line 15
                echo "\t\t\t\t";
                $this->loadTemplate("TopxiaWebBundle:MyQuiz:list-teacher-test-tr.html.twig", "TopxiaWebBundle:MyQuiz:list-teacher-test.html.twig", 15)->display($context);
                // line 16
                echo "
\t\t";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['paperResult'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "\t</tbody>
</table>
";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
            echo "

";
        } else {
            // line 23
            echo "  ";
            if (((isset($context["status"]) ? $context["status"] : null) == "reviewing")) {
                // line 24
                echo "    <div class=\"empty\">还没有等待批阅的试卷</div>
  ";
            } elseif ((            // line 25
(isset($context["status"]) ? $context["status"] : null) == "finished")) {
                // line 26
                echo "    <div class=\"empty\">还没有已经批阅的试卷</div>
  ";
            }
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:MyQuiz:list-teacher-test.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 26,  104 => 25,  101 => 24,  98 => 23,  92 => 20,  88 => 18,  73 => 16,  70 => 15,  67 => 14,  64 => 13,  61 => 12,  58 => 11,  55 => 10,  52 => 9,  49 => 8,  46 => 7,  29 => 6,  24 => 3,  22 => 2,  19 => 1,);
    }
}
/* */
/* {% if paperResults %}*/
/* */
/* <table class="table table-striped table-hover">*/
/* 	<tbody>*/
/* 		{% for paperResult in paperResults %}*/
/* 			{% set testpaper = testpapers[paperResult.testId] %}*/
/* 			{% set student = users[paperResult.userId] %}*/
/* 			{% if courses|default(null) %}*/
/* 				{% set course = courses[testpaper.target|get_course_id] %}*/
/* 			{% endif %}*/
/* 			{% if teachers|default(null) %}*/
/* 				{% set teacher = teachers[paperResult.checkTeacherId]|default(null) %}*/
/* 			{% endif %}*/
/* 				{% include 'TopxiaWebBundle:MyQuiz:list-teacher-test-tr.html.twig' %}*/
/* */
/* 		{% endfor %}*/
/* 	</tbody>*/
/* </table>*/
/* {{ web_macro.paginator(paginator) }}*/
/* */
/* {% else %}*/
/*   {% if status == 'reviewing' %}*/
/*     <div class="empty">还没有等待批阅的试卷</div>*/
/*   {% elseif status == 'finished' %}*/
/*     <div class="empty">还没有已经批阅的试卷</div>*/
/*   {% endif %}*/
/* {% endif %}*/
