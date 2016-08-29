<?php

/* TopxiaAdminBundle:Category:embed.html.twig */
class __TwigTemplate_3341edb3f45e3d2c89a39809601179fe9aad855ddd57a8b2b6b218db6e9a661a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:Category:embed.html.twig", 1);
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
        $context["menu"] = "admin_course_category";
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
      <th width=\"40%\">名称</th>
      <th width=\"15%\">编码</th>
      <th width=\"15%\">显示序号</th>
      <th width=\"30%\">操作</th>
    </tr>
  </thead>
  ";
        // line 16
        $this->loadTemplate("TopxiaAdminBundle:Category:tbody.html.twig", "TopxiaAdminBundle:Category:embed.html.twig", 16)->display($context);
        // line 17
        echo "</table>
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Category:embed.html.twig";
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
/* {% set menu = 'admin_course_category' %}*/
/* */
/* {% block main %}*/
/* */
/* <table class="table table-hover" id="category-table">*/
/*   <thead>*/
/*     <tr>*/
/*       <th width="40%">名称</th>*/
/*       <th width="15%">编码</th>*/
/*       <th width="15%">显示序号</th>*/
/*       <th width="30%">操作</th>*/
/*     </tr>*/
/*   </thead>*/
/*   {% include 'TopxiaAdminBundle:Category:tbody.html.twig' %}*/
/* </table>*/
/* {% endblock %}*/
