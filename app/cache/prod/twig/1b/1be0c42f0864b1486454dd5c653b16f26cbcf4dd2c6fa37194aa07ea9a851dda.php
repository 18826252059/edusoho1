<?php

/* TopxiaWebBundle:Content:article-show.html.twig */
class __TwigTemplate_8bec4c57bc5c60673c709ddbef025dd31a0a384cb492d0ef078aa622d7c04dea extends Twig_Template
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
        echo "<p>请创建模版文件customize/content/";
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
        echo "/list.html.twig，自定义。</p>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Content:article-show.html.twig";
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
/* <p>请创建模版文件customize/content/{{ type }}/list.html.twig，自定义。</p>*/
