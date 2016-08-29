<?php

/* TopxiaAdminBundle:SensitiveWord:index.html.twig */
class __TwigTemplate_ca1368588557f0d5c9090083ebaeb8289448e2d6cf15d9dcdc0770164c1b7ce1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:SensitiveWord:index.html.twig", 1);
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
        $context["menu"] = "admin_setting_sensitive_word";
        // line 4
        $context["script_controller"] = "sensitive-word/index";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        // line 7
        echo "
";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "

<form class=\"form-horizontal\" method=\"post\">
  <div class=\"form-group\">
    <div class=\"col-md-2 control-label\">
      <label>开启敏感词过滤</label>
    </div>
    <div class=\"controls col-md-8 radios\">
      <label><input type=\"radio\" name=\"enabled\" value=\"1\" 
        ";
        // line 17
        if (_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("sensitiveWord.enabled"), 1)) {
            // line 18
            echo "        checked=\"checked\"
        ";
        }
        // line 20
        echo "        > 开启</label>
        <label><input type=\"radio\" name=\"enabled\" value=\"0\"
        ";
        // line 22
        if ( !_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("sensitiveWord.enabled"), 1)) {
            // line 23
            echo "        checked=\"checked\"
        ";
        }
        // line 25
        echo "        > 关闭</label>
      <div class=\"help-block\"></div>
    </div>
  </div>

  <div 
  id='sensitiveWordRules'
  ";
        // line 32
        if ( !_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("sensitiveWord.enabled"), 1)) {
            // line 33
            echo "  style=\"display:none\"
  ";
        }
        // line 35
        echo "  >
    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"name\">忽略的单词</label>
      </div>
      <div class=\"col-md-8 controls\">
        <textarea name=\"ignoreWord\" rows=\"5\" class=\"form-control\">";
        // line 41
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["sensitiveWordSetting"]) ? $context["sensitiveWordSetting"] : null), "ignoreWord", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["sensitiveWordSetting"]) ? $context["sensitiveWordSetting"] : null), "ignoreWord", array()), "")) : ("")), "html", null, true);
        echo "</textarea>
      </div>
    </div>
    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"name\">单词替换</label>
      </div>
      <div class=\"col-md-8 controls\">
        <textarea name=\"wordReplace\" rows=\"5\" class=\"form-control\">";
        // line 49
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["sensitiveWordSetting"]) ? $context["sensitiveWordSetting"] : null), "wordReplace", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["sensitiveWordSetting"]) ? $context["sensitiveWordSetting"] : null), "wordReplace", array()), "")) : ("")), "html", null, true);
        echo "</textarea>
      </div>
    </div>
    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"name\">一级敏感词</label>
      </div>
      <div class=\"col-md-8 controls\">
        <textarea name=\"firstLevel\" rows=\"5\" class=\"form-control\">";
        // line 57
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["sensitiveWordSetting"]) ? $context["sensitiveWordSetting"] : null), "firstLevel", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["sensitiveWordSetting"]) ? $context["sensitiveWordSetting"] : null), "firstLevel", array()), "")) : ("")), "html", null, true);
        echo "</textarea>
      </div>
    </div>
    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"name\">二级敏感词</label>
      </div>
      <div class=\"col-md-8 controls\">
        <textarea name=\"secondLevel\" rows=\"5\" class=\"form-control\">";
        // line 65
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["sensitiveWordSetting"]) ? $context["sensitiveWordSetting"] : null), "secondLevel", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["sensitiveWordSetting"]) ? $context["sensitiveWordSetting"] : null), "secondLevel", array()), "")) : ("")), "html", null, true);
        echo "</textarea>
      </div>
    </div>

  </div>
  <div class=\"form-group\">
    <div class=\"col-md-3 control-label\"></div>
    <div class=\"controls col-md-8\">
      <button type=\"submit\" class=\"btn btn-primary\">提交</button>
    </div>
  </div>
  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
</form>

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:SensitiveWord:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 76,  123 => 65,  112 => 57,  101 => 49,  90 => 41,  82 => 35,  78 => 33,  76 => 32,  67 => 25,  63 => 23,  61 => 22,  57 => 20,  53 => 18,  51 => 17,  39 => 8,  36 => 7,  33 => 6,  29 => 1,  27 => 4,  25 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaAdminBundle::layout.html.twig' %}*/
/* */
/* {% set menu = 'admin_setting_sensitive_word' %}*/
/* {% set script_controller = 'sensitive-word/index' %}*/
/* */
/* {% block main %}*/
/* */
/* {{ web_macro.flash_messages() }}*/
/* */
/* <form class="form-horizontal" method="post">*/
/*   <div class="form-group">*/
/*     <div class="col-md-2 control-label">*/
/*       <label>开启敏感词过滤</label>*/
/*     </div>*/
/*     <div class="controls col-md-8 radios">*/
/*       <label><input type="radio" name="enabled" value="1" */
/*         {% if setting("sensitiveWord.enabled")|default(1) %}*/
/*         checked="checked"*/
/*         {% endif %}*/
/*         > 开启</label>*/
/*         <label><input type="radio" name="enabled" value="0"*/
/*         {% if not setting("sensitiveWord.enabled")|default(1) %}*/
/*         checked="checked"*/
/*         {% endif %}*/
/*         > 关闭</label>*/
/*       <div class="help-block"></div>*/
/*     </div>*/
/*   </div>*/
/* */
/*   <div */
/*   id='sensitiveWordRules'*/
/*   {% if not setting("sensitiveWord.enabled")|default(1) %}*/
/*   style="display:none"*/
/*   {% endif %}*/
/*   >*/
/*     <div class="form-group">*/
/*       <div class="col-md-2 control-label">*/
/*         <label for="name">忽略的单词</label>*/
/*       </div>*/
/*       <div class="col-md-8 controls">*/
/*         <textarea name="ignoreWord" rows="5" class="form-control">{{sensitiveWordSetting.ignoreWord|default('')}}</textarea>*/
/*       </div>*/
/*     </div>*/
/*     <div class="form-group">*/
/*       <div class="col-md-2 control-label">*/
/*         <label for="name">单词替换</label>*/
/*       </div>*/
/*       <div class="col-md-8 controls">*/
/*         <textarea name="wordReplace" rows="5" class="form-control">{{sensitiveWordSetting.wordReplace|default('')}}</textarea>*/
/*       </div>*/
/*     </div>*/
/*     <div class="form-group">*/
/*       <div class="col-md-2 control-label">*/
/*         <label for="name">一级敏感词</label>*/
/*       </div>*/
/*       <div class="col-md-8 controls">*/
/*         <textarea name="firstLevel" rows="5" class="form-control">{{sensitiveWordSetting.firstLevel|default('')}}</textarea>*/
/*       </div>*/
/*     </div>*/
/*     <div class="form-group">*/
/*       <div class="col-md-2 control-label">*/
/*         <label for="name">二级敏感词</label>*/
/*       </div>*/
/*       <div class="col-md-8 controls">*/
/*         <textarea name="secondLevel" rows="5" class="form-control">{{sensitiveWordSetting.secondLevel|default('')}}</textarea>*/
/*       </div>*/
/*     </div>*/
/* */
/*   </div>*/
/*   <div class="form-group">*/
/*     <div class="col-md-3 control-label"></div>*/
/*     <div class="controls col-md-8">*/
/*       <button type="submit" class="btn btn-primary">提交</button>*/
/*     </div>*/
/*   </div>*/
/*   <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/* </form>*/
/* */
/* {% endblock %}*/
