<?php

/* TopxiaAdminBundle:Block/Tag:imglink.html.twig */
class __TwigTemplate_1fb566ad5c0997a22b58e57af8817cdd9771f16c93ce3d9ca5b498943f015f3d extends Twig_Template
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
        echo "  <div class=\"form-group\">
    <label class=\"control-label col-md-3 col-xs-3\" for=\"data[";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["code"]) ? $context["code"] : null), "html", null, true);
        echo "][";
        echo twig_escape_filter($this->env, (isset($context["dataId"]) ? $context["dataId"] : null), "html", null, true);
        echo "][src]\">图片</label>
    <div class=\"col-md-7 col-xs-7\">
      <input class=\"form-control\" type=\"text\" name=\"data[";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["code"]) ? $context["code"] : null), "html", null, true);
        echo "][";
        echo twig_escape_filter($this->env, (isset($context["dataId"]) ? $context["dataId"] : null), "html", null, true);
        echo "][src]\" id=\"data[";
        echo twig_escape_filter($this->env, (isset($context["code"]) ? $context["code"] : null), "html", null, true);
        echo "][";
        echo twig_escape_filter($this->env, (isset($context["dataId"]) ? $context["dataId"] : null), "html", null, true);
        echo "][src]\" data-role=\"img-url\" value=\"";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "src", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "src", array()), "")) : ("")), "html", null, true);
        echo "\">
    </div>
    <div class=\"col-md-2 col-xs-2\">
      <div class=\"btn btn-default btn-sm img-upload webuploader-container\" id=\"item-";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["code"]) ? $context["code"] : null), "html", null, true);
        echo "-uploadId-";
        echo twig_escape_filter($this->env, (isset($context["dataId"]) ? $context["dataId"] : null), "html", null, true);
        echo "\" data-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_block_picture_upload", array("blockId" => $this->getAttribute((isset($context["block"]) ? $context["block"] : null), "id", array()), "code" => (isset($context["code"]) ? $context["code"] : null))), "html", null, true);
        echo "\">上传</div>
    </div>
 </div>

 <div class=\"form-group\">
    <label class=\"control-label col-md-3 col-xs-3\" for=\"data[";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["code"]) ? $context["code"] : null), "html", null, true);
        echo "][";
        echo twig_escape_filter($this->env, (isset($context["dataId"]) ? $context["dataId"] : null), "html", null, true);
        echo "][alt]\">图片描述</label>
    <div class=\"col-md-8 col-xs-8\">
      <input class=\"form-control js-label-input\" type=\"text\" name=\"data[";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["code"]) ? $context["code"] : null), "html", null, true);
        echo "][";
        echo twig_escape_filter($this->env, (isset($context["dataId"]) ? $context["dataId"] : null), "html", null, true);
        echo "][alt]\" id=\"data[";
        echo twig_escape_filter($this->env, (isset($context["code"]) ? $context["code"] : null), "html", null, true);
        echo "][";
        echo twig_escape_filter($this->env, (isset($context["dataId"]) ? $context["dataId"] : null), "html", null, true);
        echo "][alt]\" value=\"";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "alt", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "alt", array()), "")) : ("")), "html", null, true);
        echo "\" >
    </div>
    
 </div>

 <div class=\"form-group\">
    <label class=\"control-label col-md-3 col-xs-3\" for=\"data[";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["code"]) ? $context["code"] : null), "html", null, true);
        echo "][";
        echo twig_escape_filter($this->env, (isset($context["dataId"]) ? $context["dataId"] : null), "html", null, true);
        echo "][href]\">图片链接</label>
  <div class=\"col-md-8 col-xs-8\">
    <input class=\"form-control\" type=\"text\" name=\"data[";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["code"]) ? $context["code"] : null), "html", null, true);
        echo "][";
        echo twig_escape_filter($this->env, (isset($context["dataId"]) ? $context["dataId"] : null), "html", null, true);
        echo "][href]\" id=\"data[";
        echo twig_escape_filter($this->env, (isset($context["code"]) ? $context["code"] : null), "html", null, true);
        echo "][";
        echo twig_escape_filter($this->env, (isset($context["dataId"]) ? $context["dataId"] : null), "html", null, true);
        echo "][href]\" value=\"";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "href", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "href", array()), "")) : ("")), "html", null, true);
        echo "\" placeholder=\"http://\">
  </div>
 </div>

 <div class=\"form-group\">
    <label class=\"control-label col-md-3 col-xs-3\">打开新窗口</label>
    <label class=\"checkbox-inline\"><input type=\"radio\" data-role=\"radio-yes\" name=\"data[";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["code"]) ? $context["code"] : null), "html", null, true);
        echo "][";
        echo twig_escape_filter($this->env, (isset($context["dataId"]) ? $context["dataId"] : null), "html", null, true);
        echo "][target]\" value=\"_blank\" ";
        if (((($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "target", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "target", array()), "_self")) : ("_self")) == "_blank")) {
            echo " checked=\"checked\" ";
        }
        echo "> 是</label>
    <label class=\"checkbox-inline\"><input type=\"radio\" data-role=\"radio-no\" name=\"data[";
        // line 29
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
        return "TopxiaAdminBundle:Block/Tag:imglink.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 29,  103 => 28,  86 => 22,  79 => 20,  62 => 14,  55 => 12,  43 => 7,  29 => 4,  22 => 2,  19 => 1,);
    }
}
/*   <div class="form-group">*/
/*     <label class="control-label col-md-3 col-xs-3" for="data[{{ code }}][{{ dataId }}][src]">图片</label>*/
/*     <div class="col-md-7 col-xs-7">*/
/*       <input class="form-control" type="text" name="data[{{ code }}][{{ dataId }}][src]" id="data[{{ code }}][{{ dataId }}][src]" data-role="img-url" value="{{ data.src|default('') }}">*/
/*     </div>*/
/*     <div class="col-md-2 col-xs-2">*/
/*       <div class="btn btn-default btn-sm img-upload webuploader-container" id="item-{{ code }}-uploadId-{{ dataId }}" data-url="{{ path('admin_block_picture_upload', {blockId:block.id, code:code}) }}">上传</div>*/
/*     </div>*/
/*  </div>*/
/* */
/*  <div class="form-group">*/
/*     <label class="control-label col-md-3 col-xs-3" for="data[{{ code }}][{{ dataId }}][alt]">图片描述</label>*/
/*     <div class="col-md-8 col-xs-8">*/
/*       <input class="form-control js-label-input" type="text" name="data[{{ code }}][{{ dataId }}][alt]" id="data[{{ code }}][{{ dataId }}][alt]" value="{{ data.alt|default('') }}" >*/
/*     </div>*/
/*     */
/*  </div>*/
/* */
/*  <div class="form-group">*/
/*     <label class="control-label col-md-3 col-xs-3" for="data[{{ code }}][{{ dataId }}][href]">图片链接</label>*/
/*   <div class="col-md-8 col-xs-8">*/
/*     <input class="form-control" type="text" name="data[{{ code }}][{{ dataId }}][href]" id="data[{{ code }}][{{ dataId }}][href]" value="{{ data.href|default('') }}" placeholder="http://">*/
/*   </div>*/
/*  </div>*/
/* */
/*  <div class="form-group">*/
/*     <label class="control-label col-md-3 col-xs-3">打开新窗口</label>*/
/*     <label class="checkbox-inline"><input type="radio" data-role="radio-yes" name="data[{{ code }}][{{ dataId }}][target]" value="_blank" {% if data.target|default('_self') == '_blank' %} checked="checked" {% endif %}> 是</label>*/
/*     <label class="checkbox-inline"><input type="radio" data-role="radio-no" name="data[{{ code }}][{{ dataId }}][target]" value="_self" {% if data.target|default('_self') == '_self' %} checked="checked" {% endif %}> 否</label>*/
/*  </div>*/
/* */
