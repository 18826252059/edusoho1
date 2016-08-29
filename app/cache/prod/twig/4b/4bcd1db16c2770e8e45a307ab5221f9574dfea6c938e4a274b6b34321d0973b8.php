<?php

/* TopxiaAdminBundle:App:app-detail.html.twig */
class __TwigTemplate_c22fe7954bb4538e33c375658ec7f48cf65fb37b68578f898d01750945c68235 extends Twig_Template
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
        echo "      <tr>
        <td>
          <img src=\"http://open.edusoho.com/files/product/";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "icon", array()), "html", null, true);
        echo "\" class=\"app-img pull-left mrl mtm\"/>
          <div class=\"mtm\">
            
              <h4>
                <a target=\"_blank\" href=\"http://open.edusoho.com/app/";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "id", array()), "html", null, true);
        echo "\">
                  <strong class=\"text-primary\">";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "name", array()), "html", null, true);
        echo "</strong>            
                  ";
        // line 9
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "licensed", array())) {
            // line 10
            echo "                  <span class=\"label label-success mls\">商业版</span>
                  ";
        }
        // line 12
        echo "                  </a>
              </h4>
  
          </div>
          
          <div class=\"info mtm mbm clearfix\">
            <div class=\"left-info pull-left\">

              <div class=\"text-muted\">作者： ";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "developerName", array()), "html", null, true);
        echo "</div>
              <div class=\"mts text-muted\">";
        // line 21
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "type", array()) == "theme")) {
            echo "主题";
        } else {
            echo "应用";
        }
        // line 22
        echo "              </div>
            </div>

            <div class=\"middle-info pull-left short-long-text\">
              <div class=\"short-text text-muted\">";
        // line 26
        echo $this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "description", array()), 80);
        echo " <span class=\"trigger\">(展开)</span></div>
              <div class=\"long-text text-muted\">";
        // line 27
        echo $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "description", array());
        echo " <span class=\"trigger\">(收起)</span></div>
            </div>

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:App:app-detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 27,  70 => 26,  64 => 22,  58 => 21,  54 => 20,  44 => 12,  40 => 10,  38 => 9,  34 => 8,  30 => 7,  23 => 3,  19 => 1,);
    }
}
/*       <tr>*/
/*         <td>*/
/*           <img src="http://open.edusoho.com/files/product/{{ app.icon }}" class="app-img pull-left mrl mtm"/>*/
/*           <div class="mtm">*/
/*             */
/*               <h4>*/
/*                 <a target="_blank" href="http://open.edusoho.com/app/{{ app.id }}">*/
/*                   <strong class="text-primary">{{ app.name }}</strong>            */
/*                   {% if app.licensed %}*/
/*                   <span class="label label-success mls">商业版</span>*/
/*                   {% endif %}*/
/*                   </a>*/
/*               </h4>*/
/*   */
/*           </div>*/
/*           */
/*           <div class="info mtm mbm clearfix">*/
/*             <div class="left-info pull-left">*/
/* */
/*               <div class="text-muted">作者： {{ app.developerName }}</div>*/
/*               <div class="mts text-muted">{% if app.type == "theme" %}主题{% else %}应用{% endif %}*/
/*               </div>*/
/*             </div>*/
/* */
/*             <div class="middle-info pull-left short-long-text">*/
/*               <div class="short-text text-muted">{{ app.description|plain_text(80) }} <span class="trigger">(展开)</span></div>*/
/*               <div class="long-text text-muted">{{ app.description|raw }} <span class="trigger">(收起)</span></div>*/
/*             </div>*/
/* */
/* */
