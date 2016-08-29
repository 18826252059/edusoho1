<?php

/* ClassroomBundle:ClassroomManage:remark-modal.html.twig */
class __TwigTemplate_1fcffbf201273cb0c3a754edff5f174a6334821129744de366ce1652d8ae893a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "ClassroomBundle:ClassroomManage:remark-modal.html.twig", 1);
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
        echo "学员备注";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "
<form id=\"student-remark-form\" method=\"post\" action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_manage_student_remark", array("classroomId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()), "userId" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
        echo "\" data-user=\"";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["default"]) ? $context["default"] : null), "user_name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["default"]) ? $context["default"] : null), "user_name", array()), "学员")) : ("学员")), "html", null, true);
        echo "\">

  <div class=\"form-group\">
    <div class=\"controls\">
    \t<input class=\"form-control\" id=\"student-remark\" name=\"remark\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : null), "remark", array()), "html", null, true);
        echo "\" >
      <div class=\"help-block\">请填写学员的备注信息</div>
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
<script>app.load('classroombundle/controller/classroom/student-remark')</script>
";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:ClassroomManage:remark-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 24,  71 => 23,  62 => 17,  54 => 12,  45 => 8,  42 => 7,  39 => 6,  33 => 5,  29 => 1,  27 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::bootstrap-modal-layout.html.twig' %}*/
/* */
/* {% set modalSize = 'large' %}*/
/* */
/* {% block title %}学员备注{% endblock %}*/
/* {% block body %}*/
/* */
/* <form id="student-remark-form" method="post" action="{{ path('classroom_manage_student_remark', {classroomId:classroom.id, userId:user.id}) }}" data-user="{{default.user_name|default('学员')}}">*/
/* */
/*   <div class="form-group">*/
/*     <div class="controls">*/
/*     	<input class="form-control" id="student-remark" name="remark" value="{{member.remark}}" >*/
/*       <div class="help-block">请填写学员的备注信息</div>*/
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
/* <script>app.load('classroombundle/controller/classroom/student-remark')</script>*/
/* {% endblock %}*/
/* */
