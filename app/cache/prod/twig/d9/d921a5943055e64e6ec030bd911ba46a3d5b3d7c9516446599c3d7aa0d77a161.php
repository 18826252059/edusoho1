<?php

/* TopxiaWebBundle:Theme:edit-groups-modal.html.twig */
class __TwigTemplate_0c58986079d3effdae3d320711420dbe87c69e8306d7c59810cbf65c17f74187 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "TopxiaWebBundle:Theme:edit-groups-modal.html.twig", 1);
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
        echo "  <form id=\"edit-left-course-form\" class=\"form-horizontal item-config-form\" role=\"form\">
    <div class=\"row form-group\">
      <div class=\"col-sm-3 control-label\">
        <label for=\"name\">自定义名称</label>
      </div>
      <div class=\"col-sm-9 controls\">
        <input type=\"text\"  class=\"form-control\" name=\"title\">
      </div>
    </div>

    <div class=\"row form-group\">
      <div class=\"col-sm-3 control-label\">
        <label for=\"subname\">副标题名称</label>
      </div>
      <div class=\"col-sm-9 controls\">
        <input type=\"text\"  class=\"form-control\" name=\"subTitle\">
      </div>
    </div>
    <!-- <div class=\"form-group\">
      <label class=\"col-sm-3 control-label\">小组数量设置</label>
      <div class=\"col-sm-9\">
        <select class=\"form-control width-input-large\" name=\"count\">
          <option value=\"1\">1</option>
          <option value=\"2\">2</option>
          <option value=\"3\">3</option>
          <option value=\"4\">4</option>
          <option value=\"5\">5</option>
          <option value=\"6\">6</option>
          <option value=\"7\">7</option>
          <option value=\"8\">8</option>
        </select>
      </div>
    </div> -->
    <div class=\"form-group\">
      <label class=\"col-sm-3 control-label\">是否启用模块</label>
      <div class=\"col-sm-9 check-box\">
        <label class=\"checkbox-inline\">
          <input type=\"checkbox\" name=\"select1\" value=";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "select1", array()), "html", null, true);
        echo " checked=";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "select1", array()), "html", null, true);
        echo ">
          热门小组
        </label>
        <label class=\"checkbox-inline\" >
          <input type=\"checkbox\" name=\"select2\" value=";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "select2", array()), "html", null, true);
        echo " checked=";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "select2", array()), "html", null, true);
        echo ">
          最新资讯
        </label>
        <label class=\"checkbox-inline\" >
          <input type=\"checkbox\" name=\"select3\"value=";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "select3", array()), "html", null, true);
        echo " checked=";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "select3", array()), "html", null, true);
        echo ">
          学员评价
        </label>
        <label class=\"checkbox-inline\" >
          <input type=\"checkbox\"  name=\"select4\"value=";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "select4", array()), "html", null, true);
        echo " checked=";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "select4", array()), "html", null, true);
        echo ">
          学员动态
        </label>
      </div>
    </div>

    <div class=\"form-group\"> 
      <label class=\"col-sm-3 control-label\">背景颜色设置</label> 
      <div class=\"col-sm-9 check-box\">
      <input type=\"hidden\"  name=\"background\" value=";
        // line 65
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "background", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "background", array()), "")) : ("")), "html", null, true);
        echo ">
        <label class=\"radio-inline\"> 
          <input type=\"radio\"  value=\"section-gray\"";
        // line 67
        if (((($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "background", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "background", array()), "")) : ("")) == "section-gray")) {
            echo " checked=\"checked\"";
        }
        echo "> 
          灰色 
        </label> 
        <label class=\"radio-inline\" > 
          <input type=\"radio\"  value=\"section-wihte\"";
        // line 71
        if (((($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "background", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "background", array()), "")) : ("")) == "section-wihte")) {
            echo " checked=\"checked\"";
        }
        echo " > 
          白色 
        </label>
        <label class=\"radio-inline\" > 
          <input type=\"radio\"  value=\"\"";
        // line 75
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

    // line 82
    public function block_footer($context, array $blocks = array())
    {
        // line 83
        echo "  <button data-submiting-text=\"正在保存\" class=\"btn btn-primary pull-right\" data-form=\"#edit-left-course-form\" id=\"save-btn\">确定</button>
  <button type=\"button\" class=\"btn btn-link pull-right\" data-dismiss=\"modal\">取消</button>
  <script>app.load('topxiawebbundle/controller/theme/left-edit-modal')</script>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Theme:edit-groups-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 83,  163 => 82,  150 => 75,  141 => 71,  132 => 67,  127 => 65,  113 => 56,  104 => 52,  95 => 48,  86 => 44,  47 => 7,  44 => 6,  33 => 5,  29 => 1,  27 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::bootstrap-modal-layout.html.twig' %}*/
/* */
/* {% set modalSize = 'large' %}*/
/* */
/* {% block title %}{% if config.title %}{{ config.title }}{% else %}{{ config.defaultTitle }}{% endif %}编辑{% endblock %}*/
/* {% block body %}*/
/*   <form id="edit-left-course-form" class="form-horizontal item-config-form" role="form">*/
/*     <div class="row form-group">*/
/*       <div class="col-sm-3 control-label">*/
/*         <label for="name">自定义名称</label>*/
/*       </div>*/
/*       <div class="col-sm-9 controls">*/
/*         <input type="text"  class="form-control" name="title">*/
/*       </div>*/
/*     </div>*/
/* */
/*     <div class="row form-group">*/
/*       <div class="col-sm-3 control-label">*/
/*         <label for="subname">副标题名称</label>*/
/*       </div>*/
/*       <div class="col-sm-9 controls">*/
/*         <input type="text"  class="form-control" name="subTitle">*/
/*       </div>*/
/*     </div>*/
/*     <!-- <div class="form-group">*/
/*       <label class="col-sm-3 control-label">小组数量设置</label>*/
/*       <div class="col-sm-9">*/
/*         <select class="form-control width-input-large" name="count">*/
/*           <option value="1">1</option>*/
/*           <option value="2">2</option>*/
/*           <option value="3">3</option>*/
/*           <option value="4">4</option>*/
/*           <option value="5">5</option>*/
/*           <option value="6">6</option>*/
/*           <option value="7">7</option>*/
/*           <option value="8">8</option>*/
/*         </select>*/
/*       </div>*/
/*     </div> -->*/
/*     <div class="form-group">*/
/*       <label class="col-sm-3 control-label">是否启用模块</label>*/
/*       <div class="col-sm-9 check-box">*/
/*         <label class="checkbox-inline">*/
/*           <input type="checkbox" name="select1" value={{config.select1}} checked={{config.select1}}>*/
/*           热门小组*/
/*         </label>*/
/*         <label class="checkbox-inline" >*/
/*           <input type="checkbox" name="select2" value={{config.select2}} checked={{config.select2}}>*/
/*           最新资讯*/
/*         </label>*/
/*         <label class="checkbox-inline" >*/
/*           <input type="checkbox" name="select3"value={{config.select3}} checked={{config.select3}}>*/
/*           学员评价*/
/*         </label>*/
/*         <label class="checkbox-inline" >*/
/*           <input type="checkbox"  name="select4"value={{config.select4}} checked={{config.select4}}>*/
/*           学员动态*/
/*         </label>*/
/*       </div>*/
/*     </div>*/
/* */
/*     <div class="form-group"> */
/*       <label class="col-sm-3 control-label">背景颜色设置</label> */
/*       <div class="col-sm-9 check-box">*/
/*       <input type="hidden"  name="background" value={{config.background|default("")}}>*/
/*         <label class="radio-inline"> */
/*           <input type="radio"  value="section-gray"{% if config.background|default("") == "section-gray"%} checked="checked"{% endif %}> */
/*           灰色 */
/*         </label> */
/*         <label class="radio-inline" > */
/*           <input type="radio"  value="section-wihte"{% if config.background|default("") == "section-wihte"%} checked="checked"{% endif %} > */
/*           白色 */
/*         </label>*/
/*         <label class="radio-inline" > */
/*           <input type="radio"  value=""{% if config.background|default("") == ""%} checked="checked"{% endif %} > */
/*           默认 */
/*         </label>  */
/*       </div> */
/*     </div>*/
/*   </form>*/
/* {% endblock %}*/
/* {% block footer %}*/
/*   <button data-submiting-text="正在保存" class="btn btn-primary pull-right" data-form="#edit-left-course-form" id="save-btn">确定</button>*/
/*   <button type="button" class="btn btn-link pull-right" data-dismiss="modal">取消</button>*/
/*   <script>app.load('topxiawebbundle/controller/theme/left-edit-modal')</script>*/
/* {% endblock %}*/
