<?php

/* TopxiaWebBundle:Thread:post.html.twig */
class __TwigTemplate_938a07c604da9bea4533456d09c69e1904e86d92f0b4564ca09a60337a2a107b extends Twig_Template
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
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array())) {
            // line 2
            echo "  ";
            if ($this->getAttribute((isset($context["service"]) ? $context["service"] : null), "canAccess", array(0 => "post.create", 1 => (isset($context["thread"]) ? $context["thread"] : null)), "method")) {
                // line 3
                echo "    <form class=\"thread-post-form\" id=\"thread-post-form\" method=\"post\" action=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("thread_post", array("threadId" => $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "id", array()))), "html", null, true);
                echo "\">
      <div class=\"form-group\">
        <div class=\"controls\">
          <textarea
            id=\"thread-";
                // line 7
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "id", array()), "html", null, true);
                echo "-post-form\"
            name=\"content\" value=\"\" rows=\"10\" id=\"post_content\" class=\"form-control\" data-display=\"回复内容\"
            data-image-upload-url=\"";
                // line 9
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editor_upload", array("token" => $this->env->getExtension('topxia_web_twig')->makeUpoadToken("default"))), "html", null, true);
                echo "\" data-image-download-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editor_download", array("token" => $this->env->getExtension('topxia_web_twig')->makeUpoadToken("course"))), "html", null, true);
                echo "\"
          ></textarea>
        </div>
      </div>
      <div class=\"form-group clearfix\">
        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
                // line 14
                echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
                echo "\">
        <button class=\"btn btn-primary pull-right\" type=\"submit\" data-loading-text=\"正在回复\">发表</button>
      </div>
    </form>
  ";
            } else {
                // line 19
                echo "    <div class=\"empty\">只有学员才能回复！</div>
  ";
            }
        } else {
            // line 22
            echo "  <div class=\"empty\">
    你还没有登录，请先<a href=\"";
            // line 23
            echo $this->env->getExtension('routing')->getPath("login");
            echo "\">登录</a>或<a href=\"";
            echo $this->env->getExtension('routing')->getPath("register");
            echo "\">注册</a>！
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Thread:post.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 23,  60 => 22,  55 => 19,  47 => 14,  37 => 9,  32 => 7,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if app.user %}*/
/*   {% if service.canAccess('post.create', thread) %}*/
/*     <form class="thread-post-form" id="thread-post-form" method="post" action="{{path('thread_post', {threadId:thread.id})}}">*/
/*       <div class="form-group">*/
/*         <div class="controls">*/
/*           <textarea*/
/*             id="thread-{{ thread.id }}-post-form"*/
/*             name="content" value="" rows="10" id="post_content" class="form-control" data-display="回复内容"*/
/*             data-image-upload-url="{{ path('editor_upload', {token:upload_token('default')}) }}" data-image-download-url="{{ path('editor_download', {token:upload_token('course')}) }}"*/
/*           ></textarea>*/
/*         </div>*/
/*       </div>*/
/*       <div class="form-group clearfix">*/
/*         <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/*         <button class="btn btn-primary pull-right" type="submit" data-loading-text="正在回复">发表</button>*/
/*       </div>*/
/*     </form>*/
/*   {% else %}*/
/*     <div class="empty">只有学员才能回复！</div>*/
/*   {% endif %}*/
/* {% else %}*/
/*   <div class="empty">*/
/*     你还没有登录，请先<a href="{{ path('login') }}">登录</a>或<a href="{{ path('register') }}">注册</a>！*/
/*   </div>*/
/* {% endif %}*/
