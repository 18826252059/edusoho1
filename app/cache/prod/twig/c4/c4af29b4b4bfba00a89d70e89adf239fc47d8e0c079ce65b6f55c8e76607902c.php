<?php

/* TopxiaWebBundle:Question:question-essay-reviewing.html.twig */
class __TwigTemplate_a8a3a7aec59a21408a0a6bf1fb350bb6937b03d880a11903dfcc3ad0d58cc5f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:Question:question-base-layout.html.twig", "TopxiaWebBundle:Question:question-essay-reviewing.html.twig", 1);
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
        echo $this->env->getExtension('topxia_web_twig')->bbCode2HtmlFilter($this->env->getExtension('topxia_web_twig')->fillQuestionStemHtmlFilter($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "stem", array())));
        echo "
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "
<div class=\"question-eassy-form-control\">
\t<div class=\"question-eassy-answer\">
\t\t<strong>";
        // line 11
        if ($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name")) {
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), "学员"), "html", null, true);
        } else {
            echo "学员";
        }
        echo "回答:
\t\t</strong>
\t</div>
\t<p>";
        // line 14
        if ((($this->getAttribute($this->getAttribute((isset($context["itemResult"]) ? $context["itemResult"] : null), "answer", array(), "any", false, true), 0, array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["itemResult"]) ? $context["itemResult"] : null), "answer", array(), "any", false, true), 0, array(), "array"), null)) : (null))) {
            echo $this->getAttribute($this->getAttribute((isset($context["itemResult"]) ? $context["itemResult"] : null), "answer", array()), 0, array(), "array");
        } else {
            echo "未回答";
        }
        echo "</p>

</div>
<div class=\"question-eassy-form-control\">
\t ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "answer", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["rightAnswer"]) {
            // line 19
            echo "\t\t   <div class=\"question-eassy-rightanswer\"><strong>正确答案</strong></div> <p class=\"question-text-success\">";
            echo $this->env->getExtension('topxia_web_twig')->bbCode2HtmlFilter($context["rightAnswer"]);
            echo "</p>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rightAnswer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "
</div>
\t";
        // line 23
        $context["source"] = ((array_key_exists("source", $context)) ? (_twig_default_filter((isset($context["source"]) ? $context["source"] : null), "course")) : ("course"));
        // line 24
        echo "\t";
        if (((isset($context["source"]) ? $context["source"] : null) == "classroom")) {
            // line 25
            echo "  \t\t";
            $context["canHandle"] = $this->env->getExtension('topxia_web_twig')->isPermitRole((isset($context["targetId"]) ? $context["targetId"] : null), "Handle");
            echo "\t
\t";
        } else {
            // line 26
            echo " \t
  \t\t";
            // line 27
            $context["canHandle"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "isTeacher", array(), "method");
            // line 28
            echo "\t";
        }
        // line 29
        echo "\t";
        if ((isset($context["canHandle"]) ? $context["canHandle"] : null)) {
            // line 30
            echo "\t<div  class=\"question-eassy-form-control question-teacher-say-input\">
\t\t<div class=\"teacher-say-text\">评语:</div>
\t\t<textarea class=\"form-control  teacher-say\"  name=\"answer[";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "id", array()), "html", null, true);
            echo "]\"  data-type=\"essay\" data-question-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "id", array()), "html", null, true);
            echo "\"></textarea>
\t</div>
\t";
        } else {
            // line 35
            echo "\t\t<div class=\"question-score\">
\t\t\t<div class=\"question-result-title\">老师正在批阅！</div>
\t\t</div>
\t";
        }
    }

    // line 41
    public function block_footer($context, array $blocks = array())
    {
        // line 42
        echo "
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Question:question-essay-reviewing.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 42,  128 => 41,  120 => 35,  112 => 32,  108 => 30,  105 => 29,  102 => 28,  100 => 27,  97 => 26,  91 => 25,  88 => 24,  86 => 23,  82 => 21,  73 => 19,  69 => 18,  58 => 14,  48 => 11,  43 => 8,  40 => 7,  33 => 4,  30 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle:Question:question-base-layout.html.twig' %}*/
/* */
/* {% block heading %}*/
/*   {{ question.stem|fill_question_stem_html|bbCode2Html|raw }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/* <div class="question-eassy-form-control">*/
/* 	<div class="question-eassy-answer">*/
/* 		<strong>{% if setting('default.user_name') %}{{setting('default.user_name')|default('学员')}}{% else %}学员{% endif %}回答:*/
/* 		</strong>*/
/* 	</div>*/
/* 	<p>{% if itemResult.answer[0]|default(null) %}{{ itemResult.answer[0]|raw }}{% else %}未回答{% endif %}</p>*/
/* */
/* </div>*/
/* <div class="question-eassy-form-control">*/
/* 	 {% for rightAnswer in question.answer %}*/
/* 		   <div class="question-eassy-rightanswer"><strong>正确答案</strong></div> <p class="question-text-success">{{ rightAnswer|bbCode2Html|raw }}</p>*/
/* 	{% endfor %}*/
/* */
/* </div>*/
/* 	{% set source = source|default('course') %}*/
/* 	{% if (source == 'classroom') %}*/
/*   		{% set canHandle = classroom_permit(targetId, 'Handle') %}	*/
/* 	{% else %} 	*/
/*   		{% set canHandle = app.user.isTeacher() %}*/
/* 	{% endif %}*/
/* 	{% if canHandle %}*/
/* 	<div  class="question-eassy-form-control question-teacher-say-input">*/
/* 		<div class="teacher-say-text">评语:</div>*/
/* 		<textarea class="form-control  teacher-say"  name="answer[{{ question.id }}]"  data-type="essay" data-question-id="{{ question.id }}"></textarea>*/
/* 	</div>*/
/* 	{% else %}*/
/* 		<div class="question-score">*/
/* 			<div class="question-result-title">老师正在批阅！</div>*/
/* 		</div>*/
/* 	{% endif %}*/
/* {% endblock %}*/
/* */
/* {% block footer %}*/
/* */
/* {% endblock %}*/
