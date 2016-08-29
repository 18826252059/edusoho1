<?php

/* ClassroomBundle:Classroom:my-teaching-threads.html.twig */
class __TwigTemplate_88d3ebeea0a7b902c7e074ef7c9d18ec4dede675bf164fc3e606615e3ab90eb2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:My:layout.html.twig", "ClassroomBundle:Classroom:my-teaching-threads.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:My:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 12
        if (((isset($context["type"]) ? $context["type"] : null) == "question")) {
            // line 13
            $context["side_nav"] = "my-teaching-questions";
        } elseif ((        // line 14
(isset($context["type"]) ? $context["type"] : null) == "discussion")) {
            // line 15
            $context["side_nav"] = "my-teaching-discussions";
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        // line 3
        echo "  ";
        if (((isset($context["type"]) ? $context["type"] : null) == "question")) {
            // line 4
            echo "    ";
            if ($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name")) {
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), "学员"), "html", null, true);
            } else {
                echo "学员";
            }
            echo "问答
    ";
            // line 5
            $context["side_nav"] = "my-teaching-questions";
            // line 6
            echo "  ";
        } elseif (((isset($context["type"]) ? $context["type"] : null) == "discussion")) {
            // line 7
            echo "    ";
            if ($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name")) {
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), "学员"), "html", null, true);
            } else {
                echo "学员";
            }
            echo "话题
    ";
            // line 8
            $context["side_nav"] = "my-teaching-discussions";
            // line 9
            echo "  ";
        }
        // line 10
        echo "  - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 17
    public function block_main($context, array $blocks = array())
    {
        // line 18
        echo "  <div class=\"panel panel-default panel-col\">
    <div class=\"panel-heading\">
      ";
        // line 20
        if (((isset($context["type"]) ? $context["type"] : null) == "question")) {
            // line 21
            echo "        ";
            if ($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name")) {
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), "学员"), "html", null, true);
            } else {
                echo "学员";
            }
            echo "问答
      ";
        } elseif ((        // line 22
(isset($context["type"]) ? $context["type"] : null) == "discussion")) {
            // line 23
            echo "        ";
            if ($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name")) {
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), "学员"), "html", null, true);
            } else {
                echo "学员";
            }
            echo "话题
      ";
        }
        // line 25
        echo "    </div>
    <div class=\"panel-body\">
      ";
        // line 27
        $this->loadTemplate("TopxiaWebBundle:MyTeaching:tab.html.twig", "ClassroomBundle:Classroom:my-teaching-threads.html.twig", 27)->display($context);
        // line 28
        echo "      ";
        if ((isset($context["threads"]) ? $context["threads"] : null)) {
            // line 29
            echo "        
        ";
            // line 30
            $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "discussion")) : ("discussion"));
            // line 31
            echo "        <ul class=\"media-list\">
          ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["threads"]) ? $context["threads"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["thread"]) {
                // line 33
                echo "            ";
                if ((isset($context["classrooms"]) ? $context["classrooms"] : null)) {
                    // line 34
                    echo "              ";
                    $context["classroom"] = (($this->getAttribute((isset($context["classrooms"]) ? $context["classrooms"] : null), $this->getAttribute($context["thread"], "targetId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["classrooms"]) ? $context["classrooms"] : null), $this->getAttribute($context["thread"], "targetId", array()), array(), "array"), null)) : (null));
                    // line 35
                    echo "              <li class=\"media\">
                <div class=\"media-body\">
                  ";
                    // line 37
                    if (($this->getAttribute($context["thread"], "postNum", array()) > 0)) {
                        // line 38
                        echo "                    <span class=\"badge pull-right\" style=\"margin-top:15px;\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["thread"], "postNum", array()), "html", null, true);
                        echo "</span>
                  ";
                    }
                    // line 40
                    echo "                  <div class=\"mbm\">
                    ";
                    // line 41
                    if (($this->getAttribute($context["thread"], "type", array()) == "question")) {
                        // line 42
                        echo "                      <span class=\"label label-info\" title=\"问答帖\">问</span>
                    ";
                    }
                    // line 44
                    echo "                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_thread_show", array("classroomId" => $this->getAttribute($context["thread"], "targetId", array()), "threadId" => $this->getAttribute($context["thread"], "id", array()))), "html", null, true);
                    echo "\"><strong>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["thread"], "title", array()), "html", null, true);
                    echo "</strong></a>
                    ";
                    // line 45
                    if ($this->getAttribute($context["thread"], "nice", array())) {
                        // line 46
                        echo "                      <span class=\"label label-warning\" title=\"精华帖\">精</span>
                    ";
                    }
                    // line 48
                    echo "                  </div>
                  <div class=\"text-muted text-normal\">
                    ";
                    // line 50
                    if ((isset($context["classroom"]) ? $context["classroom"] : null)) {
                        // line 51
                        echo "                      <span>发表于";
                        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
                        echo "<a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_show", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
                        echo "\" class=\"link-muted\">";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "title", array()), "html", null, true);
                        echo "</a></span>
                    ";
                    } else {
                        // line 53
                        echo "                      <span>";
                        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
                        echo "已删除</span>
                    ";
                    }
                    // line 55
                    echo "                    <span class=\"bullet\">•</span>
                    ";
                    // line 56
                    if (($this->getAttribute($context["thread"], "postNum", array()) > 0)) {
                        // line 57
                        echo "                      ";
                        $context["poster"] = $this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["thread"], "lastPostUserId", array()), array(), "array");
                        // line 58
                        echo "                      <span>最后回复 ";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "user_link", array(0 => (isset($context["poster"]) ? $context["poster"] : null), 1 => "link-muted"), "method"), "html", null, true);
                        echo "</span>
                      ,
                      <span>";
                        // line 60
                        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->smarttimeFilter($this->getAttribute($context["thread"], "lastPostTime", array())), "html", null, true);
                        echo "</span>
                      <span class=\"bullet\">•</span>
                    ";
                    }
                    // line 63
                    echo "                    <span>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["thread"], "hitNum", array()), "html", null, true);
                    echo "浏览</span>
                  </div>
                </div>
              </li>
            ";
                } else {
                    // line 68
                    echo "              ";
                    if (((isset($context["type"]) ? $context["type"] : null) == "question")) {
                        // line 69
                        echo "                <li class=\"empty\">你还没提过问题</li>
              ";
                    } else {
                        // line 71
                        echo "                <li class=\"empty\">你还没发表过话题</li>
              ";
                    }
                    // line 73
                    echo "            ";
                }
                // line 74
                echo "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['thread'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
            echo "        </ul>
        <nav class=\"text-center\">
          ";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
            echo " 
        </nav>
        
      ";
        } else {
            // line 81
            echo "        
        ";
            // line 82
            if (((isset($context["type"]) ? $context["type"] : null) == "question")) {
                // line 83
                echo "          <div class=\"empty\">您的";
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
                echo "中还没有";
                if ($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name")) {
                    echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), "学员"), "html", null, true);
                } else {
                    echo "学员";
                }
                echo "提问过...</div>
        ";
            } elseif ((            // line 84
(isset($context["type"]) ? $context["type"] : null) == "discussion")) {
                // line 85
                echo "          <div class=\"empty\">您的";
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
                echo "中还没有";
                if ($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name")) {
                    echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), "学员"), "html", null, true);
                } else {
                    echo "学员";
                }
                echo "话题...</div>
        ";
            }
            // line 87
            echo "        
      ";
        }
        // line 89
        echo "    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:Classroom:my-teaching-threads.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  287 => 89,  283 => 87,  271 => 85,  269 => 84,  258 => 83,  256 => 82,  253 => 81,  246 => 77,  242 => 75,  236 => 74,  233 => 73,  229 => 71,  225 => 69,  222 => 68,  213 => 63,  207 => 60,  201 => 58,  198 => 57,  196 => 56,  193 => 55,  187 => 53,  177 => 51,  175 => 50,  171 => 48,  167 => 46,  165 => 45,  158 => 44,  154 => 42,  152 => 41,  149 => 40,  143 => 38,  141 => 37,  137 => 35,  134 => 34,  131 => 33,  127 => 32,  124 => 31,  122 => 30,  119 => 29,  116 => 28,  114 => 27,  110 => 25,  100 => 23,  98 => 22,  89 => 21,  87 => 20,  83 => 18,  80 => 17,  73 => 10,  70 => 9,  68 => 8,  59 => 7,  56 => 6,  54 => 5,  45 => 4,  42 => 3,  39 => 2,  35 => 1,  32 => 15,  30 => 14,  28 => 13,  26 => 12,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle:My:layout.html.twig' %}*/
