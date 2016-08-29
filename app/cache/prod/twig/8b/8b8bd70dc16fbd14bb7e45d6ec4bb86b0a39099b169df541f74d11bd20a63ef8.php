<?php

/* TopxiaWebBundle:Search:search-article.html.twig */
class __TwigTemplate_392c34c51dfbb449d7ee1a085664beb77ff65fff1bcc5f2c5cdd55645b5348e4 extends Twig_Template
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
  EduSoho教育云为您找到资讯结果约 <span class=\"color-danger\">";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["counts"]) ? $context["counts"] : null), "html", null, true);
        echo "</span>个
</div>
";
        // line 4
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
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 5
            $context["category"] = $this->getAttribute($context["article"], "category", array());
            // line 6
            echo "<div class=\"article-list\">
  ";
            // line 7
            $this->loadTemplate("TopxiaWebBundle:Search:search-article-item.html.twig", "TopxiaWebBundle:Search:search-article.html.twig", 7)->display($context);
            // line 8
            echo "</div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Search:search-article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 8,  49 => 7,  46 => 6,  44 => 5,  27 => 4,  22 => 2,  19 => 1,);
    }
}
/* <div class="alert alert-blank alert-sm">*/
/*   EduSoho教育云为您找到资讯结果约 <span class="color-danger">{{counts}}</span>个*/
/* </div>*/
/* {% for article in resultSet %}*/
/* {% set category = article.category %}*/
/* <div class="article-list">*/
/*   {% include 'TopxiaWebBundle:Search:search-article-item.html.twig' %}*/
/* </div>*/
/* {% endfor %}*/
