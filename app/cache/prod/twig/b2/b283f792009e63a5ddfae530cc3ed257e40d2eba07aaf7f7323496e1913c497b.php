<?php

/* TopxiaWebBundle:Article:popular-articles-block.html.twig */
class __TwigTemplate_f86f1d1f103fa6a8a7d620a7c5388a19b0f2ba847afe9db57ff4bb16882772a9 extends Twig_Template
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
        echo "<div class=\"panel panel-default hot-article\">
  <div class=\"panel-heading\">
    <h3 class=\"panel-title\"><i class=\"es-icon es-icon-whatshot\"></i>热门资讯</h3>
  </div>
  <div class=\"panel-body\">
    ";
        // line 6
        if ((isset($context["articles"]) ? $context["articles"] : null)) {
            // line 7
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : null));
            foreach ($context['_seq'] as $context["key"] => $context["article"]) {
                // line 8
                echo "          <div class=\"media media-number\">
            <div class=\"media-left\">
              <span class=\"num\">";
                // line 10
                echo twig_escape_filter($this->env, ($context["key"] + 1), "html", null, true);
                echo "</span>
            </div>
            <div class=\"media-body\">
              <a class=\"link-dark\" href=\"";
                // line 13
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_detail", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
                echo "\">";
                echo $this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute($context["article"], "title", array()), 20);
                echo "</a>
            </div>
          </div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "    ";
        } else {
            // line 18
            echo "      <div class=\"empty\">暂无热门资讯</div>
    ";
        }
        // line 20
        echo "  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Article:popular-articles-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 20,  60 => 18,  57 => 17,  43 => 13,  37 => 10,  33 => 8,  28 => 7,  26 => 6,  19 => 1,);
    }
}
/* <div class="panel panel-default hot-article">*/
/*   <div class="panel-heading">*/
/*     <h3 class="panel-title"><i class="es-icon es-icon-whatshot"></i>热门资讯</h3>*/
/*   </div>*/
/*   <div class="panel-body">*/
/*     {% if articles %}*/
/*       {% for key,article in articles %}*/
/*           <div class="media media-number">*/
/*             <div class="media-left">*/
/*               <span class="num">{{ key+1 }}</span>*/
/*             </div>*/
/*             <div class="media-body">*/
/*               <a class="link-dark" href="{{ path('article_detail', { id:article.id }) }}" title="{{ article.title }}">{{ article.title|plain_text(20) }}</a>*/
/*             </div>*/
/*           </div>*/
/*       {% endfor %}*/
/*     {% else %}*/
/*       <div class="empty">暂无热门资讯</div>*/
/*     {% endif %}*/
/*   </div>*/
/* </div>*/
