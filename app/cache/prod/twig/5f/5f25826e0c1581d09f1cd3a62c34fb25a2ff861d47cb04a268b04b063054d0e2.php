<?php

/* TopxiaWebBundle:EsBar/ListContent:study-center.html.twig */
class __TwigTemplate_96496a49fd253d2bf1a2c638bf7a1ce1db0c886675e33f65ffc982b9f9ddee71 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:EsBar:layout.html.twig", "TopxiaWebBundle:EsBar/ListContent:study-center.html.twig", 1);
        $this->blocks = array(
            'esBarTitle' => array($this, 'block_esBarTitle'),
            'esBarBody' => array($this, 'block_esBarBody'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:EsBar:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_esBarTitle($context, array $blocks = array())
    {
        // line 5
        echo "    学习中心
";
    }

    // line 8
    public function block_esBarBody($context, array $blocks = array())
    {
        // line 9
        echo "  <!-- 用户 -->
  ";
        // line 10
        $this->loadTemplate("TopxiaWebBundle:EsBar:ListContent/StudyCenter/user.html.twig", "TopxiaWebBundle:EsBar/ListContent:study-center.html.twig", 10)->display($context);
        // line 11
        echo "

  <!-- 直播预告 -->
  ";
        // line 14
        $this->loadTemplate("TopxiaWebBundle:EsBar:ListContent/StudyCenter/live.html.twig", "TopxiaWebBundle:EsBar/ListContent:study-center.html.twig", 14)->display($context);
        // line 15
        echo "
  <!-- 学习任务 -->
  ";
        // line 17
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:EsBar/EsBar:studyPlan"));
        echo "
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:EsBar/ListContent:study-center.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 17,  52 => 15,  50 => 14,  45 => 11,  43 => 10,  40 => 9,  37 => 8,  32 => 5,  29 => 4,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle:EsBar:layout.html.twig' %}*/
/* */
/* */
/* {% block esBarTitle %}*/
/*     学习中心*/
/* {% endblock %}*/
/* */
/* {% block esBarBody %}*/
/*   <!-- 用户 -->*/
/*   {% include 'TopxiaWebBundle:EsBar:ListContent/StudyCenter/user.html.twig' %}*/
/* */
/* */
/*   <!-- 直播预告 -->*/
/*   {% include 'TopxiaWebBundle:EsBar:ListContent/StudyCenter/live.html.twig' %}*/
/* */
/*   <!-- 学习任务 -->*/
/*   {{ render(controller('TopxiaWebBundle:EsBar/EsBar:studyPlan' )) }}*/
/* {% endblock %}*/
/* */
/* */
