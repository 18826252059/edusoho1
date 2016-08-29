<?php

/* TopxiaWebBundle:LessonNotePlugin:form.html.twig */
class __TwigTemplate_6488faeb0b63d3dcc62f78f4acbb4ad7d323bbd4cf7b6161efffcb854e1ff3b9 extends Twig_Template
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
        echo "<form id=\"lesson-note-plugin-form\" method=\"post\" action=\"";
        echo $this->env->getExtension('routing')->getPath("course_lesson_plugin_note_save");
        echo "\">
  <div class=\"form-group note-content\">
    <div class=\"controls\">
      ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "content", array()), 'widget', array("attr" => array("data-image-upload-url" => $this->env->getExtension('routing')->getPath("editor_upload", array("token" => $this->env->getExtension('topxia_web_twig')->makeUpoadToken("course"))))));
        echo "
    </div>
  </div>

  <div class=\"form-group note-actions\">
    <div class=\"controls clearfix\">
      <span class=\"text-muted\" data-role=\"saved-message\"></span>
      <button id=\"save\" class=\"btn btn-primary btn-xs pull-right\" type=\"submit\">保存笔记</button>
      ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "
      <label class=\"text-muted\"><input type=\"checkbox\" name=\"status\" ";
        // line 13
        if ((($this->getAttribute((isset($context["note"]) ? $context["note"] : null), "status", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["note"]) ? $context["note"] : null), "status", array()), 1)) : (1))) {
            echo "checked ";
        }
        echo "> 分享笔记</label>
    </div>
  </div>
  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
</form>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:LessonNotePlugin:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 16,  41 => 13,  37 => 12,  26 => 4,  19 => 1,);
    }
}
/* <form id="lesson-note-plugin-form" method="post" action="{{ path('course_lesson_plugin_note_save') }}">*/
/*   <div class="form-group note-content">*/
/*     <div class="controls">*/
/*       {{ form_widget(form.content, {attr:{'data-image-upload-url': path('editor_upload', {token:upload_token('course')})} }) }}*/
/*     </div>*/
/*   </div>*/
/* */
/*   <div class="form-group note-actions">*/
/*     <div class="controls clearfix">*/
/*       <span class="text-muted" data-role="saved-message"></span>*/
/*       <button id="save" class="btn btn-primary btn-xs pull-right" type="submit">保存笔记</button>*/
/*       {{ form_rest(form) }}*/
/*       <label class="text-muted"><input type="checkbox" name="status" {% if note.status|default(1) %}checked {% endif %}> 分享笔记</label>*/
/*     </div>*/
/*   </div>*/
/*   <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/* </form>*/
