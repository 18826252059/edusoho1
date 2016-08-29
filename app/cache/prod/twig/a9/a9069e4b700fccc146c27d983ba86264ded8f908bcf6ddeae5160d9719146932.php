<?php

/* ClassroomBundle:OfflineSchedule:offline-schedule.html.twig */
class __TwigTemplate_a789fa21221e2f3746481cfdfab65bb1961477f5e4a68e18d85dfa5f70d337ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "ClassroomBundle:OfflineSchedule:offline-schedule.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::bootstrap-modal-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["modalSize"] = "large";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        if ((isset($context["offlineSchedule"]) ? $context["offlineSchedule"] : null)) {
            echo "编辑";
        } else {
            echo "添加";
        }
        echo "线下课程";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "
    <form id=\"create-form\" class=\"form-horizontal\" method=\"post\"
          action=\"";
        // line 9
        if ((isset($context["offlineSchedule"]) ? $context["offlineSchedule"] : null)) {
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("offline_schedule_update", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()), "sceduleId" => $this->getAttribute((isset($context["offlineSchedule"]) ? $context["offlineSchedule"] : null), "id", array()))), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("offline_schedule_create", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
        }
        echo "\">
        <div class=\"row form-group\">
            <div class=\"col-md-2 control-label\">
                <label>标题</label>
            </div>
            <div class=\"col-md-7 controls\">
                <input type=\"text\" id=\"title\" name=\"title\" class=\"form-control\" placeholder='标题' value=\"";
        // line 15
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["offlineSchedule"]) ? $context["offlineSchedule"] : null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["offlineSchedule"]) ? $context["offlineSchedule"] : null), "title", array()), "")) : ("")), "html", null, true);
        echo "\">
            </div>
        </div>
        <div class=\"row form-group\">
            <div class=\"col-md-2 control-label\">
                <label>讲师</label>
            </div>
            <div class=\"col-md-7 controls\">
                <input type=\"text\" id=\"teacher\" name=\"teacher\" class=\"form-control\" placeholder='讲师' value=\"";
        // line 23
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["offlineSchedule"]) ? $context["offlineSchedule"] : null), "teacher", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["offlineSchedule"]) ? $context["offlineSchedule"] : null), "teacher", array()), "")) : ("")), "html", null, true);
        echo "\">
            </div>
        </div>
        <div class=\"row form-group\">
            <div class=\"col-md-2 control-label\">
                <label>地点</label>
            </div>
            <div class=\"col-md-7 controls\">
                <input type=\"text\" id=\"address\" name=\"address\" class=\"form-control\" placeholder='地点' value=\"";
        // line 31
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["offlineSchedule"]) ? $context["offlineSchedule"] : null), "address", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["offlineSchedule"]) ? $context["offlineSchedule"] : null), "address", array()), "")) : ("")), "html", null, true);
        echo "\">
            </div>
        </div>
        <div class=\"row form-group\">
            <div class=\"col-md-2 control-label\">
                <label>开始时间</label>
            </div>
            <div class=\"input-group date form_datetime col-md-7\" data-date=\"1979-09-16T05:25:07Z\" data-date-format=\"yyyy-mm-dd hh:ii\" data-link-field=\"dtp_input1\">
                <input class=\"form-control\" size=\"16\" type=\"text\" value=\"";
        // line 39
        if ((($this->getAttribute((isset($context["offlineSchedule"]) ? $context["offlineSchedule"] : null), "startTime", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["offlineSchedule"]) ? $context["offlineSchedule"] : null), "startTime", array()), "")) : (""))) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["offlineSchedule"]) ? $context["offlineSchedule"] : null), "startTime", array()), "Y-m-d H:i"), "html", null, true);
        }
        echo "\" readonly  id=\"startTime\" name=\"startTime\">
                <span class=\"input-group-addon\"><span class=\"glyphicon glyphicon-remove\"></span></span>
                <span class=\"input-group-addon\"><span class=\"glyphicon glyphicon-th\"></span></span>
            </div>
            <input type=\"hidden\" id=\"dtp_input1\" value=\"\" /><br/>
            ";
        // line 45
        echo "                ";
        // line 46
        echo "                ";
        // line 47
        echo "                       ";
        // line 48
        echo "            ";
        // line 49
        echo "        </div>
        <div class=\"row form-group\">
            <div class=\"col-md-2 control-label\">
                <label>结束时间</label>
            </div>
            <div class=\"input-group date form_datetime col-md-7\" data-date=\"1979-09-16T05:25:07Z\" data-date-format=\"yyyy-mm-dd hh:ii\" data-link-field=\"dtp_input2\">
                <input class=\"form-control\" size=\"16\" type=\"text\" value=\"";
        // line 55
        if ((($this->getAttribute((isset($context["offlineSchedule"]) ? $context["offlineSchedule"] : null), "endTime", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["offlineSchedule"]) ? $context["offlineSchedule"] : null), "endTime", array()), "")) : (""))) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["offlineSchedule"]) ? $context["offlineSchedule"] : null), "endTime", array()), "Y-m-d H:i"), "html", null, true);
        }
        echo "\" readonly  id=\"endTime\" name=\"endTime\">
                <span class=\"input-group-addon\"><span class=\"glyphicon glyphicon-remove\"></span></span>
                <span class=\"input-group-addon\"><span class=\"glyphicon glyphicon-th\"></span></span>
            </div>
            <input type=\"hidden\" id=\"dtp_input2\" value=\"\" /><br/>
        </div>


        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">

    </form>

