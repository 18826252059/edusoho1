<?php

/* CustomWebBundle:Course:lesson.html.twig */
class __TwigTemplate_a70401aee23b1919e242f959da23273d483229594ff3f23085ff745c8e0d6536 extends Twig_Template
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
        echo "

<div class=\"swiper-slide\">
    ";
        // line 4
        $context["index"] = 1;
        // line 5
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lessons"]) ? $context["lessons"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["lesson"]) {
            // line 6
            echo "        ";
            if (((($this->getAttribute($context["lesson"], "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["lesson"], "type", array()), "")) : ("")) == "chapter")) {
                // line 7
                echo "            <div class=\"g-h3 head-line g-mt10\">
                <span>";
                // line 8
                echo twig_escape_filter($this->env, $this->getAttribute($context["lesson"], "title", array()), "html", null, true);
                echo "</span>
            </div>
            <div class=\"course-item\">
                <ul class=\"g-list\">
                    ";
                // line 12
                $context["num"] = 1;
                // line 13
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["lessons"]) ? $context["lessons"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["tmplesson"]) {
                    // line 14
                    echo "                        ";
                    if (((((($this->getAttribute($context["tmplesson"], "chapterId", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["tmplesson"], "chapterId", array()), "")) : ("")) == $this->getAttribute($context["lesson"], "id", array())) && ((($this->getAttribute($context["tmplesson"], "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["tmplesson"], "type", array()), "")) : ("")) == "video")) && ((($this->getAttribute($context["tmplesson"], "status", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["tmplesson"], "status", array()), "")) : ("")) == "published"))) {
                        // line 15
                        echo "                            <li>
                                <span class=\"list-num\">";
                        // line 16
                        echo twig_escape_filter($this->env, (isset($context["num"]) ? $context["num"] : null), "html", null, true);
                        echo "</span>

                                <div class=\"list-div\">
                                    <span class=\"list-title\"><img src=\"";
                        // line 19
                        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/h5/images/ui-play.png"), "html", null, true);
                        echo "\"
                                                                  class=\"ui-play\">";
                        // line 20
                        echo twig_escape_filter($this->env, $this->getAttribute($context["tmplesson"], "title", array()), "html", null, true);
                        echo "</span>
                                    <span class=\"list-time\">";
                        // line 21
                        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->durationFilter($this->getAttribute($context["tmplesson"], "lengthTime", array())), "html", null, true);
                        echo "</span>
                                </div>
                            </li>
                            ";
                        // line 24
                        $context["num"] = ((isset($context["num"]) ? $context["num"] : null) + 1);
                        // line 25
                        echo "                        ";
                    }
                    // line 26
                    echo "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tmplesson'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 27
                echo "                </ul>
            </div>
        ";
            } elseif ((($this->getAttribute(            // line 29
$context["lesson"], "type", array()) == "video") && ($this->getAttribute($context["lesson"], "chapterId", array()) == "0"))) {
                // line 30
                echo "            <div class=\"course-item\">
                <ul class=\"g-list\">
                    <li>
                        <span class=\"list-num\">";
                // line 33
                echo twig_escape_filter($this->env, (isset($context["index"]) ? $context["index"] : null), "html", null, true);
                echo "</span>

                        <div class=\"list-div\">
                            <span class=\"list-title\"><img src=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/h5/images/ui-play.png"), "html", null, true);
                echo "\"
                                                          class=\"ui-play\">";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute($context["lesson"], "title", array()), "html", null, true);
                echo "</span>
                            <span class=\"list-time\">";
                // line 38
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->durationFilter($this->getAttribute($context["lesson"], "length", array())), "html", null, true);
                echo "</span>
                        </div>
                    </li>
                </ul>
            </div>
            ";
                // line 43
                $context["index"] = ((isset($context["index"]) ? $context["index"] : null) + 1);
                // line 44
                echo "        ";
            }
            // line 45
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lesson'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "CustomWebBundle:Course:lesson.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 46,  126 => 45,  123 => 44,  121 => 43,  113 => 38,  109 => 37,  105 => 36,  99 => 33,  94 => 30,  92 => 29,  88 => 27,  82 => 26,  79 => 25,  77 => 24,  71 => 21,  67 => 20,  63 => 19,  57 => 16,  54 => 15,  51 => 14,  46 => 13,  44 => 12,  37 => 8,  34 => 7,  31 => 6,  26 => 5,  24 => 4,  19 => 1,);
    }
}
/* */
/* */
/* <div class="swiper-slide">*/
/*     {% set index=1 %}*/
/*     {% for lesson in lessons %}*/
/*         {% if lesson.type|default('')=='chapter' %}*/
/*             <div class="g-h3 head-line g-mt10">*/
/*                 <span>{{ lesson.title }}</span>*/
/*             </div>*/
/*             <div class="course-item">*/
/*                 <ul class="g-list">*/
/*                     {% set num=1 %}*/
/*                     {% for tmplesson in lessons %}*/
/*                         {% if tmplesson.chapterId|default('')==lesson.id and tmplesson.type|default('')=='video' and tmplesson.status|default('')=='published' %}*/
/*                             <li>*/
/*                                 <span class="list-num">{{ num }}</span>*/
/* */
/*                                 <div class="list-div">*/
/*                                     <span class="list-title"><img src="{{ asset('themes/h5/images/ui-play.png') }}"*/
/*                                                                   class="ui-play">{{ tmplesson.title }}</span>*/
/*                                     <span class="list-time">{{ tmplesson.lengthTime|duration }}</span>*/
/*                                 </div>*/
/*                             </li>*/
/*                             {% set num=num+1 %}*/
/*                         {% endif %}*/
/*                     {% endfor %}*/
/*                 </ul>*/
/*             </div>*/
/*         {% elseif lesson.type=='video'and lesson.chapterId=='0' %}*/
/*             <div class="course-item">*/
/*                 <ul class="g-list">*/
/*                     <li>*/
/*                         <span class="list-num">{{ index }}</span>*/
/* */
/*                         <div class="list-div">*/
/*                             <span class="list-title"><img src="{{ asset('themes/h5/images/ui-play.png') }}"*/
/*                                                           class="ui-play">{{ lesson.title }}</span>*/
/*                             <span class="list-time">{{ lesson.length|duration }}</span>*/
/*                         </div>*/
/*                     </li>*/
/*                 </ul>*/
/*             </div>*/
/*             {% set index=index+1 %}*/
/*         {% endif %}*/
/*     {% endfor %}*/
/* */
/* </div>*/
/* */
