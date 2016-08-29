<?php

/* TopxiaWebBundle:QuizQuestionTest:test-paper-card.html.twig */
class __TwigTemplate_733ced15d931e45065cac884b4a12db15d0f960f995dbb3be986b76fc818f908 extends Twig_Template
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
\t<div class=\"panel-heading\">
\t\t";
        // line 3
        if (((isset($context["limitTime"]) ? $context["limitTime"] : null) != 0)) {
            // line 4
            echo "\t\t\t<span class=\"";
            echo twig_escape_filter($this->env, ((array_key_exists("isPreview", $context)) ? (_twig_default_filter((isset($context["isPreview"]) ? $context["isPreview"] : null), "")) : ("")), "html", null, true);
            echo " testpaper-card-timer\" id=\"time_show\" data-time=\"";
            if (((($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "usedTime", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "usedTime", array()), 0)) : (0)) == 0)) {
                echo twig_escape_filter($this->env, (isset($context["limitTime"]) ? $context["limitTime"] : null), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, ((isset($context["limitTime"]) ? $context["limitTime"] : null) - $this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "usedTime", array())), "html", null, true);
            }
            echo "\">00:00</span>
\t\t\t";
            // line 5
            if (((($this->getAttribute((isset($context["target"]) ? $context["target"] : null), "testMode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["target"]) ? $context["target"] : null), "testMode", array()), "normal")) : ("normal")) != "realTime")) {
                // line 6
                echo "\t\t\t<button class=\"btn btn-sm btn-default pull-right\"";
                if (((isset($context["id"]) ? $context["id"] : null) > 0)) {
                    echo " id=\"suspend\" data-url=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_do_test_suspend", array("id" => (isset($context["id"]) ? $context["id"] : null))), "html", null, true);
                    echo "\" data-goto=\"";
                    echo $this->env->getExtension('routing')->getPath("my_quiz");
                    echo "\"";
                }
                echo ">下次再做</button>
\t\t\t<button id=\"pause\" class=\"btn btn-sm btn-default pull-right\"";
                // line 7
                if (((isset($context["id"]) ? $context["id"] : null) > 0)) {
                    echo " data-toggle=\"modal\" data-backdrop=\"static\" data-target=\"#modal\" data-url=\"";
                    echo $this->env->getExtension('routing')->getPath("course_manage_do_test_pause");
                    echo "\"";
                }
                echo ">暂停</button>
\t\t    ";
            }
            // line 9
            echo "\t\t";
        } else {
            // line 10
            echo "\t\t  <span class=\"testpaper-card-timer\"><small class=\"text-muted\" style=\"font-size:14px;\">时间不限</small></span>
\t\t\t<button class=\"btn btn-sm btn-default pull-right\"";
            // line 11
            if (((isset($context["id"]) ? $context["id"] : null) > 0)) {
                echo " id=\"suspend\" data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_do_test_suspend", array("id" => (isset($context["id"]) ? $context["id"] : null))), "html", null, true);
                echo "\" data-goto=\"";
                echo $this->env->getExtension('routing')->getPath("my_quiz");
                echo "\"";
            }
            echo ">下次再做</button>
\t\t";
        }
        // line 13
        echo "\t</div>
\t<div class=\"panel-body\">

\t\t";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["paper"]) ? $context["paper"] : null), "metas", array()), "question_type_seq", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 17
            echo "
\t\t\t";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["items"]) ? $context["items"] : null), $context["type"], array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 19
                echo "\t\t\t\t";
                if (($this->getAttribute($context["item"], "questionType", array()) != "material")) {
                    // line 20
                    echo "\t\t\t\t\t<a href=\"javascript:;\" data-anchor=\"#question";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "questionId", array()), "html", null, true);
                    echo "\" class=\"btn btn-default btn-index pull-left ";
                    if ((($this->getAttribute($this->getAttribute($context["item"], "question", array(), "any", false, true), "testResult", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($context["item"], "question", array(), "any", false, true), "testResult", array()), null)) : (null))) {
                        echo "active";
                    }
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "seq", array()), "html", null, true);
                    echo "</a>
\t\t\t\t";
                } else {
                    // line 22
                    echo "\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((($this->getAttribute($context["item"], "items", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "items", array()), array())) : (array())));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 23
                        echo "\t\t\t\t\t\t<a href=\"javascript:;\" data-anchor=\"#question";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "questionId", array()), "html", null, true);
                        echo "\" class=\"btn btn-default btn-index pull-left ";
                        if ((($this->getAttribute($this->getAttribute($context["item"], "question", array(), "any", false, true), "testResult", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($context["item"], "question", array(), "any", false, true), "testResult", array()), null)) : (null))) {
                            echo "active";
                        }
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "seq", array()), "html", null, true);
                        echo "</a>
