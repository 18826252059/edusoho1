<?php

/* TopxiaWebBundle:Common:share-dropdown.html.twig */
class __TwigTemplate_69c6ba6ad26acc78d69aa0eca15124785a2f51aeb5d0c7a36fae64fdfc399b7f extends Twig_Template
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
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "course")) {
            // line 2
            echo "  ";
            $context["title"] = $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "title", array());
            // line 3
            echo "  ";
            $context["summary"] = $this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "about", array()), 50);
            // line 4
            echo "  ";
            $context["message"] = $this->env->getExtension('topxia_web_twig')->simpleTemplateFilter(_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.courseShareContent"), "我正在学习{{course}}，收获巨大哦，一起来学习吧！"), array("course" => (("《" . $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "title", array())) . "》")));
            // line 5
            echo "  ";
            $context["url"] = $this->env->getExtension('routing')->getUrl("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array())));
            // line 6
            echo "  ";
            $context["picture"] = $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "largePicture", array()), "course.png");
            // line 7
            echo "  ";
            $context["id"] = $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array());
        } elseif ((        // line 8
(isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "classroom")) {
            // line 9
            echo "  ";
            $context["title"] = $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "title", array());
            // line 10
            echo "  ";
            $context["summary"] = $this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "about", array()), 50);
            // line 11
            echo "  ";
            $context["message"] = $this->env->getExtension('topxia_web_twig')->simpleTemplateFilter(_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.classroomShareContent"), "我正在学习{{classroom}}，收获巨大哦，一起来学习吧！"), array("classroom" => (("「" . $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "title", array())) . "」")));
            // line 12
            echo "  ";
            $context["url"] = $this->env->getExtension('routing')->getUrl("classroom_show", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "id", array())));
            // line 13
            echo "  ";
            $context["picture"] = $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "largePicture", array()), "classroom.png");
            // line 14
            echo "  ";
            $context["id"] = $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "id", array());
        } elseif ((        // line 15
(isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "article")) {
            // line 16
            echo "  ";
            $context["title"] = $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "title", array());
            // line 17
            echo "  ";
            $context["summary"] = $this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "body", array()), 50);
            // line 18
            echo "  ";
            $context["message"] = $this->env->getExtension('topxia_web_twig')->simpleTemplateFilter(_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.articleShareContent"), "我正在看{{articletitle}}，关注{{sitename}}，分享知识，成就未来。"), array("articletitle" => (("「" . $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "title", array())) . "」"), "sitename" => (("「" . $this->env->getExtension('topxia_web_twig')->getSetting("site.name")) . "」")));
            // line 19
            echo "  ";
            $context["url"] = $this->env->getExtension('routing')->getUrl("article_detail", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array())));
            // line 20
            echo "  ";
            $context["picture"] = "";
            // line 21
            echo "  ";
            $context["id"] = $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array());
        } elseif ((        // line 22
(isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "group_thread")) {
            // line 23
            echo "  ";
            $context["title"] = $this->getAttribute((isset($context["thread"]) ? $context["thread"] : $this->getContext($context, "thread")), "title", array());
            // line 24
            echo "  ";
            $context["summary"] = $this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute((isset($context["thread"]) ? $context["thread"] : $this->getContext($context, "thread")), "content", array()), 50);
            // line 25
            echo "  ";
            $context["message"] = $this->env->getExtension('topxia_web_twig')->simpleTemplateFilter(_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.groupShareContent"), "我正在{{groupname}}小组，看到{{threadname}}，很不错哦，一起来看看吧！"), array("threadname" => (("「" . $this->getAttribute((isset($context["thread"]) ? $context["thread"] : $this->getContext($context, "thread")), "title", array())) . "」"), "groupname" => (("「" . $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "title", array())) . "」")));
            // line 26
            echo "  ";
            $context["url"] = $this->env->getExtension('routing')->getUrl("group_thread_show", array("id" => $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "id", array()), "threadId" => $this->getAttribute((isset($context["thread"]) ? $context["thread"] : $this->getContext($context, "thread")), "id", array())));
            // line 27
            echo "  ";
            $context["picture"] = "";
            // line 28
            echo "  ";
            $context["id"] = $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "id", array());
        }
        // line 30
        echo "
<div class=\"dropdown-menu ";
        // line 31
        if (((array_key_exists("right", $context)) ? (_twig_default_filter((isset($context["right"]) ? $context["right"] : $this->getContext($context, "right")), false)) : (false))) {
            echo "pull-right";
        }
        echo " js-social-share-params\" data-title=\"";
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo "\" data-summary=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("summary", $context)) ? (_twig_default_filter((isset($context["summary"]) ? $context["summary"] : $this->getContext($context, "summary")), "")) : ("")), "html", null, true);
        echo "\" data-message=\"";
        echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
        echo "\" data-url=\"";
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
        echo "\" data-picture=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("picture", $context)) ? (_twig_default_filter((isset($context["picture"]) ? $context["picture"] : $this->getContext($context, "picture")), "")) : ("")), "html", null, true);
        echo "\">
  ";
        // line 32
        if ($this->env->getExtension('topxia_web_twig')->isPluginInstalled("Point")) {
            // line 33
            echo "    <input type=\"hidden\" class=\"point-share-url\" value=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("share_point", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "title" => (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "type" => (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")))), "html", null, true);
            echo "\">
  ";
        }
        // line 35
        echo "
  <a href=\"javascript:;\" class=\"js-social-share\" data-cmd=\"weixin\" title=\"分享到微信\" data-share=\"weixin\" data-qrcode-url=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("common_qrcode", array("text" => (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")))), "html", null, true);
        echo "\"><i class=\"es-icon es-icon-weixin\"></i></a>
  <a href=\"javascript:;\" class=\"js-social-share\" data-cmd=\"tsina\" title=\"分享到新浪微博\" data-share=\"weibo\"><i class=\"es-icon es-icon-weibo\"></i></a>
  <a href=\"javascript:;\" class=\"js-social-share\" data-cmd=\"qq\" title=\"分享到QQ好友\" data-share=\"qq\"><i class=\"es-icon es-icon-qq\"></i></a>
  <a href=\"javascript:;\" class=\"js-social-share\" data-cmd=\"qzone\" title=\"分享到QQ空间\" data-share=\"qzone\"><i class=\"es-icon es-icon-qzone\"></i></a>

