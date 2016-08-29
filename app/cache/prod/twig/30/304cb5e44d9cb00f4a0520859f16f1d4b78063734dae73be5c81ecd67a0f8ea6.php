<?php

/* TopxiaWebBundle:MyNotebook:show.html.twig */
class __TwigTemplate_37f8092a50d18ec0c11692d7b0863d8ac452e4d0846da3a001c171c044bef07e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:My:layout.html.twig", "TopxiaWebBundle:MyNotebook:show.html.twig", 1);
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
        $context["side_nav"] = "notes";
        // line 6
        $context["script_controller"] = "my/notebook-show";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "我的课程 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 8
    public function block_main($context, array $blocks = array())
    {
        // line 9
        echo "<style>
.notebook-body img{
  width: 100%;
}
</style>
<div class=\"panel panel-default panel-col\">
  <div class=\"panel-heading\">我的笔记</div>
  <div class=\"panel-body\">
    <div class=\"notebook\" id=\"notebook\">
      <div class=\"notebook-heading\">
        <a class=\"btn btn-default btn-sm pull-right notebook-back-btn\" href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("my_notebooks");
        echo "\" >返回</a>
        <img class=\"notebook-icon\" src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "largePicture", array()), "course.png"), "html", null, true);
        echo "\" />
        《";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "title", array()), "html", null, true);
        echo "》的笔记
      </div>
      <div class=\"notebook-body\">
        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["notes"]) ? $context["notes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["note"]) {
            // line 25
            echo "          ";
            $context["lesson"] = (($this->getAttribute((isset($context["lessons"]) ? $context["lessons"] : null), $this->getAttribute($context["note"], "lessonId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["lessons"]) ? $context["lessons"] : null), $this->getAttribute($context["note"], "lessonId", array()), array(), "array"), null)) : (null));
            // line 26
            echo "          <div class=\"notebook-note notebook-note-collapsed\">
            <div class=\"notebook-note-heading\">
              ";
            // line 28
            if ((isset($context["lesson"]) ? $context["lesson"] : null)) {
                // line 29
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_learn", array("id" => $this->getAttribute($context["note"], "courseId", array()))), "html", null, true);
                echo "#lesson/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "id", array()), "html", null, true);
                echo "\" target=\"_blank\">课时";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "number", array()), "html", null, true);
                echo "：";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "title", array()), "html", null, true);
                echo "</a>
              ";
            } else {
                // line 31
                echo "                <span>该课时已删除</span>
              ";
            }
            // line 33
            echo "              <span class=\"pull-right notebook-note-length\">共";
            echo twig_escape_filter($this->env, $this->getAttribute($context["note"], "length", array()), "html", null, true);
            echo "字</span>
            </div>
            <div class=\"notebook-note-summary\">";
            // line 35
            echo $this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute($context["note"], "content", array()), 97);
            echo "</div>
            <div class=\"notebook-note-body\">
                ";
            // line 37
            echo $this->getAttribute($context["note"], "content", array());
            echo "

              <div class=\"notebook-note-actions clearfix\">
                <a href=\"javascript:\" data-url=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("my_note_delete", array("id" => $this->getAttribute($context["note"], "id", array()))), "html", null, true);
            echo "\" class=\"pull-right notebook-note-delete\" title=\"删除笔记\"><span class=\"glyphicon glyphicon-trash\"></span></a>
              </div>
              <div class=\"notebook-note-collapse-bar\"><span class=\"glyphicon glyphicon-chevron-up\"></span></div>
            </div>
          </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['note'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "      </div>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:MyNotebook:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 46,  116 => 40,  110 => 37,  105 => 35,  99 => 33,  95 => 31,  83 => 29,  81 => 28,  77 => 26,  74 => 25,  70 => 24,  64 => 21,  60 => 20,  56 => 19,  44 => 9,  41 => 8,  34 => 3,  30 => 1,  28 => 6,  26 => 5,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle:My:layout.html.twig' %}*/
/* */
/* {% block title %}我的课程 - {{ parent() }}{% endblock %}*/
/* */
/* {% set side_nav = 'notes' %}*/
/* {% set script_controller = 'my/notebook-show' %}*/
/* */
/* {% block main %}*/
/* <style>*/
/* .notebook-body img{*/
/*   width: 100%;*/
/* }*/
/* </style>*/
/* <div class="panel panel-default panel-col">*/
/*   <div class="panel-heading">我的笔记</div>*/
/*   <div class="panel-body">*/
/*     <div class="notebook" id="notebook">*/
/*       <div class="notebook-heading">*/
/*         <a class="btn btn-default btn-sm pull-right notebook-back-btn" href="{{ path('my_notebooks') }}" >返回</a>*/
/*         <img class="notebook-icon" src="{{ filepath(course.largePicture, 'course.png') }}" />*/
/*         《{{ course.title }}》的笔记*/
/*       </div>*/
/*       <div class="notebook-body">*/
/*         {% for note in notes %}*/
/*           {% set lesson = lessons[note.lessonId]|default(null) %}*/
/*           <div class="notebook-note notebook-note-collapsed">*/
/*             <div class="notebook-note-heading">*/
/*               {% if lesson %}*/
/*                 <a href="{{ path('course_learn', {id:note.courseId}) }}#lesson/{{ lesson.id }}" target="_blank">课时{{ lesson.number }}：{{ lesson.title }}</a>*/
/*               {% else %}*/
/*                 <span>该课时已删除</span>*/
/*               {% endif %}*/
/*               <span class="pull-right notebook-note-length">共{{ note.length }}字</span>*/
/*             </div>*/
/*             <div class="notebook-note-summary">{{ note.content|plain_text(97) }}</div>*/
/*             <div class="notebook-note-body">*/
/*                 {{ note.content|raw }}*/
/* */
/*               <div class="notebook-note-actions clearfix">*/
/*                 <a href="javascript:" data-url="{{ path('my_note_delete', {id:note.id}) }}" class="pull-right notebook-note-delete" title="删除笔记"><span class="glyphicon glyphicon-trash"></span></a>*/
/*               </div>*/
/*               <div class="notebook-note-collapse-bar"><span class="glyphicon glyphicon-chevron-up"></span></div>*/
/*             </div>*/
/*           </div>*/
/*         {% endfor %}*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* {% endblock %}*/
