<?php

/* TopxiaWebBundle:Question:question-choice-doing.html.twig */
class __TwigTemplate_4d7f8de82806e91b387a0fef3f120bd26f287a3f31618b4807d7ebb8d6358d1b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:Question:question-base-layout.html.twig", "TopxiaWebBundle:Question:question-choice-doing.html.twig", 1);
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
        echo "  ";
        if (($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "type", array()) == "single_choice")) {
            echo "（单选）
  ";
        } elseif (($this->getAttribute(        // line 5
(isset($context["question"]) ? $context["question"] : null), "type", array()) == "choice")) {
            echo "（多选）
  ";
        }
        // line 7
        echo $this->env->getExtension('topxia_web_twig')->bbCode2HtmlFilter($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "stem", array()));
        echo "
";
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        // line 11
        echo "
  ";
        // line 12
        $this->loadTemplate("TopxiaWebBundle:Question:question-choice-options.html.twig", "TopxiaWebBundle:Question:question-choice-doing.html.twig", 12)->display($context);
        // line 13
        echo "
";
        // line 14
        if ((($this->getAttribute((isset($context["itemResult"]) ? $context["itemResult"] : null), "answer", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["itemResult"]) ? $context["itemResult"] : null), "answer", array()), null)) : (null))) {
            // line 15
            echo "  ";
            $context["answerChoiceIndex"] = $this->getAttribute((isset($context["itemResult"]) ? $context["itemResult"] : null), "answer", array());
        }
        // line 17
        echo "  <div class=\"question-choices-inputs\">
    ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "metas", array()), "choices", array()));
        foreach ($context['_seq'] as $context["key"] => $context["choice"]) {
            // line 19
            echo "      ";
            $context["choiceIndex"] = $this->env->getExtension('topxia_web_twig')->chrFilter((65 + $context["key"]));
            // line 20
            echo "      <label class=\"checkbox-inline\">
        <input id=\"question-";
            // line 21
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
      </label>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "  </div>

";
    }

    // line 28
    public function block_footer($context, array $blocks = array())
    {
        // line 29
        echo "
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Question:question-choice-doing.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 29,  106 => 28,  100 => 24,  79 => 21,  76 => 20,  73 => 19,  69 => 18,  66 => 17,  62 => 15,  60 => 14,  57 => 13,  55 => 12,  52 => 11,  49 => 10,  43 => 7,  38 => 5,  33 => 4,  30 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle:Question:question-base-layout.html.twig' %}*/
/* */
/* {% block heading %}*/
/*   {% if question.type == 'single_choice' %}（单选）*/
/*   {% elseif question.type == 'choice' %}（多选）*/
/*   {% endif %}*/
/* {{ question.stem|bbCode2Html|raw }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/*   {% include 'TopxiaWebBundle:Question:question-choice-options.html.twig' %}*/
/* */
/* {% if itemResult.answer|default(null) %}*/
/*   {% set answerChoiceIndex = itemResult.answer %}*/
/* {% endif %}*/
/*   <div class="question-choices-inputs">*/
/*     {% for key, choice in question.metas.choices %}*/
/*       {% set choiceIndex = (65+key)|chr %}*/
/*       <label class="checkbox-inline">*/
/*         <input id="question-{{ question.id }}-input-{{ choiceIndex }}" type="checkbox" name="answer[{{ question.id }}][]" value="{{ key }}"  {% if key in answerChoiceIndex|default(null) %}checked{% endif %}> {{ choiceIndex }}*/
/*       </label>*/
/*     {% endfor %}*/
/*   </div>*/
/* */
/* {% endblock %}*/
/* */
/* {% block footer %}*/
/* */
/* {% endblock %}*/
