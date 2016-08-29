<?php

/* TopxiaWebBundle:Article/Part:detail-copyright.html.twig */
class __TwigTemplate_7dc62929a8570967d0ef80dd80af6b82a8901d4ee4f5e4eac7ac72d8a7aa8861 extends Twig_Template
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
        if (($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "source", array()) || $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "sourceUrl", array()))) {
            // line 2
            echo "<div class=\"well\">
  ";
            // line 3
            if ($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "source", array())) {
                echo " 
    <p>文章来源: <strong class=\"mll\">";
                // line 4
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "source", array()), "html", null, true);
                echo "</strong></p>
  ";
            }
            // line 6
            echo "
  ";
            // line 7
            if ($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "sourceUrl", array())) {
                echo " 
    <p>
      原文链接: 
      <a href=\"";
                // line 10
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "sourceUrl", array()), "html", null, true);
                echo "\" class=\"mll transition\" target=\"_blank\">
        ";
                // line 11
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "sourceUrl", array()), "html", null, true);
                echo "
      </a>
    </p>
  ";
            }
            // line 15
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Article/Part:detail-copyright.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 15,  46 => 11,  42 => 10,  36 => 7,  33 => 6,  28 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if article.source or article.sourceUrl %}*/
/* <div class="well">*/
/*   {% if article.source %} */
/*     <p>文章来源: <strong class="mll">{{ article.source }}</strong></p>*/
/*   {% endif %}*/
/* */
/*   {% if article.sourceUrl %} */
/*     <p>*/
/*       原文链接: */
/*       <a href="{{ article.sourceUrl }}" class="mll transition" target="_blank">*/
/*         {{ article.sourceUrl }}*/
/*       </a>*/
/*     </p>*/
/*   {% endif %}*/
/* </div>*/
/* {% endif %}*/
