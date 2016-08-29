<?php

/* TopxiaWebBundle:Question:question-single_choice-doing.html.twig */
class __TwigTemplate_0e2570471cb2d4768426b1a4ed54a392a89ce4af7e2b76754b840a0d8fd5b4bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:Question:question-choice-doing.html.twig", "TopxiaWebBundle:Question:question-single_choice-doing.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:Question:question-choice-doing.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
  ";
        // line 5
        $this->loadTemplate("TopxiaWebBundle:Question:question-choice-options.html.twig", "TopxiaWebBundle:Question:question-single_choice-doing.html.twig", 5)->display($context);
        // line 6
        echo "
";
        // line 7
        if ((($this->getAttribute((isset($context["itemResult"]) ? $context["itemResult"] : null), "answer", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["itemResult"]) ? $context["itemResult"] : null), "answer", array()), null)) : (null))) {
            // line 8
            echo " ";
            $context["answerChoiceIndex"] = $this->env->getExtension('topxia_web_twig')->chrFilter((65 + $this->getAttribute($this->getAttribute((isset($context["itemResult"]) ? $context["itemResult"] : null), "answer", array()), 0, array(), "array")));
            // line 9
            echo " ";
        } else {
            // line 10
            echo " ";
            $context["answerChoiceIndex"] = "-1";
        }
        // line 12
        echo "
<div class=\"question-choices-inputs\">
    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "metas", array()), "choices", array()));
        foreach ($context['_seq'] as $context["key"] => $context["choice"]) {
            // line 15
            echo "      ";
            $context["choiceIndex"] = $this->env->getExtension('topxia_web_twig')->chrFilter((65 + $context["key"]));
            // line 16
            echo "      <label class=\"radio-inline\">
        <input id=\"question-";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "id", array()), "html", null, true);
            echo "-input-";
            echo twig_escape_filter($this->env, (isset($context["choiceIndex"]) ? $context["choiceIndex"] : null), "html", null, true);
            echo "\" type=\"radio\" data-type=\"choice\" name=\"answer[";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "id", array()), "html", null, true);
            echo "]\" value=\"";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\" ";
            if (((isset($context["choiceIndex"]) ? $context["choiceIndex"] : null) == (isset($context["answerChoiceIndex"]) ? $context["answerChoiceIndex"] : null))) {
                echo "checked";
            }
            echo "> ";
            echo twig_escape_filter($this->env, (isset($context["choiceIndex"]) ? $context["choiceIndex"] : null), "html", null, true);
            echo "
      </label>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "  </div>


";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Question:question-single_choice-doing.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 20,  65 => 17,  62 => 16,  59 => 15,  55 => 14,  51 => 12,  47 => 10,  44 => 9,  41 => 8,  39 => 7,  36 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle:Question:question-choice-doing.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/*   {% include 'TopxiaWebBundle:Question:question-choice-options.html.twig' %}*/
/* */
/* {% if itemResult.answer|default(null) %}*/
/*  {% set answerChoiceIndex = (65+itemResult.answer[0])|chr %}*/
/*  {% else %}*/
/*  {% set answerChoiceIndex = '-1' %}*/
/* {% endif %}*/
/* */
/* <div class="question-choices-inputs">*/
/*     {% for key, choice in question.metas.choices %}*/
/*       {% set choiceIndex = (65+key)|chr %}*/
/*       <label class="radio-inline">*/
/*         <input id="question-{{ question.id }}-input-{{ choiceIndex }}" type="radio" data-type="choice" name="answer[{{ question.id }}]" value="{{ key }}" {% if choiceIndex ==  answerChoiceIndex %}checked{% endif %}> {{ choiceIndex }}*/
/*       </label>*/
/*     {% endfor %}*/
/*   </div>*/
/* */
/* */
/* {% endblock %}*/
