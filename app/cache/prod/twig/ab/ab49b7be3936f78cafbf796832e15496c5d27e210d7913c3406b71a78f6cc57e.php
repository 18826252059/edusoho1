<?php

/* TopxiaWebBundle:CourseStudentManage:set-expiryday-modal.html.twig */
class __TwigTemplate_39ad29d1ef0707993a8cef4c45e25a2fb99c2450150755cd5a419254b3272856 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "TopxiaWebBundle:CourseStudentManage:set-expiryday-modal.html.twig", 1);
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
        echo "增加";
        if ($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name")) {
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), "学员"), "html", null, true);
        } else {
            echo "学员";
        }
        echo "课程有效期";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "
<form id=\"expiryday-set-form\" class=\"form-horizontal\" method=\"post\" action=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_set_expiryday", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "userId" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
        echo "\">
  ";
        // line 7
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "status", array()) == "published")) {
            // line 8
            echo "    <div class=\"row form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"course-title\">课程标题</label>
      </div>
      <div class=\"col-md-7 controls\">
        <div style=\"margin-top: 7px;\">
          ";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "title", array()), "html", null, true);
            echo "
          </div>
      </div>
    </div>

  \t<div class=\"row form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"student-nickname\">";
            // line 21
            if ($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name")) {
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), "学员"), "html", null, true);
            } else {
                echo "学员";
            }
            echo "用户名</label>
      </div>
      <div class=\"col-md-7 controls\">
        <div style=\"margin-top: 7px;\">
          ";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "nickname", array()), "html", null, true);
            echo "
          </div>
    \t</div>
    </div>

    <div class=\"row form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"set-more-expiryday\">增加天数</label>
      </div>
      <div class=\"col-md-7 controls\">
        <input type=\"text\" id=\"set-more-expiryday\" name=\"expiryDay\" value=\"0\" class=\"form-control width-input\">
      </div>
    </div>
  ";
        } else {
            // line 39
            echo "    <div class=\"empty\">";
            echo $this->env->getExtension('topxia_web_twig')->getDictText("courseStatus", $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "status", array()));
            echo "课程不能增加";
            if ($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name")) {
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), "学员"), "html", null, true);
            } else {
                echo "学员";
            }
            echo "有效期，请课程发布后再增加。</div>
  ";
        }
        // line 41
        echo "
  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">

</form>

";
    }

    // line 48
    public function block_footer($context, array $blocks = array())
    {
        // line 49
        echo "  ";
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "status", array()) == "published")) {
            // line 50
            echo "    <button type=\"submit\" id=\"submit\" class=\"btn btn-primary pull-right\" data-toggle=\"form-submit\" data-target=\"#expiryday-set-form\" data-user=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["default"]) ? $context["default"] : null), "user_name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["default"]) ? $context["default"] : null), "user_name", array()), "学员")) : ("学员")), "html", null, true);
            echo "\">保存</button>
  ";
        }
        // line 52
        echo "  <button type=\"button\" class=\"btn btn-link pull-right\" data-dismiss=\"modal\">取消</button>
  <script>app.load('course-manage/set-expiryday-modal')</script>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseStudentManage:set-expiryday-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 52,  130 => 50,  127 => 49,  124 => 48,  115 => 42,  112 => 41,  100 => 39,  83 => 25,  72 => 21,  62 => 14,  54 => 8,  52 => 7,  48 => 6,  45 => 5,  42 => 4,  30 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::bootstrap-modal-layout.html.twig' %}*/
/* */
/* {% block title %}增加{% if setting('default.user_name') %}{{setting('default.user_name')|default('学员')}}{% else %}学员{% endif %}课程有效期{% endblock %}*/
/* {% block body %}*/
/* */
/* <form id="expiryday-set-form" class="form-horizontal" method="post" action="{{ path('course_set_expiryday', { courseId:course.id, userId:user.id }) }}">*/
/*   {% if course.status == 'published' %}*/
/*     <div class="row form-group">*/
/*       <div class="col-md-2 control-label">*/
/*         <label for="course-title">课程标题</label>*/
/*       </div>*/
/*       <div class="col-md-7 controls">*/
/*         <div style="margin-top: 7px;">*/
/*           {{ course.title }}*/
/*           </div>*/
/*       </div>*/
/*     </div>*/
/* */
/*   	<div class="row form-group">*/
/*       <div class="col-md-2 control-label">*/
/*         <label for="student-nickname">{% if setting('default.user_name') %}{{setting('default.user_name')|default('学员')}}{% else %}学员{% endif %}用户名</label>*/
/*       </div>*/
/*       <div class="col-md-7 controls">*/
/*         <div style="margin-top: 7px;">*/
/*           {{ user.nickname }}*/
/*           </div>*/
/*     	</div>*/
/*     </div>*/
/* */
/*     <div class="row form-group">*/
/*       <div class="col-md-2 control-label">*/
/*         <label for="set-more-expiryday">增加天数</label>*/
/*       </div>*/
/*       <div class="col-md-7 controls">*/
/*         <input type="text" id="set-more-expiryday" name="expiryDay" value="0" class="form-control width-input">*/
/*       </div>*/
/*     </div>*/
/*   {% else %}*/
/*     <div class="empty">{{dict_text('courseStatus', course.status)}}课程不能增加{% if setting('default.user_name') %}{{setting('default.user_name')|default('学员')}}{% else %}学员{% endif %}有效期，请课程发布后再增加。</div>*/
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
/*     <button type="submit" id="submit" class="btn btn-primary pull-right" data-toggle="form-submit" data-target="#expiryday-set-form" data-user="{{default.user_name|default('学员')}}">保存</button>*/
/*   {% endif %}*/
/*   <button type="button" class="btn btn-link pull-right" data-dismiss="modal">取消</button>*/
/*   <script>app.load('course-manage/set-expiryday-modal')</script>*/
/* {% endblock %}*/
/* */
