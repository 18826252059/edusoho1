<?php

/* TopxiaAdminBundle:CourseQuestion:tab.html.twig */
class __TwigTemplate_e597e487acdeb73923ec57beb715f82931f0edcc231fd226c7b80c2ff219d7f6 extends Twig_Template
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
<a href=\"";
        // line 2
        echo $this->env->getExtension('routing')->getUrl("admin_question", array("postStatus" => "unPosted"));
        echo "\" type=\"button\" class=\"btn btn-default btn-sm ";
        if (((isset($context["type"]) ? $context["type"] : null) == "unPosted")) {
            echo " btn-primary";
        }
        echo "\">未回复</a>

<a href=\" ";
        // line 4
        echo $this->env->getExtension('routing')->getUrl("admin_question", array("postStatus" => "all"));
        echo "\" type=\"button\" class=\"btn btn-default btn-sm ";
        if (((isset($context["type"]) ? $context["type"] : null) == "all")) {
            echo "btn-primary";
        }
        echo "\">所有</a>
</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:CourseQuestion:tab.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  22 => 2,  19 => 1,);
    }
}
/* <div class="btn-group">*/
/* <a href="{{ url('admin_question', {postStatus: 'unPosted'}) }}" type="button" class="btn btn-default btn-sm {% if type == 'unPosted'%} btn-primary{% endif %}">未回复</a>*/
/* */
/* <a href=" {{ url('admin_question', {postStatus: 'all'}) }}" type="button" class="btn btn-default btn-sm {% if type == 'all'%}btn-primary{% endif %}">所有</a>*/
/* </div>*/
