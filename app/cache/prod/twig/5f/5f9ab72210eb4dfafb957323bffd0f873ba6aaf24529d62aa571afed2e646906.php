<?php

/* TopxiaWebBundle:Announcement:announcement-classroom-nojoin-show-modal.html.twig */
class __TwigTemplate_0002640baeb0d5840dc9d4a365dc455c37d55f9e9fe58ab7913d6d6d97f090c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "TopxiaWebBundle:Announcement:announcement-classroom-nojoin-show-modal.html.twig", 1);
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
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["targetObject"]) ? $context["targetObject"] : null), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["targetObject"]) ? $context["targetObject"] : null), "name", array()), "班级")) : ("班级")), "html", null, true);
        echo "成员，请先成为";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["targetObject"]) ? $context["targetObject"] : null), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["targetObject"]) ? $context["targetObject"] : null), "name", array()), "班级")) : ("班级")), "html", null, true);
        echo "成员。</h4>
";
    }

    // line 9
    public function block_footer($context, array $blocks = array())
    {
        // line 10
        echo "    ";
        if ( !$this->getAttribute((isset($context["targetObject"]) ? $context["targetObject"] : null), "private", array())) {
            // line 11
            echo "      <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_become_auditor", array("id" => $this->getAttribute((isset($context["targetObject"]) ? $context["targetObject"] : null), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\">加入旁听生</a>
   ";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Announcement:announcement-classroom-nojoin-show-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 11,  51 => 10,  48 => 9,  39 => 6,  36 => 5,  30 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::bootstrap-modal-layout.html.twig' %}*/
/* */
/* {% block title %}提示{% endblock %}*/
/* */
/* {% block body %}*/
/*     <h4>您尚未成为{{ targetObject.name|default("班级") }}成员，请先成为{{ targetObject.name|default("班级") }}成员。</h4>*/
/* {% endblock %}*/
/* */
/* {% block footer %}*/
/*     {% if not targetObject.private %}*/
/*       <a href="{{ path('classroom_become_auditor', {id:targetObject.id}) }}" class="btn btn-primary">加入旁听生</a>*/
/*    {% endif %}*/
/* {% endblock %}*/
