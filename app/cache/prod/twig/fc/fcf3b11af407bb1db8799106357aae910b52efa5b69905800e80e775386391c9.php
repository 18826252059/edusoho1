<?php

/* TopxiaWebBundle:CourseManage/nongzi:nongzi-base.html.twig */
class __TwigTemplate_96e98d97370511d9e636ea401346b0e64cfef5fe99d306a3899b4c93c8c51ffa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:CourseManage:layout.html.twig", "TopxiaWebBundle:CourseManage/nongzi:nongzi-base.html.twig", 1);
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
        $context["script_controller"] = "product/pick";
        // line 5
        $context["side_nav"] = (isset($context["type"]) ? $context["type"] : null);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        if (((isset($context["type"]) ? $context["type"] : null) == "nongzi")) {
            echo "农资";
        } else {
            echo "教程";
        }
        echo "管理 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "
    <style>

        .sort {
            padding-top: 50px;
            padding-right: 20px;
            padding-left: 20px;
        }

        .price {
            color: #e57259;
            font-size: 16px;
        }

    </style>

    ";
        // line 25
        echo "    <div class=\"panel panel-default panel-col\">
        <div class=\"panel-heading\">课程相关农资管理
            <button class=\"btn btn-success btn-sm panel-bar\" data-toggle=\"modal\" data-target=\"#modal\"
                    data-url=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_nongzi_list", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "type" => (isset($context["type"]) ? $context["type"] : null))), "html", null, true);
        echo "\">
                关联";
        // line 29
        if (((isset($context["type"]) ? $context["type"] : null) == "nongzi")) {
            echo "农资";
        } else {
            echo "教程";
        }
        // line 30
        echo "            </button>
        </div>
        <div class=\"panel-body\">

            <form id=\"courses-form\" class=\"form-horizontal\" method=\"post\">
                ";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "

                <div class=\"form-group\" id=\"courses-form-group\">
                    <div class=\"col-md-12 controls\">
                        <ul class=\"product-base-list-group sortable-list course-wide-list \" id=\"product-base-list-group\"
                            data-role=\"list\">
                            <table id=\"tag-table\" class=\"table table-striped\">
                                <thead>
                                <th width=\"10%\">商品ID</th>
                                <th width=\"25%\">商品图片</th>
                                <th width=\"25%\">商品标题</th>
                                <th width=\"25%\">商品价格</th>
                                <th width=\"10%\">添加时间</th>
                                <th width=\"20%\">操作</th>
                                </thead>
                                <tbody>
                                ";
        // line 51
        if ((isset($context["nongzi"]) ? $context["nongzi"] : null)) {
            // line 52
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["nongzi"]) ? $context["nongzi"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 53
                echo "                                        ";
                $context["coursePorduct"] = $this->getAttribute((isset($context["courseProduct"]) ? $context["courseProduct"] : null), $this->getAttribute($context["p"], "productId", array()), array(), "array");
                // line 54
                echo "                                        <tr id=\"course-news-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coursePorduct"]) ? $context["coursePorduct"] : null), "id", array()), "html", null, true);
                echo "\">
                                        <td>";
                // line 55
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "productId", array()), "html", null, true);
                echo "</td>
                                        <td><img src=\"";
                // line 56
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "img", array()), "html", null, true);
                echo "\" width=\"45px\" height=\"45px\"/></td>
                                        <td>";
                // line 57
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "productTitle", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 58
                if (($this->getAttribute($context["p"], "currency", array()) == "CNY")) {
                    echo "￥";
                }
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "offerPrice", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 59
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coursePorduct"]) ? $context["coursePorduct"] : null), "createTime", array()), "html", null, true);
                echo "</td>
                                        <td>
                                            <div class=\"btn-group\">
                                                <a class=\"btn btn-default btn-sm delete\" href=\"javascript:;\"
                                                   data-id=\"";
                // line 63
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coursePorduct"]) ? $context["coursePorduct"] : null), "id", array()), "html", null, true);
                echo "\"
                                                   data-url=\"";
                // line 64
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_nongzi_delete", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
                echo " \">删除</a>
                                            </div>
                                        </td>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            echo "                                ";
        } else {
            // line 69
            echo "                                    <tr>
                                        <td colspan=\"20\">
                                            <div class=\"empty\">
                                                暂无相关";
            // line 72
            if (((isset($context["type"]) ? $context["type"] : null) == "nongzi")) {
                echo "农资";
            } else {
                echo "教程";
            }
            echo "</div>
                                        </td>
                                    </tr>
                                ";
        }
        // line 76
        echo "                                </tr>
                                </tbody>
                            </table>

                        </ul>
                    </div>
                </div>

                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">

            </form>

        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseManage/nongzi:nongzi-base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 84,  182 => 76,  171 => 72,  166 => 69,  163 => 68,  153 => 64,  149 => 63,  142 => 59,  135 => 58,  131 => 57,  127 => 56,  123 => 55,  118 => 54,  115 => 53,  110 => 52,  108 => 51,  89 => 35,  82 => 30,  76 => 29,  72 => 28,  67 => 25,  49 => 8,  46 => 7,  34 => 3,  30 => 1,  28 => 5,  26 => 4,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle:CourseManage:layout.html.twig' %}*/
