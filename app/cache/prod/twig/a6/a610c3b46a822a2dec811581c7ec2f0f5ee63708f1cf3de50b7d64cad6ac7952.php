<?php

/* TopxiaWebBundle:Announcement:announcement-write-modal.html.twig */
class __TwigTemplate_2a4cb2ccb8ede26def1a99eb1e503035a8f19b9a5a17891c1d592977080cc05d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:Announcement:announcement-modal-layout.html.twig", "TopxiaWebBundle:Announcement:announcement-write-modal.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:Announcement:announcement-modal-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["tab"] = "manage";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "  <form id=\"announcement-write-form\" class=\"form-horizontal\" method=\"post\"
    ";
        // line 7
        if ($this->getAttribute((isset($context["announcement"]) ? $context["announcement"] : null), "id", array())) {
            // line 8
            echo "      action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("announcement_update", array("id" => $this->getAttribute((isset($context["announcement"]) ? $context["announcement"] : null), "id", array()), "targetType" => (isset($context["targetType"]) ? $context["targetType"] : null), "targetId" => $this->getAttribute((isset($context["targetObject"]) ? $context["targetObject"] : null), "id", array()))), "html", null, true);
            echo "\"
    ";
        } else {
            // line 10
            echo "      action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("announcement_add", array("targetType" => (isset($context["targetType"]) ? $context["targetType"] : null), "targetId" => $this->getAttribute((isset($context["targetObject"]) ? $context["targetObject"] : null), "id", array()))), "html", null, true);
            echo "\"
    ";
        }
        // line 12
        echo "  >

    <div class=\"row form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"startTime\">发布时间</label>
      </div>
      <div class=\"col-md-9 controls\" style=\"z-index:2000;\">
        <input type=\"text\" id=\"startTime\"  name=\"startTime\" class=\"form-control\" value=\"";
        // line 19
        if ((($this->getAttribute((isset($context["announcement"]) ? $context["announcement"] : null), "startTime", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["announcement"]) ? $context["announcement"] : null), "startTime", array()), "now")) : ("now"))) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (($this->getAttribute((isset($context["announcement"]) ? $context["announcement"] : null), "startTime", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["announcement"]) ? $context["announcement"] : null), "startTime", array()), "now")) : ("now")), "Y-m-d H:i"), "html", null, true);
        }
        echo "\">
      </div>
    </div>

    <div class=\"row form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"endTime\">结束时间</label>
      </div>
      <div class=\"col-md-9 controls\" style=\"z-index:2000;\">
        <input type=\"text\" id=\"endTime\"  name=\"endTime\" class=\"form-control\" value=\"";
        // line 28
        if ((($this->getAttribute((isset($context["announcement"]) ? $context["announcement"] : null), "endTime", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["announcement"]) ? $context["announcement"] : null), "endTime", array()), null)) : (null))) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["announcement"]) ? $context["announcement"] : null), "endTime", array()), "Y-m-d H:i"), "html", null, true);
        }
        echo "\">
      </div>
    </div>

    <div class=\"row form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"content\">公告内容</label>
      </div>
      <div class=\"col-md-9 controls\">
        <textarea class=\"form-control\" id=\"announcement-content-field\" name=\"content\" data-display=\"公告内容\" data-image-upload-url=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editor_upload", array("token" => $this->env->getExtension('topxia_web_twig')->makeUpoadToken("default"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["announcement"]) ? $context["announcement"] : null), "content", array()), "html", null, true);
        echo "</textarea>
      </div>
    </div>

    ";
        // line 41
        if ( !$this->getAttribute((isset($context["announcement"]) ? $context["announcement"] : null), "id", array())) {
            // line 42
            echo "    <div class=\"row form-group\">
      <div class=\"col-md-2 control-label\">
      </div>
      <div class=\"col-md-9 controls\">
        <div class=\"checkbox\">
          <label>
            <input type=\"checkbox\" name=\"notify\" value=\"notify\"> 给";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("default.user_name", "学员"), "html", null, true);
            echo "发送系统通知
          </label>
        </div>
      </div>
    </div>
    ";
        }
        // line 54
        echo "    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">

  </form>

  <script>
    app.load('announcement/announcement-write');
  </script>

