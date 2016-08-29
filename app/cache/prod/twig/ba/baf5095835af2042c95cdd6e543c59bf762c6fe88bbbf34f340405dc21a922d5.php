<?php

/* TopxiaAdminBundle:Tag:tag-modal.html.twig */
class __TwigTemplate_dac1f07955d3746e26a687e3652f17ae69daeb8050c919d9c60e8e05c97dedb6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "TopxiaAdminBundle:Tag:tag-modal.html.twig", 1);
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
        $context["tag"] = ((array_key_exists("tag", $context)) ? (_twig_default_filter((isset($context["tag"]) ? $context["tag"] : null), null)) : (null));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        // line 5
        if ($this->getAttribute((isset($context["tag"]) ? $context["tag"] : null), "id", array())) {
            echo "编辑";
        } else {
            echo "新增";
        }
        echo "标签
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "  <form class=\"form-horizontal\" id=\"tag-form\" action=\"";
        if ($this->getAttribute((isset($context["tag"]) ? $context["tag"] : null), "id", array())) {
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_tag_update", array("id" => $this->getAttribute((isset($context["tag"]) ? $context["tag"] : null), "id", array()))), "html", null, true);
        } else {
            echo $this->env->getExtension('routing')->getPath("admin_tag_create");
        }
        echo "\" method=\"post\">
    <div class=\"form-group\">
      <label class=\"col-md-3 control-label\" for=\"tag-name-field\">标签名称</label>
      <div class=\"col-md-6 controls\">
        <input class=\"form-control\" id=\"tag-name-field\" type=\"text\" name=\"name\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tag"]) ? $context["tag"] : null), "name", array()), "html", null, true);
        echo "\" data-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_tag_checkname", array("exclude" => $this->getAttribute((isset($context["tag"]) ? $context["tag"] : null), "name", array()))), "html", null, true);
        echo "\">
      </div>
    </div>
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
  </form>
  <script type=\"text/javascript\">app.load('tag/save-modal')</script>
";
    }

    // line 20
    public function block_footer($context, array $blocks = array())
    {
        // line 21
        echo "  ";
        if ($this->getAttribute((isset($context["tag"]) ? $context["tag"] : null), "id", array())) {
            // line 22
            echo "    <button class=\"btn btn-default pull-left delete-tag\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_tag_delete", array("id" => $this->getAttribute((isset($context["tag"]) ? $context["tag"] : null), "id", array()))), "html", null, true);
            echo "\" data-target=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tag"]) ? $context["tag"] : null), "id", array()), "html", null, true);
            echo "\" data-tag-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tag"]) ? $context["tag"] : null), "id", array()), "html", null, true);
            echo "\"><i class=\"glyphicon glyphicon-trash\"></i> 删除</button>
  ";
        }
        // line 24
        echo "
  <button type=\"button\" class=\"btn btn-link\" data-dismiss=\"modal\">取消</button>
  <button id=\"tag-create-btn\" data-submiting-text=\"正在提交\" type=\"submit\" class=\"btn btn-primary\" data-toggle=\"form-submit\" data-target=\"#tag-form\">保存</button>
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Tag:tag-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 24,  83 => 22,  80 => 21,  77 => 20,  69 => 15,  61 => 12,  49 => 8,  46 => 7,  36 => 5,  33 => 4,  29 => 1,  27 => 2,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::bootstrap-modal-layout.html.twig' %}*/
/* {% set tag = tag|default(null) %}*/
/* */
/* {% block title %}*/
/* {% if tag.id %}编辑{% else %}新增{% endif %}标签*/
/* {% endblock %}*/
/* {% block body %}*/
/*   <form class="form-horizontal" id="tag-form" action="{% if tag.id %}{{ path('admin_tag_update', {id:tag.id}) }}{% else %}{{ path('admin_tag_create') }}{% endif %}" method="post">*/
/*     <div class="form-group">*/
/*       <label class="col-md-3 control-label" for="tag-name-field">标签名称</label>*/
/*       <div class="col-md-6 controls">*/
/*         <input class="form-control" id="tag-name-field" type="text" name="name" value="{{ tag.name }}" data-url="{{ path('admin_tag_checkname', {exclude:tag.name}) }}">*/
/*       </div>*/
/*     </div>*/
/*     <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/*   </form>*/
/*   <script type="text/javascript">app.load('tag/save-modal')</script>*/
/* {% endblock %}*/
/* */
/* {% block footer %}*/
/*   {% if tag.id %}*/
/*     <button class="btn btn-default pull-left delete-tag" data-url="{{ path('admin_tag_delete', {id:tag.id}) }}" data-target="{{ tag.id }}" data-tag-id="{{ tag.id }}"><i class="glyphicon glyphicon-trash"></i> 删除</button>*/
/*   {% endif %}*/
/* */
/*   <button type="button" class="btn btn-link" data-dismiss="modal">取消</button>*/
/*   <button id="tag-create-btn" data-submiting-text="正在提交" type="submit" class="btn btn-primary" data-toggle="form-submit" data-target="#tag-form">保存</button>*/
/* {% endblock %}*/
/* */
