<?php

/* TopxiaWebBundle:CourseQuestionCategoryManage:tr.html.twig */
class __TwigTemplate_7071973365cdfd4e31409504e28e8d527568288c745d71a3e1310b73e4d39cce extends Twig_Template
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
        echo "<tr id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "id", array()), "html", null, true);
        echo "\" class=\"catgory-tr\">
  <td>
    ";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "name", array()), "html", null, true);
        echo "
  </td>
  <td>
    <button class=\"btn btn-default btn-sm\"  data-url=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_question_category_update", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "id" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "id", array()))), "html", null, true);
        echo "\" data-toggle=\"modal\" data-target=\"#modal\"><i class=\"glyphicon glyphicon-edit\"></i> 编辑</button>
    <button type=\"button\" data-id=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "id", array()), "html", null, true);
        echo "\" class=\"btn btn-default btn-sm delete-category\" data-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_question_category_delete", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "id" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "id", array()))), "html", null, true);
        echo "\" tabindex=\"5\"><i class=\"glyphicon glyphicon-trash\"></i> 删除</button>
  </td>
</tr>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseQuestionCategoryManage:tr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 7,  31 => 6,  25 => 3,  19 => 1,);
    }
}
/* <tr id="{{ category.id }}" class="catgory-tr">*/
/*   <td>*/
/*     {{ category.name }}*/
/*   </td>*/
/*   <td>*/
/*     <button class="btn btn-default btn-sm"  data-url="{{ path('course_manage_question_category_update', {courseId:course.id, id:category.id}) }}" data-toggle="modal" data-target="#modal"><i class="glyphicon glyphicon-edit"></i> 编辑</button>*/
/*     <button type="button" data-id="{{category.id}}" class="btn btn-default btn-sm delete-category" data-url="{{ path('course_manage_question_category_delete', {courseId:course.id, id:category.id}) }}" tabindex="5"><i class="glyphicon glyphicon-trash"></i> 删除</button>*/
/*   </td>*/
/* </tr>*/
