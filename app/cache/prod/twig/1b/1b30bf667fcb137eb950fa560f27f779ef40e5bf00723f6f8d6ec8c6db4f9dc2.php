<?php

/* TopxiaWebBundle:Sms:sms-send.html.twig */
class __TwigTemplate_1d00e304c59c069157f57eeabb2b4309c91e6ed6fbaab06ff8b8e3ab875976ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "TopxiaWebBundle:Sms:sms-send.html.twig", 1);
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
        echo "短信推送";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "
<lable id=\"smsSend-form\" class=\"form-horizontal\"  data-url = \"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("generate_short_link", array("url" => (isset($context["url"]) ? $context["url"] : null))), "html", null, true);
        echo "\" style=\"display:none;\">
  <div class=\"row form-group\">
    <div class=\"col-md-3 control-label\">
      <label for=\"title\">发送对象:</label>
    </div>
    <div class=\"col-md-7 controls\">
      <p class=\"help-block\">";
        // line 14
        if ((((isset($context["targetType"]) ? $context["targetType"] : null) == "course") && $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "parentId", array()))) {
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
            echo "内";
        } else {
            echo "所有";
        }
        echo "用户</p>
    </div>
  </div>

  <div class=\"row form-group\">
    <div class=\"col-md-3 control-label\">
      <label for=\"title\">预计发送量:</label>
    </div>
    <div class=\"col-md-7 controls\">
      <p class=\"help-block\">";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["count"]) ? $context["count"] : null), "html", null, true);
        echo "条</p>
    </div>
  </div>

  <div class=\"row form-group\">
    <div class=\"col-md-3 control-label\">
      <label for=\"startTime\">发送内容:</label>
    </div>
    <div style=\"z-index:2000;\">
      <p class=\"help-block\">
        [";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("cloud_sms.sms_school_name"), "html", null, true);
        echo "]";
        if (((isset($context["targetType"]) ? $context["targetType"] : null) == "classroom")) {
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
        } else {
            echo "课程";
        }
        echo "：《";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "title", array()), "html", null, true);
        echo "》现已开始报名!<a href ='";
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "' target=\"_blank\">链接地址</a>
      </p>
    </div>
  </div>
</lable>

<form id=\"smsSend-ready\" class=\"form-horizontal\">
  <input type=\"hidden\" name=\"sms_open\" value=";
        // line 40
        echo twig_escape_filter($this->env, (isset($context["isOpen"]) ? $context["isOpen"] : null), "html", null, true);
        echo ">
  <div class=\"row form-group\">
    <div class=\"col-md-8 control-label\">
      <p>";
        // line 43
        if ((isset($context["isOpen"]) ? $context["isOpen"] : null)) {
            echo "短信发送准备中...";
        } else {
            echo "请联系超级管理员，开启云短信相关设置。";
        }
        echo "</p>
    </div> 
  </div>
</form>
<div id=\"smsSend-progress\" class=\"package-update-progress\" style=\"display:none;\">
  <div class=\"progress progress-striped active\">
    <div class=\"progress-bar progress-bar-success\" style=\"width: 0%\"></div>
  </div>
  <div class=\"text-success progress-text\"></div>
</div>

";
    }

    // line 56
    public function block_footer($context, array $blocks = array())
    {
        // line 57
        echo "  <button id = 'begin-smsSend' data-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("publish_sms_send", array("targetType" => (isset($context["targetType"]) ? $context["targetType"] : null), "id" => $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id", array()), "count" => (isset($context["count"]) ? $context["count"] : null), "index" => 0, "url" => (isset($context["url"]) ? $context["url"] : null))), "html", null, true);
        echo "\" data-submiting-text=\"正在提交\" class=\"btn btn-primary pull-right\" data-toggle=\"form-submit\" data-target=\"#smsSend-form\" style=\"display:none;\">发送</button>
  <strong class=\"text text-danger\" id=\"updating-hint\" style=\"display:none;\">正在发送，请不要关闭当前窗口...</strong>
  <button id = 'cancle-smsSend'type=\"button\" class=\"btn btn-link pull-right\" data-dismiss=\"modal\" style=\"display:none;\">取消</button>
  <button id=\"finish-smsSend\" data-loading-text=\"正在发送, 请稍等...\" class=\"btn btn-primary\" style=\"display:none\">发送完成</button>
  <script>app.load('/../../../../topxiaweb/js/controller/sms/sms-send')</script>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Sms:sms-send.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 57,  130 => 56,  110 => 43,  104 => 40,  84 => 33,  71 => 23,  54 => 14,  45 => 8,  42 => 7,  39 => 6,  33 => 5,  29 => 1,  27 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::bootstrap-modal-layout.html.twig' %}*/
