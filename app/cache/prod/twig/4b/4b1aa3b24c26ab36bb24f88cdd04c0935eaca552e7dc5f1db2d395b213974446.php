<?php

/* TopxiaAdminBundle:CourseQuestion:td-operations.html.twig */
class __TwigTemplate_e04e3177f33c5d1fd19ae80ebdea23afcccd6f2ceca37b07a40647e9e546fdd8 extends Twig_Template
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
        echo "
";
        // line 2
        if (((isset($context["type"]) ? $context["type"] : null) == "unPosted")) {
            // line 3
            echo "
      <div class=\"btn-group\">
        <a class=\"btn btn-default btn-sm remind-teachers\" title=\"提醒教师\" 
        data-url=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_question_remind_teachers", array("courseId" => $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "courseId", array()), "questionId" => $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "id", array()))), "html", null, true);
            echo "\"
          <span class=\"glyphicon glyphicon-bell\"></span>提醒教师
        </a>
        <a href=\"#\" type=\"button\" class=\"btn btn-default btn-sm dropdown-toggle\" data-toggle=\"dropdown\">
          <span class=\"caret\"></span>
        </a>
        <ul class=\"dropdown-menu pull-right\">
          <li>
            <a class=\"btn\" data-role=\"item-delete\" data-name=\"删除问答\" data-url=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_thread_delete", array("id" => $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "id", array()))), "html", null, true);
            echo "\">
              <span class=\"glyphicon glyphicon-trash\"></span> 删除问答</a>
          </li>
        </ul>

      </div>

";
        } elseif ((        // line 21
(isset($context["type"]) ? $context["type"] : null) == "all")) {
            // line 22
            echo "
      <button class=\"btn btn-default btn-sm\" data-role=\"item-delete\" data-name=\"删除问答\" data-url=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_thread_delete", array("id" => $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "id", array()))), "html", null, true);
            echo "\">删除</button>
      
";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:CourseQuestion:td-operations.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 23,  52 => 22,  50 => 21,  40 => 14,  29 => 6,  24 => 3,  22 => 2,  19 => 1,);
    }
}
/* */
/* {% if type == 'unPosted'%}*/
/* */
/*       <div class="btn-group">*/
/*         <a class="btn btn-default btn-sm remind-teachers" title="提醒教师" */
/*         data-url="{{ path('admin_question_remind_teachers', {courseId:question.courseId, questionId:question.id}) }}"*/
/*           <span class="glyphicon glyphicon-bell"></span>提醒教师*/
/*         </a>*/
/*         <a href="#" type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">*/
/*           <span class="caret"></span>*/
/*         </a>*/
/*         <ul class="dropdown-menu pull-right">*/
/*           <li>*/
/*             <a class="btn" data-role="item-delete" data-name="删除问答" data-url="{{ path('admin_thread_delete', {id:question.id}) }}">*/
/*               <span class="glyphicon glyphicon-trash"></span> 删除问答</a>*/
/*           </li>*/
/*         </ul>*/
/* */
/*       </div>*/
/* */
/* {% elseif type == "all" %}*/
/* */
/*       <button class="btn btn-default btn-sm" data-role="item-delete" data-name="删除问答" data-url="{{ path('admin_thread_delete', {id:question.id}) }}">删除</button>*/
/*       */
/* {% endif %}*/
