<?php

/* TopxiaWebBundle:Article/Part:tag-header.html.twig */
class __TwigTemplate_db980b4dc5b866be9151d5510e8f34d727a005f739e49e7d91a969f4cc9ecf7e extends Twig_Template
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
        echo "<div class=\"es-tag\">
  标签：";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tag"]) ? $context["tag"] : null), "name", array()), "html", null, true);
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Article/Part:tag-header.html.twig";
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
/* <div class="es-tag">*/
/*   标签：{{ tag.name }}*/
/* </div>*/
