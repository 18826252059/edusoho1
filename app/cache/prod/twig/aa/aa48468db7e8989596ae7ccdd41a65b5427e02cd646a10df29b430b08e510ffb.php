<?php

/* TopxiaAdminBundle:Notification:notification-modal.html.twig */
class __TwigTemplate_650f21214685fdccd7279e97faa34effbdf66752b33aa1fec9c03da6962d4cdc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:Notification:notification-modal.html.twig", 1);
        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
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
        $context["menu"] = "admin_batch_notification_create";
        // line 5
        $context["script_controller"] = "batchnotification/notification-modal";
        // line 7
        $context["batchnotification"] = ((array_key_exists("batchnotification", $context)) ? (_twig_default_filter((isset($context["batchnotification"]) ? $context["batchnotification"] : null), null)) : (null));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_page_title($context, array $blocks = array())
    {
        echo "全站站内通知";
    }

    // line 11
    public function block_main($context, array $blocks = array())
    {
        // line 12
        echo "
<style>
  #notification-form .popover {
  \tmax-width: 400px;
  \twidth: 400px;
  }\t

</style>


<form class=\"two-col-form\" id=\"notification-form\" method=\"post\" enctype=\"multipart/form-data\"
\t";
        // line 23
        if ((isset($context["batchnotification"]) ? $context["batchnotification"] : null)) {
            // line 24
            echo "\t\taction=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_batch_notification_edit", array("id" => $this->getAttribute((isset($context["batchnotification"]) ? $context["batchnotification"] : null), "id", array()))), "html", null, true);
            echo "\"
\t";
        } else {
            // line 26
            echo "\t\taction=\"";
            echo $this->env->getExtension('routing')->getPath("admin_batch_notification_create");
            echo "\"
\t";
        }
        // line 28
        echo "\t\t>
\t<div class=\"row\">
\t\t<div class=\"col-md-8\">
\t\t\t<div class=\"form-group\">
\t\t\t  \t<label for=\"article-title-field\" class=\"control-label\">通知标题</label>
\t\t\t  \t<div class=\"controls\">
\t\t\t  \t\t<input class=\"form-control\" id=\"article-title-field\" type=\"text\" name=\"title\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["batchnotification"]) ? $context["batchnotification"] : null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["batchnotification"]) ? $context["batchnotification"] : null), "title", array()), "")) : ("")), "html", null, true);
        echo "\">
\t\t\t  \t</div>
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t\t<label for=\"richeditor-body-field\" class=\"control-label\">正文</label>
\t\t\t\t<div class=\"controls\">
\t\t\t\t\t<textarea class=\"form-control\" id=\"richeditor-body-field\" rows=\"16\" name=\"content\"
\t\t\t\t\t  data-image-upload-url=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editor_upload", array("token" => $this->env->getExtension('topxia_web_twig')->makeUpoadToken("default"))), "html", null, true);
        echo "\"
\t\t\t\t\t  data-flash-upload-url=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editor_upload", array("token" => $this->env->getExtension('topxia_web_twig')->makeUpoadToken("default", "flash"))), "html", null, true);
        echo "\"
\t\t\t\t\t >";
        // line 43
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["batchnotification"]) ? $context["batchnotification"] : null), "content", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["batchnotification"]) ? $context["batchnotification"] : null), "content", array()), "")) : ("")), "html", null, true);
        echo "</textarea>
\t\t\t\t</div>
\t\t\t\t<div class=\"controls\">
\t\t\t  \t\t<input class=\"form-control hidden\" id=\"hidden\" type=\"text\" name=\"mode\" value=\"\">
\t\t\t  \t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"row\">
\t\t<div class=\"col-md-12\">
\t\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
\t    <button id=\"notification-operate-save\" class=\"btn btn-primary\" data-toggle=\"form-submit\" data-loading-text=\"正在保存...\">保存</button>
\t    <button id=\"notification-operate-publish\" class=\"btn btn-primary\" data-toggle=\"form-submit\" data-loading-text=\"正在发布...\">直接发布</button>
\t\t\t<a class=\"btn btn-link\" href=\"";
        // line 56
        echo $this->env->getExtension('routing')->getPath("admin_batch_notification");
        echo "\">返回</a>
\t\t</div>\t\t
\t</div>
</form>

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Notification:notification-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 56,  111 => 53,  98 => 43,  94 => 42,  90 => 41,  80 => 34,  72 => 28,  66 => 26,  60 => 24,  58 => 23,  45 => 12,  42 => 11,  36 => 9,  32 => 1,  30 => 7,  28 => 5,  26 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaAdminBundle::layout.html.twig' %}*/
/* */
/* {% set menu = 'admin_batch_notification_create' %}*/
/* */
/* {% set script_controller = 'batchnotification/notification-modal' %}*/
/* */
/* {% set batchnotification = batchnotification|default(null) %}*/
/* */
/* {% block page_title %}全站站内通知{% endblock %}*/
/* */
/* {% block main %}*/
/* */
/* <style>*/
/*   #notification-form .popover {*/
/*   	max-width: 400px;*/
/*   	width: 400px;*/
/*   }	*/
/* */
/* </style>*/
/* */
/* */
/* <form class="two-col-form" id="notification-form" method="post" enctype="multipart/form-data"*/
/* 	{% if batchnotification %}*/
/* 		action="{{ path('admin_batch_notification_edit', {id:batchnotification.id}) }}"*/
/* 	{% else %}*/
/* 		action="{{ path('admin_batch_notification_create') }}"*/
/* 	{% endif %}*/
/* 		>*/
/* 	<div class="row">*/
/* 		<div class="col-md-8">*/
/* 			<div class="form-group">*/
/* 			  	<label for="article-title-field" class="control-label">通知标题</label>*/
/* 			  	<div class="controls">*/
/* 			  		<input class="form-control" id="article-title-field" type="text" name="title" value="{{ batchnotification.title|default('') }}">*/
/* 			  	</div>*/
/* 			</div>*/
/* 			<div class="form-group">*/
/* 				<label for="richeditor-body-field" class="control-label">正文</label>*/
/* 				<div class="controls">*/
/* 					<textarea class="form-control" id="richeditor-body-field" rows="16" name="content"*/
/* 					  data-image-upload-url="{{ path('editor_upload', {token:upload_token('default')}) }}"*/
/* 					  data-flash-upload-url="{{ path('editor_upload', {token:upload_token('default', 'flash')}) }}"*/
/* 					 >{{ batchnotification.content|default('') }}</textarea>*/
/* 				</div>*/
/* 				<div class="controls">*/
/* 			  		<input class="form-control hidden" id="hidden" type="text" name="mode" value="">*/
/* 			  	</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="row">*/
/* 		<div class="col-md-12">*/
/* 			<input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/* 	    <button id="notification-operate-save" class="btn btn-primary" data-toggle="form-submit" data-loading-text="正在保存...">保存</button>*/
/* 	    <button id="notification-operate-publish" class="btn btn-primary" data-toggle="form-submit" data-loading-text="正在发布...">直接发布</button>*/
/* 			<a class="btn btn-link" href="{{ path('admin_batch_notification') }}">返回</a>*/
/* 		</div>		*/
/* 	</div>*/
/* </form>*/
/* */
/* {% endblock %}*/
/* */
