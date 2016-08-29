<?php

/* TopxiaWebBundle:Notification:batch-notification-show.html.twig */
class __TwigTemplate_fd8e04cffe74ddbb7a326270340dcbacd8764de1c6d60e81c3ee847515920d8b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "TopxiaWebBundle:Notification:batch-notification-show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::bootstrap-modal-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["notification"] = ((array_key_exists("notification", $context)) ? (_twig_default_filter((isset($context["notification"]) ? $context["notification"] : null), null)) : (null));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "系统通知";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "<div class=\"row\"> 
  <div class=\"col-md-10 col-md-offset-1\"> 
    ";
        // line 10
        if ((isset($context["batchnotification"]) ? $context["batchnotification"] : null)) {
            // line 11
            echo "      <h2 style=\"margin-top:0\">
        ";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["batchnotification"]) ? $context["batchnotification"] : null), "title", array()), "html", null, true);
            echo " 
      </h2>
      <p class=\"text-muted\">
        发布时间 ：";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->dateformatFilter($this->getAttribute((isset($context["batchnotification"]) ? $context["batchnotification"] : null), "sendedTime", array())), "html", null, true);
            echo "  
      </p> 
      <div class=\"editor-text\"> 
        ";
            // line 18
            echo $this->getAttribute((isset($context["batchnotification"]) ? $context["batchnotification"] : null), "content", array());
            echo " 
      </div> 
    ";
        } else {
            // line 20
            echo " 
      <div class=\"empty\">通知已经被管理员删除</div> 
    ";
        }
        // line 22
        echo " 
  </div> 
</div> 
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Notification:batch-notification-show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 22,  68 => 20,  62 => 18,  56 => 15,  50 => 12,  47 => 11,  45 => 10,  41 => 8,  38 => 7,  32 => 3,  28 => 1,  26 => 5,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::bootstrap-modal-layout.html.twig' %}*/
/* */
/* {% block title %}系统通知{% endblock %}*/
/* */
/* {% set notification = notification|default(null) %}*/
/* */
/* {% block body %}*/
/* <div class="row"> */
/*   <div class="col-md-10 col-md-offset-1"> */
/*     {% if batchnotification %}*/
/*       <h2 style="margin-top:0">*/
/*         {{ batchnotification.title }} */
/*       </h2>*/
/*       <p class="text-muted">*/
/*         发布时间 ：{{ batchnotification.sendedTime|date_format }}  */
/*       </p> */
/*       <div class="editor-text"> */
/*         {{ batchnotification.content|raw }} */
/*       </div> */
/*     {% else %} */
/*       <div class="empty">通知已经被管理员删除</div> */
/*     {% endif %} */
/*   </div> */
/* </div> */
/* {% endblock %}*/
/* */
