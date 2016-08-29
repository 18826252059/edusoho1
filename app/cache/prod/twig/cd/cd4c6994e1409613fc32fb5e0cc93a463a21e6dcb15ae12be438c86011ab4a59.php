<?php

/* ClassroomBundle:Classroom:my-classroom.html.twig */
class __TwigTemplate_db7bc265ea118e2badbf4137b9f44c1c34576bbd6c1eb6aa5a44318aca71feae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:My:layout.html.twig", "ClassroomBundle:Classroom:my-classroom.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:My:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["side_nav"] = "my-classroom";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "我的";
        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "<style>
.classroom-footer{

  margin-top: 50px;
}
</style>
<div class=\"panel panel-default panel-col lesson-manage-panel\">
  <div class=\"panel-heading\">
    我的";
        // line 16
        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
        echo "
  </div>

  <div class=\"panel-body\">
       <ul class=\"course-wide-list\">
            ";
        // line 21
        if ((isset($context["classrooms"]) ? $context["classrooms"] : null)) {
            // line 22
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["classrooms"]) ? $context["classrooms"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["classroom"]) {
                // line 23
                echo "            ";
                $context["progress"] = $this->getAttribute((isset($context["progresses"]) ? $context["progresses"] : null), $this->getAttribute($context["classroom"], "id", array()), array(), "array");
                // line 24
                echo "            <li class=\"course-item clearfix\">
              <a class=\"course-picture-link\" href=\"";
                // line 25
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_show", array("id" => $this->getAttribute($context["classroom"], "id", array()))), "html", null, true);
                echo "\" target=\"_blank\">
                <img class=\"course-picture\" src=\"";
                // line 26
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute($context["classroom"], "middlePicture", array()), "classroom.png"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["classroom"], "title", array()), "html", null, true);
                echo "\">
              </a>
              <div class=\"course-body\">
                <h4 class=\"mbl\"><a href=\"";
                // line 29
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_show", array("id" => $this->getAttribute($context["classroom"], "id", array()))), "html", null, true);
                echo "\" target=\"_blank\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["classroom"], "title", array()), "html", null, true);
                echo "</a>                
                ";
                // line 30
                if (($this->getAttribute($context["classroom"], "status", array()) == "draft")) {
                    // line 31
                    echo "                  <span class=\"label label-warning \">未发布</span>
                  ";
                } elseif (($this->getAttribute(                // line 32
$context["classroom"], "status", array()) == "closed")) {
                    // line 33
                    echo "                  <span class=\"label label-danger \">已关闭</span>
                ";
                }
                // line 35
                echo "              </h4>



                ";
                // line 39
                if (twig_in_filter("student", $this->getAttribute($this->getAttribute((isset($context["members"]) ? $context["members"] : null), $this->getAttribute($context["classroom"], "id", array()), array(), "array"), "role", array()))) {
                    // line 40
                    echo "
                <div class=\"pull-right\">
                <span class=\"text-muted\">已学了";
                    // line 42
                    echo twig_escape_filter($this->env, $this->getAttribute($context["classroom"], "day", array()), "html", null, true);
                    echo "天</span><br>
                <a href=\"";
                    // line 43
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_show", array("id" => $this->getAttribute($context["classroom"], "id", array()))), "html", null, true);
                    echo "\" class=\"btn btn-info btn-sm mts\">继续学习</a>
                </div>
                ";
                } else {
                    // line 46
                    echo "                <div class=\"pull-right\">
                <span class=\"text-muted\">旁听生</span><br>
                <a href=\"";
                    // line 48
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_show", array("id" => $this->getAttribute($context["classroom"], "id", array()))), "html", null, true);
                    echo "\" class=\"btn btn-info btn-sm mts\">进入";
                    echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
                    echo "</a>
                </div>
                ";
                }
                // line 51
                echo "
                <div class=\"classroom-footer clearfix\">

                ";
                // line 54
                if (twig_in_filter("student", $this->getAttribute($this->getAttribute((isset($context["members"]) ? $context["members"] : null), $this->getAttribute($context["classroom"], "id", array()), array(), "array"), "role", array()))) {
                    // line 55
                    echo "                <div class=\"col-md-7\">
                  <div class=\"progress\" title=\"已学";
                    // line 56
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["progress"]) ? $context["progress"] : null), "number", array()), "html", null, true);
                    echo "课程\">
                    <div class=\"progress-bar\" style=\"width: ";
                    // line 57
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["progress"]) ? $context["progress"] : null), "percent", array()), "html", null, true);
                    echo "\">
                    </div>
                  </div>
                </div>
                <div class=\"col-md-2\">
                  <span class=\"text-muted mls\">共";
                    // line 62
                    echo twig_escape_filter($this->env, $this->getAttribute($context["classroom"], "coursesCount", array()), "html", null, true);
                    echo "课
                  </span>
                </div>
                ";
                }
                // line 66
                echo "                

                </div>

              </div>
            </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['classroom'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 73
            echo "            ";
        } else {
            // line 74
            echo "            <div class=\"empty\">还没有加入";
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
            echo "！</div>
            ";
        }
        // line 76
        echo "          </ul>
  </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:Classroom:my-classroom.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 76,  182 => 74,  179 => 73,  167 => 66,  160 => 62,  152 => 57,  148 => 56,  145 => 55,  143 => 54,  138 => 51,  130 => 48,  126 => 46,  120 => 43,  116 => 42,  112 => 40,  110 => 39,  104 => 35,  100 => 33,  98 => 32,  95 => 31,  93 => 30,  87 => 29,  79 => 26,  75 => 25,  72 => 24,  69 => 23,  64 => 22,  62 => 21,  54 => 16,  44 => 8,  41 => 7,  32 => 3,  28 => 1,  26 => 5,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle:My:layout.html.twig' %}*/
