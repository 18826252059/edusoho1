<?php

/* TopxiaAdminBundle:Group:set.html.twig */
class __TwigTemplate_0e4a1f3c8ff987d5b2bef05eb2a3ed0fe3c6f2bec53fc0fde0c5216787acb9a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:Group:set.html.twig", 1);
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
        $context["menu"] = "admin_group_set";
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
            <form class=\"form-horizontal\" method=\"post\" id=\"member-zone-form\" novalidate>
           
            <div class=\"row form-group\">
              <div class=\"col-md-2 control-label\">
                <label >首页显示小组信息</label>
              </div>
              <div class=\"controls col-md-7 radios\">
                ";
        // line 15
        echo $this->env->getExtension('topxia_html_twig')->radios("group_show", array(1 => "显示", 0 => "不显示"), (($this->getAttribute($this->env->getExtension('topxia_web_twig')->getSetting("group"), "group_show", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->env->getExtension('topxia_web_twig')->getSetting("group"), "group_show", array()), 1)) : (1)));
        echo "
                <div class=\"help-block\">此功能开关只针对默认主题、默认主题B、清秋主题。</div>
              </div>
            </div>

           <div class=\"row form-group\">
              <div class=\"col-md-2 control-label\" style=\"white-space:nowrap;\">
                <label >最热话题的时间范围</label>
              </div>
              <div class=\"controls col-md-7 radios\">
                ";
        // line 25
        echo $this->env->getExtension('topxia_html_twig')->radios("threadTime_range", array("1" => "天", "7" => "周", "14" => "两周", "30" => "月"), (($this->getAttribute($this->env->getExtension('topxia_web_twig')->getSetting("group"), "threadTime_range", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->env->getExtension('topxia_web_twig')->getSetting("group"), "threadTime_range", array()), "7")) : ("7")));
        echo "
                <div class=\"help-block\"></div>
              </div>
            </div>

            <div class=\"row form-group\">
              <div class=\"col-md-2 control-label\"></div>
              <div class=\"controls col-md-8\">
                <button type=\"submit\" class=\"btn btn-primary\">提交</button>  
              </div>
            </div>

            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
          </form>
      ";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Group:set.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 37,  61 => 25,  48 => 15,  37 => 7,  34 => 6,  31 => 5,  27 => 1,  25 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaAdminBundle::layout.html.twig' %}*/
/* */
/* {% set menu = 'admin_group_set' %}*/
/* */
/* {% block main %}*/
/* */
/*       {{ web_macro.flash_messages() }}*/
/*             <form class="form-horizontal" method="post" id="member-zone-form" novalidate>*/
/*            */
/*             <div class="row form-group">*/
/*               <div class="col-md-2 control-label">*/
/*                 <label >首页显示小组信息</label>*/
/*               </div>*/
/*               <div class="controls col-md-7 radios">*/
/*                 {{ radios('group_show', {1:'显示', 0:'不显示'}, setting('group').group_show|default(1)) }}*/
/*                 <div class="help-block">此功能开关只针对默认主题、默认主题B、清秋主题。</div>*/
/*               </div>*/
/*             </div>*/
/* */
/*            <div class="row form-group">*/
/*               <div class="col-md-2 control-label" style="white-space:nowrap;">*/
/*                 <label >最热话题的时间范围</label>*/
/*               </div>*/
/*               <div class="controls col-md-7 radios">*/
/*                 {{ radios('threadTime_range', {'1':'天', '7':'周','14':'两周','30':'月'}, setting('group').threadTime_range|default('7')) }}*/
/*                 <div class="help-block"></div>*/
/*               </div>*/
/*             </div>*/
/* */
/*             <div class="row form-group">*/
/*               <div class="col-md-2 control-label"></div>*/
/*               <div class="controls col-md-8">*/
/*                 <button type="submit" class="btn btn-primary">提交</button>  */
/*               </div>*/
/*             </div>*/
/* */
/*             <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/*           </form>*/
/*       {% endblock %}*/
/* */
/* */
