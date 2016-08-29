<?php

/* TopxiaWebBundle:Default:footer.html.twig */
class __TwigTemplate_bc36c1109e74b47d089e6baffd3bf816ae1d56e7ab7363749a28b6caef84b5be extends Twig_Template
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
        echo "<footer class=\"es-footer\">
  <div class=\"footer-link\">
    <div class=\"container\">
      <div class=\"row\">
        ";
        // line 5
        echo $this->env->getExtension('topxia_block_twig')->showBlock("jianmo:bottom_info");
        echo "
      </div>
    </div>
  </div>

  <div class=\"copyright\">
    <div class=\"container\">
      ";
        // line 12
        $this->loadTemplate("TopxiaWebBundle::powered-by.html.twig", "TopxiaWebBundle:Default:footer.html.twig", 12)->display($context);
        // line 13
        echo "      ";
        echo $this->env->getExtension('topxia_web_twig')->getSetting("site.analytics");
        echo " 
      <a class=\"mlm\" href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("course_archive");
        echo "\">课程存档</a>
      <div class=\"mts\">
        ";
        // line 16
        if ($this->env->getExtension('topxia_web_twig')->getSetting("site.copyright")) {
            // line 17
            echo "          课程内容版权均归
          <a href=\"/\">
            ";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("site.copyright"), "html", null, true);
            echo "
          </a>
          所有
        ";
        }
        // line 23
        echo "        ";
        if ($this->env->getExtension('topxia_web_twig')->getSetting("site.icp")) {
            // line 24
            echo "          <a class=\"mlm\" href=\"http://www.miibeian.gov.cn/\" target=\"_blank\">
            ";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("site.icp"), "html", null, true);
            echo "
          </a>
        ";
        }
        // line 28
        echo "      </div>
    </div>
  </div>
</footer>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Default:footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 28,  66 => 25,  63 => 24,  60 => 23,  53 => 19,  49 => 17,  47 => 16,  42 => 14,  37 => 13,  35 => 12,  25 => 5,  19 => 1,);
    }
}
/* <footer class="es-footer">*/
/*   <div class="footer-link">*/
/*     <div class="container">*/
/*       <div class="row">*/
/*         {{ block_show('jianmo:bottom_info') }}*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* */
/*   <div class="copyright">*/
/*     <div class="container">*/
/*       {% include "TopxiaWebBundle::powered-by.html.twig" %}*/
/*       {{ setting('site.analytics')|raw }} */
/*       <a class="mlm" href="{{ path('course_archive') }}">课程存档</a>*/
/*       <div class="mts">*/
/*         {% if setting('site.copyright') %}*/
/*           课程内容版权均归*/
/*           <a href="/">*/
/*             {{ setting('site.copyright') }}*/
/*           </a>*/
/*           所有*/
/*         {% endif %}*/
/*         {% if setting('site.icp') %}*/
/*           <a class="mlm" href="http://www.miibeian.gov.cn/" target="_blank">*/
/*             {{ setting('site.icp') }}*/
/*           </a>*/
/*         {% endif %}*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </footer>*/
