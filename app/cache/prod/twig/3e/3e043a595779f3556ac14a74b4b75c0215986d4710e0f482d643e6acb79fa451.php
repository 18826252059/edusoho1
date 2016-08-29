<?php

/* TopxiaWebBundle:Group:new-group-list.html.twig */
class __TwigTemplate_1972cec4704b5b6298a05cfe570214b57770b2a0226d51d0f8c1a750727e0aee extends Twig_Template
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
        if ((isset($context["newGroups"]) ? $context["newGroups"] : null)) {
            // line 2
            echo "  <div class=\"panel panel-default\">
    <div class=\"panel-heading\"><h3 class=\"panel-title\">新晋小组</h3></div>
    <div class=\"panel-body\">
      <div class=\"media-group-list\">
        ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["newGroups"]) ? $context["newGroups"] : null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 7
                echo "          ";
                if (($this->getAttribute($context["loop"], "index", array()) <= 3)) {
                    // line 8
                    echo "          <div class=\"media media-group\">
            <div class=\"media-left\">
              <a href=\"";
                    // line 10
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_show", array("id" => $this->getAttribute($context["group"], "id", array()))), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "title", array()), "html", null, true);
                    echo "\">
                <img src=\"";
                    // line 11
                    echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute($context["group"], "logo", array()), "group.png"), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "title", array()), "html", null, true);
                    echo "\" class=\"avatar-square-md\">
              </a>
            </div>
            <div class=\"media-body\">
              <div class=\"title\">
                <a class=\"gray-darker\" href=\"";
                    // line 16
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_show", array("id" => $this->getAttribute($context["group"], "id", array()))), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "title", array()), "html", null, true);
                    echo "\">";
                    echo $this->env->getExtension('topxia_web_twig')->subTextFilter($this->getAttribute($context["group"], "title", array()), 9);
                    echo "</a>
              </div>
              <div class=\"metas\">
                <span><i class=\"es-icon es-icon-people\"></i>";
                    // line 19
                    echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "memberNum", array()), "html", null, true);
                    echo "</span>
                <span><i class=\"es-icon es-icon-textsms\"></i>";
                    // line 20
                    echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "threadNum", array()), "html", null, true);
                    echo "</span>
              </div>
            </div>
          </div>
          ";
                }
                // line 25
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "      </div>
    </div>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Group:new-group-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 26,  89 => 25,  81 => 20,  77 => 19,  67 => 16,  57 => 11,  51 => 10,  47 => 8,  44 => 7,  27 => 6,  21 => 2,  19 => 1,);
    }
}
/* {% if newGroups %}*/
/*   <div class="panel panel-default">*/
/*     <div class="panel-heading"><h3 class="panel-title">新晋小组</h3></div>*/
/*     <div class="panel-body">*/
/*       <div class="media-group-list">*/
/*         {% for group in newGroups %}*/
/*           {% if loop.index <= 3 %}*/
/*           <div class="media media-group">*/
/*             <div class="media-left">*/
/*               <a href="{{path('group_show',{id:group.id})}}" title="{{group.title}}">*/
/*                 <img src="{{filepath(group.logo, 'group.png')}}" alt="{{group.title}}" class="avatar-square-md">*/
/*               </a>*/
/*             </div>*/
/*             <div class="media-body">*/
/*               <div class="title">*/
/*                 <a class="gray-darker" href="{{path('group_show',{id:group.id})}}" title="{{group.title}}">{{group.title|sub_text(9)}}</a>*/
/*               </div>*/
/*               <div class="metas">*/
/*                 <span><i class="es-icon es-icon-people"></i>{{ group.memberNum }}</span>*/
/*                 <span><i class="es-icon es-icon-textsms"></i>{{ group.threadNum }}</span>*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/*           {% endif %}*/
/*         {% endfor %}*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* {% endif %}*/
