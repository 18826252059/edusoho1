<?php

/* ClassroomBundle:Classroom:latest-members-block.html.twig */
class __TwigTemplate_05d3fa7c22d8a75b5bba8e9a44884b739cf42acc932f9de2fbd83fd4fa37f457 extends Twig_Template
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
        $context["web_macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "ClassroomBundle:Classroom:latest-members-block.html.twig", 1);
        // line 2
        if ((isset($context["students"]) ? $context["students"] : $this->getContext($context, "students"))) {
            // line 3
            echo "  <div class=\"panel panel-default\">
    <div class=\"panel-heading\">
      <h3 class=\"panel-title\"><i class=\"es-icon es-icon-personadd\"></i>新加学员</h3>
    </div>
    <div class=\"panel-body\">
      <ul class=\"user-avatar-list clearfix\">
        ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["students"]) ? $context["students"] : $this->getContext($context, "students")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["student"]) {
                // line 10
                echo "          ";
                $context["user"] = $this->getAttribute((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")), $this->getAttribute($context["student"], "userId", array()), array(), "array");
                // line 11
                echo "          ";
                if (($this->getAttribute($context["loop"], "index", array()) < 16)) {
                    // line 12
                    echo "            <li>
              ";
                    // line 13
                    echo $context["web_macro"]->getuser_avatar((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "", "avatar-sm", true);
                    echo "
            </li>
          ";
                }
                // line 16
                echo "        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['student'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "      </ul>
    </div>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:Classroom:latest-members-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 17,  63 => 16,  57 => 13,  54 => 12,  51 => 11,  48 => 10,  31 => 9,  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% import "TopxiaWebBundle::macro.html.twig" as web_macro %}*/
/* {% if students %}*/
/*   <div class="panel panel-default">*/
/*     <div class="panel-heading">*/
/*       <h3 class="panel-title"><i class="es-icon es-icon-personadd"></i>新加学员</h3>*/
/*     </div>*/
/*     <div class="panel-body">*/
/*       <ul class="user-avatar-list clearfix">*/
/*         {% for  student in students %}*/
/*           {% set user = users[student.userId] %}*/
/*           {% if loop.index < 16%}*/
/*             <li>*/
/*               {{ web_macro.user_avatar(user, '', 'avatar-sm', true) }}*/
/*             </li>*/
/*           {% endif %}*/
/*         {% endfor %}*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/* {% endif %}*/
