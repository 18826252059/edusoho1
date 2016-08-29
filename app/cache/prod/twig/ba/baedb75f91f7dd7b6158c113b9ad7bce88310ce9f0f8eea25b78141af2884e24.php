<?php

/* TopxiaWebBundle:Group:sidebar.html.twig */
class __TwigTemplate_96b9a3804f0570aa3aa16c64ad9883ff9184ce7d1f4ced9c5894246a131a82e4 extends Twig_Template
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
        echo "<div class=\"col-md-3\">
  ";
        // line 2
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 3
            echo "    <div class=\"mbm\">
    <a href=\"";
            // line 4
            echo $this->env->getExtension('routing')->getPath("group_add");
            echo "\" class=\"btn btn-success btn-xlg btn-block\" role=\"button\"><i class=\"es-icon es-icon-addcircle mrs text-xlg\"></i>创建小组</a>
    </div>
  ";
        }
        // line 7
        echo "  <form class=\"mbl\" action=\"";
        echo $this->env->getExtension('routing')->getPath("group_search_group");
        echo "\" method=\"get\">
    <div class=\"search-with-btn\">
      <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
      <input type=\"text\" class=\"form-control\" placeholder=\"小组搜索\" name=\"keyWord\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, ((array_key_exists("keyWord", $context)) ? (_twig_default_filter((isset($context["keyWord"]) ? $context["keyWord"] : null), "")) : ("")), "html", null, true);
        echo "\">
      <button class=\"btn btn-default\" type=\"submit\"><span class=\"glyphicon glyphicon-search\"></span></button>
    </div>
  </form>
  ";
        // line 14
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array())) {
            // line 15
            echo "    <div class=\"panel panel-default\">
      <div class=\"panel-body\">
        <div class=\"media\">
          <div class=\"media-left prl\">
            ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "user_avatar", array(0 => (isset($context["user"]) ? $context["user"] : null), 1 => "", 2 => "avatar-md"), "method"), "html", null, true);
            echo "
          </div>
          <div class=\"media-body\">
            <p>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "user_link", array(0 => (isset($context["user"]) ? $context["user"] : null), 1 => ""), "method"), "html", null, true);
            echo "</p>
            <div class=\"metas\">
              <a href=\"";
            // line 24
            echo $this->env->getExtension('routing')->getPath("group_member_center");
            echo "\" class=\"btn btn-default btn-sm\" role=\"button\">我的小组</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  ";
        }
        // line 31
        echo "
  ";
        // line 32
        if ((isset($context["myJoinGroup"]) ? $context["myJoinGroup"] : null)) {
            // line 33
            echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\">我的小组</h3>
        ";
            // line 36
            if ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array())) {
                echo " 
          <a href=\"";
                // line 37
                echo $this->env->getExtension('routing')->getPath("group_member_join", array("type" => "myGroup"));
                echo "\" class=\"more\">
          <i class=\"es-icon es-icon-morehoriz\"></i></a>
        ";
            }
            // line 40
            echo "      </div>
      <div class=\"panel-body\">
        <div class=\"media-group-list\">
          ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["myJoinGroup"]) ? $context["myJoinGroup"] : null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 44
                echo "            ";
                if (($this->getAttribute($context["loop"], "index", array()) <= 6)) {
                    // line 45
                    echo "            <div class=\"media media-group\">
              <div class=\"media-left\">
                <a href=\"";
                    // line 47
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_show", array("id" => $this->getAttribute($context["group"], "id", array()))), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "title", array()), "html", null, true);
                    echo "\">
                  <img src=\"";
                    // line 48
                    echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute($context["group"], "logo", array()), "group.png"), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "title", array()), "html", null, true);
                    echo "\" class=\"avatar-square-md\">
                </a>
              </div>
              <div class=\"media-body\">
                <div class=\"title\">
                  <a class=\"gray-darker\" href=\"";
                    // line 53
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_show", array("id" => $this->getAttribute($context["group"], "id", array()))), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "title", array()), "html", null, true);
                    echo "\">";
                    echo $this->env->getExtension('topxia_web_twig')->subTextFilter($this->getAttribute($context["group"], "title", array()), 9);
                    echo "</a>
                </div>
                <div class=\"metas\">
                  <span><i class=\"es-icon es-icon-people\"></i>";
                    // line 56
                    echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "memberNum", array()), "html", null, true);
                    echo "</span>
                  <span><i class=\"es-icon es-icon-textsms\"></i>";
                    // line 57
                    echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "threadNum", array()), "html", null, true);
                    echo "</span>
                </div>
              </div>
            </div>
            ";
                }
                // line 62
                echo "          ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "        </div>
      </div>
    </div>
  ";
        }
        // line 67
        echo "  ";
        $this->loadTemplate("TopxiaWebBundle:Group:new-group-list.html.twig", "TopxiaWebBundle:Group:sidebar.html.twig", 67)->display($context);
        // line 68
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Group:sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 68,  186 => 67,  180 => 63,  166 => 62,  158 => 57,  154 => 56,  144 => 53,  134 => 48,  128 => 47,  124 => 45,  121 => 44,  104 => 43,  99 => 40,  93 => 37,  89 => 36,  84 => 33,  82 => 32,  79 => 31,  69 => 24,  64 => 22,  58 => 19,  52 => 15,  50 => 14,  43 => 10,  39 => 9,  33 => 7,  27 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }
}
/* <div class="col-md-3">*/
/*   {% if is_granted('ROLE_ADMIN') %}*/
/*     <div class="mbm">*/
/*     <a href="{{ path ('group_add') }}" class="btn btn-success btn-xlg btn-block" role="button"><i class="es-icon es-icon-addcircle mrs text-xlg"></i>创建小组</a>*/
/*     </div>*/
/*   {% endif %}*/
/*   <form class="mbl" action="{{path('group_search_group')}}" method="get">*/
/*     <div class="search-with-btn">*/
/*       <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/*       <input type="text" class="form-control" placeholder="小组搜索" name="keyWord" value="{{keyWord|default('')}}">*/
/*       <button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search"></span></button>*/
/*     </div>*/
/*   </form>*/
/*   {% if user.id %}*/
/*     <div class="panel panel-default">*/
/*       <div class="panel-body">*/
/*         <div class="media">*/
/*           <div class="media-left prl">*/
/*             {{ web_macro.user_avatar(user, '','avatar-md') }}*/
/*           </div>*/
/*           <div class="media-body">*/
/*             <p>{{ web_macro.user_link(user , '') }}</p>*/
/*             <div class="metas">*/
/*               <a href="{{ path ('group_member_center') }}" class="btn btn-default btn-sm" role="button">我的小组</a>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   {% endif %}*/
/* */
/*   {% if myJoinGroup %}*/
/*     <div class="panel panel-default">*/
/*       <div class="panel-heading">*/
/*         <h3 class="panel-title">我的小组</h3>*/
/*         {% if user.id %} */
/*           <a href="{{ path ('group_member_join',{type:'myGroup'}) }}" class="more">*/
/*           <i class="es-icon es-icon-morehoriz"></i></a>*/
/*         {% endif %}*/
/*       </div>*/
/*       <div class="panel-body">*/
/*         <div class="media-group-list">*/
/*           {% for group in myJoinGroup %}*/
/*             {% if loop.index <= 6 %}*/
/*             <div class="media media-group">*/
/*               <div class="media-left">*/
/*                 <a href="{{path('group_show',{id:group.id})}}" title="{{group.title}}">*/
/*                   <img src="{{filepath(group.logo, 'group.png')}}" alt="{{group.title}}" class="avatar-square-md">*/
/*                 </a>*/
/*               </div>*/
/*               <div class="media-body">*/
/*                 <div class="title">*/
/*                   <a class="gray-darker" href="{{path('group_show',{id:group.id})}}" title="{{group.title}}">{{group.title|sub_text(9)}}</a>*/
/*                 </div>*/
/*                 <div class="metas">*/
/*                   <span><i class="es-icon es-icon-people"></i>{{ group.memberNum }}</span>*/
/*                   <span><i class="es-icon es-icon-textsms"></i>{{ group.threadNum }}</span>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*             {% endif %}*/
/*           {% endfor %}*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   {% endif %}*/
/*   {% include 'TopxiaWebBundle:Group:new-group-list.html.twig' %}*/
/* </div>*/
