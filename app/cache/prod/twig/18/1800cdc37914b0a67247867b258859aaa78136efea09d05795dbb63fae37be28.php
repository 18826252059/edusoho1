<?php

/* TopxiaAdminBundle:OperationAnalysis:courseIncome.html.twig */
class __TwigTemplate_fd7982e24775ca01849a8041cd923794fad9472c385b784a9f8a6e6080db6146 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle:OperationAnalysis:analysis-base-layout.html.twig", "TopxiaAdminBundle:OperationAnalysis:courseIncome.html.twig", 1);
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
        $context["script_controller"] = "analysis/course-income";
        // line 3
        $context["href"] = "admin_operation_analysis_course_income";
        // line 4
        $context["menu"] = "course-income";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_analysisBody($context, array $blocks = array())
    {
        // line 6
        echo "  <div class=\"col-md-12\">

              ";
        // line 8
        if (((isset($context["tab"]) ? $context["tab"] : null) == "trend")) {
            // line 9
            echo "\t          <div id=\"line-data\"></div>
\t           <input id=\"data\"  type=\"hidden\" value='";
            // line 10
            if ((isset($context["data"]) ? $context["data"] : null)) {
                echo twig_escape_filter($this->env, (isset($context["data"]) ? $context["data"] : null), "html", null, true);
            }
            echo "'> 
\t          </input><input id=\"courseIncomeStartDate\"  type=\"hidden\" value='";
            // line 11
            if ((isset($context["courseIncomeStartDate"]) ? $context["courseIncomeStartDate"] : null)) {
                echo twig_escape_filter($this->env, (isset($context["courseIncomeStartDate"]) ? $context["courseIncomeStartDate"] : null), "html", null, true);
            }
            echo "'> 
\t          </input>
              ";
        } elseif ((        // line 13
(isset($context["tab"]) ? $context["tab"] : null) == "detail")) {
            // line 14
            echo "                      ";
            $this->loadTemplate("TopxiaAdminBundle:OperationAnalysis:courseIncome.table.html.twig", "TopxiaAdminBundle:OperationAnalysis:courseIncome.html.twig", 14)->display($context);
            // line 15
            echo "              ";
        }
        // line 16
        echo "  </div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:OperationAnalysis:courseIncome.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 16,  65 => 15,  62 => 14,  60 => 13,  53 => 11,  47 => 10,  44 => 9,  42 => 8,  38 => 6,  35 => 5,  31 => 1,  29 => 4,  27 => 3,  25 => 2,  11 => 1,);
    }
}
/* {% extends 'TopxiaAdminBundle:OperationAnalysis:analysis-base-layout.html.twig' %}*/
/* {% set script_controller = 'analysis/course-income' %}*/
/* {% set href="admin_operation_analysis_course_income" %}*/
/* {% set menu = 'course-income' %}*/
/* {% block analysisBody %}*/
/*   <div class="col-md-12">*/
/* */
/*               {% if tab=="trend" %}*/
/* 	          <div id="line-data"></div>*/
/* 	           <input id="data"  type="hidden" value='{% if data %}{{data}}{% endif %}'> */
/* 	          </input><input id="courseIncomeStartDate"  type="hidden" value='{% if courseIncomeStartDate %}{{courseIncomeStartDate}}{% endif %}'> */
/* 	          </input>*/
/*               {% elseif tab=="detail" %}*/
/*                       {% include 'TopxiaAdminBundle:OperationAnalysis:courseIncome.table.html.twig' %}*/
/*               {% endif %}*/
/*   </div>*/
/* {% endblock %}*/
/* */
