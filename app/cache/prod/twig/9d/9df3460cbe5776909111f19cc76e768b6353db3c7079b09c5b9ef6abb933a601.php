<?php

/* TopxiaWebBundle:Theme:edit-course-grid-with-condition-index-modal.html.twig */
class __TwigTemplate_81713be2fa016ea90498f6b9e5e677bdc5796f1a11319d593f9bd6da94dba81b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "TopxiaWebBundle:Theme:edit-course-grid-with-condition-index-modal.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::bootstrap-modal-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["modalSize"] = "large";
        // line 4
        $context["categoriesFirst"] = $this->env->getExtension('topxia_data_twig')->getData("Categories", array("group" => "course"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        if ($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "title", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "title", array()), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "defaultTitle", array()), "html", null, true);
        }
        echo "编辑";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "    <form id=\"edit-left-course-form\" class=\"form-horizontal item-config-form\" role=\"form\">
       <div class=\"row form-group\">
          <div class=\"col-md-3 control-label\">
            <label for=\"name\">自定义名称</label>
          </div>
          <div class=\"col-md-7 controls\">
            <input type=\"text\"  class=\"form-control\" name=\"title\">
          </div>
       </div>

       <div class=\"row form-group\">
          <div class=\"col-md-3 control-label\">
            <label for=\"subname\">副标题名称</label>
          </div>
          <div class=\"col-md-7 controls\">
            <input type=\"text\"  class=\"form-control\" name=\"subTitle\">
          </div>
       </div>

       <div class=\"form-group\">
          <label class=\"col-sm-3 control-label\">课程数量设置</label>
          <div class=\"col-sm-4\">
            <select class=\"form-control width-input-large\" name=\"count\">
              <option value=\"4\">4</option>
              <option value=\"8\">8</option>
              <option value=\"12\">12</option>
            </select>
          </div>
       </div>

<!--       <div class=\"form-group\">
        <label class=\"col-md-3 control-label\">课程分类设置</label>
        <div class=\"col-md-4 controls\">
          <select id=\"categoryId\" name=\"categoryId\" required=\"required\" class=\"form-control width-input width-input-large\">
            <option value=\"\">全部分类</option>
            ";
        // line 42
        if ((isset($context["categoriesFirst"]) ? $context["categoriesFirst"] : null)) {
            // line 43
            echo "              ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categoriesFirst"]) ? $context["categoriesFirst"] : null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                if (($this->getAttribute($context["category"], "parentId", array()) == 0)) {
                    // line 44
                    echo "                ";
                    if (($this->getAttribute($context["loop"], "index0", array()) < 5)) {
                        // line 45
                        echo "                  <option value='";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "id", array()), "html", null, true);
                        echo "'>
                      ";
                        // line 46
                        echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
                        echo "
                  </option>
                ";
                    }
                    // line 49
                    echo "              ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "            ";
        }
        // line 51
        echo "          </select>
          <div class=\"help-block\" style=\"display:none;\"></div>
        </div>
      </div> -->

      <div class=\"form-group\">
          <label class=\"col-sm-3 control-label\">课程分类数量设置</label>
          <div class=\"col-sm-4\">
            <select class=\"form-control width-input-large\" name=\"categoryCount\">
              <option value=\"2\">2</option>
              <option value=\"3\">3</option>
              <option value=\"4\">4</option>
            </select>
          </div>
       </div>

      <div class=\"form-group\">
        <label class=\"col-md-3 control-label\">排序设置</label>
        <div class=\"col-md-4 controls\">
          <select id=\"orderBy\" name=\"orderBy\" required=\"required\" class=\"form-control width-input width-input-large\">
              <option value=\"latest\">最新</option>
              <option value=\"studentNum\">最热</option>
              <option value=\"recommendedSeq\">推荐</option>
          </select>
          <div class=\"help-block\" style=\"display:none;\"></div>
        </div>
      </div>

      <div class=\"form-group\"> 
        <label class=\"col-sm-3 control-label\">背景颜色设置</label> 
        <div class=\"col-sm-9 check-box\">
        <input type=\"hidden\"  name=\"background\" value=";
        // line 82
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "background", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "background", array()), "")) : ("")), "html", null, true);
        echo ">
          <label class=\"radio-inline\"> 
            <input type=\"radio\"  value=\"section-gray\"";
        // line 84
        if (((($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "background", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "background", array()), "")) : ("")) == "section-gray")) {
            echo " checked=\"checked\"";
        }
        echo "> 
            灰色 
          </label> 
          <label class=\"radio-inline\" > 
            <input type=\"radio\"  value=\"section-wihte\"";
        // line 88
        if (((($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "background", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "background", array()), "")) : ("")) == "section-wihte")) {
            echo " checked=\"checked\"";
        }
        echo " > 
            白色 
          </label>
          <label class=\"radio-inline\" > 
            <input type=\"radio\"  value=\"\"";
        // line 92
        if (((($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "background", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "background", array()), "")) : ("")) == "")) {
            echo " checked=\"checked\"";
        }
        echo " > 
            默认 
          </label>  
        </div> 
      </div>
    </form>

