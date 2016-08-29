<?php

/* ClassroomBundle:Classroom/Part/Service:teacherAnswer.html.twig */
class __TwigTemplate_ef5fd24057f29927d1e3274e701105510bf1f7d78637a00f8ed02a977e596c69 extends Twig_Template
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
  <a tabindex=\"0\" role=\"button\" data-container=\"body\" data-toggle=\"popover\" data-trigger=\"hover\" data-placement=\"top\" data-html=\"true\" title=\"提问必答 ";
        // line 2
        if ( !(isset($context["active"]) ? $context["active"] : $this->getContext($context, "active"))) {
            echo "<small class='text-muted'>(暂未提供)</span>";
        }
        echo "\" data-content=\"对于提问做到有问必答，帮您扫清学习过程中的种种障碍\">问</a>
</li>";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:Classroom/Part/Service:teacherAnswer.html.twig";
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
/*   <a tabindex="0" role="button" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="top" data-html="true" title="提问必答 {% if not active %}<small class='text-muted'>(暂未提供)</span>{% endif %}" data-content="对于提问做到有问必答，帮您扫清学习过程中的种种障碍">问</a>*/
/* </li>*/
