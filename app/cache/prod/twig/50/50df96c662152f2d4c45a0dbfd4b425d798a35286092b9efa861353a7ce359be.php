<?php

/* TopxiaWebBundle:Thread/Widget:user-info-modal.html.twig */
class __TwigTemplate_5aaa0da176a2ff163917b73b9c40cc069a82d49c9b10c8e02c7ea065910bc72b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "TopxiaWebBundle:Thread/Widget:user-info-modal.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::bootstrap-modal-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "加入活动";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "
  <form id=\"join-event-form\" class=\"form-horizontal\" method=\"post\" 
  action=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath(($this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "targetType", array()) . "_thread_members_become"), array("threadId" => $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "id", array()), ($this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "targetType", array()) . "Id") => $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "targetId", array()))), "html", null, true);
        echo "\"
  >

  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">

    <div class=\"form-group\">
      <label class=\"col-md-3 control-label\" for=\"truename\">真实姓名 </label>
      <div class=\"col-md-6 controls\">
          <input class=\"form-control\" id=\"truename\" type=\"text\" name=\"truename\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userProfile"]) ? $context["userProfile"] : null), "truename", array()), "html", null, true);
        echo "\">
      </div>
    </div>
    <div class=\"form-group\">
      <label class=\"col-md-3 control-label\" for=\"mobile\">手机</label>
      <div class=\"col-md-6 controls\">
        <input class=\"form-control\" id=\"mobile\" type=\"text\" name=\"mobile\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userProfile"]) ? $context["userProfile"] : null), "mobile", array()), "html", null, true);
        echo "\">
      </div>
    </div>

  </form>
";
    }

    // line 28
    public function block_footer($context, array $blocks = array())
    {
        // line 29
        echo "  
  <button class=\"btn btn-link\" data-dismiss=\"modal\">取消</button>
  <button id=\"join-event-btn\" class=\"btn btn-primary\" data-loading-text=\"正在提交\" type=\"submit\" data-toggle=\"form-submit\" data-target=\"#join-event-form\">提交</button>

  <script>
    app.load('thread/user-info-modal');
  </script>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Thread/Widget:user-info-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 29,  76 => 28,  66 => 21,  57 => 15,  49 => 10,  43 => 7,  39 => 5,  36 => 4,  30 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::bootstrap-modal-layout.html.twig' %}*/
/* */
/* {% block title %}加入活动{% endblock %}*/
/* {% block body %}*/
/* */
/*   <form id="join-event-form" class="form-horizontal" method="post" */
/*   action="{{ path(thread.targetType ~ '_thread_members_become', {threadId:thread.id, (thread.targetType ~ 'Id'):thread.targetId}) }}"*/
/*   >*/
/* */
/*   <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/* */
/*     <div class="form-group">*/
/*       <label class="col-md-3 control-label" for="truename">真实姓名 </label>*/
/*       <div class="col-md-6 controls">*/
/*           <input class="form-control" id="truename" type="text" name="truename" value="{{ userProfile.truename }}">*/
/*       </div>*/
/*     </div>*/
/*     <div class="form-group">*/
/*       <label class="col-md-3 control-label" for="mobile">手机</label>*/
/*       <div class="col-md-6 controls">*/
/*         <input class="form-control" id="mobile" type="text" name="mobile" value="{{ userProfile.mobile }}">*/
/*       </div>*/
/*     </div>*/
/* */
/*   </form>*/
/* {% endblock %}*/
/* */
/* {% block footer %}*/
/*   */
/*   <button class="btn btn-link" data-dismiss="modal">取消</button>*/
/*   <button id="join-event-btn" class="btn btn-primary" data-loading-text="正在提交" type="submit" data-toggle="form-submit" data-target="#join-event-form">提交</button>*/
/* */
/*   <script>*/
/*     app.load('thread/user-info-modal');*/
/*   </script>*/
/* {% endblock %}*/
