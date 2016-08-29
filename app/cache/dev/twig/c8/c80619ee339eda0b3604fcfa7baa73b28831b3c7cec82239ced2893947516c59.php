<?php

/* TopxiaAdminBundle:Default:inspect.html.twig */
class __TwigTemplate_1cdf7679fde374b67b6ea2bdb7671544297a7da97f190b04baf680eaa9be7b6c extends Twig_Template
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
        if ((isset($context["inspectList"]) ? $context["inspectList"] : $this->getContext($context, "inspectList"))) {
            // line 2
            echo "  <div class=\"alert alert-warning\" role=\"alert\">
    ";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["inspectList"]) ? $context["inspectList"] : $this->getContext($context, "inspectList")));
            foreach ($context['_seq'] as $context["_key"] => $context["inspectItem"]) {
                // line 4
                echo "        <span>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["inspectItem"], "value", array()), "errorMessage", array()), "html", null, true);
                echo "</span>
        <a href='";
                // line 5
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["inspectItem"], "value", array()), "settingUrl", array()), "html", null, true);
                echo "'>设置。</a>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inspectItem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 7
            echo "  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Default:inspect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 7,  33 => 5,  28 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if inspectList %}*/
/*   <div class="alert alert-warning" role="alert">*/
/*     {% for inspectItem in inspectList %}*/
/*         <span>{{inspectItem.value.errorMessage}}</span>*/
/*         <a href='{{inspectItem.value.settingUrl}}'>设置。</a>*/
/*     {% endfor %}*/
/*   </div>*/
/* {% endif %}*/
