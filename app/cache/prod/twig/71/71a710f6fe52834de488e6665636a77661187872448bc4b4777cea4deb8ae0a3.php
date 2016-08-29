<?php

/* TopxiaWebBundle:CourseLesson/Part:chapter.html.twig */
class __TwigTemplate_027fc93957eafec58525883bc364339c7f2f4f52af412b3cb78f18124541c2af extends Twig_Template
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
        if (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "type", array()) == "unit")) {
            // line 2
            echo "  <li class=\"section\">
    <span class=\"title\">
    ";
            // line 4
            if (_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("course.custom_chapter_enabled"), true)) {
                echo " 
      第 ";
                // line 5
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "number", array()), "html", null, true);
                echo " 
      ";
                // line 6
                if ($this->env->getExtension('topxia_web_twig')->getSetting("default.part_name")) {
                    // line 7
                    echo "        ";
                    echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.part_name"), "节"), "html", null, true);
                    echo "
      ";
                } else {
                    // line 9
                    echo "        节
      ";
                }
                // line 10
                echo "：
    ";
            }
            // line 11
            echo " 
    ";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "title", array()), "html", null, true);
            echo "
    </span>
  </li>
";
        } else {
            // line 16
            echo "  <li class=\"chapter clearfix\">
    <i class=\"es-icon es-icon-toc\"></i>
    <span class=\"title\">
      ";
            // line 19
            if (_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("course.custom_chapter_enabled"), true)) {
                echo " 
        第 ";
                // line 20
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "number", array()), "html", null, true);
                echo " 
        ";
                // line 21
                if ($this->env->getExtension('topxia_web_twig')->getSetting("default.chapter_name")) {
                    // line 22
                    echo "          ";
                    echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.chapter_name"), "章"), "html", null, true);
                    echo "
        ";
                } else {
                    // line 24
                    echo "          章
        ";
                }
                // line 25
                echo "：
      ";
            }
            // line 27
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "title", array()), "html", null, true);
            echo "
      </span>
    </span>
    <span class=\"period-show\"><i class=\"es-icon es-icon-remove\"></i></span>
  </li>
";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseLesson/Part:chapter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 27,  84 => 25,  80 => 24,  74 => 22,  72 => 21,  68 => 20,  64 => 19,  59 => 16,  52 => 12,  49 => 11,  45 => 10,  41 => 9,  35 => 7,  33 => 6,  29 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% if item.type == 'unit' %}*/
/*   <li class="section">*/
/*     <span class="title">*/
/*     {% if setting('course.custom_chapter_enabled')|default(true) %} */
/*       第 {{ item.number }} */
/*       {% if setting('default.part_name') %}*/
/*         {{setting('default.part_name')|default('节')}}*/
/*       {% else %}*/
/*         节*/
/*       {% endif %}：*/
/*     {% endif  %} */
/*     {{ item.title }}*/
/*     </span>*/
/*   </li>*/
/* {% else %}*/
/*   <li class="chapter clearfix">*/
/*     <i class="es-icon es-icon-toc"></i>*/
/*     <span class="title">*/
/*       {% if setting('course.custom_chapter_enabled')|default(true) %} */
/*         第 {{ item.number }} */
/*         {% if setting('default.chapter_name') %}*/
/*           {{setting('default.chapter_name')|default('章')}}*/
/*         {% else %}*/
/*           章*/
/*         {% endif %}：*/
/*       {% endif %}*/
/*         {{ item.title }}*/
/*       </span>*/
/*     </span>*/
/*     <span class="period-show"><i class="es-icon es-icon-remove"></i></span>*/
/*   </li>*/
/* {% endif %}*/
