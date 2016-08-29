<?php

/* TopxiaWebBundle:CourseMaterialManage:list-item.html.twig */
class __TwigTemplate_1c4afbef6d256a088f07e6d03985d611e478fb68a7c40daca2ed7d4b4ab4963b extends Twig_Template
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
        echo "<li class=\"list-group-item clearfix\">
  <button class=\"close delete-btn\" type=\"button\" title=\"删除\" data-url=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_material_delete", array("courseId" => $this->getAttribute((isset($context["material"]) ? $context["material"] : null), "courseId", array()), "lessonId" => $this->getAttribute((isset($context["material"]) ? $context["material"] : null), "lessonId", array()), "materialId" => $this->getAttribute((isset($context["material"]) ? $context["material"] : null), "id", array()))), "html", null, true);
        echo "\">&times;</button>
  ";
        // line 3
        if ($this->getAttribute((isset($context["material"]) ? $context["material"] : null), "link", array())) {
            // line 4
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["material"]) ? $context["material"] : null), "link", array()), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["material"]) ? $context["material"] : null), "title", array()), "html", null, true);
            echo "</a>
    <span class=\"glyphicon glyphicon-new-window text-muted text-sm\" title=\"网络链接资料\"></span>
  ";
        } else {
            // line 7
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_material_download", array("courseId" => $this->getAttribute((isset($context["material"]) ? $context["material"] : null), "courseId", array()), "materialId" => $this->getAttribute((isset($context["material"]) ? $context["material"] : null), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["material"]) ? $context["material"] : null), "title", array()), "html", null, true);
            echo "</a>
  ";
        }
        // line 9
        echo "</li>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseMaterialManage:list-item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 9,  37 => 7,  28 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
/* <li class="list-group-item clearfix">*/
/*   <button class="close delete-btn" type="button" title="删除" data-url="{{ path('course_manage_material_delete', {courseId:material.courseId, lessonId:material.lessonId, materialId:material.id}) }}">&times;</button>*/
/*   {% if material.link %}*/
/*     <a href="{{ material.link }}" target="_blank">{{ material.title }}</a>*/
/*     <span class="glyphicon glyphicon-new-window text-muted text-sm" title="网络链接资料"></span>*/
/*   {% else %}*/
/*     <a href="{{ path('course_material_download', {courseId:material.courseId, materialId:material.id}) }}">{{ material.title }}</a>*/
/*   {% endif %}*/
/* </li>*/
