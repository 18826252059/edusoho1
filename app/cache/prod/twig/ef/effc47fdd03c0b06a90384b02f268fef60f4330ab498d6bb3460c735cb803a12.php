<?php

/* CustomWebBundle:Course:course-news.html.twig */
class __TwigTemplate_9a8f25846396843518520a8dbe1b2891631c8ec3846cac50d92535548612454c extends Twig_Template
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
        if ((isset($context["news"]) ? $context["news"] : null)) {
            // line 2
            echo "    <div class=\"g-h3 head-line g-mt10\">
        <span>相关资讯</span>
    </div>
    <div class=\"course-item g-mb10\">
        <ul class=\"c-detail\">
            ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["news"]) ? $context["news"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["new"]) {
                // line 8
                echo "                <a href=\"lpmas://yunketang/news/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "articleId", array()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "articleType", array()), "html", null, true);
                echo "\">
                    <li>
                        <div class=\"detail-item\">
                            <div class=\"d-title\">";
                // line 11
                echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "articleTitle", array()), "html", null, true);
                echo "</div>
                            <div class=\"d-date\">";
                // line 12
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["new"], "pubDate", array()), "Y-m-d"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "sourceName", array()), "html", null, true);
                echo "</div>
                        </div>
                        <div class=\"g-img\">
                            ";
                // line 15
                if ($this->getAttribute($context["new"], "pictureList", array())) {
                    // line 16
                    echo "                                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["new"], "pictureList", array()));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
                        // line 17
                        echo "                                    ";
                        if (($this->getAttribute($context["loop"], "index", array()) == 1)) {
                            // line 18
                            echo "                                        <img src=\"";
                            echo twig_escape_filter($this->env, $context["img"], "html", null, true);
                            echo "\"/>
                                    ";
                        }
                        // line 20
                        echo "                                ";
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 21
                    echo "                            ";
                }
                // line 22
                echo "                        </div>
                    </li>
                </a>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['new'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "        </ul>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "CustomWebBundle:Course:course-news.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 26,  99 => 22,  96 => 21,  82 => 20,  76 => 18,  73 => 17,  55 => 16,  53 => 15,  45 => 12,  41 => 11,  32 => 8,  28 => 7,  21 => 2,  19 => 1,);
    }
}
/* {% if news %}*/
/*     <div class="g-h3 head-line g-mt10">*/
/*         <span>相关资讯</span>*/
/*     </div>*/
/*     <div class="course-item g-mb10">*/
/*         <ul class="c-detail">*/
/*             {% for new in news %}*/
/*                 <a href="lpmas://yunketang/news/{{ new.articleId }}/{{ new.articleType }}">*/
/*                     <li>*/
/*                         <div class="detail-item">*/
/*                             <div class="d-title">{{ new.articleTitle }}</div>*/
/*                             <div class="d-date">{{ new.pubDate|date('Y-m-d') }} {{ new.sourceName }}</div>*/
/*                         </div>*/
/*                         <div class="g-img">*/
/*                             {% if new.pictureList %}*/
/*                                 {% for img in  new.pictureList %}*/
/*                                     {% if loop.index==1 %}*/
/*                                         <img src="{{ img }}"/>*/
/*                                     {% endif %}*/
/*                                 {% endfor %}*/
/*                             {% endif %}*/
/*                         </div>*/
/*                     </li>*/
/*                 </a>*/
/*             {% endfor %}*/
/*         </ul>*/
/*     </div>*/
/* {% endif %}*/
