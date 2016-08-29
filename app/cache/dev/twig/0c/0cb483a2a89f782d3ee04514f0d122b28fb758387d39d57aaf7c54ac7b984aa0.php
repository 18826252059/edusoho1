<?php

/* TopxiaAdminBundle::macro.html.twig */
class __TwigTemplate_5f628423e02400206d477bcba1f6e7fb4072a7564d83404636993bd8968c2184 extends Twig_Template
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
        // line 8
        echo "
";
    }

    // line 1
    public function getuser_link($__user__ = null, $__class__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "user" => $__user__,
            "class" => $__class__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "  ";
            if ((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user"))) {
                // line 3
                echo "\t\t<a ";
                if ((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class"))) {
                    echo "class=\"";
                    echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "html", null, true);
                    echo "\"";
                }
                echo " href=\"javascript:;\" role=\"show-user\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("admin_user_show", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nickname", array()), "html", null, true);
                echo "</a>
\t";
            } else {
                // line 5
                echo "\t  <span class=\"text-muted\">用户已删除</span>
\t";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 9
    public function getbytesToSize($__bytes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "bytes" => $__bytes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 10
            echo "\t";
            ob_start();
            // line 11
            echo "\t    
\t    ";
            // line 12
            $context["kilobyte"] = 1024;
            // line 13
            echo "\t    ";
            $context["megabyte"] = ((isset($context["kilobyte"]) ? $context["kilobyte"] : $this->getContext($context, "kilobyte")) * 1024);
            // line 14
            echo "\t    ";
            $context["gigabyte"] = ((isset($context["megabyte"]) ? $context["megabyte"] : $this->getContext($context, "megabyte")) * 1024);
            // line 15
            echo "\t    ";
            $context["terabyte"] = ((isset($context["gigabyte"]) ? $context["gigabyte"] : $this->getContext($context, "gigabyte")) * 1024);
            // line 16
            echo "
\t    ";
            // line 17
            if (((isset($context["bytes"]) ? $context["bytes"] : $this->getContext($context, "bytes")) < (isset($context["kilobyte"]) ? $context["kilobyte"] : $this->getContext($context, "kilobyte")))) {
                // line 18
                echo "\t        ";
                echo twig_escape_filter($this->env, ((isset($context["bytes"]) ? $context["bytes"] : $this->getContext($context, "bytes")) . " B"), "html", null, true);
                echo "
\t    ";
            } elseif ((            // line 19
(isset($context["bytes"]) ? $context["bytes"] : $this->getContext($context, "bytes")) < (isset($context["megabyte"]) ? $context["megabyte"] : $this->getContext($context, "megabyte")))) {
                // line 20
                echo "\t        ";
                echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, ((isset($context["bytes"]) ? $context["bytes"] : $this->getContext($context, "bytes")) / (isset($context["kilobyte"]) ? $context["kilobyte"] : $this->getContext($context, "kilobyte"))), 2, ".") . " KB"), "html", null, true);
                echo "
\t    ";
            } elseif ((            // line 21
(isset($context["bytes"]) ? $context["bytes"] : $this->getContext($context, "bytes")) < (isset($context["gigabyte"]) ? $context["gigabyte"] : $this->getContext($context, "gigabyte")))) {
                // line 22
                echo "\t        ";
                echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, ((isset($context["bytes"]) ? $context["bytes"] : $this->getContext($context, "bytes")) / (isset($context["megabyte"]) ? $context["megabyte"] : $this->getContext($context, "megabyte"))), 2, ".") . " MB"), "html", null, true);
                echo "
\t    ";
            } elseif ((            // line 23
(isset($context["bytes"]) ? $context["bytes"] : $this->getContext($context, "bytes")) < (isset($context["terabyte"]) ? $context["terabyte"] : $this->getContext($context, "terabyte")))) {
                // line 24
                echo "\t        ";
                echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, ((isset($context["bytes"]) ? $context["bytes"] : $this->getContext($context, "bytes")) / (isset($context["gigabyte"]) ? $context["gigabyte"] : $this->getContext($context, "gigabyte"))), 2, ".") . " GB"), "html", null, true);
                echo "
\t    ";
            } else {
                // line 26
                echo "\t        ";
                echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, ((isset($context["bytes"]) ? $context["bytes"] : $this->getContext($context, "bytes")) / (isset($context["terabyte"]) ? $context["terabyte"] : $this->getContext($context, "terabyte"))), 2, ".") . " TB"), "html", null, true);
                echo "
\t    ";
            }
            // line 28
            echo "
\t";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle::macro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 28,  128 => 26,  122 => 24,  120 => 23,  115 => 22,  113 => 21,  108 => 20,  106 => 19,  101 => 18,  99 => 17,  96 => 16,  93 => 15,  90 => 14,  87 => 13,  85 => 12,  82 => 11,  79 => 10,  67 => 9,  54 => 5,  40 => 3,  37 => 2,  24 => 1,  19 => 8,);
    }
}
/* {% macro user_link(user, class) %}*/
/*   {% if user %}*/
/* 		<a {% if class %}class="{{ class }}"{% endif %} href="javascript:;" role="show-user" data-toggle="modal" data-target="#modal" data-url="{{ url('admin_user_show', {id:user.id}) }}">{{ user.nickname }}</a>*/
/* 	{% else %}*/
/* 	  <span class="text-muted">用户已删除</span>*/
/* 	{% endif %}*/
/* {% endmacro %}*/
/* */
/* {% macro bytesToSize(bytes) %}*/
/* 	{% spaceless %}*/
/* 	    */
/* 	    {% set kilobyte = 1024 %}*/
/* 	    {% set megabyte = kilobyte * 1024 %}*/
/* 	    {% set gigabyte = megabyte * 1024 %}*/
/* 	    {% set terabyte = gigabyte * 1024 %}*/
/* */
/* 	    {% if bytes < kilobyte %}*/
/* 	        {{ bytes ~ ' B' }}*/
/* 	    {% elseif bytes < megabyte %}*/
/* 	        {{ (bytes / kilobyte)|number_format(2, '.') ~ ' KB' }}*/
/* 	    {% elseif bytes < gigabyte %}*/
/* 	        {{ (bytes / megabyte)|number_format(2, '.') ~ ' MB' }}*/
/* 	    {% elseif bytes < terabyte %}*/
/* 	        {{ (bytes / gigabyte)|number_format(2, '.') ~ ' GB' }}*/
/* 	    {% else %}*/
/* 	        {{ (bytes / terabyte)|number_format(2, '.') ~ ' TB' }}*/
/* 	    {% endif %}*/
/* */
/* 	{% endspaceless %}*/
/* {% endmacro %}*/
/* */
