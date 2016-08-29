<?php

/* TopxiaAdminBundle:Statistic:layout.html.twig */
class __TwigTemplate_1bca67bae73ede323576908e30531c67a6ad298d7cf218fcc83b5ee9e4953a7d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:Statistic:layout.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'sidebar' => array($this, 'block_sidebar'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["nav"] = "statistic";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "  <div class=\"col-md-2\">

    ";
        // line 8
        $this->displayBlock('sidebar', $context, $blocks);
        // line 17
        echo "  </div>
  <div class=\"col-md-10\">
      ";
        // line 19
        $this->displayBlock('main', $context, $blocks);
        // line 20
        echo "  </div>
";
    }

    // line 8
    public function block_sidebar($context, array $blocks = array())
    {
        // line 9
        echo "      <div class=\"list-group\">

        <a href=\"#\" class=\"list-group-item\">访问明细</a>

        <a href=\"#\" class=\"list-group-item\">收入明细</a>

      </div>
    ";
    }

    // line 19
    public function block_main($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Statistic:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 19,  56 => 9,  53 => 8,  48 => 20,  46 => 19,  42 => 17,  40 => 8,  36 => 6,  33 => 5,  29 => 1,  27 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaAdminBundle::layout.html.twig' %}*/
/* */
/* {% set nav = 'statistic' %}*/
/* */
/* {% block content %}*/
/*   <div class="col-md-2">*/
/* */
/*     {% block sidebar %}*/
/*       <div class="list-group">*/
/* */
/*         <a href="#" class="list-group-item">访问明细</a>*/
/* */
/*         <a href="#" class="list-group-item">收入明细</a>*/
/* */
/*       </div>*/
/*     {% endblock %}*/
/*   </div>*/
/*   <div class="col-md-10">*/
/*       {% block main %}{% endblock %}*/
/*   </div>*/
/* {% endblock %}*/
