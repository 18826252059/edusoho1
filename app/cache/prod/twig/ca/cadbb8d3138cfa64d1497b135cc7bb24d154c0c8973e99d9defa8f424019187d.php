<?php

/* TopxiaWebBundle:Group:group-media-small.html.twig */
class __TwigTemplate_8dfb656ab647b2c36a42990424c04d0358b588c85d88fa86718774a898e3311d extends Twig_Template
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
        echo "<div class=\"col-md-4 col-sm-6\">
  <div class=\"media media-group group-media-sm\">
    <div class=\"media-left\">
      <a href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_show", array("id" => $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "id", array()))), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "title", array()), "html", null, true);
        echo "\" class=\"pull-left \">
        <img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "logo", array()), "group.png"), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "title", array()), "html", null, true);
        echo "\" class=\"avatar-square-md\" >
      </a>
    </div>
    <div class=\"media-body\">
      <div class=\"title\">
        <a class=\"gray-darker\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_show", array("id" => $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "id", array()))), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "title", array()), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('topxia_web_twig')->subTextFilter($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "title", array()), 10);
        echo "</a>
      </div>
      <div class=\"metas\">
        <span><i class=\"es-icon es-icon-people\"></i>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "memberNum", array()), "html", null, true);
        echo "</span>
        <span><i class=\"es-icon es-icon-textsms\"></i>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "threadNum", array()), "html", null, true);
        echo "</span>
      </div>
    </div> 
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Group:group-media-small.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 14,  50 => 13,  40 => 10,  30 => 5,  24 => 4,  19 => 1,);
    }
}
/* <div class="col-md-4 col-sm-6">*/
/*   <div class="media media-group group-media-sm">*/
/*     <div class="media-left">*/
/*       <a href="{{path('group_show',{id:group.id})}}" title="{{group.title}}" class="pull-left ">*/
/*         <img src="{{filepath(group.logo, 'group.png')}}" alt="{{group.title}}" class="avatar-square-md" >*/
/*       </a>*/
/*     </div>*/
/*     <div class="media-body">*/
/*       <div class="title">*/
/*         <a class="gray-darker" href="{{path('group_show',{id:group.id})}}" title="{{group.title}}">{{group.title|sub_text(10)}}</a>*/
/*       </div>*/
/*       <div class="metas">*/
/*         <span><i class="es-icon es-icon-people"></i>{{group.memberNum}}</span>*/
/*         <span><i class="es-icon es-icon-textsms"></i>{{group.threadNum}}</span>*/
/*       </div>*/
/*     </div> */
/*   </div>*/
/* </div>*/
