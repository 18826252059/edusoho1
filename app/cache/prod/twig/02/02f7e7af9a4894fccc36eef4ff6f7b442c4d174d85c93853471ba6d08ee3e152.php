<?php

/* TopxiaWebBundle:CourseQuestionManage:question-form-essay.html.twig */
class __TwigTemplate_524ecb5629f765dc263b5c25009c68bcfafa51e150d0b8836ae27efb50efa6ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:CourseQuestionManage:question-form-layout.html.twig", "TopxiaWebBundle:CourseQuestionManage:question-form-essay.html.twig", 1);
        $this->blocks = array(
            'question_extra_fields' => array($this, 'block_question_extra_fields'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:CourseQuestionManage:question-form-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_question_extra_fields($context, array $blocks = array())
    {
        // line 4
        echo "
  <div class=\"form-group\">
    <div class=\"col-md-2 control-label\"><label for=\"question-answer-field\">答案</label></div>
    <div class=\"col-md-8 controls\">
      <textarea class=\"form-control\" id=\"question-answer-field\" name=\"answer[]\" data-image-upload-url=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editor_upload", array("token" => $this->env->getExtension('topxia_web_twig')->makeUpoadToken("course"))), "html", null, true);
        echo "\" data-image-download-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editor_download", array("token" => $this->env->getExtension('topxia_web_twig')->makeUpoadToken("course"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_join_filter((($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "answer", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "answer", array()), "")) : (""))), "html", null, true);
        echo "</textarea>
    </div>
    ";
        // line 13
        echo "  </div>


";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseQuestionManage:question-form-essay.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 13,  37 => 8,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle:CourseQuestionManage:question-form-layout.html.twig' %}*/
/* */
/* {% block question_extra_fields %}*/
/* */
/*   <div class="form-group">*/
/*     <div class="col-md-2 control-label"><label for="question-answer-field">答案</label></div>*/
/*     <div class="col-md-8 controls">*/
/*       <textarea class="form-control" id="question-answer-field" name="answer[]" data-image-upload-url="{{ path('editor_upload', {token:upload_token('course')}) }}" data-image-download-url="{{ path('editor_download', {token:upload_token('course')}) }}">{{question.answer|default('')|join}}</textarea>*/
/*     </div>*/
/*     {# <div class="col-md-2" style="padding-left:0;">*/
/*       <div class="btn btn-sm btn-default " data-role="answer-uploader" data-target="#question-answer-field" id="answer-stem-uploader" ><i class="glyphicon glyphicon-picture"></i></div>*/
/*     </div> #}*/
/*   </div>*/
/* */
/* */
/* {% endblock %}*/
