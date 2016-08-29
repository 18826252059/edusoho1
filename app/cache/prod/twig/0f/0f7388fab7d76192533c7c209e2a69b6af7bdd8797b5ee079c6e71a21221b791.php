<?php

/* TopxiaAdminBundle:Block:block-modal.html.twig */
class __TwigTemplate_ae21b317d689ee6030f38960bc9dc47f66fd5e8f64e4c968a56bdead8475e835 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "TopxiaAdminBundle:Block:block-modal.html.twig", 1);
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
        // line 4
        $context["block"] = ((array_key_exists("block", $context)) ? (_twig_default_filter((isset($context["block"]) ? $context["block"] : null), null)) : (null));
        // line 10
        if (($this->getAttribute((isset($context["editBlock"]) ? $context["editBlock"] : null), "id", array()) == 0)) {
            // line 11
            $context["checkCodeUrl"] = $this->env->getExtension('routing')->getPath("admin_block_code_check_forcreate");
        } else {
            // line 13
            $context["checkCodeUrl"] = $this->env->getExtension('routing')->getPath("admin_block_code_check_foredit", array("id" => $this->getAttribute((isset($context["editBlock"]) ? $context["editBlock"] : null), "id", array())));
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        // line 7
        echo "  ";
        if (($this->getAttribute((isset($context["editBlock"]) ? $context["editBlock"] : null), "id", array()) == 0)) {
            echo "新增";
        } else {
            echo "设置";
        }
        echo "编辑区
";
    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        // line 17
        echo "  <form class=\"form-horizontal\" data-id = ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["editBlock"]) ? $context["editBlock"] : null), "id", array()), "html", null, true);
        echo " id=\"block-form\"  
  ";
        // line 18
        if (($this->getAttribute((isset($context["editBlock"]) ? $context["editBlock"] : null), "id", array()) == 0)) {
            // line 19
            echo "    action=\"";
            echo $this->env->getExtension('routing')->getPath("admin_block_create");
            echo "\"
  ";
        } else {
            // line 21
            echo "    action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_block_edit", array("block" => $this->getAttribute((isset($context["editBlock"]) ? $context["editBlock"] : null), "id", array()))), "html", null, true);
            echo "\" 
  ";
        }
        // line 22
        echo "  method=\"post\">


  <div class=\"row form-group\">
    <div class=\"col-md-3 control-label\"><label for=\"code\">编号</label></div>
    <div class=\"col-md-8 controls\"> 
    <input class=\"form-control\" type=\"text\" id=\"code\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["editBlock"]) ? $context["editBlock"] : null), "code", array()), "html", null, true);
        echo "\" data-url=\"";
        echo twig_escape_filter($this->env, (isset($context["checkCodeUrl"]) ? $context["checkCodeUrl"] : null), "html", null, true);
        echo "\" name=\"code\"></div>
  </div>

  <div class=\"row form-group\">
    <div class=\"col-md-3 control-label\"><label for=\"title\">标题</label></div>
    <div class=\"col-md-8 controls\"> 
    <input class=\"form-control\" type=\"text\" id=\"title\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["editBlock"]) ? $context["editBlock"] : null), "title", array()), "html", null, true);
        echo "\" name=\"title\"></div>
  </div>

  <div class=\"row form-group\">
    <div class=\"col-md-3 control-label\"><label for=\"mode\">编辑模式</label></div>
    <div class=\"col-md-8 controls\"> 
      <div class=\"controls col-md-8 radios\">
        <label><input type=\"radio\" name=\"mode\" value=\"html\" ";
        // line 41
        if (($this->getAttribute((isset($context["editBlock"]) ? $context["editBlock"] : null), "mode", array()) == "html")) {
            echo "checked";
        }
        echo ">HTML</label>
        <label><input type=\"radio\" name=\"mode\" value=\"template\" ";
        // line 42
        if (($this->getAttribute((isset($context["editBlock"]) ? $context["editBlock"] : null), "mode", array()) == "template")) {
            echo "checked";
        }
        echo ">模板</label>
      </div>
    </div>
  </div>

  <div class=\"row form-group\" style=\"display:none;\" id=\"template\">
    <div class=\"col-md-3 control-label\"><label for=\"template\">模板内容</label></div>
    <div class=\"col-md-8 controls\">
      <textarea id=\"template\" name=\"template\" class=\"form-control\" rows=\"8\">";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["editBlock"]) ? $context["editBlock"] : null), "template", array()), "html", null, true);
        echo "</textarea>
      <div class=\"help-block\">
        目前提供３种模板内容占位符，占位符在内容编辑时，会转换为编辑框，方便网站运营编辑
        <ul>
          <li>((占位符名:a)) - 举例：&lt;a href=\"((链接一:a))\"&gt;这个是链接&lt;/a&gt;</li>
          <li>((占位符名:text)) - 举例：&lt;a href=\"#\"&gt;(( 文本一:text ))&lt;/a&gt;</li>
          <li>((占位符名:img)) - 举例：&lt;img src=\"((图片一:img))\" /&gt;</li>
        </ul>

      </div>
    </div>
  </div>

  <div class=\"row form-group\">
    <div class=\"col-md-3 control-label\"><label for=\"tips\">内容编辑帮助</label></div>
    <div class=\"col-md-8 controls\">
      <textarea id=\"tips\" name=\"tips\" class=\"form-control\" rows=\"4\"></textarea>
      <div class=\"help-block\">填写内容编辑时的帮助信息</div>
    </div>
  </div>

    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">

  </form>

  <script type=\"text/javascript\">
    app.load('block/save-modal')
  </script>
