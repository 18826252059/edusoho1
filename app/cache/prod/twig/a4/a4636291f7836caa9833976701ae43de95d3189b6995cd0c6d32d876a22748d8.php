<?php

/* TopxiaMobileBundleV2:Article:list.html.twig */
class __TwigTemplate_75c620a92f2f8af9d62f43437219d1ab3f2d090566bc93d0dc9fc5a92f4af346 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaMobileBundleV2::article.layout.html.twig", "TopxiaMobileBundleV2:Article:list.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'head_scripts' => array($this, 'block_head_scripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaMobileBundleV2::article.layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        if ((isset($context["category"]) ? $context["category"] : null)) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "name", array()), "html", null, true);
        } else {
            echo "资讯列表";
        }
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "
<div class=\"app-page scroll-page content\" data-page=\"home\">
  <div class=\"app-content\">
          <div class=\"loading\" style=\"text-align: center;\"><img width=\"30\" height=\"27\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/articleapp/images/loading.gif"), "html", null, true);
        echo "\" /></div>
          <ul class=\"table-view\" start=\"0\"  islaster=\"false\">
          </ul>
  </div>
</div>

<div style=\"display:none;\" id=\"category\">
    <div style=\"text-align:left;\">
        <div>
            <a style=\"margin:10px;\" href=\"/mapi_v2/articleApp?categoryId=0\" data-transition=\"slide-in\" class=\"btn btn-normal btn-outlined\">全部</a>
        </div>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categoryTree"]) ? $context["categoryTree"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 20
            echo "            ";
            if (($this->getAttribute($context["category"], "parentId", array()) == 0)) {
                // line 21
                echo "                <div>
                </div>
            ";
            }
            // line 24
            echo "                <a style=\"margin:10px;\" href=\"/mapi_v2/articleApp?categoryId=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "id", array()), "html", null, true);
            echo "\" data-transition=\"slide-in\" class=\"btn";
            if (($this->getAttribute($context["category"], "parentId", array()) == 0)) {
                echo " btn-normal";
            }
            echo " btn-outlined\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "</a>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "    <div>
<div>

<div style=\"display:none;\" id=\"empty\">
  <div class=\"placeholder active search\"><span></span>没有相关资讯</div>
<div>

";
        // line 33
        $this->displayBlock('head_scripts', $context, $blocks);
        // line 93
        echo "
