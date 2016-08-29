<?php

/* TopxiaAdminBundle:ProductBase:product-base.html.twig */
class __TwigTemplate_d9d9b1dc81938851a9f04adb7c661bb8ac83c120063697201d5609e7f9c533a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle:ProductBase:layout.html.twig", "TopxiaAdminBundle:ProductBase:product-base.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle:ProductBase:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["side_nav"] = "base";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "基本信息 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        // line 7
        echo "
    <div class=\"panel panel-default panel-col\">
        <div class=\"panel-heading\">";
        // line 9
        if ((($this->getAttribute((isset($context["productBase"]) ? $context["productBase"] : null), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["productBase"]) ? $context["productBase"] : null), "id", array()), "")) : (""))) {
            echo "编辑";
        } else {
            echo "新增";
        }
        echo "基地基本信息</div>
        <div class=\"panel-body\">
            <form class=\"form-horizontal\" id=\"course-form\" method=\"post\"
                  action=\"";
        // line 12
        if ((($this->getAttribute((isset($context["productBase"]) ? $context["productBase"] : null), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["productBase"]) ? $context["productBase"] : null), "id", array()), "")) : (""))) {
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_product_update", array("id" => $this->getAttribute((isset($context["productBase"]) ? $context["productBase"] : null), "id", array()))), "html", null, true);
        } else {
            echo $this->env->getExtension('routing')->getPath("admin_product_create");
        }
        echo "\"
                  method=\"post\">

                ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "

                <div class=\"form-group\">
                    <label class=\"col-md-2 control-label\">标题</label>

                    <div class=\"col-md-8 controls\">
                        <input type=\"text\" id=\"product_course_title\" name=\"title\" required=\"required\"
                               class=\"form-control\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["productBase"]) ? $context["productBase"] : null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["productBase"]) ? $context["productBase"] : null), "title", array()), "")) : ("")), "html", null, true);
        echo "\">

                        <div class=\"help-block\" style=\"display:none;\"></div>
                    </div>
                </div>

                <div class=\"form-group\">
                    <div class=\"col-md-2 control-label\"><label>基地简介</label></div>
                    <div class=\"col-md-8 controls\">
                    <textarea name=\"about\" rows=\"10\" id=\"product_course-about-field\"
                              class=\"form-control\">";
        // line 32
        echo $this->env->getExtension('topxia_html_twig')->fieldValue((isset($context["productBase"]) ? $context["productBase"] : null), "about");
        echo "</textarea>
                    </div>
                </div>

                <div class=\"form-group\">
                    <label class=\"col-md-2 control-label\">基地地址</label>

                    <div class=\"col-md-8 controls\">
                        <input type=\"text\" id=\"product_course_address\" name=\"address\" required=\"required\"
                               class=\"form-control\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["productBase"]) ? $context["productBase"] : null), "address", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["productBase"]) ? $context["productBase"] : null), "address", array()), "")) : ("")), "html", null, true);
        echo "\">

                        <div class=\"help-block\" style=\"display:none;\"></div>
                    </div>
                </div>

                <div class=\"form-group\">
                    <label class=\"col-md-2 control-label\">百度经度</label>

                    <div class=\"col-md-8 controls\">
                        <input type=\"text\" id=\"product_course_baiduLon\" name=\"baiduLon\" required=\"required\"
                               class=\"form-control\" value=\"";
        // line 52
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["productBase"]) ? $context["productBase"] : null), "baiduLon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["productBase"]) ? $context["productBase"] : null), "baiduLon", array()), "")) : ("")), "html", null, true);
        echo "\">

                        <div class=\"help-block\" style=\"display:none;\"></div>
                    </div>
                </div>

                <div class=\"form-group\">
                    <label class=\"col-md-2 control-label\">百度纬度</label>

                    <div class=\"col-md-8 controls\">
                        <input type=\"text\" id=\"product_course_baiduLon\" name=\"baiduLon\" required=\"required\"
                               class=\"form-control\" value=\"";
        // line 63
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["productBase"]) ? $context["productBase"] : null), "baiduLon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["productBase"]) ? $context["productBase"] : null), "baiduLon", array()), "")) : ("")), "html", null, true);
        echo "\">

                        <div class=\"help-block\" style=\"display:none;\"></div>
                    </div>
                </div>

                <div class=\"form-group\">
                    <div class=\"col-md-offset-2 col-md-8 controls\">
                        <button class=\"btn btn-fat btn-primary\" type=\"submit\">保存</button>
                    </div>
                </div>

                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">

            </form>
        </div>
    </div>
