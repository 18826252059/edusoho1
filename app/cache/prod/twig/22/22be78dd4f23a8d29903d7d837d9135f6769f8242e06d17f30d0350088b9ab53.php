<?php

/* TopxiaWebBundle::bootstrap-clear-modal-layout.html.twig */
class __TwigTemplate_88d0a94c7ca3d1eff4c81e09933576bb80041e9e72e1f8d45473b007829692cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["web_macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "TopxiaWebBundle::bootstrap-clear-modal-layout.html.twig", 1);
        // line 2
        echo "<div class=\"modal-dialog clear-modal-dialog ";
        if (((array_key_exists("modalClass", $context)) ? (_twig_default_filter((isset($context["modalClass"]) ? $context["modalClass"] : null), null)) : (null))) {
            echo twig_escape_filter($this->env, (isset($context["modalClass"]) ? $context["modalClass"] : null), "html", null, true);
        }
        echo "\">
  <div class=\"modal-content\">
    <a href=\"#\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</a>
    <div class=\"modal-body\">";
        // line 5
        $this->displayBlock('body', $context, $blocks);
        echo "</div>
  </div>
</div>";
    }

    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle::bootstrap-clear-modal-layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 5,  22 => 2,  20 => 1,);
    }
}
/* {% import "TopxiaWebBundle::macro.html.twig" as web_macro %}*/
/* <div class="modal-dialog clear-modal-dialog {% if modalClass|default(null) %}{{ modalClass }}{% endif %}">*/
/*   <div class="modal-content">*/
/*     <a href="#" class="close" data-dismiss="modal" aria-hidden="true">&times;</a>*/
/*     <div class="modal-body">{% block body %}{% endblock %}</div>*/
/*   </div>*/
/* </div>*/