\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 25
                    echo "\t\t\t\t";
                }
                // line 26
                echo "\t\t\t\t
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "
\t\t\t<div class=\"clearfix mtm mbm\"></div>

\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "
\t</div>
\t<div class=\"panel-footer\">
\t\t";
        // line 35
        if (((isset($context["id"]) ? $context["id"] : null) > 0)) {
            // line 36
            echo "\t\t<button class=\"btn btn-success btn-block do-test\" id=\"finishPaper\" data-ajax=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_submit_test", array("id" => (isset($context["id"]) ? $context["id"] : null))), "html", null, true);
            echo "\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_finish_test", array("id" => (isset($context["id"]) ? $context["id"] : null))), "html", null, true);
            echo "\" data-goto=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_test_results", array("id" => (isset($context["id"]) ? $context["id"] : null))), "html", null, true);
            echo "\">我要交卷</button>
\t\t";
        } else {
            // line 38
            echo "\t\t<button class=\"btn btn-success btn-block\" disabled=\"disabled\">我要交卷</button>
\t\t";
        }
        // line 40
        echo "\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:QuizQuestionTest:test-paper-card.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 40,  162 => 38,  152 => 36,  150 => 35,  145 => 32,  136 => 28,  129 => 26,  126 => 25,  111 => 23,  106 => 22,  94 => 20,  91 => 19,  87 => 18,  84 => 17,  80 => 16,  75 => 13,  64 => 11,  61 => 10,  58 => 9,  49 => 7,  38 => 6,  36 => 5,  25 => 4,  23 => 3,  19 => 1,);
    }
}
/* <div class="panel panel-default">*/
/* 	<div class="panel-heading">*/
/* 		{% if limitTime != 0 %}*/
/* 			<span class="{{ isPreview|default('') }} testpaper-card-timer" id="time_show" data-time="{% if paperResult.usedTime|default(0) == 0 %}{{ limitTime }}{% else %}{{ limitTime - paperResult.usedTime }}{% endif %}">00:00</span>*/
/* 			{% if target.testMode|default('normal') != 'realTime' %}*/
/* 			<button class="btn btn-sm btn-default pull-right"{% if id > 0 %} id="suspend" data-url="{{ path('course_manage_do_test_suspend', {id:id}) }}" data-goto="{{ path('my_quiz') }}"{% endif %}>下次再做</button>*/
/* 			<button id="pause" class="btn btn-sm btn-default pull-right"{% if id > 0 %} data-toggle="modal" data-backdrop="static" data-target="#modal" data-url="{{ path('course_manage_do_test_pause') }}"{% endif %}>暂停</button>*/
/* 		    {% endif %}*/
/* 		{% else %}*/
/* 		  <span class="testpaper-card-timer"><small class="text-muted" style="font-size:14px;">时间不限</small></span>*/
/* 			<button class="btn btn-sm btn-default pull-right"{% if id > 0 %} id="suspend" data-url="{{ path('course_manage_do_test_suspend', {id:id}) }}" data-goto="{{ path('my_quiz') }}"{% endif %}>下次再做</button>*/
/* 		{% endif %}*/
/* 	</div>*/
/* 	<div class="panel-body">*/
/* */
/* 		{% for type in paper.metas.question_type_seq %}*/
/* */
/* 			{% for item in items[type] %}*/
/* 				{% if item.questionType != 'material' %}*/
/* 					<a href="javascript:;" data-anchor="#question{{ item.questionId }}" class="btn btn-default btn-index pull-left {% if item.question.testResult|default(null) %}active{% endif %}">{{ item.seq }}</a>*/
/* 				{% else %}*/
/* 					{% for item in item.items|default([]) %}*/
/* 						<a href="javascript:;" data-anchor="#question{{ item.questionId }}" class="btn btn-default btn-index pull-left {% if item.question.testResult|default(null) %}active{% endif %}">{{ item.seq }}</a>*/
/* 					{% endfor %}*/
/* 				{% endif %}*/
/* 				*/
/* 			{% endfor %}*/
/* */
/* 			<div class="clearfix mtm mbm"></div>*/
/* */
/* 		{% endfor %}*/
/* */
/* 	</div>*/
/* 	<div class="panel-footer">*/
/* 		{% if id > 0 %}*/
/* 		<button class="btn btn-success btn-block do-test" id="finishPaper" data-ajax="{{ path('course_manage_submit_test', { id: id }) }}" data-url="{{ path('course_manage_finish_test', { id: id }) }}" data-goto="{{ path('course_manage_test_results', { id: id }) }}">我要交卷</button>*/
/* 		{% else %}*/
/* 		<button class="btn btn-success btn-block" disabled="disabled">我要交卷</button>*/
/* 		{% endif %}*/
/* 	</div>*/
/* </div>*/
