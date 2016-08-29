<?php

/* TopxiaWebBundle:Course:announcement-write-modal.html.twig */
class __TwigTemplate_4a28c11585299bf2316d385c37f181a09993d98f523f518a8a56a0b45d6fe229 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "TopxiaWebBundle:Course:announcement-write-modal.html.twig", 1);
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
        if ($this->getAttribute((isset($context["announcement"]) ? $context["announcement"] : null), "id", array())) {
            echo "编辑";
        } else {
            echo "添加";
        }
        echo "公告";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "  <form id=\"announcement-write-form\" method=\"post\"
    ";
        // line 7
        if ($this->getAttribute((isset($context["announcement"]) ? $context["announcement"] : null), "id", array())) {
            // line 8
            echo "      action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_announcement_update", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "id" => $this->getAttribute((isset($context["announcement"]) ? $context["announcement"] : null), "id", array()))), "html", null, true);
            echo "\"
    ";
        } else {
            // line 10
            echo "      action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_announcement_add", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "\"
    ";
        }
        // line 12
        echo "  >

    <div class=\"form-group\">
      <div class=\"controls\">
        <textarea class=\"form-control\" id=\"announcement-content-field\" name=\"content\" data-display=\"公告内容\" data-image-upload-url=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editor_upload", array("token" => $this->env->getExtension('topxia_web_twig')->makeUpoadToken("default"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["announcement"]) ? $context["announcement"] : null), "content", array()), "html", null, true);
        echo "</textarea>
      </div>
    </div>
    ";
        // line 19
        if ( !$this->getAttribute((isset($context["announcement"]) ? $context["announcement"] : null), "id", array())) {
            // line 20
            echo "    <div class=\"checkbox\">
      <label>
        <input type=\"checkbox\" name=\"notify\" value=\"notify\"> 发送系统通知给该课程的";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("default.user_name", "学员"), "html", null, true);
            echo "
      </label>
    </div>
    ";
        }
        // line 26
        echo "    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">

  </form>

  <script>
    app.load('course/announcement-write');
  </script>

";
    }

    // line 35
    public function block_footer($context, array $blocks = array())
    {
        // line 36
        echo "  <button type=\"button\" class=\"btn btn-link\" data-dismiss=\"modal\">取消</button>
  <button type=\"submit\" class=\"btn btn-primary pull-right\" data-toggle=\"form-submit\" data-target=\"#announcement-write-form\">保存</button>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:announcement-write-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 36,  102 => 35,  88 => 26,  81 => 22,  77 => 20,  75 => 19,  67 => 16,  61 => 12,  55 => 10,  49 => 8,  47 => 7,  44 => 6,  41 => 5,  30 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::bootstrap-modal-layout.html.twig' %}*/
/* */
/* {% block title %}{% if announcement.id %}编辑{% else %}添加{% endif %}公告{% endblock %}*/
/* */
/* {% block body %}*/
/*   <form id="announcement-write-form" method="post"*/
/*     {% if announcement.id %}*/
/*       action="{{ path('course_announcement_update',{courseId:course.id, id:announcement.id}) }}"*/
/*     {% else %}*/
/*       action="{{ path('course_announcement_add',{courseId:course.id}) }}"*/
/*     {% endif %}*/
/*   >*/
/* */
/*     <div class="form-group">*/
/*       <div class="controls">*/
/*         <textarea class="form-control" id="announcement-content-field" name="content" data-display="公告内容" data-image-upload-url="{{ path('editor_upload', {token:upload_token('default')}) }}">{{ announcement.content }}</textarea>*/
/*       </div>*/
/*     </div>*/
/*     {% if not announcement.id %}*/
/*     <div class="checkbox">*/
/*       <label>*/
/*         <input type="checkbox" name="notify" value="notify"> 发送系统通知给该课程的{{ setting('default.user_name', '学员') }}*/
/*       </label>*/
/*     </div>*/
/*     {% endif %}*/
/*     <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/* */
/*   </form>*/
/* */
/*   <script>*/
/*     app.load('course/announcement-write');*/
/*   </script>*/
/* */
/* {% endblock %}*/
/* {% block footer %}*/
/*   <button type="button" class="btn btn-link" data-dismiss="modal">取消</button>*/
/*   <button type="submit" class="btn btn-primary pull-right" data-toggle="form-submit" data-target="#announcement-write-form">保存</button>*/
/* {% endblock %}*/
