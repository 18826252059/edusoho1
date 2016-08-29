<?php

/* TopxiaWebBundle:MyTeaching:classroom.html.twig */
class __TwigTemplate_57d30055c7562b6bad2a8460e8f3ca5fce79700049de97dd109b07eabcd587a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:My:layout.html.twig", "TopxiaWebBundle:MyTeaching:classroom.html.twig", 1);
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
        $context["side_nav"] = "my-teaching-classroom";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "所教";
        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "
<div class=\"panel panel-default panel-col lesson-manage-panel\">
  <div class=\"panel-heading\">
    所教";
        // line 11
        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
        echo "
  </div>

  <div class=\"panel-body\">
       <ul class=\"course-wide-list\">
            ";
        // line 16
        if ((isset($context["classrooms"]) ? $context["classrooms"] : null)) {
            // line 17
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["classrooms"]) ? $context["classrooms"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["classroom"]) {
                // line 18
                echo "            <li class=\"course-item clearfix\">
              <a class=\"course-picture-link\" href=\"";
                // line 19
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_show", array("id" => $this->getAttribute($context["classroom"], "id", array()))), "html", null, true);
                echo "\" target=\"_blank\">
                <img class=\"course-picture\" src=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute($context["classroom"], "middlePicture", array()), "classroom.png"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["classroom"], "title", array()), "html", null, true);
                echo "\">
              </a>
              <div class=\"course-body\">
                ";
                // line 23
                if ((($this->getAttribute($this->getAttribute((isset($context["members"]) ? $context["members"] : null), $this->getAttribute($context["classroom"], "id", array()), array(), "array"), "role", array()) == "headTeacher") || $this->env->getExtension('security')->isGranted("ROLE_ADMIN"))) {
                    // line 24
                    echo "                  <div style=\"float:right;\" class=\"text-muted mrm mls\">
                  <span class=\"glyphicon glyphicon-cog\"></span> <a href=\"";
                    // line 25
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_manage", array("id" => $this->getAttribute($context["classroom"], "id", array()))), "html", null, true);
                    echo "\">管理";
                    echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
                    echo "</a>
                  </div>
                ";
                }
                // line 28
                echo "                <h4 class=\"mbl\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_show", array("id" => $this->getAttribute($context["classroom"], "id", array()))), "html", null, true);
                echo "\" target=\"_blank\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["classroom"], "title", array()), "html", null, true);
                echo "</a>                
                ";
                // line 29
                if (($this->getAttribute($context["classroom"], "status", array()) == "draft")) {
                    // line 30
                    echo "                <span class=\"label label-warning \">未发布</span>
                ";
                } elseif (($this->getAttribute(                // line 31
$context["classroom"], "status", array()) == "closed")) {
                    // line 32
                    echo "                <span class=\"label label-danger \">已关闭</span>
                ";
                }
                // line 34
                echo "                </h4>
                
                <span class=\"text-muted\">共";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute($context["classroom"], "coursesCount", array()), "html", null, true);
                echo "课
                <i class=\"fa fa-users mll\" ></i> ";
                // line 37
                echo twig_escape_filter($this->env, ($this->getAttribute($context["classroom"], "studentNum", array()) + $this->getAttribute($context["classroom"], "auditorNum", array())), "html", null, true);
                echo "</span>
                <div class=\"course-footer clearfix mtl\">
                  <strong class=\"mrl\">今日新增</strong>
                   
                   学员 ";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute($context["classroom"], "allCount", array()), "html", null, true);
                echo " &nbsp;&nbsp;

                   话题 ";
                // line 43
                echo twig_escape_filter($this->env, $this->getAttribute($context["classroom"], "threadCount", array()), "html", null, true);
                echo " &nbsp;&nbsp; 课时完成学习 ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["classroom"], "todayFinishedLessonNum", array()), "html", null, true);
                echo "
                </div>
              </div>
            </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['classroom'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "            ";
        } else {
            // line 49
            echo "            <div class=\"empty\">找不到所教";
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
            echo "！</div>
            ";
        }
        // line 51
        echo "          </ul>
  </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:MyTeaching:classroom.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 51,  146 => 49,  143 => 48,  130 => 43,  125 => 41,  118 => 37,  114 => 36,  110 => 34,  106 => 32,  104 => 31,  101 => 30,  99 => 29,  92 => 28,  84 => 25,  81 => 24,  79 => 23,  71 => 20,  67 => 19,  64 => 18,  59 => 17,  57 => 16,  49 => 11,  44 => 8,  41 => 7,  32 => 3,  28 => 1,  26 => 5,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle:My:layout.html.twig' %}*/
/* */
/* {% block title %}所教{{ setting('classroom.name')|default("班级") }} - {{ parent() }}{% endblock %}*/
/* */
/* {% set side_nav = 'my-teaching-classroom' %}*/
/* */
/* {% block main %}*/
/* */
/* <div class="panel panel-default panel-col lesson-manage-panel">*/
/*   <div class="panel-heading">*/
/*     所教{{ setting('classroom.name')|default("班级") }}*/
/*   </div>*/
/* */
/*   <div class="panel-body">*/
/*        <ul class="course-wide-list">*/
/*             {% if classrooms %}*/
/*             {% for classroom in classrooms %}*/
/*             <li class="course-item clearfix">*/
/*               <a class="course-picture-link" href="{{ path('classroom_show', {id:classroom.id}) }}" target="_blank">*/
/*                 <img class="course-picture" src="{{ filepath(classroom.middlePicture, 'classroom.png') }}" alt="{{ classroom.title }}">*/
/*               </a>*/
/*               <div class="course-body">*/
/*                 {% if members[classroom.id].role == "headTeacher"  or is_granted('ROLE_ADMIN') %}*/
/*                   <div style="float:right;" class="text-muted mrm mls">*/
/*                   <span class="glyphicon glyphicon-cog"></span> <a href="{{path('classroom_manage',{id:classroom.id})}}">管理{{ setting('classroom.name')|default("班级") }}</a>*/
/*                   </div>*/
/*                 {% endif %}*/
/*                 <h4 class="mbl"><a href="{{ path('classroom_show', {id:classroom.id}) }}" target="_blank">{{classroom.title}}</a>                */
/*                 {% if classroom.status == "draft" %}*/
/*                 <span class="label label-warning ">未发布</span>*/
/*                 {% elseif classroom.status == "closed" %}*/
/*                 <span class="label label-danger ">已关闭</span>*/
/*                 {% endif %}*/
/*                 </h4>*/
/*                 */
/*                 <span class="text-muted">共{{classroom.coursesCount}}课*/
/*                 <i class="fa fa-users mll" ></i> {{classroom.studentNum + classroom.auditorNum}}</span>*/
/*                 <div class="course-footer clearfix mtl">*/
/*                   <strong class="mrl">今日新增</strong>*/
/*                    */
/*                    学员 {{classroom.allCount}} &nbsp;&nbsp;*/
/* */
/*                    话题 {{classroom.threadCount}} &nbsp;&nbsp; 课时完成学习 {{classroom.todayFinishedLessonNum}}*/
/*                 </div>*/
/*               </div>*/
/*             </li>*/
/*             {% endfor %}*/
/*             {% else %}*/
/*             <div class="empty">找不到所教{{ setting('classroom.name')|default("班级") }}！</div>*/
/*             {% endif %}*/
/*           </ul>*/
/*   </div>*/
/* </div>*/
/* */
/* {% endblock %}*/
