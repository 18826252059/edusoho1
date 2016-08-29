<?php

/* TopxiaAdminBundle:Application:layout.html.twig */
class __TwigTemplate_41a7d77d85e28b914df05ab4a1cd3b986d8743e2882143f705351d70af6c2287 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:Application:layout.html.twig", 1);
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
        $context["nav"] = "application";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "  <div class=\"col-md-2\">
    ";
        // line 7
        $this->displayBlock('sidebar', $context, $blocks);
        // line 12
        echo "  </div>
  <div class=\"col-md-10\">
      ";
        // line 14
        $this->displayBlock('main', $context, $blocks);
        // line 15
        echo "  </div>
";
    }

    // line 7
    public function block_sidebar($context, array $blocks = array())
    {
        // line 8
        echo "      <div class=\"list-group\">
        <a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("admin_task");
        echo "\" class=\"list-group-item ";
        if (((isset($context["menu"]) ? $context["menu"] : null) == "task")) {
            echo "active";
        }
        echo "\">任务管理<span class=\"glyphicon glyphicon-chevron-right\"></span></a>
      </div>
    ";
    }

    // line 14
    public function block_main($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Application:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 14,  58 => 9,  55 => 8,  52 => 7,  47 => 15,  45 => 14,  41 => 12,  39 => 7,  36 => 6,  33 => 5,  29 => 1,  27 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaAdminBundle::layout.html.twig' %}*/
/* */
/* {% set nav = 'application' %}*/
/* */
/* {% block content %}*/
/*   <div class="col-md-2">*/
/*     {% block sidebar %}*/
/*       <div class="list-group">*/
/*         <a href="{{ path('admin_task') }}" class="list-group-item {% if menu == 'task' %}active{% endif %}">任务管理<span class="glyphicon glyphicon-chevron-right"></span></a>*/
/*       </div>*/
/*     {% endblock %}*/
/*   </div>*/
/*   <div class="col-md-10">*/
/*       {% block main %}{% endblock %}*/
/*   </div>*/
/* {% endblock %}*/
