<?php

/* TopxiaWebBundle:Course/Note:note-mates.html.twig */
class __TwigTemplate_bc273adf31759bc67483e554aef90804095a40aefb51ceee46f19cab368e8950 extends Twig_Template
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
        if (((array_key_exists("lessons", $context)) ? (_twig_default_filter((isset($context["lessons"]) ? $context["lessons"] : null), null)) : (null))) {
            // line 2
            echo "  ";
            $context["lessonUrl"] = (($this->env->getExtension('routing')->getPath("course_learn", array("id" => $this->getAttribute((isset($context["note"]) ? $context["note"] : null), "courseId", array()))) . "#lesson/") . $this->getAttribute((isset($context["note"]) ? $context["note"] : null), "lessonId", array()));
            // line 3
            echo "  · <a href=\"";
            echo twig_escape_filter($this->env, (isset($context["lessonUrl"]) ? $context["lessonUrl"] : null), "html", null, true);
            echo "\" class=\"period\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["lessons"]) ? $context["lessons"] : null), $this->getAttribute((isset($context["note"]) ? $context["note"] : null), "lessonId", array()), array(), "array"), "title", array()), "html", null, true);
            echo "</a>
";
        }
        // line 5
        echo "
";
        // line 6
        if (((array_key_exists("courses", $context)) ? (_twig_default_filter((isset($context["courses"]) ? $context["courses"] : null), null)) : (null))) {
            // line 7
            echo "  · <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute((isset($context["note"]) ? $context["note"] : null), "courseId", array()))), "html", null, true);
            echo "\" class=\"period\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["courses"]) ? $context["courses"] : null), $this->getAttribute((isset($context["note"]) ? $context["note"] : null), "courseId", array()), array(), "array"), "title", array()), "html", null, true);
            echo "</a>
";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course/Note:note-mates.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 7,  35 => 6,  32 => 5,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if lessons|default(null) %}*/
/*   {% set lessonUrl = path('course_learn', {id:note.courseId}) ~ '#lesson/' ~ note.lessonId %}*/
/*   · <a href="{{ lessonUrl }}" class="period" target="_blank">{{ lessons[note.lessonId].title }}</a>*/
/* {% endif %}*/
/* */
/* {% if courses|default(null) %}*/
/*   · <a href="{{ path('course_show',{id:note.courseId}) }}" class="period" target="_blank">{{ courses[note.courseId].title }}</a>*/
/* {% endif %}*/
