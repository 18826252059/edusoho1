<?php

/* TopxiaAdminBundle:Comment:index.html.twig */
class __TwigTemplate_b0a4f175cad6cb9c0c956a429f89eb4a8f4ee1c84827812ecf73c9192e55523a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle:Content:layout.html.twig", "TopxiaAdminBundle:Comment:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle:Content:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["m"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "TopxiaAdminBundle:Comment:index.html.twig", 5);
        // line 6
        $context["menu"] = "comment";
        // line 7
        $context["script_controller"] = "comment/list";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "评论管理 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 8
    public function block_main($context, array $blocks = array())
    {
        // line 9
        echo "
<div class=\"page-header\"><h1>评论监控</h1></div>

<table class=\"table table-striped\">
   <thead>
      <tr>
         <th width=\"5%\">ID</th>
         <th width=\"20%\">评论对象</th>
         <th width=\"45%\">评论内容</th>
         <th width=\"10%\">发言人</th>
         <th width=\"10%\">发言时间</th>
         <th width=\"10%\">操作</th>
      </tr>
   </thead>
   <tbody>
     ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) ? $context["comments"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 25
            echo "     ";
            $context["u"] = $this->getAttribute((isset($context["userList"]) ? $context["userList"] : null), $this->getAttribute($context["c"], "userId", array()), array(), "array");
            // line 26
            echo "     <tr>
       <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "id", array()), "html", null, true);
            echo "</td>
       <td>
         <a href=\"\">课程-";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "objectId", array()), "html", null, true);
            echo "</a>
       </td>
       <td>";
            // line 31
            echo nl2br(twig_escape_filter($this->env, $this->getAttribute($context["c"], "content", array())));
            echo "</td>
       <td>";
            // line 32
            echo $context["m"]->getuser_link((isset($context["u"]) ? $context["u"] : null));
            echo "</td>
       <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->smarttimeFilter($this->getAttribute($context["c"], "createdTime", array())), "html", null, true);
            echo "</td>
       <td><a href=\"javascript:;\" class=\"btn btn-sm comment-delete\" data-url=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_comment_delete", array("id" => $this->getAttribute($context["c"], "id", array()))), "html", null, true);
            echo "\">删除</a></td>
     </tr>
     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "   </tbody>
</table>
";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo "

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Comment:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 39,  104 => 37,  95 => 34,  91 => 33,  87 => 32,  83 => 31,  78 => 29,  73 => 27,  70 => 26,  67 => 25,  63 => 24,  46 => 9,  43 => 8,  36 => 3,  32 => 1,  30 => 7,  28 => 6,  26 => 5,  11 => 1,);
    }
}
/* {% extends 'TopxiaAdminBundle:Content:layout.html.twig' %}*/
/* */
/* {% block title %}评论管理 - {{ parent() }}{% endblock %}*/
/* */
/* {% import 'TopxiaWebBundle::macro.html.twig' as m %}*/
/* {% set menu = 'comment' %}*/
/* {% set script_controller = 'comment/list' %}*/
/* {% block main %}*/
/* */
/* <div class="page-header"><h1>评论监控</h1></div>*/
/* */
/* <table class="table table-striped">*/
/*    <thead>*/
/*       <tr>*/
/*          <th width="5%">ID</th>*/
/*          <th width="20%">评论对象</th>*/
/*          <th width="45%">评论内容</th>*/
/*          <th width="10%">发言人</th>*/
/*          <th width="10%">发言时间</th>*/
/*          <th width="10%">操作</th>*/
/*       </tr>*/
/*    </thead>*/
/*    <tbody>*/
/*      {% for c in comments %}*/
/*      {% set u = userList[c.userId] %}*/
/*      <tr>*/
/*        <td>{{ c.id }}</td>*/
/*        <td>*/
/*          <a href="">课程-{{ c.objectId }}</a>*/
/*        </td>*/
/*        <td>{{ c.content|e|raw|nl2br }}</td>*/
/*        <td>{{ m.user_link(u) }}</td>*/
/*        <td>{{ c.createdTime|smart_time }}</td>*/
/*        <td><a href="javascript:;" class="btn btn-sm comment-delete" data-url="{{ path('admin_comment_delete', {id:c.id}) }}">删除</a></td>*/
/*      </tr>*/
/*      {% endfor %}*/
/*    </tbody>*/
/* </table>*/
/* {{ web_macro.paginator(paginator) }}*/
/* */
/* {% endblock %}*/
