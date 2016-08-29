<?php

/* TopxiaAdminBundle:Announcement:create.html.twig */
class __TwigTemplate_a194f8d0e1edff1ce1fdd4c6eafe785b213782bb2ea54701cb0460ae95e9dff1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "TopxiaAdminBundle:Announcement:create.html.twig", 1);
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
        if (((array_key_exists("announcement", $context)) ? (_twig_default_filter((isset($context["announcement"]) ? $context["announcement"] : null), null)) : (null))) {
            echo "编辑";
        } else {
            echo "新增";
        }
        echo "公告";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "
<form id=\"announcement-create-form\" class=\"form-horizontal\" method=\"post\" action=\"";
        // line 8
        if (((array_key_exists("announcement", $context)) ? (_twig_default_filter((isset($context["announcement"]) ? $context["announcement"] : null), null)) : (null))) {
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_announcement_edit", array("id" => $this->getAttribute((isset($context["announcement"]) ? $context["announcement"] : null), "id", array()))), "html", null, true);
        } else {
            echo $this->env->getExtension('routing')->getPath("admin_announcement_create");
        }
        echo "\">

  <div class=\"row form-group\">
    <div class=\"col-md-2 control-label\">
      <label for=\"title\">公告内容</label>
    </div>
    <div class=\"col-md-8 controls\">
      <input type=\"text\" id=\"title\"  name=\"content\" class=\"form-control\" value=\"";
        // line 15
        if (((array_key_exists("announcement", $context)) ? (_twig_default_filter((isset($context["announcement"]) ? $context["announcement"] : null), null)) : (null))) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["announcement"]) ? $context["announcement"] : null), "content", array()), "html", null, true);
        }
        echo "\">
    </div>
  </div>

  <div class=\"row form-group\">
    <div class=\"col-md-2 control-label\">
      <label for=\"url\">内容链接</label>
    </div>
    <div class=\"col-md-8 controls\">
      <input type=\"text\" id=\"url\"  name=\"url\" class=\"form-control\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["announcement"]) ? $context["announcement"] : null), "url", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["announcement"]) ? $context["announcement"] : null), "url", array()), "")) : ("")), "html", null, true);
        echo "\">
      <p class=\"help-block\">以\"http://\"或\"https://\"开头</p>
    </div>
  </div>

  <div class=\"row form-group\">
    <div class=\"col-md-2 control-label\">
      <label for=\"startTime\">发布时间</label>
    </div>
    <div class=\"col-md-8 controls\" style=\"z-index:2000;\">
      <input type=\"text\" id=\"startTime\"  name=\"startTime\" class=\"form-control\" value=\"";
        // line 34
        if (((array_key_exists("announcement", $context)) ? (_twig_default_filter((isset($context["announcement"]) ? $context["announcement"] : null), null)) : (null))) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["announcement"]) ? $context["announcement"] : null), "startTime", array()), "Y-m-d H:i"), "html", null, true);
        }
        echo "\">
    </div>
  </div>

  <div class=\"row form-group\">
    <div class=\"col-md-2 control-label\">
      <label for=\"endTime\">结束时间</label>
    </div>
    <div class=\"col-md-8 controls\" style=\"z-index:2000;\">
      <input type=\"text\" id=\"endTime\"  name=\"endTime\" class=\"form-control\" value=\"";
        // line 43
        if (((array_key_exists("announcement", $context)) ? (_twig_default_filter((isset($context["announcement"]) ? $context["announcement"] : null), null)) : (null))) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["announcement"]) ? $context["announcement"] : null), "endTime", array()), "Y-m-d H:i"), "html", null, true);
        }
        echo "\">
    </div>
  </div>

  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">

</form>
";
    }

    // line 52
    public function block_footer($context, array $blocks = array())
    {
        // line 53
        echo "  <button id=\"announcement-create-btn\" data-submiting-text=\"正在提交\" type=\"submit\" class=\"btn btn-primary pull-right\" data-toggle=\"form-submit\" data-target=\"#announcement-create-form\">提交</button>
  <button type=\"button\" class=\"btn btn-link pull-right\" data-dismiss=\"modal\">取消</button>
  <script>app.load('announcement/create-modal')</script>
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Announcement:create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 53,  122 => 52,  114 => 47,  105 => 43,  91 => 34,  78 => 24,  64 => 15,  50 => 8,  47 => 7,  44 => 6,  33 => 5,  29 => 1,  27 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::bootstrap-modal-layout.html.twig' %}*/
/* */
/* {% set modalSize = 'large' %}*/
/* */
/* {% block title %}{% if announcement|default(null) %}编辑{% else %}新增{% endif %}公告{% endblock %}*/
/* {% block body %}*/
/* */
/* <form id="announcement-create-form" class="form-horizontal" method="post" action="{% if announcement|default(null) %}{{ path('admin_announcement_edit',{id:announcement.id})}}{% else %}{{ path('admin_announcement_create')}}{% endif %}">*/
/* */
/*   <div class="row form-group">*/
/*     <div class="col-md-2 control-label">*/
/*       <label for="title">公告内容</label>*/
/*     </div>*/
/*     <div class="col-md-8 controls">*/
/*       <input type="text" id="title"  name="content" class="form-control" value="{% if announcement|default(null) %}{{announcement.content}}{% endif %}">*/
/*     </div>*/
/*   </div>*/
/* */
/*   <div class="row form-group">*/
/*     <div class="col-md-2 control-label">*/
/*       <label for="url">内容链接</label>*/
/*     </div>*/
/*     <div class="col-md-8 controls">*/
/*       <input type="text" id="url"  name="url" class="form-control" value="{{ announcement.url|default('')}}">*/
/*       <p class="help-block">以"http://"或"https://"开头</p>*/
/*     </div>*/
/*   </div>*/
/* */
/*   <div class="row form-group">*/
/*     <div class="col-md-2 control-label">*/
/*       <label for="startTime">发布时间</label>*/
/*     </div>*/
/*     <div class="col-md-8 controls" style="z-index:2000;">*/
/*       <input type="text" id="startTime"  name="startTime" class="form-control" value="{% if announcement|default(null) %}{{announcement.startTime|date("Y-m-d H:i")}}{% endif %}">*/
/*     </div>*/
/*   </div>*/
/* */
/*   <div class="row form-group">*/
/*     <div class="col-md-2 control-label">*/
/*       <label for="endTime">结束时间</label>*/
/*     </div>*/
/*     <div class="col-md-8 controls" style="z-index:2000;">*/
/*       <input type="text" id="endTime"  name="endTime" class="form-control" value="{% if announcement|default(null) %}{{announcement.endTime|date("Y-m-d H:i")}}{% endif %}">*/
/*     </div>*/
/*   </div>*/
/* */
/*   <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/* */
/* </form>*/
/* {% endblock %}*/
/* */
/* {% block footer %}*/
/*   <button id="announcement-create-btn" data-submiting-text="正在提交" type="submit" class="btn btn-primary pull-right" data-toggle="form-submit" data-target="#announcement-create-form">提交</button>*/
/*   <button type="button" class="btn btn-link pull-right" data-dismiss="modal">取消</button>*/
/*   <script>app.load('announcement/create-modal')</script>*/
/* {% endblock %}*/
