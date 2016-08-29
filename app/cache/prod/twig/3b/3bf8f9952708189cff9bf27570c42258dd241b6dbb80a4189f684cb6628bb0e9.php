<?php

/* TopxiaWebBundle:Question:question-choice-options.html.twig */
class __TwigTemplate_0527f89743ff407561fe0dc221a4470d99b7b931d1c9a34801753a9acc8a06ae extends Twig_Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "metas", array()), "choices", array()));
        foreach ($context['_seq'] as $context["key"] => $context["choice"]) {
            // line 3
            echo "    ";
            $context["choiceIndex"] = $this->env->getExtension('topxia_web_twig')->chrFilter((65 + $context["key"]));
            // line 4
            echo "    <li data-index=\"";
            echo twig_escape_filter($this->env, (isset($context["choiceIndex"]) ? $context["choiceIndex"] : null), "html", null, true);
            echo "\" data-for=\"question-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "id", array()), "html", null, true);
            echo "-input-";
            echo twig_escape_filter($this->env, (isset($context["choiceIndex"]) ? $context["choiceIndex"] : null), "html", null, true);
            echo "\">
      <div class=\"choice-index\">";
            // line 5
            echo twig_escape_filter($this->env, (isset($context["choiceIndex"]) ? $context["choiceIndex"] : null), "html", null, true);
            echo ".</div>
      <div class=\"choice-body editor-text\">";
            // line 6
            echo $this->env->getExtension('topxia_web_twig')->bbCode2HtmlFilter($context["choice"]);
            echo "</div>
    </li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Question:question-choice-options.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 9,  42 => 6,  38 => 5,  29 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
/* <ul class="question-choices">*/
/*   {% for key, choice in question.metas.choices %}*/
/*     {% set choiceIndex = (65+key)|chr %}*/
/*     <li data-index="{{ choiceIndex }}" data-for="question-{{ question.id }}-input-{{ choiceIndex }}">*/
/*       <div class="choice-index">{{ choiceIndex }}.</div>*/
/*       <div class="choice-body editor-text">{{ choice|bbCode2Html|raw }}</div>*/
/*     </li>*/
/*   {% endfor %}*/
/* </ul>*/
