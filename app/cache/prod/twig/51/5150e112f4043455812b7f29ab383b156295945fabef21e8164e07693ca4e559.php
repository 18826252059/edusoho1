<?php

/* TopxiaWebBundle:Group:groupadd.html.twig */
class __TwigTemplate_de4de11c9c850075f9f18e2e5733cc2fb504f1c4a0a5a3409451493156982358 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:Group:layout.html.twig", "TopxiaWebBundle:Group:groupadd.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:Group:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["script_controller"] = "group/group";
        // line 4
        $context["side_nav"] = "group";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "创建小组 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "  <div class=\"panel panel-default\">
    <div class=\"panel-heading\"><h3 class=\"panel-title\">创建小组</h3></div>
    <div class=\"panel-body\">
      <form id=\"user-group-form\" class=\"form-horizontal\" method=\"post\" action=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("group_add");
        echo "\">
        ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "

        <div class=\"form-group\">
          <label class=\"col-md-2 control-label\" for=\"group_grouptitle\">小组名称</label>
          <div class=\"col-md-7 controls\">
            <input type=\"text\" id=\"group_grouptitle\" name=\"group[grouptitle]\" class=\"form-control\"
            >
            <div class=\"help-block\" style=\"display:none;\"></div>
          </div>
        </div>

        <div class=\"form-group\">
          <label class=\"col-md-2 control-label\" for=\"group_about\">小组介绍</label>
          <div class=\"col-md-7 controls\">
            <textarea name=\"group[about]\" rows=\"10\" id=\"group\" class=\"form-control\" data-image-upload-url=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editor_upload", array("token" => $this->env->getExtension('topxia_web_twig')->makeUpoadToken("default"))), "html", null, true);
        echo "\"></textarea>
          </div>
        </div>
        
        <div class=\"row\">
          <div class=\"col-md-7 col-md-offset-2\">
            <button id=\"group-save-btn\" data-submiting-text=\"正在创建\" type=\"submit\" class=\"btn btn-primary\">创建</button>
          </div>
        </div>
        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
      </form>
    </div>
  </div>


  
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Group:groupadd.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 34,  70 => 25,  53 => 11,  49 => 10,  44 => 7,  41 => 6,  34 => 2,  30 => 1,  28 => 4,  26 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle:Group:layout.html.twig' %}*/
/* {% block title %}创建小组 - {{ parent() }}{% endblock %}*/
/* {% set script_controller = 'group/group' %}*/
/* {% set side_nav = 'group' %}*/
/* */
/* {% block content %}*/
/*   <div class="panel panel-default">*/
/*     <div class="panel-heading"><h3 class="panel-title">创建小组</h3></div>*/
/*     <div class="panel-body">*/
/*       <form id="user-group-form" class="form-horizontal" method="post" action="{{path ('group_add')}}">*/
/*         {{ web_macro.flash_messages() }}*/
/* */
/*         <div class="form-group">*/
/*           <label class="col-md-2 control-label" for="group_grouptitle">小组名称</label>*/
/*           <div class="col-md-7 controls">*/
/*             <input type="text" id="group_grouptitle" name="group[grouptitle]" class="form-control"*/
/*             >*/
/*             <div class="help-block" style="display:none;"></div>*/
/*           </div>*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*           <label class="col-md-2 control-label" for="group_about">小组介绍</label>*/
/*           <div class="col-md-7 controls">*/
/*             <textarea name="group[about]" rows="10" id="group" class="form-control" data-image-upload-url="{{ path('editor_upload', {token:upload_token('default')}) }}"></textarea>*/
/*           </div>*/
/*         </div>*/
/*         */
/*         <div class="row">*/
/*           <div class="col-md-7 col-md-offset-2">*/
/*             <button id="group-save-btn" data-submiting-text="正在创建" type="submit" class="btn btn-primary">创建</button>*/
/*           </div>*/
/*         </div>*/
/*         <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/*       </form>*/
/*     </div>*/
/*   </div>*/
/* */
/* */
/*   */
/* {% endblock %}*/
