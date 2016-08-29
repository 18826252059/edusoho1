<?php

/* TopxiaWebBundle:CourseQuestionCategoryManage:modal.html.twig */
class __TwigTemplate_eedeaa8d6b69fc23faec98d5229f233b2a7890be616303044ab2ce19395c7bf5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "TopxiaWebBundle:CourseQuestionCategoryManage:modal.html.twig", 1);
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
        // line 2
        $context["category"] = ((array_key_exists("category", $context)) ? (_twig_default_filter((isset($context["category"]) ? $context["category"] : null), null)) : (null));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        if ((isset($context["category"]) ? $context["category"] : null)) {
            echo "编辑题目类别";
        } else {
            echo "添加题目类别";
        }
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "  <form id=\"category-form\" class=\"form-horizontal\" action=\"
  ";
        // line 7
        if ((isset($context["category"]) ? $context["category"] : null)) {
            // line 8
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_question_category_update", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "id" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "id", array()))), "html", null, true);
            echo "
  ";
        } else {
            // line 10
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_question_category_create", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "
  ";
        }
        // line 11
        echo "\" method=\"post\">
    <div class=\"form-group\">
      <label class=\"col-md-2 control-label\" for=\"category-name-field\">名称</label>
      <div class=\"col-md-8 controls\">
        <input class=\"form-control\" id=\"category-name-field\" type=\"text\" name=\"name\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "name", array()), "")) : ("")), "html", null, true);
        echo "\" tabindex=\"1\">
      </div>
    </div>

    <input type=\"hidden\" name=\"courseId\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "html", null, true);
        echo "\">
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
  </form>

  <div>

  </div>

  <script type=\"text/javascript\"> app.load('quiz-question/category-creator') </script>
";
    }

    // line 30
    public function block_footer($context, array $blocks = array())
    {
        // line 31
        echo "
    <button type=\"button\" class=\"btn btn-link\" data-dismiss=\"modal\" tabindex=\"6\">取消</button>
  <button id=\"category-create-btn\" data-submiting-text=\"正在提交\" type=\"submit\" class=\"btn btn-primary\" data-toggle=\"form-submit\" data-target=\"#category-form\" tabindex=\"4\">保存</button>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseQuestionCategoryManage:modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 31,  93 => 30,  80 => 20,  76 => 19,  69 => 15,  63 => 11,  57 => 10,  51 => 8,  49 => 7,  46 => 6,  43 => 5,  33 => 3,  29 => 1,  27 => 2,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::bootstrap-modal-layout.html.twig' %}*/
/* {% set category = category | default(null)%}*/
/* {% block title %}{% if category %}编辑题目类别{% else %}添加题目类别{% endif %}{% endblock %}*/
/* */
/* {% block body %}*/
/*   <form id="category-form" class="form-horizontal" action="*/
/*   {% if category %}*/
/*     {{ path('course_manage_question_category_update', {courseId:course.id, id:category.id}) }}*/
/*   {% else %}*/
/*     {{ path('course_manage_question_category_create', {courseId:course.id}) }}*/
/*   {% endif %}" method="post">*/
/*     <div class="form-group">*/
/*       <label class="col-md-2 control-label" for="category-name-field">名称</label>*/
/*       <div class="col-md-8 controls">*/
/*         <input class="form-control" id="category-name-field" type="text" name="name" value="{{ category.name|default('') }}" tabindex="1">*/
/*       </div>*/
/*     </div>*/
/* */
/*     <input type="hidden" name="courseId" value="{{ course.id }}">*/
/*     <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/*   </form>*/
/* */
/*   <div>*/
/* */
/*   </div>*/
/* */
/*   <script type="text/javascript"> app.load('quiz-question/category-creator') </script>*/
/* {% endblock %}*/
/* */
/* {% block footer %}*/
/* */
/*     <button type="button" class="btn btn-link" data-dismiss="modal" tabindex="6">取消</button>*/
/*   <button id="category-create-btn" data-submiting-text="正在提交" type="submit" class="btn btn-primary" data-toggle="form-submit" data-target="#category-form" tabindex="4">保存</button>*/
/* {% endblock %}*/
