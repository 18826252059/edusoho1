<?php

/* TopxiaAdminBundle:Block:affix-nav.html.twig */
class __TwigTemplate_cc30c553e4a2dfb10a59c0c709cb321fc256e268eb2024766a105ff75fa07289 extends Twig_Template
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
        echo "<nav class=\"block-affix-nav hidden-print hidden-xs hidden-sm affix\" id=\"block-nav-affix\">
  <ul class=\"nav bs-docs-sidenav\">
  ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((($this->getAttribute($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "meta", array(), "any", false, true), "items", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "meta", array(), "any", false, true), "items", array()), null)) : (null)));
        foreach ($context['_seq'] as $context["code"] => $context["item"]) {
            echo "       
    <li>
      <a href=\"#js-affix-";
            // line 5
            echo twig_escape_filter($this->env, $context["code"], "html", null, true);
            echo "\" style=\"padding:5px;\">
      ";
            // line 6
            if ((($this->getAttribute($context["item"], "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "title", array()), null)) : (null))) {
                // line 7
                echo "        ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true);
                echo "
      ";
            } else {
                // line 9
                echo "        ";
                echo twig_escape_filter($this->env, $context["code"], "html", null, true);
                echo "
      ";
            }
            // line 11
            echo "      </a>
    </li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['code'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "    <li>
      <a class=\"back-to-top\" href=\"#top\" style=\"padding:5px;\">
        返回顶部
      </a>
    </li>
  </ul>

  
</nav>
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Block:affix-nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 14,  48 => 11,  42 => 9,  36 => 7,  34 => 6,  30 => 5,  23 => 3,  19 => 1,);
    }
}
/* <nav class="block-affix-nav hidden-print hidden-xs hidden-sm affix" id="block-nav-affix">*/
/*   <ul class="nav bs-docs-sidenav">*/
/*   {% for code,item in block.meta.items|default(null) %}       */
/*     <li>*/
/*       <a href="#js-affix-{{ code }}" style="padding:5px;">*/
/*       {% if item.title|default(null) %}*/
/*         {{ item.title }}*/
/*       {% else %}*/
/*         {{ code }}*/
/*       {% endif %}*/
/*       </a>*/
/*     </li>*/
/*   {% endfor %}*/
/*     <li>*/
/*       <a class="back-to-top" href="#top" style="padding:5px;">*/
/*         返回顶部*/
/*       </a>*/
/*     </li>*/
/*   </ul>*/
/* */
/*   */
/* </nav>*/
/* */
