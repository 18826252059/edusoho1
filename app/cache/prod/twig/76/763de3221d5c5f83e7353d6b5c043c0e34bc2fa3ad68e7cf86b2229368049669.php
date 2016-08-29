<?php

/* TopxiaAdminBundle:Block:picture-preview-modal.html.twig */
class __TwigTemplate_cf1b7067cf29fa4bb4cebe353e12ecd478826b0596e3f04fbf00fdd7954a1e88 extends Twig_Template
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
        echo "<div class=\"block-picture-preview\">
  <img src=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((isset($context["url"]) ? $context["url"] : null)), "html", null, true);
        echo "\">
</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Block:picture-preview-modal.html.twig";
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
/* <div class="block-picture-preview">*/
/*   <img src="{{ asset(url) }}">*/
/* </div>*/
