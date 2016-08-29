<?php

/* TopxiaWebBundle:Default:groups.html.twig */
class __TwigTemplate_5bbe4361a15bb07887a7f29b2c09fa2a1ded12405b9409e1338013bfdd4f8e39 extends Twig_Template
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
        $context["web_macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "TopxiaWebBundle:Default:groups.html.twig", 1);
        // line 2
        echo "<!-- 小组动态 -->
";
        // line 3
        $context["groups"] = $this->env->getExtension('topxia_data_twig')->getData("HotGroup", array("count" => (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "count", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "count", array()), 6)) : (6))));
        // line 4
        $context["reviews"] = $this->env->getExtension('topxia_data_twig')->getData("LatestCourseReviews", array("count" => (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "count", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "count", array()), 4)) : (4))));
        // line 5
        $context["ArticlesIsNull"] = false;
        // line 6
        echo "<section class=\"dynamic-section ";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "background", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "background", array()), "")) : ("")), "html", null, true);
        echo "\">
  <div class=\"container\">
    <div class=\"text-line gray\">
      <h5><span>";
        // line 9
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "title", array()), $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "defaultTitle", array()))) : ($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "defaultTitle", array()))), "html", null, true);
        echo "</span><div class=\"line\"></div></h5>
      <div class=\"subtitle\">";
        // line 10
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "subTitle", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "subTitle", array()), $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "defaultSubTitle", array()))) : ($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "defaultSubTitle", array()))), "html", null, true);
        echo "</div>
    </div>
    <div class=\"dynamic-section-main row\">
      ";
        // line 13
        if (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "select1", array()) == "checked")) {
            // line 14
            echo "      <div class=\"col-md-6\">
        <div class=\"panel panel-default index-group\">
          <div class=\"panel-heading\">
            <a href=\"";
            // line 17
            echo $this->env->getExtension('routing')->getPath("group");
            echo "\" class=\"more\"><i class=\"es-icon es-icon-morehoriz\"></i></a>
            <h3 class=\"panel-title\"><i class=\"es-icon es-icon-whatshot pull-left\"></i>热门小组</h3>
          </div>
          <div class=\"panel-body row\">
            <div class=\"media-group-list\">
              ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) ? $context["groups"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 23
                echo "                <div class=\"media media-group col-md-6 col-sm-4\">
                  <div class=\"media-left\">
                    <a href=\"";
                // line 25
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_show", array("id" => $this->getAttribute($context["group"], "id", array()))), "html", null, true);
                echo "\">
                    ";
                // line 26
                if ($this->getAttribute($context["group"], "logo", array())) {
                    // line 27
                    echo "                      <img class=\"avatar-square-md\" src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFilePath($this->getAttribute($context["group"], "logo", array())), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "title", array()), "html", null, true);
                    echo "\">
                    ";
                } else {
                    // line 29
                    echo "                      <img class=\"avatar-square-md\" src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/default/group.png"), "html", null, true);
                    echo "\"  alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "title", array()), "html", null, true);
                    echo "\">
                    ";
                }
                // line 31
                echo "                    </a>
                  </div>
                  <div class=\"media-body\">
                    <div class=\"title\">
                      <a class=\"link-light\" href=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_show", array("id" => $this->getAttribute($context["group"], "id", array()))), "html", null, true);
                echo "\">
                        ";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "title", array()), "html", null, true);
                echo "
                      </a>
                    </div>
                    <div class=\"metas\">
                      <span><i class=\"es-icon es-icon-people\"></i>";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "memberNum", array()), "html", null, true);
                echo "</span>
                      <span><i class=\"es-icon es-icon-textsms\"></i>";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "threadNum", array()), "html", null, true);
                echo "</span>
                    </div>
                  </div>
                </div>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "            </div>
          </div>
        </div>
      </div>
      ";
        }
        // line 51
        echo "      ";
        if (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "select2", array()) == "checked")) {
            // line 52
            echo "      <div class=\"col-md-6\">
        <div class=\"panel panel-default index-article\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\">
              最新资讯
              <a class=\"more\" href=\"";
            // line 57
            echo $this->env->getExtension('routing')->getPath("article_show");
            echo "\"><i class=\"es-icon es-icon-morehoriz\"></i></a>
            </h3>
          </div>
          <div class=\"panel-body clearfix\">
            ";
            // line 61
            $context["featuredArticles"] = $this->env->getExtension('topxia_data_twig')->getData("LatestArticles", array("type" => "featured", "count" => 2));
            // line 62
            echo "            ";
            if ((isset($context["featuredArticles"]) ? $context["featuredArticles"] : null)) {
                // line 63
                echo "            <ul class=\"index-recommend-aricle\">
            ";
                // line 64
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
                foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                    // line 65
                    echo "              ";
                    if ($this->getAttribute($context["article"], "thumb", array())) {
                        // line 66
                        echo "              ";
                        $context["ArticlesIsNull"] = true;
                        // line 67
                        echo "              <li class=\"";
                        if (($this->getAttribute($context["loop"], "index", array()) == 2)) {
                            echo "last";
                        }
                        echo "\">
                <a href=\"";
                        // line 68
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_detail", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
                        echo "\">
                  ";
                        // line 69
                        echo $this->env->getExtension('topxia_web_twig')->makeLazyImg($this->env->getExtension('topxia_web_twig')->getFpath((($this->getAttribute($context["article"], "thumb", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["article"], "thumb", array()), null)) : (null)), ""), "img-responsive", $this->getAttribute($context["article"], "title", array()), "lazyload_class.png");
                        echo "
                  <div class=\"image-overlay\"></div>
                  <div class=\"title\">";
                        // line 71
                        echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
                        echo "</div>
                </a>
              </li>
             ";
                    }
                    // line 75
                    echo "            ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 76
                echo "            </ul>
            ";
            }
            // line 78
            echo "            <ul class=\"index-new-article ";
            if ((isset($context["ArticlesIsNull"]) ? $context["ArticlesIsNull"] : null)) {
            } else {
                echo "full";
            }
            echo "\">
              ";
            // line 79
            $context["articles"] = $this->env->getExtension('topxia_data_twig')->getData("LatestArticles", array("count" => 5));
            // line 80
            echo "              ";
            if ((isset($context["articles"]) ? $context["articles"] : null)) {
                // line 81
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : null));
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
                foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                    // line 82
                    echo "                  <li class=\"";
                    if (($this->getAttribute($context["loop"], "index", array()) == 5)) {
                        echo "last";
                    }
                    echo " clearfix\"><i class=\"es-icon es-icon-dot color-primary mrs\"></i><a class=\"link-dark\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_detail", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
                    echo "</a> <span class=\"date\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->smarttimeFilter($this->getAttribute($context["article"], "createdTime", array())), "html", null, true);
                    echo "</span></li>
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 84
                echo "              ";
            }
            // line 85
            echo "            </ul>
          </div>
        </div>
      </div> 
      ";
        }
        // line 90
        echo "      ";
        if (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "select3", array()) == "checked")) {
            // line 91
            echo "      <div class=\"col-md-6\">
        <div class=\"panel panel-default index-evaluate\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\">
              学员评价
            </h3>
          </div>
          <div class=\"panel-body\">
            ";
            // line 99
            if ((isset($context["reviews"]) ? $context["reviews"] : null)) {
                // line 100
                echo "              ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["reviews"]) ? $context["reviews"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
                    // line 101
                    echo "              ";
                    $context["author"] = (($this->getAttribute($context["review"], "User", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["review"], "User", array()), null)) : (null));
                    // line 102
                    echo "              ";
                    $context["course"] = (($this->getAttribute($context["review"], "course", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["review"], "course", array()), null)) : (null));
                    // line 103
                    echo "              ";
                    if (((isset($context["author"]) ? $context["author"] : null) && (isset($context["course"]) ? $context["course"] : null))) {
                        // line 104
                        echo "            <div class=\"media media-dynamic\">
              <div class=\"media-left\">
              ";
                        // line 106
                        echo $context["web_macro"]->getuser_avatar((isset($context["author"]) ? $context["author"] : null), "", "avatar-sm", true);
                        echo "
              </div>
              <div class=\"media-body\">
                <div class=\"title text-sm\">
                  ";
                        // line 110
                        echo $context["web_macro"]->getuser_link((isset($context["author"]) ? $context["author"] : null), "link-light");
                        echo "
                  <span class=\"score\">";
                        // line 111
                        echo $context["web_macro"]->getstar($this->getAttribute($context["review"], "rating", array()));
                        echo "</span>
                  发布于 <a class=\"link-light\" href=\"";
                        // line 112
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
                        echo "\">《";
                        echo $this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "title", array()), 10);
                        echo "》</a>
                </div>
                <div class=\"content gray-darker\">
                  ";
                        // line 115
                        echo $this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute($context["review"], "content", array()), 30);
                        echo "
                </div>
                <span class=\"date\">";
                        // line 117
                        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->smarttimeFilter($this->getAttribute($context["review"], "createdTime", array())), "html", null, true);
                        echo "</span>
              </div>
            </div>
            ";
                    }
                    // line 121
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 122
                echo "            ";
            } else {
                // line 123
                echo "              <div class=\"empty\">还没有评价</div>
            ";
            }
            // line 125
            echo "          </div>
        </div>
      </div>
      ";
        }
        // line 129
        echo "      ";
        if (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "select4", array()) == "checked")) {
            // line 130
            echo "      <div class=\"col-md-6\">
        <div class=\"panel panel-default index-dynamic\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\">
              学员动态
            </h3>
          </div>
          <div class=\"panel-body\">
            ";
            // line 138
            $context["statuses"] = $this->env->getExtension('topxia_data_twig')->getData("LatestStatuses", array("mode" => "simple", "count" => 4, "private" => 0));
            // line 139
            echo "
            ";
            // line 140
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["statuses"]) ? $context["statuses"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["status"]) {
                // line 141
                echo "              <div class=\"media media-dynamic\">
                <div class=\"media-left\">
                  ";
                // line 143
                echo $context["web_macro"]->getuser_avatar($this->getAttribute($context["status"], "user", array()), "", "avatar-sm");
                echo "
                </div>
                <div class=\"media-body\">
                  <div class=\"title\">
                    ";
                // line 147
                echo $context["web_macro"]->getuser_link($this->getAttribute($context["status"], "user", array()));
                echo "
                  </div>
                  <div class=\"content\">
                    ";
                // line 150
                echo $this->getAttribute($context["status"], "message", array());
                echo "
                  </div>
                  <span class=\"date\">";
                // line 152
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->smarttimeFilter($this->getAttribute($context["status"], "createdTime", array())), "html", null, true);
                echo "</span>
                </div>
              </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['status'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 156
            echo "          </div>
        </div>
      </div>
      ";
        }
        // line 160
        echo "    </div>
  </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Default:groups.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  435 => 160,  429 => 156,  419 => 152,  414 => 150,  408 => 147,  401 => 143,  397 => 141,  393 => 140,  390 => 139,  388 => 138,  378 => 130,  375 => 129,  369 => 125,  365 => 123,  362 => 122,  356 => 121,  349 => 117,  344 => 115,  336 => 112,  332 => 111,  328 => 110,  321 => 106,  317 => 104,  314 => 103,  311 => 102,  308 => 101,  303 => 100,  301 => 99,  291 => 91,  288 => 90,  281 => 85,  278 => 84,  251 => 82,  233 => 81,  230 => 80,  228 => 79,  220 => 78,  216 => 76,  202 => 75,  195 => 71,  190 => 69,  186 => 68,  179 => 67,  176 => 66,  173 => 65,  156 => 64,  153 => 63,  150 => 62,  148 => 61,  141 => 57,  134 => 52,  131 => 51,  124 => 46,  113 => 41,  109 => 40,  102 => 36,  98 => 35,  92 => 31,  84 => 29,  76 => 27,  74 => 26,  70 => 25,  66 => 23,  62 => 22,  54 => 17,  49 => 14,  47 => 13,  41 => 10,  37 => 9,  30 => 6,  28 => 5,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% import "TopxiaWebBundle::macro.html.twig" as web_macro %}*/
