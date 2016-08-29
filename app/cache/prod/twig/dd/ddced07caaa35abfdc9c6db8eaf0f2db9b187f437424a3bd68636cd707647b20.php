<?php

/* TopxiaWebBundle:CourseThread:post-list-item.html.twig */
class __TwigTemplate_b7f33222517eb90710a56eb826981b5b6c6d1715a22904620d07494138165ee6 extends Twig_Template
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
        $context["web_macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "TopxiaWebBundle:CourseThread:post-list-item.html.twig", 1);
        // line 2
        echo "<li id=\"post-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "id", array()), "html", null, true);
        echo "\" class=\"thread-post media clearfix\">
  ";
        // line 3
        echo $context["web_macro"]->getuser_avatar((isset($context["author"]) ? $context["author"] : null), "pull-left media-object");
        echo "

  ";
        // line 5
        if (((isset($context["isManager"]) ? $context["isManager"] : null) || ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array()) == $this->getAttribute((isset($context["author"]) ? $context["author"] : null), "id", array())))) {
            // line 6
            echo "  <div class=\"thread-post-dropdown\">
    <a href=\"javascript:\" class=\"dropdown-toggle text-muted\" data-toggle=\"dropdown\"><i class=\"glyphicon glyphicon-collapse-down\"></i></a>
    <ul class=\"dropdown-menu pull-right\">
      <li><a href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_thread_post_edit", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "threadId" => $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "id", array()), "id" => $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "id", array()))), "html", null, true);
            echo "\"><i class=\"glyphicon glyphicon-edit\"></i> 编辑</a></li>
      ";
            // line 10
            if ((isset($context["isManager"]) ? $context["isManager"] : null)) {
                // line 11
                echo "        <li><a href=\"javascript:\" data-action=\"post-delete\" data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_thread_post_delete", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "threadId" => $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "id", array()), "id" => $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "id", array()))), "html", null, true);
                echo "\" data-for=\"#post-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "id", array()), "html", null, true);
                echo "\"><i class=\"glyphicon glyphicon-remove\"></i> 删除</a></li>
      ";
            }
            // line 13
            echo "    </ul>
  </div>
  ";
        }
        // line 16
        echo "
  <div class=\"thread-post-body media-body\" style=\"word-break:break-all;\">
    <div class=\"media-heading\">
      <a href=\"javascript:\">";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["author"]) ? $context["author"] : null), "nickname", array()), "html", null, true);
        echo "</a>
      <span class=\"bullet\">•</span>
      <span class=\"text-muted\">";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->smarttimeFilter($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "createdTime", array())), "html", null, true);
        echo "</span>
    </div>
    <div class=\"editor-text\">";
        // line 23
        echo $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "content", array());
        echo "</div>
    ";
        // line 24
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array()) != $this->getAttribute((isset($context["author"]) ? $context["author"] : null), "id", array()))) {
            // line 25
            echo "    <div class=\"thread-post-action\" data-user=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["author"]) ? $context["author"] : null), "nickname", array()), "html", null, true);
            echo "\"><a href=\"#thread-post-form\" >回复</a></div>
    ";
        }
        // line 27
        echo "  </div>
</li>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseThread:post-list-item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 27,  78 => 25,  76 => 24,  72 => 23,  67 => 21,  62 => 19,  57 => 16,  52 => 13,  44 => 11,  42 => 10,  38 => 9,  33 => 6,  31 => 5,  26 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% import "TopxiaWebBundle::macro.html.twig" as web_macro %}*/
/* <li id="post-{{ post.id }}" class="thread-post media clearfix">*/
/*   {{ web_macro.user_avatar(author, 'pull-left media-object') }}*/
/* */
/*   {% if isManager or app.user.id == author.id %}*/
/*   <div class="thread-post-dropdown">*/
/*     <a href="javascript:" class="dropdown-toggle text-muted" data-toggle="dropdown"><i class="glyphicon glyphicon-collapse-down"></i></a>*/
/*     <ul class="dropdown-menu pull-right">*/
/*       <li><a href="{{ path('course_thread_post_edit', {courseId:course.id,threadId:thread.id, id:post.id}) }}"><i class="glyphicon glyphicon-edit"></i> 编辑</a></li>*/
/*       {% if isManager %}*/
/*         <li><a href="javascript:" data-action="post-delete" data-url="{{ path('course_thread_post_delete', {courseId:course.id,threadId:thread.id, id:post.id}) }}" data-for="#post-{{ post.id }}"><i class="glyphicon glyphicon-remove"></i> 删除</a></li>*/
/*       {% endif %}*/
/*     </ul>*/
/*   </div>*/
/*   {% endif %}*/
/* */
/*   <div class="thread-post-body media-body" style="word-break:break-all;">*/
/*     <div class="media-heading">*/
/*       <a href="javascript:">{{ author.nickname }}</a>*/
/*       <span class="bullet">•</span>*/
/*       <span class="text-muted">{{ post.createdTime|smart_time }}</span>*/
/*     </div>*/
/*     <div class="editor-text">{{ post.content|raw }}</div>*/
/*     {% if app.user.id != author.id %}*/
/*     <div class="thread-post-action" data-user="{{ author.nickname }}"><a href="#thread-post-form" >回复</a></div>*/
/*     {% endif %}*/
/*   </div>*/
/* </li>*/
