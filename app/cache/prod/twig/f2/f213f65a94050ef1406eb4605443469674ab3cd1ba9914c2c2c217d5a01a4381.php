<?php

/* TopxiaWebBundle:Default:middle-banner.html.twig */
class __TwigTemplate_8be2959573789a0e5ae57cc3104484b72c5ad1c6cb8f03157f555c0a7a5bcd30 extends Twig_Template
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
        echo "  <!-- 特性 --> 
  ";
        // line 2
        echo $this->env->getExtension('topxia_block_twig')->showBlock("jianmo:middle_banner");
        echo " ";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Default:middle-banner.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }
}
/*   <!-- 特性 --> */
/*   {{ block_show('jianmo:middle_banner') }} */
