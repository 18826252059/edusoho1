<?php

/* TopxiaWebBundle:Default:promoted-teacher-block.html.twig */
class __TwigTemplate_01caf2ef85249346d71644febc9a41e732258e15cc63fc68026b4bbf92c2d32f extends Twig_Template
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
        if ((isset($context["teacher"]) ? $context["teacher"] : $this->getContext($context, "teacher"))) {
            // line 2
            echo "<div class=\"es-box\">
  <div class=\"es-box-heading\"><h2>名师风采</h2></div>
  <div class=\"es-box-body\">
    <div class=\"promoted-teacher\">
      <a href=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : $this->getContext($context, "teacher")), "id", array()))), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : $this->getContext($context, "teacher")), "mediumAvatar", array()), "avatar.png"), "html", null, true);
            echo "\" class=\"avatar\"></a>
      <a class=\"nickname\" href=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : $this->getContext($context, "teacher")), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : $this->getContext($context, "teacher")), "nickname", array()), "html", null, true);
            echo "</a>
      <div class=\"title\">";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : $this->getContext($context, "teacher")), "title", array()), "html", null, true);
            echo "</div>
      <div class=\"about\">";
            // line 9
            echo $this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : $this->getContext($context, "teacher")), "about", array()), 100);
            echo "</div>
      <div class=\"more\"><a href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : $this->getContext($context, "teacher")), "id", array()))), "html", null, true);
            echo "\">去老师主页看看 &raquo;</a></div>
    </div>
  </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Default:promoted-teacher-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 10,  43 => 9,  39 => 8,  33 => 7,  27 => 6,  21 => 2,  19 => 1,);
    }
}
/* {% if teacher %}*/
/* <div class="es-box">*/
/*   <div class="es-box-heading"><h2>名师风采</h2></div>*/
/*   <div class="es-box-body">*/
/*     <div class="promoted-teacher">*/
/*       <a href="{{ path('user_show', {id:teacher.id}) }}"><img src="{{ filepath(teacher.mediumAvatar, 'avatar.png') }}" class="avatar"></a>*/
/*       <a class="nickname" href="{{ path('user_show', {id:teacher.id}) }}">{{ teacher.nickname }}</a>*/
/*       <div class="title">{{ teacher.title }}</div>*/
/*       <div class="about">{{ teacher.about|plain_text(100) }}</div>*/
/*       <div class="more"><a href="{{ path('user_show', {id:teacher.id}) }}">去老师主页看看 &raquo;</a></div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* {% endif %}*/
