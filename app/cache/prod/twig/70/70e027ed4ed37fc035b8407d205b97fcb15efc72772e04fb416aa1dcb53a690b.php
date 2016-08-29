<?php

/* TopxiaWebBundle:CourseOrder:approve-modal.html.twig */
class __TwigTemplate_a67a983b5a44a62d3d57322e96e903c52266a10ad3b83d1ab70a0c97802d5ebd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "TopxiaWebBundle:CourseOrder:approve-modal.html.twig", 1);
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "提示";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "  <div class=\"alert alert-info\">购买该课程需要通过实名认证，您还没有完成实名认证，赶快去认证吧~</div>
";
    }

    // line 8
    public function block_footer($context, array $blocks = array())
    {
        // line 9
        echo "\t<a href=\"";
        echo $this->env->getExtension('routing')->getPath("setting_approval_submit");
        echo "\" class=\"btn btn-primary\">去认证</a>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseOrder:approve-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 9,  44 => 8,  39 => 5,  36 => 4,  30 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::bootstrap-modal-layout.html.twig' %}*/
/* */
/* {% block title %}提示{% endblock %}*/
/* {% block body %}*/
/*   <div class="alert alert-info">购买该课程需要通过实名认证，您还没有完成实名认证，赶快去认证吧~</div>*/
/* {% endblock %}*/
/* */
/* {% block footer %}*/
/* 	<a href="{{ path('setting_approval_submit') }}" class="btn btn-primary">去认证</a>*/
/* {% endblock %}*/
