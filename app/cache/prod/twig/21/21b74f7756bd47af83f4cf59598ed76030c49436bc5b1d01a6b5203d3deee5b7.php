<?php

/* TopxiaWebBundle:LiveCourse:layout.html.twig */
class __TwigTemplate_eaf356ca41ee9ddd08c92614e980dba192e814903a41c49c280e271da2186e75 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "TopxiaWebBundle:LiveCourse:layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'live_main' => array($this, 'block_live_main'),
            'live_side' => array($this, 'block_live_side'),
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
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
  <div class=\"live-course-body row\">
    <div class=\"col-md-8\">
      <div class=\"es-tag\">直播频道</div>
      ";
        // line 10
        $this->displayBlock('live_main', $context, $blocks);
        // line 11
        echo "    </div>
    <aside class=\"col-md-4\">
      ";
        // line 13
        $this->displayBlock('live_side', $context, $blocks);
        // line 14
        echo "    </aside>
  </div>

";
    }

    // line 10
    public function block_live_main($context, array $blocks = array())
    {
    }

    // line 13
    public function block_live_side($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:LiveCourse:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 13,  61 => 10,  54 => 14,  52 => 13,  48 => 11,  46 => 10,  40 => 6,  37 => 5,  31 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::layout.html.twig' %}*/
/* */
/* {% block title %}{{ parent() }}{% endblock %}*/
/* */
/* {% block content %}*/
/* */
/*   <div class="live-course-body row">*/
/*     <div class="col-md-8">*/
/*       <div class="es-tag">直播频道</div>*/
/*       {% block live_main %}{% endblock %}*/
/*     </div>*/
/*     <aside class="col-md-4">*/
/*       {% block live_side %}{% endblock %}*/
/*     </aside>*/
/*   </div>*/
/* */
/* {% endblock %}*/
