<?php

/* TopxiaWebBundle:Message:conversation-show.html.twig */
class __TwigTemplate_1348024610b2867e9ab6a459b031c7777041ac1d3a50b2022660478e79bd05b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "TopxiaWebBundle:Message:conversation-show.html.twig", 1);
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
        $context["script_controller"] = "message/show";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "私信 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
<div class=\"row row-8\">
  <div class=\"col-md-8 col-md-offset-2\">
    <div class=\"panel panel-default panel-page\">
      <div class=\"panel-heading\">
        <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("message");
        echo "\" class=\"btn btn-default pull-right\">返回我的私信</a>
        <h2>与";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["receiver"]) ? $context["receiver"] : null), "nickname", array()), "html", null, true);
        echo "的私信对话</h2>
      </div>

      <form id=\"message-reply-form\" class=\"message-reply-form clearfix\" method=\"post\" 
      action=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("message_conversation_show", array("conversationId" => $this->getAttribute((isset($context["conversation"]) ? $context["conversation"] : null), "id", array()))), "html", null, true);
        echo "\">
        <div class=\"form-group\">
          ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "content", array()), 'widget', array("attr" => array("class" => "form-control", "rows" => 3, "placeholder" => "请输入私信内容")));
        echo "
        </div>

        <div class=\"form-group\">
          ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "
          <button id=\"course-reply-btn\" class=\"btn btn-primary pull-right disabled\">发送</button>
        </div>

        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
      </form>

      <ul class=\"media-list message-list\">
        ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) ? $context["messages"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 31
            echo "          ";
            $this->loadTemplate((("TopxiaWebBundle:Message/Template:message-item-" . $this->getAttribute($context["message"], "type", array())) . ".tpl.html.twig"), "TopxiaWebBundle:Message:conversation-show.html.twig", 31)->display($context);
            // line 32
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "      </ul>

      ";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo "

    </div><!-- /panel -->
  </div>
</div>


";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Message:conversation-show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 35,  120 => 33,  106 => 32,  103 => 31,  86 => 30,  79 => 26,  72 => 22,  65 => 18,  60 => 16,  53 => 12,  49 => 11,  42 => 6,  39 => 5,  32 => 3,  28 => 1,  26 => 4,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::layout.html.twig' %}*/
/* */
/* {% block title %}私信 - {{ parent() }}{% endblock %}*/
/* {% set script_controller = 'message/show' %}*/
/* {% block content %}*/
/* */
/* <div class="row row-8">*/
/*   <div class="col-md-8 col-md-offset-2">*/
/*     <div class="panel panel-default panel-page">*/
/*       <div class="panel-heading">*/
/*         <a href="{{ path('message')}}" class="btn btn-default pull-right">返回我的私信</a>*/
/*         <h2>与{{ receiver.nickname }}的私信对话</h2>*/
/*       </div>*/
/* */
/*       <form id="message-reply-form" class="message-reply-form clearfix" method="post" */
/*       action="{{ path('message_conversation_show', {conversationId:conversation.id}) }}">*/
/*         <div class="form-group">*/
/*           {{ form_widget(form.content, {attr:{class:'form-control', rows:3, placeholder:'请输入私信内容'}}) }}*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*           {{ form_rest(form) }}*/
/*           <button id="course-reply-btn" class="btn btn-primary pull-right disabled">发送</button>*/
/*         </div>*/
/* */
/*         <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/*       </form>*/
/* */
/*       <ul class="media-list message-list">*/
/*         {% for message in messages %}*/
/*           {% include 'TopxiaWebBundle:Message/Template:message-item-' ~ message.type ~ '.tpl.html.twig' %}*/
/*         {% endfor %}*/
/*       </ul>*/
/* */
/*       {{ web_macro.paginator(paginator) }}*/
/* */
/*     </div><!-- /panel -->*/
/*   </div>*/
/* </div>*/
/* */
/* */
/* {% endblock %}*/
