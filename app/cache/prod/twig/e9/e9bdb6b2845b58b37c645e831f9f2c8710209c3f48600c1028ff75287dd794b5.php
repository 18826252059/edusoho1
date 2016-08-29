<?php

/* TopxiaAdminBundle:Category:tbody.html.twig */
class __TwigTemplate_08b0e0a0ef96ef6cb7f47dbb57560172f9295176f2f5ddc231c38af882d09407 extends Twig_Template
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
  ";
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
            echo "└─ ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "
\t\t  </td>
\t\t  <td>";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "code", array()), "html", null, true);
            echo "</td>
\t\t  <td>";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "weight", array()), "html", null, true);
            echo "</td>
\t\t  <td>
\t\t\t  <a href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("category_manage", array("id" => $this->getAttribute($context["category"], "id", array()), "type" => "news")), "html", null, true);
            echo "\" class=\"btn btn-default btn-sm \"  target=\"_blank\"><i class=\"glyphicon glyphicon-edit\"></i> 关联</a>
\t\t\t  <a href=\"javascript:;\" class=\"btn btn-default btn-sm \" data-url=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_category_edit", array("id" => $this->getAttribute($context["category"], "id", array()))), "html", null, true);
            echo "\" data-toggle=\"modal\" data-target=\"#modal\"><i class=\"glyphicon glyphicon-edit\"></i> 编辑</a>
\t\t    ";
            // line 12
            if (($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "depth", array()) > $this->getAttribute($context["category"], "depth", array()))) {
                // line 13
                echo "\t\t      <a href=\"javascript:;\" class=\"btn btn-default btn-sm\" data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_category_create", array("parentId" => $this->getAttribute($context["category"], "id", array()), "groupId" => $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "id", array()))), "html", null, true);
                echo "\" data-toggle=\"modal\" data-target=\"#modal\"><i class=\"glyphicon glyphicon-plus\"></i> 添加子分类</a>
\t\t    ";
            }
            // line 15
            echo "
\t\t  </td>
\t\t</tr>
\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 19
            echo "\t  <tr><td colspan=\"20\"><div class=\"empty\">暂无分类记录</div></td></tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "</tbody>";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Category:tbody.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 21,  80 => 19,  72 => 15,  66 => 13,  64 => 12,  60 => 11,  56 => 10,  51 => 8,  47 => 7,  33 => 5,  27 => 3,  22 => 2,  19 => 1,);
    }
}
/* <tbody>*/
/*   {% for category in categories %}*/
/* 		<tr id="category-tr-{{ category.id }}">*/
/* 		  <td>*/
/* 		    {% for i in 0..(category.depth-1)*2 %}&nbsp;&nbsp;&nbsp;&nbsp;{% endfor %}└─ {{ category.name }}*/
/* 		  </td>*/
/* 		  <td>{{ category.code }}</td>*/
/* 		  <td>{{ category.weight }}</td>*/
/* 		  <td>*/
/* 			  <a href="{{ path('category_manage', {id:category.id,type:'news'}) }}" class="btn btn-default btn-sm "  target="_blank"><i class="glyphicon glyphicon-edit"></i> 关联</a>*/
/* 			  <a href="javascript:;" class="btn btn-default btn-sm " data-url="{{ path('admin_category_edit', {id:category.id}) }}" data-toggle="modal" data-target="#modal"><i class="glyphicon glyphicon-edit"></i> 编辑</a>*/
/* 		    {% if group.depth > category.depth %}*/
/* 		      <a href="javascript:;" class="btn btn-default btn-sm" data-url="{{ path('admin_category_create', {parentId:category.id, groupId:group.id}) }}" data-toggle="modal" data-target="#modal"><i class="glyphicon glyphicon-plus"></i> 添加子分类</a>*/
/* 		    {% endif %}*/
/* */
/* 		  </td>*/
/* 		</tr>*/
/* 	{% else %}*/
/* 	  <tr><td colspan="20"><div class="empty">暂无分类记录</div></td></tr>*/
/*   {% endfor %}*/
/* </tbody>*/
