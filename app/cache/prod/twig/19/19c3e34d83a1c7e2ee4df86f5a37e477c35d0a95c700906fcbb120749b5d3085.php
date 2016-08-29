<?php

/* TopxiaWebBundle:Course:members-modal.html.twig */
class __TwigTemplate_23f09e2e4a8e7a9f0f35576c4d2cb9c3c96c7f109d1318efd435f7a95c697a55 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "TopxiaWebBundle:Course:members-modal.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::bootstrap-modal-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["modalSize"] = "large";
        // line 4
        $context["hide_footer"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "课程";
        if ($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name")) {
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), "学员"), "html", null, true);
        } else {
            echo "学员";
        }
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
<ul class=\"media-list user-simple-list\" id=\"course-student-list\">
  ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["students"]) ? $context["students"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["student"]) {
            // line 9
            echo "    ";
            $context["user"] = $this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["student"], "userId", array()), array(), "array");
            // line 10
            echo "    ";
            $context["progress"] = $this->getAttribute((isset($context["progresses"]) ? $context["progresses"] : null), $this->getAttribute($context["student"], "userId", array()), array(), "array");
            // line 11
            echo "    ";
            $context["isFollowing"] = twig_in_filter($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()), (isset($context["followingIds"]) ? $context["followingIds"] : null));
            // line 12
            echo "    <li class=\"media\">
      ";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "user_avatar", array(0 => (isset($context["user"]) ? $context["user"] : null), 1 => "pull-left"), "method"), "html", null, true);
            echo "
      <div>

        ";
            // line 16
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array()) != $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))) {
                // line 17
                echo "          <div class=\"pull-right\">
            <button class=\"btn btn-primary btn-sm follow-student-btn\" data-url=\"";
                // line 18
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_follow", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
                echo "\" ";
                if ((isset($context["isFollowing"]) ? $context["isFollowing"] : null)) {
                    echo " style=\"display:none;\"";
                }
                echo ">关注</button>
            <button class=\"btn btn-success btn-sm unfollow-student-btn\" data-url=\"";
                // line 19
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_unfollow", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
                echo "\" ";
                if ( !(isset($context["isFollowing"]) ? $context["isFollowing"] : null)) {
                    echo " style=\"display:none;\"";
                }
                echo ">已关注</button>
            <button class=\"btn btn-default btn-sm send-message-btn\" data-url=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("message_create", array("toId" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
                echo "\">发私信</button>
          </div>
        ";
            }
            // line 23
            echo "
        <p><a target=\"_blank\" href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "nickname", array()), "html", null, true);
            echo "</a></p>
        
        ";
            // line 26
            if (($this->getAttribute($context["student"], "remark", array()) && (isset($context["canManage"]) ? $context["canManage"] : null))) {
                // line 27
                echo "          <p class=\"text-muted text-sm\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "remark", array()), "html", null, true);
                echo "\">(";
                echo $this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute($context["student"], "remark", array()), 8);
                echo ")</p>
        ";
            }
            // line 29
            echo "        ";
            if ((isset($context["canManage"]) ? $context["canManage"] : null)) {
                // line 30
                echo "          <div class=\"progress\" title=\"已学";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["progress"]) ? $context["progress"] : null), "number", array()), "html", null, true);
                echo "课时\">
            <div class=\"progress-bar\" style=\"width: ";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["progress"]) ? $context["progress"] : null), "percent", array()), "html", null, true);
                echo "\">
            </div>
          </div>
        ";
            }
            // line 35
            echo "      </div>
    </li>
  ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 38
            echo "    <li>本课程暂时还没有学生</li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['student'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "</ul>
<nav class=\"text-center\">
  ";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo "
</nav>

<script>
    app.load('course/members-modal');
</script>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:members-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 42,  151 => 40,  144 => 38,  137 => 35,  130 => 31,  125 => 30,  122 => 29,  114 => 27,  112 => 26,  105 => 24,  102 => 23,  96 => 20,  88 => 19,  80 => 18,  77 => 17,  75 => 16,  69 => 13,  66 => 12,  63 => 11,  60 => 10,  57 => 9,  52 => 8,  48 => 6,  45 => 5,  34 => 3,  30 => 1,  28 => 4,  26 => 2,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::bootstrap-modal-layout.html.twig' %}*/
/* {% set modalSize = 'large' %}*/
/* {% block title %}课程{% if setting('default.user_name') %}{{setting('default.user_name')|default('学员')}}{% else %}学员{% endif %}{% endblock %}*/
/* {% set hide_footer = true %}*/
/* {% block body %}*/
/* */
/* <ul class="media-list user-simple-list" id="course-student-list">*/
/*   {% for student in  students %}*/
/*     {% set user = users[student.userId] %}*/
/*     {% set progress = progresses[student.userId] %}*/
/*     {% set isFollowing = user.id in followingIds %}*/
/*     <li class="media">*/
/*       {{ web_macro.user_avatar(user, 'pull-left') }}*/
/*       <div>*/
/* */
/*         {% if app.user.id != user.id %}*/
/*           <div class="pull-right">*/
/*             <button class="btn btn-primary btn-sm follow-student-btn" data-url="{{ path('user_follow', {id:user.id}) }}" {% if isFollowing %} style="display:none;"{% endif %}>关注</button>*/
/*             <button class="btn btn-success btn-sm unfollow-student-btn" data-url="{{ path('user_unfollow', {id:user.id}) }}" {% if not isFollowing %} style="display:none;"{% endif %}>已关注</button>*/
/*             <button class="btn btn-default btn-sm send-message-btn" data-url="{{path('message_create', {toId:user.id})}}">发私信</button>*/
/*           </div>*/
/*         {% endif %}*/
/* */
/*         <p><a target="_blank" href="{{ path('user_show', {id:user.id}) }}">{{ user.nickname }}</a></p>*/
/*         */
/*         {% if student.remark and canManage %}*/
/*           <p class="text-muted text-sm" title="{{student.remark}}">({{ student.remark|plain_text(8) }})</p>*/
/*         {% endif %}*/
/*         {% if canManage %}*/
/*           <div class="progress" title="已学{{ progress.number }}课时">*/
/*             <div class="progress-bar" style="width: {{ progress.percent }}">*/
/*             </div>*/
/*           </div>*/
/*         {% endif %}*/
/*       </div>*/
/*     </li>*/
/*   {% else  %}*/
/*     <li>本课程暂时还没有学生</li>*/
/*   {% endfor %}*/
/* </ul>*/
/* <nav class="text-center">*/
/*   {{ web_macro.paginator(paginator) }}*/
/* </nav>*/
/* */
/* <script>*/
/*     app.load('course/members-modal');*/
/* </script>*/
/* {% endblock %}*/
/* */
/* */
/* */
