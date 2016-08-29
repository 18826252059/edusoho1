<?php

/* TopxiaWebBundle:Article/Part:detail-boy.html.twig */
class __TwigTemplate_01b69da3c2eba77184c523be2c0a181460c35b01b42b835d58309b649e8d15a6 extends Twig_Template
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
        echo "<div class=\"article-text\">
  ";
        // line 2
        echo $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "body", array());
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Article/Part:detail-boy.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }
}
/* <div class="article-text">*/
/*   {{ article.body |raw }}*/
/* </div>*/
