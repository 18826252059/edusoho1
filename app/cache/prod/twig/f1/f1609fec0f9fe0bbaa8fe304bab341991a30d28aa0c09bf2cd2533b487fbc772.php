<?php

/* TopxiaAdminBundle:Block/Tag:img.html.twig */
class __TwigTemplate_20418ca27f3f6d5c782579bf39f09f674ef9fdf68f3c19f74fc2852736464dcd extends Twig_Template
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

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Block/Tag:img.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 14,  55 => 12,  43 => 7,  29 => 4,  22 => 2,  19 => 1,);
    }
}
/* <div class="form-group">*/
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
/* */