";
    }

    // line 63
    public function block_footer($context, array $blocks = array())
    {
        // line 64
        echo "  <button type=\"button\" class=\"btn btn-link\" data-dismiss=\"modal\">取消</button>
  <button type=\"submit\" class=\"btn btn-primary pull-right\" data-toggle=\"form-submit\" data-target=\"#announcement-write-form\">保存</button>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Announcement:announcement-write-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 64,  131 => 63,  117 => 54,  108 => 48,  100 => 42,  98 => 41,  89 => 37,  75 => 28,  61 => 19,  52 => 12,  46 => 10,  40 => 8,  38 => 7,  35 => 6,  32 => 5,  28 => 1,  26 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle:Announcement:announcement-modal-layout.html.twig' %}*/
/* */
/* {% set tab="manage" %}*/
/* */
/* {% block content %}*/
/*   <form id="announcement-write-form" class="form-horizontal" method="post"*/
/*     {% if announcement.id %}*/
/*       action="{{ path('announcement_update',{id:announcement.id, targetType:targetType,targetId:targetObject.id, }) }}"*/
/*     {% else %}*/
/*       action="{{ path('announcement_add',{targetType:targetType, targetId:targetObject.id}) }}"*/
/*     {% endif %}*/
/*   >*/
/* */
/*     <div class="row form-group">*/
/*       <div class="col-md-2 control-label">*/
/*         <label for="startTime">发布时间</label>*/
/*       </div>*/
/*       <div class="col-md-9 controls" style="z-index:2000;">*/
/*         <input type="text" id="startTime"  name="startTime" class="form-control" value="{% if announcement.startTime|default('now') %}{{announcement.startTime|default('now')|date("Y-m-d H:i")}}{% endif %}">*/
/*       </div>*/
/*     </div>*/
/* */
/*     <div class="row form-group">*/
/*       <div class="col-md-2 control-label">*/
/*         <label for="endTime">结束时间</label>*/
/*       </div>*/
/*       <div class="col-md-9 controls" style="z-index:2000;">*/
/*         <input type="text" id="endTime"  name="endTime" class="form-control" value="{% if announcement.endTime|default(null) %}{{announcement.endTime|date("Y-m-d H:i")}}{% endif %}">*/
/*       </div>*/
/*     </div>*/
/* */
/*     <div class="row form-group">*/
/*       <div class="col-md-2 control-label">*/
/*         <label for="content">公告内容</label>*/
/*       </div>*/
/*       <div class="col-md-9 controls">*/
/*         <textarea class="form-control" id="announcement-content-field" name="content" data-display="公告内容" data-image-upload-url="{{ path('editor_upload', {token:upload_token('default')}) }}">{{ announcement.content }}</textarea>*/
/*       </div>*/
/*     </div>*/
/* */
/*     {% if not announcement.id %}*/
/*     <div class="row form-group">*/
/*       <div class="col-md-2 control-label">*/
/*       </div>*/
/*       <div class="col-md-9 controls">*/
/*         <div class="checkbox">*/
/*           <label>*/
/*             <input type="checkbox" name="notify" value="notify"> 给{{ setting('default.user_name', '学员') }}发送系统通知*/
/*           </label>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*     {% endif %}*/
/*     <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/* */
/*   </form>*/
/* */
/*   <script>*/
/*     app.load('announcement/announcement-write');*/
/*   </script>*/
/* */
/* {% endblock %}*/
/* {% block footer %}*/
/*   <button type="button" class="btn btn-link" data-dismiss="modal">取消</button>*/
/*   <button type="submit" class="btn btn-primary pull-right" data-toggle="form-submit" data-target="#announcement-write-form">保存</button>*/
/* {% endblock %}*/
