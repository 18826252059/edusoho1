<?php

/* ClassroomBundle:ClassroomManage/Homework:index.html.twig */
class __TwigTemplate_00aae09b988b736d26b97ffdc578bccec56bce2b2371ed5757767b4ff1695770 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ClassroomBundle:ClassroomManage:layout.html.twig", "ClassroomBundle:ClassroomManage/Homework:index.html.twig", 1);
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
        $context["side_nav"] = "homework-check";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "作业批改 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        // line 7
        echo "  <div class=\"panel panel-default panel-col\">
    <div class=\"panel-heading\">作业批改</div>
    <div class=\"panel-body\">
      <ul class=\"nav nav-tabs\">
        <li ";
        // line 11
        if (((isset($context["status"]) ? $context["status"] : null) == "reviewing")) {
            echo " class=\"active\"";
        }
        echo ">
          <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_manage_homework", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()), "status" => "reviewing")), "html", null, true);
        echo "\">未批改
            <span class=\"badge\">";
        // line 13
        echo twig_escape_filter($this->env, ((array_key_exists("reviewingCount", $context)) ? (_twig_default_filter((isset($context["reviewingCount"]) ? $context["reviewingCount"] : null), 0)) : (0)), "html", null, true);
        echo "</span>
          </a>
        </li>

        <li ";
        // line 17
        if (((isset($context["status"]) ? $context["status"] : null) == "finished")) {
            echo " class=\"active\"";
        }
        echo ">
          <a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_manage_homework", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()), "status" => "finished")), "html", null, true);
        echo "\">已批改
            <span class=\"badge\">";
        // line 19
        echo twig_escape_filter($this->env, ((array_key_exists("finishedCount", $context)) ? (_twig_default_filter((isset($context["finishedCount"]) ? $context["finishedCount"] : null), 0)) : (0)), "html", null, true);
        echo "</span>
          </a>
        </li>
      </ul>
      ";
        // line 23
        $this->loadTemplate("HomeworkBundle:CourseHomeworkManage:teaching-homework-list.html.twig", "ClassroomBundle:ClassroomManage/Homework:index.html.twig", 23)->display($context);
        // line 24
        echo "
      ";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo "
    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:ClassroomManage/Homework:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 25,  84 => 24,  82 => 23,  75 => 19,  71 => 18,  65 => 17,  58 => 13,  54 => 12,  48 => 11,  42 => 7,  39 => 6,  32 => 3,  28 => 1,  26 => 4,  11 => 1,);
    }
}
/* {% extends 'ClassroomBundle:ClassroomManage:layout.html.twig' %}*/
/* */
/* {% block title %}作业批改 - {{ parent() }}{% endblock %}*/
/* {% set side_nav = 'homework-check' %}*/
/* */
/* {% block main %}*/
/*   <div class="panel panel-default panel-col">*/
/*     <div class="panel-heading">作业批改</div>*/
/*     <div class="panel-body">*/
/*       <ul class="nav nav-tabs">*/
/*         <li {% if status == 'reviewing' %} class="active"{% endif %}>*/
/*           <a href="{{ path('classroom_manage_homework', {id:classroom.id,status:'reviewing'}) }}">未批改*/
/*             <span class="badge">{{ reviewingCount|default(0) }}</span>*/
/*           </a>*/
/*         </li>*/
/* */
/*         <li {% if status == 'finished' %} class="active"{% endif %}>*/
/*           <a href="{{ path('classroom_manage_homework', {id:classroom.id,status:'finished'}) }}">已批改*/
/*             <span class="badge">{{ finishedCount|default(0) }}</span>*/
/*           </a>*/
/*         </li>*/
/*       </ul>*/
/*       {% include 'HomeworkBundle:CourseHomeworkManage:teaching-homework-list.html.twig' %}*/
/* */
/*       {{ web_macro.paginator(paginator) }}*/
/*     </div>*/
/*   </div>*/
/* {% endblock %}*/