";
    }

    // line 100
    public function block_footer($context, array $blocks = array())
    {
        // line 101
        echo "  <button data-submiting-text=\"正在保存\" class=\"btn btn-primary pull-right\" data-form=\"#edit-left-course-form\" id=\"save-btn\">确定</button>
  <button type=\"button\" class=\"btn btn-link pull-right\" data-dismiss=\"modal\">取消</button>
  <script>app.load('topxiawebbundle/controller/theme/left-edit-modal')</script>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Theme:edit-course-grid-with-condition-index-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 101,  197 => 100,  183 => 92,  174 => 88,  165 => 84,  160 => 82,  127 => 51,  124 => 50,  114 => 49,  108 => 46,  103 => 45,  100 => 44,  88 => 43,  86 => 42,  49 => 7,  46 => 6,  35 => 5,  31 => 1,  29 => 4,  27 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::bootstrap-modal-layout.html.twig' %}*/
/* */
/* {% set modalSize = 'large' %}*/
/* {% set categoriesFirst = data('Categories',{'group':'course'})%}*/
/* {% block title %}{% if config.title %}{{ config.title }}{% else %}{{ config.defaultTitle }}{% endif %}编辑{% endblock %}*/
/* {% block body %}*/
/*     <form id="edit-left-course-form" class="form-horizontal item-config-form" role="form">*/
/*        <div class="row form-group">*/
/*           <div class="col-md-3 control-label">*/
/*             <label for="name">自定义名称</label>*/
/*           </div>*/
/*           <div class="col-md-7 controls">*/
/*             <input type="text"  class="form-control" name="title">*/
/*           </div>*/
/*        </div>*/
/* */
/*        <div class="row form-group">*/
/*           <div class="col-md-3 control-label">*/
/*             <label for="subname">副标题名称</label>*/
/*           </div>*/
/*           <div class="col-md-7 controls">*/
/*             <input type="text"  class="form-control" name="subTitle">*/
/*           </div>*/
/*        </div>*/
/* */
/*        <div class="form-group">*/
/*           <label class="col-sm-3 control-label">课程数量设置</label>*/
/*           <div class="col-sm-4">*/
/*             <select class="form-control width-input-large" name="count">*/
/*               <option value="4">4</option>*/
/*               <option value="8">8</option>*/
/*               <option value="12">12</option>*/
/*             </select>*/
/*           </div>*/
/*        </div>*/
/* */
/* <!--       <div class="form-group">*/
/*         <label class="col-md-3 control-label">课程分类设置</label>*/
/*         <div class="col-md-4 controls">*/
/*           <select id="categoryId" name="categoryId" required="required" class="form-control width-input width-input-large">*/
/*             <option value="">全部分类</option>*/
/*             {% if categoriesFirst%}*/
/*               {% for category in categoriesFirst  if (category.parentId == 0) %}*/
/*                 {% if ( loop.index0 < 5 ) %}*/
/*                   <option value='{{category.id}}'>*/
/*                       {{ category.name }}*/
/*                   </option>*/
/*                 {% endif %}*/
/*               {% endfor %}*/
/*             {% endif %}*/
/*           </select>*/
/*           <div class="help-block" style="display:none;"></div>*/
/*         </div>*/
/*       </div> -->*/
/* */
/*       <div class="form-group">*/
/*           <label class="col-sm-3 control-label">课程分类数量设置</label>*/
/*           <div class="col-sm-4">*/
/*             <select class="form-control width-input-large" name="categoryCount">*/
/*               <option value="2">2</option>*/
/*               <option value="3">3</option>*/
/*               <option value="4">4</option>*/
/*             </select>*/
/*           </div>*/
/*        </div>*/
/* */
/*       <div class="form-group">*/
/*         <label class="col-md-3 control-label">排序设置</label>*/
/*         <div class="col-md-4 controls">*/
/*           <select id="orderBy" name="orderBy" required="required" class="form-control width-input width-input-large">*/
/*               <option value="latest">最新</option>*/
/*               <option value="studentNum">最热</option>*/
/*               <option value="recommendedSeq">推荐</option>*/
/*           </select>*/
/*           <div class="help-block" style="display:none;"></div>*/
/*         </div>*/
/*       </div>*/
/* */
/*       <div class="form-group"> */
/*         <label class="col-sm-3 control-label">背景颜色设置</label> */
/*         <div class="col-sm-9 check-box">*/
/*         <input type="hidden"  name="background" value={{config.background|default("")}}>*/
/*           <label class="radio-inline"> */
/*             <input type="radio"  value="section-gray"{% if config.background|default("") == "section-gray"%} checked="checked"{% endif %}> */
/*             灰色 */
/*           </label> */
/*           <label class="radio-inline" > */
/*             <input type="radio"  value="section-wihte"{% if config.background|default("") == "section-wihte"%} checked="checked"{% endif %} > */
/*             白色 */
/*           </label>*/
/*           <label class="radio-inline" > */
/*             <input type="radio"  value=""{% if config.background|default("") == ""%} checked="checked"{% endif %} > */
/*             默认 */
/*           </label>  */
/*         </div> */
/*       </div>*/
/*     </form>*/
/* */
/* {% endblock %}*/
/* {% block footer %}*/
/*   <button data-submiting-text="正在保存" class="btn btn-primary pull-right" data-form="#edit-left-course-form" id="save-btn">确定</button>*/
/*   <button type="button" class="btn btn-link pull-right" data-dismiss="modal">取消</button>*/
/*   <script>app.load('topxiawebbundle/controller/theme/left-edit-modal')</script>*/
/* {% endblock %}*/
