<?php

/* TopxiaWebBundle:CourseManage:product-base.html.twig */
class __TwigTemplate_0d541be2fe3f9eef9e794e57c336f4aa48e0b4212556eead66774a8a1aef3c61 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:CourseManage:layout.html.twig", "TopxiaWebBundle:CourseManage:product-base.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:CourseManage:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 4
        $context["script_controller"] = "product-base/pick";
        // line 5
        $context["side_nav"] = "productBase";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "基地管理 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "
    <style>

        .sort{
            padding-top: 50px;
            padding-right: 20px;
            padding-left: 20px;
        }

        .price{
            color: #e57259;
            font-size: 16px;
        }

    </style>

    ";
        // line 25
        echo "    <div class=\"panel panel-default panel-col\">
        <div class=\"panel-heading\">课程相关基地管理
            <button class=\"btn btn-success btn-sm panel-bar\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_product_base_pick", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
        echo "\">添加基地</button></div>
        <div class=\"panel-body\">

            <form id=\"courses-form\" class=\"form-horizontal\" method=\"post\">
                ";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "

                <div class=\"form-group\" id=\"courses-form-group\">
                    <div class=\"col-md-12 controls\">
                        <ul class=\"product-base-list-group sortable-list course-wide-list \" id=\"product-base-list-group\" data-role=\"list\" >

                            ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["productBases"]);
        foreach ($context['_seq'] as $context["_key"] => $context["productBases"]) {
            // line 38
            echo "                                <li class=\"list-group-item clearfix\" data-role=\"item\" id=\"product-base-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["productBases"], "id", array()), "html", null, true);
            echo "\">
                                    ";
            // line 40
            echo "                                    <span class=\"nickname\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_product_update", array("id" => $this->getAttribute($context["productBases"], "id", array()))), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["productBases"], "title", array()), "html", null, true);
            echo "</a></span>
                                    <button class=\"close delete-btn pull-right mrl mts mll\" data-role=\"item-delete\" type=\"button\" title=\"删除\" style=\"font-size:35px;\" data-id=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["productBases"], "id", array()), "html", null, true);
            echo "\"
                                            data-url=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_product_base_delete", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "\">× </button>
                                </li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['productBases'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "
                        </ul>
                    </div>
                </div>

                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">

            </form>

        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseManage:product-base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 50,  111 => 45,  102 => 42,  98 => 41,  91 => 40,  86 => 38,  82 => 37,  73 => 31,  66 => 27,  62 => 25,  44 => 8,  41 => 7,  34 => 3,  30 => 1,  28 => 5,  26 => 4,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle:CourseManage:layout.html.twig' %}*/
/* */
/* {% block title %}基地管理 - {{ parent() }}{% endblock %}*/
/* {% set script_controller = 'product-base/pick' %}*/
/* {% set side_nav = 'productBase' %}*/
/* */
/* {% block main %}*/
/* */
/*     <style>*/
/* */
/*         .sort{*/
/*             padding-top: 50px;*/
/*             padding-right: 20px;*/
/*             padding-left: 20px;*/
/*         }*/
/* */
/*         .price{*/
/*             color: #e57259;*/
/*             font-size: 16px;*/
/*         }*/
/* */
/*     </style>*/
/* */
/*     {#{% set url = path('classroom_courses_select',{id:classroom.id}) %}#}*/
/*     <div class="panel panel-default panel-col">*/
/*         <div class="panel-heading">课程相关基地管理*/
/*             <button class="btn btn-success btn-sm panel-bar" data-toggle="modal" data-target="#modal" data-url="{{path('course_manage_product_base_pick',{courseId:course.id})}}">添加基地</button></div>*/
/*         <div class="panel-body">*/
/* */
/*             <form id="courses-form" class="form-horizontal" method="post">*/
/*                 {{ web_macro.flash_messages() }}*/
/* */
/*                 <div class="form-group" id="courses-form-group">*/
/*                     <div class="col-md-12 controls">*/
/*                         <ul class="product-base-list-group sortable-list course-wide-list " id="product-base-list-group" data-role="list" >*/
/* */
/*                             {% for productBases in productBases %}*/
/*                                 <li class="list-group-item clearfix" data-role="item" id="product-base-{{ productBases.id }}">*/
/*                                     {#<span class="glyphicon glyphicon-resize-vertical sort-handle"></span>#}*/
/*                                     <span class="nickname"><a href="{{ path('admin_product_update', {id:productBases.id})  }}" target="_blank">{{ productBases.title }}</a></span>*/
/*                                     <button class="close delete-btn pull-right mrl mts mll" data-role="item-delete" type="button" title="删除" style="font-size:35px;" data-id="{{productBases.id}}"*/
/*                                             data-url="{{path('course_manage_product_base_delete',{id:course.id}) }}">× </button>*/
/*                                 </li>*/
/*                             {% endfor %}*/
/* */
/*                         </ul>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/* */
/*             </form>*/
/* */
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
