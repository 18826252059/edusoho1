<?php

/* ClassroomBundle:ClassroomManage:students.html.twig */
class __TwigTemplate_2f846bf4f4ad1090b6943d4ba17373d695cb45470e5f73cd95c1547e37bf191c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ClassroomBundle:ClassroomManage:layout.html.twig", "ClassroomBundle:ClassroomManage:students.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
            'maincontent' => array($this, 'block_maincontent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ClassroomBundle:ClassroomManage:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["side_nav"] = "students";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "学员管理 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "       
<div class=\"panel panel-default panel-col\">
  <div class=\"panel-heading\">学员管理

  ";
        // line 12
        if (((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")) == "auditor")) {
            // line 13
            echo "    <a class=\"btn btn-info btn-sm panel-bar mhs\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_manage_student_export_csv", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "id", array()), "role" => (isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")))), "html", null, true);
            echo "\"><i class=\"glyphicon glyphicon-export\"></i> 导出旁听生</a>
  ";
        } else {
            // line 15
            echo "    <div class=\"panel-bar\">
      <button class=\"btn btn-info btn-sm mhs\" id=\"student-add-btn\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_manage_student_create", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "id", array()))), "html", null, true);
            echo "\"><i class=\"glyphicon glyphicon-plus\"></i> 添加学员</button>
      <a class=\"btn btn-info btn-sm mhs\" href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_manage_student_import", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "id", array()))), "html", null, true);
            echo "\"><i class=\"glyphicon glyphicon-import\"></i> 批量导入</a>
      <a class=\"btn btn-info btn-sm mhs\" href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_manage_student_export_csv", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "id", array()), "role" => (isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")))), "html", null, true);
            echo "\"><i class=\"glyphicon glyphicon-export\"></i> 导出学员</a>
    </div>
   ";
        }
        // line 21
        echo "
  </div>
  <div class=\"panel-body\">

    <ul class=\"nav nav-tabs mbl\">
      <li class=\"";
        // line 26
        if (((isset($context["submenu"]) ? $context["submenu"] : $this->getContext($context, "submenu")) == "student")) {
            echo "active";
        }
        echo "\">
        <a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_manage_students", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "id", array()))), "html", null, true);
        echo "\">正式学员
        </a>
      </li>

      <li class=\"";
        // line 31
        if (((isset($context["submenu"]) ? $context["submenu"] : $this->getContext($context, "submenu")) == "aduitor")) {
            echo "active";
        }
        echo "\">
        <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_manage_aduitor", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "id", array()))), "html", null, true);
        echo "\">旁听生
        </a>
      </li>
    </ul>
  ";
        // line 36
        $this->displayBlock('maincontent', $context, $blocks);
        // line 37
        echo "  </div>
</div>

";
    }

    // line 36
    public function block_maincontent($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:ClassroomManage:students.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 36,  109 => 37,  107 => 36,  100 => 32,  94 => 31,  87 => 27,  81 => 26,  74 => 21,  68 => 18,  64 => 17,  60 => 16,  57 => 15,  51 => 13,  49 => 12,  43 => 8,  40 => 7,  33 => 3,  29 => 1,  27 => 5,  11 => 1,);
    }
}
/* {% extends 'ClassroomBundle:ClassroomManage:layout.html.twig' %}*/
/* */
/* {% block title %}学员管理 - {{ parent() }}{% endblock %}*/
/* */
/* {% set side_nav = 'students' %}*/
/* */
/* {% block main %}*/
/*        */
/* <div class="panel panel-default panel-col">*/
/*   <div class="panel-heading">学员管理*/
/* */
/*   {% if role == 'auditor'%}*/
/*     <a class="btn btn-info btn-sm panel-bar mhs" href="{{ path('classroom_manage_student_export_csv', {id:classroom.id,role:role}) }}"><i class="glyphicon glyphicon-export"></i> 导出旁听生</a>*/
/*   {% else %}*/
/*     <div class="panel-bar">*/
/*       <button class="btn btn-info btn-sm mhs" id="student-add-btn" data-toggle="modal" data-target="#modal" data-url="{{ path('classroom_manage_student_create', {id:classroom.id}) }}"><i class="glyphicon glyphicon-plus"></i> 添加学员</button>*/
/*       <a class="btn btn-info btn-sm mhs" href="{{ path('classroom_manage_student_import', {id:classroom.id}) }}"><i class="glyphicon glyphicon-import"></i> 批量导入</a>*/
/*       <a class="btn btn-info btn-sm mhs" href="{{ path('classroom_manage_student_export_csv', {id:classroom.id,role:role}) }}"><i class="glyphicon glyphicon-export"></i> 导出学员</a>*/
/*     </div>*/
/*    {% endif %}*/
/* */
/*   </div>*/
/*   <div class="panel-body">*/
/* */
/*     <ul class="nav nav-tabs mbl">*/
/*       <li class="{% if submenu == 'student' %}active{% endif %}">*/
/*         <a href="{{ path('classroom_manage_students', {id:classroom.id}) }}">正式学员*/
/*         </a>*/
/*       </li>*/
/* */
/*       <li class="{% if submenu == 'aduitor' %}active{% endif %}">*/
/*         <a href="{{ path('classroom_manage_aduitor', {id:classroom.id}) }}">旁听生*/
/*         </a>*/
/*       </li>*/
/*     </ul>*/
/*   {% block maincontent %}{% endblock %}*/
/*   </div>*/
/* </div>*/
/* */
/* {% endblock %}*/
