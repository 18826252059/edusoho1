<?php

/* CustomAdminBundle:ClassRoomManage/announcement:index.html.twig */
class __TwigTemplate_4462844d3cfb46e6bf674638fa950cfc1ed9abad8222583e6e8b15fa606242a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ClassroomBundle:ClassroomManage:layout.html.twig", "CustomAdminBundle:ClassRoomManage/announcement:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ClassroomBundle:ClassroomManage:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["side_nav"] = "announcement";
        // line 6
        $context["script_controller"] = "customadminbundle/controller/classroom-manage/announcement/manage";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
        echo "管理 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 8
    public function block_main($context, array $blocks = array())
    {
        // line 9
        echo "    ";
        $context["web_macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "CustomAdminBundle:ClassRoomManage/announcement:index.html.twig", 9);
        // line 10
        echo "    ";
        echo $context["web_macro"]->getflash_messages();
        echo "
    <div class=\"panel panel-default panel-col\">
        <div class=\"panel-heading\">
            公告管理
            <button class=\"btn btn-info btn-sm pull-right mhs\" id=\"student-add-btn\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_announcement_create", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
        echo "\"><i class=\"glyphicon glyphicon-plus\"></i> 添加公告</button>
        </div>

        <div class=\"panel-body\">
            <table id=\"classroom-announcement-table\" class=\"table table-striped\">
                <thead>
                <th width=\"5%\">ID</th>
                <th width=\"20%\">标题</th>
                <th width=\"10%\">内容</th>
                <th width=\"10%\">添加时间</th>
                <th width=\"15%\">操作</th>
                </thead>
                <tbody>
                ";
        // line 27
        if ((isset($context["classroomAnnouncements"]) ? $context["classroomAnnouncements"] : null)) {
            // line 28
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["classroomAnnouncements"]) ? $context["classroomAnnouncements"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["classroomAnnouncement"]) {
                // line 29
                echo "                        <tr id=\"classroom-announcement-tr-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["classroomAnnouncement"], "id", array()), "html", null, true);
                echo "\">
                            <td>";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($context["classroomAnnouncement"], "id", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute($context["classroomAnnouncement"], "title", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($context["classroomAnnouncement"], "content", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 33
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["classroomAnnouncement"], "createTime", array()), "Y-m-d H:i"), "html", null, true);
                echo "</td>
                            <td>
                                <div class=\"btn-group\">
                                    <button class=\"btn btn-default btn-sm\"  data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_announcement_update", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()), "anId" => $this->getAttribute($context["classroomAnnouncement"], "id", array()))), "html", null, true);
                echo "\">编辑</button>
                                    <a href=\"#\" type=\"button\" class=\"btn btn-default btn-sm dropdown-toggle\" data-toggle=\"dropdown\">
                                        <span class=\"caret\"></span>
                                    </a>
                                    <ul class=\"dropdown-menu pull-right\">
                                        <li><a class=\"delete-classroom-announcement\" id=\"delete\"  href=\"javascript:\"
                                               data-url=\"";
                // line 42
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_announcement_delete", array("id" => $this->getAttribute($context["classroomAnnouncement"], "id", array()))), "html", null, true);
                echo "\" data-target=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["classroomAnnouncement"], "id", array()), "html", null, true);
                echo "\" ><span
                                                        class=\"glyphicon glyphicon-hand-right\"></span> 删除</a></li>

                                    </ul>
                                </div>
                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['classroomAnnouncement'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "                ";
        } else {
            // line 51
            echo "                    <tr><td colspan=\"20\"><div class=\"empty\">暂无公告</div></td></tr>
                ";
        }
        // line 53
        echo "
                </tbody>
            </table>

            ";
        // line 57
        echo $context["web_macro"]->getpaginator((isset($context["paginator"]) ? $context["paginator"] : null));
        echo "

        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "CustomAdminBundle:ClassRoomManage/announcement:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 57,  134 => 53,  130 => 51,  127 => 50,  111 => 42,  102 => 36,  96 => 33,  92 => 32,  88 => 31,  84 => 30,  79 => 29,  74 => 28,  72 => 27,  56 => 14,  48 => 10,  45 => 9,  42 => 8,  34 => 3,  30 => 1,  28 => 6,  26 => 5,  11 => 1,);
    }
}
/* {% extends 'ClassroomBundle:ClassroomManage:layout.html.twig' %}*/
/* */
/* {% block title %}{{ setting('classroom.name')|default("班级") }}管理 - {{ parent() }}{% endblock %}*/
/* */
/* {% set side_nav = 'announcement' %}*/
/* {% set script_controller = 'customadminbundle/controller/classroom-manage/announcement/manage' %}*/
/* */
/* {% block main %}*/
/*     {% import "TopxiaWebBundle::macro.html.twig" as web_macro %}*/
/*     {{ web_macro.flash_messages() }}*/
/*     <div class="panel panel-default panel-col">*/
/*         <div class="panel-heading">*/
/*             公告管理*/
/*             <button class="btn btn-info btn-sm pull-right mhs" id="student-add-btn" data-toggle="modal" data-target="#modal" data-url="{{ path('classroom_announcement_create',{id:classroom.id}) }}"><i class="glyphicon glyphicon-plus"></i> 添加公告</button>*/
/*         </div>*/
/* */
/*         <div class="panel-body">*/
/*             <table id="classroom-announcement-table" class="table table-striped">*/
/*                 <thead>*/
/*                 <th width="5%">ID</th>*/
/*                 <th width="20%">标题</th>*/
/*                 <th width="10%">内容</th>*/
/*                 <th width="10%">添加时间</th>*/
/*                 <th width="15%">操作</th>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                 {% if classroomAnnouncements %}*/
/*                     {% for classroomAnnouncement in classroomAnnouncements %}*/
/*                         <tr id="classroom-announcement-tr-{{ classroomAnnouncement.id }}">*/
/*                             <td>{{ classroomAnnouncement.id }}</td>*/
/*                             <td>{{ classroomAnnouncement.title }}</td>*/
/*                             <td>{{ classroomAnnouncement.content }}</td>*/
/*                             <td>{{ classroomAnnouncement.createTime|date('Y-m-d H:i') }}</td>*/
/*                             <td>*/
/*                                 <div class="btn-group">*/
/*                                     <button class="btn btn-default btn-sm"  data-toggle="modal" data-target="#modal" data-url="{{ path('classroom_announcement_update',{id:classroom.id,anId:classroomAnnouncement.id}) }}">编辑</button>*/
/*                                     <a href="#" type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">*/
/*                                         <span class="caret"></span>*/
/*                                     </a>*/
/*                                     <ul class="dropdown-menu pull-right">*/
/*                                         <li><a class="delete-classroom-announcement" id="delete"  href="javascript:"*/
/*                                                data-url="{{ path('classroom_announcement_delete', {id:classroomAnnouncement.id}) }}" data-target="{{classroomAnnouncement.id}}" ><span*/
/*                                                         class="glyphicon glyphicon-hand-right"></span> 删除</a></li>*/
/* */
/*                                     </ul>*/
/*                                 </div>*/
/*                             </td>*/
/*                         </tr>*/
/*                     {% endfor %}*/
/*                 {% else %}*/
/*                     <tr><td colspan="20"><div class="empty">暂无公告</div></td></tr>*/
/*                 {% endif %}*/
/* */
/*                 </tbody>*/
/*             </table>*/
/* */
/*             {{ web_macro.paginator(paginator) }}*/
/* */
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock %}*/
