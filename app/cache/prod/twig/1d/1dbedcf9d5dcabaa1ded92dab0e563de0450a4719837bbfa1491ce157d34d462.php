<?php

/* CustomAdminBundle:ClassRoomManage/announcement:announcement.html.twig */
class __TwigTemplate_298e89904d4c63d424bbac0f877a348e500b7fb34b2a21bc58b846c5630116d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "CustomAdminBundle:ClassRoomManage/announcement:announcement.html.twig", 1);
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
        if ((isset($context["classroomAnnouncement"]) ? $context["classroomAnnouncement"] : null)) {
            echo "编辑";
        } else {
            echo "添加";
        }
        echo "公告";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "
    <form id=\"create-form\" class=\"form-horizontal\" method=\"post\"
          action=\"";
        // line 9
        if ((isset($context["classroomAnnouncement"]) ? $context["classroomAnnouncement"] : null)) {
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_announcement_update", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()), "anId" => $this->getAttribute((isset($context["classroomAnnouncement"]) ? $context["classroomAnnouncement"] : null), "id", array()))), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_announcement_create", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
        }
        echo "\">
        <div class=\"row form-group\">
            <div class=\"col-md-2 control-label\">
                <label for=\"title\">标题</label>
            </div>
            <div class=\"col-md-7 controls\">
                <input type=\"text\" id=\"title\" name=\"title\" class=\"form-control\" placeholder='标题'
                       value=\"";
        // line 16
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["classroomAnnouncement"]) ? $context["classroomAnnouncement"] : null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["classroomAnnouncement"]) ? $context["classroomAnnouncement"] : null), "title", array()), "")) : ("")), "html", null, true);
        echo "\">
            </div>
        </div>
        <div class=\"row form-group\">
            <div class=\"col-md-2 control-label\">
                <label for=\"content\">内容</label>
            </div>
            <div class=\"col-md-7 controls\">
                <textarea rows=\"10\" cols=\"20\" class=\"form-control\" id=\"content\" name=\"content\">";
        // line 24
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["classroomAnnouncement"]) ? $context["classroomAnnouncement"] : null), "content", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["classroomAnnouncement"]) ? $context["classroomAnnouncement"] : null), "content", array()), "")) : ("")), "html", null, true);
        echo "
                 </textarea>
            </div>
        </div>
        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">

    </form>

";
    }

    // line 34
    public function block_footer($context, array $blocks = array())
    {
        // line 35
        echo "    <button id=\"create-form-submit\" type=\"button\" class=\"btn btn-primary pull-right\"
            data-toggle=\"form-submit\" data-target=\"#create-form\" data-submiting-text=\"正在保存...\">保存
    </button>
    <button type=\"button\" class=\"btn btn-link pull-right\" data-dismiss=\"modal\">取消</button>
    <script type=\"application/javascript\">
//        \$(function(){
//            \$(\"#create-form-submit\").on('click', function(){
//                var textVale = \$('#content').val();
//                var newValue = textVale.replace(/(^\\s*)|(\\s*\$)/g, \"\");
//                if (newValue.length < 1) {
//                    alert('请输入内容');
//                }
//            });
//        })
    </script>
    <script>app.load('customadminbundle/controller/classroom-manage/announcement/manage')</script>
";
    }

    public function getTemplateName()
    {
        return "CustomAdminBundle:ClassRoomManage/announcement:announcement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 35,  92 => 34,  83 => 28,  76 => 24,  65 => 16,  51 => 9,  47 => 7,  44 => 6,  33 => 5,  29 => 1,  27 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::bootstrap-modal-layout.html.twig' %}*/
/* */
/* {% set modalSize = 'large' %}*/
/* */
/* {% block title %}{% if classroomAnnouncement %}编辑{% else %}添加{% endif %}公告{% endblock %}*/
/* {% block body %}*/
/* */
/*     <form id="create-form" class="form-horizontal" method="post"*/
/*           action="{% if classroomAnnouncement %}{{ path('classroom_announcement_update',{id:classroom.id,anId:classroomAnnouncement.id}) }}{% else %}{{ path('classroom_announcement_create',{id:classroom.id}) }}{% endif %}">*/
/*         <div class="row form-group">*/
/*             <div class="col-md-2 control-label">*/
/*                 <label for="title">标题</label>*/
/*             </div>*/
/*             <div class="col-md-7 controls">*/
/*                 <input type="text" id="title" name="title" class="form-control" placeholder='标题'*/
/*                        value="{{ classroomAnnouncement.title|default('') }}">*/
/*             </div>*/
/*         </div>*/
/*         <div class="row form-group">*/
/*             <div class="col-md-2 control-label">*/
/*                 <label for="content">内容</label>*/
/*             </div>*/
/*             <div class="col-md-7 controls">*/
/*                 <textarea rows="10" cols="20" class="form-control" id="content" name="content">{{ classroomAnnouncement.content|default('') }}*/
/*                  </textarea>*/
/*             </div>*/
/*         </div>*/
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
/*     <script type="application/javascript">*/
/* //        $(function(){*/
/* //            $("#create-form-submit").on('click', function(){*/
/* //                var textVale = $('#content').val();*/
/* //                var newValue = textVale.replace(/(^\s*)|(\s*$)/g, "");*/
/* //                if (newValue.length < 1) {*/
/* //                    alert('请输入内容');*/
/* //                }*/
/* //            });*/
/* //        })*/
/*     </script>*/
/*     <script>app.load('customadminbundle/controller/classroom-manage/announcement/manage')</script>*/
/* {% endblock %}*/
/* */
/* */
/* */
/* */
/* */
