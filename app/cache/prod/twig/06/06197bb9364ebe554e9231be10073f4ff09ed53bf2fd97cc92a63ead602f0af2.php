<?php

/* TopxiaWebBundle:Question:question-set-item-have-sub.html.twig */
class __TwigTemplate_e1bcc5795c3bfec87588e5e5580b39ba46751a1aaaa0a188a4c5e9ec33268524 extends Twig_Template
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
        echo "<div class=\"question-set-item-have-sub\">
  ";
        // line 2
        $context["question"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "question", array());
        // line 3
        echo "
  <div class=\"well\">";
        // line 4
        echo $this->env->getExtension('topxia_web_twig')->bbCode2HtmlFilter($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "stem", array()));
        echo "</div>

  ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "subItems", array()));
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
        foreach ($context['_seq'] as $context["key"] => $context["item"]) {
            // line 7
            echo "    ";
            $this->loadTemplate("TopxiaWebBundle:Question:question-set-item.html.twig", "TopxiaWebBundle:Question:question-set-item-have-sub.html.twig", 7)->display($context);
            // line 8
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
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Question:question-set-item-have-sub.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 9,  52 => 8,  49 => 7,  32 => 6,  27 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }
}
/* <div class="question-set-item-have-sub">*/
/*   {% set question = item.question %}*/
/* */
/*   <div class="well">{{ question.stem|bbCode2Html|raw }}</div>*/
/* */
/*   {% for key,item in item.subItems %}*/
/*     {% include 'TopxiaWebBundle:Question:question-set-item.html.twig' %}*/
/*   {% endfor %}*/
/* */
/* </div>*/
