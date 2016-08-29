<?php

/* TopxiaAdminBundle:App:layout.html.twig */
class __TwigTemplate_5a69e7fccd899cb7256b99660d4f800f66cc39a38d0d4d26fbb847ec4c9eb490 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::new-layout.html.twig", "TopxiaAdminBundle:App:layout.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'sidebar' => array($this, 'block_sidebar'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle::new-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "  <div class=\"col-md-2\">
    ";
        // line 5
        $this->displayBlock('sidebar', $context, $blocks);
        // line 10
        echo "  </div>
  <div class=\"col-md-10\">
      <div class=\"page-header\"><h1>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_macro"]) ? $context["admin_macro"] : null), "title", array(0 => (isset($context["side_menus"]) ? $context["side_menus"] : null), 1 => (isset($context["menu"]) ? $context["menu"] : null)), "method"), "html", null, true);
        echo "</h1></div>
      ";
        // line 13
        $this->displayBlock('main', $context, $blocks);
        // line 14
        echo "  </div>
";
    }

    // line 5
    public function block_sidebar($context, array $blocks = array())
    {
        // line 6
        echo "      
      ";
        // line 7
        $this->loadTemplate("TopxiaAdminBundle::side.html.twig", "TopxiaAdminBundle:App:layout.html.twig", 7)->display(array_merge($context, array("menus" => (isset($context["side_menus"]) ? $context["side_menus"] : null), "nav" => (isset($context["menu"]) ? $context["menu"] : null))));
        // line 8
        echo "
    ";
    }

    // line 13
    public function block_main($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:App:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 13,  61 => 8,  59 => 7,  56 => 6,  53 => 5,  48 => 14,  46 => 13,  42 => 12,  38 => 10,  36 => 5,  33 => 4,  30 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaAdminBundle::new-layout.html.twig' %}*/
/* */
/* {% block content %}*/
/*   <div class="col-md-2">*/
/*     {% block sidebar %}*/
/*       */
/*       {% include 'TopxiaAdminBundle::side.html.twig' with {menus:side_menus,nav:menu} %}*/
/* */
/*     {% endblock %}*/
/*   </div>*/
/*   <div class="col-md-10">*/
/*       <div class="page-header"><h1>{{ admin_macro.title(side_menus,menu) }}</h1></div>*/
/*       {% block main %}{% endblock %}*/
/*   </div>*/
/* {% endblock %}*/
