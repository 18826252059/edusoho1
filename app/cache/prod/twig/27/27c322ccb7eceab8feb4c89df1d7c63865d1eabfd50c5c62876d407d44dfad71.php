<?php

/* TopxiaAdminBundle:System:logs-nav.html.twig */
class __TwigTemplate_17766d8f3999c7615ee310512d27506fa54c2ed6ad839c61846b41b66c35f4b4 extends Twig_Template
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
        echo "<ul class=\"nav nav-tabs mbl\">
  <li class=\"";
        // line 2
        if (((isset($context["tab"]) ? $context["tab"] : null) == "logs")) {
            echo "active";
        }
        echo "\">
    <a href=\"";
        // line 3
        echo $this->env->getExtension('routing')->getUrl("admin_logs");
        echo "\">系统操作日志
    </a>
  </li>
  <li class=\"";
        // line 6
        if (((isset($context["tab"]) ? $context["tab"] : null) == "prod")) {
            echo "active";
        }
        echo "\">
    <a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getUrl("admin_logs_prod");
        echo "\">程序运行日志
    </a>
  </li>
</ul>";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System:logs-nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 7,  34 => 6,  28 => 3,  22 => 2,  19 => 1,);
    }
}
/* <ul class="nav nav-tabs mbl">*/
/*   <li class="{% if tab == 'logs' %}active{% endif %}">*/
/*     <a href="{{ url('admin_logs') }}">系统操作日志*/
/*     </a>*/
/*   </li>*/
/*   <li class="{% if tab == 'prod' %}active{% endif %}">*/
/*     <a href="{{ url('admin_logs_prod') }}">程序运行日志*/
/*     </a>*/
/*   </li>*/
/* </ul>*/
