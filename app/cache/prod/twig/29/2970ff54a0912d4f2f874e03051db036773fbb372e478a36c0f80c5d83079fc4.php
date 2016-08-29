<?php

/* TopxiaAdminBundle:App:cloud.html.twig */
class __TwigTemplate_c97ef08c9e21dd3432311893cb1fe9b550933de7b3d23f963f040883ab1b3551 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:App:cloud.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["menu"] = "admin_my_cloud";
        // line 4
        $context["submenu"] = "cloud-introduction";
        // line 5
        $context["script_controller"] = "cloud/index";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        // line 7
        echo "
    ";
        // line 8
        if ($this->env->getExtension('topxia_web_twig')->isTrial()) {
            // line 9
            echo "      ";
            echo (isset($context["trial"]) ? $context["trial"] : null);
            echo "
    ";
        } else {
            // line 11
            echo "      <ul class=\"nav nav-tabs mbl\">

        <li class=\"";
            // line 13
            if (((isset($context["submenu"]) ? $context["submenu"] : null) == "cloud-introduction")) {
                echo "active";
            }
            echo "\">
          <a href=\"";
            // line 14
            echo $this->env->getExtension('routing')->getUrl("admin_my_cloud");
            echo "\">产品简介
          </a>
        </li>

        <li class=\"";
            // line 18
            if (((isset($context["submenu"]) ? $context["submenu"] : null) == "service-information")) {
                echo "active";
            }
            echo "\">
          <a href=\"";
            // line 19
            echo $this->env->getExtension('routing')->getUrl("admin_my_cloud_overview");
            echo "\">服务概况
          </a>
        </li>

      </ul>
      ";
            // line 24
            echo (isset($context["untrial"]) ? $context["untrial"] : null);
            echo "
    ";
        }
        // line 26
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:App:cloud.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 26,  80 => 24,  72 => 19,  66 => 18,  59 => 14,  53 => 13,  49 => 11,  43 => 9,  41 => 8,  38 => 7,  35 => 6,  31 => 1,  29 => 5,  27 => 4,  25 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaAdminBundle::layout.html.twig' %}*/
/* */
/* {% set menu = 'admin_my_cloud' %}*/
/* {% set submenu = 'cloud-introduction' %}*/
/* {% set script_controller = 'cloud/index' %}*/
/* {% block main %}*/
/* */
/*     {% if is_trial() %}*/
/*       {{ trial|raw}}*/
/*     {% else %}*/
/*       <ul class="nav nav-tabs mbl">*/
/* */
/*         <li class="{% if submenu == 'cloud-introduction' %}active{% endif %}">*/
/*           <a href="{{ url('admin_my_cloud') }}">产品简介*/
/*           </a>*/
/*         </li>*/
/* */
/*         <li class="{% if submenu == 'service-information' %}active{% endif %}">*/
/*           <a href="{{ url('admin_my_cloud_overview') }}">服务概况*/
/*           </a>*/
/*         </li>*/
/* */
/*       </ul>*/
/*       {{ untrial|raw }}*/
/*     {% endif %}*/
/* */
/*     {% endblock %}*/
