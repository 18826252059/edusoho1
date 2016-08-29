<?php

/* TopxiaWebBundle::macro.html.twig */
class __TwigTemplate_b19722ac54f1bc86b21ad4c5d2aae5cc9df49117c5beff3d1087cb7287a8d38c extends Twig_Template
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
        // line 27
        echo "
";
        // line 50
        echo "
";
        // line 71
        echo "
";
    }

    // line 1
    public function getuser_avatar($__user__ = null, $__class__ = null, $__imgClass__ = null, $__card__ = true, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "user" => $__user__,
            "class" => $__class__,
            "imgClass" => $__imgClass__,
            "card" => $__card__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            if ((isset($context["user"]) ? $context["user"] : null)) {
                // line 3
                echo "  <a class=\"";
                echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : null), "html", null, true);
                echo " ";
                if ((isset($context["card"]) ? $context["card"] : null)) {
                    echo "js-user-card";
                }
                echo "\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
                echo "\" data-card-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_card_show", array("userId" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
                echo "\" data-user-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()), "html", null, true);
                echo "\">
    <img class=\"";
                // line 4
                echo twig_escape_filter($this->env, ((array_key_exists("imgClass", $context)) ? (_twig_default_filter((isset($context["imgClass"]) ? $context["imgClass"] : null), "avatar-sm")) : ("avatar-sm")), "html", null, true);
                echo "\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "smallAvatar", array()), "avatar.png"), "html", null, true);
                echo "\">
  </a>
  ";
            } else {
                // line 7
                echo "    <a class=\"";
                echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : null), "html", null, true);
                echo "\" href=\"javascript:;\">
      <img class=\"";
                // line 8
                echo twig_escape_filter($this->env, ((array_key_exists("imgClass", $context)) ? (_twig_default_filter((isset($context["imgClass"]) ? $context["imgClass"] : null), "avatar-sm")) : ("avatar-sm")), "html", null, true);
                echo "\"  src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath("", "avatar.png"), "html", null, true);
                echo "\">
    </a>
  ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 13
    public function getuser_link($__user__ = null, $__class__ = null, $__card__ = true, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "user" => $__user__,
            "class" => $__class__,
            "card" => $__card__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 14
            if ((isset($context["user"]) ? $context["user"] : null)) {
                // line 15
                echo "    <a class=\"link-dark ";
                echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : null), "html", null, true);
                echo "\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "nickname", array()), "html", null, true);
                echo "</a>
  ";
            } else {
                // line 17
                echo "    <a class=\"link-dark ";
                echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : null), "html", null, true);
                echo "\" href=\"javascript:;\"><del>用户不存在</del></a>
  ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 20
    public function getflash_messages(...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 21
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["flashMessages"]) {
                // line 22
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["flashMessages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                    // line 23
                    echo "      <div class=\"alert alert-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">";
                    echo $context["flashMessage"];
                    echo "</div>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 25
                echo "  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['flashMessages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 28
    public function getbytesToSize($__bytes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "bytes" => $__bytes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 29
            echo "  ";
            ob_start();
            // line 30
            echo "      
      ";
            // line 31
            $context["kilobyte"] = 1024;
            // line 32
            echo "      ";
            $context["megabyte"] = ((isset($context["kilobyte"]) ? $context["kilobyte"] : null) * 1024);
            // line 33
            echo "      ";
            $context["gigabyte"] = ((isset($context["megabyte"]) ? $context["megabyte"] : null) * 1024);
            // line 34
            echo "      ";
            $context["terabyte"] = ((isset($context["gigabyte"]) ? $context["gigabyte"] : null) * 1024);
            // line 35
            echo "
      ";
            // line 36
            if (((isset($context["bytes"]) ? $context["bytes"] : null) < (isset($context["kilobyte"]) ? $context["kilobyte"] : null))) {
                // line 37
                echo "          ";
                echo twig_escape_filter($this->env, ((isset($context["bytes"]) ? $context["bytes"] : null) . " B"), "html", null, true);
                echo "
      ";
            } elseif ((            // line 38
(isset($context["bytes"]) ? $context["bytes"] : null) < (isset($context["megabyte"]) ? $context["megabyte"] : null))) {
                // line 39
                echo "          ";
                echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, ((isset($context["bytes"]) ? $context["bytes"] : null) / (isset($context["kilobyte"]) ? $context["kilobyte"] : null)), 2, ".") . " KB"), "html", null, true);
                echo "
      ";
            } elseif ((            // line 40
(isset($context["bytes"]) ? $context["bytes"] : null) < (isset($context["gigabyte"]) ? $context["gigabyte"] : null))) {
                // line 41
                echo "          ";
                echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, ((isset($context["bytes"]) ? $context["bytes"] : null) / (isset($context["megabyte"]) ? $context["megabyte"] : null)), 2, ".") . " MB"), "html", null, true);
                echo "
      ";
            } elseif ((            // line 42
(isset($context["bytes"]) ? $context["bytes"] : null) < (isset($context["terabyte"]) ? $context["terabyte"] : null))) {
                // line 43
                echo "          ";
                echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, ((isset($context["bytes"]) ? $context["bytes"] : null) / (isset($context["gigabyte"]) ? $context["gigabyte"] : null)), 2, ".") . " GB"), "html", null, true);
                echo "
      ";
            } else {
                // line 45
                echo "          ";
                echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, ((isset($context["bytes"]) ? $context["bytes"] : null) / (isset($context["terabyte"]) ? $context["terabyte"] : null)), 2, ".") . " TB"), "html", null, true);
                echo "
      ";
            }
            // line 47
            echo "
  ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 51
    public function getpaginator($__paginator__ = null, $__class__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "paginator" => $__paginator__,
            "class" => $__class__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 52
            echo "  ";
            if (($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "lastPage", array()) > 1)) {
                // line 53
                echo "    <nav class=\" ";
                echo twig_escape_filter($this->env, ((array_key_exists("class", $context)) ? (_twig_default_filter((isset($context["class"]) ? $context["class"] : null), "text-center")) : ("text-center")), "html", null, true);
                echo "\">
      <ul class=\"pagination\">
        ";
                // line 55
                if (($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "currentPage", array()) != $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "firstPage", array()))) {
                    // line 56
                    echo "          <li><a  href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "getPageUrl", array(0 => $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "firstPage", array())), "method"), "html", null, true);
                    echo "\">首页</a></li>
          <li><a  href=\"";
                    // line 57
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "getPageUrl", array(0 => $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "previousPage", array())), "method"), "html", null, true);
                    echo "\"><i class=\"es-icon es-icon-chevronleft\"></i></a></li>
        ";
                }
                // line 59
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "pages", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                    // line 60
                    echo "          <li ";
                    if (($context["page"] == $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "currentPage", array()))) {
                        echo "class=\"active\"";
                    }
                    echo "><a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "getPageUrl", array(0 => $context["page"]), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</a></li>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 62
                echo "
        ";
                // line 63
                if (($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "currentPage", array()) != $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "lastPage", array()))) {
                    // line 64
                    echo "          <li><a  href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "getPageUrl", array(0 => $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "nextPage", array())), "method"), "html", null, true);
                    echo "\"><i class=\"es-icon es-icon-chevronright\"></i></a></li>
          <li><a  href=\"";
                    // line 65
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "getPageUrl", array(0 => $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "getLastPage", array(), "method")), "method"), "html", null, true);
                    echo "\">尾页</a></li>
        ";
                }
                // line 67
                echo "      </ul>
    </nav>
  ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 72
    public function getstar($__score__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "score" => $__score__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 73
            echo "  ";
            $context["floorScore"] = twig_round((isset($context["score"]) ? $context["score"] : null), 0, "floor");
            // line 74
            echo "  ";
            $context["emptyNum"] = (5 - (isset($context["floorScore"]) ? $context["floorScore"] : null));
            // line 75
            echo "
  ";
            // line 76
            if (((isset($context["floorScore"]) ? $context["floorScore"] : null) > 0)) {
                // line 77
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["floorScore"]) ? $context["floorScore"] : null)));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 78
                    echo "      <i class=\"es-icon es-icon-star color-warning\"></i>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 80
                echo "  ";
            }
            // line 81
            echo "
  ";
            // line 82
            if ((((isset($context["score"]) ? $context["score"] : null) - (isset($context["floorScore"]) ? $context["floorScore"] : null)) >= 0.5)) {
                // line 83
                echo "    ";
                $context["emptyNum"] = ((isset($context["emptyNum"]) ? $context["emptyNum"] : null) - 1);
                // line 84
                echo "    <i class=\"es-icon es-icon-starhalf color-warning\"></i>
  ";
            }
            // line 86
            echo "
  ";
            // line 87
            if (((isset($context["emptyNum"]) ? $context["emptyNum"] : null) > 0)) {
                // line 88
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["emptyNum"]) ? $context["emptyNum"] : null)));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 89
                    echo "      <i class=\"es-icon es-icon-star\"></i>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 91
                echo "  ";
            }
            // line 92
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle::macro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  413 => 92,  410 => 91,  403 => 89,  398 => 88,  396 => 87,  393 => 86,  389 => 84,  386 => 83,  384 => 82,  381 => 81,  378 => 80,  371 => 78,  366 => 77,  364 => 76,  361 => 75,  358 => 74,  355 => 73,  343 => 72,  329 => 67,  324 => 65,  319 => 64,  317 => 63,  314 => 62,  299 => 60,  294 => 59,  289 => 57,  284 => 56,  282 => 55,  276 => 53,  273 => 52,  260 => 51,  247 => 47,  241 => 45,  235 => 43,  233 => 42,  228 => 41,  226 => 40,  221 => 39,  219 => 38,  214 => 37,  212 => 36,  209 => 35,  206 => 34,  203 => 33,  200 => 32,  198 => 31,  195 => 30,  192 => 29,  180 => 28,  165 => 25,  154 => 23,  149 => 22,  144 => 21,  133 => 20,  118 => 17,  108 => 15,  106 => 14,  92 => 13,  75 => 8,  70 => 7,  62 => 4,  47 => 3,  45 => 2,  30 => 1,  25 => 71,  22 => 50,  19 => 27,);
    }
}
/* {%- macro user_avatar(user, class, imgClass, card = true) -%}*/
/*   {% if user %}*/
/*   <a class="{{ class }} {% if card %}js-user-card{% endif %}" href="{{ path('user_show', {id:user.id}) }}" data-card-url="{{ path('user_card_show', {userId:user.id}) }}" data-user-id="{{ user.id }}">*/
/*     <img class="{{ imgClass|default('avatar-sm') }}" src="{{ filepath(user.smallAvatar, 'avatar.png') }}">*/
/*   </a>*/
/*   {% else %}*/
/*     <a class="{{ class }}" href="javascript:;">*/
/*       <img class="{{ imgClass|default('avatar-sm') }}"  src="{{ filepath('', 'avatar.png') }}">*/
/*     </a>*/
/*   {% endif %}*/
/* {%- endmacro -%}*/
/* */
/* {%- macro user_link(user, class, card = true) -%}*/
/*   {% if user %}*/
/*     <a class="link-dark {{ class }}" href="{{ path('user_show', {id:user.id}) }}">{{ user.nickname }}</a>*/
/*   {% else %}*/
/*     <a class="link-dark {{ class }}" href="javascript:;"><del>用户不存在</del></a>*/
/*   {% endif %}*/
/* {%- endmacro -%}*/
/* {% macro flash_messages() %}*/
/*   {% for type, flashMessages in app.session.flashbag.all() %}*/
/*     {% for flashMessage in flashMessages %}*/
/*       <div class="alert alert-{{ type }}">{{ flashMessage|raw }}</div>*/
/*     {% endfor %}*/
/*   {% endfor %}*/
/* {% endmacro %}*/
/* */
/* {% macro bytesToSize(bytes) %}*/
/*   {% spaceless %}*/
/*       */
/*       {% set kilobyte = 1024 %}*/
/*       {% set megabyte = kilobyte * 1024 %}*/
/*       {% set gigabyte = megabyte * 1024 %}*/
/*       {% set terabyte = gigabyte * 1024 %}*/
/* */
/*       {% if bytes < kilobyte %}*/
/*           {{ bytes ~ ' B' }}*/
/*       {% elseif bytes < megabyte %}*/
/*           {{ (bytes / kilobyte)|number_format(2, '.') ~ ' KB' }}*/
/*       {% elseif bytes < gigabyte %}*/
/*           {{ (bytes / megabyte)|number_format(2, '.') ~ ' MB' }}*/
/*       {% elseif bytes < terabyte %}*/
/*           {{ (bytes / gigabyte)|number_format(2, '.') ~ ' GB' }}*/
/*       {% else %}*/
/*           {{ (bytes / terabyte)|number_format(2, '.') ~ ' TB' }}*/
/*       {% endif %}*/
/* */
/*   {% endspaceless %}*/
/* {% endmacro %}*/
/* */
/* {% macro paginator(paginator, class) %}*/
/*   {% if paginator.lastPage > 1 %}*/
/*     <nav class=" {{ class|default('text-center') }}">*/
/*       <ul class="pagination">*/
/*         {% if paginator.currentPage != paginator.firstPage %}*/
/*           <li><a  href="{{ paginator.getPageUrl(paginator.firstPage) }}">首页</a></li>*/
/*           <li><a  href="{{ paginator.getPageUrl(paginator.previousPage) }}"><i class="es-icon es-icon-chevronleft"></i></a></li>*/
/*         {% endif %}*/
/*         {% for page in paginator.pages %}*/
/*           <li {% if page == paginator.currentPage %}class="active"{% endif %}><a href="{{ paginator.getPageUrl(page) }}">{{ page }}</a></li>*/
/*         {% endfor %}*/
/* */
/*         {% if paginator.currentPage != paginator.lastPage %}*/
/*           <li><a  href="{{ paginator.getPageUrl(paginator.nextPage) }}"><i class="es-icon es-icon-chevronright"></i></a></li>*/
/*           <li><a  href="{{ paginator.getPageUrl(paginator.getLastPage()) }}">尾页</a></li>*/
/*         {% endif %}*/
/*       </ul>*/
/*     </nav>*/
/*   {% endif %}*/
/* {% endmacro %}*/
/* */
/* {% macro star(score) %}*/
/*   {% set floorScore = score|round(0, 'floor') %}*/
/*   {% set emptyNum = 5 - floorScore %}*/
/* */
/*   {% if floorScore > 0 %}*/
/*     {% for i in range(1, floorScore) %}*/
/*       <i class="es-icon es-icon-star color-warning"></i>*/
/*     {% endfor %}*/
/*   {% endif %}*/
/* */
/*   {% if (score - floorScore) >= 0.5 %}*/
/*     {% set emptyNum = emptyNum - 1 %}*/
/*     <i class="es-icon es-icon-starhalf color-warning"></i>*/
/*   {% endif %}*/
/* */
/*   {% if emptyNum > 0 %}*/
/*     {% for i in range(1, emptyNum) %}*/
/*       <i class="es-icon es-icon-star"></i>*/
/*     {% endfor %}*/
/*   {% endif %}*/
/* */
/* {% endmacro %}*/
