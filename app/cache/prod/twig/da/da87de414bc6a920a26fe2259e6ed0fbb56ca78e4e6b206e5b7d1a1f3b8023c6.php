<?php

/* ClassroomBundle:ClassroomAdmin:set.html.twig */
class __TwigTemplate_cd570997e5af0374425417806e2228e9541cfc64e82f3e5056795b9e6b399bdf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "ClassroomBundle:ClassroomAdmin:set.html.twig", 1);
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
        $context["menu"] = "admin_classroom_setting";
        // line 5
        $context["script_controller"] = "classroombundle/controller/classroom-admin/set";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "
  ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "

  <form class=\"form-horizontal\" method=\"post\" id=\"member-zone-form\" novalidate>
   
    <input type=\"hidden\" name=\"enabled\" value=\"1\"/>
    
    <div class=\"row form-group\">
      <div class=\"col-md-2 control-label\">
        <label >班级称谓设置</label>
      </div>
      <div class=\"controls col-md-4\">
        <input name=\"name\" type=\"text\" class=\"form-control\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, (($this->getAttribute($this->env->getExtension('topxia_web_twig')->getSetting("classroom"), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->env->getExtension('topxia_web_twig')->getSetting("classroom"), "name", array()), "")) : ("")), "html", null, true);
        echo "\"/>
        <div class=\"help-block\">用户所能看到的是这里设置的称谓</div>
      </div>
    </div>

    <div class=\"alert alert-warning col-md-offset-2\" role=\"alert\">请注意：以下设置涉及到班级的基本运作模式，请谨慎设置，且不要经常性变更！
    </div>
    
    <div class=\"row form-group\">
      <div class=\"col-md-2 control-label\">
        <label >课程重合时折价购买</label>
      </div>
      <div class=\"controls col-md-7 radios\">
        ";
        // line 33
        echo $this->env->getExtension('topxia_html_twig')->radios("discount_buy", array(1 => "是", 0 => "否"), (($this->getAttribute($this->env->getExtension('topxia_web_twig')->getSetting("classroom"), "discount_buy", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->env->getExtension('topxia_web_twig')->getSetting("classroom"), "discount_buy", array()), 1)) : (1)));
        echo "
        <div class=\"help-block\">学员在购买班级之前，如果已经购买了某个课程，班级价格将会扣除该课程的售价</div>
      </div>
    </div>

    <div class=\"row form-group\">
      <div class=\"col-md-2 control-label\"></div>
      <div class=\"controls col-md-8\">
        <button type=\"submit\" class=\"btn btn-primary\">提交</button>  
      </div>
    </div>

    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
  </form>
";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:ClassroomAdmin:set.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 45,  69 => 33,  53 => 20,  39 => 9,  36 => 8,  33 => 7,  29 => 1,  27 => 5,  25 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaAdminBundle::layout.html.twig' %}*/
/* */
/* {% set menu = 'admin_classroom_setting' %}*/
/* */
/* {% set script_controller='classroombundle/controller/classroom-admin/set' %}*/
/* */
/* {% block main %}*/
/* */
/*   {{ web_macro.flash_messages() }}*/
/* */
/*   <form class="form-horizontal" method="post" id="member-zone-form" novalidate>*/
/*    */
/*     <input type="hidden" name="enabled" value="1"/>*/
/*     */
/*     <div class="row form-group">*/
/*       <div class="col-md-2 control-label">*/
/*         <label >班级称谓设置</label>*/
/*       </div>*/
/*       <div class="controls col-md-4">*/
/*         <input name="name" type="text" class="form-control" value="{{setting('classroom').name|default("")}}"/>*/
/*         <div class="help-block">用户所能看到的是这里设置的称谓</div>*/
/*       </div>*/
/*     </div>*/
/* */
/*     <div class="alert alert-warning col-md-offset-2" role="alert">请注意：以下设置涉及到班级的基本运作模式，请谨慎设置，且不要经常性变更！*/
/*     </div>*/
/*     */
/*     <div class="row form-group">*/
/*       <div class="col-md-2 control-label">*/
/*         <label >课程重合时折价购买</label>*/
/*       </div>*/
/*       <div class="controls col-md-7 radios">*/
/*         {{ radios('discount_buy', {1:'是', 0:'否'}, setting('classroom').discount_buy|default(1)) }}*/
/*         <div class="help-block">学员在购买班级之前，如果已经购买了某个课程，班级价格将会扣除该课程的售价</div>*/
/*       </div>*/
/*     </div>*/
/* */
/*     <div class="row form-group">*/
/*       <div class="col-md-2 control-label"></div>*/
/*       <div class="controls col-md-8">*/
/*         <button type="submit" class="btn btn-primary">提交</button>  */
/*       </div>*/
/*     </div>*/
/* */
/*     <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/*   </form>*/
/* {% endblock %}*/
/* */
/* */
