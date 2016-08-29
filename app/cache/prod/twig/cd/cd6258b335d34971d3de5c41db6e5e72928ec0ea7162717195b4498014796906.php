<?php

/* TopxiaAdminBundle:Article:index.html.twig */
class __TwigTemplate_6c356ed3b56ddaeb7e18d2c4c9e8e39714c2aaa0a50fd49a5551ab702279e215 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:Article:index.html.twig", 1);
        $this->blocks = array(
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
        $context["script_controller"] = "article/list";
        // line 5
        $context["menu"] = "admin_operation_article_manage";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "
<form class=\"well well-sm form-inline\" action=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("admin_article");
        echo "\">
\t<div class=\"form-group\">
\t\t<select class=\"form-control\" name=\"categoryId\">
\t\t <option value=\"\">--所属栏目--</option>
\t\t   ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categoryTree"]) ? $context["categoryTree"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["tree"]) {
            // line 14
            echo "\t\t\t\t\t<option value=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tree"], "id", array()), "html", null, true);
            echo " ";
            if (($this->getAttribute($context["tree"], "id", array()) == (isset($context["categoryId"]) ? $context["categoryId"] : null))) {
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
        // line 16
        echo "\t\t</select>
\t</div>
\t<div class=\"form-group\">
\t\t<input class=\"form-control\" name=\"keywords\" type=\"text\" placeholder=\"标题关键词\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "keywords"), "method"), "html", null, true);
        echo "\">
\t</div>
\t<div class=\"form-group\">
\t\t<select class=\"form-control\" name=\"property\">
\t\t  ";
        // line 23
        echo $this->env->getExtension('topxia_html_twig')->selectOptions($this->env->getExtension('topxia_web_twig')->getDict("articleProperty"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "property"), "method"), "--属性--");
        echo "
\t\t</select>
\t</div>
\t<div class=\"form-group\">
\t\t<select class=\"form-control\" name=\"status\">
\t\t  ";
        // line 28
        echo $this->env->getExtension('topxia_html_twig')->selectOptions($this->env->getExtension('topxia_web_twig')->getDict("articleStatus"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "status"), "method"), "--发布状态--");
        echo "
\t\t</select>
\t</div>
\t<button class=\"btn btn-primary\" type=\"submit\">搜索</button>

</form>

<div id=\"aticle-table-container\">

