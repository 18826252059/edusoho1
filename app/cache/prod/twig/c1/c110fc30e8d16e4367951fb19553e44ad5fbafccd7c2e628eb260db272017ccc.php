<?php

/* TopxiaAdminBundle:EduCloud:api-error.html.twig */
class __TwigTemplate_a2e335ef08cea07676c4ad970008a8b712135d3bc0ed38bdaa0c1a765fe063d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:EduCloud:api-error.html.twig", 1);
        $this->blocks = array(
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
        $context["menu"] = "admin_edu_cloud_sms";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        // line 6
        echo "
<div class=\"text-center\">
  <h1 class=\"text-muted\">网络问题，无法连接";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->removeCopyright("EduSoho"), "html", null, true);
        echo "开放云平台</h1>
</div>

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:EduCloud:api-error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 8,  34 => 6,  31 => 5,  27 => 1,  25 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaAdminBundle::layout.html.twig' %}*/
/* */
/* {% set menu = 'admin_edu_cloud_sms' %} */
/* */
/* {% block main %}*/
/* */
/* <div class="text-center">*/
/*   <h1 class="text-muted">网络问题，无法连接{{ 'EduSoho'|copyright_less }}开放云平台</h1>*/
/* </div>*/
/* */
/* {% endblock %}*/
