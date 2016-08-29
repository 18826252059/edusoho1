<?php

/* TopxiaWebBundle:Announcement:announcement-course-nojoin-show-modal.html.twig */
class __TwigTemplate_8fab2a9c348dfa113f7ffe60ed6f69d1a1a7c237b43dc7620cb93953f34514ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "TopxiaWebBundle:Announcement:announcement-course-nojoin-show-modal.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "提示";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    <h4>您尚未成为";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["targetObject"]) ? $context["targetObject"] : null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["targetObject"]) ? $context["targetObject"] : null), "title", array()), "课程")) : ("课程")), "html", null, true);
        echo "学员，请先成为";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["targetObject"]) ? $context["targetObject"] : null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["targetObject"]) ? $context["targetObject"] : null), "title", array()), "课程")) : ("课程")), "html", null, true);
        echo "学员。</h4>
";
    }

    // line 9
    public function block_footer($context, array $blocks = array())
    {
        // line 10
        echo "    <a id=\"course-buy-btn\" class=\"btn btn-primary\"
      ";
        // line 11
        if (_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("targetObject.buy_fill_userinfo"), false)) {
            // line 12
            echo "      href=\"#modal\" data-toggle=\"modal\" 
      data-url=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_buy", array("id" => $this->getAttribute((isset($context["targetObject"]) ? $context["targetObject"] : null), "id", array()), "targetType" => "course")), "html", null, true);
            echo "\"
      ";
        } else {
            // line 15
            echo "      href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("order_show", array("targetId" => $this->getAttribute((isset($context["targetObject"]) ? $context["targetObject"] : null), "id", array()), "targetType" => "course")), "html", null, true);
            echo "\"
      ";
        }
        // line 17
        echo "      >加入学习
    </a>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Announcement:announcement-course-nojoin-show-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 17,  64 => 15,  59 => 13,  56 => 12,  54 => 11,  51 => 10,  48 => 9,  39 => 6,  36 => 5,  30 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::bootstrap-modal-layout.html.twig' %}*/
/* */
/* {% block title %}提示{% endblock %}*/
/* */
/* {% block body %}*/
/*     <h4>您尚未成为{{ targetObject.title|default('课程') }}学员，请先成为{{ targetObject.title|default('课程') }}学员。</h4>*/
/* {% endblock %}*/
/* */
/* {% block footer %}*/
/*     <a id="course-buy-btn" class="btn btn-primary"*/
/*       {% if setting("targetObject.buy_fill_userinfo")|default(false) %}*/
/*       href="#modal" data-toggle="modal" */
/*       data-url="{{ path('course_buy', {id:targetObject.id, targetType:'course'}) }}"*/
/*       {% else %}*/
/*       href="{{ path('order_show', {targetId:targetObject.id, targetType:'course'}) }}"*/
/*       {% endif %}*/
/*       >加入学习*/
/*     </a>*/
/* {% endblock %}*/
