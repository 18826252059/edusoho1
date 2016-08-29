<?php

/* ClassroomBundle:Classroom/Part/Service:liveAnswer.html.twig */
class __TwigTemplate_d2f7019f1f973ba686f2f09c96717a041d643b8af579e8b60054a68d8094b533 extends Twig_Template
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
  <a tabindex=\"0\" role=\"button\" data-container=\"body\" data-toggle=\"popover\" data-trigger=\"hover\" data-placement=\"top\" data-html=\"true\" title=\"一对一在线答疑 ";
        // line 2
        if ( !(isset($context["active"]) ? $context["active"] : $this->getContext($context, "active"))) {
            echo "<small class='text-muted'>(暂未提供)</span>";
        }
        echo "\" data-content=\"提供专属的一对一在线答疑，快速答疑解惑\">疑</a>
</li>";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:Classroom/Part/Service:liveAnswer.html.twig";
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
/*   <a tabindex="0" role="button" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="top" data-html="true" title="一对一在线答疑 {% if not active %}<small class='text-muted'>(暂未提供)</span>{% endif %}" data-content="提供专属的一对一在线答疑，快速答疑解惑">疑</a>*/
/* </li>*/
