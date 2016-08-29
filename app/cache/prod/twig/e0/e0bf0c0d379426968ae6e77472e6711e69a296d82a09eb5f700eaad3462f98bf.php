<?php

/* TopxiaWebBundle:Theme:edit-live-course-modal.html.twig */
class __TwigTemplate_9fa5281345da3501cb4058c5cecf50db1bf9ff60f610037d07398af2ed80c482 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "TopxiaWebBundle:Theme:edit-live-course-modal.html.twig", 1);
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
        if ($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "title", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "title", array()), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "defaultTitle", array()), "html", null, true);
        }
        echo "编辑";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "    <form id=\"edit-left-course-form\" class=\"form-horizontal item-config-form\" role=\"form\">
       <div class=\"row form-group\">
          <div class=\"col-md-3 control-label\">
            <label for=\"name\">自定义名称</label>
          </div>
          <div class=\"col-md-7 controls\">
            <input type=\"text\"  class=\"form-control\" name=\"title\">
          </div>
       </div>

       <div class=\"row form-group\">
          <div class=\"col-md-3 control-label\">
            <label for=\"subname\">副标题名称</label>
          </div>
          <div class=\"col-md-7 controls\">
            <input type=\"text\"  class=\"form-control\" name=\"subTitle\">
          </div>
       </div>


      <div class=\"form-group\"> 
        <label class=\"col-sm-3 control-label\">背景颜色设置</label> 
        <div class=\"col-sm-9 check-box\">
        <input type=\"hidden\"  name=\"background\" value=";
        // line 30
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "background", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "background", array()), "")) : ("")), "html", null, true);
        echo ">
          <label class=\"radio-inline\"> 
            <input type=\"radio\"  value=\"section-gray\"";
        // line 32
        if (((($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "background", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "background", array()), "")) : ("")) == "section-gray")) {
            echo " checked=\"checked\"";
        }
        echo "> 
            灰色 
          </label> 
          <label class=\"radio-inline\" > 
            <input type=\"radio\"  value=\"section-wihte\"";
        // line 36
        if (((($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "background", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "background", array()), "")) : ("")) == "section-wihte")) {
            echo " checked=\"checked\"";
        }
        echo " > 
            白色 
          </label>
          <label class=\"radio-inline\" > 
            <input type=\"radio\"  value=\"\"";
        // line 40
        if (((($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "background", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "background", array()), "")) : ("")) == "")) {
            echo " checked=\"checked\"";
        }
        echo " > 
            默认 
          </label>  
        </div> 
      </div>
    </form>

";
    }

    // line 48
    public function block_footer($context, array $blocks = array())
    {
        // line 49
        echo "  <button data-submiting-text=\"正在保存\" class=\"btn btn-primary pull-right\" data-form=\"#edit-left-course-form\" id=\"save-btn\">确定</button>
  <button type=\"button\" class=\"btn btn-link pull-right\" data-dismiss=\"modal\">取消</button>
  <script>app.load('topxiawebbundle/controller/theme/left-edit-modal')</script>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Theme:edit-live-course-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 49,  109 => 48,  95 => 40,  86 => 36,  77 => 32,  72 => 30,  47 => 7,  44 => 6,  33 => 5,  29 => 1,  27 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::bootstrap-modal-layout.html.twig' %}*/
/* */
/* {% set modalSize = 'large' %}*/
/* */
/* {% block title %}{% if config.title %}{{ config.title }}{% else %}{{ config.defaultTitle }}{% endif %}编辑{% endblock %}*/
/* {% block body %}*/
/*     <form id="edit-left-course-form" class="form-horizontal item-config-form" role="form">*/
/*        <div class="row form-group">*/
/*           <div class="col-md-3 control-label">*/
/*             <label for="name">自定义名称</label>*/
/*           </div>*/
/*           <div class="col-md-7 controls">*/
/*             <input type="text"  class="form-control" name="title">*/
/*           </div>*/
/*        </div>*/
/* */
/*        <div class="row form-group">*/
/*           <div class="col-md-3 control-label">*/
/*             <label for="subname">副标题名称</label>*/
/*           </div>*/
/*           <div class="col-md-7 controls">*/
/*             <input type="text"  class="form-control" name="subTitle">*/
/*           </div>*/
/*        </div>*/
/* */
/* */
/*       <div class="form-group"> */
/*         <label class="col-sm-3 control-label">背景颜色设置</label> */
/*         <div class="col-sm-9 check-box">*/
/*         <input type="hidden"  name="background" value={{config.background|default("")}}>*/
/*           <label class="radio-inline"> */
/*             <input type="radio"  value="section-gray"{% if config.background|default("") == "section-gray"%} checked="checked"{% endif %}> */
/*             灰色 */
/*           </label> */
/*           <label class="radio-inline" > */
/*             <input type="radio"  value="section-wihte"{% if config.background|default("") == "section-wihte"%} checked="checked"{% endif %} > */
/*             白色 */
/*           </label>*/
/*           <label class="radio-inline" > */
/*             <input type="radio"  value=""{% if config.background|default("") == ""%} checked="checked"{% endif %} > */
/*             默认 */
/*           </label>  */
/*         </div> */
/*       </div>*/
/*     </form>*/
/* */
/* {% endblock %}*/
/* {% block footer %}*/
/*   <button data-submiting-text="正在保存" class="btn btn-primary pull-right" data-form="#edit-left-course-form" id="save-btn">确定</button>*/
/*   <button type="button" class="btn btn-link pull-right" data-dismiss="modal">取消</button>*/
/*   <script>app.load('topxiawebbundle/controller/theme/left-edit-modal')</script>*/
/* {% endblock %}*/
