<?php

/* ClassroomBundle:Classroom:hint-modal.html.twig */
class __TwigTemplate_8d91c7b47d45faaa6520deb1d950998aee1bfb37c03350fb9e7634da77637727 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "ClassroomBundle:Classroom:hint-modal.html.twig", 1);
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
        echo "<span class=\"text-muted\">提示</span>";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "\t";
        if ( !(isset($context["classroom"]) ? $context["classroom"] : null)) {
            // line 7
            echo "\t\t<div style=\"height: 50px;text-align: center;\">
\t        <p style=\"line-height: 50px;\">
\t        \t课程已从";
            // line 9
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
            echo "中移除
\t        </p>
\t    </div>
\t";
        } else {
            // line 13
            echo "\t    <div style=\"height: 50px;text-align: center;\">
\t        <p style=\"line-height: 50px;\">
\t        还不是";
            // line 15
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
            echo "成员,请先<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_show", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
            echo "\">加入";
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
            echo "</a>
\t        </p>
\t    </div>
\t";
        }
        // line 19
        echo "   
";
    }

    // line 22
    public function block_footer($context, array $blocks = array())
    {
        // line 23
        echo "  <button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\">关闭</button>
";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:Classroom:hint-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 23,  73 => 22,  68 => 19,  57 => 15,  53 => 13,  46 => 9,  42 => 7,  39 => 6,  36 => 5,  30 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::bootstrap-modal-layout.html.twig' %}*/
/* */
/* {% block title %}<span class="text-muted">提示</span>{% endblock %}*/
/* */
/* {% block body %}*/
/* 	{% if not classroom %}*/
/* 		<div style="height: 50px;text-align: center;">*/
/* 	        <p style="line-height: 50px;">*/
/* 	        	课程已从{{setting("classroom.name")|default("班级")}}中移除*/
/* 	        </p>*/
/* 	    </div>*/
/* 	{% else %}*/
/* 	    <div style="height: 50px;text-align: center;">*/
/* 	        <p style="line-height: 50px;">*/
/* 	        还不是{{setting("classroom.name")|default("班级")}}成员,请先<a href="{{ path('classroom_show', {id:classroom.id}) }}">加入{{setting("classroom.name")|default("班级")}}</a>*/
/* 	        </p>*/
/* 	    </div>*/
/* 	{% endif %}*/
/*    */
/* {% endblock %}*/
/* */
/* {% block footer %}*/
/*   <button type="button" class="btn btn-primary" data-dismiss="modal">关闭</button>*/
/* {% endblock %}*/
