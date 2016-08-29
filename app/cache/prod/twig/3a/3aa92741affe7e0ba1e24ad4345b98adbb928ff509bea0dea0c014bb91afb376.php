<?php

/* TopxiaAdminBundle:Content:content-tr.html.twig */
class __TwigTemplate_6374f19f8a542a6ba5bc3570240c082b168b5a5e8561a69e01a2422cdfa83206 extends Twig_Template
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
        echo "<tr id=\"content-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "id", array()), "html", null, true);
        echo "\">
\t<td>
\t\t<a href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((("content_" . $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "type", array())) . "_show"), array("alias" => (($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "alias", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "alias", array()), $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "id", array()))) : ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "id", array()))))), "html", null, true);
        echo "\" target=\"_blank\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "title", array()), "html", null, true);
        echo "</a><br />
\t\t";
        // line 4
        if (($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "type", array()) == "page")) {
            // line 5
            echo "\t\t  <span class=\"text-muted text-sm\">地址：page/";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "alias", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "alias", array()), $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "id", array()))) : ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "id", array()))), "html", null, true);
            echo "</span>
\t\t";
        }
        // line 7
        echo "\t\t";
        if ((isset($context["category"]) ? $context["category"] : null)) {
            // line 8
            echo "\t\t\t<span class=\"text-muted text-sm\">分类：";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "name", array()), "html", null, true);
            echo "</span>
\t\t";
        }
        // line 10
        echo "\t</td>
\t<td>";
        // line 11
        echo $this->env->getExtension('topxia_web_twig')->getDictText("contentType", $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "type", array()));
        echo "</td>
\t<td>";
        // line 12
        echo $this->env->getExtension('topxia_web_twig')->getDictText("contentStatus:html", $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "status", array()));
        echo "</td>
\t<td>
\t\t";
        // line 14
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "publishedTime", array()), "Y-n-d H:i"), "html", null, true);
        echo "<br />
\t\t";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "nickname", array()), "html", null, true);
        echo "
\t</td>
\t<td>
\t\t<div class=\"btn-group\">
\t\t  <a href=\"#modal\" data-toggle=\"modal\" data-url=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_content_edit", array("id" => $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default btn-sm\">编辑</a>
\t\t  <a href=\"#\" type=\"button\" class=\"btn btn-default btn-sm dropdown-toggle\" data-toggle=\"dropdown\">
\t\t    <span class=\"caret\"></span>
\t\t  </a>
\t\t  <ul class=\"dropdown-menu\">
\t\t  \t";
        // line 24
        if (($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "status", array()) != "published")) {
            // line 25
            echo "\t\t\t    <li><a href=\"javascript:\" data-role=\"publish-item\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_content_publish", array("id" => $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "id", array()))), "html", null, true);
            echo "\">发布</a></li>
\t\t    ";
        }
        // line 27
        echo "\t\t    ";
        if (($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "status", array()) != "trash")) {
            // line 28
            echo "\t\t\t    <li><a href=\"javascript:\" data-role=\"trash-item\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_content_trash", array("id" => $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "id", array()))), "html", null, true);
            echo "\">移至回收站</a></li>
\t\t    ";
        }
        // line 30
        echo "\t\t    ";
        if (($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "status", array()) == "trash")) {
            // line 31
            echo "\t\t\t    <li><a href=\"javascript:\" data-role=\"delete-item\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_content_delete", array("id" => $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "id", array()))), "html", null, true);
            echo "\">永久删除</a></li>
\t\t\t  ";
        }
        // line 33
        echo "\t\t  </ul>
\t\t</div>
\t</td>
</tr>";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Content:content-tr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 33,  99 => 31,  96 => 30,  90 => 28,  87 => 27,  81 => 25,  79 => 24,  71 => 19,  64 => 15,  60 => 14,  55 => 12,  51 => 11,  48 => 10,  42 => 8,  39 => 7,  33 => 5,  31 => 4,  25 => 3,  19 => 1,);
    }
}
/* <tr id="content-{{ content.id }}">*/
/* 	<td>*/
/* 		<a href="{{ path('content_' ~ content.type ~ '_show', {alias:content.alias|default(content.id)}) }}" target="_blank">{{ content.title }}</a><br />*/
/* 		{% if content.type == 'page' %}*/
/* 		  <span class="text-muted text-sm">地址：page/{{ content.alias|default(content.id) }}</span>*/
/* 		{% endif %}*/
/* 		{% if category %}*/
/* 			<span class="text-muted text-sm">分类：{{ category.name }}</span>*/
/* 		{% endif %}*/
/* 	</td>*/
/* 	<td>{{ dict_text('contentType', content.type) }}</td>*/
/* 	<td>{{ dict_text('contentStatus:html', content.status) }}</td>*/
/* 	<td>*/
/* 		{{ content.publishedTime|date('Y-n-d H:i') }}<br />*/
/* 		{{ user.nickname }}*/
/* 	</td>*/
/* 	<td>*/
/* 		<div class="btn-group">*/
/* 		  <a href="#modal" data-toggle="modal" data-url="{{ path('admin_content_edit', {id:content.id}) }}" class="btn btn-default btn-sm">编辑</a>*/
/* 		  <a href="#" type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">*/
/* 		    <span class="caret"></span>*/
/* 		  </a>*/
/* 		  <ul class="dropdown-menu">*/
/* 		  	{% if content.status != 'published' %}*/
/* 			    <li><a href="javascript:" data-role="publish-item" data-url="{{ path('admin_content_publish', {id:content.id}) }}">发布</a></li>*/
/* 		    {% endif  %}*/
/* 		    {% if content.status != 'trash' %}*/
/* 			    <li><a href="javascript:" data-role="trash-item" data-url="{{ path('admin_content_trash', {id:content.id}) }}">移至回收站</a></li>*/
/* 		    {% endif %}*/
/* 		    {% if content.status == 'trash' %}*/
/* 			    <li><a href="javascript:" data-role="delete-item" data-url="{{ path('admin_content_delete', {id:content.id}) }}">永久删除</a></li>*/
/* 			  {% endif %}*/
/* 		  </ul>*/
/* 		</div>*/
/* 	</td>*/
/* </tr>*/
