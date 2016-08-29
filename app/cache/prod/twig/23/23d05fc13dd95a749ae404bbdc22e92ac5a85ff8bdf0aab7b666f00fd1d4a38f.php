<?php

/* TopxiaWebBundle:LessonQuestionPlugin:ask-modal.html.twig */
class __TwigTemplate_c0f5262d4d331b89f31984ed8ba3f2328b7868cb1792d5b7e2ecaf8c6ceb426a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "TopxiaWebBundle:LessonQuestionPlugin:ask-modal.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::bootstrap-modal-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "提交问题";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo " <form id=\"lesson-question-plugin-form\" method=\"post\" action=\"";
        echo $this->env->getExtension('routing')->getPath("course_lesson_plugin_question_ask");
        echo "\">

  <div class=\"form-group\">
    <div class=\"controls\">
      ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "title", array()), 'widget', array("attr" => array("class" => "form-control expand-form-trigger", "placeholder" => "我要提问", "data-display" => "标题")));
        echo "
    </div>
  </div>

  <div class=\"form-group detail-form-group\">
    <div class=\"controls\">
      ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "content", array()), 'widget', array("attr" => array("class" => "form-control", "rows" => 5, "placeholder" => "详细描述你的问题", "data-image-upload-url" => $this->env->getExtension('routing')->getPath("editor_upload", array("token" => $this->env->getExtension('topxia_web_twig')->makeUpoadToken("course"))))));
        echo "
    </div>
  </div>

  ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "
  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
</form>
<script>
    app.load('lesson-question/ask');
</script>

";
    }

    // line 28
    public function block_footer($context, array $blocks = array())
    {
        // line 29
        echo "  <button type=\"button\" class=\"btn btn-link\" data-dismiss=\"modal\">取消</button>
  <button type=\"submit\" class=\"btn btn-primary pull-right\" data-toggle=\"form-submit\" data-target=\"#lesson-question-plugin-form\">提问</button>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:LessonQuestionPlugin:ask-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 29,  78 => 28,  67 => 21,  63 => 20,  56 => 16,  47 => 10,  39 => 6,  36 => 5,  30 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::bootstrap-modal-layout.html.twig' %}*/
/* */
/* {% block title %}提交问题{% endblock %}*/
/* */
/* {% block body %}*/
/*  <form id="lesson-question-plugin-form" method="post" action="{{ path('course_lesson_plugin_question_ask') }}">*/
/* */
/*   <div class="form-group">*/
/*     <div class="controls">*/
/*       {{ form_widget(form.title, {attr:{class:'form-control expand-form-trigger', placeholder:'我要提问', 'data-display':'标题'}}) }}*/
/*     </div>*/
/*   </div>*/
/* */
/*   <div class="form-group detail-form-group">*/
/*     <div class="controls">*/
/*       {{ form_widget(form.content, {attr:{class:'form-control', rows:5, placeholder:'详细描述你的问题', 'data-image-upload-url': path('editor_upload', {token:upload_token('course')}) }}) }}*/
/*     </div>*/
/*   </div>*/
/* */
/*   {{ form_rest(form) }}*/
/*   <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/* </form>*/
/* <script>*/
/*     app.load('lesson-question/ask');*/
/* </script>*/
/* */
/* {% endblock %}*/
/* {% block footer %}*/
/*   <button type="button" class="btn btn-link" data-dismiss="modal">取消</button>*/
/*   <button type="submit" class="btn btn-primary pull-right" data-toggle="form-submit" data-target="#lesson-question-plugin-form">提问</button>*/
/* {% endblock %}*/
