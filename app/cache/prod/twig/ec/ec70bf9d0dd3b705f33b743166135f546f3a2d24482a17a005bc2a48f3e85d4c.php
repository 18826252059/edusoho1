<?php

/* TopxiaAdminBundle:System:questions-setting.html.twig */
class __TwigTemplate_f945fd1d0f7fd8398b3494e50e682b97ba07c9dc122829291276871c9c687f9b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:System:questions-setting.html.twig", 1);
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
        $context["menu"] = "admin_setting_questions_setting";
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

<form class=\"form-horizontal\" method=\"post\" id=\"course-form\" novalidate>

<fieldset>
    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label>交卷后答案以及解析的显示</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 17
        echo $this->env->getExtension('topxia_html_twig')->radios("testpaper_answers_show_mode", array("hide" => "不显示", "reviewed" => "全部批阅完成后一起显示", "submitted" => "交卷后显示答案和解析"), $this->env->getExtension('topxia_web_twig')->getSetting("questions.testpaper_answers_show_mode", "submitted"));
        echo "
      </div>
    </div>
</fieldset>

  <div class=\"form-group\">
    <div class=\"controls col-md-offset-3 col-md-8\">
      <button type=\"submit\" class=\"btn btn-primary\">提交</button>
    </div>
  </div>
  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">

</form>

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System:questions-setting.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 27,  50 => 17,  37 => 7,  34 => 6,  31 => 5,  27 => 1,  25 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaAdminBundle::layout.html.twig' %}*/
/* */
/* {% set menu = 'admin_setting_questions_setting' %}*/
/* */
/* {% block main %}*/
/* */
/* {{ web_macro.flash_messages() }}*/
/* */
/* <form class="form-horizontal" method="post" id="course-form" novalidate>*/
/* */
/* <fieldset>*/
/*     <div class="form-group">*/
/*       <div class="col-md-3 control-label">*/
/*         <label>交卷后答案以及解析的显示</label>*/
/*       </div>*/
/*       <div class="controls col-md-8 radios">*/
/*         {{ radios('testpaper_answers_show_mode', {'hide':'不显示', 'reviewed':'全部批阅完成后一起显示' , 'submitted':'交卷后显示答案和解析'}, setting('questions.testpaper_answers_show_mode','submitted')) }}*/
/*       </div>*/
/*     </div>*/
/* </fieldset>*/
/* */
/*   <div class="form-group">*/
/*     <div class="controls col-md-offset-3 col-md-8">*/
/*       <button type="submit" class="btn btn-primary">提交</button>*/
/*     </div>*/
/*   </div>*/
/*   <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/* */
/* </form>*/
/* */
/* {% endblock %}*/
