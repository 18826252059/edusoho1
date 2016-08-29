<?php

/* CustomWebBundle:Course:question-answer.html.twig */
class __TwigTemplate_172cada3465ca8c5aad205699ceb31457f812a4fc1bfcd256fc6b0f00b75d5fb extends Twig_Template
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
        if ((isset($context["answer"]) ? $context["answer"] : null)) {
            // line 2
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["answer"]) ? $context["answer"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
                // line 3
                echo "<div class=\"head-img\">
    <img src=\"";
                // line 4
                echo twig_escape_filter($this->env, (($this->getAttribute($context["a"], "avatarUrl", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["a"], "avatarUrl", array()), $this->env->getExtension('assets')->getAssetUrl("themes/h5/images/update/170x170.jpg"))) : ($this->env->getExtension('assets')->getAssetUrl("themes/h5/images/update/170x170.jpg"))), "html", null, true);
                echo "\" onerror=\"javascript:this.src='";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/h5/images/update/170x170.jpg"), "html", null, true);
                echo "';\"/>
</div>
<span class=\"num\"><sub>";
                // line 6
                echo twig_escape_filter($this->env, (isset($context["answerCount"]) ? $context["answerCount"] : null), "html", null, true);
                echo "</sub></span>
<div class=\"info-box\">
    <p> ";
                // line 8
                echo twig_escape_filter($this->env, (($this->getAttribute($context["a"], "nickName", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["a"], "nickName", array()), "")) : ("")), "html", null, true);
                echo "</p>

    <div class=\"info-content\">
        ";
                // line 11
                echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "answerContent", array()), "html", null, true);
                echo "
    </div>
</div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "CustomWebBundle:Course:question-answer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 11,  41 => 8,  36 => 6,  29 => 4,  26 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if answer %}*/
/*     {% for a in answer %}*/
/* <div class="head-img">*/
/*     <img src="{{ a.avatarUrl|default(asset('themes/h5/images/update/170x170.jpg')) }}" onerror="javascript:this.src='{{ asset('themes/h5/images/update/170x170.jpg') }}';"/>*/
/* </div>*/
/* <span class="num"><sub>{{ answerCount }}</sub></span>*/
/* <div class="info-box">*/
/*     <p> {{ a.nickName|default('') }}</p>*/
/* */
/*     <div class="info-content">*/
/*         {{ a.answerContent }}*/
/*     </div>*/
/* </div>*/
/*     {% endfor %}*/
/* {% endif %}*/
