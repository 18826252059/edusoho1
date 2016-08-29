<?php

/* ClassroomBundle:ClassroomManage:set-info.html.twig */
class __TwigTemplate_4c55294c1c411c363f07eb9da0b1cab8a873922f1d95733aeff8f6bf21605d85 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ClassroomBundle:ClassroomManage:layout.html.twig", "ClassroomBundle:ClassroomManage:set-info.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ClassroomBundle:ClassroomManage:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["side_nav"] = "base";
        // line 4
        $context["script_controller"] = "classroombundle/controller/classroom/set-info";
        // line 5
        $this->env->getExtension('topxia_web_twig')->loadScript("classroombundle/controller/classroom-admin/classroom-create");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo "基本信息 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 9
    public function block_main($context, array $blocks = array())
    {
        // line 10
        echo "<div class=\"panel panel-default panel-col\">
  <div class=\"panel-heading\">基本信息</div>
  <div class=\"panel-body\">
    ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "
    <form class=\"form-horizontal\" method=\"post\" id=\"classroom-set-form\" novalidate>

      <div class=\"row form-group\">
        <div class=\"col-md-2 control-label\">
          <label for=\"title\">名称</label>
        </div>
        <div class=\"controls col-md-8\">
          <input name=\"title\" type=\"text\"  id=\"title\" class=\"form-control\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "title", array()), "html", null, true);
        echo "\"/>
        </div>
      </div>

      <div class=\"row form-group\">
        <div class=\"col-md-2 control-label\">
          <label >简介</label>
        </div>
        <div class=\"controls col-md-8\">
          <textarea name=\"about\" class=\"form-control\" rows=\"6\" 
          data-image-upload-url=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editor_upload", array("token" => $this->env->getExtension('topxia_web_twig')->makeUpoadToken("default"))), "html", null, true);
        echo "\"
          data-flash-upload-url=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editor_upload", array("token" => $this->env->getExtension('topxia_web_twig')->makeUpoadToken("default", "flash"))), "html", null, true);
        echo "\" id=\"about\">";
        echo $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "about", array());
        echo "</textarea>
        </div>
      </div>

     ";
        // line 48
        echo "
      <div class=\"row form-group\">
        <div class=\"col-md-2 control-label\">
          <label >";
        // line 51
        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
        echo "展示</label>
        </div>
        <div class=\"col-md-8 controls radios\">
          <label>
          <input id=\"showable-open\" type=\"radio\" name=\"showable\" value=\"1\" data-showable=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "showable", array()), "html", null, true);
        echo "\"> 开启
          </label>
          <label>
            <input id=\"showable-close\" type=\"radio\" name=\"showable\" value=\"0\"> 关闭
          </label>
          <div class=\"help-block\">关闭后，";
        // line 60
        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
        echo "将彻底隐藏，无法在前台查看到。</div>
        </div>

      </div>
      <div class=\"row form-group\">
      <div id='buyable'>
        <div class=\"col-md-2 control-label\">
          <label >";
        // line 67
        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
        echo "购买</label>
        </div>
        <div class=\"col-md-8 controls radios\">
          <label>
          <input id=\"buyable-open\" type=\"radio\" name=\"buyable\" value=\"1\" data-buyable=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "buyable", array()), "html", null, true);
        echo "\" > 开启
          </label>
          <label>
            <input id=\"buyable-close\" type=\"radio\" name=\"buyable\" value=\"0\"> 关闭
          </label>
          <div class=\"help-block\">关闭后";
        // line 76
        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
        echo "将无法在线购买加入。</div>
        </div>
        </div>
      </div>
      
      <div class=\"form-group\">
        <label class=\"col-md-2 control-label\">分类</label>
        <div class=\"col-md-8 controls\">
          <select id=\"course_categoryId\" name=\"categoryId\" required=\"required\" class=\"form-control width-input width-input-large\">
            ";
        // line 85
        echo $this->env->getExtension('topxia_html_twig')->selectOptions($this->env->getExtension('topxia_web_twig')->getCategoryChoices("course"), $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "categoryId", array()), array("0" => "分类"));
        echo "
          </select>
          <div class=\"help-block\" style=\"display:none;\"></div>
        </div>
      </div>

      <div class=\"row form-group\">
        <div class=\"col-md-2 control-label\"></div>
        <div class=\"controls col-md-8\">
          <button type=\"submit\" class=\"btn btn-primary\" id=\"classroom-save\">提交</button>  
        </div>
      </div>

      <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
    </form>
  </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:ClassroomManage:set-info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 98,  145 => 85,  133 => 76,  125 => 71,  118 => 67,  108 => 60,  100 => 55,  93 => 51,  88 => 48,  79 => 32,  75 => 31,  62 => 21,  51 => 13,  46 => 10,  43 => 9,  36 => 7,  32 => 1,  30 => 5,  28 => 4,  26 => 3,  11 => 1,);
    }
}
/* {% extends 'ClassroomBundle:ClassroomManage:layout.html.twig' %}*/
/* */
/* {% set side_nav = 'base' %}*/
/* {% set script_controller = 'classroombundle/controller/classroom/set-info' %}*/
/* {% do load_script('classroombundle/controller/classroom-admin/classroom-create') %}*/
/* */
/* {% block title %}基本信息 - {{ parent() }}{% endblock %}*/
/* */
/* {% block main %}*/
/* <div class="panel panel-default panel-col">*/
/*   <div class="panel-heading">基本信息</div>*/
/*   <div class="panel-body">*/
/*     {{ web_macro.flash_messages() }}*/
/*     <form class="form-horizontal" method="post" id="classroom-set-form" novalidate>*/
/* */
/*       <div class="row form-group">*/
/*         <div class="col-md-2 control-label">*/
/*           <label for="title">名称</label>*/
/*         </div>*/
/*         <div class="controls col-md-8">*/
/*           <input name="title" type="text"  id="title" class="form-control" value="{{classroom.title}}"/>*/
/*         </div>*/
/*       </div>*/
/* */
/*       <div class="row form-group">*/
/*         <div class="col-md-2 control-label">*/
/*           <label >简介</label>*/
/*         </div>*/
/*         <div class="controls col-md-8">*/
/*           <textarea name="about" class="form-control" rows="6" */
/*           data-image-upload-url="{{ path('editor_upload', {token:upload_token('default')}) }}"*/
/*           data-flash-upload-url="{{ path('editor_upload', {token:upload_token('default', 'flash')}) }}" id="about">{{ classroom.about|raw }}</textarea>*/
/*         </div>*/
/*       </div>*/
/* */
/*      {# 先隐藏了到时候再说*/
/*       <div class="row form-group">*/
/*         <div class="col-md-2 control-label">*/
/*           <label >课程说明</label>*/
/*         </div>*/
/*         <div class="controls col-md-8">*/
/*           <textarea name="description" rows="10" class="form-control" */
/*           data-image-upload-url="{{ path('editor_upload', {token:upload_token('default')}) }}"*/
/*           data-flash-upload-url="{{ path('editor_upload', {token:upload_token('default', 'flash')}) }}"*/
/*           id="description">{{classroom.description}}</textarea>*/
/*         </div>*/
/*       </div> #}*/
/* */
/*       <div class="row form-group">*/
/*         <div class="col-md-2 control-label">*/
/*           <label >{{setting("classroom.name")|default("班级")}}展示</label>*/
/*         </div>*/
/*         <div class="col-md-8 controls radios">*/
/*           <label>*/
/*           <input id="showable-open" type="radio" name="showable" value="1" data-showable="{{classroom.showable}}"> 开启*/
/*           </label>*/
/*           <label>*/
/*             <input id="showable-close" type="radio" name="showable" value="0"> 关闭*/
/*           </label>*/
/*           <div class="help-block">关闭后，{{setting("classroom.name")|default("班级")}}将彻底隐藏，无法在前台查看到。</div>*/
/*         </div>*/
/* */
/*       </div>*/
/*       <div class="row form-group">*/
/*       <div id='buyable'>*/
/*         <div class="col-md-2 control-label">*/
/*           <label >{{setting("classroom.name")|default("班级")}}购买</label>*/
/*         </div>*/
/*         <div class="col-md-8 controls radios">*/
/*           <label>*/
/*           <input id="buyable-open" type="radio" name="buyable" value="1" data-buyable="{{classroom.buyable}}" > 开启*/
/*           </label>*/
/*           <label>*/
/*             <input id="buyable-close" type="radio" name="buyable" value="0"> 关闭*/
/*           </label>*/
/*           <div class="help-block">关闭后{{setting("classroom.name")|default("班级")}}将无法在线购买加入。</div>*/
/*         </div>*/
/*         </div>*/
/*       </div>*/
/*       */
/*       <div class="form-group">*/
/*         <label class="col-md-2 control-label">分类</label>*/
/*         <div class="col-md-8 controls">*/
/*           <select id="course_categoryId" name="categoryId" required="required" class="form-control width-input width-input-large">*/
/*             {{ select_options(category_choices('course'), classroom.categoryId, {'0':'分类'}) }}*/
/*           </select>*/
/*           <div class="help-block" style="display:none;"></div>*/
/*         </div>*/
/*       </div>*/
/* */
/*       <div class="row form-group">*/
/*         <div class="col-md-2 control-label"></div>*/
/*         <div class="controls col-md-8">*/
/*           <button type="submit" class="btn btn-primary" id="classroom-save">提交</button>  */
/*         </div>*/
/*       </div>*/
/* */
/*       <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/*     </form>*/
/*   </div>*/
/* </div>*/
/* */
/* {% endblock %}*/
/* */
