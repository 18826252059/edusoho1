<?php

/* TopxiaWebBundle:PasswordReset:success.html.twig */
class __TwigTemplate_3eb8c9eb6b2fc935d2f59fceedd86175050fa8a18e0c2e4ca9363795fd31bb24 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "TopxiaWebBundle:PasswordReset:success.html.twig", 1);
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
        echo "重设密码成功 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"row\">
  <div class=\"col-md-6 col-md-offset-3 ptl\">
    <div class=\"panel panel-default panel-page\">
      <div class=\"panel-heading\"><h2>重设密码成功</h2></div>
          <p class=\"text-success\">新密码设置成功，请重新登录。</p>
          <p class=\"\"><a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("login");
        echo "\" class=\"btn btn-primary\">登录</a></p>

    </div><!-- /panel -->

  </div>

</div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:PasswordReset:success.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 11,  39 => 6,  36 => 5,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::layout.html.twig' %}*/
/* */
/* {% block title %}重设密码成功 - {{ parent() }}{% endblock %}*/
/* */
/* {% block content %}*/
/* <div class="row">*/
/*   <div class="col-md-6 col-md-offset-3 ptl">*/
/*     <div class="panel panel-default panel-page">*/
/*       <div class="panel-heading"><h2>重设密码成功</h2></div>*/
/*           <p class="text-success">新密码设置成功，请重新登录。</p>*/
/*           <p class=""><a href="{{ path('login') }}" class="btn btn-primary">登录</a></p>*/
/* */
/*     </div><!-- /panel -->*/
/* */
/*   </div>*/
/* */
/* </div>*/
/* {% endblock %}*/
