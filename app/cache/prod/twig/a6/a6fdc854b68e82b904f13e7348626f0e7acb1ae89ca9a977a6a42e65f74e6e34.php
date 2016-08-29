<?php

/* TopxiaAdminBundle:Block:block-update-modal.html.twig */
class __TwigTemplate_81783443a7b00736085a64e6dd12467a026d3ffa3b82eaad17c91befa2b065f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "TopxiaAdminBundle:Block:block-update-modal.html.twig", 1);
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
        // line 2
        $context["block"] = ((array_key_exists("block", $context)) ? (_twig_default_filter((isset($context["block"]) ? $context["block"] : null), null)) : (null));
        // line 6
        $context["modal_class"] = "modal-lg";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "编辑内容";
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        // line 9
        echo "

<h5>编辑区名称：";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : null), "title", array()), "html", null, true);
        echo "</h5>

<form id=\"block-form\"  ";
        // line 13
        if (($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "mode", array()) == "template")) {
            echo "class=\"form-horizontal\" ";
        }
        echo " action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_block_update", array("block" => $this->getAttribute((isset($context["block"]) ? $context["block"] : null), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
  ";
        // line 14
        if (($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "mode", array()) == "html")) {
            // line 15
            echo "  <div class=\"form-group\">
      <div class=\"controls\">
        <textarea class=\"form-control\" id=\"blockContent\" rows=\"10\" name=\"content\" data-role=\"editor-field\" style=\"z-index:1000;\">";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : null), "content", array()), "html", null, true);
            echo "</textarea>
      </div>
  </div>
  ";
        } else {
            // line 21
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["templateItems"]) ? $context["templateItems"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 22
                echo "      ";
                $context["join"] = twig_join_filter(array(0 => $this->getAttribute($context["item"], "title", array()), 1 => $this->getAttribute($context["item"], "type", array())), ":");
                // line 23
                echo "      ";
                $context["template"] = (($this->getAttribute((isset($context["templateData"]) ? $context["templateData"] : null), (isset($context["join"]) ? $context["join"] : null), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["templateData"]) ? $context["templateData"] : null), (isset($context["join"]) ? $context["join"] : null), array(), "array"), null)) : (null));
                // line 24
                echo "      ";
                if ((($this->getAttribute($context["item"], "type", array()) == "a") || ($this->getAttribute($context["item"], "type", array()) == "text"))) {
                    // line 25
                    echo "        <div class=\"form-group\">
          <div class=\"col-md-2 control-label\"><label for=\"";
                    // line 26
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true);
                    echo ":";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "type", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true);
                    echo "</label></div>
          <div class=\"col-md-8 controls\"> 
          <input class=\"form-control\" type=\"text\" id=\"";
                    // line 28
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true);
                    echo ":";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "type", array()), "html", null, true);
                    echo "\" value=\"";
                    echo twig_escape_filter($this->env, (isset($context["template"]) ? $context["template"] : null), "html", null, true);
                    echo "\" name=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true);
                    echo ":";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "type", array()), "html", null, true);
                    echo "\"></div>
        </div>
      ";
                } else {
                    // line 31
                    echo "        <div class=\"form-group\">
          <div class=\"col-md-2 control-label\"><label for=\"";
                    // line 32
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true);
                    echo ":";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "type", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true);
                    echo "</label></div>
          <div class=\"col-md-8 controls\">
            <button class=\"btn btn-default btn-sm upload-img\" id=\"";
                    // line 34
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true);
                    echo ":";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "type", array()), "html", null, true);
                    echo "\" type=\"button\" data-url=\"";
                    echo $this->env->getExtension('routing')->getPath("file_upload", array("group" => "default"));
                    echo "\" data-name=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true);
                    echo ":";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "type", array()), "html", null, true);
                    echo "\" >上传</button>       
            <button class=\"btn btn-default btn-sm upload-img-del\" type=\"button\"  data-name=\"";
                    // line 35
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true);
                    echo ":";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "type", array()), "html", null, true);
                    echo "\" ";
                    if ( !(isset($context["template"]) ? $context["template"] : null)) {
                        echo "style=\"display:none;\"";
                    }
                    echo ">删除</button>
            <input type=\"hidden\" name=\"";
                    // line 36
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true);
                    echo ":";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "type", array()), "html", null, true);
                    echo "\" value=\"";
                    echo twig_escape_filter($this->env, (isset($context["template"]) ? $context["template"] : null), "html", null, true);
                    echo "\">
            <a href=\"";
                    // line 37
                    echo twig_escape_filter($this->env, (isset($context["template"]) ? $context["template"] : null), "html", null, true);
                    echo "\" target=\"_blank\" ";
                    if ( !(isset($context["template"]) ? $context["template"] : null)) {
                        echo "style=\"display:none;\"";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true);
                    echo "</a>
          </div>
        </div>
      ";
                }
                // line 41
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "  ";
        }
        // line 43
        echo "  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
