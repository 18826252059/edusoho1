<?php

/* ClassroomBundle:Classroom:keywords.html.twig */
class __TwigTemplate_0469d21a6e72cddedd53d4df5fc98e2d7ca728ed731bcff28f3324803dffc134 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'keywords' => array($this, 'block_keywords'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('keywords', $context, $blocks);
    }

    public function block_keywords($context, array $blocks = array())
    {
        // line 2
        if ((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category"))) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "name", array()), "html", null, true);
            echo " ";
            if ((isset($context["parentCategory"]) ? $context["parentCategory"] : $this->getContext($context, "parentCategory"))) {
                echo ",";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parentCategory"]) ? $context["parentCategory"] : $this->getContext($context, "parentCategory")), "name", array()), "html", null, true);
                echo " ";
            }
            echo " ";
        }
        echo " 
";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:Classroom:keywords.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 2,  20 => 1,);
    }
}
/* {% block keywords %}*/
/* {% if category %} {{category.name}} {% if parentCategory%}{{','}}{{parentCategory.name}} {% endif %} {% endif %} */
/* {% endblock %}*/
