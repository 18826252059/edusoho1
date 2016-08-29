<?php

/* TopxiaWebBundle:Article:nav.html.twig */
class __TwigTemplate_87ea078ac62c4dada6bdc0290a9dca4276d21b03c9e89a15ad73b43069f0e373 extends Twig_Template
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
        $context["currentNavCategory"] = ((array_key_exists("categoryCode", $context)) ? (_twig_default_filter((isset($context["categoryCode"]) ? $context["categoryCode"] : null), null)) : (null));
        // line 2
        $context["rootCategory"] = (($this->getAttribute((isset($context["rootCategory"]) ? $context["rootCategory"] : null), "code", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["rootCategory"]) ? $context["rootCategory"] : null), "code", array()), null)) : (null));
        // line 3
        echo "<ul class=\"nav nav-tabs\" role=\"tablist\">
  <li ";
        // line 4
        if ( !(isset($context["currentNavCategory"]) ? $context["currentNavCategory"] : null)) {
            echo " role=\"presentation\" class=\"active\" ";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('routing')->getPath("article_show");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "name", array()), "html", null, true);
        echo "</a></li>
  ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categoryTree"]) ? $context["categoryTree"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 6
            echo "    ";
            if ((($this->getAttribute($context["cat"], "parentId", array()) == 0) && ($this->getAttribute($context["cat"], "published", array()) == 1))) {
                // line 7
                echo "       <li class=\"";
                if (((isset($context["rootCategory"]) ? $context["rootCategory"] : null) == $this->getAttribute($context["cat"], "code", array()))) {
                    echo "active";
                }
                echo "\" role=\"presentation\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_category", array("categoryCode" => $this->getAttribute($context["cat"], "code", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["cat"], "name", array()), "html", null, true);
                echo "</a></li>
    ";
            }
            // line 9
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Article:nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 10,  55 => 9,  43 => 7,  40 => 6,  36 => 5,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% set currentNavCategory = categoryCode|default(null) %}*/
/* {% set rootCategory = rootCategory.code|default(null) %}*/
/* <ul class="nav nav-tabs" role="tablist">*/
/*   <li {% if not currentNavCategory %} role="presentation" class="active" {% endif %}><a href="{{ path('article_show') }}">{{ setting.name }}</a></li>*/
/*   {% for cat in categoryTree %}*/
/*     {% if cat.parentId == 0 and cat.published == 1 %}*/
/*        <li class="{% if rootCategory == cat.code %}active{% endif %}" role="presentation"><a href="{{ path('article_category', {categoryCode:cat.code}) }}">{{ cat.name }}</a></li>*/
/*     {% endif %}*/
/*   {% endfor %}*/
/* </ul>*/
