<?php

/* TopxiaAdminBundle:Navigation:index.html.twig */
class __TwigTemplate_7a3b38b23c1dd3996aef3b6afe2512b413580b3dd6e797574377bb2ec90b9636 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:Navigation:index.html.twig", 1);
        $this->blocks = array(
            'page_buttons' => array($this, 'block_page_buttons'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["script_controller"] = "navigation/page";
        // line 5
        $context["menu"] = (("admin_" . (isset($context["type"]) ? $context["type"] : null)) . "_navigation");
        // line 6
        $context["types"] = array("top" => "顶部", "foot" => "底部");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_page_buttons($context, array $blocks = array())
    {
        echo " 
    <button class=\"btn btn-success btn-sm pull-right\" id=\"add-navigation-btn\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_navigation_create", array("type" => (isset($context["type"]) ? $context["type"] : null))), "html", null, true);
        echo "\">新增";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["types"]) ? $context["types"] : null), (isset($context["type"]) ? $context["type"] : null), array(), "array"), "html", null, true);
        echo "导航</button>
";
    }

    // line 12
    public function block_main($context, array $blocks = array())
    {
        // line 13
        echo "
";
        // line 14
        if (((isset($context["type"]) ? $context["type"] : null) == "foot")) {
            // line 15
            echo "<div class=\"alert alert-info\"><i class=\"glyphicon glyphicon-info-sign\"></i> 清秋主题、默认主题A、默认主题B、雅致简洁之外的主题，请前往 <a class=\"text-info\" style=\"font-weight:bold;\" href=\"";
            echo $this->env->getExtension('routing')->getPath("admin_block", array("category" => "theme"));
            echo "\">［运营］－［编辑区管理］</a> 中进行编辑。</div>
";
        }
        // line 17
        echo "
<table id=\"navigation-table\" class=\"table table-striped table-hover navigation-table\">
\t<thead>
\t  <tr>
\t    <th width=\"50%\">名称</th>
\t    <th width=\"10%\">新开窗口</th>
\t    <th width=\"10%\">状态</th>  
\t    <th width=\"30%\">操作</th>
\t  </tr>
\t</thead>
    
 \t";
        // line 28
        $this->loadTemplate("TopxiaAdminBundle:Navigation:tbody.html.twig", "TopxiaAdminBundle:Navigation:index.html.twig", 28)->display($context);
        // line 29
        echo "</table>
    


";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Navigation:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 29,  76 => 28,  63 => 17,  57 => 15,  55 => 14,  52 => 13,  49 => 12,  41 => 9,  36 => 8,  32 => 1,  30 => 6,  28 => 5,  26 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaAdminBundle::layout.html.twig' %}*/
/* */
/* {% set script_controller = 'navigation/page' %}*/
/* */
/* {% set menu = 'admin_'~type~'_navigation' %}*/
/* {% set types = {top:'顶部', foot:'底部'} %}*/
/* */
/* {% block page_buttons %} */
/*     <button class="btn btn-success btn-sm pull-right" id="add-navigation-btn" data-toggle="modal" data-target="#modal" data-url="{{ path('admin_navigation_create', {type: type}) }}">新增{{ types[type] }}导航</button>*/
/* {% endblock %}*/
/* */
/* {% block main %}*/
/* */
/* {% if type == 'foot' %}*/
/* <div class="alert alert-info"><i class="glyphicon glyphicon-info-sign"></i> 清秋主题、默认主题A、默认主题B、雅致简洁之外的主题，请前往 <a class="text-info" style="font-weight:bold;" href="{{ path('admin_block', {category:'theme'}) }}">［运营］－［编辑区管理］</a> 中进行编辑。</div>*/
/* {% endif %}*/
/* */
/* <table id="navigation-table" class="table table-striped table-hover navigation-table">*/
/* 	<thead>*/
/* 	  <tr>*/
/* 	    <th width="50%">名称</th>*/
/* 	    <th width="10%">新开窗口</th>*/
/* 	    <th width="10%">状态</th>  */
/* 	    <th width="30%">操作</th>*/
/* 	  </tr>*/
/* 	</thead>*/
/*     */
/*  	{% include 'TopxiaAdminBundle:Navigation:tbody.html.twig' %}*/
/* </table>*/
/*     */
/* */
/* */
/* {% endblock %}*/
/* */
