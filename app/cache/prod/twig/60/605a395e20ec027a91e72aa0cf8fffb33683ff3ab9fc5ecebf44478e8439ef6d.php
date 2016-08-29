<?php

/* TopxiaWebBundle:LessonQuestionPlugin:list.html.twig */
class __TwigTemplate_49cfa16161b0fd62a9f063e9a505ddc07f55b84eae74aee7fe2f2a49b43db4af extends Twig_Template
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
        echo "<ul class=\"media-list thread-list-small mtl\" data-role=\"list\">
\t";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["threads"]) ? $context["threads"] : null));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["_key"] => $context["thread"]) {
            // line 3
            echo "\t  ";
            $context["user"] = $this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["thread"], "userId", array()), array(), "array");
            // line 4
            echo "\t  ";
            $this->loadTemplate("TopxiaWebBundle:LessonQuestionPlugin:item.html.twig", "TopxiaWebBundle:LessonQuestionPlugin:list.html.twig", 4)->display($context);
            // line 5
            echo "\t";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 6
            echo "\t  <li class=\"empty-item\">此课时还没有问题</li>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['thread'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:LessonQuestionPlugin:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 8,  59 => 6,  46 => 5,  43 => 4,  40 => 3,  22 => 2,  19 => 1,);
    }
}
/* <ul class="media-list thread-list-small mtl" data-role="list">*/
/* 	{% for thread in threads %}*/
/* 	  {% set user = users[thread.userId] %}*/
/* 	  {% include 'TopxiaWebBundle:LessonQuestionPlugin:item.html.twig' %}*/
/* 	{% else %}*/
/* 	  <li class="empty-item">此课时还没有问题</li>*/
/* 	{% endfor %}*/
/* </ul>*/
