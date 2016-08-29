<?php

/* TopxiaWebBundle:Notification:index.html.twig */
class __TwigTemplate_778c2c5cf51772ef484a8427c8f29090508e70015e4e28eb51504cadc0629d0d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "TopxiaWebBundle:Notification:index.html.twig", 1);
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
        $context["script_controller"] = "message/notification-list";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "通知 - ";
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
        <h2> 通知 </h2>
      </div>

      <ul class=\"media-list notification-list\">
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["notifications"]) ? $context["notifications"] : $this->getContext($context, "notifications")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["notification"]) {
            // line 16
            echo "          ";
            $context["notification"] = $this->env->getExtension('topxia_web_twig')->renderNotification($context["notification"]);
            // line 17
            echo "          ";
            echo $this->getAttribute($context["notification"], "message", array());
            echo "
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 19
            echo "          <li class=\"empty\">暂无通知</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notification'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "      </ul>

      ";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : $this->getContext($context, "web_macro")), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator"))), "method"), "html", null, true);
        echo "

    </div><!-- /panel -->
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Notification:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 23,  75 => 21,  68 => 19,  60 => 17,  57 => 16,  52 => 15,  42 => 7,  39 => 6,  32 => 3,  28 => 1,  26 => 4,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::layout.html.twig' %}*/
/* */
/* {% block title %}通知 - {{ parent() }}{% endblock %}*/
/* {% set script_controller = 'message/notification-list' %}*/
/* */
/* {% block content %}*/
/* <div class="row row-8">*/
/*   <div class="col-md-8 col-md-offset-2">*/
/*     <div class="panel panel-default panel-page">*/
/*       <div class="panel-heading">*/
/*         <h2> 通知 </h2>*/
/*       </div>*/
/* */
/*       <ul class="media-list notification-list">*/
/*         {% for notification in notifications %}*/
/*           {% set notification = render_notification(notification) %}*/
/*           {{ notification.message|raw }}*/
/*         {% else %}*/
/*           <li class="empty">暂无通知</li>*/
/*         {% endfor %}*/
/*       </ul>*/
/* */
/*       {{ web_macro.paginator(paginator) }}*/
/* */
/*     </div><!-- /panel -->*/
/*   </div>*/
/* </div>*/
/* {% endblock %}*/
