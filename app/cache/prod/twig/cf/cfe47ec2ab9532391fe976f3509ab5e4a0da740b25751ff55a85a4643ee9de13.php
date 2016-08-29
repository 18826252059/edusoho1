<?php

/* TopxiaAdminBundle:ProductBase:layout.html.twig */
class __TwigTemplate_dfaab3b191b98f99e688c6e6352ad5f66d99cf3f78d37e21bc620424675ae0a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "TopxiaAdminBundle:ProductBase:layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'side' => array($this, 'block_side'),
            'main' => array($this, 'block_main'),
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
        echo "基地管理 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "<style>
/*.locked li a{*/
  /*padding:10px 15px 10px 0px !important;*/
/*}*/
.locked li a>span{
  display:inline-block;
  width:35px;
  padding:0px 10px;
}
.es-section{
  padding: 0px;
}

</style>
  <div class=\"es-section course-manage-header clearfix\"></div>
  ";
        // line 20
        $context["web_macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "TopxiaAdminBundle:ProductBase:layout.html.twig", 20);
        // line 21
        echo "<div class=\"row\">
  <div class=\"col-md-3\">
    ";
        // line 23
        $this->displayBlock('side', $context, $blocks);
        // line 46
        echo "  </div>
  <div class=\"col-md-9\">
    ";
        // line 48
        $this->displayBlock('main', $context, $blocks);
        // line 49
        echo "  </div>
</div>
";
    }

    // line 23
    public function block_side($context, array $blocks = array())
    {
        // line 24
        echo "      ";
        $context["side_nav"] = ((array_key_exists("side_nav", $context)) ? (_twig_default_filter((isset($context["side_nav"]) ? $context["side_nav"] : null), null)) : (null));
        // line 25
        echo "      ";
        if ((($this->getAttribute((isset($context["productBase"]) ? $context["productBase"] : null), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["productBase"]) ? $context["productBase"] : null), "id", array()), "")) : (""))) {
            // line 26
            echo "      <div class=\"sidenav locked\">
        <ul class=\"list-group\">
          <li class=\"list-group-heading\">基地信息</li>
          <li class=\"list-group-item ";
            // line 29
            if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "base")) {
                echo "active";
            }
            echo "\">
            <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_product_update", array("id" => $this->getAttribute((isset($context["productBase"]) ? $context["productBase"] : null), "id", array()))), "html", null, true);
            echo "\">
              基本信息
            </a>
          </li>
          <li class=\"list-group-item ";
            // line 34
            if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "picture")) {
                echo "active";
            }
            echo "\">
            <a href=\"
            ";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("product_manage_file", array("id" => $this->getAttribute((isset($context["productBase"]) ? $context["productBase"] : null), "id", array()))), "html", null, true);
            echo "
            \" >
              基地图片
            </a>
          </li>
        </ul>

      </div>
        ";
        }
        // line 45
        echo "    ";
    }

    // line 48
    public function block_main($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:ProductBase:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 48,  124 => 45,  112 => 36,  105 => 34,  98 => 30,  92 => 29,  87 => 26,  84 => 25,  81 => 24,  78 => 23,  72 => 49,  70 => 48,  66 => 46,  64 => 23,  60 => 21,  58 => 20,  41 => 5,  38 => 4,  31 => 2,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::layout.html.twig' %}*/
/* {% block title %}基地管理 - {{ parent() }}{% endblock %}*/
/* */
/* {% block content %}*/
/* <style>*/
/* /*.locked li a{*//* */
/*   /*padding:10px 15px 10px 0px !important;*//* */
/* /*}*//* */
/* .locked li a>span{*/
/*   display:inline-block;*/
/*   width:35px;*/
/*   padding:0px 10px;*/
/* }*/
/* .es-section{*/
/*   padding: 0px;*/
/* }*/
/* */
/* </style>*/
/*   <div class="es-section course-manage-header clearfix"></div>*/
/*   {% import "TopxiaWebBundle::macro.html.twig" as web_macro %}*/
/* <div class="row">*/
/*   <div class="col-md-3">*/
/*     {% block side %}*/
/*       {% set side_nav = side_nav|default(null) %}*/
/*       {% if  productBase.id|default('') %}*/
/*       <div class="sidenav locked">*/
/*         <ul class="list-group">*/
/*           <li class="list-group-heading">基地信息</li>*/
/*           <li class="list-group-item {% if side_nav == 'base' %}active{% endif %}">*/
/*             <a href="{{ path('admin_product_update', {id:productBase.id}) }}">*/
/*               基本信息*/
/*             </a>*/
/*           </li>*/
/*           <li class="list-group-item {% if side_nav == 'picture' %}active{% endif %}">*/
/*             <a href="*/
/*             {{ path('product_manage_file', {id:productBase.id}) }}*/
/*             " >*/
/*               基地图片*/
/*             </a>*/
/*           </li>*/
/*         </ul>*/
/* */
/*       </div>*/
/*         {% endif %}*/
/*     {% endblock %}*/
/*   </div>*/
/*   <div class="col-md-9">*/
/*     {% block main %}{% endblock %}*/
/*   </div>*/
/* </div>*/
/* {% endblock %}*/
