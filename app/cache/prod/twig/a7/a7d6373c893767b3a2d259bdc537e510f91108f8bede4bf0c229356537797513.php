<?php

/* TopxiaWebBundle:Coin:layout.html.twig */
class __TwigTemplate_b4dfb9bd3aee4aa0b4e05007821920c86e136d604e800b8ff0b46efd8d91bae3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "TopxiaWebBundle:Coin:layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'side' => array($this, 'block_side'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "账户中心 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"row\">
  <div class=\"col-md-3\">
    ";
        // line 8
        $this->displayBlock('side', $context, $blocks);
        // line 38
        echo "  </div>
  <div class=\"col-md-9\">
    ";
        // line 40
        $this->displayBlock('main', $context, $blocks);
        // line 41
        echo "  </div>
</div>
";
    }

    // line 8
    public function block_side($context, array $blocks = array())
    {
        // line 9
        echo "      
      <div class=\"sidenav\">
        <ul class=\"list-group\">
          <li class=\"list-group-heading\">账户中心</li>
          <li class=\"list-group-item ";
        // line 13
        if (twig_in_filter((isset($context["side_nav"]) ? $context["side_nav"] : null), array(0 => "my-bill", 1 => "my-coin", 2 => "my-invite-code"))) {
            echo " active ";
        }
        echo "\">
            <a href=\"
              ";
        // line 15
        if ($this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_enabled")) {
            // line 16
            echo "                ";
            echo $this->env->getExtension('routing')->getPath("my_coin");
            echo "
              ";
        } else {
            // line 18
            echo "                ";
            echo $this->env->getExtension('routing')->getPath("my_bill");
            echo "
              ";
        }
        // line 20
        echo "              \">我的账户
            </a>
          </li>
          <li class=\"list-group-item ";
        // line 23
        if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "my-orders")) {
            echo " active ";
        }
        echo "\">
            <a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("my_orders");
        echo "\">我的订单</a> 
          </li>  
          <li class=\"list-group-item ";
        // line 26
        if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "my-cards")) {
            echo " active ";
        }
        echo "\">
            <a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("my_cards");
        echo "\">我的卡包</a> 
          </li> 
          </li>
          ";
        // line 30
        if ($this->env->getExtension('topxia_web_twig')->isPluginInstalled("Vip")) {
            // line 31
            echo "          <li class=\"list-group-item ";
            if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "my-vip-record")) {
                echo " active ";
            }
            echo "\">
            <a href=\"";
            // line 32
            echo $this->env->getExtension('routing')->getPath("vip_history");
            echo "\">会员记录</a> 
          </li>
          ";
        }
        // line 34
        echo " 
        </ul>
      </div>
    ";
    }

    // line 40
    public function block_main($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Coin:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 40,  132 => 34,  126 => 32,  119 => 31,  117 => 30,  111 => 27,  105 => 26,  100 => 24,  94 => 23,  89 => 20,  83 => 18,  77 => 16,  75 => 15,  68 => 13,  62 => 9,  59 => 8,  53 => 41,  51 => 40,  47 => 38,  45 => 8,  41 => 6,  38 => 5,  31 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::layout.html.twig' %}*/
/* */
/* {% block title %}账户中心 - {{ parent() }}{% endblock %}*/
/* */
/* {% block content %}*/
/* <div class="row">*/
/*   <div class="col-md-3">*/
/*     {% block side %}*/
/*       */
/*       <div class="sidenav">*/
/*         <ul class="list-group">*/
/*           <li class="list-group-heading">账户中心</li>*/
/*           <li class="list-group-item {% if side_nav in ['my-bill', 'my-coin', 'my-invite-code'] %} active {% endif %}">*/
/*             <a href="*/
/*               {% if setting('coin.coin_enabled') %}*/
/*                 {{path('my_coin')}}*/
/*               {% else %}*/
/*                 {{path('my_bill')}}*/
/*               {% endif %}*/
/*               ">我的账户*/
/*             </a>*/
/*           </li>*/
/*           <li class="list-group-item {% if side_nav == 'my-orders' %} active {% endif %}">*/
/*             <a href="{{path('my_orders')}}">我的订单</a> */
/*           </li>  */
/*           <li class="list-group-item {% if side_nav == 'my-cards' %} active {% endif %}">*/
/*             <a href="{{path('my_cards')}}">我的卡包</a> */
/*           </li> */
/*           </li>*/
/*           {% if is_plugin_installed('Vip')%}*/
/*           <li class="list-group-item {% if side_nav == 'my-vip-record' %} active {% endif %}">*/
/*             <a href="{{path('vip_history')}}">会员记录</a> */
/*           </li>*/
/*           {% endif %} */
/*         </ul>*/
/*       </div>*/
/*     {% endblock %}*/
/*   </div>*/
/*   <div class="col-md-9">*/
/*     {% block main %}{% endblock %}*/
/*   </div>*/
/* </div>*/
/* {% endblock %}*/
