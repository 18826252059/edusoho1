<?php

/* TopxiaWebBundle:PayCenter:classroom-cancelled.html.twig */
class __TwigTemplate_668824bfe61f49b2796c44c3deb40d896a7edba21ef2d485ca7ffa7b016030da extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_show", array("id" => $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "targetId", array()))), "html", null, true);
        echo "\" data-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("my_order_cancel", array("id" => $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "id", array()))), "html", null, true);
        echo "\" >取消</a>
 ";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:PayCenter:classroom-cancelled.html.twig";
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
/* <a href="javascript:;"  class="js-order-cancel btn btn-link" data-goto="{{ path('classroom_show', {id:order.targetId}) }}" data-url="{{ path('my_order_cancel', {id:order.id}) }}" >取消</a>*/
/*  */
