<?php

/* TopxiaWebBundle:CourseManage/nongzi:nongzi-pick-modal.html.twig */
class __TwigTemplate_cb114e4b16cff6b0dc9c72ff510c40eb8e7ab3a23055b86c85df04b8527b94d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "TopxiaWebBundle:CourseManage/nongzi:nongzi-pick-modal.html.twig", 1);
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
        echo "选择";
        if (((isset($context["type"]) ? $context["type"] : null) == "nongzi")) {
            echo "农资";
        } else {
            echo "教程";
        }
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
    <div class=\"container-fluid\">
        <div class=\"row-fluid\">
            <div class=\"span12\">
                <ul class=\"nav nav-tabs\">
                    <li class=\"";
        // line 20
        if ((isset($context["top"]) ? $context["top"] : null)) {
            echo "active";
        }
        echo "\">
                        <a class=\"catalog-tab\" href=\"javascript:void(0);\" data-url=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_nongzi_list", array("courseId" => (isset($context["courseId"]) ? $context["courseId"] : null), "type" => (isset($context["type"]) ? $context["type"] : null))), "html", null, true);
        echo "\">";
        if (((isset($context["type"]) ? $context["type"] : null) == "nongzi")) {
            echo "农资";
        } else {
            echo "教程";
        }
        echo "</a>
                    </li>
                    ";
        // line 23
        if ((isset($context["catalog"]) ? $context["catalog"] : null)) {
            // line 24
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["catalog"]) ? $context["catalog"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                // line 25
                echo "                            <li class=\"";
                if (((isset($context["catalogId"]) ? $context["catalogId"] : null) == $this->getAttribute($context["c"], "catalogId", array()))) {
                    echo "active";
                }
                echo "\">
                                <a class=\"catalog-tab\" href=\"javascript:void(0);\" data-url=\"";
                // line 26
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_nongzi_list", array("courseId" => (isset($context["courseId"]) ? $context["courseId"] : null), "type" => (isset($context["type"]) ? $context["type"] : null), "catalogId" => $this->getAttribute($context["c"], "catalogId", array()))), "html", null, true);
                echo "\">
                                    ";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "catalogName", array()), "html", null, true);
                echo "
                                </a>
                            </li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "                    ";
        }
        // line 32
        echo "                </ul>
            </div>
        </div>
    </div>


    <table id=\"tag-table\" class=\"table table-striped\">
        <thead>
        <th width=\"10%\">选择</th>
        <th width=\"10%\">商品ID</th>
        <th width=\"25%\">商品图片</th>
        <th width=\"25%\">商品标题</th>
        <th width=\"25%\">商品价格</th>
        </thead>
        <tbody>
        ";
        // line 47
        if ((isset($context["product"]) ? $context["product"] : null)) {
            // line 48
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["product"]) ? $context["product"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 49
                echo "                <tr id=\"product-tr-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "productId", array()), "html", null, true);
                echo "\" data-catalogid=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "catalogId", array()), "html", null, true);
                echo "\">
                <td><input name=\"productIds\" type=\"checkbox\" value=\"";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "productId", array()), "html", null, true);
                echo "\"/></td>
                <td>";
                // line 51
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "productId", array()), "html", null, true);
                echo "</td>
                <td><img src=\"";
                // line 52
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "img", array()), "html", null, true);
                echo "\" width=\"45px\" height=\"45px\"/></td>
                <td>";
                // line 53
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "productTitle", array()), "html", null, true);
                echo "</td>
                <td>";
                // line 54
                if (($this->getAttribute($context["p"], "currency", array()) == "CNY")) {
                    echo "￥";
                }
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "offerPrice", array()), "html", null, true);
                echo "</td>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "        ";
        } else {
            // line 57
            echo "            <tr>
                <td colspan=\"20\">
                    <div class=\"empty\">暂无相关商品</div>
                </td>
            </tr>
        ";
        }
        // line 63
        echo "        </tr>
        </tbody>
    </table>
    ";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo "

