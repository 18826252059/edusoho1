<?php

/* TopxiaWebBundle:User:courses.html.twig */
class __TwigTemplate_bf60128527d93ab635a36d47c2678c7ffe63af42a11ac97fb5c214db759d5046 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:User:layout.html.twig", "TopxiaWebBundle:User:courses.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:User:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["pageNav"] = (isset($context["type"]) ? $context["type"] : null);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "
  ";
        // line 9
        if ((isset($context["courses"]) ? $context["courses"] : null)) {
            // line 10
            echo "    ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Course:coursesBlock", array("courses" => (isset($context["courses"]) ? $context["courses"] : null), "view" => "list")));
            echo "
    <nav class=\"text-center\">
      ";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
            echo "
    </nav> 
  ";
        } else {
            // line 15
            echo "    ";
            if (((isset($context["pageNav"]) ? $context["pageNav"] : null) == "teach")) {
                // line 16
                echo "      <div class=\"empty\">无在教的课程</div>
    ";
            } elseif ((            // line 17
(isset($context["pageNav"]) ? $context["pageNav"] : null) == "learn")) {
                // line 18
                echo "      <div class=\"empty\">无在学的课程</div>
    ";
            } elseif ((            // line 19
(isset($context["pageNav"]) ? $context["pageNav"] : null) == "favorited")) {
                // line 20
                echo "      <div class=\"empty\">无收藏的课程</div>
    ";
            }
            // line 22
            echo "  ";
        }
        // line 23
        echo "
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:User:courses.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 23,  75 => 22,  71 => 20,  69 => 19,  66 => 18,  64 => 17,  61 => 16,  58 => 15,  52 => 12,  46 => 10,  44 => 9,  41 => 8,  38 => 7,  32 => 3,  28 => 1,  26 => 5,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle:User:layout.html.twig' %}*/
/* */
/* {% block title %}{{ parent() }}{% endblock %}*/
/* */
/* {% set pageNav = type %}*/
/* */
/* {% block main %}*/
/* */
/*   {% if courses %}*/
/*     {{ render(controller('TopxiaWebBundle:Course:coursesBlock', {courses:courses, view: 'list'})) }}*/
/*     <nav class="text-center">*/
/*       {{ web_macro.paginator(paginator) }}*/
/*     </nav> */
/*   {% else %}*/
/*     {% if pageNav == 'teach' %}*/
/*       <div class="empty">无在教的课程</div>*/
/*     {% elseif pageNav == 'learn' %}*/
/*       <div class="empty">无在学的课程</div>*/
/*     {% elseif pageNav == 'favorited' %}*/
/*       <div class="empty">无收藏的课程</div>*/
/*     {% endif %}*/
/*   {% endif %}*/
/* */
/* {% endblock %}*/
/* */
/* */
