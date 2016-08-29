<?php

/* TopxiaAdminBundle:Block/Tag:poster.html.twig */
class __TwigTemplate_4529f7b2d4f234bc4b5b5b69f1ec01e52ec35b2799c4ea8907baece403f2dc67 extends Twig_Template
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
        $context["first"] = 1;
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((($this->getAttribute($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "data", array(), "any", false, true), (isset($context["code"]) ? $context["code"] : null), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "data", array(), "any", false, true), (isset($context["code"]) ? $context["code"] : null), array(), "array"), null)) : (null)));
        foreach ($context['_seq'] as $context["dataId"] => $context["data"]) {
            // line 3
            echo "  <div role=\"tabpanel\" class=\"tab-pane ";
            if (((isset($context["first"]) ? $context["first"] : null) == 1)) {
                echo "active";
            }
            echo "\" id=\"poster-";
            echo twig_escape_filter($this->env, $context["dataId"], "html", null, true);
            echo "\">
    <div class=\"form-group\">
      <label class=\"col-sm-2 control-label\">是否开启</label>
      <label class=\"checkbox-inline\">
        <input class=\"status-input\" type=\"radio\" value=\"1\" ";
            // line 7
            if (($this->getAttribute($context["data"], "status", array()) == 1)) {
                echo "checked";
            }
            echo "> 开启
      </label>
      <label class=\"checkbox-inline\">
        <input class=\"status-input\" type=\"radio\" value=\"0\" ";
            // line 10
            if (($this->getAttribute($context["data"], "status", array()) == 0)) {
                echo "checked";
            }
            echo "> 关闭
      </label>
      <input class=\"status-value\" type=\"hidden\" name=\"data[";
            // line 12
            echo twig_escape_filter($this->env, (isset($context["code"]) ? $context["code"] : null), "html", null, true);
            echo "][";
            echo twig_escape_filter($this->env, $context["dataId"], "html", null, true);
            echo "][status]\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "status", array()), "html", null, true);
            echo "\">
    </div>
    <div class=\"form-group\">
      <label class=\"col-sm-2 control-label\">布局模式</label>
      <label class=\"checkbox-inline\">
        <input class=\"layout-input\" type=\"radio\" value=\"limitWide\"
               ";
            // line 18
            if (($this->getAttribute($context["data"], "layout", array()) == "limitWide")) {
                echo "checked";
            }
            echo "> 限宽居中
      </label>
      <label class=\"checkbox-inline\">
        <input class=\"layout-input\" type=\"radio\" value=\"tile\" ";
            // line 21
            if (($this->getAttribute($context["data"], "layout", array()) == "tile")) {
                echo "checked";
            }
            echo "> 平铺居中
      </label>
      <input class=\"layout-value\" type=\"hidden\" name=\"data[";
            // line 23
            echo twig_escape_filter($this->env, (isset($context["code"]) ? $context["code"] : null), "html", null, true);
            echo "][";
            echo twig_escape_filter($this->env, $context["dataId"], "html", null, true);
            echo "][layout]\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "layout", array()), "html", null, true);
            echo "\">
    </div>
    <div class=\"form-group\">
      <label class=\"col-sm-2 control-label\">编辑模式</label>
      <label class=\"checkbox-inline\">
        <input class=\"imgMode\" type=\"radio\" value=\"option1\"
               ";
            // line 29
            if (($this->getAttribute($context["data"], "mode", array()) == "img")) {
                echo "checked=\"checked\"";
            }
            echo "> 图片模式
      </label>
      <label class=\"checkbox-inline\">
        <input class=\"htmlMode\" type=\"radio\" value=\"option2\"
               ";
            // line 33
            if (($this->getAttribute($context["data"], "mode", array()) == "html")) {
                echo "checked=\"checked\"";
            }
            echo "> HTML模式
      </label>
      <input type=\"hidden\" name=\"data[";
            // line 35
            echo twig_escape_filter($this->env, (isset($context["code"]) ? $context["code"] : null), "html", null, true);
            echo "][";
            echo twig_escape_filter($this->env, $context["dataId"], "html", null, true);
            echo "][mode]\" class=\"mode-value\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "mode", array()), "html", null, true);
            echo "\">
    </div>
    <div class=\"edit-mode-img\" ";
            // line 37
            if (($this->getAttribute($context["data"], "mode", array()) == "html")) {
                echo "style=\"display: none;\"";
            }
            echo ">
      <div class=\"form-group\">
        <label class=\"col-sm-2 control-label\">
          选择图片
        </label>

        <div class=\"col-sm-10\">
          <label class=\"control-label img-mrl\">";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "src", array()), "html", null, true);
            echo "</label>
          <a class=\"btn btn-default btn-sm img-mode-upload\" id=\"img-";
            // line 45
            echo twig_escape_filter($this->env, (isset($context["code"]) ? $context["code"] : null), "html", null, true);
            echo "-uploadId-";
            echo twig_escape_filter($this->env, $context["dataId"], "html", null, true);
            echo "\"
             data-upload-token=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->makeUpoadToken("system", "image"), "html", null, true);
            echo "\">上传</a>
          <p class=\"text-success\">
            [ 限宽居中 ] 图片推荐尺寸 宽：1140px，高：450px<br>
            [ 平铺居中 ] 图片推荐尺寸 宽：1920px，高：600px<br>
            建议所有海报 [ 布局模式 ] 、 [ 海报尺寸 ] 保持一致。
          </p>
          <input class=\"form-control img-value\" type=\"hidden\" name=\"data[";
            // line 52
            echo twig_escape_filter($this->env, (isset($context["code"]) ? $context["code"] : null), "html", null, true);
            echo "][";
            echo twig_escape_filter($this->env, $context["dataId"], "html", null, true);
            echo "][src]\"
                 id=\"data[";
            // line 53
            echo twig_escape_filter($this->env, (isset($context["code"]) ? $context["code"] : null), "html", null, true);
            echo "][";
            echo twig_escape_filter($this->env, $context["dataId"], "html", null, true);
            echo "][src]\" data-role=\"img-url\" value=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute($context["data"], "src", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["data"], "src", array()), "")) : ("")), "html", null, true);
            echo "\">
          <img class=\"img-responsive mtm img-mtl\" src=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($context["data"], "src", array())), "html", null, true);
            echo "\" alt=\"\">
        </div>
      </div>
      <div class=\"form-group\">
        <label class=\"col-sm-2 control-label\">
          背景色填充
        </label>

        <div class=\"col-sm-10\">
          <input type=\"text\" class=\"form-control colorpicker-input width-input-small\"
                 name=\"data[";
            // line 64
            echo twig_escape_filter($this->env, (isset($context["code"]) ? $context["code"] : null), "html", null, true);
            echo "][";
            echo twig_escape_filter($this->env, $context["dataId"], "html", null, true);
            echo "][background]\" id=\"data[";
            echo twig_escape_filter($this->env, (isset($context["code"]) ? $context["code"] : null), "html", null, true);
            echo "][";
            echo twig_escape_filter($this->env, $context["dataId"], "html", null, true);
            echo "][background]\"
                 placeholder=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "background", array()), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "background", array()), "html", null, true);
            echo "\">
        </div>
      </div>
      <div class=\"form-group\">
        <label class=\"col-sm-2 control-label\">
          海报链接地址
        </label>

        <div class=\"col-sm-10\">
          <input type=\"text\" class=\"form-control width-input-large\" name=\"data[";
            // line 74
            echo twig_escape_filter($this->env, (isset($context["code"]) ? $context["code"] : null), "html", null, true);
            echo "][";
            echo twig_escape_filter($this->env, $context["dataId"], "html", null, true);
            echo "][href]\"
                 id=\"data[";
            // line 75
            echo twig_escape_filter($this->env, (isset($context["code"]) ? $context["code"] : null), "html", null, true);
            echo "][";
            echo twig_escape_filter($this->env, $context["dataId"], "html", null, true);
            echo "][href]\" placeholder=\"http://\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "href", array()), "html", null, true);
            echo "\">
        </div>
      </div>
    </div>
    <div class=\"edit-mode-html\" ";
            // line 79
            if (($this->getAttribute($context["data"], "mode", array()) == "img")) {
                echo "style=\"display: none;\"";
            }
            echo ">
      <div class=\"form-group\">
        <div class=\"col-sm-10 col-sm-offset-2\">
          <textarea class=\"form-control mbl\" id=\"data[";
            // line 82
            echo twig_escape_filter($this->env, (isset($context["code"]) ? $context["code"] : null), "html", null, true);
            echo "][";
            echo twig_escape_filter($this->env, $context["dataId"], "html", null, true);
            echo "][html]\" rows=\"15\"
                    name=\"data[";
            // line 83
            echo twig_escape_filter($this->env, (isset($context["code"]) ? $context["code"] : null), "html", null, true);
            echo "][";
            echo twig_escape_filter($this->env, $context["dataId"], "html", null, true);
            echo "][html]\" data-role=\"editor-field\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "html", array()), "html", null, true);
            echo "</textarea>
          <label class=\"control-label html-mrl\"></label><br>
          <a class=\"btn btn-default btn-sm html-mode-upload\" id=\"html-";
            // line 85
            echo twig_escape_filter($this->env, (isset($context["code"]) ? $context["code"] : null), "html", null, true);
            echo "-uploadId-";
            echo twig_escape_filter($this->env, $context["dataId"], "html", null, true);
            echo "\"
             data-upload-token=\"";
            // line 86
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->makeUpoadToken("system", "image"), "html", null, true);
            echo "\">上传</a>
        </div>
      </div>
    </div>
  </div>
  ";
            // line 91
            $context["first"] = 0;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['dataId'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Block/Tag:poster.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  254 => 91,  246 => 86,  240 => 85,  231 => 83,  225 => 82,  217 => 79,  206 => 75,  200 => 74,  186 => 65,  176 => 64,  163 => 54,  155 => 53,  149 => 52,  140 => 46,  134 => 45,  130 => 44,  118 => 37,  109 => 35,  102 => 33,  93 => 29,  80 => 23,  73 => 21,  65 => 18,  52 => 12,  45 => 10,  37 => 7,  25 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% set first = 1 %}*/
