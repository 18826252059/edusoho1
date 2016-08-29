<?php

/* TopxiaWebBundle::bootstrap-modal-layout.html.twig */
class __TwigTemplate_bc270a5bdbac5500f96be156061f0a647386ab8ca29295375073e392b462e3a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["web_macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "TopxiaWebBundle::bootstrap-modal-layout.html.twig", 1);
        // line 2
        echo "<div class=\"modal-dialog ";
        if (((array_key_exists("modal_class", $context)) ? (_twig_default_filter((isset($context["modal_class"]) ? $context["modal_class"] : $this->getContext($context, "modal_class")), "")) : (""))) {
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["modal_class"]) ? $context["modal_class"] : $this->getContext($context, "modal_class")), "html", null, true);
        }
        echo "\">
  <div class=\"modal-content\">
    <div class=\"modal-header\">
      <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
      <h4 class=\"modal-title\">";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</h4>
    </div>
    <div class=\"modal-body\">";
        // line 8
        $this->displayBlock('body', $context, $blocks);
        echo "</div>
    ";
        // line 9
        if ( !((array_key_exists("hide_footer", $context)) ? (_twig_default_filter((isset($context["hide_footer"]) ? $context["hide_footer"] : $this->getContext($context, "hide_footer")), false)) : (false))) {
            // line 10
            echo "      <div class=\"modal-footer\">";
            $this->displayBlock('footer', $context, $blocks);
            echo "</div>
    ";
        }
        // line 12
        echo "  </div>
</div>";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
    }

    // line 10
    public function block_footer($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle::bootstrap-modal-layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 10,  62 => 8,  57 => 6,  52 => 12,  46 => 10,  44 => 9,  40 => 8,  35 => 6,  24 => 2,  22 => 1,);
    }
}
/* {% import "TopxiaWebBundle::macro.html.twig" as web_macro %}*/
/* <div class="modal-dialog {% if modal_class|default('') %} {{ modal_class }}{% endif %}">*/
/*   <div class="modal-content">*/
/*     <div class="modal-header">*/
/*       <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>*/
/*       <h4 class="modal-title">{% block title %}{% endblock %}</h4>*/
/*     </div>*/
/*     <div class="modal-body">{% block body %}{% endblock %}</div>*/
/*     {% if not hide_footer|default(false) %}*/
/*       <div class="modal-footer">{% block footer %}{% endblock %}</div>*/
/*     {% endif %}*/
/*   </div>*/
/* </div>*/
