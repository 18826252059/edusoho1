<?php

/* TopxiaWebBundle:Content:activity-show.html.twig */
class __TwigTemplate_484d1b533032fc3edd3b9abc9d5f1c92df028e249d0e823f995ea417934eeda8 extends Twig_Template
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
        echo "/show.html.twig，自定义。</p>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Content:activity-show.html.twig";
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
/* <p>请创建模版文件customize/content/{{ type }}/show.html.twig，自定义。</p>*/
