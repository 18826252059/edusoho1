<?php

/* TopxiaWebBundle:Question:question-material-doing.html.twig */
class __TwigTemplate_06d01d5aeb911dde3591a8350d96955fb09754ac55fab931101c6ded39695e95 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:Question:question-base-layout.html.twig", "TopxiaWebBundle:Question:question-material-doing.html.twig", 1);
        $this->blocks = array(
            'heading' => array($this, 'block_heading'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:Question:question-base-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_heading($context, array $blocks = array())
    {
        // line 4
        echo "  <div class=\"well well-sm\">
  ";
        // line 5
        echo $this->env->getExtension('topxia_web_twig')->bbCode2HtmlFilter($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "stem", array()));
        echo "
  </div>
";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "
";
    }

    // line 13
    public function block_footer($context, array $blocks = array())
    {
        // line 14
        echo "
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Question:question-material-doing.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 14,  51 => 13,  46 => 10,  43 => 9,  36 => 5,  33 => 4,  30 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle:Question:question-base-layout.html.twig' %}*/
/* */
/* {% block heading %}*/
/*   <div class="well well-sm">*/
/*   {{ question.stem|bbCode2Html|raw }}*/
/*   </div>*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/* {% endblock %}*/
/* */
/* {% block footer %}*/
/* */
/* {% endblock %}*/
