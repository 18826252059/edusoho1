<?php

/* TopxiaAdminBundle:Group:thread-table-tr.html.twig */
class __TwigTemplate_98d4cb1776f664460e5fbc835a3ba6f651c9bebfdb97179657b0f3190b2851d8 extends Twig_Template
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
        $context["admin_macro"] = $this->loadTemplate("TopxiaAdminBundle::macro.html.twig", "TopxiaAdminBundle:Group:thread-table-tr.html.twig", 1);
        // line 2
        echo "<tr id=\"thread-table-tr-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "id", array()), "html", null, true);
        echo "\">
  <td>
    <input name=\"ID[]\" data-role=\"batch-item\" type=\"checkbox\" value=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "id", array()), "html", null, true);
        echo "\"/> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "id", array()), "html", null, true);
        echo "
  </td>

  <td style=\"word-break:break-all;\">
    <strong ><a target=\"_blank\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_thread_show", array("id" => $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "groupId", array()), "threadId" => $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "id", array()))), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "title", array()), 50);
        echo "</a></strong>
    ";
        // line 9
        if (($this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "status", array()) == "close")) {
            // line 10
            echo "      <label class=\"label label-danger\">关闭</label>
    ";
        }
        // line 12
        echo "  </td>

  <td nowrap=\"nowrap\">
    ";
        // line 15
        if ($this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "isElite", array())) {
            // line 16
            echo "      <a href=\"javascript:;\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_group_thread_cancel_elite", array("threadId" => $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "id", array()))), "html", null, true);
            echo "\" class=\"promoted-label\">
        <span class=\"label label-success\">精</span>
      </a>
    ";
        } else {
            // line 20
            echo "      <a href=\"javascript:;\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_group_thread_set_elite", array("threadId" => $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "id", array()))), "html", null, true);
            echo "\" class=\"promoted-label\">
        <span class=\"label label-default\">精</span>
      </a>
    ";
        }
        // line 24
        echo "  
    ";
        // line 25
        if ($this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "isStick", array())) {
            // line 26
            echo "      <a href=\"javascript:;\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_group_thread_cancel_stick", array("threadId" => $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "id", array()))), "html", null, true);
            echo "\" class=\"promoted-label\">
        <span class=\"label label-success\">顶</span>
      </a>
    ";
        } else {
            // line 30
            echo "      <a href=\"javascript:;\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_group_thread_set_stick", array("threadId" => $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "id", array()))), "html", null, true);
            echo "\" class=\"promoted-label\">
        <span class=\"label label-default\">顶</span>
    </a>
    ";
        }
        // line 34
        echo "  </td>

  <td><a target=\"_blank\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($this->getAttribute((isset($context["owners"]) ? $context["owners"] : null), $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "userId", array()), array(), "array"), "id", array()))), "html", null, true);
        echo "\">
    ";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["owners"]) ? $context["owners"] : null), $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "userId", array()), array(), "array"), "nickname", array()), "html", null, true);
        echo "</a>
  </td>

  <td>
    <a target=\"_blank\" href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_show", array("id" => $this->getAttribute($this->getAttribute((isset($context["group"]) ? $context["group"] : null), $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "groupId", array()), array(), "array"), "id", array()))), "html", null, true);
        echo "\">
    ";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["group"]) ? $context["group"] : null), $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "groupId", array()), array(), "array"), "title", array()), "html", null, true);
        echo "</a>
  </td>

  <td>
    ";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "postNum", array()), "html", null, true);
        echo "
  </td>

  <td>
    ";
        // line 50
        if (($this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "status", array()) == "open")) {
            // line 51
            echo "      正常
    ";
        } else {
            // line 53
            echo "      关闭
    ";
        }
        // line 55
        echo "  </td>

  <td>
    <div class=\"btn-group\">
      <a type=\"button\" class=\"btn btn-default btn-sm\" target=\"_blank\" href=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_thread_show", array("id" => $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "groupId", array()), "threadId" => $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "id", array()))), "html", null, true);
        echo "\" ";
        if (($this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "status", array()) == "close")) {
            echo "disabled=\"disabled\"";
        }
        echo ">查看</a>
      <button type=\"button\" class=\"btn btn-default dropdown-toggle btn-sm \" data-toggle=\"dropdown\">
        <span class=\"caret\"></span>
        <span class=\"sr-only\">Toggle Dropdown</span>
      </button>
      <ul class=\"dropdown-menu\" role=\"menu\">
        ";
        // line 65
        if (($this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "status", array()) == "open")) {
            // line 66
            echo "          <li><a href=\"javascript:\" class=\"close-thread\" title=\"关闭话题(";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "title", array()), "html", null, true);
            echo ")\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_group_thread_close", array("threadId" => $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-off\"></span> 关闭话题</a></li>
        ";
        } else {
            // line 68
            echo "          <li><a href=\"javascript:\" class=\"open-thread\" title=\"开启话题(";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "title", array()), "html", null, true);
            echo ")\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_group_thread_open", array("threadId" => $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "id", array()))), "html", null, true);
            echo "\">
            <span class=\"glyphicon glyphicon-ok\"></span> 开启话题</a>
          </li>
          <li><a href=\"javascript:\" class=\"delete-thread\" title=\"永久删除话题(";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "title", array()), "html", null, true);
            echo ")\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_group_thread_delete", array("threadId" => $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "id", array()))), "html", null, true);
            echo "\">
            <span class=\"glyphicon glyphicon-trash\"></span> 永久删除</a>
          </li>
        ";
        }
        // line 75
        echo "      </ul>
    </div>
  </td>
