<?php

/* TopxiaWebBundle:PasswordReset:update.html.twig */
class __TwigTemplate_cc23651b255a75fda1c0c25d6478662ee9017aadbf9ea914653f92d06a52c570 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "TopxiaWebBundle:PasswordReset:update.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 4
        $context["script_controller"] = "auth/password-reset-update";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "重设密码 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "<div class=\"row\">
  <div class=\"col-md-6 col-md-offset-3 ptl\">
    <div class=\"panel panel-default panel-page\">
      <div class=\"panel-heading\"><h2>重设密码</h2></div>

      <form id=\"password-reset-update-form\" class=\"form-vertical\" method=\"post\">

        ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "

        <div class=\"form-group\">
          ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "password", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "新密码"));
        echo "
          <div class=\"controls\">
            ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "password", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
          </div>
        </div>

        <div class=\"form-group\">
          ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "confirmPassword", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "确认密码"));
        echo "
          <div class=\"controls\">
            ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "confirmPassword", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            <p class=\"help-block\">请再输入一次密码</p>
          </div>
        </div>

        <div class=\"form-group\">
          <div class=\"controls\">
            ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "
            <button type=\"submit\" class=\"btn btn-primary\">重设密码</button>
          </div>
        </div>

        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">

      </form>

    </div><!-- /panel -->

  </div>

</div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:PasswordReset:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 38,  85 => 33,  75 => 26,  70 => 24,  62 => 19,  57 => 17,  51 => 14,  42 => 7,  39 => 6,  32 => 3,  28 => 1,  26 => 4,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::layout.html.twig' %}*/
/* */
/* {% block title %}重设密码 - {{ parent() }}{% endblock %}*/
/* {% set script_controller = 'auth/password-reset-update' %}*/
/* */
/* {% block content %}*/
/* <div class="row">*/
/*   <div class="col-md-6 col-md-offset-3 ptl">*/
/*     <div class="panel panel-default panel-page">*/
/*       <div class="panel-heading"><h2>重设密码</h2></div>*/
/* */
/*       <form id="password-reset-update-form" class="form-vertical" method="post">*/
/* */
/*         {{ web_macro.flash_messages() }}*/
/* */
/*         <div class="form-group">*/
/*           {{ form_label(form.password, '新密码', {label_attr:{class:'control-label'}}) }}*/
/*           <div class="controls">*/
/*             {{ form_widget(form.password, {attr:{class:'form-control'}}) }}*/
/*           </div>*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*           {{ form_label(form.confirmPassword, '确认密码', {label_attr:{class:'control-label'}}) }}*/
/*           <div class="controls">*/
/*             {{ form_widget(form.confirmPassword, {attr:{class:'form-control'}}) }}*/
/*             <p class="help-block">请再输入一次密码</p>*/
/*           </div>*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*           <div class="controls">*/
/*             {{ form_rest(form) }}*/
/*             <button type="submit" class="btn btn-primary">重设密码</button>*/
/*           </div>*/
/*         </div>*/
/* */
/*         <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/* */
/*       </form>*/
/* */
/*     </div><!-- /panel -->*/
/* */
/*   </div>*/
/* */
/* </div>*/
/* {% endblock %}*/
