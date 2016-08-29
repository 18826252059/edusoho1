<?php

/* TopxiaWebBundle:Group:thread.html.twig */
class __TwigTemplate_88454f9137d8605187d39669dc9f46f6105a718d848ba4ea50c8c7d4230fc1c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:Group:layout.html.twig", "TopxiaWebBundle:Group:thread.html.twig", 1);
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
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["threadMain"]) ? $context["threadMain"] : null), "title", array()), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["groupinfo"]) ? $context["groupinfo"] : null), "title", array()), "html", null, true);
        echo " ";
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
        echo $this->env->getExtension('topxia_web_twig')->plainTextFilter((isset($context["threadMainContent"]) ? $context["threadMainContent"] : null), 100);
    }

    // line 7
    public function block_group_main($context, array $blocks = array())
    {
        // line 8
        echo "  <style>
    .ke-icon-accessory {
      background-image: url('/assets/img/default/iconfont-accessory.png');
      background-position:center;
      width: 16px;
      height: 16px;
    }
    .ke-icon-accessory-red {
      background-image: url('/assets/img/default/iconfont-accessory-red.png');
      background-position:center;
      width: 16px;
      height: 16px;
    }
  </style>
  
  <div class=\"panel panel-default\">
    <div class=\"panel-heading\">
      <h3 class=\"panel-title\">
        ";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["threadMain"]) ? $context["threadMain"] : null), "title", array()), "html", null, true);
        echo "
        ";
        // line 27
        if ($this->getAttribute((isset($context["threadMain"]) ? $context["threadMain"] : null), "isStick", array())) {
            // line 28
            echo "          <span class=\"label label-primary\">置顶</span>
        ";
        }
        // line 30
        echo "        ";
        if ($this->getAttribute((isset($context["threadMain"]) ? $context["threadMain"] : null), "isElite", array())) {
            // line 31
            echo "          <span class=\"label label-danger\">精华</span>
        ";
        }
        // line 33
        echo "        ";
        if ($this->env->getExtension('topxia_web_twig')->isFeatureEnabled("group_reward")) {
            // line 34
            echo "          ";
            if ((($this->getAttribute((isset($context["threadMain"]) ? $context["threadMain"] : null), "type", array()) == "reward") && ($this->getAttribute((isset($context["threadMain"]) ? $context["threadMain"] : null), "rewardCoin", array()) > 0))) {
                // line 35
                echo "            <span class=\"label label-danger\">奖</span>
            <span style=\"color:#d9534f;\" class=\"mll\"> 悬赏:";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["threadMain"]) ? $context["threadMain"] : null), "rewardCoin", array()), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($this->env->getExtension('topxia_web_twig')->getSetting("coin"), "coin_name", array()), "html", null, true);
                echo "</span>
          ";
            }
            // line 38
            echo "        ";
        }
        // line 39
        echo "      </h3>
      <div class=\"metas text-sm color-gray clearfix\">
        <div class=\"es-share dropdown pull-right\">
          <span class=\"es-share top\" style=\"font-size:14px;\">
            <a href=\"javascript:;\" class=\"gray-dark\" data-toggle=\"dropdown\"><i class=\"es-icon es-icon-share  prs\"></i> 分享</a>
            ";
        // line 44
        $this->loadTemplate("TopxiaWebBundle:Common:share-dropdown.html.twig", "TopxiaWebBundle:Group:thread.html.twig", 44)->display(array_merge($context, array("type" => "group_thread", "thread" => (isset($context["threadMain"]) ? $context["threadMain"] : null), "group" => (isset($context["groupinfo"]) ? $context["groupinfo"] : null))));
        // line 45
        echo "          </span>
        </div>
        <div class=\"pull-right mrm\" id=\"thread-list\" style=\"margin-top:2px;\">
          ";
        // line 48
        if (($this->getAttribute((isset($context["threadMain"]) ? $context["threadMain"] : null), "userId", array()) != $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))) {
            // line 49
            echo "            <a href=\"javascript:;\" class=\"uncollect-btn link-dark\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_thread_uncollect", array("threadId" => $this->getAttribute((isset($context["threadMain"]) ? $context["threadMain"] : null), "id", array()))), "html", null, true);
            echo "\" ";
            if (((isset($context["isCollected"]) ? $context["isCollected"] : null) == false)) {
                echo " style=\"display:none;\"";
            }
            echo "><i class=\"es-icon es-icon-favorite mrs\"></i> 已收藏</a>
            <a href=\"javascript:;\" class=\"collect-btn link-dark\" data-url=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_thread_collect", array("threadId" => $this->getAttribute((isset($context["threadMain"]) ? $context["threadMain"] : null), "id", array()))), "html", null, true);
            echo "\" ";
            if (((isset($context["isCollected"]) ? $context["isCollected"] : null) == true)) {
                echo " style=\"display:none;\"";
            }
            echo "><i class=\"es-icon es-icon-favoriteoutline mrs\"></i>收藏</a>
          ";
        }
        // line 52
        echo "        </div>
        发表于 ";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->smarttimeFilter($this->getAttribute((isset($context["threadMain"]) ? $context["threadMain"] : null), "createdTime", array())), "html", null, true);
        echo "
        <span class=\"mll\">";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["threadMain"]) ? $context["threadMain"] : null), "hitNum", array()), "html", null, true);
        echo " 次查看</span>
      </div>
    </div>
    <div class=\"panel-body clearfix\" id=\"post-action\">
      ";
        // line 58
        echo $this->getAttribute((isset($context["threadMain"]) ? $context["threadMain"] : null), "content", array());
        echo "
      ";
        // line 59
        if ((isset($context["attachs"]) ? $context["attachs"] : null)) {
            // line 60
            echo "        <hr>
        <span class=\"glyphicon glyphicon-paperclip\"></span> 附件下载 :
        <div class=\"row clearfix mtm\">
          ";
            // line 63
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attachs"]) ? $context["attachs"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["attach"]) {
                // line 64
                echo "            <div class=\"pull-left attach col-md-4 col-sm-6 col-lg-4\"  data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
                if ($this->getAttribute($context["attach"], "description", array())) {
                    echo "描述：";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["attach"], "description", array()), "html", null, true);
                }
                echo "  上传于 ";
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->smarttimeFilter($this->getAttribute($this->getAttribute((isset($context["files"]) ? $context["files"] : null), $this->getAttribute($context["attach"], "fileId", array()), array(), "array"), "createdTime", array())), "html", null, true);
                echo "\">
              ";
                // line 65
                if (((($this->getAttribute($context["attach"], "coin", array()) > 0) && ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()) != $this->getAttribute($context["attach"], "userId", array()))) && $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()))) {
                    // line 66
                    echo "                <a href=\"javascript:\" data-toggle=\"modal\" data-target=\"#modal\" data-urL=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_thread_buy_attach", array("attachId" => $this->getAttribute($context["attach"], "id", array()))), "html", null, true);
                    echo "\" class=\"pull-left mrm\"><img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getDefaultPath($this->env->getExtension('topxia_web_twig')->getFileType($this->getAttribute($context["attach"], "title", array()), ".png")), "html", null, true);
                    echo "\" class=\"avatar-md\"></a>
              ";
                } else {
                    // line 68
                    echo "                <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_attach_download", array("fileId" => $this->getAttribute($context["attach"], "id", array()))), "html", null, true);
                    echo "\" class=\"pull-left mrm\"><img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getDefaultPath($this->env->getExtension('topxia_web_twig')->getFileType($this->getAttribute($context["attach"], "title", array()), ".png")), "html", null, true);
                    echo "\" class=\"avatar-md\"></a>
              ";
                }
                // line 70
                echo "              <div class=\"media-body\">
                <div class=\"metas mts\">
                  ";
                // line 72
                if (((($this->getAttribute($context["attach"], "coin", array()) > 0) && ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()) != $this->getAttribute($context["attach"], "userId", array()))) && $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()))) {
                    // line 73
                    echo "                    <strong><a href=\"javascript:\" data-toggle=\"modal\" data-target=\"#modal\" data-urL=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_thread_buy_attach", array("attachId" => $this->getAttribute($context["attach"], "id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["attach"], "title", array()), "html", null, true);
                    echo "</a></strong>
                  ";
                } else {
                    // line 75
                    echo "                    <strong><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_attach_download", array("fileId" => $this->getAttribute($context["attach"], "id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["attach"], "title", array()), "html", null, true);
                    echo "</a></strong>
                  ";
                }
                // line 77
                echo "                </div>

                <div class=\"content\" style=\"color: #999;font-size:11px;\">
                  ";
                // line 80
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->fileSizeFilter($this->getAttribute($this->getAttribute((isset($context["files"]) ? $context["files"] : null), $this->getAttribute($context["attach"], "fileId", array()), array(), "array"), "size", array())), "html", null, true);
                echo "
                  ";
                // line 81
                if (($this->getAttribute($context["attach"], "coin", array()) > 0)) {
                    // line 82
                    echo "                    <span class=\"mls\">售价:";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["attach"], "coin", array()), "html", null, true);
                    echo twig_escape_filter($this->env, $this->getAttribute($this->env->getExtension('topxia_web_twig')->getSetting("coin"), "coin_name", array()), "html", null, true);
                    echo "</span>
                    ";
                } else {
                    // line 84
                    echo "                    <span class=\"mls\">免费</span>
                  ";
                }
                // line 86
                echo "                  <br>下载次数：";
                echo twig_escape_filter($this->env, $this->getAttribute($context["attach"], "hitNum", array()), "html", null, true);
                echo "
                </div>
              </div>
            </div> 
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attach'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 91
            echo "        </div>
      ";
        }
        // line 93
        echo "      <div class=\"mtl text-right\">
        ";
        // line 94
        if (($this->env->getExtension('topxia_web_twig')->isFeatureEnabled("group_reward") && ($this->getAttribute((isset($context["threadMain"]) ? $context["threadMain"] : null), "count", array()) == 1))) {
            // line 95
            echo "          ";
            if ((((($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()) == $this->getAttribute((isset($context["owner"]) ? $context["owner"] : null), "id", array())) || $this->env->getExtension('security')->isGranted("ROLE_ADMIN")) || ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()) == $this->getAttribute((isset($context["groupinfo"]) ? $context["groupinfo"] : null), "ownerId", array()))) || ((isset($context["is_groupmember"]) ? $context["is_groupmember"] : null) == 3))) {
                // line 96
                echo "          ";
            } else {
                // line 97
                echo "            ";
                if ($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array())) {
                    // line 98
                    echo "            <a class=\"btn btn-default btn-sm mrm\" href=\"javascript:\" data-toggle=\"modal\" data-target=\"#modal\" data-urL=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_thread_hide", array("threadId" => $this->getAttribute((isset($context["threadMain"]) ? $context["threadMain"] : null), "id", array()))), "html", null, true);
                    echo "\">查看隐藏内容</a>
            ";
                }
                // line 100
                echo "          ";
            }
            // line 101
            echo "        ";
        }
        // line 102
        echo "        
        ";
        // line 103
        if ((((($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()) == $this->getAttribute((isset($context["owner"]) ? $context["owner"] : null), "id", array())) || $this->env->getExtension('security')->isGranted("ROLE_ADMIN")) || ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()) == $this->getAttribute((isset($context["groupinfo"]) ? $context["groupinfo"] : null), "ownerId", array()))) || ((isset($context["is_groupmember"]) ? $context["is_groupmember"] : null) == 3))) {
            // line 104
            echo "          <a class=\"btn btn-default btn-sm mrm\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_thread_update", array("id" => $this->getAttribute((isset($context["groupinfo"]) ? $context["groupinfo"] : null), "id", array()), "threadId" => $this->getAttribute((isset($context["threadMain"]) ? $context["threadMain"] : null), "id", array()))), "html", null, true);
            echo "\"> 编辑</a>
        ";
        }
        // line 106
        echo "
        ";
        // line 107
        if (((((isset($context["is_groupmember"]) ? $context["is_groupmember"] : null) == 2) || $this->env->getExtension('security')->isGranted("ROLE_ADMIN")) || ((isset($context["is_groupmember"]) ? $context["is_groupmember"] : null) == 3))) {
            // line 108
            echo "          ";
            if (($this->getAttribute((isset($context["threadMain"]) ? $context["threadMain"] : null), "isElite", array()) == 1)) {
                // line 109
                echo "            <a id=\"elite\"  title=\"取消加精\" class=\"btn btn-default btn-sm mrm\"
              href=\"javascript:\"
            data-url=\"";
                // line 111
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_thread_removeElite", array("threadId" => $this->getAttribute((isset($context["threadMain"]) ? $context["threadMain"] : null), "id", array()))), "html", null, true);
                echo "\">取消加精</a>
          ";
            } else {
                // line 113
                echo "            <a id=\"elite\"  title=\"加精\" class=\"btn btn-default btn-sm mrm\"
            href=\"javascript:\" data-url=\"";
                // line 114
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_thread_setElite", array("threadId" => $this->getAttribute((isset($context["threadMain"]) ? $context["threadMain"] : null), "id", array()))), "html", null, true);
                echo "\">加精</a>
          ";
            }
            // line 116
            echo "
          ";
            // line 117
            if (($this->getAttribute((isset($context["threadMain"]) ? $context["threadMain"] : null), "isStick", array()) == 1)) {
                // line 118
                echo "             <a id=\"stick\" title=\"取消置顶\" class=\"btn btn-default btn-sm mrm\"
            href=\"javascript:\" data-url=\"";
                // line 119
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_thread_removeStick", array("threadId" => $this->getAttribute((isset($context["threadMain"]) ? $context["threadMain"] : null), "id", array()))), "html", null, true);
                echo "\"> 取消置顶</a>
          ";
            } else {
                // line 121
                echo "            <a id=\"stick\"  title=\"置顶\" class=\"btn btn-default btn-sm mrm\"
            href=\"javascript:\" data-url=\"";
                // line 122
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_thread_setStick", array("threadId" => $this->getAttribute((isset($context["threadMain"]) ? $context["threadMain"] : null), "id", array()))), "html", null, true);
                echo "\">置顶</a>
          ";
            }
            // line 124
            echo "
          ";
            // line 125
            if ($this->env->getExtension('topxia_web_twig')->isFeatureEnabled("group_reward")) {
                // line 126
                echo "            ";
                if ((($this->env->getExtension('security')->isGranted("ROLE_ADMIN") || ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()) == $this->getAttribute((isset($context["groupinfo"]) ? $context["groupinfo"] : null), "ownerId", array()))) || ((isset($context["is_groupmember"]) ? $context["is_groupmember"] : null) == 3))) {
                    // line 127
                    echo "              ";
                    if ((($this->getAttribute((isset($context["threadMain"]) ? $context["threadMain"] : null), "type", array()) == "reward") && ($this->getAttribute((isset($context["threadMain"]) ? $context["threadMain"] : null), "rewardCoin", array()) > 0))) {
                        // line 128
                        echo "                ";
                        if ( !(isset($context["isAdopt"]) ? $context["isAdopt"] : null)) {
                            // line 129
                            echo "                  <a id=\"cancelReward\" title=\"取消悬赏\" class=\"btn btn-default btn-sm mrm\"
                  href=\"javascript:\" data-url=\"";
                            // line 130
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_thread_cancel_reward", array("threadId" => $this->getAttribute((isset($context["threadMain"]) ? $context["threadMain"] : null), "id", array()))), "html", null, true);
                            echo "\"><span class=\"glyphicon glyphicon-ban-circle\"></span> 取消悬赏</a>
                ";
                        }
                        // line 132
                        echo "              ";
                    } else {
                        // line 133
                        echo "                ";
                        if (($this->getAttribute((isset($context["threadMain"]) ? $context["threadMain"] : null), "type", array()) == "default")) {
                            // line 134
                            echo "                  <a id=\"rewardCoin\"  title=\"悬赏\" class=\"btn btn-default btn-sm mrm\"
                    href=\"javascript:\" data-toggle=\"modal\" data-target=\"#modal\" data-urL=\"";
                            // line 135
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_thread_reward", array("threadId" => $this->getAttribute((isset($context["threadMain"]) ? $context["threadMain"] : null), "id", array()))), "html", null, true);
                            echo "\"><span class=\"glyphicon glyphicon-usd\"></span>  悬赏</a>
                ";
                        }
                        // line 137
                        echo "              ";
                    }
                    // line 138
                    echo "            ";
                }
                // line 139
                echo "          ";
            }
            // line 140
            echo "        ";
        }
        // line 141
        echo "        ";
        if (($this->getAttribute((isset($context["filters"]) ? $context["filters"] : null), "type", array()) == "onlyOwner")) {
            // line 142
            echo "          <a class=\"btn btn-default btn-sm mrm\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_thread_show", array("id" => $this->getAttribute((isset($context["groupinfo"]) ? $context["groupinfo"] : null), "id", array()), "threadId" => $this->getAttribute((isset($context["threadMain"]) ? $context["threadMain"] : null), "id", array()), "type" => "all", "sort" => $this->getAttribute((isset($context["filters"]) ? $context["filters"] : null), "sort", array()))), "html", null, true);
            echo "\" %}><span class=\"glyphicon glyphicon-filter\"></span> 查看全部</a>
        ";
        } else {
            // line 144
            echo "          <a class=\"btn btn-default btn-sm mrm\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_thread_show", array("id" => $this->getAttribute((isset($context["groupinfo"]) ? $context["groupinfo"] : null), "id", array()), "threadId" => $this->getAttribute((isset($context["threadMain"]) ? $context["threadMain"] : null), "id", array()), "type" => "onlyOwner", "sort" => $this->getAttribute((isset($context["filters"]) ? $context["filters"] : null), "sort", array()))), "html", null, true);
            echo "\">只看楼主</a>
        ";
        }
        // line 146
        echo "        
        ";
        // line 147
        if (($this->getAttribute((isset($context["filters"]) ? $context["filters"] : null), "sort", array()) == "desc")) {
            // line 148
            echo "          <a type=\"button\" class=\"btn btn-default btn-sm mrm\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_thread_show", array("id" => $this->getAttribute((isset($context["groupinfo"]) ? $context["groupinfo"] : null), "id", array()), "threadId" => $this->getAttribute((isset($context["threadMain"]) ? $context["threadMain"] : null), "id", array()), "type" => $this->getAttribute((isset($context["filters"]) ? $context["filters"] : null), "type", array()), "sort" => "asc")), "html", null, true);
            echo "\">顺序查看</a>
        ";
        } else {
            // line 150
            echo "          <a type=\"button\" class=\"btn btn-default btn-sm mrm\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_thread_show", array("id" => $this->getAttribute((isset($context["groupinfo"]) ? $context["groupinfo"] : null), "id", array()), "threadId" => $this->getAttribute((isset($context["threadMain"]) ? $context["threadMain"] : null), "id", array()), "type" => $this->getAttribute((isset($context["filters"]) ? $context["filters"] : null), "type", array()), "sort" => "desc")), "html", null, true);
            echo "\">倒序查看</a>
        ";
        }
        // line 152
        echo "      </div>
    </div>
  </div>

  ";
        // line 156
        if ($this->env->getExtension('topxia_web_twig')->isFeatureEnabled("group_reward")) {
            // line 157
            echo "    ";
            if ((isset($context["isAdopt"]) ? $context["isAdopt"] : null)) {
                // line 158
                echo "    <div class=\"panel panel-default group-post-list\">
      <div class=\"panel-heading\" style=\"color:#d9534f;\">
        最佳回答
      </div>
      <div class=\"panel-body\">
        <ul class=\"media-list\">
          <li class=\"media\">
            <a href=\"";
                // line 165
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($this->getAttribute((isset($context["isAdopt"]) ? $context["isAdopt"] : null), 0, array(), "array"), "userId", array()))), "html", null, true);
                echo "\" class=\"pull-left\"><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute($this->getAttribute((isset($context["postMember"]) ? $context["postMember"] : null), $this->getAttribute($this->getAttribute((isset($context["isAdopt"]) ? $context["isAdopt"] : null), 0, array(), "array"), "userId", array()), array(), "array"), "smallAvatar", array()), "avatar.png"), "html", null, true);
                echo "\" class=\"avatar-md\"></a>
            <div class=\"media-body\">
              <div class=\"metas\">
                <strong>";
                // line 168
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "user_link", array(0 => $this->getAttribute((isset($context["postMember"]) ? $context["postMember"] : null), $this->getAttribute($this->getAttribute((isset($context["isAdopt"]) ? $context["isAdopt"] : null), 0, array(), "array"), "userId", array()), array(), "array")), "method"), "html", null, true);
                echo "</strong>
                <span class=\"mhm\">";
                // line 169
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->smarttimeFilter($this->getAttribute($this->getAttribute((isset($context["isAdopt"]) ? $context["isAdopt"] : null), 0, array(), "array"), "createdTime", array())), "html", null, true);
                echo " </span>
              </div>
              <div class=\"content\">
                ";
                // line 172
                echo $this->getAttribute($this->getAttribute((isset($context["isAdopt"]) ? $context["isAdopt"] : null), 0, array(), "array"), "content", array());
                echo "
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
    ";
            }
            // line 180
            echo "  ";
        }
        // line 181
        echo "
  ";
        // line 182
        if ($this->getAttribute((isset($context["threadMain"]) ? $context["threadMain"] : null), "postNum", array())) {
            // line 183
            echo "  <div class=\"panel panel-default group-post-list\">
    <div class=\"panel-heading\">
      ";
            // line 185
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["threadMain"]) ? $context["threadMain"] : null), "postNum", array()), "html", null, true);
            echo "回复
    </div>
    <div class=\"panel-body\">
      <ul class=\"media-list\">
        ";
            // line 189
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["post"]);
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
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 190
                echo "          ";
                $context["subPosts"] = (($this->getAttribute((isset($context["postReply"]) ? $context["postReply"] : null), $this->getAttribute($context["post"], "id", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["postReply"]) ? $context["postReply"] : null), $this->getAttribute($context["post"], "id", array()), array(), "array"), null)) : (null));
                // line 191
                echo "          <li id=\"post-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
                echo "\" class=\"media\">
            <a href=\"";
                // line 192
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($context["post"], "userId", array()))), "html", null, true);
                echo "\" class=\"pull-left\"><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute($this->getAttribute((isset($context["postMember"]) ? $context["postMember"] : null), $this->getAttribute($context["post"], "userId", array()), array(), "array"), "smallAvatar", array()), "avatar.png"), "html", null, true);
                echo "\" class=\"avatar-sm\"></a>
            <div class=\"media-body\">
              <div class=\"metas\">
                <span class=\"floor\">
                  ";
                // line 196
                if (($this->getAttribute((isset($context["filters"]) ? $context["filters"] : null), "sort", array()) == "desc")) {
                    // line 197
                    echo "                    ";
                    echo twig_escape_filter($this->env, ((((isset($context["postCount"]) ? $context["postCount"] : null) + 1) - ($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "getPerPageCount", array(), "method") * ($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "currentPage", array()) - 1))) - $this->getAttribute($context["loop"], "index0", array())), "html", null, true);
                    echo "楼
                  ";
                } else {
                    // line 199
                    echo "                    ";
                    echo twig_escape_filter($this->env, (($this->getAttribute($context["loop"], "index", array()) + 1) + ($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "getPerPageCount", array(), "method") * ($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "currentPage", array()) - 1))), "html", null, true);
                    echo "楼
                  ";
                }
                // line 201
                echo "                </span>
                <strong>";
                // line 202
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "user_link", array(0 => $this->getAttribute((isset($context["postMember"]) ? $context["postMember"] : null), $this->getAttribute($context["post"], "userId", array()), array(), "array")), "method"), "html", null, true);
                echo "</strong>
                <span class=\"divider mhm\">•</span>
                <span >";
                // line 204
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->smarttimeFilter($this->getAttribute($context["post"], "createdTime", array())), "html", null, true);
                echo " </span>
              </div>

              <div class=\"content editor-text\">
                ";
                // line 208
                echo $this->getAttribute($context["post"], "content", array());
                echo "
              </div>

              <div class=\"actions\">
                ";
                // line 212
                if ((((($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()) == $this->getAttribute($context["post"], "userId", array())) || $this->env->getExtension('security')->isGranted("ROLE_ADMIN")) || ((isset($context["is_groupmember"]) ? $context["is_groupmember"] : null) == 3)) || ((isset($context["is_groupmember"]) ? $context["is_groupmember"] : null) == 2))) {
                    // line 213
                    echo "                  <a title=\"确定删除这条回复\" class=\"mhm post-delete-btn\" href=\"javascript:\" data-url=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_thread_deletePost", array("postId" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
                    echo "\">删除</a>
                ";
                }
                // line 215
                echo "                
                ";
                // line 216
                if ($this->env->getExtension('topxia_web_twig')->isFeatureEnabled("group_reward")) {
                    // line 217
                    echo "                  ";
                    if (( !(isset($context["isAdopt"]) ? $context["isAdopt"] : null) && ($this->getAttribute((isset($context["threadMain"]) ? $context["threadMain"] : null), "type", array()) == "reward"))) {
                        // line 218
                        echo "                    ";
                        if ((($this->env->getExtension('security')->isGranted("ROLE_ADMIN") || ((isset($context["is_groupmember"]) ? $context["is_groupmember"] : null) == 3)) || ((isset($context["is_groupmember"]) ? $context["is_groupmember"] : null) == 2))) {
                            // line 219
                            echo "                      <a title=\"确定采纳这条回复\" class=\"mhm post-adopt-btn\" href=\"javascript:\" data-url=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_thread_adopt", array("postId" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
                            echo "\">采纳</a>
                    ";
                        }
                        // line 221
                        echo "                  ";
                    }
                    // line 222
                    echo "                ";
                }
                // line 223
                echo "
                ";
                // line 224
                if ( !(isset($context["subPosts"]) ? $context["subPosts"] : null)) {
                    // line 225
                    echo "                  <a href=\"javascript:\" class=\"reply\" id=\"reply-";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
                    echo "\"  postId=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
                    echo "\" postName=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["postMember"]) ? $context["postMember"] : null), $this->getAttribute($context["post"], "userId", array()), array(), "array"), "nickname", array()), "html", null, true);
                    echo "\" data-from-user-id-nosub=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["postMember"]) ? $context["postMember"] : null), $this->getAttribute($context["post"], "userId", array()), array(), "array"), "id", array()), "html", null, true);
                    echo "\">回复</a>
                  <a href=\"javascript:\" class=\"unreply\" id=\"unreply-";
                    // line 226
                    echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
                    echo "\" postId=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
                    echo "\" style=\"display:none;\">收起</a>
                ";
                } else {
                    // line 228
                    echo "                  <a style=\"display:none;\" href=\"javascript:\" class=\"reply\" id=\"reply-";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
                    echo "\"  postId=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
                    echo "\" postName=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["postMember"]) ? $context["postMember"] : null), $this->getAttribute($context["post"], "userId", array()), array(), "array"), "nickname", array()), "html", null, true);
                    echo "\" data-from-user-id-nosub=\"\">回复(";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["postReplyCount"]) ? $context["postReplyCount"] : null), $this->getAttribute($context["post"], "id", array()), array(), "array"), "html", null, true);
                    echo ")</a>
                  <a href=\"javascript:\" class=\"unreply\" id=\"unreply-";
                    // line 229
                    echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
                    echo "\" postId=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
                    echo "\" >收起</a>
                ";
                }
                // line 231
                echo "              </div>
              <div class=\"reply-";
                // line 232
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
                echo "\">
                ";
                // line 233
                if ((isset($context["subPosts"]) ? $context["subPosts"] : null)) {
                    // line 234
                    echo "                  ";
                    $this->loadTemplate("TopxiaWebBundle:Group:post-reply-list.html.twig", "TopxiaWebBundle:Group:thread.html.twig", 234)->display(array_merge($context, array("posts" => (isset($context["subPosts"]) ? $context["subPosts"] : null), "users" => (isset($context["postReplyMembers"]) ? $context["postReplyMembers"] : null), "postMain" => $context["post"])));
                    // line 235
                    echo "                ";
                } else {
                    // line 236
                    echo "                  <div class=\"reply-";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
                    echo "\" style=\"display:none;\">
                    <form  class=\"thread-post-reply-form reply-";
                    // line 237
                    echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
                    echo "\" method=\"post\"  post-url=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_thread_post", array("groupId" => $this->getAttribute((isset($context["groupinfo"]) ? $context["groupinfo"] : null), "id", array()), "threadId" => $this->getAttribute((isset($context["threadMain"]) ? $context["threadMain"] : null), "id", array()))), "html", null, true);
                    echo "\">
                      <div class=\"form-group\">
                        <label class=\"control-label hide\" for=\"reply-content-";
                    // line 239
                    echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
                    echo "\">回复内容</label>
                        <div class=\"controls\">
                        <textarea id=\"reply-content-";
                    // line 241
                    echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
                    echo "\" class=\"form-control\" data-image-upload-url=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editor_upload", array("token" => $this->env->getExtension('topxia_web_twig')->makeUpoadToken("default"))), "html", null, true);
                    echo "\"></textarea>
                      </div>
                      </div>
                      <div id=\"fromUserIdNoSubDiv\"></div>
                      <div class=\"form-group\">
                        <button type=\"submit\" postId=\"";
                    // line 246
                    echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
                    echo "\" class=\"reply-btn btn btn-xs btn-primary pull-right\" style=\"margin-top:-10px;\"data-submiting-text=\"正在发表回复\">发表</button>
                      </div>
                    </form>
                  </div>
                ";
                }
                // line 251
                echo "              </div>
            </div>
          ";
                // line 253
                if ($this->getAttribute((isset($context["postAttachs"]) ? $context["postAttachs"] : null), $this->getAttribute($context["post"], "id", array()), array(), "array")) {
                    // line 254
                    echo "            <hr>
            <span class=\"glyphicon glyphicon-paperclip\"></span> 附件下载 :
            <div class=\"row clearfix mtm\">
              ";
                    // line 257
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["postAttachs"]) ? $context["postAttachs"] : null), $this->getAttribute($context["post"], "id", array()), array(), "array"));
                    foreach ($context['_seq'] as $context["_key"] => $context["attach"]) {
                        // line 258
                        echo "                ";
                        $context["postFile"] = $this->getAttribute((isset($context["postFiles"]) ? $context["postFiles"] : null), $this->getAttribute($context["post"], "id", array()), array(), "array");
                        // line 259
                        echo "                <div class=\"pull-left attach col-md-4 col-sm-6 col-lg-4\"  data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
                        if ($this->getAttribute($context["attach"], "description", array())) {
                            echo "描述：";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["attach"], "description", array()), "html", null, true);
                        }
                        echo "  上传于 ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->smarttimeFilter($this->getAttribute($this->getAttribute((isset($context["postFile"]) ? $context["postFile"] : null), $this->getAttribute($context["attach"], "fileId", array()), array(), "array"), "createdTime", array())), "html", null, true);
                        echo "\">
                  ";
                        // line 260
                        if (((($this->getAttribute($context["attach"], "coin", array()) > 0) && $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array())) && ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()) != $this->getAttribute($context["attach"], "userId", array())))) {
                            // line 261
                            echo "                    <a href=\"javascript:\" data-toggle=\"modal\" data-target=\"#modal\" data-urL=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_thread_buy_attach", array("attachId" => $this->getAttribute($context["attach"], "id", array()))), "html", null, true);
                            echo "\" class=\"pull-left mrm\"><img src=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getDefaultPath($this->env->getExtension('topxia_web_twig')->getFileType($this->getAttribute($context["attach"], "title", array()), ".png")), "html", null, true);
                            echo "\" class=\"avatar-md\"></a>
                  ";
                        } else {
                            // line 263
                            echo "                    <a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_attach_download", array("fileId" => $this->getAttribute($context["attach"], "id", array()))), "html", null, true);
                            echo "\" class=\"pull-left mrm\"><img src=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getDefaultPath($this->env->getExtension('topxia_web_twig')->getFileType($this->getAttribute($context["attach"], "title", array()), ".png")), "html", null, true);
                            echo "\" class=\"avatar-md\"></a>
                  ";
                        }
                        // line 265
                        echo "                  <div class=\"media-body\">
                    <div class=\"metas mts\">
                      ";
                        // line 267
                        if (((($this->getAttribute($context["attach"], "coin", array()) > 0) && ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()) != $this->getAttribute($context["attach"], "userId", array()))) && $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()))) {
                            // line 268
                            echo "                        <strong><a href=\"javascript:\" data-toggle=\"modal\" data-target=\"#modal\" data-urL=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_thread_buy_attach", array("attachId" => $this->getAttribute($context["attach"], "id", array()))), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["attach"], "title", array()), "html", null, true);
                            echo "</a></strong>
                      ";
                        } else {
                            // line 270
                            echo "                        <strong><a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_attach_download", array("fileId" => $this->getAttribute($context["attach"], "id", array()))), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["attach"], "title", array()), "html", null, true);
                            echo "</a></strong>
                      ";
                        }
                        // line 272
                        echo "                    </div>
                    <div class=\"content\" style=\"color: #999;font-size:11px;\">
                      ";
                        // line 274
                        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->fileSizeFilter($this->getAttribute($this->getAttribute((isset($context["postFile"]) ? $context["postFile"] : null), $this->getAttribute($context["attach"], "fileId", array()), array(), "array"), "size", array())), "html", null, true);
                        echo "
                      ";
                        // line 275
                        if (($this->getAttribute($context["attach"], "coin", array()) > 0)) {
                            // line 276
                            echo "                        <span class=\"mls\">售价:";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["attach"], "coin", array()), "html", null, true);
                            echo twig_escape_filter($this->env, $this->getAttribute($this->env->getExtension('topxia_web_twig')->getSetting("coin"), "coin_name", array()), "html", null, true);
                            echo "</span>
                        ";
                        } else {
                            // line 278
                            echo "                        <span class=\"mls\">免费</span>
                      ";
                        }
                        // line 280
                        echo "                      <br>下载次数：";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["attach"], "hitNum", array()), "html", null, true);
                        echo "
                    </div>
                    ";
                        // line 282
                        if ((((($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()) == $this->getAttribute($context["post"], "userId", array())) || $this->env->getExtension('security')->isGranted("ROLE_ADMIN")) || ((isset($context["is_groupmember"]) ? $context["is_groupmember"] : null) == 3)) || ((isset($context["is_groupmember"]) ? $context["is_groupmember"] : null) == 2))) {
                            // line 283
                            echo "                      <a title=\"确定删除此附件\" class=\"mhm post-delete-btn\" href=\"javascript:\" data-url=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_thread_delete_attach", array("goodsId" => $this->getAttribute($context["attach"], "id", array()))), "html", null, true);
                            echo "\">删除</a>
                    ";
                        }
                        // line 285
                        echo "                  </div>
                </div> 
              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attach'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 288
                    echo "            </div>
          ";
                }
                // line 290
                echo "          </li>
        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 292
            echo "      </ul>

      ";
            // line 294
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
            echo "
    </div>
  </div>
  ";
        }
        // line 298
        echo "  
  <div class=\"panel panel-default\">
    <div class=\"panel-heading\">发表回复</div>
    <div class=\"panel-body\">

      ";
        // line 303
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array())) {
            // line 304
            echo "        <form id=\"post-thread-form\" class=\"post-thread-form thread-form\" method=\"post\" post-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_thread_post", array("groupId" => $this->getAttribute((isset($context["groupinfo"]) ? $context["groupinfo"] : null), "id", array()), "threadId" => $this->getAttribute((isset($context["threadMain"]) ? $context["threadMain"] : null), "id", array()))), "html", null, true);
            echo "\">

          <div class=\"form-group\">
            <label class=\"control-label hide\" for=\"post_content\">回复内容</label>
            <div class=\"controls\">
              <textarea name=\"content\" value=\"\" rows=\"10\" id=\"post_content\" class=\"form-control\" data-image-upload-url=\"";
            // line 309
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editor_upload", array("token" => $this->env->getExtension('topxia_web_twig')->makeUpoadToken("default"))), "html", null, true);
            echo "\" data-image-download-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editor_download", array("token" => $this->env->getExtension('topxia_web_twig')->makeUpoadToken("default"))), "html", null, true);
            echo "\"></textarea>
            </div>
          </div>
          <div class=\"form-group\">
            <div class=\"controls\">
            <button id=\"post-thread-btn\" data-submiting-text=\"正在回复\" type=\"submit\" class=\"post-thread-btn btn btn-primary pull-right\">发表</button>
            </div>
          </div>
           ";
            // line 317
            if ($this->env->getExtension('topxia_web_twig')->isFeatureEnabled("group_reward")) {
                // line 318
                echo "            <input type=\"hidden\" name=\"group_reward\" id=\"group_reward\">
           ";
            }
            // line 320
            echo "          <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
            echo "\">
        </form>
      ";
        } else {
            // line 323
            echo "        <div class=\"empty\">
          你还没有登录，请先<a href=\"";
            // line 324
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("login", array("goto" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "server", array()), "get", array(0 => "REQUEST_URI"), "method"))), "html", null, true);
            echo "\">登录</a>或<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("register", array("goto" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "server", array()), "get", array(0 => "REQUEST_URI"), "method"))), "html", null, true);
            echo "\">注册</a>！
        </div>
      ";
        }
        // line 327
        echo "    </div>
  </div>
  ";
        // line 329
        $this->loadTemplate("TopxiaWebBundle:Group:upload-modal.html.twig", "TopxiaWebBundle:Group:thread.html.twig", 329)->display($context);
    }

    // line 332
    public function block_group_side($context, array $blocks = array())
    {
        // line 333
        echo "  <div class=\"panel panel-default\">
    <div class=\"panel-heading\">话题作者</div>
    <div class=\"panel-body\">
      <div class=\"media\">
        <div class=\"media-left prm\">
          <a class=\"\" href=\"";
        // line 338
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute((isset($context["owner"]) ? $context["owner"] : null), "id", array()))), "html", null, true);
        echo "\">
            <img src=\"";
        // line 339
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute((isset($context["owner"]) ? $context["owner"] : null), "smallAvatar", array()), "avatar.png"), "html", null, true);
        echo "\" class=\"avatar-md\">
          </a>
        </div>
        <div class=\"media-body ptm\">
          <div>
            <a class=\"gray-darker\">";
        // line 344
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "user_link", array(0 => (isset($context["owner"]) ? $context["owner"] : null)), "method"), "html", null, true);
        echo "</a>
          </div>
          <span class=\"text-sm gray-medium\">";
        // line 346
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["owner"]) ? $context["owner"] : null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["owner"]) ? $context["owner"] : null), "title", array()), "无")) : ("无")), "html", null, true);
        echo "</span>
        </div>
      </div>
    </div>
  </div>

  ";
        // line 352
        if ((isset($context["activeMembers"]) ? $context["activeMembers"] : null)) {
            // line 353
            echo "    ";
            $this->loadTemplate("TopxiaWebBundle:Group:active-member-list.html.twig", "TopxiaWebBundle:Group:thread.html.twig", 353)->display(array_merge($context, array("activeMembers" => (isset($context["activeMembers"]) ? $context["activeMembers"] : null))));
            // line 354
            echo "  ";
        }
        // line 355
        echo "
  <div class=\"panel panel-default\">
    <div class=\"panel-heading\">热门小组</div>
    <div class=\"panel-body\">
      ";
        // line 359
        $context["hotGroups"] = $this->env->getExtension('topxia_data_twig')->getData("HotGroup", array("count" => 3));
        // line 360
        echo "      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["hotGroups"]) ? $context["hotGroups"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 361
            echo "        <div class=\"media media-group\">
          <div class=\"media-left\">
            <a href=\"";
            // line 363
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_show", array("id" => $this->getAttribute($context["group"], "id", array()))), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "title", array()), "html", null, true);
            echo "\">
              <img src=\"";
            // line 364
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute($context["group"], "logo", array()), "group.png"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "title", array()), "html", null, true);
            echo "\" class=\"avatar-square-md\">
            </a>
          </div>
          <div class=\"media-body\">
            <div class=\"title\">
              <a class=\"gray-darker\" href=\"";
            // line 369
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_show", array("id" => $this->getAttribute($context["group"], "id", array()))), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "title", array()), "html", null, true);
            echo "\">
                ";
            // line 370
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "title", array()), "html", null, true);
            echo "
              </a>
            </div>
            <div class=\"metas\">
              <span><i class=\"es-icon es-icon-people\"></i>";
            // line 374
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "memberNum", array()), "html", null, true);
            echo "</span>
              <span><i class=\"es-icon es-icon-textsms\"></i>";
            // line 375
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "threadNum", array()), "html", null, true);
            echo "</span>
            </div>
          </div>
        </div>
      ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 380
            echo "        <div class=\"empty\">暂无小组信息！</div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 382
        echo "    </div>
  </div>

