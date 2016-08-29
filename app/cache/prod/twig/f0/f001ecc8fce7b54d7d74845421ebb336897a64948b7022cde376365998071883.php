<?php

/* TopxiaAdminBundle:System:cdn-setting.html.twig */
class __TwigTemplate_7eeaccc87f5061043f040ee57a87931f3d8ef0f8081efd2dd8216df60db76f25 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:System:cdn-setting.html.twig", 1);
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
        $context["menu"] = "admin_setting_massage";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        // line 6
        echo "
<div class=\"page-header\"><h1>CDN设置</h1></div>

";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "

<form class=\"form-horizontal\" id=\"cdn-form\" method=\"post\">
  
  <div class=\"form-group\">
    <label class=\"col-md-2 control-label\">状态</label>
    <div class=\"col-md-8 controls radios\">
      ";
        // line 16
        echo $this->env->getExtension('topxia_html_twig')->radios("enabled", array(1 => "启用", 0 => "关闭"), $this->getAttribute((isset($context["cdn"]) ? $context["cdn"] : null), "enabled", array()));
        echo "
    </div>
  </div>

  <div class=\"form-group\">
    <label class=\"col-md-2 control-label\">URL</label>
    <div class=\"col-md-8 controls\">
      <input type=\"text\" name=\"url\" class=\"form-control\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cdn"]) ? $context["cdn"] : null), "url", array()), "html", null, true);
        echo "\">
    </div>
  </div>

  <div class=\"form-group\">
    <div class=\"controls col-md-offset-2 col-md-8\">
      <button type=\"submit\" class=\"btn btn-primary\">提交</button>
    </div>
  </div>

  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">

</form>

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System:cdn-setting.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 33,  59 => 23,  49 => 16,  39 => 9,  34 => 6,  31 => 5,  27 => 1,  25 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaAdminBundle::layout.html.twig' %}*/
/* */
/* {% set menu = 'admin_setting_massage' %}*/
/* */
/* {% block main %}*/
/* */
/* <div class="page-header"><h1>CDN设置</h1></div>*/
/* */
/* {{ web_macro.flash_messages() }}*/
/* */
/* <form class="form-horizontal" id="cdn-form" method="post">*/
/*   */
/*   <div class="form-group">*/
/*     <label class="col-md-2 control-label">状态</label>*/
/*     <div class="col-md-8 controls radios">*/
/*       {{ radios('enabled', {1:'启用', 0:'关闭'}, cdn.enabled) }}*/
/*     </div>*/
/*   </div>*/
/* */
/*   <div class="form-group">*/
/*     <label class="col-md-2 control-label">URL</label>*/
/*     <div class="col-md-8 controls">*/
/*       <input type="text" name="url" class="form-control" value="{{cdn.url}}">*/
/*     </div>*/
/*   </div>*/
/* */
/*   <div class="form-group">*/
/*     <div class="controls col-md-offset-2 col-md-8">*/
/*       <button type="submit" class="btn btn-primary">提交</button>*/
/*     </div>*/
/*   </div>*/
/* */
/*   <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/* */
/* </form>*/
/* */
/* {% endblock %}*/
