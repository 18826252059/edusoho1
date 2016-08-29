<?php

/* TopxiaWebBundle:Group:hot-thread.html.twig */
class __TwigTemplate_0e333e27573ee69504caa5d792ccd42db3aedca61fff10d4ad3da70ceaa07dcb extends Twig_Template
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
        echo "<ul class=\"text-list\">
    ";
        // line 2
        if ((isset($context["hotThreads"]) ? $context["hotThreads"] : null)) {
            // line 3
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["hotThreads"]) ? $context["hotThreads"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["thread"]) {
                // line 4
                echo "        <li style=\"border-bottom:none;background:url('";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/default/triangle.png"), "html", null, true);
                echo "') no-repeat 0 3px;padding-left:8px;padding-top:0px;margin-bottom:8px;\"><a  href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_thread_show", array("id" => $this->getAttribute($context["thread"], "groupId", array()), "threadId" => $this->getAttribute($context["thread"], "id", array()))), "html", null, true);
                echo "\">";
                echo $this->env->getExtension('topxia_web_twig')->subTextFilter($this->getAttribute($context["thread"], "title", array()), ((array_key_exists("textNum", $context)) ? (_twig_default_filter((isset($context["textNum"]) ? $context["textNum"] : null), "15")) : ("15")));
                echo "</a></li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['thread'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 6
            echo "    ";
        } else {
            // line 7
            echo "        <div class=\"empty\">暂无话题信息！</div>
    ";
        }
        // line 9
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Group:hot-thread.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 9,  45 => 7,  42 => 6,  29 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }
}
/* <ul class="text-list">*/
/*     {% if hotThreads %}*/
/*         {% for thread in hotThreads %}*/
/*         <li style="border-bottom:none;background:url('{{asset('assets/img/default/triangle.png')}}') no-repeat 0 3px;padding-left:8px;padding-top:0px;margin-bottom:8px;"><a  href="{{path('group_thread_show',{id:thread.groupId,threadId:thread.id})}}">{{thread.title|sub_text(textNum|default('15'))}}</a></li>*/
/*         {% endfor %}*/
/*     {% else %}*/
/*         <div class="empty">暂无话题信息！</div>*/
/*     {% endif %}*/
/* </ul>*/
