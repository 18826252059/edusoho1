<?php

/* ClassroomBundle:Classroom/Part/Service:homeworkReview.html.twig */
class __TwigTemplate_de9a8915f0d0b09f283421621e21b3a1b1d4250907253cb42bd3ad1109efd4e2 extends Twig_Template
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
        echo "<li class=\"";
        if ((isset($context["active"]) ? $context["active"] : $this->getContext($context, "active"))) {
            echo "active";
        }
        echo "\">
  <a tabindex=\"0\" role=\"button\" data-container=\"body\" data-toggle=\"popover\" data-trigger=\"hover\" data-placement=\"top\" data-html=\"true\" title=\"24小时作业批改 ";
        // line 2
        if ( !(isset($context["active"]) ? $context["active"] : $this->getContext($context, "active"))) {
            echo "<small class='text-muted'>(暂未提供)</span>";
        }
        echo "\" data-content=\"24小时内完成作业批改，即时反馈并巩固您的学习效果\">练</a>
</li>";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:Classroom/Part/Service:homeworkReview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 2,  19 => 1,);
    }
}
/* <li class="{% if active %}active{% endif %}">*/
/*   <a tabindex="0" role="button" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="top" data-html="true" title="24小时作业批改 {% if not active %}<small class='text-muted'>(暂未提供)</span>{% endif %}" data-content="24小时内完成作业批改，即时反馈并巩固您的学习效果">练</a>*/
/* </li>*/
