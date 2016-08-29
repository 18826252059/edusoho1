<?php

/* ClassroomBundle:Classroom/Review:list.html.twig */
class __TwigTemplate_ef67728974311db79bdf363344cef4e763f49a1f560881ae167cdab7401e4928 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ClassroomBundle:Classroom:content-layout.html.twig", "ClassroomBundle:Classroom/Review:list.html.twig", 1);
        $this->blocks = array(
            'description' => array($this, 'block_description'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ClassroomBundle:Classroom:content-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["nav"] = "review";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_description($context, array $blocks = array())
    {
        echo $this->env->getExtension('topxia_web_twig')->plainTextFilter(((array_key_exists("classroomDescription", $context)) ? (_twig_default_filter((isset($context["classroomDescription"]) ? $context["classroomDescription"] : null), "")) : ("")), 100);
    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        // line 6
        echo "
  ";
        // line 7
        $this->loadTemplate("TopxiaWebBundle:Review:Widget/list.html.twig", "ClassroomBundle:Classroom/Review:list.html.twig", 7)->display($context);
        // line 8
        echo "
";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:Classroom/Review:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 8,  44 => 7,  41 => 6,  38 => 5,  32 => 4,  28 => 1,  26 => 3,  11 => 1,);
    }
}
/* {% extends 'ClassroomBundle:Classroom:content-layout.html.twig' %}*/
/* */
/* {% set nav = 'review' %}*/
/* {% block description %}{{ classroomDescription|default('')|plain_text(100) }}{% endblock %}*/
/* {% block main %}*/
/* */
/*   {% include 'TopxiaWebBundle:Review:Widget/list.html.twig' %}*/
/* */
/* {% endblock %}*/
/* */
