<?php

/* TopxiaAdminBundle:Block/Tag:textarea.html.twig */
class __TwigTemplate_16ecf3ed4d82856857cb62aeed9eacd1c682e681527cca430787317109b453ee extends Twig_Template
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
        echo "][value]\">内容</label>
  <div class=\"col-md-9 col-xs-9\">
    <textarea class=\"form-control js-label-input\" name=\"data[";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["code"]) ? $context["code"] : null), "html", null, true);
        echo "][";
        echo twig_escape_filter($this->env, (isset($context["dataId"]) ? $context["dataId"] : null), "html", null, true);
        echo "][value]\" rows=\"5\" style=\"resize:vertical\">";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "value", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "value", array()), "")) : ("")), "html", null, true);
        echo "</textarea>
  </div>
 </div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Block/Tag:textarea.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  22 => 2,  19 => 1,);
    }
}
/* <div class="form-group">*/
/*   <label class="control-label col-md-3 col-xs-3" for="data[{{ code }}][{{ dataId }}][value]">内容</label>*/
/*   <div class="col-md-9 col-xs-9">*/
/*     <textarea class="form-control js-label-input" name="data[{{ code }}][{{ dataId }}][value]" rows="5" style="resize:vertical">{{ data.value|default('') }}</textarea>*/
/*   </div>*/
/*  </div>*/
/* */
