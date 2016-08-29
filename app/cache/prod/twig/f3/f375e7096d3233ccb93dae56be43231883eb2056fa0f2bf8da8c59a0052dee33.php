<?php

/* CustomAdminBundle:Category:category-news-pick.html.twig */
class __TwigTemplate_728dd3b33767bfa27a4503721e6fcb33b8bda001dbba1da2e745a8fa84e26161 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "CustomAdminBundle:Category:category-news-pick.html.twig", 1);
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
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "sectionId", array()), "html", null, true);
                echo "\" data-name=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "sectionName", array()), "html", null, true);
                echo "\">
                        <td><input name=\"newsIds\" type=\"checkbox\" value=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "sectionId", array()), "html", null, true);
                echo "\"/></td>
                        <td>
                            ";
                // line 32
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(0, (($this->getAttribute($context["category"], "depth", array()) - 1) * 2)));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    echo "&nbsp;&nbsp;&nbsp;&nbsp;";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 33
                echo "                            └─ ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "sectionName", array()), "html", null, true);
                echo "
                        </td>
                        <td>";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "sectionId", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "sectionPath", array()), "html", null, true);
                echo "</td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "            ";
        } else {
            // line 40
            echo "                <tr>
                    <td colspan=\"20\">
                        <div class=\"empty\">暂无记录</div>
                    </td>
                </tr>
            ";
        }
        // line 46
        echo "            </tbody>
        </table>
        ";
        // line 49
        echo "
    ";
    }

    // line 52
    public function block_footer($context, array $blocks = array())
    {
        // line 53
        echo "        <button id=\"sure\" class=\"btn btn-primary pull-right\"
                data-url=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("news_category_select", array("id" => (isset($context["id"]) ? $context["id"] : null), "type" => (isset($context["type"]) ? $context["type"] : null))), "html", null, true);
        echo "\">添加
        </button>
        <button type=\"button\" class=\"btn btn-link pull-right\" data-dismiss=\"modal\">取消</button>

        <script>app.load('customadminbundle/controller/category-manager/pick')</script>
    ";
    }

    public function getTemplateName()
    {
        return "CustomAdminBundle:Category:category-news-pick.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 54,  134 => 53,  131 => 52,  126 => 49,  122 => 46,  114 => 40,  111 => 39,  102 => 36,  98 => 35,  92 => 33,  83 => 32,  78 => 30,  71 => 29,  66 => 28,  64 => 27,  42 => 7,  39 => 6,  33 => 5,  29 => 1,  27 => 3,  11 => 1,);
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
/*                     <tr id="category-tr-{{ category.sectionId }}" data-name="{{ category.sectionName }}">*/
/*                         <td><input name="newsIds" type="checkbox" value="{{ category.sectionId }}"/></td>*/
/*                         <td>*/
/*                             {% for i in 0..(category.depth-1)*2 %}&nbsp;&nbsp;&nbsp;&nbsp;{% endfor %}*/
/*                             └─ {{ category.sectionName }}*/
/*                         </td>*/
/*                         <td>{{ category.sectionId }}</td>*/
/*                         <td>{{ category.sectionPath }}</td>*/
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
