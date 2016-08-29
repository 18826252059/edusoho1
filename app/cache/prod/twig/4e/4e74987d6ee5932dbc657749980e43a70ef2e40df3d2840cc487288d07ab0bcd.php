<?php

/* TopxiaWebBundle:CourseTestpaperManage:testpaper-form-base-fields.html.twig */
class __TwigTemplate_089c34bf60867c063641f3bfccb6f5ab1be4e60a31f4d084d3639093c4323b13 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"form-group\">
  <div class=\"col-md-2 control-label\"><label for=\"testpaper-name-field\">试卷名称</label></div>
  <div class=\"col-md-8 controls\">
      <input class=\"form-control\"  value=\"";
        // line 4
        if ((($this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "name", array()), null)) : (null))) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "name", array()), "html", null, true);
        }
        echo "\" name=\"name\"   id=\"testpaper-name-field\"/>
  </div>
</div>

<div class=\"form-group\">
  <div class=\"col-md-2 control-label\"><label for=\"testpaper-description-field\">试卷说明</label></div>
  <div class=\"col-md-8 controls\">
    <textarea class=\"form-control\" id=\"testpaper-description-field\" name=\"description\" data-image-upload-url=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editor_upload", array("token" => $this->env->getExtension('topxia_web_twig')->makeUpoadToken("course"))), "html", null, true);
        echo "\">";
        if ((($this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "description", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "description", array()), null)) : (null))) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "description", array()), "html", null, true);
        }
        echo "</textarea>
  </div>
</div>

<div class=\"form-group\">
  <div class=\"col-md-2 control-label\"><label for=\"testpaper-limitedTime-field\">时间限制</label></div>
  <div class=\"col-md-8 controls\">
      <input class=\"form-control width-input width-input-large\" name=\"limitedTime\" id=\"testpaper-limitedTime-field\" value=\"";
        // line 18
        if ((($this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "limitedTime", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "limitedTime", array()), null)) : (null))) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "limitedTime", array()), "html", null, true);
        } else {
            echo "0";
        }
        echo "\" /> 分钟
      <div class=\"help-block\">0分钟，表示无限制</div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseTestpaperManage:testpaper-form-base-fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 18,  36 => 11,  24 => 4,  19 => 1,);
    }
}
/* <div class="form-group">*/
/*   <div class="col-md-2 control-label"><label for="testpaper-name-field">试卷名称</label></div>*/
/*   <div class="col-md-8 controls">*/
/*       <input class="form-control"  value="{% if testpaper.name | default(null)%}{{testpaper.name }}{% endif %}" name="name"   id="testpaper-name-field"/>*/
/*   </div>*/
/* </div>*/
/* */
/* <div class="form-group">*/
/*   <div class="col-md-2 control-label"><label for="testpaper-description-field">试卷说明</label></div>*/
/*   <div class="col-md-8 controls">*/
/*     <textarea class="form-control" id="testpaper-description-field" name="description" data-image-upload-url="{{ path('editor_upload', {token:upload_token('course')}) }}">{% if testpaper.description | default(null)%}{{testpaper.description }}{% endif %}</textarea>*/
/*   </div>*/
/* </div>*/
/* */
/* <div class="form-group">*/
/*   <div class="col-md-2 control-label"><label for="testpaper-limitedTime-field">时间限制</label></div>*/
/*   <div class="col-md-8 controls">*/
/*       <input class="form-control width-input width-input-large" name="limitedTime" id="testpaper-limitedTime-field" value="{% if testpaper.limitedTime | default(null)%}{{testpaper.limitedTime }}{%else%}0{% endif %}" /> 分钟*/
/*       <div class="help-block">0分钟，表示无限制</div>*/
/*   </div>*/
/* </div>*/
