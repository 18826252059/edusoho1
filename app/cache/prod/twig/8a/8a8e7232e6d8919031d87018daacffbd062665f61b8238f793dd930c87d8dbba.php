<?php

/* TopxiaAdminBundle:Course:course-recommend-modal.html.twig */
class __TwigTemplate_ceec63d14b81f2055795896bd608c8329ad742101f895e597a07203ccd0f5ada extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "TopxiaAdminBundle:Course:course-recommend-modal.html.twig", 1);
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
        echo "设置推荐课程";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "
<form id=\"course-recommend-form\" class=\"form-horizontal\" method=\"post\" action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_course_recommend", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "ref" => (isset($context["ref"]) ? $context["ref"] : null), "filter" => (isset($context["filter"]) ? $context["filter"] : null))), "html", null, true);
        echo "\">
  

  <div class=\"row form-group\">
    <div class=\"col-md-2 control-label\">
      <label for=\"number\">序号</label>
    </div>
    <div class=\"col-md-7 controls\">
      <input type=\"text\" id=\"number\" name=\"number\" class=\"form-control\" value=\"\" data-widget-cid=\"widget-1\" data-explain=\"请输入0-10000的整数\">
    <div class=\"help-block\">请输入0-10000的整数</div></div>
  </div>

</form>
";
    }

    // line 24
    public function block_footer($context, array $blocks = array())
    {
        // line 25
        echo "  <button id = \"course-recommend-btn\" data-submiting-text=\"正在提交\" class=\"btn btn-primary pull-right\" data-toggle=\"form-submit\" data-target=\"#course-recommend-form\">保存</button>
  <button type=\"button\" class=\"btn btn-link pull-right\" data-dismiss=\"modal\">取消</button>
  <script>app.load('course/recommend-modal')</script>
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Course:course-recommend-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 25,  63 => 24,  45 => 8,  42 => 7,  39 => 6,  33 => 5,  29 => 1,  27 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::bootstrap-modal-layout.html.twig' %}*/
/* */
/* {% set modalSize = 'large' %}*/
/* */
/* {% block title %}设置推荐课程{% endblock %}*/
/* {% block body %}*/
/* */
/* <form id="course-recommend-form" class="form-horizontal" method="post" action="{{ path('admin_course_recommend', {id:course.id, ref:ref, filter:filter}) }}">*/
/*   */
/* */
/*   <div class="row form-group">*/
/*     <div class="col-md-2 control-label">*/
/*       <label for="number">序号</label>*/
/*     </div>*/
/*     <div class="col-md-7 controls">*/
/*       <input type="text" id="number" name="number" class="form-control" value="" data-widget-cid="widget-1" data-explain="请输入0-10000的整数">*/
/*     <div class="help-block">请输入0-10000的整数</div></div>*/
/*   </div>*/
/* */
/* </form>*/
/* {% endblock %}*/
/* */
/* */
/* {% block footer %}*/
/*   <button id = "course-recommend-btn" data-submiting-text="正在提交" class="btn btn-primary pull-right" data-toggle="form-submit" data-target="#course-recommend-form">保存</button>*/
/*   <button type="button" class="btn btn-link pull-right" data-dismiss="modal">取消</button>*/
/*   <script>app.load('course/recommend-modal')</script>*/
/* {% endblock %}*/
