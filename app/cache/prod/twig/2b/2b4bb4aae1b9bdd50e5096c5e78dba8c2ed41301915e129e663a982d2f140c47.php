<?php

/* TopxiaWebBundle:CourseTestpaperManage:create.html.twig */
class __TwigTemplate_c47d2849b8fb00c76090138ea6260c4b2a015b287702882d606c2134de4358d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:CourseManage:layout.html.twig", "TopxiaWebBundle:CourseTestpaperManage:create.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:CourseManage:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "TopxiaWebBundle:CourseTestpaperManage:create.html.twig", 2);
        // line 6
        $context["side_nav"] = "testpaper";
        // line 7
        $context["script_controller"] = "testpaper/testpaper-form";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "创建试卷 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 9
    public function block_main($context, array $blocks = array())
    {
        // line 10
        echo "
<div class=\"panel panel-default panel-col test-creator\">
  <div class=\"panel-heading clearfix\">创建试卷</div>
  
  <div class=\"panel-body\">

    <ol class=\"breadcrumb\">
      <li><a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_testpaper", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
        echo "\">试卷管理</a></li>
      <li class=\"active\">创建试卷</li>
    </ol>

    <form id=\"testpaper-form\" class=\"form-horizontal\" method=\"post\" data-build-check-url=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_testpaper_build_check", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
        echo "\" data-auto-submit=\"false\" data-have-base-fields=\"true\" data-have-build-fields=\"true\" data-course-id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "html", null, true);
        echo "\">
      ";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "

      ";
        // line 24
        $this->loadTemplate("TopxiaWebBundle:CourseTestpaperManage:testpaper-form-base-fields.html.twig", "TopxiaWebBundle:CourseTestpaperManage:create.html.twig", 24)->display($context);
        // line 25
        echo "      ";
        $this->loadTemplate("TopxiaWebBundle:CourseTestpaperManage:testpaper-form-build-fields.html.twig", "TopxiaWebBundle:CourseTestpaperManage:create.html.twig", 25)->display($context);
        // line 26
        echo "
      <div class=\"form-group mbm\">
        <div class=\"col-md-8 col-md-offset-2 controls\">
          <button id=\"testpaper-create-btn\" data-submiting-text=\"正在提交\" type=\"submit\" class=\"btn btn-primary\" >保存，下一步</button>
          <a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_testpaper", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-link  \">返回</a>
        </div>
      </div>

    </form>

  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseTestpaperManage:create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 30,  78 => 26,  75 => 25,  73 => 24,  68 => 22,  62 => 21,  55 => 17,  46 => 10,  43 => 9,  36 => 4,  32 => 1,  30 => 7,  28 => 6,  26 => 2,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle:CourseManage:layout.html.twig' %}*/
/* {% import 'TopxiaWebBundle::macro.html.twig' as macro %}*/
/* */
/* {% block title %}创建试卷 - {{ parent() }}{% endblock %}*/
/* */
/* {% set side_nav = 'testpaper' %}*/
/* {% set script_controller = 'testpaper/testpaper-form' %}*/
/* */
/* {% block main %}*/
/* */
/* <div class="panel panel-default panel-col test-creator">*/
/*   <div class="panel-heading clearfix">创建试卷</div>*/
/*   */
/*   <div class="panel-body">*/
/* */
/*     <ol class="breadcrumb">*/
/*       <li><a href="{{ path('course_manage_testpaper',{courseId:course.id}) }}">试卷管理</a></li>*/
/*       <li class="active">创建试卷</li>*/
/*     </ol>*/
/* */
/*     <form id="testpaper-form" class="form-horizontal" method="post" data-build-check-url="{{ path('course_manage_testpaper_build_check',{courseId:course.id})}}" data-auto-submit="false" data-have-base-fields="true" data-have-build-fields="true" data-course-id="{{course.id}}">*/
/*       {{ web_macro.flash_messages() }}*/
/* */
/*       {% include 'TopxiaWebBundle:CourseTestpaperManage:testpaper-form-base-fields.html.twig'%}*/
/*       {% include 'TopxiaWebBundle:CourseTestpaperManage:testpaper-form-build-fields.html.twig'%}*/
/* */
/*       <div class="form-group mbm">*/
/*         <div class="col-md-8 col-md-offset-2 controls">*/
/*           <button id="testpaper-create-btn" data-submiting-text="正在提交" type="submit" class="btn btn-primary" >保存，下一步</button>*/
/*           <a href="{{ path('course_manage_testpaper',{courseId:course.id}) }}" class="btn btn-link  ">返回</a>*/
/*         </div>*/
/*       </div>*/
/* */
/*     </form>*/
/* */
/*   </div>*/
/* </div>*/
/* {% endblock %}*/
/* */
/* */
/* */
/*  */
