<?php

/* TopxiaAdminBundle:Cloud:layout.html.twig */
class __TwigTemplate_ed83085db9ab548d3d46949b197cc4466724e31373498a05061ace7781c671d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle:System:layout.html.twig", "TopxiaAdminBundle:Cloud:layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
            'maincontent' => array($this, 'block_maincontent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle:System:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["menu"] = "bill";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "云账单 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "<ul class=\"nav nav-tabs mbl\">

  <li class=\"";
        // line 10
        if (((isset($context["submenu"]) ? $context["submenu"] : null) == "video")) {
            echo "active";
        }
        echo "\">
    <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getUrl("admin_cloud_bill");
        echo "\">云视频账单
    </a>
  </li>

  <li class=\"";
        // line 15
        if (((isset($context["submenu"]) ? $context["submenu"] : null) == "sms")) {
            echo "active";
        }
        echo "\">
    <a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getUrl("admin_edu_cloud_sms_bill");
        echo "\">云短信账单
    </a>
  </li>

</ul>

  ";
        // line 22
        $this->displayBlock('maincontent', $context, $blocks);
    }

    public function block_maincontent($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Cloud:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 22,  66 => 16,  60 => 15,  53 => 11,  47 => 10,  43 => 8,  40 => 7,  33 => 3,  29 => 1,  27 => 5,  11 => 1,);
    }
}
/* {% extends 'TopxiaAdminBundle:System:layout.html.twig' %}*/
/* */
/* {% block title %}云账单 - {{ parent() }}{% endblock %}*/
/* */
/* {% set menu = 'bill' %}*/
/* */
/* {% block main %}*/
/* <ul class="nav nav-tabs mbl">*/
/* */
/*   <li class="{% if submenu == 'video' %}active{% endif %}">*/
/*     <a href="{{ url('admin_cloud_bill') }}">云视频账单*/
/*     </a>*/
/*   </li>*/
/* */
/*   <li class="{% if submenu == 'sms' %}active{% endif %}">*/
/*     <a href="{{ url('admin_edu_cloud_sms_bill') }}">云短信账单*/
/*     </a>*/
/*   </li>*/
/* */
/* </ul>*/
/* */
/*   {% block maincontent %}{% endblock %}*/
/* {% endblock %}*/
/* */
