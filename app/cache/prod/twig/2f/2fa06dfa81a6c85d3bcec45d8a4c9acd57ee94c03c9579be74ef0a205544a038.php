<?php

/* CustomWebBundle:ProductBase:distance.html.twig */
class __TwigTemplate_a833059dddac04ac4ad601dac156f91eca32555c187299df16ae8958b4e125f0 extends Twig_Template
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
        if ((isset($context["distance"]) ? $context["distance"] : null)) {
            // line 2
            echo "<span class=\"g-font-color3 add-dis\">";
            echo twig_escape_filter($this->env, (isset($context["distance"]) ? $context["distance"] : null), "html", null, true);
            echo "km</span>
";
        }
    }

    public function getTemplateName()
    {
        return "CustomWebBundle:ProductBase:distance.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 2,  19 => 1,);
    }
}
/* {% if distance %}*/
/* <span class="g-font-color3 add-dis">{{ distance }}km</span>*/
/* {% endif %}*/
