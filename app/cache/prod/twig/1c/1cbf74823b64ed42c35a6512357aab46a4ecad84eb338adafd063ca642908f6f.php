<?php

/* TopxiaAdminBundle::paginator.html.twig */
class __TwigTemplate_dd2e8203fa8912b0a29153b27b3110d75ec5c6ac03e59b59460a913d66a00403 extends Twig_Template
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
    }

    // line 1
    public function getpaginator($__paginator__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "paginator" => $__paginator__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "<ul  class=\"pagination\">
  <li ";
            // line 3
            if (($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "currentPage", array()) == $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "firstPage", array()))) {
                echo "class=\"disabled\"";
            }
            echo "><a  href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "getPageUrl", array(0 => $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "previousPage", array())), "method"), "html", null, true);
            echo "\">上一页</a></li>
  ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "pages", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 5
                echo "    <li ";
                if (($context["page"] == $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "currentPage", array()))) {
                    echo "class=\"active\"";
                }
                echo "><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "getPageUrl", array(0 => $context["page"]), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                echo "</a></li>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 7
            echo "  <li ";
            if (($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "currentPage", array()) == $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "lastPage", array()))) {
                echo "class=\"disabled\"";
            }
            echo "><a  href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "getPageUrl", array(0 => $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "nextPage", array())), "method"), "html", null, true);
            echo "\">下一页</a></li>
</ul>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle::paginator.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 7,  48 => 5,  44 => 4,  36 => 3,  33 => 2,  21 => 1,);
    }
}
/* {% macro paginator(paginator) %}*/
/* <ul  class="pagination">*/
/*   <li {% if paginator.currentPage == paginator.firstPage %}class="disabled"{% endif %}><a  href="{{ paginator.getPageUrl(paginator.previousPage) }}">上一页</a></li>*/
/*   {% for page in paginator.pages %}*/
/*     <li {% if page == paginator.currentPage %}class="active"{% endif %}><a href="{{ paginator.getPageUrl(page) }}">{{ page }}</a></li>*/
/*   {% endfor %}*/
/*   <li {% if paginator.currentPage == paginator.lastPage %}class="disabled"{% endif %}><a  href="{{ paginator.getPageUrl(paginator.nextPage) }}">下一页</a></li>*/
/* </ul>*/
/* {% endmacro %}*/
