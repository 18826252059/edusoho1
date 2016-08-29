<?php

/* TopxiaWebBundle:CourseChapterManage:list-item.html.twig */
class __TwigTemplate_6146d7843cab65a03e5e569778a8775163fc54553b07bf63dd3dbe3b184040f8 extends Twig_Template
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
        echo "<li class=\"item-chapter ";
        if (($this->getAttribute((isset($context["chapter"]) ? $context["chapter"] : null), "type", array()) == "unit")) {
            echo "item-chapter-unit";
        }
        echo " clearfix\" id=\"chapter-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["chapter"]) ? $context["chapter"] : null), "id", array()), "html", null, true);
        echo "\" style=\"word-break: break-all;\" >
\t<div class=\"item-content\">
\t\t";
        // line 3
        if (_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("course.custom_chapter_enabled"), true)) {
            echo " 
\t\t\t第 <span class=\"number\">";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["chapter"]) ? $context["chapter"] : null), "number", array()), "html", null, true);
            echo "</span> ";
            if (($this->getAttribute((isset($context["chapter"]) ? $context["chapter"] : null), "type", array()) == "unit")) {
                if ($this->env->getExtension('topxia_web_twig')->getSetting("default.part_name")) {
                    echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.part_name"), "节"), "html", null, true);
                } else {
                    echo "节";
                }
            } else {
                if ($this->env->getExtension('topxia_web_twig')->getSetting("default.chapter_name")) {
                    echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.chapter_name"), "章"), "html", null, true);
                } else {
                    echo "章";
                }
            }
            echo "：
\t\t";
        }
        // line 6
        echo "\t\t";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["chapter"]) ? $context["chapter"] : null), "title", array()), "html", null, true);
        echo "
\t</div>
\t<div class=\"item-actions prs\">
\t\t<div class=\"btn-group\">
\t\t<button class=\"btn btn-link dropdown-toggle\" title=\"添加\"  data-toggle=\"dropdown\"><i class=\"glyphicon glyphicon-plus-sign\"></i></button>
\t\t";
        // line 11
        if (($this->getAttribute((isset($context["chapter"]) ? $context["chapter"] : null), "type", array()) == "unit")) {
            // line 12
            echo "\t\t \t<ul class=\"dropdown-menu\" role=\"menu\">
\t\t\t    <li>
\t\t\t      <a href=\"#\" id=\"chapter-create-btn\" data-toggle=\"modal\" data-target=\"#modal\" data-backdrop=\"static\" data-keyboard=\"false\" data-url=\"";
            // line 14
            if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "type", array()) == "normal")) {
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_lesson_create", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "parentId" => ("chapter-" . $this->getAttribute((isset($context["chapter"]) ? $context["chapter"] : null), "id", array())))), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("live_course_manage_lesson_create", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "parentId" => ("chapter-" . $this->getAttribute((isset($context["chapter"]) ? $context["chapter"] : null), "id", array())))), "html", null, true);
            }
            echo "\"><i class=\"glyphicon glyphicon-plus\"></i> ";
            if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "type", array()) == "normal")) {
                echo " 添加 课时 ";
            } else {
                echo " 添加 直播课时 ";
            }
            echo " </a>
\t\t\t    </li>
\t\t\t    ";
            // line 16
            if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "type", array()) == "normal")) {
                // line 17
                echo "\t\t\t    <li>
\t\t\t      <a href=\"#\" id=\"chapter-create-btn\" data-toggle=\"modal\" data-target=\"#modal\" data-backdrop=\"static\" data-keyboard=\"false\" data-url=\"";
                // line 18
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_lesson_create_testpaper", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "parentId" => ("chapter-" . $this->getAttribute((isset($context["chapter"]) ? $context["chapter"] : null), "id", array())))), "html", null, true);
                echo "\"><i class=\"glyphicon glyphicon-plus\"></i> 添加 试卷 </a>
\t\t\t    </li>
\t\t\t    ";
            }
            // line 21
            echo "\t\t\t</ul>
