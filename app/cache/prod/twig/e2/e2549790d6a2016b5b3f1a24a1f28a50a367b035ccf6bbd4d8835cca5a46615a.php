<?php

/* TopxiaWebBundle:CourseTestpaperManage:item-picked.html.twig */
class __TwigTemplate_b51bb1658d0d672afa5cecc94c051d486ed77aea9f1fca583131241dd276ac10 extends Twig_Template
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
        echo "<table class=\"picked-items\">
";
        // line 2
        $this->loadTemplate("TopxiaWebBundle:CourseTestpaperManage:item-tr.html.twig", "TopxiaWebBundle:CourseTestpaperManage:item-picked.html.twig", 2)->display($context);
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subQuestions"]) ? $context["subQuestions"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 4
            echo "  ";
            $this->loadTemplate("TopxiaWebBundle:CourseTestpaperManage:item-tr.html.twig", "TopxiaWebBundle:CourseTestpaperManage:item-picked.html.twig", 4)->display($context);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "</table>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseTestpaperManage:item-picked.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 6,  41 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }
}
/* <table class="picked-items">*/
/* {% include 'TopxiaWebBundle:CourseTestpaperManage:item-tr.html.twig' %}*/
/* {% for question in subQuestions %}*/
/*   {% include 'TopxiaWebBundle:CourseTestpaperManage:item-tr.html.twig' %}*/
/* {% endfor %}*/
/* </table>*/
