<?php

/* TopxiaWebBundle:CourseChapterManage:chapter-modal.html.twig */
class __TwigTemplate_009711321d07b21e7613eef77b114b7a2f2504982ab8c5542916543583cae14e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "TopxiaWebBundle:CourseChapterManage:chapter-modal.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::bootstrap-modal-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["chapter"] = ((array_key_exists("chapter", $context)) ? (_twig_default_filter((isset($context["chapter"]) ? $context["chapter"] : null), null)) : (null));
        // line 39
        $context["hideFooter"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo "  ";
        if ((isset($context["chapter"]) ? $context["chapter"] : null)) {
            echo "编辑";
        } else {
            echo "添加";
        }
        if (((isset($context["type"]) ? $context["type"] : null) == "unit")) {
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
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        // line 9
        echo "
<form id=\"course-chapter-form\" class=\"form-horizontal\" method=\"post\" ";
        // line 10
        if (array_key_exists("parentId", $context)) {
            echo "data-parentId=\"";
            echo twig_escape_filter($this->env, (isset($context["parentId"]) ? $context["parentId"] : null), "html", null, true);
            echo "\" ";
        }
        // line 11
        echo "  ";
        if ((isset($context["chapter"]) ? $context["chapter"] : null)) {
            // line 12
            echo "\t  action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_chapter_edit", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "chapterId" => $this->getAttribute((isset($context["chapter"]) ? $context["chapter"] : null), "id", array()))), "html", null, true);
            echo "\"
\t";
        } else {
            // line 14
            echo "\t  action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_chapter_create", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "\"
  ";
        }
        // line 16
        echo "  >
  <div class=\"row form-group\">
    <div class=\"col-md-3 control-label\">
      ";
        // line 19
        if (((isset($context["type"]) ? $context["type"] : null) == "unit")) {
            // line 20
            echo "        <label for=\"chapter-title-field\">";
            if ($this->env->getExtension('topxia_web_twig')->getSetting("default.part_name")) {
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.part_name"), "节"), "html", null, true);
            } else {
                echo "节";
            }
            echo "标题</label>
      ";
        } else {
            // line 22
            echo "        <label for=\"chapter-title-field\">";
            if ($this->env->getExtension('topxia_web_twig')->getSetting("default.chapter_name")) {
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.chapter_name"), "章"), "html", null, true);
            } else {
                echo "章";
            }
            echo "标题</label>
        ";
        }
        // line 24
        echo "    </div>
    <div class=\"col-md-8 controls\"><input id=\"chapter-title-field\" type=\"text\" name=\"title\" value=\"";
        // line 25
        echo $this->env->getExtension('topxia_html_twig')->fieldValue((isset($context["chapter"]) ? $context["chapter"] : null), "title");
        echo "\" class=\"form-control\"></div>
  </div>
  <input type=\"hidden\" name=\"type\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
        echo "\">
</form>

<script>app.load('course-manage/chapter-modal')</script>

";
    }

    // line 34
    public function block_footer($context, array $blocks = array())
    {
        // line 35
        echo "    <button type=\"button\" class=\"btn btn-link\" data-dismiss=\"modal\">取消</button>
    <button id=\"course-chapter-btn\" data-submiting-text=\"正在提交\" type=\"submit\" class=\"btn btn-primary\" data-toggle=\"form-submit\" data-target=\"#course-chapter-form\" data-chapter=\"";
        // line 36
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["default"]) ? $context["default"] : null), "chapter_name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["default"]) ? $context["default"] : null), "chapter_name", array()), "章")) : ("章")), "html", null, true);
        echo "\" data-part=\"";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["default"]) ? $context["default"] : null), "part_name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["default"]) ? $context["default"] : null), "part_name", array()), "节")) : ("节")), "html", null, true);
        echo "\">";
        if ((isset($context["chapter"]) ? $context["chapter"] : null)) {
            echo "保存";
        } else {
            echo "添加";
        }
        echo "</button>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseChapterManage:chapter-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 36,  135 => 35,  132 => 34,  122 => 27,  117 => 25,  114 => 24,  104 => 22,  94 => 20,  92 => 19,  87 => 16,  81 => 14,  75 => 12,  72 => 11,  66 => 10,  63 => 9,  60 => 8,  38 => 6,  35 => 5,  31 => 1,  29 => 39,  27 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::bootstrap-modal-layout.html.twig' %}*/
/* */
/* {% set chapter = chapter|default(null) %}*/
/* */
/* {% block title %}*/
/*   {% if chapter %}编辑{% else %}添加{% endif %}{% if type == 'unit' %}{% if setting('default.part_name') %}{{setting('default.part_name')|default('节')}}{% else %}节{% endif %}{% else %}{% if setting('default.chapter_name') %}{{setting('default.chapter_name')|default('章')}}{% else %}章{% endif %}{% endif %}*/
/* {% endblock %}*/
/* {% block body %}*/
/* */
/* <form id="course-chapter-form" class="form-horizontal" method="post" {% if parentId is defined%}data-parentId="{{parentId}}" {% endif %}*/
/*   {% if chapter %}*/
/* 	  action="{{ path('course_manage_chapter_edit', {courseId:course.id, chapterId:chapter.id}) }}"*/
/* 	{% else %}*/
/* 	  action="{{ path('course_manage_chapter_create', {id:course.id}) }}"*/
/*   {% endif %}*/
/*   >*/
/*   <div class="row form-group">*/
/*     <div class="col-md-3 control-label">*/
/*       {% if type == 'unit' %}*/
/*         <label for="chapter-title-field">{% if setting('default.part_name') %}{{setting('default.part_name')|default('节')}}{% else %}节{% endif %}标题</label>*/
/*       {% else %}*/
/*         <label for="chapter-title-field">{% if setting('default.chapter_name') %}{{setting('default.chapter_name')|default('章')}}{% else %}章{% endif %}标题</label>*/
/*         {% endif %}*/
/*     </div>*/
/*     <div class="col-md-8 controls"><input id="chapter-title-field" type="text" name="title" value="{{ field_value(chapter, 'title') }}" class="form-control"></div>*/
/*   </div>*/
/*   <input type="hidden" name="type" value="{{ type }}">*/
/* </form>*/
/* */
/* <script>app.load('course-manage/chapter-modal')</script>*/
/* */
/* {% endblock %}*/
/* */
/* {% block footer %}*/
/*     <button type="button" class="btn btn-link" data-dismiss="modal">取消</button>*/
/*     <button id="course-chapter-btn" data-submiting-text="正在提交" type="submit" class="btn btn-primary" data-toggle="form-submit" data-target="#course-chapter-form" data-chapter="{{default.chapter_name|default('章')}}" data-part="{{default.part_name|default('节')}}">{% if chapter %}保存{% else %}添加{% endif %}</button>*/
/* {% endblock %}*/
/* */
/* {% set hideFooter = true %}*/
/* */
