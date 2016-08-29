<?php

/* TopxiaAdminBundle:Group:table-tr.html.twig */
class __TwigTemplate_4f8fa7a50be3a818989e1c7be0ccc13a47a099ac115ada199c0fc30ca9f3d375 extends Twig_Template
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
        $context["admin_macro"] = $this->loadTemplate("TopxiaAdminBundle::macro.html.twig", "TopxiaAdminBundle:Group:table-tr.html.twig", 1);
        // line 2
        echo "<tr id=\"group-table-tr-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "id", array()), "html", null, true);
        echo "\">
    <td>";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "id", array()), "html", null, true);
        echo "</td>

    <td>
    <strong>  
      <a target=\"_blank\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_show", array("id" => $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "title", array()), "html", null, true);
        echo "</a>
    </strong>
    ";
        // line 9
        if (($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "status", array()) == "close")) {
            // line 10
            echo "          <label class=\"label label-danger\">关闭</label>
    ";
        }
        // line 12
        echo "    </td>

    <td>
    <a target=\"_blank\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($this->getAttribute((isset($context["owners"]) ? $context["owners"] : null), $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "ownerId", array()), array(), "array"), "id", array()))), "html", null, true);
        echo "\">
   ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["owners"]) ? $context["owners"] : null), $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "ownerId", array()), array(), "array"), "nickname", array()), "html", null, true);
        echo "</a>
    </td>

    <td>
    ";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "memberNum", array()), "html", null, true);
        echo "
    </td>

    <td>
    ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "threadNum", array()), "html", null, true);
        echo "
    </td>

    <td>
    ";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "postNum", array()), "html", null, true);
        echo "
    </td>

    <td>
    ";
        // line 32
        if (($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "status", array()) == "open")) {
            // line 33
            echo "    开启
    ";
        } else {
            // line 35
            echo "    关闭
    ";
        }
        // line 37
        echo "    </td>

    <td>

  <div class=\"btn-group\">

    <button type=\"button\" class=\"btn btn-default btn-sm dropdown-toggle\" data-toggle=\"dropdown\">
      编辑
      <span class=\"caret\"></span>
    </button>

    <ul class=\"dropdown-menu\">
       <li><a href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_show", array("id" => $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "id", array()))), "html", null, true);
        echo "\" target=\"_blank\"><span class=\"glyphicon glyphicon-eye-open\"></span> 查看小组</a></li>

       ";
        // line 51
        if (($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "status", array()) == "open")) {
            // line 52
            echo "       <li><a href=\"javascript:\" class=\"close-group\" title=\"关闭小组(";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "title", array()), "html", null, true);
            echo ")\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_group_close", array("id" => $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-off\"></span> 关闭小组</a></li>

       ";
        } else {
            // line 55
            echo "       <li><a href=\"javascript:\" class=\"open-group\" title=\"开启小组(";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "title", array()), "html", null, true);
            echo ")\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_group_open", array("id" => $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-ok\"></span>开启小组</a></li>

       ";
        }
        // line 58
        echo "
       <li  ><a href=\"javascript:\" class=\"transfer-group\" data-url=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_group_transfer", array("groupId" => $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "id", array()))), "html", null, true);
        echo "\"><span class=\"glyphicon glyphicon-refresh\"></span> 转移小组</a></li>
       
    </ul>
  </div>
 </td>
</tr>";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Group:table-tr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 59,  132 => 58,  123 => 55,  114 => 52,  112 => 51,  107 => 49,  93 => 37,  89 => 35,  85 => 33,  83 => 32,  76 => 28,  69 => 24,  62 => 20,  55 => 16,  51 => 15,  46 => 12,  42 => 10,  40 => 9,  33 => 7,  26 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% import 'TopxiaAdminBundle::macro.html.twig' as admin_macro %}*/
/* <tr id="group-table-tr-{{ group.id }}">*/
/*     <td>{{ group.id}}</td>*/
/* */
/*     <td>*/
/*     <strong>  */
/*       <a target="_blank" href="{{ path('group_show', {id:group.id}) }}">{{ group.title}}</a>*/
/*     </strong>*/
/*     {% if group.status=='close' %}*/
/*           <label class="label label-danger">关闭</label>*/
/*     {% endif %}*/
/*     </td>*/
/* */
/*     <td>*/
/*     <a target="_blank" href="{{ path('user_show', {id:owners[group.ownerId].id}) }}">*/
/*    {{owners[group.ownerId].nickname}}</a>*/
/*     </td>*/
/* */
/*     <td>*/
/*     {{ group.memberNum }}*/
/*     </td>*/
/* */
/*     <td>*/
/*     {{ group.threadNum }}*/
/*     </td>*/
/* */
/*     <td>*/
/*     {{ group.postNum }}*/
/*     </td>*/
/* */
/*     <td>*/
/*     {% if group.status=='open' %}*/
/*     开启*/
/*     {% else %}*/
/*     关闭*/
/*     {% endif %}*/
/*     </td>*/
/* */
/*     <td>*/
/* */
/*   <div class="btn-group">*/
/* */
/*     <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">*/
/*       编辑*/
/*       <span class="caret"></span>*/
/*     </button>*/
/* */
/*     <ul class="dropdown-menu">*/
/*        <li><a href="{{path('group_show',{id:group.id})}}" target="_blank"><span class="glyphicon glyphicon-eye-open"></span> 查看小组</a></li>*/
/* */
/*        {% if group.status=='open'%}*/
/*        <li><a href="javascript:" class="close-group" title="关闭小组({{group.title}})" data-url="{{path('admin_group_close',{id:group.id})}}"><span class="glyphicon glyphicon-off"></span> 关闭小组</a></li>*/
/* */
/*        {% else %}*/
/*        <li><a href="javascript:" class="open-group" title="开启小组({{group.title}})" data-url="{{path('admin_group_open',{id:group.id})}}"><span class="glyphicon glyphicon-ok"></span>开启小组</a></li>*/
/* */
/*        {% endif %}*/
/* */
/*        <li  ><a href="javascript:" class="transfer-group" data-url="{{path('admin_group_transfer',{groupId:group.id})}}"><span class="glyphicon glyphicon-refresh"></span> 转移小组</a></li>*/
/*        */
/*     </ul>*/
/*   </div>*/
/*  </td>*/
/* </tr>*/
