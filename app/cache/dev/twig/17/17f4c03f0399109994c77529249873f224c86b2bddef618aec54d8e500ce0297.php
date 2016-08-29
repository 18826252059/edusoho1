<?php

/* ClassroomBundle:Classroom/Part/Service:event.html.twig */
class __TwigTemplate_94d14af35bb642761db9aa4d67298120635f8723f7b606e6f5a058bbc30a7a90 extends Twig_Template
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
  <a tabindex=\"0\" role=\"button\" data-container=\"body\" data-toggle=\"popover\" data-trigger=\"hover\" data-placement=\"top\" data-html=\"true\" title=\"";
        // line 2
        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
        echo "活动 ";
        if ( !(isset($context["active"]) ? $context["active"] : $this->getContext($context, "active"))) {
            echo "<small class='text-muted'>(暂未提供)</span>";
        }
        echo "\" data-content=\"不定期组织各种线上或线下的";
        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
        echo "活动，让学习更加生动有趣，同学关系更为紧密\">动</a>
</li>";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:Classroom/Part/Service:event.html.twig";
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
/*   <a tabindex="0" role="button" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="top" data-html="true" title="{{setting("classroom.name")|default("班级")}}活动 {% if not active %}<small class='text-muted'>(暂未提供)</span>{% endif %}" data-content="不定期组织各种线上或线下的{{setting("classroom.name")|default("班级")}}活动，让学习更加生动有趣，同学关系更为紧密">动</a>*/
/* </li>*/
