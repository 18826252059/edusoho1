<?php

/* TopxiaWebBundle::powered-by.html.twig */
class __TwigTemplate_5b20340b3403b5387b10b5a2afe09d101479c544472d0b463b77f5394553f32f extends Twig_Template
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
        if ($this->env->getExtension('topxia_web_twig')->getSetting("copyright.owned")) {
            // line 2
            echo "  ";
            if ($this->env->getExtension('topxia_web_twig')->getSetting("copyright.name")) {
                // line 3
                echo "    Powered by <a href=\"";
                echo $this->env->getExtension('routing')->getPath("homepage");
                echo "\" target=\"_blank\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("copyright.name"), "html", null, true);
                echo "</a>
  ";
            }
        } else {
            // line 6
            echo "  Powered by <a href=\"http://www.lpmas.com/\" target=\"_blank\"> 隆平现代农业科技服务有限公司</a>
  ©2015-2016
  ";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle::powered-by.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 6,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if setting('copyright.owned') %}*/
/*   {% if setting('copyright.name') %}*/
/*     Powered by <a href="{{ path('homepage') }}" target="_blank">{{ setting('copyright.name') }}</a>*/
/*   {% endif %}*/
/* {% else %}*/
/*   Powered by <a href="http://www.lpmas.com/" target="_blank"> 隆平现代农业科技服务有限公司</a>*/
/*   ©2015-2016*/
/*   {#<a class="mlm" href="http://www.howzhi.com/" target="_blank">好知网</a>#}*/
/* {% endif %}*/
