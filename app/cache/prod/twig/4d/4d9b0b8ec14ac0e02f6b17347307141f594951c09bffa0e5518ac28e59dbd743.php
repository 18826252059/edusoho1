<?php

/* TopxiaWebBundle:User:group.html.twig */
class __TwigTemplate_fea863ff9f1bf06f937377bcf36c732b1a2cbcc77865089a40fa2014d8facfcb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:User:layout.html.twig", "TopxiaWebBundle:User:group.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:User:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["pageNav"] = "group";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "  ";
        if ((isset($context["adminGroups"]) ? $context["adminGroups"] : null)) {
            // line 9
            echo "    <div class=\"es-piece\">
      <div class=\"piece-header\">
        管理小组
      </div>
      ";
            // line 13
            $this->loadTemplate("TopxiaWebBundle:Group:groups-ul.html.twig", "TopxiaWebBundle:User:group.html.twig", 13)->display(array_merge($context, array("groups" => (isset($context["adminGroups"]) ? $context["adminGroups"] : null))));
            // line 14
            echo "    </div>
    <hr>
  ";
        }
        // line 17
        echo "  <div class=\"es-piece\">
    <div class=\"piece-header\">
      加入小组
    </div>
    ";
        // line 21
        $this->loadTemplate("TopxiaWebBundle:Group:groups-ul.html.twig", "TopxiaWebBundle:User:group.html.twig", 21)->display(array_merge($context, array("groups" => (isset($context["groups"]) ? $context["groups"] : null))));
        // line 22
        echo "  </div>
  ";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:User:group.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 23,  65 => 22,  63 => 21,  57 => 17,  52 => 14,  50 => 13,  44 => 9,  41 => 8,  38 => 7,  32 => 3,  28 => 1,  26 => 5,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle:User:layout.html.twig' %}*/
/* */
/* {% block title %}{{ parent() }}{% endblock %}*/
/* */
/* {% set pageNav = 'group' %}*/
/* */
/* {% block main %}*/
/*   {% if adminGroups %}*/
/*     <div class="es-piece">*/
/*       <div class="piece-header">*/
/*         管理小组*/
/*       </div>*/
/*       {% include 'TopxiaWebBundle:Group:groups-ul.html.twig' with {'groups':adminGroups,}%}*/
/*     </div>*/
/*     <hr>*/
/*   {% endif %}*/
/*   <div class="es-piece">*/
/*     <div class="piece-header">*/
/*       加入小组*/
/*     </div>*/
/*     {% include 'TopxiaWebBundle:Group:groups-ul.html.twig' with {'groups':groups} %}*/
/*   </div>*/
/*   {{ web_macro.paginator(paginator) }}*/
/* {% endblock %}*/
