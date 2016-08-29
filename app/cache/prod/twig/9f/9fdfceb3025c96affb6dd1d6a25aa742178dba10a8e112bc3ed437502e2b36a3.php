<?php

/* TopxiaWebBundle:Group:groupmember.html.twig */
class __TwigTemplate_e09f7ba9d03e4d763effbb2e09e6b3cf21411c396b82d477c00fb0cd7a7854b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:Group:layout.html.twig", "TopxiaWebBundle:Group:groupmember.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
        $context["script_controller"] = "group/group_member";
        // line 4
        $context["groupNav"] = "member";
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
    public function block_group_main($context, array $blocks = array())
    {
        // line 6
        echo "  <div class=\"panel panel-default\">
    <div class=\"panel-heading\"><h3 class=\"panel-title\">小组介绍</h3></div>
    <div class=\"panel-body\">
      ";
        // line 9
        if (($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "currentPage", array()) == $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "firstPage", array()))) {
            // line 10
            echo "        <div class=\"well editor-text\">
          ";
            // line 11
            if ($this->getAttribute((isset($context["groupinfo"]) ? $context["groupinfo"] : null), "about", array())) {
                echo " ";
                echo $this->getAttribute((isset($context["groupinfo"]) ? $context["groupinfo"] : null), "about", array());
                echo " ";
            } else {
                echo " 暂无简介 ";
            }
            // line 12
            echo "        </div>
      ";
        }
        // line 14
        echo "    </div>
  </div>
  <div class=\"es-section\">
    <ul class=\"nav nav-tabs\">
      <li ";
        // line 18
        if (((isset($context["groupNav"]) ? $context["groupNav"] : null) == "index")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_show", array("id" => $this->getAttribute((isset($context["groupinfo"]) ? $context["groupinfo"] : null), "id", array()))), "html", null, true);
        echo "\">小组首页</a></li>
      <li ";
        // line 19
        if (((isset($context["groupNav"]) ? $context["groupNav"] : null) == "member")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_member", array("id" => $this->getAttribute((isset($context["groupinfo"]) ? $context["groupinfo"] : null), "id", array()))), "html", null, true);
        echo "\">小组成员</a></li>
      ";
        // line 20
        if (((((isset($context["is_groupmember"]) ? $context["is_groupmember"] : null) == 2) || $this->env->getExtension('security')->isGranted("ROLE_ADMIN")) || ((isset($context["is_groupmember"]) ? $context["is_groupmember"] : null) == 3))) {
            // line 21
            echo "        <li ";
            if (((isset($context["groupNav"]) ? $context["groupNav"] : null) == "setting")) {
                echo "class=\"active\" ";
            }
            echo "><a  href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_set", array("id" => $this->getAttribute((isset($context["groupinfo"]) ? $context["groupinfo"] : null), "id", array()))), "html", null, true);
            echo "\">小组设置</a></li>
      ";
        }
        // line 23
        echo "    </ul>

    ";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "
    <div class=\"es-piece\">
      <div class=\"piece-header\">组长</div>
      <div class=\"piece-body clearfix\">
        <div class=\"grouplist\">
          <a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute((isset($context["owner_info"]) ? $context["owner_info"] : null), "id", array()))), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["owner_info"]) ? $context["owner_info"] : null), "nickname", array()), "html", null, true);
        echo "\"  >
            <img src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute((isset($context["owner_info"]) ? $context["owner_info"] : null), "largeAvatar", array()), "avatar.png"), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["owner_info"]) ? $context["owner_info"] : null), "nickname", array()), "html", null, true);
        echo "\" class=\"avatar-md\">
          </a>
        </div>
      </div>
    </div>

    <div class=\"es-piece\">
      <div class=\"piece-header\">副组长</div>
      <div class=\"piece-body clearfix\">
        <form action=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_remove_admin", array("id" => $this->getAttribute((isset($context["groupinfo"]) ? $context["groupinfo"] : null), "id", array()))), "html", null, true);
        echo "\" method=\"post\" id=\"admin-form\">
          ";
        // line 41
        if ((isset($context["groupAdmin"]) ? $context["groupAdmin"] : null)) {
            // line 42
            echo "            ";
            if ((((isset($context["is_groupmember"]) ? $context["is_groupmember"] : null) == 2) || $this->env->getExtension('security')->isGranted("ROLE_ADMIN"))) {
                // line 43
                echo "              <button id=\"remove-admin-btn\" type=\"button\" class=\"btn btn-default btn-sm pull-right\">撤消副组长</button>
            ";
            }
            // line 45
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["groupAdmin"]) ? $context["groupAdmin"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
                // line 46
                echo "              <div class=\"grouplist\"  style=\"width: 82px;\">
                <p>";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "user_avatar", array(0 => $this->getAttribute((isset($context["usersLikeAdmin"]) ? $context["usersLikeAdmin"] : null), $this->getAttribute($context["member"], "userId", array()), array(), "array"), 1 => "", 2 => "avatar-md"), "method"), "html", null, true);
                echo "</p>
               
                ";
                // line 49
                if ((((isset($context["is_groupmember"]) ? $context["is_groupmember"] : null) == 2) || $this->env->getExtension('security')->isGranted("ROLE_ADMIN"))) {
                    // line 50
                    echo "                  <input type=\"checkbox\" value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["member"], "userId", array()), "html", null, true);
                    echo "\" name=\"adminId[]\"class=\"checkboxs\">
                ";
                }
                // line 52
                echo "                <br>
              </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "          ";
        } else {
            // line 56
            echo "            <p><span class=\"text-muted\">还没有副组长！</span></p>
          ";
        }
        // line 58
        echo "        </form>
      </div>
    </div>

    <div class=\"btn-group pull-right\">
      ";
        // line 63
        if ((isset($context["groupmember_info"]) ? $context["groupmember_info"] : null)) {
            // line 64
            echo "        ";
            if (((((isset($context["is_groupmember"]) ? $context["is_groupmember"] : null) == 2) || $this->env->getExtension('security')->isGranted("ROLE_ADMIN")) || ((isset($context["is_groupmember"]) ? $context["is_groupmember"] : null) == 3))) {
                // line 65
                echo "          <button  id=\"delete-btn\" type=\"button\" class=\"btn btn-default btn-sm \">踢出成员</button>
        ";
            }
            // line 67
            echo "        ";
            if ((((isset($context["is_groupmember"]) ? $context["is_groupmember"] : null) == 2) || $this->env->getExtension('security')->isGranted("ROLE_ADMIN"))) {
                // line 68
                echo "          <button  id=\"set-admin-btn\" type=\"button\" class=\"btn btn-default btn-sm \">设置副组长</button>
          <input id=\"set-admin-url\" type=\"hidden\" value=\"";
                // line 69
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_set_admin", array("id" => $this->getAttribute((isset($context["groupinfo"]) ? $context["groupinfo"] : null), "id", array()))), "html", null, true);
                echo "\">
        ";
            }
            // line 71
            echo "      ";
        }
        // line 72
        echo "    </div>

    <div class=\"es-piece\">
      <div class=\"piece-header\">组员</div>
      <div class=\"piece-body\">
        <form action=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_member_delete", array("id" => $this->getAttribute((isset($context["groupinfo"]) ? $context["groupinfo"] : null), "id", array()))), "html", null, true);
        echo "\" method=\"post\" id=\"member-form\" class=\"clearfix\">
          ";
        // line 78
        if ((isset($context["groupmember_info"]) ? $context["groupmember_info"] : null)) {
            // line 79
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["groupmember_info"]) ? $context["groupmember_info"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
                // line 80
                echo "              <div class=\"grouplist\">
                <p>";
                // line 81
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "user_avatar", array(0 => $this->getAttribute((isset($context["members"]) ? $context["members"] : null), $this->getAttribute($context["member"], "userId", array()), array(), "array"), 1 => "", 2 => "avatar-md"), "method"), "html", null, true);
                echo "</p>
                
                ";
                // line 83
                if (((((isset($context["is_groupmember"]) ? $context["is_groupmember"] : null) == 2) || $this->env->getExtension('security')->isGranted("ROLE_ADMIN")) || ((isset($context["is_groupmember"]) ? $context["is_groupmember"] : null) == 3))) {
                    // line 84
                    echo "                  <input type=\"checkbox\" value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["member"], "userId", array()), "html", null, true);
                    echo "\" name=\"memberId[]\"class=\"checkboxs\">
                ";
                }
                // line 85
                echo "<br>
              </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 88
            echo "            
            ";
            // line 89
            if (((((isset($context["is_groupmember"]) ? $context["is_groupmember"] : null) == 2) || $this->env->getExtension('security')->isGranted("ROLE_ADMIN")) || ((isset($context["is_groupmember"]) ? $context["is_groupmember"] : null) == 3))) {
                // line 90
                echo "              <input type=\"hidden\" name=\"_csrf_token\" value=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
                echo "\">
            ";
            }
            // line 92
            echo "            
          ";
        } else {
            // line 94
            echo "            <p><span class=\"text-muted\">还没有小组成员！</span></p>
          ";
        }
        // line 96
        echo "        </form>
      </div>
    </div>
    
    <nav class=\"text-center\">
      ";
        // line 101
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo "
    </nav>
  </div>
