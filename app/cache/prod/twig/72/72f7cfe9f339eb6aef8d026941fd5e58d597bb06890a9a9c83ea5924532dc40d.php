<?php

/* TopxiaWebBundle:CourseManage/ProductBase:product-base-pick-modal.html.twig */
class __TwigTemplate_d2f6905f33d24e22b7750855bc24036e08441cb2c4b39d4f65f9fc8cabc2b8b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "TopxiaWebBundle:CourseManage/ProductBase:product-base-pick-modal.html.twig", 1);
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
        // line 3
        $context["modal_class"] = "modal-lg";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "选择基地";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "    <style>
        .course-item:hover {
            cursor: pointer;
        }

        .course-wide-list .course-item .select {

        }
    </style>


    <form class=\"form-inline form-search\" role=\"search-form\">
        <div class=\"form-group \">
            <input type=\"text\" class=\"form-control\" name=\"key\" id=\"enterSearch\" value=\"\" placeholder=\"基地名称\" data-url=\"\">
        </div>
        <button type=\"button\" class=\"btn btn-primary\" id=\"search\"
                data-url=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_product_base_pick", array("courseId" => (isset($context["courseId"]) ? $context["courseId"] : null))), "html", null, true);
        echo "\">搜索
        </button>
        <a class=\"btn btn-primary\" id=\"all-courses\"
           data-url=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_product_base_pick", array("courseId" => (isset($context["courseId"]) ? $context["courseId"] : null))), "html", null, true);
        echo "\">全部基地</a>
    </form>

    <table id=\"tag-table\" class=\"table table-striped\">
        <thead>
        <th width=\"20%\">选择</th>
        <th width=\"10%\">ID</th>
        <th width=\"50%\">名称</th>
        <th width=\"20%\">添加时间</th>
        </thead>
        <tbody>
        ";
        // line 37
        if ((isset($context["productBases"]) ? $context["productBases"] : null)) {
            // line 38
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["productBases"]) ? $context["productBases"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["productBase"]) {
                // line 39
                echo "                <tr id=\"productBase-tr-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["productBase"], "id", array()), "html", null, true);
                echo "\">
                    <td><input name=\"productBaseIds\" type=\"checkbox\" value=\"";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute($context["productBase"], "id", array()), "html", null, true);
                echo "\"/></td>
                    <td>";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute($context["productBase"], "id", array()), "html", null, true);
                echo "</td>
                    <td>";
                // line 42
                echo twig_escape_filter($this->env, $this->getAttribute($context["productBase"], "title", array()), "html", null, true);
                echo "</td>
                    <td>";
                // line 43
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["productBase"], "createdTime", array()), "Y-m-d H:i"), "html", null, true);
                echo "</td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['productBase'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "        ";
        } else {
            // line 47
            echo "            <tr>
                <td colspan=\"20\">
                    <div class=\"empty\">暂无基地记录</div>
                </td>
            </tr>
        ";
        }
        // line 53
        echo "
        </tbody>
    </table>

    ";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo "

";
    }

    // line 61
    public function block_footer($context, array $blocks = array())
    {
        // line 62
        echo "    <button id=\"sure\" class=\"btn btn-primary pull-right\"
            data-url=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_product_base_select", array("id" => (isset($context["courseId"]) ? $context["courseId"] : null))), "html", null, true);
        echo "\">添加
    </button>
    <button type=\"button\" class=\"btn btn-link pull-right\" data-dismiss=\"modal\">取消</button>

    <script>app.load('topxiawebbundle/controller/product-base/pick')</script>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseManage/ProductBase:product-base-pick-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 63,  140 => 62,  137 => 61,  130 => 57,  124 => 53,  116 => 47,  113 => 46,  104 => 43,  100 => 42,  96 => 41,  92 => 40,  87 => 39,  82 => 38,  80 => 37,  66 => 26,  60 => 23,  42 => 7,  39 => 6,  33 => 5,  29 => 1,  27 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::bootstrap-modal-layout.html.twig' %}*/
/* */
/* {% set modal_class= "modal-lg" %}*/
/* */
/* {% block title %}选择基地{% endblock %}*/
/* {% block body %}*/
/*     <style>*/
/*         .course-item:hover {*/
/*             cursor: pointer;*/
/*         }*/
/* */
/*         .course-wide-list .course-item .select {*/
/* */
/*         }*/
/*     </style>*/
/* */
/* */
/*     <form class="form-inline form-search" role="search-form">*/
/*         <div class="form-group ">*/
/*             <input type="text" class="form-control" name="key" id="enterSearch" value="" placeholder="基地名称" data-url="">*/
/*         </div>*/
/*         <button type="button" class="btn btn-primary" id="search"*/
/*                 data-url="{{ path('course_manage_product_base_pick',{courseId:courseId}) }}">搜索*/
/*         </button>*/
/*         <a class="btn btn-primary" id="all-courses"*/
/*            data-url="{{ path('course_manage_product_base_pick',{courseId:courseId}) }}">全部基地</a>*/
/*     </form>*/
/* */
/*     <table id="tag-table" class="table table-striped">*/
/*         <thead>*/
/*         <th width="20%">选择</th>*/
/*         <th width="10%">ID</th>*/
/*         <th width="50%">名称</th>*/
/*         <th width="20%">添加时间</th>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% if productBases %}*/
/*             {% for productBase in productBases %}*/
/*                 <tr id="productBase-tr-{{ productBase.id }}">*/
/*                     <td><input name="productBaseIds" type="checkbox" value="{{ productBase.id }}"/></td>*/
/*                     <td>{{ productBase.id }}</td>*/
/*                     <td>{{ productBase.title }}</td>*/
/*                     <td>{{ productBase.createdTime|date('Y-m-d H:i') }}</td>*/
/*                 </tr>*/
/*             {% endfor %}*/
/*         {% else %}*/
/*             <tr>*/
/*                 <td colspan="20">*/
/*                     <div class="empty">暂无基地记录</div>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endif %}*/
/* */
/*         </tbody>*/
/*     </table>*/
/* */
/*     {{ web_macro.paginator(paginator) }}*/
/* */
/* {% endblock %}*/
/* */
/* {% block footer %}*/
/*     <button id="sure" class="btn btn-primary pull-right"*/
/*             data-url="{{ path('course_manage_product_base_select', {id:courseId}) }}">添加*/
/*     </button>*/
/*     <button type="button" class="btn btn-link pull-right" data-dismiss="modal">取消</button>*/
/* */
/*     <script>app.load('topxiawebbundle/controller/product-base/pick')</script>*/
/* {% endblock %}*/
