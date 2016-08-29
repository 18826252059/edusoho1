<?php

/* CustomAdminBundle:Category:category-nongzi-pick.html.twig */
class __TwigTemplate_f7e9db67f259e39f1062672613cf74fc69eafaf1d81bd6fbbcd02dc3b8402fd1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "CustomAdminBundle:Category:category-nongzi-pick.html.twig", 1);
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
        echo "选择 ";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "        <style>
            .course-item:hover {
                cursor: pointer;
            }

            .course-wide-list .course-item .select {

            }
        </style>



        <table id=\"tag-table\" class=\"table table-striped\">
            <thead>
            <th width=\"10%\">选择</th>
            <th width=\"40%\">分类名称</th>
            <th width=\"10%\">分类ID</th>
            <th width=\"40%\">栏目路径</th>
            </thead>
            <tbody>
            ";
        // line 27
        if ((isset($context["categories"]) ? $context["categories"] : null)) {
            // line 28
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 29
                echo "                    <tr id=\"category-tr-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "catalogId", array()), "html", null, true);
                echo "\" data-name=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "catalogName", array()), "html", null, true);
                echo "\">
                        <td><input name=\"newsIds\" type=\"checkbox\" value=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "catalogId", array()), "html", null, true);
                echo "\"/></td>
                        <td>";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "catalogName", array()), "html", null, true);
                echo "
                        </td>
                        <td>";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "catalogId", array()), "html", null, true);
                echo "</td>
                        <td></td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "            ";
        } else {
            // line 38
            echo "                <tr>
                    <td colspan=\"20\">
                        <div class=\"empty\">暂无记录</div>
                    </td>
                </tr>
            ";
        }
        // line 44
        echo "            </tbody>
        </table>
        ";
        // line 47
        echo "
    ";
    }

    // line 50
    public function block_footer($context, array $blocks = array())
    {
        // line 51
        echo "        <button id=\"sure\" class=\"btn btn-primary pull-right\"
                data-url=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("news_category_select", array("id" => (isset($context["id"]) ? $context["id"] : null), "type" => (isset($context["type"]) ? $context["type"] : null))), "html", null, true);
        echo "\">添加
        </button>
        <button type=\"button\" class=\"btn btn-link pull-right\" data-dismiss=\"modal\">取消</button>

        <script>app.load('customadminbundle/controller/category-manager/pick')</script>
    ";
    }

    public function getTemplateName()
    {
        return "CustomAdminBundle:Category:category-nongzi-pick.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 52,  120 => 51,  117 => 50,  112 => 47,  108 => 44,  100 => 38,  97 => 37,  87 => 33,  82 => 31,  78 => 30,  71 => 29,  66 => 28,  64 => 27,  42 => 7,  39 => 6,  33 => 5,  29 => 1,  27 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::bootstrap-modal-layout.html.twig' %}*/
/* */
/* {% set modal_class= "modal-lg" %}*/
/* */
/* {% block title %}选择 {% endblock %}*/
/*     {% block body %}*/
/*         <style>*/
/*             .course-item:hover {*/
/*                 cursor: pointer;*/
/*             }*/
/* */
/*             .course-wide-list .course-item .select {*/
/* */
/*             }*/
/*         </style>*/
/* */
/* */
/* */
/*         <table id="tag-table" class="table table-striped">*/
/*             <thead>*/
/*             <th width="10%">选择</th>*/
/*             <th width="40%">分类名称</th>*/
/*             <th width="10%">分类ID</th>*/
/*             <th width="40%">栏目路径</th>*/
/*             </thead>*/
/*             <tbody>*/
/*             {% if  categories %}*/
/*                 {% for category in categories %}*/
/*                     <tr id="category-tr-{{ category.catalogId }}" data-name="{{ category.catalogName }}">*/
/*                         <td><input name="newsIds" type="checkbox" value="{{ category.catalogId }}"/></td>*/
/*                         <td>{{ category.catalogName }}*/
/*                         </td>*/
/*                         <td>{{ category.catalogId }}</td>*/
/*                         <td></td>*/
/*                     </tr>*/
/*                 {% endfor %}*/
/*             {% else %}*/
/*                 <tr>*/
/*                     <td colspan="20">*/
/*                         <div class="empty">暂无记录</div>*/
/*                     </td>*/
/*                 </tr>*/
/*             {% endif %}*/
/*             </tbody>*/
/*         </table>*/
/*         {#{{ web_macro.paginator(paginator) }}#}*/
/* */
/*     {% endblock %}*/
/* */
/*     {% block footer %}*/
/*         <button id="sure" class="btn btn-primary pull-right"*/
/*                 data-url="{{ path('news_category_select',{id:id,type:type}) }}">添加*/
/*         </button>*/
/*         <button type="button" class="btn btn-link pull-right" data-dismiss="modal">取消</button>*/
/* */
/*         <script>app.load('customadminbundle/controller/category-manager/pick')</script>*/
/*     {% endblock %}*/
/* */
