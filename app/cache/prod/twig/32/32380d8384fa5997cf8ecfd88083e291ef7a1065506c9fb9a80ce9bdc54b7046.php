<?php

/* TopxiaWebBundle:Search:search-course.html.twig */
class __TwigTemplate_c238880b3e0403df4a0da174901f21a5487cbbd05ce7c6386a8e84008d298378 extends Twig_Template
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
        echo "<div class=\"alert alert-blank alert-sm\">
  EduSoho教育云为您找到课程结果约 <span class=\"color-danger\">";
        // line 2
        echo twig_escape_filter($this->env, ((array_key_exists("counts", $context)) ? (_twig_default_filter((isset($context["counts"]) ? $context["counts"] : null), 0)) : (0)), "html", null, true);
        echo "</span>个
</div>
<div class=\"search-course-list\" id=\"search-course\">
  ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["resultSet"]) ? $context["resultSet"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
            // line 6
            echo "    ";
            $this->loadTemplate("TopxiaWebBundle:Search:search-course-item.html.twig", "TopxiaWebBundle:Search:search-course.html.twig", 6)->display($context);
            // line 7
            echo "  ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Search:search-course.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 8,  48 => 7,  45 => 6,  28 => 5,  22 => 2,  19 => 1,);
    }
}
/* <div class="alert alert-blank alert-sm">*/
/*   EduSoho教育云为您找到课程结果约 <span class="color-danger">{{counts|default(0)}}</span>个*/
/* </div>*/
/* <div class="search-course-list" id="search-course">*/
/*   {% for course in resultSet %}*/
/*     {% include 'TopxiaWebBundle:Search:search-course-item.html.twig' %}*/
/*   {% endfor %}*/
/* </div>*/
