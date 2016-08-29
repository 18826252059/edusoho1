<?php

/* TopxiaWebBundle:Question:question-choice-options-result.html.twig */
class __TwigTemplate_9e0363d79adc201e4e641fbeff8ffcf45881d5965ae870e244a13a55fd1e1811 extends Twig_Template
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
        echo "<ul class=\"question-choices\">
 ";
        // line 2
        $context["rightAnswerIndex"] = $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "answer", array());
        // line 3
        echo "
  ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "metas", array()), "choices", array()));
        foreach ($context['_seq'] as $context["key"] => $context["choice"]) {
            // line 5
            echo "    ";
            $context["choiceIndex"] = $this->env->getExtension('topxia_web_twig')->chrFilter((65 + $context["key"]));
            // line 6
            echo "    <li data-index=\"";
            echo twig_escape_filter($this->env, (isset($context["choiceIndex"]) ? $context["choiceIndex"] : null), "html", null, true);
            echo "\" data-for=\"question-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "id", array()), "html", null, true);
            echo "-input-";
            echo twig_escape_filter($this->env, (isset($context["choiceIndex"]) ? $context["choiceIndex"] : null), "html", null, true);
            echo "\">

      <div class=\"homwork-choice-index ";
            // line 8
            if (twig_in_filter($context["key"], (isset($context["rightAnswerIndex"]) ? $context["rightAnswerIndex"] : null))) {
                echo "question-text-success";
            }
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["choiceIndex"]) ? $context["choiceIndex"] : null), "html", null, true);
            echo ".</div>
      <div class=\"choice-body ";
            // line 9
            if (twig_in_filter($context["key"], (isset($context["rightAnswerIndex"]) ? $context["rightAnswerIndex"] : null))) {
                echo "question-text-success";
            }
            echo "\">";
            echo $this->env->getExtension('topxia_web_twig')->bbCode2HtmlFilter($context["choice"]);
            echo "</div>
    </li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Question:question-choice-options-result.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 12,  52 => 9,  44 => 8,  34 => 6,  31 => 5,  27 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }
}
/* <ul class="question-choices">*/
/*  {% set rightAnswerIndex = question.answer %}*/
/* */
/*   {% for key, choice in question.metas.choices %}*/
/*     {% set choiceIndex = (65+key)|chr %}*/
/*     <li data-index="{{ choiceIndex }}" data-for="question-{{ question.id }}-input-{{ choiceIndex }}">*/
/* */
/*       <div class="homwork-choice-index {% if key in  rightAnswerIndex %}question-text-success{% endif %}">{{ choiceIndex }}.</div>*/
/*       <div class="choice-body {% if key in  rightAnswerIndex %}question-text-success{% endif %}">{{ choice|bbCode2Html|raw }}</div>*/
/*     </li>*/
/*   {% endfor %}*/
/* </ul>*/
