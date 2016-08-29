<?php

/* TopxiaWebBundle:QuizQuestionTest:do-test-pause-modal.html.twig */
class __TwigTemplate_07b6b4221e2b2bfbbdcb105de34e9b7b0b98360b5876dbdfd5f78ce21562fa58 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "TopxiaWebBundle:QuizQuestionTest:do-test-pause-modal.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::bootstrap-modal-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["modal_class"] = "modal-sm";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "暂停";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "
<div class=\"well well-lg\">
  <div class=\"empty\">考试已暂停，请尽快回来哦~
  </div>
</div>


";
    }

    // line 16
    public function block_footer($context, array $blocks = array())
    {
        // line 17
        echo "  <button type=\"button\" class=\"btn btn-info\" data-dismiss=\"modal\">继续</button>

";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:QuizQuestionTest:do-test-pause-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 17,  53 => 16,  42 => 7,  39 => 6,  33 => 5,  29 => 1,  27 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::bootstrap-modal-layout.html.twig' %}*/
/* */
/* {% set modal_class = 'modal-sm' %}*/
/* */
/* {% block title %}暂停{% endblock %}*/
/* {% block body %}*/
/* */
/* <div class="well well-lg">*/
/*   <div class="empty">考试已暂停，请尽快回来哦~*/
/*   </div>*/
/* </div>*/
/* */
/* */
/* {% endblock %}*/
/* */
/* {% block footer %}*/
/*   <button type="button" class="btn btn-info" data-dismiss="modal">继续</button>*/
/* */
/* {% endblock %}*/
