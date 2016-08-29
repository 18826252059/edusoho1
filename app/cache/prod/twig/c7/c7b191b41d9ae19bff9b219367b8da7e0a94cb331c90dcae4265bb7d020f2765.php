<?php

/* TopxiaWebBundle:Marker:question-modal.html.twig */
class __TwigTemplate_176e5a65944356a9a1efc8de834f08b917bdca910626e5f30cc79d1b324e4385 extends Twig_Template
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
        $context["type"] = (($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "type", array()), false)) : (false));
        // line 2
        if ((isset($context["type"]) ? $context["type"] : null)) {
            // line 3
            echo "\t<div class=\"modal-dialog marker-modal\">
\t  <div class=\"modal-content \">
\t    <div class=\"modal-body\">
\t        ";
            // line 6
            $this->loadTemplate((("TopxiaWebBundle:Marker:do-test-" . (isset($context["type"]) ? $context["type"] : null)) . ".html.twig"), "TopxiaWebBundle:Marker:question-modal.html.twig", 6)->display($context);
            // line 7
            echo "\t    </div>
\t    <script>app.load('marker/do-test')</script>
\t  </div>
\t</div>
";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Marker:question-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 7,  28 => 6,  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% set type = question.type|default(false) %}*/
/* {% if type %}*/
/* 	<div class="modal-dialog marker-modal">*/
/* 	  <div class="modal-content ">*/
/* 	    <div class="modal-body">*/
/* 	        {% include 'TopxiaWebBundle:Marker:do-test-' ~ type ~ '.html.twig' %}*/
/* 	    </div>*/
/* 	    <script>app.load('marker/do-test')</script>*/
/* 	  </div>*/
/* 	</div>*/
/* {% endif %}*/
