<?php

/* TopxiaWebBundle:Search:search-thread.html.twig */
class __TwigTemplate_2d7e02ee263f83d5e7812d2b08adea61cffdd62fae2953efa67c90f771231ef0 extends Twig_Template
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
        echo "<div class=\"alert alert-blank alert-sm\">
\tEduSoho教育云为您找到话题结果约 <span class=\"color-danger\">";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["counts"]) ? $context["counts"] : null), "html", null, true);
        echo "</span>个
</div>

<ul class=\"nav nav-pills mbl js-nav-pills\">
\t<li ";
        // line 6
        if ( !(isset($context["targetType"]) ? $context["targetType"] : null)) {
            echo " class=\"active\" ";
        }
        echo "><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cloud_search", array("q" => (isset($context["keywords"]) ? $context["keywords"] : null), "type" => (isset($context["type"]) ? $context["type"] : null))), "html", null, true);
        echo "\" data-url=\"\">全部话题</a></li>
\t<li ";
        // line 7
        if (((isset($context["targetType"]) ? $context["targetType"] : null) == "group")) {
            echo " class=\"active\" ";
        }
        echo "><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cloud_search", array("q" => (isset($context["keywords"]) ? $context["keywords"] : null), "type" => (isset($context["type"]) ? $context["type"] : null), "targetType" => "group")), "html", null, true);
        echo "\" data-url=\"\">小组话题</a></li>
\t<li ";
        // line 8
        if (((isset($context["targetType"]) ? $context["targetType"] : null) == "classroom")) {
            echo " class=\"active\" ";
        }
        echo "><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cloud_search", array("q" => (isset($context["keywords"]) ? $context["keywords"] : null), "type" => (isset($context["type"]) ? $context["type"] : null), "targetType" => "classroom")), "html", null, true);
        echo "\" data-url=\"\">班级话题</a></li>
\t<li ";
        // line 9
        if (((isset($context["targetType"]) ? $context["targetType"] : null) == "course")) {
            echo " class=\"active\" ";
        }
        echo "><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cloud_search", array("q" => (isset($context["keywords"]) ? $context["keywords"] : null), "type" => (isset($context["type"]) ? $context["type"] : null), "targetType" => "course")), "html", null, true);
        echo "\" data-url=\"\">课程话题</a></li>
</ul>

<div class=\"media-list\">
\t";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["resultSet"]) ? $context["resultSet"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["thread"]) {
            // line 14
            echo "\t\t<div class=\"media media-search\">
\t\t\t<div class=\"media-left\">
\t\t\t\t<div class=\"reply\">
\t\t\t\t\t";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["thread"], "postNum", array()), "html", null, true);
            echo "<br>
\t\t\t\t\t<span class=\"text-sm\">回复</span>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"media-body\">
\t\t\t\t<div class=\"title\"><a class=\"link-dark\" href=\"
\t\t\t\t";
            // line 23
            if (($this->getAttribute($context["thread"], "targetType", array()) == "group")) {
                // line 24
                echo "\t\t\t\t\t";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_thread_show", array("id" => $this->getAttribute($context["thread"], "targetId", array()), "threadId" => $this->getAttribute($context["thread"], "id", array()))), "html", null, true);
                echo "
\t\t\t\t";
            } elseif (($this->getAttribute(            // line 25
$context["thread"], "targetType", array()) == "classroom")) {
                // line 26
                echo "\t\t\t\t\t";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_thread_show", array("classroomId" => $this->getAttribute($context["thread"], "targetId", array()), "threadId" => $this->getAttribute($context["thread"], "id", array()))), "html", null, true);
                echo "
\t\t\t\t";
            } elseif (($this->getAttribute(            // line 27
$context["thread"], "targetType", array()) == "course")) {
                // line 28
                echo "\t\t\t\t\t";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_thread_show", array("courseId" => $this->getAttribute($context["thread"], "targetId", array()), "threadId" => $this->getAttribute($context["thread"], "id", array()))), "html", null, true);
                echo "
\t\t\t\t";
            }
            // line 30
            echo "
\t\t\t\t\" target=\"_blank\">";
            // line 31
            echo $this->getAttribute($context["thread"], "title", array());
            echo "</a></div>
\t\t\t\t<div class=\"text-sm color-gray\">来自
\t\t\t\t\t";
            // line 33
            if (($this->getAttribute($context["thread"], "targetType", array()) == "group")) {
                // line 34
                echo "\t\t\t\t\t\t";
                $context["group"] = $this->env->getExtension('topxia_data_twig')->getData("Group", array("groupId" => $this->getAttribute($context["thread"], "targetId", array())));
                // line 35
                echo "\t\t\t\t\t\t<a class=\"mls\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_show", array("id" => $this->getAttribute($context["thread"], "targetId", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "title", array()), "")) : ("")), "html", null, true);
                echo "</a>
