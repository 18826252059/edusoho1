<?php

/* TopxiaWebBundle:Group:setting-info.html.twig */
class __TwigTemplate_f6583a4a77ed03d9d97ce5197176b9c5afc413a9d5e939b7af68d6602f4b9877 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:Group:setting-layout.html.twig", "TopxiaWebBundle:Group:setting-info.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'group_setting_body' => array($this, 'block_group_setting_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:Group:setting-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["script_controller"] = "group/group";
        // line 7
        $context["settingNav"] = "info";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["groupinfo"]) ? $context["groupinfo"] : null), "title", array()), "html", null, true);
        echo "小组 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 9
    public function block_group_setting_body($context, array $blocks = array())
    {
        // line 10
        echo "
  <form id=\"user-group-form\" class=\"form-horizontal\" method=\"post\" action=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_edit", array("id" => $this->getAttribute((isset($context["groupinfo"]) ? $context["groupinfo"] : null), "id", array()))), "html", null, true);
        echo "\">
                      
    <div class=\"form-group\">
      <label class=\"col-md-2 control-label\" for=\"group_grouptitle\">小组名称</label>
      <div class=\"col-md-9 controls\">
        <input type=\"text\" id=\"group_grouptitle\" name=\"group[grouptitle]\" class=\"form-control\"
        value=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["groupinfo"]) ? $context["groupinfo"] : null), "title", array()), "html", null, true);
        echo "\" >
        <div class=\"help-block\" style=\"display:none;\"></div>
      </div>
    </div>

    <div class=\"form-group\">
      <label class=\"col-md-2 control-label\" for=\"group\">小组介绍</label>
      <div class=\"col-md-9 controls\">
        <textarea name=\"group[about]\" rows=\"10\" id=\"group\" class=\"form-control\" data-image-upload-url=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editor_upload", array("token" => $this->env->getExtension('topxia_web_twig')->makeUpoadToken("default"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["groupinfo"]) ? $context["groupinfo"] : null), "about", array()), "html", null, true);
        echo "</textarea>
      </div>
    </div>
    
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
    

    <div class=\"row\">
      <div class=\"col-xs-7 col-xs-offset-2\">
        <button id=\"group-save-btn\" data-submiting-text=\"正在修改\" type=\"submit\" class=\"btn btn-primary\">修改</button>
      </div>
    </div>

  </form>

";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Group:setting-info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 29,  68 => 25,  57 => 17,  48 => 11,  45 => 10,  42 => 9,  34 => 5,  30 => 1,  28 => 7,  26 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle:Group:setting-layout.html.twig' %}*/
/* */
/* {% set script_controller = 'group/group' %}*/
/* */
/* {% block title %}{{groupinfo.title}}小组 - {{ parent() }}{% endblock %}*/
/* */
/* {% set settingNav = 'info' %}*/
/* */
/* {% block group_setting_body %}*/
/* */
/*   <form id="user-group-form" class="form-horizontal" method="post" action="{{path('group_edit',{id:groupinfo.id})}}">*/
/*                       */
/*     <div class="form-group">*/
/*       <label class="col-md-2 control-label" for="group_grouptitle">小组名称</label>*/
/*       <div class="col-md-9 controls">*/
/*         <input type="text" id="group_grouptitle" name="group[grouptitle]" class="form-control"*/
/*         value="{{groupinfo.title}}" >*/
/*         <div class="help-block" style="display:none;"></div>*/
/*       </div>*/
/*     </div>*/
/* */
/*     <div class="form-group">*/
/*       <label class="col-md-2 control-label" for="group">小组介绍</label>*/
/*       <div class="col-md-9 controls">*/
/*         <textarea name="group[about]" rows="10" id="group" class="form-control" data-image-upload-url="{{ path('editor_upload', {token:upload_token('default')}) }}">{{groupinfo.about}}</textarea>*/
/*       </div>*/
/*     </div>*/
/*     */
/*     <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/*     */
/* */
/*     <div class="row">*/
/*       <div class="col-xs-7 col-xs-offset-2">*/
/*         <button id="group-save-btn" data-submiting-text="正在修改" type="submit" class="btn btn-primary">修改</button>*/
/*       </div>*/
/*     </div>*/
/* */
/*   </form>*/
/* */
/* {% endblock %}*/
