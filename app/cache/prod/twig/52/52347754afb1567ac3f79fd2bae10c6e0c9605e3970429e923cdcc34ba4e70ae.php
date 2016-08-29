<?php

/* TopxiaWebBundle:EsBar:index.html.twig */
class __TwigTemplate_36a0954a095461d5c5945ebb84d8cb797242ec326a891ea833c3629f9f1d940d extends Twig_Template
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
        echo "<!-- 侧边栏快捷操作 -->
<div class=\"es-bar hidden-xs\">

  <!-- 左侧列表 -->
  ";
        // line 5
        $this->loadTemplate("TopxiaWebBundle:EsBar:left-list.html.twig", "TopxiaWebBundle:EsBar:index.html.twig", 5)->display($context);
        // line 6
        echo "
  <!-- 列表内容 -->
  ";
        // line 8
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()) && $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "isLogin", array(), "method"))) {
            // line 9
            echo "    <!-- 通知 -->
    <div class=\"es-bar-main\" id=\"bar-message\">
      ";
            // line 11
            $this->loadTemplate("TopxiaWebBundle:EsBar:ListContent/notification.html.twig", "TopxiaWebBundle:EsBar:index.html.twig", 11)->display($context);
            // line 12
            echo "    </div>

    <!-- 考试/作业 -->
    <div class=\"es-bar-main\" id=\"bar-homework\">
      ";
            // line 16
            $this->loadTemplate("TopxiaWebBundle:EsBar:ListContent/practice.html.twig", "TopxiaWebBundle:EsBar:index.html.twig", 16)->display($context);
            // line 17
            echo "    </div>

    <!-- 课程/班级 -->
    <div class=\"es-bar-main\" id=\"bar-course-list\">
      ";
            // line 21
            $this->loadTemplate("TopxiaWebBundle:EsBar:ListContent/study-place.html.twig", "TopxiaWebBundle:EsBar:index.html.twig", 21)->display($context);
            // line 22
            echo "    </div>

    <!-- 学习中心 -->
    <div class=\"es-bar-main\" id=\"bar-user-center\">
      ";
            // line 26
            $this->loadTemplate("TopxiaWebBundle:EsBar:ListContent/study-center.html.twig", "TopxiaWebBundle:EsBar:index.html.twig", 26)->display($context);
            // line 27
            echo "    </div>

    <!-- 学习历史 -->
    ";
            // line 39
            echo "
  ";
        }
        // line 41
        echo "
  ";
        // line 42
        $this->loadTemplate("TopxiaWebBundle:EsBar:ListContent/consult.html.twig", "TopxiaWebBundle:EsBar:index.html.twig", 42)->display($context);
        // line 43
        echo "
</div>

";
        // line 46
        $this->env->getExtension('topxia_web_twig')->loadScript("es-bar/index");
        // line 47
        $this->env->getExtension('topxia_web_twig')->loadScript("notification/notification");
        // line 48
        echo "
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:EsBar:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 48,  84 => 47,  82 => 46,  77 => 43,  75 => 42,  72 => 41,  68 => 39,  63 => 27,  61 => 26,  55 => 22,  53 => 21,  47 => 17,  45 => 16,  39 => 12,  37 => 11,  33 => 9,  31 => 8,  27 => 6,  25 => 5,  19 => 1,);
    }
}
/* <!-- 侧边栏快捷操作 -->*/
/* <div class="es-bar hidden-xs">*/
/* */
/*   <!-- 左侧列表 -->*/
/*   {% include 'TopxiaWebBundle:EsBar:left-list.html.twig' %}*/
/* */
/*   <!-- 列表内容 -->*/
/*   {% if app.user and app.user.isLogin() %}*/
/*     <!-- 通知 -->*/
/*     <div class="es-bar-main" id="bar-message">*/
/*       {% include 'TopxiaWebBundle:EsBar:ListContent/notification.html.twig' %}*/
/*     </div>*/
/* */
/*     <!-- 考试/作业 -->*/
/*     <div class="es-bar-main" id="bar-homework">*/
/*       {% include 'TopxiaWebBundle:EsBar:ListContent/practice.html.twig' %}*/
/*     </div>*/
/* */
/*     <!-- 课程/班级 -->*/
/*     <div class="es-bar-main" id="bar-course-list">*/
/*       {% include 'TopxiaWebBundle:EsBar:ListContent/study-place.html.twig' %}*/
/*     </div>*/
/* */
/*     <!-- 学习中心 -->*/
/*     <div class="es-bar-main" id="bar-user-center">*/
/*       {% include 'TopxiaWebBundle:EsBar:ListContent/study-center.html.twig' %}*/
/*     </div>*/
/* */
/*     <!-- 学习历史 -->*/
/*     {#<div class="es-bar-main" id="bar-history">*/
/*       <div class="bar-main-header">*/
/*         <a href="javascript:;" class="js-bar-shrink pull-left link-light" data-url="" id="bar-my-history"><i class="es-icon es-icon-arrowforward"></i></a>*/
/*         学习历史*/
/*       </div>*/
/*       <div class="bar-main-body" id="bar-history-list">*/
/* */
/*       </div>*/
/*     </div>#}*/
/* */
/*   {% endif %}*/
/* */
/*   {% include 'TopxiaWebBundle:EsBar:ListContent/consult.html.twig' %}*/
/* */
/* </div>*/
/* */
/* {% do load_script('es-bar/index') %}*/
/* {% do load_script('notification/notification') %}*/
/* */
/* */
