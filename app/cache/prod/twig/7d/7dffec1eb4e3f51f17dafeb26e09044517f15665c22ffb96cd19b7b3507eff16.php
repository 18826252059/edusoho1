<?php

/* TopxiaWebBundle:CourseLesson/Part:status-ball.html.twig */
class __TwigTemplate_20cde1dc25ce91e9cd30481286bc9d4663fde29c41b7bc39da8bfcecd0352676 extends Twig_Template
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
        if ((($this->getAttribute((isset($context["learnStatuses"]) ? $context["learnStatuses"] : null), $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["learnStatuses"]) ? $context["learnStatuses"] : null), $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id", array()), array(), "array"), null)) : (null))) {
            // line 2
            echo "  ";
            if (($this->getAttribute((isset($context["learnStatuses"]) ? $context["learnStatuses"] : null), $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id", array()), array(), "array") == "finished")) {
                // line 3
                echo "    <i class=\"es-icon es-icon-done1 color-primary status-icon\"></i>
  ";
            } else {
                // line 5
                echo "    <i class=\"es-icon es-icon-doing color-primary status-icon\"></i>
  ";
            }
        } else {
            // line 8
            echo "  <i class=\"es-icon es-icon-undone status-icon\"></i>
";
        }
        // line 10
        if ((isset($context["member"]) ? $context["member"] : null)) {
        } else {
            // line 12
            if ((((array_key_exists("fromPlugin", $context)) ? (_twig_default_filter((isset($context["fromPlugin"]) ? $context["fromPlugin"] : null), false)) : (false)) == false)) {
                // line 13
                echo "\t";
                echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:CourseLesson:statusLabel", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "lessonId" => $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id", array()))));
                echo "
";
            }
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseLesson/Part:status-ball.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 13,  40 => 12,  37 => 10,  33 => 8,  28 => 5,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if learnStatuses[item.id]|default(null) %}*/
/*   {% if learnStatuses[item.id] == 'finished' %}*/
/*     <i class="es-icon es-icon-done1 color-primary status-icon"></i>*/
/*   {% else %}*/
/*     <i class="es-icon es-icon-doing color-primary status-icon"></i>*/
/*   {% endif %}*/
/* {% else %}*/
/*   <i class="es-icon es-icon-undone status-icon"></i>*/
/* {% endif %}*/
/* {% if member %}*/
/* {% else %}*/
/* {% if fromPlugin|default(false) == false %}*/
/* 	{{ render(controller('TopxiaWebBundle:CourseLesson:statusLabel', {courseId:course.id,lessonId:item.id})) }}*/
/* {% endif %}*/
/* {% endif %}*/
/* */
