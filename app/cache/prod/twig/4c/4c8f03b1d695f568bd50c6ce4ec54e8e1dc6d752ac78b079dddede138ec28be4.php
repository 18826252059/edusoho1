<?php

/* ClassroomBundle:OfflineSchedule:index.html.twig */
class __TwigTemplate_8e3e44f471872bb57d7441d72ebf18085f4c584cad2945ed669e717498af36b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ClassroomBundle:ClassroomManage:layout.html.twig", "ClassroomBundle:OfflineSchedule:index.html.twig", 1);
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
        $context["side_nav"] = "offlineSchedule";
        // line 6
        $context["script_controller"] = "classroombundle/controller/offline-schedule/manage";
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
        $context["web_macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "ClassroomBundle:OfflineSchedule:index.html.twig", 9);
        // line 10
        echo "    ";
        echo $context["web_macro"]->getflash_messages();
        echo "
        <div class=\"panel panel-default panel-col\">
            <div class=\"panel-heading\">
                线下课程管理
                <button class=\"btn btn-info btn-sm pull-right mhs\" id=\"student-add-btn\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("offline_schedule_create", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
        echo "\"><i class=\"glyphicon glyphicon-plus\"></i> 添加线下课程</button>
            </div>

            <div class=\"panel-body\">
                <table id=\"offlineSchedule-table\" class=\"table table-striped\">
                    <thead>
                    <th width=\"5%\">ID</th>
                    <th width=\"20%\">标题</th>
                    <th width=\"10%\">讲师</th>
                    <th width=\"20%\">地址</th>
                    <th width=\"10%\">开始时间</th>
                    <th width=\"10%\">结束时间</th>
                    <th width=\"10%\">添加时间</th>
                    <th width=\"15%\">操作</th>
                    </thead>
                    <tbody>
                    ";
        // line 30
        if ((isset($context["offlineSchedules"]) ? $context["offlineSchedules"] : null)) {
            // line 31
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["offlineSchedules"]) ? $context["offlineSchedules"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["offlineSchedule"]) {
                // line 32
                echo "                            <tr id=\"offlineSchedule-tr-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["offlineSchedule"], "id", array()), "html", null, true);
                echo "\">
                                <td>";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute($context["offlineSchedule"], "id", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute($context["offlineSchedule"], "title", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute($context["offlineSchedule"], "teacher", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute($context["offlineSchedule"], "address", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 37
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["offlineSchedule"], "startTime", array()), "Y-m-d H:i"), "html", null, true);
                echo "</td>
                                <td>";
                // line 38
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["offlineSchedule"], "endTime", array()), "Y-m-d H:i"), "html", null, true);
                echo "</td>
                                <td>";
                // line 39
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["offlineSchedule"], "createTime", array()), "Y-m-d H:i"), "html", null, true);
                echo "</td>
                                <td>
                                    <div class=\"btn-group\">
                                        ";
                // line 43
                echo "                                        <button class=\"btn btn-default btn-sm\"  data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("offline_schedule_update", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()), "sceduleId" => $this->getAttribute($context["offlineSchedule"], "id", array()))), "html", null, true);
                echo "\">编辑</button>
                                        <a href=\"#\" type=\"button\" class=\"btn btn-default btn-sm dropdown-toggle\" data-toggle=\"dropdown\">
                                            <span class=\"caret\"></span>
                                        </a>
                                        <ul class=\"dropdown-menu pull-right\">
                                            <li><a class=\"delete-offlineSchedule\" id=\"delete\"  href=\"javascript:\"
                                                   data-url=\"";
                // line 49
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("offline_schedule_delete", array("id" => $this->getAttribute($context["offlineSchedule"], "id", array()))), "html", null, true);
                echo "\" data-target=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["offlineSchedule"], "id", array()), "html", null, true);
                echo "\" ><span
                                                            class=\"glyphicon glyphicon-hand-right\"></span> 删除</a></li>

                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['offlineSchedule'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "                    ";
        } else {
            // line 58
            echo "                        <tr><td colspan=\"20\"><div class=\"empty\">暂无线下课程记录</div></td></tr>
                    ";
        }
        // line 60
        echo "
                    </tbody>
                </table>

                ";
        // line 64
        echo $context["web_macro"]->getpaginator((isset($context["paginator"]) ? $context["paginator"] : null));
        echo "

            </div>
        </div>

