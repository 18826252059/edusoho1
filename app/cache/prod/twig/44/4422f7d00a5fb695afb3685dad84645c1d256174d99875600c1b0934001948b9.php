<?php

/* TopxiaWebBundle:Group:groupindex.html.twig */
class __TwigTemplate_78a70af39be7eb8ec22d1de46bf20a04d96ec3671eb09c77c7c3518406e8ef26 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:Group:layout.html.twig", "TopxiaWebBundle:Group:groupindex.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'keywords' => array($this, 'block_keywords'),
            'description' => array($this, 'block_description'),
            'group_main' => array($this, 'block_group_main'),
            'group_side' => array($this, 'block_group_side'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:Group:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["script_controller"] = "group/group";
        // line 6
        $context["groupNav"] = "index";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["groupinfo"]) ? $context["groupinfo"] : null), "title", array()), "html", null, true);
        echo "小组 ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 4
    public function block_keywords($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["groupinfo"]) ? $context["groupinfo"] : null), "title", array()), "html", null, true);
    }

    // line 5
    public function block_description($context, array $blocks = array())
    {
        echo $this->env->getExtension('topxia_web_twig')->plainTextFilter(((array_key_exists("groupAbout", $context)) ? (_twig_default_filter((isset($context["groupAbout"]) ? $context["groupAbout"] : null), "")) : ("")), 100);
    }

    // line 8
    public function block_group_main($context, array $blocks = array())
    {
        // line 9
        echo "  <div class=\"panel panel-default\">
    <div class=\"panel-heading\"><h3 class=\"panel-title\">小组介绍</h3></div>
    <div class=\"panel-body\">
      ";
        // line 12
        if (($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "currentPage", array()) == $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "firstPage", array()))) {
            // line 13
            echo "        <div class=\"well editor-text\">
          ";
            // line 14
            if ($this->getAttribute((isset($context["groupinfo"]) ? $context["groupinfo"] : null), "about", array())) {
                echo " ";
                echo $this->getAttribute((isset($context["groupinfo"]) ? $context["groupinfo"] : null), "about", array());
                echo " ";
            } else {
                echo " 暂无简介 ";
            }
            // line 15
            echo "        </div>
      ";
        }
        // line 17
        echo "    </div>
  </div>
  <div class=\"panel panel-default\">
    <div class=\"panel-body\">
      <ul class=\"nav nav-tabs\">
        <li ";
        // line 22
        if (((isset($context["groupNav"]) ? $context["groupNav"] : null) == "index")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_show", array("id" => $this->getAttribute((isset($context["groupinfo"]) ? $context["groupinfo"] : null), "id", array()))), "html", null, true);
        echo "\">小组首页</a></li>
        <li ";
        // line 23
        if (((isset($context["groupNav"]) ? $context["groupNav"] : null) == "member")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_member", array("id" => $this->getAttribute((isset($context["groupinfo"]) ? $context["groupinfo"] : null), "id", array()))), "html", null, true);
        echo "\">小组成员</a></li>
        ";
        // line 24
        if (((((isset($context["is_groupmember"]) ? $context["is_groupmember"] : null) == 2) || $this->env->getExtension('security')->isGranted("ROLE_ADMIN")) || ((isset($context["is_groupmember"]) ? $context["is_groupmember"] : null) == 3))) {
            // line 25
            echo "          <li ";
            if (((isset($context["groupNav"]) ? $context["groupNav"] : null) == "setting")) {
                echo "class=\"active\" ";
            }
            echo "><a  href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_set", array("id" => $this->getAttribute((isset($context["groupinfo"]) ? $context["groupinfo"] : null), "id", array()))), "html", null, true);
            echo "\">小组设置</a></li>
        ";
        }
        // line 27
        echo "      </ul>
    
      ";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "
      <div class=\"nav-filter clearfix mbl\">

      <ul class=\"nav nav-pills nav-pills-sm\">

        <li";
        // line 34
        if (($this->getAttribute((isset($context["condition"]) ? $context["condition"] : null), "type", array()) == "all")) {
            echo " class=\"active\"";
        }
        echo "><a class=\"js-nav\" data-target=\"#thread-pane\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_show", array("id" => (isset($context["id"]) ? $context["id"] : null), "num" => $this->getAttribute((isset($context["condition"]) ? $context["condition"] : null), "num", array()), "sort" => $this->getAttribute((isset($context["condition"]) ? $context["condition"] : null), "sort", array()), "isElite" => 0)), "html", null, true);
        echo "\">全部</a></li>
            
        <li";
        // line 36
        if (($this->getAttribute((isset($context["condition"]) ? $context["condition"] : null), "type", array()) == "elite")) {
            echo " class=\"active\"";
        }
        echo "><a class=\"js-nav\" data-target=\"#thread-pane\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_show", array("id" => (isset($context["id"]) ? $context["id"] : null), "type" => "elite", "num" => $this->getAttribute((isset($context["condition"]) ? $context["condition"] : null), "num", array()), "sort" => $this->getAttribute((isset($context["condition"]) ? $context["condition"] : null), "sort", array()))), "html", null, true);
        echo "\">精华</a></li>

        ";
        // line 38
        if ($this->env->getExtension('topxia_web_twig')->isFeatureEnabled("group_reward")) {
            // line 39
            echo "        <li";
            if (($this->getAttribute((isset($context["condition"]) ? $context["condition"] : null), "type", array()) == "reward")) {
                echo " class=\"active\"";
            }
            echo "><a class=\"js-nav\" data-target=\"#thread-pane\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_show", array("id" => (isset($context["id"]) ? $context["id"] : null), "type" => "reward", "num" => $this->getAttribute((isset($context["condition"]) ? $context["condition"] : null), "num", array()), "sort" => $this->getAttribute((isset($context["condition"]) ? $context["condition"] : null), "sort", array()))), "html", null, true);
            echo "\">悬赏</a></li>
        ";
        }
        // line 41
        echo "        
        <li class=\"dropdown\">
          <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
            <span class=\"text-muted\">排序：</span>
            ";
        // line 45
        if (($this->getAttribute((isset($context["condition"]) ? $context["condition"] : null), "sort", array()) == "byLastPostTime")) {
            // line 46
            echo "              最后回复
            ";
        } elseif (($this->getAttribute(        // line 47
(isset($context["condition"]) ? $context["condition"] : null), "sort", array()) == "byCreatedTime")) {
            // line 48
            echo "              最新发帖
            ";
        } elseif (($this->getAttribute(        // line 49
(isset($context["condition"]) ? $context["condition"] : null), "sort", array()) == "byPostNum")) {
            // line 50
            echo "              回复数
            ";
        }
        // line 52
        echo "            <span class=\"caret\"></span>
          </a>
          <ul class=\"dropdown-menu\">
            <li class=\"";
        // line 55
        if (($this->getAttribute((isset($context["condition"]) ? $context["condition"] : null), "sort", array()) == "byCreatedTime")) {
            echo "active";
        }
        echo "\"><a class=\"js-nav\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_show", array("id" => (isset($context["id"]) ? $context["id"] : null), "isElite" => $this->getAttribute((isset($context["condition"]) ? $context["condition"] : null), "type", array()), "num" => $this->getAttribute((isset($context["condition"]) ? $context["condition"] : null), "num", array()), "sort" => "byCreatedTime")), "html", null, true);
        echo "\">最新发帖</a></li>
            <li class=\"";
        // line 56
        if (($this->getAttribute((isset($context["condition"]) ? $context["condition"] : null), "sort", array()) == "byLastPostTime")) {
            echo "active";
        }
        echo "\"><a class=\"js-nav\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_show", array("id" => (isset($context["id"]) ? $context["id"] : null), "isElite" => $this->getAttribute((isset($context["condition"]) ? $context["condition"] : null), "type", array()), "num" => $this->getAttribute((isset($context["condition"]) ? $context["condition"] : null), "num", array()), "sort" => "byLastPostTime")), "html", null, true);
        echo "\">最后回复</a></li>
            <li class=\"";
        // line 57
        if (($this->getAttribute((isset($context["condition"]) ? $context["condition"] : null), "sort", array()) == "byPostNum")) {
            echo "active";
        }
        echo "\"><a class=\"js-nav\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_show", array("id" => (isset($context["id"]) ? $context["id"] : null), "isElite" => $this->getAttribute((isset($context["condition"]) ? $context["condition"] : null), "type", array()), "num" => $this->getAttribute((isset($context["condition"]) ? $context["condition"] : null), "num", array()), "sort" => "byPostNum")), "html", null, true);
        echo "\">回复数</a></li>
          </ul>
        </li>
      </ul>

   
      </div>

      ";
        // line 65
        $this->loadTemplate("TopxiaWebBundle:Group:groups-threads-ul.html.twig", "TopxiaWebBundle:Group:groupindex.html.twig", 65)->display(array_merge($context, array("users" => (isset($context["owner"]) ? $context["owner"] : null))));
        // line 66
        echo "
      ";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo "
    </div>
  </div>
