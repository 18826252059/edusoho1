<?php

/* TopxiaWebBundle:Course/Note:notes-list.html.twig */
class __TwigTemplate_faf0291d9b4ab05f6d038b799d1e3a569019e1a3856d9c28013624d15d8aa608 extends Twig_Template
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
        $context["web_macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "TopxiaWebBundle:Course/Note:notes-list.html.twig", 1);
        // line 2
        $this->env->getExtension('topxia_web_twig')->loadScript("course/note/like");
        // line 3
        echo "
";
        // line 4
        if ((isset($context["notes"]) ? $context["notes"] : null)) {
            // line 5
            echo "<div class=\"note-list\" id=\"note-list\">
  ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["notes"]) ? $context["notes"] : null));
            $context['_iterated'] = false;
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
            foreach ($context['_seq'] as $context["_key"] => $context["note"]) {
                // line 7
                echo "    ";
                $context["user"] = (($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["note"], "userId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["note"], "userId", array()), array(), "array"), null)) : (null));
                // line 8
                echo "    ";
                $context["userLike"] = (($this->getAttribute((isset($context["noteLikes"]) ? $context["noteLikes"] : null), $this->getAttribute($context["note"], "id", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["noteLikes"]) ? $context["noteLikes"] : null), $this->getAttribute($context["note"], "id", array()), array(), "array"), null)) : (null));
                // line 9
                echo "    ";
                $this->loadTemplate("TopxiaWebBundle:Course/Note:note-list-item.html.twig", "TopxiaWebBundle:Course/Note:notes-list.html.twig", 9)->display($context);
                // line 10
                echo "  ";
                $context['_iterated'] = true;
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            if (!$context['_iterated']) {
                // line 11
                echo "    <div class=\"empty\">暂无笔记记录</div>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['note'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "</div>

<nav class=\"text-center\">
  ";
            // line 16
            echo $context["web_macro"]->getpaginator((isset($context["paginator"]) ? $context["paginator"] : null));
            echo "
</nav>
";
        } else {
            // line 19
            echo "\t<div class=\"note-list\" id=\"note-list\">
\t\t<div class=\"empty\">暂无笔记记录</div>
\t</div>
";
        }
        // line 23
        echo "
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course/Note:notes-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 23,  89 => 19,  83 => 16,  78 => 13,  71 => 11,  58 => 10,  55 => 9,  52 => 8,  49 => 7,  31 => 6,  28 => 5,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% import "TopxiaWebBundle::macro.html.twig" as web_macro %}*/
/* {% do load_script('course/note/like')%}*/
/* */
/* {% if notes %}*/
/* <div class="note-list" id="note-list">*/
/*   {% for note in notes %}*/
/*     {% set user = users[note.userId]|default(null) %}*/
/*     {% set userLike = noteLikes[note.id]|default(null) %}*/
/*     {% include 'TopxiaWebBundle:Course/Note:note-list-item.html.twig'%}*/
/*   {% else %}*/
/*     <div class="empty">暂无笔记记录</div>*/
/*   {% endfor %}*/
/* </div>*/
/* */
/* <nav class="text-center">*/
/*   {{ web_macro.paginator(paginator) }}*/
/* </nav>*/
/* {% else %}*/
/* 	<div class="note-list" id="note-list">*/
/* 		<div class="empty">暂无笔记记录</div>*/
/* 	</div>*/
/* {% endif %}*/
/* */
/* */
