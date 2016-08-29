<?php

/* TopxiaWebBundle:CourseThread:index.html.twig */
class __TwigTemplate_ff94402fa7c71d6fbb5c9ea4caa3757ac3246235d4a774c4038fbb400373628f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:Course:normal-layout.html.twig", "TopxiaWebBundle:CourseThread:index.html.twig", 1);
        $this->blocks = array(
            'course_main' => array($this, 'block_course_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:Course:normal-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["tab"] = "thread";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_course_main($context, array $blocks = array())
    {
        // line 6
        echo "
  ";
        // line 7
        $this->loadTemplate("TopxiaWebBundle:Course/Part:thread-list-header.html.twig", "TopxiaWebBundle:CourseThread:index.html.twig", 7)->display($context);
        // line 8
        echo "  
  ";
        // line 9
        $this->loadTemplate("TopxiaWebBundle:Thread:list.html.twig", "TopxiaWebBundle:CourseThread:index.html.twig", 9)->display($context);
        // line 10
        echo "

";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseThread:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 10,  42 => 9,  39 => 8,  37 => 7,  34 => 6,  31 => 5,  27 => 1,  25 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle:Course:normal-layout.html.twig' %}*/
/* */
/* {% set tab = 'thread' %}*/
/* */
/* {% block course_main %}*/
/* */
/*   {% include 'TopxiaWebBundle:Course/Part:thread-list-header.html.twig' %}*/
/*   */
/*   {% include 'TopxiaWebBundle:Thread:list.html.twig' %}*/
/* */
/* */
/* {% endblock %}*/
