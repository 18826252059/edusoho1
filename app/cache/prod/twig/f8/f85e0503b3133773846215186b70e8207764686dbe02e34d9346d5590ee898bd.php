<?php

/* TopxiaAdminBundle:Article:setting.html.twig */
class __TwigTemplate_47255cf39034bacb07c8dab3e6aca446fb9856fca48a6759efcb2124aa961528 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:Article:setting.html.twig", 1);
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
        $context["menu"] = "admin_article_setting";
        // line 4
        $context["script_controller"] = "article/setting";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        // line 7
        echo "

";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "

  <form class=\"form-horizontal\" id=\"article-form\" method=\"post\">
    
    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"name\">频道名称</label>
      </div>
      <div class=\"col-md-8 controls\">
        <input type=\"text\" id=\"name\" name=\"name\" class=\"form-control\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["articleSetting"]) ? $context["articleSetting"] : null), "name", array()), "html", null, true);
        echo "\">
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"pageNums\">列表每页资讯数</label> 
      </div>
      <div class=\"col-md-8 controls\">
        <input type=\"text\" id=\"pageNums\" name=\"pageNums\" class=\"form-control\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["articleSetting"]) ? $context["articleSetting"] : null), "pageNums", array()), "html", null, true);
        echo "\">
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\"></div>
      <div class=\"controls col-md-8\">
        <button type=\"submit\" class=\"btn btn-primary\">提交</button>  
      </div>
    </div>

    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
  </form>

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Article:setting.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 38,  64 => 27,  52 => 18,  40 => 9,  36 => 7,  33 => 6,  29 => 1,  27 => 4,  25 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaAdminBundle::layout.html.twig' %}*/
/* */
/* {% set menu = 'admin_article_setting' %}*/
/* {% set script_controller = 'article/setting' %}*/
/* */
/* {% block main %}*/
/* */
/* */
/* {{ web_macro.flash_messages() }}*/
/* */
/*   <form class="form-horizontal" id="article-form" method="post">*/
/*     */
/*     <div class="form-group">*/
/*       <div class="col-md-2 control-label">*/
/*         <label for="name">频道名称</label>*/
/*       </div>*/
/*       <div class="col-md-8 controls">*/
/*         <input type="text" id="name" name="name" class="form-control" value="{{ articleSetting.name }}">*/
/*       </div>*/
/*     </div>*/
/* */
/*     <div class="form-group">*/
/*       <div class="col-md-2 control-label">*/
/*         <label for="pageNums">列表每页资讯数</label> */
/*       </div>*/
/*       <div class="col-md-8 controls">*/
/*         <input type="text" id="pageNums" name="pageNums" class="form-control" value="{{ articleSetting.pageNums }}">*/
/*       </div>*/
/*     </div>*/
/* */
/*     <div class="form-group">*/
/*       <div class="col-md-2 control-label"></div>*/
/*       <div class="controls col-md-8">*/
/*         <button type="submit" class="btn btn-primary">提交</button>  */
/*       </div>*/
/*     </div>*/
/* */
/*     <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/*   </form>*/
/* */
/* {% endblock %}*/
