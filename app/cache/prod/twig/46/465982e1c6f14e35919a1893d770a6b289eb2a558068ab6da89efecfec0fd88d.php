<?php

/* TopxiaWebBundle:Question:question-determine-doing.html.twig */
class __TwigTemplate_0e00ba36a20a81e0457d56a363cf511f8075a0d4bb2aa342b891004ec43d1631 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:Question:question-base-layout.html.twig", "TopxiaWebBundle:Question:question-determine-doing.html.twig", 1);
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
        if ((($this->getAttribute((isset($context["itemResult"]) ? $context["itemResult"] : null), "answer", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["itemResult"]) ? $context["itemResult"] : null), "answer", array()), null)) : (null))) {
            // line 10
            echo "  ";
            $context["answerChoiceIndex"] = $this->getAttribute((isset($context["itemResult"]) ? $context["itemResult"] : null), "answer", array());
        }
        // line 12
        echo "
  <div class=\"question-choices-inputs\">
    <label class=\"radio-inline\"><input type=\"radio\" data-type=\"determine\" name=\"answer[";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "id", array()), "html", null, true);
        echo "]\" value=\"1\" ";
        if (twig_in_filter(1, ((array_key_exists("answerChoiceIndex", $context)) ? (_twig_default_filter((isset($context["answerChoiceIndex"]) ? $context["answerChoiceIndex"] : null), null)) : (null)))) {
            echo "checked";
        }
        echo "> 正确</label>
    <label class=\"radio-inline\"><input type=\"radio\" data-type=\"determine\" name=\"answer[";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "id", array()), "html", null, true);
        echo "]\" value=\"0\" ";
        if (twig_in_filter(0, ((array_key_exists("answerChoiceIndex", $context)) ? (_twig_default_filter((isset($context["answerChoiceIndex"]) ? $context["answerChoiceIndex"] : null), null)) : (null)))) {
            echo "checked";
        }
        echo ">错误</label>
  </div>

";
    }

    // line 20
    public function block_footer($context, array $blocks = array())
    {
        // line 21
        echo "
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Question:question-determine-doing.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 21,  76 => 20,  64 => 15,  56 => 14,  52 => 12,  48 => 10,  46 => 9,  43 => 8,  40 => 7,  33 => 4,  30 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle:Question:question-base-layout.html.twig' %}*/
/* */
/* {% block heading %}*/
/*   {{ question.stem|bbCode2Html|raw }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/* {% if itemResult.answer|default(null) %}*/
/*   {% set answerChoiceIndex = itemResult.answer %}*/
/* {% endif %}*/
/* */
/*   <div class="question-choices-inputs">*/
/*     <label class="radio-inline"><input type="radio" data-type="determine" name="answer[{{ question.id }}]" value="1" {% if 1 in  answerChoiceIndex|default(null) %}checked{% endif %}> 正确</label>*/
/*     <label class="radio-inline"><input type="radio" data-type="determine" name="answer[{{ question.id }}]" value="0" {% if 0 in answerChoiceIndex|default(null) %}checked{% endif %}>错误</label>*/
/*   </div>*/
/* */
/* {% endblock %}*/
/* */
/* {% block footer %}*/
/* */
/* {% endblock %}*/
