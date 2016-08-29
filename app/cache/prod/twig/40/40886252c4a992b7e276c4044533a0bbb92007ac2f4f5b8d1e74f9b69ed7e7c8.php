<?php

/* CustomAdminBundle:Category:category-news.html.twig */
class __TwigTemplate_427f24ba3f5fbf566deaecf8bc32aba2bee1325da75f385970e1bf63c6edaf02 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CustomAdminBundle:Category:layout.html.twig", "CustomAdminBundle:Category:category-news.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CustomAdminBundle:Category:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["script_controller"] = "customadminbundle/controller/category-manager/pick";
        // line 4
        $context["side_nav"] = (isset($context["type"]) ? $context["type"] : null);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "管理 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        // line 7
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

    <div class=\"panel panel-default panel-col\">
        <div class=\"panel-heading\">相关管理
            <button class=\"btn btn-success btn-sm panel-bar\" data-toggle=\"modal\" data-target=\"#modal\"
                    data-url=\"";
        // line 26
        if (((isset($context["type"]) ? $context["type"] : null) == "news")) {
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("news_category_list", array("id" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "id", array()), "type" => (isset($context["type"]) ? $context["type"] : null))), "html", null, true);
        } elseif (((isset($context["type"]) ? $context["type"] : null) == "nongzi")) {
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nongzi_category_select", array("id" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "id", array()), "type" => (isset($context["type"]) ? $context["type"] : null))), "html", null, true);
        } elseif (((isset($context["type"]) ? $context["type"] : null) == "jiaocheng")) {
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nongzi_category_select", array("id" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "id", array()), "type" => (isset($context["type"]) ? $context["type"] : null))), "html", null, true);
        }
        echo "\">
                关联
            </button>
        </div>
        <div class=\"panel-body\">

            <form id=\"courses-form\" class=\"form-horizontal\" method=\"post\">
                ";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "

                <div class=\"form-group\" id=\"courses-form-group\">
                    <div class=\"col-md-12 controls\">
                        <ul class=\"product-base-list-group sortable-list course-wide-list \" id=\"product-base-list-group\"
                            data-role=\"list\">
                            <table id=\"tag-table\" class=\"table table-striped\">
                                <thead>
                                <th width=\"20%\">分类ID</th>
                                <th width=\"20%\">分类栏目路径</th>
                                <th width=\"30%\">分类名称</th>
                                <th width=\"20%\">创建时间</th>
                                <th width=\"10%\">操作</th>
                                </thead>
                                <tbody>
                                ";
        // line 48
        if ((isset($context["newsCategory"]) ? $context["newsCategory"] : null)) {
            // line 49
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["newsCategory"]) ? $context["newsCategory"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                // line 50
                echo "                                        <tr id=\"category-tr-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "id", array()), "html", null, true);
                echo "\">
                                        <td>";
                // line 51
                echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "toId", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 52
                echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "toPath", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 53
                echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "toName", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 54
                echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "createTime", array()), "html", null, true);
                echo "</td>
                                        <td>
                                            <div class=\"btn-group\">
                                                <a class=\"btn btn-default btn-sm delete\" href=\"javascript:;\"
                                                   data-url=\"";
                // line 58
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("news_category_delete", array("id" => $this->getAttribute($context["c"], "id", array()))), "html", null, true);
                echo "\" data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "id", array()), "html", null, true);
                echo "\">删除</a>
                                            </div>
                                        </td>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "                                ";
        } else {
            // line 63
            echo "                                    <tr>
                                        <td colspan=\"20\">
                                            <div class=\"empty\">
                                                暂无相关</div>
                                        </td>
                                    </tr>
                                ";
        }
        // line 70
        echo "                                </tr>
                                </tbody>
                            </table>

                        </ul>
                    </div>
                </div>

                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">

            </form>

        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "CustomAdminBundle:Category:category-news.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 78,  154 => 70,  145 => 63,  142 => 62,  130 => 58,  123 => 54,  119 => 53,  115 => 52,  111 => 51,  106 => 50,  101 => 49,  99 => 48,  81 => 33,  65 => 26,  44 => 7,  41 => 6,  34 => 2,  30 => 1,  28 => 4,  26 => 3,  11 => 1,);
    }
}
/* {% extends 'CustomAdminBundle:Category:layout.html.twig' %}*/
/* {% block title %}管理 - {{ parent() }}{% endblock %}*/
/* {% set script_controller = 'customadminbundle/controller/category-manager/pick' %}*/
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
/*     <div class="panel panel-default panel-col">*/
/*         <div class="panel-heading">相关管理*/
/*             <button class="btn btn-success btn-sm panel-bar" data-toggle="modal" data-target="#modal"*/
/*                     data-url="{% if type=='news' %}{{ path('news_category_list',{id:category.id,type:type}) }}{% elseif type=='nongzi' %}{{ path('nongzi_category_select',{id:category.id,type:type}) }}{% elseif type=='jiaocheng' %}{{ path('nongzi_category_select',{id:category.id,type:type}) }}{% endif %}">*/
/*                 关联*/
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
/*                                 <th width="20%">分类ID</th>*/
/*                                 <th width="20%">分类栏目路径</th>*/
/*                                 <th width="30%">分类名称</th>*/
/*                                 <th width="20%">创建时间</th>*/
/*                                 <th width="10%">操作</th>*/
/*                                 </thead>*/
/*                                 <tbody>*/
/*                                 {% if newsCategory %}*/
/*                                     {% for c in newsCategory %}*/
/*                                         <tr id="category-tr-{{ c.id }}">*/
/*                                         <td>{{ c.toId }}</td>*/
/*                                         <td>{{ c.toPath }}</td>*/
/*                                         <td>{{ c.toName }}</td>*/
/*                                         <td>{{ c.createTime }}</td>*/
/*                                         <td>*/
/*                                             <div class="btn-group">*/
/*                                                 <a class="btn btn-default btn-sm delete" href="javascript:;"*/
/*                                                    data-url="{{ path('news_category_delete',{id:c.id}) }}" data-id="{{ c.id }}">删除</a>*/
/*                                             </div>*/
/*                                         </td>*/
/*                                     {% endfor %}*/
/*                                 {% else %}*/
/*                                     <tr>*/
/*                                         <td colspan="20">*/
/*                                             <div class="empty">*/
/*                                                 暂无相关</div>*/
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
