<?php

/* CustomWebBundle:Course:recommend-teacher.html.twig */
class __TwigTemplate_ac89b229edb4587fa26057de30cc96da63ccb6d3a059afd6518a85c8e8146281 extends Twig_Template
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
        if ((isset($context["users"]) ? $context["users"] : null)) {
            // line 2
            echo "    <div class=\"left-h2\">课程专家</div>
    <section class=\"clearfix g-mb10 course-experts\">
        ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 5
                echo "            <div class=\"course-expertsDetail\">
                <a href=\"";
                // line 6
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("expert_detail", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
                echo "\">
                    <img src=\"";
                // line 7
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute($context["user"], "mediumAvatar", array()), "avatar.png"), "html", null, true);
                echo "\" width=\"50\" height=\"50\">

                    <p class=\"overline1 g-font-color\">";
                // line 9
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "nickname", array()), "html", null, true);
                echo "</p>

                    <p class=\"overline1 g-font-color2\">";
                // line 11
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "title", array()), "html", null, true);
                echo "</p>
                </a>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "
    </section>
";
        }
    }

    public function getTemplateName()
    {
        return "CustomWebBundle:Course:recommend-teacher.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 15,  46 => 11,  41 => 9,  36 => 7,  32 => 6,  29 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% if users %}*/
/*     <div class="left-h2">课程专家</div>*/
/*     <section class="clearfix g-mb10 course-experts">*/
/*         {% for user in users %}*/
/*             <div class="course-expertsDetail">*/
/*                 <a href="{{ path('expert_detail',{id:user.id}) }}">*/
/*                     <img src="{{ filepath(user.mediumAvatar, 'avatar.png') }}" width="50" height="50">*/
/* */
/*                     <p class="overline1 g-font-color">{{ user.nickname }}</p>*/
/* */
/*                     <p class="overline1 g-font-color2">{{ user.title }}</p>*/
/*                 </a>*/
/*             </div>*/
/*         {% endfor %}*/
/* */
/*     </section>*/
/* {% endif %}*/
