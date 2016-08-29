<?php

/* TopxiaAdminBundle:Content:content-modal.html.twig */
class __TwigTemplate_f5cf34c6253e85717e2bc2bf861de9977d6e683124bfde70408708500ef84382 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "TopxiaAdminBundle:Content:content-modal.html.twig", 1);
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
        $context["modal_class"] = "modal-lg";
        // line 142
        $context["hideFooter"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["type"]) ? $context["type"] : null), "name", array()), "html", null, true);
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "
";
        // line 9
        $context["content"] = ((array_key_exists("content", $context)) ? (_twig_default_filter((isset($context["content"]) ? $context["content"] : null), null)) : (null));
        // line 10
        echo "
<form class=\"two-col-form\" id=\"content-form\" method=\"post\" enctype=\"multipart/form-data\"
  ";
        // line 12
        if ((isset($context["content"]) ? $context["content"] : null)) {
            // line 13
            echo "    action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_content_edit", array("id" => $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "id", array()))), "html", null, true);
            echo "\"
  ";
        } else {
            // line 15
            echo "    action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_content_create", array("type" => $this->getAttribute((isset($context["type"]) ? $context["type"] : null), "alias", array()))), "html", null, true);
            echo "\"
  ";
        }
        // line 17
        echo "  >
  <div class=\"row\">
    <div class=\"col-md-8 two-col-main\">
      ";
        // line 20
        if (twig_in_filter("title", $this->getAttribute((isset($context["type"]) ? $context["type"] : null), "basicFields", array()))) {
            // line 21
            echo "        <div class=\"form-group\">
          <label for=\"content-title-field\" class=\"control-label\">标题</label>
          <div class=\"controls\">
            <input class=\"form-control\" id=\"content-title-field\" type=\"text\" name=\"title\" value=\"";
            // line 24
            echo $this->env->getExtension('topxia_html_twig')->fieldValue((isset($context["content"]) ? $context["content"] : null), "title");
            echo "\">
          </div>
        </div>
      ";
        }
        // line 28
        echo "
      <div class=\"form-group\">
        <label for=\"editor-field\" class=\"control-label\">编辑器类型</label>
        <div class=\"controls radios\">
          <label><input type=\"radio\" name=\"editor\" value=\"richeditor\" 
            ";
        // line 33
        if (twig_test_empty((isset($context["content"]) ? $context["content"] : null))) {
            // line 34
            echo "             checked=\"checked\" 
            ";
        } elseif (($this->getAttribute(        // line 35
(isset($context["content"]) ? $context["content"] : null), "editor", array()) == "richeditor")) {
            // line 36
            echo "             checked=\"checked\"
            ";
        }
        // line 37
        echo ">
            可视化编辑器</label>
        <label><input type=\"radio\" name=\"editor\" value=\"none\"
          ";
        // line 40
        if (((isset($context["content"]) ? $context["content"] : null) && ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "editor", array()) == "none"))) {
            echo " checked=\"checked\" ";
        }
        // line 41
        echo "          >HTML编辑器</label>
        </div>
      </div>

      ";
        // line 45
        if (twig_in_filter("body", $this->getAttribute((isset($context["type"]) ? $context["type"] : null), "basicFields", array()))) {
            // line 46
            echo "        <label for=\"content-body-field\" class=\"control-label\">正文</label>

        <div class=\"form-group\" 
        ";
            // line 49
            if (((isset($context["content"]) ? $context["content"] : null) && ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "editor", array()) == "none"))) {
                // line 50
                echo "          style=\"display:none\"
        ";
            }
            // line 52
            echo "        >
          <div class=\"controls\">
            <textarea class=\"form-control\" id=\"richeditor-body-field\" rows=\"16\" name=\"richeditor-body\"
              data-image-upload-url=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editor_upload", array("token" => $this->env->getExtension('topxia_web_twig')->makeUpoadToken("default"))), "html", null, true);
            echo "\"
              data-flash-upload-url=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editor_upload", array("token" => $this->env->getExtension('topxia_web_twig')->makeUpoadToken("default", "flash"))), "html", null, true);
            echo "\"
            >";
            // line 57
            echo $this->env->getExtension('topxia_html_twig')->fieldValue((isset($context["content"]) ? $context["content"] : null), "body");
            echo "</textarea>
          </div>
        </div>

        <div class=\"form-group\" 
        ";
            // line 62
            if (twig_test_empty((isset($context["content"]) ? $context["content"] : null))) {
                // line 63
                echo "               style=\"display:none\" 
              ";
            } elseif (($this->getAttribute(            // line 64
(isset($context["content"]) ? $context["content"] : null), "editor", array()) == "richeditor")) {
                // line 65
                echo "               style=\"display:none\"
              ";
            }
            // line 66
            echo ">
          <div class=\"controls\">
            <textarea class=\"form-control\" id=\"noneeditor-body-field\" rows=\"16\" name=\"noneeditor-body\">";
            // line 68
            echo $this->env->getExtension('topxia_html_twig')->fieldValue((isset($context["content"]) ? $context["content"] : null), "body");
            echo "</textarea>
          </div>
        </div> 
      ";
        }
        // line 72
        echo "
      ";
        // line 73
        if ($this->getAttribute((isset($context["type"]) ? $context["type"] : null), "extendedFields", array())) {
            // line 74
            echo "        ";
            $this->loadTemplate((("TopxiaAdminBundle:Content:" . $this->getAttribute((isset($context["type"]) ? $context["type"] : null), "alias", array())) . "-extended-fields.html.twig"), "TopxiaAdminBundle:Content:content-modal.html.twig", 74)->display($context);
            // line 75
            echo "      ";
        }
        // line 76
        echo "    </div>
    <div class=\"col-md-4 two-col-side\">
      ";
        // line 78
        if (twig_in_filter("alias", $this->getAttribute((isset($context["type"]) ? $context["type"] : null), "basicFields", array()))) {
            // line 79
            echo "        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">URL路径</div>
          <div class=\"panel-body\">
            <div class=\"form-group\">
              <div class=\"controls\">
                <input class=\"form-control\" type=\"text\" name=\"alias\" value=\"";
            // line 84
            echo $this->env->getExtension('topxia_html_twig')->fieldValue((isset($context["content"]) ? $context["content"] : null), "alias");
            echo "\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_content_alias_check", array("that" => (($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "alias", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "alias", array()), "")) : ("")))), "html", null, true);
            echo "\">
              </div>
            </div>
          </div>
        </div>
      ";
        }
        // line 90
        echo "
      ";
        // line 91
        if (twig_in_filter("categoryId", $this->getAttribute((isset($context["type"]) ? $context["type"] : null), "basicFields", array()))) {
            // line 92
            echo "        <div class=\"panel\">
          <div class=\"panel-heading\">分类</div>
          <select name=\"categoryId\">
            ";
            // line 95
            echo $this->env->getExtension('topxia_html_twig')->selectOptions($this->env->getExtension('topxia_web_twig')->getCategoryChoices("default"), $this->env->getExtension('topxia_html_twig')->fieldValue((isset($context["content"]) ? $context["content"] : null), "categoryId"), "请选择分类");
            echo "
          </select>
        </div>
      ";
        }
        // line 99
        echo "
      ";
        // line 100
        if (twig_in_filter("tagIds", $this->getAttribute((isset($context["type"]) ? $context["type"] : null), "basicFields", array()))) {
            // line 101
            echo "        <div class=\"panel\">
          <div class=\"panel-heading\">标签</div>
          <div class=\"form-group\">
            <div class=\"controls\" style=\"width:100%;\">
              <input class=\"width-full\" id=\"content-tags-field\" type=\"text\" name=\"tags\" value=\"";
            // line 105
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->tagsJoinFilter($this->env->getExtension('topxia_html_twig')->fieldValue((isset($context["content"]) ? $context["content"] : null), "tagIds")), "html", null, true);
            echo "\">
            </div>
          </div>
        </div>
      ";
        }
        // line 110
        echo "
      ";
        // line 111
        if (twig_in_filter("template", $this->getAttribute((isset($context["type"]) ? $context["type"] : null), "basicFields", array()))) {
            // line 112
            echo "        <div class=\"panel panel-default\" >
          <div class=\"panel-heading\">模版</div>
          <div class=\"panel-body\">
            ";
            // line 115
            $context["templates"] = array("default" => "默认模版", "blank" => "无导航栏");
            // line 116
            echo "
            <select class=\"form-control\" name=\"template\">
              ";
            // line 118
            echo $this->env->getExtension('topxia_html_twig')->selectOptions((isset($context["templates"]) ? $context["templates"] : null), $this->env->getExtension('topxia_html_twig')->fieldValue((isset($context["content"]) ? $context["content"] : null), "template"));
            echo "
            </select>
          </div>
        </div>
      ";
        }
        // line 122
        echo " 

      <input type=\"hidden\" name=\"publishedTime\" value=\"";
        // line 124
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->env->getExtension('topxia_html_twig')->fieldValue((isset($context["content"]) ? $context["content"] : null), "publishedTime", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "server", array()), "get", array(0 => "REQUEST_TIME"), "method")), "Y-m-d H:i:s"), "html", null, true);
        echo "\">


    </div>
  </div>
  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
