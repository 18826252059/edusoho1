<?php

/* CustomWebBundle:Category:explore-list.html.twig */
class __TwigTemplate_cfc6234706b543e515af442e8cc13a45ced9cf1e56a678f7ca7369796cd65d9c extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\"/>
    <title>所有分类</title>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"/>
    <meta name=\"apple-mobile-web-app-capable\" content=\"yes\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\"/>
    <meta name=\"keywords\" content=\"所有分类\"/>
    <meta name=\"description\" content=\"所有分类\"/>
    <link rel=\"icon\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->env->getExtension('topxia_web_twig')->getSetting("site.favicon")), "html", null, true);
        echo "\" type=\"image/x-icon\"/>
    <link rel=\"shortcut icon\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->env->getExtension('topxia_web_twig')->getSetting("site.favicon")), "html", null, true);
        echo "\" type=\"image/x-icon\" media=\"screen\"/>
    <link rel=\"stylesheet\" media=\"screen\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/h5/style/css/global.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" media=\"screen\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/h5/style/css/global-v2.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" media=\"screen\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/h5/style/css/course.css"), "html", null, true);
        echo "\"/>
<body>
<div class=\"g-wrap g-pb0\">
    ";
        // line 19
        echo "    ";
        // line 20
        echo "    <div class=\"classifyBox\">
        <div class=\"box-left\">
            <ul>
                ";
        // line 23
        if (((array_key_exists("categories", $context)) ? (_twig_default_filter((isset($context["categories"]) ? $context["categories"] : null), "")) : (""))) {
            // line 24
            echo "                    ";
            $context["i"] = 0;
            // line 25
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 26
                echo "                        ";
                $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
                // line 27
                echo "                        <li ";
                if (((isset($context["i"]) ? $context["i"] : null) == 1)) {
                    echo "class=\"selected-open\"";
                }
                // line 28
                echo "                            data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
                echo "</li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "                ";
        }
        // line 31
        echo "            </ul>
        </div>
        <div class=\"box-right\">
            ";
        // line 34
        if (((array_key_exists("categories", $context)) ? (_twig_default_filter((isset($context["categories"]) ? $context["categories"] : null), "")) : (""))) {
            // line 35
            echo "                ";
            $context["i"] = 0;
            // line 36
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 37
                echo "                    ";
                $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
                // line 38
                echo "                    <div class=\"rightContent navContent";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
                echo "\" ";
                if (((isset($context["i"]) ? $context["i"] : null) != 1)) {
                    echo "style=\"display: none;\"";
                }
                echo ">
                        ";
                // line 39
                if ((($this->getAttribute($context["category"], "childs", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["category"], "childs", array()), "")) : (""))) {
                    // line 40
                    echo "                            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["category"], "childs", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                        // line 41
                        echo "                                <a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_list", array("categoryId" => $this->getAttribute($context["category"], "id", array()))), "html", null, true);
                        echo "\">
                                <span class=\"btn-kind\" data-id=\"";
                        // line 42
                        echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "id", array()), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
                        echo "</span>
                                </a>
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 45
                    echo "                        ";
                }
                // line 46
                echo "                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "            ";
        }
        // line 49
        echo "        </div>
    </div>
</div>
<script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/h5/js/src/vendor/require.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/h5/js/src/main.js"), "html", null, true);
        echo "\"></script>
