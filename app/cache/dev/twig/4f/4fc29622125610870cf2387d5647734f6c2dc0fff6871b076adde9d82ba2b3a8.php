<?php

/* TopxiaWebBundle:Message:index.html.twig */
class __TwigTemplate_76e7226a8f1d742fe8ed796d5d321270e0c4bbbd8161b2acda6ec9515239b686 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "TopxiaWebBundle:Message:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 4
        $context["script_controller"] = "message/conversation-list";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "私信 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "<div class=\"row row-8\">
  <div class=\"col-md-8 col-md-offset-2\">
    <div class=\"panel panel-default panel-page\">
      <div class=\"panel-heading\">
        <a class=\"btn btn-primary pull-right\" href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("message_send");
        echo "\">写私信</a>
        <h2>私信</h2>
      </div>

      <ul class=\"media-list conversation-list\">
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["conversations"]) ? $context["conversations"] : $this->getContext($context, "conversations")));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["_key"] => $context["conversation"]) {
            // line 17
            echo "          ";
            $context["fromUser"] = $this->getAttribute((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")), $this->getAttribute($context["conversation"], "fromId", array()), array(), "array");
            // line 18
            echo "          ";
            $this->loadTemplate((("TopxiaWebBundle:Message/Template:conversation-" . $this->getAttribute($context["conversation"], "latestMessageType", array())) . ".tpl.html.twig"), "TopxiaWebBundle:Message:index.html.twig", 18)->display($context);
            // line 19
            echo "        ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 20
            echo "          <li class=\"empty\">暂无私信</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['conversation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "      </ul>

      ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : $this->getContext($context, "web_macro")), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator"))), "method"), "html", null, true);
        echo "

    </div><!-- /panel -->
  </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Message:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 24,  100 => 22,  93 => 20,  80 => 19,  77 => 18,  74 => 17,  56 => 16,  48 => 11,  42 => 7,  39 => 6,  32 => 3,  28 => 1,  26 => 4,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::layout.html.twig' %}*/
/* */
/* {% block title %}私信 - {{ parent() }}{% endblock %}*/
/* {% set script_controller = 'message/conversation-list' %}*/
/* */
/* {% block content %}*/
/* <div class="row row-8">*/
/*   <div class="col-md-8 col-md-offset-2">*/
/*     <div class="panel panel-default panel-page">*/
/*       <div class="panel-heading">*/
/*         <a class="btn btn-primary pull-right" href="{{ path('message_send') }}">写私信</a>*/
/*         <h2>私信</h2>*/
/*       </div>*/
/* */
/*       <ul class="media-list conversation-list">*/
/*         {% for conversation in conversations %}*/
/*           {% set fromUser = users[conversation.fromId] %}*/
/*           {% include 'TopxiaWebBundle:Message/Template:conversation-' ~ conversation.latestMessageType ~ '.tpl.html.twig' %}*/
/*         {% else %}*/
/*           <li class="empty">暂无私信</li>*/
/*         {% endfor %}*/
/*       </ul>*/
/* */
/*       {{ web_macro.paginator(paginator) }}*/
/* */
/*     </div><!-- /panel -->*/
/*   </div>*/
/* </div>*/
/* */
/* {% endblock %}*/
