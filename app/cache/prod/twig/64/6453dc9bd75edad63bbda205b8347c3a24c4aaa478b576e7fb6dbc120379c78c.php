<?php

/* TopxiaAdminBundle:File:index.html.twig */
class __TwigTemplate_8c306cbd00b5fe697c4ae834ef99f51c8f4e00a9da9a61c8c16ddd4f143a68b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle:Content:layout.html.twig", "TopxiaAdminBundle:File:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle:Content:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["script_controller"] = "file/list";
        // line 7
        $context["menu"] = "file";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "文件管理 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 9
    public function block_main($context, array $blocks = array())
    {
        // line 10
        echo "
<div class=\"page-header clearfix\">
  <h1 class=\"pull-left\">文件</h1>
</div>

<div class=\"well btn-small\">
  <form>
    <div class=\"col-md-2\">
    ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "group", array()), 'widget');
        echo "
    </div>
    <input type=\"submit\" class=\"btn btn-primary\" value=\"检索\">
  </form>
</div>
<div id=\"files\">
  <div class=\"rows clearfix\">
    ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["files"]) ? $context["files"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
            // line 26
            echo "      ";
            $context["user"] = $this->env->getExtension('topxia_web_twig')->loadObject("user", $this->getAttribute($context["file"], "userId", array()));
            // line 27
            echo "      ";
            $context["fileGroup"] = $this->env->getExtension('topxia_web_twig')->loadObject("file_group", $this->getAttribute($context["file"], "groupId", array()));
            // line 28
            echo "      ";
            $context["fileUri"] = $this->env->getExtension('topxia_web_twig')->parseFileUri($this->getAttribute($context["file"], "uri", array()));
            // line 29
            echo "      <div class=\"col-md-3 mbl\">
        <div class=\"thumbnail file-thumbnail\">
          ";
            // line 31
            if (twig_in_filter("image/", $this->getAttribute($context["file"], "mime", array()))) {
                // line 32
                echo "            <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute($context["file"], "uri", array())), "html", null, true);
                echo "\" style=\"max-height:160px;\">
          ";
            } else {
                // line 34
                echo "            <i class=\"glyphicon glyphicon-file\"></i>
          ";
            }
            // line 36
            echo "          <div class=\"caption\">
            <p><a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute($context["file"], "uri", array())), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fileUri"]) ? $context["fileUri"] : null), "name", array()), "html", null, true);
            echo "</a></p>
            <p>
              <span class=\"text-muted\">";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->fileSizeFilter($this->getAttribute($context["file"], "size", array())), "html", null, true);
            echo "</span>
              <a href=\"javascript:\" class=\"delete pull-right btn btn-danger btn-sm\" data-url=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_file_delete", array("id" => $this->getAttribute($context["file"], "id", array()))), "html", null, true);
            echo "\">删除</a>
            </p>
            <p>
              <span class=\"text-muted\"><i class=\"glyphicon glyphicon-time\"></i> ";
            // line 43
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["file"], "createdTime", array()), "Y-n-d H:i:s"), "html", null, true);
            echo "</span>
            </p>
            <p>
              ";
            // line 46
            if ((isset($context["user"]) ? $context["user"] : null)) {
                // line 47
                echo "                <i class=\"text-muted glyphicon glyphicon-user\"></i>
                <a href=\"";
                // line 48
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("userId" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "nickname", array()), "html", null, true);
                echo "</a>
              ";
            } else {
                // line 50
                echo "                <span class=\"label label-danger\">";
                if ($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name")) {
                    echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), "学员"), "html", null, true);
                } else {
                    echo "学员";
                }
                echo "不存在</span>
              ";
            }
            // line 52
            echo "            </p>
            <p>
              <span class=\"text-success\">
                <i class=\"glyphicon glyphicon-folder-open\"></i> 
                ";
            // line 56
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["fileGroup"]) ? $context["fileGroup"] : null), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["fileGroup"]) ? $context["fileGroup"] : null), "name", array()), "文件组不存在")) : ("文件组不存在")), "html", null, true);
            echo "
              </span>
            </p>
          </div>
        </div>
      </div>
      ";
            // line 62
            if ((($this->getAttribute($context["loop"], "index", array()) % 4) == 0)) {
                echo "</div><div class=\"rows clearfix\">";
            }
            // line 63
            echo "    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:File:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 64,  173 => 63,  169 => 62,  160 => 56,  154 => 52,  144 => 50,  137 => 48,  134 => 47,  132 => 46,  126 => 43,  120 => 40,  116 => 39,  109 => 37,  106 => 36,  102 => 34,  96 => 32,  94 => 31,  90 => 29,  87 => 28,  84 => 27,  81 => 26,  64 => 25,  54 => 18,  44 => 10,  41 => 9,  34 => 3,  30 => 1,  28 => 7,  26 => 5,  11 => 1,);
    }
}
/* {% extends 'TopxiaAdminBundle:Content:layout.html.twig' %}*/
/* */
/* {% block title %}文件管理 - {{ parent() }}{% endblock %}*/
/* */
/* {% set script_controller = 'file/list' %}*/
/* */
/* {% set menu = 'file' %}*/
/* */
/* {% block main %}*/
/* */
/* <div class="page-header clearfix">*/
/*   <h1 class="pull-left">文件</h1>*/
/* </div>*/
/* */
/* <div class="well btn-small">*/
/*   <form>*/
/*     <div class="col-md-2">*/
/*     {{ form_widget(form.group) }}*/
/*     </div>*/
/*     <input type="submit" class="btn btn-primary" value="检索">*/
/*   </form>*/
/* </div>*/
/* <div id="files">*/
/*   <div class="rows clearfix">*/
/*     {% for file in files %}*/
/*       {% set user = object_load('user', file.userId) %}*/
/*       {% set fileGroup = object_load('file_group', file.groupId) %}*/
/*       {% set fileUri = file_uri_parse(file.uri) %}*/
/*       <div class="col-md-3 mbl">*/
/*         <div class="thumbnail file-thumbnail">*/
/*           {% if 'image/' in file.mime %}*/
/*             <img src="{{ filepath(file.uri) }}" style="max-height:160px;">*/
/*           {% else %}*/
/*             <i class="glyphicon glyphicon-file"></i>*/
/*           {% endif %}*/
/*           <div class="caption">*/
/*             <p><a href="{{ filepath(file.uri) }}" target="_blank">{{ fileUri.name }}</a></p>*/
/*             <p>*/
/*               <span class="text-muted">{{ file.size|file_size }}</span>*/
/*               <a href="javascript:" class="delete pull-right btn btn-danger btn-sm" data-url="{{ path('admin_file_delete', {id:file.id}) }}">删除</a>*/
/*             </p>*/
/*             <p>*/
/*               <span class="text-muted"><i class="glyphicon glyphicon-time"></i> {{ file.createdTime|date('Y-n-d H:i:s') }}</span>*/
/*             </p>*/
/*             <p>*/
/*               {% if user %}*/
/*                 <i class="text-muted glyphicon glyphicon-user"></i>*/
/*                 <a href="{{ path('user_show', {userId:user.id}) }}">{{ user.nickname }}</a>*/
/*               {% else %}*/
/*                 <span class="label label-danger">{% if setting('default.user_name') %}{{setting('default.user_name')|default('学员')}}{% else %}学员{% endif %}不存在</span>*/
/*               {% endif %}*/
/*             </p>*/
/*             <p>*/
/*               <span class="text-success">*/
/*                 <i class="glyphicon glyphicon-folder-open"></i> */
/*                 {{ fileGroup.name|default('文件组不存在') }}*/
/*               </span>*/
/*             </p>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*       {% if loop.index % 4  == 0 %}</div><div class="rows clearfix">{% endif %}*/
/*     {% endfor %}*/
/*   </div>*/
/* </div>*/
/* {% endblock %}*/
/* */
