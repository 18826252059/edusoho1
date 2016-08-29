<?php

/* TopxiaWebBundle:Article/Part:list-header.html.twig */
class __TwigTemplate_8384a794abdf983a987e69f338b0479058ea5e9adde05c89408c6efbaf5e3f8f extends Twig_Template
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
        if (( !(isset($context["featuredArticles"]) ? $context["featuredArticles"] : null) &&  !(isset($context["promotedArticles"]) ? $context["promotedArticles"] : null))) {
            // line 2
            echo "  ";
            if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
                // line 3
                echo "    <div class=\"alert alert-warning\">头条大图轮播功能需先在后台资讯管理页面给正文上传图片以及添加头条属性<a class=\"mls alert-link\" href=\"";
                echo $this->env->getExtension('routing')->getPath("admin_article");
                echo "\">前往设置</a></div>
  ";
            }
        } else {
            // line 6
            echo "  <div class=\"article-list-header mbl row\">
    <!-- 轮播图 -->  
    <div class=\"aricle-carousel col-md-8\">
      <div class=\"swiper-container\">
        <div class=\"swiper-wrapper\">
          ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["featuredArticles"]) ? $context["featuredArticles"] : null));
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
            foreach ($context['_seq'] as $context["index"] => $context["featuredArticle"]) {
                // line 12
                echo "          <div class=\"swiper-slide ";
                if (($this->getAttribute($context["loop"], "index", array()) > 1)) {
                    echo " swiper-hidden ";
                }
                echo "\">
            <a href=\"";
                // line 13
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_detail", array("id" => $this->getAttribute($context["featuredArticle"], "id", array()))), "html", null, true);
                echo "\">
              ";
                // line 14
                if ($this->getAttribute($context["featuredArticle"], "thumb", array())) {
                    // line 15
                    echo "                <img class=\"img-responsive\" src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute($context["featuredArticle"], "thumb", array()), ""), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["featuredArticle"], "title", array()), "html", null, true);
                    echo "\">
              ";
                } else {
                    // line 17
                    echo "                <img class=\"img-responsive\" src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("assets/v2/img/article/article_banner_" . $this->getAttribute($context["loop"], "index", array())) . ".jpg")), "html", null, true);
                    echo "\"  alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["featuredArticle"], "title", array()), "html", null, true);
                    echo "\">  
              ";
                }
                // line 19
                echo "              <div class=\"swiper-cat\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["featuredCategories"]) ? $context["featuredCategories"] : null), $this->getAttribute($context["featuredArticle"], "id", array(), "array"), array(), "array"), "name", array()), "html", null, true);
                echo "</div>
              <div class=\"swiper-caption\">";
                // line 20
                echo twig_escape_filter($this->env, $this->getAttribute($context["featuredArticle"], "title", array()), "html", null, true);
                echo "</div>
              <div class=\"image-overlay\"></div>
            </a>
          </div>
          ";
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
            unset($context['_seq'], $context['_iterated'], $context['index'], $context['featuredArticle'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "        </div>
        <div class=\"swiper-pager\"></div>
      </div>
    </div>
    <div class=\"col-md-4 hidden-sm hidden-xs\">
      ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["promotedArticles"]) ? $context["promotedArticles"] : null));
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
            foreach ($context['_seq'] as $context["index"] => $context["promotedArticle"]) {
                // line 31
                echo "      <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_detail", array("id" => $this->getAttribute($context["promotedArticle"], "id", array()))), "html", null, true);
                echo "\" class=\"topic-post-small\" 
        ";
                // line 32
                if (($this->getAttribute($context["loop"], "index", array()) > 1)) {
                    echo "style=\"margin-top:12px;\"";
                }
                echo ">
        ";
                // line 33
                if ($this->getAttribute($context["promotedArticle"], "thumb", array())) {
                    // line 34
                    echo "          <img class=\"img-responsive\" src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute($context["promotedArticle"], "thumb", array()), ""), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["promotedArticle"], "title", array()), "html", null, true);
                    echo "\">
        ";
                } else {
                    // line 36
                    echo "          <img class=\"img-responsive\" src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("assets/v2/img/article/article_banner_" . (8 - $this->getAttribute($context["loop"], "index", array()))) . ".jpg")), "html", null, true);
                    echo "\"  alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["promotedArticle"], "title", array()), "html", null, true);
                    echo "\">
        ";
                }
                // line 38
                echo "        <div class=\"content\">
          <p>";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["promotedCategories"]) ? $context["promotedCategories"] : null), $this->getAttribute($context["promotedArticle"], "id", array(), "array"), array(), "array"), "name", array()), "html", null, true);
                echo "</p>
          <h4 class=\"title\">";
                // line 40
                echo $this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute($context["promotedArticle"], "title", array()), 125);
                echo "</h4>
        </div>
        <div class=\"image-overlay\"></div>
      </a>
      ";
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
            unset($context['_seq'], $context['_iterated'], $context['index'], $context['promotedArticle'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "    </div>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Article/Part:list-header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 45,  168 => 40,  164 => 39,  161 => 38,  153 => 36,  145 => 34,  143 => 33,  137 => 32,  132 => 31,  115 => 30,  108 => 25,  89 => 20,  84 => 19,  76 => 17,  68 => 15,  66 => 14,  62 => 13,  55 => 12,  38 => 11,  31 => 6,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if not featuredArticles and not promotedArticles %}*/
/*   {% if is_granted('ROLE_ADMIN') %}*/
/*     <div class="alert alert-warning">头条大图轮播功能需先在后台资讯管理页面给正文上传图片以及添加头条属性<a class="mls alert-link" href="{{ path('admin_article') }}">前往设置</a></div>*/
/*   {% endif %}*/
/* {% else %}*/
/*   <div class="article-list-header mbl row">*/
/*     <!-- 轮播图 -->  */
/*     <div class="aricle-carousel col-md-8">*/
/*       <div class="swiper-container">*/
/*         <div class="swiper-wrapper">*/
/*           {% for index,featuredArticle in featuredArticles %}*/
/*           <div class="swiper-slide {% if loop.index > 1 %} swiper-hidden {% endif %}">*/
/*             <a href="{{ path('article_detail', {id:featuredArticle.id}) }}">*/
/*               {% if featuredArticle.thumb %}*/
/*                 <img class="img-responsive" src="{{ filepath(featuredArticle.thumb, '') }}" alt="{{ featuredArticle.title }}">*/
/*               {% else %}*/
/*                 <img class="img-responsive" src="{{ asset("assets/v2/img/article/article_banner_" ~ loop.index ~ ".jpg" ) }}"  alt="{{ featuredArticle.title }}">  */
/*               {% endif %}*/
/*               <div class="swiper-cat">{{ featuredCategories[featuredArticle['id']].name }}</div>*/
/*               <div class="swiper-caption">{{ featuredArticle.title }}</div>*/
/*               <div class="image-overlay"></div>*/
/*             </a>*/
/*           </div>*/
/*           {% endfor %}*/
/*         </div>*/
/*         <div class="swiper-pager"></div>*/
/*       </div>*/
/*     </div>*/
/*     <div class="col-md-4 hidden-sm hidden-xs">*/
/*       {% for index,promotedArticle in promotedArticles %}*/
/*       <a href="{{ path('article_detail', {id:promotedArticle.id}) }}" class="topic-post-small" */
/*         {% if loop.index > 1 %}style="margin-top:12px;"{% endif %}>*/
/*         {% if promotedArticle.thumb %}*/
/*           <img class="img-responsive" src="{{ filepath(promotedArticle.thumb, '') }}" alt="{{ promotedArticle.title }}">*/
/*         {% else %}*/
/*           <img class="img-responsive" src="{{ asset("assets/v2/img/article/article_banner_" ~ ( 8 - loop.index ) ~ ".jpg" ) }}"  alt="{{ promotedArticle.title }}">*/
/*         {% endif %}*/
/*         <div class="content">*/
/*           <p>{{ promotedCategories[promotedArticle['id']].name }}</p>*/
/*           <h4 class="title">{{ promotedArticle.title|plain_text(125) }}</h4>*/
/*         </div>*/
/*         <div class="image-overlay"></div>*/
/*       </a>*/
/*       {% endfor %}*/
/*     </div>*/
/*   </div>*/
/* {% endif %}*/
/* */
