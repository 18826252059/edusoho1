<?php

/* TopxiaAdminBundle:Import:import.html.twig */
class __TwigTemplate_12e6b24f1bb05d24f56dc1a1140ec5f425fc3efc2595db762b8c84d538af293a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:Import:import.html.twig", 1);
        $this->blocks = array(
            'page_content' => array($this, 'block_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["menu"] = "admin_user_manage";
        // line 5
        $context["script_controller"] = "user/list";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_page_content($context, array $blocks = array())
    {
        // line 8
        echo "
    ";
        // line 10
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaAdminBundle:UserImporter:ValidateExcelInfo", array("request" => $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "target" => array("type" => "admin", "id" => 19))));
        echo "
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Import:import.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 10,  36 => 8,  33 => 7,  29 => 1,  27 => 5,  25 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaAdminBundle::layout.html.twig' %}*/
/* */
/* {% set menu = 'admin_user_manage' %}*/
/* */
/* {% set script_controller = 'user/list' %}*/
/* */
/* {% block page_content %}*/
/* */
/*     {#{{ render(controller('TopxiaWebBundle:Importer:ValidateExcelInfo',{request:app.request, target:{type:'admin', id:19}})) }}#}*/
/*     {{ render(controller('TopxiaAdminBundle:UserImporter:ValidateExcelInfo',{request:app.request, target:{type:'admin', id:19}})) }}*/
/* {% endblock %}*/