<table class=\"table table-hover table-striped\" id=\"article-table\">
\t<thead>
\t\t<tr>
\t\t\t<th width=\"10%\"><input type=\"checkbox\"  data-role=\"batch-select\"> ID</th>
\t\t\t<th width=\"20%\">资讯标题</th>
\t\t\t<th width=\"15%\">栏目</th>
\t\t\t<th width=\"18%\">更新时间</th>
\t\t\t<th width=\"15%\">属性</th>
\t\t\t<th width=\"10%\">状态</th>
\t\t\t<th width=\"15%\">操作</th>
\t\t</tr>
\t</thead>
\t<tbody>
\t\t";
        // line 50
        if ((isset($context["articles"]) ? $context["articles"] : null)) {
            // line 51
            echo "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 52
                echo "\t\t\t  ";
                $context["category"] = (($this->getAttribute((isset($context["categories"]) ? $context["categories"] : null), $this->getAttribute($context["article"], "categoryId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["categories"]) ? $context["categories"] : null), $this->getAttribute($context["article"], "categoryId", array()), array(), "array"), null)) : (null));
                // line 53
                echo "\t\t\t  ";
                $this->loadTemplate("TopxiaAdminBundle:Article:article-tr.html.twig", "TopxiaAdminBundle:Article:index.html.twig", 53)->display($context);
                // line 54
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "\t\t";
        } else {
            // line 56
            echo "\t\t\t<tr><td colspan=\"20\"><div class=\"empty\">暂无页面记录</div></td></tr>
\t\t";
        }
        // line 58
        echo "\t</tbody>
\t</table>
  <div>
    <label class=\"checkbox-inline\"><input type=\"checkbox\" data-role=\"batch-select\"> 全选</label>
    <button class=\"btn btn-default btn-sm mlm\" data-role=\"batch-delete\"  data-name=\"资讯\" data-url=\"";
        // line 62
        echo $this->env->getExtension('routing')->getPath("admin_article_delete");
        echo "\">删除</button>
  </div>
  </div>

";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo "

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Article:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 66,  172 => 62,  166 => 58,  162 => 56,  159 => 55,  145 => 54,  142 => 53,  139 => 52,  121 => 51,  119 => 50,  94 => 28,  86 => 23,  79 => 19,  74 => 16,  50 => 14,  46 => 13,  39 => 9,  36 => 8,  33 => 7,  29 => 1,  27 => 5,  25 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaAdminBundle::layout.html.twig' %}*/
/* */
/* {% set script_controller = 'article/list' %}*/
/* */
/* {% set menu = 'admin_operation_article_manage' %}*/
/* */
/* {% block main %}*/
/* */
/* <form class="well well-sm form-inline" action="{{ path('admin_article') }}">*/
/* 	<div class="form-group">*/
/* 		<select class="form-control" name="categoryId">*/
/* 		 <option value="">--所属栏目--</option>*/
/* 		   {% for tree in categoryTree %}*/
/* 					<option value={{ tree.id }} {% if tree.id == categoryId  %}selected{% endif%}>{% for i in 0..(tree.depth-1)*2 %}&nbsp;&nbsp;&nbsp;&nbsp;{% endfor %}└─ {{ tree.name }}</option>*/
/* 					{% endfor %}*/
/* 		</select>*/
/* 	</div>*/
/* 	<div class="form-group">*/
/* 		<input class="form-control" name="keywords" type="text" placeholder="标题关键词" value="{{ app.request.query.get('keywords') }}">*/
/* 	</div>*/
/* 	<div class="form-group">*/
/* 		<select class="form-control" name="property">*/
/* 		  {{ select_options(dict('articleProperty'), app.request.query.get('property'), '--属性--') }}*/
/* 		</select>*/
/* 	</div>*/
/* 	<div class="form-group">*/
/* 		<select class="form-control" name="status">*/
/* 		  {{ select_options(dict('articleStatus'), app.request.query.get('status'), '--发布状态--') }}*/
/* 		</select>*/
/* 	</div>*/
/* 	<button class="btn btn-primary" type="submit">搜索</button>*/
/* */
/* </form>*/
/* */
/* <div id="aticle-table-container">*/
/* */
/* <table class="table table-hover table-striped" id="article-table">*/
/* 	<thead>*/
/* 		<tr>*/
/* 			<th width="10%"><input type="checkbox"  data-role="batch-select"> ID</th>*/
/* 			<th width="20%">资讯标题</th>*/
/* 			<th width="15%">栏目</th>*/
/* 			<th width="18%">更新时间</th>*/
/* 			<th width="15%">属性</th>*/
/* 			<th width="10%">状态</th>*/
/* 			<th width="15%">操作</th>*/
/* 		</tr>*/
/* 	</thead>*/
/* 	<tbody>*/
/* 		{% if articles %}*/
/* 			{% for article in articles %}*/
/* 			  {% set category = categories[article.categoryId]|default(null) %}*/
/* 			  {% include 'TopxiaAdminBundle:Article:article-tr.html.twig' %}*/
/* 			{% endfor %}*/
/* 		{% else %}*/
/* 			<tr><td colspan="20"><div class="empty">暂无页面记录</div></td></tr>*/
/* 		{% endif %}*/
/* 	</tbody>*/
/* 	</table>*/
/*   <div>*/
/*     <label class="checkbox-inline"><input type="checkbox" data-role="batch-select"> 全选</label>*/
/*     <button class="btn btn-default btn-sm mlm" data-role="batch-delete"  data-name="资讯" data-url="{{ path('admin_article_delete') }}">删除</button>*/
/*   </div>*/
/*   </div>*/
/* */
/* {{ web_macro.paginator(paginator) }}*/
/* */
/* {% endblock %}*/
