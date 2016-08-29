<?php

/* TopxiaWebBundle:Course:Part/normal-sidebar-teachers.html.twig */
class __TwigTemplate_55ca19ccf2eccc224d57a5e7bfacbebac5e27dd50b733128605cf0c1a8b5f952 extends Twig_Template
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
        $context["web_macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "TopxiaWebBundle:Course:Part/normal-sidebar-teachers.html.twig", 1);
        // line 2
        echo "<div class=\"panel panel-default\">
  <div class=\"panel-heading\">
    <h3 class=\"panel-title\"> <i class=\"es-icon es-icon-assignmentind\"></i>
      授课教师
    </h3>
  </div>
  <div class=\"panel-body\">
    ";
        // line 9
        if ((isset($context["teachers"]) ? $context["teachers"] : $this->getContext($context, "teachers"))) {
            // line 10
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["teachers"]) ? $context["teachers"] : $this->getContext($context, "teachers")));
            foreach ($context['_seq'] as $context["_key"] => $context["teacher"]) {
                // line 11
                echo "        <div class=\"media media-default\">
          <div class=\"media-left\">
            ";
                // line 13
                echo $context["web_macro"]->getuser_avatar($context["teacher"], "", "avatar-md");
                echo "
          </div>
          <div class=\"media-body\">
            <div class=\"title\">
              ";
                // line 17
                echo $context["web_macro"]->getuser_link($context["teacher"], "link-light");
                echo "
            </div>
            <div class=\"content\">";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute($context["teacher"], "title", array()), "html", null, true);
                echo "</div>
          </div>
        </div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['teacher'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "    ";
        } else {
            // line 24
            echo "      <div class=\"empty\">暂无教师</div>
    ";
        }
        // line 26
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:Part/normal-sidebar-teachers.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 26,  66 => 24,  63 => 23,  53 => 19,  48 => 17,  41 => 13,  37 => 11,  32 => 10,  30 => 9,  21 => 2,  19 => 1,);
    }
}
/* {% import "TopxiaWebBundle::macro.html.twig" as web_macro %}*/
/* <div class="panel panel-default">*/
/*   <div class="panel-heading">*/
/*     <h3 class="panel-title"> <i class="es-icon es-icon-assignmentind"></i>*/
/*       授课教师*/
/*     </h3>*/
/*   </div>*/
/*   <div class="panel-body">*/
/*     {% if teachers %}*/
/*       {% for teacher in teachers %}*/
/*         <div class="media media-default">*/
/*           <div class="media-left">*/
/*             {{ web_macro.user_avatar(teacher, '', 'avatar-md') }}*/
/*           </div>*/
/*           <div class="media-body">*/
/*             <div class="title">*/
/*               {{ web_macro.user_link(teacher , 'link-light') }}*/
/*             </div>*/
/*             <div class="content">{{ teacher.title }}</div>*/
/*           </div>*/
/*         </div>*/
/*       {% endfor %}*/
/*     {% else %}*/
/*       <div class="empty">暂无教师</div>*/
/*     {% endif %}*/
/*   </div>*/
/* </div>*/
/* */
