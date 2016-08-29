<?php

/* TopxiaAdminBundle:Block:block-visual-edit.html.twig */
class __TwigTemplate_c7fea646e7e873d7aeed42b4f3a60add83fe5cdf7d3f5884a46c2c5283384e82 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:Block:block-visual-edit.html.twig", 1);
        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
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
        $context["menu"] = "admin_block_visual_edit";
        // line 7
        $context["script_controller"] = "block/visual-edit";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_page_title($context, array $blocks = array())
    {
        echo " 编辑内容 ";
    }

    // line 9
    public function block_main($context, array $blocks = array())
    {
        // line 10
        echo "  <style type=\"text/css\">
    .sortable-list .placeholder {
      margin: 10px 0;
      width: 100%;
      height: 40px;
      background: #FCFFC0;
      border: 1px dashed #ccc;
      list-style: none;
    }
    .nav.sortable-list .placeholder {
      width: 80px;
      padding: 10px 15px;
      background: #eee;
      margin: 0;
    }
    #btn-tabs li {
      width: 66px;
    }
    .nav.nav-pills .dragged{
      position: absolute!important;
    }
  </style>
  ";
        // line 32
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "debug", array())) {
            // line 33
            echo "    <a class=\"btn btn-default btn-sm pull-right\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_block_visual_view_data", array("blockId" => $this->getAttribute((isset($context["block"]) ? $context["block"] : null), "id", array()))), "html", null, true);
            echo "\" target=\"_blank\">查看JSON配置</a>
  ";
        }
        // line 35
        echo "  ";
        if (($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "code", array()) != "jianmo:home_top_banner")) {
            // line 36
            echo "  <!-- <div class=\"col-md-6\"> -->
    <div>
      <h4>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : null), "title", array()), "html", null, true);
            echo "</h4>
      <form id=\"block-edit-form\" class=\"visual-edit-form form-horizontal\" method=\"POST\" action=\"\">
        ";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
            echo "
        ";
            // line 41
            $this->loadTemplate("TopxiaAdminBundle:Block:block-visual-items.html.twig", "TopxiaAdminBundle:Block:block-visual-edit.html.twig", 41)->display($context);
            // line 42
            echo "        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
            echo "\">

        <button id=\"block-save-btn\" data-submiting-text=\"正在提交\" type=\"submit\" class=\"btn btn-primary\" data-toggle=\"block-edit-form\" data-target=\"#block-edit-form\">保存</button>
      </form>
    </div>

  ";
        } else {
            // line 49
            echo "    <!-- 以下是简墨新版的样式 -->
    <h4>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : null), "title", array()), "html", null, true);
            echo "</h4>
    <form id=\"block-edit-form\" class=\"visual-edit-form form-horizontal\" method=\"POST\" action=\"\">
      ";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
            echo "
      ";
            // line 53
            $this->loadTemplate("TopxiaAdminBundle:Block:block-visual-items.html.twig", "TopxiaAdminBundle:Block:block-visual-edit.html.twig", 53)->display($context);
            // line 54
            echo "    </form>
    <!-- 以上是新版的样式 -->
  ";
        }
        // line 57
        echo "
  <!-- <div class=\"col-md-4\">
    ";
        // line 59
        $this->loadTemplate("TopxiaAdminBundle:Block:affix-nav.html.twig", "TopxiaAdminBundle:Block:block-visual-edit.html.twig", 59)->display($context);
        // line 60
        echo "  </div> -->

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Block:block-visual-edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 60,  127 => 59,  123 => 57,  118 => 54,  116 => 53,  112 => 52,  107 => 50,  104 => 49,  93 => 42,  91 => 41,  87 => 40,  82 => 38,  78 => 36,  75 => 35,  69 => 33,  67 => 32,  43 => 10,  40 => 9,  34 => 5,  30 => 1,  28 => 7,  26 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaAdminBundle::layout.html.twig' %}*/
/* */
/* {% set menu = 'admin_block_visual_edit' %}*/
/* */
/* {% block page_title %} 编辑内容 {% endblock %}*/
/* */
/* {% set script_controller = 'block/visual-edit' %}*/
/* */
/* {% block main %}*/
/*   <style type="text/css">*/
/*     .sortable-list .placeholder {*/
/*       margin: 10px 0;*/
/*       width: 100%;*/
/*       height: 40px;*/
/*       background: #FCFFC0;*/
/*       border: 1px dashed #ccc;*/
/*       list-style: none;*/
/*     }*/
/*     .nav.sortable-list .placeholder {*/
/*       width: 80px;*/
/*       padding: 10px 15px;*/
/*       background: #eee;*/
/*       margin: 0;*/
/*     }*/
/*     #btn-tabs li {*/
/*       width: 66px;*/
/*     }*/
/*     .nav.nav-pills .dragged{*/
/*       position: absolute!important;*/
/*     }*/
/*   </style>*/
/*   {% if app.debug %}*/
/*     <a class="btn btn-default btn-sm pull-right" href="{{ path('admin_block_visual_view_data', {blockId:block.id}) }}" target="_blank">查看JSON配置</a>*/
/*   {% endif %}*/
/*   {% if block.code != 'jianmo:home_top_banner' %}*/
/*   <!-- <div class="col-md-6"> -->*/
/*     <div>*/
/*       <h4>{{ block.title }}</h4>*/
/*       <form id="block-edit-form" class="visual-edit-form form-horizontal" method="POST" action="">*/
/*         {{ web_macro.flash_messages() }}*/
/*         {% include 'TopxiaAdminBundle:Block:block-visual-items.html.twig' %}*/
/*         <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/* */
/*         <button id="block-save-btn" data-submiting-text="正在提交" type="submit" class="btn btn-primary" data-toggle="block-edit-form" data-target="#block-edit-form">保存</button>*/
/*       </form>*/
/*     </div>*/
/* */
/*   {% else %}*/
/*     <!-- 以下是简墨新版的样式 -->*/
/*     <h4>{{ block.title }}</h4>*/
/*     <form id="block-edit-form" class="visual-edit-form form-horizontal" method="POST" action="">*/
/*       {{ web_macro.flash_messages() }}*/
/*       {% include 'TopxiaAdminBundle:Block:block-visual-items.html.twig' %}*/
/*     </form>*/
/*     <!-- 以上是新版的样式 -->*/
/*   {% endif %}*/
/* */
/*   <!-- <div class="col-md-4">*/
/*     {% include 'TopxiaAdminBundle:Block:affix-nav.html.twig' %}*/
/*   </div> -->*/
/* */
/* {% endblock %}*/
