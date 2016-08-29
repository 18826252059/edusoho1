<?php

/* TopxiaAdminBundle:Course:course-recommend-tr.html.twig */
class __TwigTemplate_d46999267c53ab26486d4d98174038c6189be75f3728b65d00d67a086a5a5303 extends Twig_Template
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
        $context["admin_macro"] = $this->loadTemplate("TopxiaAdminBundle::macro.html.twig", "TopxiaAdminBundle:Course:course-recommend-tr.html.twig", 1);
        // line 2
        $context["target"] = "recommend_list";
        // line 3
        echo "<tr id=\"course-tr-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "html", null, true);
        echo "\" data-sort=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "recommendedSeq", array()), "html", null, true);
        echo "\">
  <td>";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "recommendedSeq", array()), "html", null, true);
        echo "</td>
  <td>
    <a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
        echo "\" target=\"_blank\"><strong>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "title", array()), "html", null, true);
        echo "</strong></a>
    <br>
    <span class=\"text-muted text-sm\">分类：";
        // line 8
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "name", array()), "--")) : ("--")), "html", null, true);
        echo "</span>
  </td>
  <td>
    ";
        // line 11
        echo $context["admin_macro"]->getuser_link((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")));
        echo "
    <br>
    <span class=\"text-muted text-sm\">";
        // line 13
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "createdTime", array()), "Y-n-d H:i"), "html", null, true);
        echo "</span>
  </td>
  <td>
    ";
        // line 16
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "recommendedTime", array()), "Y-m-d"), "html", null, true);
        echo "
  </td>
  <td>
    <div class=\"btn-group\">
      <a class=\"btn btn-default btn-sm\" href=\"#modal\" data-toggle=\"modal\" data-url=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_course_recommend", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "ref" => "recommendList")), "html", null, true);
        echo "\">设置序号</a>

      <a href=\"#\" type=\"button\" class=\"btn btn-default btn-sm dropdown-toggle\" data-toggle=\"dropdown\">
        <span class=\"caret\"></span>
      </a>
      <ul class=\"dropdown-menu pull-right\">

        <li><a class=\"cancel-recommend-course\" href=\"javascript:\" data-url=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_course_cancel_recommend", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "target" => (isset($context["target"]) ? $context["target"] : $this->getContext($context, "target")))), "html", null, true);
        echo "\"><span class=\"glyphicon glyphicon-hand-right\"></span> 取消推荐</a></li>
    
      </ul>
    </div>
  </td>
</tr>";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Course:course-recommend-tr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 27,  66 => 20,  59 => 16,  53 => 13,  48 => 11,  42 => 8,  35 => 6,  30 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% import "TopxiaAdminBundle::macro.html.twig" as admin_macro %}*/
/* {% set target = 'recommend_list' %}*/
/* <tr id="course-tr-{{ course.id }}" data-sort="{{ course.recommendedSeq }}">*/
/*   <td>{{ course.recommendedSeq }}</td>*/
/*   <td>*/
/*     <a href="{{ path('course_show', {id:course.id}) }}" target="_blank"><strong>{{ course.title }}</strong></a>*/
/*     <br>*/
/*     <span class="text-muted text-sm">分类：{{ category.name|default('--') }}</span>*/
/*   </td>*/
/*   <td>*/
/*     {{ admin_macro.user_link(user) }}*/
/*     <br>*/
/*     <span class="text-muted text-sm">{{ course.createdTime|date('Y-n-d H:i') }}</span>*/
/*   </td>*/
/*   <td>*/
/*     {{ course.recommendedTime|date('Y-m-d') }}*/
/*   </td>*/
/*   <td>*/
/*     <div class="btn-group">*/
/*       <a class="btn btn-default btn-sm" href="#modal" data-toggle="modal" data-url="{{ path('admin_course_recommend', {id:course.id, ref:'recommendList'}) }}">设置序号</a>*/
/* */
/*       <a href="#" type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">*/
/*         <span class="caret"></span>*/
/*       </a>*/
/*       <ul class="dropdown-menu pull-right">*/
/* */
/*         <li><a class="cancel-recommend-course" href="javascript:" data-url="{{ path('admin_course_cancel_recommend', {id:course.id,target:target}) }}"><span class="glyphicon glyphicon-hand-right"></span> 取消推荐</a></li>*/
/*     */
/*       </ul>*/
/*     </div>*/
/*   </td>*/
/* </tr>*/
