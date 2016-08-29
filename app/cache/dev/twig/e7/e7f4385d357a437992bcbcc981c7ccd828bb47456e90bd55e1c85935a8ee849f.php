<?php

/* TopxiaWebBundle:EsBar:ListContent/study-place.html.twig */
class __TwigTemplate_f2824708daec9bea2b0b340cb8083383b43edf9f952465ecc7fe712cec456a43 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:EsBar:layout.html.twig", "TopxiaWebBundle:EsBar:ListContent/study-place.html.twig", 1);
        $this->blocks = array(
            'esBarTitle' => array($this, 'block_esBarTitle'),
            'esBarBody' => array($this, 'block_esBarBody'),
            'myStudyPlace' => array($this, 'block_myStudyPlace'),
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

    // line 3
    public function block_esBarTitle($context, array $blocks = array())
    {
        // line 4
        echo "  我的课程/";
        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
        echo "
";
    }

    // line 7
    public function block_esBarBody($context, array $blocks = array())
    {
        // line 8
        echo "  <div class=\"text-center\">
    <div class=\"btn-group btn-action\">
      <a href=\"javascript:;\" data-url=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("esbar_my_course");
        echo "\" class=\"btn btn-primary ";
        if ((((array_key_exists("esBarMenu", $context)) ? (_twig_default_filter((isset($context["esBarMenu"]) ? $context["esBarMenu"] : $this->getContext($context, "esBarMenu")), "")) : ("")) != "classroom")) {
            echo "active";
        }
        echo "\"
         id=\"bar-course-btn\">课程</a>
      <a href=\"javascript:;\" data-url=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("esbar_my_classroom");
        echo "\" class=\"btn btn-primary ";
        if ((((array_key_exists("esBarMenu", $context)) ? (_twig_default_filter((isset($context["esBarMenu"]) ? $context["esBarMenu"] : $this->getContext($context, "esBarMenu")), "")) : ("")) == "classroom")) {
            echo "active";
        }
        echo "\"
         id=\"bar-classroom-btn\">";
        // line 13
        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
        echo "</a>
    </div>
  </div>

  <div id=\"bar-my-course\">
    ";
        // line 18
        $this->displayBlock('myStudyPlace', $context, $blocks);
        // line 20
        echo "  </div>
";
    }

    // line 18
    public function block_myStudyPlace($context, array $blocks = array())
    {
        // line 19
        echo "    ";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:EsBar:ListContent/study-place.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 19,  79 => 18,  74 => 20,  72 => 18,  64 => 13,  56 => 12,  47 => 10,  43 => 8,  40 => 7,  33 => 4,  30 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle:EsBar:layout.html.twig' %}*/
/* */
/* {% block esBarTitle %}*/
/*   我的课程/{{ setting('classroom.name')|default("班级") }}*/
/* {% endblock %}*/
/* */
/* {% block esBarBody %}*/
/*   <div class="text-center">*/
/*     <div class="btn-group btn-action">*/
/*       <a href="javascript:;" data-url="{{ path('esbar_my_course') }}" class="btn btn-primary {% if esBarMenu|default('') != 'classroom' %}active{% endif %}"*/
/*          id="bar-course-btn">课程</a>*/
/*       <a href="javascript:;" data-url="{{ path('esbar_my_classroom' ) }}" class="btn btn-primary {% if esBarMenu|default('') == 'classroom' %}active{% endif %}"*/
/*          id="bar-classroom-btn">{{ setting('classroom.name')|default("班级") }}</a>*/
/*     </div>*/
/*   </div>*/
/* */
/*   <div id="bar-my-course">*/
/*     {% block myStudyPlace%}*/
/*     {% endblock %}*/
/*   </div>*/
/* {% endblock %}*/
