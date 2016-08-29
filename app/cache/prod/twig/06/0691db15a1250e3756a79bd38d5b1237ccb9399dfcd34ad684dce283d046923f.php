<?php

/* TopxiaWebBundle:Coin:submit-pay-request.html.twig */
class __TwigTemplate_2fc0352770d2db17ce64eb6cf553fa710727ab780dca27cf0d062dfdd4fd1245 extends Twig_Template
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
  <meta content=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\" name=\"csrf-token\" />
  <title>正在跳转到支付网关...</title>
<body>

  <form action=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "action", array()), "html", null, true);
        echo "\"  method=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "method", array()), "html", null, true);
        echo "\" name=\"form\">
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
    ";
        // line 11
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "params", array())) {
            // line 12
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "params", array()));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 13
                echo "        <input type=\"hidden\" name=\"";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "\">
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "    ";
        }
        // line 16
        echo "  </form>

  <script>
    //document.all.form.submit();
  </script>

</body>
</html>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Coin:submit-pay-request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 16,  60 => 15,  49 => 13,  44 => 12,  42 => 11,  38 => 10,  32 => 9,  25 => 5,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*   <meta charset="utf-8">*/
/*   <meta content="{{ csrf_token('site') }}" name="csrf-token" />*/
/*   <title>正在跳转到支付网关...</title>*/
/* <body>*/
/* */
/*   <form action="{{ form.action }}"  method="{{ form.method }}" name="form">*/
/*     <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/*     {% if form.params %}*/
/*       {% for key, value in form.params %}*/
/*         <input type="hidden" name="{{ key }}" value="{{ value }}">*/
/*       {% endfor %}*/
/*     {% endif %}*/
/*   </form>*/
/* */
/*   <script>*/
/*     //document.all.form.submit();*/
/*   </script>*/
/* */
/* </body>*/
/* </html>*/
