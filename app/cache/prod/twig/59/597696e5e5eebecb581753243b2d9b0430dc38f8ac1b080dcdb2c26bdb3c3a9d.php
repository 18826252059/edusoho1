<?php

/* TopxiaAdminBundle:Notification:index.html.twig */
class __TwigTemplate_60610f6fe4b31dedcc58f06624b2c573969c753bb40f3b9188365ff14828014d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:Notification:index.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["menu"] = "admin_batch_notification";
        // line 5
        $context["script_controller"] = "batchnotification/list";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "<table id=\"batchnotification-table\" class=\"table table-striped\">
    <thead>
        <tr>
            <th width=\"40%\">站内信通知标题</th>
            <th>发布时间</th>
            <th>创建时间</th>
            <th>发布人</th>
            <th>状态</th>
            <th>操作</th>
        </tr>
    </thead>
    <tbody>
        ";
        // line 20
        if ((isset($context["batchnotifications"]) ? $context["batchnotifications"] : null)) {
            // line 21
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["batchnotifications"]) ? $context["batchnotifications"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["batchnotification"]) {
                // line 22
                echo "                <tr>
                    <td><a href=\"javascript:;\" data-url=\"";
                // line 23
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("batch_notification_show", array("id" => $this->getAttribute($context["batchnotification"], "id", array()))), "html", null, true);
                echo "\"data-toggle=\"modal\" data-target=\"#modal\">";
                echo $this->getAttribute($context["batchnotification"], "title", array());
                echo "</a></td>
                    ";
                // line 24
                if (($this->getAttribute($context["batchnotification"], "sendedTime", array()) == 0)) {
                    // line 25
                    echo "                    <td>--</td>
                    ";
                } else {
                    // line 27
                    echo "                    <td>";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["batchnotification"], "sendedTime", array()), "Y-m-d H:i"), "html", null, true);
                    echo "</td>
                    ";
                }
                // line 29
                echo "                    <td>";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["batchnotification"], "createdTime", array()), "Y-m-d H:i"), "html", null, true);
                echo "</td>
                    <td>";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["batchnotification"], "fromId", array()), array(), "array"), "nickname", array()), "html", null, true);
                echo "</td>
                    ";
                // line 31
                if ($this->getAttribute($context["batchnotification"], "published", array())) {
                    echo "<td class=\"text-success\">已发布</td>";
                } else {
                    echo "<td>未发布</td>";
                }
                // line 32
                echo "                    <td>
                        <div class=\"btn-group\">
                            ";
                // line 34
                if ($this->getAttribute($context["batchnotification"], "published", array())) {
                    // line 35
                    echo "                                <a  href=\"javascript:\" data-url=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_batch_notification_delete", array("id" => $this->getAttribute($context["batchnotification"], "id", array()))), "html", null, true);
                    echo "\" data-role=\"delete-item\" class=\"btn btn-default btn-sm\" >删除</a>
                            ";
                } else {
                    // line 37
                    echo "                                <a  href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_batch_notification_edit", array("id" => $this->getAttribute($context["batchnotification"], "id", array()))), "html", null, true);
                    echo "\" class=\"btn btn-default btn-sm\" >编辑</a>
                                <a href=\"#\" type=\"button\" class=\"btn btn-default btn-sm dropdown-toggle\" data-toggle=\"dropdown\">
                                <span class=\"caret\"></span>
                                </a>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"javascript:\" data-role=\"publish-item\" data-url=\"";
                    // line 42
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_batch_notification_send", array("id" => $this->getAttribute($context["batchnotification"], "id", array()))), "html", null, true);
                    echo "\">发布</a></li>
                                    <li><a href=\"javascript:\" data-role=\"delete-item\" data-url=\"";
                    // line 43
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_batch_notification_delete", array("id" => $this->getAttribute($context["batchnotification"], "id", array()))), "html", null, true);
                    echo "\">删除</a></li>
                                </ul>
                            ";
                }
                // line 46
                echo "                        </div>
                    </td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['batchnotification'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "        ";
        }
        // line 51
        echo "    </tbody>
