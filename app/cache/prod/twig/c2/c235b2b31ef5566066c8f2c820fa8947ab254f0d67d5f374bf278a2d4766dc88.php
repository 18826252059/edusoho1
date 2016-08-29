<?php

/* TopxiaWebBundle:Article/Part:paginator.html.twig */
class __TwigTemplate_4e3f9e65a4b770559d99a91d0b7bbd25a05ea7b94febd635ee9270001b0ef7a3 extends Twig_Template
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
        if (($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "lastPage", array()) > 1)) {
            // line 2
            echo "  <nav>
    <ul class=\"pager\">
      <li class=\"previous ";
            // line 4
            if (($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "currentPage", array()) == $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "firstPage", array()))) {
                echo "disabled";
            }
            echo "\">
        <a href=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "getPageUrl", array(0 => $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "previousPage", array())), "method"), "html", null, true);
            echo "\"><i class=\"es-icon es-icon-chevronleft\"></i>上一页</a>
      </li>
      <li class=\"next ";
            // line 7
            if (($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "currentPage", array()) == $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "lastPage", array()))) {
                echo "disabled";
            }
            echo "\">
        <a href=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "getPageUrl", array(0 => $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "nextPage", array())), "method"), "html", null, true);
            echo "\">下一页<i class=\"es-icon es-icon-chevronright\"></i></a>
      </li>
    </ul>
</nav>
";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Article/Part:paginator.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  36 => 7,  31 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% if paginator.lastPage > 1 %}*/
/*   <nav>*/
/*     <ul class="pager">*/
/*       <li class="previous {% if paginator.currentPage == paginator.firstPage %}disabled{% endif %}">*/
/*         <a href="{{ paginator.getPageUrl(paginator.previousPage) }}"><i class="es-icon es-icon-chevronleft"></i>上一页</a>*/
/*       </li>*/
/*       <li class="next {% if paginator.currentPage == paginator.lastPage %}disabled{% endif %}">*/
/*         <a href="{{ paginator.getPageUrl(paginator.nextPage) }}">下一页<i class="es-icon es-icon-chevronright"></i></a>*/
/*       </li>*/
/*     </ul>*/
/* </nav>*/
/* {% endif %}*/
