<?php

/* TopxiaWebBundle:Thread:user-threads-block.html.twig */
class __TwigTemplate_3b246097900e76663215c12e5b66ca61729c50756b764a92b34d212f2789726a extends Twig_Template
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
        if (((twig_length_filter($this->env, (isset($context["threads"]) ? $context["threads"] : null)) > 1) || ((twig_length_filter($this->env, (isset($context["threads"]) ? $context["threads"] : null)) == 1) && ($this->getAttribute($this->getAttribute((isset($context["threads"]) ? $context["threads"] : null), 0, array(), "array"), "id", array()) != $this->getAttribute((isset($context["currentThread"]) ? $context["currentThread"] : null), "id", array()))))) {
            // line 2
            echo "<div class=\"panel panel-default\">
  <div class=\"panel-heading\">作者其他话题</div>
  <div class=\"panel-body\">
    <ul class=\"media-list\">
      ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["threads"]) ? $context["threads"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["thread"]) {
                // line 7
                echo "        ";
                if (($this->getAttribute($context["thread"], "id", array()) != $this->getAttribute((isset($context["currentThread"]) ? $context["currentThread"] : null), "id", array()))) {
                    // line 8
                    echo "          <li class=\"media\">
            <div class=\"media-body\">
              <a href=\"";
                    // line 10
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath(($this->getAttribute($context["thread"], "targetType", array()) . "_thread_show"), array(($this->getAttribute($context["thread"], "targetType", array()) . "Id") => $this->getAttribute($context["thread"], "targetId", array()), "threadId" => $this->getAttribute($context["thread"], "id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["thread"], "title", array()), "html", null, true);
                    echo "</a>
            </div>
          </li>
        ";
                }
                // line 14
                echo "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['thread'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "    </ul>
  </div>
</div>

";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Thread:user-threads-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 15,  47 => 14,  38 => 10,  34 => 8,  31 => 7,  27 => 6,  21 => 2,  19 => 1,);
    }
}
/* {% if threads|length > 1 or (threads|length == 1 and threads[0].id != currentThread.id) %}*/
/* <div class="panel panel-default">*/
/*   <div class="panel-heading">作者其他话题</div>*/
/*   <div class="panel-body">*/
/*     <ul class="media-list">*/
/*       {% for thread in threads %}*/
/*         {% if thread.id != currentThread.id %}*/
/*           <li class="media">*/
/*             <div class="media-body">*/
/*               <a href="{{ path( thread.targetType~'_thread_show', {(thread.targetType~'Id'):thread.targetId, threadId: thread.id}) }}">{{ thread.title }}</a>*/
/*             </div>*/
/*           </li>*/
/*         {% endif %}*/
/*       {% endfor %}*/
/*     </ul>*/
/*   </div>*/
/* </div>*/
/* */
/* {% endif %}*/
