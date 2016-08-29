<?php

/* TopxiaWebBundle:MyThread:thread-list.html.twig */
class __TwigTemplate_73e5714b101c3d95ff0e5bdb14bfd58530d8d26a4d10fb04b83b304b1530b889 extends Twig_Template
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
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "discussion")) : ("discussion"));
        // line 2
        echo "
<ul class=\"media-list\">
  ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["threads"]) ? $context["threads"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["thread"]) {
            // line 5
            echo "   ";
            if ((isset($context["courses"]) ? $context["courses"] : null)) {
                // line 6
                echo "    ";
                $context["course"] = (($this->getAttribute((isset($context["courses"]) ? $context["courses"] : null), $this->getAttribute($context["thread"], "courseId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["courses"]) ? $context["courses"] : null), $this->getAttribute($context["thread"], "courseId", array()), array(), "array"), null)) : (null));
                // line 7
                echo "    <li class=\"media\">
        <div class=\"media-body\">
          ";
                // line 9
                if (($this->getAttribute($context["thread"], "postNum", array()) > 0)) {
                    // line 10
                    echo "            <span class=\"badge pull-right\" style=\"margin-top:15px;\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["thread"], "postNum", array()), "html", null, true);
                    echo "</span>
          ";
                }
                // line 12
                echo "          <div class=\"mbm\">
            ";
                // line 13
                if (($this->getAttribute($context["thread"], "type", array()) == "question")) {
                    // line 14
                    echo "              <span class=\"label label-info\" title=\"问答帖\">问</span>
            ";
                }
                // line 16
                echo "
            <a href=\"";
                // line 17
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_thread_show", array("courseId" => $this->getAttribute($context["thread"], "courseId", array()), "threadId" => $this->getAttribute($context["thread"], "id", array()))), "html", null, true);
                echo "\"><strong>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["thread"], "title", array()), "html", null, true);
                echo "</strong></a>

            ";
                // line 19
                if ($this->getAttribute($context["thread"], "lessonId", array())) {
                    // line 20
                    echo "              <span class=\"label\" title=\"课时";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["thread"], "lessonId", array()), "html", null, true);
                    echo "\">L";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["thread"], "lessonId", array()), "html", null, true);
                    echo "</span>
            ";
                }
                // line 22
                echo "
            ";
                // line 23
                if ($this->getAttribute($context["thread"], "isElite", array())) {
                    // line 24
                    echo "              <span class=\"label label-warning\" title=\"精华帖\">精</span>
            ";
                }
                // line 26
                echo "
          </div>
          <div class=\"text-muted text-normal\">
            ";
                // line 29
                if ((isset($context["course"]) ? $context["course"] : null)) {
                    // line 30
                    echo "              <span>发表于<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
                    echo "\" class=\"link-muted\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "title", array()), "html", null, true);
                    echo "</a></span>
            ";
                } else {
                    // line 32
                    echo "              <span>课程已删除</span>
            ";
                }
                // line 34
                echo "            <span class=\"bullet\">•</span>
            ";
                // line 35
                if (($this->getAttribute($context["thread"], "postNum", array()) > 0)) {
                    // line 36
                    echo "              ";
                    $context["poster"] = $this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["thread"], "latestPostUserId", array()), array(), "array");
                    // line 37
                    echo "              <span>最后回复 ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "user_link", array(0 => (isset($context["poster"]) ? $context["poster"] : null), 1 => "link-muted"), "method"), "html", null, true);
                    echo "</span>
              ,
              <span>";
                    // line 39
                    echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->smarttimeFilter($this->getAttribute($context["thread"], "latestPostTime", array())), "html", null, true);
                    echo "</span>
              <span class=\"bullet\">•</span>
            ";
                }
                // line 42
                echo "            <span>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["thread"], "hitNum", array()), "html", null, true);
                echo "浏览</span>
          </div>
        </div>
      </li>
    ";
            } else {
                // line 47
                echo "      ";
                if (((isset($context["type"]) ? $context["type"] : null) == "question")) {
                    // line 48
                    echo "        <li class=\"empty\">你还没提过问题</li>
      ";
                } else {
                    // line 50
                    echo "        <li class=\"empty\">你还没发表过话题</li>
      ";
                }
                // line 52
                echo "
    ";
            }
            // line 54
            echo "
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['thread'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "
</ul>

";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo " ";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:MyThread:thread-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 59,  155 => 56,  148 => 54,  144 => 52,  140 => 50,  136 => 48,  133 => 47,  124 => 42,  118 => 39,  112 => 37,  109 => 36,  107 => 35,  104 => 34,  100 => 32,  92 => 30,  90 => 29,  85 => 26,  81 => 24,  79 => 23,  76 => 22,  68 => 20,  66 => 19,  59 => 17,  56 => 16,  52 => 14,  50 => 13,  47 => 12,  41 => 10,  39 => 9,  35 => 7,  32 => 6,  29 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% set type = type|default('discussion') %}*/
/* */
/* <ul class="media-list">*/
/*   {% for thread in threads %}*/
/*    {% if courses %}*/
/*     {% set course = courses[thread.courseId]|default(null) %}*/
/*     <li class="media">*/
/*         <div class="media-body">*/
/*           {% if thread.postNum > 0 %}*/
/*             <span class="badge pull-right" style="margin-top:15px;">{{ thread.postNum }}</span>*/
/*           {% endif %}*/
/*           <div class="mbm">*/
/*             {% if thread.type == 'question' %}*/
/*               <span class="label label-info" title="问答帖">问</span>*/
/*             {% endif  %}*/
/* */
/*             <a href="{{ path('course_thread_show', {courseId:thread.courseId, threadId:thread.id}) }}"><strong>{{ thread.title }}</strong></a>*/
/* */
/*             {% if thread.lessonId %}*/
/*               <span class="label" title="课时{{ thread.lessonId }}">L{{ thread.lessonId }}</span>*/
/*             {% endif %}*/
/* */
/*             {% if thread.isElite %}*/
/*               <span class="label label-warning" title="精华帖">精</span>*/
/*             {% endif %}*/
/* */
/*           </div>*/
/*           <div class="text-muted text-normal">*/
/*             {% if course %}*/
/*               <span>发表于<a href="{{ path('course_show', {id:course.id}) }}" class="link-muted">{{ course.title }}</a></span>*/
/*             {% else %}*/
/*               <span>课程已删除</span>*/
/*             {% endif %}*/
/*             <span class="bullet">•</span>*/
/*             {% if thread.postNum > 0 %}*/
/*               {% set poster = users[thread.latestPostUserId] %}*/
/*               <span>最后回复 {{ web_macro.user_link(poster, 'link-muted') }}</span>*/
/*               ,*/
/*               <span>{{ thread.latestPostTime|smart_time }}</span>*/
/*               <span class="bullet">•</span>*/
/*             {% endif %}*/
/*             <span>{{ thread.hitNum }}浏览</span>*/
/*           </div>*/
/*         </div>*/
/*       </li>*/
/*     {% else %}*/
/*       {% if type == 'question' %}*/
/*         <li class="empty">你还没提过问题</li>*/
/*       {% else %}*/
/*         <li class="empty">你还没发表过话题</li>*/
/*       {% endif %}*/
/* */
/*     {% endif %}*/
/* */
/*   {% endfor %}*/
/* */
/* </ul>*/
/* */
/* {{ web_macro.paginator(paginator) }} */
