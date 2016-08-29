<?php

/* ClassroomBundle:ClassroomManage:import.html.twig */
class __TwigTemplate_6f44845c3b1fa4655d77146cbf9e20e7e7f220c9ee58212b8ebdbcf9a4cbb11f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ClassroomBundle:ClassroomManage:layout.html.twig", "ClassroomBundle:ClassroomManage:import.html.twig", 1);
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
        // line 4
        $context["side_nav"] = "students";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "导入管理 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        // line 7
        echo " ";
        if (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "status", array()) == "published")) {
            // line 8
            echo "\t";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Importer:ValidateExcelInfo", array("request" => $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "target" => array("type" => "classroom", "id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "id", array())))));
            echo "
 ";
        } else {
            // line 10
            echo "\t<div class=\"panel panel-default panel-col\">
\t\t<div class=\"panel-heading\">学员批量导入</div>
 \t \t<div class=\"panel-body\">
 \t \t\t<div class=\"empty\">未发布";
            // line 13
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
            echo "不能导入学员!</div>
 \t \t</div>
 \t</div>
 ";
        }
        // line 17
        echo "

";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:ClassroomManage:import.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 17,  56 => 13,  51 => 10,  45 => 8,  42 => 7,  39 => 6,  32 => 3,  28 => 1,  26 => 4,  11 => 1,);
    }
}
/* {% extends 'ClassroomBundle:ClassroomManage:layout.html.twig' %}*/
/* */
/* {% block title %}导入管理 - {{ parent() }}{% endblock %}*/
/* {% set side_nav = 'students' %}*/
/* */
/* {% block main %}*/
/*  {% if classroom.status == 'published' %}*/
/* 	{{ render(controller('TopxiaWebBundle:Importer:ValidateExcelInfo',{request:app.request, target:{type:'classroom', id:classroom.id}})) }}*/
/*  {% else %}*/
/* 	<div class="panel panel-default panel-col">*/
/* 		<div class="panel-heading">学员批量导入</div>*/
/*  	 	<div class="panel-body">*/
/*  	 		<div class="empty">未发布{{setting("classroom.name")|default("班级")}}不能导入学员!</div>*/
/*  	 	</div>*/
/*  	</div>*/
/*  {% endif %}*/
/* */
/* */
/* {% endblock %}*/
