<?php

/* TopxiaWebBundle:Settings:pay-password-success.html.twig */
class __TwigTemplate_24adf5c104cad5216631d2ff5b89dd544301067d0ba113ce3a8130c0457b4064 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "TopxiaWebBundle:Settings:pay-password-success.html.twig", 1);
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

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "支付密码 - 安全设置 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "<div class=\"row\">
  <div class=\"col-md-6 col-md-offset-3 ptl\">
    <div class=\"panel panel-default panel-page\">
      <div class=\"panel-heading\"><h2>重设支付密码成功</h2></div>
          <p class=\"text-success\">新支付密码设置成功。</p>
          <p>
            <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("settings_security");
        echo "\">返回安全设置</a>
          </p>
    </div><!-- /panel -->
  </div>

</div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Settings:pay-password-success.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 11,  39 => 5,  36 => 4,  29 => 2,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::layout.html.twig' %}*/
/* {% block title %}支付密码 - 安全设置 - {{ parent() }}{% endblock %}*/
/* */
/* {% block content %}*/
/* <div class="row">*/
/*   <div class="col-md-6 col-md-offset-3 ptl">*/
/*     <div class="panel panel-default panel-page">*/
/*       <div class="panel-heading"><h2>重设支付密码成功</h2></div>*/
/*           <p class="text-success">新支付密码设置成功。</p>*/
/*           <p>*/
/*             <a href="{{ path('settings_security') }}">返回安全设置</a>*/
/*           </p>*/
/*     </div><!-- /panel -->*/
/*   </div>*/
/* */
/* </div>*/
/* {% endblock %}*/
