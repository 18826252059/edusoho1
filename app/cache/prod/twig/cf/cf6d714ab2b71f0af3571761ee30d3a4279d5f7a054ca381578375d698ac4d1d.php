<?php

/* TopxiaWebBundle:Thread:post-manage-menu.html.twig */
class __TwigTemplate_2eb95f058699ea1283f25fa45318f430c7f199a3b4d5d3a96b95e223340dbd78 extends Twig_Template
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
        if ($this->getAttribute((isset($context["service"]) ? $context["service"] : null), "canAccess", array(0 => "post.delete", 1 => (isset($context["post"]) ? $context["post"] : null)), "method")) {
            // line 2
            echo "  <div class=\"thread-post-manage-dropdown dropdown pull-right\">
    <a href=\"javascript:;\" class=\"dropdown-toggle text-muted\" data-toggle=\"dropdown\"><span class=\"glyphicon glyphicon-collapse-down\"></span></a>
    <ul class=\"dropdown-menu\">
      <li>
        <a href=\"javascript:\" class=\"js-post-delete\" data-url=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("thread_post_delete", array("threadId" => $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "threadId", array()), "postId" => $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "id", array()))), "html", null, true);
            echo "\" data-for=\"#post-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "id", array()), "html", null, true);
            echo "\">删除</a>
      </li>
    </ul>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Thread:post-manage-menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 6,  21 => 2,  19 => 1,);
    }
}
/* {% if service.canAccess('post.delete', post) %}*/
/*   <div class="thread-post-manage-dropdown dropdown pull-right">*/
/*     <a href="javascript:;" class="dropdown-toggle text-muted" data-toggle="dropdown"><span class="glyphicon glyphicon-collapse-down"></span></a>*/
/*     <ul class="dropdown-menu">*/
/*       <li>*/
/*         <a href="javascript:" class="js-post-delete" data-url="{{ path('thread_post_delete', {threadId:post.threadId, postId:post.id}) }}" data-for="#post-{{ post.id }}">删除</a>*/
/*       </li>*/
/*     </ul>*/
/*   </div>*/
/* {% endif %}*/
