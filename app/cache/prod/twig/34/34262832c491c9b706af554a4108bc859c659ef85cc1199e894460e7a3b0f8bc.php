<?php

/* TopxiaWebBundle:CourseManage/news:news-pick-modal.html.twig */
class __TwigTemplate_c1c099c6187be6c1e335874dbf04670d3c4ceb1eca84f1a80f88126079323f5f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "TopxiaWebBundle:CourseManage/news:news-pick-modal.html.twig", 1);
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
        echo "选择资讯";
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
            <input type=\"text\" class=\"form-control\" name=\"key\" id=\"enterSearch\" value=\"\" placeholder=\"文章标题\" data-url=\"\">
        </div>
        <button type=\"button\" class=\"btn btn-primary\" id=\"search\"
                data-url=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_news_list", array("courseId" => (isset($context["courseId"]) ? $context["courseId"] : null))), "html", null, true);
        echo "\">搜索
        </button>
        <a class=\"btn btn-primary\" id=\"all-courses\"
           data-url=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_news_list", array("courseId" => (isset($context["courseId"]) ? $context["courseId"] : null))), "html", null, true);
        echo "\">全部资讯</a>
    </form>

    <table id=\"tag-table\" class=\"table table-striped\">
        <thead>
        <th width=\"10%\">选择</th>
        <th width=\"10%\">文章ID</th>
        <th width=\"25%\">文章标题</th>
        <th width=\"25%\">文章来源</th>
        <th width=\"20%\">文章发布时间</th>
        </thead>
        <tbody>
        ";
        // line 38
        if ((isset($context["news"]) ? $context["news"] : null)) {
            // line 39
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["news"]) ? $context["news"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["new"]) {
                // line 40
                echo "                <tr id=\"new-tr-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "articleId", array()), "html", null, true);
                echo "\" data-url=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "originalUrl", array()), "html", null, true);
                echo "\" data-img=\"";
                echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute($context["new"], "pictureList", array())), "html", null, true);
                echo "\" data-articletype=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "articleType", array()), "html", null, true);
                echo "\">
                <td><input name=\"newsIds\" type=\"checkbox\" value=\"";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "articleId", array()), "html", null, true);
                echo "\"/></td>
                <td>";
                // line 42
                echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "articleId", array()), "html", null, true);
                echo "</td>
                <td><a href=\"";
                // line 43
                echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "originalUrl", array()), "html", null, true);
                echo "\" target=\"_blank\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "articleTitle", array()), "html", null, true);
                echo "</a></td>
                <td>";
                // line 44
                echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "sourceName", array()), "html", null, true);
                echo "</td>
                <td>";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "pubDate", array()), "html", null, true);
                echo "</td>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['new'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "        ";
        } else {
            // line 48
            echo "            <tr>
                <td colspan=\"20\">
                    <div class=\"empty\">暂无相关资讯</div>
                </td>
            </tr>
        ";
        }
        // line 54
        echo "        </tr>
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_news_select", array("courseId" => (isset($context["courseId"]) ? $context["courseId"] : null))), "html", null, true);
        echo "\">添加
    </button>
    <button type=\"button\" class=\"btn btn-link pull-right\" data-dismiss=\"modal\">取消</button>

    <script>app.load('topxiawebbundle/controller/news/pick')</script>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseManage/news:news-pick-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 63,  151 => 62,  148 => 61,  141 => 57,  136 => 54,  128 => 48,  125 => 47,  117 => 45,  113 => 44,  107 => 43,  103 => 42,  99 => 41,  88 => 40,  83 => 39,  81 => 38,  66 => 26,  60 => 23,  42 => 7,  39 => 6,  33 => 5,  29 => 1,  27 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::bootstrap-modal-layout.html.twig' %}*/
/* */
/* {% set modal_class= "modal-lg" %}*/
/* */
/* {% block title %}选择资讯{% endblock %}*/
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
/*             <input type="text" class="form-control" name="key" id="enterSearch" value="" placeholder="文章标题" data-url="">*/
/*         </div>*/
/*         <button type="button" class="btn btn-primary" id="search"*/
/*                 data-url="{{ path('admin_news_list',{courseId:courseId}) }}">搜索*/
/*         </button>*/
/*         <a class="btn btn-primary" id="all-courses"*/
/*            data-url="{{ path('admin_news_list',{courseId:courseId}) }}">全部资讯</a>*/
/*     </form>*/
/* */
/*     <table id="tag-table" class="table table-striped">*/
/*         <thead>*/
/*         <th width="10%">选择</th>*/
/*         <th width="10%">文章ID</th>*/
/*         <th width="25%">文章标题</th>*/
/*         <th width="25%">文章来源</th>*/
/*         <th width="20%">文章发布时间</th>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% if news %}*/
/*             {% for new in news %}*/
/*                 <tr id="new-tr-{{ new.articleId }}" data-url="{{ new.originalUrl }}" data-img="{{ new.pictureList|json_encode() }}" data-articletype="{{ new.articleType }}">*/
/*                 <td><input name="newsIds" type="checkbox" value="{{ new.articleId }}"/></td>*/
/*                 <td>{{ new.articleId }}</td>*/
/*                 <td><a href="{{ new.originalUrl }}" target="_blank">{{ new.articleTitle }}</a></td>*/
/*                 <td>{{ new.sourceName }}</td>*/
/*                 <td>{{ new.pubDate }}</td>*/
/*             {% endfor %}*/
/*         {% else %}*/
/*             <tr>*/
/*                 <td colspan="20">*/
/*                     <div class="empty">暂无相关资讯</div>*/
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
/*             data-url="{{ path('admin_news_select',{courseId:courseId}) }}">添加*/
/*     </button>*/
/*     <button type="button" class="btn btn-link pull-right" data-dismiss="modal">取消</button>*/
/* */
/*     <script>app.load('topxiawebbundle/controller/news/pick')</script>*/
/* {% endblock %}*/
