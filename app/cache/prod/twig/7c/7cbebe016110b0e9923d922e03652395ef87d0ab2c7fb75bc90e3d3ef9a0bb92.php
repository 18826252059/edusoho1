<?php

/* TopxiaAdminBundle:Category:modal.html.twig */
class __TwigTemplate_a14fabb9f44b358e2cd450643278b10f38845033f86a78b40da8dacdde769e41 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "TopxiaAdminBundle:Category:modal.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        if ($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "id", array())) {
            echo "编辑分类";
        } else {
            echo "添加分类";
        }
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<div id=\"category-creater-widget\" data-upload-url=\"";
        echo $this->env->getExtension('routing')->getPath("admin_category_upload");
        echo "\">

\t<form id=\"category-form\" class=\"form-horizontal\" action=\"";
        // line 8
        if ($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "id", array())) {
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_category_edit", array("id" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "id", array()))), "html", null, true);
        } else {
            echo $this->env->getExtension('routing')->getPath("admin_category_create");
        }
        echo "\" method=\"post\">
\t\t<div class=\"form-group\">
\t\t\t<label class=\"col-md-2 control-label\" for=\"category-name-field\">名称</label>
\t\t\t<div class=\"col-md-8 controls\">
\t\t\t\t<input class=\"form-control\" id=\"category-name-field\" type=\"text\" name=\"name\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "name", array()), "html", null, true);
        echo "\" tabindex=\"1\">
\t\t\t</div>
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t<label class=\"col-md-2 control-label\" for=\"category-weight-field\">显示序号</label>
\t\t\t<div class=\"col-md-8 controls\">
\t\t\t\t<input class=\"form-control\" id=\"category-weight-field\" type=\"text\" name=\"weight\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "weight", array()), "html", null, true);
        echo "\" tabindex=\"2\">
\t\t\t\t<div class=\"help-block\">显示序号需为整数，分类按序号的顺序从小到大排序。</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t<label class=\"col-md-2 control-label\" for=\"category-code-field\">编码</label>
\t\t\t<div class=\"col-md-8 controls\">
\t\t\t\t<input class=\"form-control\" id=\"category-code-field\" type=\"text\" name=\"code\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "code", array()), "html", null, true);
        echo "\" data-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_category_checkcode", array("exclude" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "code", array()))), "html", null, true);
        echo "\" tabindex=\"3\">
\t\t\t\t<div class=\"help-block\">必填，建议使用分类名称的英文单词或缩写作为编码。</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t<label class=\"col-md-2 control-label\" for=\"category-description-field\">分类描述</label>
\t\t\t<div class=\"col-md-8 controls\">
\t\t\t\t<textarea class=\"form-control\" id=\"category-description-field\" style=\"height:100px;\" name=\"description\">";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "description", array()), "html", null, true);
        echo "</textarea>
\t\t\t\t<div class=\"help-block\">非必填</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"form-group\" style=\"display:none;\">
\t\t\t<label class=\"col-md-2 control-label\" for=\"category-code-field\">图标</label>
\t\t\t<div class=\"col-md-8 controls\">
\t\t\t\t<div id=\"category-icon-field\">
\t\t\t\t\t";
        // line 44
        if ($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "icon", array())) {
            // line 45
            echo "\t\t\t\t\t\t<img class=\"mbm\" src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "icon", array()), "html", null, true);
            echo "\">
\t\t\t\t\t";
        }
        // line 47
        echo "\t\t\t\t</div>
\t\t\t\t<input type=\"hidden\" name=\"icon\" value=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "icon", array()), "html", null, true);
        echo "\">
\t\t\t\t<button id=\"category-icon-uploader\" class=\"btn btn-sm btn-default webuploader-container\" type=\"button\" data-target=\"#category-icon-field\"><i class=\"glyphicon glyphicon-picture\"></i></button>
\t\t\t\t<button ";
        // line 50
        if ( !$this->getAttribute((isset($context["category"]) ? $context["category"] : null), "icon", array())) {
            echo "style=\"display:none;\"";
        }
        echo " id=\"category-icon-delete\" class=\"btn btn-sm btn-default webuploader-container\" type=\"button\"><i class=\"glyphicon glyphicon-trash\"></i></button>
\t\t\t\t<div class=\"help-block\">允许上传的图标文件格式为jpg, jpeg, gif, png</div>
\t\t\t</div>
\t\t</div>

\t\t<input type=\"hidden\" name=\"groupId\" value=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "groupId", array()), "html", null, true);
        echo "\">
\t\t<input type=\"hidden\" name=\"parentId\" value=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "parentId", array()), "html", null, true);
        echo "\">
\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
\t</form>
</div>
<script type=\"text/javascript\"> app.load('category/save-modal') </script>
";
    }

    // line 63
    public function block_footer($context, array $blocks = array())
    {
        // line 64
        echo "\t";
        if ($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "id", array())) {
            // line 65
            echo "\t\t<button type=\"button\" class=\"btn btn-default pull-left delete-category\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_category_delete", array("id" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "id", array()))), "html", null, true);
            echo "\" tabindex=\"5\"><i class=\"glyphicon glyphicon-trash\"></i> 删除</button>