";
    }

    // line 72
    public function block_group_side($context, array $blocks = array())
    {
        // line 73
        echo "  ";
        if (((isset($context["is_groupmember"]) ? $context["is_groupmember"] : null) != 0)) {
            // line 74
            echo "    <div class=\"mbm\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_thread_add", array("id" => $this->getAttribute((isset($context["groupinfo"]) ? $context["groupinfo"] : null), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-success btn-xlg btn-block\" role=\"button\"><i class=\"es-icon es-icon-comment mrs text-xlg\"></i>发表话题</a>
    </div>
  ";
        }
        // line 77
        echo "  <form class=\"mbl\" action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_search", array("id" => $this->getAttribute((isset($context["groupinfo"]) ? $context["groupinfo"] : null), "id", array()))), "html", null, true);
        echo "\" method=\"get\">
  <div class=\"search-with-btn\">
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
    <input type=\"text\" class=\"form-control\" placeholder=\"组内搜索\" name=\"keyWord\">
    <button class=\"btn btn-default\" type=\"submit\"><span class=\"glyphicon glyphicon-search\"></span></button>
  </div>
  </form>
  ";
        // line 84
        if (twig_in_filter((isset($context["is_groupmember"]) ? $context["is_groupmember"] : null), array(0 => 1, 1 => 2, 2 => 3))) {
            // line 85
            echo "    <div class=\"panel panel-default\">
      <div class=\"panel-body group-user-info\">
        <div class=\"media group-item\">
          <div class=\"media-left\">
            ";
            // line 89
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "user_avatar", array(0 => (isset($context["user"]) ? $context["user"] : null), 1 => "", 2 => "avatar-md"), "method"), "html", null, true);
            echo "
          </div>
          <div class=\"media-body\">
            <p>";
            // line 92
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "user_link", array(0 => (isset($context["user"]) ? $context["user"] : null), 1 => ""), "method"), "html", null, true);
            echo "

              ";
            // line 94
            if (((isset($context["is_groupmember"]) ? $context["is_groupmember"] : null) == 1)) {
                // line 95
                echo "              <span class=\"label label-primary\">组员</span>
              ";
            }
            // line 96
            echo " 

              ";
            // line 98
            if (((isset($context["is_groupmember"]) ? $context["is_groupmember"] : null) == 2)) {
                echo " 
              <span class=\"label label-primary\">组长</span>  
              ";
            }
            // line 101
            echo "
              ";
            // line 102
            if (((isset($context["is_groupmember"]) ? $context["is_groupmember"] : null) == 3)) {
                echo " 
              <span class=\"label label-primary\">副组长</span>  
              ";
            }
            // line 104
            echo "  
            </p>
            <a href=\"";
            // line 106
            echo $this->env->getExtension('routing')->getPath("group_member_center");
            echo "\" class=\"btn btn-default btn-sm\" role=\"button\">我的小组</a>
          </div>
          <hr>
           <p class=\"group-message clearfix\">
              <span><strong>";
            // line 110
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userIsGroupMember"]) ? $context["userIsGroupMember"] : null), "threadNum", array()), "html", null, true);
            echo "</strong>话题</span>
              <span><strong>";
            // line 111
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userIsGroupMember"]) ? $context["userIsGroupMember"] : null), "postNum", array()), "html", null, true);
            echo "</strong>回复</span>
            </p>
        </div>
      </div>
    </div>
  ";
        }
        // line 117
        echo "  <div class=\"panel panel-default\">
    <div class=\"panel-heading\"><h3 class=\"panel-title\">小组组长</h3></div>
    <div class=\"panel-body\">
      <div class=\"media group-item\">
        <div class=\"media-left\">
          ";
        // line 122
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "user_avatar", array(0 => (isset($context["groupOwner"]) ? $context["groupOwner"] : null), 1 => ""), "method"), "html", null, true);
        echo "
        </div>
        <div class=\"media-body\">
          <div><a class=\"gray-darker\" href=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute((isset($context["groupOwner"]) ? $context["groupOwner"] : null), "id", array()))), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["groupOwner"]) ? $context["groupOwner"] : null), "nickname", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["groupOwner"]) ? $context["groupOwner"] : null), "nickname", array()), "html", null, true);
        echo "</a></div>
          <span class=\"text-sm gray-medium\">";
        // line 126
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["groupOwner"]) ? $context["groupOwner"] : null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["groupOwner"]) ? $context["groupOwner"] : null), "title", array()), "无")) : ("无")), "html", null, true);
        echo "</span>
        </div>
      </div>
    </div>
  </div>


  <div class=\"panel panel-default\">
    <div class=\"panel-heading\"><h3 class=\"panel-title\">新加组员</h3></div>
    <div class=\"panel-body\">
      ";
        // line 136
        if ((isset($context["recentlyJoinMember"]) ? $context["recentlyJoinMember"] : null)) {
            // line 137
            echo "        <ul class=\"user-avatar-list clearfix\">
          ";
            // line 138
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["recentlyJoinMember"]) ? $context["recentlyJoinMember"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
                // line 139
                echo "            <li>
              ";
                // line 140
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "user_avatar", array(0 => $this->getAttribute((isset($context["members"]) ? $context["members"] : null), $this->getAttribute($context["member"], "userId", array()), array(), "array"), 1 => "", 2 => "avatar-sm"), "method"), "html", null, true);
                echo "
            </li>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 143
            echo "        </ul>
      ";
        } else {
            // line 145
            echo "        <div class=\"empty\">还没有小组成员！</div>
      ";
        }
        // line 147
        echo "    </div>
  </div>

  <div class=\"panel panel-default\">
    <div class=\"panel-heading\"><h3 class=\"panel-title\">热门小组</h3></div>
    <div class=\"panel-body\">
      <div class=\"media-group-list\">
      ";
        // line 154
        $context["hotGroups"] = $this->env->getExtension('topxia_data_twig')->getData("HotGroup", array("count" => 3));
        // line 155
        echo "      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["hotGroups"]) ? $context["hotGroups"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 156
            echo "        <div class=\"media media-group\">
          <div class=\"media-left prm\">
            <a href=\"";
            // line 158
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_show", array("id" => $this->getAttribute($context["group"], "id", array()))), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "title", array()), "html", null, true);
            echo "\">
              <img src=\"";
            // line 159
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute($context["group"], "logo", array()), "group.png"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "title", array()), "html", null, true);
            echo "\" class=\"avatar-square-md\">
            </a>
          </div>
          <div class=\"media-body\">
            <div class=\"title\">
              <a class=\"gray-darker\" href=\"";
            // line 164
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_show", array("id" => $this->getAttribute($context["group"], "id", array()))), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "title", array()), "html", null, true);
            echo "\">
                ";
            // line 165
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "title", array()), "html", null, true);
            echo "
              </a>
            </div>
            <div class=\"metas\">
              <span><i class=\"es-icon es-icon-people\"></i>";
            // line 169
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "memberNum", array()), "html", null, true);
            echo "</span>
              <span><i class=\"es-icon es-icon-textsms\"></i>";
            // line 170
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "threadNum", array()), "html", null, true);
            echo "</span>
            </div>
          </div>
        </div>
      ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 175
            echo "        <div class=\"empty\">暂无小组信息！</div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 177
        echo "      </div>
      
    </div>
  </div>

