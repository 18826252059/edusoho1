<?php

/* TopxiaWebBundle:CourseManage:courseSyncEdit.html.twig */
class __TwigTemplate_18ff8aeefdace17ad04ea61b5a8229a84de49d1d65e61a5a81dc28e98e49e676 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "TopxiaWebBundle:CourseManage:courseSyncEdit.html.twig", 1);
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

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "解除确认";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<style>
  .courseSync-text{
    padding:10px 50px;
    text-align:center;
  }
</style>
  <form id=\"courseSync-form\" class=\"form-horizontal\" method=\"post\" action=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("course_manage_course_sync_edit");
        echo "\">
    <div style=\"text-align:center;\"><span class=\"es-icon es-icon-warning\" style=\"font-size:60px;color:#e83d2c;\"></span></div>
    <h5><p class=\"courseSync-text\"><font color=\"#e83d2c\">解除后本课程将停止同步更新,本操作不可逆！</font></p></h5>
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
    <input type=\"hidden\" name=\"courseId\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "html", null, true);
        echo "\">
    <input type=\"hidden\" name=\"url\" value=\"";
        // line 15
        if ((((isset($context["type"]) ? $context["type"] : null) == "question") || ((isset($context["type"]) ? $context["type"] : null) == "testpaper"))) {
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["url"]) ? $context["url"] : null), array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
        } elseif (((isset($context["type"]) ? $context["type"] : null) == "question_plumber")) {
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["url"]) ? $context["url"] : null), array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "type" => "import")), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["url"]) ? $context["url"] : null), array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
        }
        echo "\">
  </form>
";
    }

    // line 18
    public function block_footer($context, array $blocks = array())
    {
        // line 19
        echo "    <button id=\"courseSync-btn\" type=\"submit\" class=\"btn btn-primary pull-right\" data-toggle=\"form-submit\" data-target=\"#courseSync-form\">确认</button>
    <button type=\"button\" class=\"btn btn-link pull-right\" data-dismiss=\"modal\">取消</button>

    <script>app.load('course-manage/sync-edit')</script>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseManage:courseSyncEdit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 19,  74 => 18,  61 => 15,  57 => 14,  53 => 13,  47 => 10,  39 => 4,  36 => 3,  30 => 2,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::bootstrap-modal-layout.html.twig' %}*/
/* {% block title %}解除确认{% endblock %}*/
/* {% block body %}*/
/* <style>*/
/*   .courseSync-text{*/
/*     padding:10px 50px;*/
/*     text-align:center;*/
/*   }*/
/* </style>*/
/*   <form id="courseSync-form" class="form-horizontal" method="post" action="{{path('course_manage_course_sync_edit')}}">*/
/*     <div style="text-align:center;"><span class="es-icon es-icon-warning" style="font-size:60px;color:#e83d2c;"></span></div>*/
/*     <h5><p class="courseSync-text"><font color="#e83d2c">解除后本课程将停止同步更新,本操作不可逆！</font></p></h5>*/
/*     <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/*     <input type="hidden" name="courseId" value="{{course.id}}">*/
/*     <input type="hidden" name="url" value="{% if type == 'question' or type == 'testpaper' %}{{path(url,{courseId:course.id})}}{% elseif type == 'question_plumber' %}{{path(url,{courseId:course.id,type:'import'})}}{% else %}{{path(url,{id:course.id})}}{% endif %}">*/
/*   </form>*/
/* {% endblock %}*/
/* {% block footer %}*/
/*     <button id="courseSync-btn" type="submit" class="btn btn-primary pull-right" data-toggle="form-submit" data-target="#courseSync-form">确认</button>*/
/*     <button type="button" class="btn btn-link pull-right" data-dismiss="modal">取消</button>*/
/* */
/*     <script>app.load('course-manage/sync-edit')</script>*/
/* {% endblock %}*/
/* */
