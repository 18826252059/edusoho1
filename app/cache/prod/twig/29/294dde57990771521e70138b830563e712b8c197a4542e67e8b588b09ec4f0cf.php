<?php

/* TopxiaAdminBundle:ArticleCategory:index.html.twig */
class __TwigTemplate_9f582388b859b276b5abebca91c6198cbd7a3a0e35ca2bd568e087b679d813ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:ArticleCategory:index.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["menu"] = "admin_operation_article_category";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        // line 6
        echo "
<table class=\"table table-hover\" id=\"category-table\">
  <thead>
    <tr>
      <th width=\"45%\">栏目名称</th>
      <th width=\"20%\">编码</th>
      <th width=\"10%\">显示序号</th>
      <th width=\"20%\">操作</th>
    </tr>
  </thead>
  ";
        // line 16
        $this->loadTemplate("TopxiaAdminBundle:ArticleCategory:tbody.html.twig", "TopxiaAdminBundle:ArticleCategory:index.html.twig", 16)->display($context);
        // line 17
        echo "</table>
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:ArticleCategory:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 17,  46 => 16,  34 => 6,  31 => 5,  27 => 1,  25 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaAdminBundle::layout.html.twig' %}*/
/* */
/* {% set menu = 'admin_operation_article_category' %}*/
/* */
/* {% block main %}*/
/* */
/* <table class="table table-hover" id="category-table">*/
/*   <thead>*/
/*     <tr>*/
/*       <th width="45%">栏目名称</th>*/
/*       <th width="20%">编码</th>*/
/*       <th width="10%">显示序号</th>*/
/*       <th width="20%">操作</th>*/
/*     </tr>*/
/*   </thead>*/
/*   {% include 'TopxiaAdminBundle:ArticleCategory:tbody.html.twig' %}*/
/* </table>*/
/* {% endblock %}*/
