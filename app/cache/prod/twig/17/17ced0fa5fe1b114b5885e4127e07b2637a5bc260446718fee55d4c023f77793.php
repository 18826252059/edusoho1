<?php

/* TopxiaAdminBundle:Block/Label:poster.html.twig */
class __TwigTemplate_cdafa7061d6352d30c9a677e22c81e585e705a3bb07938b869e0e19df01e69d0 extends Twig_Template
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
        $context["first"] = 1;
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((($this->getAttribute($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "data", array(), "any", false, true), (isset($context["code"]) ? $context["code"] : null), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "data", array(), "any", false, true), (isset($context["code"]) ? $context["code"] : null), array(), "array"), null)) : (null)));
        foreach ($context['_seq'] as $context["dataId"] => $context["data"]) {
            // line 3
            echo "  ";
            if (((isset($context["first"]) ? $context["first"] : null) == 1)) {
                // line 4
                echo "    <li class=\"poster-table active\">
      <a class=\"poster-btn\" href=\"#poster-";
                // line 5
                echo twig_escape_filter($this->env, $context["dataId"], "html", null, true);
                echo "\" data-toggle=\"tab\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "alt", array()), "html", null, true);
                echo "</a>
      <input type=\"hidden\" name=\"data[";
                // line 6
                echo twig_escape_filter($this->env, (isset($context["code"]) ? $context["code"] : null), "html", null, true);
                echo "][";
                echo twig_escape_filter($this->env, $context["dataId"], "html", null, true);
                echo "][alt]\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "alt", array()), "html", null, true);
                echo "\">
    </li>
  ";
            } else {
                // line 9
                echo "    <li class=\"poster-table\">
      <a class=\"poster-btn\" href=\"#poster-";
                // line 10
                echo twig_escape_filter($this->env, $context["dataId"], "html", null, true);
                echo "\" data-toggle=\"tab\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "alt", array()), "html", null, true);
                echo "</a>
      <input type=\"hidden\" name=\"data[";
                // line 11
                echo twig_escape_filter($this->env, (isset($context["code"]) ? $context["code"] : null), "html", null, true);
                echo "][";
                echo twig_escape_filter($this->env, $context["dataId"], "html", null, true);
                echo "][alt]\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "alt", array()), "html", null, true);
                echo "\">
    </li>
  ";
            }
            // line 14
            echo "  ";
            $context["first"] = 0;
            // line 15
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['dataId'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Block/Label:poster.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 15,  66 => 14,  56 => 11,  50 => 10,  47 => 9,  37 => 6,  31 => 5,  28 => 4,  25 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% set first = 1 %}*/
/* {% for dataId,data in  block.data[code]|default(null) %}*/
/*   {% if first == 1 %}*/
/*     <li class="poster-table active">*/
/*       <a class="poster-btn" href="#poster-{{ dataId }}" data-toggle="tab">{{ data.alt }}</a>*/
/*       <input type="hidden" name="data[{{ code }}][{{ dataId }}][alt]" value="{{ data.alt }}">*/
/*     </li>*/
/*   {% else %}*/
/*     <li class="poster-table">*/
/*       <a class="poster-btn" href="#poster-{{ dataId }}" data-toggle="tab">{{ data.alt }}</a>*/
/*       <input type="hidden" name="data[{{ code }}][{{ dataId }}][alt]" value="{{ data.alt }}">*/
/*     </li>*/
/*   {% endif %}*/
/*   {% set first = 0 %}*/
/* */
/* {% endfor %}*/
