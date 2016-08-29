<?php

/* TopxiaWebBundle:Message:create.html.twig */
class __TwigTemplate_b6272bc222f2f5987e7911c21a97ec0fb718cee2089fdcc3b2acca278c912f5c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "TopxiaWebBundle:Message:create.html.twig", 1);
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
        $context["script_controller"] = "message/create";
        // line 6
        $context["script_arguments"] = array("followingMatchByNickname" => $this->env->getExtension('routing')->getPath("following_match_bynickname"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "写私信 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        // line 12
        echo "<style>

.ui-autocomplete {
    border:1px solid #ccc;
    background-color: #FFFFFF;
    box-shadow: 2px 2px 3px #EEEEEE;
}
.ui-autocomplete-ctn{
    margin:0;
    padding:0;
}
.ui-autocomplete-item {
    width: 180px;
    overflow:hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
    line-height: 30px;
    padding:0 10px 0 10px;
    cursor: default;
}
.ui-autocomplete-item-hover {
    background:#f2f2f2;
}
.ui-autocomplete-item-hl {
    background:#F6FF94;
}

</style>
<div class=\"row row-8\">
  <div class=\"col-md-8 col-md-offset-2\">
    <div class=\"panel panel-default panel-page\">
      <div class=\"panel-heading\">
        <a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("message");
        echo "\" class=\"btn btn-default pull-right\">返回我的私信</a>
        <h2>写私信</h2>
      </div>

      <form id=\"message-create-form\" class=\"form-horizontal\" method=\"post\">

        <div class=\"form-group\">
          <div class=\"col-md-12 controls\">
            ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "receiver", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "收信人用户名", "data-auto-url" => $this->getAttribute((isset($context["script_arguments"]) ? $context["script_arguments"] : null), "followingMatchByNickname", array()), "data-url" => $this->env->getExtension('routing')->getPath("message_check_receiver"), "data-display" => "收信人用户名")));
        echo "
          </div>
        </div>

        <div class=\"form-group\">
          <div class=\"col-md-12 controls\">
            ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "content", array()), 'widget', array("attr" => array("class" => "form-control", "rows" => 5, "placeholder" => "想要说的话", "data-display" => "想要说的话")));
        echo "
          </div>
        </div>

        <div class=\"form-group\">
          <div class=\"col-md-12 controls\">
            ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "
            <input id=\"message-create-btn\" class=\"btn btn-primary pull-right\" type=\"submit\" value=\"发送\">
          </div>
        </div>

        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
      </form>


    </div><!-- /panel -->
  </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Message:create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 69,  107 => 64,  98 => 58,  89 => 52,  78 => 44,  44 => 12,  41 => 11,  34 => 3,  30 => 1,  28 => 6,  26 => 4,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::layout.html.twig' %}*/
/* */
/* {% block title %}写私信 - {{ parent() }}{% endblock %}*/
/* {% set script_controller = 'message/create' %}*/
/* {% */
/*   set script_arguments = {*/
/*     followingMatchByNickname: path('following_match_bynickname')*/
/*   } */
/* %}*/
/* */
/* {% block content %}*/
/* <style>*/
/* */
/* .ui-autocomplete {*/
/*     border:1px solid #ccc;*/
/*     background-color: #FFFFFF;*/
/*     box-shadow: 2px 2px 3px #EEEEEE;*/
/* }*/
/* .ui-autocomplete-ctn{*/
/*     margin:0;*/
/*     padding:0;*/
/* }*/
/* .ui-autocomplete-item {*/
/*     width: 180px;*/
/*     overflow:hidden;*/
/*     text-overflow: ellipsis;*/
/*     white-space: nowrap;*/
/*     line-height: 30px;*/
/*     padding:0 10px 0 10px;*/
/*     cursor: default;*/
/* }*/
/* .ui-autocomplete-item-hover {*/
/*     background:#f2f2f2;*/
/* }*/
/* .ui-autocomplete-item-hl {*/
/*     background:#F6FF94;*/
/* }*/
/* */
/* </style>*/
/* <div class="row row-8">*/
/*   <div class="col-md-8 col-md-offset-2">*/
/*     <div class="panel panel-default panel-page">*/
/*       <div class="panel-heading">*/
/*         <a href="{{ path('message')}}" class="btn btn-default pull-right">返回我的私信</a>*/
/*         <h2>写私信</h2>*/
/*       </div>*/
/* */
/*       <form id="message-create-form" class="form-horizontal" method="post">*/
/* */
/*         <div class="form-group">*/
/*           <div class="col-md-12 controls">*/
/*             {{ form_widget(form.receiver, {attr:{class:'form-control', placeholder:'收信人用户名', 'data-auto-url':script_arguments.followingMatchByNickname, 'data-url':path('message_check_receiver'), 'data-display':'收信人用户名'}})  }}*/
/*           </div>*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*           <div class="col-md-12 controls">*/
/*             {{ form_widget(form.content, {attr:{class:'form-control', rows:5, placeholder:'想要说的话', 'data-display': '想要说的话'}}) }}*/
/*           </div>*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*           <div class="col-md-12 controls">*/
/*             {{ form_rest(form) }}*/
/*             <input id="message-create-btn" class="btn btn-primary pull-right" type="submit" value="发送">*/
/*           </div>*/
/*         </div>*/
/* */
/*         <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/*       </form>*/
/* */
/* */
/*     </div><!-- /panel -->*/
/*   </div>*/
/* </div>*/
/* */
/* {% endblock %}*/
