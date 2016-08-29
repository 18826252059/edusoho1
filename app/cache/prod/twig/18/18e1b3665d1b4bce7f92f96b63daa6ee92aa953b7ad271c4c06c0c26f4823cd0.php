<?php

/* TopxiaAdminBundle:EduCloud:edu-cloud-layout.html.twig */
class __TwigTemplate_ab17517adb0f95cf3c4a435462a45099d05cc57c92382b9bcdc2a4e2d93c3d05 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:EduCloud:edu-cloud-layout.html.twig", 1);
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
        $context["nav"] = "edu-cloud";
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
        // line 20
        echo "  </div>
  <div class=\"col-md-10\">
      ";
        // line 22
        $this->displayBlock('main', $context, $blocks);
        // line 23
        echo "  </div>
";
    }

    // line 7
    public function block_sidebar($context, array $blocks = array())
    {
        // line 8
        echo "        <div class=\"panel panel-default\">
          ";
        // line 10
        echo "
          <div class=\"list-group\">
            <a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("admin_edu_cloud");
        echo "\" class=\"list-group-item ";
        if (((isset($context["menu"]) ? $context["menu"] : null) == "overview")) {
            echo "active";
        }
        echo "\">概览</a>
          </div>

          <div class=\"list-group\">
            <a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("admin_edu_cloud_sms");
        echo "\" class=\"list-group-item ";
        if (((isset($context["menu"]) ? $context["menu"] : null) == "sms")) {
            echo "active";
        }
        echo "\">云短信</a>
          </div>
        </div>
    ";
    }

    // line 22
    public function block_main($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:EduCloud:edu-cloud-layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 22,  73 => 16,  62 => 12,  58 => 10,  55 => 8,  52 => 7,  47 => 23,  45 => 22,  41 => 20,  39 => 7,  36 => 6,  33 => 5,  29 => 1,  27 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaAdminBundle::layout.html.twig' %}*/
/* */
/* {% set nav = 'edu-cloud' %}*/
/* */
/* {% block content %}*/
/*   <div class="col-md-2">*/
/*     {% block sidebar %}*/
/*         <div class="panel panel-default">*/
/*           {# <div class="panel-heading">教育云</div> #}*/
/* */
/*           <div class="list-group">*/
/*             <a href="{{ path('admin_edu_cloud') }}" class="list-group-item {% if menu == 'overview' %}active{% endif %}">概览</a>*/
/*           </div>*/
/* */
/*           <div class="list-group">*/
/*             <a href="{{ path('admin_edu_cloud_sms') }}" class="list-group-item {% if menu == 'sms' %}active{% endif %}">云短信</a>*/
/*           </div>*/
/*         </div>*/
/*     {% endblock %}*/
/*   </div>*/
/*   <div class="col-md-10">*/
/*       {% block main %}{% endblock %}*/
/*   </div>*/
/* {% endblock %}*/