";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Group:groupindex.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  459 => 177,  452 => 175,  442 => 170,  438 => 169,  431 => 165,  425 => 164,  415 => 159,  409 => 158,  405 => 156,  399 => 155,  397 => 154,  388 => 147,  384 => 145,  380 => 143,  371 => 140,  368 => 139,  364 => 138,  361 => 137,  359 => 136,  346 => 126,  338 => 125,  332 => 122,  325 => 117,  316 => 111,  312 => 110,  305 => 106,  301 => 104,  295 => 102,  292 => 101,  286 => 98,  282 => 96,  278 => 95,  276 => 94,  271 => 92,  265 => 89,  259 => 85,  257 => 84,  249 => 79,  243 => 77,  236 => 74,  233 => 73,  230 => 72,  222 => 67,  219 => 66,  217 => 65,  202 => 57,  194 => 56,  186 => 55,  181 => 52,  177 => 50,  175 => 49,  172 => 48,  170 => 47,  167 => 46,  165 => 45,  159 => 41,  149 => 39,  147 => 38,  138 => 36,  129 => 34,  121 => 29,  117 => 27,  107 => 25,  105 => 24,  97 => 23,  89 => 22,  82 => 17,  78 => 15,  70 => 14,  67 => 13,  65 => 12,  60 => 9,  57 => 8,  51 => 5,  45 => 4,  37 => 3,  33 => 1,  31 => 6,  29 => 2,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle:Group:layout.html.twig' %}*/
/* {% set script_controller = 'group/group' %}*/
/* {% block title %}{{groupinfo.title}}小组 {{ parent() }}{% endblock %}*/
/* {% block keywords %}{{groupinfo.title}}{% endblock %}*/
/* {% block description %}{{groupAbout|default('')|plain_text(100)}}{% endblock %}*/
/* {% set groupNav = 'index' %}*/
/* */
/* {% block group_main %}*/
/*   <div class="panel panel-default">*/
/*     <div class="panel-heading"><h3 class="panel-title">小组介绍</h3></div>*/
/*     <div class="panel-body">*/
/*       {% if paginator.currentPage == paginator.firstPage %}*/
/*         <div class="well editor-text">*/
/*           {% if groupinfo.about%} {{groupinfo.about|raw}} {% else %} 暂无简介 {% endif %}*/
/*         </div>*/
/*       {% endif %}*/
/*     </div>*/
/*   </div>*/
/*   <div class="panel panel-default">*/
/*     <div class="panel-body">*/
/*       <ul class="nav nav-tabs">*/
/*         <li {% if groupNav=="index" %}class="active"{% endif %}><a href="{{path('group_show',{id:groupinfo.id})}}">小组首页</a></li>*/
/*         <li {% if groupNav=="member" %}class="active"{% endif %}><a href="{{path('group_member',{id:groupinfo.id})}}">小组成员</a></li>*/
/*         {% if is_groupmember==2 or is_granted('ROLE_ADMIN') or is_groupmember==3%}*/
/*           <li {% if groupNav=="setting" %}class="active" {% endif %}><a  href="{{path('group_set',{id:groupinfo.id})}}">小组设置</a></li>*/
/*         {% endif %}*/
/*       </ul>*/
/*     */
/*       {{ web_macro.flash_messages() }}*/
/*       <div class="nav-filter clearfix mbl">*/
/* */
/*       <ul class="nav nav-pills nav-pills-sm">*/
/* */
/*         <li{% if condition.type == 'all' %} class="active"{% endif %}><a class="js-nav" data-target="#thread-pane" href="{{path('group_show',{id:id,num:condition.num,sort:condition.sort,isElite:0})}}">全部</a></li>*/
/*             */
/*         <li{% if condition.type == 'elite' %} class="active"{% endif %}><a class="js-nav" data-target="#thread-pane" href="{{path('group_show',{id:id,type:'elite',num:condition.num,sort:condition.sort})}}">精华</a></li>*/
/* */
/*         {% if is_feature_enabled('group_reward') %}*/
/*         <li{% if condition.type == 'reward' %} class="active"{% endif %}><a class="js-nav" data-target="#thread-pane" href="{{path('group_show',{id:id,type:'reward',num:condition.num,sort:condition.sort})}}">悬赏</a></li>*/
/*         {% endif %}*/
/*         */
/*         <li class="dropdown">*/
/*           <a class="dropdown-toggle" data-toggle="dropdown" href="#">*/
/*             <span class="text-muted">排序：</span>*/
/*             {% if condition.sort == 'byLastPostTime' %}*/
/*               最后回复*/
/*             {% elseif condition.sort == 'byCreatedTime' %}*/
/*               最新发帖*/
/*             {% elseif condition.sort == 'byPostNum' %}*/
/*               回复数*/
/*             {% endif %}*/
/*             <span class="caret"></span>*/
/*           </a>*/
/*           <ul class="dropdown-menu">*/
/*             <li class="{% if condition.sort == 'byCreatedTime' %}active{% endif %}"><a class="js-nav" href="{{path('group_show',{id:id,isElite:condition.type,num:condition.num,sort:'byCreatedTime'})}}">最新发帖</a></li>*/
/*             <li class="{% if condition.sort == 'byLastPostTime' %}active{% endif %}"><a class="js-nav" href="{{path('group_show',{id:id,isElite:condition.type,num:condition.num,sort:'byLastPostTime'})}}">最后回复</a></li>*/
/*             <li class="{% if condition.sort == 'byPostNum' %}active{% endif %}"><a class="js-nav" href="{{path('group_show',{id:id,isElite:condition.type,num:condition.num,sort:'byPostNum'})}}">回复数</a></li>*/
/*           </ul>*/
/*         </li>*/
/*       </ul>*/
/* */
/*    */
/*       </div>*/
/* */
/*       {% include 'TopxiaWebBundle:Group:groups-threads-ul.html.twig' with {users:owner} %}*/
/* */
/*       {{ web_macro.paginator(paginator) }}*/
/*     </div>*/
/*   </div>*/
/* {% endblock %}*/
/* */
/* {% block group_side %}*/
/*   {% if is_groupmember != 0 %}*/
/*     <div class="mbm"><a href="{{path('group_thread_add',{id:groupinfo.id})}}" class="btn btn-success btn-xlg btn-block" role="button"><i class="es-icon es-icon-comment mrs text-xlg"></i>发表话题</a>*/
/*     </div>*/
/*   {% endif %}*/
/*   <form class="mbl" action="{{path('group_search',{id:groupinfo.id})}}" method="get">*/
/*   <div class="search-with-btn">*/
/*     <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/*     <input type="text" class="form-control" placeholder="组内搜索" name="keyWord">*/
/*     <button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search"></span></button>*/
/*   </div>*/
/*   </form>*/
/*   {% if is_groupmember in [1, 2, 3] %}*/
/*     <div class="panel panel-default">*/
/*       <div class="panel-body group-user-info">*/
/*         <div class="media group-item">*/
/*           <div class="media-left">*/
/*             {{ web_macro.user_avatar(user, '' ,'avatar-md') }}*/
/*           </div>*/
/*           <div class="media-body">*/
/*             <p>{{ web_macro.user_link(user , '') }}*/
/* */
/*               {% if is_groupmember==1%}*/
/*               <span class="label label-primary">组员</span>*/
/*               {% endif %} */
/* */
/*               {% if is_groupmember==2%} */
/*               <span class="label label-primary">组长</span>  */
/*               {% endif %}*/
/* */
/*               {% if is_groupmember==3%} */
/*               <span class="label label-primary">副组长</span>  */
/*               {% endif %}  */
/*             </p>*/
/*             <a href="{{ path ('group_member_center') }}" class="btn btn-default btn-sm" role="button">我的小组</a>*/
/*           </div>*/
/*           <hr>*/
/*            <p class="group-message clearfix">*/
/*               <span><strong>{{userIsGroupMember.threadNum}}</strong>话题</span>*/
/*               <span><strong>{{userIsGroupMember.postNum}}</strong>回复</span>*/
/*             </p>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   {% endif %}*/
/*   <div class="panel panel-default">*/
/*     <div class="panel-heading"><h3 class="panel-title">小组组长</h3></div>*/
/*     <div class="panel-body">*/
/*       <div class="media group-item">*/
/*         <div class="media-left">*/
/*           {{ web_macro.user_avatar(groupOwner, '') }}*/
/*         </div>*/
/*         <div class="media-body">*/
/*           <div><a class="gray-darker" href="{{path('user_show',{id:groupOwner.id})}}" title="{{groupOwner.nickname}}">{{groupOwner.nickname}}</a></div>*/
/*           <span class="text-sm gray-medium">{{groupOwner.title|default("无")}}</span>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* */
/* */
/*   <div class="panel panel-default">*/
/*     <div class="panel-heading"><h3 class="panel-title">新加组员</h3></div>*/
/*     <div class="panel-body">*/
/*       {% if recentlyJoinMember %}*/
/*         <ul class="user-avatar-list clearfix">*/
/*           {% for member in recentlyJoinMember %}*/
/*             <li>*/
/*               {{ web_macro.user_avatar(members[member.userId] ,'', 'avatar-sm') }}*/
/*             </li>*/
/*           {% endfor %}*/
/*         </ul>*/
/*       {% else %}*/
/*         <div class="empty">还没有小组成员！</div>*/
/*       {% endif %}*/
/*     </div>*/
/*   </div>*/
/* */
/*   <div class="panel panel-default">*/
/*     <div class="panel-heading"><h3 class="panel-title">热门小组</h3></div>*/
/*     <div class="panel-body">*/
/*       <div class="media-group-list">*/
/*       {% set hotGroups = data('HotGroup',{'count':3}) %}*/
/*       {% for group in hotGroups %}*/
/*         <div class="media media-group">*/
/*           <div class="media-left prm">*/
/*             <a href="{{path('group_show',{id:group.id})}}" title="{{group.title}}">*/
/*               <img src="{{filepath(group.logo, 'group.png')}}" alt="{{group.title}}" class="avatar-square-md">*/
/*             </a>*/
/*           </div>*/
/*           <div class="media-body">*/
/*             <div class="title">*/
/*               <a class="gray-darker" href="{{ path('group_show',{id:group.id}) }}" title="{{group.title}}">*/
/*                 {{group.title}}*/
/*               </a>*/
/*             </div>*/
/*             <div class="metas">*/
/*               <span><i class="es-icon es-icon-people"></i>{{group.memberNum}}</span>*/
/*               <span><i class="es-icon es-icon-textsms"></i>{{group.threadNum}}</span>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*       {% else %}*/
/*         <div class="empty">暂无小组信息！</div>*/
/*       {% endfor %}*/
/*       </div>*/
/*       */
/*     </div>*/
/*   </div>*/
/* */
/* {% endblock %}*/