";
    }

    // line 33
    public function block_head_scripts($context, array $blocks = array())
    {
        // line 34
        echo "  ";
        $this->displayParentBlock("head_scripts", $context, $blocks);
        echo "
  <script type=\"text/javascript\">

  var categoryId = ";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["categoryId"]) ? $context["categoryId"] : null), "html", null, true);
        echo ";
  App.controller('home', function (page) {
        var \$loading  = \$(page).find('.loading');
        var \$list = \$(page).find(\".table-view\");
        \$loading.remove();
        App.infiniteScroll(\$list, { loading: \$loading }, function (callback) {
            var islaster = \$list.attr(\"islaster\");
            if (islaster == \"true\") {
              return null;
            }
            var start = parseInt(\$list.attr(\"start\"));
            console.log(\"loading......\" + islaster);
            \$.get(
              '/mapi_v2/articleApp/list?start=' + start + '&categoryId=' + categoryId,
              function(response){
                  if (response == \"\") {
                    \$list.attr(\"islaster\", \"true\");
                    console.log(\"islaster......true\");
                    callback(start == 0 ? \$(\"#empty\").html() : \"\");
                    return null;
                  }
                  \$list.attr(\"start\", start + 10);
                  callback(response);
              }
            );
        });
  });
  App.load('home');

  var menu = {
      \"name\" : \"分类\",
      \"icon\" : \"lesson_menu_list\",
      \"action\" : \"showCategory()\",
      \"item\" : []
  };

  window.onDeviceReady = function() {
            navigator.cordovaUtil.createMenu(menu);
            console.log(\"createMenu\");
  }

  function showCategory() {
      if (App.dialog.status()) {
          App.dialog.close(true);
          return;
      }
      App.dialog({
            rawText        : \$(\"#category\").html(),
            cancelButton    : '关闭'
        }, function (choice) {
            console.log(choice);
        }
      );
  }
  </script>
";
    }

    public function getTemplateName()
    {
        return "TopxiaMobileBundleV2:Article:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 37,  108 => 34,  105 => 33,  100 => 93,  98 => 33,  89 => 26,  74 => 24,  69 => 21,  66 => 20,  62 => 19,  48 => 8,  43 => 5,  40 => 4,  30 => 2,  11 => 1,);
    }
}
/* {% extends 'TopxiaMobileBundleV2::article.layout.html.twig' %}*/
/* {% block title %}{% if category %}{{ category.name }}{% else %}{{ '资讯列表' }}{% endif %}{% endblock %}*/
/* */
/* {% block content %}*/
/* */
/* <div class="app-page scroll-page content" data-page="home">*/
/*   <div class="app-content">*/
/*           <div class="loading" style="text-align: center;"><img width="30" height="27" src="{{ asset('bundles/articleapp/images/loading.gif') }}" /></div>*/
/*           <ul class="table-view" start="0"  islaster="false">*/
/*           </ul>*/
/*   </div>*/
/* </div>*/
/* */
/* <div style="display:none;" id="category">*/
/*     <div style="text-align:left;">*/
/*         <div>*/
/*             <a style="margin:10px;" href="/mapi_v2/articleApp?categoryId=0" data-transition="slide-in" class="btn btn-normal btn-outlined">全部</a>*/
/*         </div>*/
/*         {% for category in categoryTree %}*/
/*             {% if category.parentId == 0 %}*/
/*                 <div>*/
/*                 </div>*/
/*             {% endif %}*/
/*                 <a style="margin:10px;" href="/mapi_v2/articleApp?categoryId={{ category.id }}" data-transition="slide-in" class="btn{% if category.parentId == 0 %} btn-normal{% endif %} btn-outlined">{{ category.name }}</a>*/
/*           {% endfor %}*/
/*     <div>*/
/* <div>*/
/* */
/* <div style="display:none;" id="empty">*/
/*   <div class="placeholder active search"><span></span>没有相关资讯</div>*/
/* <div>*/
/* */
/* {% block head_scripts %}*/
/*   {{ parent() }}*/
/*   <script type="text/javascript">*/
/* */
/*   var categoryId = {{ categoryId }};*/
/*   App.controller('home', function (page) {*/
/*         var $loading  = $(page).find('.loading');*/
/*         var $list = $(page).find(".table-view");*/
/*         $loading.remove();*/
/*         App.infiniteScroll($list, { loading: $loading }, function (callback) {*/
/*             var islaster = $list.attr("islaster");*/
/*             if (islaster == "true") {*/
/*               return null;*/
/*             }*/
/*             var start = parseInt($list.attr("start"));*/
/*             console.log("loading......" + islaster);*/
/*             $.get(*/
/*               '/mapi_v2/articleApp/list?start=' + start + '&categoryId=' + categoryId,*/
/*               function(response){*/
/*                   if (response == "") {*/
/*                     $list.attr("islaster", "true");*/
/*                     console.log("islaster......true");*/
/*                     callback(start == 0 ? $("#empty").html() : "");*/
/*                     return null;*/
/*                   }*/
/*                   $list.attr("start", start + 10);*/
/*                   callback(response);*/
/*               }*/
/*             );*/
/*         });*/
/*   });*/
/*   App.load('home');*/
/* */
/*   var menu = {*/
/*       "name" : "分类",*/
/*       "icon" : "lesson_menu_list",*/
/*       "action" : "showCategory()",*/
/*       "item" : []*/
/*   };*/
/* */
/*   window.onDeviceReady = function() {*/
/*             navigator.cordovaUtil.createMenu(menu);*/
/*             console.log("createMenu");*/
/*   }*/
/* */
/*   function showCategory() {*/
/*       if (App.dialog.status()) {*/
/*           App.dialog.close(true);*/
/*           return;*/
/*       }*/
/*       App.dialog({*/
/*             rawText        : $("#category").html(),*/
/*             cancelButton    : '关闭'*/
/*         }, function (choice) {*/
/*             console.log(choice);*/
/*         }*/
/*       );*/
/*   }*/
/*   </script>*/
/* {% endblock %}*/
/* */
/* {% endblock %}*/
