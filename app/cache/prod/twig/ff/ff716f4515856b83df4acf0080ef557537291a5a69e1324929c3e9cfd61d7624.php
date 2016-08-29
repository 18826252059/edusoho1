<?php

/* TopxiaWebBundle:Question:question-uncertain_choice-doing.html.twig */
class __TwigTemplate_d3ef78db7fa90200f1da2310dae93a2eb3ea4c013c2e7db561bf018a88b6f948 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:Question:question-base-layout.html.twig", "TopxiaWebBundle:Question:question-uncertain_choice-doing.html.twig", 1);
        $this->blocks = array(
            'heading' => array($this, 'block_heading'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:Question:question-base-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_heading($context, array $blocks = array())
    {
        // line 4
        echo "  （不定项）";
        echo $this->env->getExtension('topxia_web_twig')->bbCode2HtmlFilter($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "stem", array()));
        echo "
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "
 ";
        // line 9
        $this->loadTemplate("TopxiaWebBundle:Question:question-choice-options.html.twig", "TopxiaWebBundle:Question:question-uncertain_choice-doing.html.twig", 9)->display($context);
        // line 10
        echo "
";
        // line 11
        if ((($this->getAttribute((isset($context["itemResult"]) ? $context["itemResult"] : null), "answer", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["itemResult"]) ? $context["itemResult"] : null), "answer", array()), null)) : (null))) {
            // line 12
            echo "  ";
            $context["answerChoiceIndex"] = $this->getAttribute((isset($context["itemResult"]) ? $context["itemResult"] : null), "answer", array());
        }
        // line 14
        echo "
<div class=\"question-choices-inputs\">
\t";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "metas", array()), "choices", array()));
        foreach ($context['_seq'] as $context["key"] => $context["choice"]) {
            // line 17
            echo "\t\t";
            $context["choiceIndex"] = $this->env->getExtension('topxia_web_twig')->chrFilter((65 + $context["key"]));
            // line 18
            echo "\t\t  <label class=\"checkbox-inline\">
\t\t    <input id=\"question-";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "id", array()), "html", null, true);
            echo "-input-";
            echo twig_escape_filter($this->env, (isset($context["choiceIndex"]) ? $context["choiceIndex"] : null), "html", null, true);
            echo "\" type=\"checkbox\" name=\"answer[";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "id", array()), "html", null, true);
            echo "][]\" value=\"";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\"  ";
            if (twig_in_filter($context["key"], ((array_key_exists("answerChoiceIndex", $context)) ? (_twig_default_filter((isset($context["answerChoiceIndex"]) ? $context["answerChoiceIndex"] : null), null)) : (null)))) {
                echo "checked";
            }
            echo "> ";
            echo twig_escape_filter($this->env, (isset($context["choiceIndex"]) ? $context["choiceIndex"] : null), "html", null, true);
            echo "
\t\t  </label>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "</div>

";
    }

    // line 26
    public function block_footer($context, array $blocks = array())
    {
        // line 27
        echo "
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Question:question-uncertain_choice-doing.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 27,  98 => 26,  92 => 22,  71 => 19,  68 => 18,  65 => 17,  61 => 16,  57 => 14,  53 => 12,  51 => 11,  48 => 10,  46 => 9,  43 => 8,  40 => 7,  33 => 4,  30 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle:Question:question-base-layout.html.twig' %}*/
/* */
/* {% block heading %}*/
/*   （不定项）{{ question.stem|bbCode2Html|raw }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/*  {% include 'TopxiaWebBundle:Question:question-choice-options.html.twig' %}*/
/* */
/* {% if itemResult.answer|default(null) %}*/
/*   {% set answerChoiceIndex = itemResult.answer %}*/
/* {% endif %}*/
/* */
/* <div class="question-choices-inputs">*/
/* 	{% for key, choice in question.metas.choices %}*/
/* 		{% set choiceIndex = (65+key)|chr %}*/
/* 		  <label class="checkbox-inline">*/
/* 		    <input id="question-{{ question.id }}-input-{{ choiceIndex }}" type="checkbox" name="answer[{{ question.id }}][]" value="{{ key }}"  {% if key in answerChoiceIndex|default(null) %}checked{% endif %}> {{ choiceIndex }}*/
/* 		  </label>*/
/* 	{% endfor %}*/
/* </div>*/
/* */
/* {% endblock %}*/
/* */
/* {% block footer %}*/
/* */
/* {% endblock %}*/
