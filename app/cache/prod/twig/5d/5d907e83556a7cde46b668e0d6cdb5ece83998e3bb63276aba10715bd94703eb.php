<?php

/* TopxiaWebBundle:Group:group-search-result.html.twig */
class __TwigTemplate_bee49e1496fd1ef145a91983d7216e3db81b24ace39cb5e84c1cba45701ad297 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:Group:layout.html.twig", "TopxiaWebBundle:Group:group-search-result.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'group_body' => array($this, 'block_group_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:Group:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["script_controller"] = "group/group_member";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["groupinfo"]) ? $context["groupinfo"] : null), "title", array()), "html", null, true);
        echo "小组 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 5
    public function block_group_body($context, array $blocks = array())
    {
        // line 6
        echo "  <div class=\"panel panel-default\">
    <div class=\"panel-heading\">
      <h2 class=\"panel-title\">话题搜索</h2>
      <form  class=\"form-inline more hidden-xs\" style=\"top:7px\" action=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_search", array("id" => $this->getAttribute((isset($context["groupinfo"]) ? $context["groupinfo"] : null), "id", array()))), "html", null, true);
        echo "\" method=\"get\">
        <div class=\"search-with-btn search-sm\">
          <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
          <input type=\"text\" class=\"form-control\" placeholder=\"组内搜索\" name=\"keyWord\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, ((array_key_exists("keyWord", $context)) ? (_twig_default_filter((isset($context["keyWord"]) ? $context["keyWord"] : null), "")) : ("")), "html", null, true);
        echo "\">
          <button class=\"btn btn-default\" type=\"submit\"><span class=\"glyphicon glyphicon-search\"></span></button>
        </div>
      </form>
    </div>

    <div class=\"panel-body\">
      <div class=\"row\">
        <div class=\"col-md-8\">
          ";
        // line 21
        $this->loadTemplate("TopxiaWebBundle:Group:groups-threads-ul.html.twig", "TopxiaWebBundle:Group:group-search-result.html.twig", 21)->display(array_merge($context, array("threads" =>         // line 22
(isset($context["threads"]) ? $context["threads"] : null), "users" =>         // line 23
(isset($context["owner"]) ? $context["owner"] : null), "lastPostMembers" =>         // line 24
(isset($context["lastPostMembers"]) ? $context["lastPostMembers"] : null))));
        // line 26
        echo "          <div class=\"text-center\">
            ";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo "
          </div>
        </div>
      </div>
    </div>
  </div>

";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Group:group-search-result.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 27,  74 => 26,  72 => 24,  71 => 23,  70 => 22,  69 => 21,  57 => 12,  53 => 11,  48 => 9,  43 => 6,  40 => 5,  32 => 3,  28 => 1,  26 => 2,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle:Group:layout.html.twig' %}*/
/* {% set script_controller = 'group/group_member' %}*/
/* {% block title %}{{groupinfo.title}}小组 - {{ parent() }}{% endblock %}*/
/* */
/* {% block group_body %}*/
/*   <div class="panel panel-default">*/
/*     <div class="panel-heading">*/
/*       <h2 class="panel-title">话题搜索</h2>*/
/*       <form  class="form-inline more hidden-xs" style="top:7px" action="{{path('group_search',{id:groupinfo.id})}}" method="get">*/
/*         <div class="search-with-btn search-sm">*/
/*           <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/*           <input type="text" class="form-control" placeholder="组内搜索" name="keyWord" value="{{keyWord|default('')}}">*/
/*           <button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search"></span></button>*/
/*         </div>*/
/*       </form>*/
/*     </div>*/
/* */
/*     <div class="panel-body">*/
/*       <div class="row">*/
/*         <div class="col-md-8">*/
/*           {% include 'TopxiaWebBundle:Group:groups-threads-ul.html.twig' with {*/
/*           'threads':threads,*/
/*           'users':owner,*/
/*           'lastPostMembers':lastPostMembers,}*/
/*           %}*/
/*           <div class="text-center">*/
/*             {{ web_macro.paginator(paginator) }}*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* */
/* {% endblock %}*/
/* */
