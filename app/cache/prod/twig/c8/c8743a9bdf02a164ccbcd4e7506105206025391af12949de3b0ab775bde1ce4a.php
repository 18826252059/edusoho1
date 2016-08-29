<?php

/* TopxiaWebBundle:EsBar/LeftList:qq-consult.html.twig */
class __TwigTemplate_8b5858fa8653daaf0a893ff6b8545e210d59970ef4c69946d11746ad794f7b4d extends Twig_Template
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
        $context["consult"] = $this->env->getExtension('topxia_web_twig')->getSetting("consult");
        // line 2
        if (( !twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["consult"]) ? $context["consult"] : null), "qq", array()), 0, array(), "array"), "name", array())) ||  !twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["consult"]) ? $context["consult"] : null), "qqgroup", array()), 0, array(), "array"), "name", array())))) {
            // line 3
            echo "  <li class=\"popover-btn bar-qq-btn\" data-container=\".bar-qq-btn\" data-title=\"QQ客服及QQ群\" data-content-element=\"#bar-qq-content\">
    <a><i class=\"es-icon es-icon-qq\"></i></a>
  </li>
";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:EsBar/LeftList:qq-consult.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% set consult = setting('consult') %}*/
/* {% if consult.qq[0].name is not empty or consult.qqgroup[0].name is not empty %}*/
/*   <li class="popover-btn bar-qq-btn" data-container=".bar-qq-btn" data-title="QQ客服及QQ群" data-content-element="#bar-qq-content">*/
/*     <a><i class="es-icon es-icon-qq"></i></a>*/
/*   </li>*/
/* {% endif %}*/
