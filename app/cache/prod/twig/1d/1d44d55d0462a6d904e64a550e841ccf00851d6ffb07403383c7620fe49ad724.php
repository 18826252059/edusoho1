<?php

/* TopxiaWebBundle:Course/Part:normal-sidebar-statuses.html.twig */
class __TwigTemplate_33cec0e7ce0936f4fce9609ea3a17ff01351d41f183c4fdf0511fa7a616f5324 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["web_macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "TopxiaWebBundle:Course/Part:normal-sidebar-statuses.html.twig", 1);
        // line 2
        $context["learns"] = $this->env->getExtension('topxia_data_twig')->getData("LatestStatuses", array("count" => 5, "mode" => "simple", "objectType" => "course", "objectId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array())));
        // line 3
        echo "
";
        // line 4
        $this->loadTemplate("TopxiaWebBundle:Status:status-block.html.twig", "TopxiaWebBundle:Course/Part:normal-sidebar-statuses.html.twig", 4)->display($context);
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course/Part:normal-sidebar-statuses.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% import "TopxiaWebBundle::macro.html.twig" as web_macro %}*/
/* {% set learns = data('LatestStatuses', {count:5, mode:'simple', objectType: 'course', objectId: course.id}) %}*/
/* */
/* {% include "TopxiaWebBundle:Status:status-block.html.twig" %}*/
