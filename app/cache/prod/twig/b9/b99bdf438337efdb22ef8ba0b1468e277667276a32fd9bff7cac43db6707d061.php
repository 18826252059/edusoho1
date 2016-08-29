<?php

/* TopxiaWebBundle:Question:question-essay-doing.html.twig */
class __TwigTemplate_a2b0f82759612f95908981c1a7958c2d46fff225fe569c571f6c68d7b293f43d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:Question:question-base-layout.html.twig", "TopxiaWebBundle:Question:question-essay-doing.html.twig", 1);
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
 ";
        // line 9
        $context["answer"] = (($this->getAttribute($this->getAttribute((isset($context["itemResult"]) ? $context["itemResult"] : null), "answer", array(), "any", false, true), 0, array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["itemResult"]) ? $context["itemResult"] : null), "answer", array(), "any", false, true), 0, array(), "array"), "")) : (""));
        // line 10
        echo " 
    <textarea name=\"answer[";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "id", array()), "html", null, true);
        echo "]\" rows=\"1\" class=\"form-control question-essay-input-short\"  data-question-id=";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "id", array()), "html", null, true);
        echo " >";
        echo twig_escape_filter($this->env, (isset($context["answer"]) ? $context["answer"] : null), "html", null, true);
        echo "</textarea>

\t<textarea id=\"question-essay-";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "id", array()), "html", null, true);
        echo "\" class=\"form-control question-essay-input-long\"  data-type=\"essay\" style=\"display:none;\"  name=\"essay-packup-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "id", array()), "html", null, true);
        echo "\" data-image-upload-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editor_upload", array("token" => $this->env->getExtension('topxia_web_twig')->makeUpoadToken("default"))), "html", null, true);
        echo "\" data-image-download-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editor_download", array("token" => $this->env->getExtension('topxia_web_twig')->makeUpoadToken("course"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["answer"]) ? $context["answer"] : null), "html", null, true);
        echo "</textarea>

\t<a class=\"btn btn-link btn-muted btn-sm essay-textarea-pack-up\" style=\"display:none\"><span class=\"glyphicon glyphicon-chevron-up text-muted\"></span> 收起</a>

";
    }

    // line 19
    public function block_footer($context, array $blocks = array())
    {
        // line 20
        echo "
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Question:question-essay-doing.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 20,  77 => 19,  60 => 13,  51 => 11,  48 => 10,  46 => 9,  43 => 8,  40 => 7,  33 => 4,  30 => 3,  11 => 1,);
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
/*  {% set answer = itemResult.answer[0]|default("") %}*/
/*  */
/*     <textarea name="answer[{{ question.id }}]" rows="1" class="form-control question-essay-input-short"  data-question-id={{ question.id }} >{{ answer }}</textarea>*/
/* */
/* 	<textarea id="question-essay-{{ question.id }}" class="form-control question-essay-input-long"  data-type="essay" style="display:none;"  name="essay-packup-{{ question.id }}" data-image-upload-url="{{ path('editor_upload', {token:upload_token('default')}) }}" data-image-download-url="{{ path('editor_download', {token:upload_token('course')}) }}">{{ answer }}</textarea>*/
/* */
/* 	<a class="btn btn-link btn-muted btn-sm essay-textarea-pack-up" style="display:none"><span class="glyphicon glyphicon-chevron-up text-muted"></span> 收起</a>*/
/* */
/* {% endblock %}*/
/* */
/* {% block footer %}*/
/* */
/* {% endblock %}*/
