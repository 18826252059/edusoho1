<?php

/* TopxiaWebBundle:CourseQuestionManage:question-form-choice.html.twig */
class __TwigTemplate_4cc68eb24e57450eb0a57af6c96a1f92a6af2ad31ec3cf6fd4f8cb84607dfa8f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:CourseQuestionManage:question-form-layout.html.twig", "TopxiaWebBundle:CourseQuestionManage:question-form-choice.html.twig", 1);
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
  <div data-role=\"choices\"></div>
  <div id=\"ckeditor-config\" style=\"display:none;\" data-image-upload-url=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editor_upload", array("token" => $this->env->getExtension('topxia_web_twig')->makeUpoadToken("course"))), "html", null, true);
        echo "\" data-image-download-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editor_download", array("token" => $this->env->getExtension('topxia_web_twig')->makeUpoadToken("course"))), "html", null, true);
        echo "\"></div>
  <div class=\"form-group\">
    <div class=\"col-md-2 control-label\"></div>
    <div class=\"col-md-8 controls\">
       <button class=\"btn btn-success btn-sm pull-right\" data-role=\"add-choice\" type=\"button\">新增选项</button>
    </div>
  </div>
  <div class=\"form-group\">
    <div class=\"col-md-2 control-label\"><label>不定项选择题</label></div>
      <div class=\"col-md-8 controls radios\">
        ";
        // line 16
        echo $this->env->getExtension('topxia_html_twig')->radios("uncertain", array("0" => "否", "1" => "是"), ((((($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "type", array()), "choice")) : ("choice")) == "uncertain_choice")) ? (1) : (0)));
        echo "
      </div>
  </div>

  ";
        // line 20
        if ((($this->getAttribute($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "metas", array(), "any", false, true), "choices", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "metas", array(), "any", false, true), "choices", array()), null)) : (null))) {
            // line 21
            echo "    <script type=\"text/plain\" data-role=\"choices-data\">";
            echo twig_jsonencode_filter($this->getAttribute($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "metas", array()), "choices", array()));
            echo "</script>
    <script type=\"text/plain\" data-role=\"answers-data\">";
            // line 22
            echo twig_jsonencode_filter($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "answer", array()));
            echo "</script>
  ";
        }
        // line 24
        echo "  <script type=\"text/x-handlebars-template\" data-role=\"choice-template\">
    ";
        // line 38
        echo "
      <div class=\"form-group\" data-role=\"choice\">
        <div class=\"col-sm-2 control-label\"><label class=\"choice-label\" for=\"item-input-{{ id }}\">选项{{ code }}</label></div>
        <div class=\"col-sm-8 controls\">
          <textarea class=\"form-control item-input col-md-8\" id=\"item-input-{{ id }}\" name=\"choices[]\" data-display=\"选项内容\" data-image-upload-url=\"{{ imageUploadUrl }}\" data-image-download-url=\"{{ imageDownloadUrl }}\">{{ content }}</textarea>
          <p class=\"mtm\">
            <label><input type=\"checkbox\" class=\"answer-checkbox\" {{#if isAnswer }}checked=\"checked\"{{/if}}> 正确答案</label>
          </p>
        </div>
        <div class=\"col-sm-2\" style=\"padding-left:0;\">
          <a class=\"btn btn-default btn-sm delete-choice mlm\" data-role=\"delete-choice\" href=\"javascript:void(null)\"><i class=\"glyphicon glyphicon-trash\"></i></a>
        </div>
      </div>
    ";
        echo "
  </script>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseQuestionManage:question-form-choice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 38,  69 => 24,  64 => 22,  59 => 21,  57 => 20,  50 => 16,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle:CourseQuestionManage:question-form-layout.html.twig' %}*/
/* */
/* {% block question_extra_fields %}*/
/* */
/*   <div data-role="choices"></div>*/
/*   <div id="ckeditor-config" style="display:none;" data-image-upload-url="{{ path('editor_upload', {token:upload_token('course')}) }}" data-image-download-url="{{ path('editor_download', {token:upload_token('course')}) }}"></div>*/
/*   <div class="form-group">*/
/*     <div class="col-md-2 control-label"></div>*/
/*     <div class="col-md-8 controls">*/
/*        <button class="btn btn-success btn-sm pull-right" data-role="add-choice" type="button">新增选项</button>*/
/*     </div>*/
/*   </div>*/
/*   <div class="form-group">*/
/*     <div class="col-md-2 control-label"><label>不定项选择题</label></div>*/
/*       <div class="col-md-8 controls radios">*/
/*         {{ radios('uncertain', {'0':'否', '1':'是'}, question.type|default('choice') == 'uncertain_choice' ? 1 : 0) }}*/
/*       </div>*/
/*   </div>*/
/* */
/*   {% if question.metas.choices|default(null) %}*/
/*     <script type="text/plain" data-role="choices-data">{{ question.metas.choices|json_encode|raw}}</script>*/
/*     <script type="text/plain" data-role="answers-data">{{ question.answer|json_encode|raw}}</script>*/
/*   {% endif %}*/
/*   <script type="text/x-handlebars-template" data-role="choice-template">*/
/*     {% verbatim %}*/
/*       <div class="form-group" data-role="choice">*/
/*         <div class="col-sm-2 control-label"><label class="choice-label" for="item-input-{{ id }}">选项{{ code }}</label></div>*/
/*         <div class="col-sm-8 controls">*/
/*           <textarea class="form-control item-input col-md-8" id="item-input-{{ id }}" name="choices[]" data-display="选项内容" data-image-upload-url="{{ imageUploadUrl }}" data-image-download-url="{{ imageDownloadUrl }}">{{ content }}</textarea>*/
/*           <p class="mtm">*/
/*             <label><input type="checkbox" class="answer-checkbox" {{#if isAnswer }}checked="checked"{{/if}}> 正确答案</label>*/
/*           </p>*/
/*         </div>*/
/*         <div class="col-sm-2" style="padding-left:0;">*/
/*           <a class="btn btn-default btn-sm delete-choice mlm" data-role="delete-choice" href="javascript:void(null)"><i class="glyphicon glyphicon-trash"></i></a>*/
/*         </div>*/
/*       </div>*/
/*     {% endverbatim %}*/
/*   </script>*/
/* {% endblock %}*/
/* {# <div id="item-upload-{{ id }}" class="btn btn-default btn-sm webuploader-container" data-target="#item-input-{{ id }}"><i class="glyphicon glyphicon-picture"></i></div>*/
/* <div id="item-audio-upload-{{ id }}" class="btn btn-sm btn-default item-audio-upload webuploader-container hide" data-target="#item-input-{{ id }}"><i class="glyphicon glyphicon-volume-up"></i></div> #}*/