";
    }

    // line 69
    public function block_footer($context, array $blocks = array())
    {
        // line 70
        echo "    <button id=\"create-form-submit\" type=\"button\" class=\"btn btn-primary pull-right\"
            data-toggle=\"form-submit\" data-target=\"#create-form\" data-submiting-text=\"正在保存...\">保存
    </button>
    <button type=\"button\" class=\"btn btn-link pull-right\" data-dismiss=\"modal\">取消</button>
    <link rel=\"stylesheet\" media=\"screen\" href=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/h5/style/css/bootstrap-datetimepicker.min.css"), "html", null, true);
        echo "\"/>
    <script src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/h5/js/src/vendor/jquery-2.1.0.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/h5/js/src/vendor/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\" charset=\"UTF-8\"></script>
    <script src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/h5/js/src/vendor/bootstrap-datetimepicker.zh-CN.js"), "html", null, true);
        echo "\" charset=\"UTF-8\"></script>
    <script type=\"text/javascript\">
        \$('.form_datetime').datetimepicker({
            language:  'zh-CN',
            weekStart: 1,
            todayBtn:  1,
            autoclose: 1,
            todayHighlight: 1,
            startView: 2,
            forceParse: 0,
            showMeridian: 1,
            startDate: new Date()
        });
    </script>
    <script>app.load('classroombundle/controller/offline-schedule/manage')</script>
