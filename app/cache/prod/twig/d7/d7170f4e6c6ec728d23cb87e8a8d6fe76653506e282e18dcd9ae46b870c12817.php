<?php

/* TopxiaAdminBundle:Article:article-modal.html.twig */
class __TwigTemplate_53f0287c46ecd12387dbc7ad5b61536681026f292eda486cd7eb7751329c90fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:Article:article-modal.html.twig", 1);
        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["menu"] = "admin_operation_article_create";
        // line 5
        $context["script_controller"] = "article/article-modal";
        // line 7
        $context["article"] = ((array_key_exists("article", $context)) ? (_twig_default_filter((isset($context["article"]) ? $context["article"] : null), null)) : (null));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_page_title($context, array $blocks = array())
    {
        if ((isset($context["article"]) ? $context["article"] : null)) {
            echo "编辑资讯";
        } else {
            $this->displayParentBlock("page_title", $context, $blocks);
        }
    }

    // line 11
    public function block_main($context, array $blocks = array())
    {
        // line 12
        echo "
<style>
  #article-form .popover {
    max-width: 400px;
    width: 400px;
  }   
</style>


<form class=\"two-col-form\" id=\"article-form\" method=\"post\" enctype=\"multipart/form-data\"
  ";
        // line 22
        if ((isset($context["article"]) ? $context["article"] : null)) {
            // line 23
            echo "    action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_article_edit", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "id", array()))), "html", null, true);
            echo "\"
  ";
        } else {
            // line 25
            echo "    action=\"";
            echo $this->env->getExtension('routing')->getPath("admin_article_create");
            echo "\"
  ";
        }
        // line 27
        echo "  >
  <div class=\"row\">
    <div class=\"col-md-8\">
      <div class=\"form-group\">
        <label for=\"article-title-field\" class=\"control-label\">资讯标题</label>
        <div class=\"controls\">
          <input class=\"form-control\" id=\"article-title-field\" type=\"text\" name=\"title\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "title", array()), "")) : ("")), "html", null, true);
        echo "\">
        </div>
      </div>
      
      <div class=\"form-group\">
        <label for=\"categoryId\" class=\"control-label\">所属栏目</label>
        <div class=\"controls\">
          <select class=\"form-control\" id=\"categoryId\" type=\"text\" name=\"categoryId\" tabindex=\"2\">
            ";
        // line 41
        if ((isset($context["article"]) ? $context["article"] : null)) {
        } else {
            echo "<option value=\"\">-选择所属栏目-</option>";
        }
        // line 42
        echo "          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categoryTree"]) ? $context["categoryTree"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["tree"]) {
            // line 43
            echo "            <option value=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tree"], "id", array()), "html", null, true);
            echo " ";
            if (($this->getAttribute($context["tree"], "id", array()) == $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "id", array()))) {
                echo "selected";
            }
            echo ">";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, (($this->getAttribute($context["tree"], "depth", array()) - 1) * 2)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                echo "&nbsp;&nbsp;&nbsp;&nbsp;";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "└─ ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tree"], "name", array()), "html", null, true);
            echo "</option>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tree'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "            </select>
        </div>
      </div>

      <div class=\"form-group\">
        <label for=\"article-tagIds\"　class=\"control-label\">TAG标签</label>
        <div class=\"controls\">
          <input type=\"form-control\" id=\"article-tags\" name=\"tags\" required=\"required\" class=\"width-full select2-offscreen\" tabindex=\"-1\" value=\"";
        // line 52
        echo twig_escape_filter($this->env, twig_join_filter(((array_key_exists("tagNames", $context)) ? (_twig_default_filter((isset($context["tagNames"]) ? $context["tagNames"] : null), array())) : (array())), ","), "html", null, true);
        echo "\" data-match-url=\"";
        echo $this->env->getExtension('routing')->getPath("tag_match");
        echo "\">
          <div class=\"help-block\" style=\"display:none;\"></div>
        </div>
      </div>

      <div class=\"form-group\">
        <label for=\"richeditor-body-field\" class=\"control-label\">正文</label>
        <div class=\"controls\">
          <textarea class=\"form-control\" id=\"richeditor-body-field\" rows=\"16\" name=\"body\"
            data-image-upload-url=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editor_upload", array("token" => $this->env->getExtension('topxia_web_twig')->makeUpoadToken("default"))), "html", null, true);
        echo "\"
            data-flash-upload-url=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editor_upload", array("token" => $this->env->getExtension('topxia_web_twig')->makeUpoadToken("default", "flash"))), "html", null, true);
        echo "\"
           >";
        // line 63
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "body", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "body", array()), "")) : ("")), "html", null, true);
        echo "</textarea>
        </div>
      </div>

      <div class=\"form-group\">
        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
        <button id=\"article-operate-save\" class=\"btn btn-primary\" data-toggle=\"form-submit\" data-loading-text=\"正在保存...\">确定</button>
        <a class=\"btn btn-link\" href=\"";
        // line 70
        echo $this->env->getExtension('routing')->getPath("admin_article");
        echo "\">返回</a>
      </div>
    
    </div>
    <div class=\"col-md-4\">
      <div class=\"panel panel-default\">
        <div class=\"panel-heading\">资讯属性</div>
        <div class=\"panel-body\">
            <label class=\"checkbox-inline\">
            <input type=\"checkbox\" name=\"sticky\" value=\"1\" ";
        // line 79
        if ($this->env->getExtension('topxia_html_twig')->fieldValue((isset($context["article"]) ? $context["article"] : null), "sticky")) {
            echo " checked=\"checked\" ";
        }
        echo "> 置顶
          </label>
          <label class=\"checkbox-inline\">
            <input type=\"checkbox\" name=\"featured\" value=\"1\" ";
        // line 82
        if ($this->env->getExtension('topxia_html_twig')->fieldValue((isset($context["article"]) ? $context["article"] : null), "featured")) {
            echo " checked=\"checked\" ";
        }
        echo "> 头条  
          </label>
          <label class=\"checkbox-inline\">
            <input type=\"checkbox\" name=\"promoted\" value=\"1\" ";
        // line 85
        if ($this->env->getExtension('topxia_html_twig')->fieldValue((isset($context["article"]) ? $context["article"] : null), "promoted")) {
            echo " checked=\"checked\" ";
        }
        echo "> 推荐  
          </label>
          <a class=\"glyphicon glyphicon-question-sign text-muted pull-right\" id=\"article-property-tips\" data-toggle=\"tooltip\" data-placement=\"bottom\" href=\"javascript:\" title=\"\">
          </a>
          <div id=\"article-property-tips-html\" style=\"display:none;\">

            <p>设为“<strong>置顶</strong>”后，该资讯将会显示在列表的最前面。</p>
            <p>设为“<strong>头条</strong>”后，如果正文含有图片，则该资讯的第一张图片将显示在资讯首页的头条图片区，图片尺寸建议统一为：720*400。</p>
            <p>设为“<strong>推荐</strong>”后，该资讯将会显示在页面右侧的推荐资讯中。</p>

          </div>
        </div>
      </div>

      <div class=\"panel panel-default\">
        <div class=\"panel-heading\">来源设置</div>
        <div class=\"panel-body\">
            <div class=\"form-group\">
              <label for=\"article-source-field\">来源名称</label>
              <div class=\"controls\">
                <input class=\"form-control\" id=\"article-source-field\" type=\"text\" name=\"source\" value=\"";
        // line 105
        echo $this->env->getExtension('topxia_html_twig')->fieldValue((isset($context["article"]) ? $context["article"] : null), "source");
        echo "\">
              </div>
            </div>

            <div class=\"form-group\">
                <label for=\"article-sourceUrl-field\">来源地址</label>
              <div class=\"controls\">
                  <input class=\"form-control\" id=\"article-sourceUrl-field\" type=\"text\" name=\"sourceUrl\" value=\"";
        // line 112
        echo $this->env->getExtension('topxia_html_twig')->fieldValue((isset($context["article"]) ? $context["article"] : null), "sourceUrl");
        echo "\">
              </div>
            </div>
        </div>
      </div>

      <div class=\"panel panel-default\">
        <div class=\"panel-heading\">设置缩略图</div>
        <div class=\"panel-body\">
          <div id=\"article-thumb-container\">
              ";
        // line 122
        if ((($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "thumb", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "thumb", array()), null)) : (null))) {
            // line 123
            echo "                <img class=\"img-responsive\" src='";
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "thumb", array())), "html", null, true);
            echo "'>
              ";
        }
        // line 125
        echo "            </div>
            <br>
            <a href=\"#modal\" data-toggle=\"modal\" data-url=\"";
        // line 127
        echo $this->env->getExtension('routing')->getPath("admin_article_show_upload");
        echo "\" class=\"btn btn-default\">上传</a>
          <a id=\"article_thumb_remove\"  class=\"btn btn-default\" data-url=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_article_thumb_remove", array("id" => (($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "id", array()), 0)) : (0)))), "html", null, true);
        echo "\" ";
        if ( !(($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "thumb", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "thumb", array()), null)) : (null))) {
            echo "style=\"display:none;\" ";
        }
        echo ">删除</a>
          <input type=\"hidden\" name=\"thumb\" value=\"";
        // line 129
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "thumb", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "thumb", array()))) : ("")), "html", null, true);
        echo "\" id=\"article-thumb\">
          <input type=\"hidden\" name=\"originalThumb\" value=\"";
        // line 130
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "originalThumb", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "originalThumb", array()))) : ("")), "html", null, true);
        echo "\" id=\"article-originalThumb\">
          <p class=\"help-block\">请上传png, gif, jpg格式的图片文件。</p>
          <p class=\"help-block mbs\">请推荐尺寸754*424px。
        </div>
      </div>

      <div class=\"panel panel-default\">
        <div class=\"panel-heading\">发布时间</div>
        <div class=\"panel-body\">
          <div class=\"form-group\">
            <div class=\"controls\">
              <input class=\"form-control\" type=\"text\" name=\"publishedTime\" value=\" ";
        // line 141
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->env->getExtension('topxia_html_twig')->fieldValue((isset($context["article"]) ? $context["article"] : null), "publishedTime", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "server", array()), "get", array(0 => "REQUEST_TIME"), "method")), "Y-m-d H:i:s"), "html", null, true);
        echo "\">
              <div class=\"help-block\">内容条目默认按发布时间的倒序显示</div>
            </div>
          </div>
        </div>
      </div>      
    </div>
  </div>
