<?php

/* TopxiaWebBundle:MyQuiz:my-favorite-detail.html.twig */
class __TwigTemplate_d5a066f0cfd079e6ebca5844f868ed26442c16bc33c116e9f5095f64e0bb6c18 extends Twig_Template
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
        echo "<div class=\"clearfix\"></div>
<br>
";
        // line 3
        if (($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "type", array()) == "fill")) {
            // line 4
            echo "<div class=\"panel panel-default\" style=\"display:none\">

\t<div class=\"panel-body\">
\t\t正确答案：";
            // line 7
            echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "answer", array()), ", "), "html", null, true);
            echo "
\t\t<br>
\t\t";
            // line 9
            if (($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "analysis", array()) != "")) {
                echo "解析：";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "analysis", array()), "html", null, true);
            }
            // line 10
            echo "\t</div>

</div>
";
        }
        // line 14
        echo "
";
        // line 15
        if (twig_in_filter($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "type", array()), array(0 => "single_choice", 1 => "choice"))) {
            // line 16
            echo "
<div class=\"panel panel-default\" style=\"display:none\">
\t";
            // line 18
            $context["keys"] = array();
            // line 19
            echo "\t";
            $context["keys_answer"] = array();
            // line 20
            echo "\t<div class=\"panel-body\">
\t\t<ul class=\"list-unstyled\">
\t\t\t";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "choices", array()));
            foreach ($context['_seq'] as $context["key"] => $context["choice"]) {
                // line 23
                echo "\t\t\t\t<li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["choice"], "choiceIndex", array()), "html", null, true);
                echo ". ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["choice"], "content", array()), "html", null, true);
                echo "</li>

\t\t\t\t";
                // line 25
                if (twig_in_filter($context["key"], $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "answer", array()))) {
                    // line 26
                    echo "\t\t\t\t\t";
                    $context["keys"] = twig_array_merge((isset($context["keys"]) ? $context["keys"] : null), array(0 => $this->getAttribute($context["choice"], "choiceIndex", array())));
                    // line 27
                    echo "\t\t\t\t";
                }
                // line 28
                echo "\t\t\t\t";
                if (twig_in_filter($context["key"], (($this->getAttribute($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "testResult", array(), "any", false, true), "answer", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "testResult", array(), "any", false, true), "answer", array()), array())) : (array())))) {
                    // line 29
                    echo "\t\t\t\t\t";
                    $context["keys_answer"] = twig_array_merge((isset($context["keys_answer"]) ? $context["keys_answer"] : null), array(0 => $this->getAttribute($context["choice"], "choiceIndex", array())));
                    // line 30
                    echo "\t\t\t\t";
                }
                // line 31
                echo "
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['choice'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "\t\t</ul>

\t\t正确答案：";
            // line 35
            echo twig_escape_filter($this->env, twig_join_filter((isset($context["keys"]) ? $context["keys"] : null), ","), "html", null, true);
            echo "
\t\t<br>
\t\t";
            // line 37
            if (($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "analysis", array()) != "")) {
                echo "解析：";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "analysis", array()), "html", null, true);
            }
            // line 38
            echo "\t</div>

</div>

";
        }
        // line 43
        echo "
";
        // line 44
        if (($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "type", array()) == "determine")) {
            // line 45
            echo "<div class=\"panel panel-default\" style=\"display:none\">

\t<div class=\"panel-body\">
\t\t正确答案：";
            // line 48
            if (($this->getAttribute($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "answer", array()), 0, array(), "array") == 1)) {
                echo " 正确 ";
            } else {
                echo " 错误 ";
            }
            // line 49
            echo "\t\t<br>
\t\t";
            // line 50
            if (($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "analysis", array()) != "")) {
                echo "解析：";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "analysis", array()), "html", null, true);
            }
            // line 51
            echo "\t</div>

</div>
";
        }
        // line 55
        echo "
";
        // line 56
        if (($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "type", array()) == "essay")) {
            // line 57
            echo "<div class=\"panel panel-default\" style=\"display:none\">

\t<div class=\"panel-body\">
\t\t正确答案：";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "answer", array()), 0, array(), "array"), "html", null, true);
            echo "
\t\t<br>
\t\t";
            // line 62
            if (($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "analysis", array()) != "")) {
                echo "解析：";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "analysis", array()), "html", null, true);
            }
            // line 63
            echo "\t</div>

</div>
";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:MyQuiz:my-favorite-detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 63,  166 => 62,  161 => 60,  156 => 57,  154 => 56,  151 => 55,  145 => 51,  140 => 50,  137 => 49,  131 => 48,  126 => 45,  124 => 44,  121 => 43,  114 => 38,  109 => 37,  104 => 35,  100 => 33,  93 => 31,  90 => 30,  87 => 29,  84 => 28,  81 => 27,  78 => 26,  76 => 25,  68 => 23,  64 => 22,  60 => 20,  57 => 19,  55 => 18,  51 => 16,  49 => 15,  46 => 14,  40 => 10,  35 => 9,  30 => 7,  25 => 4,  23 => 3,  19 => 1,);
    }
}
/* <div class="clearfix"></div>*/
/* <br>*/
/* {% if question.type == 'fill' %}*/
/* <div class="panel panel-default" style="display:none">*/
/* */
/* 	<div class="panel-body">*/
/* 		正确答案：{{ question.answer|join(', ') }}*/
/* 		<br>*/
/* 		{% if question.analysis != '' %}解析：{{ question.analysis }}{% endif %}*/
/* 	</div>*/
/* */
/* </div>*/
/* {% endif %}*/
/* */
/* {% if question.type in ['single_choice', 'choice'] %}*/
/* */
/* <div class="panel panel-default" style="display:none">*/
/* 	{% set keys = [] %}*/
/* 	{% set keys_answer = [] %}*/
/* 	<div class="panel-body">*/
/* 		<ul class="list-unstyled">*/
/* 			{% for key, choice in question.choices %}*/
/* 				<li>{{ choice.choiceIndex }}. {{ choice.content }}</li>*/
/* */
/* 				{% if key in question.answer %}*/
/* 					{% set keys = keys|merge([choice.choiceIndex]) %}*/
/* 				{% endif  %}*/
/* 				{% if key in question.testResult.answer|default([]) %}*/
/* 					{% set keys_answer = keys_answer|merge([choice.choiceIndex]) %}*/
/* 				{% endif %}*/
/* */
/* 			{% endfor %}*/
/* 		</ul>*/
/* */
/* 		正确答案：{{ keys|join(',') }}*/
/* 		<br>*/
/* 		{% if question.analysis != '' %}解析：{{ question.analysis }}{% endif %}*/
/* 	</div>*/
/* */
/* </div>*/
/* */
/* {% endif %}*/
/* */
/* {% if question.type == 'determine' %}*/
/* <div class="panel panel-default" style="display:none">*/
/* */
/* 	<div class="panel-body">*/
/* 		正确答案：{% if question.answer[0] == 1 %} 正确 {% else %} 错误 {% endif %}*/
/* 		<br>*/
/* 		{% if question.analysis != '' %}解析：{{ question.analysis }}{% endif %}*/
/* 	</div>*/
/* */
/* </div>*/
/* {% endif %}*/
/* */
/* {% if question.type == 'essay' %}*/
/* <div class="panel panel-default" style="display:none">*/
/* */
/* 	<div class="panel-body">*/
/* 		正确答案：{{ question.answer[0]}}*/
/* 		<br>*/
/* 		{% if question.analysis != '' %}解析：{{ question.analysis }}{% endif %}*/
/* 	</div>*/
/* */
/* </div>*/
/* {% endif %}*/
