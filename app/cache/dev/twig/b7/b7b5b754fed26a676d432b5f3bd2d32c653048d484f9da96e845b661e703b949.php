<?php

/* ClassroomBundle:ClassroomManage:layout.html.twig */
class __TwigTemplate_4e0a14d8558e64cd3dabf70ab2469a51033c512d10778d90a1312e5e60ad6767 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "ClassroomBundle:ClassroomManage:layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'side' => array($this, 'block_side'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
        echo "管理 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "  ";
        $this->loadTemplate("ClassroomBundle:ClassroomManage:header.html.twig", "ClassroomBundle:ClassroomManage:layout.html.twig", 6)->display($context);
        // line 7
        echo "
  <div class=\"row\">
    <div class=\"col-md-3\">
      ";
        // line 10
        $this->displayBlock('side', $context, $blocks);
        // line 16
        echo "    </div>
    <div class=\"col-md-9\">
      ";
        // line 18
        $this->displayBlock('main', $context, $blocks);
        // line 19
        echo "    </div>
  </div>
";
    }

    // line 10
    public function block_side($context, array $blocks = array())
    {
        // line 11
        echo "        ";
        $context["side_nav"] = ((array_key_exists("side_nav", $context)) ? (_twig_default_filter((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")), null)) : (null));
        // line 12
        echo "        <div class=\"sidenav\">
          ";
        // line 13
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ClassroomBundle:ClassroomManage:menu", array("classroom" => (isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "sideNav" => (isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")))));
        echo "
        </div>
      ";
    }

    // line 18
    public function block_main($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:ClassroomManage:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 18,  73 => 13,  70 => 12,  67 => 11,  64 => 10,  58 => 19,  56 => 18,  52 => 16,  50 => 10,  45 => 7,  42 => 6,  39 => 5,  31 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::layout.html.twig' %}*/
/* */
/* {% block title %}{{ setting('classroom.name')|default("班级") }}管理 - {{ parent() }}{% endblock %}*/
/* */
/* {% block content %}*/
/*   {% include ('ClassroomBundle:ClassroomManage:header.html.twig') %}*/
/* */
/*   <div class="row">*/
/*     <div class="col-md-3">*/
/*       {% block side %}*/
/*         {% set side_nav = side_nav|default(null) %}*/
/*         <div class="sidenav">*/
/*           {{ render(controller('ClassroomBundle:ClassroomManage:menu',{classroom:classroom,sideNav:side_nav})) }}*/
/*         </div>*/
/*       {% endblock %}*/
/*     </div>*/
/*     <div class="col-md-9">*/
/*       {% block main %}{% endblock %}*/
/*     </div>*/
/*   </div>*/
/* {% endblock %}*/
