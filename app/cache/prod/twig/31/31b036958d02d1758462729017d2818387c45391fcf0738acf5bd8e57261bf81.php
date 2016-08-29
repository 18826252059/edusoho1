<?php

/* TopxiaWebBundle:Bootstrap:panel.html.twig */
class __TwigTemplate_ee927bc441a91b7476ba83084c570f0c245f5e88cd62f38ac35c07347ffd8b19 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'heading' => array($this, 'block_heading'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["id"] = ((array_key_exists("id", $context)) ? (_twig_default_filter((isset($context["id"]) ? $context["id"] : null), null)) : (null));
        // line 2
        $context["class"] = ((array_key_exists("class", $context)) ? (_twig_default_filter((isset($context["class"]) ? $context["class"] : null), null)) : (null));
        // line 3
        echo "<div ";
        if ((isset($context["id"]) ? $context["id"] : null)) {
            echo "id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\" ";
        }
        echo "class=\"panel panel-default ";
        if ((isset($context["class"]) ? $context["class"] : null)) {
            echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : null), "html", null, true);
        }
        echo "\">
  <div class=\"panel-heading\">";
        // line 4
        $this->displayBlock('heading', $context, $blocks);
        echo "</div>
  <div class=\"panel-body\">";
        // line 5
        $this->displayBlock('body', $context, $blocks);
        echo "</div>
</div>";
    }

    // line 4
    public function block_heading($context, array $blocks = array())
    {
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Bootstrap:panel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 5,  48 => 4,  42 => 5,  38 => 4,  25 => 3,  23 => 2,  21 => 1,);
    }
}
/* {% set id=id|default(null) %}*/
/* {% set class=class|default(null) %}*/
/* <div {% if id %}id="{{ id }}" {% endif %}class="panel panel-default {% if class %}{{ class }}{% endif %}">*/
/*   <div class="panel-heading">{% block heading %}{% endblock %}</div>*/
/*   <div class="panel-body">{% block body %}{% endblock %}</div>*/
/* </div>*/