</table>
  ";
        // line 53
        if ( !(isset($context["batchnotifications"]) ? $context["batchnotifications"] : null)) {
            // line 54
            echo "  <div class=\"empty\">暂无站内信</div>
  ";
        }
        // line 56
        echo "
  ";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Notification:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 57,  146 => 56,  142 => 54,  140 => 53,  136 => 51,  133 => 50,  124 => 46,  118 => 43,  114 => 42,  105 => 37,  99 => 35,  97 => 34,  93 => 32,  87 => 31,  83 => 30,  78 => 29,  72 => 27,  68 => 25,  66 => 24,  60 => 23,  57 => 22,  52 => 21,  50 => 20,  36 => 8,  33 => 7,  29 => 1,  27 => 5,  25 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaAdminBundle::layout.html.twig' %}*/
/* */
/* {% set menu = 'admin_batch_notification' %}*/
/* */
/* {% set script_controller = 'batchnotification/list' %}*/
/* */
/* {% block main %}*/
/* <table id="batchnotification-table" class="table table-striped">*/
/*     <thead>*/
/*         <tr>*/
/*             <th width="40%">站内信通知标题</th>*/
/*             <th>发布时间</th>*/
/*             <th>创建时间</th>*/
/*             <th>发布人</th>*/
/*             <th>状态</th>*/
/*             <th>操作</th>*/
/*         </tr>*/
/*     </thead>*/
/*     <tbody>*/
/*         {% if batchnotifications %}*/
/*             {% for batchnotification in batchnotifications %}*/
/*                 <tr>*/
/*                     <td><a href="javascript:;" data-url="{{ path('batch_notification_show',{ id:batchnotification.id }) }}"data-toggle="modal" data-target="#modal">{{batchnotification.title|raw}}</a></td>*/
/*                     {% if batchnotification.sendedTime == 0 %}*/
/*                     <td>--</td>*/
/*                     {% else %}*/
/*                     <td>{{batchnotification.sendedTime|date('Y-m-d H:i')}}</td>*/
/*                     {% endif %}*/
/*                     <td>{{batchnotification.createdTime|date('Y-m-d H:i')}}</td>*/
/*                     <td>{{users[batchnotification.fromId].nickname}}</td>*/
/*                     {% if batchnotification.published %}<td class="text-success">已发布</td>{% else %}<td>未发布</td>{% endif %}*/
/*                     <td>*/
/*                         <div class="btn-group">*/
/*                             {% if batchnotification.published %}*/
/*                                 <a  href="javascript:" data-url="{{ path('admin_batch_notification_delete',{id:batchnotification.id}) }}" data-role="delete-item" class="btn btn-default btn-sm" >删除</a>*/
/*                             {% else %}*/
/*                                 <a  href="{{ path('admin_batch_notification_edit',{id:batchnotification.id}) }}" class="btn btn-default btn-sm" >编辑</a>*/
/*                                 <a href="#" type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">*/
/*                                 <span class="caret"></span>*/
/*                                 </a>*/
/*                                 <ul class="dropdown-menu">*/
/*                                     <li><a href="javascript:" data-role="publish-item" data-url="{{ path('admin_batch_notification_send', {id:batchnotification.id}) }}">发布</a></li>*/
/*                                     <li><a href="javascript:" data-role="delete-item" data-url="{{ path('admin_batch_notification_delete', {id:batchnotification.id}) }}">删除</a></li>*/
/*                                 </ul>*/
/*                             {% endif %}*/
/*                         </div>*/
/*                     </td>*/
/*                 </tr>*/
/*             {% endfor %}*/
/*         {% endif %}*/
/*     </tbody>*/
/* </table>*/
/*   {% if not batchnotifications %}*/
/*   <div class="empty">暂无站内信</div>*/
/*   {% endif %}*/
/* */
/*   {{ web_macro.paginator(paginator) }}*/
/* {% endblock %}*/
/* */