\t";
        } else {
            // line 67
            echo "
\t";
        }
        // line 69
        echo "  \t<button type=\"button\" class=\"btn btn-link\" data-dismiss=\"modal\" tabindex=\"6\">取消</button>
\t<button id=\"category-create-btn\" data-submiting-text=\"正在提交\" type=\"submit\" class=\"btn btn-primary\" data-toggle=\"form-submit\" data-target=\"#category-form\" tabindex=\"4\">保存</button>
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Category:modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 69,  161 => 67,  155 => 65,  152 => 64,  149 => 63,  140 => 57,  136 => 56,  132 => 55,  122 => 50,  117 => 48,  114 => 47,  108 => 45,  106 => 44,  94 => 35,  81 => 27,  70 => 19,  60 => 12,  49 => 8,  43 => 6,  40 => 5,  30 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::bootstrap-modal-layout.html.twig' %}*/
/* */
/* {% block title %}{% if category.id %}编辑分类{% else %}添加分类{% endif %}{% endblock %}*/
/* */
/* {% block body %}*/
/* <div id="category-creater-widget" data-upload-url="{{ path('admin_category_upload') }}">*/
/* */
/* 	<form id="category-form" class="form-horizontal" action="{% if category.id %}{{ path('admin_category_edit', {id:category.id}) }}{% else %}{{ path('admin_category_create') }}{% endif %}" method="post">*/
/* 		<div class="form-group">*/
/* 			<label class="col-md-2 control-label" for="category-name-field">名称</label>*/
/* 			<div class="col-md-8 controls">*/
/* 				<input class="form-control" id="category-name-field" type="text" name="name" value="{{ category.name }}" tabindex="1">*/
/* 			</div>*/
/* 		</div>*/
/* */
/* 		<div class="form-group">*/
/* 			<label class="col-md-2 control-label" for="category-weight-field">显示序号</label>*/
/* 			<div class="col-md-8 controls">*/
/* 				<input class="form-control" id="category-weight-field" type="text" name="weight" value="{{ category.weight }}" tabindex="2">*/
/* 				<div class="help-block">显示序号需为整数，分类按序号的顺序从小到大排序。</div>*/
/* 			</div>*/
/* 		</div>*/
/* */
/* 		<div class="form-group">*/
/* 			<label class="col-md-2 control-label" for="category-code-field">编码</label>*/
/* 			<div class="col-md-8 controls">*/
/* 				<input class="form-control" id="category-code-field" type="text" name="code" value="{{ category.code }}" data-url="{{ path('admin_category_checkcode', {exclude:category.code}) }}" tabindex="3">*/
/* 				<div class="help-block">必填，建议使用分类名称的英文单词或缩写作为编码。</div>*/
/* 			</div>*/
/* 		</div>*/
/* */
/* 		<div class="form-group">*/
/* 			<label class="col-md-2 control-label" for="category-description-field">分类描述</label>*/
/* 			<div class="col-md-8 controls">*/
/* 				<textarea class="form-control" id="category-description-field" style="height:100px;" name="description">{{category.description}}</textarea>*/
/* 				<div class="help-block">非必填</div>*/
/* 			</div>*/
/* 		</div>*/
/* */
/* 		<div class="form-group" style="display:none;">*/
/* 			<label class="col-md-2 control-label" for="category-code-field">图标</label>*/
/* 			<div class="col-md-8 controls">*/
/* 				<div id="category-icon-field">*/
/* 					{% if category.icon %}*/
/* 						<img class="mbm" src="{{ category.icon }}">*/
/* 					{% endif %}*/
/* 				</div>*/
/* 				<input type="hidden" name="icon" value="{{ category.icon }}">*/
/* 				<button id="category-icon-uploader" class="btn btn-sm btn-default webuploader-container" type="button" data-target="#category-icon-field"><i class="glyphicon glyphicon-picture"></i></button>*/
/* 				<button {% if not category.icon %}style="display:none;"{% endif %} id="category-icon-delete" class="btn btn-sm btn-default webuploader-container" type="button"><i class="glyphicon glyphicon-trash"></i></button>*/
/* 				<div class="help-block">允许上传的图标文件格式为jpg, jpeg, gif, png</div>*/
/* 			</div>*/
/* 		</div>*/
/* */
/* 		<input type="hidden" name="groupId" value="{{ category.groupId }}">*/
/* 		<input type="hidden" name="parentId" value="{{ category.parentId }}">*/
/* 		<input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/* 	</form>*/
/* </div>*/
/* <script type="text/javascript"> app.load('category/save-modal') </script>*/
/* {% endblock %}*/
/* */
/* {% block footer %}*/
/* 	{% if category.id %}*/
/* 		<button type="button" class="btn btn-default pull-left delete-category" data-url="{{ path('admin_category_delete', {id:category.id}) }}" tabindex="5"><i class="glyphicon glyphicon-trash"></i> 删除</button>*/
/* 	{% else %}*/
/* */
/* 	{% endif %}*/
/*   	<button type="button" class="btn btn-link" data-dismiss="modal" tabindex="6">取消</button>*/
/* 	<button id="category-create-btn" data-submiting-text="正在提交" type="submit" class="btn btn-primary" data-toggle="form-submit" data-target="#category-form" tabindex="4">保存</button>*/
/* {% endblock %}*/