</tr>";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Group:thread-table-tr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 75,  173 => 71,  164 => 68,  156 => 66,  154 => 65,  141 => 59,  135 => 55,  131 => 53,  127 => 51,  125 => 50,  118 => 46,  111 => 42,  107 => 41,  100 => 37,  96 => 36,  92 => 34,  84 => 30,  76 => 26,  74 => 25,  71 => 24,  63 => 20,  55 => 16,  53 => 15,  48 => 12,  44 => 10,  42 => 9,  36 => 8,  27 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% import 'TopxiaAdminBundle::macro.html.twig' as admin_macro %}*/
/* <tr id="thread-table-tr-{{ thread.id }}">*/
/*   <td>*/
/*     <input name="ID[]" data-role="batch-item" type="checkbox" value="{{thread.id}}"/> {{ thread.id}}*/
/*   </td>*/
/* */
/*   <td style="word-break:break-all;">*/
/*     <strong ><a target="_blank" href="{{path('group_thread_show',{id:thread.groupId,threadId:thread.id})}}">{{ thread.title|plain_text(50)}}</a></strong>*/
/*     {% if thread.status=='close'%}*/
/*       <label class="label label-danger">关闭</label>*/
/*     {% endif %}*/
/*   </td>*/
/* */
/*   <td nowrap="nowrap">*/
/*     {% if thread.isElite %}*/
/*       <a href="javascript:;" data-url="{{ path('admin_group_thread_cancel_elite',{threadId:thread.id}) }}" class="promoted-label">*/
/*         <span class="label label-success">精</span>*/
/*       </a>*/
/*     {% else %}*/
/*       <a href="javascript:;" data-url="{{ path('admin_group_thread_set_elite',{threadId:thread.id}) }}" class="promoted-label">*/
/*         <span class="label label-default">精</span>*/
/*       </a>*/
/*     {% endif %}*/
/*   */
/*     {% if thread.isStick %}*/
/*       <a href="javascript:;" data-url="{{ path('admin_group_thread_cancel_stick',{threadId:thread.id}) }}" class="promoted-label">*/
/*         <span class="label label-success">顶</span>*/
/*       </a>*/
/*     {% else %}*/
/*       <a href="javascript:;" data-url="{{ path('admin_group_thread_set_stick',{threadId:thread.id}) }}" class="promoted-label">*/
/*         <span class="label label-default">顶</span>*/
/*     </a>*/
/*     {% endif %}*/
/*   </td>*/
/* */
/*   <td><a target="_blank" href="{{ path('user_show', {id:owners[thread.userId].id}) }}">*/
/*     {{ owners[thread.userId].nickname}}</a>*/
/*   </td>*/
/* */
/*   <td>*/
/*     <a target="_blank" href="{{ path('group_show', {id:group[thread.groupId].id}) }}">*/
/*     {{ group[thread.groupId].title}}</a>*/
/*   </td>*/
/* */
/*   <td>*/
/*     {{ thread.postNum}}*/
/*   </td>*/
/* */
/*   <td>*/
/*     {% if thread.status=='open' %}*/
/*       正常*/
/*     {% else %}*/
/*       关闭*/
/*     {% endif %}*/
/*   </td>*/
/* */
/*   <td>*/
/*     <div class="btn-group">*/
/*       <a type="button" class="btn btn-default btn-sm" target="_blank" href="{{path('group_thread_show',{id:thread.groupId,threadId:thread.id})}}" {% if thread.status=='close' %}disabled="disabled"{% endif %}>查看</a>*/
/*       <button type="button" class="btn btn-default dropdown-toggle btn-sm " data-toggle="dropdown">*/
/*         <span class="caret"></span>*/
/*         <span class="sr-only">Toggle Dropdown</span>*/
/*       </button>*/
/*       <ul class="dropdown-menu" role="menu">*/
/*         {% if thread.status=='open' %}*/
/*           <li><a href="javascript:" class="close-thread" title="关闭话题({{thread.title}})" data-url="{{path('admin_group_thread_close',{threadId:thread.id})}}"><span class="glyphicon glyphicon-off"></span> 关闭话题</a></li>*/
/*         {% else %}*/
/*           <li><a href="javascript:" class="open-thread" title="开启话题({{thread.title}})" data-url="{{path('admin_group_thread_open',{threadId:thread.id})}}">*/
/*             <span class="glyphicon glyphicon-ok"></span> 开启话题</a>*/
/*           </li>*/
/*           <li><a href="javascript:" class="delete-thread" title="永久删除话题({{thread.title}})" data-url="{{path('admin_group_thread_delete',{threadId:thread.id})}}">*/
/*             <span class="glyphicon glyphicon-trash"></span> 永久删除</a>*/
/*           </li>*/
/*         {% endif %}*/
/*       </ul>*/
/*     </div>*/
/*   </td>*/
/* </tr>*/
