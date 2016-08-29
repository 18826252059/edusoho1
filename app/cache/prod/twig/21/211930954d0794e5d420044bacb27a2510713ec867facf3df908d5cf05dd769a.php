<?php

/* TopxiaWebBundle:CourseStudentManage:create-modal.html.twig */
class __TwigTemplate_24bf8892e99b45bc895bea3ea31b8b109828a391d6f5efccfe26587aa95e25d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "TopxiaWebBundle:CourseStudentManage:create-modal.html.twig", 1);
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
        echo "添加";
        if ($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name")) {
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), "学员"), "html", null, true);
        } else {
            echo "学员";
        }
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "
<form id=\"student-create-form\" class=\"form-horizontal\" method=\"post\" action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_student_create", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
        echo "\">
  ";
        // line 9
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "status", array()) == "published")) {
            // line 10
            echo "  \t<div class=\"row form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"student-nickname\">";
            // line 12
            if ($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name")) {
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), "学员"), "html", null, true);
            } else {
                echo "学员";
            }
            echo "</label>
      </div>
      <div class=\"col-md-7 controls\">
        <input type=\"text\" id=\"student-nickname\" name=\"queryfield\" class=\"form-control\" 
        data-url=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_student_check", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "\" placeholder='邮箱/手机/用户名' >
      \t<div class=\"help-block\">只能添加系统中已注册的用户</div>
    \t</div>
    </div>

    <div class=\"row form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"buy-price\">购买价格</label>
      </div>
      <div class=\"col-md-7 controls\">
        <input type=\"text\" id=\"buy-price\" name=\"price\" value=\"0\" class=\"form-control\">
        <div class=\"help-block\">本课程的价格为";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "price", array()), "html", null, true);
            echo "元</div>
      </div>
    </div>

    <div class=\"row form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"student-remark\">备注</label>
      </div>
      <div class=\"col-md-7 controls\">
        <input type=\"text\" id=\"student-remark\" name=\"remark\" class=\"form-control\">
        <div class=\"help-block\">选填</div>
      </div>
    </div>
  ";
        } else {
            // line 41
            echo "    <div class=\"empty\">";
            echo $this->env->getExtension('topxia_web_twig')->getDictText("courseStatus", $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "status", array()));
            echo "课程不能添加";
            if ($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name")) {
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), "学员"), "html", null, true);
            } else {
                echo "学员";
            }
            echo "，请课程发布后再添加。</div>
  ";
        }
        // line 43
        echo "
  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">

</form>

";
    }

    // line 50
    public function block_footer($context, array $blocks = array())
    {
        // line 51
        echo "  ";
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "status", array()) == "published")) {
            // line 52
            echo "    <button id=\"student-create-form-submit\" type=\"submit\" class=\"btn btn-primary pull-right\" data-toggle=\"form-submit\" data-target=\"#student-create-form\" data-submiting-text=\"正在保存...\" data-user=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["default"]) ? $context["default"] : null), "user_name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["default"]) ? $context["default"] : null), "user_name", array()), "学员")) : ("学员")), "html", null, true);
            echo "\">保存</button>
  ";
        }
        // line 54
        echo "  <button type=\"button\" class=\"btn btn-link pull-right\" data-dismiss=\"modal\">取消</button>
  <script>app.load('course-manage/student-create')</script>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseStudentManage:create-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 54,  132 => 52,  129 => 51,  126 => 50,  117 => 44,  114 => 43,  102 => 41,  85 => 27,  71 => 16,  60 => 12,  56 => 10,  54 => 9,  50 => 8,  47 => 7,  44 => 6,  33 => 5,  29 => 1,  27 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::bootstrap-modal-layout.html.twig' %}*/
/* */
/* {% set modalSize = 'large' %}*/
/* */
/* {% block title %}添加{% if setting('default.user_name') %}{{setting('default.user_name')|default('学员')}}{% else %}学员{% endif %}{% endblock %}*/
/* {% block body %}*/
/* */
/* <form id="student-create-form" class="form-horizontal" method="post" action="{{ path('course_manage_student_create', {id:course.id}) }}">*/
/*   {% if course.status == 'published' %}*/
/*   	<div class="row form-group">*/
/*       <div class="col-md-2 control-label">*/
/*         <label for="student-nickname">{% if setting('default.user_name') %}{{setting('default.user_name')|default('学员')}}{% else %}学员{% endif %}</label>*/
/*       </div>*/
/*       <div class="col-md-7 controls">*/
/*         <input type="text" id="student-nickname" name="queryfield" class="form-control" */
/*         data-url="{{ path('course_manage_student_check',{id:course.id})}}" placeholder='邮箱/手机/用户名' >*/
/*       	<div class="help-block">只能添加系统中已注册的用户</div>*/
/*     	</div>*/
/*     </div>*/
/* */
/*     <div class="row form-group">*/
/*       <div class="col-md-2 control-label">*/
/*         <label for="buy-price">购买价格</label>*/
/*       </div>*/
/*       <div class="col-md-7 controls">*/
/*         <input type="text" id="buy-price" name="price" value="0" class="form-control">*/
/*         <div class="help-block">本课程的价格为{{course.price}}元</div>*/
/*       </div>*/
/*     </div>*/
/* */
/*     <div class="row form-group">*/
/*       <div class="col-md-2 control-label">*/
/*         <label for="student-remark">备注</label>*/
/*       </div>*/
/*       <div class="col-md-7 controls">*/
/*         <input type="text" id="student-remark" name="remark" class="form-control">*/
/*         <div class="help-block">选填</div>*/
/*       </div>*/
/*     </div>*/
/*   {% else %}*/
/*     <div class="empty">{{dict_text('courseStatus', course.status)}}课程不能添加{% if setting('default.user_name') %}{{setting('default.user_name')|default('学员')}}{% else %}学员{% endif %}，请课程发布后再添加。</div>*/
/*   {% endif %}*/
/* */
/*   <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/* */
/* </form>*/
/* */
/* {% endblock %}*/
/* */
/* {% block footer %}*/
/*   {% if course.status == 'published' %}*/
/*     <button id="student-create-form-submit" type="submit" class="btn btn-primary pull-right" data-toggle="form-submit" data-target="#student-create-form" data-submiting-text="正在保存..." data-user="{{default.user_name|default('学员')}}">保存</button>*/
/*   {% endif %}*/
/*   <button type="button" class="btn btn-link pull-right" data-dismiss="modal">取消</button>*/
/*   <script>app.load('course-manage/student-create')</script>*/
/* {% endblock %}*/
/* */