";
    }

    // line 80
    public function block_footer($context, array $blocks = array())
    {
        // line 81
        echo "    <button type=\"button\" class=\"btn btn-link\" data-dismiss=\"modal\">取消</button>
    <button id=\"block-save-btn\" data-submiting-text=\"正在提交\" type=\"submit\" class=\"btn btn-primary\" data-toggle=\"form-submit\" data-target=\"#block-form\">保存</button>
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Block:block-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 81,  163 => 80,  151 => 71,  127 => 50,  114 => 42,  108 => 41,  98 => 34,  87 => 28,  79 => 22,  73 => 21,  67 => 19,  65 => 18,  60 => 17,  57 => 16,  46 => 7,  43 => 6,  39 => 1,  36 => 13,  33 => 11,  31 => 10,  29 => 4,  27 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::bootstrap-modal-layout.html.twig' %}*/
/* */
/* {% set modal_class = 'modal-lg' %}*/
/* {% set block = block|default(null) %}*/
/* */
/* {% block title %}*/
/*   {% if editBlock.id == 0 %}新增{% else %}设置{% endif %}编辑区*/
/* {% endblock %}*/
/* */
/* {% if editBlock.id == 0 %}*/
/*   {% set checkCodeUrl = path('admin_block_code_check_forcreate') %}*/
/* {% else %}*/
/*   {% set checkCodeUrl = path('admin_block_code_check_foredit', {id:editBlock.id}) %}*/
/* {% endif %}*/
/* */
/* {% block body %}*/
/*   <form class="form-horizontal" data-id = {{ editBlock.id }} id="block-form"  */
/*   {% if editBlock.id == 0 %}*/
/*     action="{{ path('admin_block_create') }}"*/
/*   {% else %}*/
/*     action="{{ path('admin_block_edit', {block:editBlock.id}) }}" */
/*   {% endif %}  method="post">*/
/* */
/* */
/*   <div class="row form-group">*/
/*     <div class="col-md-3 control-label"><label for="code">编号</label></div>*/
/*     <div class="col-md-8 controls"> */
/*     <input class="form-control" type="text" id="code" value="{{editBlock.code}}" data-url="{{checkCodeUrl}}" name="code"></div>*/
/*   </div>*/
/* */
/*   <div class="row form-group">*/
/*     <div class="col-md-3 control-label"><label for="title">标题</label></div>*/
/*     <div class="col-md-8 controls"> */
/*     <input class="form-control" type="text" id="title" value="{{editBlock.title}}" name="title"></div>*/
/*   </div>*/
/* */
/*   <div class="row form-group">*/
/*     <div class="col-md-3 control-label"><label for="mode">编辑模式</label></div>*/
/*     <div class="col-md-8 controls"> */
/*       <div class="controls col-md-8 radios">*/
/*         <label><input type="radio" name="mode" value="html" {% if editBlock.mode == 'html' %}checked{% endif %}>HTML</label>*/
/*         <label><input type="radio" name="mode" value="template" {% if editBlock.mode == 'template' %}checked{% endif %}>模板</label>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* */
/*   <div class="row form-group" style="display:none;" id="template">*/
/*     <div class="col-md-3 control-label"><label for="template">模板内容</label></div>*/
/*     <div class="col-md-8 controls">*/
/*       <textarea id="template" name="template" class="form-control" rows="8">{{ editBlock.template }}</textarea>*/
/*       <div class="help-block">*/
/*         目前提供３种模板内容占位符，占位符在内容编辑时，会转换为编辑框，方便网站运营编辑*/
/*         <ul>*/
/*           <li>((占位符名:a)) - 举例：&lt;a href="((链接一:a))"&gt;这个是链接&lt;/a&gt;</li>*/
/*           <li>((占位符名:text)) - 举例：&lt;a href="#"&gt;(( 文本一:text ))&lt;/a&gt;</li>*/
/*           <li>((占位符名:img)) - 举例：&lt;img src="((图片一:img))" /&gt;</li>*/
/*         </ul>*/
/* */
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* */
/*   <div class="row form-group">*/
/*     <div class="col-md-3 control-label"><label for="tips">内容编辑帮助</label></div>*/
/*     <div class="col-md-8 controls">*/
/*       <textarea id="tips" name="tips" class="form-control" rows="4"></textarea>*/
/*       <div class="help-block">填写内容编辑时的帮助信息</div>*/
/*     </div>*/
/*   </div>*/
/* */
/*     <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/* */
/*   </form>*/
/* */
/*   <script type="text/javascript">*/
/*     app.load('block/save-modal')*/
/*   </script>*/
/* {% endblock %}*/
/* */
/* {% block footer %}*/
/*     <button type="button" class="btn btn-link" data-dismiss="modal">取消</button>*/
/*     <button id="block-save-btn" data-submiting-text="正在提交" type="submit" class="btn btn-primary" data-toggle="form-submit" data-target="#block-form">保存</button>*/
/* {% endblock %}*/
/* */