/* {% block title %}*/
/*   {% if type == 'question' %}*/
/*     {% if setting('default.user_name') %}{{setting('default.user_name')|default('学员')}}{% else %}学员{% endif %}问答*/
/*     {% set side_nav = 'my-teaching-questions' %}*/
/*   {% elseif type == 'discussion' %}*/
/*     {% if setting('default.user_name') %}{{setting('default.user_name')|default('学员')}}{% else %}学员{% endif %}话题*/
/*     {% set side_nav = 'my-teaching-discussions' %}*/
/*   {% endif %}*/
/*   - {{ parent() }}*/
/* {% endblock %}*/
/* {% if type == 'question' %}*/
/*   {% set side_nav = 'my-teaching-questions' %}*/
/* {% elseif type == 'discussion' %}*/
/*   {% set side_nav = 'my-teaching-discussions' %}*/
/* {% endif %}*/
/* {% block main %}*/
/*   <div class="panel panel-default panel-col">*/
/*     <div class="panel-heading">*/
/*       {% if type == 'question' %}*/
/*         {% if setting('default.user_name') %}{{setting('default.user_name')|default('学员')}}{% else %}学员{% endif %}问答*/
/*       {% elseif type == 'discussion' %}*/
/*         {% if setting('default.user_name') %}{{setting('default.user_name')|default('学员')}}{% else %}学员{% endif %}话题*/
/*       {% endif %}*/
/*     </div>*/
/*     <div class="panel-body">*/
/*       {% include 'TopxiaWebBundle:MyTeaching:tab.html.twig'%}*/
/*       {% if threads %}*/
/*         */
/*         {% set type = type|default('discussion') %}*/
/*         <ul class="media-list">*/
/*           {% for thread in threads %}*/
/*             {% if classrooms %}*/
/*               {% set classroom = classrooms[thread.targetId]|default(null) %}*/
/*               <li class="media">*/
/*                 <div class="media-body">*/
/*                   {% if thread.postNum > 0 %}*/
/*                     <span class="badge pull-right" style="margin-top:15px;">{{ thread.postNum }}</span>*/
/*                   {% endif %}*/
/*                   <div class="mbm">*/
/*                     {% if thread.type == 'question' %}*/
/*                       <span class="label label-info" title="问答帖">问</span>*/
/*                     {% endif  %}*/
/*                     <a href="{{ path('classroom_thread_show', {classroomId:thread.targetId, threadId:thread.id}) }}"><strong>{{ thread.title }}</strong></a>*/
/*                     {% if thread.nice %}*/
/*                       <span class="label label-warning" title="精华帖">精</span>*/
/*                     {% endif %}*/
/*                   </div>*/
/*                   <div class="text-muted text-normal">*/
/*                     {% if classroom %}*/
/*                       <span>发表于{{ setting('classroom.name')|default("班级") }}<a href="{{ path('classroom_show', {id:classroom.id}) }}" class="link-muted">{{ classroom.title }}</a></span>*/
/*                     {% else %}*/
/*                       <span>{{ setting('classroom.name')|default("班级") }}已删除</span>*/
/*                     {% endif %}*/
/*                     <span class="bullet">•</span>*/
/*                     {% if thread.postNum > 0 %}*/
/*                       {% set poster = users[thread.lastPostUserId] %}*/
/*                       <span>最后回复 {{ web_macro.user_link(poster, 'link-muted') }}</span>*/
/*                       ,*/
/*                       <span>{{ thread.lastPostTime|smart_time }}</span>*/
/*                       <span class="bullet">•</span>*/
/*                     {% endif %}*/
/*                     <span>{{ thread.hitNum }}浏览</span>*/
/*                   </div>*/
/*                 </div>*/
/*               </li>*/
/*             {% else %}*/
/*               {% if type == 'question' %}*/
/*                 <li class="empty">你还没提过问题</li>*/
/*               {% else %}*/
/*                 <li class="empty">你还没发表过话题</li>*/
/*               {% endif %}*/
/*             {% endif %}*/
/*           {% endfor %}*/
/*         </ul>*/
/*         <nav class="text-center">*/
/*           {{ web_macro.paginator(paginator) }} */
/*         </nav>*/
/*         */
/*       {% else %}*/
/*         */
/*         {% if type == 'question' %}*/
/*           <div class="empty">您的{{ setting('classroom.name')|default("班级") }}中还没有{% if setting('default.user_name') %}{{setting('default.user_name')|default('学员')}}{% else %}学员{% endif %}提问过...</div>*/
/*         {% elseif type == 'discussion' %}*/
/*           <div class="empty">您的{{ setting('classroom.name')|default("班级") }}中还没有{% if setting('default.user_name') %}{{setting('default.user_name')|default('学员')}}{% else %}学员{% endif %}话题...</div>*/
/*         {% endif %}*/
/*         */
/*       {% endif %}*/
/*     </div>*/
/*   </div>*/
/* {% endblock %}*/
