<?php

/* TopxiaWebBundle:Course/Part:normal-header-classroom-info.html.twig */
class __TwigTemplate_5c75eb1d04293a4e569378b6d8234f55d2ca5da309a669125593583786ebbac6 extends Twig_Template
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
        if ((isset($context["classroom"]) ? $context["classroom"] : null)) {
            // line 2
            echo "该课程属于
<a href=\"";
            // line 3
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_show", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "title", array()), "html", null, true);
            echo "</a>
</br>
请加入后再学习
";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course/Part:normal-header-classroom-info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if classroom %}*/
/* 该课程属于*/
/* <a href="{{path('classroom_show', {id:classroom.id})}}">{{classroom.title}}</a>*/
/* </br>*/
/* 请加入后再学习*/
/* {% endif %}*/
