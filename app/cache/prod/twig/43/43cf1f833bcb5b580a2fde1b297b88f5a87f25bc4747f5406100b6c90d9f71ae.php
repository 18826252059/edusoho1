<?php

/* TopxiaWebBundle:CourseManage/news:news-base.html.twig */
class __TwigTemplate_2d672954877d2d7d848c97a1186d74fa21666841dd27b1ca1971c15d6f859e95 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:CourseManage:layout.html.twig", "TopxiaWebBundle:CourseManage/news:news-base.html.twig", 1);
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
        $context["script_controller"] = "news/pick";
        // line 5
        $context["side_nav"] = "news";
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
        <div class=\"panel-heading\">课程相关资讯管理
            <button class=\"btn btn-success btn-sm panel-bar\" data-toggle=\"modal\" data-target=\"#modal\"
                    data-url=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_news_list", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
        echo "\">添加资讯
            </button>
        </div>
        <div class=\"panel-body\">

            <form id=\"courses-form\" class=\"form-horizontal\" method=\"post\">
                ";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "

                <div class=\"form-group\" id=\"courses-form-group\">
                    <div class=\"col-md-12 controls\">
                        <ul class=\"product-base-list-group sortable-list course-wide-list \" id=\"product-base-list-group\"
                            data-role=\"list\">
                            <table id=\"tag-table\" class=\"table table-striped\">
                                <thead>
                                <th width=\"10%\">文章ID</th>
                                <th width=\"50%\">文章标题</th>
                                <th width=\"20%\">文章发布时间</th>
                                <th width=\"20%\">操作</th>
                                </thead>
                                <tbody>
                                ";
        // line 48
        if ((isset($context["news"]) ? $context["news"] : null)) {
            // line 49
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["news"]) ? $context["news"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["new"]) {
                // line 50
                echo "                                        <tr id=\"course-news-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "id", array()), "html", null, true);
                echo "\">
                                        <td>";
                // line 51
                echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "articleId", array()), "html", null, true);
                echo "</td>
                                        <td><a href=\"";
                // line 52
                echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "originalUrl", array()), "html", null, true);
                echo "\"  target=\"_blank\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "articleTitle", array()), "html", null, true);
                echo "</a></td>
                                        <td>";
                // line 53
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["new"], "pubDate", array()), "Y-m-d"), "html", null, true);
                echo "</td>
                                        <td>
                                            <div class=\"btn-group\">
                                                <a class=\"btn btn-default btn-sm delete\" href=\"javascript:;\"  data-id=\"";
                // line 56
                echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "id", array()), "html", null, true);
                echo "\" data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_news_delete", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
                echo " \">删除</a>
                                            </div>
                                        </td>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['new'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "                                ";
        } else {
            // line 61
            echo "                                    <tr>
                                        <td colspan=\"20\">
                                            <div class=\"empty\">暂无相关资讯</div>
                                        </td>
                                    </tr>
                                ";
        }
        // line 67
        echo "                                </tr>
                                </tbody>
                            </table>

                        </ul>
                    </div>
                </div>

                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">

            </form>

        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseManage/news:news-base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 75,  144 => 67,  136 => 61,  133 => 60,  121 => 56,  115 => 53,  109 => 52,  105 => 51,  100 => 50,  95 => 49,  93 => 48,  76 => 34,  67 => 28,  62 => 25,  44 => 8,  41 => 7,  34 => 3,  30 => 1,  28 => 5,  26 => 4,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle:CourseManage:layout.html.twig' %}*/
/* */
/* {% block title %}基地管理 - {{ parent() }}{% endblock %}*/
/* {% set script_controller = 'news/pick' %}*/
/* {% set side_nav = 'news' %}*/
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
/*         <div class="panel-heading">课程相关资讯管理*/
/*             <button class="btn btn-success btn-sm panel-bar" data-toggle="modal" data-target="#modal"*/
/*                     data-url="{{ path('admin_news_list',{courseId:course.id}) }}">添加资讯*/
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
/*                                 <th width="10%">文章ID</th>*/
/*                                 <th width="50%">文章标题</th>*/
/*                                 <th width="20%">文章发布时间</th>*/
/*                                 <th width="20%">操作</th>*/
/*                                 </thead>*/
/*                                 <tbody>*/
/*                                 {% if news %}*/
/*                                     {% for new in news %}*/
/*                                         <tr id="course-news-{{ new.id }}">*/
/*                                         <td>{{ new.articleId }}</td>*/
/*                                         <td><a href="{{ new.originalUrl }}"  target="_blank">{{ new.articleTitle }}</a></td>*/
/*                                         <td>{{ new.pubDate|date('Y-m-d') }}</td>*/
/*                                         <td>*/
/*                                             <div class="btn-group">*/
/*                                                 <a class="btn btn-default btn-sm delete" href="javascript:;"  data-id="{{new.id}}" data-url="{{path('admin_news_delete',{courseId:course.id}) }} ">删除</a>*/
/*                                             </div>*/
/*                                         </td>*/
/*                                     {% endfor %}*/
/*                                 {% else %}*/
/*                                     <tr>*/
/*                                         <td colspan="20">*/
/*                                             <div class="empty">暂无相关资讯</div>*/
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
