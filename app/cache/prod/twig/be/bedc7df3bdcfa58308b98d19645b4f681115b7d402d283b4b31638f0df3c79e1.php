<?php

/* TopxiaAdminBundle:Course:tab.html.twig */
class __TwigTemplate_d7020842ca9aba8bf97979e38015d79801a84f070c888d01585ab0adf047bc24 extends Twig_Template
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
        echo "<div class=\"btn-group\">

\t<a href=\" ";
        // line 3
        echo $this->env->getExtension('routing')->getUrl("admin_course", array("filter" => "normal"));
        echo "\" type=\"button\" class=\"btn btn-default btn-sm ";
        if (((isset($context["filter"]) ? $context["filter"] : null) == "normal")) {
            echo "btn-primary";
        }
        echo "\">普通课程</a>


\t<a href=\" ";
        // line 6
        echo $this->env->getExtension('routing')->getUrl("admin_course", array("filter" => "classroom"));
        echo "\" type=\"button\" class=\"btn btn-default btn-sm ";
        if (((isset($context["filter"]) ? $context["filter"] : null) == "classroom")) {
            echo "btn-primary";
        }
        echo "\">";
        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
        echo "课程</a>
</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Course:tab.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 6,  23 => 3,  19 => 1,);
    }
}
/* <div class="btn-group">*/
/* */
/* 	<a href=" {{ url('admin_course', {filter: 'normal'}) }}" type="button" class="btn btn-default btn-sm {% if filter == 'normal'%}btn-primary{% endif %}">普通课程</a>*/
/* */
/* */
/* 	<a href=" {{ url('admin_course', {filter: 'classroom'}) }}" type="button" class="btn btn-default btn-sm {% if filter == 'classroom' %}btn-primary{% endif %}">{{setting("classroom.name")|default("班级")}}课程</a>*/
/* </div>*/
