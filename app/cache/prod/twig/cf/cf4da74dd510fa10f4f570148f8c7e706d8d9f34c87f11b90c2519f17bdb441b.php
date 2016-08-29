<?php

/* TopxiaWebBundle:Question:question-base-layout.html.twig */
class __TwigTemplate_ed8889cdbb6af9d27c6cce094ddb386561c6c1d1d86bf14c6276080d763bd710 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'heading' => array($this, 'block_heading'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"question question-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "type", array()), "html", null, true);
        echo " question-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "id", array()), "html", null, true);
        echo "\"  data-question-id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "id", array()), "html", null, true);
        echo "\">
  <div class=\"question-heading editor-text\">";
        // line 2
        $this->displayBlock('heading', $context, $blocks);
        echo "</div>

  <div class=\"question-body clearfix\">";
        // line 4
        $this->displayBlock('body', $context, $blocks);
        echo "</div>

  <div class=\"question-footer\">";
        // line 6
        $this->displayBlock('footer', $context, $blocks);
        echo "</div>
</div>";
    }

    // line 2
    public function block_heading($context, array $blocks = array())
    {
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
    }

    // line 6
    public function block_footer($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Question:question-base-layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 6,  52 => 4,  47 => 2,  41 => 6,  36 => 4,  31 => 2,  22 => 1,);
    }
}
/* <div class="question question-{{ question.type }} question-{{ question.id }}"  data-question-id="{{ question.id }}">*/
/*   <div class="question-heading editor-text">{% block heading %}{% endblock %}</div>*/
/* */
/*   <div class="question-body clearfix">{% block body %}{% endblock %}</div>*/
/* */
/*   <div class="question-footer">{% block footer %}{% endblock %}</div>*/
/* </div>*/