/* */
/* {% block title %}{% if type=="nongzi" %}农资{% else %}教程{% endif %}管理 - {{ parent() }}{% endblock %}*/
/* {% set script_controller = 'product/pick' %}*/
/* {% set side_nav = type %}*/
/* */
/* {% block main %}*/
/* */
/*     <style>*/
/* */
/*         .sort {*/
/*             padding-top: 50px;*/
/*             padding-right: 20px;*/
/*             padding-left: 20px;*/
/*         }*/
/* */
/*         .price {*/
/*             color: #e57259;*/
/*             font-size: 16px;*/
/*         }*/
/* */
/*     </style>*/
/* */
/*     {#{% set url = path('classroom_courses_select',{id:classroom.id}) %}#}*/
/*     <div class="panel panel-default panel-col">*/
/*         <div class="panel-heading">课程相关农资管理*/
/*             <button class="btn btn-success btn-sm panel-bar" data-toggle="modal" data-target="#modal"*/
/*                     data-url="{{ path('admin_nongzi_list',{courseId:course.id,type:type}) }}">*/
/*                 关联{% if type=="nongzi" %}农资{% else %}教程{% endif %}*/
/*             </button>*/
/*         </div>*/
/*         <div class="panel-body">*/
/* */
/*             <form id="courses-form" class="form-horizontal" method="post">*/
/*                 {{ web_macro.flash_messages() }}*/
/* */
/*                 <div class="form-group" id="courses-form-group">*/
/*                     <div class="col-md-12 controls">*/
/*                         <ul class="product-base-list-group sortable-list course-wide-list " id="product-base-list-group"*/
/*                             data-role="list">*/
/*                             <table id="tag-table" class="table table-striped">*/
/*                                 <thead>*/
/*                                 <th width="10%">商品ID</th>*/
/*                                 <th width="25%">商品图片</th>*/
/*                                 <th width="25%">商品标题</th>*/
/*                                 <th width="25%">商品价格</th>*/
/*                                 <th width="10%">添加时间</th>*/
/*                                 <th width="20%">操作</th>*/
/*                                 </thead>*/
/*                                 <tbody>*/
/*                                 {% if nongzi %}*/
/*                                     {% for p in nongzi %}*/
/*                                         {% set coursePorduct=courseProduct[p.productId] %}*/
/*                                         <tr id="course-news-{{ coursePorduct.id }}">*/
/*                                         <td>{{ p.productId }}</td>*/
/*                                         <td><img src="{{ p.img }}" width="45px" height="45px"/></td>*/
/*                                         <td>{{ p.productTitle }}</td>*/
/*                                         <td>{% if p.currency=='CNY' %}￥{% endif %}{{ p.offerPrice }}</td>*/
/*                                         <td>{{ coursePorduct.createTime }}</td>*/
/*                                         <td>*/
/*                                             <div class="btn-group">*/
/*                                                 <a class="btn btn-default btn-sm delete" href="javascript:;"*/
/*                                                    data-id="{{ coursePorduct.id }}"*/
/*                                                    data-url="{{ path('admin_nongzi_delete',{courseId:course.id}) }} ">删除</a>*/
/*                                             </div>*/
/*                                         </td>*/
/*                                     {% endfor %}*/
/*                                 {% else %}*/
/*                                     <tr>*/
/*                                         <td colspan="20">*/
/*                                             <div class="empty">*/
/*                                                 暂无相关{% if type=="nongzi" %}农资{% else %}教程{% endif %}</div>*/
/*                                         </td>*/
/*                                     </tr>*/
/*                                 {% endif %}*/
/*                                 </tr>*/
/*                                 </tbody>*/
/*                             </table>*/
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
