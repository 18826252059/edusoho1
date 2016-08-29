<?php

/* TopxiaWebBundle:Course:latest-members-block.html.twig */
class __TwigTemplate_161f68812d0d487b7f5e51931891b7eb95fc98c1b508767e82a9ff26c09b6238 extends Twig_Template
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
        $context["web_macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "TopxiaWebBundle:Course:latest-members-block.html.twig", 1);
        // line 2
        if ((isset($context["students"]) ? $context["students"] : null)) {
            // line 3
            echo "<div class=\"panel panel-default\">
\t<div class=\"panel-heading\">
\t\t<h3 class=\"panel-title\">最新";
            // line 5
            if ($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name")) {
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), "学员"), "html", null, true);
            } else {
                echo "学员";
            }
            echo "</h3>
\t</div>
\t<div class=\"panel-body\">
\t\t<ul class=\"user-grids\">
\t\t";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["students"]) ? $context["students"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["student"]) {
                // line 10
                echo "\t\t\t";
                $context["user"] = $this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["student"], "userId", array()), array(), "array");
                // line 11
                echo "\t\t\t<li>
\t\t\t\t";
                // line 12
                echo $context["web_macro"]->getuser_avatar((isset($context["user"]) ? $context["user"] : null));
                echo "
\t\t\t\t<p>";
                // line 13
                echo $context["web_macro"]->getuser_link((isset($context["user"]) ? $context["user"] : null));
                echo "</p>
\t\t\t</li>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['student'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "\t\t</ul>
\t</div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:latest-members-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 16,  52 => 13,  48 => 12,  45 => 11,  42 => 10,  38 => 9,  27 => 5,  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% import "TopxiaWebBundle::macro.html.twig" as web_macro %}*/
/* {% if students %}*/
/* <div class="panel panel-default">*/
/* 	<div class="panel-heading">*/
/* 		<h3 class="panel-title">最新{% if setting('default.user_name') %}{{setting('default.user_name')|default('学员')}}{% else %}学员{% endif %}</h3>*/
/* 	</div>*/
/* 	<div class="panel-body">*/
/* 		<ul class="user-grids">*/
/* 		{% for  student in students %}*/
/* 			{% set user = users[student.userId] %}*/
/* 			<li>*/
/* 				{{ web_macro.user_avatar(user) }}*/
/* 				<p>{{ web_macro.user_link(user) }}</p>*/
/* 			</li>*/
/* 		{% endfor %}*/
/* 		</ul>*/
/* 	</div>*/
/* </div>*/
/* {% endif %}*/