";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Group:thread.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1005 => 382,  998 => 380,  988 => 375,  984 => 374,  977 => 370,  971 => 369,  961 => 364,  955 => 363,  951 => 361,  945 => 360,  943 => 359,  937 => 355,  934 => 354,  931 => 353,  929 => 352,  920 => 346,  915 => 344,  907 => 339,  903 => 338,  896 => 333,  893 => 332,  889 => 329,  885 => 327,  877 => 324,  874 => 323,  867 => 320,  863 => 318,  861 => 317,  848 => 309,  839 => 304,  837 => 303,  830 => 298,  823 => 294,  819 => 292,  804 => 290,  800 => 288,  792 => 285,  786 => 283,  784 => 282,  778 => 280,  774 => 278,  767 => 276,  765 => 275,  761 => 274,  757 => 272,  749 => 270,  741 => 268,  739 => 267,  735 => 265,  727 => 263,  719 => 261,  717 => 260,  707 => 259,  704 => 258,  700 => 257,  695 => 254,  693 => 253,  689 => 251,  681 => 246,  671 => 241,  666 => 239,  659 => 237,  654 => 236,  651 => 235,  648 => 234,  646 => 233,  642 => 232,  639 => 231,  632 => 229,  621 => 228,  614 => 226,  603 => 225,  601 => 224,  598 => 223,  595 => 222,  592 => 221,  586 => 219,  583 => 218,  580 => 217,  578 => 216,  575 => 215,  569 => 213,  567 => 212,  560 => 208,  553 => 204,  548 => 202,  545 => 201,  539 => 199,  533 => 197,  531 => 196,  522 => 192,  517 => 191,  514 => 190,  497 => 189,  490 => 185,  486 => 183,  484 => 182,  481 => 181,  478 => 180,  467 => 172,  461 => 169,  457 => 168,  449 => 165,  440 => 158,  437 => 157,  435 => 156,  429 => 152,  423 => 150,  417 => 148,  415 => 147,  412 => 146,  406 => 144,  400 => 142,  397 => 141,  394 => 140,  391 => 139,  388 => 138,  385 => 137,  380 => 135,  377 => 134,  374 => 133,  371 => 132,  366 => 130,  363 => 129,  360 => 128,  357 => 127,  354 => 126,  352 => 125,  349 => 124,  344 => 122,  341 => 121,  336 => 119,  333 => 118,  331 => 117,  328 => 116,  323 => 114,  320 => 113,  315 => 111,  311 => 109,  308 => 108,  306 => 107,  303 => 106,  297 => 104,  295 => 103,  292 => 102,  289 => 101,  286 => 100,  280 => 98,  277 => 97,  274 => 96,  271 => 95,  269 => 94,  266 => 93,  262 => 91,  250 => 86,  246 => 84,  239 => 82,  237 => 81,  233 => 80,  228 => 77,  220 => 75,  212 => 73,  210 => 72,  206 => 70,  198 => 68,  190 => 66,  188 => 65,  178 => 64,  174 => 63,  169 => 60,  167 => 59,  163 => 58,  156 => 54,  152 => 53,  149 => 52,  140 => 50,  131 => 49,  129 => 48,  124 => 45,  122 => 44,  115 => 39,  112 => 38,  106 => 36,  103 => 35,  100 => 34,  97 => 33,  93 => 31,  90 => 30,  86 => 28,  84 => 27,  80 => 26,  60 => 8,  57 => 7,  51 => 5,  45 => 4,  35 => 3,  31 => 1,  29 => 2,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle:Group:layout.html.twig' %}*/
/* {% set script_controller = 'group/group' %}*/
/* {% block title %}{{threadMain.title}} - {{ groupinfo.title }} {{ parent() }}{% endblock %}*/
/* {% block keywords %}{{groupinfo.title}}{% endblock %}*/
/* {% block description %}{{threadMainContent|plain_text(100)}}{% endblock %}*/
/* */
/* {% block group_main %}*/
/*   <style>*/
/*     .ke-icon-accessory {*/
/*       background-image: url('/assets/img/default/iconfont-accessory.png');*/
/*       background-position:center;*/
/*       width: 16px;*/
/*       height: 16px;*/
/*     }*/
/*     .ke-icon-accessory-red {*/
/*       background-image: url('/assets/img/default/iconfont-accessory-red.png');*/
/*       background-position:center;*/
/*       width: 16px;*/
/*       height: 16px;*/
/*     }*/
/*   </style>*/
/*   */
/*   <div class="panel panel-default">*/
/*     <div class="panel-heading">*/
/*       <h3 class="panel-title">*/
/*         {{ threadMain.title }}*/
/*         {% if threadMain.isStick %}*/
/*           <span class="label label-primary">置顶</span>*/
/*         {% endif %}*/
/*         {% if threadMain.isElite %}*/
/*           <span class="label label-danger">精华</span>*/
/*         {% endif %}*/
/*         {% if is_feature_enabled('group_reward') %}*/
/*           {% if threadMain.type == 'reward' and threadMain.rewardCoin > 0 %}*/
/*             <span class="label label-danger">奖</span>*/
/*             <span style="color:#d9534f;" class="mll"> 悬赏:{{threadMain.rewardCoin}}{{setting('coin').coin_name}}</span>*/
/*           {% endif %}*/
/*         {% endif %}*/
/*       </h3>*/
/*       <div class="metas text-sm color-gray clearfix">*/
/*         <div class="es-share dropdown pull-right">*/
/*           <span class="es-share top" style="font-size:14px;">*/
/*             <a href="javascript:;" class="gray-dark" data-toggle="dropdown"><i class="es-icon es-icon-share  prs"></i> 分享</a>*/
/*             {% include 'TopxiaWebBundle:Common:share-dropdown.html.twig' with {type:'group_thread', thread:threadMain, group:groupinfo} %}*/
/*           </span>*/
/*         </div>*/
/*         <div class="pull-right mrm" id="thread-list" style="margin-top:2px;">*/
/*           {% if threadMain.userId != user.id %}*/
/*             <a href="javascript:;" class="uncollect-btn link-dark" data-url="{{ path('group_thread_uncollect', {threadId:threadMain.id}) }}" {% if isCollected == false %} style="display:none;"{% endif %}><i class="es-icon es-icon-favorite mrs"></i> 已收藏</a>*/
/*             <a href="javascript:;" class="collect-btn link-dark" data-url="{{ path('group_thread_collect', {threadId:threadMain.id}) }}" {% if isCollected == true %} style="display:none;"{% endif %}><i class="es-icon es-icon-favoriteoutline mrs"></i>收藏</a>*/
/*           {% endif %}*/
/*         </div>*/
/*         发表于 {{ threadMain.createdTime|smart_time }}*/
/*         <span class="mll">{{ threadMain.hitNum }} 次查看</span>*/
/*       </div>*/
/*     </div>*/
/*     <div class="panel-body clearfix" id="post-action">*/
/*       {{threadMain.content|raw}}*/
/*       {% if attachs %}*/
/*         <hr>*/
/*         <span class="glyphicon glyphicon-paperclip"></span> 附件下载 :*/
/*         <div class="row clearfix mtm">*/
/*           {% for attach in attachs %}*/
/*             <div class="pull-left attach col-md-4 col-sm-6 col-lg-4"  data-toggle="tooltip" data-placement="top" title="{% if  attach.description %}描述：{{attach.description}}{% endif %}  上传于 {{files[attach.fileId].createdTime|smart_time}}">*/
/*               {% if attach.coin > 0  and   user.id != attach.userId and app.user %}*/
/*                 <a href="javascript:" data-toggle="modal" data-target="#modal" data-urL="{{path('group_thread_buy_attach',{attachId:attach.id})}}" class="pull-left mrm"><img src="{{ default_path(attach.title|file_type(".png")) }}" class="avatar-md"></a>*/
/*               {% else %}*/
/*                 <a href="{{path('group_attach_download',{fileId:attach.id})}}" class="pull-left mrm"><img src="{{ default_path(attach.title|file_type(".png")) }}" class="avatar-md"></a>*/
/*               {% endif %}*/
/*               <div class="media-body">*/
/*                 <div class="metas mts">*/
/*                   {% if attach.coin > 0 and  user.id != attach.userId and app.user %}*/
/*                     <strong><a href="javascript:" data-toggle="modal" data-target="#modal" data-urL="{{path('group_thread_buy_attach',{attachId:attach.id})}}">{{ attach.title }}</a></strong>*/
/*                   {% else %}*/
/*                     <strong><a href="{{path('group_attach_download',{fileId:attach.id})}}">{{ attach.title }}</a></strong>*/
/*                   {% endif %}*/
/*                 </div>*/
/* */
/*                 <div class="content" style="color: #999;font-size:11px;">*/
/*                   {{files[attach.fileId].size|file_size}}*/
/*                   {% if attach.coin > 0 %}*/
/*                     <span class="mls">售价:{{attach.coin}}{{setting('coin').coin_name}}</span>*/
/*                     {% else %}*/
/*                     <span class="mls">免费</span>*/
/*                   {% endif %}*/
/*                   <br>下载次数：{{attach.hitNum}}*/
/*                 </div>*/
/*               </div>*/
/*             </div> */
/*           {% endfor %}*/
/*         </div>*/
/*       {% endif %}*/
/*       <div class="mtl text-right">*/
/*         {% if is_feature_enabled('group_reward') and threadMain.count == 1 %}*/
/*           {% if user.id==owner.id or is_granted('ROLE_ADMIN') or user.id==groupinfo.ownerId or is_groupmember==3 %}*/
/*           {% else %}*/
/*             {% if app.user %}*/
/*             <a class="btn btn-default btn-sm mrm" href="javascript:" data-toggle="modal" data-target="#modal" data-urL="{{path('group_thread_hide',{threadId:threadMain.id})}}">查看隐藏内容</a>*/
/*             {% endif %}*/
/*           {% endif %}*/
/*         {% endif %}*/
/*         */
/*         {% if user.id==owner.id or is_granted('ROLE_ADMIN') or user.id==groupinfo.ownerId or is_groupmember==3 %}*/
/*           <a class="btn btn-default btn-sm mrm" href="{{path('group_thread_update',{id:groupinfo.id,threadId:threadMain.id})}}"> 编辑</a>*/
/*         {% endif %}*/
/* */
/*         {% if is_groupmember==2 or is_granted('ROLE_ADMIN') or is_groupmember==3 %}*/
/*           {% if threadMain.isElite==1 %}*/
/*             <a id="elite"  title="取消加精" class="btn btn-default btn-sm mrm"*/
/*               href="javascript:"*/
/*             data-url="{{path('group_thread_removeElite',{threadId:threadMain.id})}}">取消加精</a>*/
/*           {% else %}*/
/*             <a id="elite"  title="加精" class="btn btn-default btn-sm mrm"*/
/*             href="javascript:" data-url="{{path('group_thread_setElite',{threadId:threadMain.id})}}">加精</a>*/
/*           {% endif %}*/
/* */
/*           {% if threadMain.isStick==1 %}*/
/*              <a id="stick" title="取消置顶" class="btn btn-default btn-sm mrm"*/
/*             href="javascript:" data-url="{{path('group_thread_removeStick',{threadId:threadMain.id})}}"> 取消置顶</a>*/
/*           {% else %}*/
/*             <a id="stick"  title="置顶" class="btn btn-default btn-sm mrm"*/
/*             href="javascript:" data-url="{{path('group_thread_setStick',{threadId:threadMain.id})}}">置顶</a>*/
/*           {% endif %}*/
/* */
/*           {% if is_feature_enabled('group_reward') %}*/
/*             {% if is_granted('ROLE_ADMIN') or user.id==groupinfo.ownerId or is_groupmember==3 %}*/
/*               {% if threadMain.type == 'reward' and  threadMain.rewardCoin > 0 %}*/
/*                 {% if not isAdopt %}*/
/*                   <a id="cancelReward" title="取消悬赏" class="btn btn-default btn-sm mrm"*/
/*                   href="javascript:" data-url="{{path('group_thread_cancel_reward',{threadId:threadMain.id})}}"><span class="glyphicon glyphicon-ban-circle"></span> 取消悬赏</a>*/
/*                 {% endif %}*/
/*               {% else %}*/
/*                 {% if threadMain.type == 'default' %}*/
/*                   <a id="rewardCoin"  title="悬赏" class="btn btn-default btn-sm mrm"*/
/*                     href="javascript:" data-toggle="modal" data-target="#modal" data-urL="{{path('group_thread_reward',{threadId:threadMain.id})}}"><span class="glyphicon glyphicon-usd"></span>  悬赏</a>*/
/*                 {% endif %}*/
/*               {% endif %}*/
/*             {% endif %}*/
/*           {% endif %}*/
/*         {% endif %}*/
/*         {% if filters.type=='onlyOwner' %}*/
/*           <a class="btn btn-default btn-sm mrm" href="{{path('group_thread_show',{id:groupinfo.id,threadId:threadMain.id,type:'all',sort:filters.sort})}}" %}><span class="glyphicon glyphicon-filter"></span> 查看全部</a>*/
/*         {% else %}*/
/*           <a class="btn btn-default btn-sm mrm" href="{{path('group_thread_show',{id:groupinfo.id,threadId:threadMain.id,type:'onlyOwner',sort:filters.sort})}}">只看楼主</a>*/
/*         {% endif %}*/
/*         */
/*         {% if filters.sort=='desc' %}*/
/*           <a type="button" class="btn btn-default btn-sm mrm" href="{{path('group_thread_show',{id:groupinfo.id,threadId:threadMain.id,type:filters.type,sort:'asc'})}}">顺序查看</a>*/
/*         {% else %}*/
/*           <a type="button" class="btn btn-default btn-sm mrm" href="{{path('group_thread_show',{id:groupinfo.id,threadId:threadMain.id,type:filters.type,sort:'desc'})}}">倒序查看</a>*/
/*         {% endif %}*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* */
/*   {% if is_feature_enabled('group_reward') %}*/
/*     {% if isAdopt %}*/
/*     <div class="panel panel-default group-post-list">*/
/*       <div class="panel-heading" style="color:#d9534f;">*/
/*         最佳回答*/
/*       </div>*/
/*       <div class="panel-body">*/
/*         <ul class="media-list">*/
/*           <li class="media">*/
/*             <a href="{{ path('user_show', {id:isAdopt[0].userId}) }}" class="pull-left"><img src="{{ filepath(postMember[isAdopt[0].userId].smallAvatar, 'avatar.png') }}" class="avatar-md"></a>*/
/*             <div class="media-body">*/
/*               <div class="metas">*/
/*                 <strong>{{ web_macro.user_link(postMember[isAdopt[0].userId]) }}</strong>*/
/*                 <span class="mhm">{{isAdopt[0].createdTime|smart_time}} </span>*/
/*               </div>*/
/*               <div class="content">*/
/*                 {{isAdopt[0].content|raw}}*/
/*               </div>*/
/*             </div>*/
/*           </li>*/
/*         </ul>*/
/*       </div>*/
/*     </div>*/
/*     {% endif %}*/
/*   {% endif %}*/
/* */
/*   {% if threadMain.postNum %}*/
/*   <div class="panel panel-default group-post-list">*/
/*     <div class="panel-heading">*/
/*       {{threadMain.postNum}}回复*/
/*     </div>*/
/*     <div class="panel-body">*/
/*       <ul class="media-list">*/
/*         {% for post in post %}*/
/*           {% set subPosts = postReply[post.id]|default(null) %}*/
/*           <li id="post-{{post.id}}" class="media">*/
/*             <a href="{{ path('user_show', {id:post.userId}) }}" class="pull-left"><img src="{{ filepath(postMember[post.userId].smallAvatar, 'avatar.png') }}" class="avatar-sm"></a>*/
/*             <div class="media-body">*/
/*               <div class="metas">*/
/*                 <span class="floor">*/
/*                   {% if filters.sort=='desc' %}*/
/*                     {{ (postCount+1)-paginator.getPerPageCount()*(paginator.currentPage-1)-loop.index0 }}楼*/
/*                   {% else %}*/
/*                     {{ (loop.index+1)+paginator.getPerPageCount()*(paginator.currentPage-1) }}楼*/
/*                   {% endif %}*/
/*                 </span>*/
/*                 <strong>{{ web_macro.user_link(postMember[post.userId]) }}</strong>*/
/*                 <span class="divider mhm">•</span>*/
/*                 <span >{{post.createdTime|smart_time}} </span>*/
/*               </div>*/
/* */
/*               <div class="content editor-text">*/
/*                 {{post.content|raw}}*/
/*               </div>*/
/* */
/*               <div class="actions">*/
/*                 {% if user.id==post.userId or is_granted('ROLE_ADMIN')  or is_groupmember==3  or is_groupmember==2 %}*/
/*                   <a title="确定删除这条回复" class="mhm post-delete-btn" href="javascript:" data-url="{{path('group_thread_deletePost',{postId:post.id})}}">删除</a>*/
/*                 {% endif %}*/
/*                 */
/*                 {% if is_feature_enabled('group_reward') %}*/
/*                   {% if not isAdopt and threadMain.type == "reward" %}*/
/*                     {% if is_granted('ROLE_ADMIN')  or is_groupmember==3  or is_groupmember==2 %}*/
/*                       <a title="确定采纳这条回复" class="mhm post-adopt-btn" href="javascript:" data-url="{{path('group_thread_adopt',{postId:post.id})}}">采纳</a>*/
/*                     {% endif %}*/
/*                   {% endif %}*/
/*                 {% endif %}*/
/* */
/*                 {% if not subPosts %}*/
/*                   <a href="javascript:" class="reply" id="reply-{{post.id}}"  postId="{{post.id}}" postName="{{postMember[post.userId].nickname}}" data-from-user-id-nosub="{{postMember[post.userId].id}}">回复</a>*/
/*                   <a href="javascript:" class="unreply" id="unreply-{{post.id}}" postId="{{post.id}}" style="display:none;">收起</a>*/
/*                 {% else %}*/
/*                   <a style="display:none;" href="javascript:" class="reply" id="reply-{{post.id}}"  postId="{{post.id}}" postName="{{postMember[post.userId].nickname}}" data-from-user-id-nosub="">回复({{postReplyCount[post.id]}})</a>*/
/*                   <a href="javascript:" class="unreply" id="unreply-{{post.id}}" postId="{{post.id}}" >收起</a>*/
/*                 {% endif %}*/
/*               </div>*/
/*               <div class="reply-{{post.id}}">*/
/*                 {% if subPosts %}*/
/*                   {% include 'TopxiaWebBundle:Group:post-reply-list.html.twig' with {posts:subPosts, users:postReplyMembers,postMain:post} %}*/
/*                 {% else %}*/
/*                   <div class="reply-{{post.id}}" style="display:none;">*/
/*                     <form  class="thread-post-reply-form reply-{{post.id}}" method="post"  post-url="{{path('group_thread_post',{groupId:groupinfo.id,threadId:threadMain.id})}}">*/
/*                       <div class="form-group">*/
/*                         <label class="control-label hide" for="reply-content-{{post.id}}">回复内容</label>*/
/*                         <div class="controls">*/
/*                         <textarea id="reply-content-{{post.id}}" class="form-control" data-image-upload-url="{{ path('editor_upload', {token:upload_token('default')}) }}"></textarea>*/
/*                       </div>*/
/*                       </div>*/
/*                       <div id="fromUserIdNoSubDiv"></div>*/
/*                       <div class="form-group">*/
/*                         <button type="submit" postId="{{post.id}}" class="reply-btn btn btn-xs btn-primary pull-right" style="margin-top:-10px;"data-submiting-text="正在发表回复">发表</button>*/
/*                       </div>*/
/*                     </form>*/
/*                   </div>*/
/*                 {% endif %}*/
/*               </div>*/
/*             </div>*/
/*           {% if postAttachs[post.id] %}*/
/*             <hr>*/
/*             <span class="glyphicon glyphicon-paperclip"></span> 附件下载 :*/
/*             <div class="row clearfix mtm">*/
/*               {% for attach in postAttachs[post.id] %}*/
/*                 {% set postFile = postFiles[post.id] %}*/
/*                 <div class="pull-left attach col-md-4 col-sm-6 col-lg-4"  data-toggle="tooltip" data-placement="top" title="{% if  attach.description %}描述：{{attach.description}}{% endif %}  上传于 {{postFile[attach.fileId].createdTime|smart_time}}">*/
/*                   {% if attach.coin > 0  and app.user and  user.id != attach.userId %}*/
/*                     <a href="javascript:" data-toggle="modal" data-target="#modal" data-urL="{{path('group_thread_buy_attach',{attachId:attach.id})}}" class="pull-left mrm"><img src="{{ default_path(attach.title|file_type(".png")) }}" class="avatar-md"></a>*/
/*                   {% else %}*/
/*                     <a href="{{path('group_attach_download',{fileId:attach.id})}}" class="pull-left mrm"><img src="{{ default_path(attach.title|file_type(".png")) }}" class="avatar-md"></a>*/
/*                   {% endif %}*/
/*                   <div class="media-body">*/
/*                     <div class="metas mts">*/
/*                       {% if attach.coin > 0 and  user.id != attach.userId and app.user %}*/
/*                         <strong><a href="javascript:" data-toggle="modal" data-target="#modal" data-urL="{{path('group_thread_buy_attach',{attachId:attach.id})}}">{{ attach.title }}</a></strong>*/
/*                       {% else %}*/
/*                         <strong><a href="{{path('group_attach_download',{fileId:attach.id})}}">{{ attach.title }}</a></strong>*/
/*                       {% endif %}*/
/*                     </div>*/
/*                     <div class="content" style="color: #999;font-size:11px;">*/
/*                       {{postFile[attach.fileId].size|file_size}}*/
/*                       {% if attach.coin > 0 %}*/
/*                         <span class="mls">售价:{{attach.coin}}{{setting('coin').coin_name}}</span>*/
/*                         {% else %}*/
/*                         <span class="mls">免费</span>*/
/*                       {% endif %}*/
/*                       <br>下载次数：{{attach.hitNum}}*/
/*                     </div>*/
/*                     {% if user.id==post.userId or is_granted('ROLE_ADMIN')  or is_groupmember==3  or is_groupmember==2 %}*/
/*                       <a title="确定删除此附件" class="mhm post-delete-btn" href="javascript:" data-url="{{path('group_thread_delete_attach',{goodsId:attach.id})}}">删除</a>*/
/*                     {% endif %}*/
/*                   </div>*/
/*                 </div> */
/*               {% endfor %}*/
/*             </div>*/
/*           {% endif %}*/
/*           </li>*/
/*         {% endfor %}*/
/*       </ul>*/
/* */
/*       {{ web_macro.paginator(paginator) }}*/
/*     </div>*/
/*   </div>*/
/*   {% endif %}*/
/*   */
/*   <div class="panel panel-default">*/
/*     <div class="panel-heading">发表回复</div>*/
/*     <div class="panel-body">*/
/* */
/*       {% if app.user %}*/
/*         <form id="post-thread-form" class="post-thread-form thread-form" method="post" post-url="{{path('group_thread_post',{groupId:groupinfo.id,threadId:threadMain.id})}}">*/
/* */
/*           <div class="form-group">*/
/*             <label class="control-label hide" for="post_content">回复内容</label>*/
/*             <div class="controls">*/
/*               <textarea name="content" value="" rows="10" id="post_content" class="form-control" data-image-upload-url="{{ path('editor_upload', {token:upload_token('default')}) }}" data-image-download-url="{{ path('editor_download', {token:upload_token('default')}) }}"></textarea>*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <div class="controls">*/
/*             <button id="post-thread-btn" data-submiting-text="正在回复" type="submit" class="post-thread-btn btn btn-primary pull-right">发表</button>*/
/*             </div>*/
/*           </div>*/
/*            {% if is_feature_enabled('group_reward') %}*/
/*             <input type="hidden" name="group_reward" id="group_reward">*/
/*            {% endif %}*/
/*           <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/*         </form>*/
/*       {% else %}*/
/*         <div class="empty">*/
/*           你还没有登录，请先<a href="{{ path('login', {goto:app.request.server.get('REQUEST_URI')}) }}">登录</a>或<a href="{{ path('register', {goto:app.request.server.get('REQUEST_URI')}) }}">注册</a>！*/
/*         </div>*/
/*       {% endif %}*/
/*     </div>*/
/*   </div>*/
/*   {% include 'TopxiaWebBundle:Group:upload-modal.html.twig' %}*/
/* {% endblock %}*/
/* */
/* {% block group_side %}*/
/*   <div class="panel panel-default">*/
/*     <div class="panel-heading">话题作者</div>*/
/*     <div class="panel-body">*/
/*       <div class="media">*/
/*         <div class="media-left prm">*/
/*           <a class="" href="{{ path('user_show', {id:owner.id}) }}">*/
/*             <img src="{{ filepath(owner.smallAvatar, 'avatar.png') }}" class="avatar-md">*/
/*           </a>*/
/*         </div>*/
/*         <div class="media-body ptm">*/
/*           <div>*/
/*             <a class="gray-darker">{{ web_macro.user_link(owner)}}</a>*/
/*           </div>*/
/*           <span class="text-sm gray-medium">{{owner.title|default("无")}}</span>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* */
/*   {% if activeMembers %}*/
/*     {% include 'TopxiaWebBundle:Group:active-member-list.html.twig' with {activeMembers:activeMembers} %}*/
/*   {% endif %}*/
/* */
/*   <div class="panel panel-default">*/
/*     <div class="panel-heading">热门小组</div>*/
/*     <div class="panel-body">*/
/*       {% set hotGroups = data('HotGroup',{'count':3}) %}*/
/*       {% for group in hotGroups %}*/
/*         <div class="media media-group">*/
/*           <div class="media-left">*/
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
/*     </div>*/
/*   </div>*/
/* */
/* {% endblock %}*/
/* */
