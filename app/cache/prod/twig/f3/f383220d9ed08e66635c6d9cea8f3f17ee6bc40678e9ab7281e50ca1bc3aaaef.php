<?php

/* TopxiaWebBundle:Thread/Event:other-events-block.html.twig */
class __TwigTemplate_793d389d8624eeccb9132d3681f6552b5f443838e6fd0f272f4a9275f37e8083 extends Twig_Template
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
        if ((twig_length_filter($this->env, (isset($context["threads"]) ? $context["threads"] : null)) >= 1)) {
            // line 2
            echo "<div class=\"panel panel-default\">
  <div class=\"panel-heading\">其他活动</div>
  <div class=\"panel-body\">
    <ul class=\"media-list\">
      ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["threads"]) ? $context["threads"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["thread"]) {
                // line 7
                echo "        <li class=\"media\">
          <div class=\"media-body\">
            <a href=\"";
                // line 9
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath(($this->getAttribute($context["thread"], "targetType", array()) . "_thread_show"), array(($this->getAttribute($context["thread"], "targetType", array()) . "Id") => $this->getAttribute($context["thread"], "targetId", array()), "threadId" => $this->getAttribute($context["thread"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["thread"], "title", array()), "html", null, true);
                echo "</a>
            <span class=\"pull-right\">";
                // line 10
                echo twig_escape_filter($this->env, $this->getAttribute($context["thread"], "memberNum", array()), "html", null, true);
                echo "人报名</span>
          </div>
        </li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['thread'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "    </ul>
  </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Thread/Event:other-events-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 14,  41 => 10,  35 => 9,  31 => 7,  27 => 6,  21 => 2,  19 => 1,);
    }
}
/* {% if threads|length >= 1 %}*/
/* <div class="panel panel-default">*/
/*   <div class="panel-heading">其他活动</div>*/
/*   <div class="panel-body">*/
/*     <ul class="media-list">*/
/*       {% for thread in threads %}*/
/*         <li class="media">*/
/*           <div class="media-body">*/
/*             <a href="{{ path( thread.targetType~'_thread_show', {(thread.targetType~'Id'):thread.targetId, threadId: thread.id}) }}">{{ thread.title }}</a>*/
/*             <span class="pull-right">{{ thread.memberNum }}人报名</span>*/
/*           </div>*/
/*         </li>*/
/*       {% endfor %}*/
/*     </ul>*/
/*   </div>*/
/* </div>*/
/* {% endif %}*/
