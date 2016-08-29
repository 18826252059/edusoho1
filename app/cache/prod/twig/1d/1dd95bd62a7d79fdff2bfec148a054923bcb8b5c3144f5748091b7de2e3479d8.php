<?php

/* TopxiaWebBundle:Default:navigation-li.html.twig */
class __TwigTemplate_67848aa33c0d4a0905befb2fa506071b24f276611014ab08c2b176fdcce04714 extends Twig_Template
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
        echo "<li class=\"";
        if ((isset($context["subNavs"]) ? $context["subNavs"] : null)) {
            echo "nav-hover";
        }
        if (((isset($context["siteNav"]) ? $context["siteNav"] : null) && ((isset($context["siteNav"]) ? $context["siteNav"] : null) == $this->getAttribute((isset($context["nav"]) ? $context["nav"] : null), "url", array())))) {
            echo " active ";
        }
        echo "\">
  <a href=\"";
        // line 2
        if ($this->getAttribute((isset($context["nav"]) ? $context["nav"] : null), "url", array())) {
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->navigationUrlFilter($this->getAttribute((isset($context["nav"]) ? $context["nav"] : null), "url", array())), "html", null, true);
        } else {
            echo "javascript:;";
        }
        echo "\" ";
        if ($this->getAttribute((isset($context["nav"]) ? $context["nav"] : null), "isNewWin", array())) {
            echo "target=\"_blank\"";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["nav"]) ? $context["nav"] : null), "name", array()), "html", null, true);
        echo " ";
        if ((isset($context["subNavs"]) ? $context["subNavs"] : null)) {
            echo " <b class=\"caret\"></b>";
        }
        echo "</a>
  ";
        // line 3
        if ((isset($context["subNavs"]) ? $context["subNavs"] : null)) {
            // line 4
            echo "    <ul class=\"dropdown-menu\" role=\"menu\">
      ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["subNavs"]) ? $context["subNavs"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["subNav"]) {
                if ($this->getAttribute($context["subNav"], "isOpen", array())) {
                    // line 6
                    echo "        <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->navigationUrlFilter($this->getAttribute($context["subNav"], "url", array())), "html", null, true);
                    echo "\"  ";
                    if ($this->getAttribute($context["subNav"], "isNewWin", array())) {
                        echo "target=\"_blank\"";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["subNav"], "name", array()), "html", null, true);
                    echo "</a></li>
      ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subNav'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 8
            echo "    </ul>
  ";
        }
        // line 10
        echo "</li>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Default:navigation-li.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 10,  73 => 8,  57 => 6,  52 => 5,  49 => 4,  47 => 3,  29 => 2,  19 => 1,);
    }
}
/* <li class="{% if subNavs %}nav-hover{% endif %}{% if siteNav and siteNav == nav.url %} active {% endif %}">*/
/*   <a href="{% if nav.url %}{{ nav.url|navigation_url }}{% else %}javascript:;{% endif %}" {% if nav.isNewWin %}target="_blank"{% endif %}>{{ nav.name }} {% if subNavs %} <b class="caret"></b>{% endif %}</a>*/
/*   {% if subNavs %}*/
/*     <ul class="dropdown-menu" role="menu">*/
/*       {% for subNav in subNavs if subNav.isOpen %}*/
/*         <li><a href="{{ subNav.url|navigation_url }}"  {% if subNav.isNewWin %}target="_blank"{% endif %}>{{ subNav.name }}</a></li>*/
/*       {% endfor %}*/
/*     </ul>*/
/*   {% endif %}*/
/* </li>*/
