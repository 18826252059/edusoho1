<?php

/* TopxiaMobileBundleV2:Article:list.item.html.twig */
class __TwigTemplate_c7fb676ac07fa59b3c204a94a9335524c7060f03d9e51493fdf018f8da3c1b47 extends Twig_Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["latestArticles"]) ? $context["latestArticles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["latestArticle"]) {
            // line 2
            echo "      <li class=\"table-view-cell media\" style=\"padding-right:45px;\">
        <a href=\"/mapi_v2/articleApp/detail/";
            // line 3
            echo twig_escape_filter($this->env, $this->getAttribute($context["latestArticle"], "id", array()), "html", null, true);
            echo "\" data-transition=\"slide-in\">
          ";
            // line 4
            if ($this->getAttribute($context["latestArticle"], "thumb", array())) {
                echo " 
            <img class=\"media-object pull-right\" width=\"114\" height=\"65\" src=\"";
                // line 5
                echo twig_escape_filter($this->env, $this->getAttribute($context["latestArticle"], "thumb", array()), "html", null, true);
                echo "\">
          ";
            }
            // line 6
            echo " 
          <div class=\"media-body\">
            <p class=\"body-title\">";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["latestArticle"], "title", array()), "html", null, true);
            echo "</p>
            <p class=\"subtitle\">";
            // line 9
            echo $this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute($context["latestArticle"], "body", array()), 150);
            echo "</p>
            <p class=\"small\">";
            // line 10
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["latestArticle"], "publishedTime", array()), "Y-m-d H:i"), "html", null, true);
            echo "</p>
          </div>
        </a>
      </li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['latestArticle'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "TopxiaMobileBundleV2:Article:list.item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 10,  47 => 9,  43 => 8,  39 => 6,  34 => 5,  30 => 4,  26 => 3,  23 => 2,  19 => 1,);
    }
}
/* {% for latestArticle in latestArticles %}*/
/*       <li class="table-view-cell media" style="padding-right:45px;">*/
/*         <a href="/mapi_v2/articleApp/detail/{{ latestArticle.id }}" data-transition="slide-in">*/
/*           {% if latestArticle.thumb %} */
/*             <img class="media-object pull-right" width="114" height="65" src="{{ latestArticle.thumb }}">*/
/*           {% endif%} */
/*           <div class="media-body">*/
/*             <p class="body-title">{{ latestArticle.title }}</p>*/
/*             <p class="subtitle">{{ latestArticle.body|plain_text(150) }}</p>*/
/*             <p class="small">{{ latestArticle.publishedTime|date('Y-m-d H:i') }}</p>*/
/*           </div>*/
/*         </a>*/
/*       </li>*/
/* {% endfor %}*/
