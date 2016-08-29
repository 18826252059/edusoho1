<?php

/* TopxiaWebBundle:CourseManage:choice-modal.html.twig */
class __TwigTemplate_e763d0ca6fcd5a8a2003308efda766dcb3d1429e92b27b456fb4454aca2ab23d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:CourseManage:layout.html.twig", "TopxiaWebBundle:CourseManage:choice-modal.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:CourseManage:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["side_nav"] = "base";
        // line 6
        $context["script_controller"] = "course-manage/base";
        // line 8
        $context["script_arguments"] = array("categoryUrl" => $this->env->getExtension('routing')->getPath("category_all"), "tagMatchUrl" => $this->env->getExtension('routing')->getPath("tag_match"), "locationUrl" => $this->env->getExtension('routing')->getPath("location_all"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "添加选择题 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 14
    public function block_main($context, array $blocks = array())
    {
        // line 15
        echo "
<div class=\"panel panel-default panel-col\">
  <div class=\"panel-heading\">基本信息</div>
  <div class=\"panel-body\">
    <form class=\"form-horizontal\" id=\"course-form\" method=\"post\">

      ";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "

      

      <div class=\"form-group\">
        <div class=\"col-md-offset-2 col-md-8 controls\">
          <button class=\"btn btn-fat btn-primary\" id=\"course-create-btn\" type=\"submit\">保存</button>
        </div>
      </div>

      <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">

    </form>
  </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseManage:choice-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 31,  54 => 21,  46 => 15,  43 => 14,  36 => 3,  32 => 1,  30 => 8,  28 => 6,  26 => 5,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle:CourseManage:layout.html.twig' %}*/
/* */
/* {% block title %}添加选择题 - {{ parent() }}{% endblock %}*/
/* */
/* {% set side_nav = 'base' %}*/
/* {% set script_controller = 'course-manage/base' %}*/
/* {% */
/*   set script_arguments = {*/
/*     categoryUrl: path('category_all'),*/
/*     tagMatchUrl: path('tag_match'),*/
/*     locationUrl: path('location_all')*/
/*   } */
/* %}*/
/* {% block main %}*/
/* */
/* <div class="panel panel-default panel-col">*/
/*   <div class="panel-heading">基本信息</div>*/
/*   <div class="panel-body">*/
/*     <form class="form-horizontal" id="course-form" method="post">*/
/* */
/*       {{ web_macro.flash_messages() }}*/
/* */
/*       */
/* */
/*       <div class="form-group">*/
/*         <div class="col-md-offset-2 col-md-8 controls">*/
/*           <button class="btn btn-fat btn-primary" id="course-create-btn" type="submit">保存</button>*/
/*         </div>*/
/*       </div>*/
/* */
/*       <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/* */
/*     </form>*/
/*   </div>*/
/* </div>*/
/* */
/* {% endblock %}*/
/* */
/* */
/* */
/* */
