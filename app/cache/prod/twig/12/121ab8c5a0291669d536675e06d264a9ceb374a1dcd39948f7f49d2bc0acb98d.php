<?php

/* ClassroomBundle:Classroom/Part/Service:studyPlan.html.twig */
class __TwigTemplate_22ae366506d0b818e3b46d5d83153aa9cd1ca5b18233da9bdbeb259d5fc8441c extends Twig_Template
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
        if ($this->env->getExtension('topxia_web_twig')->isPluginInstalled("classroomPlan")) {
            // line 2
            echo "<li class=\"";
            if ((isset($context["active"]) ? $context["active"] : null)) {
                echo "active";
            }
            echo "\">
  <a tabindex=\"0\" role=\"button\" data-container=\"body\" data-toggle=\"popover\" data-trigger=\"hover\" data-placement=\"top\" data-html=\"true\" title=\"学习计划指导 ";
            // line 3
            if ( !(isset($context["active"]) ? $context["active"] : null)) {
                echo "<small class='text-muted'>(暂未提供)</span>";
            }
            echo "\" data-content=\"精心制定的系统化学习计划让您的学习循序渐进、有条不紊，老师根据您的学习进度情况能随时给予指导\">导</a>
</li>
";
        }
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:Classroom/Part/Service:studyPlan.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if is_plugin_installed('classroomPlan') %}*/
/* <li class="{% if active %}active{% endif %}">*/
/*   <a tabindex="0" role="button" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="top" data-html="true" title="学习计划指导 {% if not active %}<small class='text-muted'>(暂未提供)</span>{% endif %}" data-content="精心制定的系统化学习计划让您的学习循序渐进、有条不紊，老师根据您的学习进度情况能随时给予指导">导</a>*/
/* </li>*/
/* {% endif %}*/
