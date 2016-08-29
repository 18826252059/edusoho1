<?php

/* TopxiaWebBundle:Status:status-block.html.twig */
class __TwigTemplate_bd177945e8c8cc51bc590ca2bbb4c29889810e9596f1073cd389a12558beac58 extends Twig_Template
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
        $context["web_macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "TopxiaWebBundle:Status:status-block.html.twig", 1);
        // line 2
        echo "<div class=\"panel panel-default student-dynamic\">

  <div class=\"panel-heading\">
    <h3 class=\"panel-title\"><i class=\"es-icon es-icon-recentactors\"></i>学员动态</h3>
  </div>

  <div class=\"panel-body\">
  ";
        // line 9
        if ((isset($context["learns"]) ? $context["learns"] : null)) {
            // line 10
            echo "    
      ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["learns"]) ? $context["learns"] : null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["key"] => $context["learn"]) {
                // line 12
                echo "        ";
                if (($this->getAttribute($context["loop"], "index", array()) < 7)) {
                    // line 13
                    echo "          <div class=\"media media-number-o color-gray text-overflow\">
            ";
                    // line 14
                    echo $context["web_macro"]->getuser_link($this->getAttribute($context["learn"], "user", array()));
                    echo "
            ";
                    // line 15
                    echo $this->getAttribute($context["learn"], "message", array());
                    echo "
          </div> 
         ";
                }
                // line 18
                echo "      ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['learn'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "
    ";
        } else {
            // line 21
            echo "     <div class=\"empty\">还没有动态</div>
    ";
        }
        // line 23
        echo "  </div>

</div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Status:status-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 23,  86 => 21,  82 => 19,  68 => 18,  62 => 15,  58 => 14,  55 => 13,  52 => 12,  35 => 11,  32 => 10,  30 => 9,  21 => 2,  19 => 1,);
    }
}
/* {% import "TopxiaWebBundle::macro.html.twig" as web_macro %}*/
/* <div class="panel panel-default student-dynamic">*/
/* */
/*   <div class="panel-heading">*/
/*     <h3 class="panel-title"><i class="es-icon es-icon-recentactors"></i>学员动态</h3>*/
/*   </div>*/
/* */
/*   <div class="panel-body">*/
/*   {% if learns %}*/
/*     */
/*       {% for key,learn in learns %}*/
/*         {% if loop.index < 7 %}*/
/*           <div class="media media-number-o color-gray text-overflow">*/
/*             {{ web_macro.user_link(learn.user) }}*/
/*             {{ learn.message|raw }}*/
/*           </div> */
/*          {% endif %}*/
/*       {% endfor %}*/
/* */
/*     {% else %}*/
/*      <div class="empty">还没有动态</div>*/
/*     {% endif %}*/
/*   </div>*/
/* */
/* </div>*/
/* */
