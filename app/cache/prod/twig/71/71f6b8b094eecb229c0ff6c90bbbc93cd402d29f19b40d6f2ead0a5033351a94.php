<?php

/* TopxiaWebBundle:CourseManage:courseSync.html.twig */
class __TwigTemplate_7b901571e9f7f0fb6a0c5b5dd1d146fd359723b0fdcac8b78ea74d5fcec47e49 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:CourseManage:layout.html.twig", "TopxiaWebBundle:CourseManage:courseSync.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:CourseManage:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["side_nav"] = (isset($context["type"]) ? $context["type"] : null);
        // line 7
        $context["script_controller"] = "course-manage/sync";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 9
    public function block_main($context, array $blocks = array())
    {
        // line 10
        echo "
<style>
  .panel-locked{
    margin:80px 50px;
  }
  .panel-locked p{
    text-align: center;
    line-height:35px;
  }
  .panel-margin{
    margin-top:30px;
  }
</style>

<div class=\"panel panel-default panel-col\">
  <div class=\"panel-heading\">";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "</div>
  <div class=\"panel-body\">
    <div class=\"panel-locked\">
      <h5><p>本课程内容与原课程
        <a href=\"";
        // line 29
        if ((((isset($context["type"]) ? $context["type"] : null) == "question") || ((isset($context["type"]) ? $context["type"] : null) == "testpaper"))) {
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["url"]) ? $context["url"] : null), array("courseId" => $this->getAttribute((isset($context["parentCourse"]) ? $context["parentCourse"] : null), "id", array()))), "html", null, true);
        } elseif (((isset($context["type"]) ? $context["type"] : null) == "question_plumber")) {
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["url"]) ? $context["url"] : null), array("courseId" => $this->getAttribute((isset($context["parentCourse"]) ? $context["parentCourse"] : null), "id", array()), "type" => "import")), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["url"]) ? $context["url"] : null), array("id" => $this->getAttribute((isset($context["parentCourse"]) ? $context["parentCourse"] : null), "id", array()))), "html", null, true);
        }
        echo "\" target=\"_blank\">&nbsp;&nbsp;《";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parentCourse"]) ? $context["parentCourse"] : null), "title", array()), "html", null, true);
        echo "》&nbsp;&nbsp;</a>
        实时同步中。如需更改内容可以选择对原课程进行更改。
        </p>
      </h5>
      <h5>
        <p class=\"panel-margin\">如需解除同步单独编辑本课程，可点击下方按钮解除同步。<font color=\"#e83d2c\">注意：本操作不可逆！</font>
        </p>
      </h5>
      <p class=\"panel-margin\"><a href=\"#modal\" data-toggle=\"modal\" data-url= \"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_course_sync_edit", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "type" => (isset($context["type"]) ? $context["type"] : null), "url" => (isset($context["url"]) ? $context["url"] : null))), "html", null, true);
        echo "\" class=\"btn btn-danger\">解除同步</a></p>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseManage:courseSync.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 37,  69 => 29,  62 => 25,  45 => 10,  42 => 9,  34 => 3,  30 => 1,  28 => 7,  26 => 5,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle:CourseManage:layout.html.twig' %}*/
/* */
/* {% block title %}{{title}} - {{ parent() }}{% endblock %}*/
/* */
/* {% set side_nav = type %}*/
/* */
/* {% set script_controller = 'course-manage/sync' %}*/
/* */
/* {% block main %}*/
/* */
/* <style>*/
/*   .panel-locked{*/
/*     margin:80px 50px;*/
/*   }*/
/*   .panel-locked p{*/
/*     text-align: center;*/
/*     line-height:35px;*/
/*   }*/
/*   .panel-margin{*/
/*     margin-top:30px;*/
/*   }*/
/* </style>*/
/* */
/* <div class="panel panel-default panel-col">*/
/*   <div class="panel-heading">{{title}}</div>*/
/*   <div class="panel-body">*/
/*     <div class="panel-locked">*/
/*       <h5><p>本课程内容与原课程*/
/*         <a href="{% if type == 'question' or type == 'testpaper' %}{{path(url,{courseId:parentCourse.id})}}{% elseif type == 'question_plumber' %}{{path(url,{courseId:parentCourse.id,type:'import'})}}{% else %}{{path(url,{id:parentCourse.id})}}{% endif %}" target="_blank">&nbsp;&nbsp;《{{parentCourse.title}}》&nbsp;&nbsp;</a>*/
/*         实时同步中。如需更改内容可以选择对原课程进行更改。*/
/*         </p>*/
/*       </h5>*/
/*       <h5>*/
/*         <p class="panel-margin">如需解除同步单独编辑本课程，可点击下方按钮解除同步。<font color="#e83d2c">注意：本操作不可逆！</font>*/
/*         </p>*/
/*       </h5>*/
/*       <p class="panel-margin"><a href="#modal" data-toggle="modal" data-url= "{{ path('course_manage_course_sync_edit',{courseId:course.id,type:type,url:url}) }}" class="btn btn-danger">解除同步</a></p>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* {% endblock %}*/
/* */
/* */
/* */
/* */
