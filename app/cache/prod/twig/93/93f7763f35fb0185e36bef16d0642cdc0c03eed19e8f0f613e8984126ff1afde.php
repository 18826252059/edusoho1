<?php

/* TopxiaAdminBundle:ArticleCategory:modal.html.twig */
class __TwigTemplate_6c86a2a8407a552fd97f248249a6fbcd41a552aa67565cab28b91fabbc81bf1a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "TopxiaAdminBundle:ArticleCategory:modal.html.twig", 1);
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
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        if ($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "id", array())) {
            echo "编辑栏目";
        } else {
            echo "添加栏目";
        }
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "\t<form id=\"category-form\" class=\"form-horizontal\" action=\"";
        if ($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "id", array())) {
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_article_category_edit", array("id" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "id", array()))), "html", null, true);
        } else {
            echo $this->env->getExtension('routing')->getPath("admin_article_category_create");
        }
        echo "\" method=\"post\">
\t\t<div class=\"form-group\">
\t\t\t<label class=\"col-md-2 control-label\" for=\"category-name-field\">栏目名称</label>
\t\t\t<div class=\"col-md-8 controls\">
\t\t\t\t<input class=\"form-control\" id=\"category-name-field\" type=\"text\" name=\"name\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "name", array()), "html", null, true);
        echo "\" tabindex=\"1\">
\t\t\t</div>
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t<label class=\"col-md-2 control-label\" for=\"category-code-field\">栏目编码</label>
\t\t\t<div class=\"col-md-8 controls\">
\t\t\t\t<input class=\"form-control\" id=\"category-code-field\" type=\"text\" name=\"code\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "code", array()), "html", null, true);
        echo "\" data-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_article_category_checkcode", array("exclude" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "code", array()))), "html", null, true);
        echo "\" tabindex=\"2\">
\t\t\t\t<div class=\"help-block\">生成列表、资讯时使用，例如news、bbs等</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t<label class=\"col-md-2 control-label\" for=\"category-parentId-field\">父栏目</label>
\t\t\t<div class=\"col-md-8 controls\">
\t\t\t\t<select class=\"form-control\" id=\"category-parentId-field\" type=\"text\" name=\"parentId\" tabindex=\"2\" data-url=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_article_category_checkparentid", array("currentId" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "id", array()))), "html", null, true);
        echo "\">
\t\t\t\t\t<option value=0>选择栏目</option>
\t\t\t\t\t";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categoryTree"]) ? $context["categoryTree"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["tree"]) {
            // line 29
            echo "\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tree"], "id", array()), "html", null, true);
            echo "\" ";
            if (($this->getAttribute($context["tree"], "id", array()) == $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "parentId", array()))) {
                echo "selected";
            }
            echo ">";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, (($this->getAttribute($context["tree"], "depth", array()) - 1) * 2)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                echo "&nbsp;&nbsp;&nbsp;&nbsp;";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "└─ ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tree"], "name", array()), "html", null, true);
            echo "</option>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tree'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "\t\t\t\t</select>
\t\t\t</div>\t\t
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t<label class=\"col-md-2 control-label\" for=\"category-weight-field\">显示顺序号</label>
\t\t\t<div class=\"col-md-8 controls\">
\t\t\t\t<input class=\"form-control\" id=\"category-weight-field\" type=\"text\" name=\"weight\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "weight", array()), "html", null, true);
        echo "\" tabindex=\"3\">
\t\t\t\t<div class=\"help-block\">自然数，数字越小，位置越前</div>
\t\t\t</div>
\t\t</div>

\t\t<div style=\"display:none;\" class=\"form-group\">
\t\t\t<label class=\"col-md-2 control-label\" for=\"category-publishArticle-field\">允许发布资讯</label>
\t\t\t<div class=\"controls radios col-md-8\"><label>
\t\t\t\t\t<input  id=\"category-publishArticle-field\" type=\"radio\" name=\"publishArticle\" tabindex=\"0\" value=1 ";
        // line 46
        if (($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "publishArticle", array()) == 1)) {
            echo "checked";
        }
        echo ">是</label>
\t\t\t\t<label>
\t\t\t\t\t<input  id=\"category-publishArticle-field\" type=\"radio\" name=\"publishArticle\" tabindex=\"0\" value=0 ";
        // line 48
        if (($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "publishArticle", array()) != 1)) {
            echo "checked";
        }
        echo ">否
\t\t\t\t</label>\t
\t\t\t\t
\t\t\t</div>
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t<label class=\"col-md-2 control-label\" for=\"category-seoTitle-field\">SEO标题</label>
\t\t\t<div class=\"col-md-8 controls\">
\t\t\t\t<input class=\"form-control\" id=\"category-seoTitle-field\" type=\"text\" name=\"seoTitle\" value=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "seoTitle", array()), "html", null, true);
        echo "\" tabindex=\"4\">
