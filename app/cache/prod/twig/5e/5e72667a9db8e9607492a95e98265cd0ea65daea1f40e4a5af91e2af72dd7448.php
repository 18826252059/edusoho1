<?php

/* CustomWebBundle:Course:recommend-course.html.twig */
class __TwigTemplate_c9c4454b8e0ead4a458c9b6d781eb41b04d750827515d9b041bdd6beaf6c53aa extends Twig_Template
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
        echo "<div class=\"left-h2\">推荐课程<a calss=\"right-a\" href=\"";
        echo $this->env->getExtension('routing')->getPath("course_list");
        echo "\" ><span class=\"course-rightPoint g-fr\">更多课程</span></a></div>
<section class=\"bg-df9 g-mb10 last-bor\">
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["courses"]) ? $context["courses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
            // line 4
            echo "    <div class=\"courseDetail\">
        <a href=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_detail", array("id" => $this->getAttribute($context["course"], "id", array()))), "html", null, true);
            echo "\" class=\"courseList1\">
            <img src=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "middlePicture", array()), "html", null, true);
            echo "\" width=\"100\" height=\"80\">
            <div class=\"list-right\">
                <p class=\"s-course-name overline2\">";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "title", array()), "html", null, true);
            echo "</p>
                <p class=\"s-course-progress\">
                    <span>";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "lessonNum", array()), "html", null, true);
            echo "课时</span>
                    <span class=\"g-fr\">共";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "studentNum", array()), "html", null, true);
            echo "人</span></p>
            </div>
        </a>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "</section>";
    }

    public function getTemplateName()
    {
        return "CustomWebBundle:Course:recommend-course.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 16,  50 => 11,  46 => 10,  41 => 8,  36 => 6,  32 => 5,  29 => 4,  25 => 3,  19 => 1,);
    }
}
/* <div class="left-h2">推荐课程<a calss="right-a" href="{{ path('course_list') }}" ><span class="course-rightPoint g-fr">更多课程</span></a></div>*/
/* <section class="bg-df9 g-mb10 last-bor">*/
/*     {% for course in courses %}*/
/*     <div class="courseDetail">*/
/*         <a href="{{ path('course_detail',{id:course.id}) }}" class="courseList1">*/
/*             <img src="{{ course.middlePicture }}" width="100" height="80">*/
/*             <div class="list-right">*/
/*                 <p class="s-course-name overline2">{{ course.title }}</p>*/
/*                 <p class="s-course-progress">*/
/*                     <span>{{ course.lessonNum }}课时</span>*/
/*                     <span class="g-fr">共{{ course.studentNum }}人</span></p>*/
/*             </div>*/
/*         </a>*/
/*     </div>*/
/*     {% endfor %}*/
/* </section>*/
