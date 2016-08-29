<?php

/* ClassroomBundle:Classroom:introduction.html.twig */
class __TwigTemplate_a46aa89f067b848aa7bef63539407bb5e29ec32ddc95f4bf1f6480b0ec7e32f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ClassroomBundle:Classroom:content-layout.html.twig", "ClassroomBundle:Classroom:introduction.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'description' => array($this, 'block_description'),
            'keywords' => array($this, 'block_keywords'),
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
        $context["nav"] = "introduction";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 4
    public function block_description($context, array $blocks = array())
    {
        echo $this->env->getExtension('topxia_web_twig')->plainTextFilter(((array_key_exists("classroomDescription", $context)) ? (_twig_default_filter((isset($context["classroomDescription"]) ? $context["classroomDescription"] : null), "")) : ("")), 100);
    }

    // line 5
    public function block_keywords($context, array $blocks = array())
    {
        $this->displayParentBlock("keywords", $context, $blocks);
    }

    // line 8
    public function block_main($context, array $blocks = array())
    {
        // line 9
        echo "  <div class=\"class-about\">
        ";
        // line 10
        if (twig_test_empty((isset($context["introduction"]) ? $context["introduction"] : null))) {
            // line 11
            echo "            <p class=\"mvl tac text-muted\">暂无介绍</p>
        ";
        } else {
            // line 13
            echo "              ";
            echo (isset($context["introduction"]) ? $context["introduction"] : null);
            echo "
        ";
        }
        // line 15
        echo "  </div>
    
";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:Classroom:introduction.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 15,  64 => 13,  60 => 11,  58 => 10,  55 => 9,  52 => 8,  46 => 5,  40 => 4,  34 => 2,  30 => 1,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'ClassroomBundle:Classroom:content-layout.html.twig' %}*/
/* {% block title %}{{ parent() }}{% endblock %}*/
/* {% set nav = 'introduction' %}*/
/* {% block description %}{{ classroomDescription|default('')|plain_text(100) }}{% endblock %}*/
/* {% block keywords %}{{ parent() }}{% endblock %}*/
/* */
/* */
/* {% block main %}*/
/*   <div class="class-about">*/
/*         {% if introduction is empty %}*/
/*             <p class="mvl tac text-muted">暂无介绍</p>*/
/*         {% else %}*/
/*               {{ introduction|raw }}*/
/*         {% endif %}*/
/*   </div>*/
/*     */
/* {% endblock %}*/
/* */
