<?php

/* TopxiaWebBundle:Thread/Part:post-form.html.twig */
class __TwigTemplate_32d972b0895a18ae75e1837cf8500d86e2b219a8e6d02a14d4e72ebb750c83ae extends Twig_Template
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
        echo "<div class=\"panel panel-default\">
  <div class=\"panel-heading\">发表回复</div>
  <div class=\"panel-body\">
    ";
        // line 4
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Thread:post", array("request" => $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "threadId" => $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "id", array()))));
        echo "
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Thread/Part:post-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 4,  19 => 1,);
    }
}
/* <div class="panel panel-default">*/
/*   <div class="panel-heading">发表回复</div>*/
/*   <div class="panel-body">*/
/*     {{ render(controller('TopxiaWebBundle:Thread:post', {request:app.request, threadId:thread.id})) }}*/
/*   </div>*/
/* </div>*/
