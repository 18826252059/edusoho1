<?php

/* TopxiaWebBundle:CourseOrder:repay.html.twig */
class __TwigTemplate_304d703a21d8beafb152de566c0e60bc6c460a910c7c3c10ca5e1772db45f73d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "TopxiaWebBundle:CourseOrder:repay.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "购买课程";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
<form id=\"course-repay-form\" class=\"form-horizontal\" method=\"post\" action=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("course_order_repay");
        echo "\">
  <div class=\"row\">
    <div class=\"col-md-12\">
      <div class=\"text-warning\">您已有该课程未支付的订单，请点击支付完成购买！</div>
    </div>
  </div>
  <input type=\"hidden\" name=\"orderId\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "id", array()), "html", null, true);
        echo "\" />
  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
</form>
";
    }

    // line 18
    public function block_footer($context, array $blocks = array())
    {
        // line 19
        echo "  <button id=\"course-pay\" class=\"btn btn-primary\" type=\"submit\" data-toggle=\"form-submit\" data-target=\"#course-repay-form\">点击支付</button>
    <a href=\"javascript:;\" class=\"btn btn-primary cancel\" data-url=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("my_order_cancel", array("id" => $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "id", array()))), "html", null, true);
        echo "\">取消此订单</a>
  <script>
    app.load('course/repay');
  </script>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseOrder:repay.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 20,  65 => 19,  62 => 18,  55 => 14,  51 => 13,  42 => 7,  39 => 6,  36 => 5,  30 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::bootstrap-modal-layout.html.twig' %}*/
/* */
/* {% block title %}购买课程{% endblock %}*/
/* */
/* {% block body %}*/
/* */
/* <form id="course-repay-form" class="form-horizontal" method="post" action="{{ path('course_order_repay') }}">*/
/*   <div class="row">*/
/*     <div class="col-md-12">*/
/*       <div class="text-warning">您已有该课程未支付的订单，请点击支付完成购买！</div>*/
/*     </div>*/
/*   </div>*/
/*   <input type="hidden" name="orderId" value="{{ order.id }}" />*/
/*   <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/* </form>*/
/* {% endblock %}*/
/* */
/* {% block footer %}*/
/*   <button id="course-pay" class="btn btn-primary" type="submit" data-toggle="form-submit" data-target="#course-repay-form">点击支付</button>*/
/*     <a href="javascript:;" class="btn btn-primary cancel" data-url="{{ path('my_order_cancel', {id:order.id}) }}">取消此订单</a>*/
/*   <script>*/
/*     app.load('course/repay');*/
/*   </script>*/
/* {% endblock %}*/
