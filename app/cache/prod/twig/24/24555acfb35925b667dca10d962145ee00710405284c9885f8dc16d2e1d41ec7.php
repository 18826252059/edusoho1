<?php

/* ClassroomBundle:Classroom:classroom-block.html.twig */
class __TwigTemplate_93f83770a9c84380eb60d6a423a51997f9ac7aef19369ad7e5f612ec7a919456 extends Twig_Template
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
        if ((isset($context["classroom"]) ? $context["classroom"] : null)) {
            // line 3
            echo "<div class=\"panel panel-default\">
  <div class=\"panel-heading\">
    <h3 class=\"panel-title\">所属";
            // line 5
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
            echo "</h3>
  </div>
  <div class=\"panel-body classroom-block\">
    <div class=\"classroom-img img-responsive\">
      <a href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_show", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
            echo "\">
        <img class=\"img-responsive\" src=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "middlePicture", array()), "classroom.png"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "title", array()), "html", null, true);
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_show", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
            echo "\">
      </a>
    </div>
        
    <div class=\"classroom-info\">
      <div class=\"title\">
        <a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_show", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
            echo "\">
          ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "title", array()), "html", null, true);
            echo "
        </a>
      </div>
      <span class=\"stars-";
            // line 20
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "rating", array())), "html", null, true);
            echo "\">&nbsp;</span>
      <div class=\"content\">
        <span class=\"fa fa-users mrs\"></span>";
            // line 22
            echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "studentNum", array()) + $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "auditorNum", array())), "html", null, true);
            echo "
        <span class=\"fa fa-book mrs mll\"></span>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "courseNum", array()), "html", null, true);
            echo "
      </div>
    </div>
    
  </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:Classroom:classroom-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 23,  67 => 22,  62 => 20,  56 => 17,  52 => 16,  39 => 10,  35 => 9,  28 => 5,  24 => 3,  22 => 2,  19 => 1,);
    }
}
/* */
/* {% if classroom %}*/
/* <div class="panel panel-default">*/
/*   <div class="panel-heading">*/
/*     <h3 class="panel-title">所属{{ setting('classroom.name')|default("班级") }}</h3>*/
/*   </div>*/
/*   <div class="panel-body classroom-block">*/
/*     <div class="classroom-img img-responsive">*/
/*       <a href="{{path('classroom_show',{id:classroom.id})}}">*/
/*         <img class="img-responsive" src="{{ filepath(classroom.middlePicture, 'classroom.png') }}" alt="{{ classroom.title }}" href="{{path('classroom_show',{id:classroom.id})}}">*/
/*       </a>*/
/*     </div>*/
/*         */
/*     <div class="classroom-info">*/
/*       <div class="title">*/
/*         <a href="{{path('classroom_show',{id:classroom.id})}}">*/
/*           {{classroom.title}}*/
/*         </a>*/
/*       </div>*/
/*       <span class="stars-{{ classroom.rating|number_format }}">&nbsp;</span>*/
/*       <div class="content">*/
/*         <span class="fa fa-users mrs"></span>{{classroom.studentNum + classroom.auditorNum }}*/
/*         <span class="fa fa-book mrs mll"></span>{{classroom.courseNum}}*/
/*       </div>*/
/*     </div>*/
/*     */
/*   </div>*/
/* </div>*/
/* {% endif %}*/
