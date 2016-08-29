<?php

/* TopxiaWebBundle:EsBar:ListContent/practice.html.twig */
class __TwigTemplate_adf7c4202ec3d418090eda3b841e43d4c86333b2c48a6666af073db3c27c02b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:EsBar:layout.html.twig", "TopxiaWebBundle:EsBar:ListContent/practice.html.twig", 1);
        $this->blocks = array(
            'esBarTitle' => array($this, 'block_esBarTitle'),
            'esBarBody' => array($this, 'block_esBarBody'),
            'myPractice' => array($this, 'block_myPractice'),
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

    // line 2
    public function block_esBarTitle($context, array $blocks = array())
    {
        // line 3
        echo "    我的考试/作业
";
    }

    // line 6
    public function block_esBarBody($context, array $blocks = array())
    {
        // line 7
        echo "  <div class=\"text-center\">
    <div class=\"btn-group btn-action\">
      <a href=\"javascript:;\" data-url=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("esbar_my_practice", array("status" => "reviewing"));
        echo "\" class=\"btn btn-primary ";
        if ((((array_key_exists("esBarMenu", $context)) ? (_twig_default_filter((isset($context["esBarMenu"]) ? $context["esBarMenu"] : null), "")) : ("")) != "finished")) {
            echo "active";
        }
        echo "\" id=\"bar-practice-review\">已提交</a>
      <a href=\"javascript:;\" data-url=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("esbar_my_practice", array("status" => "finished"));
        echo "\" class=\"btn btn-primary ";
        if ((((array_key_exists("esBarMenu", $context)) ? (_twig_default_filter((isset($context["esBarMenu"]) ? $context["esBarMenu"] : null), "")) : ("")) == "finished")) {
            echo "active";
        }
        echo "\" id=\"bar-practice-finish\"><span>已批阅</span></a>
    </div>
  </div>
  <div class=\"bar-homework\">
    ";
        // line 14
        $this->displayBlock('myPractice', $context, $blocks);
        // line 17
        echo "  </div>
";
    }

    // line 14
    public function block_myPractice($context, array $blocks = array())
    {
        // line 15
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:EsBar:ListContent/practice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 15,  71 => 14,  66 => 17,  64 => 14,  53 => 10,  45 => 9,  41 => 7,  38 => 6,  33 => 3,  30 => 2,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle:EsBar:layout.html.twig' %}*/
/* {% block esBarTitle %}*/
/*     我的考试/作业*/
/* {% endblock %}*/
/* */
/* {% block esBarBody %}*/
/*   <div class="text-center">*/
/*     <div class="btn-group btn-action">*/
/*       <a href="javascript:;" data-url="{{ path('esbar_my_practice',{status:'reviewing'}) }}" class="btn btn-primary {% if esBarMenu|default('') != 'finished' %}active{% endif %}" id="bar-practice-review">已提交</a>*/
/*       <a href="javascript:;" data-url="{{ path('esbar_my_practice',{status:'finished'}) }}" class="btn btn-primary {% if esBarMenu|default('') == 'finished'%}active{% endif %}" id="bar-practice-finish"><span>已批阅</span></a>*/
/*     </div>*/
/*   </div>*/
/*   <div class="bar-homework">*/
/*     {% block myPractice %}*/
/* */
/*     {% endblock %}*/
/*   </div>*/
/* {% endblock %}*/