/* <!-- 小组动态 -->*/
/* {% set groups = data('HotGroup',{'count':config.count|default(6)}) %}*/
/* {% set reviews = data('LatestCourseReviews',{'count':config.count|default(4)}) %}*/
/* {% set ArticlesIsNull = false %}*/
/* <section class="dynamic-section {{config.background|default("")}}">*/
/*   <div class="container">*/
/*     <div class="text-line gray">*/
/*       <h5><span>{{ config.title|default(config.defaultTitle) }}</span><div class="line"></div></h5>*/
/*       <div class="subtitle">{{ config.subTitle|default(config.defaultSubTitle) }}</div>*/
/*     </div>*/
/*     <div class="dynamic-section-main row">*/
/*       {% if config.select1 =='checked'%}*/
/*       <div class="col-md-6">*/
/*         <div class="panel panel-default index-group">*/
/*           <div class="panel-heading">*/
/*             <a href="{{ path('group') }}" class="more"><i class="es-icon es-icon-morehoriz"></i></a>*/
/*             <h3 class="panel-title"><i class="es-icon es-icon-whatshot pull-left"></i>热门小组</h3>*/
/*           </div>*/
/*           <div class="panel-body row">*/
/*             <div class="media-group-list">*/
/*               {% for group in groups %}*/
/*                 <div class="media media-group col-md-6 col-sm-4">*/
/*                   <div class="media-left">*/
/*                     <a href="{{ path('group_show',{id:group.id}) }}">*/
/*                     {% if group.logo %}*/
/*                       <img class="avatar-square-md" src="{{file_path(group.logo)}}" alt="{{ group.title }}">*/
/*                     {% else %}*/
/*                       <img class="avatar-square-md" src="{{asset('assets/img/default/group.png')}}"  alt="{{ group.title }}">*/
/*                     {% endif %}*/
/*                     </a>*/
/*                   </div>*/
/*                   <div class="media-body">*/
/*                     <div class="title">*/
/*                       <a class="link-light" href="{{ path('group_show',{id:group.id}) }}">*/
/*                         {{ group.title }}*/
/*                       </a>*/
/*                     </div>*/
/*                     <div class="metas">*/
/*                       <span><i class="es-icon es-icon-people"></i>{{ group.memberNum }}</span>*/
/*                       <span><i class="es-icon es-icon-textsms"></i>{{ group.threadNum }}</span>*/
/*                     </div>*/
/*                   </div>*/
/*                 </div>*/
/*               {% endfor %}*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*       {% endif %}*/
/*       {% if config.select2 =='checked'%}*/
/*       <div class="col-md-6">*/
/*         <div class="panel panel-default index-article">*/
/*           <div class="panel-heading">*/
/*             <h3 class="panel-title">*/
/*               最新资讯*/
/*               <a class="more" href="{{ path('article_show') }}"><i class="es-icon es-icon-morehoriz"></i></a>*/
/*             </h3>*/
/*           </div>*/
/*           <div class="panel-body clearfix">*/
/*             {% set featuredArticles = data('LatestArticles',{'type':'featured','count':2}) %}*/
/*             {% if featuredArticles %}*/
/*             <ul class="index-recommend-aricle">*/
/*             {% for article in featuredArticles %}*/
/*               {% if article.thumb %}*/
/*               {% set ArticlesIsNull = true %}*/
/*               <li class="{% if loop.index == 2 %}last{% endif %}">*/
/*                 <a href="{{ path('article_detail', {id:article.id}) }}">*/
/*                   {{ lazy_img(filepath(article.thumb|default(null) , ''), 'img-responsive', article.title, 'lazyload_class.png') }}*/
/*                   <div class="image-overlay"></div>*/
/*                   <div class="title">{{ article.title }}</div>*/
/*                 </a>*/
/*               </li>*/
/*              {% endif %}*/
/*             {% endfor %}*/
/*             </ul>*/
/*             {% endif %}*/
/*             <ul class="index-new-article {% if ArticlesIsNull %}{% else %}full{% endif %}">*/
/*               {% set articles = data('LatestArticles',{'count':5}) %}*/
/*               {% if articles %}*/
/*                 {% for article in articles %}*/
/*                   <li class="{% if loop.index == 5 %}last{% endif %} clearfix"><i class="es-icon es-icon-dot color-primary mrs"></i><a class="link-dark" href="{{ path('article_detail', {id:article.id}) }}" title="{{ article.title }}">{{ article.title }}</a> <span class="date">{{ article.createdTime|smart_time }}</span></li>*/
/*                 {% endfor %}*/
/*               {% endif %}*/
/*             </ul>*/
/*           </div>*/
/*         </div>*/
/*       </div> */
/*       {% endif %}*/
/*       {% if config.select3 =='checked'%}*/
/*       <div class="col-md-6">*/
/*         <div class="panel panel-default index-evaluate">*/
/*           <div class="panel-heading">*/
/*             <h3 class="panel-title">*/
/*               学员评价*/
/*             </h3>*/
/*           </div>*/
/*           <div class="panel-body">*/
/*             {% if reviews %}*/
/*               {% for review in reviews %}*/
/*               {% set author = review.User|default(null) %}*/
/*               {% set course = review.course|default(null) %}*/
/*               {% if author and course %}*/
/*             <div class="media media-dynamic">*/
/*               <div class="media-left">*/
/*               {{ web_macro.user_avatar(author,'','avatar-sm',true) }}*/
/*               </div>*/
/*               <div class="media-body">*/
/*                 <div class="title text-sm">*/
/*                   {{ web_macro.user_link(author,'link-light') }}*/
/*                   <span class="score">{{web_macro.star(review.rating) }}</span>*/
/*                   发布于 <a class="link-light" href="{{ path('course_show', {id:course.id}) }}">《{{ course.title|plain_text(10) }}》</a>*/
/*                 </div>*/
/*                 <div class="content gray-darker">*/
/*                   {{ review.content|plain_text(30) }}*/
/*                 </div>*/
/*                 <span class="date">{{review.createdTime|smart_time}}</span>*/
/*               </div>*/
/*             </div>*/
/*             {% endif %}*/
/*             {% endfor %}*/
/*             {% else %}*/
/*               <div class="empty">还没有评价</div>*/
/*             {% endif %}*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*       {% endif %}*/
/*       {% if config.select4 =='checked'%}*/
/*       <div class="col-md-6">*/
/*         <div class="panel panel-default index-dynamic">*/
/*           <div class="panel-heading">*/
/*             <h3 class="panel-title">*/
/*               学员动态*/
/*             </h3>*/
/*           </div>*/
/*           <div class="panel-body">*/
/*             {% set statuses = data('LatestStatuses', {mode:'simple', count: 4,private:0}) %}*/
/* */
/*             {% for status in statuses %}*/
/*               <div class="media media-dynamic">*/
/*                 <div class="media-left">*/
/*                   {{ web_macro.user_avatar(status.user, '', 'avatar-sm') }}*/
/*                 </div>*/
/*                 <div class="media-body">*/
/*                   <div class="title">*/
/*                     {{ web_macro.user_link(status.user) }}*/
/*                   </div>*/
/*                   <div class="content">*/
/*                     {{ status.message|raw }}*/
/*                   </div>*/
/*                   <span class="date">{{status.createdTime | smart_time}}</span>*/
/*                 </div>*/
/*               </div>*/
/*             {% endfor %}*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*       {% endif %}*/
/*     </div>*/
/*   </div>*/
/* </section>*/
/* */
