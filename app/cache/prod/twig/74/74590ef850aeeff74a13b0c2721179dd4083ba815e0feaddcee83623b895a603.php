<?php

/* TopxiaAdminBundle:Block:table.html.twig */
class __TwigTemplate_107f375ba1577b0faba10acad677a86ade524c8d774b7ea3b0005addf75103f7 extends Twig_Template
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
        echo "<div class=\"btn-group\">
<a href=\"";
        // line 2
        echo $this->env->getExtension('routing')->getUrl("admin_block", array("category" => "all"));
        echo "\" type=\"button\" class=\"btn btn-default btn-sm ";
        if (((isset($context["type"]) ? $context["type"] : null) == "all")) {
            echo " btn-primary";
        }
        echo "\">所有</a>

<a href=\" ";
        // line 4
        echo $this->env->getExtension('routing')->getUrl("admin_block", array("category" => "theme"));
        echo "\" type=\"button\" class=\"btn btn-default btn-sm ";
        if (((isset($context["type"]) ? $context["type"] : null) == "theme")) {
            echo "btn-primary";
        }
        echo "\">当前主题</a>

<a href=\" ";
        // line 6
        echo $this->env->getExtension('routing')->getUrl("admin_block", array("category" => "system"));
        echo "\" type=\"button\" class=\"btn btn-default btn-sm ";
        if (((isset($context["type"]) ? $context["type"] : null) == "system")) {
            echo "btn-primary";
        }
        echo "\">系统</a>

";
        // line 8
        $context["url"] = ($this->env->getExtension('routing')->getPath("admin_block_match") . "?q={{query}}");
        // line 9
        echo "</div>
<input class=\"form-control quicksearch\" id=\"block-input\"  data-role=\"item-input\" placeholder=\"搜索编辑区\" data-url='";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "'>
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Block:table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 10,  51 => 9,  49 => 8,  40 => 6,  31 => 4,  22 => 2,  19 => 1,);
    }
}
/* <div class="btn-group">*/
/* <a href="{{ url('admin_block', {category: 'all'}) }}" type="button" class="btn btn-default btn-sm {% if type == 'all'%} btn-primary{% endif %}">所有</a>*/
/* */
/* <a href=" {{ url('admin_block', {category: 'theme'}) }}" type="button" class="btn btn-default btn-sm {% if type == 'theme'%}btn-primary{% endif %}">当前主题</a>*/
/* */
/* <a href=" {{ url('admin_block', {category: 'system'}) }}" type="button" class="btn btn-default btn-sm {% if type == 'system'%}btn-primary{% endif %}">系统</a>*/
/* */
/* {% set url = path('admin_block_match') ~ '?q={{query}}' %}*/
/* </div>*/
/* <input class="form-control quicksearch" id="block-input"  data-role="item-input" placeholder="搜索编辑区" data-url='{{url}}'>*/
/* */
