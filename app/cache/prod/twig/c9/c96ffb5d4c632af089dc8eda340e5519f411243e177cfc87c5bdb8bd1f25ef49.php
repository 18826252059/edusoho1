<?php

/* TopxiaWebBundle:PayCenter:vip-cancelled.html.twig */
class __TwigTemplate_2d191dcfa8143bebc535d05c441ca5b94cccc6d8f5713960dbeef6d89f869b5c extends Twig_Template
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
        echo "<a href=\"javascript:;\"  class=\"js-order-cancel btn btn-link\" data-goto=\"";
        echo $this->env->getExtension('routing')->getPath("vip_renew");
        echo "\" data-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("my_order_cancel", array("id" => $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "id", array()))), "html", null, true);
        echo "\" >取消</a>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:PayCenter:vip-cancelled.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <a href="javascript:;"  class="js-order-cancel btn btn-link" data-goto="{{ path('vip_renew') }}" data-url="{{ path('my_order_cancel', {id:order.id}) }}" >取消</a>*/
/* */
