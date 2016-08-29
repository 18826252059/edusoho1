<?php

/* TopxiaWebBundle:CourseMaterial:latest-block.html.twig */
class __TwigTemplate_008ad59c0e22d9cb8dd37b4ee2f19553c15c26c665b304108c7469de4ecb6f72 extends Twig_Template
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
        $this->loadTemplate("TopxiaWebBundle:CourseMaterial:latest-block.html.twig", "TopxiaWebBundle:CourseMaterial:latest-block.html.twig", 1, "2100468225")->display($context);
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseMaterial:latest-block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}


/* TopxiaWebBundle:CourseMaterial:latest-block.html.twig */
class __TwigTemplate_008ad59c0e22d9cb8dd37b4ee2f19553c15c26c665b304108c7469de4ecb6f72_2100468225 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("TopxiaWebBundle:Bootstrap:panel.html.twig", "TopxiaWebBundle:CourseMaterial:latest-block.html.twig", 1);
        $this->blocks = array(
            'heading' => array($this, 'block_heading'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:Bootstrap:panel.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_heading($context, array $blocks = array())
    {
        // line 3
        echo "  <h2>课程资料</h2>
  ";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
  ";
        // line 7
        if ((isset($context["materials"]) ? $context["materials"] : null)) {
            // line 8
            echo "\t  <ul>
\t  ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["materials"]) ? $context["materials"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["material"]) {
                // line 10
                echo "\t    <li>
        ";
                // line 11
                if (($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()) && (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array()) == $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "userId", array())) || $this->env->getExtension('security')->isGranted("ROLE_ADMIN")))) {
                    // line 12
                    echo "          <a class=\"pull-right material-delete\" href=\"javascript:\" data-url=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_material_delete", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "materialId" => $this->getAttribute($context["material"], "id", array()))), "html", null, true);
                    echo "\">x</a>
        ";
                }
                // line 14
                echo "        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_material_download", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "materialId" => $this->getAttribute($context["material"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["material"], "title", array()), "html", null, true);
                echo "</a>
        <div class=\"text-muted\">";
                // line 15
                echo twig_escape_filter($this->env, $this->getAttribute($context["material"], "description", array()), "html", null, true);
                echo "</div>
      </li>
\t  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['material'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "\t  </ul>
  ";
        } else {
            // line 20
            echo "    <div class=\"text-muted\">此课程暂无资料</div>
  ";
        }
        // line 22
        echo "
  ";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseMaterial:latest-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 22,  113 => 20,  109 => 18,  100 => 15,  93 => 14,  87 => 12,  85 => 11,  82 => 10,  78 => 9,  75 => 8,  73 => 7,  70 => 6,  67 => 5,  62 => 3,  59 => 2,  19 => 1,);
    }
}
/* {% embed "TopxiaWebBundle:Bootstrap:panel.html.twig" %}*/
/*   {% block heading %}*/
/*   <h2>课程资料</h2>*/
/*   {% endblock %}*/
/*   {% block body %}*/
/* */
/*   {% if materials %}*/
/* 	  <ul>*/
/* 	  {% for material in materials %}*/
/* 	    <li>*/
/*         {% if app.user and (app.user.id == course.userId or is_granted('ROLE_ADMIN')) %}*/
/*           <a class="pull-right material-delete" href="javascript:" data-url="{{ path('course_material_delete', {id:course.id, materialId:material.id}) }}">x</a>*/
/*         {% endif %}*/
/*         <a href="{{ path('course_material_download', {courseId:course.id, materialId:material.id}) }}">{{ material.title }}</a>*/
/*         <div class="text-muted">{{ material.description }}</div>*/
/*       </li>*/
/* 	  {% endfor %}*/
/* 	  </ul>*/
/*   {% else %}*/
/*     <div class="text-muted">此课程暂无资料</div>*/
/*   {% endif %}*/
/* */
/*   {% endblock %}*/
/* {% endembed %}*/