";
    }

    // line 105
    public function block_group_side($context, array $blocks = array())
    {
        // line 106
        echo "
  ";
        // line 107
        if (((isset($context["is_groupmember"]) ? $context["is_groupmember"] : null) != 0)) {
            // line 108
            echo "    <div class=\"mbm\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_thread_add", array("id" => $this->getAttribute((isset($context["groupinfo"]) ? $context["groupinfo"] : null), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-success btn-xlg btn-block\" role=\"button\"><i class=\"es-icon es-icon-comment mrs text-xlg\"></i>发表话题</a>
    </div>
  ";
        }
        // line 111
        echo "  <form class=\"mbl\" action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_search", array("id" => $this->getAttribute((isset($context["groupinfo"]) ? $context["groupinfo"] : null), "id", array()))), "html", null, true);
        echo "\" method=\"get\">
    <div class=\"search-with-btn\">
      <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
      <input type=\"text\" class=\"form-control\" placeholder=\"组内搜索\" name=\"keyWord\">
      <button class=\"btn btn-default\" type=\"submit\"><span class=\"glyphicon glyphicon-search\"></span></button>
    </div>
  </form>
  ";
        // line 118
        if (twig_in_filter((isset($context["is_groupmember"]) ? $context["is_groupmember"] : null), array(0 => 1, 1 => 2, 2 => 3))) {
            // line 119
            echo "    <div class=\"panel panel-default\">
      <div class=\"panel-body group-user-info\">
        <div class=\"media group-item\">
          <div class=\"media-left\">
            ";
            // line 123
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "user_avatar", array(0 => (isset($context["user"]) ? $context["user"] : null), 1 => "", 2 => "avatar-md"), "method"), "html", null, true);
            echo "
          </div>
          <div class=\"media-body\">
            <p>";
            // line 126
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "user_link", array(0 => (isset($context["user"]) ? $context["user"] : null), 1 => ""), "method"), "html", null, true);
            echo "

              ";
            // line 128
            if (((isset($context["is_groupmember"]) ? $context["is_groupmember"] : null) == 1)) {
                // line 129
                echo "              <span class=\"label label-primary\">组员</span>
              ";
            }
            // line 130
            echo " 

              ";
            // line 132
            if (((isset($context["is_groupmember"]) ? $context["is_groupmember"] : null) == 2)) {
                echo " 
              <span class=\"label label-primary\">组长</span>
              ";
            }
            // line 135
            echo "
              ";
            // line 136
            if (((isset($context["is_groupmember"]) ? $context["is_groupmember"] : null) == 3)) {
                echo " 
              <span class=\"label label-primary\">副组长</span>  
              ";
            }
            // line 138
            echo "  
            </p>
            <a href=\"";
            // line 140
            echo $this->env->getExtension('routing')->getPath("group_member_center");
            echo "\" class=\"btn btn-default btn-sm\" role=\"button\">我的小组</a>
          </div>
          <hr>
           <p class=\"group-message clearfix\">
              <span><strong>";
            // line 144
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userIsGroupMember"]) ? $context["userIsGroupMember"] : null), "threadNum", array()), "html", null, true);
            echo "</strong>话题</span>
              <span><strong>";
            // line 145
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userIsGroupMember"]) ? $context["userIsGroupMember"] : null), "postNum", array()), "html", null, true);
            echo "</strong>回复</span>
            </p>
        </div>
      </div>
    </div>
  ";
        }
        // line 151
        echo "  <div class=\"panel panel-default\">
    <div class=\"panel-heading\"><h3 class=\"panel-title\">小组组长</h3></div>
    <div class=\"panel-body\">
      <div class=\"media group-item\">
        <div class=\"media-left\">
          ";
        // line 156
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "user_avatar", array(0 => (isset($context["groupOwner"]) ? $context["groupOwner"] : null), 1 => ""), "method"), "html", null, true);
        echo "
        </div>
        <div class=\"media-body\">
          <div><a class=\"gray-darker\" href=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute((isset($context["groupOwner"]) ? $context["groupOwner"] : null), "id", array()))), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["groupOwner"]) ? $context["groupOwner"] : null), "nickname", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["groupOwner"]) ? $context["groupOwner"] : null), "nickname", array()), "html", null, true);
        echo "</a></div>
          <span class=\"text-sm gray-medium\">";
        // line 160
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
        // line 170
        if ((isset($context["recentlyJoinMember"]) ? $context["recentlyJoinMember"] : null)) {
            // line 171
            echo "        <ul class=\"user-avatar-list clearfix\">
          ";
            // line 172
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["recentlyJoinMember"]) ? $context["recentlyJoinMember"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
                // line 173
                echo "            <li>
              ";
                // line 174
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "user_avatar", array(0 => $this->getAttribute((isset($context["recentlyMembers"]) ? $context["recentlyMembers"] : null), $this->getAttribute($context["member"], "userId", array()), array(), "array"), 1 => "", 2 => "avatar-sm"), "method"), "html", null, true);
                echo "
            </li>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 177
            echo "        </ul>
      ";
        } else {
            // line 179
            echo "        <div class=\"empty\">还没有小组成员！</div>
      ";
        }
        // line 181
        echo "    </div>
  </div>

  <div class=\"panel panel-default\">
    <div class=\"panel-heading\"><h3 class=\"panel-title\">热门小组</h3></div>
    <div class=\"panel-body\">
      <div class=\"media-group-list\">
      ";
        // line 188
        $context["hotGroups"] = $this->env->getExtension('topxia_data_twig')->getData("HotGroup", array("count" => 3));
        // line 189
        echo "      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["hotGroups"]) ? $context["hotGroups"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 190
            echo "        <div class=\"media media-group\">
          <div class=\"media-left prm\">
            <a href=\"";
            // line 192
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_show", array("id" => $this->getAttribute($context["group"], "id", array()))), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "title", array()), "html", null, true);
            echo "\">
              <img src=\"";
            // line 193
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute($context["group"], "logo", array()), "group.png"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "title", array()), "html", null, true);
            echo "\" class=\"avatar-square-md\">
            </a>
          </div>
          <div class=\"media-body\">
            <div class=\"title\">
              <a class=\"gray-darker\" href=\"";
            // line 198
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_show", array("id" => $this->getAttribute($context["group"], "id", array()))), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "title", array()), "html", null, true);
            echo "\">
                ";
            // line 199
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "title", array()), "html", null, true);
            echo "
              </a>
            </div>
            <div class=\"metas\">
              <span><i class=\"es-icon es-icon-people\"></i>";
            // line 203
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "memberNum", array()), "html", null, true);
            echo "</span>
              <span><i class=\"es-icon es-icon-textsms\"></i>";
            // line 204
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "threadNum", array()), "html", null, true);
            echo "</span>
            </div>
          </div>
        </div>
      ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 209
            echo "        <div class=\"empty\">暂无小组信息！</div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 211
        echo "      </div>
      
    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Group:groupmember.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  520 => 211,  513 => 209,  503 => 204,  499 => 203,  492 => 199,  486 => 198,  476 => 193,  470 => 192,  466 => 190,  460 => 189,  458 => 188,  449 => 181,  445 => 179,  441 => 177,  432 => 174,  429 => 173,  425 => 172,  422 => 171,  420 => 170,  407 => 160,  399 => 159,  393 => 156,  386 => 151,  377 => 145,  373 => 144,  366 => 140,  362 => 138,  356 => 136,  353 => 135,  347 => 132,  343 => 130,  339 => 129,  337 => 128,  332 => 126,  326 => 123,  320 => 119,  318 => 118,  310 => 113,  304 => 111,  297 => 108,  295 => 107,  292 => 106,  289 => 105,  281 => 101,  274 => 96,  270 => 94,  266 => 92,  260 => 90,  258 => 89,  255 => 88,  247 => 85,  241 => 84,  239 => 83,  234 => 81,  231 => 80,  226 => 79,  224 => 78,  220 => 77,  213 => 72,  210 => 71,  205 => 69,  202 => 68,  199 => 67,  195 => 65,  192 => 64,  190 => 63,  183 => 58,  179 => 56,  176 => 55,  168 => 52,  162 => 50,  160 => 49,  155 => 47,  152 => 46,  147 => 45,  143 => 43,  140 => 42,  138 => 41,  134 => 40,  120 => 31,  114 => 30,  106 => 25,  102 => 23,  92 => 21,  90 => 20,  82 => 19,  74 => 18,  68 => 14,  64 => 12,  56 => 11,  53 => 10,  51 => 9,  46 => 6,  43 => 5,  35 => 3,  31 => 1,  29 => 4,  27 => 2,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle:Group:layout.html.twig' %}*/
