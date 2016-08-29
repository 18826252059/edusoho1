<?php

/* TopxiaWebBundle:Question:question-essay-finished.html.twig */
class __TwigTemplate_bad6ca95842f85e17840999f888eb4cd3fbc1aa7915571a9923c9025573ffa12 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:Question:question-base-layout.html.twig", "TopxiaWebBundle:Question:question-essay-finished.html.twig", 1);
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
<div style=\"margin-bottom:18px\">
\t<div style=\"margin-bottom:5px\">
        <strong>";
        // line 11
        if ($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name")) {
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), "学员"), "html", null, true);
        } else {
            echo "学员";
        }
        echo "回答:
        </strong>
    </div>
\t<p class=\"\">";
        // line 14
        echo (($this->getAttribute($this->getAttribute((isset($context["itemResult"]) ? $context["itemResult"] : null), "answer", array(), "any", false, true), 0, array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["itemResult"]) ? $context["itemResult"] : null), "answer", array(), "any", false, true), 0, array(), "array"), "")) : (""));
        echo "</p>

</div>
<div style=\"margin-bottom:18px\">
 ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "answer", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["rightAnswer"]) {
            // line 19
            echo "\t   <div style=\"margin-bottom:5px\">
        <strong>正确答案</strong>
       </div> 
       <p  class=\"question-text-success\">";
            // line 22
            echo $this->env->getExtension('topxia_web_twig')->bbCode2HtmlFilter($context["rightAnswer"]);
            echo "</p>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rightAnswer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "</div>
";
        // line 25
        if ((($this->getAttribute((isset($context["itemResult"]) ? $context["itemResult"] : null), "teacherSay", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["itemResult"]) ? $context["itemResult"] : null), "teacherSay", array()), null)) : (null))) {
            // line 26
            echo "\t<div  class=\"question-eassy-form-control question-teacher-say-input\">
\t\t<div class=\"teacher-say-text\">老师评语:</div>
\t\t";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["itemResult"]) ? $context["itemResult"] : null), "teacherSay", array()), "html", null, true);
            echo "
\t</div> 
";
        }
        // line 31
        echo "
";
    }

    // line 34
    public function block_footer($context, array $blocks = array())
    {
        // line 35
        echo "
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Question:question-essay-finished.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 35,  102 => 34,  97 => 31,  91 => 28,  87 => 26,  85 => 25,  82 => 24,  74 => 22,  69 => 19,  65 => 18,  58 => 14,  48 => 11,  43 => 8,  40 => 7,  33 => 4,  30 => 3,  11 => 1,);
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
/* <div style="margin-bottom:18px">*/
/* 	<div style="margin-bottom:5px">*/
/*         <strong>{% if setting('default.user_name') %}{{setting('default.user_name')|default('学员')}}{% else %}学员{% endif %}回答:*/
/*         </strong>*/
/*     </div>*/
/* 	<p class="">{{ itemResult.answer[0]|default('')|raw }}</p>*/
/* */
/* </div>*/
/* <div style="margin-bottom:18px">*/
/*  {% for rightAnswer in question.answer %}*/
/* 	   <div style="margin-bottom:5px">*/
/*         <strong>正确答案</strong>*/
/*        </div> */
/*        <p  class="question-text-success">{{ rightAnswer|bbCode2Html|raw }}</p>*/
/* 	{% endfor %}*/
/* </div>*/
/* {% if itemResult.teacherSay|default(null) %}*/
/* 	<div  class="question-eassy-form-control question-teacher-say-input">*/
/* 		<div class="teacher-say-text">老师评语:</div>*/
/* 		{{ itemResult.teacherSay }}*/
/* 	</div> */
/* {% endif %}*/
/* */
/* {% endblock %}*/
/* */
/* {% block footer %}*/
/* */
/* {% endblock %}*/