<script type=\"text/javascript\">app.load('tag/save-modal')</script>
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:ProductBase:product-base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 75,  129 => 63,  115 => 52,  101 => 41,  89 => 32,  76 => 22,  66 => 15,  56 => 12,  46 => 9,  42 => 7,  39 => 6,  32 => 3,  28 => 1,  26 => 5,  11 => 1,);
    }
}
/* {% extends 'TopxiaAdminBundle:ProductBase:layout.html.twig' %}*/
/* */
/* {% block title %}基本信息 - {{ parent() }}{% endblock %}*/
/* */
/* {% set side_nav = 'base' %}*/
/* {% block main %}*/
/* */
/*     <div class="panel panel-default panel-col">*/
/*         <div class="panel-heading">{% if productBase.id|default('') %}编辑{% else %}新增{% endif %}基地基本信息</div>*/
/*         <div class="panel-body">*/
/*             <form class="form-horizontal" id="course-form" method="post"*/
/*                   action="{% if productBase.id|default('') %}{{ path('admin_product_update', {id:productBase.id}) }}{% else %}{{ path('admin_product_create') }}{% endif %}"*/
/*                   method="post">*/
/* */
/*                 {{ web_macro.flash_messages() }}*/
/* */
/*                 <div class="form-group">*/
/*                     <label class="col-md-2 control-label">标题</label>*/
/* */
/*                     <div class="col-md-8 controls">*/
/*                         <input type="text" id="product_course_title" name="title" required="required"*/
/*                                class="form-control" value="{{ productBase.title|default('') }}">*/
/* */
/*                         <div class="help-block" style="display:none;"></div>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="form-group">*/
/*                     <div class="col-md-2 control-label"><label>基地简介</label></div>*/
/*                     <div class="col-md-8 controls">*/
/*                     <textarea name="about" rows="10" id="product_course-about-field"*/
/*                               class="form-control">{{ field_value(productBase, 'about') }}</textarea>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="form-group">*/
/*                     <label class="col-md-2 control-label">基地地址</label>*/
/* */
/*                     <div class="col-md-8 controls">*/
/*                         <input type="text" id="product_course_address" name="address" required="required"*/
/*                                class="form-control" value="{{ productBase.address|default('') }}">*/
/* */
/*                         <div class="help-block" style="display:none;"></div>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="form-group">*/
/*                     <label class="col-md-2 control-label">百度经度</label>*/
/* */
/*                     <div class="col-md-8 controls">*/
/*                         <input type="text" id="product_course_baiduLon" name="baiduLon" required="required"*/
/*                                class="form-control" value="{{ productBase.baiduLon|default('') }}">*/
/* */
/*                         <div class="help-block" style="display:none;"></div>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="form-group">*/
/*                     <label class="col-md-2 control-label">百度纬度</label>*/
/* */
/*                     <div class="col-md-8 controls">*/
/*                         <input type="text" id="product_course_baiduLon" name="baiduLon" required="required"*/
/*                                class="form-control" value="{{ productBase.baiduLon|default('') }}">*/
/* */
/*                         <div class="help-block" style="display:none;"></div>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="form-group">*/
/*                     <div class="col-md-offset-2 col-md-8 controls">*/
/*                         <button class="btn btn-fat btn-primary" type="submit">保存</button>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/* */
/*             </form>*/
/*         </div>*/
/*     </div>*/
/* <script type="text/javascript">app.load('tag/save-modal')</script>*/
/* {% endblock %}*/
/* */
/* */
/* */
/* */
