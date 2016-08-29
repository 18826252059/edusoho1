<?php

/* TopxiaWebBundle:CourseStudentManage:remark-modal.html.twig */
class __TwigTemplate_edaccf748823a45496bab2b61903ac23d026e862e41785c02f0ac17f53c35b31 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "TopxiaWebBundle:CourseStudentManage:remark-modal.html.twig", 1);
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
        // line 3
        $context["modalSize"] = "large";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        if ($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name")) {
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), "学员"), "html", null, true);
        } else {
            echo "学员";
        }
        echo "备注";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "
<form id=\"student-remark-form\" method=\"post\" action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_student_remark", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "userId" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
        echo "\" data-user=\"";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["default"]) ? $context["default"] : null), "user_name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["default"]) ? $context["default"] : null), "user_name", array()), "学员")) : ("学员")), "html", null, true);
        echo "\">

  <div class=\"form-group\">
    <div class=\"controls\">
    \t<input class=\"form-control\" id=\"student-remark\" name=\"remark\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : null), "remark", array()), "html", null, true);
        echo "\" >
      <div class=\"help-block\">请填写";
        // line 13
        if ($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name")) {
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), "学员"), "html", null, true);
        } else {
            echo "学员";
        }
        echo "的备注信息</div>
    </div>
  </div>

  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">

</form>

";
    }

    // line 23
    public function block_footer($context, array $blocks = array())
    {
        // line 24
        echo "  <button type=\"submit\" class=\"btn btn-primary pull-right\" data-toggle=\"form-submit\" data-target=\"#student-remark-form\">保存</button>
  <button type=\"button\" class=\"btn btn-link pull-right\" data-dismiss=\"modal\">取消</button>
<script>app.load('course-manage/student-remark')</script>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseStudentManage:remark-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 24,  83 => 23,  74 => 17,  63 => 13,  59 => 12,  50 => 8,  47 => 7,  44 => 6,  33 => 5,  29 => 1,  27 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::bootstrap-modal-layout.html.twig' %}*/
/* */
/* {% set modalSize = 'large' %}*/
/* */
/* {% block title %}{% if setting('default.user_name') %}{{setting('default.user_name')|default('学员')}}{% else %}学员{% endif %}备注{% endblock %}*/
/* {% block body %}*/
/* */
/* <form id="student-remark-form" method="post" action="{{ path('course_manage_student_remark', {courseId:course.id, userId:user.id}) }}" data-user="{{default.user_name|default('学员')}}">*/
/* */
/*   <div class="form-group">*/
/*     <div class="controls">*/
/*     	<input class="form-control" id="student-remark" name="remark" value="{{member.remark}}" >*/
/*       <div class="help-block">请填写{% if setting('default.user_name') %}{{setting('default.user_name')|default('学员')}}{% else %}学员{% endif %}的备注信息</div>*/
/*     </div>*/
/*   </div>*/
/* */
/*   <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/* */
/* </form>*/
/* */
/* {% endblock %}*/
/* */
/* {% block footer %}*/
/*   <button type="submit" class="btn btn-primary pull-right" data-toggle="form-submit" data-target="#student-remark-form">保存</button>*/
/*   <button type="button" class="btn btn-link pull-right" data-dismiss="modal">取消</button>*/
/* <script>app.load('course-manage/student-remark')</script>*/
/* {% endblock %}*/
/* */
