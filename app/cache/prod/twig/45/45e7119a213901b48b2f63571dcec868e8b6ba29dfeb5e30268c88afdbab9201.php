<?php

/* TopxiaAdminBundle:OperationAnalysis:video-view.html.twig */
class __TwigTemplate_ab3eb90a17cdbba4f81345a23651977d865288c4b7e666316ac4e99a789dcf3e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle:OperationAnalysis:analysis-base-layout.html.twig", "TopxiaAdminBundle:OperationAnalysis:video-view.html.twig", 1);
        $this->blocks = array(
            'analysisBody' => array($this, 'block_analysisBody'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle:OperationAnalysis:analysis-base-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["script_controller"] = "analysis/video";
        // line 3
        $context["href"] = "admin_operation_analysis_video_viewed";
        // line 4
        $context["menu"] = "video-view";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_analysisBody($context, array $blocks = array())
    {
        // line 6
        echo "  <div class=\"col-md-12\">
      ";
        // line 7
        if (((isset($context["tab"]) ? $context["tab"] : null) == "trend")) {
            // line 8
            echo "      <div id=\"line-data\"></div>
       <input id=\"data\"  type=\"hidden\" value='";
            // line 9
            if ((isset($context["data"]) ? $context["data"] : null)) {
                echo twig_escape_filter($this->env, (isset($context["data"]) ? $context["data"] : null), "html", null, true);
            }
            echo "'>
       <input type=\"hidden\" name = \"minCreatedTime\" value='";
            // line 10
            echo twig_escape_filter($this->env, ((array_key_exists("minCreatedTime", $context)) ? (_twig_default_filter((isset($context["minCreatedTime"]) ? $context["minCreatedTime"] : null), "")) : ("")), "html", null, true);
            echo "'>
      </input>
      ";
        } elseif ((        // line 12
(isset($context["tab"]) ? $context["tab"] : null) == "detail")) {
            // line 13
            echo "              ";
            $this->loadTemplate("TopxiaAdminBundle:OperationAnalysis:video-view.table.html.twig", "TopxiaAdminBundle:OperationAnalysis:video-view.html.twig", 13)->display($context);
            // line 14
            echo "      ";
        }
        // line 15
        echo "  </div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:OperationAnalysis:video-view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 15,  62 => 14,  59 => 13,  57 => 12,  52 => 10,  46 => 9,  43 => 8,  41 => 7,  38 => 6,  35 => 5,  31 => 1,  29 => 4,  27 => 3,  25 => 2,  11 => 1,);
    }
}
/* {% extends 'TopxiaAdminBundle:OperationAnalysis:analysis-base-layout.html.twig' %}*/
/* {% set script_controller = 'analysis/video' %}*/
/* {% set href="admin_operation_analysis_video_viewed" %}*/
/* {% set menu = 'video-view' %}*/
/* {% block analysisBody %}*/
/*   <div class="col-md-12">*/
/*       {% if tab=="trend" %}*/
/*       <div id="line-data"></div>*/
/*        <input id="data"  type="hidden" value='{% if data %}{{data}}{% endif %}'>*/
/*        <input type="hidden" name = "minCreatedTime" value='{{ minCreatedTime|default("") }}'>*/
/*       </input>*/
/*       {% elseif tab=="detail" %}*/
/*               {% include 'TopxiaAdminBundle:OperationAnalysis:video-view.table.html.twig' %}*/
/*       {% endif %}*/
/*   </div>*/
/* {% endblock %}*/
/* */