/* */
/* {% block title %}我的{{ setting('classroom.name')|default("班级") }} - {{ parent() }}{% endblock %}*/
/* */
/* {% set side_nav = 'my-classroom' %}*/
/* */
/* {% block main %}*/
/* <style>*/
/* .classroom-footer{*/
/* */
/*   margin-top: 50px;*/
/* }*/
/* </style>*/
/* <div class="panel panel-default panel-col lesson-manage-panel">*/
/*   <div class="panel-heading">*/
/*     我的{{ setting('classroom.name')|default("班级") }}*/
/*   </div>*/
/* */
/*   <div class="panel-body">*/
/*        <ul class="course-wide-list">*/
/*             {% if classrooms %}*/
/*             {% for classroom in classrooms %}*/
/*             {% set progress = progresses[classroom.id] %}*/
/*             <li class="course-item clearfix">*/
/*               <a class="course-picture-link" href="{{ path('classroom_show', {id:classroom.id}) }}" target="_blank">*/
/*                 <img class="course-picture" src="{{ filepath(classroom.middlePicture, 'classroom.png') }}" alt="{{ classroom.title }}">*/
/*               </a>*/
/*               <div class="course-body">*/
/*                 <h4 class="mbl"><a href="{{ path('classroom_show', {id:classroom.id}) }}" target="_blank">{{classroom.title}}</a>                */
/*                 {% if classroom.status == "draft" %}*/
/*                   <span class="label label-warning ">未发布</span>*/
/*                   {% elseif classroom.status == "closed" %}*/
/*                   <span class="label label-danger ">已关闭</span>*/
/*                 {% endif %}*/
/*               </h4>*/
/* */
/* */
/* */
/*                 {% if "student" in members[classroom.id].role %}*/
/* */
/*                 <div class="pull-right">*/
/*                 <span class="text-muted">已学了{{classroom.day}}天</span><br>*/
/*                 <a href="{{ path('classroom_show', {id:classroom.id}) }}" class="btn btn-info btn-sm mts">继续学习</a>*/
/*                 </div>*/
/*                 {% else %}*/
/*                 <div class="pull-right">*/
/*                 <span class="text-muted">旁听生</span><br>*/
/*                 <a href="{{ path('classroom_show', {id:classroom.id}) }}" class="btn btn-info btn-sm mts">进入{{ setting('classroom.name')|default("班级") }}</a>*/
/*                 </div>*/
/*                 {% endif %}*/
/* */
/*                 <div class="classroom-footer clearfix">*/
/* */
/*                 {% if "student" in members[classroom.id].role %}*/
/*                 <div class="col-md-7">*/
/*                   <div class="progress" title="已学{{ progress.number }}课程">*/
/*                     <div class="progress-bar" style="width: {{ progress.percent }}">*/
/*                     </div>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="col-md-2">*/
/*                   <span class="text-muted mls">共{{classroom.coursesCount}}课*/
/*                   </span>*/
/*                 </div>*/
/*                 {% endif %}*/
/*                 */
/* */
/*                 </div>*/
/* */
/*               </div>*/
/*             </li>*/
/*             {% endfor %}*/
/*             {% else %}*/
/*             <div class="empty">还没有加入{{ setting('classroom.name')|default("班级") }}！</div>*/
/*             {% endif %}*/
/*           </ul>*/
/*   </div>*/
/* </div>*/
/* */
/* {% endblock %}*/
