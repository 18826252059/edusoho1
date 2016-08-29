<?php

/* TopxiaWebBundle:Teacher:index.html.twig */
class __TwigTemplate_26d16b2fac7d73adbb77256e97498a616409b0b5011aae950838c5627480b233 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "TopxiaWebBundle:Teacher:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'keywords' => array($this, 'block_keywords'),
            'description' => array($this, 'block_description'),
            'top_content' => array($this, 'block_top_content'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["web_macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "TopxiaWebBundle:Teacher:index.html.twig", 3);
        // line 10
        $context["bodyClass"] = "teacherpage bg-blank";
        // line 11
        $this->env->getExtension('topxia_web_twig')->loadScript("teacher/explore");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "师资介绍 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 6
    public function block_keywords($context, array $blocks = array())
    {
        echo "师资介绍 ";
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("site.name"), "html", null, true);
    }

    // line 7
    public function block_description($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("site.name"), "html", null, true);
        echo "的师资介绍。";
    }

    // line 13
    public function block_top_content($context, array $blocks = array())
    {
        // line 14
        echo "  <div class=\"es-banner\">
    <div class=\"container\">
      <div class=\"title\">
        <i class=\"es-icon es-icon-permcontactcal\"></i>所有教师
      </div>
    </div>
  </div>
";
    }

    // line 23
    public function block_content($context, array $blocks = array())
    {
        // line 24
        echo "  <div class=\"teacher-list row\">
    ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["teachers"]) ? $context["teachers"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["teacher"]) {
            // line 26
            echo "    ";
            $context["profile"] = $this->getAttribute((isset($context["profiles"]) ? $context["profiles"] : null), $this->getAttribute($context["teacher"], "id", array()), array(), "array");
            // line 27
            echo "    ";
            $context["isFollowed"] = _twig_default_filter(twig_in_filter($this->getAttribute($context["teacher"], "id", array()), (isset($context["Myfollowings"]) ? $context["Myfollowings"] : null)), false);
            // line 28
            echo "      <div class=\"col-lg-3 col-md-4 col-sm-6\">
        ";
            // line 29
            $this->loadTemplate("TopxiaWebBundle:Teacher:teacher-item.html.twig", "TopxiaWebBundle:Teacher:index.html.twig", 29)->display($context);
            // line 30
            echo "      </div>
    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['teacher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "  </div>
  <nav class=\"text-center\">
    ";
        // line 34
        echo $context["web_macro"]->getpaginator((isset($context["paginator"]) ? $context["paginator"] : null));
        echo "
  </nav>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Teacher:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 34,  123 => 32,  108 => 30,  106 => 29,  103 => 28,  100 => 27,  97 => 26,  80 => 25,  77 => 24,  74 => 23,  63 => 14,  60 => 13,  53 => 7,  46 => 6,  39 => 4,  35 => 1,  33 => 11,  31 => 10,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::layout.html.twig' %}*/
/* */
/* {% import 'TopxiaWebBundle::macro.html.twig' as web_macro %}*/
/* {% block title %}师资介绍 - {{ parent() }}{% endblock %}*/
/* */
/* {% block keywords %}师资介绍 {{ setting('site.name') }}{% endblock %}*/
/* {% block description %}{{ setting('site.name') }}的师资介绍。{% endblock %}*/
/* */
/* */
/* {% set bodyClass = 'teacherpage bg-blank' %}*/
/* {% do load_script('teacher/explore') %}*/
/* */
/* {% block top_content %}*/
/*   <div class="es-banner">*/
/*     <div class="container">*/
/*       <div class="title">*/
/*         <i class="es-icon es-icon-permcontactcal"></i>所有教师*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/*   <div class="teacher-list row">*/
/*     {% for teacher in teachers %}*/
/*     {% set profile = profiles[teacher.id] %}*/
/*     {% set isFollowed = (teacher.id in Myfollowings)|default(false) %}*/
/*       <div class="col-lg-3 col-md-4 col-sm-6">*/
/*         {% include 'TopxiaWebBundle:Teacher:teacher-item.html.twig' %}*/
/*       </div>*/
/*     {% endfor %}*/
/*   </div>*/
/*   <nav class="text-center">*/
/*     {{ web_macro.paginator(paginator) }}*/
/*   </nav>*/
/* {% endblock %}*/
/* */
