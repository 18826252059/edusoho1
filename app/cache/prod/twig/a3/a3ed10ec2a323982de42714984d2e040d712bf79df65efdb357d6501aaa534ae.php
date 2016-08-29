<?php

/* TopxiaWebBundle:Article/Part:list-main.html.twig */
class __TwigTemplate_af7793faf713bc91a7c54e48b1993a8570c4fc346bbce744a596d240223aa299 extends Twig_Template
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
        echo "<section class=\"es-section\">
  ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 3
            echo "    ";
            $context["category"] = $this->getAttribute((isset($context["categories"]) ? $context["categories"] : null), $this->getAttribute($context["article"], "categoryId", array()), array(), "array");
            // line 4
            echo "    ";
            $this->loadTemplate("TopxiaWebBundle:Article/Widget:list-item.html.twig", "TopxiaWebBundle:Article/Part:list-main.html.twig", 4)->display($context);
            // line 5
            echo "  ";
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
            echo "     <div class=\"empty tac text-muted mvl\">还没有任何资讯</div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "  
  ";
        // line 9
        $this->loadTemplate("TopxiaWebBundle:Article/Part:paginator.html.twig", "TopxiaWebBundle:Article/Part:list-main.html.twig", 9)->display($context);
        // line 10
        echo "</section>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Article/Part:list-main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 10,  69 => 9,  66 => 8,  59 => 6,  46 => 5,  43 => 4,  40 => 3,  22 => 2,  19 => 1,);
    }
}
/* <section class="es-section">*/
/*   {% for article in articles %}*/
/*     {% set category = categories[article.categoryId] %}*/
/*     {% include 'TopxiaWebBundle:Article/Widget:list-item.html.twig' %}*/
/*   {% else %}*/
/*      <div class="empty tac text-muted mvl">还没有任何资讯</div>*/
/*   {% endfor %}*/
/*   */
/*   {% include 'TopxiaWebBundle:Article/Part:paginator.html.twig' %}*/
/* </section>*/
/* */
