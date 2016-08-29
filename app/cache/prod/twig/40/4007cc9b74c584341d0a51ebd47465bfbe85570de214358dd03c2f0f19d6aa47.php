<?php

/* TopxiaWebBundle:Thread/Part:question-header.html.twig */
class __TwigTemplate_64c9b2041ac1ed4f6ef3968622130dbf7c12feb1d3579881786871640ac3bb8b extends Twig_Template
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
        $this->loadTemplate("TopxiaWebBundle:Thread/Part:common-header.html.twig", "TopxiaWebBundle:Thread/Part:question-header.html.twig", 1)->display($context);
        // line 2
        echo "<div class=\"editor-text\">
  ";
        // line 3
        echo $this->env->getExtension('topxia_web_twig')->atFilter($this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "content", array()), $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "ats", array()));
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Thread/Part:question-header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% include 'TopxiaWebBundle:Thread/Part:common-header.html.twig' %}*/
/* <div class="editor-text">*/
/*   {{ thread.content|at(thread.ats)|raw }}*/
/* </div>*/
