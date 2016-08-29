<?php

/* TopxiaWebBundle:QuizQuestionTest:do-test-material.html.twig */
class __TwigTemplate_866987cb4ad65ff18a0743c59ae06ac85c5bd6e32833dfa885edfdb00b37ab4f extends Twig_Template
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
        echo "<div class=\"material\">
<div class=\"well testpaper-question-stem-material\">";
        // line 2
        echo $this->env->getExtension('topxia_web_twig')->bbCode2HtmlFilter($this->env->getExtension('topxia_web_twig')->fillQuestionStemHtmlFilter($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "question", array()), "stem", array())));
        echo "</div>
";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((($this->getAttribute($context["item"], "items", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "items", array()), array())) : (array())));
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 4
            echo "
\t";
            // line 5
            if (twig_in_filter($this->getAttribute($context["item"], "questionType", array()), array(0 => "single_choice", 1 => "choice", 2 => "uncertain_choice"))) {
                // line 6
                echo "
\t\t";
                // line 7
                $this->loadTemplate("TopxiaWebBundle:QuizQuestionTest:do-test-choice.html.twig", "TopxiaWebBundle:QuizQuestionTest:do-test-material.html.twig", 7)->display($context);
                // line 8
                echo "
\t";
            }
            // line 10
            echo "
\t";
            // line 11
            if (($this->getAttribute($context["item"], "questionType", array()) == "determine")) {
                // line 12
                echo "
\t\t";
                // line 13
                $this->loadTemplate("TopxiaWebBundle:QuizQuestionTest:do-test-determine.html.twig", "TopxiaWebBundle:QuizQuestionTest:do-test-material.html.twig", 13)->display($context);
                // line 14
                echo "
\t";
            }
            // line 16
            echo "
\t";
            // line 17
            if (($this->getAttribute($context["item"], "questionType", array()) == "fill")) {
                // line 18
                echo "
\t\t";
                // line 19
                $this->loadTemplate("TopxiaWebBundle:QuizQuestionTest:do-test-fill.html.twig", "TopxiaWebBundle:QuizQuestionTest:do-test-material.html.twig", 19)->display($context);
                // line 20
                echo "
\t";
            }
            // line 22
            echo "
\t";
            // line 23
            if (($this->getAttribute($context["item"], "questionType", array()) == "essay")) {
                // line 24
                echo "
\t\t";
                // line 25
                $this->loadTemplate("TopxiaWebBundle:QuizQuestionTest:do-test-essay.html.twig", "TopxiaWebBundle:QuizQuestionTest:do-test-material.html.twig", 25)->display($context);
                // line 26
                echo "
\t";
            }
            // line 28
            echo "
";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:QuizQuestionTest:do-test-material.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 30,  99 => 28,  95 => 26,  93 => 25,  90 => 24,  88 => 23,  85 => 22,  81 => 20,  79 => 19,  76 => 18,  74 => 17,  71 => 16,  67 => 14,  65 => 13,  62 => 12,  60 => 11,  57 => 10,  53 => 8,  51 => 7,  48 => 6,  46 => 5,  43 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
/* <div class="material">*/
/* <div class="well testpaper-question-stem-material">{{ item.question.stem|fill_question_stem_html|bbCode2Html|raw }}</div>*/
/* {% for item in item.items|default([]) %}*/
/* */
/* 	{% if item.questionType in ['single_choice', 'choice', 'uncertain_choice'] %}*/
/* */
/* 		{% include 'TopxiaWebBundle:QuizQuestionTest:do-test-choice.html.twig' %}*/
/* */
/* 	{% endif %}*/
/* */
/* 	{% if item.questionType == 'determine' %}*/
/* */
/* 		{% include 'TopxiaWebBundle:QuizQuestionTest:do-test-determine.html.twig' %}*/
/* */
/* 	{% endif %}*/
/* */
/* 	{% if item.questionType == 'fill' %}*/
/* */
/* 		{% include 'TopxiaWebBundle:QuizQuestionTest:do-test-fill.html.twig' %}*/
/* */
/* 	{% endif %}*/
/* */
/* 	{% if item.questionType == 'essay' %}*/
/* */
/* 		{% include 'TopxiaWebBundle:QuizQuestionTest:do-test-essay.html.twig' %}*/
/* */
/* 	{% endif %}*/
/* */
/* {% endfor %}*/
/* </div>*/
