<?php

/* TopxiaWebBundle:PayCenter:coin-cancelled.html.twig */
class __TwigTemplate_60f76960c2390e1beba41de3e0e3d54ce05d8846031de7f32151dc98d2bfa7a3 extends Twig_Template
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
        if (($this->env->getExtension('topxia_web_twig')->isPluginInstalled("ChargeCoin") && $this->env->getExtension('topxia_web_twig')->getSetting("coin.charge_coin_enabled"))) {
            // line 2
            echo "<a href=\"javascript:;\"  class=\"js-order-cancel btn btn-link\" data-goto=\"";
            echo $this->env->getExtension('routing')->getPath("my_coin");
            echo "\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("my_coin_cancel", array("id" => $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "id", array()))), "html", null, true);
            echo "\" >取消</a>
";
        }
        // line 4
        echo "

";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:PayCenter:coin-cancelled.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% if is_plugin_installed('ChargeCoin') and setting('coin.charge_coin_enabled') %}*/
/* <a href="javascript:;"  class="js-order-cancel btn btn-link" data-goto="{{ path('my_coin') }}" data-url="{{ path('my_coin_cancel', {id:order.id}) }}" >取消</a>*/
/* {% endif %}*/
/* */
/* */
/* */
