<?php

/* CustomWebBundle:Classroom:recommend.html.twig */
class __TwigTemplate_405e99d25c130dc5701ae4b65a5acb893b35d7c76dedacd137895f1ee0dd90c8 extends Twig_Template
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
        echo "<div class=\"left-h2\">热门培育班</div>
<section class=\"bg-df9 g-mb10 last-bor\">
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["classrooms"]) ? $context["classrooms"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["classroom"]) {
            // line 4
            echo "    <div class=\"courseDetail\">
        <a href=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_detail", array("id" => $this->getAttribute($context["classroom"], "id", array()))), "html", null, true);
            echo "\" class=\"courseList1\">
            <img src=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute($context["classroom"], "middlePicture", array()), "classroom.png"), "html", null, true);
            echo "\" width=\"100\" height=\"80\">
            <div class=\"list-right\">
                <p class=\"s-course-name overline2\">";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["classroom"], "title", array()), "html", null, true);
            echo "</p>
                <p class=\"s-course-progress\">
                    <span>";
            // line 10
            echo twig_escape_filter($this->env, (($this->getAttribute($context["classroom"], "courseNum", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["classroom"], "courseNum", array()), "0")) : ("0")), "html", null, true);
            echo "个课程</span>
                    <span class=\"g-fr\">共";
            // line 11
            echo twig_escape_filter($this->env, ($this->getAttribute($context["classroom"], "studentNum", array()) + $this->getAttribute($context["classroom"], "auditorNum", array())), "html", null, true);
            echo "人</span></p>
            </div>
        </a>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['classroom'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "</section>";
    }

    public function getTemplateName()
    {
        return "CustomWebBundle:Classroom:recommend.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 16,  48 => 11,  44 => 10,  39 => 8,  34 => 6,  30 => 5,  27 => 4,  23 => 3,  19 => 1,);
    }
}
/* <div class="left-h2">热门培育班</div>*/
/* <section class="bg-df9 g-mb10 last-bor">*/
/*     {% for classroom in classrooms %}*/
/*     <div class="courseDetail">*/
/*         <a href="{{ path('classroom_detail',{id:classroom.id}) }}" class="courseList1">*/
/*             <img src="{{ filepath(classroom.middlePicture, 'classroom.png') }}" width="100" height="80">*/
/*             <div class="list-right">*/
/*                 <p class="s-course-name overline2">{{ classroom.title }}</p>*/
/*                 <p class="s-course-progress">*/
/*                     <span>{{ classroom.courseNum|default('0')}}个课程</span>*/
/*                     <span class="g-fr">共{{ classroom.studentNum+classroom.auditorNum }}人</span></p>*/
/*             </div>*/
/*         </a>*/
/*     </div>*/
/*     {% endfor %}*/
/* </section>*/
