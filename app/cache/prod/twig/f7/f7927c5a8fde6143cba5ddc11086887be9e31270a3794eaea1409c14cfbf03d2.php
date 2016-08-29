<?php

/* TopxiaWebBundle:CourseStudentManage:import.html.twig */
class __TwigTemplate_823e3533c809c144a69e4b4624f59576b9b48a6eb53d51b7f9ea50f0b2beeffa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:CourseManage:layout.html.twig", "TopxiaWebBundle:CourseStudentManage:import.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:CourseManage:layout.html.twig";
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
        echo "  ";
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "status", array()) == "published")) {
            // line 8
            echo "    ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Importer:ValidateExcelInfo", array("request" => $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "target" => array("type" => "course", "id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array())))));
            echo "
  ";
        } else {
            // line 10
            echo "    <div class=\"panel panel-default panel-col\">
      <div class=\"panel-heading\">学员批量导入</div>
      <div class=\"panel-body\">
        <div class=\"empty\">未发布";
            // line 13
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
            echo "不能导入学员!</div>
      </div>
    </div>
  ";
        }
        // line 17
        echo "

";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseStudentManage:import.html.twig";
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
/* {% extends 'TopxiaWebBundle:CourseManage:layout.html.twig' %}*/
/* */
/* {% block title %}导入管理 - {{ parent() }}{% endblock %}*/
/* {% set side_nav = 'students' %}*/
/* */
/* {% block main %}*/
/*   {% if course.status == 'published' %}*/
/*     {{ render(controller('TopxiaWebBundle:Importer:ValidateExcelInfo',{request:app.request, target:{type:'course', id:course.id}})) }}*/
/*   {% else %}*/
/*     <div class="panel panel-default panel-col">*/
/*       <div class="panel-heading">学员批量导入</div>*/
/*       <div class="panel-body">*/
/*         <div class="empty">未发布{{setting("classroom.name")|default("班级")}}不能导入学员!</div>*/
/*       </div>*/
/*     </div>*/
/*   {% endif %}*/
/* */
/* */
/* {% endblock %}*/
