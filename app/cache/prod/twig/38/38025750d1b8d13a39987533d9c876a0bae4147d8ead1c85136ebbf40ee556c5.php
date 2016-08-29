<?php

/* TopxiaWebBundle:Announcement:announcement-show-modal.html.twig */
class __TwigTemplate_9e1b911d44bc31b2b5eb194b352dfffd36921151692e76f6de9767b7ca2f0cc2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "TopxiaWebBundle:Announcement:announcement-show-modal.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::bootstrap-modal-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["hide_footer"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "公告";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "  
    <div class=\"announcement-detail clearfix\">
    \t<div>";
        // line 10
        echo $this->getAttribute((isset($context["announcement"]) ? $context["announcement"] : null), "content", array());
        echo "</div>
  \t\t<div class=\"text-muted pull-right mtm\">发表于 ";
        // line 11
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["announcement"]) ? $context["announcement"] : null), "createdTime", array()), "Y-m-d H:i"), "html", null, true);
        echo "</div>
  \t</div>

";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Announcement:announcement-show-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 11,  45 => 10,  41 => 8,  38 => 7,  32 => 3,  28 => 1,  26 => 5,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::bootstrap-modal-layout.html.twig' %}*/
/* */
/* {% block title %}公告{% endblock %}*/
/* */
/* {% set hide_footer = true %}*/
/* */
/* {% block body %}*/
/*   */
/*     <div class="announcement-detail clearfix">*/
/*     	<div>{{ announcement.content|raw }}</div>*/
/*   		<div class="text-muted pull-right mtm">发表于 {{ announcement.createdTime | date('Y-m-d H:i') }}</div>*/
/*   	</div>*/
/* */
/* {% endblock %}*/