/* */
/* {% set modalSize = 'large' %}*/
/* */
/* {% block title %}短信推送{% endblock %}*/
/* {% block body %}*/
/* */
/* <lable id="smsSend-form" class="form-horizontal"  data-url = "{{ path('generate_short_link',{url:url})}}" style="display:none;">*/
/*   <div class="row form-group">*/
/*     <div class="col-md-3 control-label">*/
/*       <label for="title">发送对象:</label>*/
/*     </div>*/
/*     <div class="col-md-7 controls">*/
/*       <p class="help-block">{% if targetType == 'course' and item.parentId %}{{setting("classroom.name")|default("班级")}}内{% else %}所有{% endif %}用户</p>*/
/*     </div>*/
/*   </div>*/
/* */
/*   <div class="row form-group">*/
/*     <div class="col-md-3 control-label">*/
/*       <label for="title">预计发送量:</label>*/
/*     </div>*/
/*     <div class="col-md-7 controls">*/
/*       <p class="help-block">{{count}}条</p>*/
/*     </div>*/
/*   </div>*/
/* */
/*   <div class="row form-group">*/
/*     <div class="col-md-3 control-label">*/
/*       <label for="startTime">发送内容:</label>*/
/*     </div>*/
/*     <div style="z-index:2000;">*/
/*       <p class="help-block">*/
/*         [{{setting('cloud_sms.sms_school_name')}}]{% if targetType == 'classroom' %}{{ setting('classroom.name')|default("班级") }}{% else %}课程{% endif %}：《{{item.title}}》现已开始报名!<a href ='{{url}}' target="_blank">链接地址</a>*/
/*       </p>*/
/*     </div>*/
/*   </div>*/
/* </lable>*/
/* */
/* <form id="smsSend-ready" class="form-horizontal">*/
/*   <input type="hidden" name="sms_open" value={{isOpen}}>*/
/*   <div class="row form-group">*/
/*     <div class="col-md-8 control-label">*/
/*       <p>{% if isOpen %}短信发送准备中...{% else %}请联系超级管理员，开启云短信相关设置。{% endif %}</p>*/
/*     </div> */
/*   </div>*/
/* </form>*/
/* <div id="smsSend-progress" class="package-update-progress" style="display:none;">*/
/*   <div class="progress progress-striped active">*/
/*     <div class="progress-bar progress-bar-success" style="width: 0%"></div>*/
/*   </div>*/
/*   <div class="text-success progress-text"></div>*/
/* </div>*/
/* */
/* {% endblock %}*/
/* */
/* {% block footer %}*/
/*   <button id = 'begin-smsSend' data-url="{{ path('publish_sms_send',{targetType:targetType,id:item.id,count:count,index:0,url:url}) }}" data-submiting-text="正在提交" class="btn btn-primary pull-right" data-toggle="form-submit" data-target="#smsSend-form" style="display:none;">发送</button>*/
/*   <strong class="text text-danger" id="updating-hint" style="display:none;">正在发送，请不要关闭当前窗口...</strong>*/
/*   <button id = 'cancle-smsSend'type="button" class="btn btn-link pull-right" data-dismiss="modal" style="display:none;">取消</button>*/
/*   <button id="finish-smsSend" data-loading-text="正在发送, 请稍等..." class="btn btn-primary" style="display:none">发送完成</button>*/
/*   <script>app.load('/../../../../topxiaweb/js/controller/sms/sms-send')</script>*/
/* {% endblock %}*/
