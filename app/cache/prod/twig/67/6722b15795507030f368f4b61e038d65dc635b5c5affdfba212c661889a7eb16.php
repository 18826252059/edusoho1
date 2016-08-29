<?php

/* TopxiaAdminBundle:Block:blockhistory-preview.html.twig */
class __TwigTemplate_7719cd9b9fc6c83ed5a919f8ca92bcbec54bf6a021dc169bba27cb9104ee0216 extends Twig_Template
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
        echo $this->getAttribute((isset($context["blockHistory"]) ? $context["blockHistory"] : null), "content", array());
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Block:blockhistory-preview.html.twig";
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
/* {{blockHistory.content|raw}}*/