";
    }

    // line 70
    public function block_footer($context, array $blocks = array())
    {
        // line 71
        echo "    <button id=\"sure\" class=\"btn btn-primary pull-right\"
            data-url=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_nongzi_select", array("courseId" => (isset($context["courseId"]) ? $context["courseId"] : null), "type" => (isset($context["type"]) ? $context["type"] : null))), "html", null, true);
        echo "\">添加
    </button>
    <button type=\"button\" class=\"btn btn-link pull-right\" data-dismiss=\"modal\">取消</button>

    <script>app.load('topxiawebbundle/controller/product/pick')</script>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseManage/nongzi:nongzi-pick-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 72,  194 => 71,  191 => 70,  184 => 66,  179 => 63,  171 => 57,  168 => 56,  157 => 54,  153 => 53,  149 => 52,  145 => 51,  141 => 50,  134 => 49,  129 => 48,  127 => 47,  110 => 32,  107 => 31,  97 => 27,  93 => 26,  86 => 25,  81 => 24,  79 => 23,  68 => 21,  62 => 20,  47 => 7,  44 => 6,  33 => 5,  29 => 1,  27 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::bootstrap-modal-layout.html.twig' %}*/
/* */
/* {% set modal_class= "modal-lg" %}*/
/* */
/* {% block title %}选择{% if type=="nongzi" %}农资{% else %}教程{% endif %}{% endblock %}*/
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
/*     <div class="container-fluid">*/
/*         <div class="row-fluid">*/
/*             <div class="span12">*/
/*                 <ul class="nav nav-tabs">*/
/*                     <li class="{% if top %}active{% endif%}">*/
/*                         <a class="catalog-tab" href="javascript:void(0);" data-url="{{ path('admin_nongzi_list',{courseId:courseId,type:type}) }}">{% if type=="nongzi" %}农资{% else %}教程{% endif %}</a>*/
/*                     </li>*/
/*                     {% if catalog %}*/
/*                         {% for c in catalog %}*/
/*                             <li class="{% if catalogId==c.catalogId %}active{% endif%}">*/
/*                                 <a class="catalog-tab" href="javascript:void(0);" data-url="{{ path('admin_nongzi_list',{courseId:courseId,type:type,catalogId:c.catalogId}) }}">*/
/*                                     {{ c.catalogName }}*/
/*                                 </a>*/
/*                             </li>*/
/*                         {% endfor %}*/
/*                     {% endif %}*/
/*                 </ul>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/* */
/*     <table id="tag-table" class="table table-striped">*/
/*         <thead>*/
/*         <th width="10%">选择</th>*/
/*         <th width="10%">商品ID</th>*/
/*         <th width="25%">商品图片</th>*/
/*         <th width="25%">商品标题</th>*/
/*         <th width="25%">商品价格</th>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% if product %}*/
/*             {% for p in product %}*/
/*                 <tr id="product-tr-{{ p.productId }}" data-catalogid="{{ p.catalogId }}">*/
/*                 <td><input name="productIds" type="checkbox" value="{{ p.productId }}"/></td>*/
/*                 <td>{{ p.productId }}</td>*/
/*                 <td><img src="{{ p.img }}" width="45px" height="45px"/></td>*/
/*                 <td>{{ p.productTitle }}</td>*/
/*                 <td>{% if p.currency=='CNY' %}￥{% endif %}{{ p.offerPrice }}</td>*/
/*             {% endfor %}*/
/*         {% else %}*/
/*             <tr>*/
/*                 <td colspan="20">*/
/*                     <div class="empty">暂无相关商品</div>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endif %}*/
/*         </tr>*/
/*         </tbody>*/
/*     </table>*/
/*     {{ web_macro.paginator(paginator) }}*/
/* */
/* {% endblock %}*/
/* */
/* {% block footer %}*/
/*     <button id="sure" class="btn btn-primary pull-right"*/
/*             data-url="{{ path('admin_nongzi_select',{courseId:courseId,type:type}) }}">添加*/
/*     </button>*/
/*     <button type="button" class="btn btn-link pull-right" data-dismiss="modal">取消</button>*/
/* */
/*     <script>app.load('topxiawebbundle/controller/product/pick')</script>*/
/* {% endblock %}*/
