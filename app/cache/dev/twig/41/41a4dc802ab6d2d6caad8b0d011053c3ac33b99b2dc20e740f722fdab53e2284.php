<?php

/* TopxiaWebBundle:Course:Part/normal-header-layout.html.twig */
class __TwigTemplate_50e09335bea8268a83bcc8b7b9d0ca0f7f4cd4ba3df7fccd14622dfbe522404e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'before_content' => array($this, 'block_before_content'),
            'content' => array($this, 'block_content'),
            'after_content' => array($this, 'block_after_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<section class=\"course-detail-header ";
        echo twig_escape_filter($this->env, ((array_key_exists("layoutClass", $context)) ? (_twig_default_filter((isset($context["layoutClass"]) ? $context["layoutClass"] : $this->getContext($context, "layoutClass")), "")) : ("")), "html", null, true);
        echo "\">
  <div class=\"container\">
    
    ";
        // line 4
        $this->displayBlock('before_content', $context, $blocks);
        // line 5
        echo "
    <div class=\"es-section clearfix\">
      ";
        // line 7
        $this->displayBlock('content', $context, $blocks);
        // line 8
        echo "
      ";
        // line 9
        if ((((($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "role", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "role", array()), "")) : ("")) == "teacher") || $this->env->getExtension('security')->isGranted("ROLE_ADMIN"))) {
            // line 10
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-default setting hidden-xs hidden-sm\" title=\"课程管理\">
          <i class=\"es-icon es-icon-setting\"></i>
        </a>
      ";
        }
        // line 14
        echo "    </div>
  </div>
</section>

";
        // line 18
        $this->displayBlock('after_content', $context, $blocks);
        // line 19
        echo "

";
    }

    // line 4
    public function block_before_content($context, array $blocks = array())
    {
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
    }

    // line 18
    public function block_after_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:Part/normal-header-layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 18,  69 => 7,  64 => 4,  58 => 19,  56 => 18,  50 => 14,  42 => 10,  40 => 9,  37 => 8,  35 => 7,  31 => 5,  29 => 4,  22 => 1,);
    }
}
/* <section class="course-detail-header {{ layoutClass|default('') }}">*/
/*   <div class="container">*/
/*     */
/*     {% block before_content %}{% endblock %}*/
/* */
/*     <div class="es-section clearfix">*/
/*       {% block content %}{% endblock %}*/
/* */
/*       {% if member.role|default('') == 'teacher' or is_granted('ROLE_ADMIN') %}*/
/*         <a href="{{ path('course_manage', {id:course.id}) }}" class="btn btn-default setting hidden-xs hidden-sm" title="课程管理">*/
/*           <i class="es-icon es-icon-setting"></i>*/
/*         </a>*/
/*       {% endif %}*/
/*     </div>*/
/*   </div>*/
/* </section>*/
/* */
/* {% block after_content %}{% endblock %}*/
/* */
/* */
/* */
