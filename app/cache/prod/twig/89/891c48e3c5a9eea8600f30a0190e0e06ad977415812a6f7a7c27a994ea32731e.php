<?php

/* ClassroomBundle:ClassroomAdmin:recommend-tr.html.twig */
class __TwigTemplate_a8e851fb41780c973eab9c0c2e00f18f55c4ab318331d21e68d0688ffe69f934 extends Twig_Template
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
        echo "<tr id=\"classroom-tr-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()), "html", null, true);
        echo "\" data-sort=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "recommendedSeq", array()), "html", null, true);
        echo "\">
  <td>";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "recommendedSeq", array()), "html", null, true);
        echo "</td>
  <td>
    <a href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_show", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
        echo "\" target=\"_blank\"><strong>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "title", array()), "html", null, true);
        echo "</strong></a>
  </td>
  <td>
    <span class=\"text-muted text-sm\">";
        // line 7
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "createdTime", array()), "Y-n-d H:i"), "html", null, true);
        echo "</span>
  </td>
  <td>
    ";
        // line 10
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "recommendedTime", array()), "Y-m-d"), "html", null, true);
        echo "
  </td>
  <td>
    <div class=\"btn-group\">
      <a class=\"btn btn-default btn-sm\" href=\"#modal\" data-toggle=\"modal\" data-url=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_classroom_set_recommend", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()), "ref" => "recommendList")), "html", null, true);
        echo "\">设置序号</a>

      <a href=\"#\" type=\"button\" class=\"btn btn-default btn-sm dropdown-toggle\" data-toggle=\"dropdown\">
        <span class=\"caret\"></span>
      </a>
      <ul class=\"dropdown-menu pull-right\">

        <li><a class=\"cancel-recommend-classroom\" href=\"javascript:\" data-url=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_classroom_cancel_recommend", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()), "ref" => "recommendList")), "html", null, true);
        echo "\" title=\"取消";
        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
        echo "推荐\"><span class=\"glyphicon glyphicon-hand-right\"></span> 取消推荐</a></li>
    
      </ul>
    </div>
  </td>
</tr>";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:ClassroomAdmin:recommend-tr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 21,  52 => 14,  45 => 10,  39 => 7,  31 => 4,  26 => 2,  19 => 1,);
    }
}
/* <tr id="classroom-tr-{{ classroom.id }}" data-sort="{{ classroom.recommendedSeq }}">*/
/*   <td>{{ classroom.recommendedSeq }}</td>*/
/*   <td>*/
/*     <a href="{{ path('classroom_show', {id:classroom.id}) }}" target="_blank"><strong>{{ classroom.title }}</strong></a>*/
/*   </td>*/
/*   <td>*/
/*     <span class="text-muted text-sm">{{ classroom.createdTime|date('Y-n-d H:i') }}</span>*/
/*   </td>*/
/*   <td>*/
/*     {{ classroom.recommendedTime|date('Y-m-d') }}*/
/*   </td>*/
/*   <td>*/
/*     <div class="btn-group">*/
/*       <a class="btn btn-default btn-sm" href="#modal" data-toggle="modal" data-url="{{ path('admin_classroom_set_recommend', {id:classroom.id,ref:'recommendList'}) }}">设置序号</a>*/
/* */
/*       <a href="#" type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">*/
/*         <span class="caret"></span>*/
/*       </a>*/
/*       <ul class="dropdown-menu pull-right">*/
/* */
/*         <li><a class="cancel-recommend-classroom" href="javascript:" data-url="{{ path('admin_classroom_cancel_recommend', {id:classroom.id,ref:'recommendList'}) }}" title="取消{{setting("classroom.name")|default("班级")}}推荐"><span class="glyphicon glyphicon-hand-right"></span> 取消推荐</a></li>*/
/*     */
/*       </ul>*/
/*     </div>*/
/*   </td>*/
/* </tr>*/
