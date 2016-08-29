<?php

/* TopxiaAdminBundle:Block/Tag:link.html.twig */
class __TwigTemplate_2be2c09e875698728b3c582dc6bdf7730a31c993b9b330e01ed7bb66b100143c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"form-group\">
  <label class=\"control-label col-md-3 col-xs-3\" for=\"data[";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["code"]) ? $context["code"] : null), "html", null, true);
        echo "][";
        echo twig_escape_filter($this->env, (isset($context["dataId"]) ? $context["dataId"] : null), "html", null, true);
        echo "][value]\">链接文本</label>
  <div class=\"col-md-9 col-xs-9\">
    <input class=\"form-control js-label-input\" type=\"text\" name=\"data[";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["code"]) ? $context["code"] : null), "html", null, true);
        echo "][";
        echo twig_escape_filter($this->env, (isset($context["dataId"]) ? $context["dataId"] : null), "html", null, true);
        echo "][value]\" value=\"";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "value", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "value", array()), "")) : ("")), "html", null, true);
        echo "\">
  </div>
 </div>
 <div class=\"form-group\">
  <label class=\"control-label col-md-3 col-xs-3\" for=\"data[";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["code"]) ? $context["code"] : null), "html", null, true);
        echo "][";
        echo twig_escape_filter($this->env, (isset($context["dataId"]) ? $context["dataId"] : null), "html", null, true);
        echo "][href]\">链接地址</label>
  <div class=\"col-md-9 col-xs-9\">
    <input class=\"form-control\" type=\"text\" name=\"data[";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["code"]) ? $context["code"] : null), "html", null, true);
        echo "][";
        echo twig_escape_filter($this->env, (isset($context["dataId"]) ? $context["dataId"] : null), "html", null, true);
        echo "][href]\" value=\"";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "href", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "href", array()), "")) : ("")), "html", null, true);
        echo "\" placeholder=\"http://\" >
  </div>
 </div>
 <div class=\"form-group\">
  <label class=\"control-label col-md-3 col-xs-3\">打开新窗口</label>
  <label class=\"checkbox-inline\"><input type=\"radio\" data-role=\"radio-yes\" name=\"data[";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["code"]) ? $context["code"] : null), "html", null, true);
        echo "][";
        echo twig_escape_filter($this->env, (isset($context["dataId"]) ? $context["dataId"] : null), "html", null, true);
        echo "][target]\" value=\"_blank\" ";
        if (((($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "target", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "target", array()), "_self")) : ("_self")) == "_blank")) {
            echo " checked=\"checked\" ";
        }
        echo "> 是</label>
  <label class=\"checkbox-inline\"><input type=\"radio\" data-role=\"radio-no\" name=\"data[";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["code"]) ? $context["code"] : null), "html", null, true);
        echo "][";
        echo twig_escape_filter($this->env, (isset($context["dataId"]) ? $context["dataId"] : null), "html", null, true);
        echo "][target]\" value=\"_self\" ";
        if (((($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "target", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "target", array()), "_self")) : ("_self")) == "_self")) {
            echo " checked=\"checked\" ";
        }
        echo "> 否</label>
 </div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Block/Tag:link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 16,  59 => 15,  47 => 10,  40 => 8,  29 => 4,  22 => 2,  19 => 1,);
    }
}
/* <div class="form-group">*/
/*   <label class="control-label col-md-3 col-xs-3" for="data[{{ code }}][{{ dataId }}][value]">链接文本</label>*/
/*   <div class="col-md-9 col-xs-9">*/
/*     <input class="form-control js-label-input" type="text" name="data[{{ code }}][{{ dataId }}][value]" value="{{ data.value|default('') }}">*/
/*   </div>*/
/*  </div>*/
/*  <div class="form-group">*/
/*   <label class="control-label col-md-3 col-xs-3" for="data[{{ code }}][{{ dataId }}][href]">链接地址</label>*/
/*   <div class="col-md-9 col-xs-9">*/
/*     <input class="form-control" type="text" name="data[{{ code }}][{{ dataId }}][href]" value="{{ data.href|default('') }}" placeholder="http://" >*/
/*   </div>*/
/*  </div>*/
/*  <div class="form-group">*/
/*   <label class="control-label col-md-3 col-xs-3">打开新窗口</label>*/
/*   <label class="checkbox-inline"><input type="radio" data-role="radio-yes" name="data[{{ code }}][{{ dataId }}][target]" value="_blank" {% if data.target|default('_self') == '_blank' %} checked="checked" {% endif %}> 是</label>*/
/*   <label class="checkbox-inline"><input type="radio" data-role="radio-no" name="data[{{ code }}][{{ dataId }}][target]" value="_self" {% if data.target|default('_self') == '_self' %} checked="checked" {% endif %}> 否</label>*/
/*  </div>*/
/* */