</form>

<script> app.load('content/content-modal') </script>

";
    }

    // line 136
    public function block_footer($context, array $blocks = array())
    {
        // line 137
        echo "
    <button type=\"button\" class=\"btn btn-link\" data-dismiss=\"modal\">取消</button>
    <button id=\"content-save-btn\" type=\"submit\" class=\"btn btn-primary\" data-toggle=\"form-submit\" data-target=\"#content-form\" data-loading-text=\"正在保存...\">保存</button>
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Content:content-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  295 => 137,  292 => 136,  282 => 129,  274 => 124,  270 => 122,  262 => 118,  258 => 116,  256 => 115,  251 => 112,  249 => 111,  246 => 110,  238 => 105,  232 => 101,  230 => 100,  227 => 99,  220 => 95,  215 => 92,  213 => 91,  210 => 90,  199 => 84,  192 => 79,  190 => 78,  186 => 76,  183 => 75,  180 => 74,  178 => 73,  175 => 72,  168 => 68,  164 => 66,  160 => 65,  158 => 64,  155 => 63,  153 => 62,  145 => 57,  141 => 56,  137 => 55,  132 => 52,  128 => 50,  126 => 49,  121 => 46,  119 => 45,  113 => 41,  109 => 40,  104 => 37,  100 => 36,  98 => 35,  95 => 34,  93 => 33,  86 => 28,  79 => 24,  74 => 21,  72 => 20,  67 => 17,  61 => 15,  55 => 13,  53 => 12,  49 => 10,  47 => 9,  44 => 8,  41 => 7,  35 => 6,  31 => 1,  29 => 142,  27 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::bootstrap-modal-layout.html.twig' %}*/
/* */
/* {% set modal_class = 'modal-lg' %}*/
/* */
/* */
/* {% block title %}{{ type.name }}{% endblock %}*/
/* {% block body %}*/
/* */
/* {% set content = content|default(null) %}*/
/* */
/* <form class="two-col-form" id="content-form" method="post" enctype="multipart/form-data"*/
/*   {% if content %}*/
/*     action="{{ path('admin_content_edit', {id:content.id}) }}"*/
/*   {% else %}*/
/*     action="{{ path('admin_content_create', {type:type.alias}) }}"*/
/*   {% endif %}*/
/*   >*/
/*   <div class="row">*/
/*     <div class="col-md-8 two-col-main">*/
/*       {% if 'title' in type.basicFields %}*/
/*         <div class="form-group">*/
/*           <label for="content-title-field" class="control-label">标题</label>*/
/*           <div class="controls">*/
/*             <input class="form-control" id="content-title-field" type="text" name="title" value="{{ field_value(content, 'title') }}">*/
/*           </div>*/
/*         </div>*/
/*       {% endif %}*/
/* */
/*       <div class="form-group">*/
/*         <label for="editor-field" class="control-label">编辑器类型</label>*/
/*         <div class="controls radios">*/
/*           <label><input type="radio" name="editor" value="richeditor" */
/*             {% if content is empty %}*/
/*              checked="checked" */
/*             {% elseif content.editor == 'richeditor'%}*/
/*              checked="checked"*/
/*             {% endif %}>*/
/*             可视化编辑器</label>*/
/*         <label><input type="radio" name="editor" value="none"*/
/*           {% if content and content.editor == 'none' %} checked="checked" {% endif %}*/
/*           >HTML编辑器</label>*/
/*         </div>*/
/*       </div>*/
/* */
/*       {% if 'body' in type.basicFields %}*/
/*         <label for="content-body-field" class="control-label">正文</label>*/
/* */
/*         <div class="form-group" */
/*         {% if content and content.editor == 'none' %}*/
/*           style="display:none"*/
/*         {% endif %}*/
/*         >*/
/*           <div class="controls">*/
/*             <textarea class="form-control" id="richeditor-body-field" rows="16" name="richeditor-body"*/
/*               data-image-upload-url="{{ path('editor_upload', {token:upload_token('default')}) }}"*/
/*               data-flash-upload-url="{{ path('editor_upload', {token:upload_token('default', 'flash')}) }}"*/
/*             >{{ field_value(content, 'body') }}</textarea>*/
/*           </div>*/
/*         </div>*/
/* */
/*         <div class="form-group" */
/*         {% if content is empty %}*/
/*                style="display:none" */
/*               {% elseif content.editor == 'richeditor'%}*/
/*                style="display:none"*/
/*               {% endif %}>*/
/*           <div class="controls">*/
/*             <textarea class="form-control" id="noneeditor-body-field" rows="16" name="noneeditor-body">{{ field_value(content, 'body') }}</textarea>*/
/*           </div>*/
/*         </div> */
/*       {% endif %}*/
/* */
/*       {% if type.extendedFields %}*/
/*         {% include 'TopxiaAdminBundle:Content:' ~ type.alias ~ '-extended-fields.html.twig' %}*/
/*       {% endif %}*/
/*     </div>*/
/*     <div class="col-md-4 two-col-side">*/
/*       {% if 'alias' in type.basicFields %}*/
/*         <div class="panel panel-default">*/
/*           <div class="panel-heading">URL路径</div>*/
/*           <div class="panel-body">*/
/*             <div class="form-group">*/
/*               <div class="controls">*/
/*                 <input class="form-control" type="text" name="alias" value="{{ field_value(content, 'alias') }}" data-url="{{ path('admin_content_alias_check', {that:content.alias|default('')}) }}">*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*       {% endif %}*/
/* */
/*       {% if 'categoryId' in type.basicFields %}*/
/*         <div class="panel">*/
/*           <div class="panel-heading">分类</div>*/
/*           <select name="categoryId">*/
/*             {{ select_options(category_choices('default'), field_value(content, 'categoryId'), '请选择分类') }}*/
/*           </select>*/
/*         </div>*/
/*       {% endif %}*/
/* */
/*       {% if 'tagIds' in type.basicFields %}*/
/*         <div class="panel">*/
/*           <div class="panel-heading">标签</div>*/
/*           <div class="form-group">*/
/*             <div class="controls" style="width:100%;">*/
/*               <input class="width-full" id="content-tags-field" type="text" name="tags" value="{{ field_value(content, 'tagIds')|tags_join }}">*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*       {% endif %}*/
/* */
/*       {% if 'template' in type.basicFields %}*/
/*         <div class="panel panel-default" >*/
/*           <div class="panel-heading">模版</div>*/
/*           <div class="panel-body">*/
/*             {% set templates = {'default': '默认模版','blank':'无导航栏'} %}*/
/* */
/*             <select class="form-control" name="template">*/
/*               {{ select_options(templates, field_value(content, 'template')) }}*/
/*             </select>*/
/*           </div>*/
/*         </div>*/
/*       {% endif %} */
/* */
/*       <input type="hidden" name="publishedTime" value="{{ field_value(content, 'publishedTime', app.request.server.get('REQUEST_TIME'))|date('Y-m-d H:i:s') }}">*/
/* */
/* */
/*     </div>*/
/*   </div>*/
/*   <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/* </form>*/
/* */
/* <script> app.load('content/content-modal') </script>*/
/* */
/* {% endblock %}*/
/* */
/* {% block footer %}*/
/* */
/*     <button type="button" class="btn btn-link" data-dismiss="modal">取消</button>*/
/*     <button id="content-save-btn" type="submit" class="btn btn-primary" data-toggle="form-submit" data-target="#content-form" data-loading-text="正在保存...">保存</button>*/
/* {% endblock %}*/
/* */
/* {% set hideFooter = true %}*/
/* */