\t\t ";
        } else {
            // line 23
            echo "\t\t  \t<ul class=\"dropdown-menu\" role=\"menu\">
\t\t\t    <li>
\t\t\t      <a href=\"#\" id=\"chapter-create-btn\" data-toggle=\"modal\" data-target=\"#modal\" data-backdrop=\"static\" data-keyboard=\"false\" data-url=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_chapter_create", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "type" => "unit", "parentId" => ("chapter-" . $this->getAttribute((isset($context["chapter"]) ? $context["chapter"] : null), "id", array())))), "html", null, true);
            echo "\"><i class=\"glyphicon glyphicon-plus\"></i> 添加 ";
            if ($this->env->getExtension('topxia_web_twig')->getSetting("default.part_name")) {
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.part_name"), "节"), "html", null, true);
            } else {
                echo "节";
            }
            echo " </a>
\t\t\t    </li>
\t\t\t   <li>
\t\t\t      <a href=\"#\" id=\"chapter-create-btn\" data-toggle=\"modal\" data-target=\"#modal\" data-backdrop=\"static\" data-keyboard=\"false\" data-url=\"";
            // line 28
            if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "type", array()) == "normal")) {
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_lesson_create", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "parentId" => ("chapter-" . $this->getAttribute((isset($context["chapter"]) ? $context["chapter"] : null), "id", array())))), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("live_course_manage_lesson_create", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "parentId" => ("chapter-" . $this->getAttribute((isset($context["chapter"]) ? $context["chapter"] : null), "id", array())))), "html", null, true);
            }
            echo "\"><i class=\"glyphicon glyphicon-plus\"></i> ";
            if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "type", array()) == "normal")) {
                echo " 添加 课时 ";
            } else {
                echo " 添加 直播课时 ";
            }
            echo " </a>
\t\t\t    </li>
\t\t\t    ";
            // line 30
            if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "type", array()) == "normal")) {
                // line 31
                echo "\t\t\t    <li>
\t\t\t      <a href=\"#\" id=\"chapter-create-btn\" data-toggle=\"modal\" data-target=\"#modal\" data-backdrop=\"static\" data-keyboard=\"false\" data-url=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_lesson_create_testpaper", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "parentId" => ("chapter-" . $this->getAttribute((isset($context["chapter"]) ? $context["chapter"] : null), "id", array())))), "html", null, true);
                echo "\"><i class=\"glyphicon glyphicon-plus\"></i> 添加 试卷 </a>
\t\t\t    </li>
\t\t\t    ";
            }
            // line 35
            echo "\t\t\t</ul>
\t\t";
        }
        // line 36
        echo "\t
\t\t</div>

\t\t<button class=\"btn btn-link\" title=\"编辑\" data-toggle=\"modal\" data-target=\"#modal\" data-keyboard=\"false\" data-url=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_chapter_edit", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "chapterId" => $this->getAttribute((isset($context["chapter"]) ? $context["chapter"] : null), "id", array()))), "html", null, true);
        echo "\"><i class=\"glyphicon glyphicon-edit\"></i></button>

\t\t<button class=\"btn btn-link delete-chapter-btn\" title=\"删除\" data-url=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_chapter_delete", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "chapterId" => $this->getAttribute((isset($context["chapter"]) ? $context["chapter"] : null), "id", array()))), "html", null, true);
        echo "\" data-chapter=\"";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["default"]) ? $context["default"] : null), "chapter_name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["default"]) ? $context["default"] : null), "chapter_name", array()), "章")) : ("章")), "html", null, true);
        echo "\" data-part=\"";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["default"]) ? $context["default"] : null), "part_name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["default"]) ? $context["default"] : null), "part_name", array()), "节")) : ("节")), "html", null, true);
        echo "\"><i class=\"glyphicon glyphicon-trash\"></i></button>

