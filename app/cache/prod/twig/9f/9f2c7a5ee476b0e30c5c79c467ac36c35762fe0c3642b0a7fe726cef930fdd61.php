<?php

/* TopxiaWebBundle:Coin:bill-bar.html.twig */
class __TwigTemplate_d05c23e93cc39c490889b9f0906a63f2d92e1a28bd0b88dc0c933707e668dec8 extends Twig_Template
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
        echo "<ul class=\"nav nav-tabs\">
";
        // line 2
        if ($this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_enabled")) {
            // line 3
            echo "    ";
            if ($this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_enabled")) {
                // line 4
                echo "    <li  class=\"";
                if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "my-coin")) {
                    echo "active";
                }
                echo "\" >
      <a href=\"";
                // line 5
                echo $this->env->getExtension('routing')->getUrl("my_coin");
                echo "\" >我的";
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_name"), "虚拟币"), "html", null, true);
                echo "
      </a>
    </li>
    ";
            }
        }
        // line 10
        echo "  <li class=\"";
        if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "my-bill")) {
            echo "active";
        }
        echo "\">
    <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getUrl("my_bill");
        echo "\">我的现金账单
    </a>
  </li>
";
        // line 14
        if (($this->env->getExtension('topxia_web_twig')->getSetting("invite.invite_code_setting") == 1)) {
            // line 15
            echo "    <li class=\"";
            if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "my-invite-code")) {
                echo "active";
            }
            echo "\">
      <a href=\"";
            // line 16
            echo $this->env->getExtension('routing')->getUrl("my_invite_code");
            echo "\">我的邀请码
      </a>
    </li>
";
        }
        // line 20
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Coin:bill-bar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 20,  66 => 16,  59 => 15,  57 => 14,  51 => 11,  44 => 10,  34 => 5,  27 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }
}
/* <ul class="nav nav-tabs">*/
/* {% if setting('coin.coin_enabled') %}*/
/*     {% if setting('coin.coin_enabled') %}*/
/*     <li  class="{% if side_nav == 'my-coin' %}active{% endif %}" >*/
/*       <a href="{{ url('my_coin') }}" >我的{{setting('coin.coin_name')|default('虚拟币')}}*/
/*       </a>*/
/*     </li>*/
/*     {% endif %}*/
/* {% endif %}*/
/*   <li class="{% if side_nav == 'my-bill' %}active{% endif %}">*/
/*     <a href="{{ url('my_bill') }}">我的现金账单*/
/*     </a>*/
/*   </li>*/
/* {% if setting('invite.invite_code_setting') == 1 %}*/
/*     <li class="{% if side_nav == 'my-invite-code' %}active{% endif %}">*/
/*       <a href="{{ url('my_invite_code') }}">我的邀请码*/
/*       </a>*/
/*     </li>*/
/* {% endif %}*/
/* </ul>*/
/* */
