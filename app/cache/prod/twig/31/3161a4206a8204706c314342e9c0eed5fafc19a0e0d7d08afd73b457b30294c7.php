<?php

/* ::html5-player.html.twig */
class __TwigTemplate_a6b2fa38c15e3028eb682a82c23b64ec2ba745dee2d81b9be592fd1881d2ef07 extends Twig_Template
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
        echo "<video class=\"video-player\" width=\"600\" height=\"450\" x-webkit-airplay=\"allow\" controls=\"controls\" autoplay=\"auto\" src=\"";
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "\">
</video>
";
    }

    public function getTemplateName()
    {
        return "::html5-player.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <video class="video-player" width="600" height="450" x-webkit-airplay="allow" controls="controls" autoplay="auto" src="{{ url }}">*/
/* </video>*/
/* */
