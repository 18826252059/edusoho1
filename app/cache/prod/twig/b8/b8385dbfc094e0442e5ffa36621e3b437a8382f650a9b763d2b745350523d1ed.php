<?php

/* TopxiaWebBundle:CourseOrder:remainless-modal.html.twig */
class __TwigTemplate_60d929775f4255c316fd4c87e15c22db295da6a6787e671a6edbecd2abe30ca4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "TopxiaWebBundle:CourseOrder:remainless-modal.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "price", array()) > 0)) {
            echo "购买课程";
        } else {
            echo "加入学习";
        }
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "  <div class=\"alert alert-info\">真不巧，已经有人抢在你前面下单了，请继续关注~</div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseOrder:remainless-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 5,  39 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::bootstrap-modal-layout.html.twig' %}*/
/* */
/* {% block title %}{% if course.price > 0 %}购买课程{% else %}加入学习{% endif %}{% endblock %}*/
/* {% block body %}*/
/*   <div class="alert alert-info">真不巧，已经有人抢在你前面下单了，请继续关注~</div>*/
/* {% endblock %}*/
