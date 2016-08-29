<?php

/* TopxiaWebBundle:Auth:email-confirm-error.html.twig */
class __TwigTemplate_9f9da24fa107ba96f9326df99b08af9f1f28df0702a511c9b237d00a0fba08c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "TopxiaWebBundle:Auth:email-confirm-error.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "邮箱地址验证失败 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"row\">
  <div class=\"col-md-6 col-md-offset-3 ptl\">
    <div class=\"panel panel-default panel-page\">
      <div class=\"panel-heading\"><h2>邮箱地址验证失败</h2></div>

      <p class=\"alert alert-danger\">邮箱地址验证失败，请重试。</p>
      <p><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\" class=\"btn btn-primary\">返回首页</a></p>

    </div>

  </div>

</div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Auth:email-confirm-error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 12,  39 => 6,  36 => 5,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::layout.html.twig' %}*/
/* */
/* {% block title %}邮箱地址验证失败 - {{ parent() }}{% endblock %}*/
/* */
/* {% block content %}*/
/* <div class="row">*/
/*   <div class="col-md-6 col-md-offset-3 ptl">*/
/*     <div class="panel panel-default panel-page">*/
/*       <div class="panel-heading"><h2>邮箱地址验证失败</h2></div>*/
/* */
/*       <p class="alert alert-danger">邮箱地址验证失败，请重试。</p>*/
/*       <p><a href="{{ path('homepage') }}" class="btn btn-primary">返回首页</a></p>*/
/* */
/*     </div>*/
/* */
/*   </div>*/
/* */
/* </div>*/
/* {% endblock %}*/
