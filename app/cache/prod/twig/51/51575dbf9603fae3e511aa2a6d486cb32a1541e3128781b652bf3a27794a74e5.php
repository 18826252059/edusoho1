<?php

/* TopxiaWebBundle:MyQuiz:layout.html.twig */
class __TwigTemplate_e13f75ef40f322196dfc606b12ca82d53dc0fa43c874ad059bc34e0b8de65a99 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:My:layout.html.twig", "TopxiaWebBundle:MyQuiz:layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
            'list' => array($this, 'block_list'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:My:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 4
        $context["side_nav"] = "my-quiz";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "我的考试 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        // line 7
        echo "<div class=\"panel panel-default panel-col\">

\t<div class=\"panel-heading\">
\t\t我的考试
\t</div>
\t<div class=\"panel-body\">
\t\t<ul class=\"nav nav-tabs\">
\t\t\t<li class=\"";
        // line 14
        echo twig_escape_filter($this->env, ((array_key_exists("myQuizActive", $context)) ? (_twig_default_filter((isset($context["myQuizActive"]) ? $context["myQuizActive"] : null), "")) : ("")), "html", null, true);
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("my_quiz");
        echo "\">考试记录</a></li>
\t\t\t<li class=\"";
        // line 15
        echo twig_escape_filter($this->env, ((array_key_exists("favoriteActive", $context)) ? (_twig_default_filter((isset($context["favoriteActive"]) ? $context["favoriteActive"] : null), "")) : ("")), "html", null, true);
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("my_show_favorite_question");
        echo "\">收藏的题目</a></li>
\t\t</ul>
\t\t<br>
\t\t";
        // line 18
        $this->displayBlock('list', $context, $blocks);
        // line 19
        echo "\t\t
\t</div>
</div>
";
    }

    // line 18
    public function block_list($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:MyQuiz:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 18,  68 => 19,  66 => 18,  58 => 15,  52 => 14,  43 => 7,  40 => 6,  33 => 3,  29 => 1,  27 => 4,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle:My:layout.html.twig' %}*/
/* */
/* {% block title %}我的考试 - {{ parent() }}{% endblock %}*/
/* {% set side_nav = 'my-quiz' %}*/
/* */
/* {% block main %}*/
/* <div class="panel panel-default panel-col">*/
/* */
/* 	<div class="panel-heading">*/
/* 		我的考试*/
/* 	</div>*/
/* 	<div class="panel-body">*/
/* 		<ul class="nav nav-tabs">*/
/* 			<li class="{{ myQuizActive|default('') }}"><a href="{{ path('my_quiz') }}">考试记录</a></li>*/
/* 			<li class="{{ favoriteActive|default('') }}"><a href="{{ path('my_show_favorite_question') }}">收藏的题目</a></li>*/
/* 		</ul>*/
/* 		<br>*/
/* 		{% block list %}{% endblock %}*/
/* 		*/
/* 	</div>*/
/* </div>*/
/* {% endblock %}*/
