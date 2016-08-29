<?php

/* TopxiaAdminBundle:System:esbar-setting.html.twig */
class __TwigTemplate_1e3e78dd78cccf9c6bcc4726e514391c0f1c58553ce48bbaf01c25c1e6fc5b45 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:System:esbar-setting.html.twig", 1);
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
        $context["menu"] = "admin_setting_es_bar";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        // line 6
        echo "
";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "

<form class=\"form-horizontal\" method=\"post\" id=\"esbar-setting-form\" novalidate>
  <div class=\"row form-group\">
    <div class=\"col-md-3 control-label\">
      <label >侧边栏功能</label>

    </div>
    <div class=\"controls col-md-8 radios\">
      ";
        // line 16
        echo $this->env->getExtension('topxia_html_twig')->radios("enabled", array(1 => "开启", 0 => "关闭"), $this->getAttribute((isset($context["esBar"]) ? $context["esBar"] : null), "enabled", array()));
        echo "
    </div>
  </div>

  <div class=\"row form-group\">
    <div class=\"col-md-3 control-label\"></div>
    <div class=\"controls col-md-8\">
      <button type=\"submit\" class=\"btn btn-primary\">提交</button>
    </div>
  </div>
  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
</form>

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System:esbar-setting.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 26,  49 => 16,  37 => 7,  34 => 6,  31 => 5,  27 => 1,  25 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaAdminBundle::layout.html.twig' %}*/
/* */
/* {% set menu = 'admin_setting_es_bar' %}*/
/* */
/* {% block main %}*/
/* */
/* {{ web_macro.flash_messages() }}*/
/* */
/* <form class="form-horizontal" method="post" id="esbar-setting-form" novalidate>*/
/*   <div class="row form-group">*/
/*     <div class="col-md-3 control-label">*/
/*       <label >侧边栏功能</label>*/
/* */
/*     </div>*/
/*     <div class="controls col-md-8 radios">*/
/*       {{ radios('enabled', {1:'开启', 0:'关闭'}, esBar.enabled) }}*/
/*     </div>*/
/*   </div>*/
/* */
/*   <div class="row form-group">*/
/*     <div class="col-md-3 control-label"></div>*/
/*     <div class="controls col-md-8">*/
/*       <button type="submit" class="btn btn-primary">提交</button>*/
/*     </div>*/
/*   </div>*/
/*   <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/* </form>*/
/* */
/* {% endblock %}*/
