<?php

/* TopxiaWebBundle:Thread:create.html.twig */
class __TwigTemplate_09800cd580ed076706866799ce946cdfaa440017ab331bd65fcb0c6c309dcf52 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["thread"] = ((array_key_exists("thread", $context)) ? (_twig_default_filter((isset($context["thread"]) ? $context["thread"] : null), null)) : (null));
        // line 2
        $context["isUpdate"] = (((isset($context["thread"]) ? $context["thread"] : null)) ? (1) : (0));
        // line 3
        echo "
";
        // line 4
        $this->loadTemplate("TopxiaWebBundle:Thread/Part:thread-crumbs.html.twig", "TopxiaWebBundle:Thread:create.html.twig", 4)->display(array_merge($context, array("target" => (isset($context["target"]) ? $context["target"] : null), "thread" => (isset($context["thread"]) ? $context["thread"] : null), "type" => (isset($context["type"]) ? $context["type"] : null), "isUpdate" => (isset($context["isUpdate"]) ? $context["isUpdate"] : null))));
        // line 5
        echo "
<form id=\"thread-form\" class=\"form-horizontal\" method=\"post\" 
  ";
        // line 7
        if ((isset($context["thread"]) ? $context["thread"] : null)) {
            // line 8
            echo "    action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath(($this->getAttribute((isset($context["target"]) ? $context["target"] : null), "type", array()) . "_thread_update"), array(($this->getAttribute((isset($context["target"]) ? $context["target"] : null), "type", array()) . "Id") => $this->getAttribute((isset($context["target"]) ? $context["target"] : null), "id", array()), "threadId" => $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "id", array()))), "html", null, true);
            echo "\"
  ";
        } else {
            // line 10
            echo "    action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath(($this->getAttribute((isset($context["target"]) ? $context["target"] : null), "type", array()) . "_thread_create"), array(($this->getAttribute((isset($context["target"]) ? $context["target"] : null), "type", array()) . "Id") => $this->getAttribute((isset($context["target"]) ? $context["target"] : null), "id", array()), "type" => (isset($context["type"]) ? $context["type"] : null))), "html", null, true);
            echo "\"
    ";
        }
        // line 12
        echo "  >
  
  ";
        // line 14
        if (((isset($context["type"]) ? $context["type"] : null) == "question")) {
            // line 15
            echo "    <div class=\"form-group\">
      <div class=\"col-md-12\">
        <input type=\"type\" id=\"title\" class=\"form-control\" placeholder=\"问题\" ata-display=\"问题\" name= \"title\" value=\"";
            // line 17
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "title", array()), "")) : ("")), "html", null, true);
            echo "\">
        </div>
    </div>
  ";
        }
        // line 21
        echo "  
  ";
        // line 22
        if (((isset($context["type"]) ? $context["type"] : null) == "discussion")) {
            // line 23
            echo "    <div class=\"form-group\">
        ";
            // line 25
            echo "      <div class=\"col-md-12\">
        <input type=\"type\" id=\"title\" class=\"form-control\" placeholder=\"话题标题\" ata-display=\"话题标题\" name= \"title\" value=\"";
            // line 26
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "title", array()), "")) : ("")), "html", null, true);
            echo "\">
        </div>
    </div>
  ";
        }
        // line 30
        echo "
  ";
        // line 31
        if (((isset($context["type"]) ? $context["type"] : null) == "event")) {
            // line 32
            echo "    <div class=\"form-group\">
        <label for=\"title\" class=\"col-sm-2 control-label\">活动标题</label>
      <div class=\"col-sm-7\">
        <input type=\"type\" id=\"title\" class=\"form-control\" placeholder=\"活动标题\" ata-display=\"标题\" name= \"title\" value=\"";
            // line 35
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "title", array()), "")) : ("")), "html", null, true);
            echo "\">
        </div>
    </div>

    <div class=\"js-event-content\" ";
            // line 39
            if (((isset($context["type"]) ? $context["type"] : null) != "event")) {
                echo "style=\"display:none;\" ";
            }
            echo ">
      <div class=\"form-group\">
        <div class=\"col-md-2 control-label\">
          <label for=\"startTime\">活动时间</label>
        </div>
        <div class=\"col-md-7 controls\">
          <input type=\"text\" id=\"startTime\" class=\"form-control\" placeholder=\"活动开始时间\" name=\"startTime\" value=\"";
            // line 45
            if ((($this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "startTime", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "startTime", array()), null)) : (null))) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "startTime", array()), "Y-m-d H:i"), "html", null, true);
            }
            echo "\">
          </div>
      </div>

      <div class=\"form-group\">
        <div class=\"col-md-2 control-label\">
          <label for=\"location\">活动地点</label>
        </div>
        <div class=\"col-md-7 controls\">
          <input type=\"text\" id=\"location\" class=\"form-control\" placeholder=\"活动地点\" name= \"location\" value=\"";
            // line 54
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "location", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "location", array()), "")) : ("")), "html", null, true);
            echo "\">
          </div>
      </div>

      <div class=\"form-group\">
        <label for=\"inputTitle\" class=\"col-sm-2 control-label\">封面图片</label>
        <div class=\"col-md-7 controls\">
          <input type=\"text\" class=\"form-control\" name=\"actvityPicture\" value=\"";
            // line 61
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "actvityPicture", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "actvityPicture", array()), "")) : ("")), "html", null, true);
            echo "\" placeholder=\"推荐图片大小200*112\">
        </div>
        <div class=\"col-sm-2\">
          <a class=\"btn btn-default btn-block\" id=\"js-activity-uploader\" data-upload-token=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->makeUpoadToken("classroom", "image"), "html", null, true);
            echo "\">浏览...</a>
        </div>
      </div>

      ";
            // line 68
            $context["maxUsers"] = (($this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "maxUsers", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "maxUsers", array()), null)) : (null));
            // line 69
            echo "      <div class=\"form-group\">
        <div class=\"col-md-2 control-label\">
          <label for=\"maxUsers\">最大人数</label>
        </div>
        <div class=\"col-md-7 controls\">
          <input type=\"text\" id=\"maxUsers\" class=\"form-control\" placeholder=\"不限\" name=\"maxUsers\" value=\"";
            // line 74
            if (((isset($context["maxUsers"]) ? $context["maxUsers"] : null) && ((isset($context["maxUsers"]) ? $context["maxUsers"] : null) != 0))) {
                echo twig_escape_filter($this->env, (isset($context["maxUsers"]) ? $context["maxUsers"] : null), "html", null, true);
            }
            echo "\">
          </div>
      </div>
    </div>
  ";
        }
        // line 79
        echo " 
  <div class=\"form-group\">
    ";
        // line 81
        if (((isset($context["type"]) ? $context["type"] : null) == "event")) {
            // line 82
            echo "        <div class=\"controls col-md-2\"></div>
        <div class=\"controls col-md-7\">
          <textarea id=\"thread-content-field\" class=\"form-control\" rows=\"15\" data-display=\"内容\" name=\"content\"
            data-image-upload-url=\"";
            // line 85
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editor_upload", array("token" => $this->env->getExtension('topxia_web_twig')->makeUpoadToken("default"))), "html", null, true);
            echo "\" data-image-download-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editor_download", array("token" => $this->env->getExtension('topxia_web_twig')->makeUpoadToken("course"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "content", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "content", array()), "")) : ("")), "html", null, true);
            echo "</textarea>
        </div>
    ";
        } else {
            // line 88
            echo "        ";
            // line 89
            echo "        <div class=\"controls col-md-12\">
          <textarea id=\"thread-content-field\" class=\"form-control\" rows=\"15\" data-display=\"内容\" name=\"content\"
            data-image-upload-url=\"";
            // line 91
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editor_upload", array("token" => $this->env->getExtension('topxia_web_twig')->makeUpoadToken("default"))), "html", null, true);
            echo "\" data-image-download-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editor_download", array("token" => $this->env->getExtension('topxia_web_twig')->makeUpoadToken("course"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "content", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "content", array()), "")) : ("")), "html", null, true);
            echo "</textarea>
        </div>
    ";
        }
        // line 94
        echo "    
  </div>

  <div class=\"clearfix\">
      ";
        // line 98
        if ((isset($context["thread"]) ? $context["thread"] : null)) {
            // line 99
            echo "        <button type=\"submit\" class=\"btn btn-primary pull-right\">保存</button>
        <a href=\"";
            // line 100
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath(($this->getAttribute((isset($context["target"]) ? $context["target"] : null), "type", array()) . "_thread_show"), array(($this->getAttribute((isset($context["target"]) ? $context["target"] : null), "type", array()) . "Id") => $this->getAttribute((isset($context["target"]) ? $context["target"] : null), "id", array()), "threadId" => $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-link pull-right color-gray\">取消</a>

      ";
        } else {
            // line 103
            echo "        <button type=\"submit\" class=\"btn btn-primary pull-right\">发表</button>
        <a href=\"";
            // line 104
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath(($this->getAttribute((isset($context["target"]) ? $context["target"] : null), "type", array()) . "_threads"), array(($this->getAttribute((isset($context["target"]) ? $context["target"] : null), "type", array()) . "Id") => $this->getAttribute((isset($context["target"]) ? $context["target"] : null), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-link pull-right color-gray\">取消</a>

      ";
        }
        // line 107
        echo "  </div>

  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
  <input type=\"hidden\" name=\"type\" value=\"";
        // line 110
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
        echo "\">
</form>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Thread:create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  236 => 110,  232 => 109,  228 => 107,  222 => 104,  219 => 103,  213 => 100,  210 => 99,  208 => 98,  202 => 94,  192 => 91,  188 => 89,  186 => 88,  176 => 85,  171 => 82,  169 => 81,  165 => 79,  155 => 74,  148 => 69,  146 => 68,  139 => 64,  133 => 61,  123 => 54,  109 => 45,  98 => 39,  91 => 35,  86 => 32,  84 => 31,  81 => 30,  74 => 26,  71 => 25,  68 => 23,  66 => 22,  63 => 21,  56 => 17,  52 => 15,  50 => 14,  46 => 12,  40 => 10,  34 => 8,  32 => 7,  28 => 5,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% set thread = thread|default(null) %}*/
/* {% set isUpdate = thread ? 1 : 0 %}*/
/* */
/* {% include 'TopxiaWebBundle:Thread/Part:thread-crumbs.html.twig' with {target:target, thread:thread,type:type, isUpdate:isUpdate} %}*/
/* */
/* <form id="thread-form" class="form-horizontal" method="post" */
/*   {% if thread %}*/
/*     action="{{ path(target.type ~ '_thread_update', {(target.type ~ 'Id'): target.id, threadId:thread.id}) }}"*/
/*   {% else %}*/
/*     action="{{ path(target.type ~ '_thread_create', {(target.type ~ 'Id'): target.id, type:type}) }}"*/
/*     {% endif %}*/
/*   >*/
/*   */
/*   {% if type =='question' %}*/
/*     <div class="form-group">*/
/*       <div class="col-md-12">*/
/*         <input type="type" id="title" class="form-control" placeholder="问题" ata-display="问题" name= "title" value="{{ thread.title|default('') }}">*/
/*         </div>*/
/*     </div>*/
/*   {% endif %}*/
/*   */
/*   {% if type =='discussion' %}*/
/*     <div class="form-group">*/
/*         {# <label for="title" class="col-sm-2 control-label">话题标题</label> #}*/
/*       <div class="col-md-12">*/
/*         <input type="type" id="title" class="form-control" placeholder="话题标题" ata-display="话题标题" name= "title" value="{{ thread.title|default('') }}">*/
/*         </div>*/
/*     </div>*/
/*   {% endif %}*/
/* */
/*   {% if type == 'event' %}*/
/*     <div class="form-group">*/
/*         <label for="title" class="col-sm-2 control-label">活动标题</label>*/
/*       <div class="col-sm-7">*/
/*         <input type="type" id="title" class="form-control" placeholder="活动标题" ata-display="标题" name= "title" value="{{ thread.title|default('') }}">*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="js-event-content" {% if type != 'event' %}style="display:none;" {% endif %}>*/
/*       <div class="form-group">*/
/*         <div class="col-md-2 control-label">*/
/*           <label for="startTime">活动时间</label>*/
/*         </div>*/
/*         <div class="col-md-7 controls">*/
/*           <input type="text" id="startTime" class="form-control" placeholder="活动开始时间" name="startTime" value="{% if thread.startTime|default(null) %}{{ thread.startTime|date('Y-m-d H:i') }}{% endif %}">*/
/*           </div>*/
/*       </div>*/
/* */
/*       <div class="form-group">*/
/*         <div class="col-md-2 control-label">*/
/*           <label for="location">活动地点</label>*/
/*         </div>*/
/*         <div class="col-md-7 controls">*/
/*           <input type="text" id="location" class="form-control" placeholder="活动地点" name= "location" value="{{ thread.location|default('') }}">*/
/*           </div>*/
/*       </div>*/
/* */
/*       <div class="form-group">*/
/*         <label for="inputTitle" class="col-sm-2 control-label">封面图片</label>*/
/*         <div class="col-md-7 controls">*/
/*           <input type="text" class="form-control" name="actvityPicture" value="{{ thread.actvityPicture|default('') }}" placeholder="推荐图片大小200*112">*/
/*         </div>*/
/*         <div class="col-sm-2">*/
/*           <a class="btn btn-default btn-block" id="js-activity-uploader" data-upload-token="{{ upload_token('classroom', 'image') }}">浏览...</a>*/
/*         </div>*/
/*       </div>*/
/* */
/*       {% set maxUsers = thread.maxUsers|default(null) %}*/
/*       <div class="form-group">*/
/*         <div class="col-md-2 control-label">*/
/*           <label for="maxUsers">最大人数</label>*/
/*         </div>*/
/*         <div class="col-md-7 controls">*/
/*           <input type="text" id="maxUsers" class="form-control" placeholder="不限" name="maxUsers" value="{% if maxUsers and maxUsers != 0 %}{{ maxUsers }}{% endif %}">*/
/*           </div>*/
/*       </div>*/
/*     </div>*/
/*   {% endif %}*/
/*  */
/*   <div class="form-group">*/
/*     {% if type == 'event' %}*/
/*         <div class="controls col-md-2"></div>*/
/*         <div class="controls col-md-7">*/
/*           <textarea id="thread-content-field" class="form-control" rows="15" data-display="内容" name="content"*/
/*             data-image-upload-url="{{ path('editor_upload', {token:upload_token('default')}) }}" data-image-download-url="{{ path('editor_download', {token:upload_token('course')}) }}">{{ thread.content|default('') }}</textarea>*/
/*         </div>*/
/*     {% else %}*/
/*         {# <div class="controls col-md-2"></div> #}*/
/*         <div class="controls col-md-12">*/
/*           <textarea id="thread-content-field" class="form-control" rows="15" data-display="内容" name="content"*/
/*             data-image-upload-url="{{ path('editor_upload', {token:upload_token('default')}) }}" data-image-download-url="{{ path('editor_download', {token:upload_token('course')}) }}">{{ thread.content|default('') }}</textarea>*/
/*         </div>*/
/*     {% endif %}*/
/*     */
/*   </div>*/
/* */
/*   <div class="clearfix">*/
/*       {% if thread %}*/
/*         <button type="submit" class="btn btn-primary pull-right">保存</button>*/
/*         <a href="{{ path(target.type ~ '_thread_show', {(target.type ~ 'Id'): target.id, threadId:thread.id}) }}" class="btn btn-link pull-right color-gray">取消</a>*/
/* */
/*       {% else %}*/
/*         <button type="submit" class="btn btn-primary pull-right">发表</button>*/
/*         <a href="{{ path(target.type ~ '_threads', {(target.type ~ 'Id'): target.id}) }}" class="btn btn-link pull-right color-gray">取消</a>*/
/* */
/*       {% endif  %}*/
/*   </div>*/
/* */
/*   <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/*   <input type="hidden" name="type" value="{{ type }}">*/
/* </form>*/
/* */
