<?php

/* TopxiaAdminBundle:Coin:coin-table-setting.html.twig */
class __TwigTemplate_387cb440615d960b366086be6208c3e1a809cab7924e0736b1dbf2825fb1f3af extends Twig_Template
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
        if (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "cash_model", array()) == "deduction")) {
            // line 2
            echo "  <ul class=\"nav nav-pills mbl\">
    <li role=\"presentation\" class = \"js-type-filter ";
            // line 3
            if ((((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "course")) : ("course")) == "course")) {
                echo "active ";
            }
            echo "\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_coin_model_ajax", array("type" => _twig_default_filter("course", "course"), "set" => (isset($context["set"]) ? $context["set"] : null))), "html", null, true);
            echo "\" id=\"course\"><a href=\"javascript:;\">课程</a></li>
    <li role=\"presentation\" class = \"js-type-filter ";
            // line 4
            if ((((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "course")) : ("course")) == "classroom")) {
                echo "active ";
            }
            echo "\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_coin_model_ajax", array("type" => _twig_default_filter("classroom", "course"), "set" => (isset($context["set"]) ? $context["set"] : null))), "html", null, true);
            echo "\" id=\"classroom\"><a href=\"javascript:;\">班级</a></li>
    ";
            // line 5
            if ($this->env->getExtension('topxia_web_twig')->isPluginInstalled("vip")) {
                // line 6
                echo "      <li role=\"presentation\" class = \"js-type-filter ";
                if ((((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "course")) : ("course")) == "vip")) {
                    echo "active ";
                }
                echo "\" data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_coin_model_ajax", array("type" => _twig_default_filter("vip", "course"), "set" => (isset($context["set"]) ? $context["set"] : null))), "html", null, true);
                echo "\" id=\"vip\"><a href=\"javascript:;\">会员</a></li>
    ";
            }
            // line 8
            echo "  </ul>
";
        }
        // line 10
        echo "<div id=\"help-message\" class=\"alert alert-danger mtl hidden\" >请设置正确的价格</div>
";
        // line 11
        if ((((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "course")) : ("course")) == "course")) {
            // line 12
            echo "  ";
            $this->loadTemplate("TopxiaAdminBundle:Coin:coin-table-course.html.twig", "TopxiaAdminBundle:Coin:coin-table-setting.html.twig", 12)->display($context);
        } elseif ((        // line 13
(isset($context["type"]) ? $context["type"] : null) == "classroom")) {
            // line 14
            echo "  ";
            $this->loadTemplate("TopxiaAdminBundle:Coin:coin-table-classroom.html.twig", "TopxiaAdminBundle:Coin:coin-table-setting.html.twig", 14)->display($context);
        } elseif ((        // line 15
(isset($context["type"]) ? $context["type"] : null) == "vip")) {
            // line 16
            echo "  ";
            $this->loadTemplate("TopxiaAdminBundle:Coin:coin-table-vip.html.twig", "TopxiaAdminBundle:Coin:coin-table-setting.html.twig", 16)->display($context);
        }
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Coin:coin-table-setting.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 16,  69 => 15,  66 => 14,  64 => 13,  61 => 12,  59 => 11,  56 => 10,  52 => 8,  42 => 6,  40 => 5,  32 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if set.cash_model =="deduction" %}*/
/*   <ul class="nav nav-pills mbl">*/
/*     <li role="presentation" class = "js-type-filter {% if (type|default('course') == 'course') %}active {% endif %}" data-url="{{path('admin_coin_model_ajax',{type:'course'|default('course'), set:set})}}" id="course"><a href="javascript:;">课程</a></li>*/
/*     <li role="presentation" class = "js-type-filter {% if (type|default('course') == 'classroom') %}active {% endif %}" data-url="{{path('admin_coin_model_ajax',{type:'classroom'|default('course'), set:set})}}" id="classroom"><a href="javascript:;">班级</a></li>*/
/*     {% if is_plugin_installed('vip') %}*/
/*       <li role="presentation" class = "js-type-filter {% if (type|default('course') == 'vip') %}active {% endif %}" data-url="{{path('admin_coin_model_ajax',{type:'vip'|default('course'), set:set})}}" id="vip"><a href="javascript:;">会员</a></li>*/
/*     {% endif %}*/
/*   </ul>*/
/* {% endif %}*/
/* <div id="help-message" class="alert alert-danger mtl hidden" >请设置正确的价格</div>*/
/* {% if type|default('course') == 'course' %}*/
/*   {% include 'TopxiaAdminBundle:Coin:coin-table-course.html.twig' %}*/
/* {% elseif type == 'classroom' %}*/
/*   {% include 'TopxiaAdminBundle:Coin:coin-table-classroom.html.twig' %}*/
/* {% elseif type == 'vip' %}*/
/*   {% include 'TopxiaAdminBundle:Coin:coin-table-vip.html.twig' %}*/
/* {% endif %}*/
