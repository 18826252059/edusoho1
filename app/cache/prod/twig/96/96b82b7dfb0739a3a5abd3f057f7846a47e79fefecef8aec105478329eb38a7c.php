<?php

/* ClassroomBundle:ClassroomManage/Testpaper:index.html.twig */
class __TwigTemplate_8b5a58800579c1e3bdcc86511d8cd9643e6e9045fd280d8c4e2e96b6c68e3132 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ClassroomBundle:ClassroomManage:layout.html.twig", "ClassroomBundle:ClassroomManage/Testpaper:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ClassroomBundle:ClassroomManage:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 4
        $context["side_nav"] = "testpaper-check";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "试卷批阅 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        // line 7
        echo "<div class=\"panel panel-default panel-col\">

  <div class=\"panel-heading\">
    我的批阅
  </div>
  <div class=\"panel-body\">
    <ul class=\"nav nav-tabs\">
      <li class=\"";
        // line 14
        if (((isset($context["status"]) ? $context["status"] : null) == "reviewing")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_manage_testpaper", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()), "status" => "reviewing")), "html", null, true);
        echo "\">未批阅</a></li>
      <li class=\"";
        // line 15
        if (((isset($context["status"]) ? $context["status"] : null) == "finished")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_manage_testpaper", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()), "status" => "finished")), "html", null, true);
        echo "\">已批阅</a></li>
    </ul>
    <br>

    ";
        // line 19
        $this->loadTemplate("TopxiaWebBundle:MyQuiz:list-teacher-test.html.twig", "ClassroomBundle:ClassroomManage/Testpaper:index.html.twig", 19)->display($context);
        // line 20
        echo "
    ";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo "
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:ClassroomManage/Testpaper:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 21,  72 => 20,  70 => 19,  59 => 15,  51 => 14,  42 => 7,  39 => 6,  32 => 3,  28 => 1,  26 => 4,  11 => 1,);
    }
}
/* {% extends 'ClassroomBundle:ClassroomManage:layout.html.twig' %}*/
/* */
/* {% block title %}试卷批阅 - {{ parent() }}{% endblock %}*/
/* {% set side_nav = 'testpaper-check' %}*/
/* */
/* {% block main %}*/
/* <div class="panel panel-default panel-col">*/
/* */
/*   <div class="panel-heading">*/
/*     我的批阅*/
/*   </div>*/
/*   <div class="panel-body">*/
/*     <ul class="nav nav-tabs">*/
/*       <li class="{% if status == 'reviewing' %}active{% endif %}"><a href="{{path('classroom_manage_testpaper', {id:classroom.id,status:'reviewing'}) }}">未批阅</a></li>*/
/*       <li class="{% if status == 'finished' %}active{% endif %}"><a href="{{path('classroom_manage_testpaper', {id:classroom.id,status:'finished'}) }}">已批阅</a></li>*/
/*     </ul>*/
/*     <br>*/
/* */
/*     {% include 'TopxiaWebBundle:MyQuiz:list-teacher-test.html.twig' %}*/
/* */
/*     {{ web_macro.paginator(paginator) }}*/
/*   </div>*/
/* </div>*/
/* {% endblock %}*/
