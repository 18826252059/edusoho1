<?php

/* TopxiaAdminBundle:Article:article-tr.html.twig */
class __TwigTemplate_749d96b05d1633da716d0d248edce04fdd07aea3b365f7ca1f5153f6fe3e3774 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<tr id=\"article-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "id", array()), "html", null, true);
        echo "\">
\t<td><input value=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "id", array()), "html", null, true);
        echo "\" type=\"checkbox\" data-role=\"batch-item\" > ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "id", array()), "html", null, true);
        echo "</td>
\t<td>
\t\t\t<span class=\"text-muted\"><a href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_detail", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "id", array()))), "html", null, true);
        echo "\" target=\"_blank\">";
        echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "title", array()), 0, 22), "html", null, true);
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "title", array())) > 22)) {
            echo "...";
        }
        echo "</a></span>
\t</td>
\t<td>
\t";
        // line 7
        if ((isset($context["category"]) ? $context["category"] : null)) {
            // line 8
            echo "\t\t<span class=\"text-muted\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_category", array("categoryCode" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "code", array()))), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "name", array()), "html", null, true);
            echo "</a></span>
\t\t";
        } else {
            // line 10
            echo "\t\t<span class=\"text-muted\">未分类</span>
\t";
        }
        // line 12
        echo "\t</td>
\t<td>";
        // line 13
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "publishedTime", array()), "Y-n-d H:i"), "html", null, true);
        echo "</td>
\t<td>
\t<a href=\"javascript:;\" class=\"featured-label\" data-set-url=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_article_set_property", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "id", array()), "property" => "featured")), "html", null, true);
        echo "\" data-cancel-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_article_cancel_property", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "id", array()), "property" => "featured")), "html", null, true);
        echo "\">";
        if (($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "featured", array()) == 1)) {
            echo "<span class=\"label label-success\">";
        } else {
            echo "<span class=\"label label-default\">";
        }
        echo "头</span></a>

\t<a href=\"javascript:;\" class=\"promoted-label\" data-set-url=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_article_set_property", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "id", array()), "property" => "promoted")), "html", null, true);
        echo "\" data-cancel-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_article_cancel_property", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "id", array()), "property" => "promoted")), "html", null, true);
        echo "\">";
        if (($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "promoted", array()) == 1)) {
            echo "<span class=\"label label-success\">";
        } else {
            echo "<span class=\"label label-default\">";
        }
        echo "荐</span></a>

\t<a href=\"javascript:;\" class=\"sticky-label\" data-set-url=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_article_set_property", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "id", array()), "property" => "sticky")), "html", null, true);
        echo "\" data-cancel-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_article_cancel_property", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "id", array()), "property" => "sticky")), "html", null, true);
        echo "\">";
        if (($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "sticky", array()) == 1)) {
            echo "<span class=\"label label-success\">";
        } else {
            echo "<span class=\"label label-default\">";
        }
        echo "顶</span></a>
\t</td>

\t<td>";
        // line 22
        echo $this->env->getExtension('topxia_web_twig')->getDictText("articleStatus:html", $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "status", array()));
        echo "</td>

\t<td>
\t\t<div class=\"btn-group\">
\t\t  <a  href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_article_edit", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default btn-sm\" >编辑</a>
\t\t  <a href=\"#\" type=\"button\" class=\"btn btn-default btn-sm dropdown-toggle\" data-toggle=\"dropdown\">
\t\t    <span class=\"caret\"></span>
\t\t  </a>
\t\t  <ul class=\"dropdown-menu\">
\t\t  \t";
        // line 31
        if (($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "status", array()) != "published")) {
            // line 32
            echo "\t\t\t    <li><a href=\"javascript:\" data-role=\"publish-item\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_article_publish", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "id", array()))), "html", null, true);
            echo "\">发布</a></li>
\t\t    ";
        }
        // line 34
        echo "\t     \t";
        if (($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "status", array()) == "published")) {
            // line 35
            echo "\t\t\t    <li><a href=\"javascript:\" data-role=\"unpublish-item\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_article_unpublish", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "id", array()))), "html", null, true);
            echo "\">取消发布</a></li>
\t\t    ";
        }
        // line 37
        echo "\t\t    ";
        if (($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "status", array()) != "trash")) {
            // line 38
            echo "\t\t\t    <li><a href=\"javascript:\" data-role=\"trash-item\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_article_trash", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "id", array()))), "html", null, true);
            echo "\">移至回收站</a></li>
