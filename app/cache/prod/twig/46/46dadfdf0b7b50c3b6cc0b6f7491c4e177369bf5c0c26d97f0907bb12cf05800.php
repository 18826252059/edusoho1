<?php

/* TopxiaWebBundle:Search:search-course-item.html.twig */
class __TwigTemplate_640a9dcd4c90f6e56036e5e30a351b8a3a972383ebd0b825adf9314086db81a1 extends Twig_Template
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
        echo "<div class=\"course-item clearfix\">
    <div class=\"course-img\">
      <a href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "courseId", array()))), "html", null, true);
        echo "\" target=\"_blank\"><img class=\"img-responsive\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "middlePicture", array()), "course.png"), "html", null, true);
        echo "\" alt=\"\"></a>
    </div>
    <div class=\"course-info\">
      <h3 class=\"title\">
        <a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "courseId", array()))), "html", null, true);
        echo "\" target=\"_blank\">
          ";
        // line 8
        echo $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "title", array());
        echo "
          ";
        // line 9
        if ($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "learning", array())) {
            // line 10
            echo "            <small class=\"label label-primary label-xs\">正在学</small>
          ";
        }
        // line 12
        echo "        </a>
      </h3>
      <div class=\"score\">
        ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "star", array(0 => (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "rating", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "rating", array()), 0)) : (0))), "method"), "html", null, true);
        echo "
        <span>";
        // line 16
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "ratingNum", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "ratingNum", array()), 0)) : (0)), "html", null, true);
        echo "人评价(";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "studentNum", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "studentNum", array()), 0)) : (0)), "html", null, true);
        echo "人学习)</span>
      </div>
      <div class=\"content\">";
        // line 18
        echo $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "about", array());
        echo "</div>
      ";
        // line 19
        if ((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "lessons", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "lessons", array()), null)) : (null))) {
            // line 20
            echo "        <ul class=\"ul-lesson\">
        ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "lessons", array()), 0, 3));
            foreach ($context['_seq'] as $context["_key"] => $context["lesson"]) {
                // line 22
                echo "          <li>
            <i class=\"es-icon es-icon-arrowdropleft\"></i>
            <a class=\"link-light\" href=\"";
                // line 24
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "courseId", array()))), "html", null, true);
                echo "\" target=\"_blank\">
              课时 ";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($context["lesson"], "number", array()), "html", null, true);
                echo ": ";
                echo $this->getAttribute($context["lesson"], "title", array());
                echo "
            </a>
          </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lesson'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "        </ul>
      ";
        }
        // line 31
        echo "    </div>
  </div>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Search:search-course-item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 31,  95 => 29,  83 => 25,  79 => 24,  75 => 22,  71 => 21,  68 => 20,  66 => 19,  62 => 18,  55 => 16,  51 => 15,  46 => 12,  42 => 10,  40 => 9,  36 => 8,  32 => 7,  23 => 3,  19 => 1,);
    }
}
/* <div class="course-item clearfix">*/
/*     <div class="course-img">*/
/*       <a href="{{path('course_show',{id : course.courseId}) }}" target="_blank"><img class="img-responsive" src="{{ filepath(course.middlePicture, 'course.png') }}" alt=""></a>*/
/*     </div>*/
/*     <div class="course-info">*/
/*       <h3 class="title">*/
/*         <a href="{{path('course_show',{id : course.courseId}) }}" target="_blank">*/
/*           {{course.title|raw}}*/
/*           {% if course.learning %}*/
/*             <small class="label label-primary label-xs">正在学</small>*/
/*           {% endif %}*/
/*         </a>*/
/*       </h3>*/
/*       <div class="score">*/
/*         {{ web_macro.star(course.rating|default(0)) }}*/
/*         <span>{{ course.ratingNum|default(0) }}人评价({{ course.studentNum|default(0)}}人学习)</span>*/
/*       </div>*/
/*       <div class="content">{{course.about|raw}}</div>*/
/*       {% if course.lessons|default(null) %}*/
/*         <ul class="ul-lesson">*/
/*         {% for lesson in course.lessons|slice(0, 3)%}*/
/*           <li>*/
/*             <i class="es-icon es-icon-arrowdropleft"></i>*/
/*             <a class="link-light" href="{{path('course_show',{id : course.courseId}) }}" target="_blank">*/
/*               课时 {{lesson.number}}: {{lesson.title|raw}}*/
/*             </a>*/
/*           </li>*/
/*         {% endfor %}*/
/*         </ul>*/
/*       {% endif %}*/
/*     </div>*/
/*   </div>*/