\t\t</div>
</li>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseChapterManage:list-item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 41,  148 => 39,  143 => 36,  139 => 35,  133 => 32,  130 => 31,  128 => 30,  113 => 28,  101 => 25,  97 => 23,  93 => 21,  87 => 18,  84 => 17,  82 => 16,  67 => 14,  63 => 12,  61 => 11,  52 => 6,  33 => 4,  29 => 3,  19 => 1,);
    }
}
/* <li class="item-chapter {% if chapter.type == 'unit' %}item-chapter-unit{% endif %} clearfix" id="chapter-{{ chapter.id }}" style="word-break: break-all;" >*/
/* 	<div class="item-content">*/
/* 		{% if setting('course.custom_chapter_enabled')|default(true) %} */
/* 			第 <span class="number">{{ chapter.number }}</span> {% if chapter.type == 'unit' %}{% if setting('default.part_name') %}{{setting('default.part_name')|default('节')}}{% else %}节{% endif %}{% else %}{% if setting('default.chapter_name') %}{{setting('default.chapter_name')|default('章')}}{% else %}章{% endif %}{% endif %}：*/
/* 		{% endif %}*/
/* 		{{ chapter.title }}*/
/* 	</div>*/
/* 	<div class="item-actions prs">*/
/* 		<div class="btn-group">*/
/* 		<button class="btn btn-link dropdown-toggle" title="添加"  data-toggle="dropdown"><i class="glyphicon glyphicon-plus-sign"></i></button>*/
/* 		{% if chapter.type == 'unit' %}*/
/* 		 	<ul class="dropdown-menu" role="menu">*/
/* 			    <li>*/
/* 			      <a href="#" id="chapter-create-btn" data-toggle="modal" data-target="#modal" data-backdrop="static" data-keyboard="false" data-url="{% if course.type == 'normal' %}{{ path('course_manage_lesson_create', {id:course.id, parentId:'chapter-'~chapter.id}) }}{% else %}{{ path('live_course_manage_lesson_create', {id:course.id, parentId:'chapter-'~chapter.id}) }}{% endif %}"><i class="glyphicon glyphicon-plus"></i> {% if course.type == 'normal' %} 添加 课时 {% else %} 添加 直播课时 {% endif %} </a>*/
/* 			    </li>*/
/* 			    {% if course.type == 'normal' %}*/
/* 			    <li>*/
/* 			      <a href="#" id="chapter-create-btn" data-toggle="modal" data-target="#modal" data-backdrop="static" data-keyboard="false" data-url="{{ path('course_manage_lesson_create_testpaper', {id:course.id, parentId:'chapter-'~chapter.id}) }}"><i class="glyphicon glyphicon-plus"></i> 添加 试卷 </a>*/
/* 			    </li>*/
/* 			    {% endif %}*/
/* 			</ul>*/
/* 		 {% else %}*/
/* 		  	<ul class="dropdown-menu" role="menu">*/
/* 			    <li>*/
/* 			      <a href="#" id="chapter-create-btn" data-toggle="modal" data-target="#modal" data-backdrop="static" data-keyboard="false" data-url="{{ path('course_manage_chapter_create', {id:course.id, type:'unit', parentId:'chapter-'~chapter.id}) }}"><i class="glyphicon glyphicon-plus"></i> 添加 {% if setting('default.part_name') %}{{setting('default.part_name')|default('节')}}{% else %}节{% endif %} </a>*/
/* 			    </li>*/
/* 			   <li>*/
/* 			      <a href="#" id="chapter-create-btn" data-toggle="modal" data-target="#modal" data-backdrop="static" data-keyboard="false" data-url="{% if course.type == 'normal' %}{{ path('course_manage_lesson_create', {id:course.id, parentId:'chapter-'~chapter.id}) }}{% else %}{{ path('live_course_manage_lesson_create', {id:course.id, parentId:'chapter-'~chapter.id}) }}{% endif %}"><i class="glyphicon glyphicon-plus"></i> {% if course.type == 'normal' %} 添加 课时 {% else %} 添加 直播课时 {% endif %} </a>*/
/* 			    </li>*/
/* 			    {% if course.type == 'normal' %}*/
/* 			    <li>*/
/* 			      <a href="#" id="chapter-create-btn" data-toggle="modal" data-target="#modal" data-backdrop="static" data-keyboard="false" data-url="{{ path('course_manage_lesson_create_testpaper', {id:course.id, parentId:'chapter-'~chapter.id}) }}"><i class="glyphicon glyphicon-plus"></i> 添加 试卷 </a>*/
/* 			    </li>*/
/* 			    {% endif %}*/
/* 			</ul>*/
/* 		{% endif %}	*/
/* 		</div>*/
/* */
/* 		<button class="btn btn-link" title="编辑" data-toggle="modal" data-target="#modal" data-keyboard="false" data-url="{{ path('course_manage_chapter_edit', {courseId:course.id, chapterId:chapter.id}) }}"><i class="glyphicon glyphicon-edit"></i></button>*/
/* */
/* 		<button class="btn btn-link delete-chapter-btn" title="删除" data-url="{{ path('course_manage_chapter_delete', {courseId:course.id, chapterId:chapter.id}) }}" data-chapter="{{default.chapter_name|default('章')}}" data-part="{{default.part_name|default('节')}}"><i class="glyphicon glyphicon-trash"></i></button>*/
/* */
/* 		</div>*/
/* </li>*/