\t\t\t\t<div class=\"help-block\"></div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t<label class=\"col-md-2 control-label\" for=\"category-seoKeyword-field\">SEO关键字</label>
\t\t\t<div class=\"col-md-8 controls\">
\t\t\t\t<input class=\"form-control\" id=\"category-seoKeyword-field\" type=\"text\" name=\"seoKeyword\" value=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "seoKeyword", array()), "html", null, true);
        echo "\" tabindex=\"4\">
\t\t\t\t<div class=\"help-block\"></div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t<label class=\"col-md-2 control-label\" for=\"category-seoDesc-field\">SEO描述</label>
\t\t\t<div class=\"col-md-8 controls\">
\t\t\t\t<input class=\"form-control\" id=\"category-seoDesc-field\" type=\"text\" name=\"seoDesc\" value=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "seoDesc", array()), "html", null, true);
        echo "\" tabindex=\"4\">
\t\t\t\t<div class=\"help-block\"></div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t<label class=\"col-md-2 control-label\" for=\"category-published-field\">启用</label>
\t\t\t<div class=\"controls radios col-md-8\">
\t\t\t\t<label><input id=\"category-published-field\" type=\"radio\" name=\"published\" tabindex=\"0\" value=1 ";
        // line 81
        if (($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "published", array()) == 1)) {
            echo "checked";
        }
        echo ">是</label>
\t\t\t\t<label><input id=\"category-published-field\" type=\"radio\" name=\"published\" tabindex=\"0\" value=0 ";
        // line 82
        if (($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "published", array()) != 1)) {
            echo "checked";
        }
        echo ">否</label>
\t\t\t\t<div class=\"help-block\">建议等栏目内容整理编辑完毕后再启用</div>
\t\t\t</div>
\t\t</div>
\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
\t</form>
\t
\t<script type=\"text/javascript\"> app.load('article/category/save-modal') </script>
";
    }

    // line 92
    public function block_footer($context, array $blocks = array())
    {
        // line 93
        echo "\t";
        if ($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "id", array())) {
            // line 94
            echo "\t\t<button type=\"button\" class=\"btn btn-default pull-left delete-category\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_article_category_delete", array("id" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "id", array()))), "html", null, true);
            echo "\" tabindex=\"5\"><i class=\"glyphicon glyphicon-trash\"></i> 删除</button>
\t";
        } else {
            // line 96
            echo "
\t";
        }
        // line 98
        echo "  \t<button type=\"button\" class=\"btn btn-link\" data-dismiss=\"modal\" tabindex=\"6\">取消</button>
