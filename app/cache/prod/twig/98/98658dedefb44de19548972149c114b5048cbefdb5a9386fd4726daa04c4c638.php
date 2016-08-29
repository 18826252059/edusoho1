<?php

/* ClassroomBundle:ClassroomAdmin:recommend-modal.html.twig */
class __TwigTemplate_7300571a01f40d618d79e260330debe58e58394212e065d2b25381fd66313cbf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "ClassroomBundle:ClassroomAdmin:recommend-modal.html.twig", 1);
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
        echo "设置推荐";
        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "
<form id=\"classroom-recommend-form\" class=\"form-horizontal\" method=\"post\" action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_classroom_set_recommend", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()), "ref" => (isset($context["ref"]) ? $context["ref"] : null))), "html", null, true);
        echo "\">
  

  <div class=\"row form-group\">
    <div class=\"col-md-2 control-label\">
      <label for=\"number\">序号</label>
    </div>
    <div class=\"col-md-7 controls\">
      <input type=\"text\" id=\"number\" name=\"number\" class=\"form-control\" value=\"\" data-widget-cid=\"widget-1\" data-explain=\"请输入0-10000的整数\">
    <div class=\"help-block\">请输入0-10000的整数(默认序号是100)</div></div>
  </div>

</form>
";
    }

    // line 24
    public function block_footer($context, array $blocks = array())
    {
        // line 25
        echo "  <button id = \"classroom-recommend-btn\" data-submiting-text=\"正在提交\" class=\"btn btn-primary pull-right\" data-toggle=\"form-submit\" data-target=\"#classroom-recommend-form\">保存</button>
  <button type=\"button\" class=\"btn btn-link pull-right\" data-dismiss=\"modal\">取消</button>
  <script>app.load('classroombundle/controller/classroom-admin/recommend-modal')</script>
";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:ClassroomAdmin:recommend-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 25,  64 => 24,  46 => 8,  43 => 7,  40 => 6,  33 => 5,  29 => 1,  27 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::bootstrap-modal-layout.html.twig' %}*/
/* */
/* {% set modalSize = 'large' %}*/
/* */
/* {% block title %}设置推荐{{setting("classroom.name")|default("班级")}}{% endblock %}*/
/* {% block body %}*/
/* */
/* <form id="classroom-recommend-form" class="form-horizontal" method="post" action="{{ path('admin_classroom_set_recommend', {id:classroom.id, ref:ref}) }}">*/
/*   */
/* */
/*   <div class="row form-group">*/
/*     <div class="col-md-2 control-label">*/
/*       <label for="number">序号</label>*/
/*     </div>*/
/*     <div class="col-md-7 controls">*/
/*       <input type="text" id="number" name="number" class="form-control" value="" data-widget-cid="widget-1" data-explain="请输入0-10000的整数">*/
/*     <div class="help-block">请输入0-10000的整数(默认序号是100)</div></div>*/
/*   </div>*/
/* */
/* </form>*/
/* {% endblock %}*/
/* */
/* */
/* {% block footer %}*/
/*   <button id = "classroom-recommend-btn" data-submiting-text="正在提交" class="btn btn-primary pull-right" data-toggle="form-submit" data-target="#classroom-recommend-form">保存</button>*/
/*   <button type="button" class="btn btn-link pull-right" data-dismiss="modal">取消</button>*/
/*   <script>app.load('classroombundle/controller/classroom-admin/recommend-modal')</script>*/
/* {% endblock %}*/
