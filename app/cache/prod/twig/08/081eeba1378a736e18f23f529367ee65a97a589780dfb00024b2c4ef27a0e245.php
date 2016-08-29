<?php

/* TopxiaAdminBundle:ProductBase:list-tr.html.twig */
class __TwigTemplate_eaec4b9041050f60085daf0b4b3625a702f20827469aeb6fd99b7dcc57c184ee extends Twig_Template
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
        echo "<tr id=\"productBase-tr-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["productBase"]) ? $context["productBase"] : null), "id", array()), "html", null, true);
        echo "\">
    <td>";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["productBase"]) ? $context["productBase"] : null), "id", array()), "html", null, true);
        echo "</td>
    <td>";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["productBase"]) ? $context["productBase"] : null), "title", array()), "html", null, true);
        echo "</td>
    <td>";
        // line 4
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["productBase"]) ? $context["productBase"] : null), "createdTime", array()), "Y-m-d H:i"), "html", null, true);
        echo "</td>
    <td>
        <div class=\"btn-group\">
            <a class=\"btn btn-default btn-sm\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_product_update", array("id" => $this->getAttribute((isset($context["productBase"]) ? $context["productBase"] : null), "id", array()))), "html", null, true);
        echo "\" target=\"_blank\">编辑</a>

            <a href=\"#\" type=\"button\" class=\"btn btn-default btn-sm dropdown-toggle\" data-toggle=\"dropdown\">
                <span class=\"caret\"></span>
            </a>
            <ul class=\"dropdown-menu pull-right\">

                <li><a class=\"delete-productBase\" id=\"delete-productBase\" href=\"javascript:\"
                       data-url=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_product_delete", array("id" => $this->getAttribute((isset($context["productBase"]) ? $context["productBase"] : null), "id", array()))), "html", null, true);
        echo "\" data-target=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["productBase"]) ? $context["productBase"] : null), "id", array()), "html", null, true);
        echo "\" ><span
                                class=\"glyphicon glyphicon-hand-right\"></span> 删除</a></li>

            </ul>
        </div>
    </td>
</tr>";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:ProductBase:list-tr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 15,  38 => 7,  32 => 4,  28 => 3,  24 => 2,  19 => 1,);
    }
}
/* <tr id="productBase-tr-{{ productBase.id }}">*/
/*     <td>{{ productBase.id }}</td>*/
/*     <td>{{ productBase.title }}</td>*/
/*     <td>{{ productBase.createdTime|date('Y-m-d H:i') }}</td>*/
/*     <td>*/
/*         <div class="btn-group">*/
/*             <a class="btn btn-default btn-sm" href="{{ path('admin_product_update', {id:productBase.id})}}" target="_blank">编辑</a>*/
/* */
/*             <a href="#" type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">*/
/*                 <span class="caret"></span>*/
/*             </a>*/
/*             <ul class="dropdown-menu pull-right">*/
/* */
/*                 <li><a class="delete-productBase" id="delete-productBase" href="javascript:"*/
/*                        data-url="{{ path('admin_product_delete', {id:productBase.id}) }}" data-target="{{productBase.id}}" ><span*/
/*                                 class="glyphicon glyphicon-hand-right"></span> 删除</a></li>*/
/* */
/*             </ul>*/
/*         </div>*/
/*     </td>*/
/* </tr>*/
