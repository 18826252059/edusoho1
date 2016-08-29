<?php

/* CustomAdminBundle:Category:layout.html.twig */
class __TwigTemplate_37e396219e1974ab0dc749574fb6537c6277f0fc2cbd058c73a748a9b8caa1c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "CustomAdminBundle:Category:layout.html.twig", 1);
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "分类管理 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <style>
        .locked li a {
            padding: 10px 15px 10px 0px !important;
        }

        .locked li a > span {
            display: inline-block;
            width: 35px;
            padding: 0px 10px;
        }
    </style>
    <div class=\"es-section course-manage-header clearfix\">
        <h1 class=\"title\">";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "name", array()), "html", null, true);
        echo "
        </h1>
    </div>

    <div class=\"row\">
        <div class=\"col-md-3\">
            ";
        // line 24
        $this->displayBlock('side', $context, $blocks);
        // line 47
        echo "        </div>
        <div class=\"col-md-9\">
            ";
        // line 49
        $this->displayBlock('main', $context, $blocks);
        // line 50
        echo "        </div>
    </div>
";
    }

    // line 24
    public function block_side($context, array $blocks = array())
    {
        // line 25
        echo "                ";
        $context["side_nav"] = ((array_key_exists("side_nav", $context)) ? (_twig_default_filter((isset($context["side_nav"]) ? $context["side_nav"] : null), null)) : (null));
        // line 26
        echo "                <div class=\"sidenav locked\">
                    <ul class=\"list-group\">
                        <li class=\"list-group-heading\">相关信息</li>
                        <li class=\"list-group-item ";
        // line 29
        if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "news")) {
            echo "active";
        }
        echo "\">
                            <a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("category_manage", array("id" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "id", array()), "type" => "news")), "html", null, true);
        echo "\">
                                相关资讯类别
                            </a>
                        </li>
                        <li class=\"list-group-item ";
        // line 34
        if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "nongzi")) {
            echo "active";
        }
        echo "\">
                            <a href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("category_manage", array("id" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "id", array()), "type" => "nongzi")), "html", null, true);
        echo "\">
                                相关农资类别
                            </a>
                        </li>
                        <li class=\"list-group-item ";
        // line 39
        if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "jiaocheng")) {
            echo "active";
        }
        echo "\">
                            <a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("category_manage", array("id" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "id", array()), "type" => "jiaocheng")), "html", null, true);
        echo "\">
                                相关教程类别
                            </a>
                        </li>
                    </ul>
                </div>
            ";
    }

    // line 49
    public function block_main($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "CustomAdminBundle:Category:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 49,  121 => 40,  115 => 39,  108 => 35,  102 => 34,  95 => 30,  89 => 29,  84 => 26,  81 => 25,  78 => 24,  72 => 50,  70 => 49,  66 => 47,  64 => 24,  55 => 18,  41 => 6,  38 => 5,  31 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::layout.html.twig' %}*/
/* */
/* {% block title %}分类管理 - {{ parent() }}{% endblock %}*/
/* */
/* {% block content %}*/
/*     <style>*/
/*         .locked li a {*/
/*             padding: 10px 15px 10px 0px !important;*/
/*         }*/
/* */
/*         .locked li a > span {*/
/*             display: inline-block;*/
/*             width: 35px;*/
/*             padding: 0px 10px;*/
/*         }*/
/*     </style>*/
/*     <div class="es-section course-manage-header clearfix">*/
/*         <h1 class="title">{{ category.name }}*/
/*         </h1>*/
/*     </div>*/
/* */
/*     <div class="row">*/
/*         <div class="col-md-3">*/
/*             {% block side %}*/
/*                 {% set side_nav = side_nav|default(null) %}*/
/*                 <div class="sidenav locked">*/
/*                     <ul class="list-group">*/
/*                         <li class="list-group-heading">相关信息</li>*/
/*                         <li class="list-group-item {% if side_nav == 'news' %}active{% endif %}">*/
/*                             <a href="{{ path('category_manage', {id:category.id,type:"news"}) }}">*/
/*                                 相关资讯类别*/
/*                             </a>*/
/*                         </li>*/
/*                         <li class="list-group-item {% if side_nav == 'nongzi' %}active{% endif %}">*/
/*                             <a href="{{ path('category_manage', {id:category.id,type:"nongzi"}) }}">*/
/*                                 相关农资类别*/
/*                             </a>*/
/*                         </li>*/
/*                         <li class="list-group-item {% if side_nav == 'jiaocheng' %}active{% endif %}">*/
/*                             <a href="{{ path('category_manage', {id:category.id,type:"jiaocheng"}) }}">*/
/*                                 相关教程类别*/
/*                             </a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </div>*/
/*             {% endblock %}*/
/*         </div>*/
/*         <div class="col-md-9">*/
/*             {% block main %}{% endblock %}*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
