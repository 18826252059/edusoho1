<?php

/* TopxiaAdminBundle:Content:activity-extended-fields.html.twig */
class __TwigTemplate_864fb54ede25fd5dd06ab39669190c88e61f618c8355b1b9f45826950ea07580 extends Twig_Template
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
        echo "<div class=\"row\">
\t<div class=\"col-md-6\">
\t\t<div class=\"form-group\">
\t\t\t<label>开始时间</label>
\t\t\t<div class=\"controls\">
\t\t\t\t<input data-role=\"datetime-field\" type=\"text\" name=\"startTime\" value=\"";
        // line 6
        echo $this->env->getExtension('topxia_html_twig')->fieldValue((isset($context["content"]) ? $context["content"] : null), "startTime");
        echo "\">
\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"col-md-6\">
\t\t<div class=\"form-group\">
\t\t\t<label>结束时间</label>
\t\t\t<div class=\"controls\">
\t\t\t\t<input data-role=\"datetime-field\" type=\"text\" name=\"endTime\" value=\"";
        // line 15
        echo $this->env->getExtension('topxia_html_twig')->fieldValue((isset($context["content"]) ? $context["content"] : null), "endTime");
        echo "\">
\t\t\t</div>
\t\t</div>
\t</div>
</div>

<div class=\"form-group\">
\t<label>地点</label>
\t<div class=\"controls\">
\t\t<input type=\"text\" name=\"location\" value=\"";
        // line 24
        echo $this->env->getExtension('topxia_html_twig')->fieldValue((isset($context["content"]) ? $context["content"] : null), "location");
        echo "\">
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Content:activity-extended-fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 24,  38 => 15,  26 => 6,  19 => 1,);
    }
}
/* <div class="row">*/
/* 	<div class="col-md-6">*/
/* 		<div class="form-group">*/
/* 			<label>开始时间</label>*/
/* 			<div class="controls">*/
/* 				<input data-role="datetime-field" type="text" name="startTime" value="{{ field_value(content, 'startTime') }}">*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	<div class="col-md-6">*/
/* 		<div class="form-group">*/
/* 			<label>结束时间</label>*/
/* 			<div class="controls">*/
/* 				<input data-role="datetime-field" type="text" name="endTime" value="{{ field_value(content, 'endTime') }}">*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* */
/* <div class="form-group">*/
/* 	<label>地点</label>*/
/* 	<div class="controls">*/
/* 		<input type="text" name="location" value="{{ field_value(content, 'location') }}">*/
/* 	</div>*/
/* </div>*/