</form>
";
        // line 45
        if (($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "mode", array()) == "html")) {
            // line 46
            echo "<form id=\"block-image-upload-form\" action=\"";
            echo $this->env->getExtension('routing')->getPath("file_upload", array("group" => "default"));
            echo "\" method=\"post\" enctype=\"multipart/form-data\">
  <input class=\"btn btn-default btn-sm\" type=\"file\" name=\"file\" value=\"上传\" style=\"display:inline-block;\">
  <input type=\"hidden\" name=\"token\" value=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->makeUpoadToken("block", "image"), "html", null, true);
            echo "\" />
  <button class=\"btn btn-default btn-sm\">上传图片</button>
  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
            echo "\">
</form>
";
        }
        // line 53
        echo "
<div class=\"mbm mtl\"><strong>编辑帮助</strong></div>
<div class=\"text-info\">";
        // line 55
        echo nl2br(twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : null), "tips", array()), "html", null, true));
        echo "</div>

<div class=\"mbm mtl\"><strong>变更记录</strong></div>
  <table id=\"block-history-table\" class=\"table table-striped table-condensed\">
    <tbody>
      ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["blockHistorys"]) ? $context["blockHistorys"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["blockHistory"]) {
            // line 61
            echo "      ";
            $context["templateData"] = $this->getAttribute($context["blockHistory"], "templateData", array());
            // line 62
            echo "        <tr id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["blockHistory"], "id", array()), "html", null, true);
            echo "\">
          <td>";
            // line 63
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["blockHistory"], "createdTime", array()), "Y-n-d H:i:s"), "html", null, true);
            echo "</td>
          <td>";
            // line 64
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["historyUsers"]) ? $context["historyUsers"] : null), $this->getAttribute($context["blockHistory"], "userId", array()), array(), "array", false, true), "nickname", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["historyUsers"]) ? $context["historyUsers"] : null), $this->getAttribute($context["blockHistory"], "userId", array()), array(), "array", false, true), "nickname", array()), "用户已删除")) : ("用户已删除")), "html", null, true);
            echo "</td>
          <td>
            <a class=\"btn btn-xs btn-default edit-btn\" 
            href=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_blockhistory_preview", array("id" => $this->getAttribute($context["blockHistory"], "id", array()))), "html", null, true);
            echo "\" target=\"_blank\"> 预览 </a>
          </td>
          ";
            // line 69
            if (($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "mode", array()) == "template")) {
                // line 70
                echo "          <td>
            <button class=\"btn-recover-template btn btn-xs btn-default edit-btn\">恢复此内容</button>
            <div class=\"data-role-content\" style=\"display:none\">";
                // line 72
                echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["templateData"]) ? $context["templateData"] : null)), "html", null, true);
                echo "</div>
          </td>
          ";
            } else {
                // line 75
                echo "          <td>
            <button class=\"btn-recover-content btn btn-xs btn-default edit-btn\">恢复此内容</button>
            <div class=\"data-role-content\" style=\"display:none\"> ";
                // line 77
                echo twig_escape_filter($this->env, $this->getAttribute($context["blockHistory"], "content", array()), "html", null, true);
                echo " </div>
          </td>
          ";
            }
            // line 80
            echo "        </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blockHistory'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "    </tbody>
  </table>
   ";
        // line 84
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo " 
";
    }

    // line 87
    public function block_footer($context, array $blocks = array())
    {
        // line 88
        echo "  <button type=\"button\" class=\"btn btn-link\" data-dismiss=\"modal\">取消</button>
  <button id=\"block-update-btn\" data-submiting-text=\"正在提交\" type=\"submit\" class=\"btn btn-primary\" data-toggle=\"form-submit\" data-target=\"#block-form\">保存</button>
  <script type=\"text/javascript\">app.load('block/update')</script>
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Block:block-update-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  284 => 88,  281 => 87,  275 => 84,  271 => 82,  264 => 80,  258 => 77,  254 => 75,  248 => 72,  244 => 70,  242 => 69,  237 => 67,  231 => 64,  227 => 63,  222 => 62,  219 => 61,  215 => 60,  207 => 55,  203 => 53,  197 => 50,  192 => 48,  186 => 46,  184 => 45,  178 => 43,  175 => 42,  169 => 41,  156 => 37,  148 => 36,  138 => 35,  126 => 34,  117 => 32,  114 => 31,  100 => 28,  91 => 26,  88 => 25,  85 => 24,  82 => 23,  79 => 22,  74 => 21,  67 => 17,  63 => 15,  61 => 14,  53 => 13,  48 => 11,  44 => 9,  41 => 8,  35 => 4,  31 => 1,  29 => 6,  27 => 2,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::bootstrap-modal-layout.html.twig' %}*/
/* {% set block = block|default(null) %}*/
/* */
/* {% block title %}编辑内容{% endblock %}*/
/* */
/* {% set modal_class = 'modal-lg' %}*/
/* */
/* {% block body %}*/
/* */
/* */
/* <h5>编辑区名称：{{block.title}}</h5>*/
/* */
/* <form id="block-form"  {% if block.mode == 'template' %}class="form-horizontal" {% endif %} action="{{ path('admin_block_update', {block:block.id}) }}" method="post">*/
/*   {% if block.mode == 'html' %}*/
/*   <div class="form-group">*/
/*       <div class="controls">*/
/*         <textarea class="form-control" id="blockContent" rows="10" name="content" data-role="editor-field" style="z-index:1000;">{{ block.content }}</textarea>*/
/*       </div>*/
/*   </div>*/
/*   {% else %}*/
/*     {% for item in templateItems %}*/
/*       {% set join = [item.title,item.type]|join(':') %}*/
/*       {% set template = templateData[join]|default(null) %}*/
/*       {% if item.type == 'a' or item.type == 'text' %}*/
/*         <div class="form-group">*/
/*           <div class="col-md-2 control-label"><label for="{{ item.title }}:{{ item.type }}">{{ item.title }}</label></div>*/
/*           <div class="col-md-8 controls"> */
/*           <input class="form-control" type="text" id="{{ item.title }}:{{ item.type }}" value="{{ template }}" name="{{ item.title }}:{{ item.type }}"></div>*/
/*         </div>*/
/*       {% else %}*/
/*         <div class="form-group">*/
/*           <div class="col-md-2 control-label"><label for="{{ item.title }}:{{ item.type }}">{{ item.title }}</label></div>*/
/*           <div class="col-md-8 controls">*/
/*             <button class="btn btn-default btn-sm upload-img" id="{{ item.title}}:{{ item.type }}" type="button" data-url="{{ path('file_upload', {group:'default'}) }}" data-name="{{ item.title}}:{{ item.type }}" >上传</button>       */
/*             <button class="btn btn-default btn-sm upload-img-del" type="button"  data-name="{{ item.title}}:{{ item.type }}" {% if not template %}style="display:none;"{% endif %}>删除</button>*/
/*             <input type="hidden" name="{{ item.title }}:{{ item.type }}" value="{{ template }}">*/
/*             <a href="{{ template }}" target="_blank" {% if not template %}style="display:none;"{% endif %}>{{ item.title }}</a>*/
/*           </div>*/
/*         </div>*/
/*       {% endif %}*/
/*     {% endfor %}*/
/*   {% endif %}*/
/*   <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/* </form>*/
/* {% if block.mode == 'html' %}*/
/* <form id="block-image-upload-form" action="{{ path('file_upload', {group:'default'}) }}" method="post" enctype="multipart/form-data">*/
/*   <input class="btn btn-default btn-sm" type="file" name="file" value="上传" style="display:inline-block;">*/
/*   <input type="hidden" name="token" value="{{ upload_token('block', 'image') }}" />*/
/*   <button class="btn btn-default btn-sm">上传图片</button>*/
/*   <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/* </form>*/
/* {% endif %}*/
/* */
/* <div class="mbm mtl"><strong>编辑帮助</strong></div>*/
/* <div class="text-info">{{ block.tips|nl2br }}</div>*/
/* */
/* <div class="mbm mtl"><strong>变更记录</strong></div>*/
/*   <table id="block-history-table" class="table table-striped table-condensed">*/
/*     <tbody>*/
/*       {% for blockHistory in blockHistorys %}*/
/*       {% set templateData = blockHistory.templateData %}*/
/*         <tr id="{{ blockHistory.id }}">*/
/*           <td>{{ blockHistory.createdTime |date('Y-n-d H:i:s') }}</td>*/
/*           <td>{{ historyUsers[blockHistory.userId].nickname|default('用户已删除') }}</td>*/
/*           <td>*/
/*             <a class="btn btn-xs btn-default edit-btn" */
/*             href="{{ path('admin_blockhistory_preview', {id:blockHistory.id}) }}" target="_blank"> 预览 </a>*/
/*           </td>*/
/*           {% if block.mode == 'template' %}*/
/*           <td>*/
/*             <button class="btn-recover-template btn btn-xs btn-default edit-btn">恢复此内容</button>*/
/*             <div class="data-role-content" style="display:none">{{ templateData|json_encode() }}</div>*/
/*           </td>*/
/*           {% else %}*/
/*           <td>*/
/*             <button class="btn-recover-content btn btn-xs btn-default edit-btn">恢复此内容</button>*/
/*             <div class="data-role-content" style="display:none"> {{ blockHistory.content }} </div>*/
/*           </td>*/
/*           {% endif %}*/
/*         </tr>*/
/*       {% endfor %}*/
/*     </tbody>*/
/*   </table>*/
/*    {{ web_macro.paginator(paginator) }} */
/* {% endblock %}*/
/* */
/* {% block footer %}*/
/*   <button type="button" class="btn btn-link" data-dismiss="modal">取消</button>*/
/*   <button id="block-update-btn" data-submiting-text="正在提交" type="submit" class="btn btn-primary" data-toggle="form-submit" data-target="#block-form">保存</button>*/
/*   <script type="text/javascript">app.load('block/update')</script>*/
/* {% endblock %}*/
/* */
