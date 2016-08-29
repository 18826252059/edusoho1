<?php

/* ClassroomBundle:Classroom/Part/Service:testpaperReview.html.twig */
class __TwigTemplate_d7f7e6bec9832291341937f32ca60b2dccce39bf6b20a029e486100220c52db6 extends Twig_Template
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
  <a tabindex=\"0\" role=\"button\" data-container=\"body\" data-toggle=\"popover\" data-trigger=\"hover\" data-placement=\"top\" data-html=\"true\" title=\"24小时阅卷点评 ";
        // line 2
        if ( !(isset($context["active"]) ? $context["active"] : $this->getContext($context, "active"))) {
            echo "<small class='text-muted'>(暂未提供)</span>";
        }
        echo "\" data-content=\"24小时内批阅您提交的试卷，给予有针对性的点评\">试</a>
</li>";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:Classroom/Part/Service:testpaperReview.html.twig";
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
/*   <a tabindex="0" role="button" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="top" data-html="true" title="24小时阅卷点评 {% if not active %}<small class='text-muted'>(暂未提供)</span>{% endif %}" data-content="24小时内批阅您提交的试卷，给予有针对性的点评">试</a>*/
/* </li>*/