";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:OfflineSchedule:offline-schedule.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 77,  162 => 76,  158 => 75,  154 => 74,  148 => 70,  145 => 69,  136 => 63,  123 => 55,  115 => 49,  113 => 48,  111 => 47,  109 => 46,  107 => 45,  97 => 39,  86 => 31,  75 => 23,  64 => 15,  51 => 9,  47 => 7,  44 => 6,  33 => 5,  29 => 1,  27 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::bootstrap-modal-layout.html.twig' %}*/
/* */
/* {% set modalSize = 'large' %}*/
/* */
/* {% block title %}{% if offlineSchedule%}编辑{% else %}添加{% endif %}线下课程{% endblock %}*/
/* {% block body %}*/
/* */
/*     <form id="create-form" class="form-horizontal" method="post"*/
/*           action="{% if offlineSchedule%}{{ path('offline_schedule_update',{id:classroom.id,sceduleId:offlineSchedule.id}) }}{% else %}{{ path('offline_schedule_create',{id:classroom.id}) }}{% endif %}">*/
/*         <div class="row form-group">*/
/*             <div class="col-md-2 control-label">*/
/*                 <label>标题</label>*/
/*             </div>*/
/*             <div class="col-md-7 controls">*/
/*                 <input type="text" id="title" name="title" class="form-control" placeholder='标题' value="{{ offlineSchedule.title|default('') }}">*/
/*             </div>*/
/*         </div>*/
/*         <div class="row form-group">*/
/*             <div class="col-md-2 control-label">*/
/*                 <label>讲师</label>*/
/*             </div>*/
/*             <div class="col-md-7 controls">*/
/*                 <input type="text" id="teacher" name="teacher" class="form-control" placeholder='讲师' value="{{ offlineSchedule.teacher|default('') }}">*/
/*             </div>*/
/*         </div>*/
/*         <div class="row form-group">*/
/*             <div class="col-md-2 control-label">*/
/*                 <label>地点</label>*/
/*             </div>*/
/*             <div class="col-md-7 controls">*/
/*                 <input type="text" id="address" name="address" class="form-control" placeholder='地点' value="{{ offlineSchedule.address|default('') }}">*/
/*             </div>*/
/*         </div>*/
/*         <div class="row form-group">*/
/*             <div class="col-md-2 control-label">*/
/*                 <label>开始时间</label>*/
/*             </div>*/
/*             <div class="input-group date form_datetime col-md-7" data-date="1979-09-16T05:25:07Z" data-date-format="yyyy-mm-dd hh:ii" data-link-field="dtp_input1">*/
/*                 <input class="form-control" size="16" type="text" value="{% if offlineSchedule.startTime|default('') %}{{ offlineSchedule.startTime|date('Y-m-d H:i') }}{% endif %}" readonly  id="startTime" name="startTime">*/
/*                 <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>*/
/*                 <span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>*/
/*             </div>*/
/*             <input type="hidden" id="dtp_input1" value="" /><br/>*/
/*             {#<div class="col-md-7 controls" id="startTime-input">#}*/
/*                 {##}*/
/*                 {#<input type="text" id="startTime" name="startTime" class="form-control"#}*/
/*                        {#data-format="dd/MM/yyyy hh:mm:ss" value="{{ offlineSchedule.startTime|default('') }}">#}*/
/*             {#</div>#}*/
/*         </div>*/
/*         <div class="row form-group">*/
/*             <div class="col-md-2 control-label">*/
/*                 <label>结束时间</label>*/
/*             </div>*/
/*             <div class="input-group date form_datetime col-md-7" data-date="1979-09-16T05:25:07Z" data-date-format="yyyy-mm-dd hh:ii" data-link-field="dtp_input2">*/
/*                 <input class="form-control" size="16" type="text" value="{% if offlineSchedule.endTime|default('') %}{{ offlineSchedule.endTime|date('Y-m-d H:i') }}{% endif %}" readonly  id="endTime" name="endTime">*/
/*                 <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>*/
/*                 <span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>*/
/*             </div>*/
/*             <input type="hidden" id="dtp_input2" value="" /><br/>*/
/*         </div>*/
/* */
/* */
/*         <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/* */
/*     </form>*/
/* */
/* {% endblock %}*/
/* */
/* {% block footer %}*/
/*     <button id="create-form-submit" type="button" class="btn btn-primary pull-right"*/
/*             data-toggle="form-submit" data-target="#create-form" data-submiting-text="正在保存...">保存*/
/*     </button>*/
/*     <button type="button" class="btn btn-link pull-right" data-dismiss="modal">取消</button>*/
/*     <link rel="stylesheet" media="screen" href="{{ asset('themes/h5/style/css/bootstrap-datetimepicker.min.css') }}"/>*/
/*     <script src="{{ asset('themes/h5/js/src/vendor/jquery-2.1.0.min.js') }}"></script>*/
/*     <script src="{{ asset('themes/h5/js/src/vendor/bootstrap-datetimepicker.min.js') }}" charset="UTF-8"></script>*/
/*     <script src="{{ asset('themes/h5/js/src/vendor/bootstrap-datetimepicker.zh-CN.js') }}" charset="UTF-8"></script>*/
/*     <script type="text/javascript">*/
/*         $('.form_datetime').datetimepicker({*/
/*             language:  'zh-CN',*/
/*             weekStart: 1,*/
/*             todayBtn:  1,*/
/*             autoclose: 1,*/
/*             todayHighlight: 1,*/
/*             startView: 2,*/
/*             forceParse: 0,*/
/*             showMeridian: 1,*/
/*             startDate: new Date()*/
/*         });*/
/*     </script>*/
/*     <script>app.load('classroombundle/controller/offline-schedule/manage')</script>*/
/* {% endblock %}*/
/* */
/* */
/* */
