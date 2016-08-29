<?php

/* TopxiaWebBundle:Thread/Part:event-header.html.twig */
class __TwigTemplate_a008c3b24e0880e89f0b7cf2e3c93b7ebc9034a91831f62e0a21e3a6a63b1c4c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Thread/Event:showEventTitle", array("request" => $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "thread" => (isset($context["thread"]) ? $context["thread"] : null))));
        echo "

<div class=\"editor-text\">
  ";
        // line 4
        echo $this->env->getExtension('topxia_web_twig')->atFilter($this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "content", array()), $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "ats", array()));
        echo "
</div>

";
        // line 7
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Thread/Member:showMembers", array("request" => $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "thread" => (isset($context["thread"]) ? $context["thread"] : null))));
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Thread/Part:event-header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 7,  25 => 4,  19 => 1,);
    }
}
/* {{ render(controller('TopxiaWebBundle:Thread/Event:showEventTitle', {request:app.request, thread:thread})) }}*/
/* */
/* <div class="editor-text">*/
/*   {{ thread.content|at(thread.ats)|raw }}*/
/* </div>*/
/* */
/* {{ render(controller('TopxiaWebBundle:Thread/Member:showMembers', {request:app.request, thread:thread})) }}*/
