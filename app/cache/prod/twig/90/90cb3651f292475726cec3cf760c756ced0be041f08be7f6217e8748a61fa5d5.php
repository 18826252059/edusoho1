<?php

/* CustomWebBundle:Classroom:attachment.html.twig */
class __TwigTemplate_fa44aa786b4935b1cac4bbe38ed37a9ad7874b9d40ad40a9272e15738ad78db2 extends Twig_Template
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
        $context["web_macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "CustomWebBundle:Classroom:attachment.html.twig", 1);
        // line 2
        echo "<div class=\"left-h2\">相关附件</div>
<section class=\"bg-df9 g-mb10 last-bor\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["files"]) ? $context["files"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
            // line 5
            echo "    <div class=\"courseDetail\">
        <a href=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_attachment_download", array("fileId" => $this->getAttribute($context["file"], "id", array()))), "html", null, true);
            echo "\" class=\"courseList1\">
            <img src=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/h5/images/update/about-video.png"), "html", null, true);
            echo "\" width=\"100\" height=\"80\">
            <div class=\"list-right\">
                <p class=\"s-course-name overline2\">";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "filename", array()), "html", null, true);
            echo "</p>
                <p class=\"s-course-progress\">
                    <span class=\"c-main\">";
            // line 11
            echo $context["web_macro"]->getbytesToSize($this->getAttribute($context["file"], "size", array()));
            echo "</span>
                </p>
            </div>
        </a>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "</section>";
    }

    public function getTemplateName()
    {
        return "CustomWebBundle:Classroom:attachment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 17,  46 => 11,  41 => 9,  36 => 7,  32 => 6,  29 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% import "TopxiaWebBundle::macro.html.twig" as web_macro %}*/
/* <div class="left-h2">相关附件</div>*/
/* <section class="bg-df9 g-mb10 last-bor">*/
/*     {% for file in files %}*/
/*     <div class="courseDetail">*/
/*         <a href="{{ path('classroom_attachment_download', {fileId:file.id}) }}" class="courseList1">*/
/*             <img src="{{ asset('themes/h5/images/update/about-video.png') }}" width="100" height="80">*/
/*             <div class="list-right">*/
/*                 <p class="s-course-name overline2">{{ file.filename }}</p>*/
/*                 <p class="s-course-progress">*/
/*                     <span class="c-main">{{ web_macro.bytesToSize(file.size) }}</span>*/
/*                 </p>*/
/*             </div>*/
/*         </a>*/
/*     </div>*/
/*     {% endfor %}*/
/* </section>*/
