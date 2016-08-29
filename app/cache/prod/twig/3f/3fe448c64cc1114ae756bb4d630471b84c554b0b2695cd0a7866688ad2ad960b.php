<?php

/* TopxiaWebBundle:Default:member-recently-learned.html.twig */
class __TwigTemplate_9da3597cd328484238a7a19f02ea54fa9971a60c7ae349f26ff1073c3c32b458 extends Twig_Template
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
        $context["course"] = $this->env->getExtension('topxia_data_twig')->getData("MemberRecentlyLearned", array("user" => $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array())));
        // line 2
        echo "        
";
        // line 3
        if ((isset($context["course"]) ? $context["course"] : null)) {
            // line 4
            echo "  <div class=\"es-box\">
    <div class=\"es-box-heading\">
      <h2>在学课程</h2>
    </div>
    <div class=\"es-box-body user-learn clearfix\">
      <a href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "\">
        <img src=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "largePicture", array()), "course.png"), "html", null, true);
            echo "\"  class=\"img-responsive thumb pull-left\">
      </a>
      <p>《";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "title", array()), "html", null, true);
            echo "》</p>
      ";
            // line 13
            $context["teacher"] = twig_first($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "teachers", array()));
            // line 14
            echo "      ";
            $context["progress"] = $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "progress", array());
            // line 15
            echo "      <p class=\"teacher-name\">教师：";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : null), "nickname", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : null), "nickname", array()), "")) : ("")), "html", null, true);
            echo "</p>
      <div class=\"progress-block clearfix\">
        <div class=\"progress\" style=\"width:90%\">
          <span class=\"progress-bar\" style=\"width: ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["progress"]) ? $context["progress"] : null), "percent", array()), "html", null, true);
            echo ";\"></span>
        </div>  
        <div class=\"percentage clearfix\">完成";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["progress"]) ? $context["progress"] : null), "percent", array()), "html", null, true);
            echo "</div>

        ";
            // line 22
            $context["nextLearnLesson"] = $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "nextLearnLesson", array());
            // line 23
            echo "        ";
            if ((isset($context["nextLearnLesson"]) ? $context["nextLearnLesson"] : null)) {
                // line 24
                echo "          <div class=\"continue\">
            <a href=\"";
                // line 25
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_learn", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
                echo "#lesson/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["nextLearnLesson"]) ? $context["nextLearnLesson"] : null), "id", array()), "html", null, true);
                echo "\" title=\"继续学习：";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["nextLearnLesson"]) ? $context["nextLearnLesson"] : null), "title", array()), "html", null, true);
                echo "\" class=\"btn btn-success pull-right\">继续学习</a>
          </div>
        ";
            }
            // line 28
            echo "      </div>
    </div>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Default:member-recently-learned.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 28,  76 => 25,  73 => 24,  70 => 23,  68 => 22,  63 => 20,  58 => 18,  51 => 15,  48 => 14,  46 => 13,  42 => 12,  37 => 10,  33 => 9,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% set course = data('MemberRecentlyLearned',{'user':app.user}) %}*/
/*         */
/* {% if course %}*/
/*   <div class="es-box">*/
/*     <div class="es-box-heading">*/
/*       <h2>在学课程</h2>*/
/*     </div>*/
/*     <div class="es-box-body user-learn clearfix">*/
/*       <a href="{{ path('course_show', {id:course.id}) }}">*/
/*         <img src="{{ filepath(course.largePicture, 'course.png') }}"  class="img-responsive thumb pull-left">*/
/*       </a>*/
/*       <p>《{{ course.title }}》</p>*/
/*       {% set teacher = course.teachers|first %}*/
/*       {% set progress = course.progress %}*/
/*       <p class="teacher-name">教师：{{ teacher.nickname|default("") }}</p>*/
/*       <div class="progress-block clearfix">*/
/*         <div class="progress" style="width:90%">*/
/*           <span class="progress-bar" style="width: {{ progress.percent }};"></span>*/
/*         </div>  */
/*         <div class="percentage clearfix">完成{{ progress.percent }}</div>*/
/* */
/*         {% set nextLearnLesson = course.nextLearnLesson %}*/
/*         {% if nextLearnLesson %}*/
/*           <div class="continue">*/
/*             <a href="{{ path('course_learn', {id:course.id}) }}#lesson/{{nextLearnLesson.id}}" title="继续学习：{{ nextLearnLesson.title }}" class="btn btn-success pull-right">继续学习</a>*/
/*           </div>*/
/*         {% endif %}*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* {% endif %}*/
