<?php

/* TopxiaWebBundle:Thread:post-update.html.twig */
class __TwigTemplate_3b3c5d09de12d0982974b3c3f2c5a5bed5bc0c4a1f7d666ec1ecb4e7944ae1cc extends Twig_Template
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
        echo "<form id=\"post-thread-form\" method=\"post\"
  ";
        // line 2
        if ((isset($context["post"]) ? $context["post"] : null)) {
            // line 3
            echo "    action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath(($this->getAttribute((isset($context["target"]) ? $context["target"] : null), "type", array()) . "_thread_post_update"), array(($this->getAttribute((isset($context["target"]) ? $context["target"] : null), "type", array()) . "Id") => $this->getAttribute((isset($context["target"]) ? $context["target"] : null), "id", array()), "threadId" => $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "id", array()), "postId" => $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "id", array()))), "html", null, true);
            echo "\"
  ";
        } else {
            // line 5
            echo "    action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath(($this->getAttribute((isset($context["target"]) ? $context["target"] : null), "type", array()) . "_thread_post"), array(($this->getAttribute((isset($context["target"]) ? $context["target"] : null), "type", array()) . "Id") => $this->getAttribute((isset($context["target"]) ? $context["target"] : null), "id", array()), "threadId" => $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "id", array()))), "html", null, true);
            echo "\"
  ";
        }
        // line 7
        echo "  >
  <div class=\"form-group\">
    <div class=\"controls\">
      <textarea id=\"post-content-field\" class=\"form-control\" name=\"content\" data-display=\"内容\" rows=\"15\">";
        // line 10
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "content", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "content", array()), "")) : ("")), "html", null, true);
        echo "</textarea>
    </div>
  </div>
  <div class=\"form-group\">
    <div class=\"controls clearfix\">
      <button type=\"submit\" class=\"btn btn-primary pull-right\">发表</button>
      <a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath(($this->getAttribute((isset($context["target"]) ? $context["target"] : null), "type", array()) . "_threads"), array(($this->getAttribute((isset($context["target"]) ? $context["target"] : null), "type", array()) . "Id") => $this->getAttribute((isset($context["target"]) ? $context["target"] : null), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-link pull-right\">取消</a>
    </div>
  </div>

  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
</form>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Thread:post-update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 20,  50 => 16,  41 => 10,  36 => 7,  30 => 5,  24 => 3,  22 => 2,  19 => 1,);
    }
}
/* <form id="post-thread-form" method="post"*/
/*   {% if post %}*/
/*     action="{{ path(target.type ~ '_thread_post_update', {(target.type ~ 'Id'): target.id, threadId: thread.id, postId:post.id}) }}"*/
/*   {% else %}*/
/*     action="{{ path(target.type ~ '_thread_post', {(target.type ~ 'Id'): target.id, threadId: thread.id}) }}"*/
/*   {% endif %}*/
/*   >*/
/*   <div class="form-group">*/
/*     <div class="controls">*/
/*       <textarea id="post-content-field" class="form-control" name="content" data-display="内容" rows="15">{{ post.content|default('') }}</textarea>*/
/*     </div>*/
/*   </div>*/
/*   <div class="form-group">*/
/*     <div class="controls clearfix">*/
/*       <button type="submit" class="btn btn-primary pull-right">发表</button>*/
/*       <a href="{{ path(target.type ~ '_threads', {(target.type ~ 'Id'): target.id}) }}" class="btn btn-link pull-right">取消</a>*/
/*     </div>*/
/*   </div>*/
/* */
/*   <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/* </form>*/