\t\t\t\t\t";
            } elseif (($this->getAttribute(            // line 36
$context["thread"], "targetType", array()) == "classroom")) {
                // line 37
                echo "\t\t\t\t\t\t";
                $context["classroom"] = $this->env->getExtension('topxia_data_twig')->getData("Classroom", array("classroomId" => $this->getAttribute($context["thread"], "targetId", array())));
                // line 38
                echo "\t\t\t\t\t\t<a class=\"mls\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_show", array("id" => $this->getAttribute($context["thread"], "targetId", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "title", array()), "")) : ("")), "html", null, true);
                echo "</a>
\t\t\t\t\t";
            } elseif (($this->getAttribute(            // line 39
$context["thread"], "targetType", array()) == "course")) {
                // line 40
                echo "\t\t\t\t\t\t";
                $context["course"] = $this->env->getExtension('topxia_data_twig')->getData("Course", array("courseId" => $this->getAttribute($context["thread"], "targetId", array())));
                // line 41
                echo "\t\t\t\t\t\t<a class=\"mls\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($context["thread"], "targetId", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "title", array()), "")) : ("")), "html", null, true);
                echo "</a>
\t\t\t\t\t";
            }
            // line 43
            echo "\t\t\t\t\t<span class=\"mlm\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->smarttimeFilter($this->getAttribute($context["thread"], "createdTime", array())), "html", null, true);
            echo "</span>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['thread'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Search:search-thread.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 48,  149 => 43,  141 => 41,  138 => 40,  136 => 39,  129 => 38,  126 => 37,  124 => 36,  117 => 35,  114 => 34,  112 => 33,  107 => 31,  104 => 30,  98 => 28,  96 => 27,  91 => 26,  89 => 25,  84 => 24,  82 => 23,  73 => 17,  68 => 14,  64 => 13,  53 => 9,  45 => 8,  37 => 7,  29 => 6,  22 => 2,  19 => 1,);
    }
}
/* <div class="alert alert-blank alert-sm">*/
/* 	EduSoho教育云为您找到话题结果约 <span class="color-danger">{{counts}}</span>个*/
/* </div>*/
/* */
/* <ul class="nav nav-pills mbl js-nav-pills">*/
/* 	<li {% if not targetType %} class="active" {% endif %}><a href="{{path('cloud_search',{q : keywords,type : type})}}" data-url="">全部话题</a></li>*/
/* 	<li {% if targetType =='group' %} class="active" {% endif %}><a href="{{path('cloud_search',{q : keywords,type : type,targetType:'group'})}}" data-url="">小组话题</a></li>*/
/* 	<li {% if targetType =='classroom' %} class="active" {% endif %}><a href="{{path('cloud_search',{q : keywords,type : type,targetType:'classroom'})}}" data-url="">班级话题</a></li>*/
/* 	<li {% if targetType =='course' %} class="active" {% endif %}><a href="{{path('cloud_search',{q : keywords,type : type,targetType:'course'})}}" data-url="">课程话题</a></li>*/
/* </ul>*/
/* */
/* <div class="media-list">*/
/* 	{% for thread in resultSet%}*/
/* 		<div class="media media-search">*/
/* 			<div class="media-left">*/
/* 				<div class="reply">*/
/* 					{{thread.postNum}}<br>*/
/* 					<span class="text-sm">回复</span>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="media-body">*/
/* 				<div class="title"><a class="link-dark" href="*/
/* 				{% if thread.targetType == 'group'%}*/
/* 					{{path('group_thread_show',{id:thread.targetId,threadId:thread.id})}}*/
/* 				{% elseif thread.targetType == 'classroom'%}*/
/* 					{{path('classroom_thread_show',{classroomId:thread.targetId,threadId:thread.id})}}*/
/* 				{% elseif thread.targetType == 'course'%}*/
/* 					{{path('course_thread_show',{courseId:thread.targetId,threadId:thread.id})}}*/
/* 				{% endif %}*/
/* */
/* 				" target="_blank">{{thread.title|raw}}</a></div>*/
/* 				<div class="text-sm color-gray">来自*/
/* 					{% if thread.targetType == 'group'%}*/
/* 						{% set group = data('Group',{'groupId':thread.targetId}) %}*/
/* 						<a class="mls" href="{{path('group_show',{id:thread.targetId})}}">{{group.title|default('')}}</a>*/
/* 					{% elseif thread.targetType == 'classroom'%}*/
/* 						{% set classroom = data('Classroom',{'classroomId':thread.targetId}) %}*/
/* 						<a class="mls" href="{{path('classroom_show',{id:thread.targetId})}}">{{classroom.title|default('')}}</a>*/
/* 					{% elseif thread.targetType == 'course'%}*/
/* 						{% set course = data('Course',{'courseId':thread.targetId}) %}*/
/* 						<a class="mls" href="{{path('course_show',{id:thread.targetId})}}">{{course.title|default('')}}</a>*/
/* 					{% endif %}*/
/* 					<span class="mlm">{{thread.createdTime|smart_time}}</span>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	{% endfor %}*/
/* </div>*/