</div>

";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->loadScript("common/share-dropdown"), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Common:share-dropdown.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 43,  130 => 36,  127 => 35,  121 => 33,  119 => 32,  103 => 31,  100 => 30,  96 => 28,  93 => 27,  90 => 26,  87 => 25,  84 => 24,  81 => 23,  79 => 22,  76 => 21,  73 => 20,  70 => 19,  67 => 18,  64 => 17,  61 => 16,  59 => 15,  56 => 14,  53 => 13,  50 => 12,  47 => 11,  44 => 10,  41 => 9,  39 => 8,  36 => 7,  33 => 6,  30 => 5,  27 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if type == 'course' %}*/
/*   {% set title = course.title %}*/
/*   {% set summary = course.about|plain_text(50) %}*/
/*   {% set message = setting('default.courseShareContent')|default('我正在学习{{course}}，收获巨大哦，一起来学习吧！')|simple_template({course: '《' ~ course.title ~ '》'}) %}*/
/*   {% set url = url('course_show', {id:course.id}) %}*/
/*   {% set picture = filepath(course.largePicture, 'course.png') %}*/
/*   {% set id = course.id%}*/
/* {% elseif type == 'classroom' %}*/
/*   {% set title = classroom.title %}*/
/*   {% set summary = classroom.about|plain_text(50) %}*/
/*   {% set message = setting('default.classroomShareContent')|default('我正在学习{{classroom}}，收获巨大哦，一起来学习吧！')|simple_template({classroom: '「' ~ classroom.title ~ '」'}) %}*/
/*   {% set url = url('classroom_show', {id:classroom.id}) %}*/
/*   {% set picture = filepath(classroom.largePicture, 'classroom.png') %}*/
/*   {% set id = classroom.id%}*/
/* {% elseif type ==  'article' %}*/
/*   {% set title = article.title %}*/
/*   {% set summary = article.body|plain_text(50) %}*/
/*   {% set message = setting('default.articleShareContent')|default('我正在看{{articletitle}}，关注{{sitename}}，分享知识，成就未来。')|simple_template({articletitle: '「' ~ article.title ~ '」' , sitename: '「' ~ setting('site.name') ~ '」' }) %}*/
/*   {% set url = url('article_detail', {id:article.id}) %}*/
/*   {% set picture = '' %}*/
/*   {% set id = article.id%}*/
/* {% elseif type == 'group_thread' %}*/
/*   {% set title = thread.title %}*/
/*   {% set summary = thread.content|plain_text(50) %}*/
/*   {% set message = setting('default.groupShareContent')|default('我正在{{groupname}}小组，看到{{threadname}}，很不错哦，一起来看看吧！')|simple_template({threadname: '「' ~ thread.title ~ '」' , groupname: '「' ~ group.title ~ '」' }) %}*/
/*   {% set url = url('group_thread_show', {id:group.id, threadId:thread.id}) %}*/
/*   {% set picture = '' %}*/
/*   {% set id = group.id%}*/
/* {% endif %}*/
/* */
/* <div class="dropdown-menu {% if right|default(false) %}pull-right{% endif %} js-social-share-params" data-title="{{ title }}" data-summary="{{ summary|default('') }}" data-message="{{ message }}" data-url="{{ url }}" data-picture="{{ picture|default('') }}">*/
/*   {% if is_plugin_installed('Point') %}*/
/*     <input type="hidden" class="point-share-url" value="{{ path('share_point',{ id:id, title:title, type:type}) }}">*/
/*   {% endif %}*/
/* */
/*   <a href="javascript:;" class="js-social-share" data-cmd="weixin" title="分享到微信" data-share="weixin" data-qrcode-url="{{ path('common_qrcode',{text:url}) }}"><i class="es-icon es-icon-weixin"></i></a>*/
/*   <a href="javascript:;" class="js-social-share" data-cmd="tsina" title="分享到新浪微博" data-share="weibo"><i class="es-icon es-icon-weibo"></i></a>*/
/*   <a href="javascript:;" class="js-social-share" data-cmd="qq" title="分享到QQ好友" data-share="qq"><i class="es-icon es-icon-qq"></i></a>*/
/*   <a href="javascript:;" class="js-social-share" data-cmd="qzone" title="分享到QQ空间" data-share="qzone"><i class="es-icon es-icon-qzone"></i></a>*/
/* */
/* </div>*/
/* */
/* {{ load_script('common/share-dropdown') }}*/
/* */
