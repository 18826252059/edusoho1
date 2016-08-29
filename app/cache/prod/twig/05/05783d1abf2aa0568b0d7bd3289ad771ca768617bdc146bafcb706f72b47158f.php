<?php

/* TopxiaAdminBundle:Coin:coin-ul.html.twig */
class __TwigTemplate_e31ca6d166653c1d2c19d3d960e46778a88451e64d17e4e248c13451c5802a91 extends Twig_Template
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
        if (((isset($context["submenu"]) ? $context["submenu"] : null) == "settings")) {
            echo "active";
        }
        echo "\"> <a href=\"";
        echo $this->env->getExtension('routing')->getUrl("admin_coin_settings");
        echo "\">虚拟币设置</a></li>
  <li class=\"";
        // line 3
        if (((isset($context["submenu"]) ? $context["submenu"] : null) == "model")) {
            echo "active";
        }
        echo "\"> <a href=\"";
        echo $this->env->getExtension('routing')->getUrl("admin_coin_model");
        echo "\">使用方式设置</a></li>
  <li class=\"";
        // line 4
        if (((isset($context["submenu"]) ? $context["submenu"] : null) == "user-records")) {
            echo "active";
        }
        echo "\"> <a href=\"";
        echo $this->env->getExtension('routing')->getUrl("admin_coin_user_records");
        echo "\">用户虚拟币</a></li>
  <li class=\"";
        // line 5
        if (((isset($context["submenu"]) ? $context["submenu"] : null) == "orders")) {
            echo "active";
        }
        echo "\"> <a href=\"";
        echo $this->env->getExtension('routing')->getUrl("admin_coin_orders");
        echo "\">充值订单</a></li>
</ul>";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Coin:coin-ul.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 5,  38 => 4,  30 => 3,  22 => 2,  19 => 1,);
    }
}
/* <ul class="nav nav-tabs mbl">*/
/*   <li class="{% if submenu == 'settings' %}active{% endif %}"> <a href="{{ url('admin_coin_settings') }}">虚拟币设置</a></li>*/
/*   <li class="{% if submenu == 'model' %}active{% endif %}"> <a href="{{ url('admin_coin_model') }}">使用方式设置</a></li>*/
/*   <li class="{% if submenu == 'user-records' %}active{% endif %}"> <a href="{{ url('admin_coin_user_records') }}">用户虚拟币</a></li>*/
/*   <li class="{% if submenu == 'orders' %}active{% endif %}"> <a href="{{ url('admin_coin_orders') }}">充值订单</a></li>*/
/* </ul>*/
