<?php

/* TopxiaWebBundle:PayCenter:course-cancelled.html.twig */
class __TwigTemplate_bd221c9942365567b67fee91d74d1aca5b7414b6c94eeffab2b28c1061317468 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "targetId", array()))), "html", null, true);
        echo "\" data-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("my_order_cancel", array("id" => $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "id", array()))), "html", null, true);
        echo "\" >取消</a>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:PayCenter:course-cancelled.html.twig";
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
/* <a href="javascript:;"  class="js-order-cancel btn btn-link" data-goto="{{ path('course_show', {id:order.targetId}) }}" data-url="{{ path('my_order_cancel', {id:order.id}) }}" >取消</a>*/
