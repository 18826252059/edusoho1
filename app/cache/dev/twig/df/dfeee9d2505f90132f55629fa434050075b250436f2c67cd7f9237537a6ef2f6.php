<?php

/* ClassroomBundle:Classroom:service-block.html.twig */
class __TwigTemplate_f44978f54db41feeee6d4b2535af53b0a6229e95dfd80ea0619f857d9d68a11c extends Twig_Template
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
        $this->env->getExtension('topxia_web_twig')->loadScript("classroombundle/controller/classroom/service-block");
        // line 3
        echo "
<ul class=\"list-unstyled clearfix\">
  ";
        // line 5
        $context["defaultServices"] = twig_get_array_keys_filter($this->env->getExtension('topxia_web_twig')->getDict("classroomService"));
        // line 6
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["services"]) ? $context["services"] : $this->getContext($context, "services")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 7
            echo "    ";
            $this->loadTemplate((("ClassroomBundle:Classroom/Part/Service:" . $context["service"]) . ".html.twig"), "ClassroomBundle:Classroom:service-block.html.twig", 7)->display(array_merge($context, array("active" => true)));
            // line 8
            echo "  ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "  
  ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["defaultServices"]) ? $context["defaultServices"] : $this->getContext($context, "defaultServices")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            if (!twig_in_filter($context["service"], (isset($context["services"]) ? $context["services"] : $this->getContext($context, "services")))) {
                // line 11
                echo "    ";
                $this->loadTemplate((("ClassroomBundle:Classroom/Part/Service:" . $context["service"]) . ".html.twig"), "ClassroomBundle:Classroom:service-block.html.twig", 11)->display(array_merge($context, array("active" => false)));
                // line 12
                echo "  ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:Classroom:service-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 13,  82 => 12,  79 => 11,  68 => 10,  65 => 9,  51 => 8,  48 => 7,  30 => 6,  28 => 5,  24 => 3,  22 => 2,  19 => 1,);
    }
}
/* */
/* {% do load_script('classroombundle/controller/classroom/service-block') %}*/
/* */
/* <ul class="list-unstyled clearfix">*/
/*   {% set defaultServices = dict('classroomService')|keys %}*/
/*   {% for service in services %}*/
/*     {% include 'ClassroomBundle:Classroom/Part/Service:' ~ service ~ '.html.twig' with {active:true} %}*/
/*   {% endfor %}*/
/*   */
/*   {% for service in defaultServices if service not in services %}*/
/*     {% include 'ClassroomBundle:Classroom/Part/Service:' ~ service ~ '.html.twig' with {active:false} %}*/
/*   {% endfor %}*/
/* </ul>*/
