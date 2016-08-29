<?php

/* TopxiaWebBundle:PayCenter:submit-pay-request.html.twig */
class __TwigTemplate_40376da3c806e7178ac518f316b0a96787bf20e23d8bbc6a030aace0b531e999 extends Twig_Template
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
    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "params", array()));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 10
            echo "      <input type=\"hidden\" name=\"";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\">
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "  </form>

  <script>
    document.all.form.submit();
  </script>

</body>
</html>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:PayCenter:submit-pay-request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 12,  38 => 10,  34 => 9,  28 => 8,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*   <meta charset="utf-8">*/
/*   <title>正在跳转到支付网关...</title>*/
/* <body>*/
/* */
/*   <form action="{{ form.action }}"  method="{{ form.method }}" name="form"> */
/*     {% for key, value in form.params %}*/
/*       <input type="hidden" name="{{ key }}" value="{{ value }}">*/
/*     {% endfor %}*/
/*   </form>*/
/* */
/*   <script>*/
/*     document.all.form.submit();*/
/*   </script>*/
/* */
/* </body>*/
/* </html>*/
