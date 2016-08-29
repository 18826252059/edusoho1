<?php

/* TopxiaAdminBundle:CommonAdmin:li.html.twig */
class __TwigTemplate_f4f8973c7dddf185e9476e5efb263af2027b62fa59aaa082a0f90c2fdcbfe5de extends Twig_Template
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
        echo "<li class=\"shortcut-item clearfix\">
  <a href=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "url", array()), "html", null, true);
        echo "\">
    <i class=\"glyphicon glyphicon-bookmark text-info\"></i>
    ";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "title", array()), "html", null, true);
        echo "
  </a>
  <span class=\"glyphicon glyphicon-remove-circle text-muted\" data-url=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_common_remove", array("id" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "id", array()))), "html", null, true);
        echo "\" title=\"删除常用链接\"></span>
</li>";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:CommonAdmin:li.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 6,  27 => 4,  22 => 2,  19 => 1,);
    }
}
/* <li class="shortcut-item clearfix">*/
/*   <a href="{{admin.url}}">*/
/*     <i class="glyphicon glyphicon-bookmark text-info"></i>*/
/*     {{admin.title}}*/
/*   </a>*/
/*   <span class="glyphicon glyphicon-remove-circle text-muted" data-url="{{ path('admin_common_remove', {id:admin.id}) }}" title="删除常用链接"></span>*/
/* </li>*/
