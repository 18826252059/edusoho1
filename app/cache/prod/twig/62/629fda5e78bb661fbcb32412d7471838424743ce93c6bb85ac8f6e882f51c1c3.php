<?php

/* TopxiaAdminBundle:Content:index.html.twig */
class __TwigTemplate_c9b74998ccd492fee6d7765949ee9eacef91a738e610d1ecd2f91ac670119f46 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:Content:index.html.twig", 1);
        $this->blocks = array(
            'page_buttons' => array($this, 'block_page_buttons'),
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
        $context["script_controller"] = "content/list";
        // line 5
        $context["menu"] = "admin_operation_content";
        // line 6
        $context["type"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "type"), "method");
        // line 7
        $context["typeName"] = $this->getAttribute($this->env->getExtension('topxia_web_twig')->getDict("contentType"), (isset($context["type"]) ? $context["type"] : null), array(), "array");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_page_buttons($context, array $blocks = array())
    {
        echo "  \t
\t<button class=\"btn btn-success btn-sm pull-right\" id=\"content-add-btn\" type=\"button\" data-target=\"#modal\" data-toggle=\"modal\" data-url=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_content_create", array("type" => (isset($context["type"]) ? $context["type"] : null))), "html", null, true);
        echo "\"> 添加";
        echo twig_escape_filter($this->env, (isset($context["typeName"]) ? $context["typeName"] : null), "html", null, true);
        echo "</button>
";
    }

    // line 13
    public function block_main($context, array $blocks = array())
    {
        // line 14
        echo "
<form class=\"well well-sm form-inline\">
\t<div class=\"form-group\">
\t\t<select class=\"form-control\" name=\"status\">
\t\t  ";
        // line 18
        echo $this->env->getExtension('topxia_html_twig')->selectOptions($this->env->getExtension('topxia_web_twig')->getDict("contentStatus"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "status"), "method"), "--所有状态--");
        echo "
\t\t</select>
\t</div>
\t<div class=\"form-group\">
\t\t<input class=\"form-control\" name=\"keywords\" type=\"text\" placeholder=\"关键词\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "keywords"), "method"), "html", null, true);
        echo "\">
\t</div>
\t\t<input type=\"hidden\" name=\"type\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
        echo "\">
\t<button class=\"btn btn-primary\" type=\"submit\">搜索</button>

</form>

<table class=\"table table-hover\" id=\"content-table\">
\t<thead>
\t\t<tr>
\t\t\t<th width=\"50%\">标题</th>
\t\t\t<th>类型</th>
\t\t\t<th>状态</th>
\t\t\t<th>发布时间/人</th>
\t\t\t<th>操作</th>
\t\t</tr>
\t</thead>
\t<tbody>
\t\t";
        // line 40
        if ((isset($context["contents"]) ? $context["contents"] : null)) {
            // line 41
            echo "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["contents"]) ? $context["contents"] : null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["content"]) {
                // line 42
                echo "\t\t\t  ";
                $context["user"] = $this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["content"], "userId", array()), array(), "array");
                // line 43
                echo "\t\t\t  ";
                $context["category"] = (($this->getAttribute((isset($context["categories"]) ? $context["categories"] : null), $this->getAttribute($context["content"], "categoryId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["categories"]) ? $context["categories"] : null), $this->getAttribute($context["content"], "categoryId", array()), array(), "array"), null)) : (null));
                // line 44
                echo "\t\t\t  ";
                $this->loadTemplate("TopxiaAdminBundle:Content:content-tr.html.twig", "TopxiaAdminBundle:Content:index.html.twig", 44)->display($context);
                // line 45
                echo "\t\t\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['content'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "\t\t";
        } else {
            // line 47
            echo "\t\t\t<tr><td colspan=\"20\"><div class=\"empty\">暂无页面记录</div></td></tr>
\t\t";
        }
        // line 49
        echo "\t</tbody>
</table>

";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo "

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Content:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 52,  141 => 49,  137 => 47,  134 => 46,  120 => 45,  117 => 44,  114 => 43,  111 => 42,  93 => 41,  91 => 40,  72 => 24,  67 => 22,  60 => 18,  54 => 14,  51 => 13,  43 => 10,  38 => 9,  34 => 1,  32 => 7,  30 => 6,  28 => 5,  26 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaAdminBundle::layout.html.twig' %}*/
/* */
/* {% set script_controller = 'content/list' %}*/
/* */
/* {% set menu = 'admin_operation_content' %}*/
/* {% set type = app.request.get('type') %}*/
/* {% set typeName = dict('contentType')[type] %}*/
/* */
/* {% block page_buttons %}  	*/
/* 	<button class="btn btn-success btn-sm pull-right" id="content-add-btn" type="button" data-target="#modal" data-toggle="modal" data-url="{{ path('admin_content_create', {type: type}) }}"> 添加{{ typeName }}</button>*/
/* {% endblock %}*/
/* */
/* {% block main %}*/
/* */
/* <form class="well well-sm form-inline">*/
/* 	<div class="form-group">*/
/* 		<select class="form-control" name="status">*/
/* 		  {{ select_options(dict('contentStatus'), app.request.query.get('status'), '--所有状态--') }}*/
/* 		</select>*/
/* 	</div>*/
/* 	<div class="form-group">*/
/* 		<input class="form-control" name="keywords" type="text" placeholder="关键词" value="{{ app.request.query.get('keywords') }}">*/
/* 	</div>*/
/* 		<input type="hidden" name="type" value="{{ type }}">*/
/* 	<button class="btn btn-primary" type="submit">搜索</button>*/
/* */
/* </form>*/
/* */
/* <table class="table table-hover" id="content-table">*/
/* 	<thead>*/
/* 		<tr>*/
/* 			<th width="50%">标题</th>*/
/* 			<th>类型</th>*/
/* 			<th>状态</th>*/
/* 			<th>发布时间/人</th>*/
/* 			<th>操作</th>*/
/* 		</tr>*/
/* 	</thead>*/
/* 	<tbody>*/
/* 		{% if contents %}*/
/* 			{% for content in contents %}*/
/* 			  {% set user = users[content.userId] %}*/
/* 			  {% set category = categories[content.categoryId]|default(null) %}*/
/* 			  {% include 'TopxiaAdminBundle:Content:content-tr.html.twig' %}*/
/* 			{% endfor %}*/
/* 		{% else %}*/
/* 			<tr><td colspan="20"><div class="empty">暂无页面记录</div></td></tr>*/
/* 		{% endif %}*/
/* 	</tbody>*/
/* </table>*/
/* */
/* {{ web_macro.paginator(paginator) }}*/
/* */
/* {% endblock %}*/
