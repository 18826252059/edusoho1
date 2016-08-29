<?php

/* TopxiaWebBundle:CourseLesson/Part:status-label.html.twig */
class __TwigTemplate_68c3f1fb3ce3ef82796ca10c05b177acedc12027cd9652a86dc4795cee92b211 extends Twig_Template
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
        if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "free", array())) {
            // line 2
            echo "\t  <span class=\"label label-success mrm\">免费</span>
";
        } elseif (($this->getAttribute(        // line 3
(isset($context["course"]) ? $context["course"] : null), "tryLookable", array()) && ((($this->getAttribute((isset($context["media"]) ? $context["media"] : null), "storage", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["media"]) ? $context["media"] : null), "storage", array()), "")) : ("")) == "cloud"))) {
            // line 4
            echo "\t  <span class=\"label label-warning mrm\">试看</span>
";
        }
        // line 6
        echo "
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseLesson/Part:status-label.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 6,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if item.free %}*/
/* 	  <span class="label label-success mrm">免费</span>*/
/* {% elseif course.tryLookable and media.storage|default('') == 'cloud' %}*/
/* 	  <span class="label label-warning mrm">试看</span>*/
/* {% endif %}*/
/* */
/* */
