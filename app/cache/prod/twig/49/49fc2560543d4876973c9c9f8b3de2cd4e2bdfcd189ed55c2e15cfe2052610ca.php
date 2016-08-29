<?php

/* TopxiaWebBundle:Course/Part:normal-sidebar-students.html.twig */
class __TwigTemplate_521384e3cf485e6deb6ca8e060bff2dd6ce6c466ec6ab3dccab5acdc34fbd130 extends Twig_Template
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
        $context["web_macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "TopxiaWebBundle:Course/Part:normal-sidebar-students.html.twig", 1);
        // line 2
        echo "
<div class=\"panel panel-default\">
  <div class=\"panel-heading\">
    ";
        // line 8
        echo "    <h3 class=\"panel-title\">
      <i class=\"es-icon es-icon-personadd\"></i>
      最新学员
    </h3>
  </div>
  <div class=\"panel-body\">
    ";
        // line 14
        if ((isset($context["students"]) ? $context["students"] : null)) {
            // line 15
            echo "      <ul class=\"user-avatar-list clearfix\">
        ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["members"]) ? $context["members"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
                // line 17
                echo "        ";
                $context["student"] = $this->getAttribute((isset($context["students"]) ? $context["students"] : null), $this->getAttribute($context["member"], "userId", array()), array(), "array");
                // line 18
                echo "          <li>
            ";
                // line 19
                echo $context["web_macro"]->getuser_avatar((isset($context["student"]) ? $context["student"] : null), "", "avatar-sm");
                echo "
          </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "      </ul>
    ";
        } else {
            // line 24
            echo "      <div class=\"empty\">暂无学员</div>
    ";
        }
        // line 26
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course/Part:normal-sidebar-students.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 26,  62 => 24,  58 => 22,  49 => 19,  46 => 18,  43 => 17,  39 => 16,  36 => 15,  34 => 14,  26 => 8,  21 => 2,  19 => 1,);
    }
}
/* {% import "TopxiaWebBundle::macro.html.twig" as web_macro %}*/
/* */
/* <div class="panel panel-default">*/
/*   <div class="panel-heading">*/
/*     {#{% if students|length >= 15 %}*/
/*       <a href="javascript:;" class="more"><i class="es-icon es-icon-morehoriz"></i></a>*/
/*     {% endif %}#}*/
/*     <h3 class="panel-title">*/
/*       <i class="es-icon es-icon-personadd"></i>*/
/*       最新学员*/
/*     </h3>*/
/*   </div>*/
/*   <div class="panel-body">*/
/*     {% if students %}*/
/*       <ul class="user-avatar-list clearfix">*/
/*         {% for member in members %}*/
/*         {% set student = students[member.userId] %}*/
/*           <li>*/
/*             {{ web_macro.user_avatar(student, '', 'avatar-sm') }}*/
/*           </li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*     {% else %}*/
/*       <div class="empty">暂无学员</div>*/
/*     {% endif %}*/
/*   </div>*/
/* </div>*/
/* */