/* {% set script_controller = 'group/group_member' %}*/
/* {% block title %}{{groupinfo.title}}小组 - {{ parent() }}{% endblock %}*/
/* {% set groupNav = 'member' %}*/
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
/*   <div class="es-section">*/
/*     <ul class="nav nav-tabs">*/
/*       <li {% if groupNav=="index" %}class="active"{% endif %}><a href="{{path('group_show',{id:groupinfo.id})}}">小组首页</a></li>*/
/*       <li {% if groupNav=="member" %}class="active"{% endif %}><a href="{{path('group_member',{id:groupinfo.id})}}">小组成员</a></li>*/
/*       {% if is_groupmember==2 or is_granted('ROLE_ADMIN') or is_groupmember==3%}*/
/*         <li {% if groupNav=="setting" %}class="active" {% endif %}><a  href="{{path('group_set',{id:groupinfo.id})}}">小组设置</a></li>*/
/*       {% endif %}*/
/*     </ul>*/
/* */
/*     {{ web_macro.flash_messages() }}*/
/*     <div class="es-piece">*/
/*       <div class="piece-header">组长</div>*/
/*       <div class="piece-body clearfix">*/
/*         <div class="grouplist">*/
/*           <a href="{{path('user_show',{id:owner_info.id})}}" title="{{owner_info.nickname}}"  >*/
/*             <img src="{{ filepath(owner_info.largeAvatar, 'avatar.png') }}" alt="{{owner_info.nickname}}" class="avatar-md">*/
/*           </a>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/* */
/*     <div class="es-piece">*/
/*       <div class="piece-header">副组长</div>*/
/*       <div class="piece-body clearfix">*/
/*         <form action="{{path('group_remove_admin',{id:groupinfo.id})}}" method="post" id="admin-form">*/
/*           {% if groupAdmin %}*/
/*             {% if is_groupmember==2 or is_granted('ROLE_ADMIN')  %}*/
/*               <button id="remove-admin-btn" type="button" class="btn btn-default btn-sm pull-right">撤消副组长</button>*/
/*             {% endif %}*/
/*             {% for member in groupAdmin %}*/
/*               <div class="grouplist"  style="width: 82px;">*/
/*                 <p>{{ web_macro.user_avatar(usersLikeAdmin[member.userId] , '','avatar-md') }}</p>*/
/*                */
/*                 {% if is_groupmember==2 or is_granted('ROLE_ADMIN') %}*/
/*                   <input type="checkbox" value="{{member.userId}}" name="adminId[]"class="checkboxs">*/
/*                 {% endif %}*/
/*                 <br>*/
/*               </div>*/
/*             {% endfor %}*/
/*           {% else %}*/
/*             <p><span class="text-muted">还没有副组长！</span></p>*/
/*           {% endif %}*/
/*         </form>*/
/*       </div>*/
/*     </div>*/
/* */
/*     <div class="btn-group pull-right">*/
/*       {% if groupmember_info %}*/
/*         {% if is_groupmember==2 or is_granted('ROLE_ADMIN') or is_groupmember==3 %}*/
/*           <button  id="delete-btn" type="button" class="btn btn-default btn-sm ">踢出成员</button>*/
/*         {% endif %}*/
/*         {% if is_groupmember==2 or is_granted('ROLE_ADMIN') %}*/
/*           <button  id="set-admin-btn" type="button" class="btn btn-default btn-sm ">设置副组长</button>*/
/*           <input id="set-admin-url" type="hidden" value="{{path('group_set_admin',{id:groupinfo.id})}}">*/
/*         {% endif %}*/
/*       {% endif %}*/
/*     </div>*/
/* */
/*     <div class="es-piece">*/
/*       <div class="piece-header">组员</div>*/
/*       <div class="piece-body">*/
/*         <form action="{{path('group_member_delete',{id:groupinfo.id})}}" method="post" id="member-form" class="clearfix">*/
/*           {% if groupmember_info %}*/
/*             {% for member in groupmember_info %}*/
/*               <div class="grouplist">*/
/*                 <p>{{ web_macro.user_avatar(members[member.userId] , '','avatar-md') }}</p>*/
/*                 */
/*                 {% if is_groupmember==2 or is_granted('ROLE_ADMIN') or is_groupmember==3%}*/
/*                   <input type="checkbox" value="{{member.userId}}" name="memberId[]"class="checkboxs">*/
/*                 {% endif %}<br>*/
/*               </div>*/
/*             {% endfor %}*/
/*             */
/*             {% if is_groupmember==2 or is_granted('ROLE_ADMIN') or is_groupmember==3 %}*/
/*               <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/*             {% endif %}*/
/*             */
/*           {% else %}*/
/*             <p><span class="text-muted">还没有小组成员！</span></p>*/
/*           {% endif %}*/
/*         </form>*/
/*       </div>*/
/*     </div>*/
/*     */
/*     <nav class="text-center">*/
/*       {{ web_macro.paginator(paginator) }}*/
/*     </nav>*/
/*   </div>*/
/* {% endblock %}*/
/* {% block group_side %}*/
/* */
/*   {% if is_groupmember != 0 %}*/
/*     <div class="mbm"><a href="{{path('group_thread_add',{id:groupinfo.id})}}" class="btn btn-success btn-xlg btn-block" role="button"><i class="es-icon es-icon-comment mrs text-xlg"></i>发表话题</a>*/
/*     </div>*/
/*   {% endif %}*/
/*   <form class="mbl" action="{{path('group_search',{id:groupinfo.id})}}" method="get">*/
/*     <div class="search-with-btn">*/
/*       <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/*       <input type="text" class="form-control" placeholder="组内搜索" name="keyWord">*/
/*       <button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search"></span></button>*/
/*     </div>*/
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
/*               <span class="label label-primary">组长</span>*/
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
/*               {{ web_macro.user_avatar(recentlyMembers[member.userId] ,'', 'avatar-sm') }}*/
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
/* {% endblock %}*/
