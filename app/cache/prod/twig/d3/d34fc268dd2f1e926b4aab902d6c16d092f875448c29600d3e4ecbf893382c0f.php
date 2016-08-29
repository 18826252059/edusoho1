<?php

/* TopxiaWebBundle:Search:cloud-search-failure.html.twig */
class __TwigTemplate_f32db4bcc40ed4b87f6c0277c78c92fda1dd548a1ab42dda676770850d0be8c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:Search:cloud-search.html.twig", "TopxiaWebBundle:Search:cloud-search-failure.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:Search:cloud-search.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
  <div class=\"row\">
    <div class=\"col-md-8\">
      <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
          <h3 class=\"panel-title\">搜索结果</h3>
        </div>
        <div class=\"panel-body\">
         ";
        // line 12
        echo twig_escape_filter($this->env, ((array_key_exists("errorMessage", $context)) ? (_twig_default_filter((isset($context["errorMessage"]) ? $context["errorMessage"] : null), "")) : ("")), "html", null, true);
        echo "
        </div>
      </div>
    </div>
    <div class=\"col-md-4\">
      <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
          <h3 class=\"panel-title\">常用关键词</h3>
        </div>
        <div class=\"panel-body\">
        </div>
      </div>
    </div>
  </div>
  
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Search:cloud-search-failure.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 12,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle:Search:cloud-search.html.twig' %}*/
/* */
/* {% block content %}*/
/* */
/*   <div class="row">*/
/*     <div class="col-md-8">*/
/*       <div class="panel panel-default">*/
/*         <div class="panel-heading">*/
/*           <h3 class="panel-title">搜索结果</h3>*/
/*         </div>*/
/*         <div class="panel-body">*/
/*          {{errorMessage|default('')}}*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*     <div class="col-md-4">*/
/*       <div class="panel panel-default">*/
/*         <div class="panel-heading">*/
/*           <h3 class="panel-title">常用关键词</h3>*/
/*         </div>*/
/*         <div class="panel-body">*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/*   */
/* {% endblock %}*/