";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:OfflineSchedule:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 64,  150 => 60,  146 => 58,  143 => 57,  127 => 49,  117 => 43,  111 => 39,  107 => 38,  103 => 37,  99 => 36,  95 => 35,  91 => 34,  87 => 33,  82 => 32,  77 => 31,  75 => 30,  56 => 14,  48 => 10,  45 => 9,  42 => 8,  34 => 3,  30 => 1,  28 => 6,  26 => 5,  11 => 1,);
    }
}
/* {% extends 'ClassroomBundle:ClassroomManage:layout.html.twig' %}*/
/* */
/* {% block title %}{{ setting('classroom.name')|default("班级") }}管理 - {{ parent() }}{% endblock %}*/
/* */
/* {% set side_nav = 'offlineSchedule' %}*/
/* {% set script_controller = 'classroombundle/controller/offline-schedule/manage' %}*/
/* */
/* {% block main %}*/
/*     {% import "TopxiaWebBundle::macro.html.twig" as web_macro %}*/
/*     {{ web_macro.flash_messages() }}*/
/*         <div class="panel panel-default panel-col">*/
/*             <div class="panel-heading">*/
/*                 线下课程管理*/
/*                 <button class="btn btn-info btn-sm pull-right mhs" id="student-add-btn" data-toggle="modal" data-target="#modal" data-url="{{ path('offline_schedule_create',{id:classroom.id}) }}"><i class="glyphicon glyphicon-plus"></i> 添加线下课程</button>*/
/*             </div>*/
/* */
/*             <div class="panel-body">*/
/*                 <table id="offlineSchedule-table" class="table table-striped">*/
/*                     <thead>*/
/*                     <th width="5%">ID</th>*/
/*                     <th width="20%">标题</th>*/
/*                     <th width="10%">讲师</th>*/
/*                     <th width="20%">地址</th>*/
/*                     <th width="10%">开始时间</th>*/
/*                     <th width="10%">结束时间</th>*/
/*                     <th width="10%">添加时间</th>*/
/*                     <th width="15%">操作</th>*/
/*                     </thead>*/
/*                     <tbody>*/
/*                     {% if offlineSchedules %}*/
/*                         {% for offlineSchedule in offlineSchedules %}*/
/*                             <tr id="offlineSchedule-tr-{{ offlineSchedule.id }}">*/
/*                                 <td>{{ offlineSchedule.id }}</td>*/
/*                                 <td>{{ offlineSchedule.title }}</td>*/
/*                                 <td>{{ offlineSchedule.teacher }}</td>*/
/*                                 <td>{{ offlineSchedule.address }}</td>*/
/*                                 <td>{{ offlineSchedule.startTime|date('Y-m-d H:i') }}</td>*/
/*                                 <td>{{ offlineSchedule.endTime|date('Y-m-d H:i') }}</td>*/
/*                                 <td>{{ offlineSchedule.createTime|date('Y-m-d H:i') }}</td>*/
/*                                 <td>*/
/*                                     <div class="btn-group">*/
/*                                         {#<a class="btn btn-default btn-sm" href="{{ path('admin_product_update', {id:offlineSchedule.id})}}" target="_blank">编辑</a>#}*/
/*                                         <button class="btn btn-default btn-sm"  data-toggle="modal" data-target="#modal" data-url="{{ path('offline_schedule_update',{id:classroom.id,sceduleId:offlineSchedule.id}) }}">编辑</button>*/
/*                                         <a href="#" type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">*/
/*                                             <span class="caret"></span>*/
/*                                         </a>*/
/*                                         <ul class="dropdown-menu pull-right">*/
/*                                             <li><a class="delete-offlineSchedule" id="delete"  href="javascript:"*/
/*                                                    data-url="{{ path('offline_schedule_delete', {id:offlineSchedule.id}) }}" data-target="{{offlineSchedule.id}}" ><span*/
/*                                                             class="glyphicon glyphicon-hand-right"></span> 删除</a></li>*/
/* */
/*                                         </ul>*/
/*                                     </div>*/
/*                                 </td>*/
/*                             </tr>*/
/*                         {% endfor %}*/
/*                     {% else %}*/
/*                         <tr><td colspan="20"><div class="empty">暂无线下课程记录</div></td></tr>*/
/*                     {% endif %}*/
/* */
/*                     </tbody>*/
/*                 </table>*/
/* */
/*                 {{ web_macro.paginator(paginator) }}*/
/* */
/*             </div>*/
/*         </div>*/
/* */
/* {% endblock %}*/
