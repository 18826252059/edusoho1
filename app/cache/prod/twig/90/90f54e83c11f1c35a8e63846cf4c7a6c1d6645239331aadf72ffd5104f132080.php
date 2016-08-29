<?php

/* TopxiaWebBundle:Group:index.html.twig */
class __TwigTemplate_d4fd16bee432b72bd5b9148878895ffd44f89041f4739276058430236530bee1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:Group:layout.html.twig", "TopxiaWebBundle:Group:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:Group:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "小组 ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "  <ol class=\"breadcrumb breadcrumb-o\" style=\"margin-top:-18px\">
    <li><a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("homepage.name", "首页"), "html", null, true);
        echo "</a></li>
    <li class=\"active\"><a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("group");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("group.name", "小组主页"), "html", null, true);
        echo "</a></li>
  </ol>
  <div class=\"row\">
    <div class=\"col-md-9\">
      <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
          <h3 class=\"panel-title\">热门小组</h3>
          <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("group_search_group");
        echo "\" class=\"more\"><i class=\"es-icon es-icon-morehoriz\"></i></a>
        </div>
        <div class=\"panel-body\">
          <div class=\"row media-group-list\">
            ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["activeGroup"]) ? $context["activeGroup"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 18
            echo "              <div class=\"media media-group col-md-4 col-sm-4\">
                <div class=\"media-left\">
                  <a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_show", array("id" => $this->getAttribute($context["group"], "id", array()))), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "title", array()), "html", null, true);
            echo "\">
                    <img src=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute($context["group"], "logo", array()), "group.png"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "title", array()), "html", null, true);
            echo "\" class=\"avatar-square-md\">
                  </a>
                </div>
                <div class=\"media-body\">
                  <div class=\"title\">
                    <a class=\"gray-darker\" href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_show", array("id" => $this->getAttribute($context["group"], "id", array()))), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "title", array()), "html", null, true);
            echo "\">
                      ";
            // line 27
            echo $this->env->getExtension('topxia_web_twig')->subTextFilter($this->getAttribute($context["group"], "title", array()), 9);
            echo "
                    </a>
                  </div>
                  <div class=\"metas\">
                    <span><i class=\"es-icon es-icon-people\"></i>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "memberNum", array()), "html", null, true);
            echo "</span>
                    <span><i class=\"es-icon es-icon-textsms\"></i>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "threadNum", array()), "html", null, true);
            echo "</span>
                  </div>
                </div>  
              </div>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 37
            echo "              <div class=\"empty\">暂无小组信息！</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "          </div>
        </div>
      </div>
      <div class=\"panel panel-default\">
        <div class=\"panel-heading\"><h3 class=\"panel-title\">最近话题</h3></div>
        <div class=\"panel-body\">
          ";
        // line 45
        $this->loadTemplate("TopxiaWebBundle:Group:groups-threads-ul.html.twig", "TopxiaWebBundle:Group:index.html.twig", 45)->display(array_merge($context, array("threads" =>         // line 46
(isset($context["recentlyThread"]) ? $context["recentlyThread"] : null), "groups" =>         // line 47
(isset($context["groupinfo"]) ? $context["groupinfo"] : null), "users" =>         // line 48
(isset($context["owners"]) ? $context["owners"] : null))));
        // line 50
        echo "        </div>
      </div>
    </div>
    ";
        // line 53
        $this->loadTemplate("TopxiaWebBundle:Group:sidebar.html.twig", "TopxiaWebBundle:Group:index.html.twig", 53)->display($context);
        // line 54
        echo "  </div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Group:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 54,  144 => 53,  139 => 50,  137 => 48,  136 => 47,  135 => 46,  134 => 45,  126 => 39,  119 => 37,  109 => 32,  105 => 31,  98 => 27,  92 => 26,  82 => 21,  76 => 20,  72 => 18,  67 => 17,  60 => 13,  48 => 6,  42 => 5,  39 => 4,  36 => 3,  29 => 2,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle:Group:layout.html.twig' %}*/
/* {% block title %}小组 {{ parent() }}{% endblock %}*/
/* {% block content %}*/
/*   <ol class="breadcrumb breadcrumb-o" style="margin-top:-18px">*/
/*     <li><a href="{{path('homepage')}}">{{ setting('homepage.name', '首页') }}</a></li>*/
/*     <li class="active"><a href="{{path('group')}}">{{setting('group.name', '小组主页')}}</a></li>*/
/*   </ol>*/
/*   <div class="row">*/
/*     <div class="col-md-9">*/
/*       <div class="panel panel-default">*/
/*         <div class="panel-heading">*/
/*           <h3 class="panel-title">热门小组</h3>*/
/*           <a href="{{path('group_search_group')}}" class="more"><i class="es-icon es-icon-morehoriz"></i></a>*/
/*         </div>*/
/*         <div class="panel-body">*/
/*           <div class="row media-group-list">*/
/*             {% for group in activeGroup %}*/
/*               <div class="media media-group col-md-4 col-sm-4">*/
/*                 <div class="media-left">*/
/*                   <a href="{{path('group_show',{id:group.id})}}" title="{{group.title}}">*/
/*                     <img src="{{filepath(group.logo, 'group.png')}}" alt="{{group.title}}" class="avatar-square-md">*/
/*                   </a>*/
/*                 </div>*/
/*                 <div class="media-body">*/
/*                   <div class="title">*/
/*                     <a class="gray-darker" href="{{ path('group_show',{id:group.id}) }}" title="{{group.title}}">*/
/*                       {{ group.title|sub_text(9) }}*/
/*                     </a>*/
/*                   </div>*/
/*                   <div class="metas">*/
/*                     <span><i class="es-icon es-icon-people"></i>{{ group.memberNum }}</span>*/
/*                     <span><i class="es-icon es-icon-textsms"></i>{{ group.threadNum }}</span>*/
/*                   </div>*/
/*                 </div>  */
/*               </div>*/
/*             {% else %}*/
/*               <div class="empty">暂无小组信息！</div>*/
/*             {% endfor %}*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*       <div class="panel panel-default">*/
/*         <div class="panel-heading"><h3 class="panel-title">最近话题</h3></div>*/
/*         <div class="panel-body">*/
/*           {% include 'TopxiaWebBundle:Group:groups-threads-ul.html.twig' with {*/
/*           threads:recentlyThread,*/
/*           groups:groupinfo,*/
/*           users:owners,*/
/*           }%}*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*     {% include 'TopxiaWebBundle:Group:sidebar.html.twig' %}*/
/*   </div>*/
/* {% endblock %}*/