/* {% for dataId,data in  block.data[code]|default(null) %}*/
/*   <div role="tabpanel" class="tab-pane {% if first == 1 %}active{% endif %}" id="poster-{{ dataId }}">*/
/*     <div class="form-group">*/
/*       <label class="col-sm-2 control-label">是否开启</label>*/
/*       <label class="checkbox-inline">*/
/*         <input class="status-input" type="radio" value="1" {% if data.status == 1 %}checked{% endif %}> 开启*/
/*       </label>*/
/*       <label class="checkbox-inline">*/
/*         <input class="status-input" type="radio" value="0" {% if data.status == 0 %}checked{% endif %}> 关闭*/
/*       </label>*/
/*       <input class="status-value" type="hidden" name="data[{{ code }}][{{ dataId }}][status]" value="{{ data.status }}">*/
/*     </div>*/
/*     <div class="form-group">*/
/*       <label class="col-sm-2 control-label">布局模式</label>*/
/*       <label class="checkbox-inline">*/
/*         <input class="layout-input" type="radio" value="limitWide"*/
/*                {% if data.layout == 'limitWide' %}checked{% endif %}> 限宽居中*/
/*       </label>*/
/*       <label class="checkbox-inline">*/
/*         <input class="layout-input" type="radio" value="tile" {% if data.layout == 'tile' %}checked{% endif %}> 平铺居中*/
/*       </label>*/
/*       <input class="layout-value" type="hidden" name="data[{{ code }}][{{ dataId }}][layout]" value="{{ data.layout }}">*/
/*     </div>*/
/*     <div class="form-group">*/
/*       <label class="col-sm-2 control-label">编辑模式</label>*/
/*       <label class="checkbox-inline">*/
/*         <input class="imgMode" type="radio" value="option1"*/
/*                {% if data.mode == 'img' %}checked="checked"{% endif %}> 图片模式*/
/*       </label>*/
/*       <label class="checkbox-inline">*/
/*         <input class="htmlMode" type="radio" value="option2"*/
/*                {% if data.mode == 'html' %}checked="checked"{% endif %}> HTML模式*/
/*       </label>*/
/*       <input type="hidden" name="data[{{ code }}][{{ dataId }}][mode]" class="mode-value" value="{{ data.mode }}">*/
/*     </div>*/
/*     <div class="edit-mode-img" {% if data.mode == 'html' %}style="display: none;"{% endif %}>*/
/*       <div class="form-group">*/
/*         <label class="col-sm-2 control-label">*/
/*           选择图片*/
/*         </label>*/
/* */
/*         <div class="col-sm-10">*/
/*           <label class="control-label img-mrl">{{ data.src }}</label>*/
/*           <a class="btn btn-default btn-sm img-mode-upload" id="img-{{ code }}-uploadId-{{ dataId }}"*/
/*              data-upload-token="{{ upload_token('system', 'image') }}">上传</a>*/
/*           <p class="text-success">*/
/*             [ 限宽居中 ] 图片推荐尺寸 宽：1140px，高：450px<br>*/
/*             [ 平铺居中 ] 图片推荐尺寸 宽：1920px，高：600px<br>*/
/*             建议所有海报 [ 布局模式 ] 、 [ 海报尺寸 ] 保持一致。*/
/*           </p>*/
/*           <input class="form-control img-value" type="hidden" name="data[{{ code }}][{{ dataId }}][src]"*/
/*                  id="data[{{ code }}][{{ dataId }}][src]" data-role="img-url" value="{{ data.src|default('') }}">*/
/*           <img class="img-responsive mtm img-mtl" src="{{ asset(data.src) }}" alt="">*/
/*         </div>*/
/*       </div>*/
/*       <div class="form-group">*/
/*         <label class="col-sm-2 control-label">*/
/*           背景色填充*/
/*         </label>*/
/* */
/*         <div class="col-sm-10">*/
/*           <input type="text" class="form-control colorpicker-input width-input-small"*/
/*                  name="data[{{ code }}][{{ dataId }}][background]" id="data[{{ code }}][{{ dataId }}][background]"*/
/*                  placeholder="{{ data.background }}" value="{{ data.background }}">*/
/*         </div>*/
/*       </div>*/
/*       <div class="form-group">*/
/*         <label class="col-sm-2 control-label">*/
/*           海报链接地址*/
/*         </label>*/
/* */
/*         <div class="col-sm-10">*/
/*           <input type="text" class="form-control width-input-large" name="data[{{ code }}][{{ dataId }}][href]"*/
/*                  id="data[{{ code }}][{{ dataId }}][href]" placeholder="http://" value="{{ data.href }}">*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*     <div class="edit-mode-html" {% if data.mode == 'img' %}style="display: none;"{% endif %}>*/
/*       <div class="form-group">*/
/*         <div class="col-sm-10 col-sm-offset-2">*/
/*           <textarea class="form-control mbl" id="data[{{ code }}][{{ dataId }}][html]" rows="15"*/
/*                     name="data[{{ code }}][{{ dataId }}][html]" data-role="editor-field">{{ data.html }}</textarea>*/
/*           <label class="control-label html-mrl"></label><br>*/
/*           <a class="btn btn-default btn-sm html-mode-upload" id="html-{{ code }}-uploadId-{{ dataId }}"*/
/*              data-upload-token="{{ upload_token('system', 'image') }}">上传</a>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/*   {% set first = 0 %}*/
/* {% endfor %}*/
