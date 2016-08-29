<?php

/* TopxiaWebBundle:MyQuiz:my-quiz.html.twig */
class __TwigTemplate_23e2df713ab2fb4a499a7630ef75e36ae132debf6541427ea0a0df74787367ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:MyQuiz:layout.html.twig", "TopxiaWebBundle:MyQuiz:my-quiz.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'list' => array($this, 'block_list'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:MyQuiz:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "我的考试记录 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 5
    public function block_list($context, array $blocks = array())
    {
        // line 6
        echo "
  ";
        // line 7
        if ((isset($context["myTestpaperResults"]) ? $context["myTestpaperResults"] : null)) {
            // line 8
            echo "    <table class=\"table table-striped table-hover\">
    \t<tbody>
    \t\t";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["myTestpaperResults"]) ? $context["myTestpaperResults"] : null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["myTestpaperResult"]) {
                // line 11
                echo "    \t\t\t";
                $context["myTestpaper"] = (($this->getAttribute((isset($context["myTestpapers"]) ? $context["myTestpapers"] : null), $this->getAttribute($context["myTestpaperResult"], "testId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["myTestpapers"]) ? $context["myTestpapers"] : null), $this->getAttribute($context["myTestpaperResult"], "testId", array()), array(), "array"), null)) : (null));
                // line 12
                echo "    \t\t\t";
                if ((isset($context["myTestpaper"]) ? $context["myTestpaper"] : null)) {
                    // line 13
                    echo "    \t\t\t\t";
                    $context["course"] = $this->getAttribute((isset($context["courses"]) ? $context["courses"] : null), $this->env->getExtension('topxia_web_twig')->getCourseidFilter($this->getAttribute((isset($context["myTestpaper"]) ? $context["myTestpaper"] : null), "target", array())), array(), "array");
                    // line 14
                    echo "    \t\t\t";
                }
                // line 15
                echo "    \t\t\t\t";
                $this->loadTemplate("TopxiaWebBundle:MyQuiz:my-quiz-tr.html.twig", "TopxiaWebBundle:MyQuiz:my-quiz.html.twig", 15)->display($context);
                // line 16
                echo "    \t\t";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['myTestpaperResult'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "    \t</tbody>
    </table>
    ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
            echo "
  ";
        } else {
            // line 21
            echo "    <div class=\"empty\">还没有参加过任何考试</div>
  ";
        }
        // line 23
        echo "
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:MyQuiz:my-quiz.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 23,  103 => 21,  98 => 19,  94 => 17,  80 => 16,  77 => 15,  74 => 14,  71 => 13,  68 => 12,  65 => 11,  48 => 10,  44 => 8,  42 => 7,  39 => 6,  36 => 5,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle:MyQuiz:layout.html.twig' %}*/
/* */
/* {% block title %}我的考试记录 - {{ parent() }}{% endblock %}*/
/* */
/* {% block list %}*/
/* */
/*   {% if myTestpaperResults %}*/
/*     <table class="table table-striped table-hover">*/
/*     	<tbody>*/
/*     		{% for myTestpaperResult in myTestpaperResults %}*/
/*     			{% set myTestpaper = myTestpapers[myTestpaperResult.testId]|default(null) %}*/
/*     			{% if myTestpaper %}*/
/*     				{% set course = courses[myTestpaper.target|get_course_id] %}*/
/*     			{% endif %}*/
/*     				{% include 'TopxiaWebBundle:MyQuiz:my-quiz-tr.html.twig' %}*/
/*     		{% endfor %}*/
/*     	</tbody>*/
/*     </table>*/
/*     {{ web_macro.paginator(paginator) }}*/
/*   {% else %}*/
/*     <div class="empty">还没有参加过任何考试</div>*/
/*   {% endif %}*/
/* */
/* {% endblock %}*/