\t<button id=\"category-save-btn\" data-submiting-text=\"正在提交\" type=\"submit\" class=\"btn btn-primary\" data-toggle=\"form-submit\" data-target=\"#category-form\" tabindex=\"4\">保存</button>
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:ArticleCategory:modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 98,  224 => 96,  218 => 94,  215 => 93,  212 => 92,  203 => 86,  194 => 82,  188 => 81,  177 => 73,  166 => 65,  155 => 57,  141 => 48,  134 => 46,  123 => 38,  114 => 31,  90 => 29,  86 => 28,  81 => 26,  68 => 18,  58 => 11,  46 => 7,  43 => 6,  33 => 4,  29 => 1,  27 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::bootstrap-modal-layout.html.twig' %}*/
/* */
/* {% set modal_class = 'modal-lg' %}*/
/* {% block title %}{% if category.id %}编辑栏目{% else %}添加栏目{% endif %}{% endblock %}*/
/* */
/* {% block body %}*/
/* 	<form id="category-form" class="form-horizontal" action="{% if category.id %}{{ path('admin_article_category_edit', {id:category.id}) }}{% else %}{{ path('admin_article_category_create') }}{% endif %}" method="post">*/
/* 		<div class="form-group">*/
/* 			<label class="col-md-2 control-label" for="category-name-field">栏目名称</label>*/
/* 			<div class="col-md-8 controls">*/
/* 				<input class="form-control" id="category-name-field" type="text" name="name" value="{{ category.name }}" tabindex="1">*/
/* 			</div>*/
/* 		</div>*/
/* */
/* 		<div class="form-group">*/
/* 			<label class="col-md-2 control-label" for="category-code-field">栏目编码</label>*/
/* 			<div class="col-md-8 controls">*/
/* 				<input class="form-control" id="category-code-field" type="text" name="code" value="{{ category.code }}" data-url="{{ path('admin_article_category_checkcode', {exclude:category.code}) }}" tabindex="2">*/
/* 				<div class="help-block">生成列表、资讯时使用，例如news、bbs等</div>*/
/* 			</div>*/
/* 		</div>*/
/* */
/* 		<div class="form-group">*/
/* 			<label class="col-md-2 control-label" for="category-parentId-field">父栏目</label>*/
/* 			<div class="col-md-8 controls">*/
/* 				<select class="form-control" id="category-parentId-field" type="text" name="parentId" tabindex="2" data-url="{{ path('admin_article_category_checkparentid', {currentId:category.id}) }}">*/
/* 					<option value=0>选择栏目</option>*/
/* 					{% for tree in categoryTree %}*/
/* 					<option value="{{ tree.id }}" {% if tree.id == category.parentId  %}selected{% endif %}>{% for i in 0..(tree.depth-1)*2 %}&nbsp;&nbsp;&nbsp;&nbsp;{% endfor %}└─ {{ tree.name }}</option>*/
/* 					{% endfor %}*/
/* 				</select>*/
/* 			</div>		*/
/* 		</div>*/
/* */
/* 		<div class="form-group">*/
/* 			<label class="col-md-2 control-label" for="category-weight-field">显示顺序号</label>*/
/* 			<div class="col-md-8 controls">*/
/* 				<input class="form-control" id="category-weight-field" type="text" name="weight" value="{{ category.weight }}" tabindex="3">*/
/* 				<div class="help-block">自然数，数字越小，位置越前</div>*/
/* 			</div>*/
/* 		</div>*/
/* */
/* 		<div style="display:none;" class="form-group">*/
/* 			<label class="col-md-2 control-label" for="category-publishArticle-field">允许发布资讯</label>*/
/* 			<div class="controls radios col-md-8"><label>*/
/* 					<input  id="category-publishArticle-field" type="radio" name="publishArticle" tabindex="0" value=1 {% if category.publishArticle ==1 %}checked{% endif %}>是</label>*/
/* 				<label>*/
/* 					<input  id="category-publishArticle-field" type="radio" name="publishArticle" tabindex="0" value=0 {% if category.publishArticle !=1 %}checked{% endif %}>否*/
/* 				</label>	*/
/* 				*/
/* 			</div>*/
/* 		</div>*/
/* */
/* 		<div class="form-group">*/
/* 			<label class="col-md-2 control-label" for="category-seoTitle-field">SEO标题</label>*/
/* 			<div class="col-md-8 controls">*/
/* 				<input class="form-control" id="category-seoTitle-field" type="text" name="seoTitle" value="{{ category.seoTitle }}" tabindex="4">*/
/* 				<div class="help-block"></div>*/
/* 			</div>*/
/* 		</div>*/
/* */
/* 		<div class="form-group">*/
/* 			<label class="col-md-2 control-label" for="category-seoKeyword-field">SEO关键字</label>*/
/* 			<div class="col-md-8 controls">*/
/* 				<input class="form-control" id="category-seoKeyword-field" type="text" name="seoKeyword" value="{{ category.seoKeyword }}" tabindex="4">*/
/* 				<div class="help-block"></div>*/
/* 			</div>*/
/* 		</div>*/
/* */
/* 		<div class="form-group">*/
/* 			<label class="col-md-2 control-label" for="category-seoDesc-field">SEO描述</label>*/
/* 			<div class="col-md-8 controls">*/
/* 				<input class="form-control" id="category-seoDesc-field" type="text" name="seoDesc" value="{{ category.seoDesc }}" tabindex="4">*/
/* 				<div class="help-block"></div>*/
/* 			</div>*/
/* 		</div>*/
/* */
/* 		<div class="form-group">*/
/* 			<label class="col-md-2 control-label" for="category-published-field">启用</label>*/
/* 			<div class="controls radios col-md-8">*/
/* 				<label><input id="category-published-field" type="radio" name="published" tabindex="0" value=1 {% if category.published ==1 %}checked{% endif %}>是</label>*/
/* 				<label><input id="category-published-field" type="radio" name="published" tabindex="0" value=0 {% if category.published !=1 %}checked{% endif %}>否</label>*/
/* 				<div class="help-block">建议等栏目内容整理编辑完毕后再启用</div>*/
/* 			</div>*/
/* 		</div>*/
/* 		<input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/* 	</form>*/
/* 	*/
/* 	<script type="text/javascript"> app.load('article/category/save-modal') </script>*/
/* {% endblock %}*/
/* */
/* {% block footer %}*/
/* 	{% if category.id %}*/
/* 		<button type="button" class="btn btn-default pull-left delete-category" data-url="{{ path('admin_article_category_delete', {id:category.id}) }}" tabindex="5"><i class="glyphicon glyphicon-trash"></i> 删除</button>*/
/* 	{% else %}*/
/* */
/* 	{% endif %}*/
/*   	<button type="button" class="btn btn-link" data-dismiss="modal" tabindex="6">取消</button>*/
/* 	<button id="category-save-btn" data-submiting-text="正在提交" type="submit" class="btn btn-primary" data-toggle="form-submit" data-target="#category-form" tabindex="4">保存</button>*/
/* {% endblock %}*/
