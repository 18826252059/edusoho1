<?php

/* TopxiaAdminBundle:LiveCourse:tab.html.twig */
class __TwigTemplate_a55f50095b2e354d6760da07d0e579c15a4b31e17b4cbdd88e7d07af59ba25dd extends Twig_Template
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
        echo "<div class=\"btn-group\">
<a href=\" ";
        // line 2
        echo $this->env->getExtension('routing')->getUrl("admin_live_course", array("status" => "coming"));
        echo "\" type=\"button\" class=\"btn btn-default btn-sm ";
        if (((isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")) == "coming")) {
            echo "btn-primary";
        }
        echo "\">即将开始的</a>
<a href=\"";
        // line 3
        echo $this->env->getExtension('routing')->getUrl("admin_live_course", array("status" => "underway"));
        echo "\" type=\"button\" class=\"btn btn-default btn-sm ";
        if (((isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")) == "underway")) {
            echo "btn-primary";
        }
        echo "\">当前进行中</a>
<a href=\" ";
        // line 4
        echo $this->env->getExtension('routing')->getUrl("admin_live_course", array("status" => "end"));
        echo "\" type=\"button\" class=\"btn btn-default btn-sm ";
        if (((isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")) == "end")) {
            echo "btn-primary";
        }
        echo "\">已结束的</a>
</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:LiveCourse:tab.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 4,  30 => 3,  22 => 2,  19 => 1,);
    }
}
/* <div class="btn-group">*/
/* <a href=" {{ url('admin_live_course', {status: 'coming'}) }}" type="button" class="btn btn-default btn-sm {% if status == 'coming'%}btn-primary{% endif %}">即将开始的</a>*/
/* <a href="{{ url('admin_live_course', {status: 'underway'}) }}" type="button" class="btn btn-default btn-sm {% if status == 'underway'%}btn-primary{% endif %}">当前进行中</a>*/
/* <a href=" {{ url('admin_live_course', {status: 'end'}) }}" type="button" class="btn btn-default btn-sm {% if status == 'end'%}btn-primary{% endif %}">已结束的</a>*/
/* </div>*/
