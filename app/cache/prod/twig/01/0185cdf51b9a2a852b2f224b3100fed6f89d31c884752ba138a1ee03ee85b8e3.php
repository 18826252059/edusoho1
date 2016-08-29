<?php

/* TopxiaWebBundle:CourseOrder:pay.html.twig */
class __TwigTemplate_93c54a2ac845b4d5a323c9607b19d241abf29810cdecb6f4b10c77daa15cf9de extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\">
  <title>正在跳转到支付网关...</title>
<body>

  <form action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "action", array()), "html", null, true);
        echo "\"  method=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "method", array()), "html", null, true);
        echo "\" name=\"form\">

  \t";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "params", array()));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 11
            echo "  \t  <input type=\"hidden\" name=\"";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\">
  \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "  </form>

  <script>
    document.all.form.submit();
  </script>

</body>
</html>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseOrder:pay.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 13,  39 => 11,  35 => 10,  28 => 8,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*   <meta charset="utf-8">*/
/*   <title>正在跳转到支付网关...</title>*/
/* <body>*/
/* */
/*   <form action="{{ form.action }}"  method="{{ form.method }}" name="form">*/
/* */
/*   	{% for key, value in form.params %}*/
/*   	  <input type="hidden" name="{{ key }}" value="{{ value }}">*/
/*   	{% endfor %}*/
/*   </form>*/
/* */
/*   <script>*/
/*     document.all.form.submit();*/
/*   </script>*/
/* */
/* </body>*/
/* </html>*/
