<?php

/* TopxiaWebBundle:Marker:answer.html.twig */
class __TwigTemplate_61e9378fbadb49ac5791342a230531ee5758da48d4c4b8dda1e71143e119d4a3 extends Twig_Template
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
            $this->loadTemplate((("TopxiaWebBundle:Marker:answer-" . (isset($context["type"]) ? $context["type"] : null)) . ".html.twig"), "TopxiaWebBundle:Marker:answer.html.twig", 6)->display($context);
            // line 7
            echo "\t    </div>
\t    <script>app.load('marker/answer')</script>
\t  </div>
\t</div>
";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Marker:answer.html.twig";
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
/* 	        {% include 'TopxiaWebBundle:Marker:answer-' ~ type ~ '.html.twig' %}*/
/* 	    </div>*/
/* 	    <script>app.load('marker/answer')</script>*/
/* 	  </div>*/
/* 	</div>*/
/* {% endif %}*/
