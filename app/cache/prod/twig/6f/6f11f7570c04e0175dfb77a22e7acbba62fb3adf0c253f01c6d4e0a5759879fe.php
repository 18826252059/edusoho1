<?php

/* TopxiaWebBundle:Login:oauth2-logins-block.html.twig */
class __TwigTemplate_c444dadcc2bcba549954f40d41d2f23e6bebabd99ecbb1e5769b4dae4b11afdd extends Twig_Template
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
        $context["settings"] = $this->env->getExtension('topxia_web_twig')->getSetting("login_bind", array());
        // line 2
        echo "
";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clients"]) ? $context["clients"] : null));
        foreach ($context['_seq'] as $context["type"] => $context["client"]) {
            // line 4
            echo "  ";
            if ((((($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), ($context["type"] . "_enabled"), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), ($context["type"] . "_enabled"), array(), "array"), false)) : (false)) && ($context["type"] != "weixinmob")) && (($this->getAttribute($context["client"], "icon_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["client"], "icon_class", array()), null)) : (null)))) {
                // line 5
                echo "    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("login_bind", array("type" => $context["type"], "_target_path" => ((array_key_exists("targetPath", $context)) ? (_twig_default_filter((isset($context["targetPath"]) ? $context["targetPath"] : null), "")) : ("")))), "html", null, true);
                echo "\" class=\"social-icon social-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "icon_class", array()), "html", null, true);
                echo "\">
      <i class=\"es-icon es-icon-";
                // line 6
                echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "icon_class", array()), "html", null, true);
                echo "\"></i>
    </a>
  ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Login:oauth2-logins-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 6,  31 => 5,  28 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% set settings = setting('login_bind', []) %}*/
/* */
/* {% for type, client in clients %}*/
/*   {% if settings[type ~ '_enabled']|default(false) and type != 'weixinmob' and client.icon_class|default(null) %}*/
/*     <a href="{{ path('login_bind', {type: type, _target_path:targetPath|default('')}) }}" class="social-icon social-{{ client.icon_class }}">*/
/*       <i class="es-icon es-icon-{{ client.icon_class }}"></i>*/
/*     </a>*/
/*   {% endif %}*/
/* {% endfor %}*/
/* */
