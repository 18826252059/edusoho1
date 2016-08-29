<?php

/* TopxiaWebBundle:LessonLessonPlugin:list.html.twig */
class __TwigTemplate_614a0151cfebe3930a126709b2ad731a85a8457f1154e479124dae1a16a3ce41 extends Twig_Template
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
        echo "<div class=\"course-item-list-in-toolbar-pane\">
  ";
        // line 2
        $this->loadTemplate("TopxiaWebBundle:CourseLesson/Widget:list.html.twig", "TopxiaWebBundle:LessonLessonPlugin:list.html.twig", 2)->display(array_merge($context, array("fromPlugin" => true)));
        // line 3
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:LessonLessonPlugin:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 3,  22 => 2,  19 => 1,);
    }
}
/* <div class="course-item-list-in-toolbar-pane">*/
/*   {% include 'TopxiaWebBundle:CourseLesson/Widget:list.html.twig' with {fromPlugin:true} %}*/
/* </div>*/
