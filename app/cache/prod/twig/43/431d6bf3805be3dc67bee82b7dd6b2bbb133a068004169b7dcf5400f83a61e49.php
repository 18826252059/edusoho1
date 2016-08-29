<?php

/* CustomWebBundle:User:user-classroom.html.twig */
class __TwigTemplate_02140060838c591f50f4e9d41955a3192eca9320d34f906f1ba3db3cc5f5abe9 extends Twig_Template
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
        if (((array_key_exists("classrooms", $context)) ? (_twig_default_filter((isset($context["classrooms"]) ? $context["classrooms"] : null), "")) : (""))) {
            // line 2
            echo "<a href=\"";
            echo $this->env->getExtension('routing')->getPath("calssroom_list");
            echo "\"><div class=\"left-h2 last-bor\">授课班级<span class=\"course-rightPoint g-fr\">更多班级</span></div></a>
<section class=\"bg-df9 g-mb10\">
    ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["classrooms"]) ? $context["classrooms"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["classroom"]) {
                // line 5
                echo "    <div class=\"courseDetail\">
        <a href=\"";
                // line 6
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_detail", array("id" => $this->getAttribute($context["classroom"], "id", array()))), "html", null, true);
                echo "\" class=\"courseList1\" data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["classroom"], "id", array()), "html", null, true);
                echo "\">
            <img src=\"";
                // line 7
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute($context["classroom"], "smallPicture", array()), "classroom.png"), "html", null, true);
                echo "\" width=\"100\" height=\"80\">
            <div class=\"list-right\">
                <p class=\"s-course-name overline2\">";
                // line 9
                echo twig_escape_filter($this->env, $this->getAttribute($context["classroom"], "title", array()), "html", null, true);
                echo "</p>
                <p class=\"s-course-progress\">
                    <span>";
                // line 11
                echo twig_escape_filter($this->env, $this->getAttribute($context["classroom"], "lessonNum", array()), "html", null, true);
                echo "课时</span>
                    <span class=\"g-fr\">共";
                // line 12
                echo twig_escape_filter($this->env, $this->getAttribute($context["classroom"], "studentNum", array()), "html", null, true);
                echo "人</span></p>
            </div>
        </a>
    </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['classroom'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "</section>
";
        }
    }

    public function getTemplateName()
    {
        return "CustomWebBundle:User:user-classroom.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 17,  54 => 12,  50 => 11,  45 => 9,  40 => 7,  34 => 6,  31 => 5,  27 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% if classrooms|default('') %}*/
/* <a href="{{ path('calssroom_list') }}"><div class="left-h2 last-bor">授课班级<span class="course-rightPoint g-fr">更多班级</span></div></a>*/
/* <section class="bg-df9 g-mb10">*/
/*     {% for classroom in classrooms %}*/
/*     <div class="courseDetail">*/
/*         <a href="{{ path('classroom_detail',{id:classroom.id}) }}" class="courseList1" data-id="{{ classroom.id }}">*/
/*             <img src="{{  filepath(classroom.smallPicture, 'classroom.png') }}" width="100" height="80">*/
/*             <div class="list-right">*/
/*                 <p class="s-course-name overline2">{{ classroom.title }}</p>*/
/*                 <p class="s-course-progress">*/
/*                     <span>{{ classroom.lessonNum }}课时</span>*/
/*                     <span class="g-fr">共{{ classroom.studentNum }}人</span></p>*/
/*             </div>*/
/*         </a>*/
/*     </div>*/
/*     {% endfor %}*/
/* </section>*/
/* {% endif %}*/
