<?php

/* TopxiaWebBundle:CourseLesson/Part:TestPaper.html.twig */
class __TwigTemplate_76f095adcf9f8aa247255b7afc4fec62b62a672ee4c01b5ccfe2fe91c1dbd252 extends Twig_Template
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
        if ((isset($context["member"]) ? $context["member"] : null)) {
            // line 2
            echo "  ";
            $context["lessonUrl"] = (($this->env->getExtension('routing')->getPath("course_learn", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))) . "#lesson/") . $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id", array()));
        } else {
            // line 4
            echo "  ";
            $context["lessonUrl"] = (((isset($context["previewUrl"]) ? $context["previewUrl"] : null) . "?lessonId=") . $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id", array()));
        }
        // line 6
        echo "<li class=\"section period\">
    <i class=\"es-icon es-icon-check\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"试卷\" data-original-title=\"试卷\"></i>
    <span class=\"title\">
      ";
        // line 9
        if (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "status", array()) == "published")) {
            // line 10
            echo "          <a ";
            if ((isset($context["member"]) ? $context["member"] : null)) {
                echo "href=\"";
                echo twig_escape_filter($this->env, (isset($context["lessonUrl"]) ? $context["lessonUrl"] : null), "html", null, true);
                echo "\" ";
            }
            // line 11
            echo "          title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "title", array()), "html", null, true);
            echo "\">
          <span class=\"title\">";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "title", array()), "html", null, true);
            echo "</span>
          ";
            // line 13
            $this->loadTemplate("TopxiaWebBundle:CourseLesson/Part:micro-tips.html.twig", "TopxiaWebBundle:CourseLesson/Part:TestPaper.html.twig", 13)->display($context);
            echo " 
          </a>
        ";
        } else {
            // line 15
            echo "   
          <span class=\"title\">";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "title", array()), "html", null, true);
            echo "</span>
          ";
            // line 17
            $this->loadTemplate("TopxiaWebBundle:CourseLesson/Part:micro-tips.html.twig", "TopxiaWebBundle:CourseLesson/Part:TestPaper.html.twig", 17)->display($context);
            echo " 
        ";
        }
        // line 19
        echo "      </span>
    </span>
  </li>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseLesson/Part:TestPaper.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 19,  65 => 17,  61 => 16,  58 => 15,  52 => 13,  48 => 12,  43 => 11,  36 => 10,  34 => 9,  29 => 6,  25 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% if member %}*/
/*   {% set lessonUrl = path('course_learn', {id:course.id}) ~ '#lesson/' ~ item.id %}*/
/* {% else %}*/
/*   {% set lessonUrl = previewUrl ~ '?lessonId=' ~ item.id%}*/
/* {% endif %}*/
/* <li class="section period">*/
/*     <i class="es-icon es-icon-check" data-toggle="tooltip" data-placement="top" title="试卷" data-original-title="试卷"></i>*/
/*     <span class="title">*/
/*       {% if item.status == 'published' %}*/
/*           <a {% if member %}href="{{ lessonUrl }}" {% endif %}*/
/*           title="{{ item.title }}">*/
/*           <span class="title">{{ item.title }}</span>*/
/*           {% include 'TopxiaWebBundle:CourseLesson/Part:micro-tips.html.twig' %} */
/*           </a>*/
/*         {% else %}   */
/*           <span class="title">{{ item.title }}</span>*/
/*           {% include 'TopxiaWebBundle:CourseLesson/Part:micro-tips.html.twig' %} */
/*         {% endif %}*/
/*       </span>*/
/*     </span>*/
/*   </li>*/
