<?php

/* TopxiaWebBundle:Course:course-select.html.twig */
class __TwigTemplate_a8f62239c6999d728f75ab02049b4d785c79d7a055c25c7344b22a235795123a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "TopxiaWebBundle:Course:course-select.html.twig", 1);
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
        $context["modal_class"] = "modal-lg";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "选择课程";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "<style>
.course-item:hover {
    cursor: pointer;
}
.course-wide-list .course-item .select{

    
}
</style>
<form class=\"form-inline form-search\" role=\"search-form\">
      <div class=\"form-group \">
        <input type=\"text\" class=\"form-control\" name=\"key\" value=\"\" placeholder=\"课程名称\">
      </div>
      <button type=\"button\" class=\"btn btn-primary\"  id=\"search\"  data-url=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_search", array("type" => (isset($context["type"]) ? $context["type"] : null), "classroomId" => (isset($context["classroomId"]) ? $context["classroomId"] : null))), "html", null, true);
        echo "\">搜索</button>
      <a class=\"btn btn-primary\" id=\"all-courses\" data-url=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_select", array("url" => (isset($context["url"]) ? $context["url"] : null), "type" => (isset($context["type"]) ? $context["type"] : null), "classroomId" => (isset($context["classroomId"]) ? $context["classroomId"] : null))), "html", null, true);
        echo "\">全部课程</a>
</form>

<div class=\"row mtl\">
    <div class=\"col-md-12\">
      <div class=\"courses-list\">
        ";
        // line 27
        $this->loadTemplate("TopxiaWebBundle:Course:course-select-list.html.twig", "TopxiaWebBundle:Course:course-select.html.twig", 27)->display($context);
        // line 28
        echo "        <nav class=\"text-center\">
          ";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo "
        </nav>
      </div>
    </div>
</div>

";
    }

    // line 37
    public function block_footer($context, array $blocks = array())
    {
        // line 38
        echo "  <button id=\"sure\" class=\"btn btn-primary pull-right\" data-url=\"";
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "\" >添加</button>
  <button type=\"button\" class=\"btn btn-link pull-right\" data-dismiss=\"modal\">取消</button>

    <script>app.load('course/select')</script>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:course-select.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 38,  86 => 37,  75 => 29,  72 => 28,  70 => 27,  61 => 21,  57 => 20,  42 => 7,  39 => 6,  33 => 5,  29 => 1,  27 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::bootstrap-modal-layout.html.twig' %}*/
/* */
/* {% set modal_class= "modal-lg" %}*/
/* */
/* {% block title %}选择课程{% endblock %}*/
/* {% block body %}*/
/* <style>*/
/* .course-item:hover {*/
/*     cursor: pointer;*/
/* }*/
/* .course-wide-list .course-item .select{*/
/* */
/*     */
/* }*/
/* </style>*/
/* <form class="form-inline form-search" role="search-form">*/
/*       <div class="form-group ">*/
/*         <input type="text" class="form-control" name="key" value="" placeholder="课程名称">*/
/*       </div>*/
/*       <button type="button" class="btn btn-primary"  id="search"  data-url="{{path('course_search',{type:type,classroomId:classroomId})}}">搜索</button>*/
/*       <a class="btn btn-primary" id="all-courses" data-url="{{path('course_select',{url:url,type:type,classroomId:classroomId})}}">全部课程</a>*/
/* </form>*/
/* */
/* <div class="row mtl">*/
/*     <div class="col-md-12">*/
/*       <div class="courses-list">*/
/*         {% include('TopxiaWebBundle:Course:course-select-list.html.twig') %}*/
/*         <nav class="text-center">*/
/*           {{ web_macro.paginator(paginator) }}*/
/*         </nav>*/
/*       </div>*/
/*     </div>*/
/* </div>*/
/* */
/* {% endblock %}*/
/* */
/* {% block footer %}*/
/*   <button id="sure" class="btn btn-primary pull-right" data-url="{{url}}" >添加</button>*/
/*   <button type="button" class="btn btn-link pull-right" data-dismiss="modal">取消</button>*/
/* */
/*     <script>app.load('course/select')</script>*/
/* {% endblock %}*/
