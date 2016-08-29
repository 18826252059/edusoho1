<?php

/* TopxiaWebBundle:Article/Part:detail-tags.html.twig */
class __TwigTemplate_10edf1324a6fa30a94758fde4aab8204c2f33410f737aaf9cae649b44e91c7f9 extends Twig_Template
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
        echo "<div class=\"article-tags\">
  ";
        // line 2
        if ((isset($context["tagNames"]) ? $context["tagNames"] : null)) {
            echo "标签：
    ";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tagNames"]) ? $context["tagNames"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["tagName"]) {
                // line 4
                echo "    <a class=\"btn-tag\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_tag_show", array("name" => $context["tagName"])), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["tagName"], "html", null, true);
                echo "</a>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tagName'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 6
            echo "  ";
        }
        // line 7
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Article/Part:detail-tags.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 7,  41 => 6,  30 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
/* <div class="article-tags">*/
/*   {% if tagNames %}标签：*/
/*     {% for tagName in tagNames %}*/
/*     <a class="btn-tag" href="{{path('article_tag_show',{name:tagName})}}">{{tagName}}</a>*/
/*     {% endfor %}*/
/*   {% endif %}*/
/* </div>*/
