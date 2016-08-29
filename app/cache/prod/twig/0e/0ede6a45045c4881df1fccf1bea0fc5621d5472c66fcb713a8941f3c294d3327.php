<?php

/* TopxiaWebBundle:PasswordReset:error.html.twig */
class __TwigTemplate_9983c0c25afdb9297445c7700b42a8a9a01c0357b6e6988626821064ff8cf19c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "TopxiaWebBundle:PasswordReset:error.html.twig", 1);
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
        echo "密码重设失败 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"row\">
  <div class=\"col-md-6 col-md-offset-3 ptl\">
    <div class=\"panel panel-default panel-page\">
      <div class=\"panel-heading\"><h2>密码重设失败</h2></div>

      <p class=\"alert alert-danger\">密码重设地址无效或已过期，请重试。</p>

      <p><a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("password_reset");
        echo "\" class=\"btn btn-primary\">重设密码</a></p>

    </div><!-- /panel -->

  </div>

</div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:PasswordReset:error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 13,  39 => 6,  36 => 5,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::layout.html.twig' %}*/
/* */
/* {% block title %}密码重设失败 - {{ parent() }}{% endblock %}*/
/* */
/* {% block content %}*/
/* <div class="row">*/
/*   <div class="col-md-6 col-md-offset-3 ptl">*/
/*     <div class="panel panel-default panel-page">*/
/*       <div class="panel-heading"><h2>密码重设失败</h2></div>*/
/* */
/*       <p class="alert alert-danger">密码重设地址无效或已过期，请重试。</p>*/
/* */
/*       <p><a href="{{ path('password_reset') }}" class="btn btn-primary">重设密码</a></p>*/
/* */
/*     </div><!-- /panel -->*/
/* */
/*   </div>*/
/* */
/* </div>*/
/* {% endblock %}*/
