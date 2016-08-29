<?php

/* TopxiaAdminBundle:Default:official.messages.html.twig */
class __TwigTemplate_64a415f051fcb6c108ac1bc7d05743c9e7ff3fcdd7bffbc1c320a766e006b368 extends Twig_Template
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
        echo " <div class=\"empty\">";
        echo twig_escape_filter($this->env, ((array_key_exists("message", $context)) ? (_twig_default_filter((isset($context["message"]) ? $context["message"] : null), "无")) : ("无")), "html", null, true);
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Default:official.messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/*  <div class="empty">{{message|default('无')}}</div>*/