</form>

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Article:article-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  290 => 141,  276 => 130,  272 => 129,  264 => 128,  260 => 127,  256 => 125,  250 => 123,  248 => 122,  235 => 112,  225 => 105,  200 => 85,  192 => 82,  184 => 79,  172 => 70,  167 => 68,  159 => 63,  155 => 62,  151 => 61,  137 => 52,  128 => 45,  104 => 43,  99 => 42,  94 => 41,  83 => 33,  75 => 27,  69 => 25,  63 => 23,  61 => 22,  49 => 12,  46 => 11,  36 => 9,  32 => 1,  30 => 7,  28 => 5,  26 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaAdminBundle::layout.html.twig' %}*/
/* */
/* {% set menu = 'admin_operation_article_create' %}*/
/* */
/* {% set script_controller = 'article/article-modal' %}*/
/* */
/* {% set article = article|default(null) %}*/
/* */
/* {% block page_title %}{% if article %}编辑资讯{% else %}{{parent()}}{% endif %}{% endblock %}*/
/* */
/* {% block main %}*/
/* */
/* <style>*/
/*   #article-form .popover {*/
/*     max-width: 400px;*/
/*     width: 400px;*/
/*   }   */
/* </style>*/
/* */
/* */
/* <form class="two-col-form" id="article-form" method="post" enctype="multipart/form-data"*/
/*   {% if article %}*/
/*     action="{{ path('admin_article_edit', {id:article.id}) }}"*/
/*   {% else %}*/
/*     action="{{ path('admin_article_create') }}"*/
/*   {% endif %}*/
/*   >*/
/*   <div class="row">*/
/*     <div class="col-md-8">*/
/*       <div class="form-group">*/
/*         <label for="article-title-field" class="control-label">资讯标题</label>*/
/*         <div class="controls">*/
/*           <input class="form-control" id="article-title-field" type="text" name="title" value="{{ article.title|default('') }}">*/
/*         </div>*/
/*       </div>*/
/*       */
/*       <div class="form-group">*/
/*         <label for="categoryId" class="control-label">所属栏目</label>*/
/*         <div class="controls">*/
/*           <select class="form-control" id="categoryId" type="text" name="categoryId" tabindex="2">*/
/*             {% if article %}{% else %}<option value="">-选择所属栏目-</option>{% endif %}*/
/*           {% for tree in categoryTree %}*/
/*             <option value={{ tree.id }} {% if tree.id == category.id  %}selected{% endif%}>{% for i in 0..(tree.depth-1)*2 %}&nbsp;&nbsp;&nbsp;&nbsp;{% endfor %}└─ {{ tree.name }}</option>*/
/*           {% endfor %}*/
/*             </select>*/
/*         </div>*/
/*       </div>*/
/* */
/*       <div class="form-group">*/
/*         <label for="article-tagIds"　class="control-label">TAG标签</label>*/
/*         <div class="controls">*/
/*           <input type="form-control" id="article-tags" name="tags" required="required" class="width-full select2-offscreen" tabindex="-1" value="{{ tagNames|default([])|join(',') }}" data-match-url="{{ path('tag_match') }}">*/
/*           <div class="help-block" style="display:none;"></div>*/
/*         </div>*/
/*       </div>*/
/* */
/*       <div class="form-group">*/
/*         <label for="richeditor-body-field" class="control-label">正文</label>*/
/*         <div class="controls">*/
/*           <textarea class="form-control" id="richeditor-body-field" rows="16" name="body"*/
/*             data-image-upload-url="{{ path('editor_upload', {token:upload_token('default')}) }}"*/
/*             data-flash-upload-url="{{ path('editor_upload', {token:upload_token('default', 'flash')}) }}"*/
/*            >{{ article.body|default('') }}</textarea>*/
/*         </div>*/
/*       </div>*/
/* */
/*       <div class="form-group">*/
/*         <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/*         <button id="article-operate-save" class="btn btn-primary" data-toggle="form-submit" data-loading-text="正在保存...">确定</button>*/
/*         <a class="btn btn-link" href="{{ path('admin_article') }}">返回</a>*/
/*       </div>*/
/*     */
/*     </div>*/
/*     <div class="col-md-4">*/
/*       <div class="panel panel-default">*/
/*         <div class="panel-heading">资讯属性</div>*/
/*         <div class="panel-body">*/
/*             <label class="checkbox-inline">*/
/*             <input type="checkbox" name="sticky" value="1" {% if field_value(article, 'sticky') %} checked="checked" {% endif %}> 置顶*/
/*           </label>*/
/*           <label class="checkbox-inline">*/
/*             <input type="checkbox" name="featured" value="1" {% if field_value(article, 'featured') %} checked="checked" {% endif %}> 头条  */
/*           </label>*/
/*           <label class="checkbox-inline">*/
/*             <input type="checkbox" name="promoted" value="1" {% if field_value(article, 'promoted') %} checked="checked" {% endif %}> 推荐  */
/*           </label>*/
/*           <a class="glyphicon glyphicon-question-sign text-muted pull-right" id="article-property-tips" data-toggle="tooltip" data-placement="bottom" href="javascript:" title="">*/
/*           </a>*/
/*           <div id="article-property-tips-html" style="display:none;">*/
/* */
/*             <p>设为“<strong>置顶</strong>”后，该资讯将会显示在列表的最前面。</p>*/
/*             <p>设为“<strong>头条</strong>”后，如果正文含有图片，则该资讯的第一张图片将显示在资讯首页的头条图片区，图片尺寸建议统一为：720*400。</p>*/
/*             <p>设为“<strong>推荐</strong>”后，该资讯将会显示在页面右侧的推荐资讯中。</p>*/
/* */
/*           </div>*/
/*         </div>*/
/*       </div>*/
/* */
/*       <div class="panel panel-default">*/
/*         <div class="panel-heading">来源设置</div>*/
/*         <div class="panel-body">*/
/*             <div class="form-group">*/
/*               <label for="article-source-field">来源名称</label>*/
/*               <div class="controls">*/
/*                 <input class="form-control" id="article-source-field" type="text" name="source" value="{{ field_value(article, 'source') }}">*/
/*               </div>*/
/*             </div>*/
/* */
/*             <div class="form-group">*/
/*                 <label for="article-sourceUrl-field">来源地址</label>*/
/*               <div class="controls">*/
/*                   <input class="form-control" id="article-sourceUrl-field" type="text" name="sourceUrl" value="{{ field_value(article, 'sourceUrl') }}">*/
/*               </div>*/
/*             </div>*/
/*         </div>*/
/*       </div>*/
/* */
/*       <div class="panel panel-default">*/
/*         <div class="panel-heading">设置缩略图</div>*/
/*         <div class="panel-body">*/
/*           <div id="article-thumb-container">*/
/*               {% if article.thumb|default(null) %}*/
/*                 <img class="img-responsive" src='{{ filepath(article.thumb) }}'>*/
/*               {% endif %}*/
/*             </div>*/
/*             <br>*/
/*             <a href="#modal" data-toggle="modal" data-url="{{path('admin_article_show_upload')}}" class="btn btn-default">上传</a>*/
/*           <a id="article_thumb_remove"  class="btn btn-default" data-url="{{ path('admin_article_thumb_remove',{id:article.id|default(0)}) }}" {% if not article.thumb|default(null) %}style="display:none;" {% endif %}>删除</a>*/
/*           <input type="hidden" name="thumb" value="{{article.thumb |default()}}" id="article-thumb">*/
/*           <input type="hidden" name="originalThumb" value="{{article.originalThumb |default()}}" id="article-originalThumb">*/
/*           <p class="help-block">请上传png, gif, jpg格式的图片文件。</p>*/
/*           <p class="help-block mbs">请推荐尺寸754*424px。*/
/*         </div>*/
/*       </div>*/
/* */
/*       <div class="panel panel-default">*/
/*         <div class="panel-heading">发布时间</div>*/
/*         <div class="panel-body">*/
/*           <div class="form-group">*/
/*             <div class="controls">*/
/*               <input class="form-control" type="text" name="publishedTime" value=" {{ field_value(article, 'publishedTime', app.request.server.get('REQUEST_TIME'))|date('Y-m-d H:i:s') }}">*/
/*               <div class="help-block">内容条目默认按发布时间的倒序显示</div>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*       </div>      */
/*     </div>*/
/*   </div>*/
/* </form>*/
/* */
/* {% endblock %}*/
/* */
