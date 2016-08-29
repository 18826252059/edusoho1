<?php

/* TopxiaAdminBundle:System:logs-prod.html.twig */
class __TwigTemplate_a1cc0624b1745b46edb78bf8b69fc8a7a9041d7541063834bc3471b26cad91bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:System:logs-prod.html.twig", 1);
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
        $context["menu"] = "admin_logs_prod";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        // line 6
        echo "
  <div class=\"alert alert-warning\">显示最近的２０００条日志信息。</div>

  <pre>
    ";
        // line 10
        echo nl2br(twig_escape_filter($this->env, (isset($context["logs"]) ? $context["logs"] : null), "html", null, true));
        echo "
  </pre>

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System:logs-prod.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 10,  34 => 6,  31 => 5,  27 => 1,  25 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaAdminBundle::layout.html.twig' %}*/
/* */
/* {% set menu = 'admin_logs_prod' %}*/
/* */
/* {% block main %}*/
/* */
/*   <div class="alert alert-warning">显示最近的２０００条日志信息。</div>*/
/* */
/*   <pre>*/
/*     {{ logs|nl2br }}*/
/*   </pre>*/
/* */
/* {% endblock %}*/