\t\t    ";
        }
        // line 40
        echo "\t\t    ";
        if (($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "status", array()) == "trash")) {
            // line 41
            echo "\t\t\t    <li><a href=\"javascript:\" data-role=\"delete-item\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_article_delete", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "id", array()))), "html", null, true);
            echo "\">永久删除</a></li>
\t\t\t  ";
        }
        // line 43
        echo "\t\t  </ul>
\t\t</div>
\t</td>
</tr>";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Article:article-tr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 43,  148 => 41,  145 => 40,  139 => 38,  136 => 37,  130 => 35,  127 => 34,  121 => 32,  119 => 31,  111 => 26,  104 => 22,  90 => 19,  77 => 17,  64 => 15,  59 => 13,  56 => 12,  52 => 10,  44 => 8,  42 => 7,  31 => 4,  24 => 2,  19 => 1,);
    }
}
/* <tr id="article-{{ article.id }}">*/
/* 	<td><input value="{{article.id}}" type="checkbox" data-role="batch-item" > {{article.id}}</td>*/
/* 	<td>*/
/* 			<span class="text-muted"><a href="{{ path('article_detail',{id:article.id}) }}" target="_blank">{{ article.title | slice(0,22) }}{% if article.title|length >22 %}...{% endif %}</a></span>*/
/* 	</td>*/
/* 	<td>*/
/* 	{% if category %}*/
/* 		<span class="text-muted"><a href="{{ path('article_category',{categoryCode:category.code}) }}" target="_blank">{{ category.name }}</a></span>*/
/* 		{% else %}*/
/* 		<span class="text-muted">未分类</span>*/
/* 	{% endif %}*/
/* 	</td>*/
/* 	<td>{{ article.publishedTime|date('Y-n-d H:i') }}</td>*/
/* 	<td>*/
/* 	<a href="javascript:;" class="featured-label" data-set-url="{{ path('admin_article_set_property', {id:article.id,property:'featured'}) }}" data-cancel-url="{{ path('admin_article_cancel_property', {id:article.id,property:'featured'}) }}">{% if article.featured == 1 %}<span class="label label-success">{% else %}<span class="label label-default">{% endif %}头</span></a>*/
/* */
/* 	<a href="javascript:;" class="promoted-label" data-set-url="{{ path('admin_article_set_property', {id:article.id,property:'promoted'}) }}" data-cancel-url="{{ path('admin_article_cancel_property', {id:article.id,property:'promoted'}) }}">{% if article.promoted == 1 %}<span class="label label-success">{% else %}<span class="label label-default">{% endif %}荐</span></a>*/
/* */
/* 	<a href="javascript:;" class="sticky-label" data-set-url="{{ path('admin_article_set_property', {id:article.id,property:'sticky'}) }}" data-cancel-url="{{ path('admin_article_cancel_property', {id:article.id,property:'sticky'}) }}">{% if article.sticky == 1 %}<span class="label label-success">{% else %}<span class="label label-default">{% endif %}顶</span></a>*/
/* 	</td>*/
/* */
/* 	<td>{{ dict_text('articleStatus:html', article.status) }}</td>*/
/* */
/* 	<td>*/
/* 		<div class="btn-group">*/
/* 		  <a  href="{{ path('admin_article_edit',{id:article.id}) }}" class="btn btn-default btn-sm" >编辑</a>*/
/* 		  <a href="#" type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">*/
/* 		    <span class="caret"></span>*/
/* 		  </a>*/
/* 		  <ul class="dropdown-menu">*/
/* 		  	{% if article.status != 'published' %}*/
/* 			    <li><a href="javascript:" data-role="publish-item" data-url="{{ path('admin_article_publish', {id:article.id}) }}">发布</a></li>*/
/* 		    {% endif %}*/
/* 	     	{% if article.status == 'published' %}*/
/* 			    <li><a href="javascript:" data-role="unpublish-item" data-url="{{ path('admin_article_unpublish', {id:article.id}) }}">取消发布</a></li>*/
/* 		    {% endif %}*/
/* 		    {% if article.status != 'trash' %}*/
/* 			    <li><a href="javascript:" data-role="trash-item" data-url="{{ path('admin_article_trash', {id:article.id}) }}">移至回收站</a></li>*/
/* 		    {% endif %}*/
/* 		    {% if article.status == 'trash' %}*/
/* 			    <li><a href="javascript:" data-role="delete-item" data-url="{{ path('admin_article_delete', {id:article.id}) }}">永久删除</a></li>*/
/* 			  {% endif %}*/
/* 		  </ul>*/
/* 		</div>*/
/* 	</td>*/
/* </tr>*/
