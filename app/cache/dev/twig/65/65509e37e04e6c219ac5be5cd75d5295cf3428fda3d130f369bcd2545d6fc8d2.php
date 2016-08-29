<?php

/* TopxiaWebBundle:Announcement:announcement-block.html.twig */
class __TwigTemplate_0749e0a7e0d7ac35fcef7dd278a6bf52890fd521b40c6aafcf0e9343910e7c55 extends Twig_Template
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
        echo "
";
        // line 2
        if ((isset($context["announcements"]) ? $context["announcements"] : $this->getContext($context, "announcements"))) {
            // line 3
            echo "  <div class=\"alert alert-warning announcements aside-notice\" role=\"alert\">
    <div class=\"swiper-container\">
      <div class=\"swiper-wrapper\">
      ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["announcements"]) ? $context["announcements"] : $this->getContext($context, "announcements")));
            foreach ($context['_seq'] as $context["_key"] => $context["announcement"]) {
                // line 7
                echo "        <div class=\"swiper-slide\">
          <a style=\"color:#ff5e06\" class=\"alert-link\" href=\"#modal\" data-toggle=\"modal\" data-url=\"";
                // line 8
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("announcement_show", array("id" => $this->getAttribute($context["announcement"], "id", array()), "targetType" => (isset($context["targetType"]) ? $context["targetType"] : $this->getContext($context, "targetType")), "targetId" => $this->getAttribute((isset($context["targetObject"]) ? $context["targetObject"] : $this->getContext($context, "targetObject")), "id", array()))), "html", null, true);
                echo "\" >
          <i class=\"es-icon es-icon-infooutline\"></i>
          ";
                // line 10
                echo _twig_default_filter($this->env->getExtension('topxia_web_twig')->subTextFilter($this->getAttribute($context["announcement"], "content", array()), 40), "<span class=\"text-warning\">(请点击查看)</span>");
                echo "</a>
        </div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['announcement'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "      </div>
    </div>
  </div>

  ";
            // line 17
            $this->env->getExtension('topxia_web_twig')->loadScript("announcement/announcement-swiper-slide");
            // line 18
            echo "
";
        }
        // line 20
        echo "


  


";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Announcement:announcement-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 20,  58 => 18,  56 => 17,  50 => 13,  41 => 10,  36 => 8,  33 => 7,  29 => 6,  24 => 3,  22 => 2,  19 => 1,);
    }
}
/* */
/* {% if announcements %}*/
/*   <div class="alert alert-warning announcements aside-notice" role="alert">*/
/*     <div class="swiper-container">*/
/*       <div class="swiper-wrapper">*/
/*       {% for announcement in announcements %}*/
/*         <div class="swiper-slide">*/
/*           <a style="color:#ff5e06" class="alert-link" href="#modal" data-toggle="modal" data-url="{{ path('announcement_show', {id:announcement.id, targetType:targetType, targetId:targetObject.id}) }}" >*/
/*           <i class="es-icon es-icon-infooutline"></i>*/
/*           {{ announcement.content|sub_text(40)|default('<span class="text-warning">(请点击查看)</span>')|raw }}</a>*/
/*         </div>*/
/*       {% endfor %}*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* */
/*   {% do load_script('announcement/announcement-swiper-slide') %}*/
/* */
/* {% endif %}*/
/* */
/* */
/* */
/*   */
/* */
/* */
/* */
