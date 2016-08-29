<?php

/* TopxiaWebBundle:Article/Widget:tag-sidebar.html.twig */
class __TwigTemplate_951724f8bdccac2a913a4d159c87ac76dcc45a638af3b0b857e656cb01a6562c extends Twig_Template
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
        $context["tags"] = $this->env->getExtension('topxia_data_twig')->getData("Tags", array("count" => 12));
        // line 2
        if ((isset($context["tags"]) ? $context["tags"] : null)) {
            // line 3
            echo "  <div class=\"panel panel-default hot-tag\">
    <div class=\"panel-heading\">
      <h3 class=\"panel-title\"><i class=\"es-icon es-icon-loyalty\"></i>热门标签</h3>
    </div>
    <div class=\"panel-body\">
      ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tags"]) ? $context["tags"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 9
                echo "        ";
                if ($context["tag"]) {
                    echo " 
          <a class=\"btn-tag\" href=\"";
                    // line 10
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_tag_show", array("name" => $this->getAttribute($context["tag"], "name", array()))), "html", null, true);
                    echo "\"> ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "name", array()), "html", null, true);
                    echo "</a>
        ";
                }
                // line 12
                echo "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "    </div>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Article/Widget:tag-sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 13,  46 => 12,  39 => 10,  34 => 9,  30 => 8,  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% set tags = data('Tags',{'count':12}) %}*/
/* {% if tags %}*/
/*   <div class="panel panel-default hot-tag">*/
/*     <div class="panel-heading">*/
/*       <h3 class="panel-title"><i class="es-icon es-icon-loyalty"></i>热门标签</h3>*/
/*     </div>*/
/*     <div class="panel-body">*/
/*       {% for tag in tags %}*/
/*         {% if tag %} */
/*           <a class="btn-tag" href="{{ path('article_tag_show', {name:tag.name}) }}"> {{ tag.name }}</a>*/
/*         {% endif %}*/
/*       {% endfor %}*/
/*     </div>*/
/*   </div>*/
/* {% endif %}*/
