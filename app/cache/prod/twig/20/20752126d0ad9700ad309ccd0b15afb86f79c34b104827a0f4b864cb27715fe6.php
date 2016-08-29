<?php

/* TopxiaAdminBundle:Course:course-item.html.twig */
class __TwigTemplate_5295a862e6be08db4e0b3a506d46c405f236b45cadb5f3e74223962770179323 extends Twig_Template
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
        echo "<li data-course-id=\"";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), null)) : (null)), "html", null, true);
        echo "\" class=\"course-grid related-course-grid\" role=\"course-item\" 
";
        // line 2
        if ( !((array_key_exists("showDelBtn", $context)) ? (_twig_default_filter((isset($context["showDelBtn"]) ? $context["showDelBtn"] : null), false)) : (false))) {
            // line 3
            echo "style=\"cursor:pointer\"
";
        }
        // line 4
        echo ">
\t<div class=\"grid-body\" style=\"position:relative\">
  \t\t<img src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "largePicture", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "largePicture", array()), "")) : ("")), "course.png"), "html", null, true);
        echo "\" class=\"img-responsive thumb\"/>
\t\t<span class=\"title\" style=\"max-height: 15px;overflow: hidden;line-height: 20px;\">
\t\t";
        // line 8
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "title", array()), "还没有选择课程")) : ("还没有选择课程")), "html", null, true);
        echo "
\t\t</span>
\t\t
\t\t<button type=\"button\" role=\"course-item-delete\" data-course-id=\"";
        // line 11
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), null)) : (null)), "html", null, true);
        echo "\" ";
        if ( !((array_key_exists("showDelBtn", $context)) ? (_twig_default_filter((isset($context["showDelBtn"]) ? $context["showDelBtn"] : null), false)) : (false))) {
            echo "style=\"display:none\"";
        }
        echo " class=\"series-mode-label close\">X</button>
\t\t
\t</div>
</li>";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Course:course-item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 11,  39 => 8,  34 => 6,  30 => 4,  26 => 3,  24 => 2,  19 => 1,);
    }
}
/* <li data-course-id="{{course.id|default(null)}}" class="course-grid related-course-grid" role="course-item" */
/* {% if not showDelBtn|default(false) %}*/
/* style="cursor:pointer"*/
/* {% endif %}>*/
/* 	<div class="grid-body" style="position:relative">*/
/*   		<img src="{{ filepath(course.largePicture|default(''), 'course.png') }}" class="img-responsive thumb"/>*/
/* 		<span class="title" style="max-height: 15px;overflow: hidden;line-height: 20px;">*/
/* 		{{course.title|default("还没有选择课程")}}*/
/* 		</span>*/
/* 		*/
/* 		<button type="button" role="course-item-delete" data-course-id="{{course.id|default(null)}}" {% if not showDelBtn|default(false) %}style="display:none"{% endif %} class="series-mode-label close">X</button>*/
/* 		*/
/* 	</div>*/
/* </li>*/
