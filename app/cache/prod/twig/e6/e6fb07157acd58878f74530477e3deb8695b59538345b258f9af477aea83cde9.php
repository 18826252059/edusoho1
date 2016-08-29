<?php

/* TopxiaWebBundle:MyOrder:detail-modal.html.twig */
class __TwigTemplate_4dcaa0b89c648adf16fd3bad7de56649e32f3c0daa47c6000040da932945f661 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "TopxiaWebBundle:MyOrder:detail-modal.html.twig", 1);
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
        // line 2
        $context["admin_macro"] = $this->loadTemplate("TopxiaAdminBundle::macro.html.twig", "TopxiaWebBundle:MyOrder:detail-modal.html.twig", 2);
        // line 3
        $context["modalSize"] = "large";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "订单详情";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "    

";
        // line 13
        $this->loadTemplate("TopxiaWebBundle:MyOrder:detail-order.html.twig", "TopxiaWebBundle:MyOrder:detail-modal.html.twig", 13)->display($context);
        // line 14
        echo "
";
    }

    // line 17
    public function block_footer($context, array $blocks = array())
    {
        // line 18
        echo "  <div>
    <button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\">关闭</button>
  </div>

";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:MyOrder:detail-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 18,  55 => 17,  50 => 14,  48 => 13,  44 => 7,  41 => 6,  35 => 5,  31 => 1,  29 => 3,  27 => 2,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::bootstrap-modal-layout.html.twig' %}*/
/* {% import "TopxiaAdminBundle::macro.html.twig" as admin_macro %}*/
/* {% set modalSize = 'large' %}*/
/* */
/* {% block title %}订单详情{% endblock %}*/
/* {% block body %}*/
/*     */
/* */
/* {# <ul class="nav nav-tabs mbl">*/
/*   <li class="active"><a href="#detail" data-toggle="tab">详情</a></li>*/
/*   <li class=""><a href="#log" data-toggle="tab">日志</a></li>*/
/* </ul> #}*/
/* {% include 'TopxiaWebBundle:MyOrder:detail-order.html.twig' %}*/
/* */
/* {% endblock %}*/
/* */
/* {% block footer %}*/
/*   <div>*/
/*     <button type="button" class="btn btn-primary" data-dismiss="modal">关闭</button>*/
/*   </div>*/
/* */
/* {% endblock %}*/
/* */
/* */
