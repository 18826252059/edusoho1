<?php

/* TopxiaWebBundle:Thread/Event:user-grids-li.html.twig */
class __TwigTemplate_13beb5a548b9ec4c549a57043dc3a5310a0d5d2a6d19c0440aa5b1729a61bf37 extends Twig_Template
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
        $context["web_macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "TopxiaWebBundle:Thread/Event:user-grids-li.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["members"]) ? $context["members"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
            // line 4
            echo "<span>";
            echo $context["web_macro"]->getuser_avatar($context["member"], "", "avatar-sm", true);
            echo "</span>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Thread/Event:user-grids-li.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% import "TopxiaWebBundle::macro.html.twig" as web_macro %}*/
/* */
/* {% for member in members %}*/
/* <span>{{ web_macro.user_avatar(member, '', 'avatar-sm', true) }}</span>*/
/* {% endfor %}*/
