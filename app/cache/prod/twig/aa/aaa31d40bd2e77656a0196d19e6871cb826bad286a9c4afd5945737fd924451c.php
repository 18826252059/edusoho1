<?php

/* DoctrineBundle:Collector:explain.html.twig */
class __TwigTemplate_1cfbed2b5eaf295a05d5fa3add0dcb7407b7086d1b7ad305cd922ac5218360ee extends Twig_Template
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
        echo "<strong>Explanation:</strong>

";
        // line 3
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), 0, array(), "array")) > 1)) {
            // line 4
            echo "    ";
            // line 5
            echo "    <table style=\"margin: 5px 0;\">
        <thead>
            <tr>
                ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter($this->getAttribute((isset($context["data"]) ? $context["data"] : null), 0, array(), "array")));
            foreach ($context['_seq'] as $context["_key"] => $context["label"]) {
                // line 9
                echo "                    <th>";
                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                echo "</th>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['label'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "            </tr>
        </thead>
        <tbody>
            ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 15
                echo "            <tr>
                ";
                // line 16
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["row"]);
                foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                    // line 17
                    echo "                    <td>";
                    echo twig_escape_filter($this->env, twig_replace_filter($context["item"], array("," => ", ")), "html", null, true);
                    echo "</td>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 19
                echo "            </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "        </tbody>
    </table>
";
        } else {
            // line 24
            echo "    ";
            // line 25
            echo "    <pre style=\"margin: 5px 0;\">";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 27
                echo twig_escape_filter($this->env, twig_first($this->env, $context["row"]), "html", null, true);
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "</pre>
";
        }
    }

    public function getTemplateName()
    {
        return "DoctrineBundle:Collector:explain.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 29,  90 => 27,  86 => 26,  84 => 25,  82 => 24,  77 => 21,  70 => 19,  61 => 17,  57 => 16,  54 => 15,  50 => 14,  45 => 11,  36 => 9,  32 => 8,  27 => 5,  25 => 4,  23 => 3,  19 => 1,);
    }
}
/* <strong>Explanation:</strong>*/
/* */
/* {% if data[0]|length > 1 %}*/
/*     {# The platform returns a table for the explanation (e.g. MySQL), display all columns #}*/
/*     <table style="margin: 5px 0;">*/
/*         <thead>*/
/*             <tr>*/
/*                 {% for label in data[0]|keys %}*/
/*                     <th>{{ label }}</th>*/
/*                 {% endfor %}*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*             {% for row in data %}*/
/*             <tr>*/
/*                 {% for key, item in row %}*/
/*                     <td>{{ item|replace({',': ', '}) }}</td>*/
/*                 {% endfor %}*/
/*             </tr>*/
/*             {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* {% else %}*/
/*     {# The Platform returns a single column for a textual explanation (e.g. PostgreSQL), display all lines #}*/
/*     <pre style="margin: 5px 0;">*/
/*         {%- for row in data -%}*/
/*             {{ row|first }}{{ "\n" }}*/
/*         {%- endfor -%}*/
/*     </pre>*/
/* {% endif %}*/
/* */
