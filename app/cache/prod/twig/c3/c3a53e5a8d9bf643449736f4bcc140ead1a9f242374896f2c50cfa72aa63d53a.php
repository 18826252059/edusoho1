<?php

/* TopxiaWebBundle:CourseLesson:preview-notice-modal.html.twig */
class __TwigTemplate_b03f0a73cbc58d27261ff12e861b5dcd506f36f83b46fdf3d7513f9a3f49dd87 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "TopxiaWebBundle:CourseLesson:preview-notice-modal.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::bootstrap-modal-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "提示";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "\t<span class=\"text-muted\">
\t\t";
        // line 5
        if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "buyable", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "buyable", array()), true)) : (true)) == false)) {
            echo " 抱歉，该课程为限制课程，请联系客服。";
        } else {
            echo " 抱歉，课程(";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "title", array()), "html", null, true);
            echo ")已关闭! 
\t\t";
        }
        // line 7
        echo "\t<span>
";
    }

    // line 9
    public function block_footer($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseLesson:preview-notice-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 9,  51 => 7,  42 => 5,  39 => 4,  36 => 3,  30 => 2,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::bootstrap-modal-layout.html.twig' %}*/
/* {% block title %}提示{% endblock %}*/
/* {% block body %}*/
/* 	<span class="text-muted">*/
/* 		{% if course.buyable|default(true) == false %} 抱歉，该课程为限制课程，请联系客服。{% else %} 抱歉，课程({{ course.title }})已关闭! */
/* 		{% endif %}*/
/* 	<span>*/
/* {% endblock %}*/
/* {% block footer %}{% endblock %}*/
