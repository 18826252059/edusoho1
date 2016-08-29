<?php

/* TopxiaAdminBundle:Course:copy.html.twig */
class __TwigTemplate_064b54a3be22260847b8746e9a962162036a2c7dc5cb386213072da9e65ef278 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "TopxiaAdminBundle:Course:copy.html.twig", 1);
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
        echo "课程复制";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "
 <form id=\"course-copy-form\" class=\"form-horizontal\" method=\"post\" action=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_course_coping", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
        echo "\">

          <div class=\"row form-group\">
            <div class=\"col-md-3 control-label\">
              <label for=\"course_title\" >课程新标题</label>
            </div>
            <div class=\"col-md-8 controls\">
              <input type=\"text\" id=\"course_title\" name=\"title\"  class=\"form-control\"  value=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "title", array()), "html", null, true);
        echo "\">
            </div>
          </div>

          <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">

</form>
";
    }

    // line 25
    public function block_footer($context, array $blocks = array())
    {
        // line 26
        echo "  <button id=\"course-copy-btn\" data-submiting-text=\"正在复制\" type=\"submit\" class=\"btn btn-primary pull-right\" data-toggle=\"form-submit\" data-target=\"#course-copy-form\">复制</button>
  <button type=\"button\" class=\"btn btn-link pull-right\" data-dismiss=\"modal\">取消</button>
  <script>app.load('course/copy')</script>
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Course:copy.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 26,  70 => 25,  62 => 20,  55 => 16,  45 => 9,  42 => 8,  39 => 7,  33 => 5,  29 => 1,  27 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::bootstrap-modal-layout.html.twig' %}*/
/* */
/* {% set modalSize = 'large' %}*/
/* */
/* {% block title %}课程复制{% endblock %}*/
/* */
/* {% block body %}*/
/* */
/*  <form id="course-copy-form" class="form-horizontal" method="post" action="{{ path('admin_course_coping',{id:course.id})}}">*/
/* */
/*           <div class="row form-group">*/
/*             <div class="col-md-3 control-label">*/
/*               <label for="course_title" >课程新标题</label>*/
/*             </div>*/
/*             <div class="col-md-8 controls">*/
/*               <input type="text" id="course_title" name="title"  class="form-control"  value="{{course.title}}">*/
/*             </div>*/
/*           </div>*/
/* */
/*           <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/* */
/* </form>*/
/* {% endblock %}*/
/* */
/* {% block footer %}*/
/*   <button id="course-copy-btn" data-submiting-text="正在复制" type="submit" class="btn btn-primary pull-right" data-toggle="form-submit" data-target="#course-copy-form">复制</button>*/
/*   <button type="button" class="btn btn-link pull-right" data-dismiss="modal">取消</button>*/
/*   <script>app.load('course/copy')</script>*/
/* {% endblock %}*/
/* */
/* */
/* */