<script>
    require.config({baseUrl: [\"/themes/h5/js/src/\"].join('')});
    require(['zepto'], function () {
        var \$boxLi = \$('.classifyBox .box-left li');
        \$boxLi.on('click', function () {
            \$(this).siblings().removeClass('selected-open');
            \$(this).addClass('selected-open');
            var \$liIndex = \$(this).index() + 1;
            var navContent = 'navContent' + \$liIndex;
            \$('.rightContent').hide();
            \$('.' + navContent).show();
        })
    });
</script>
";
        // line 68
        $this->loadTemplate("CustomWebBundle::tongji.html.twig", "CustomWebBundle:Category:explore-list.html.twig", 68)->display($context);
        // line 69
        echo "</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "CustomWebBundle:Category:explore-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 69,  182 => 68,  164 => 53,  160 => 52,  155 => 49,  152 => 48,  145 => 46,  142 => 45,  131 => 42,  126 => 41,  121 => 40,  119 => 39,  110 => 38,  107 => 37,  102 => 36,  99 => 35,  97 => 34,  92 => 31,  89 => 30,  78 => 28,  73 => 27,  70 => 26,  65 => 25,  62 => 24,  60 => 23,  55 => 20,  53 => 19,  47 => 15,  43 => 14,  39 => 13,  35 => 12,  31 => 11,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/*     <meta http-equiv="content-type" content="text/html; charset=utf-8"/>*/
/*     <title>所有分类</title>*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge"/>*/
/*     <meta name="apple-mobile-web-app-capable" content="yes"/>*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>*/
/*     <meta name="keywords" content="所有分类"/>*/
/*     <meta name="description" content="所有分类"/>*/
/*     <link rel="icon" href="{{ asset(setting('site.favicon')) }}" type="image/x-icon"/>*/
/*     <link rel="shortcut icon" href="{{ asset(setting('site.favicon')) }}" type="image/x-icon" media="screen"/>*/
/*     <link rel="stylesheet" media="screen" href="{{ asset('themes/h5/style/css/global.css') }}"/>*/
/*     <link rel="stylesheet" media="screen" href="{{ asset('themes/h5/style/css/global-v2.css') }}"/>*/
/*     <link rel="stylesheet" media="screen" href="{{ asset('themes/h5/style/css/course.css') }}"/>*/
/* <body>*/
/* <div class="g-wrap g-pb0">*/
/*     {#<div class="g-h2 f-tac"><a href="javascript:;" class="back-a"><i class="back-point"></i></a>所有分类</div>#}*/
/*     {#<div class="placeHolder"></div>#}*/
/*     <div class="classifyBox">*/
/*         <div class="box-left">*/
/*             <ul>*/
/*                 {% if categories|default('') %}*/
/*                     {% set i=0 %}*/
/*                     {% for category in categories %}*/
/*                         {% set i=i+1 %}*/
/*                         <li {% if i==1 %}class="selected-open"{% endif %}*/
/*                             data-id="{{ category.id }}">{{ category.name }}</li>*/
/*                     {% endfor %}*/
/*                 {% endif %}*/
/*             </ul>*/
/*         </div>*/
/*         <div class="box-right">*/
/*             {% if categories|default('') %}*/
/*                 {% set i=0 %}*/
/*                 {% for category in categories %}*/
/*                     {% set i=i+1 %}*/
/*                     <div class="rightContent navContent{{ i }}" {% if i!=1 %}style="display: none;"{% endif %}>*/
/*                         {% if category.childs|default('') %}*/
/*                             {% for category in  category.childs %}*/
/*                                 <a href="{{ path('course_list',{categoryId:category.id}) }}">*/
/*                                 <span class="btn-kind" data-id="{{ category.id }}">{{ category.name }}</span>*/
/*                                 </a>*/
/*                             {% endfor %}*/
/*                         {% endif %}*/
/*                     </div>*/
/*                 {% endfor %}*/
/*             {% endif %}*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* <script src="{{ asset('themes/h5/js/src/vendor/require.js') }}"></script>*/
/* <script src="{{ asset('themes/h5/js/src/main.js') }}"></script>*/
/* <script>*/
/*     require.config({baseUrl: ["/themes/h5/js/src/"].join('')});*/
/*     require(['zepto'], function () {*/
/*         var $boxLi = $('.classifyBox .box-left li');*/
/*         $boxLi.on('click', function () {*/
/*             $(this).siblings().removeClass('selected-open');*/
/*             $(this).addClass('selected-open');*/
/*             var $liIndex = $(this).index() + 1;*/
/*             var navContent = 'navContent' + $liIndex;*/
/*             $('.rightContent').hide();*/
/*             $('.' + navContent).show();*/
/*         })*/
/*     });*/
/* </script>*/
/* {% include "CustomWebBundle::tongji.html.twig"  %}*/
/* </body>*/
/* </html>*/
/* */
