<?php

/* TopxiaWebBundle:Content:page-list.html.twig */
class __TwigTemplate_e6d12f2300c533765c4ed03fe59ca1a2fe03415bb7407a2b9d49cf1f10ebffac extends Twig_Template
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
        echo "请创建模版文件customize/content/";
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
        echo "/list.html.twig，自定义。
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Content:page-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* 请创建模版文件customize/content/{{ type }}/list.html.twig，自定义。*/
/* */
