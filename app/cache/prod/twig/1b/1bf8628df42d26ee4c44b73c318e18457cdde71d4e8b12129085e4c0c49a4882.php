<?php

/* TopxiaWebBundle:MyQuiz:teacher-test-layout.html.twig */
class __TwigTemplate_45e86354ee1f0058e3cc8421f8616370b24467c7de1310164497ed941dbc8381 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:My:layout.html.twig", "TopxiaWebBundle:MyQuiz:teacher-test-layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:My:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 4
        $context["side_nav"] = "my-teaching-check";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "我的批阅 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        // line 7
        echo "<div class=\"panel panel-default panel-col\">

\t<div class=\"panel-heading\">
\t\t我的批阅
\t</div>
\t<div class=\"panel-body\">
\t\t<ul class=\"nav nav-tabs\">
\t\t\t<li class=\"";
        // line 14
        if (((isset($context["status"]) ? $context["status"] : null) == "reviewing")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("course_manage_list_teacher_test_reviewing");
        echo "\">未批阅</a></li>
\t\t\t<li class=\"";
        // line 15
        if (((isset($context["status"]) ? $context["status"] : null) == "finished")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("course_manage_list_teacher_test_finished");
        echo "\">已批阅</a></li>
\t\t</ul>
\t\t<br>
\t\t";
        // line 19
        echo "\t\t";
        $this->loadTemplate("TopxiaWebBundle:MyQuiz:list-teacher-test.html.twig", "TopxiaWebBundle:MyQuiz:teacher-test-layout.html.twig", 19)->display($context);
        // line 20
        echo "\t\t
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:MyQuiz:teacher-test-layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 20,  69 => 19,  59 => 15,  51 => 14,  42 => 7,  39 => 6,  32 => 3,  28 => 1,  26 => 4,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle:My:layout.html.twig' %}*/
/* */
/* {% block title %}我的批阅 - {{ parent() }}{% endblock %}*/
/* {% set side_nav = 'my-teaching-check' %}*/
/* */
/* {% block main %}*/
/* <div class="panel panel-default panel-col">*/
/* */
/* 	<div class="panel-heading">*/
/* 		我的批阅*/
/* 	</div>*/
/* 	<div class="panel-body">*/
/* 		<ul class="nav nav-tabs">*/
/* 			<li class="{% if status == 'reviewing' %}active{% endif %}"><a href="{{ path('course_manage_list_teacher_test_reviewing') }}">未批阅</a></li>*/
/* 			<li class="{% if status == 'finished' %}active{% endif %}"><a href="{{ path('course_manage_list_teacher_test_finished') }}">已批阅</a></li>*/
/* 		</ul>*/
/* 		<br>*/
/* 		{# {% block list %}{% endblock %} #}*/
/* 		{% include 'TopxiaWebBundle:MyQuiz:list-teacher-test.html.twig' %}*/
/* 		*/
/* 	</div>*/
/* </div>*/
/* {% endblock %}*/
