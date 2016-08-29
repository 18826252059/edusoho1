<?php

/* TopxiaWebBundle:Marker:answer-progress.html.twig */
class __TwigTemplate_9edd1e21b2e15c432030c322e5f93c0de40e25089b50d649dc082409eb19a56d extends Twig_Template
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
        echo "<div class=\"answer-progress\">
\t<p class=\"answer-title\">答题进度</p>
\t<div class=\"progress\">
\t\t<div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"80\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: ";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["progress"]) ? $context["progress"] : null), "percent", array()), "html", null, true);
        echo "%\">
\t\t\t<span class=\"sr-only\">80% Complete (danger)</span>
\t\t</div>
\t</div>
\t<div class=\"num\"><span class=\"gray-darker\">";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["progress"]) ? $context["progress"] : null), "seq", array()), "html", null, true);
        echo "</span><span class=\"mhs\">/</span>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["progress"]) ? $context["progress"] : null), "count", array()), "html", null, true);
        echo "</div>
</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Marker:answer-progress.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 8,  24 => 4,  19 => 1,);
    }
}
/* <div class="answer-progress">*/
/* 	<p class="answer-title">答题进度</p>*/
/* 	<div class="progress">*/
/* 		<div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: {{progress.percent}}%">*/
/* 			<span class="sr-only">80% Complete (danger)</span>*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="num"><span class="gray-darker">{{progress.seq}}</span><span class="mhs">/</span>{{progress.count}}</div>*/
/* </div>*/
