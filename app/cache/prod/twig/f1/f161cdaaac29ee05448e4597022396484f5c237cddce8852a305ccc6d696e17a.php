<?php

/* TopxiaWebBundle:LessonQuestionPlugin:show.html.twig */
class __TwigTemplate_7186c94ba0f86e18af946ad3320b31d1947f85b5c44799a382edd31fe6d1de3d extends Twig_Template
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
        echo "<div class=\"lesson-plugin-pane lesson-question-plugin-pane\">

\t<div class=\"lesson-question-plugin-pane-header clearfix\">
\t\t<button type=\"button\" class=\"btn btn-default back-to-list\">返回</button>
\t\t<h4>";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["threader"]) ? $context["threader"] : null), "nickname", array()), "html", null, true);
        echo "<i>问...</i></h4>
\t</div>

\t<div class=\"lesson-question-plugin-pane-thread\">
\t\t<h5><a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_thread_show", array("courseId" => $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "courseId", array()), "threadId" => $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "id", array()))), "html", null, true);
        echo "\" target=\"_blank\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "title", array()), "html", null, true);
        echo "</a></h5>
\t\t<div class=\"lesson-question-plugin-pane-thread-content\">";
        // line 10
        echo $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "content", array());
        echo "</div>
\t</div>
\t
\t<div class=\"lesson-question-plugin-pane-posts\">
\t\t<div class=\"posts-header\"><h5><span data-role=\"post-number\">";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "postNum", array()), "html", null, true);
        echo "</span> 回答</h5></div>
\t</div>

\t<ul data-role=\"post-list\" class=\"posts\">
\t\t";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : null));
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
            // line 19
            echo "\t\t  ";
            $context["user"] = $this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["post"], "userId", array()), array(), "array");
            // line 20
            echo "\t\t  ";
            $this->loadTemplate("TopxiaWebBundle:LessonQuestionPlugin:post-item.html.twig", "TopxiaWebBundle:LessonQuestionPlugin:show.html.twig", 20)->display($context);
            // line 21
            echo "\t\t";
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
        // line 22
        echo "\t</ul>

\t<form class=\"post-form\" data-role=\"post-form\" method=\"post\" action=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("course_lesson_plugin_question_answer");
        echo "\" novalidate>
\t\t<div class=\"form-group\">
\t\t\t<div class=\"controls\">
\t\t\t\t";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "content", array()), 'widget', array("attr" => array("class" => "form-control", "rows" => 4, "data-display" => "内容")));
        echo "
\t\t\t</div>
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<div class=\"controls clearfix\">
\t\t\t\t";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "
\t\t\t\t<button type=\"submit\" class=\"btn btn-primary pull-right\">添加答案</button>
\t\t\t</div>
\t\t</div>
\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
\t</form>
</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:LessonQuestionPlugin:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 36,  107 => 32,  99 => 27,  93 => 24,  89 => 22,  75 => 21,  72 => 20,  69 => 19,  52 => 18,  45 => 14,  38 => 10,  32 => 9,  25 => 5,  19 => 1,);
    }
}
/* <div class="lesson-plugin-pane lesson-question-plugin-pane">*/
/* */
/* 	<div class="lesson-question-plugin-pane-header clearfix">*/
/* 		<button type="button" class="btn btn-default back-to-list">返回</button>*/
/* 		<h4>{{threader.nickname}}<i>问...</i></h4>*/
/* 	</div>*/
/* */
/* 	<div class="lesson-question-plugin-pane-thread">*/
/* 		<h5><a href="{{ path('course_thread_show', {courseId:thread.courseId, threadId:thread.id}) }}" target="_blank">{{ thread.title }}</a></h5>*/
/* 		<div class="lesson-question-plugin-pane-thread-content">{{ thread.content|raw }}</div>*/
/* 	</div>*/
/* 	*/
/* 	<div class="lesson-question-plugin-pane-posts">*/
/* 		<div class="posts-header"><h5><span data-role="post-number">{{ thread.postNum }}</span> 回答</h5></div>*/
/* 	</div>*/
/* */
/* 	<ul data-role="post-list" class="posts">*/
/* 		{% for post in posts %}*/
/* 		  {% set user = users[post.userId] %}*/
/* 		  {% include 'TopxiaWebBundle:LessonQuestionPlugin:post-item.html.twig' %}*/
/* 		{% endfor %}*/
/* 	</ul>*/
/* */
/* 	<form class="post-form" data-role="post-form" method="post" action="{{ path('course_lesson_plugin_question_answer') }}" novalidate>*/
/* 		<div class="form-group">*/
/* 			<div class="controls">*/
/* 				{{ form_widget(form.content, {attr:{class:'form-control', rows:4, 'data-display':'内容'}}) }}*/
/* 			</div>*/
/* 		</div>*/
/* 		<div class="form-group">*/
/* 			<div class="controls clearfix">*/
/* 				{{ form_rest(form) }}*/
/* 				<button type="submit" class="btn btn-primary pull-right">添加答案</button>*/
/* 			</div>*/
/* 		</div>*/
/* 		<input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/* 	</form>*/
/* </div>*/
