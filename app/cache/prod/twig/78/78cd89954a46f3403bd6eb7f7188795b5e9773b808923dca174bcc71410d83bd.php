<?php

/* TopxiaAdminBundle:ArticleCategory:tbody.html.twig */
class __TwigTemplate_4d4607eeda71435c8b928afc58fcca15efbf2ed1ad1f12c698ab5552c70140de extends Twig_Template
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
        echo "<tbody>
  \t";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 3
            echo "\t\t<tr id=\"category-tr-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "id", array()), "html", null, true);
            echo "\">
\t\t  <td>
\t\t    ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, (($this->getAttribute($context["category"], "depth", array()) - 1) * 2)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                echo "&nbsp;&nbsp;&nbsp;&nbsp;";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "└─  <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_category", array("categoryCode" => $this->getAttribute($context["category"], "code", array()))), "html", null, true);
            echo "\">
\t\t    \t";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "
\t\t\t</a>
\t\t  </td>
\t\t  <td>";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "code", array()), "html", null, true);
            echo "</td>
\t\t  <td>";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "weight", array()), "html", null, true);
            echo "</td>
\t\t  <td>
\t\t    <a href=\"javascript:;\" class=\"btn btn-default btn-sm\" data-url=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_article_category_edit", array("id" => $this->getAttribute($context["category"], "id", array()))), "html", null, true);
            echo "\" data-toggle=\"modal\" data-target=\"#modal\"><i class=\"glyphicon glyphicon-edit\"></i> 编辑</a>
\t\t  \t";
            // line 13
            if (($this->getAttribute($context["category"], "depth", array()) < 5)) {
                // line 14
                echo "\t      \t<a href=\"javascript:;\" class=\"btn btn-default btn-sm\" data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_article_category_create", array("parentId" => $this->getAttribute($context["category"], "id", array()))), "html", null, true);
                echo "\" data-toggle=\"modal\" data-target=\"#modal\"><i class=\"glyphicon glyphicon-plus\"></i> 添加子栏目</a>
\t      \t";
            }
            // line 16
            echo "\t\t  </td>
\t\t</tr>
\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 19
            echo "\t  \t<tr><td colspan=\"20\"><div class=\"empty\">暂无分类记录</div></td></tr>
  \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "</tbody>";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:ArticleCategory:tbody.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 21,  80 => 19,  73 => 16,  67 => 14,  65 => 13,  61 => 12,  56 => 10,  52 => 9,  46 => 6,  33 => 5,  27 => 3,  22 => 2,  19 => 1,);
    }
}
/* <tbody>*/
/*   	{% for category in categories %}*/
/* 		<tr id="category-tr-{{ category.id }}">*/
/* 		  <td>*/
/* 		    {% for i in 0..(category.depth-1)*2 %}&nbsp;&nbsp;&nbsp;&nbsp;{% endfor %}└─  <a href="{{ path('article_category',{ categoryCode:category.code })}}">*/
/* 		    	{{ category.name }}*/
/* 			</a>*/
/* 		  </td>*/
/* 		  <td>{{ category.code }}</td>*/
/* 		  <td>{{ category.weight }}</td>*/
/* 		  <td>*/
/* 		    <a href="javascript:;" class="btn btn-default btn-sm" data-url="{{ path('admin_article_category_edit', {id:category.id}) }}" data-toggle="modal" data-target="#modal"><i class="glyphicon glyphicon-edit"></i> 编辑</a>*/
/* 		  	{% if category.depth < 5 %}*/
/* 	      	<a href="javascript:;" class="btn btn-default btn-sm" data-url="{{ path('admin_article_category_create', {parentId:category.id}) }}" data-toggle="modal" data-target="#modal"><i class="glyphicon glyphicon-plus"></i> 添加子栏目</a>*/
/* 	      	{% endif %}*/
/* 		  </td>*/
/* 		</tr>*/
/* 	{% else %}*/
/* 	  	<tr><td colspan="20"><div class="empty">暂无分类记录</div></td></tr>*/
/*   	{% endfor %}*/
/* </tbody>*/
