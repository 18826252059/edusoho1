<?php

/* TopxiaWebBundle:Search:search-teacher.html.twig */
class __TwigTemplate_b050a576675dcc18038e061b55d58c09d52821ee061374d21e6895bf00322a75 extends Twig_Template
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
  EduSoho教育云为您找到教师结果约 <span class=\"color-danger\">";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["counts"]) ? $context["counts"] : null), "html", null, true);
        echo "</span>个
</div>
<div class=\"teacher-list row\">
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
        foreach ($context['_seq'] as $context["_key"] => $context["teacher"]) {
            // line 6
            echo "  ";
            $context["profile"] = $this->getAttribute($context["teacher"], "profile", array());
            // line 7
            echo "  ";
            $context["isFollowed"] = (($this->getAttribute($context["teacher"], "isFollowed", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["teacher"], "isFollowed", array()), false)) : (false));
            // line 8
            echo "    <div class=\"col-lg-4 col-md-6 col-sm-6\">
      ";
            // line 9
            $this->loadTemplate("TopxiaWebBundle:Search:search-teacher-item.html.twig", "TopxiaWebBundle:Search:search-teacher.html.twig", 9)->display($context);
            // line 10
            echo "    </div>
  ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['teacher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Search:search-teacher.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 12,  56 => 10,  54 => 9,  51 => 8,  48 => 7,  45 => 6,  28 => 5,  22 => 2,  19 => 1,);
    }
}
/* <div class="alert alert-blank alert-sm">*/
/*   EduSoho教育云为您找到教师结果约 <span class="color-danger">{{counts}}</span>个*/
/* </div>*/
/* <div class="teacher-list row">*/
/*   {% for teacher in resultSet %}*/
/*   {% set profile = teacher.profile %}*/
/*   {% set isFollowed = teacher.isFollowed|default(false) %}*/
/*     <div class="col-lg-4 col-md-6 col-sm-6">*/
/*       {% include 'TopxiaWebBundle:Search:search-teacher-item.html.twig' %}*/
/*     </div>*/
/*   {% endfor %}*/
/* </div>*/
