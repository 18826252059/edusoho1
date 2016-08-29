<?php

/* TopxiaAdminBundle:MoneyCard:show-password-modal.html.twig */
class __TwigTemplate_78eba9517746feb00bd2549fa0d25699b3c8ae92bf3f324da245c566a5c7efb8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "TopxiaAdminBundle:MoneyCard:show-password-modal.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::bootstrap-modal-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["modalSize"] = "large";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "密码:";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "<h4>";
        echo twig_escape_filter($this->env, (isset($context["moneyCardPassword"]) ? $context["moneyCardPassword"] : null), "html", null, true);
        echo "</h4>

";
    }

    // line 11
    public function block_footer($context, array $blocks = array())
    {
        // line 12
        echo "  <button type=\"button\" class=\"btn btn-link\" data-dismiss=\"modal\">取消</button>
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:MoneyCard:show-password-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 12,  50 => 11,  42 => 7,  39 => 6,  33 => 5,  29 => 1,  27 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::bootstrap-modal-layout.html.twig' %}*/
/* */
/* {% set modalSize = 'large' %}*/
/* */
/* {% block title %}密码:{% endblock %}*/
/* {% block body %}*/
/* <h4>{{ moneyCardPassword }}</h4>*/
/* */
/* {% endblock %}*/
/* */
/* {% block footer %}*/
/*   <button type="button" class="btn btn-link" data-dismiss="modal">取消</button>*/
/* {% endblock %}*/
